<?
$subject_val = "Re: [OMPI users] latency #2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 08:45:58 2010" -->
<!-- isoreceived="20100913124558" -->
<!-- sent="Mon, 13 Sep 2010 13:45:50 +0100" -->
<!-- isosent="20100913124550" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latency #2" -->
<!-- id="7B6876EB-383A-4A6C-B5F5-ED543A26EABA_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C8E08F4.9020606_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] latency #2<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 08:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14225.php">Eugene Loh: "Re: [OMPI users] computing the latency with OpenMpi"</a>
<li><strong>Previous message:</strong> <a href="14223.php">Georges Markomanolis: "[OMPI users] latency #2"</a>
<li><strong>In reply to:</strong> <a href="14223.php">Georges Markomanolis: "[OMPI users] latency #2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14226.php">Eugene Loh: "Re: [OMPI users] latency #2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13 Sep 2010, at 12:20, Georges Markomanolis wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi again, after using MPI_Ssend seems to be what I was looking for but I would like to know more about MPI_Send.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example sending 1 byte with MPI_Send it takes 8.69 microsec but with MPI_Ssend it takes 152.9 microsec. I understand the difference but it seems that from one message's size and after their difference is not so big like trying for 518400 bytes where it needs 3515.78 microsec with MPI_Send and 3584.1 microsec with MPI_Ssend.
</span><br>
<p>It sounds like you are measuring send overhead rather than latency, in fact as far as I know it's impossible to measure the send latency as you have no way of being able to know when to 'stop the clock', this is why ping-pong latency is always quoted.  I suspect the underlying latency of the two sends is very similar to each other in practice.
<br>
<p><span class="quotelev1">&gt; So has is there any rule to figure out (of course it depends on the hardware) the threshold that after this size the difference between the timings of MPI_Send and MPI_Send is not so big or at least how to find it for my hardware?
</span><br>
<p>Yes there is but I'm not familiar enough with OMPI to be able to tell you, I'm sure somebody can though.  If my suspicion above is correct I have doubt knowing what this value is would help you at all though in terms of application performance.
<br>
<p>Ashley.
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
<li><strong>Next message:</strong> <a href="14225.php">Eugene Loh: "Re: [OMPI users] computing the latency with OpenMpi"</a>
<li><strong>Previous message:</strong> <a href="14223.php">Georges Markomanolis: "[OMPI users] latency #2"</a>
<li><strong>In reply to:</strong> <a href="14223.php">Georges Markomanolis: "[OMPI users] latency #2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14226.php">Eugene Loh: "Re: [OMPI users] latency #2"</a>
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
