 Project Documentation: The Glass Box (Anonymous Feedback)
1. Project Initialization
Initialized a new Laravel 12 application (laravel new feedback).
Configured the environment for MySQL (feedback_db).
2. Routing & Architecture
Named Routes: Defined decoupled named routes for the entry point (feedback.form) and submission (feedback.submit).
Controller Implementation: Refactored logic from Route Closures to a dedicated FeedbackController to adhere to the MVC Pattern and keep web.php clean.
3. UI Layer (Blade)
Created a feedback Blade view utilizing Named Routes for the form action.
Implemented CSRF Protection (@csrf) to secure the form against cross-site attacks.
Implemented Flash Message display for user feedback after submission.
Added global error rendering using the $errors variable.
4. Validation & Security
Form Request: Created StoreFeedbackRequest to handle validation logic, ensuring Separation of Concerns and keeping the Controller "skinny."
Dependency Injection: Utilized Method Injection to type-hint the custom Form Request in the controller.
Custom Middleware: Implemented CheckForSpam middleware to filter malicious content before it reaches the controller.
Logic: Differentiated that Validation checks data format, while Middleware filters the request intent.
5. Observability & UX
Contextual Logging: Implemented the Log facade to create a permanent audit trail of submissions with IP context.
Session Flash Data: Utilized the Post-Redirect-Get (PRG) pattern with session flash data (->with()) to provide a "Success" message that self-destructs after one request.





