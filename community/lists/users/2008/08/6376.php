<?
$subject_val = "Re: [OMPI users] TCP Bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 03:59:30 2008" -->
<!-- isoreceived="20080818075930" -->
<!-- sent="Mon, 18 Aug 2008 10:00:24 +0200" -->
<!-- isosent="20080818080024" -->
<!-- name="Andy Georgi" -->
<!-- email="Andy.Georgi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Bandwidth" -->
<!-- id="48A92C18.3020103_at_zih.tu-dresden.de" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="[OMPI users] TCP Bandwidth" -->
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
<strong>From:</strong> Andy Georgi (<em>Andy.Georgi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 04:00:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6377.php">Rolf Vandevaart: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>Maybe in reply to:</strong> <a href="6367.php">Andy Georgi: "[OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6380.php">Jon Mason: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6380.php">Jon Mason: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6382.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve Wise wrote:
<br>
<span class="quotelev1">&gt; Are you using Chelsio's TOE drivers?  Or just a driver from the distro?
</span><br>
<p>We use the Chelsio TOE drivers.
<br>
<p><p>Steve Wise wrote:
<br>
<span class="quotelev1">&gt; Ok.  Did you run their perftune.sh script?
</span><br>
<p>Yes, if not we wouldn't get the 1.15 GB/s on the TCP level. We had ~800 MB/s before
<br>
primarily because of too small TCP buffers.
<br>
<p>The difference of more than 200 MB/s between 1.15 GB/s we get with iperf and the 930 MB/s we
<br>
measured with a MPI-Ping-Pong test is too large, i think. Something in Open MPI seems to slow it down.
<br>
<p><pre>
-- 
Dresden University of Technology
Center for Information Services
and High Performance Computing (ZIH)
D-01062 Dresden
Germany
e-mail: Andy.Georgi_at_[hidden]
WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6377.php">Rolf Vandevaart: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>Maybe in reply to:</strong> <a href="6367.php">Andy Georgi: "[OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6380.php">Jon Mason: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6380.php">Jon Mason: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6382.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
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
