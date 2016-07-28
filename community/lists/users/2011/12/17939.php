<?
$subject_val = "[OMPI users] Error launching w/ 1.5.3 on IB mthca nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 13:42:17 2011" -->
<!-- isoreceived="20111212184217" -->
<!-- sent="Mon, 12 Dec 2011 10:42:13 -0800" -->
<!-- isosent="20111212184213" -->
<!-- name="V. Ram" -->
<!-- email="vramml0_at_[hidden]" -->
<!-- subject="[OMPI users] Error launching w/ 1.5.3 on IB mthca nodes" -->
<!-- id="1323715333.25816.140661010701609_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes<br>
<strong>From:</strong> V. Ram (<em>vramml0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 13:42:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17940.php">Edmund Sumbar: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17968.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="17968.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Maybe reply:</strong> <a href="17985.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We are running a cluster that has a good number of older nodes with
<br>
Mellanox IB HCAs that have the &quot;mthca&quot; device name (&quot;ib_mthca&quot; kernel
<br>
module).
<br>
<p>These adapters are all at firmware level 4.8.917 .
<br>
<p>The Open MPI in use is 1.5.3 , kernel 2.6.39 , x86-64.  Jobs are
<br>
launched/managed using Slurm 2.2.7.  The IB software and drivers
<br>
correspond to OFED 1.5.3.2 , and I've verified that the kernel modules
<br>
in use are all from this OFED version.
<br>
<p>On nodes with the mthca hardware *only*, we get frequent, but
<br>
intermittent job startup failures, with messages like:
<br>
<p>/////////////////////////////////
<br>
<p>[[19373,1],54][btl_openib_component.c:3320:handle_wc] from compute-c3-07
<br>
to: compute-c3-01 error polling LP CQ with status RECEIVER NOT READY
<br>
RETRY EXCEEDED ERROR status
<br>
number 13 for wr_id 2a25c200 opcode 128 vendor error 135 qp_idx 0
<br>
<p>--------------------------------------------------------------------------
<br>
The OpenFabrics &quot;receiver not ready&quot; retry count on a per-peer
<br>
connection between two MPI processes has been exceeded.  In general,
<br>
this should not happen because Open MPI uses flow control on per-peer
<br>
connections to ensure that receivers are always ready when data is
<br>
sent.
<br>
<p>[further standard error text snipped...]
<br>
<p>Below is some information about the host that raised the error and the
<br>
peer to which it was connected:
<br>
<p>&nbsp;&nbsp;Local host:   compute-c3-07
<br>
&nbsp;&nbsp;Local device: mthca0
<br>
&nbsp;&nbsp;Peer host:    compute-c3-01
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
<p>/////////////////////////////////
<br>
<p>During these job runs, I have monitored the InfiniBand performance
<br>
counters on the endpoints and switch.  No telltale counters for any of
<br>
these ports change during these failed job initiations.
<br>
<p>ibdiagnet works fine and properly enumerates the fabric and related
<br>
performance counters, both from the affected nodes, as well as other
<br>
nodes attached to the IB switch.  The IB connectivity itself seems fine
<br>
from these nodes.
<br>
<p>Other nodes with different HCAs use the same InfiniBand fabric
<br>
continuously without any issue, so I don't think it's the fabric/switch.
<br>
<p>I'm at a loss for what to do next to try and find the root cause of the
<br>
issue.  I suspect something perhaps having to do with the mthca
<br>
support/drivers, but how can I track this down further?
<br>
<p>Thank you,
<br>
<p>V. Ram.
<br>
<p><pre>
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Or how I learned to stop worrying and
                          love email again
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17940.php">Edmund Sumbar: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17968.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="17968.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Maybe reply:</strong> <a href="17985.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
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
