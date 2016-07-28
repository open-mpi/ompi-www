<?
$subject_val = "Re: [OMPI users] nonblock alternative to MPI_Win_complete";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 13:21:50 2011" -->
<!-- isoreceived="20110222182150" -->
<!-- sent="Tue, 22 Feb 2011 11:21:35 -0700" -->
<!-- isosent="20110222182135" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblock alternative to MPI_Win_complete" -->
<!-- id="F798AB12-9F75-41C4-B11D-40A9D410FBA4_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTik1VafbFMW-UFxAz_Wev7EunAhWvdu+Ex_e2FfZ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] nonblock alternative to MPI_Win_complete<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 13:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15682.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<li><strong>Previous message:</strong> <a href="15680.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15655.php">Toon Knapen: "[OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15720.php">Toon Knapen: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Reply:</strong> <a href="15720.php">Toon Knapen: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 18, 2011, at 8:59 AM, Toon Knapen wrote:
<br>
<p><span class="quotelev1">&gt; (Probably this issue has been discussed at length before but unfortunately I did not find any threads (on this site or anywhere else) on this topic, if you are able to provide me with links to earlier discussions on this topic, please do not hesitate)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there an alternative to MPI_Win_complete that does not 'enforce completion of preceding RMS calls at the origin' (as said on pag 353 of the mpi-2.2 standard) ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would like to know if I can reuse the buffer I gave to MPI_Put but without blocking on it, if the MPI lib is still using it, I want to be able to continue (and use another buffer).
</span><br>
<p><p>There is not.   MPI_Win_complete is the only way to finish a MPI_Win_start epoch, and is always blocking until local completion of all messages started during the epoch.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15682.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<li><strong>Previous message:</strong> <a href="15680.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15655.php">Toon Knapen: "[OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15720.php">Toon Knapen: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Reply:</strong> <a href="15720.php">Toon Knapen: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
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
