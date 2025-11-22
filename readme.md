# WebD — Weekly Labs (Operating Systems course)

This repository contains weekly PHP/HTML labs for the OS course (Weeks 2–9). Each week lives in its own folder and contains exercises demonstrating basic PHP, file I/O, arrays, forms, and simple CRUD with MySQL (Week 8).

## Quick start

Prerequisites
- XAMPP (Apache + MySQL) or similar LAMP/WAMP stack.
- Place this folder under your web server document root (e.g. `c:\xampp\htdocs\WebD`).
- Start Apache and MySQL.

Database
- The Week 8 labs use a database named `labdb` with tables such as `user` and `product`.
- You can create a minimal schema:

$$
\begin{aligned}
CREATE\ DATABASE\ labdb; \\
USE\ labdb; \\
CREATE\ TABLE\ user( \\
\quad UserName\ varchar(50)\ PRIMARY\ KEY, \\
\quad Password\ varchar(255), \\
\quad FirstName\ varchar(100), \\
\quad LastName\ varchar(100), \\
\quad email\ varchar(255) \\
); \\
CREATE\ TABLE\ product( \\
\quad productID\ INT\ AUTO_INCREMENT\ PRIMARY\ KEY, \\
\quad PName\ varchar(255), \\
\quad Description\ text, \\
\quad Price\ decimal(10,2), \\
\quad Stock\ int \\
);
\end{aligned}
$$

How to run
1. Start Apache & MySQL.
2. Open a browser and navigate to the weekly index pages, for example:
   - Week 8 menu: [Week8/index.php](Week8/index.php)
   - Week 8 (correct) menu: [Week8_Correct/index.php](Week8_Correct/index.php)

## Notes & recommended improvements
- Week8_Correct uses a shared DB connection file: [`database.php`](Week8_Correct/database.php).
- Use prepared statements instead of string interpolation to avoid SQL injection (e.g., in [`add_product.php`](Week8_Correct/add_product.php), [`delete_product.php`](Week8_Correct/delete_product.php), and user-related files).
- Sanitize and validate form inputs server-side.
- Add session/auth for protected operations (edit/delete).

## Files (open any file by clicking its path)
- [Week2/helloworld.php](Week2/helloworld.php)
- [Week2/Sport.html](Week2/Sport.html)

- [Week3/hello_world_week2.php](Week3/hello_world_week2.php)
- [Week3/helloworld.php](Week3/helloworld.php)
- [Week3/Sport.php](Week3/Sport.php)

- [Week4/week4_lab.php](Week4/week4_lab.php)
- [Week4/week4_lab3.php](Week4/week4_lab3.php)
- [Week4/week4_q2.php](Week4/week4_q2.php)

- [Week5/header.php](Week5/header.php)
- [Week5/post_q3.php](Week5/post_q3.php)
- [Week5/post_q4.php](Week5/post_q4.php)
- [Week5/q1.php](Week5/q1.php)
- [Week5/q2.php](Week5/q2.php)
- [Week5/q3.php](Week5/q3.php)
- [Week5/q4.php](Week5/q4.php)

- [Week6/q1.php](Week6/q1.php)
- [Week6/q2.php](Week6/q2.php)
- [Week6/q3.php](Week6/q3.php)
- [Week6/q4.php](Week6/q4.php)
- [Week6/q5.php](Week6/q5.php)
- [Week6/test/lab6.1.txt](Week6/test/lab6.1.txt)
- [Week6/test/lab6.2.txt](Week6/test/lab6.2.txt)

- [Week7/q1.php](Week7/q1.php)
- [Week7/q5.php](Week7/q5.php)
- [Week7/q5post.php](Week7/q5post.php)

- [Week8/delete_user.php](Week8/delete_user.php)
- [Week8/edit_user.php](Week8/edit_user.php)
- [Week8/index.php](Week8/index.php)
- [Week8/list_users.php](Week8/list_users.php)

- [Week8_Correct/add_product.php](Week8_Correct/add_product.php)
- [Week8_Correct/database.php](Week8_Correct/database.php)
- [Week8_Correct/delete_product.php](Week8_Correct/delete_product.php)
- [Week8_Correct/edit_product.php](Week8_Correct/edit_product.php)
- [Week8_Correct/index.php](Week8_Correct/index.php)
- [Week8_Correct/show_products.php](Week8_Correct/show_products.php)

- (Week9 is currently empty)

## Helpful entry points / symbols
- DB connection helper: [`Week8_Correct\database.php`](Week8_Correct/database.php)
- Add product form: [`Week8_Correct\add_product.php`](Week8_Correct/add_product.php)
- List products: [`Week8_Correct\show_products.php`](Week8_Correct/show_products.php)
- Edit products list: [`Week8_Correct\edit_product.php`](Week8_Correct/edit_product.php)
- Delete products: [`Week8_Correct\delete_product.php`](Week8_Correct/delete_product.php)

## License
Personal course work — no license specified.
