<?
$subject_val = "Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 10:01:17 2014" -->
<!-- isoreceived="20140724140117" -->
<!-- sent="Thu, 24 Jul 2014 07:01:13 -0700" -->
<!-- isosent="20140724140113" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML-bfo deadlocks for message size &amp;gt; eager limit after connection loss" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36047695612_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="92445615.348835.1406202856643.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 10:01:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15243.php">Christoph Niethammer: "[OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My guess is that no one is testing the bfo PML.  However, I would have expected it to still work with Open MPI 1.6.5.  From your description, it works for smaller messages but fails with larger ones?  So, if you just send smaller messages and pull the cable, things work correctly?
<br>
<p>One idea is to reduce the output you are getting so you can focus on just the failover information.  There is no need for any ORTE debug information as that is not involved in the failover.  I would go with these:
<br>
<p>mpirun -np 2 --hostfile /opt/ddt/nodes --pernode --mca pml bfo --mca btl self,sm,openib --mca btl_openib_port_error_failover 1 --mca btl_openib_verbose_failover 100 --mca pml_bfo_verbose 100 
<br>
<p>You can drop this:  --mca btl_openib_failover_enabled 1  (that is on by default)
<br>
&nbsp;
<br>
In terms of where you can debug, most of the failover support code is in two files.
<br>
ompi/mca/pml/bfo/pml_bfo_failover.c
<br>
ompi/mca/btl/openib/btl_openib_failover.c
<br>
<p>There is also a READE here:
<br>
ompi/mca/pml/bfo/README
<br>
<p>You could also try running without eager RDMA enabled: --mca btl_openib_use_eager_rdma 0
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Christoph
</span><br>
<span class="quotelev1">&gt;Niethammer
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, July 24, 2014 7:54 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after
</span><br>
<span class="quotelev1">&gt;connection loss
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there anybody using/testing the bfo PML - especially with messages &gt; eager
</span><br>
<span class="quotelev1">&gt;limit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Tests using messages &gt; eager limit with the bfo PML seem to deadlock in
</span><br>
<span class="quotelev1">&gt;Open MPI 1.6.5 as soon as one of two infiniband connections gets lost (tested
</span><br>
<span class="quotelev1">&gt;by disconnecting wire).
</span><br>
<span class="quotelev1">&gt;I did not have an opportunity to test 1.8/trunk up to now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Tests were executed with the following mpirun options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun -np 2 --hostfile /opt/ddt/nodes --pernode --mca pml bfo --mca
</span><br>
<span class="quotelev1">&gt;btl_base_exclude tcp --mca pml bfo --mca btl_openib_port_error_failover 1 -
</span><br>
<span class="quotelev1">&gt;-mca btl_openib_failover_enabled 1 --mca btl_openib_port_error_failover 1 -
</span><br>
<span class="quotelev1">&gt;-verbose --mca oob_tcp_verbose 100 --mca btl_openib_verbose_failover 100
</span><br>
<span class="quotelev1">&gt;--mca btl_openib_verbose 100 --mca btl_base_verbose 100 --mca
</span><br>
<span class="quotelev1">&gt;bml_base_verbose 100 --mca pml_bfo_verbose 100 --mca pml_base_verbose
</span><br>
<span class="quotelev1">&gt;100 --mca opal_progress_debug 100 --mca orte_debug_verbose 100 --mca
</span><br>
<span class="quotelev1">&gt;pml_v_verbose 100 --mca orte_base_help_aggregate 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Some log output is attached below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I would appreciate any feedback concerning current status of the bfo PML as
</span><br>
<span class="quotelev1">&gt;well as ideas how to debug and where to search for the problem inside the
</span><br>
<span class="quotelev1">&gt;Open MPI code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Best regards
</span><br>
<span class="quotelev1">&gt;Christoph Niethammer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Christoph Niethammer
</span><br>
<span class="quotelev1">&gt;High Performance Computing Center Stuttgart (HLRS) Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt;70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt;email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
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
<span class="quotelev1">&gt;[vm2:21970] defining message event: iof_hnp_receive.c 227 [vm1:16449]
</span><br>
<span class="quotelev1">&gt;Rank 0 receiving ...
</span><br>
<span class="quotelev1">&gt;[vm2:21970] [[22205,0],0] got show_help from [[22205,1],0]
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;The OpenFabrics stack has reported a network error event.  Open MPI will try
</span><br>
<span class="quotelev1">&gt;to continue, but your job may end up failing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Local host:        vm1
</span><br>
<span class="quotelev1">&gt;  MPI process PID:   16449
</span><br>
<span class="quotelev1">&gt;  Error number:      10 (IBV_EVENT_PORT_ERR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This error may indicate connectivity problems within the fabric; please contact
</span><br>
<span class="quotelev1">&gt;your system administrator.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;[vm1][[22205,1],0][btl_openib.c:1350:mca_btl_openib_prepare_dst] frag-
</span><br>
<span class="quotelev2">&gt;&gt;sg_entry.lkey = 1829372025 .addr = 1e1bee0 frag-
</span><br>
<span class="quotelev2">&gt;&gt;segment.seg_key.key32[0] = 1829372025
</span><br>
<span class="quotelev1">&gt;[vm1][[22205,1],0][btl_openib.c:1350:mca_btl_openib_prepare_dst] frag-
</span><br>
<span class="quotelev2">&gt;&gt;sg_entry.lkey = 1829372025 .addr = 1e28230 frag-
</span><br>
<span class="quotelev2">&gt;&gt;segment.seg_key.key32[0] = 1829372025 [vm2:21970] defining message
</span><br>
<span class="quotelev1">&gt;event: iof_hnp_receive.c 227 [vm1:16449]  Bandwidth [MB/s]: 594.353640
</span><br>
<span class="quotelev1">&gt;[vm1:16449] Rank 0: loop: 1100 [vm1:16449] Rank 0 sending ...
</span><br>
<span class="quotelev1">&gt;[vm2:21970] defining message event: iof_hnp_receive.c 227 [vm2:21970]
</span><br>
<span class="quotelev1">&gt;defining message event: iof_hnp_receive.c 227
</span><br>
<span class="quotelev1">&gt;[vm1][[22205,1],0][btl_openib_failover.c:696:mca_btl_openib_endpoint_noti
</span><br>
<span class="quotelev1">&gt;fy] [vm1:16449] BTL openib error: rank=0 mapping out lid=2:name=mthca0 to
</span><br>
<span class="quotelev1">&gt;rank=1 on node=vm2 [vm1:16449] IB: Finished checking for pending_frags,
</span><br>
<span class="quotelev1">&gt;total moved=0 [vm1:16449] IB: Finished checking for pending_frags, total
</span><br>
<span class="quotelev1">&gt;moved=0 Error sending BROKEN CONNECTION buffer (Success)
</span><br>
<span class="quotelev1">&gt;[[22205,1],1][btl_openib_component.c:3496:handle_wc] from vm2 to: 192
</span><br>
<span class="quotelev1">&gt;error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for
</span><br>
<span class="quotelev1">&gt;wr_id bdba80 opcode 1  vendor error 129 qp_idx 0 [vm2:21970] [[22205,0],0]
</span><br>
<span class="quotelev1">&gt;got show_help from [[22205,1],1]
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;The InfiniBand retry count between two MPI processes has been exceeded.
</span><br>
<span class="quotelev1">&gt;&quot;Retry count&quot; is defined in the InfiniBand spec 1.2 (section 12.7.38):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev1">&gt;    retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev1">&gt;    completion error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This error typically means that there is something awry within the InfiniBand
</span><br>
<span class="quotelev1">&gt;fabric itself.  You should note the hosts on which this error has occurred; it has
</span><br>
<span class="quotelev1">&gt;been observed that rebooting or removing a particular host from the job can
</span><br>
<span class="quotelev1">&gt;sometimes resolve this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev1">&gt;respect to the retry count:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev1">&gt;  attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev1">&gt;* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev1">&gt;  to 20).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Below is some information about the host that raised the error and the peer
</span><br>
<span class="quotelev1">&gt;to which it was connected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Local host:   vm2
</span><br>
<span class="quotelev1">&gt;  Local device: mthca0
</span><br>
<span class="quotelev1">&gt;  Peer host:    192
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You may need to consult with your system administrator to get this problem
</span><br>
<span class="quotelev1">&gt;fixed.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;[vm2:21982] MCA_BTL_OPENIG_FRAG=5, dropping since connection is
</span><br>
<span class="quotelev1">&gt;broken (des=bdba80)
</span><br>
<span class="quotelev1">&gt;[[22205,1],1][btl_openib_component.c:3496:handle_wc] from vm2 to: 192
</span><br>
<span class="quotelev1">&gt;error polling HP CQ with status WORK REQUEST FLUSHED ERROR status
</span><br>
<span class="quotelev1">&gt;number 5 for wr_id c56380 opcode 1  vendor error 244 qp_idx 0 [vm2:21982]
</span><br>
<span class="quotelev1">&gt;MCA_BTL_OPENIG_FRAG=0, dropping since connection is broken
</span><br>
<span class="quotelev1">&gt;(des=c56380) [vm2:21982] MCA_BTL_OPENIG_FRAG=0, dropping since
</span><br>
<span class="quotelev1">&gt;connection is broken (des=c56200) [vm2:21982] MCA_BTL_OPENIG_FRAG=0,
</span><br>
<span class="quotelev1">&gt;dropping since connection is broken (des=c56080) [vm2:21982]
</span><br>
<span class="quotelev1">&gt;MCA_BTL_OPENIG_FRAG=0, dropping since connection is broken
</span><br>
<span class="quotelev1">&gt;(des=c55f00)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[vm2:21982] MCA_BTL_OPENIG_FRAG=0, dropping since connection is
</span><br>
<span class="quotelev1">&gt;broken (des=c74a00) [vm2:21970] defining message event: iof_hnp_receive.c
</span><br>
<span class="quotelev1">&gt;227 [[22205,1],0][btl_openib_component.c:3496:handle_wc] from vm1 to:
</span><br>
<span class="quotelev1">&gt;vm2 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12
</span><br>
<span class="quotelev1">&gt;for wr_id 1dbe980 opcode 0  vendor error 129 qp_idx 0 [vm2:21970]
</span><br>
<span class="quotelev1">&gt;[[22205,0],0] got show_help from [[22205,1],0]
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;The InfiniBand retry count between two MPI processes has been exceeded.
</span><br>
<span class="quotelev1">&gt;&quot;Retry count&quot; is defined in the InfiniBand spec 1.2 (section 12.7.38):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev1">&gt;    retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev1">&gt;    completion error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This error typically means that there is something awry within the InfiniBand
</span><br>
<span class="quotelev1">&gt;fabric itself.  You should note the hosts on which this error has occurred; it has
</span><br>
<span class="quotelev1">&gt;been observed that rebooting or removing a particular host from the job can
</span><br>
<span class="quotelev1">&gt;sometimes resolve this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev1">&gt;respect to the retry count:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev1">&gt;  attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev1">&gt;* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev1">&gt;  to 20).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Below is some information about the host that raised the error and the peer
</span><br>
<span class="quotelev1">&gt;to which it was connected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Local host:   vm1
</span><br>
<span class="quotelev1">&gt;  Local device: mthca0
</span><br>
<span class="quotelev1">&gt;  Peer host:    vm2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You may need to consult with your system administrator to get this problem
</span><br>
<span class="quotelev1">&gt;fixed.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;[vm2:21970] defining message event: iof_hnp_receive.c 227 [vm2:21970]
</span><br>
<span class="quotelev1">&gt;defining message event: iof_hnp_receive.c 227 [vm2:21970] defining message
</span><br>
<span class="quotelev1">&gt;event: iof_hnp_receive.c 227 [vm1:16449] MCA_BTL_OPENIG_FRAG=5,
</span><br>
<span class="quotelev1">&gt;dropping since connection is broken (des=1dbe980) [vm1:16449]
</span><br>
<span class="quotelev1">&gt;MCA_BTL_OPENIG_FRAG=0, dropping since connection is broken
</span><br>
<span class="quotelev1">&gt;(des=1e39880) _______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/devel/2014/07/15243.php
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15243.php">Christoph Niethammer: "[OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
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
