# Immunization Application README

## Introduction
Welcome to the Immunization Application README! This document provides an overview of the Immunization Application developed collaboratively by our team. The application aims to assist parents and healthcare providers in tracking children's immunization schedules, facilitating user authentication through login and registration functionalities. The backend of the application is built using Laravel, while the frontend is developed using Android Studio.

## Features
1. User Authentication: The application allows users, both parents and healthcare providers, to create accounts by registering with their basic details. Registered users can then log in securely to access the application's features.
2. Immunization Tracking: Parents can monitor their child's immunization schedule through the application. The app provides reminders for upcoming vaccinations and maintains a history of administered vaccines, ensuring children receive timely immunizations according to recommended guidelines.
3. Child Growth Monitoring: The application enables parents to monitor the growth and development of their children. Users can input data such as weight, height, and developmental milestones, allowing them to track progress over time.

## Technologies Used
- Laravel: The backend of the application is developed using the Laravel PHP framework. Laravel provides a robust foundation for building secure and scalable web applications, offering features such as routing, authentication, and database management.
- Android Studio: The frontend of the application is built using Android Studio, the official integrated development environment (IDE) for Android app development. Android Studio provides tools for designing user interfaces, writing code, and testing applications on various Android devices.
- MySQL: The application's data is stored and managed using MySQL, a popular open-source relational database management system. MySQL offers reliability, performance, and ease of use for handling large datasets.

## Installation Instructions
To set up the Immunization Application on your local environment, follow these steps:
1. Clone Repository
   ```
   git clone <repository-url>
   ```
2. Backend Setup:
   - Navigate to the backend directory (cd backend) and install dependencies using Composer:
     ```
     composer install
     ```
   - Rename the .env.example file to .env and configure your database connection details.
   - Generate a new application key
     ```
     php artisan key:generate
     ```
   - Run database migrations to create the necessary tables:
     ```
     php artisan migrate
     ```
3. Frontend Setup:
   - Open the Android project in Android Studio located in the frontend directory.
   - Configure the necessary API endpoints to communicate with the backend.
4. Run the Application:
   - Start the Laravel development server:
     ```
     php artisan serve
     ```
   - Run the Android application on an emulator or physical device from Android Studio.

## Contributing
We welcome contributions from the community to enhance the Immunization Application. If you would like to contribute, please follow these guidelines:
- Fork the repository and create a new branch for your feature or bug fix.
- Ensure that your code adheres to the project's coding standards and conventions.
- Submit a pull request detailing the changes you've made and any relevant information.

## Contact
For any inquiries or support regarding the Immunization Application, please contact our team at gathanafrr@gmail.com.

---

This README provides a comprehensive guide for setting up, understanding, and contributing to the Immunization Application. If you have any further questions or need assistance, don't hesitate to reach out. Happy coding!
   
