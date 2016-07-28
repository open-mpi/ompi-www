<?
$subject_val = "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 19:24:42 2011" -->
<!-- isoreceived="20111216002442" -->
<!-- sent="Thu, 15 Dec 2011 16:24:34 -0800" -->
<!-- isosent="20111216002434" -->
<!-- name="V. Ram" -->
<!-- email="vramml0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes" -->
<!-- id="1323995074.14546.140661012243877_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE9E157.6010301_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes<br>
<strong>From:</strong> V. Ram (<em>vramml0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 19:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17989.php">Jeff Squyres: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="17987.php">Ralph Castain: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>In reply to:</strong> <a href="17985.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17989.php">Jeff Squyres: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="17989.php">Jeff Squyres: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
<p>Thanks so much for the response.  My replies are in-line below.
<br>
<p>On Thu, Dec 15, 2011, at 07:00 AM, TERRY DONTJE wrote:
<br>
<span class="quotelev1">&gt; IIRC, RNR's are usually due to the receiving side not having a segment 
</span><br>
<span class="quotelev1">&gt; registered and ready to receive data on a QP.  The btl does go through a 
</span><br>
<span class="quotelev1">&gt; big dance and does its own flow control to make sure this doesn't happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So when this happens are both the sending and receiving nodes using 
</span><br>
<span class="quotelev1">&gt; mthca's to communicate with?
</span><br>
<p>Yes.  For the newer nodes using onboard mlx4, this issue doesn't arise. 
<br>
The mlx4-based nodes are using the same core switch as the mthca nodes.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; By any chance is it a particular node (or pair of nodes) this seems to 
</span><br>
<span class="quotelev1">&gt; happen with?
</span><br>
<p>No.  I've got 40 nodes total with this hardware configuration, and the
<br>
problem has been seen on most/all nodes at one time or another.  It
<br>
doesn't seem, based on the limited number of observable parameters I'm
<br>
aware of, to be dependent on the number of nodes involved.
<br>
<p>It is an intermittent problem, but when it happens, it happens at job
<br>
launch, and it does occur most of the time.
<br>
<p>Thanks,
<br>
<p>V. Ram
<br>
<p><span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI InfiniBand gurus and/or Mellanox: could I please get some
</span><br>
<span class="quotelev2">&gt; &gt; assistance with this? Any suggestions on tunables or debugging
</span><br>
<span class="quotelev2">&gt; &gt; parameters to try?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Dec 12, 2011, at 10:42 AM, V. Ram wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We are running a cluster that has a good number of older nodes with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Mellanox IB HCAs that have the &quot;mthca&quot; device name (&quot;ib_mthca&quot; kernel
</span><br>
<span class="quotelev3">&gt; &gt; &gt; module).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; These adapters are all at firmware level 4.8.917 .
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The Open MPI in use is 1.5.3 , kernel 2.6.39 , x86-64. Jobs are
</span><br>
<span class="quotelev3">&gt; &gt; &gt; launched/managed using Slurm 2.2.7. The IB software and drivers
</span><br>
<span class="quotelev3">&gt; &gt; &gt; correspond to OFED 1.5.3.2 , and I've verified that the kernel modules
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in use are all from this OFED version.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On nodes with the mthca hardware *only*, we get frequent, but
</span><br>
<span class="quotelev3">&gt; &gt; &gt; intermittent job startup failures, with messages like:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /////////////////////////////////
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [[19373,1],54][btl_openib_component.c:3320:handle_wc] from compute-c3-07
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to: compute-c3-01 error polling LP CQ with status RECEIVER NOT READY
</span><br>
<span class="quotelev3">&gt; &gt; &gt; RETRY EXCEEDED ERROR status
</span><br>
<span class="quotelev3">&gt; &gt; &gt; number 13 for wr_id 2a25c200 opcode 128 vendor error 135 qp_idx 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The OpenFabrics &quot;receiver not ready&quot; retry count on a per-peer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; connection between two MPI processes has been exceeded. In general,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; this should not happen because Open MPI uses flow control on per-peer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; connections to ensure that receivers are always ready when data is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sent.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [further standard error text snipped...]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; peer to which it was connected:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Local host: compute-c3-07
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Local device: mthca0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Peer host: compute-c3-01
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problem fixed.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /////////////////////////////////
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; During these job runs, I have monitored the InfiniBand performance
</span><br>
<span class="quotelev3">&gt; &gt; &gt; counters on the endpoints and switch. No telltale counters for any of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; these ports change during these failed job initiations.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ibdiagnet works fine and properly enumerates the fabric and related
</span><br>
<span class="quotelev3">&gt; &gt; &gt; performance counters, both from the affected nodes, as well as other
</span><br>
<span class="quotelev3">&gt; &gt; &gt; nodes attached to the IB switch. The IB connectivity itself seems fine
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from these nodes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Other nodes with different HCAs use the same InfiniBand fabric
</span><br>
<span class="quotelev3">&gt; &gt; &gt; continuously without any issue, so I don't think it's the fabric/switch.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm at a loss for what to do next to try and find the root cause of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; issue. I suspect something perhaps having to do with the mthca
</span><br>
<span class="quotelev3">&gt; &gt; &gt; support/drivers, but how can I track this down further?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; V. Ram.
</span><br>
<p><pre>
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - One of many happy users:
  <a href="http://www.fastmail.fm/docs/quotes.html">http://www.fastmail.fm/docs/quotes.html</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17989.php">Jeff Squyres: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="17987.php">Ralph Castain: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>In reply to:</strong> <a href="17985.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17989.php">Jeff Squyres: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="17989.php">Jeff Squyres: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
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
