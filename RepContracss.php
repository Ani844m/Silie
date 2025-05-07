<style>
 body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
  display: flex;
  flex-direction: column; /* Arrange header, main content, and footer vertically */
  align-items: center; /* Center content horizontally */
  min-height: 100vh;
 }

 .header {
  background: linear-gradient(to bottom, #1f1e1e, #000);
  padding: 17px 0;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  width: 100%;
 }

 .header .container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  align-items: center;
 }

 .header .logo {
  margin-right: auto;
 }

 .header .logo img {
  height: 75px;
 }

 .header .cart,
 .header .currency,
 .header .phone-search-container {
  margin-left: 15px; /* Increased margin for better spacing */
  color: #fff;
 }

 .header .currency select {
  display: block !important;
  width: auto !important;
  visibility: visible !important;
  background-color: #ffffff;
  color: #000;
  border: none;
  padding: 7px 10px;
 }

 .header .phone-search-container {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  margin-left: auto; /* Push to the right */
 }

 .header .phone-number {
  font-size: 17px;
  margin-bottom: 4px;
 }

 .header .search-bar {
  display: flex;
  border: 1px solid #ccc;
  border-radius: 4px;
  overflow: hidden;
 }

 .header .search-bar input {
  padding: 8px 12px;
  border: none;
  outline: none;
  flex-grow: 1;
 }

 .header .search-bar button {
  background-color: #fff;
  color: #c00;
  border: none;
  padding: 8px 12px;
  cursor: pointer;
 }

 .main-nav {
  background-color: rgb(139, 13, 13);
  color: #fff;
  padding: 10px 0; /* Increased padding for better visual */
  width: 100%;
 }

 .main-nav .container {
  display: flex;
  justify-content: center;
 }

 .main-nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
 }

 .main-nav ul li a {
  color: #fff;
  text-decoration: none;
  padding: 10px 15px;
  display: block;
 }

 .main-nav ul li a:hover {
  background-color: #ddd;
  color: #333;
 }

 .main-nav .dropdown {
  position: relative;
 }

 .main-nav .dropdown .dropdown-menu {
  display: none;
  position: absolute;
  background-color: #fff;
  list-style: none;
  padding: 10px;
  margin: 0;
  width: 200px;
  z-index: 1;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
 }

 .main-nav .dropdown:hover .dropdown-menu {
  display: block;
 }

 .main-nav .dropdown-menu li a {
  padding: 10px 15px;
  display: block;
  text-decoration: none;
  color: #000 !important;
 }

 .main-nav .dropdown-menu li a:hover {
  background-color: #f0f0f0;
 }

 .main-nav .dropdown > a::after {
  content: '\25BC';
  margin-left: 5px;
  font-size: 10px;
  vertical-align: 2px;
 }

 .main-nav .account-menu {
  width: 180px;
  padding: 0;
 }

 .main-nav .account-button {
  background-color: #c00;
  color: #fff;
  text-align: center;
  padding: 10px 15px;
  margin-bottom: 5px;
  display: block;
  text-decoration: none;
  border-radius: 5px;
 }

 .main-nav .register-button {
  background-color: #c00;
 }

 .breadcrumb {
  padding: 10px 20px;
  width: 90%;
  max-width: 1200px;
  margin: 20px auto; /* Added margin for spacing */
  color: #777;
  font-size: 14px;
  text-align: left;
 }

 .breadcrumb a {
  color: #c00;
  text-decoration: none;
 }

 .breadcrumb span {
  color: #777;
 }

 .form-container {
  background-color: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  width: 90%; /* Make the form container responsive */
  max-width: 400px; /* Limit the maximum width */
  margin-bottom: 20px; /* Add margin below the form */
 }

 .form-container h1 {
  color: #c00;
  margin-bottom: 20px;
  font-size: 24px;
 }

 .form-container p {
  color: #555;
  margin-bottom: 20px;
  font-size: 16px;
 }

 .form-container .form-group {
  margin-bottom: 20px;
  text-align: left;
 }

 .form-container label {
  display: block;
  margin-bottom: 5px;
  color: #333;
  font-size: 14px;
 }

 .form-container input[type="email"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
 }

 .form-container button {
  background-color: #c00;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  width: 100%;
 }

 .form-container button:hover {
  background-color: #a00;
 }

 .footer {
  background-color: #800000;
  color: rgb(217, 208, 208);
  text-align: left;
  padding: 20px;
  width: 100%;
 }

 .footer-top {
  text-align: center;
  margin-bottom: 20px;
  background-color: white;
  padding: 10px;
 }

 .footer-top .logos {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
 }

 .footer-top img {
  height: 25px;
  margin: 8px;
 }

 .footer-middle {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  width: 90%;
  max-width: 1200px;
  margin: 0 auto 20px auto; /* Added margin bottom */
 }

 .footer-column {
  margin-bottom: 20px;
 }

 .footer-column h3 {
  margin-bottom: 10px;
 }

 .footer-column a, .footer-column input, .footer-column button {
  display: block;
  margin-bottom: 5px;
  color: rgb(253, 255, 253);
  text-decoration: none;
  text-align: left;
  background-color: transparent;
  border: none;
  padding: 5px;
 }

 .footer-column .email-input {
  display: flex;
 }

 .footer-column button i {
  margin-left: 5px;
 }

 .footer-column .email-button {
  background-color: white;
  color: #800000;
  cursor: pointer;
  border: 1px solid white;
  border-left: none;
  padding: 8px 10px;
  text-decoration: none;
  display: flex;
  align-items: center;
  transition: background-color 0.3s ease;
 }

 .footer-column .email-button:hover {
  background-color: rgb(72, 62, 62);
 }
 .footer-column .email-button:hover i {
  color: white;
 }

 .footer-column input {
  border: 1px solid rgb(179, 186, 180);
  padding: 8px;
  color: rgb(27, 29, 23);
  background-color: lightgray;
  width: 250px;
  border-right: none;
 }

 .footer-column button {
  background-color: rgb(250, 252, 249);
  color: #000000;
  cursor: pointer;
  border: 1px solid rgb(17, 4, 4);
  padding: 8px 10px; /* Adjusted padding for uniformity */
 }

 .footer-bottom {
  text-align: center;
  margin-top: 20px;
  padding-bottom: 20px; /* Added padding at the bottom */
 }

 .footer-bottom .payment-icons img {
  height: 40px;
  margin: 0 5px;
 }