<!DOCTYPE html>
<html>
<head>
    <title>MU Online Clone</title>
    <style>
        canvas {
            background-color: #f0f0f0;
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
    <canvas id="gameCanvas" width="800" height="600"></canvas>
    <script>
        const canvas = document.getElementById('gameCanvas');
        const ctx = canvas.getContext('2d');

        // Game variables
        let player = { x: 400, y: 300, width: 30, height: 30, color: 'blue', health: 100, damage: 10 };
        let monsters = [];
        let loot = [];
        const damageRadius = 50; // Radius around the player where damage can be applied
        let showDamageCircle = false; // Flag to control damage circle visibility

        // Key handling
        const keys = {};
        document.addEventListener('keydown', (event) => { keys[event.code] = true; });
        document.addEventListener('keyup', (event) => { keys[event.code] = false; });

        // Game loop
        function gameLoop() {
            updatePlayer();
            updateMonsters();
            draw();
            requestAnimationFrame(gameLoop);
        }

        function updatePlayer() {
            if (keys['ArrowUp']) player.y -= 5;
            if (keys['ArrowDown']) player.y += 5;
            if (keys['ArrowLeft']) player.x -= 5;
            if (keys['ArrowRight']) player.x += 5;
        }

        function spawnMonster() {
            let monster = { x: Math.random() * 800, y: Math.random() * 600, width: 20, height: 20, color: 'red', health: 50, hit: false };
            monsters.push(monster);
        }

        function updateMonsters() {
            monsters.forEach((monster, index) => {
                // Basic AI: move towards player
                let dx = player.x - monster.x;
                let dy = player.y - monster.y;
                let dist = Math.sqrt(dx * dx + dy * dy);

                // Prevent monster from overlapping with the player
                let combinedHalfWidths = (player.width / 2 + monster.width / 2);
                let combinedHalfHeights = (player.height / 2 + monster.height / 2);
                if (dist > combinedHalfWidths && dist > combinedHalfHeights) {
                    if (dist > 0) {
                        monster.x += dx / dist * 2; // Move towards the player
                        monster.y += dy / dist * 2;
                    }
                }

                // Check if the monster's health reaches 0
                if (monster.health <= 0) {
                    monsters.splice(index, 1); // Remove the monster from the array
                    spawnLoot(monster.x, monster.y); // Optionally spawn loot
                }

                // Reset hit flag after a short delay
                if (monster.hit) {
                    setTimeout(() => { monster.hit = false; }, 200);
                }
            });
        }

        // Spawn loot where the monster died
        function spawnLoot(x, y) {
            let newLoot = { x: x, y: y, width: 10, height: 10, color: 'green' };
            loot.push(newLoot);
        }

        function draw() {
            // Clear canvas
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Draw player
            ctx.fillStyle = player.color;
            ctx.fillRect(player.x, player.y, player.width, player.height);

            // Draw monsters
            monsters.forEach(monster => {
                ctx.fillStyle = monster.hit ? 'yellow' : monster.color; // Change color to yellow when hit
                ctx.fillRect(monster.x, monster.y, monster.width, monster.height);
            });

            // Draw loot
            loot.forEach(item => {
                ctx.fillStyle = item.color;
                ctx.fillRect(item.x, item.y, item.width, item.height);
            });

            // Show the damage circle only when the flag is true
            if (showDamageCircle) {
                ctx.beginPath();
                ctx.arc(player.x + player.width / 2, player.y + player.height / 2, damageRadius, 0, Math.PI * 2);
                ctx.strokeStyle = 'rgba(0, 0, 255, 0.5)';
                ctx.stroke();
            }
        }

        // Damage nearby monsters every second
        function applyDamage() {
            monsters.forEach(monster => {
                let dx = (player.x + player.width / 2) - (monster.x + monster.width / 2);
                let dy = (player.y + player.height / 2) - (monster.y + monster.height / 2);
                let dist = Math.sqrt(dx * dx + dy * dy);

                // If monster is within damage radius, apply damage
                if (dist <= damageRadius) {
                    monster.health -= player.damage;
                    monster.hit = true; // Mark the monster as hit to show damage indication
                }
            });

            // Show damage circle for a brief moment
            showDamageCircle = true;
            setTimeout(() => {
                showDamageCircle = false;
            }, 200); // Show the circle for 200ms
        }

        // Start game
        setInterval(spawnMonster, 3000); // Spawn monsters every 3 seconds
        setInterval(applyDamage, 1000); // Apply damage to nearby monsters every 1 second
        requestAnimationFrame(gameLoop);
    </script>
</body>
</html>
