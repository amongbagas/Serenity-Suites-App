const currentPath = window.location.pathname
const lastSlashIndex = currentPath.lastIndexOf('/')
const parentPath = currentPath.substring(0, lastSlashIndex - 6)

const data = [
    {
        name: 'SUPERIOR',
        available: 20,
        facilities: [
            'Room size 32 meters',
            'Bathroom with Shower',
            'Coffe Maker',
            'Air Conditioner',
            'Television 32 inch'
        ],
        image: window.location.host === "" ? parentPath + '/assets/img/superior.jpg' : window.location.origin + '/assets/img/superior.jpg'
    },
    {
        name: 'DELUXE',
        available: 15,
        facilities: [
            'Room size 36 meters',
            'Bathroom with Shower',
            'Coffe Maker',
            'Air Conditioner',
            'Television 34 inch'
        ],
        image: window.location.host === "" ? parentPath + '/assets/img/deluxe.jpg' : window.location.origin + '/assets/img/deluxe.jpg'
    },
    {
        name: 'SUPERIOR TWIN',
        available: 10,
        facilities: [
            'Room size 40 meters',
            'Bathroom with Shower + Bathub',
            'Double Bed',
            'Coffe Maker',
            'Air Conditioner',
            'Television 36 inch'
        ],
        image: window.location.host === "" ? parentPath + '/assets/img/superior-twin.jpg' : window.location.origin + '/assets/img/superior-twin.jpg'
    },
    {
        name: 'DELUXE TWIN',
        available: 5,
        facilities: [
            'Room size 42 meters',
            'Bathroom with Shower + Bathub',
            'Double Bed',
            'Coffe Maker',
            'Air Conditioner',
            'Television 40 inch'
        ],
        image: window.location.host === "" ? parentPath + '/assets/img/deluxe-twin.jpg' : window.location.origin + '/assets/img/deluxe-twin.jpg'
    },
]
const rooms = document.getElementById('rooms')

const handleResizeButton = () => {
    const isLessThan1024 = innerWidth < 1024

    return isLessThan1024 ? true : false
}

data.map(({ name, available, facilities, image }) => {
    console.log(image);
    const div = document.createElement('div')
    div.classList.add('card', 'w-100', 'h-100', 'position-relative', 'mb-5', 'shadow-lg', 'rounded-5');

    div.innerHTML = `
        <div class="card-body m-0 p-0">
            <div class="row flex-wrap">
                <div class="col-md-5">
                    <img 
                        src="${image}"
                        class="card-img-top object-fit-cover w-100 h-100 rounded-start-4 "
                    >
                </div>
                <div class="col-md-4 p-3 mb-5">
                    <h4 class="fw-light">ROOM TYPE:</h4>
                    <h5 class="fw-bold ">${name}</h5>
                    <p class="card-text mb-1 mt-4 fw-bold">Facilities : </p>
                    <ul class="fw-light">
                        ${facilities.map(facilities => `<li>${facilities}</li>`).join(" ")}
                    </ul>
                </div>
                <div class="col-sm px-5 py-3 text-end">
                    <div class="d-none d-lg-block ">
                        <h4 class="card-text fw-light">AVAILABLE</h4>
                        <h1>${available}</h1>
                        <h5>ROOMS</h5>
                    </div>
                    <div id="resize-div" class="${handleResizeButton && 'position-absolute'} pe-4 bottom-0 end-0 py-3">
                        <button id="resize-btn-book-now" type="button" class="btn btn-primary fs-5 rounded-0 fw-light">Book Now</button>
                    </div>
                </div>
            </div>
        </div>`

    rooms.appendChild(div)
})

const resizeDivs = document.querySelectorAll('#resize-div')
const bookNowButtons = document.querySelectorAll('#resize-btn-book-now')

const handleResizeDivsAndButton = () => {

    const isLessThan960 = innerWidth < 772
    console.log(innerWidth);
    resizeDivs.forEach(div => {
        if (isLessThan960) {
            div.classList.add('w-100', 'px-4');
            div.classList.remove('w-50', 'pe-4');
        } else {
            div.classList.add('w-50', 'pe-4');
            div.classList.remove('w-100', 'px-4');
        }
    });

    bookNowButtons.forEach(button => {
        if (isLessThan960) {
            button.classList.add('w-100');
            button.classList.remove('w-50');
        } else {
            button.classList.add('w-50');
            button.classList.remove('w-100');
        }
    });

}

window.addEventListener('resize', handleResizeButton)
window.addEventListener('resize', handleResizeDivsAndButton)




