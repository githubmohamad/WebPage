/* start sitting box */
const ClickSittingBox = document.querySelector(".iconestyle");
ClickSittingBox.addEventListener("click" , () => {

    document.querySelector(".sitting-box").classList.toggle("openMenu");

    document.querySelector(".stylejs").classList.toggle("fa-spin");

});

/* end sitting box */

/* start background */
let BackgroundOptions = true;

let SetIntervalBack;
let landingPage = document.querySelector("landing");
let ImageArray = ["../team_work.jpg","../R.jpg","../R (1).jpg","../istockphoto-180986465-170667a.jpg","../desk-mac-apple-keyboard-desktop-lamp-work-space-brand-design-books-multimedia-screenshot-computers-desktop-computer-personal-computer-computer-monitor-personal-computer-hardware-display-device-royalty-free-imag.jpg"];
function PlayBackGround(){

    if(BackgroundOptions === true){
        SetIntervalBack = setInterval(() => {
            let MathRandome = Math.floor(Math.random() * ImageArray.length);
            landingPage.style.backgroundImage = 
        },1000);
    }

}
/* end background */