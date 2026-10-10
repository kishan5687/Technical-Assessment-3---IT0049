# Tasks for Today Management System
**Course Code:** IT0049 (Web System Technologies)  
**Assessment:** Technical Summative Assessment 3

## Developer Information
* **Name:** QUEJADA, RAINA KISHAN S.  
* **Section:** TW35  

## Project Overview
This application is an internal team dashboard tool that separates a filtered "Today's Tasks" operational view from a complete, unfiltered structural list of logged items. The data layer uses a shared relational model format using PHP MVC conventions.

## Live Application URL
* Hosted Version: [https://quejada.page.gd/]

## Local Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone <your-repository-url>
   cd <project-folder-name>
   ```

2. **Configure Database Connection**
   * Create a database named `tasks_db` in your local phpMyAdmin configuration setup.
   * Rename the root `env` file to `.env`.
   * Open `.env` and check that `database.default.database` matches `tasks_db`.

3. **Run Database Migrations and Seeds**
   Execute these commands inside your project terminal window:
   ```bash
   php spark migrate
   php spark db:seed MainSeeder
   ```

4. **Serve Application Locally**
   ```bash
   php spark serve
   ```
   Open your browser and navigate to `http://localhost:8080` to interact with the project dashboard.
