<p align="right"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"></a></p>

# Forum

Forum designed to facilitate conversations, discussions, and information sharing among a community of users. It provides a space where users can create posts, ask and reply questions, share experiences and discuss a wide range of topics. These discussions are organized into categories that are related to specific themes or subjects.



## Main Screen (Threads list)

![Screenshot from 2023-08-18 16-41-57](https://github.com/luis11anillo/forum/assets/76981798/d755c73d-10f9-41a3-a91a-e64c78cc1bc2)

## Thread and Replies

![Screenshot from 2023-08-29 15-57-47](https://github.com/luis11anillo/forum/assets/76981798/816044ec-52b4-484e-b342-dc58060c243b)

## Create thread

![Screenshot from 2023-08-29 15-54-39](https://github.com/luis11anillo/forum/assets/76981798/ad2ce4b2-3d09-4246-9102-331c0bbc99ae)








## Frameworks & packages:

 - [Laravel](https://laravel.com/docs/10.x)
 - [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze)
 - [Livewire](https://laravel-livewire.com/)
 - [Tailwind CSS](https://tailwindcss.com/docs/installation)


## Run Locally

#### Clone the project:

```bash
  git clone https://github.com/luis11anillo/forum.git
```

#### Go to the project directory:

```bash
  cd forum
```

#### Install dependencies:

```bash
  composer install
```
```bash
  npm install
```

#### Rename the file `.env.example` as `.env` and generate a new key
```bash
  php artisan key:generate
```
Then set the database credentials in the `.env` file

#### generate authentication Key for Breeze
```bash
  php artisan breeze:install
```

#### Start the server
```bash
  php artisan serve
```
```bash
  npm run dev
```


