document.querySelector(".home").onmousemove=(e)=>{
    document.querySelectorAll(".home-para").foreach(elm =>{
       let speed=elm.getAttribute("data-speed");

       let x=(window.innerWidth-e.pageX*speed)/90;
       let y=(window.innerHeight-e.pageY*speed)/90;

       elm.style.transform=`translateX(${y}px) translate(${x}px)`;
    });
};
function myFuntion(){

    
}
 


(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()






 