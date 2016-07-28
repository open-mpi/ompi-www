<?
$subject_val = "Re: [OMPI devel] Warnings in OMPI trunk and 1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 11:01:11 2012" -->
<!-- isoreceived="20120912150111" -->
<!-- sent="Wed, 12 Sep 2012 08:01:03 -0700" -->
<!-- isosent="20120912150103" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings in OMPI trunk and 1.7" -->
<!-- id="FCADEEB8-EB1B-44A5-9A03-2B6960BA0F43_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F7E60BCE-3807-4CC4-A9A3-40FD4539B47B_at_ornl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 11:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11506.php">Suraj Prabhakaran: "[OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>Previous message:</strong> <a href="11504.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<li><strong>In reply to:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool - thanks!
<br>
<p>My configure is available in the code base at contrib/platform/greenplum/bend/linux.
<br>
<p>Appreciate it!
<br>
<p>On Sep 12, 2012, at 7:53 AM, &quot;Shamis, Pavel&quot; &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please see our comment inline.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; common_allgather.c: In function 'comm_allgather_pml':
</span><br>
<span class="quotelev2">&gt;&gt; common_allgather.c:45: warning: 'recv_iov[1].iov_len' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; common_allgather.c:45: warning: 'send_iov[1].iov_len' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; common_allgather.c:45: warning: 'send_iov[1].iov_base' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; common_allgather.c:45: warning: 'recv_iov[1].iov_base' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is ours.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; common_netpatterns_knomial_tree.c: In function 'mca_common_netpatterns_setup_recursive_knomial_allgather_tree_node':
</span><br>
<span class="quotelev2">&gt;&gt; common_netpatterns_knomial_tree.c:38: warning: 'reindex_myid' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; common_verbs_find_ports.c: In function 'ompi_common_verbs_find_ibv_ports':
</span><br>
<span class="quotelev2">&gt;&gt; common_verbs_find_ports.c:154: warning: attempt to free a non-heap object 'name'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is probably Jeff's code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; coll_ml_module.c: In function 'mca_coll_ml_tree_hierarchy_discovery':
</span><br>
<span class="quotelev2">&gt;&gt; coll_ml_module.c:1953: warning: 'my_rank_in_remaining_list' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; coll_ml_hier_algorithms_setup.c: In function 'ml_coll_barrier_constant_group_data_setup':
</span><br>
<span class="quotelev2">&gt;&gt; coll_ml_hier_algorithms_setup.c:329: warning: 'value_to_set' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; coll_ml_hier_algorithms_setup.c:334: warning: 'constant_group_data' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; coll_ml_hier_algorithms_setup.c: In function 'ml_coll_up_and_down_hier_setup':
</span><br>
<span class="quotelev2">&gt;&gt; coll_ml_hier_algorithms_setup.c:25: warning: 'value_to_set' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is ours
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We will work to fix it.
</span><br>
<span class="quotelev1">&gt; Can you please share with us your configure parameters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11506.php">Suraj Prabhakaran: "[OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>Previous message:</strong> <a href="11504.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<li><strong>In reply to:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
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
