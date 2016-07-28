<?
$subject_val = "[OMPI devel] SM BTL NUMA awareness patches";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 09:17:35 2008" -->
<!-- isoreceived="20080528131735" -->
<!-- sent="Wed, 28 May 2008 16:17:27 +0300" -->
<!-- isosent="20080528131727" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] SM BTL NUMA awareness patches" -->
<!-- id="20080528131727.GO4014_at_minantech.com" -->
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
<strong>Subject:</strong> [OMPI devel] SM BTL NUMA awareness patches<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 09:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4056.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<li><strong>Previous message:</strong> <a href="4054.php">Ralph H Castain: "Re: [OMPI devel] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4075.php">Lenny Verkhovsky: "[OMPI devel]  SM BTL NUMA awareness patches"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4075.php">Lenny Verkhovsky: "[OMPI devel]  SM BTL NUMA awareness patches"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4125.php">Lenny Verkhovsky: "Re: [OMPI devel] SM BTL NUMA awareness patches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Attached two patches implement NUMA awareness in SM BTL. The first one
<br>
adds two new functions to maffinity framework required by the second
<br>
patch. The functions are:
<br>
<p>&nbsp;opal_maffinity_base_node_name_to_id() - gets a string that represents a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory node name and translates
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it to memory node id.
<br>
&nbsp;opal_maffinity_base_bind()            - binds an address range to specific
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory node.
<br>
<p>The bind() function cannot be implemented by all maffinity components.
<br>
(There is no way first_use maffinity component can implement such
<br>
functionality). In this case this function can be set to NULL.
<br>
<p>The second one adds NUMA awareness support to SM BTL and SM MPOOL. Each
<br>
process determines what CPU it is running on and exchange this info with
<br>
other local processes. Each process creates separate MPOOL for every
<br>
memory node available and use them to allocate memory on specific memory
<br>
nodes if needed. For instance circular buffer memory is always allocated
<br>
on memory node local to receiver process.
<br>
<p>To use this on a Linux machine carto file with HW topology description should
<br>
be provided. Processes should be bound to specific CPU (by specifying
<br>
rank file for instance) and session directory should be created on tmpfs
<br>
file system (otherwise Linux ignores memory binding commands) by
<br>
setting orte_tmpdir_base parameter to point to tmpfs mount point.
<br>
<p>Questions and suggestion are alway welcome.
<br>
<p><pre>
--
			Gleb.


</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4055/maffinity.diff">maffinity.diff</a>
</ul>
<!-- attachment="maffinity.diff" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4055/sm_btl_memory_affinity.diff">sm_btl_memory_affinity.diff</a>
</ul>
<!-- attachment="sm_btl_memory_affinity.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4056.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<li><strong>Previous message:</strong> <a href="4054.php">Ralph H Castain: "Re: [OMPI devel] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4075.php">Lenny Verkhovsky: "[OMPI devel]  SM BTL NUMA awareness patches"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4075.php">Lenny Verkhovsky: "[OMPI devel]  SM BTL NUMA awareness patches"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4125.php">Lenny Verkhovsky: "Re: [OMPI devel] SM BTL NUMA awareness patches"</a>
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
