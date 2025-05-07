<?php
header("Content-type: text/css");
?>

<style>
body {
    font-family: sans-serif;
    margin: 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

/* Registration Form Styles */
.register-container {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.register-container h1 {
    color: #c00;
    margin-bottom: 10px;
    font-size: 2em;
    font-family: 'Montserrat Alternates', sans-serif;
}

.register-container h2 {
    color: #333;
    margin-bottom: 30px;
    font-size: 1.5em;
    font-family: 'Montserrat Alternates', sans-serif;
}

.form-section {
    margin-bottom: 30px;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 4px;
}

.form-section h4 {
    color: #c00;
    margin-bottom: 20px;
    font-size: 1.2em;
    font-family: 'Montserrat Alternates', sans-serif;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-weight: 500;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #c00;
    outline: none;
    box-shadow: 0 0 0 2px rgba(204,0,0,0.1);
}

.password-input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.password-info {
    background: none;
    border: none;
    color: #666;
    padding: 5px;
    cursor: help;
}

.form-agreement {
    margin: 20px 0;
    color: #666;
}

.button.primary {
    background: #c00;
    color: #fff;
    padding: 12px 30px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s;
}

.button.primary:hover {
    background: #a00;
}

/* Breadcrumb Styles */
.breadcrumb {
    padding: 10px 20px;
    background-color: white;
    font-size: 14px;
    color: #333;
}

.breadcrumb a {
    color: #c00;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 992px) {
    .register-container {
        margin: 30px auto;
    }
}

@media (max-width: 768px) {
    .register-container {
        margin: 20px;
        padding: 15px;
    }

    .form-section {
        padding: 15px;
    }

    .button.primary {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .register-container h1 {
        font-size: 1.5em;
    }

    .register-container h2 {
        font-size: 1.2em;
    }
}
