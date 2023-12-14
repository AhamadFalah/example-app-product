# Laravel Feature Branch: `feature/product`

This is a feature branch of a Laravel application, specifically focusing on product management. The branch includes enhancements related to the product features. Below is an overview of the changes made in this feature branch:

## Changes Made

- **Bootstrap Integration**: Replaced Tailwind CSS with Bootstrap for styling the user interface.
- **NPM Integration**: Added npm for managing frontend dependencies, enabling the use of Bootstrap.
- **Feature-Specific Views**: Created or modified Blade templates in the `resources/views` directory for product-related actions.
- **`feature/product` Branch**: This branch includes changes related to the product management feature.

## Project Structure

The overall project structure remains consistent with Laravel's conventions. However, the `feature/product` branch introduces changes in the following areas:

- **Views (`resources/views`)**: Modified or added Blade templates for the product feature, such as `create.blade.php`, `edit.blade.php`, and `index.blade.php`.
- **Assets (CSS and JS)**: Bootstrap integration is reflected in the `resources/assets` directory, particularly in `app.css` and `app.js`.
- **Controller (`ProductController.php`)**: Updated or created methods for handling product-related actions.
- **Branch-Specific Files**: The branch may include files specific to the product feature.

## How to Use the `feature/product` Branch

1. Ensure you are on the `feature/product` branch.
   ```bash
   git checkout feature/product
   ```

2. Run `composer install` to install PHP dependencies.
3. Run `npm install` to install frontend dependencies.
4. Configure the `.env` file with your database settings.
5. Run `php artisan migrate` to create the necessary database tables.
6. Run `npm run dev` to compile frontend assets.
7. Use `php artisan serve` to start the development server.
8. Access the application in your browser at `http://localhost:8000`.

Feel free to explore and modify the code within the `feature/product` branch, and merge it into the main branch once you are satisfied with the changes.

**Note:** Ensure that any changes made to the `feature/product` branch are thoroughly tested before merging into the main branch.
