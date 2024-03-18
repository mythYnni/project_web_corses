<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the modal and the button that opens it
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("openModalButton");

        // Attach a click event listener to the button
        btn.addEventListener("click", function() {
            // Display the modal
            modal.style.display = "block";
        });

        // Attach a click event listener to the close button inside the modal
        var closeBtn = modal.querySelector(".close");
        closeBtn.addEventListener("click", function() {
            // Hide the modal when the close button is clicked
            modal.style.display = "none";
        });

        // Attach a click event listener to the modal overlay to close the modal
        window.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the modal and the button that opens it
        var modal = document.getElementById("myModalnaptienroi");
        var btn = document.getElementById("openModalButtonnaptienroido");

        // Attach a click event listener to the button
        btn.addEventListener("click", function() {
            // Display the modal
            modal.style.display = "block";
        });

        // Attach a click event listener to the close button inside the modal
        var closeBtn = modal.querySelector(".close");
        closeBtn.addEventListener("click", function() {
            // Hide the modal when the close button is clicked
            modal.style.display = "none";
        });

        // Attach a click event listener to the modal overlay to close the modal
        window.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
</script>