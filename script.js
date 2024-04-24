const text1 = "Welcome to our sign-up page.";
const text2 = "Let's get started!";
const delay = 100; // Delay between typing each character

let index1 = 0;
let index2 = 0;

function type() {
  const textSpan1 = document.getElementById('text1');
  const textSpan2 = document.getElementById('text2');
  
  if (index1 < text1.length) {
    textSpan1.textContent += text1[index1];
    index1++;
    setTimeout(type, delay);
  } else if (index2 < text2.length) {
    textSpan2.textContent += text2[index2];
    index2++;
    setTimeout(type, delay);
  } else {
    const inputContainer = document.getElementById('input-container');
    inputContainer.style.display = 'block';
  }
}

type();

document.getElementById("myForm").addEventListener("submit", function(event) {
  // Prevent the form from submitting normally
  event.preventDefault();
  
  // Get the form action attribute (where the form would normally submit to)
  var formAction = this.getAttribute("action");
  
  
  // Redirect to a new page after form submission
  window.location.href = "username.html";
});
