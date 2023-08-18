const hamburgerDash = () => {
    const sideBar = document.getElementById("sidebar");
    sideBar.classList.toggle("translate-x-0");
};

function previewImage() {
    const image = document.getElementById("image");
    const imagePreview = document.getElementById("imagePreview");

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = (oFREvent) => {
        console.log(oFREvent);
        imagePreview.src = oFREvent.target.result;
    };
}
