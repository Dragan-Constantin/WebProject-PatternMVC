# WebProject-PatternMVC

A website created for a graded project in my "Pattern MVC" course at EFREI (Paris)

## Usage

For this project to work, you will need to create a file named `.env` and place it at the root of the project.
Then, copy the content of `.env.example` and paste it in the file you just created.
It should now look like this:

```bash
HOSTNAME = "database ip"
PORT = "database port"
USERNAME = "database username"
PASSWORD = "database password"
DBNAME = "database name"
```

Now, all you need to do is to replace the placeholders by the actual values of your database.
Here's an example:

```bash
HOSTNAME = "localhost"
PORT = "3306"
USERNAME = "root"
PASSWORD = "noot"
DBNAME = "smartbike"
```

Finally, for this to work correctly, you need to create the database. You will find in the file `db.sql` the sql queries necessary to create the database of this project.
