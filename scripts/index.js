// Variables
const titleElement1 = document.body.querySelector("#title-sort");
const titleElement2 = document.body.querySelector("#title-search");
const titleElement3 = document.body.querySelector("#title-alg");
const titleElement4 = document.body.querySelector("#title-vis");
let currentTurn = 0;

// function to get random characters from length
function randomChars(currentIndex, element, targetString, characterLimit) {
	const alphabet = "abcdefghijklmnopqrstuvwxyz";
	if (currentTurn >= 70) {
		element.textContent = targetString;
	} else if (currentIndex < characterLimit) {
		const randomIndex = Math.floor(Math.random() * alphabet.length);
		const newChar = currentIndex === 0 ? alphabet.charAt(randomIndex).toUpperCase() : alphabet.charAt(randomIndex);
		element.textContent += newChar; // set the new character

		setTimeout(() => {
			randomChars(currentIndex + 1, element, targetString, characterLimit); // go to next character
			currentTurn++;
		}, 50);
	} else if (currentTurn < 70) {
		element.textContent = "";
		randomChars(0, element, targetString, characterLimit);
	}
	console.log(currentIndex, element, targetString, characterLimit);
}

document.addEventListener("DOMContentLoaded", (event) => {
	// Call each element
	titleElement1.textContent = "";
	randomChars(0, titleElement1, "Sorting", 7);

	titleElement2.textContent = "";
	randomChars(0, titleElement2, "Searching", 9);

	titleElement3.textContent = "";
	randomChars(0, titleElement3, "Algorithm", 9);

	titleElement4.textContent = "";
	randomChars(0, titleElement4, "Visualizer", 10);
});
