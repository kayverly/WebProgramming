alert("Answers to question 1-5 are in the console log!!");

//Q1
var fibonacci_series = function(n){
    if (n===1){
        return [0,1];

    } else {
        var s = fibonacci_series(n - 1);
        s.push(s[s.length - 1] + s[s.length - 2]);
        return s;
    }
};
console.log("Question One: " + fibonacci_series(8));
console.log("");

//Q2
console.log("Question Two: ");
function generatePyramid(n) {
    var output = '';
    for(var i = 1; i <= n; i++) {
        for(var j = 1; j <= i; j++) {
            output += '*';
        }
        console.log(output);
        output = '';
    }
}
generatePyramid(5);
console.log("");

//Q3
const sample = [3,8,7,6,5,-4,3,2,1];
function sortArray(n){
    n.sort(function(a, b){return a-b});
    return n;
}
console.log("Question Three: ");
console.log("Sameple Array: " + sample);
console.log("Sorted Array: " + sortArray(sample));
console.log("");

//Q4
var sample2 = [3,2,3,3,2,4,9,3];
function mode(n) {
    var mf = 1;
    var m = 0;
    for (var i = 0; i < sample2.length; i++) {
        for (var j = i; j < sample2.length; j++) {
            if (sample2[i] == sample2[j]) {
                m++;
            }
            if (mf < m) {
                mf = m;
                item = sample2[i];
            }
        }
        m = 0;
    }
    return item;
}
console.log("Question Four: ")
console.log("Sample Array: " + sample2);
console.log("Most frequent element: " + mode(sample2));
console.log("");

//Q5
const sample3 = [3,8,7,6,5,-4];
function shuffle(array) {
    curr = array.length;
    while (0 !== curr) {
        rand = Math.floor(Math.random() * curr);
        curr -= 1;
        tmp = array[curr];
        array[curr] = array[rand];
        array[rand] = tmp;
    }
    return array;
}
console.log("Question Five: ");
console.log("Sample Array: " + sample3);
console.log("Shuffled Array: " + shuffle(sample3));
console.log("");



//Part 2
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

function validateForm() {
    var id = document.myForm.id.value;
    var fname = document.myForm.fname.value;
    var lname = document.myForm.lname.value;

    var idErr = fnameErr = lnameErr = true;

    if(id == "") {
        printError("idErr", "Please enter your ID");
    } else {
        var regex = /^[1-9]+$/;
        if(regex.test(id) === false) {
            printError("idErr", "Please enter a valid 6 digit ID number");
        } else {
            printError("idErr", "");
            idErr = false;
        }
    }

    if(fname == "") {
        printError("fnameErr", "Please enter your first name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(fname) === false) {
            printError("fnameErr", "Please enter a valid first name");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }

    if(lname == "") {
        printError("lnameErr", "Please enter your last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lname) === false) {
            printError("lnameErr", "Please enter a valid last name");
        } else {
            printError("lnameErr", "");
            lnameErr = false;
        }
    }

    if((idErr || fnameErr || lnameErr) == true) {
        return false;
    } else {
        var dataPreview = "You've entered the following details: \n" +
                            "ID: " + id + "\n" +
                            "First Name: " + fname + "\n" +
                            "Last Name: " + lname + "\n";
        document.getElementById("ID").innerHTML = "ID: " + id;
        document.getElementById("fname").innerHTML = "First Name: " + fname;
        document.getElementById("lname").innerHTML = "Last Name: " + lname;
        return false;
    }
};

const form = document.getElementById('form');
const ID = document.getElementById('ID');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) => {
    let messages = []
    if (ID.value === '' || ID.value == null) {
        messages.push('name is required')
    }

    if (fname.value.length == "" || fname.value == null){
        messages.push('Need an ID bucko')
    }

    if (messages.length > 0) {
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})