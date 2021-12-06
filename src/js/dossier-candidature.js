console.log("Dossier de candidature")

// Set email input
const selectCollaborateur = document.getElementById("select-collaborateur")
const inputCollaborateur = document.querySelector(
	".input-email-collaborateur input"
)
const form = document.getElementById("form-dossier-candidature")

selectCollaborateur.addEventListener("change", (e) => {
	// On rempli le champ input email collaborateur avec la valeur du bouton Select
	inputCollaborateur.value = e.target.value

	// Si le champ input n'est pas vide, on affiche le formulaire
	if (inputCollaborateur.value) {
		form.classList.remove("hidden")
	} else {
		form.classList.add("hidden")
	}
})

// Set title input
const inputTitle = document.querySelector(".input-post-title input")
const inputName = document.querySelector(".input-name input")
const inputFirstName = document.querySelector(".input-first-name input")

inputName.addEventListener("change", () => {
	fileTitle()
})
inputFirstName.addEventListener("change", () => {
	fileTitle()
})

const fileTitle = () => {
	inputTitle.value = `${inputFirstName.value} ${inputName.value}`
}
