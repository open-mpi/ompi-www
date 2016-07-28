<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 07:56:47 2007" -->
<!-- isoreceived="20071018115647" -->
<!-- sent="Thu, 18 Oct 2007 13:56:40 +0200" -->
<!-- isosent="20071018115640" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB latency on Mellanox ConnectX hardware" -->
<!-- id="20071018115640.GD21159_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E14A0C7B-5B1F-4E5E-89EB-8A4B6CB807C2_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-18 07:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4243.php">Jeff Squyres: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<li><strong>Previous message:</strong> <a href="4241.php">Jeff Squyres: "Re: [OMPI users] Compile test programs"</a>
<li><strong>In reply to:</strong> <a href="4238.php">Jeff Squyres: "[OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4243.php">Jeff Squyres: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<li><strong>Reply:</strong> <a href="4243.php">Jeff Squyres: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 17, 2007 at 05:43:14PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Several users have noticed poor latency with Open MPI when using the  
</span><br>
<span class="quotelev1">&gt; new Mellanox ConnectX HCA hardware.  Open MPI was getting about 1.9us  
</span><br>
<span class="quotelev1">&gt; latency with 0 byte ping-pong benchmarks (e.g., NetPIPE or  
</span><br>
<span class="quotelev1">&gt; osu_latency).  This has been fixed in OMPI v1.2.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI v1.2.4 (and newer) will get around 1.5us latency with 0 byte  
</span><br>
<span class="quotelev1">&gt; ping-pong benchmarks on Mellanox ConnectX HCAs.  Prior versions of  
</span><br>
<span class="quotelev1">&gt; Open MPI can also achieve this low latency by setting the  
</span><br>
<span class="quotelev1">&gt; btl_openib_use_eager_rdma MCA parameter to 1.
</span><br>
<p>Actually setting btl_openib_use_eager_rdma to 1 will not help. The
<br>
reason is that it is 1 by default anyway, but Open MPI disables eager
<br>
rdma because it can't find HCA description in the ini file and cannot
<br>
distinguish between default value and value that user set explicitly.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Longer version:
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Until OMPI v1.2.4, Open MPI did not include specific configuration  
</span><br>
<span class="quotelev1">&gt; information for ConnectX hardware, which forced Open MPI to choose  
</span><br>
<span class="quotelev1">&gt; the conservative/safe configuration of not using RDMA for short  
</span><br>
<span class="quotelev1">&gt; messages (using send/receive semantics instead).  This increases  
</span><br>
<span class="quotelev1">&gt; point-to-point latency in benchmarks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI v1.2.4 (and newer) includes the relevant configuration  
</span><br>
<span class="quotelev1">&gt; information that enables short message RDMA by default on Mellanox  
</span><br>
<span class="quotelev1">&gt; ConnectX hardware.  This significantly improves Open MPI's latency on  
</span><br>
<span class="quotelev1">&gt; popular MPI benchmark applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same performance can be achieved on prior versions of Open MPI by  
</span><br>
<span class="quotelev1">&gt; setting the btl_openib_use_eager_rdma MCA parameter to 1.  The main  
</span><br>
<span class="quotelev1">&gt; difference between v1.2.4 and prior versions is that the prior  
</span><br>
<span class="quotelev1">&gt; versions do not set this MCA parameter value by default for ConnectX  
</span><br>
<span class="quotelev1">&gt; hardware (because ConnectX did not exist when prior versions of Open  
</span><br>
<span class="quotelev1">&gt; MPI were released).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This information is also now described on the FAQ:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx">http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx</a>- 
</span><br>
<span class="quotelev1">&gt; poor-latency
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4243.php">Jeff Squyres: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<li><strong>Previous message:</strong> <a href="4241.php">Jeff Squyres: "Re: [OMPI users] Compile test programs"</a>
<li><strong>In reply to:</strong> <a href="4238.php">Jeff Squyres: "[OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4243.php">Jeff Squyres: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<li><strong>Reply:</strong> <a href="4243.php">Jeff Squyres: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
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
