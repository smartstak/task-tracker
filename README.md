# Task Tracker CLI

A simple command-line task tracker written in PHP. Manage your to-do, in-progress, and done tasks directly from your terminal.

## Features

- Add new tasks
- List all tasks or filter by status (`to-do`, `in-progress`, `done`)
- Update task descriptions
- Mark tasks as in-progress or done
- Delete tasks
- Tasks are persisted in a JSON file

## Requirements

- PHP 8.4 or higher
- Composer

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/smartstak/task-tracker.git
    cd task-tracker
    ```

2. Install dependencies:
    ```sh
    composer install
    ```

## Usage

Run the CLI script using PHP:

```sh
php src/cli.php <command> [arguments]
```

### Commands

- **Add a new task**
    ```sh
    php src/cli.php add "Task description"
    ```

- **List all tasks**
    ```sh
    php src/cli.php list
    ```

- **List tasks by status**
    ```sh
    php src/cli.php list to-do
    php src/cli.php list in-progress
    php src/cli.php list done
    ```

- **Update a task's description**
    ```sh
    php src/cli.php update <task_id> "New description"
    ```

- **Mark a task as in-progress**
    ```sh
    php src/cli.php mark-in-progress <task_id>
    ```

- **Mark a task as done**
    ```sh
    php src/cli.php mark-done <task_id>
    ```

- **Delete a task**
    ```sh
    php src/cli.php delete <task_id>
    ```

## Data Storage

Tasks are stored in `store/task.json`.

## License

MIT

---