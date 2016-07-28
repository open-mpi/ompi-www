<?
$subject_val = "[OMPI users] RE : users Digest, Vol 841, Issue 3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 17:05:18 2008" -->
<!-- isoreceived="20080313210518" -->
<!-- sent="Thu, 13 Mar 2008 17:04:25 -0400" -->
<!-- isosent="20080313210425" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] RE : users Digest, Vol 841, Issue 3" -->
<!-- id="9D96C3B9C12B4C4A9BD31761B4F8241028835B2B70_at_imibou-nt-1-ex.IMI.LOCAL" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.277.1205438876.5420.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] RE : users Digest, Vol 841, Issue 3<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 17:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Georges,
<br>
<p>Thanks for your patch, but I'm not sure I got it correctly. The patch I got modify  a few arguments passed to isend()/irecv()/recv() in coll_basic_allgather.c. Here is the patch I applied:
<br>
<p>Index: ompi/mca/coll/basic/coll_basic_allgather.c
<br>
===================================================================
<br>
--- ompi/mca/coll/basic/coll_basic_allgather.c  (revision 17814)
<br>
+++ ompi/mca/coll/basic/coll_basic_allgather.c  (working copy)
<br>
@@ -149,7 +149,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Do a send-recv between the two root procs. to avoid deadlock */
<br>
-        err = MCA_PML_CALL(isend(sbuf, scount, sdtype, 0,
<br>
+        err = MCA_PML_CALL(isend(sbuf, scount, sdtype, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_COLL_BASE_TAG_ALLGATHER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_BASE_SEND_STANDARD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm, &amp;reqs[rsize]));
<br>
@@ -157,7 +157,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-        err = MCA_PML_CALL(irecv(rbuf, rcount, rdtype, 0,
<br>
+        err = MCA_PML_CALL(irecv(rbuf, rcount, rdtype, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_COLL_BASE_TAG_ALLGATHER, comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;reqs[0]));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != err) {
<br>
@@ -186,14 +186,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-        err = MCA_PML_CALL(isend(rbuf, rsize * rcount, rdtype, 0,
<br>
+        err = MCA_PML_CALL(isend(rbuf, rsize * scount, sdtype, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_COLL_BASE_TAG_ALLGATHER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_BASE_SEND_STANDARD, comm, &amp;req));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != err) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto exit;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-        err = MCA_PML_CALL(recv(tmpbuf, size * scount, sdtype, 0,
<br>
+        err = MCA_PML_CALL(recv(tmpbuf, size * rcount, rdtype, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_COLL_BASE_TAG_ALLGATHER, comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != err) {
<br>
<p><p><p>However with this patch, I still have the problem. Suppose I start the server with three process and the client with two, the clients prints:
<br>
<p>[audet_at_linux15 dyn_connect]$ mpiexec --universe univ1 -n 2 ./aclient '0.2.0:2000'
<br>
intercomm_flag = 1
<br>
intercomm_remote_size = 3
<br>
rem_rank_tbl[3] = { 0 1 2}
<br>
[linux15:26114] *** An error occurred in MPI_Allgather
<br>
[linux15:26114] *** on communicator
<br>
[linux15:26114] *** MPI_ERR_TRUNCATE: message truncated
<br>
[linux15:26114] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpiexec noticed that job rank 0 with PID 26113 on node linux15 exited on signal 15 (Terminated).
<br>
[audet_at_linux15 dyn_connect]$
<br>
<p>and abort. The server on the other side simply hang (as before).
<br>
<p>Regards,
<br>
<p>Martin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
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
