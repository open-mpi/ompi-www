<?
$subject_val = "[MTT devel] statement_timeout on MTT Reporter Queries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 16:53:06 2015" -->
<!-- isoreceived="20151130215306" -->
<!-- sent="Mon, 30 Nov 2015 15:53:01 -0600" -->
<!-- isosent="20151130215301" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] statement_timeout on MTT Reporter Queries" -->
<!-- id="CAANzjEnsuAYUqKoNfRv0g9sbHhBp45kKnmVyw2gOOgnzxYcyAw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [MTT devel] statement_timeout on MTT Reporter Queries<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-30 16:53:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/12/0655.php">Christoph Niethammer: "Re: [MTT devel] [devel-core] MTT on ivy"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/10/0653.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [OMPI devel] mtt-submit, etc."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just added a 60 second timeout on any query submitted to the MTT
<br>
Reporter. Two commits for this (sorry I didn't go through the pull request
<br>
mechanism - will do next time) [1][2]
<br>
<p>This was in response to, what we think, was a bot clicking around on the
<br>
web form and submitting some very long running queries which was slowing
<br>
down the server.
<br>
<p>Now any query submitted from the MTT Reporter interface that takes longer
<br>
than 60 seconds will error out with a timeout error.
<br>
<p>If this timeout causes problems for anyone please let me know, and we can
<br>
adjust the timeout or take different action, if necessary.
<br>
<p>-- Josh
<br>
<p>[1]
<br>
<a href="https://github.com/open-mpi/mtt/commit/ad87b02ecd9d21f68d52fdd9f1916bb21d675c70">https://github.com/open-mpi/mtt/commit/ad87b02ecd9d21f68d52fdd9f1916bb21d675c70</a>
<br>
[2]
<br>
<a href="https://github.com/open-mpi/mtt/commit/145c4a5ae14c86a2e04a14ee1b140232896f0b8a">https://github.com/open-mpi/mtt/commit/145c4a5ae14c86a2e04a14ee1b140232896f0b8a</a>
<br>
<p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0654/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/12/0655.php">Christoph Niethammer: "Re: [MTT devel] [devel-core] MTT on ivy"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/10/0653.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [OMPI devel] mtt-submit, etc."</a>
<!-- nextthread="start" -->
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
