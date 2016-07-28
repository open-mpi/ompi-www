<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec  2 17:31:00 2006" -->
<!-- isoreceived="20061202223100" -->
<!-- sent="Sat, 2 Dec 2006 14:30:45 -0800" -->
<!-- isosent="20061202223045" -->
<!-- name="Greg Lindahl" -->
<!-- email="greg.lindahl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="20061202223044.GA2467_at_greglaptop.hsd1.ca.comcast.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A65183F5-6AB8-4198-9C23-4078CE83C582_at_cisco.com" -->
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
<strong>From:</strong> Greg Lindahl (<em>greg.lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-02 17:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2282.php">Chevchenkovic Chevchenkovic: "[OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2280.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2279.php">Patrick Geoffray: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Dec 02, 2006 at 10:31:30AM -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, especially on NUMA machines (like AMDs), physical access to  
</span><br>
<span class="quotelev1">&gt; network resources (such as NICs / HCAs) can be much faster on  
</span><br>
<span class="quotelev1">&gt; specific sockets.
</span><br>
<p>Yes, the penalty is actually 50 ns per hop, and you pay it on both
<br>
sides. So our 1.28 usec latency rises to 1.38 if you are on the other
<br>
socket on both ends, using a 2 socket motherboard.
<br>
<p>In our MPI we also have code that pays attention to the NUMA topology
<br>
if you have 2 of our HTX HCAs in a system.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2282.php">Chevchenkovic Chevchenkovic: "[OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2280.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2279.php">Patrick Geoffray: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
