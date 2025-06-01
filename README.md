<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://https://github.com/Mikaelaa05">
  <!-- TODO: If you want to add logo or banner you can add it here -->
    <img src="assets/img/Kessoku_Band_Logo_Clear.png" alt="Nyebe" width="130" height="100">
  </a>
<!-- TODO: Change Title to the name of the title of your Project -->
  <h3 align="center">🎸 Bocchi the Rock! Fan Page (AD-Task-2)🎶</h3>
</div>
<!-- TODO: Make a short description -->
<div align="center">
  Welcome to the Bocchi the Rock! Fan Page, a lovingly crafted website dedicated to the amazing anime series Bocchi the Rock! 🌟
</div>

<br />

[![wakatime](https://wakatime.com/badge/github/Mikaelaa05/AD-Task-2.svg)](https://wakatime.com/badge/github/Mikaelaa05/AD-Task-2)

---

<!-- TODO: If you want to add more layers for your readme -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

## 🌟 Features
- **Dynamic Character Pages**: Each character has their own page with unique themes and images.
- **Interactive Image Navigation**: Use arrows to browse through character images.
- **About Section**: Learn about the creators, studio, and the series itself.
- **Contact Us**: Reach out to us with your thoughts and feedback.
- **Back Button**: Easily navigate back to the previous page.
- **Band Info Section**: Displays detailed information about each band member using arrays and dictionaries.
- **Hover Effects**: Interactive hover effects for character names with color changes and underlines.
- **🎵 Floating MP3 Player**: Listen to a curated playlist of Bocchi the Rock! songs while browsing the site.
    - **⚠NOTE⚠**: *mp3 player is only **compatible** with **Docker**, **FiveServer** and **Apache/Nginx**. It is **not compatible** with **php -S***
    - **Playlist Dropdown**: View and select from a list of available songs.
    - **Progress Bar & Timer**: Track song progress with a visual slider and time display.
    - **Volume Control**: Adjust the audio volume with a modern slider.
    - **Playback Controls**: Play, pause, skip, rewind, fast-forward, and navigate between songs.
    - **Shuffle & Loop Modes**: Shuffle songs, loop the playlist, or repeat a single song with intuitive toggles.
    - **Draggable & Minimize**: Move the player anywhere on the screen or minimize it for convenience.
    - **Responsive UI**: Player adapts to different screen sizes and themes.
- **Dockerized Deployment**: Easily run the entire website in a containerized environment using Docker and Docker Compose.

---

## 🎶 About Bocchi the Rock!
*Bocchi the Rock!* follows the story of **Gotoh Hitori**, a shy and introverted girl who dreams of becoming a rock star. Through her journey with the **Kessoku Band**, she learns about friendship, music, and self-confidence. 💕✨

---

### Key Components

<!-- TODO: List of Key Components -->
<!-- The following are just sample -->

- Authentication & Authorization
- CRUD Operations for Invetory System

### Technology

<!-- TODO: List of Technology Used -->
#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Framework/Library
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

#### Databases
![MySQL](https://img.shields.io/badge/MySQL-00758F?style=for-the-badge&logo=mysql&logoColor=white)
![MongoDB](https://img.shields.io/badge/MongoDB-47A248?style=for-the-badge&logo=mongodb&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white)

#### Deployment
![Vercel](https://img.shields.io/badge/Vercel-000000?style=for-the-badge&logo=vercel&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)

---

## 🚀 How to Run

### Option 1: Docker (Recommended)
1. Make sure you have [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed and running.
2. In your project directory, run:
   ```sh
   docker compose up --build
3. Open your browser and go to http://localhost:9000

### Option 2: XAMPP / FiveServer (Standard)
1. Clone the repository.
2. Use a local server like **XAMPP** or **FiveServer**.
3. Open the website in your browser.

---

## 🎸 Meet the Kessoku Band!
- **Gotoh Hitori**: The shy guitarist 🎸
- **Ikuyo Kita**: The cheerful vocalist 🎤
- **Ichiji Nijika**: The energetic drummer 🥁
- **Yamada Ryo**: The mysterious bassist 🎵

---

## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-ProjectName
└─ assets
|   └─ css
|   |   └─ name.css
|   └─ img
|   |   └─ name.jpeg/.jpg/.webp/.png
|   └─ js
|       └─ name.js
└─ components
|   └─ name.component.php
|   └─ templates
|      └─ name.component.php
└─ handlers
|   └─ name.handler.php
└─ pages
|  └─ pageName
|     └─ assets
|     |  └─ css
|     |  |  └─ name.css
|     |  └─ img
|     |  |  └─ name.jpeg/.jpg/.webp/.png
|     |  └─ js
|     |     └─ name.js
|     └─ index.php
└─ utils
|   └─ name.utils.php
└─ vendor
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

<!-- TODO: Add References -->

| Title        | Purpose                                                                       | Link          |
| ------------ | ----------------------------------------------------------------------------- | ------------- |
| Sample Title | Sample purpose would be here like this and this is the example of what it is. | trykolang.com |
| Sample Title | Sample purpose would be here like this and this is the example of what it is. | trykolang.com |
| Sample Title | Sample purpose would be here like this and this is the example of what it is. | trykolang.com |
| Sample Title | Sample purpose would be here like this and this is the example of what it is. | trykolang.com |


## 💗❤️ Thank You for Visiting! 💛💙
Enjoy exploring the world of *Bocchi the Rock!* 🌟✨ Let’s rock together! 🎶