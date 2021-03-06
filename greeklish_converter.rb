#!/bin/env ruby1.9
# encoding: utf-8
 
class String
  # Converts the Greek Unicode characters contained in the string
  # to latin ones (aka greeklish) and returns self.
  # For unobstructive conversion call the non-bang method 'greeklish'
  #
  # example:
  #   puts 'αβγδεζηθικλμνξοπρστυφχψω άέήίϊΐόύ ΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩ ABCDEFGHIJKLMNOPQRSTUVXYZ'.greeklish
  # returns:
  #   avgdezhthiklmnksoprstyfxpsw aehiiioy AVGDEZHTHIKLMNKSOPRSTYFXPSW ABCDEFGHIJKLMNOPQRSTUVXYZ
  def greeklish!
    mapping_table1 = {
        'κι' => 'ki',
        'κα' => 'ca',
        'χα' => 'ha',
        'χε' => 'hu',
        'γη' => 'ye',
        'γα' => 'wo',
        'γκ' => 'g',
        'γγ' => 'g',
        'φω' => 'fou',
        'βε' => 've',
        'μπ' => 'b',
        'δε' => 'the',
        'ντ' => 'd',
        'λι' => 'lli',
        'τσ' => 'ts',
        'τζ' => 'ds',
        'ου' => 'oo',
        'ού' => 'oo',
        'αι' => 'e',
        'αί' => 'e',
        'ει' => 'i',
        'εί' => 'i'
      }
      
      mapping_table2 = {
        'ά' => 'a', 'α' => 'a', 'Α' => 'A', 'Ά' => 'A',
        'β' => 'v', 'Β' => 'V',
        'γ' => 'g', 'Γ' => 'G',
        'δ' => 'd', 'Δ' => 'D',
        'έ' => 'e', 'ε' => 'e', 'Ε' => 'E', 'Έ' => 'E',
        'ζ' => 'z', 'Ζ' => 'Z',
        'ή' => 'i', 'η' => 'i', 'Η' => 'I', 'Ή' => 'I',
        'θ' => 'th', 'Θ' => 'TH',
        'ί' => 'i', 'ϊ' => 'i', 'ΐ' => 'i', 'ι' => 'i', 'Ι' => 'I', 'Ί' => 'I',
        'κ' => 'k', 'Κ' => 'K',
        'λ' => 'l', 'Λ' => 'L',
        'μ' => 'm', 'Μ' => 'M',
        'ν' => 'n', 'Ν' => 'N',
        'ξ' => 'ks', 'Ξ' => 'KS',
        'ό' => 'o', 'ο' => 'o', 'Ό' => 'O','Ο' => 'O',
        'π' => 'p', 'Π' => 'P',
        'ρ' => 'r', 'Ρ' => 'R',
        'σ' => 's', 'Σ' => 'S', 'ς' => 's',
        'τ' => 't', 'Τ' => 'T',
        'ύ' => 'i', 'υ' => 'i', 'Ύ' => 'I','Υ' => 'I',
        'φ' => 'f', 'Φ' => 'F',
        'χ' => 'h', 'Χ' => 'H',
        'ψ' => 'ps', 'Ψ' => 'PS',
        'ώ' => 'o', 'ω' => 'o', 'Ώ' => 'O','Ω' => 'O'
    }
    
    mapping_table1.keys.each do |key|
      if self.include? key
        #puts mapping_table1[key]
        self.gsub!(key,mapping_table1[key])
      end
    end
    mapping_table2.keys.each do |key|
      if self.include? key
        self.gsub!(key,mapping_table2[key])
      end
    end
      
    i = self.length
    # i = 0
    #     self.each_char do |char|
    #       self[i] = (mapping_table[char] ? mapping_table[char] : char)
    #       i += 1
    #     end
 
    self[0..i-1]
  end
  
  # Returns a new string which is converted from Greek Unicode characters
  # to latin ones (aka greeklish)
  def greeklish
    self.dup.greeklish!
  end
end