<?
$subject_val = "Re: [OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 09:31:39 2012" -->
<!-- isoreceived="20120321133139" -->
<!-- sent="Wed, 21 Mar 2012 09:31:34 -0400" -->
<!-- isosent="20120321133134" -->
<!-- name="Jeremy" -->
<!-- email="spritzydog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand path migration not working" -->
<!-- id="CA+tOgLF2Ya-ruhs7idW5v-QcvF5KoQNKJEe64d-J0-s0YfH6qg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+tOgLHwkRYrYSWAJ0iMFNwS=r+xn1_XQENi0hJDrSd8W7M2Yw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-03-21 09:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18821.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18819.php">Dylan Nelson: "[OMPI users] oMPI hang with IB question"</a>
<li><strong>In reply to:</strong> <a href="18737.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18821.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18821.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pasha,
<br>
<p>I just wanted to check if you had any further suggestions regarding
<br>
the APM issue based on the updated info in my previous email.
<br>
<p>Thanks,
<br>
<p>-Jeremy
<br>
<p>On Mon, Mar 12, 2012 at 12:43 PM, Jeremy &lt;spritzydog_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Pasha, Yevgeny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My educated guess is that from some reason it is no direct connection path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between lid-2 and lid-4. To prove it we have to look and the OpenSM routing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you don't get response or you get info of
</span><br>
<span class="quotelev2">&gt;&gt; the device different that what you would expect,
</span><br>
<span class="quotelev2">&gt;&gt; then the two ports are not part of the same
</span><br>
<span class="quotelev2">&gt;&gt; subnet, and APN is expected to fail.
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise - it's probably a bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried your suggestions and the details are below. &#160;I am now
</span><br>
<span class="quotelev1">&gt; testing with a trivial MPI application that just does an
</span><br>
<span class="quotelev1">&gt; MPI_Send/MPI_Recv and then sleeps for a while (attached). &#160;There is
</span><br>
<span class="quotelev1">&gt; much less output to weed through now!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I unplug a cable from Port 1, the LID associated with Port 2 is
</span><br>
<span class="quotelev1">&gt; still reachable with smpquery. &#160;So it looks like there should be a
</span><br>
<span class="quotelev1">&gt; valid path to migrate to on the same &#160;subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using 2 hosts in this output
</span><br>
<span class="quotelev1">&gt; sulu: &#160;This is the host where I unplug the cable from Port 1. The
</span><br>
<span class="quotelev1">&gt; cable on Port 2 is connected all the time. LIDs 4 and 5.
</span><br>
<span class="quotelev1">&gt; bones: &#160;On this host I leave cables connected to both Ports all the
</span><br>
<span class="quotelev1">&gt; time.LIDs 2 and 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) Before I start, sulu shows that both Ports are up and active using
</span><br>
<span class="quotelev1">&gt; LIDs 4 and 5:
</span><br>
<span class="quotelev1">&gt; sulu&gt; ibstatus
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;default gid: &#160; &#160; fe80:0000:0000:0000:0002:c903:0033:6fe1
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;base lid: &#160; &#160; &#160; &#160;0x4
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;sm lid: &#160; &#160; &#160; &#160; &#160;0x6
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;state: &#160; &#160; &#160; &#160; &#160; 4: ACTIVE
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;phys state: &#160; &#160; &#160;5: LinkUp
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;rate: &#160; &#160; &#160; &#160; &#160; &#160;56 Gb/sec (4X FDR)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;link_layer: &#160; &#160; &#160;InfiniBand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 2 status:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;default gid: &#160; &#160; fe80:0000:0000:0000:0002:c903:0033:6fe2
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;base lid: &#160; &#160; &#160; &#160;0x5
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;sm lid: &#160; &#160; &#160; &#160; &#160;0x6
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;state: &#160; &#160; &#160; &#160; &#160; 4: ACTIVE
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;phys state: &#160; &#160; &#160;5: LinkUp
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;rate: &#160; &#160; &#160; &#160; &#160; &#160;56 Gb/sec (4X FDR)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;link_layer: &#160; &#160; &#160;InfiniBand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B) The other host, bones, is able to get to LIDs 4 and 5 OK:
</span><br>
<span class="quotelev1">&gt; bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 4
</span><br>
<span class="quotelev1">&gt; # Node info: Lid 4
</span><br>
<span class="quotelev1">&gt; BaseVers:........................1
</span><br>
<span class="quotelev1">&gt; ClassVers:.......................1
</span><br>
<span class="quotelev1">&gt; NodeType:........................Channel Adapter
</span><br>
<span class="quotelev1">&gt; NumPorts:........................2
</span><br>
<span class="quotelev1">&gt; SystemGuid:......................0x0002c90300336fe3
</span><br>
<span class="quotelev1">&gt; Guid:............................0x0002c90300336fe0
</span><br>
<span class="quotelev1">&gt; PortGuid:........................0x0002c90300336fe1
</span><br>
<span class="quotelev1">&gt; PartCap:.........................128
</span><br>
<span class="quotelev1">&gt; DevId:...........................0x1003
</span><br>
<span class="quotelev1">&gt; Revision:........................0x00000000
</span><br>
<span class="quotelev1">&gt; LocalPort:.......................1
</span><br>
<span class="quotelev1">&gt; VendorId:........................0x0002c9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 5
</span><br>
<span class="quotelev1">&gt; # Node info: Lid 5
</span><br>
<span class="quotelev1">&gt; BaseVers:........................1
</span><br>
<span class="quotelev1">&gt; ClassVers:.......................1
</span><br>
<span class="quotelev1">&gt; NodeType:........................Channel Adapter
</span><br>
<span class="quotelev1">&gt; NumPorts:........................2
</span><br>
<span class="quotelev1">&gt; SystemGuid:......................0x0002c90300336fe3
</span><br>
<span class="quotelev1">&gt; Guid:............................0x0002c90300336fe0
</span><br>
<span class="quotelev1">&gt; PortGuid:........................0x0002c90300336fe2
</span><br>
<span class="quotelev1">&gt; PartCap:.........................128
</span><br>
<span class="quotelev1">&gt; DevId:...........................0x1003
</span><br>
<span class="quotelev1">&gt; Revision:........................0x00000000
</span><br>
<span class="quotelev1">&gt; LocalPort:.......................2
</span><br>
<span class="quotelev1">&gt; VendorId:........................0x0002c9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C) I start the MPI program. &#160;See attached file for output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D) During Iteration 3, I unplugged the cable on Port 1 of sulu.
</span><br>
<span class="quotelev1">&gt; - I get the expected network error event message.
</span><br>
<span class="quotelev1">&gt; - sulu shows that Port 1 is down and Port 2 is active as expected.
</span><br>
<span class="quotelev1">&gt; - bones is still able to get to LID 5 on Port 2 of sulu as expected.
</span><br>
<span class="quotelev1">&gt; - The MPI application hangs and then terminates instead of running via LID 5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sulu&gt; ibstatus
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;default gid: &#160; &#160; fe80:0000:0000:0000:0002:c903:0033:6fe1
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;base lid: &#160; &#160; &#160; &#160;0x4
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;sm lid: &#160; &#160; &#160; &#160; &#160;0x6
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;state: &#160; &#160; &#160; &#160; &#160; 1: DOWN
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;phys state: &#160; &#160; &#160;2: Polling
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;rate: &#160; &#160; &#160; &#160; &#160; &#160;40 Gb/sec (4X QDR)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;link_layer: &#160; &#160; &#160;InfiniBand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 2 status:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;default gid: &#160; &#160; fe80:0000:0000:0000:0002:c903:0033:6fe2
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;base lid: &#160; &#160; &#160; &#160;0x5
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;sm lid: &#160; &#160; &#160; &#160; &#160;0x6
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;state: &#160; &#160; &#160; &#160; &#160; 4: ACTIVE
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;phys state: &#160; &#160; &#160;5: LinkUp
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;rate: &#160; &#160; &#160; &#160; &#160; &#160;56 Gb/sec (4X FDR)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;link_layer: &#160; &#160; &#160;InfiniBand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 4
</span><br>
<span class="quotelev1">&gt; ibwarn: [11192] mad_rpc: _do_madrpc failed; dport (Lid 4)
</span><br>
<span class="quotelev1">&gt; smpquery: iberror: failed: operation NodeInfo: node info query failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 5
</span><br>
<span class="quotelev1">&gt; # Node info: Lid 5
</span><br>
<span class="quotelev1">&gt; BaseVers:........................1
</span><br>
<span class="quotelev1">&gt; ClassVers:.......................1
</span><br>
<span class="quotelev1">&gt; NodeType:........................Channel Adapter
</span><br>
<span class="quotelev1">&gt; NumPorts:........................2
</span><br>
<span class="quotelev1">&gt; SystemGuid:......................0x0002c90300336fe3
</span><br>
<span class="quotelev1">&gt; Guid:............................0x0002c90300336fe0
</span><br>
<span class="quotelev1">&gt; PortGuid:........................0x0002c90300336fe2
</span><br>
<span class="quotelev1">&gt; PartCap:.........................128
</span><br>
<span class="quotelev1">&gt; DevId:...........................0x1003
</span><br>
<span class="quotelev1">&gt; Revision:........................0x00000000
</span><br>
<span class="quotelev1">&gt; LocalPort:.......................2
</span><br>
<span class="quotelev1">&gt; VendorId:........................0x0002c9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Jeremy
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18821.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18819.php">Dylan Nelson: "[OMPI users] oMPI hang with IB question"</a>
<li><strong>In reply to:</strong> <a href="18737.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18821.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18821.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
