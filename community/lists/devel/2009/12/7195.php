<?
$subject_val = "[OMPI devel] MPI_finalize with srun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 11:52:03 2009" -->
<!-- isoreceived="20091207165203" -->
<!-- sent="Mon, 07 Dec 2009 18:11:12 +0100" -->
<!-- isosent="20091207171112" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_finalize with srun" -->
<!-- id="4B1D3730.9000908_at_ext.bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_finalize with srun<br>
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-07 12:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7196.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7194.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7197.php">Ralph Castain: "Re: [OMPI devel] MPI_finalize with srun"</a>
<li><strong>Reply:</strong> <a href="7197.php">Ralph Castain: "Re: [OMPI devel] MPI_finalize with srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>I have found a bug in the 'grpcomm' : 'hier'.  This bug create a 
<br>
infinite loop in mpi_finalize. In this module: the barrier is executed 
<br>
as an allgather with data length of zero. This allgather function can go 
<br>
to an infinite loop , depend of rank execution order.
<br>
<p>In orte/mca/grpcomm/hier/grpcomm_hier_module.c:402, this allgather 
<br>
function need send/recv a piece of data:
<br>
- before the receive loop : the receive counter is reseted and the 
<br>
&quot;allgather_recv()&quot; resistered.
<br>
- the &quot;allgather_recv&quot; function is not unregistered after the receive 
<br>
loop. The receive counter is incremented by &quot;allgather_recv&quot;.
<br>
This allgather function is use many times. So when the data is received 
<br>
before reseting the receive counter , the receive loop will always wait 
<br>
data.
<br>
<p>I have fix this with a patch( I reset the counter after the receive loop):
<br>
--- a/orte/mca/grpcomm/hier/grpcomm_hier_module.c       Fri Dec 04 
<br>
19:59:26 2009 +0100
<br>
+++ b/orte/mca/grpcomm/hier/grpcomm_hier_module.c       Mon Dec 07 
<br>
16:35:40 2009 +0100
<br>
@@ -251,7 +251,7 @@
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;static opal_buffer_t allgather_buf;
<br>
-static int allgather_num_recvd;
<br>
+static int allgather_num_recvd=0;
<br>
&nbsp;
<br>
&nbsp;static void process_msg(int fd, short event, void *data)
<br>
&nbsp;{
<br>
@@ -366,7 +366,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* now receive the final result. Be sure to do this in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* a manner that allows us to return without being in a recv!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-        allgather_num_recvd = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, 
<br>
ORTE_RML_TAG_ALLGATHER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_RML_NON_PERSISTENT, 
<br>
allgather_recv, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rc != ORTE_SUCCESS) {
<br>
@@ -375,6 +374,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_PROGRESSED_WAIT(false, allgather_num_recvd, 1);
<br>
+       allgather_num_recvd = 0;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* copy payload to the caller's buffer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (rc = opal_dss.copy_payload(rbuf, 
<br>
&amp;allgather_buf))) {
<br>
@@ -394,7 +394,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* wait to receive their data. Be sure to do this in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* a manner that allows us to return without being in a recv!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-        allgather_num_recvd = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, 
<br>
ORTE_RML_TAG_ALLGATHER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_RML_NON_PERSISTENT, 
<br>
allgather_recv, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rc != ORTE_SUCCESS) {
<br>
@@ -403,6 +402,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_PROGRESSED_WAIT(false, allgather_num_recvd, num_local_peers);
<br>
+       allgather_num_recvd = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* take the recv'd data and use one of the base collectives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* to exchange it with all other local_rank=0 procs in a scalable
<br>
<p>An another way is to unregister &quot;allgather_recv()&quot; after the receive loop.
<br>
--- a/orte/mca/grpcomm/hier/grpcomm_hier_module.c       Fri Dec 04 
<br>
19:59:26 2009 +0100
<br>
+++ b/orte/mca/grpcomm/hier/grpcomm_hier_module.c       Mon Dec 07 
<br>
17:46:13 2009 +0100
<br>
@@ -375,7 +375,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_PROGRESSED_WAIT(false, allgather_num_recvd, 1);
<br>
-
<br>
+       if(ORTE_SUCCESS!= (rc = 
<br>
orte_rml.recv_cancel(ORTE_NAME_WILDCARD,ORTE_RML_TAG_ALLGATHER))) { 
<br>
ORTE_ERROR_LOG(rc); return rc;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* copy payload to the caller's buffer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (rc = opal_dss.copy_payload(rbuf, 
<br>
&amp;allgather_buf))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
@@ -403,7 +403,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_PROGRESSED_WAIT(false, allgather_num_recvd, num_local_peers);
<br>
-       
<br>
+        if(ORTE_SUCCESS!= (rc = 
<br>
orte_rml.recv_cancel(ORTE_NAME_WILDCARD,ORTE_RML_TAG_ALLGATHER))) { 
<br>
ORTE_ERROR_LOG(rc); return rc;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* take the recv'd data and use one of the base collectives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* to exchange it with all other local_rank=0 procs in a scalable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* manner - the exact collective will depend upon the number of
<br>
<p>Do you have any preferences ?
<br>
<p>Thanks
<br>
Damien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7196.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7194.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7197.php">Ralph Castain: "Re: [OMPI devel] MPI_finalize with srun"</a>
<li><strong>Reply:</strong> <a href="7197.php">Ralph Castain: "Re: [OMPI devel] MPI_finalize with srun"</a>
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
