male(frank) .
male(fred) .
male(matt) .
male(bob) .
female(emma) .
female(marge) .
female(jazmin) .
female(sam) .
parent(sam, bob) .
parent(matt, bob) .
parent(matt, jazmin) .
parent(frank, emma) .
parent(frank, marge) .
parent(frank, fred) .

mother(X,Y) :- female(X), parent(X,Y) .

sister(X, Y) :- female(X), parent(Z,X), parent(Z,Y), not(X = Y) .

second(X, [_, Y| _]) :- X=Y .

twice([X| Y],[X, X| Z]) :- twice(Y, Z) .
twice([],[]) .

interleave([X|Y], [A|B], [X,A|Z]) :- interleave(Y,B,Z) .
interleave([],[],[]) .
