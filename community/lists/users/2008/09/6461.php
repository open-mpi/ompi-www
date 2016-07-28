<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 13:06:45 2008" -->
<!-- isoreceived="20080903170645" -->
<!-- sent="Wed, 03 Sep 2008 10:09:28 -0700" -->
<!-- isosent="20080903170928" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="48BEC4C8.1020001_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48BEC1FE.8090607_at_polytechnique.org" -->
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
<strong>Date:</strong> 2008-09-03 13:09:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vincent Rotival wrote:
<br>
<p><span class="quotelev1">&gt; The solution I retained was for the main thread to isend data 
</span><br>
<span class="quotelev1">&gt; separately to each other threads that are using Irecv + loop on 
</span><br>
<span class="quotelev1">&gt; mpi_test to test the  finish of the Irecv. It mught be dirty but works 
</span><br>
<span class="quotelev1">&gt; much better than using Bcast 
</span><br>
<p>Thanks for the clarification.
<br>
<p>But this strikes me more as a question about the MPI standard than about 
<br>
the Open MPI implementation.  That is, what you really want is for the 
<br>
MPI API to support a non-blocking form of collectives.  You want control 
<br>
to return to the user program before the barrier/bcast/etc. operation 
<br>
has completed.  That's an API change.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6460.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
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
