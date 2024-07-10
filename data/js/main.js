$(document).ready(function() {
    console.log("game.js: loaded");

    $('#enemyDemon').on('click', '#fight', function() {
        fightEnemyDemon();
    });
});

function fightEnemyDemon() {
    console.log("action: fight enemy");

    // do server call then modify stats

    hitEnemyDemon(5);
    setTimeout(function() {
        getHitByDemon(1);
    }, 300); 
}

function hitEnemyDemon(damage) {
    addCombatLog('You did '+damage+' damage.');

    // update enemy demon UI stats
    var newHp = $('#enemyDemon .hp').html();
    newHp = (newHp>=damage)?newHp - damage:0;

    // disable button if dead
    if (!newHp) {
        $('#enemyDemon').addClass('dead');
        $('#fight').fadeOut(0);
        addCombatLog('Enemy demon died.');
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
}

function getHitByDemon(damage) {
    addCombatLog('Enemy hit for '+damage+' damage.');

    // update my demon UI stats
    var newHp = $('#myDemon .hp').html();
    newHp = (newHp>=damage)?newHp - damage:0;

    // disable button if dead
    if (!newHp) {
        $('#myDemon').addClass('dead');
        $('#run').fadeOut(0);
        addCombatLog('Your demon died.');
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
}

function addCombatLog(message, type) {
    console.log(message);
    $("#combatHistory").append('<li class="list-group-item '+type+'">'+message+'</li>');
}