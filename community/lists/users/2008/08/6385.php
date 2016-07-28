<?
$subject_val = "Re: [OMPI users] TCP Bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 18:35:16 2008" -->
<!-- isoreceived="20080818223516" -->
<!-- sent="Tue, 19 Aug 2008 00:35:05 +0200" -->
<!-- isosent="20080818223505" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Bandwidth" -->
<!-- id="CD2623C6-C2CA-4772-9C78-5AAEA81AF49C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48A9CF27.2090904_at_opengridcomputing.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 18:35:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6386.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6384.php">Mostyn Lewis: "Re: [OMPI users] Continuous poll/select using btl sm (svn	1.4a1r18899)"</a>
<li><strong>In reply to:</strong> <a href="6382.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6389.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6389.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, I can hardly imagine where the performance problems are  
<br>
coming from. Usually I get more than 97% out of the raw TCP  
<br>
performance with Open MPI. There are two parameters hat can slightly  
<br>
improve the behavior: btl_tcp_rdma_pipeline_send_length and  
<br>
btl_tcp_min_rdma_pipeline_size. Please use &quot;ompi_info --param btl tcp&quot;  
<br>
to get more info about them. Try to push them up a bit, and then try  
<br>
to set them to the maximum (UINT_MAX). If there is any other device  
<br>
available except the Chelsio one then btl_tcp_bandwidth and  
<br>
btl_tcp_latency might prove interesting.
<br>
<p>Btw, can you run the Netpipe benchmark on this configuration please ?  
<br>
Once compiled with MPI support and once with TCP. This might give us  
<br>
more equitable details (same benchmark).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 18, 2008, at 9:36 PM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; Andy Georgi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you using Chelsio's TOE drivers?  Or just a driver from the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distro?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We use the Chelsio TOE drivers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok.  Did you run their perftune.sh script?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, if not we wouldn't get the 1.15 GB/s on the TCP level. We had  
</span><br>
<span class="quotelev2">&gt;&gt; ~800 MB/s before
</span><br>
<span class="quotelev2">&gt;&gt; primarily because of too small TCP buffers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The difference of more than 200 MB/s between 1.15 GB/s we get with  
</span><br>
<span class="quotelev2">&gt;&gt; iperf and the 930 MB/s we
</span><br>
<span class="quotelev2">&gt;&gt; measured with a MPI-Ping-Pong test is too large, i think. Something  
</span><br>
<span class="quotelev2">&gt;&gt; in Open MPI seems to slow it down.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like the TOE setup is tweaked to get decent sockets  
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So OMPI experts, what is the overhead you see on other TCP links for  
</span><br>
<span class="quotelev1">&gt; OMPI BW tests vs native sockets TCP BW tests?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6385/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6386.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6384.php">Mostyn Lewis: "Re: [OMPI users] Continuous poll/select using btl sm (svn	1.4a1r18899)"</a>
<li><strong>In reply to:</strong> <a href="6382.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6389.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6389.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
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
