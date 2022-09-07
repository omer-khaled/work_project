// load all images

// window.onload=()=>{
  
// }


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

// <?php 
// $file_name='your name';
// echo "<img src='".$file_name."'>";
// ?>
// upload images
// document.getElementById('form_setting').onsubmit=()=>{
//     let pass=document.getElementById('text_pass');
//     let files_own=document.getElementById('upload_file');
//     files_own.onchange=(e)=>{
//         if(pass=="admin"&&e.target.files[0]){
//             let imageee=document.createElement('img');
//             imageee.src='images/products/'+files[0].name;;
//             document.getElementById('pen').appendChild(imageee);
//             document.getElementById('pen').innerHTML=`<img src="./images/products/05.png" alt="">`;
//         }
//     }
// };