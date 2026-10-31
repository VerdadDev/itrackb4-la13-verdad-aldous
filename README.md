Lab Activity 10

#Answers

G1 Which column did you turn into a table, and why that one and not another?

 - the one i turn into a table is genre. because genre is a fixed list and the same genre repeat in many comics like dark fantasy is in attack on titan and demon slayer. the other columns are not a thing, title and author is different every comic, rate and chapter is just number and is_completed is only yes or no.

G2 What number did screenshot 6 show, and why exactly that number?

 - screenshot 6 show 6. because 1 query to get all 5 comics and then 1 query each comic to get the genre so 1 + 5 = 6. when i add with('genre') it become 2 because all genre is get in 1 query.

G3 Your belongsTo method is named in the singular. What would break if you made it plural?

 - if i make it genres() eloquent will look for genres_id column. but my comics table only have genre_id so it cant find the genre and my list page will error in the genre column.

