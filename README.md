# Christmas Messages

**Christmas Messages** is a Laravel-based web application that allows users to create and send personalized Merry Christmas messages to their loved ones. Each message is unique, and users can share the exclusive link to the message with friends and family.

## How It Works

1. **Homepage:**
    - Upon accessing the homepage, users are greeted with a simple form requesting their name (optional) and the Merry Christmas message they want to send.
2. **Exclusive Link:**
    - After submission, users receive an exclusive link to the created message.
3. **Sharing:**
    - Users can share the message link with friends and family through social media, email, or any communication method of their choice.
4. **Message View:**
    - Recipients of the link are directed to a static page where the personalized message is displayed warmly. If the sender included their name, it is also shown in the message.

## System Requirements

- PHP >= 7.2.5
- Composer
- Node.js and npm
- Relational database

## Installation

1. **Clone the Repository:**

```
git clone https://github.com/RaphaelAzambuja/Christmas-message.git
```

2. **Install Composer Dependencies:**

```
composer install
```

3. **Copy the Configuration File:**

```
cp .env.example .env
```

Configure the `.env` file with your database settings and other necessary variables.

4. **Generate Application Key:**

```
php artisan key:generate`
```

5. **Run Database Migrations:**

```
php artisan migrate
```

6. **Start the Development Server:**

```
php artisan serve
```

Access the application at [http://localhost:8000](http://localhost:8000/).
