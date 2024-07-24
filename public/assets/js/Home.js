const gallaryCotainer = document.querySelector('.glary-container');
const gallaryCotrolsContainer = document.querySelector('.gallary-cotroles');
const gallaryControls = ['previous', 'next'];
const gallaryItems = document.querySelectorAll('.gallary-item');

class Carousel {
    constructor(container, items, controls) {
        this.carouselContainer = container; // Fixed typo here
        this.carouselControls = controls;
        this.carouselArry = [...items];
    }

    updateGallary() {
        this.carouselArry.forEach(el => el.classList.remove('item1', 'item2', 'item3', 'item4', 'item5'));

        this.carouselArry.slice(0, 5).forEach((el, i) => {
            el.classList.add(`item${i+1}`); // Fixed string interpolation here
        });
    }

    setCurrentState(direction) {
        if (direction.className === 'gallary-controls-previous') {
            this.carouselArry.unshift(this.carouselArry.pop());
        } else {
            this.carouselArry.push(this.carouselArry.shift());
        }

        this.updateGallary();
    }

    setControls() {
        this.carouselControls.forEach(control => {
            const button = document.createElement('button');
            button.className = `gallary-controls-${control}`; // Fixed string concatenation here
            button.innerText = control;
            gallaryCotrolsContainer.appendChild(button);
        });
    }

    useControls() {
        const triggers = [...gallaryCotrolsContainer.childNodes];
        triggers.forEach(control => {
            control.addEventListener('click', e => {
                e.preventDefault(); // Fixed preventDefault function call
                this.setCurrentState(control);
            });
        });
    }
}

const exampleCOntrole = new Carousel(gallaryCotainer, gallaryItems, gallaryControls);

exampleCOntrole.setControls();
exampleCOntrole.useControls(); // Added parentheses here