<?
$subject_val = "[OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 07:54:20 2014" -->
<!-- isoreceived="20140724115420" -->
<!-- sent="Thu, 24 Jul 2014 13:54:17 +0200 (CEST)" -->
<!-- isosent="20140724115417" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[OMPI devel] PML-bfo deadlocks for message size &amp;gt; eager limit after connection loss" -->
<!-- id="92445615.348835.1406202856643.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="357126747.744896.1404206975635.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 07:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15242.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15251.php">Rolf vandeVaart: "Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<li><strong>Reply:</strong> <a href="15251.php">Rolf vandeVaart: "Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Is there anybody using/testing the bfo PML - especially with messages &gt; eager limit?
<br>
<p>Tests using messages &gt; eager limit with the bfo PML seem to deadlock in Open MPI 1.6.5 as soon as one of two infiniband connections gets lost (tested by disconnecting wire).
<br>
I did not have an opportunity to test 1.8/trunk up to now.
<br>
<p>Tests were executed with the following mpirun options:
<br>
<p>mpirun -np 2 --hostfile /opt/ddt/nodes --pernode --mca pml bfo --mca btl_base_exclude tcp --mca pml bfo --mca btl_openib_port_error_failover 1 --mca btl_openib_failover_enabled 1 --mca btl_openib_port_error_failover 1 --verbose --mca oob_tcp_verbose 100 --mca btl_openib_verbose_failover 100 --mca btl_openib_verbose 100 --mca btl_base_verbose 100 --mca bml_base_verbose 100 --mca pml_bfo_verbose 100 --mca pml_base_verbose 100 --mca opal_progress_debug 100 --mca orte_debug_verbose 100 --mca pml_v_verbose 100 --mca orte_base_help_aggregate 0
<br>
<p>Some log output is attached below.
<br>
<p>I would appreciate any feedback concerning current status of the bfo PML as well as ideas how to debug and where to search for the problem inside the Open MPI code base.
<br>
<p><p>Best regards
<br>
Christoph Niethammer
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
[vm2:21970] defining message event: iof_hnp_receive.c 227
[vm1:16449] Rank 0 receiving ...
[vm2:21970] [[22205,0],0] got show_help from [[22205,1],0]
--------------------------------------------------------------------------
The OpenFabrics stack has reported a network error event.  Open MPI
will try to continue, but your job may end up failing.
  Local host:        vm1
  MPI process PID:   16449
  Error number:      10 (IBV_EVENT_PORT_ERR)
This error may indicate connectivity problems within the fabric;
please contact your system administrator.
--------------------------------------------------------------------------
[vm1][[22205,1],0][btl_openib.c:1350:mca_btl_openib_prepare_dst] frag-&gt;sg_entry.lkey = 1829372025 .addr = 1e1bee0 frag-&gt;segment.seg_key.key32[0] = 1829372025
[vm1][[22205,1],0][btl_openib.c:1350:mca_btl_openib_prepare_dst] frag-&gt;sg_entry.lkey = 1829372025 .addr = 1e28230 frag-&gt;segment.seg_key.key32[0] = 1829372025
[vm2:21970] defining message event: iof_hnp_receive.c 227
[vm1:16449]  Bandwidth [MB/s]: 594.353640
[vm1:16449] Rank 0: loop: 1100
[vm1:16449] Rank 0 sending ...
[vm2:21970] defining message event: iof_hnp_receive.c 227
[vm2:21970] defining message event: iof_hnp_receive.c 227
[vm1][[22205,1],0][btl_openib_failover.c:696:mca_btl_openib_endpoint_notify] [vm1:16449] BTL openib error: rank=0 mapping out lid=2:name=mthca0 to rank=1 on node=vm2 [vm1:16449] IB: Finished checking for pending_frags, total moved=0
[vm1:16449] IB: Finished checking for pending_frags, total moved=0
Error sending BROKEN CONNECTION buffer (Success)
[[22205,1],1][btl_openib_component.c:3496:handle_wc] from vm2 to: 192 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id bdba80 opcode 1  vendor error 129 qp_idx 0
[vm2:21970] [[22205,0],0] got show_help from [[22205,1],1]
--------------------------------------------------------------------------
The InfiniBand retry count between two MPI processes has been
exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
(section 12.7.38):
    The total number of times that the sender wishes the receiver to
    retry timeout, packet sequence, etc. errors before posting a
    completion error.
This error typically means that there is something awry within the
InfiniBand fabric itself.  You should note the hosts on which this
error has occurred; it has been observed that rebooting or removing a
particular host from the job can sometimes resolve this issue.
Two MCA parameters can be used to control Open MPI's behavior with
respect to the retry count:
* btl_openib_ib_retry_count - The number of times the sender will
  attempt to retry (defaulted to 7, the maximum value).
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
  to 20).  The actual timeout value used is calculated as:
     4.096 microseconds * (2^btl_openib_ib_timeout)
  See the InfiniBand spec 1.2 (section 12.7.34) for more details.
Below is some information about the host that raised the error and the
peer to which it was connected:
  Local host:   vm2
  Local device: mthca0
  Peer host:    192
You may need to consult with your system administrator to get this
problem fixed.
--------------------------------------------------------------------------
[vm2:21982] MCA_BTL_OPENIG_FRAG=5, dropping since connection is broken (des=bdba80)
[[22205,1],1][btl_openib_component.c:3496:handle_wc] from vm2 to: 192 error polling HP CQ with status WORK REQUEST FLUSHED ERROR status number 5 for wr_id c56380 opcode 1  vendor error 244 qp_idx 0
[vm2:21982] MCA_BTL_OPENIG_FRAG=0, dropping since connection is broken (des=c56380)
[vm2:21982] MCA_BTL_OPENIG_FRAG=0, dropping since connection is broken (des=c56200)
[vm2:21982] MCA_BTL_OPENIG_FRAG=0, dropping since connection is broken (des=c56080)
[vm2:21982] MCA_BTL_OPENIG_FRAG=0, dropping since connection is broken (des=c55f00)
...
[vm2:21982] MCA_BTL_OPENIG_FRAG=0, dropping since connection is broken (des=c74a00)
[vm2:21970] defining message event: iof_hnp_receive.c 227
[[22205,1],0][btl_openib_component.c:3496:handle_wc] from vm1 to: vm2 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 1dbe980 opcode 0  vendor error 129 qp_idx 0
[vm2:21970] [[22205,0],0] got show_help from [[22205,1],0]
--------------------------------------------------------------------------
The InfiniBand retry count between two MPI processes has been
exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
(section 12.7.38):
    The total number of times that the sender wishes the receiver to
    retry timeout, packet sequence, etc. errors before posting a
    completion error.
This error typically means that there is something awry within the
InfiniBand fabric itself.  You should note the hosts on which this
error has occurred; it has been observed that rebooting or removing a
particular host from the job can sometimes resolve this issue.
Two MCA parameters can be used to control Open MPI's behavior with
respect to the retry count:
* btl_openib_ib_retry_count - The number of times the sender will
  attempt to retry (defaulted to 7, the maximum value).
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
  to 20).  The actual timeout value used is calculated as:
     4.096 microseconds * (2^btl_openib_ib_timeout)
  See the InfiniBand spec 1.2 (section 12.7.34) for more details.
Below is some information about the host that raised the error and the
peer to which it was connected:
  Local host:   vm1
  Local device: mthca0
  Peer host:    vm2
You may need to consult with your system administrator to get this
problem fixed.
--------------------------------------------------------------------------
[vm2:21970] defining message event: iof_hnp_receive.c 227
[vm2:21970] defining message event: iof_hnp_receive.c 227
[vm2:21970] defining message event: iof_hnp_receive.c 227
[vm1:16449] MCA_BTL_OPENIG_FRAG=5, dropping since connection is broken (des=1dbe980)
[vm1:16449] MCA_BTL_OPENIG_FRAG=0, dropping since connection is broken (des=1e39880)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15242.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15251.php">Rolf vandeVaart: "Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<li><strong>Reply:</strong> <a href="15251.php">Rolf vandeVaart: "Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
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
