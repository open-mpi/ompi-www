<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 16:32:07 2010" -->
<!-- isoreceived="20100909203207" -->
<!-- sent="Thu, 9 Sep 2010 21:31:27 +0100" -->
<!-- isosent="20100909203127" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="1C82F6EF-239D-4CC7-B9A7-55F6E7966805_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinq+tjDYFMPMXxo8A0x=-18SqvGRjmwUVpb+JR5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 16:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14276.php">Jeff Squyres: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14276.php">Jeff Squyres: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9 Sep 2010, at 21:10, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; @Ashley:
</span><br>
<span class="quotelev1">&gt; What is the exact semantics of an asynchronous barrier,
</span><br>
<p>I'm not sure of the exact semantics but once you've got your head around the concept it's fairly simple to understand how to use it, you call MPI_IBarrier() and it gives you a handle you can test with MPI_Test() or block for with MPI_Wait().  The tricky part comes in how many times you can call MPI_IBarrier() on a communicator without waiting for the previous barriers to complete but I haven't been following the discussion on this one to know the specifics.
<br>
<p><span class="quotelev1">&gt; and is it part of the MPI specs?
</span><br>
<p>It will be a part of the next revision of the standard I believe.  It's been a long time coming and there is at least one implementation out there already but I can't comment on it's usability today.  To be clear it's something I've long advocated and have implemented and played around with in the past however it's not yet available to users today but I believe it will be shortly and as you'll have read my believe is it's going to be a very useful addition to the MPI offering.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14276.php">Jeff Squyres: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14276.php">Jeff Squyres: "Re: [OMPI users] MPI_Reduce performance"</a>
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
