<?
$subject_val = "Re: [OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 10:53:36 2011" -->
<!-- isoreceived="20110908145336" -->
<!-- sent="Thu, 08 Sep 2011 07:53:21 -0700" -->
<!-- isosent="20110908145321" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_BARRIER" -->
<!-- id="4E68D6E1.9010705_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C6F9665C-9DF8-41E9-8341-F23A4F6BB120_at_coria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_BARRIER<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 10:53:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17200.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17198.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17197.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17201.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17201.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/8/2011 7:42 AM, Ghislain Lartigue wrote:
<br>
<span class="quotelev1">&gt; I will check that, but as I said in first email, this strange behaviour happens only in one place in my code.
</span><br>
Is the strange behavior on the first time, or much later on?  (You seem 
<br>
to imply later on, but I thought I'd ask.)
<br>
<p>I agree the behavior is noteworthy, but it's plausible and there's not 
<br>
enough information to explain it based solely on what you've said.
<br>
<p>Here is one scenario.  I don't know if it applies to you since I know 
<br>
very little about what you're doing.  I think with VampirTrace, you can 
<br>
collect performance data into large buffers.  Occasionally, the buffers 
<br>
need to be flushed to disk.  VampirTrace will wait for a good 
<br>
opportunity to do so -- e.g., a global barrier.  So, you execute lots of 
<br>
barriers, but suddenly you hit one where VT wants to flush to disk.  
<br>
This takes a long time and everyone in the barrier spends a long time in 
<br>
the barrier.  Then, execution resumes and barrier performance looks 
<br>
again like what it used to look like.
<br>
<p>Again, there are various scenarios to explain what you see.  More 
<br>
information would be needed to decide which applies to you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17200.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17198.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17197.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17201.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17201.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
