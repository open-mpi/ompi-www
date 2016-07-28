<?
$subject_val = "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 07:00:30 2011" -->
<!-- isoreceived="20111215120030" -->
<!-- sent="Thu, 15 Dec 2011 07:00:23 -0500" -->
<!-- isosent="20111215120023" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes" -->
<!-- id="4EE9E157.6010301_at_oracle.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Error launching w/ 1.5.3 on IB mthca nodes" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 07:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Previous message:</strong> <a href="17984.php">Joao Amaral: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Maybe in reply to:</strong> <a href="17939.php">V. Ram: "[OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17988.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="17988.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IIRC, RNR's are usually due to the receiving side not having a segment 
<br>
registered and ready to receive data on a QP.  The btl does go through a 
<br>
big dance and does its own flow control to make sure this doesn't happen.
<br>
<p>So when this happens are both the sending and receiving nodes using 
<br>
mthca's to communicate with?
<br>
<p>By any chance is it a particular node (or pair of nodes) this seems to 
<br>
happen with?
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI InfiniBand gurus and/or Mellanox: could I please get some
</span><br>
<span class="quotelev1">&gt; assistance with this? Any suggestions on tunables or debugging
</span><br>
<span class="quotelev1">&gt; parameters to try?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 12, 2011, at 10:42 AM, V. Ram wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We are running a cluster that has a good number of older nodes with
</span><br>
<span class="quotelev2">&gt; &gt; Mellanox IB HCAs that have the &quot;mthca&quot; device name (&quot;ib_mthca&quot; kernel
</span><br>
<span class="quotelev2">&gt; &gt; module).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; These adapters are all at firmware level 4.8.917 .
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The Open MPI in use is 1.5.3 , kernel 2.6.39 , x86-64. Jobs are
</span><br>
<span class="quotelev2">&gt; &gt; launched/managed using Slurm 2.2.7. The IB software and drivers
</span><br>
<span class="quotelev2">&gt; &gt; correspond to OFED 1.5.3.2 , and I've verified that the kernel modules
</span><br>
<span class="quotelev2">&gt; &gt; in use are all from this OFED version.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On nodes with the mthca hardware *only*, we get frequent, but
</span><br>
<span class="quotelev2">&gt; &gt; intermittent job startup failures, with messages like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /////////////////////////////////
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [[19373,1],54][btl_openib_component.c:3320:handle_wc] from compute-c3-07
</span><br>
<span class="quotelev2">&gt; &gt; to: compute-c3-01 error polling LP CQ with status RECEIVER NOT READY
</span><br>
<span class="quotelev2">&gt; &gt; RETRY EXCEEDED ERROR status
</span><br>
<span class="quotelev2">&gt; &gt; number 13 for wr_id 2a25c200 opcode 128 vendor error 135 qp_idx 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; The OpenFabrics &quot;receiver not ready&quot; retry count on a per-peer
</span><br>
<span class="quotelev2">&gt; &gt; connection between two MPI processes has been exceeded. In general,
</span><br>
<span class="quotelev2">&gt; &gt; this should not happen because Open MPI uses flow control on per-peer
</span><br>
<span class="quotelev2">&gt; &gt; connections to ensure that receivers are always ready when data is
</span><br>
<span class="quotelev2">&gt; &gt; sent.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [further standard error text snipped...]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev2">&gt; &gt; peer to which it was connected:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Local host: compute-c3-07
</span><br>
<span class="quotelev2">&gt; &gt; Local device: mthca0
</span><br>
<span class="quotelev2">&gt; &gt; Peer host: compute-c3-01
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev2">&gt; &gt; problem fixed.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /////////////////////////////////
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; During these job runs, I have monitored the InfiniBand performance
</span><br>
<span class="quotelev2">&gt; &gt; counters on the endpoints and switch. No telltale counters for any of
</span><br>
<span class="quotelev2">&gt; &gt; these ports change during these failed job initiations.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ibdiagnet works fine and properly enumerates the fabric and related
</span><br>
<span class="quotelev2">&gt; &gt; performance counters, both from the affected nodes, as well as other
</span><br>
<span class="quotelev2">&gt; &gt; nodes attached to the IB switch. The IB connectivity itself seems fine
</span><br>
<span class="quotelev2">&gt; &gt; from these nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other nodes with different HCAs use the same InfiniBand fabric
</span><br>
<span class="quotelev2">&gt; &gt; continuously without any issue, so I don't think it's the fabric/switch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm at a loss for what to do next to try and find the root cause of the
</span><br>
<span class="quotelev2">&gt; &gt; issue. I suspect something perhaps having to do with the mthca
</span><br>
<span class="quotelev2">&gt; &gt; support/drivers, but how can I track this down further?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; V. Ram. 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Previous message:</strong> <a href="17984.php">Joao Amaral: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Maybe in reply to:</strong> <a href="17939.php">V. Ram: "[OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17988.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="17988.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
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
