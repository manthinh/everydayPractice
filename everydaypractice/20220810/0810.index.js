const h1 = document.getElementById("title");
console.log(h1);
const title = h1.textContent;
console.log("title");
h1.textContent = "主題変更";
const p = document.createElement("p");
const text = document.createTextNode("文3");
document.body.appendChild(p).appendChild(text);