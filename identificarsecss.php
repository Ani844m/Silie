<?php
header("Content-type: text/css");
?>

.login-register-container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 20px;
}

.form-wrapper {
    display: flex;
    gap: 40px;
    margin-top: 30px;
    justify-content: space-between;
}

.login-section, .register-section {
    flex: 1;
    padding: 30px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

h2 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
}

h3 {
    color: #cc0000;
    margin-bottom: 20px;
}

.form-description {
    color: #666;
    margin-bottom: 25px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}

.form-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

.button {
    display: inline-block;
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 600;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s, transform 0.2s;
    width: 100%;
}

.button.primary {
    background-color: #cc0000;
    color: white;
}

.button.secondary {
    background-color: #333;
    color: white;
}

.button:hover {
    transform: translateY(-2px);
    opacity: 0.9;
}

.form-links {
    margin-top: 20px;
    text-align: center;
}

.form-links a {
    color: #cc0000;
    text-decoration: none;
    font-size: 14px;
}

.form-links a:hover {
    text-decoration: underline;
}

.form-message {
    margin-top: 15px;
    padding: 10px;
    border-radius: 4px;
    text-align: center;
    display: none;
}

.form-message.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.form-message.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.form-message.info {
    background-color: #cce5ff;
    color: #004085;
    border: 1px solid #b8daff;
}
