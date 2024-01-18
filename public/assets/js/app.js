//TOGGLE

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
    ".container,.movie-list-item,.navbar-container,.sidebar,.left-menu-icon,.logo a,.background-opacity,.toggle"
);

ball.addEventListener("click", () => {
    items.forEach((item) => {
        item.classList.toggle("active");
    });
    ball.classList.toggle("active");
});


const arrows = document.querySelectorAll(".arrow");
const movieList = document.querySelector(".movie-list");

// Populate Nteflix Data using JSON data
function populateMovieList(data) {
    const movieListHTML = data.map(item => `
        <div class="movie-list-item">
            <img class="movie-list-item-img" src="${item.URL}" alt="">
            <span class="movie-list-item-title">${item.Name}</span>
            <p class="movie-list-item-desc">${item.Description}</p>
            <i class="fa fa-heart" id="wishlist"></i>
            <button class="movie-list-item-button"><a href="${item.link}">Watch</a></button>
        </div>
    `).join('');

    movieList.innerHTML = movieListHTML;
}

// Slider logic
let clickCounter = 0;

arrows.forEach(arrow => {
    arrow.addEventListener("click", () => {
        const itemWidth = 300; // Width of each item
        const containerWidth = movieList.clientWidth; // Width of the container
        const itemsPerPage = Math.floor(containerWidth / itemWidth);

        clickCounter += (arrow.classList.contains("arrow-left") ? -1 : 1);

        if (clickCounter < 0) {
            clickCounter = 0;
        } else if (clickCounter > netflix.length - itemsPerPage) {
            clickCounter = netflix.length - itemsPerPage;
        }

        const translateX = -clickCounter * itemWidth;
        movieList.style.transform = `translateX(${translateX}px)`;
    });
});

// Initialize slider with JSON data
populateMovieList(netflix);



// Apple TV Data
for (var a = 0; a < appleTV.length; a++) {
    document.getElementById('applePlay').innerHTML += `
          <div class="movie-list-item">
                            <img class="movie-list-item-img" src="${appleTV[a].URL}" alt="">
                            <span class="movie-list-item-title">${appleTV[a].Name}</span>
                            <p class="movie-list-item-desc">${appleTV[a].Description}</p>
                            <i class="fa fa-heart" id="wishlist"></i>
                            <button class="movie-list-item-button"><a href="${appleTV[a].link}">Watch</a></button>
                        </div>`
}

// Amazon Prime Data
for (var aP = 0; aP < AmazonPrime.length; aP++) {
    document.getElementById('amazonPrime').innerHTML += `
  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="${AmazonPrime[aP].URl}" alt="">
                    <span class="movie-list-item-title">${AmazonPrime[aP].Name}</span>
                    <p class="movie-list-item-desc">${AmazonPrime[aP].description}</p>
                    <i class="fa fa-heart" id="wishlist"></i>
                    <button class="movie-list-item-button"><a href="${AmazonPrime[aP].link}">Watch</a></button>
                </div>`
}

// Hostar Disney
for (var d = 0; d < disney.length; d++) {
    document.getElementById('disneyHotstar').innerHTML += `
  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="${disney[d].URL}" alt="">
                    <span class="movie-list-item-title">${disney[d].Name}</span>
                    <p class="movie-list-item-desc">${disney[d].Description}</p>
                    <i class="fa fa-heart" id="wishlist"></i>
                    <button class="movie-list-item-button">Watch</button>
                </div>`
}

// Notifications
const notif = document.getElementById('showNotifications');
const notifCont = document.querySelector('.notification-Container');

notif.addEventListener('click', (e) => {
    notifCont.classList.toggle('active');
    e.stopPropagation();
});

document.addEventListener('click', (e) => {
    if (!notifCont.contains(e.target) && notifCont.classList.contains('active')) {
        notifCont.classList.remove('active');
    }
});


// Notification Data 
const notifDataContainer = document.getElementById('notifData');

for (var n = 0; n < notificationsData.length; n++) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.innerHTML = `
        <button class="cancel-notification">
            <i class="fa fa-times"></i>
        </button>
        <div class="notification-content">
            <div class="img-content">
                <img src="${notificationsData[n].img}" alt="">
            </div>
            <div class="notification-content-container">
                <h4>${notificationsData[n].time}</h4>
                <h2>${notificationsData[n].name}</h2>
                <p>${notificationsData[n].desc}</p>
                <h5>${notificationsData[n].platform}</h5>
            </div>
        </div>
    `;

    notifDataContainer.appendChild(notification);

    const cancelButton = notification.querySelector('.cancel-notification');
    cancelButton.addEventListener('click', () => {
        notification.classList.add('cancel');
        setTimeout(() => {
            notification.style.display = 'none';
        }, 500);
    });
}

// WishLIst
let wishlist = document.querySelector('.favorite-container');
let showWishlist = document.querySelector('#favorite');

showWishlist.addEventListener('click', () => {
    wishlist.classList.toggle('active')
})


// Show Subscription Popup Container
let showSubs = document.getElementById('showSubscription')
let subPopup = document.getElementById('subsPopup')
let closesubs = document.getElementById('closeePopup')

showSubs.addEventListener('click', () => {
    subPopup.classList.toggle('show')
})

closesubs.addEventListener('click', () => {
    subPopup.classList.toggle('show')
})

// All Favoritee Containre

// for (var af = 0; af < favs.length; af++) {
//     document.querySelector('#favoriteContainer').innerHTML += `
//         <div class="favorite-card">
//             <div class="img-container">
//                 <img src="${favs[af].IMG}" alt="">
//                 <div class="options">
//                     <a href="${favs[af].link}"><i class="fa fa-play"></i></a>
//                     <i class="fa fa-times" id="cancelFav"></i>
//                 </div>
//             </div>
//         </div>
//     `;
// };
// let favcont = document.querySelector('.favorite-card')
// let cancelButton = notification.querySelector('#cancelFav');
// cancelButton.addEventListener('click', () => {
//     favcont.classList.add('close');
//     setTimeout(() => {
//         notification.style.display = 'none';
//     }, 500);
// });


const favCont = document.getElementById('favoriteContainer');

for (var af = 0; af < favs.length; af++) {
    const favorit = document.createElement('div');
    favorit.className = 'favvContainer';
    favorit.innerHTML = `
    <div class="favorite-card">
    <div class="img-container">
        <img src="${favs[af].IMG}" alt="">
        <div class="options">
            <a href="${favs[af].link}"><i class="fa fa-play"></i></a>
            <button id="cancelFav"><i class="fa fa-times"></i></button>
        </div>
    </div>
</div>
    `;

    favCont.appendChild(favorit);

    let cancelButton = favorit.querySelector('#cancelFav');
    cancelButton.addEventListener('click', () => {
        favorit.classList.add('close');
        setTimeout(() => {
            favorit.style.display = 'none';
        }, 500);
    });
}

// Login And SignUp Page Popup
let loginForm = document.getElementById('LoginForm');
let SignUpForm = document.getElementById('SignUpPopup');
let ForgotForm = document.getElementById('ForgotPassword');
let loginCont = document.getElementById('loginContainer')

let loginbtn = document.getElementById('Loginbtn');
let SignUpbtn = document.getElementById(['SignUpbtn']);
let forgotbtn = document.getElementById('forgotbtn')
let loginShow = document.getElementById('loginShow')
let loginClosebtn = document.getElementById('closeLogin')
let signUpClosebtn = document.getElementById('closeSignup')
let forgotClosebtn = document.getElementById('closeForget')


// This Will Open Up the Login Container - The Parent Div
loginShow.addEventListener('click', () => {
    loginCont.style.display = 'block';
});

// This will Work On Login Div To Close Parent Div
loginClosebtn.addEventListener('click', () => {
    loginCont.style.display = 'none'
})

// This will Work On SignUp Div To Close Parent Div
signUpClosebtn.addEventListener('click', () => {
    loginCont.style.display = 'none'
})

// This will Work On Forget Div To Close Parent Div
forgotClosebtn.addEventListener('click', () => {
    loginCont.style.display = 'none'
})

// This will Show The Login form When Someone Click From SignUp Form.
loginbtn.addEventListener('click', () => {
    SignUpForm.style.display = 'none';
    ForgotForm.style.display = 'none';
    loginForm.style.display = 'block';
})

// This will Show The Forgot form When Someone Click From Login Form.
forgotbtn.addEventListener('click', () => {
    loginForm.style.display = 'none';
    SignUpForm.style.display = 'none'
    ForgotForm.style.display = 'block';
})

// This will Show The SignUp form When Someone Click From Login Form.
SignUpbtn.addEventListener('click', () => {
    loginForm.style.display = 'none';
    ForgotForm.style.display = 'none';
    SignUpForm.style.display = 'block';
})

// Serach Subscription Popup

// function searchServices() {
//     const input = document.getElementById("searchService");
//     const filter = input.value.toUpperCase();
//     const platforms = document.querySelectorAll(".OTTPlatform");

//     platforms.forEach(platform => {
//         const platformName = platform.querySelector("h2").textContent.toUpperCase();
//         if (platformName.includes(filter)) {
//             platform.style.display = "block";
//         } else {
//             platform.style.display = "none";
//         }
//     });
// }