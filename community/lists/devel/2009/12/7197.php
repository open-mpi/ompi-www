<?
$subject_val = "Re: [OMPI devel] MPI_finalize with srun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 13:17:13 2009" -->
<!-- isoreceived="20091207181713" -->
<!-- sent="Mon, 7 Dec 2009 11:17:08 -0700" -->
<!-- isosent="20091207181708" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_finalize with srun" -->
<!-- id="71d2d8cc0912071017r2664e347r8554cd1504a66713_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B1D3730.9000908_at_ext.bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_finalize with srun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-07 13:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7198.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7196.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7195.php">Damien Guinier: "[OMPI devel] MPI_finalize with srun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick - that isn't good. The receive should definitely be canceled upon
<br>
completion of the allgather as per your second option.
<br>
<p>Please go ahead and do so! And thanks for catching this problem!
<br>
Ralph
<br>
<p><p>On Mon, Dec 7, 2009 at 10:11 AM, Damien Guinier &lt;damien.guinier_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have found a bug in the 'grpcomm' : 'hier'.  This bug create a infinite
</span><br>
<span class="quotelev1">&gt; loop in mpi_finalize. In this module: the barrier is executed as an
</span><br>
<span class="quotelev1">&gt; allgather with data length of zero. This allgather function can go to an
</span><br>
<span class="quotelev1">&gt; infinite loop , depend of rank execution order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In orte/mca/grpcomm/hier/grpcomm_hier_module.c:402, this allgather function
</span><br>
<span class="quotelev1">&gt; need send/recv a piece of data:
</span><br>
<span class="quotelev1">&gt; - before the receive loop : the receive counter is reseted and the
</span><br>
<span class="quotelev1">&gt; &quot;allgather_recv()&quot; resistered.
</span><br>
<span class="quotelev1">&gt; - the &quot;allgather_recv&quot; function is not unregistered after the receive loop.
</span><br>
<span class="quotelev1">&gt; The receive counter is incremented by &quot;allgather_recv&quot;.
</span><br>
<span class="quotelev1">&gt; This allgather function is use many times. So when the data is received
</span><br>
<span class="quotelev1">&gt; before reseting the receive counter , the receive loop will always wait
</span><br>
<span class="quotelev1">&gt; data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have fix this with a patch( I reset the counter after the receive loop):
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/grpcomm/hier/grpcomm_hier_module.c       Fri Dec 04 19:59:26
</span><br>
<span class="quotelev1">&gt; 2009 +0100
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/grpcomm/hier/grpcomm_hier_module.c       Mon Dec 07 16:35:40
</span><br>
<span class="quotelev1">&gt; 2009 +0100
</span><br>
<span class="quotelev1">&gt; @@ -251,7 +251,7 @@
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static opal_buffer_t allgather_buf;
</span><br>
<span class="quotelev1">&gt; -static int allgather_num_recvd;
</span><br>
<span class="quotelev1">&gt; +static int allgather_num_recvd=0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void process_msg(int fd, short event, void *data)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; @@ -366,7 +366,6 @@
</span><br>
<span class="quotelev1">&gt;        /* now receive the final result. Be sure to do this in
</span><br>
<span class="quotelev1">&gt;         * a manner that allows us to return without being in a recv!
</span><br>
<span class="quotelev1">&gt;         */
</span><br>
<span class="quotelev1">&gt; -        allgather_num_recvd = 0;
</span><br>
<span class="quotelev1">&gt;        rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_ALLGATHER,
</span><br>
<span class="quotelev1">&gt;                                     ORTE_RML_NON_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; allgather_recv, NULL);
</span><br>
<span class="quotelev1">&gt;        if (rc != ORTE_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; @@ -375,6 +374,7 @@
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;              ORTE_PROGRESSED_WAIT(false, allgather_num_recvd, 1);
</span><br>
<span class="quotelev1">&gt; +       allgather_num_recvd = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /* copy payload to the caller's buffer */
</span><br>
<span class="quotelev1">&gt;        if (ORTE_SUCCESS != (rc = opal_dss.copy_payload(rbuf,
</span><br>
<span class="quotelev1">&gt; &amp;allgather_buf))) {
</span><br>
<span class="quotelev1">&gt; @@ -394,7 +394,6 @@
</span><br>
<span class="quotelev1">&gt;        /* wait to receive their data. Be sure to do this in
</span><br>
<span class="quotelev1">&gt;         * a manner that allows us to return without being in a recv!
</span><br>
<span class="quotelev1">&gt;         */
</span><br>
<span class="quotelev1">&gt; -        allgather_num_recvd = 0;
</span><br>
<span class="quotelev1">&gt;        rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_ALLGATHER,
</span><br>
<span class="quotelev1">&gt;                                     ORTE_RML_NON_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; allgather_recv, NULL);
</span><br>
<span class="quotelev1">&gt;        if (rc != ORTE_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; @@ -403,6 +402,7 @@
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;              ORTE_PROGRESSED_WAIT(false, allgather_num_recvd,
</span><br>
<span class="quotelev1">&gt; num_local_peers);
</span><br>
<span class="quotelev1">&gt; +       allgather_num_recvd = 0;
</span><br>
<span class="quotelev1">&gt;              /* take the recv'd data and use one of the base collectives
</span><br>
<span class="quotelev1">&gt;         * to exchange it with all other local_rank=0 procs in a scalable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An another way is to unregister &quot;allgather_recv()&quot; after the receive loop.
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/grpcomm/hier/grpcomm_hier_module.c       Fri Dec 04 19:59:26
</span><br>
<span class="quotelev1">&gt; 2009 +0100
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/grpcomm/hier/grpcomm_hier_module.c       Mon Dec 07 17:46:13
</span><br>
<span class="quotelev1">&gt; 2009 +0100
</span><br>
<span class="quotelev1">&gt; @@ -375,7 +375,7 @@
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;              ORTE_PROGRESSED_WAIT(false, allgather_num_recvd, 1);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +       if(ORTE_SUCCESS!= (rc =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_cancel(ORTE_NAME_WILDCARD,ORTE_RML_TAG_ALLGATHER))) {
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG(rc); return rc;}
</span><br>
<span class="quotelev1">&gt;        /* copy payload to the caller's buffer */
</span><br>
<span class="quotelev1">&gt;        if (ORTE_SUCCESS != (rc = opal_dss.copy_payload(rbuf,
</span><br>
<span class="quotelev1">&gt; &amp;allgather_buf))) {
</span><br>
<span class="quotelev1">&gt;            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; @@ -403,7 +403,7 @@
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;              ORTE_PROGRESSED_WAIT(false, allgather_num_recvd,
</span><br>
<span class="quotelev1">&gt; num_local_peers);
</span><br>
<span class="quotelev1">&gt; -       +        if(ORTE_SUCCESS!= (rc =
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_cancel(ORTE_NAME_WILDCARD,ORTE_RML_TAG_ALLGATHER))) {
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG(rc); return rc;}
</span><br>
<span class="quotelev1">&gt;        /* take the recv'd data and use one of the base collectives
</span><br>
<span class="quotelev1">&gt;         * to exchange it with all other local_rank=0 procs in a scalable
</span><br>
<span class="quotelev1">&gt;         * manner - the exact collective will depend upon the number of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any preferences ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7198.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7196.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7195.php">Damien Guinier: "[OMPI devel] MPI_finalize with srun"</a>
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
