<?
$subject_val = "Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 14:56:16 2015" -->
<!-- isoreceived="20150617185616" -->
<!-- sent="Wed, 17 Jun 2015 21:56:15 +0300" -->
<!-- isosent="20150617185615" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option" -->
<!-- id="CAAO1Kya9aNvLj6fTPoZA17gWVSP9t=d3AkGDZYP1=QVao17DNA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFbC_Z+q7pCv6c0UiMjZE55Pnydn_FKfW7Ds2Lnh6ucE+EMKtw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-17 14:56:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27151.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27149.php">Na Zhang: "[OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>In reply to:</strong> <a href="27149.php">Na Zhang: "[OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
the message in question belongs to MXM and it is warning (silenced in
<br>
latter releases of MXM).
<br>
<p>To select specific device in MXM, please pass:
<br>
<p>mpirun -x MXM_IB_PORTS=mlx4_0:2 ...
<br>
<p>M
<br>
<p>On Wed, Jun 17, 2015 at 9:38 PM, Na Zhang &lt;na.zhang_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to launch MPI jobs (with version openmpi-1.6.5) on a node with
</span><br>
<span class="quotelev1">&gt; multiple InfiniBand HCA cards (pls. see ibstat info below). I just want to
</span><br>
<span class="quotelev1">&gt; use the only active port: mlx4_0 port 2. Thus I issued
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun *-mca btl_openib_if_include &quot;mlx4_0:2&quot;* -np...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought this command would allow only to use mlx4_0:2. But I still got
</span><br>
<span class="quotelev1">&gt; below warning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib_dev.c:241  MXM  WARN  No suitable active ports were found on IB device
</span><br>
<span class="quotelev1">&gt; 'mlx4_1'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder whether this support still works.  Or are there any other
</span><br>
<span class="quotelev1">&gt; supports to enable HCA card selection? And how can I change my default
</span><br>
<span class="quotelev1">&gt; settings for MPI use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Na Zhang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ibstat
</span><br>
<span class="quotelev1">&gt; CA 'mlx4_0'
</span><br>
<span class="quotelev1">&gt; CA type: MT4099
</span><br>
<span class="quotelev1">&gt; Number of ports: 2
</span><br>
<span class="quotelev1">&gt; Firmware version: 2.31.5050
</span><br>
<span class="quotelev1">&gt; Hardware version: 1
</span><br>
<span class="quotelev1">&gt; Node GUID: 0x0002c90300fee510
</span><br>
<span class="quotelev1">&gt; System image GUID: 0x0002c90300fee513
</span><br>
<span class="quotelev1">&gt; Port 1:
</span><br>
<span class="quotelev1">&gt; State: Down
</span><br>
<span class="quotelev1">&gt; Physical state: Disabled
</span><br>
<span class="quotelev1">&gt; Rate: 10
</span><br>
<span class="quotelev1">&gt; Base lid: 0
</span><br>
<span class="quotelev1">&gt; LMC: 0
</span><br>
<span class="quotelev1">&gt; SM lid: 0
</span><br>
<span class="quotelev1">&gt; Capability mask: 0x00010000
</span><br>
<span class="quotelev1">&gt; Port GUID: 0x0202c9fffefee510
</span><br>
<span class="quotelev1">&gt; Link layer: Ethernet
</span><br>
<span class="quotelev1">&gt; Port 2:
</span><br>
<span class="quotelev1">&gt; State: Active
</span><br>
<span class="quotelev1">&gt; Physical state: LinkUp
</span><br>
<span class="quotelev1">&gt; Rate: 56
</span><br>
<span class="quotelev1">&gt; Base lid: 3
</span><br>
<span class="quotelev1">&gt; LMC: 0
</span><br>
<span class="quotelev1">&gt; SM lid: 8
</span><br>
<span class="quotelev1">&gt; Capability mask: 0x02514868
</span><br>
<span class="quotelev1">&gt; Port GUID: 0x0002c90300fee512
</span><br>
<span class="quotelev1">&gt; Link layer: InfiniBand
</span><br>
<span class="quotelev1">&gt; CA 'mlx4_1'
</span><br>
<span class="quotelev1">&gt; CA type: MT4099
</span><br>
<span class="quotelev1">&gt; Number of ports: 2
</span><br>
<span class="quotelev1">&gt; Firmware version: 2.30.3200
</span><br>
<span class="quotelev1">&gt; Hardware version: 1
</span><br>
<span class="quotelev1">&gt; Node GUID: 0x24be05ffffb584f0
</span><br>
<span class="quotelev1">&gt; System image GUID: 0x24be05ffffb584f3
</span><br>
<span class="quotelev1">&gt; Port 1:
</span><br>
<span class="quotelev1">&gt; State: Down
</span><br>
<span class="quotelev1">&gt; Physical state: Disabled
</span><br>
<span class="quotelev1">&gt; Rate: 10
</span><br>
<span class="quotelev1">&gt; Base lid: 0
</span><br>
<span class="quotelev1">&gt; LMC: 0
</span><br>
<span class="quotelev1">&gt; SM lid: 0
</span><br>
<span class="quotelev1">&gt; Capability mask: 0x00010000
</span><br>
<span class="quotelev1">&gt; Port GUID: 0x26be05fffeb584f1
</span><br>
<span class="quotelev1">&gt; Link layer: Ethernet
</span><br>
<span class="quotelev1">&gt; Port 2:
</span><br>
<span class="quotelev1">&gt; State: Down
</span><br>
<span class="quotelev1">&gt; Physical state: Disabled
</span><br>
<span class="quotelev1">&gt; Rate: 10
</span><br>
<span class="quotelev1">&gt; Base lid: 0
</span><br>
<span class="quotelev1">&gt; LMC: 0
</span><br>
<span class="quotelev1">&gt; SM lid: 0
</span><br>
<span class="quotelev1">&gt; Capability mask: 0x00010000
</span><br>
<span class="quotelev1">&gt; Port GUID: 0x24be050001b584f2
</span><br>
<span class="quotelev1">&gt; Link layer: Ethernet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27149.php">http://www.open-mpi.org/community/lists/users/2015/06/27149.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27150/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27151.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27149.php">Na Zhang: "[OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>In reply to:</strong> <a href="27149.php">Na Zhang: "[OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<!-- nextthread="start" -->
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
