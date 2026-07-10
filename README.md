# 📝 TexLog - A Custom PHP MVC Blog Engine

[🌐 Switch to Persian Version (فارسی)](README_FA.md)
# 📝 TexLog - A Custom PHP MVC Blog Engine

![PHP Version](https://img.shields.io/badge/php-%3E%3D8.0-blue.svg)
![Architecture](https://img.shields.io/badge/Architecture-MVC-green.svg)
![CSS Framework](https://img.shields.io/badge/CSS-Tailwind%20CSS-38B2AC.svg)

**TexLog** is a lightweight, high-performance blogging engine built from scratch using pure PHP following the **Model-View-Controller (MVC)** architectural pattern. It features a custom-built Regex Router and a modern UI styled with **Tailwind CSS**.

---

## ✨ Key Features

-   🚀 **Custom MVC Architecture:** Clean separation of concerns (Models, Views, and Controllers) for easy maintainability.
-   🛣️ **Regex-Powered Router:** A robust routing system that supports dynamic URL patterns (e.g., `/post/123`) and handles clean URLs.
-   🎨 **Modern UI:** Fully responsive and elegant design powered by **Tailwind CSS**.
-   🛠️ **Dynamic Routing:** Intelligent handling of active navigation states via JavaScript and PHP.
-   📂 **Clean URL Structure:** SEO-friendly routing system.

## 🏗️ Architecture Overview

The project follows the MVC pattern to ensure scalability:

-   **`App/`**: Contains the core logic.
    -   **`Controllers/`**: Handles user requests and interacts with Models.
    -   **`Models/`**: Manages data logic and database interactions.
    -   **`Core/`**: Contains the engine (Router, Controller base class, etc.).
-   **`Views/`**: Contains HTML templates and UI components (using Tailwind CSS).
-   **`Front/`**: The public entry point (`index.php`) for the application.

## 🚀 Getting Started

### Prerequisites

-   PHP $\ge$ 8.0
-   Composer (optional, if using external packages)
-   A local server environment (XAMPP, Laragon, or PHP Built-in server)

### Installation

1.  **Clone the repository:**
```bash
git clone https://github.com/Abolfazlmansori/TexLog.git
cd TexLog

    Configure the environment:(If you use a .env file, copy the example and fill in your database credentials)

                                                                    bash
cp .env.example .env

    Run the project:You can use the built-in PHP server for quick testing:

                                                                    bash
php -S localhost:8000 -t Front/

Then, open `http://localhost:8000` in your browser.

🛠️ Technologies Used

    Language: PHP 8+
    Styling: Tailwind CSS
    Pattern: MVC (Model-View-Controller)
    Routing: Custom Regex-based Router

🤝 Contributing

Contributions are welcome! If you’d like to improve TexLog, feel free to fork the repo and submit a pull request.

    Fork the Project
    Create your Feature Branch (git checkout -b feature/AmazingFeature)
    Commit your Changes (git commit -m 'Add some AmazingFeature')
    Push to the Branch (git push origin feature/AmazingFeature)
    Open a Pull Request

📄 License

Distributed under the MIT License. See LICENSE for more information.

Developed with ❤️ by Abolfazl Mansori

                                                                    text

---

### چند نکته برای بهتر شدن README شما:

1.  **بخش Prerequisites:** اگر از دیتابیس (مثل MySQL) استفاده می‌کنید، حتماً در بخش نصب (Installation) بنویسید که کاربر باید ابتدا دیتابیس را بسازد و فایل `.sql` شما را وارد کند.
2.  **تصویر (Screenshot):** یکی از بهترین کارها برای جذب مخاطب در گیت‌هاب این است که یک اسکرین‌شات از ظاهر وبلاگ خود بگیرید و در ابتدای فایل قرار دهید.
*   روش کار: یک عکس در پوشه‌ای به نام `screenshots` قرار دهید و با کد `![Alt Text](screenshots/home.png)` آن را نمایش دهید.
3.  **بخش License:** اگر می‌خواهید پروژه کاملاً آزاد باشد، یک فایل به نام `LICENSE` بسازید و محتوای لایسنس MIT را در آن قرار دهید (این کار بسیار حرفه‌ای است).

**آیا می‌خواهید بخش خاصی (مثلاً مربوط به دیتابیس یا نحوه کارکرد روتِر) را به صورت دقیق‌تر به این متن اضافه کنم؟**
