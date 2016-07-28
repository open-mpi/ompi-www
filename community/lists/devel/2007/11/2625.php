<?
$subject_val = "[OMPI devel] ORTE process name and nodeid";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 17 17:27:44 2007" -->
<!-- isoreceived="20071117222744" -->
<!-- sent="Sat, 17 Nov 2007 17:27:37 -0500" -->
<!-- isosent="20071117222737" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE process name and nodeid" -->
<!-- id="537C6C0940C6C143AA46A88946B854170A60DACC_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] ORTE process name and nodeid<br>
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-17 17:27:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2626.php">Richard Graham: "[OMPI devel] FW: [mpi-21] Follow up on the MPI Forum meeting"</a>
<li><strong>Previous message:</strong> <a href="2624.php">Jeff Squyres: "Re: [OMPI devel] IB/OpenFabrics pow wow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2628.php">Richard Graham: "Re: [OMPI devel] ORTE process name and nodeid"</a>
<li><strong>Reply:</strong> <a href="2628.php">Richard Graham: "Re: [OMPI devel] ORTE process name and nodeid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am doing some work on Cray's CNL to support shared memory. To support
<br>
shared memory I need to know if processes are local or remote. For other
<br>
systems we simply use the modex in ompi_proc_get_info to get the proc's
<br>
nodeid. When using CNOS I don't need the modex to get a remote processes
<br>
nodeid. In fact, I can obtain every processes pid and nodeid (nid/pid) via a
<br>
single CNOS call.
<br>
<p>I have explored a couple of ways to populate the proc structures on the
<br>
CRAY. One involves using #if's to do special things in ompi_proc_get_info. I
<br>
don't like this. The second method involves adding a CNOS nameserver and
<br>
modifying the orte_process_name_t to include the orte_nodeid_t so that the
<br>
nameserver can populate all the info if it can. Prior to this change, the
<br>
orte_nodeid_t was in ompi_proc_t, which doesn't make any sense to me, it is
<br>
an orte level concept and it is only accessible in the ompi side. I also
<br>
don't like adding orte_nodeid_t to orte_process_name_t as it really doesn't
<br>
have anything to do with the a name.. I think it makes more sense to have an
<br>
orte_proc_t.. Something like the following structure:
<br>
<p><p><p>struct orte_process_name_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_jobid_t jobid;     /**&lt; Job number */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_vpid_t vpid;       /**&lt; Process number */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/** &quot;nodeid&quot; on which the proc resides */
<br>
};
<br>
<p>Struct orte_proc_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t super;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_process_name_t proc_name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_nodeid_t nid;
<br>
};
<br>
<p>struct ompi_proc_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_proc_t base;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;..... Etc .....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
};
<br>
<p><p>I know there is some talk about removing the process names,,, not sure how
<br>
that fits in here but this is what makes sense to me given the current
<br>
architecture. Any thoughts here?
<br>
<p><p>- Galen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2626.php">Richard Graham: "[OMPI devel] FW: [mpi-21] Follow up on the MPI Forum meeting"</a>
<li><strong>Previous message:</strong> <a href="2624.php">Jeff Squyres: "Re: [OMPI devel] IB/OpenFabrics pow wow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2628.php">Richard Graham: "Re: [OMPI devel] ORTE process name and nodeid"</a>
<li><strong>Reply:</strong> <a href="2628.php">Richard Graham: "Re: [OMPI devel] ORTE process name and nodeid"</a>
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
