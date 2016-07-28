<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 16:00:49 2006" -->
<!-- isoreceived="20061023200049" -->
<!-- sent="Mon, 23 Oct 2006 16:00:37 -0400" -->
<!-- isosent="20061023200037" -->
<!-- name="Tony Ladd" -->
<!-- email="ladd_at_[hidden]" -->
<!-- subject="[OMPI users] dual Gigabit ethernet support" -->
<!-- id="01a201c6f6dd$e872c9c0$ca79e30a_at_ladd02" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Tony Ladd (<em>ladd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 16:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2037.php">Brock Palen: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A couple of comments regarding issues raised by this thread.
<br>
<p>1) In my opinion Netpipe is not such a great network benchmarking tool for
<br>
HPC applications. It measures timings based on the completion of the send
<br>
call on the transmitter not the completion of the receive. Thus, if there is
<br>
a delay in copying the send buffer across the net, it will report a
<br>
misleading timing compared with the wall-clock time. This is particularly
<br>
problematic with multiple pairs of edge exchanges, which can oversubscribe
<br>
most GigE switches. Here the netpipe timings can be off by orders of
<br>
magnitude compared with the wall clock. The good thing about writing your
<br>
own code is that you know what it has done (of course no one else knows,
<br>
which can be a problem). But it seems many people are unaware of the timing
<br>
issue in Netpipe.
<br>
<p>2) Its worth distinguishing between ethernet and TCP/IP. With MPIGAMMA, the
<br>
Intel Pro 1000 NIC has a latency of 12 microsecs including the switch and a
<br>
duplex bandwidth of 220 MBytes/sec. With the Extreme Networks X450a-48t
<br>
switch we can sustain 220MBytes/sec over 48 ports at once. This is not IB
<br>
performance but it seems sufficient to scale a number of applications to the
<br>
100 cpu level, and perhaps beyond.
<br>
<p>Tony
<br>
<p><p>-------------------------------
<br>
Tony Ladd
<br>
Professor, Chemical Engineering
<br>
University of Florida
<br>
PO Box 116005
<br>
Gainesville, FL 32611-6005
<br>
<p>Tel: 352-392-6509
<br>
FAX: 352-392-9513
<br>
Email: tladd_at_[hidden]
<br>
Web: <a href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2037.php">Brock Palen: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
