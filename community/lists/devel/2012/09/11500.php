<?
$subject_val = "[OMPI devel] Warnings in OMPI trunk and 1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 19:45:58 2012" -->
<!-- isoreceived="20120911234558" -->
<!-- sent="Tue, 11 Sep 2012 16:45:51 -0700" -->
<!-- isosent="20120911234551" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Warnings in OMPI trunk and 1.7" -->
<!-- id="D31201E7-9E43-40AD-8280-F8C4753F82A7_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Warnings in OMPI trunk and 1.7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 19:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11501.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11499.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Reply:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I built an optimized version of the trunk and the 1.7 branch on a Linux/SLURM box and got the following warnings - can people please identify which ones belong to you and fix them?
<br>
<p>common_allgather.c: In function 'comm_allgather_pml':
<br>
common_allgather.c:45: warning: 'recv_iov[1].iov_len' may be used uninitialized in this function
<br>
common_allgather.c:45: warning: 'send_iov[1].iov_len' may be used uninitialized in this function
<br>
common_allgather.c:45: warning: 'send_iov[1].iov_base' may be used uninitialized in this function
<br>
common_allgather.c:45: warning: 'recv_iov[1].iov_base' may be used uninitialized in this function
<br>
<p>common_netpatterns_knomial_tree.c: In function 'mca_common_netpatterns_setup_recursive_knomial_allgather_tree_node':
<br>
common_netpatterns_knomial_tree.c:38: warning: 'reindex_myid' may be used uninitialized in this function
<br>
<p>common_verbs_find_ports.c: In function 'ompi_common_verbs_find_ibv_ports':
<br>
common_verbs_find_ports.c:154: warning: attempt to free a non-heap object 'name'
<br>
<p><p>coll_ml_module.c: In function 'mca_coll_ml_tree_hierarchy_discovery':
<br>
coll_ml_module.c:1953: warning: 'my_rank_in_remaining_list' may be used uninitialized in this function
<br>
<p>coll_ml_hier_algorithms_setup.c: In function 'ml_coll_barrier_constant_group_data_setup':
<br>
coll_ml_hier_algorithms_setup.c:329: warning: 'value_to_set' may be used uninitialized in this function
<br>
coll_ml_hier_algorithms_setup.c:334: warning: 'constant_group_data' may be used uninitialized in this function
<br>
coll_ml_hier_algorithms_setup.c: In function 'ml_coll_up_and_down_hier_setup':
<br>
coll_ml_hier_algorithms_setup.c:25: warning: 'value_to_set' may be used uninitialized in this function
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11501.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11499.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Reply:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
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
