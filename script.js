let links=document.querySelectorAll('.navbar .container-fluid .navbar-collapse .navbar-nav .nav-item .nav-link');
links.forEach(element=>{
    element.onclick=()=>{
        links.forEach(el=>{
            el.classList.remove("active");
        })
        element.classList.add("active");
    };
});

document.getElementById('to_toping').onclick=()=>{
    window.scrollTo({top:0});
};

