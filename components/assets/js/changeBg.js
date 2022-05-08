function changeBg() {
    var backgrounds = [
        "https://media2.giphy.com/media/11oauh2CqGIy88/giphy.gif?cid=ecf05e472aunrm8hw6wgwqvcja0wz8my66z37462lxjissct&rid=giphy.gif&ct=g",
        "https://media0.giphy.com/media/ObXgWWGHzMlVe/giphy.gif?cid=ecf05e473894c1elb0ngme7h099re21jnapbf7m5i61b1hlm&rid=giphy.gif&ct=g",
        "https://media0.giphy.com/media/joYf3Ba2phD15ch9Nt/giphy.gif?cid=ecf05e47bksdkve92e6y9whjcy5e2mhus2zyggj6tzngm99k&rid=giphy.gif&ct=g",
        "https://media0.giphy.com/media/B7o99rIuystY4/giphy.gif?cid=ecf05e47s62lw2i9nc2apsbh29rlrx53dsxyuplpfay3mt9w&rid=giphy.gif&ct=g"
    ];
    const imgShown = document.querySelector("#hero");
    var newNumber = Math.floor(Math.random() * backgrounds.length);
    imgShown.style.background =
        "linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)), url(" +
        backgrounds[newNumber] +
        ") top center no-repeat";
    imgShown.style.backgroundSize = "cover";
    imgShown.style.position = "relative";
    imgShown.style.width = "100%";
};

window.onload = changeBg;