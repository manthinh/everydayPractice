const h1 = document.getElementById("title");
console.log(h1);
const title = h1.textContent;
console.log("title");
h1.textContent = "主題変更";
const p = document.createElement("p");
const text = document.createTextNode("文3");
document.body.appendChild(p).appendChild(text);

function buttonClick(){
    msg.innerText ='お名前は'+ nameText.value + 'さんですね';
}

let nameText = document.getElementById('nameText');
nameText.value = '何か入力して';
let msg = document.getElementById('msg');

let checkButton = document.getElementById('checkButton');
checkButton.addEventListener('click',buttonClick);

