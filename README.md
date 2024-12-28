# BT1: Profile

## Installation

### Step 1: Clone the repository

```bash
git clone <repository_url>
cd <project_directory>
```

### Step 2: Install dependencies

```bash
composer install
npm install
```

### Step 3: Set up environment

Copy `.env.example` to `.env` and set up your database and other required configurations.

### Step 4: Generate application key

```bash
php artisan key:generate
```

### Step 5: Create the symbolic link for storage for avatars

```bash
php artisan storage:link
```

### Step 6: Migrate the database

```bash
php artisan migrate --seed
```

### Step 7: Run the application

```bash
php artisan serve
```

Now you can access the application at `http://localhost:8000`.
