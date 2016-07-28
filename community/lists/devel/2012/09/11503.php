<?
$subject_val = "Re: [OMPI devel] Warnings in OMPI trunk and 1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 10:53:11 2012" -->
<!-- isoreceived="20120912145311" -->
<!-- sent="Wed, 12 Sep 2012 10:53:06 -0400" -->
<!-- isosent="20120912145306" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings in OMPI trunk and 1.7" -->
<!-- id="F7E60BCE-3807-4CC4-A9A3-40FD4539B47B_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D31201E7-9E43-40AD-8280-F8C4753F82A7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings in OMPI trunk and 1.7<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 10:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11504.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<li><strong>Previous message:</strong> <a href="11502.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>In reply to:</strong> <a href="11500.php">Ralph Castain: "[OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11505.php">Ralph Castain: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Reply:</strong> <a href="11505.php">Ralph Castain: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Please see our comment inline.
<br>
<p><span class="quotelev1">&gt; common_allgather.c: In function 'comm_allgather_pml':
</span><br>
<span class="quotelev1">&gt; common_allgather.c:45: warning: 'recv_iov[1].iov_len' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; common_allgather.c:45: warning: 'send_iov[1].iov_len' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; common_allgather.c:45: warning: 'send_iov[1].iov_base' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; common_allgather.c:45: warning: 'recv_iov[1].iov_base' may be used uninitialized in this function
</span><br>
<p>This is ours.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; common_netpatterns_knomial_tree.c: In function 'mca_common_netpatterns_setup_recursive_knomial_allgather_tree_node':
</span><br>
<span class="quotelev1">&gt; common_netpatterns_knomial_tree.c:38: warning: 'reindex_myid' may be used uninitialized in this function
</span><br>
<p>The same here.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; common_verbs_find_ports.c: In function 'ompi_common_verbs_find_ibv_ports':
</span><br>
<span class="quotelev1">&gt; common_verbs_find_ports.c:154: warning: attempt to free a non-heap object 'name'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This is probably Jeff's code.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; coll_ml_module.c: In function 'mca_coll_ml_tree_hierarchy_discovery':
</span><br>
<span class="quotelev1">&gt; coll_ml_module.c:1953: warning: 'my_rank_in_remaining_list' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; coll_ml_hier_algorithms_setup.c: In function 'ml_coll_barrier_constant_group_data_setup':
</span><br>
<span class="quotelev1">&gt; coll_ml_hier_algorithms_setup.c:329: warning: 'value_to_set' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; coll_ml_hier_algorithms_setup.c:334: warning: 'constant_group_data' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; coll_ml_hier_algorithms_setup.c: In function 'ml_coll_up_and_down_hier_setup':
</span><br>
<span class="quotelev1">&gt; coll_ml_hier_algorithms_setup.c:25: warning: 'value_to_set' may be used uninitialized in this function
</span><br>
<p><p>This is ours
<br>
<p>We will work to fix it.
<br>
Can you please share with us your configure parameters.
<br>
<p>Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11504.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<li><strong>Previous message:</strong> <a href="11502.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>In reply to:</strong> <a href="11500.php">Ralph Castain: "[OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11505.php">Ralph Castain: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Reply:</strong> <a href="11505.php">Ralph Castain: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
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
