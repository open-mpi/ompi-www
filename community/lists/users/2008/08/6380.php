<?
$subject_val = "Re: [OMPI users] TCP Bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 15:07:01 2008" -->
<!-- isoreceived="20080818190701" -->
<!-- sent="Mon, 18 Aug 2008 14:06:57 -0500" -->
<!-- isosent="20080818190657" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Bandwidth" -->
<!-- id="20080818190657.GC14810_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 15:06:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6381.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>In reply to:</strong> <a href="6376.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6381.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6381.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 18, 2008 at 10:00:24AM +0200, Andy Georgi wrote:
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
<p>That script should optimally tune your NIC.  If you are still not
<br>
satisfied with the performance, Chelsio should have people available to
<br>
help.  Since the TOE module is not opensource, there is not much anyone
<br>
else can do.  You can try tweaking any module parms that are exposed.
<br>
Checkout the modinfo output for that module.
<br>
<p><p><span class="quotelev1">&gt; Yes, if not we wouldn't get the 1.15 GB/s on the TCP level. We had ~800 MB/s before
</span><br>
<span class="quotelev1">&gt; primarily because of too small TCP buffers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The difference of more than 200 MB/s between 1.15 GB/s we get with iperf and the 930 MB/s we
</span><br>
<span class="quotelev1">&gt; measured with a MPI-Ping-Pong test is too large, i think. Something in Open MPI seems to slow it down.
</span><br>
<p>You can also try the new iWARP support in OMPI 1.3.  The perf for that
<br>
should be much better.
<br>
<p>Thanks,
<br>
Jon
<br>
<p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dresden University of Technology
</span><br>
<span class="quotelev1">&gt; Center for Information Services
</span><br>
<span class="quotelev1">&gt; and High Performance Computing (ZIH)
</span><br>
<span class="quotelev1">&gt; D-01062 Dresden
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: Andy.Georgi_at_[hidden]
</span><br>
<span class="quotelev1">&gt; WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6381.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>In reply to:</strong> <a href="6376.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6381.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6381.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
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
