// let sidebar = document.querySelector('.novotel_sidebar .novotel_cols aside ul li a');

// sidebar.addEventListener('click', function(){
//     this.addClass('working')
// })


function loadContent(event, url) {
    event.preventDefault(); // Prevent the default behavior of the anchor tag

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.text();
        })
        .then(data => {
            // Update the contentContainer with the loaded HTML
            document.getElementById("contentContainer").innerHTML = data;
        })
        .catch(error => {
            console.error('Fetch error:', error);
        });
}