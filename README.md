Laravel 12 Realtime Chat Application

A simple and modern chat application built with Laravel 12 and Pusher for realtime messaging.

🚀 Features

User authentication (Register & Login)

Realtime private & group chat using Pusher

Online/offline user status

Clean UI with Bootstrap Admin template

Secure password hashing with Laravel Hash

Easy to customize and extend

🛠️ Tech Stack

Backend: Laravel 12

Frontend: Blade (Bootstrap template)

Realtime: Pusher WebSockets

Database: MySQL

📂 Project Setup

Clone the repository

git clone https://github.com/majid-ali-dev/laravel12-chat-application.git
cd chat-application


Install dependencies

composer install
npm install && npm run dev


Create .env file and configure database + Pusher keys

Run migrations

php artisan migrate


Start the server

php artisan serve

🔑 Pusher Setup

Create a free account on Pusher

Add your App ID, Key, Secret, and Cluster in .env:

PUSHER_APP_ID=your-app-id
PUSHER_APP_KEY=your-app-key
PUSHER_APP_SECRET=your-app-secret
PUSHER_APP_CLUSTER=mt1
BROADCAST_DRIVER=pusher
