<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 12:57:39 2008" -->
<!-- isoreceived="20080903165739" -->
<!-- sent="Wed, 03 Sep 2008 18:57:34 +0200" -->
<!-- isosent="20080903165734" -->
<!-- name="Vincent Rotival" -->
<!-- email="vincent.rotival_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="48BEC1FE.8090607_at_polytechnique.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48BEC0B9.7080308_at_sun.com" -->
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
<strong>From:</strong> Vincent Rotival (<em>vincent.rotival_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-03 12:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 2, 2008, at 7:25 PM, Vincent Rotival wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I already read some comments on this issue, but I'd like to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know of latest versions of OpenMPI have managed to solve it. I am  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now running 1.2.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I run a MPI program with synchronization routines (e.g.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_barrier, MPI_bcast...), all threads waiting for data are still  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burning CPU. On the other hand when using non-blocking receives all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads waiting for data are not consuming any CPU.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would there be a possibility to use MPI_Bcast without  burning CPU  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid not at this time.  We've talked about adding a blocking  
</span><br>
<span class="quotelev2">&gt;&gt; mode for progress, but it hasn't happened yet (and is very unlikely 
</span><br>
<span class="quotelev2">&gt;&gt; to  happen for the v1.3 series).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to understand this issue better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about the variable mpi_yield_when_idle ?  Is the point that this 
</span><br>
<span class="quotelev1">&gt; variable will cause a polling process to yield, but if there is no one 
</span><br>
<span class="quotelev1">&gt; to yield to then the process resumes burning CPU?  If so, I can 
</span><br>
<span class="quotelev1">&gt; imagine this solution being sufficient in some cases but not in others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, Vincent, what do you mean by waiting threads not consuming any 
</span><br>
<span class="quotelev1">&gt; CPU for non-blocking receives?  In what state are these threads?  Are 
</span><br>
<span class="quotelev1">&gt; they in an MPI call (like MPI_Wait)?  Or, have they returned from an 
</span><br>
<span class="quotelev1">&gt; MPI call (like MPI_Irecv) and the user application can then park these 
</span><br>
<span class="quotelev1">&gt; threads to the side?
</span><br>
<p>Dear Eugene
<br>
<p>The solution I retained was for the main thread to isend data separately 
<br>
to each other threads that are using Irecv + loop on mpi_test to test 
<br>
the  finish of the Irecv. It mught be dirty but works much better than 
<br>
using Bcast
<br>
<p>Cheers
<br>
<p>Vincent
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
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
