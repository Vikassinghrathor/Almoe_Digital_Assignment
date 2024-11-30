# Laravel User Registration System 🚀

## Project Overview

This Laravel project demonstrates a robust and secure user registration system with comprehensive form validation, database integration, and clean architectural design. Built to showcase advanced web development skills, the application provides a seamless user registration experience with multiple layers of data validation and error handling.

## Key Features 🌟

- **Advanced Form Validation**
  - Full name validation with multi-word checks
  - Email domain validation
  - Phone number format validation
  - Unique email and phone number constraints

- **Secure Data Handling**
  - Prevents duplicate registrations
  - Validates input against multiple criteria
  - Implements Laravel's built-in security features

- **Clean Architecture**
  - Follows MVC (Model-View-Controller) design pattern
  - Separates concerns with dedicated controllers and models
  - Utilizes Laravel's migration system for database schema management

## Technical Skills Demonstrated 💡

- Laravel Framework proficiency
- Advanced form validation techniques
- Database migration and model creation
- Comprehensive error handling
- Frontend and backend integration

## Prerequisites 🛠️

Before you begin, ensure you have the following installed:
- XAMPP (or similar local server environment)
- Composer
- PHP 10.x or higher
- Laravel framework

## Screenshot

![Preview_Image_Almoe_Assignment](https://github.com/user-attachments/assets/406ce1f8-0e64-4db5-bac1-3698f6868f6b)

## Installation Steps 📦

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Vikassinghrathor/Almoe_Digital_Assignment.git
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Environment Configuration**
   - Copy `.env.example` to `.env`
   - Configure your database settings
   ```bash
   cp .env.example .env
   ```

4. **Database Setup**
   - Create a database named `your database name`
   - Run database migrations
   ```bash
   php artisan migrate
   ```

5. **Start the Application**
   - Start XAMPP Apache and MySQL services
   - Launch the application
   ```bash
   php artisan serve
   ```

6. **Access the Application**
   - Open your browser
   - Navigate to `http://localhost:8000`

## Validation Rules 🛡️

### Name Validation
- Minimum 2 characters
- Maximum 100 characters
- Letters and spaces only
- Requires at least two words
- Prevents repeated character names

### Email Validation
- Must be a valid email format
- Unique in the database
- Allowed domains: .com, .org, .net, .edu, .gov
- Maximum 255 characters

### Phone Number Validation
- Must be exactly 10 digits
- Unique in the database

## Error Handling 🚨

The application provides:
- Detailed error messages
- Input retention on validation failure
- Unique constraint prevention
- Comprehensive logging

## Responsive Design Compatibility 🌐
The application is designed to adapt seamlessly across various devices, ensuring a smooth user experience on desktops, tablets, and mobile phones.

## Contribution 🤝

Interested in contributing? Great! Please follow these steps:
1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## Learn More 📚

This project demonstrates:
- Laravel's powerful validation capabilities
- Best practices in web application development
- Secure user registration processes

**Happy Coding! 👨‍💻👩‍💻**
