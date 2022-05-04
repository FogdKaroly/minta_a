let magyarazat = () => {
    alert("Email és jelszó megadása, bejelentkezés gomb kattintása!");
}

let szinvaltas = () => {
    let r = Math.floor(Math.random()*255);
    let g = Math.floor(Math.random()*255);
    let b = Math.floor(Math.random()*255);

    document.getElementById("szinvalto").style.backgroundColor = `rgb(${r}, ${g}, ${b})`;
}

function idozito() {
    setTimeout(udvozles, 5000);
}

function udvozles() {
    document.getElementById("udvozles").style.display = "block";
    
}