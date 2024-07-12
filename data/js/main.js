$(document).ready(function() {
    console.log("game.js: loaded");

    $('#enemyDemon').on('click', '#fight', function() {
        fightEnemyDemon();
    });
});

function fightEnemyDemon() {
    console.log("action: fight enemy");

    // do server call then modify stats

    if (hitEnemyDemon(50)) {
        setTimeout(function() {
            getHitByDemon(1);
        }, 300);
    }
}

function hitEnemyDemon(damage) {
    addCombatLog('player-hit', damage);

    // update enemy demon UI stats
    var newHp = $('#enemyDemon .hp').html();
    newHp = (newHp>=damage)?newHp - damage:0;

    // disable button if dead
    if (!newHp) {
        $('#enemyDemon').addClass('dead');
        $('#fight').attr('disabled', 'disabled');
        addCombatLog('enemy-death');
    }

    $('#enemyDemon .hp').addClass("text-warning").html(newHp);

    var newPercentage = 100 * $('#enemyDemon .hp').html() / $('#enemyDemon .maxhp').html();
    $('#enemyDemon .progress div').addClass("bg-warning").css({width: newPercentage+"%"});
 
    // Add shake effect
    $('#enemyDemon').addClass('shake');

    setTimeout(function() {
        $('#enemyDemon .hp').removeClass("text-warning");
        $('#enemyDemon .progress div').removeClass("bg-warning");
        $('#enemyDemon').removeClass('shake');
    }, 200);

    return newHp;
}

function getHitByDemon(damage) {
    addCombatLog('enemy-hit', damage);

    // update my demon UI stats
    var newHp = $('#myDemon .hp').html();
    newHp = (newHp>=damage)?newHp - damage:0;

    // disable button if dead
    if (!newHp) {
        $('#myDemon').addClass('dead');
        $('#run').attr('disabled', 'disabled');
        addCombatLog('player-death');
    }

    $('#myDemon .hp').addClass("text-warning").html(newHp);

    var newPercentage = 100 * $('#myDemon .hp').html() / $('#myDemon .maxhp').html();
    $('#myDemon .progress div').addClass("bg-warning").css({width: newPercentage+"%"});
 
    // Add shake effect
    $('#myDemon').addClass('shake');

    setTimeout(function() {
        $('#myDemon .hp').removeClass("text-warning");
        $('#myDemon .progress div').removeClass("bg-warning");
        $('#myDemon').removeClass('shake');
    }, 200);

    return newHp;
}

function addCombatLog(type, amount) {
    console.log(type + ' : ' + amount);

    liclass = '';
    message = '';
    switch(type) {
    case 'enemy-hit':
        message = 'Enemy hit for <span>'+amount+'</span> damage.';
        liclass = "enemy-hit text-end";
        break;
    case 'enemy-death':
        message = 'Enemy demon died.';
        liclass = 'text-end';
        break;
    case 'player-hit':
        message = 'You did <span>'+amount+'</span> damage.';
        liclass = "player-hit";
        break;
    case 'player-death':
        message = 'Your demon died.';
        liclass = '';
        break;
    }

    $("#combatHistory").append('<li class="list-group-item '+liclass+'">'+message+'</li>');

    // Scroll to the bottom
    $('#combatHistory').scrollTop($('#combatHistory')[0].scrollHeight);
}