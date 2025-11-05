<a id="readme-top"></a>

![GitHub repo size](https://img.shields.io/github/repo-size/krishujeniya/Attendance-System-with-php)
![GitHub contributors](https://img.shields.io/github/contributors/krishujeniya/Attendance-System-with-php)
![GitHub stars](https://img.shields.io/github/stars/krishujeniya/Attendance-System-with-php?style=social)
![GitHub forks](https://img.shields.io/github/forks/krishujeniya/Attendance-System-with-php?style=social)

<br />
<div align="center">
<a href="https://github.com/krishujeniya/Attendance-System-with-php"><img src="assets/img/mylogob.png" alt="Logo" height="180"></a>
<h1 align="center"><a href="https://github.com/krishujeniya/Attendance-System-with-php">Attendance System with PHP</a></h1>
</div>

<details>
<summary>Table of Contents</summary>
<ol>
  <li>
    <a href="#about-the-project">About The Project</a>
    <ul>
      <li><a href="#key-features">Key Features</a></li>
      <li><a href="#built-with">Built With</a></li>
    </ul>
  </li>
  <li>
    <a href="#getting-started">Getting Started</a>
    <ul>
      <li><a href="#prerequisites">Prerequisites</a></li>
      <li><a href="#installation">Installation</a></li>
    </ul>
  </li>
  <li><a href="#license">License</a></li>
  <li><a href="#acknowledgments">Acknowledgments</a></li>
</ol>
</details>

## About The Project
This project is a modern, web-based Attendance System built using PHP and MySQL. Designed for educational institutions, small businesses, or any organization needing to track presence, it offers a streamlined way to manage attendance records digitally. This system aims to reduce manual effort, improve accuracy, and provide an efficient, user-friendly platform for administrators and users to monitor attendance effectively.

### Key Features
-   **Role-Based Access:** Differentiates between administrator and regular user roles, ensuring secure and appropriate access to functionalities.
-   **Easy Attendance Marking:** Provides a simple and intuitive interface for quick daily attendance marking.
-   **Comprehensive Record Management:** Users can view, search, and manage attendance records with filters for dates, users, or status.
-   **Report Generation:** Generate custom attendance reports for specific periods or individual users, facilitating easy overview and analysis.
-   **User Authentication:** Secure login and registration functionality to protect sensitive attendance data.

### Built With
*   [![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
*   [![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
*   [![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
*   [![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
*   [![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
*   [![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites
Before you begin, ensure you have the following installed on your system:
*   **Web Server:** Apache or Nginx
*   **PHP:** Version 7.4 or higher
*   **MySQL:** Version 5.7 or higher
*   **Composer:** (Optional, but recommended for dependency management)

### Installation

1.  **Clone the repository:**
    ```sh
    git clone https://github.com/krishujeniya/Attendance-System-with-php.git
    ```
2.  **Navigate to the project directory:**
    ```sh
    cd Attendance-System-with-php
    ```
3.  **Database Setup:**
    *   Create a new MySQL database (e.g., `attendance_system`).
    *   Import the `database.sql` file (usually found in the project root or a `db/` folder) into your newly created database.
4.  **Configuration:**
    *   Locate the database connection file (e.g., `config/database.php` or `includes/db.php`).
    *   Update the database credentials (username, password, database name) to match your MySQL setup.
5.  **Web Server Setup:**
    *   Configure your web server (Apache/Nginx) to point its document root to the project's public directory (where your `index.php` or main entry point is located).
6.  **Access the Application:**
    *   Open your web browser and navigate to the configured URL (e.g., `http://localhost/attendance-system-with-php`).
    *   Refer to the database for default administrator credentials, or follow registration instructions if available.

## License

Distributed under the MIT License. See `LICENSE.txt` for details.

## Acknowledgments

*   [Open Source Community](https://opensource.org/)
*   [Shields.io](https://shields.io/)
*   [Bootstrap Icons](https://icons.getbootstrap.com/)