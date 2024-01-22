<body>

  <h1>Sound Group Entertainment Website</h1>

  <h2>Project Overview</h2>

  <p>The Sound Group Entertainment Website is a platform designed to host a vast collection of music and videos,
    catering to both regional and English language preferences. The website aims to provide a seamless and
    user-friendly experience for enthusiasts to explore, review, and rate various music and video content. The
    project is built on the Laravel framework, ensuring a robust and scalable solution.</p>

  <h2>Problem Statement</h2>

  <p>In today's world, music and videos are integral sources of entertainment. Sound Group recognizes this and
    endeavors to create a comprehensive website that organizes and showcases a diverse range of music and video
    content. The primary goal is to develop a user-centric platform that allows users to easily navigate through
    albums, artists, years, genres, and languages.</p>

  <h2>Features</h2>

  <ul>
    <li>
      <h3>User Roles:</h3>
      <ul>
        <li>Administrator: Responsible for managing content, categories, users, and overall website details.</li>
        <li>User: Able to register, search for content, add/modify reviews, and provide ratings.</li>
      </ul>
    </li>
    <li>
      <h3>Content Organization:</h3>
      <ul>
        <li>Music and video files are categorized by album, artist, year, genre, and language.</li>
        <li>Flashing "New" icon indicates the latest additions to the content library.</li>
        <li>Detailed information, images, and descriptions accompany each music and video entry.</li>
      </ul>
    </li>
    <li>
      <h3>Administrator Functionality:</h3>
      <ul>
        <li>Add music files with relevant information.</li>
        <li>Add video files with detailed information.</li>
        <li>Create and manage categories such as year, artist, album, etc.</li>
        <li>Delete music and video files.</li>
        <li>Create and manage user logins.</li>
        <li>Overall management of website details.</li>
      </ul>
    </li>
    <li>
      <h3>User Functionality:</h3>
      <ul>
        <li>Register and create a unique user ID.</li>
        <li>Search for music and video content based on name, artist, year, album, etc.</li>
        <li>Add or modify reviews for content.</li>
        <li>Add or modify ratings for music and videos.</li>
      </ul>
    </li>
    <li>
      <h3>Home Page:</h3>
      <ul>
        <li>Displays information about the website.</li>
        <li>Features a section for the latest music and videos, with 5 listings each.</li>
      </ul>
    </li>
  </ul>

  <h2>Customer Specifications</h2>

  <ul>
    <li>Mandatory user information: Name, address, phone numbers, email IDs.</li>
    <li>Proper validations for all data fields.</li>
    <li>Submission of the project with documentation and database backup.</li>
  </ul>

  <h2>Technologies Used</h2>

  <p>Laravel Framework</p>

  <h2>Getting Started</h2>

  <ol>
    <li>Clone the repository.</li>
    <li>Set up the Laravel environment.</li>
    <li>Import the provided database backup.</li>
    <li>Follow the documentation for detailed instructions on configuration and usage.</li>
  </ol>

  <h2>Documentation</h2>

  <p>Detailed documentation is available in the <code>/docs</code> directory. Please refer to it for information on
    installation, configuration, and usage.</p>

  <h2>Project Submission</h2>

  <p>Ensure that the project is submitted with proper documentation and a backup of the database.</p>

  <h2>Contributors</h2>

  <ul>
    <li>Wasif Ahmed</li>
    <li>Arshan Mustafa</li>
    <li>Usman Sawati</li>
    <li>Mohammad Idress</li>
  </ul>



  # Sound Group Entertainment Website Controllers Documentation

## Main Controller

### Introduction

The `MainController` is responsible for handling various user and admin-related functionalities in the Sound Group Entertainment website. It manages the user pages and admin dashboard, serving as a bridge between the frontend views and the backend models.

### User Pages

#### getIndexPage()

- **Purpose**: Renders the index page for general users.
- **View**: `pages.index`

#### getArtistPage()

- **Purpose**: Renders the artist profile page.
- **View**: `pages.artistProfile`

#### getProfilePage()

- **Purpose**: Renders the user profile page.
- **View**: `pages.profile`

#### getVideoPage()

- **Purpose**: Renders the video page for users.
- **View**: `pages.video`

#### getRegisterPage()

- **Purpose**: Renders the user registration page.
- **View**: `pages.register`

#### getLoginPage()

- **Purpose**: Renders the user login page.
- **View**: `pages.login`

### Admin Dashboard

#### getAdminPage()

- **Purpose**: Renders the admin dashboard with statistics and latest content.
- **View**: `admin.index`
- **Data Passed to View**:
  - `artistCount`: Count of artists.
  - `userCount`: Count of registered users.
  - `videoCount`: Count of video files.
  - `musicsCount`: Count of music files.
  - `latestMusic`: Latest 10 music files.
  - `latstVideos`: Latest 10 video files.

#### getAllArists()

- **Purpose**: Retrieves and renders a list of all artists in the admin panel.
- **View**: `admin.artists`
- **Data Passed to View**:
  - `data`: All artist records.

#### getAllMusicFiles()

- **Purpose**: Retrieves and renders a list of all music files in the admin panel.
- **View**: `admin.musics`
- **Data Passed to View**:
  - `data`: All music file records.
  - `Artist`: All artist records for dropdown selection.

#### addMusicFiles()

- **Purpose**: Renders the form to add new music files.
- **View**: `admin.addMusic`

#### getAllVideoFiles()

- **Purpose**: Retrieves and renders a list of all video files in the admin panel.
- **View**: `admin.videos`
- **Data Passed to View**:
  - `data`: All video file records.
  - `Artist`: All artist records for dropdown selection.

#### addVideoFiles()

- **Purpose**: Renders the form to add new video files.
- **View**: `admin.addVideos`

#### getAllUsers()

- **Purpose**: Retrieves and renders a list of all registered users in the admin panel.
- **View**: `admin.users`
- **Data Passed to View**:
  - `data`: All user records.

#### getAllAlbumns()

- **Purpose**: Renders the admin page for managing albums.
- **View**: `admin.albumns`

#### Contributors

- Wasif Ahmed

Feel free to contribute to the project and make it even better!

---

## Functional Controller

### Introduction

The `FunctionalController` manages various functionalities related to adding and deleting artists, music files, video files, and users. It also includes a function for creating albums. This controller acts as a bridge between the user interface and the backend models.

### Methods

#### addArtist(Request $request)

- **Purpose**: Adds a new artist with an associated profile picture.
- **Parameters**:
  - `$request`: The HTTP request containing artist details.
- **Files Uploaded**:
  - `artistPicture`: Artist profile picture.
- **Returns**: Redirects back after adding the artist.

#### addMusics(Request $request)

- **Purpose**: Adds new music files with associated images.
- **Parameters**:
  - `$request`: The HTTP request containing music details.
- **Files Uploaded**:
  - `AudioMusicIMage`: Music image.
  - `AudioMusicFile`: Music audio file.
- **Returns**: Redirects back after adding the music files.

#### deleteMusic($id)

- **Purpose**: Deletes a specific music file by its ID.
- **Parameters**:
  - `$id`: The ID of the music file to be deleted.
- **Returns**: Redirects back after deleting the music file.

#### addVideos(Request $request)

- **Purpose**: Adds new video files with associated images.
- **Parameters**:
  - `$request`: The HTTP request containing video details.
- **Files Uploaded**:
  - `VideoImageFile`: Video image.
  - `VideoFile`: Video file.
- **Returns**: Redirects back after adding the video files.

#### deleteVideo($id)

- **Purpose**: Deletes a specific video file by its ID.
- **Parameters**:
  - `$id`: The ID of the video file to be deleted.
- **Returns**: Redirects back after deleting the video file.

#### addUsers(Request $request)

- **Purpose**: Adds new users with associated profile pictures and sends a registration email.
- **Parameters**:
  - `$request`: The HTTP request containing user details.
- **Files Uploaded**:
  - `userPicture`: User profile picture.
- **Returns**: Redirects back after adding the users.

#### createAlbum(Request $request)

- **Purpose**: Placeholder function for creating albums.
- **Parameters**:
  - `$request`: The HTTP request containing album details.
- **Returns**: Displays the dumped request data.

### Conclusion

The `FunctionalController` provides essential functionality for adding, deleting, and managing artists, music files, video files, and users in the Sound Group Entertainment website. Additional functions can be added or modified based on project requirements.


# Sound Group Entertainment Website

## Getting Started

To set up and run the Sound Group Entertainment Website project, follow these steps:

### Prerequisites

- Make sure you have [Composer](https://getcomposer.org/) installed on your system.

### Installation

1. Clone the repository to your local machine:

   ```bash
   git clone <repository-url>
Navigate to the project directory:

bash
Copy code
cd sound-group-entertainment-website
Install the project dependencies using Composer:

bash
Copy code
composer install
Configuration
Generate a new application key:

bash
Copy code
php artisan key:generate
Database Setup
Run database migrations to create the required tables:

bash
Copy code
php artisan migrate
Optimization
Optimize the project for better performance:

bash
Copy code
php artisan optimize
Running the Development Server
Start the development server:

bash
Copy code
php artisan serve
Access the application in your web browser at http://localhost:8000.

Additional Notes
Ensure that your environment is configured correctly, including database settings and other Laravel configurations.
Customize the project as needed based on your specific requirements.
For production deployments, consider additional steps like setting up a web server (e.g., Nginx, Apache), securing your environment, and configuring necessary environment variables.
Run the Commands
Manually run the following commands in your terminal:

bash
Copy code
composer install
php artisan key:generate
php artisan migrate
php artisan optimize
php artisan serve
Feel free to customize and expand the documentation based on your specific project needs and conventions.

sql
Copy code

Copy the content above and paste it into your README.md file. Adjust the `<reposit
</body>
