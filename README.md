# CSC261 Project

## Project Milestons
- [Milestone 1](https://github.com/Slice0w0/CSC261Project/blob/main/Milestone1/CSC261%20Project%20Milestone%201.pdf) ([Google Doc](https://docs.google.com/document/d/1Wjgxi-J8XpzAjUtkPUv1GMzxLFGIRAXSeGHFrd7lZAk))
- [Milestone 2](https://github.com/Slice0w0/CSC261Project/blob/main/Milestone2/CSC261%20Project%20Milestone%202.pdf) ([Google Doc](https://docs.google.com/document/d/1hezdNpFzrC5O1DncyG2ULyy_Fpl2IdkQYtt00c6njEI))
- Milestone 3
  - [Task A](https://github.com/Slice0w0/CSC261Project/tree/main/TaskA.pdf) ([Google Doc](https://docs.google.com/document/d/1p3aEv_NuL4BD3iQo_sFtJg0p-QGYJPNKjuNv6qpeo7c/edit)) - BCNF Normalization
  - [Task B](https://github.com/Slice0w0/CSC261Project/tree/main/TaskB) - Creating Forms using `html` (including some `css` and `javascript` also)
  - [Task C](https://github.com/Slice0w0/CSC261Project/tree/main/TaskC) - Creating and Loading Relations
  - [Task D](https://github.com/Slice0w0/CSC261Project/tree/main/TaskD.txt) - Accessing the Relations from Web

## Needs Care

- In `load.sql` don't for get to change `..` to correponding path on local computer / server
- For all `php` login files
  - If using `php 8.0` below, remember to substitue `str_contains` to `strpos` 
  - If using `php 8.0` above, just use `str_contains`
- For all `mysqli` connections, remember to change the `$server`, `$username`, and `$database (db)`

## Notes

`CASE.Type` is stored as `int` but the correpsonding content is shown in the table below (the conversion is donw by `javascript`)

| Database data | Actual Type      |
|---------------|------------------|
| 0             | Violence         |
| 1             | Spam             |
| 2             | Misleading       |
| 3             | Copyright Issues |
| 4             | Sexual Content   |
