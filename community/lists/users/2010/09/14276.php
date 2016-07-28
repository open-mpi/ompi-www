<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 08:59:55 2010" -->
<!-- isoreceived="20100922125955" -->
<!-- sent="Wed, 22 Sep 2010 08:59:50 -0400" -->
<!-- isosent="20100922125950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="BD1F567B-D872-4E7A-B62B-FB6B9E9A4586_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1C82F6EF-239D-4CC7-B9A7-55F6E7966805_at_pittman.co.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 08:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14277.php">Jeff Squyres: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
<li><strong>Previous message:</strong> <a href="14275.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 9, 2010, at 4:31 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev2">&gt;&gt; What is the exact semantics of an asynchronous barrier,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure of the exact semantics but once you've got your head around the concept it's fairly simple to understand how to use it, you call MPI_IBarrier() and it gives you a handle you can test with MPI_Test() or block for with MPI_Wait().  The tricky part comes in how many times you can call MPI_IBarrier() on a communicator without waiting for the previous barriers to complete but I haven't been following the discussion on this one to know the specifics.
</span><br>
<p>FWIW: here's a brief writeup of MPI_Ibarrier -
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://blogs.cisco.com/ciscotalk/performance/comments/ibarrier/">http://blogs.cisco.com/ciscotalk/performance/comments/ibarrier/</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14277.php">Jeff Squyres: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
<li><strong>Previous message:</strong> <a href="14275.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
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
