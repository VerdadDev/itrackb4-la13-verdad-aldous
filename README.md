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
