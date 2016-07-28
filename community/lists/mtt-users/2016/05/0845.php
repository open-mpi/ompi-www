<?
$subject_val = "[MTT users] Python choice";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 12:37:13 2016" -->
<!-- isoreceived="20160509163713" -->
<!-- sent="Mon, 9 May 2016 09:37:02 -0700" -->
<!-- isosent="20160509163702" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[MTT users] Python choice" -->
<!-- id="CAMD57ocbt2dRj774rsx9MNbZTGRjzhMqQ9=A=UXsjfjZDGDgDA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [MTT users] Python choice<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 12:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/02/0844.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT: Unescaped left brace in regex is deprecated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<li><strong>Reply:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>As we look at the Python client, there is an issue with the supported
<br>
Python version. There was a significant break in the user-level API between
<br>
Python 2.x and Python 3. Some of the issues are described here:
<br>
<p><a href="https://docs.python.org/2/glossary.html#term-2to3">https://docs.python.org/2/glossary.html#term-2to3</a>
<br>
<p>Noah and I have chatted about this, and we feel it may be best to just
<br>
lock-in on Python 2.x until an overwhelming reason arises for us to
<br>
transition to Python 3. At that time, we would have to do a backward-break
<br>
to update.
<br>
<p>The virtualenv content file (pyenv.txt) already reflects this requirement,
<br>
so folks who use virtual environments are set.
<br>
<p>Make sense?
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/02/0844.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT: Unescaped left brace in regex is deprecated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<li><strong>Reply:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
