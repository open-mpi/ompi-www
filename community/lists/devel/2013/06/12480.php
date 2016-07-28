<?
$subject_val = "[OMPI devel] RGET issue when send is less than receive";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 11:25:34 2013" -->
<!-- isoreceived="20130621152534" -->
<!-- sent="Fri, 21 Jun 2013 08:25:29 -0700" -->
<!-- isosent="20130621152529" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RGET issue when send is less than receive" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E992B317C_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] RGET issue when send is less than receive<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 11:25:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12481.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Previous message:</strong> <a href="12479.php">Thomas Jahns: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Reply:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran into a hang in a test in which the sender sends less data than the receiver is expecting.  For example, the following shows the receiver expecting twice what the sender is sending.
<br>
<p>Rank 0:  MPI_Send(buf, BUFSIZE, MPI_INT, 1, 99, MPI_COMM_WORLD)
<br>
Rank 1: MPI_Recv(buf, BUFSIZE*2,  MPI_INT, 0, 99, MPI_COMM_WORLD)
<br>
<p>This is also reproducible using one of the intel tests and adjusting the eager value for the openib BTL.
<br>
<p>&#216;  mpirun -np 2 -host frick,frack -mca btl_openib_eager_limit 56 MPI_Send_overtake_c
<br>
<p>In most cases, this works just fine.  However, when the PML protocol used is the RGET protocol, the test hangs.   Below is a proposed fix for this issue.
<br>
I believe we want to be checking against req_bytes_packed rather than req_bytes_expected as req_bytes_expected is what the user originally told us.
<br>
Otherwise, with the current code, we never send a FIN message back to the sender.
<br>
<p>Any thoughts?
<br>
<p>[rvandevaart_at_sm065 ompi-trunk]$ svn diff ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
Index: ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
===================================================================
<br>
--- ompi/mca/pml/ob1/pml_ob1_recvreq.c        (revision 28633)
<br>
+++ ompi/mca/pml/ob1/pml_ob1_recvreq.c     (working copy)
<br>
@@ -335,7 +335,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* is receive request complete */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD_SIZE_T(&amp;recvreq-&gt;req_bytes_received, frag-&gt;rdma_length);
<br>
-    if (recvreq-&gt;req_bytes_expected &lt;= recvreq-&gt;req_bytes_received) {
<br>
+    if (recvreq-&gt;req_recv.req_bytes_packed &lt;= recvreq-&gt;req_bytes_received) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_fin(recvreq-&gt;req_recv.req_base.req_proc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;rdma_hdr.hdr_rget.hdr_des,
<br>
<p><p><p>-----------------------------------------------------------------------------------
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12481.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Previous message:</strong> <a href="12479.php">Thomas Jahns: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Reply:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
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
