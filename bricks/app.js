const list = document.getElementById('brick-list');
const buttons = document.getElementById('button');

buttons.addEventListener('app-add-brick', (e) => {
    const brick = e.brick;

    list.addBrick(brick);
});

buttons.addBricks(64);
