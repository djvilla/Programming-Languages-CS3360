sphereVolume x = (4/3) * (pi) * (x ** 3)

power x y
    | y <= 0     = 1
    | otherwise  = x * power x (y-1)

largeElement :: (Ord a) => [a] -> a
largeElement [] = error "Cannot get the largest from empty list"
largeElement [x] = x
largeElement (x:xs)
    | x > larger = x
    | otherwise  = larger
    where larger = largeElement xs


wsum x y = zipWith (+) (zipWith (+) x x) y

timesAppear x [] = 0
timesAppear x (y:ys)
    | x == y    = 1 + timesAppear x ys
    | otherwise = timesAppear x ys

split x 0 = [[]] ++ [x]
split [] length = [[]] ++ [[]]
split x length = [take length x] ++ [drop length x]

sumUnderThousand x
    | x > 1000        = 0
    | x <= 0           = 0
    | (x `mod` 3) == 0 = x + sumUnderThousand (x-1)
    | (x `mod` 5) == 0 = x + sumUnderThousand (x-1)
    | otherwise        = sumUnderThousand (x-1)
