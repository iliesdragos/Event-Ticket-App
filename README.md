# Event Ticket App 🎟️💻

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Blade](https://img.shields.io/badge/Blade-E34F26?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/docs/8.x/blade)
[![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)

## Project Overview

The **Event Ticket App** is a Laravel-based application that allows users to browse, select, and purchase tickets for various events. Built with PHP and Blade templating, this application provides a seamless experience for users to manage their event bookings and for administrators to oversee events, tickets, and transactions.

> **Note:** This project was developed in collaboration with two of my university colleagues as part of our coursework.

## Features

- **User Registration and Login**: Secure access for users, allowing them to register and log in to manage their bookings.
- **Event Listings**: Users can view a list of available events with detailed descriptions, images, and ticket prices.
- **Shopping Cart**: A dynamic cart where users can add, view, and remove tickets before checkout.
- **Payment Integration**: Secure payment processing through Stripe API, supporting major payment methods.
- **Admin Dashboard**: Allows administrators to add, edit, and delete events and manage ticket inventory.

## System Architecture

1. **Backend**: Built using PHP (Laravel framework) with Blade templating for views.
2. **Frontend**: HTML and CSS for structure and styling.
3. **Database**: MySQL for storing user data, events, and tickets.

## Technology Stack

- **PHP**: Core language for backend development.
- **Blade**: Laravel's templating engine for dynamic views.
- **HTML** and **CSS**: For structuring and styling the front-end.
- **Stripe API**: For secure payment processing.

## Setup and Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/iliesdragos/Event-Ticket-App.git
   cd Event-Ticket-App
   ```

2. Install Dependencies:
   ```bash
   composer install
   npm install
   ```

3. Database Setup:
-  Ensure MySQL is running.
-  Import the **events.sql** file to set up the necessary tables.

4. Environment Variables:
- Create a **.env** file and add the following configuration:
  ```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_database_name
  DB_USERNAME=your_database_user
  DB_PASSWORD=your_database_password

  STRIPE_KEY=your_stripe_key
  STRIPE_SECRET=your_stripe_secret
  ```

5. Running the Application:
-  Start the development server:
   ```bash
   php artisan serve
   ```
-  Compile frontend assets:
   ```bash
   npm run dev
   ```

## Future Improvements

- **Automated Email Reminders**: Implement automated email reminders for upcoming events.
- **Advanced Analytics**: Provide reporting features for administrators to analyze sales and user engagement.
- **Wishlist Feature**: Allow users to add events to a wishlist for future booking.
- **UI/UX Design Enhancements**: Improve the overall look and feel of the application to offer a more visually appealing and user-friendly experience.

  


   
