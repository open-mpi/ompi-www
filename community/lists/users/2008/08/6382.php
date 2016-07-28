<?
$subject_val = "Re: [OMPI users] TCP Bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 15:33:49 2008" -->
<!-- isoreceived="20080818193349" -->
<!-- sent="Mon, 18 Aug 2008 14:36:07 -0500" -->
<!-- isosent="20080818193607" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Bandwidth" -->
<!-- id="48A9CF27.2090904_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48A92C18.3020103_at_zih.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP Bandwidth<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 15:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6383.php">Dave Grote: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Previous message:</strong> <a href="6381.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="6376.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andy Georgi wrote:
<br>
<span class="quotelev1">&gt; Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Are you using Chelsio's TOE drivers?  Or just a driver from the distro?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use the Chelsio TOE drivers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ok.  Did you run their perftune.sh script?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, if not we wouldn't get the 1.15 GB/s on the TCP level. We had 
</span><br>
<span class="quotelev1">&gt; ~800 MB/s before
</span><br>
<span class="quotelev1">&gt; primarily because of too small TCP buffers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The difference of more than 200 MB/s between 1.15 GB/s we get with 
</span><br>
<span class="quotelev1">&gt; iperf and the 930 MB/s we
</span><br>
<span class="quotelev1">&gt; measured with a MPI-Ping-Pong test is too large, i think. Something in 
</span><br>
<span class="quotelev1">&gt; Open MPI seems to slow it down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sounds like the TOE setup is tweaked to get decent sockets performance.
<br>
<p>So OMPI experts, what is the overhead you see on other TCP links for 
<br>
OMPI BW tests vs native sockets TCP BW tests? 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6383.php">Dave Grote: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Previous message:</strong> <a href="6381.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="6376.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
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
