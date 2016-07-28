<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 10:12:52 2007" -->
<!-- isoreceived="20071025141252" -->
<!-- sent="Thu, 25 Oct 2007 09:12:48 -0500" -->
<!-- isosent="20071025141248" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="[OMPI users] Solved! (Was:  Cannot suppress openib error message)" -->
<!-- id="18208.42080.76698.521717_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5007A9F8-1406-44D4-95DE-0CA7EB64CBB9_at_cisco.com" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 10:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4325.php">Brian W. Barrett: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>Previous message:</strong> <a href="4323.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yay, three cheers for Jeff.  
<br>
<p>Reverting to the stock libibverbs package (still at 1.0-4 for the version of
<br>
Ubuntu I'm running at work as I haven't upgraded to last week's Ubuntu 7.10
<br>
release) and rebuilding the Open MPI 1.2.4 deb packages under it fixes the
<br>
openib error message issue.
<br>
<p>So even for the Open MPI 1.2.* series, the 'filter after dlopen' works
<br>
perfectly fine, and the mca parameter setting, either from command-line or
<br>
config file, works as expected and suppressed openib messages and loading.
<br>
Good.
<br>
<p>I apologise for the line noise. This arose from when I used this machine for
<br>
early tests before we got the Debian packages for Open MPI into shape, and I
<br>
had simply forgotten that I had a modified libibverbs on one box.  I guess
<br>
the upshot is that I should use a pbuilder environment at work too...
<br>
<p>Thanks, Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4325.php">Brian W. Barrett: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>Previous message:</strong> <a href="4323.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
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
