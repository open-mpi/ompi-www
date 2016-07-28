<?
$subject_val = "[OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 08:42:24 2009" -->
<!-- isoreceived="20090608124224" -->
<!-- sent="Mon, 08 Jun 2009 14:43:36 +0200" -->
<!-- isosent="20090608124336" -->
<!-- name="Fran&#231;ois Trahay" -->
<!-- email="francois.trahay_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="4A2D0778.2070809_at_labri.fr" -->
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
<strong>Subject:</strong> [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads<br>
<strong>From:</strong> Fran&#231;ois Trahay (<em>francois.trahay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 08:43:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9564.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9562.php">shan axida: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm encountering some issues when running a multithreaded program with
<br>
OpenMPI (trunk rev. 21380, configured with --enable-mpi-threads)
<br>
My program (included in the tar.bz2) uses several pthreads that perform
<br>
ping pongs concurrently (thread #1 uses tag #1, thread #2 uses tag #2, etc.)
<br>
This program crashes over MX (either btl or mtl) with the following
<br>
backtrace:
<br>
<p>concurrent_ping_v2: pml_cm_recvreq.c:53:
<br>
mca_pml_cm_recv_request_completion: Assertion `0 ==
<br>
((mca_pml_cm_thin_recv_request_t*)base_request)-&gt;req_base.req_pml_complete'
<br>
failed.
<br>
[joe0:01709] *** Process received signal ***
<br>
[joe0:01709] *** Process received signal ***
<br>
[joe0:01709] Signal: Segmentation fault (11)
<br>
[joe0:01709] Signal code: Address not mapped (1)
<br>
[joe0:01709] Failing at address: 0x1238949c4
<br>
[joe0:01709] Signal: Aborted (6)
<br>
[joe0:01709] Signal code:  (-6)
<br>
[joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
<br>
[joe0:01709] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7f5722cba065]
<br>
[joe0:01709] [ 2] /lib/libc.so.6(abort+0x183) [0x7f5722cbd153]
<br>
[joe0:01709] [ 3] /lib/libc.so.6(__assert_fail+0xe9) [0x7f5722cb3159]
<br>
[joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
<br>
[joe0:01709] [ 1]
<br>
/home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
<br>
[0x7f57238d0a08]
<br>
[joe0:01709] [ 2]
<br>
/home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
<br>
[0x7f57238cf8cc]
<br>
[joe0:01709] [ 3]
<br>
/home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0(opal_free+0x4e) 
<br>
<p>[0x7f57238bdc69]
<br>
[joe0:01709] [ 4]
<br>
/home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_mtl_mx.so
<br>
[0x7f572060b72f]
<br>
[joe0:01709] [ 5]
<br>
/home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0(opal_progress+0xbc) 
<br>
<p>[0x7f57238948e0]
<br>
[joe0:01709] [ 6]
<br>
/home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
<br>
[0x7f572081145a]
<br>
[joe0:01709] [ 7]
<br>
/home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
<br>
[0x7f57208113b7]
<br>
[joe0:01709] [ 8]
<br>
/home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
<br>
[0x7f57208112e7]
<br>
[joe0:01709] [ 9]
<br>
/home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so.0(MPI_Recv+0x2bc) 
<br>
<p>[0x7f5723e07690]
<br>
[joe0:01709] [10] ./concurrent_ping_v2(client+0x123) [0x401404]
<br>
[joe0:01709] [11] /lib/libpthread.so.0 [0x7f57240b6faa]
<br>
[joe0:01709] [12] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
<br>
[joe0:01709] *** End of error message ***
<br>
[joe0:01709] [ 4]
<br>
/home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
<br>
[0x7f57208120bb]
<br>
[joe0:01709] [ 5]
<br>
/home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_mtl_mx.so
<br>
[0x7f572060b80a]
<br>
[joe0:01709] [ 6]
<br>
/home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0(opal_progress+0xbc) 
<br>
<p>[0x7f57238948e0]
<br>
[joe0:01709] [ 7]
<br>
/home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
<br>
[0x7f572081147a]
<br>
[joe0:01709] [ 8]
<br>
/home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
<br>
[0x7f57208113b7]
<br>
[joe0:01709] [ 9]
<br>
/home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
<br>
[0x7f57208112e7]
<br>
[joe0:01709] [10]
<br>
/home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so.0(MPI_Recv+0x2bc) 
<br>
<p>[0x7f5723e07690]
<br>
[joe0:01709] [11] ./concurrent_ping_v2(client+0x123) [0x401404]
<br>
[joe0:01709] [12] /lib/libpthread.so.0 [0x7f57240b6faa]
<br>
[joe0:01709] [13] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
<br>
[joe0:01709] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 1709 on node joe0 exited on
<br>
signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p><p>Any idea ?
<br>
<p>Francois Trahay
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9563/bug-report.tar.bz2">bug-report.tar.bz2</a>
</ul>
<!-- attachment="bug-report.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9564.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9562.php">shan axida: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
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
