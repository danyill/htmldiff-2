PhpHtmlDiff is a PHP library that displays the difference between two HTML snippets. It is taken from the [MediaWiki Visual Diff module](http://www.mediawiki.org/wiki/Visual_Diff) and has been modified to be usable outside of MediaWiki.

Usage
=====

1. Clone this repository somewhere.
2. Run bin/php-html-diff.php diff file1.html file2.html

License
=======

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
or see http://www.gnu.org/

Sources
=======

These are the original MediaWiki source files that this library is based on: [HTMLDiff.php](http://svn.wikimedia.org/viewvc/mediawiki/trunk/phase3/includes/diff/HTMLDiff.php?view=markup&pathrev=58266), [Diff.php](http://svn.wikimedia.org/viewvc/mediawiki/trunk/phase3/includes/diff/Diff.php?view=markup&pathrev=58266), [Nodes.php](http://svn.wikimedia.org/viewvc/mediawiki/trunk/phase3/includes/diff/Nodes.php?view=markup&pathrev=58266), 
[Sanitizer.php](http://svn.wikimedia.org/viewvc/mediawiki/trunk/phase3/includes/Sanitizer.php?view=markup&pathrev=58267), [Xml.php](http://svn.wikimedia.org/viewvc/mediawiki/trunk/phase3/includes/Xml.php?view=markup&pathrev=58267)

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg?style=flat-square)](https://php.net/)
[![Total Downloads](https://poser.pugx.org/brownbear/php-html-diff/downloads)](https://packagist.org/packages/brownbear/php-transpiler)
[![Dependency Status](https://www.versioneye.com/user/projects/569fedac2c2fab00290002a7/badge.svg?style=flat)](https://www.versioneye.com/user/projects/569fedac2c2fab00290002a7)