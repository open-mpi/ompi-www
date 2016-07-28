<?
$subject_val = "Re: [OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 12 12:43:47 2012" -->
<!-- isoreceived="20120312164347" -->
<!-- sent="Mon, 12 Mar 2012 12:43:41 -0400" -->
<!-- isosent="20120312164341" -->
<!-- name="Jeremy" -->
<!-- email="spritzydog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand path migration not working" -->
<!-- id="CA+tOgLHwkRYrYSWAJ0iMFNwS=r+xn1_XQENi0hJDrSd8W7M2Yw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4F5C5CC3.4060302_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] InfiniBand path migration not working<br>
<strong>From:</strong> Jeremy (<em>spritzydog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-12 12:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18738.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Previous message:</strong> <a href="18736.php">Eric Chamberland: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>In reply to:</strong> <a href="18735.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pasha, Yevgeny,
<br>
<p><span class="quotelev2">&gt;&gt; My educated guess is that from some reason it is no direct connection path
</span><br>
<span class="quotelev2">&gt;&gt; between lid-2 and lid-4. To prove it we have to look and the OpenSM routing
</span><br>
<span class="quotelev2">&gt;&gt; information.
</span><br>
<p><span class="quotelev1">&gt; If you don't get response or you get info of
</span><br>
<span class="quotelev1">&gt; the device different that what you would expect,
</span><br>
<span class="quotelev1">&gt; then the two ports are not part of the same
</span><br>
<span class="quotelev1">&gt; subnet, and APN is expected to fail.
</span><br>
<span class="quotelev1">&gt; Otherwise - it's probably a bug.
</span><br>
<p>I've tried your suggestions and the details are below.  I am now
<br>
testing with a trivial MPI application that just does an
<br>
MPI_Send/MPI_Recv and then sleeps for a while (attached).  There is
<br>
much less output to weed through now!
<br>
<p>When I unplug a cable from Port 1, the LID associated with Port 2 is
<br>
still reachable with smpquery.  So it looks like there should be a
<br>
valid path to migrate to on the same  subnet.
<br>
<p>I am using 2 hosts in this output
<br>
sulu:  This is the host where I unplug the cable from Port 1. The
<br>
cable on Port 2 is connected all the time. LIDs 4 and 5.
<br>
bones:  On this host I leave cables connected to both Ports all the
<br>
time.LIDs 2 and 3.
<br>
<p>A) Before I start, sulu shows that both Ports are up and active using
<br>
LIDs 4 and 5:
<br>
sulu&gt; ibstatus
<br>
Infiniband device 'mlx4_0' port 1 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0002:c903:0033:6fe1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            56 Gb/sec (4X FDR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:      InfiniBand
<br>
<p>Infiniband device 'mlx4_0' port 2 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0002:c903:0033:6fe2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            56 Gb/sec (4X FDR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:      InfiniBand
<br>
<p>B) The other host, bones, is able to get to LIDs 4 and 5 OK:
<br>
bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 4
<br>
# Node info: Lid 4
<br>
BaseVers:........................1
<br>
ClassVers:.......................1
<br>
NodeType:........................Channel Adapter
<br>
NumPorts:........................2
<br>
SystemGuid:......................0x0002c90300336fe3
<br>
Guid:............................0x0002c90300336fe0
<br>
PortGuid:........................0x0002c90300336fe1
<br>
PartCap:.........................128
<br>
DevId:...........................0x1003
<br>
Revision:........................0x00000000
<br>
LocalPort:.......................1
<br>
VendorId:........................0x0002c9
<br>
<p>bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 5
<br>
# Node info: Lid 5
<br>
BaseVers:........................1
<br>
ClassVers:.......................1
<br>
NodeType:........................Channel Adapter
<br>
NumPorts:........................2
<br>
SystemGuid:......................0x0002c90300336fe3
<br>
Guid:............................0x0002c90300336fe0
<br>
PortGuid:........................0x0002c90300336fe2
<br>
PartCap:.........................128
<br>
DevId:...........................0x1003
<br>
Revision:........................0x00000000
<br>
LocalPort:.......................2
<br>
VendorId:........................0x0002c9
<br>
<p>C) I start the MPI program.  See attached file for output.
<br>
<p>D) During Iteration 3, I unplugged the cable on Port 1 of sulu.
<br>
- I get the expected network error event message.
<br>
- sulu shows that Port 1 is down and Port 2 is active as expected.
<br>
- bones is still able to get to LID 5 on Port 2 of sulu as expected.
<br>
- The MPI application hangs and then terminates instead of running via LID 5.
<br>
<p>sulu&gt; ibstatus
<br>
Infiniband device 'mlx4_0' port 1 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0002:c903:0033:6fe1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           1: DOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      2: Polling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            40 Gb/sec (4X QDR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:      InfiniBand
<br>
<p>Infiniband device 'mlx4_0' port 2 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0002:c903:0033:6fe2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            56 Gb/sec (4X FDR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:      InfiniBand
<br>
<p>bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 4
<br>
ibwarn: [11192] mad_rpc: _do_madrpc failed; dport (Lid 4)
<br>
smpquery: iberror: failed: operation NodeInfo: node info query failed
<br>
<p>bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 5
<br>
# Node info: Lid 5
<br>
BaseVers:........................1
<br>
ClassVers:.......................1
<br>
NodeType:........................Channel Adapter
<br>
NumPorts:........................2
<br>
SystemGuid:......................0x0002c90300336fe3
<br>
Guid:............................0x0002c90300336fe0
<br>
PortGuid:........................0x0002c90300336fe2
<br>
PartCap:.........................128
<br>
DevId:...........................0x1003
<br>
Revision:........................0x00000000
<br>
LocalPort:.......................2
<br>
VendorId:........................0x0002c9
<br>
<p>Thanks,
<br>
<p>-Jeremy
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18737/simple_sendrecv.c">simple_sendrecv.c</a>
</ul>
<!-- attachment="simple_sendrecv.c" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18737/mpirun.out">mpirun.out</a>
</ul>
<!-- attachment="mpirun.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18738.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Previous message:</strong> <a href="18736.php">Eric Chamberland: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>In reply to:</strong> <a href="18735.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
