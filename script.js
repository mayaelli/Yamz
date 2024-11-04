// script.js
console.log("Hello, world!");

document.getElementById('feedback-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const email = document.getElementById('email').value;
    const feedback = document.getElementById('feedback').value;

    // Sending data to the backend server to handle email
    try {
        const response = await fetch('http://localhost:3000/send-inquiry', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email: email,
                message: feedback
            })
        });
        const result = await response.json();
        if (result.success) {
            alert("Your inquiry has been sent successfully!");
        } else {
            alert("Failed to send inquiry.");
        }
    } catch (error) {
        alert("Error sending inquiry.");
        console.error(error);
    }
});
