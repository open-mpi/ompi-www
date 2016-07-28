<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 15:47:00 2005" -->
<!-- isoreceived="20050812204700" -->
<!-- sent="Fri, 12 Aug 2005 15:46:53 -0500" -->
<!-- isosent="20050812204653" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="8D9CE562-9B74-4975-A858-30C3BD05E0E3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="42FD04F1.1030505_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-12 15:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 12, 2005, at 3:22 PM, Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, trying that now.  While I'd like those things in the long run,
</span><br>
<span class="quotelev1">&gt; they're not needed right now to test what I'm trying to test.  Will  
</span><br>
<span class="quotelev1">&gt; let
</span><br>
<span class="quotelev1">&gt; you know how it goes!  (What's the problem, by the way?)
</span><br>
<p>The problem is that I key off the target host string to decide what  
<br>
assembly to use for the atomic operations.  For most 64 bit  
<br>
platforms, the architecture string is the same for 32/64 bit and then  
<br>
you use sizeof(long) to determine whether to use 32 or 64 bit  
<br>
instructions.  So what I need to add to the configure script is a  
<br>
check if we're on x86_64 that if sizeof(long) == 4, we use the  
<br>
assembly for x86, not x86_64.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
