<?
$subject_val = "Re: [OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 10:53:07 2012" -->
<!-- isoreceived="20120321145307" -->
<!-- sent="Wed, 21 Mar 2012 10:53:02 -0400" -->
<!-- isosent="20120321145302" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand path migration not working" -->
<!-- id="03679046-3908-4955-8142-58C34F4ED43D_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+tOgLF2Ya-ruhs7idW5v-QcvF5KoQNKJEe64d-J0-s0YfH6qg_at_mail.gmail.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-21 10:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18822.php">Brock Palen: "[OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Previous message:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeremy,
<br>
<p>As far as I understand the tool that Evgeny recommended showed that the remote port is reachable. 
<br>
Based on the log that have been provided I can't find the issue in ompi, everything seems to be kosher.
<br>
Unfortunately, I do not have a platform where I may try to reproduce the issue. I would as Evegeny,
<br>
maybe Mellanox will be able to reproduce and debug the issue.
<br>
<p><p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Mar 21, 2012, at 9:31 AM, Jeremy wrote:
&gt; Hi Pasha,
&gt; 
&gt; I just wanted to check if you had any further suggestions regarding
&gt; the APM issue based on the updated info in my previous email.
&gt; 
&gt; Thanks,
&gt; 
&gt; -Jeremy
&gt; 
&gt; On Mon, Mar 12, 2012 at 12:43 PM, Jeremy &lt;spritzydog_at_[hidden]&gt; wrote:
&gt;&gt; Hi Pasha, Yevgeny,
&gt;&gt; 
&gt;&gt;&gt;&gt; My educated guess is that from some reason it is no direct connection path
&gt;&gt;&gt;&gt; between lid-2 and lid-4. To prove it we have to look and the OpenSM routing
&gt;&gt;&gt;&gt; information.
&gt;&gt; 
&gt;&gt;&gt; If you don't get response or you get info of
&gt;&gt;&gt; the device different that what you would expect,
&gt;&gt;&gt; then the two ports are not part of the same
&gt;&gt;&gt; subnet, and APN is expected to fail.
&gt;&gt;&gt; Otherwise - it's probably a bug.
&gt;&gt; 
&gt;&gt; I've tried your suggestions and the details are below.  I am now
&gt;&gt; testing with a trivial MPI application that just does an
&gt;&gt; MPI_Send/MPI_Recv and then sleeps for a while (attached).  There is
&gt;&gt; much less output to weed through now!
&gt;&gt; 
&gt;&gt; When I unplug a cable from Port 1, the LID associated with Port 2 is
&gt;&gt; still reachable with smpquery.  So it looks like there should be a
&gt;&gt; valid path to migrate to on the same  subnet.
&gt;&gt; 
&gt;&gt; I am using 2 hosts in this output
&gt;&gt; sulu:  This is the host where I unplug the cable from Port 1. The
&gt;&gt; cable on Port 2 is connected all the time. LIDs 4 and 5.
&gt;&gt; bones:  On this host I leave cables connected to both Ports all the
&gt;&gt; time.LIDs 2 and 3.
&gt;&gt; 
&gt;&gt; A) Before I start, sulu shows that both Ports are up and active using
&gt;&gt; LIDs 4 and 5:
&gt;&gt; sulu&gt; ibstatus
&gt;&gt; Infiniband device 'mlx4_0' port 1 status:
&gt;&gt;        default gid:     fe80:0000:0000:0000:0002:c903:0033:6fe1
&gt;&gt;        base lid:        0x4
&gt;&gt;        sm lid:          0x6
&gt;&gt;        state:           4: ACTIVE
&gt;&gt;        phys state:      5: LinkUp
&gt;&gt;        rate:            56 Gb/sec (4X FDR)
&gt;&gt;        link_layer:      InfiniBand
&gt;&gt; 
&gt;&gt; Infiniband device 'mlx4_0' port 2 status:
&gt;&gt;        default gid:     fe80:0000:0000:0000:0002:c903:0033:6fe2
&gt;&gt;        base lid:        0x5
&gt;&gt;        sm lid:          0x6
&gt;&gt;        state:           4: ACTIVE
&gt;&gt;        phys state:      5: LinkUp
&gt;&gt;        rate:            56 Gb/sec (4X FDR)
&gt;&gt;        link_layer:      InfiniBand
&gt;&gt; 
&gt;&gt; B) The other host, bones, is able to get to LIDs 4 and 5 OK:
&gt;&gt; bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 4
&gt;&gt; # Node info: Lid 4
&gt;&gt; BaseVers:........................1
&gt;&gt; ClassVers:.......................1
&gt;&gt; NodeType:........................Channel Adapter
&gt;&gt; NumPorts:........................2
&gt;&gt; SystemGuid:......................0x0002c90300336fe3
&gt;&gt; Guid:............................0x0002c90300336fe0
&gt;&gt; PortGuid:........................0x0002c90300336fe1
&gt;&gt; PartCap:.........................128
&gt;&gt; DevId:...........................0x1003
&gt;&gt; Revision:........................0x00000000
&gt;&gt; LocalPort:.......................1
&gt;&gt; VendorId:........................0x0002c9
&gt;&gt; 
&gt;&gt; bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 5
&gt;&gt; # Node info: Lid 5
&gt;&gt; BaseVers:........................1
&gt;&gt; ClassVers:.......................1
&gt;&gt; NodeType:........................Channel Adapter
&gt;&gt; NumPorts:........................2
&gt;&gt; SystemGuid:......................0x0002c90300336fe3
&gt;&gt; Guid:............................0x0002c90300336fe0
&gt;&gt; PortGuid:........................0x0002c90300336fe2
&gt;&gt; PartCap:.........................128
&gt;&gt; DevId:...........................0x1003
&gt;&gt; Revision:........................0x00000000
&gt;&gt; LocalPort:.......................2
&gt;&gt; VendorId:........................0x0002c9
&gt;&gt; 
&gt;&gt; C) I start the MPI program.  See attached file for output.
&gt;&gt; 
&gt;&gt; D) During Iteration 3, I unplugged the cable on Port 1 of sulu.
&gt;&gt; - I get the expected network error event message.
&gt;&gt; - sulu shows that Port 1 is down and Port 2 is active as expected.
&gt;&gt; - bones is still able to get to LID 5 on Port 2 of sulu as expected.
&gt;&gt; - The MPI application hangs and then terminates instead of running via LID 5.
&gt;&gt; 
&gt;&gt; sulu&gt; ibstatus
&gt;&gt; Infiniband device 'mlx4_0' port 1 status:
&gt;&gt;        default gid:     fe80:0000:0000:0000:0002:c903:0033:6fe1
&gt;&gt;        base lid:        0x4
&gt;&gt;        sm lid:          0x6
&gt;&gt;        state:           1: DOWN
&gt;&gt;        phys state:      2: Polling
&gt;&gt;        rate:            40 Gb/sec (4X QDR)
&gt;&gt;        link_layer:      InfiniBand
&gt;&gt; 
&gt;&gt; Infiniband device 'mlx4_0' port 2 status:
&gt;&gt;        default gid:     fe80:0000:0000:0000:0002:c903:0033:6fe2
&gt;&gt;        base lid:        0x5
&gt;&gt;        sm lid:          0x6
&gt;&gt;        state:           4: ACTIVE
&gt;&gt;        phys state:      5: LinkUp
&gt;&gt;        rate:            56 Gb/sec (4X FDR)
&gt;&gt;        link_layer:      InfiniBand
&gt;&gt; 
&gt;&gt; bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 4
&gt;&gt; ibwarn: [11192] mad_rpc: _do_madrpc failed; dport (Lid 4)
&gt;&gt; smpquery: iberror: failed: operation NodeInfo: node info query failed
&gt;&gt; 
&gt;&gt; bones&gt; smpquery --Ca mlx4_0 --Port 1 NodeInfo 5
&gt;&gt; # Node info: Lid 5
&gt;&gt; BaseVers:........................1
&gt;&gt; ClassVers:.......................1
&gt;&gt; NodeType:........................Channel Adapter
&gt;&gt; NumPorts:........................2
&gt;&gt; SystemGuid:......................0x0002c90300336fe3
&gt;&gt; Guid:............................0x0002c90300336fe0
&gt;&gt; PortGuid:........................0x0002c90300336fe2
&gt;&gt; PartCap:.........................128
&gt;&gt; DevId:...........................0x1003
&gt;&gt; Revision:........................0x00000000
&gt;&gt; LocalPort:.......................2
&gt;&gt; VendorId:........................0x0002c9
&gt;&gt; 
&gt;&gt; Thanks,
&gt;&gt; 
&gt;&gt; -Jeremy
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18822.php">Brock Palen: "[OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Previous message:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18820.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
