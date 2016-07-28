<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 12:49:29 2008" -->
<!-- isoreceived="20080903164929" -->
<!-- sent="Wed, 03 Sep 2008 09:52:09 -0700" -->
<!-- isosent="20080903165209" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="48BEC0B9.7080308_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="590EFCC2-0680-4F2B-82F1-469EFF1A83C7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU burning in Wait state<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-03 12:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 2, 2008, at 7:25 PM, Vincent Rotival wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I already read some comments on this issue, but I'd like to  
</span><br>
<span class="quotelev2">&gt;&gt; know of latest versions of OpenMPI have managed to solve it. I am  
</span><br>
<span class="quotelev2">&gt;&gt; now running 1.2.5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run a MPI program with synchronization routines (e.g.  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_barrier, MPI_bcast...), all threads waiting for data are still  
</span><br>
<span class="quotelev2">&gt;&gt; burning CPU. On the other hand when using non-blocking receives all  
</span><br>
<span class="quotelev2">&gt;&gt; threads waiting for data are not consuming any CPU.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would there be a possibility to use MPI_Bcast without  burning CPU  
</span><br>
<span class="quotelev2">&gt;&gt; power ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid not at this time.  We've talked about adding a blocking  
</span><br>
<span class="quotelev1">&gt; mode for progress, but it hasn't happened yet (and is very unlikely 
</span><br>
<span class="quotelev1">&gt; to  happen for the v1.3 series).
</span><br>
<p>I'd like to understand this issue better.
<br>
<p>What about the variable mpi_yield_when_idle ?  Is the point that this 
<br>
variable will cause a polling process to yield, but if there is no one 
<br>
to yield to then the process resumes burning CPU?  If so, I can imagine 
<br>
this solution being sufficient in some cases but not in others.
<br>
<p>Also, Vincent, what do you mean by waiting threads not consuming any CPU 
<br>
for non-blocking receives?  In what state are these threads?  Are they 
<br>
in an MPI call (like MPI_Wait)?  Or, have they returned from an MPI call 
<br>
(like MPI_Irecv) and the user application can then park these threads to 
<br>
the side?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
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
