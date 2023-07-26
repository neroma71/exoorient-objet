let start = document.querySelector('.start');
let onoff = document.querySelector('.onoff');


start.addEventListener('click', ()=>{
    fetch('onoff.php')
    .then(response => response.text())
    .then(value => {
      document.querySelector('.on').innerHTML = value
    });
});
