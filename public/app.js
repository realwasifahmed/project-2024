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



