<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 10 18:12:41 2005" -->
<!-- isoreceived="20051010231241" -->
<!-- sent="Mon, 10 Oct 2005 16:12:39 -0700" -->
<!-- isosent="20051010231239" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="porting guide?" -->
<!-- id="20051010231239.GA3630_at_odin.ac.hmc.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-10 18:12:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0433.php">Jeff Squyres: "Re:  === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm looking at porting Open MPI to FreeBSD and am trying to get a handle
<br>
on the requirements.  The issue I'm hitting so far is the opal timer
<br>
code which won't finish configuration at the moment.  Where is the API
<br>
to implement documented?  Is there an intent to implement a sub-optimal
<br>
version with POSIX calls at some point?  If I understand the current
<br>
code correctly, something based on clock_gettime() and clock_getres()
<br>
should do it.
<br>
<p>Are there other things I can expect to have to implement?
<br>
<p>-- Brooks
<br>
<p><pre>
-- 
Any statement of the form &quot;X is the one, true Y&quot; is FALSE.
PGP fingerprint 655D 519C 26A7 82E7 2529  9BF0 5D8E 8BE9 F238 1AD4

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0434/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0433.php">Jeff Squyres: "Re:  === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
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
