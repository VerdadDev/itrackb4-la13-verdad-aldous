Lab Activity 10

#Answers

G1 Route model binding needs two things to be true. Name both, and say what happens when only one of them is.

- The route parameter name must match the controller method parameter.
  The parameter type must be the correct Eloquent model.
  If only one matches, Laravel may fail to resolve the model correctly and return an error or treat the value as a regular parameter.

G2 Your Delete link opened the detail page instead of deleting anything. Explain why.

- A link uses a GET request by default. Deleting requires a DELETE request, so the link only opened the detail page instead of deleting the record. Use a form with @method('DELETE')

G3 old() takes a second argument on your edit form. What would break if you left it out, and what would break if you used only it?

- Without it, the edit form may become blank when there is no old input, instead of showing the existing database value.
  If you use only the second argument, the form always shows the existing value and ignores the user's previous input after validation fails.

H1 The top of your error page named a file inside vendor. Say why that was not where your mistake was, and where the page showed you it actually was.

- The file inside vendor contains Laravel's framework code, not my application code. The error page showed the actual mistake in my own project file, including the filename and line number in the stack trace.

H2 You wrote one Log::info line with a context array. Name something it will tell you next month that the error page could not.

- Log::info() with a context array can tell me the actual values at the time of the error, such as the user ID, record ID, or submitted data. This helps me investigate later even when the error page is no longer available.

H3 Your guard answers with 403 instead of redirecting back with a message. Say when each of the two is the better answer.

- 403 Forbidden: Better when the user is not authorized to perform an action and should not access it.
- Redirect back with a message: Better when the user can return to the previous page, see an explanation, and continue using the application.
