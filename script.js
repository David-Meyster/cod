function endTap() {
  let skin = document.getElementById("skin_img");
  roulette_box.style.display = "none";
  skin.style.display = "flex";

}

function tapButton() {
  let song = document.getElementById("case_opening");
  song.volume = 1;

  song.play();
  let roulette_box = document.getElementById("roulette_box");
  roulette_box.style.display = "flex";
}



let balanceValue = document.getElementById("balance").textContent;
let balance = document.getElementById("balance");

balanceValue = balanceValue.split("₽").join("");

balanceValue = Number(balanceValue);

if (balanceValue > 0) {
  balance.style.animation = "animateColor 10s linear infinite";
} else if (balanceValue === 0) {
  (balance.style.textShadow = "0 0 3px #40ff4040, 0 0 8px #40ff4060"),
    (balance.style.color = "#40ff40");
} else {
  (balance.style.color = "#00f2ffe1"),
    (balance.style.textShadow = "0 0 3px #00f2ff30, 0 0 8px #00f2ff30");
}