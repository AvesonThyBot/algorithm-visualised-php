// Variables
const customData = document.body.querySelector("#customData");
const customInput = document.body.querySelector("#customInput");
const randomiseBtn = document.body.querySelector("#randomiseBtn");
const dataDisplay = document.body.querySelector("#dataDisplay");
const heading = document.body.querySelector("#heading");

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
