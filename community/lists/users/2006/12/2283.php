<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Dec  3 08:42:11 2006" -->
<!-- isoreceived="20061203134211" -->
<!-- sent="Sun, 3 Dec 2006 15:42:01 +0200" -->
<!-- isosent="20061203134201" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple LIDs" -->
<!-- id="20061203134201.GB29501_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1c16cdf90612030533x3a9b1cbata1744b6df66fe31f_at_mail.gmail.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-03 08:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2284.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2282.php">Chevchenkovic Chevchenkovic: "[OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2282.php">Chevchenkovic Chevchenkovic: "[OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2284.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Reply:</strong> <a href="2284.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Dec 03, 2006 at 07:03:33PM +0530, Chevchenkovic Chevchenkovic wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  I had this query. I hope some expert replies to it.
</span><br>
<span class="quotelev1">&gt; I have 2 nodes connected point-to-point using infiniband cable. There
</span><br>
<span class="quotelev1">&gt; are multiple LIDs for each of the end node ports.
</span><br>
<span class="quotelev1">&gt;    When I give an MPI_Send, Are the sends are posted on different LIDs
</span><br>
<span class="quotelev1">&gt; on each of the end nodes OR they are they posted on the same LID?
</span><br>
<span class="quotelev1">&gt;  Awaiting your reply,
</span><br>
It depend what version of Open MPI your are using. If you are using
<br>
trunk or v1.2 beta then all available LIDs are used in RR fashion. The early
<br>
versions don't support LMC.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2284.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2282.php">Chevchenkovic Chevchenkovic: "[OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2282.php">Chevchenkovic Chevchenkovic: "[OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2284.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Reply:</strong> <a href="2284.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
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
