#Answers

F1 Authentication and authorisation are not the same. In one sentence each: what did this lesson give you, and what is still missing next meeting?

    This lesson taught me how to protect routes using authentication

F2 Why does a successful login call session()->regenerate()? What goes wrong if you skip it?

    session()->regenerate() creates a new session ID after login to prevent session fixation attacks. If skipped, an attacker may exploit an existing session ID to access the user's account.

F3 Why does a failed login use the same message for a wrong password and an unknown email?

    Using the same error message prevents attackers from knowing whether an email is registered or if the password is wrong, helping protect user accounts from enumeration attacks

F4 Why do index and show stay public while create/edit/update/destroy use auth?

    Index and show are public so visitors can view records, while create, edit, update, and destroy require authentication because they involve adding, modifying, or deleting data.

F5 You hid Add (and actions) for guests. Why is that not enough to secure those actions? What actually stops a stranger?

    Hiding buttons is not enough because a stranger can still access the URL or send a request directly. The auth middleware protects the routes on the server and blocks unauthenticated users from performing those actions.

F6 In screenshot 20 the route name was wrong. Why does auth middleware care that the route is named exactly login?

    Auth middleware uses the exact route name login to know where to redirect unauthenticated users. If the route name is incorrect or missing, Laravel may throw a route-not-found error instead of redirecting properly.
