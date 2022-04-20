function getHours() {
    var allHours = new Array();
    let hours;
    let count = 0;

    do {
        hours = prompt("Please enter the number of hours worked");
        allHours.push(hours);
        count += 1;
    } while (hours > 0);
    if (hours == -1) {
       drawTable(count, allHours);
    }
    
}


function drawTable(count, allHours) {

    var div1 = document.getElementById('div1');
 
    // creates a <table> element
    var tbl = document.createElement("table");
    var thead = document.createElement('thead');
    tbl.appendChild(thead);

    let row_1 = document.createElement("tr");
    let heading_1 = document.createElement('th');
    heading_1.innerHTML = "Index";
    let heading_2 = document.createElement('th');
    heading_2.innerHTML = "Hours worked";
    let heading_3 = document.createElement('th');
    heading_3.innerHTML = "Pay for the week";

    row_1.appendChild(heading_1);
    row_1.appendChild(heading_2);
    row_1.appendChild(heading_3);
    thead.appendChild(row_1);

    // creating rows
    for (var r = 0; r < count; r++) {
        var row = document.createElement("tr");
	    
        var cell_1 = document.createElement('td');
        cell_1.innerHTML = r;
        var cell_2 = document.createElement('td');
        cell_2.innerHTML = allHours[r];
        var cell_3 = document.createElement('td');
        if (allHours[r] > 40) {
            var remainder = allHours[r] % 40;
            var pay = (40*15) + (remainder*(15*1.5)); 
            cell_3.innerHTML = pay;
        }
        cell_3.innerHTML = allHours[r] * 15;
	    
        row.appendChild(cell_1);
        row.appendChild(cell_2);
        row.appendChild(cell_3);
            
	    tbl.appendChild(row); // add the row to the end of the table body
    }
    
    div1.appendChild(tbl); // appends <table> into <div1>
}

var guessCount = 0;
function load() {
    document.game.help.value = "Please guess a number and press Guess. ";
}
function guessGame() {

    var randNum = Math.floor(Math.random() * 100) + 1;

    var num = document.game.guessbox.value;
    guessCount++;

    if (num < randNum) document.game.help.value = "The number is greater than " + num + ". Try again ";
    else if (num > randNum) document.game.help.value = "The number is less than " + num + ". Try again ";
    else if (guessCount > 5) {
        alert("Too many guesses! The number was "+ randNum ); 
        }
    else alert("You got the number! It took you " + guessCount + " attempts.");
}