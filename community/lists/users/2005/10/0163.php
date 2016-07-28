<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  6 12:19:40 2005" -->
<!-- isoreceived="20051006171940" -->
<!-- sent="Thu, 6 Oct 2005 13:19:29 -0400" -->
<!-- isosent="20051006171929" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Continued problems with Nasa Overflow code" -->
<!-- id="cbdd91efca3852c85ca22407044d229c_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F20142C95E_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Date:</strong> 2005-10-06 12:19:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0164.php">sdamjad: "[O-MPI users] Config error on MAC os X (10.4)"</a>
<li><strong>Previous message:</strong> <a href="0162.php">Scott Robert Ladd: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>In reply to:</strong> <a href="0161.php">Borenstein, Bernard S: "[O-MPI users] Continued problems with Nasa Overflow code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 6, 2005, at 11:57 AM, Borenstein, Bernard S wrote:
<br>
<p><span class="quotelev1">&gt; I built the Nasa Overflow 1.8ab code yesterday with 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0a1r7632.&#160; It runs fine with 4 or 8 opteron processors on a 
</span><br>
<span class="quotelev1">&gt; myrinet linux cluster.
</span><br>
<p><span class="quotelev1">&gt; But if I increase the number of processors to 20, I get errors like 
</span><br>
<span class="quotelev1">&gt; this :
</span><br>
<p>Thanks for doing this testing!  Our gm code should be much more stable 
<br>
than it was last week (some critical bug fixes got in earlier this 
<br>
week), so I'm disappointed that you're still seeing failures.  :-(
<br>
<p>Can we download the NASA Overflow code and try it with your input to 
<br>
try to replicate the failures?  I don't see an obvious download link on 
<br>
<a href="http://rotorcraft.arc.nasa.gov/cfd/CFD4/New_Page/Overflow-D2.htm">http://rotorcraft.arc.nasa.gov/cfd/CFD4/New_Page/Overflow-D2.htm</a>, but I 
<br>
have dim recollections that there are some restrictions on obtaining 
<br>
this code...?
<br>
<p><span class="quotelev1">&gt; [e053:01260] *** An error occurred in MPI_Free_mem
</span><br>
<span class="quotelev1">&gt; [e030:15585] *** An error occurred in MPI_Free_mem
</span><br>
<span class="quotelev1">&gt; [e013:27621] *** An error occurred in MPI_Free_mem
</span><br>
<p>Interesting -- does Overflow test for whether an MPI has MPI_ALLOC_MEM 
<br>
and MPI_Free_mem?  I ask because I'm guessing that this code runs 
<br>
properly with MPICH-gm -- but I'm *pretty sure* that MPICH-gm does not 
<br>
have MPI_ALLOC_MEM / MPI_FREE_MEM (don't quote me on that, though).
<br>
<p>But then again, there doesn't seem to be a good reason to say &quot;out of 
<br>
memory&quot; when in MPI_FREE_MEM.  :-)  So if we could replicate the 
<br>
problem, that would probably be the most helpful -- how would we obtain 
<br>
this software?
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
<li><strong>Next message:</strong> <a href="0164.php">sdamjad: "[O-MPI users] Config error on MAC os X (10.4)"</a>
<li><strong>Previous message:</strong> <a href="0162.php">Scott Robert Ladd: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>In reply to:</strong> <a href="0161.php">Borenstein, Bernard S: "[O-MPI users] Continued problems with Nasa Overflow code"</a>
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
