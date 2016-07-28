<?
$subject_val = "[OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 04:24:29 2014" -->
<!-- isoreceived="20140624082429" -->
<!-- sent="Tue, 24 Jun 2014 17:24:41 +0900" -->
<!-- isosent="20140624082441" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality" -->
<!-- id="53A935C9.40701_at_iferc.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 04:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15047.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Previous message:</strong> <a href="15045.php">Artem Polyakov: "Re: [OMPI devel] Agenda for next week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15048.php">Ralph Castain: "Re: [OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Reply:</strong> <a href="15048.php">Ralph Castain: "Re: [OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: semantic change of opal_hwloc_base_get_relative_locality
<br>
<p>WHY:  make is closer to what coll/ml expects.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Currently, opal_hwloc_base_get_relative_locality means &quot;at what level do these procs share cpus&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;however, coll/ml is using it as &quot;at what level are these procs commonly bound&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it is important to note that if a task is bound to all the available cpus, locality should
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be set to OPAL_PROC_ON_NODE only.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* e.g. on a single socket Sandy Bridge system, use OPAL_PROC_ON_NODE instead of OPAL_PROC_ON_L3CACHE */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This has been initially discussed in the devel mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2014/06/15030.php">http://www.open-mpi.org/community/lists/devel/2014/06/15030.php</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as advised by Ralph, i browsed the source code looking for how the (ompi_proc_t *)-&gt;proc_flags is used.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so far, it is mainly used to figure out wether the proc is on the same node or not.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;notable exceptions are :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) ompi/mca/sbgp/basesmsocket/sbgp_basesmsocket_component.c : OPAL_PROC_ON_LOCAL_SOCKET
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) ompi/mca/coll/fca/coll_fca_module.c and oshmem/mca/scoll/fca/scoll_fca_module.c : FCA_IS_LOCAL_PROCESS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;about a) the new definition fixes a hang in coll/ml
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;about b) FCA_IS_LOCAL_SOCKET looks like legacy code /* i could only found OMPI_PROC_FLAG_LOCAL in v1.3 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so this macro can be simply removed and replaced with OPAL_PROC_ON_LOCAL_NODE
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at this stage, i cannot find any objection not to do the described change.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;please report if any and/or feel free to comment.
<br>
<p>WHERE: see the two attached patches
<br>
<p>TIMEOUT: June 30th, after the Open MPI developers meeting in Chicago, June 24-26.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The RFC will become final only after the meeting.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Ralph already added this topic to the agenda */
<br>
<p>Thanks
<br>
<p>Gilles
<br>
<p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15046/hwloc.patch">hwloc.patch</a>
</ul>
<!-- attachment="hwloc.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15046/fca.patch">fca.patch</a>
</ul>
<!-- attachment="fca.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15047.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Previous message:</strong> <a href="15045.php">Artem Polyakov: "Re: [OMPI devel] Agenda for next week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15048.php">Ralph Castain: "Re: [OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Reply:</strong> <a href="15048.php">Ralph Castain: "Re: [OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
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
