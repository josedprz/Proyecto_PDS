// preloader

var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("main").style.display = "block";
}



// JavaScript for FAQ accordion
const accordions = document.querySelectorAll(".accordion");

accordions.forEach((accordion) => {
    accordion.addEventListener("click", () => {
        accordion.classList.toggle("active");
        const panel = accordion.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
});


//Form Select & Options
// Define options for the second dropdown based on the selected category
const optionsByCategory = {
    dog: ["Labrador Retriever", "Bulldog", "Pastor Alemán", "Golden Retriever", "Beagle", "Pomerania", "Dachshund", "Bóxer", "Pug", "Rottweiler", "Shih Tzu"],
    cat: ["Persa", "Siamés", "Maine Coon", "Ragdoll", "Británico de Pelo Corto", "Abisinio", "Bengala", "Birmano", "Fold Escocés", "Esfinge"],
    rabbit: ["Holland Lop", "Enano de los Países Bajos", "Mini Rex", "Cabeza de León", "Mini Lop", "Gigante de Flandes", "Angora Inglés", "Polaco", "Himalayo", "Arlequín"],
    turtle: ["Deslizador de Orejas Rojas", "Tortuga de Tienda India", "Tortuga de Techo con Tres Rayas", "Tortuga de Caparazón Blando India", "Tortuga Negra de Estanque", "Tortuga de Estanque Manchada India", "Tortuga de Caparazón Blando de Leith", "Tortuga de Caparazón Blando con Plumas de Pavo Real", "Tortuga de Caparazón Blando con Cabeza Estrecha India"],
    cow: ["Vaca Jersey", "Holstein Friesian", "Vaca Gir", "Vaca Sahiwal", "Vaca Rathi", "Vaca Ongole", "Vaca Sindhi Roja", "Vaca Tharparkar", "Vaca Kankrej", "Vaca Hariana"],
};


// Function to populate the second dropdown based on the selected category
function populateSecondSelect() {
    const firstSelect = document.getElementById("pettype");
    const secondSelect = document.getElementById("petbreed");
    const selectedCategory = firstSelect.value;

    // Clear the second dropdown
    secondSelect.innerHTML = '<option value="">Selecciona una raza *</option>';

    // Populate the second dropdown with options based on the selected category
    if (selectedCategory in optionsByCategory) {
        optionsByCategory[selectedCategory].forEach(option => {
            const optionElement = document.createElement("option");
            optionElement.value = option;
            optionElement.textContent = option;
            secondSelect.appendChild(optionElement);
        });
    }
}




const photoUpload = document.getElementById("photo-upload");
const selectedPhotos = document.getElementById("selected-photos");
const previewContainer = document.getElementById("preview-container");

function removeImage(imgContainer) {
    const file = imgContainer.file;
    const fileList = Array.from(photoUpload.files);
    const index = fileList.findIndex((f) => f === file);

    if (index !== -1) {
        fileList.splice(index, 1);
        photoUpload.files = new FileList(fileList);
    }

    imgContainer.remove();
    updatePhotoCount();
}

function updatePhotoCount() {
    const selectedFiles = photoUpload.files;
    const fileCount = selectedFiles.length;

    if (fileCount === 0) {
        selectedPhotos.innerHTML = "<p>No hay fotos seleccionadas</p>";
    } else if (fileCount === 1) {
        selectedPhotos.innerHTML = `<p>${fileCount} Foto seleccionada</p>`;
    } else {
        selectedPhotos.innerHTML = `<p>${fileCount} Foto seleccionada</p>`;
    }
}

photoUpload.addEventListener("change", function () {
    const selectedFiles = photoUpload.files;

    // Clear existing previews
    previewContainer.innerHTML = "";

    for (let i = 0; i < selectedFiles.length; i++) {
        const file = selectedFiles[i];
        const imageType = /image.*/;

        if (file.type.match(imageType)) {
            const imgContainer = document.createElement("div");
            imgContainer.className = "preview-image";

            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.width = 100; // Set the width of the thumbnail
            imgContainer.appendChild(img);

            const removeButton = document.createElement("button");
            removeButton.className = "remove-button";
            removeButton.textContent = "Remove";
            removeButton.addEventListener("click", function () {
                removeImage(imgContainer);
            });

            imgContainer.appendChild(removeButton);
            imgContainer.file = file;
            previewContainer.appendChild(imgContainer);
        }
    }

    updatePhotoCount();
});


function removeImage(imgContainer) {
    const file = imgContainer.file;
    const fileList = Array.from(photoUpload.files);
    const index = fileList.findIndex((f) => f === file);

    if (index !== -1) {
        fileList.splice(index, 1);
        // Create a new FileList object to update the input field
        const newFileList = new DataTransfer();
        fileList.forEach((file) => newFileList.items.add(file));
        photoUpload.files = newFileList.files;
    }

    imgContainer.remove();
    updatePhotoCount();
}



