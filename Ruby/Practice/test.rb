a = [[1,2], [3,nil]]

#a.each do |row|
#     row.each do |column|
#         puts column
#     end
#end
=begin
#Getting the Index of a row and column
a.reverse.each_with_index do |row, i|
     row.each_with_index do |column, j|
         puts "Item: #{column}, Row: #{i}, Column: #{j}"
         puts a[2][1]
     end
end

puts 'Hello there, Can you tell me your favourite number?'
num = gets.to_i
puts 'Your favourite number is ' + num.to_s + '?'
puts 'Well its not bad but  ' + (num * 10).to_s + ' is literally 10 times better!'
=end
a = gets.chomp

puts !(0..6).include?(a.to_i)
