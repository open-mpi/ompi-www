<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 11 09:24:06 2005" -->
<!-- isoreceived="20050911142406" -->
<!-- sent="Sun, 11 Sep 2005 09:24:02 -0500" -->
<!-- isosent="20050911142402" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] MIPS64 - The Long-Awaited Config File" -->
<!-- id="C2EE942C-EF49-471E-8E43-6CEBFB236CEE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050911133813.GA1548_at_greglaptop.by.boeing" -->
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
<strong>Date:</strong> 2005-09-11 09:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0136.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>Previous message:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>In reply to:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0136.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>Reply:</strong> <a href="0136.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 11, 2005, at 8:38 AM, Greg Lindahl wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, Sep 10, 2005 at 04:45:48PM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that this is a fairly easy fix - Irix identifies any MIPS
</span><br>
<span class="quotelev2">&gt;&gt; chip as a mips-* from config.guess, but Linux apparently makes a
</span><br>
<span class="quotelev2">&gt;&gt; distinction between mips and mips64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's because there is a difference between mips and mpis64. The
</span><br>
<span class="quotelev1">&gt; assembly syntax looks similar, but there are subtle pitfalls involved
</span><br>
<span class="quotelev1">&gt; in using the same code for both. You can look at the Linux kernel code
</span><br>
<span class="quotelev1">&gt; for atomics in mips and mips64 to see if there are any differences.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- greg, who used to play around with MIPS64 in the good old days
</span><br>
<p>Darn.  I was really hoping that it was like OS X always reporting  
<br>
architecture as ppc, while Linux will give ppc64 on a G5.  Ah well,  
<br>
can't always get lucky :).
<br>
<p>Jonathan - you might want to try the small change I sent anyway - it  
<br>
might work, and the unit tests actually do a relatively good job at  
<br>
catching when things aren't right.
<br>
<p>If they don't work, we'll need to write atomic operations for the  
<br>
mips64 platform.  Since the Linux kernel has mips64 support, that's  
<br>
not an impossible task (one can usually figure out calling  
<br>
conventions and the like from there), but it would be much easier  
<br>
with a mips64 assembly reference manual and ABI documentation.  You  
<br>
wouldn't happen to know where to find such things, would you?  I'll  
<br>
admit that my only interaction with the MIPS architectures are the  
<br>
R4K and above in SGI systems, so I'm a bit out of my league.
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
<li><strong>Next message:</strong> <a href="0136.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>Previous message:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>In reply to:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0136.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>Reply:</strong> <a href="0136.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
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
