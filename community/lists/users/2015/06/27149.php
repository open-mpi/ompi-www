<?
$subject_val = "[OMPI users] No suitable active ports warning and -mca btl_openib_if_include option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 14:38:57 2015" -->
<!-- isoreceived="20150617183857" -->
<!-- sent="Wed, 17 Jun 2015 14:38:56 -0400" -->
<!-- isosent="20150617183856" -->
<!-- name="Na Zhang" -->
<!-- email="na.zhang_at_[hidden]" -->
<!-- subject="[OMPI users] No suitable active ports warning and -mca btl_openib_if_include option" -->
<!-- id="CAFbC_Z+q7pCv6c0UiMjZE55Pnydn_FKfW7Ds2Lnh6ucE+EMKtw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option<br>
<strong>From:</strong> Na Zhang (<em>na.zhang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-17 14:38:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27150.php">Mike Dubman: "Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>Previous message:</strong> <a href="27148.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27150.php">Mike Dubman: "Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>Reply:</strong> <a href="27150.php">Mike Dubman: "Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am trying to launch MPI jobs (with version openmpi-1.6.5) on a node with
<br>
multiple InfiniBand HCA cards (pls. see ibstat info below). I just want to
<br>
use the only active port: mlx4_0 port 2. Thus I issued
<br>
<p>mpirun *-mca btl_openib_if_include &quot;mlx4_0:2&quot;* -np...
<br>
<p>I thought this command would allow only to use mlx4_0:2. But I still got
<br>
below warning:
<br>
<p>ib_dev.c:241  MXM  WARN  No suitable active ports were found on IB device
<br>
'mlx4_1'.
<br>
<p>I wonder whether this support still works.  Or are there any other supports
<br>
to enable HCA card selection? And how can I change my default settings for
<br>
MPI use?
<br>
<p>Thanks!
<br>
<p>Best,
<br>
Na Zhang
<br>
<p>$ ibstat
<br>
CA 'mlx4_0'
<br>
CA type: MT4099
<br>
Number of ports: 2
<br>
Firmware version: 2.31.5050
<br>
Hardware version: 1
<br>
Node GUID: 0x0002c90300fee510
<br>
System image GUID: 0x0002c90300fee513
<br>
Port 1:
<br>
State: Down
<br>
Physical state: Disabled
<br>
Rate: 10
<br>
Base lid: 0
<br>
LMC: 0
<br>
SM lid: 0
<br>
Capability mask: 0x00010000
<br>
Port GUID: 0x0202c9fffefee510
<br>
Link layer: Ethernet
<br>
Port 2:
<br>
State: Active
<br>
Physical state: LinkUp
<br>
Rate: 56
<br>
Base lid: 3
<br>
LMC: 0
<br>
SM lid: 8
<br>
Capability mask: 0x02514868
<br>
Port GUID: 0x0002c90300fee512
<br>
Link layer: InfiniBand
<br>
CA 'mlx4_1'
<br>
CA type: MT4099
<br>
Number of ports: 2
<br>
Firmware version: 2.30.3200
<br>
Hardware version: 1
<br>
Node GUID: 0x24be05ffffb584f0
<br>
System image GUID: 0x24be05ffffb584f3
<br>
Port 1:
<br>
State: Down
<br>
Physical state: Disabled
<br>
Rate: 10
<br>
Base lid: 0
<br>
LMC: 0
<br>
SM lid: 0
<br>
Capability mask: 0x00010000
<br>
Port GUID: 0x26be05fffeb584f1
<br>
Link layer: Ethernet
<br>
Port 2:
<br>
State: Down
<br>
Physical state: Disabled
<br>
Rate: 10
<br>
Base lid: 0
<br>
LMC: 0
<br>
SM lid: 0
<br>
Capability mask: 0x00010000
<br>
Port GUID: 0x24be050001b584f2
<br>
Link layer: Ethernet
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27149/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27150.php">Mike Dubman: "Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>Previous message:</strong> <a href="27148.php">Fei Mao: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27150.php">Mike Dubman: "Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
<li><strong>Reply:</strong> <a href="27150.php">Mike Dubman: "Re: [OMPI users] No suitable active ports warning and -mca btl_openib_if_include option"</a>
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
