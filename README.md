# faq

Approach:

This project is created to notify a user when the question being answered or edited. The user should get an email with the message of action and link button to that question.



Classification:

1. This project is created for user login and registration. The simple project with every basic things from user access to database, we have covered all things in this single project.
2. This project gives you the access to create a question and also answer the question. The question panel with the time the question was posted and page bar will be created. 
3. The unique feature in this project is notifying user when the user's question get answered. And it will send notification via email with link to that website. 
4. You can access email through 'mailtrap' account. The email with user id and body text will be see in the frame. 
5. The email would have the brief message followed by the link button to the question.  
 
 
To run the FAQ Project:

1. git clone (https://github.com/krishna17818/faq.git)
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database / with sqlite or other (https://laravel.com/docs/5.6/database)
5. run: php artisan key:generate
6. setup database / with sqlite or other https://laravel.com/docs/5.6/database
7. Run: php artisan migrate
8. Run: unit tests: phpunit
9. Run: seeds php artisan migrate:refresh --seed


Project Resources:

(https://laravel.com/docs/5.6/eloquent)

(https://laravel.com/docs/5.6/database)

(https://laravel.com/docs/5.6/seeding)

(https://laravel.com/docs/5.6/testing)


Relevant feature resources:

(https://laravel.com/docs/5.6/notifications#mail-notifications)

(https://laravel.com/docs/5.6/notifications)

(https://mailtrap.io)