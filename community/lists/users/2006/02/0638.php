<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 18:08:59 2006" -->
<!-- isoreceived="20060210230859" -->
<!-- sent="Fri, 10 Feb 2006 18:08:50 -0500" -->
<!-- isosent="20060210230850" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] A few benchmarks" -->
<!-- id="7CF2223E-36AC-446A-A186-BF428BFCFC7D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43E7F8C7.6050600_at_cert.ucr.edu" -->
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
<strong>Date:</strong> 2006-02-10 18:08:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Previous message:</strong> <a href="0637.php">Yvan Fournier: "[OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>In reply to:</strong> <a href="0589.php">Glen Kaukola: "Re: [O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0642.php">Glen Kaukola: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0642.php">Glen Kaukola: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2006, at 8:32 PM, Glen Kaukola wrote:
<br>
<p><span class="quotelev1">&gt; Anyway, here are the times on a few runs I did with Open MPI  
</span><br>
<span class="quotelev1">&gt; 1.1a1r887.
</span><br>
<span class="quotelev1">&gt;   Basically what I'm seeing, my jobs run ok when they're local to one
</span><br>
<span class="quotelev1">&gt; machine, but as soon as they're split up between multiple machines
</span><br>
<span class="quotelev1">&gt; performance can vary:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4 cpu jobs:
</span><br>
<span class="quotelev1">&gt; 2:16:27
</span><br>
<span class="quotelev1">&gt; 2:01:35
</span><br>
<span class="quotelev1">&gt; 1:24:20
</span><br>
<span class="quotelev1">&gt; 1:03:55
</span><br>
<span class="quotelev1">&gt; 1:22:43
</span><br>
<span class="quotelev1">&gt; 1:31:53
</span><br>
<p>Wow -- am I reading this correct in that you are seeing a delta of  
<br>
over 1 minute in runs of the same application with the same data?   
<br>
That should absolutely not be happening.
<br>
<p>If you haven't already (I'm joining this thread late), can you send  
<br>
us your input deck so that we can try to reproduce this?
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
<li><strong>Next message:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Previous message:</strong> <a href="0637.php">Yvan Fournier: "[OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>In reply to:</strong> <a href="0589.php">Glen Kaukola: "Re: [O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0642.php">Glen Kaukola: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0642.php">Glen Kaukola: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
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
