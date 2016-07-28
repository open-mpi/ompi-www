<?
$subject_val = "[OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 07:41:17 2012" -->
<!-- isoreceived="20120726114117" -->
<!-- sent="Thu, 26 Jul 2012 11:41:09 +0000" -->
<!-- isosent="20120726114109" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC0E83B91A_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 07:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11317.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>Previous message:</strong> <a href="11315.php">Jeff Squyres: "Re: [OMPI devel] Blame the compiler &#133;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11317.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>Reply:</strong> <a href="11317.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI developers,
<br>
<p>I found a small bug in Open MPI.
<br>
<p>See attached program cancelled.c.
<br>
In this program, rank 1 tries to cancel a MPI_Irecv and calls a MPI_Recv
<br>
instead if the cancellation succeeds. This program should terminate whether
<br>
the cancellation succeeds or not. But it leads a deadlock in MPI_Recv after
<br>
printing &quot;MPI_Test_cancelled: 1&quot;.
<br>
I confirmed it works fine with MPICH2.
<br>
<p>The problem is in mca_pml_ob1_recv_request_cancel function in
<br>
ompi/mca/pml/ob1/pml_ob1_recvreq.c. It accepts the cancellation unless
<br>
the request has been completed. I think it should not accept the
<br>
cancellation if the request has been matched. If it want to accept the
<br>
cancellation, it must push the recv frag to the unexpected message queue
<br>
back and redo matching. Furthermore, the receive buffer must be reverted
<br>
if the received message has been written to the receive buffer partially
<br>
in a pipeline protocol.
<br>
<p>Attached patch cancel-recv.patch is a sample fix for this bug for Open MPI
<br>
trunk. Though this patch has 65 lines, main modifications are adding one
<br>
if-statement and deleting one if-statement. Other lines are just for
<br>
indent alignment.
<br>
I cannot confirm the MEMCHECKER part is correct. Could anyone review it
<br>
before committing?
<br>
<p>Regards,
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>


<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11316/cancelled.c">cancelled.c</a>
</ul>
<!-- attachment="cancelled.c" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11316/cancel-recv.patch">cancel-recv.patch</a>
</ul>
<!-- attachment="cancel-recv.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11316/License.txt">License.txt</a>
</ul>
<!-- attachment="License.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11317.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>Previous message:</strong> <a href="11315.php">Jeff Squyres: "Re: [OMPI devel] Blame the compiler &#133;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11317.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>Reply:</strong> <a href="11317.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
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
