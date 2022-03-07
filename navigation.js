const navBurger = document.getElementsByClassName('hamburger');
const navListMobile = document.getElementsByClassName('nav-list-mobile');
const ButtonAplikuj = document.getElementById('button-aplikuj');
const ButtonOpenModal = document.getElementById('button-modal');




function onOpen(close) {
    if(close === "close"){
        navListMobile[0].style.display = "none";
        return
    }
    if(navListMobile[0].style.display === "flex"){
        navListMobile[0].style.display = "none";
        return;
    }
    navListMobile[0].style.display = "flex";

}


window.addEventListener("hashchange", () => {
    const element = document.getElementById(location.hash.split('#')[1]);
    element.scrollIntoView({behavior:"smooth"});

    onOpen("close");
});


function onOpenDialog(close) {
    if(close === "close"){
        navListMobile[0].style.display = "none";
        return
    }
    if(navListMobile[0].style.display === "flex"){
        navListMobile[0].style.display = "none";
        return;
    }
    navListMobile[0].style.display = "flex";
}


function onOpenModal(close) {
    let Modal = document.getElementById('modal');
    if(close === "close"){
        Modal.style.display = "none";
        return
    }
    Modal.style.display = "block";
}