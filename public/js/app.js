var button = document.querySelector('.button')
var inputValue = document.querySelector('.inputValue')
var namer = document.querySelector('.name');
var desc = document.querySelector('.desc');
var temp = document.querySelector('.temp');

button.addEventListener('click',function(){
        fetch('https://api.openweathermap.org/data/2.5/weather?q='+inputValue.value+'&appid=35d8742e79ad485f96b7e2dd8749a473')
        .then(response => response.json())  
        .then(data => {
            var nameValue = data['name'];
            var tempValue = data['main']['temp'];
            var descValue = data['weather'][0]['description'];

            namer.innerHTML = nameValue;
            temp.innerHTML = tempValue;
            desc.innerHTML = descValue;
            
        })    

    .catch(err => alert("salah nama kota!"))
})