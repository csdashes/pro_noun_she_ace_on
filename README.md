pro_noun_she_ace_on
===================
A project developed during the Thessaloniki Hackathon organised by the Memrise team and the Computer Science Department of the Aristotle University of Thessaloniki, in June 2013.

Idea
-------

The target of the application is to teach Greek words to foreigns, based on the way the Greek words sound, and associating them with English words.

Algorithm
-------

The main algorithm is divided in 2 parts:<br/>
1. Convert the Greek word into a form using the latin letters and can be pronounced as correctly as possible.<br/>
2. Finding English words based on a dictionary, that sound like the converted Greek word.

Implementation
-------

The implementation is based on Ruby1.9, PHP, JS and jQuery library.

The dependencies listed are required if you wish to run the application.
* [.fuzzy-string-match](https://github.com/kiyoka/fuzzy-string-match) -- `gem install fuzzy-string-match`
* [.text-hyphen](https://github.com/halostatue/text-hyphen) -- `gem install text-hyphen`
* [.activesupport](https://github.com/rails/rails/tree/master/activesupport) -- `gem install activesupport`

Running the application
-------

To run the application, after you installed all dependencies, you have to:

    $ ruby1.9 main.rb

This will start the script that is waiting for Greek keywords and will translate them into Greek-lish and finally find the correct corresponding English words for it.
For the Web Interface, just open `index.php`. If the page is not loading, enter a sample parameter in the URL like this:
`localhost:8888/rubytest/?keyword=sample` and the application will start running.

Example screenshot
--------
Here is an example: "άλογο" in Greek means "horse". First the algorithm converts the string "άλογο" into "alogo" and then finds English words to acciciate it with (alone, go)
<br/>![Screenshot](http://i.imgflip.com/1vd2m.gif)
