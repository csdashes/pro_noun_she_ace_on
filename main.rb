#!/bin/env ruby1.9
# encoding: utf-8

require 'fuzzystringmatch'
require 'text/hyphen'
require_relative 'greeklish_converter'

def find_best(word, array)
  jarow = FuzzyStringMatch::JaroWinkler.create( :native )
  max = 0
  max_word = ''
  
  array.each do |runner|
    score = jarow.getDistance(word, runner)
    
    if score > max
      max = score
      max_word = runner
    end
  end
  
  return max_word
end

my_word = ARGV[0].greeklish
# puts "My word is: " + my_word

index = 0
index_end = 0

top_list = []

top_top_list = []

hh = Text::Hyphen.new(:language => "it", :left => 0, :right => 0)
my_word = hh.visualize(my_word," ").split(" ")

# my_word = my_word.split(//)

remaining_parts_of_my_word = true

try = 0

output = ''

while(remaining_parts_of_my_word)
  File.open("./dictionary.txt", "r") do |file_handle|
    file_handle.each_line do |line|
        word = line.split[0]

        search = my_word[index..index_end].join("")
        
        prev_end = index_end
        
        if word.include? search
          while (word.include? search) && index_end < my_word.length()
            index_end += 1
            search = my_word[index..index_end].join("")
          end
          index_end -= 1
          if prev_end < index_end
            top_list = []
          end
          top_list << word
        end          
    end
  end
  
  # p top_list
  # p my_word[index..index_end].join("")
  
  try += 1
  
  # p top_list
  
  if index_end >= (my_word.length-1) #|| try > 2
    remaining_parts_of_my_word = false
    best_word = find_best(my_word[index..index_end].join(""), top_list)
    top_top_list << best_word
    output << my_word[index..index_end].join("") + " " + best_word 
  else
    best_word = find_best(my_word[index..index_end].join(""), top_list)
    top_top_list << best_word
    output << my_word[index..index_end].join("") + " " + best_word + "|"
    
    index_end += 1
    index = index_end
    top_list = []
  end
end


# p top_top_list
# p index_end
p output