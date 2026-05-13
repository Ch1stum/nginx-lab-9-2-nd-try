Лабораторная работа №9: CI/CD для PHP-приложения с использованием GitHub Actions и Docker
👩‍💻 Автор
ФИО: Косинский Максим Сергеевич

Группа: ПМ2-ИП1

📌 Описание задания
Научиться:

Настраивать CI/CD pipeline
Использовать GitHub Actions
Запускать Docker-контейнеры в CI
Автоматически запускать тесты PHPUnit
Выявлять ошибки через CI
Результат доступен по адресу http://localhost:8080.

⚙️ Как запустить проект
Клонировать репозиторий:

git clone https://github.com/Ch1stum/nginx-lab-9-2-nd-try.git
cd nginx-lab-9-2-nd-try
Запустить контейнеры:

docker-compose up -d --build
📂 Содержимое проекта

.github/workflows/ci.yml — CI/CD пайплайн, запуск тестов в GitHub Actions

code/ — папка с PHP-кодом и тестами

docker-compose.yml — запуск PHP-контейнера

.gitignore — исключает ненужные файлы из Git

✅ Результат Сервер в Docker успешно запущен, тесты работают правильно.
