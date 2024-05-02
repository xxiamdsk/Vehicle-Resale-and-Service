
function serviceType(str){

  var divs = document.querySelectorAll('.detail1');
  
  // Loop through each div and set its style to 'display: none'
  divs.forEach(function(div) {
    div.style.display = 'none';
  });
  document.getElementById(str).style.display='block';
  
  
}
function packSelect(pack){
  
    document.getElementById('book-form').style.display='inline';
    document.getElementById('type').value = pack;
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






 