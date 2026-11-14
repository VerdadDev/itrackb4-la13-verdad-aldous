#Answers

J1 Your HomeController is not a resource controller. Name two things an index() on a resource controller does that yours does not have to.

- A resource controller automatically provides CRUD methods like create() and store(). My HomeController only has the methods I manually created, so I don't need to implement all CRUD methods.

J2 Your pagination links lost the search term until you added one method. Say what those links contained before, and what the controller therefore received.

- Before, the pagination links did not contain the search term. Because of this, the controller received an empty search value when I clicked the next page. I fixed it using withQueryString().

J3 A misspelled sort value does not break your page. Explain why that is worse than an error, and what your allowed list does about it.

- It is worse because the page still works but may show incorrectly sorted results without telling the user. The allowed list checks if the sort value is valid. If it is not, it uses the default sorting value, title.
