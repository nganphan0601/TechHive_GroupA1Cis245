document.getElementById("shopbutton").addEventListener('click', ()=>{
    document.getElementById("shopall").scrollIntoView({
        behavior: "smooth"
    });
});

const register_show = () => {
    document.getElementById("register").style.display = "block";
}

const register_hide = () => {
    document.getElementById("register").style.display = "none";

}