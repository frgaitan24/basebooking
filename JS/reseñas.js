
document.addEventListener("DOMContentLoaded", function() {
  const reviewForm = document.getElementById("reviewForm");
  const reviewText = document.getElementById("reviewText");
  const reviewContainer = document.getElementById("reviewContainer");

  reviewForm.addEventListener("submit", function(event) {
      event.preventDefault();

      const formData = new FormData();
      formData.append("review", reviewText.value);

      fetch("../PHP/resenas.php", {
          method: "POST",
          body: formData
      })
      .then(response => response.text())
      .then(data => {
          if (data === "success") {
              reviewText.value = "";
              loadReviews();
          } else {
              console.error("Error:", data);
          }
      })
      .catch(error => {
          console.error("Error:", error);
      });
  });

  function loadReviews() {
      fetch("get_reviews.php")
      .then(response => response.text())
      .then(data => {
          reviewContainer.innerHTML = data;
      })
      .catch(error => {
          console.error("Error:", error);
      });
  }

  loadReviews();
});


