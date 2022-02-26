class AppBrickList extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.brickList = document.createElement('div');
        this.brickList.classList.add('brick-list')

        this.append(this.brickList);

        setInterval(() => {
            this.removeFirstBrick()
        }, 1000);
    }

    addBrick(el) {
        this.brickList.append(el);
    }

    removeFirstBrick() {
        if (this.brickList.firstChild) {
            this.brickList.firstChild.remove();
        }
    }
}

customElements.define('app-brick-list', AppBrickList);
