var main = document.querySelector('.ticket');

var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(){
    if (xhr.readyState === 4) {
        var data = JSON.parse(xhr.responseText);
        console.log(data);
        if (data.luggage == "Up to 20kg" || data.luggage == "Over 20kg"){
            var newPrice = parseInt( data.price ) + 20;

            console.log(newPrice);
        }
        else {
            var newPrice = data.price;
        }
        main.innerHTML = ``
        main.innerHTML += `
    <div class="wrapper">
    <h3>Your flight number: ${data.flightNumber}</h3>
    <div class="personalInfo">
        <p>Your personal number: ${data.personalNumber}</p>
        <p>First name: ${data.firstName}</p>
        <p>Last/second name: ${data.secondName}</p>
    </div>
    </div>
    <div class="wrapper">
        <div class="flightStyle">
                <h4>From</h4>
            <p>${data.flightFrom}</p>
        </div>
        <div class="flightStyle">
                <h4>To</h4>
            <p>${data.flightTo}</p>
        </div>
<p>Luggage weight: ${data.luggage}</p>
<p>Your price: ${newPrice}&euro;</p>
<p>Your comment: ${data.comments}</p>
</div>`
    }
}
xhr.open('GET', 'results.json');
xhr.send();

