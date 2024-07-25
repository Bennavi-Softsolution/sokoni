# sokoni

This repository contains sokoni, a Laravel e-commerce application.

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Make sure you have the following installed:

- PHP
- Composer
- Node.js and npm

### Installation

1. **Clone the repository:**
   ```bash
   https://github.com/Bennavi-Softsolution/sokoni.git
   cd sokoni
   ```
1. **Install Laravel dependencies:**
   ```bash
   composer install
   ```
1. **Copy .env.example to .env and generate the application key:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
1. **Install JavaScript dependencies:**
   ```bash
   npm install
   ```

### Development
To start the development server:

1. **Compile assets and start Laravel:**
   ```bash
   php artisan serve
   ```
1. **Compile assets with Vite:**
   ```bash
   npm run dev
   ```

