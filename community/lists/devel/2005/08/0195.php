<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 09:40:28 2005" -->
<!-- isoreceived="20050818144028" -->
<!-- sent="Thu, 18 Aug 2005 09:40:25 -0500" -->
<!-- isosent="20050818144025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="ptl sm problem" -->
<!-- id="5B93922E-5F98-447E-89F9-053D1DCF597B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-18 09:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0196.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0194.php">Tim S. Woodall: "Re:  ob1 -&gt; default?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0197.php">George Bosilca: "Re:  ptl sm problem"</a>
<li><strong>Reply:</strong> <a href="0197.php">George Bosilca: "Re:  ptl sm problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did everyone catch Brian's e-mail?
<br>
<p>Because of a change I made last night to how the sm ptl builds  
<br>
(sorry, it was necessary -- there was a corner case that we didn't  
<br>
handle) and Automake not being &quot;smart enough,&quot; you'll need to do the  
<br>
following after you update to the latest trunk:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cd ompi/mca/ptl/sm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm .deps/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make -k
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cd ../../../
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;do whatever you normally do to build OMPI&gt;
<br>
<p>Re-running autogen.sh/configure will *not* fix this problem (although  
<br>
I think there were other commits last night that will require you to  
<br>
re-run autogen.sh/configure).
<br>
<p>Of course, if you get a brand new checkout, this problem will not occur.
<br>
<p>Sorry for the inconvenience.  :-(
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0196.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0194.php">Tim S. Woodall: "Re:  ob1 -&gt; default?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0197.php">George Bosilca: "Re:  ptl sm problem"</a>
<li><strong>Reply:</strong> <a href="0197.php">George Bosilca: "Re:  ptl sm problem"</a>
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
