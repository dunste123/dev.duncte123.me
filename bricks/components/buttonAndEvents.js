class ButtonAndEvents extends HTMLElement {
    constructor() {
        super();
        this.counter = 0;
        this.auto = { checked: false };

        setInterval(() => {
            if (this.auto.checked) {
                this.sendAddBrick();
            }
        }, 1000)
    }

    connectedCallback() {
        this.render();
    }

    addBricks(count) {
        for (let i = 0; i < count; i++) {
            this.sendAddBrick();
        }
    }

    sendAddBrick() {
        const event = new Event('app-add-brick');

        const newDiv = document.createElement('div');
        newDiv.innerHTML = this.counter++;
        newDiv.classList.add('brick');

        switch (Math.floor(Math.random() * 4)) {
            case 1:
                newDiv.style.setProperty('--brick-color', 'darkblue');
                break;
            case 2:
                newDiv.style.setProperty('--brick-color', 'darkgreen');
                break;
            case 3:
                newDiv.style.setProperty('--brick-color', 'purple');
                break;
        }

        event.brick = newDiv;

        this.dispatchEvent(event);
    }

    render() {
        const btn = document.createElement('button');
        btn.innerHTML = 'Add Crate';

        this.auto = document.createElement('input');
        this.auto.setAttribute('type', 'checkbox');
        this.auto.setAttribute('checked', '');
        this.auto.setAttribute('id', 'autoCb');

        const label = document.createElement('label');
        label.htmlFor = this.auto.id;
        label.innerHTML = 'Auto add crates';

        btn.addEventListener('click', () => {
            this.sendAddBrick();
        });

        this.append(btn, this.auto, label);
    }
}

customElements.define('app-button-and-events', ButtonAndEvents);
