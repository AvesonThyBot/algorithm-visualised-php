// Variables
const customData = document.body.querySelector("#customData");
const customInput = document.body.querySelector("#customInput");

// On click EventListener for showing appropriate div
document.body.querySelectorAll(".form-check").forEach((element) => {
	element.onclick = () => {
		customData.checked ? (customInput.classList.remove("d-none"), document.body.querySelector("#dataDisplay").classList.add("d-none")) : (customInput.classList.add("d-none"), document.body.querySelector("#dataDisplay").classList.remove("d-none"));
	};
});
