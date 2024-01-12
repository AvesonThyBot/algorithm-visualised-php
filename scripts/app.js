// Variables
const customData = document.body.querySelector("#customData");
const customInput = document.body.querySelector("#customInput");
const customNumber = document.body.querySelector("#customNumber");
const randomiseBtn = document.body.querySelector("#randomiseBtn");
const dataDisplay = document.body.querySelector("#dataDisplay");
const heading = document.body.querySelector("#heading");
const eventKeys = ["Tab", "Backspace", "Enter", "Control", "Shift", "CapsLock", "Alt", "Fn"];
const invalidFeedback = document.body.querySelector(".invalid-feedback");
const inputBox = document.body.querySelector("#customInput").children[0];

// On Click EventListener for showing appropriate div
document.body.querySelectorAll(".form-check").forEach((element) => {
	element.onclick = () => {
		customData.checked
			? // Toggle for custom data
			  (customInput.classList.remove("d-none"), document.body.querySelector("#dataDisplay").classList.add("d-none"), document.body.querySelector("#randomiseBtn").classList.add("d-none"))
			: // Toggle for default data
			  (customInput.classList.add("d-none"), document.body.querySelector("#dataDisplay").classList.remove("d-none"), document.body.querySelector("#randomiseBtn").classList.remove("d-none"));
	};
});

// On Click EventListener for randomising data
randomiseBtn.onclick = () => {
	// Create a List with span tags
	const dataChildren = Array.from(dataDisplay.children).filter((child) => child.tagName.toLowerCase() === "span");

	// Randomise the order
	for (let index = dataChildren.length - 1; index > 0; index--) {
		const randomIndex = Math.floor(Math.random() * (index + 1));
		[dataChildren[index], dataChildren[randomIndex]] = [dataChildren[randomIndex], dataChildren[index]];
	}

	// Clear the existing content
	dataDisplay.innerHTML = "";

	// Replace with new order
	dataChildren.forEach((child) => {
		dataDisplay.appendChild(child);
	});

	// Add back the heading
	dataDisplay.innerHTML += heading.outerHTML;
};

// On key down
customNumber.onkeydown = (event) => {
	// Check if key is either 0-9 or the characters '-' or ',' & Not special keyboard buttons
	if (!event.key.match(/^[0-9,\ \-]*$/) && !eventKeys.includes(event.key)) {
		// Set custom error message
		invalidFeedback.textContent = `There character '${event.key}' is an invalid input.`;
		inputBox.classList.add("is-invalid");
		inputBox.classList.remove("is-valid");
	} else if (customNumber.value.match(/^[0-9,\ \-]*$/)) {
		// Show valid input box
		inputBox.classList.add("is-valid");
		inputBox.classList.remove("is-invalid");
	}
};
