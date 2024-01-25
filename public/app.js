const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

arrows.forEach((arrow, i) => {
    const itemNumber = movieLists[i].querySelectorAll("img").length;
    let clickCounter = 0;
    arrow.addEventListener("click", () => {
        const ratio = Math.floor(window.innerWidth / 304);
        clickCounter++;
        if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
            movieLists[i].style.transform = `translateX(${movieLists[i].computedStyleMap().get("transform")[0].x.value - 300
                }px)`;
        } else {
            movieLists[i].style.transform = "translateX(0)";
            clickCounter = 0;
        }
    });

    // console.log(Math.floor(window.innerWidth / 302));
});

//TOGGLE

// const ball = document.querySelector(".toggle-ball");
// const items = document.querySelectorAll(
//   ".container,.movie-list-title,.navbar-container,.sidebar,.left-menu-icon,.toggle, .sidebar span p, .aritst__container, .verified_artist, .artist_meta h1, .artist_meta p, .content_container"
// );

// // Get All The Items And Add Active CLass On toggle Click
// ball.addEventListener("click", () => {
//   items.forEach((item) => {
//     item.classList.toggle("active");
//   });
//   ball.classList.toggle("active");
// });


// Preloader Animation
const LoaderContainer = document.querySelector('.preloader');
const UpperLoader = document.querySelector('.preloader .upper__Preloader');
const LowerLoader = document.querySelector('.preloader .lower__preloader');
const LogoLoader = document.querySelector('.preloader .logo');

// Upper And Lower Loader
setTimeout(() => {
    UpperLoader.style.transform = "translateY(-100%)";
    LowerLoader.style.transform = "translateY(100%)";
}, 2500);

// Logo Loader Opacity
setTimeout(() => {
    LogoLoader.style.opacity = '0';
}, 1500)

// Loader Container Display None
setTimeout(() => {
    LoaderContainer.style.display = 'none'
}, 3000)

// Profile Drop Down Container Setting
const ProfileMenu = document.querySelector('.profile_menu');
const ProfileContainer = document.querySelector('.profile-text-container');
const ShowMenu = document.querySelector('#showPorfileMenu');
ProfileContainer.style.cursor = 'pointer';

let isMenuOpen = false;

// Function to close the profile dropdown
function closeProfileDropdown() {
    isMenuOpen = false;
    ProfileMenu.classList.remove('show');
    ShowMenu.style.transform = 'rotate(0deg)';
}

// Event listener for clicks on the document
document.addEventListener('click', (event) => {
    const isClickInsideProfileContainer = ProfileContainer.contains(event.target);
    const isClickInsideProfileMenu = ProfileMenu.contains(event.target);

    if (!isClickInsideProfileContainer && !isClickInsideProfileMenu) {
        closeProfileDropdown();
    }
});

// Event listener for clicks on the profile container
ProfileContainer.addEventListener('click', (event) => {
    event.stopPropagation(); // Prevent the click event from reaching the document
    isMenuOpen = !isMenuOpen;
    ProfileMenu.classList.toggle('show');
    ShowMenu.style.transform = isMenuOpen ? 'rotate(180deg)' : 'rotate(0deg)';
});




const reviewContainer = document.getElementById('reviewContainer');
const updatereviewContainer = document.querySelectorAll('.UpdateReviewContainer');

function shareThougths() {
    reviewContainer.classList.add('active');
}

function closePopup() {
    reviewContainer.classList.remove('active');
    updatereviewContainer.forEach(container => {
        container.classList.remove('active');
    });
}


function updateReview() {
    updatereviewContainer.forEach(container => {
        container.classList.add('active');
    });
}

function openUpdateModal(reviewId) {
    const modalId = `updatereviewContainer_${reviewId}`;
    const modal = document.getElementById(modalId);

    // Logic to show the modal, for example, setting its display style to 'block'
    modal.classList.add('active');
}

// You may also want to define a close function similar to what you have for the main modal
function closeUpdateModal(reviewId) {
    const modalId = `updatereviewContainer_${reviewId}`;
    const modal = document.getElementById(modalId);

    // Logic to hide the modal, for example, setting its display style to 'none'
    modal.classList.remove('active');
}


// Coded by: https://mmzand.ir
// Credit: https://code-boxx.com/html-custom-audio-player/#sec-audio
// (A) SUPPORT FUNCTION - FORMAT HH:MM:SS
var timeString = (secs) => {
    // (A1) HOURS, MINUTES, SECONDS
    let ss = Math.floor(secs),
        hh = Math.floor(ss / 3600),
        mm = Math.floor((ss - hh * 3600) / 60);
    ss = ss - hh * 3600 - mm * 60;

    // (A2) RETURN FORMATTED TIME
    if (hh > 0) {
        mm = mm < 10 ? "0" + mm : mm;
    }
    ss = ss < 10 ? "0" + ss : ss;
    return hh > 0 ? `${hh}:${mm}:${ss}` : `${mm}:${ss}`;
};

function setProgress(elTarget) {
    let divisionNumber = elTarget.getAttribute("max") / 100;
    let rangeNewWidth = Math.floor(elTarget.value / divisionNumber);
    if (rangeNewWidth > 95) {
        elTarget.nextSibling.style.width = "95%";
    } else {
        elTarget.nextSibling.style.width = rangeNewWidth + "%";
    }
}

for (let i of document.querySelectorAll(".aWrap")) {
    // (B) AUDIO + HTML SETUP + FLAGS
    i.audio = new Audio(encodeURI(i.dataset.src));
    (i.aPlay = i.querySelector(".aPlay")),
        (i.aPlayIco = i.querySelector(".aPlayIco")),
        (i.aNow = i.querySelector(".aNow")),
        (i.aTime = i.querySelector(".aTime")),
        (i.aSeek = i.querySelector(".aSeek")),
        (i.aVolume = i.querySelector(".aVolume")),
        (i.aVolIco = i.querySelector(".aVolIco"));
    i.seeking = false; // user is dragging the seek bar

    // (C) PLAY & PAUSE
    // (C1) CLICK TO PLAY/PAUSE
    i.aPlay.onclick = () => {
        if (i.audio.paused) {
            i.audio.play();
        } else {
            i.audio.pause();
        }
    };

    // (C2) SET PLAY/PAUSE ICON
    i.audio.onplay = () => (i.aPlayIco.innerHTML = '<i class="fa fa-pause"></i>');
    i.audio.onpause = () => (i.aPlayIco.innerHTML = '<i class="fa fa-play"></i>');

    // (D) TRACK PROGRESS & SEEK TIME
    // (D1) TRACK LOADING
    i.audio.onloadstart = () => {
        i.aNow.innerHTML = "Loading";
        i.aTime.innerHTML = "";
    };

    // (D2) ON META LOADED
    i.audio.onloadedmetadata = () => {
        // (D2-1) INIT SET TRACK TIME
        i.aNow.innerHTML = timeString(0);
        i.aTime.innerHTML = timeString(i.audio.duration);

        // (D2-2) SET SEEK BAR MAX TIME
        i.aSeek.max = Math.floor(i.audio.duration);

        // (D2-3) USER CHANGE SEEK BAR TIME
        i.aSeek.oninput = () => (i.seeking = true); // prevents clash with (d2-4)
        i.aSeek.onchange = () => {
            i.audio.currentTime = i.aSeek.value;
            if (!i.audio.paused) {
                i.audio.play();
            }
            i.seeking = false;
        };

        // (D2-4) UPDATE SEEK BAR ON PLAYING
        i.audio.ontimeupdate = () => {
            if (!i.seeking) {
                i.aSeek.value = Math.floor(i.audio.currentTime);
            }
            i.aNow.innerHTML = timeString(i.audio.currentTime);
            let divisionNumber = i.aSeek.getAttribute("max") / 100;
            let rangeNewWidth = Math.floor(i.aSeek.value / divisionNumber);
            if (rangeNewWidth > 95) {
                i.aSeek.nextSibling.style.width = "95%";
            } else {
                i.aSeek.nextSibling.style.width = rangeNewWidth + "%";
            }
        };
    };

    // (E) VOLUME
    i.aVolIco.onclick = () => {
        i.audio.volume = i.audio.volume == 0 ? 1 : 0;
        i.aVolume.value = i.audio.volume;
        i.aVolIco.innerHTML =
            i.aVolume.value == 0
                ? '<i class="fa fa-volume-off"></i>'
                : '<i class="fa fa-volume-up"></i>';
        if (i.aVolume.value == 0) {
            i.aVolume.nextSibling.style.width = "0%";
        } else {
            i.aVolume.nextSibling.style.width = "95%";
        }
    };
    i.aVolume.onchange = () => {
        i.audio.volume = i.aVolume.value;
        i.aVolIco.innerHTML =
            i.aVolume.value == 0
                ? '<i class="fa fa-volume-off"></i>'
                : '<i class="fa fa-volume-up"></i>';
    };

    // (F) ENABLE/DISABLE CONTROLS
    i.audio.oncanplaythrough = () => {
        i.aPlay.disabled = false;
        i.aVolume.disabled = false;
        i.aSeek.disabled = false;
    };
    i.audio.onwaiting = () => {
        i.aPlay.disabled = true;
        i.aVolume.disabled = true;
        i.aSeek.disabled = true;
    };

    i.aSeek.addEventListener("input", function () {
        setProgress(this);
    });

    i.aVolume.addEventListener("input", function () {
        setProgress(this);
    });
}


