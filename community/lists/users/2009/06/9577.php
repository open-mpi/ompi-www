<?
$subject_val = "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 11:07:06 2009" -->
<!-- isoreceived="20090609150706" -->
<!-- sent="Tue, 9 Jun 2009 11:06:47 -0400" -->
<!-- isosent="20090609150647" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="3D02939C-C22D-4F4D-A0CC-B6056E164906_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A2D0778.2070809_at_labri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 11:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9578.php">Yann JOBIC: "[OMPI users] MPI_Lookup_name"</a>
<li><strong>Previous message:</strong> <a href="9576.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for	a	single	machine	installation ?"</a>
<li><strong>In reply to:</strong> <a href="9563.php">Fran&#231;ois Trahay: "[OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9583.php">Noam Bernstein: "[OMPI users] mpirun delay"</a>
<li><strong>Reply:</strong> <a href="9583.php">Noam Bernstein: "[OMPI users] mpirun delay"</a>
<li><strong>Reply:</strong> <a href="9594.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Francois,
<br>
<p>I am not familiar with the internals of the OMPI code. Are you sure,  
<br>
however, that threads are fully supported yet? I was under the  
<br>
impression that thread support was still partial.
<br>
<p>Can anyone else comment?
<br>
<p>Scott
<br>
<p>On Jun 8, 2009, at 8:43 AM, Fran&#231;ois Trahay wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm encountering some issues when running a multithreaded program with
</span><br>
<span class="quotelev1">&gt; OpenMPI (trunk rev. 21380, configured with --enable-mpi-threads)
</span><br>
<span class="quotelev1">&gt; My program (included in the tar.bz2) uses several pthreads that  
</span><br>
<span class="quotelev1">&gt; perform
</span><br>
<span class="quotelev1">&gt; ping pongs concurrently (thread #1 uses tag #1, thread #2 uses tag  
</span><br>
<span class="quotelev1">&gt; #2, etc.)
</span><br>
<span class="quotelev1">&gt; This program crashes over MX (either btl or mtl) with the following
</span><br>
<span class="quotelev1">&gt; backtrace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; concurrent_ping_v2: pml_cm_recvreq.c:53:
</span><br>
<span class="quotelev1">&gt; mca_pml_cm_recv_request_completion: Assertion `0 ==
</span><br>
<span class="quotelev1">&gt; ((mca_pml_cm_thin_recv_request_t*)base_request)- 
</span><br>
<span class="quotelev2">&gt; &gt;req_base.req_pml_complete'
</span><br>
<span class="quotelev1">&gt; failed.
</span><br>
<span class="quotelev1">&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [joe0:01709] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [joe0:01709] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [joe0:01709] Failing at address: 0x1238949c4
</span><br>
<span class="quotelev1">&gt; [joe0:01709] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [joe0:01709] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7f5722cba065]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 2] /lib/libc.so.6(abort+0x183) [0x7f5722cbd153]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 3] /lib/libc.so.6(__assert_fail+0xe9) [0x7f5722cb3159]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x7f57238d0a08]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x7f57238cf8cc]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_free+0x4e)
</span><br>
<span class="quotelev1">&gt; [0x7f57238bdc69]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_mtl_mx.so
</span><br>
<span class="quotelev1">&gt; [0x7f572060b72f]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_progress+0xbc)
</span><br>
<span class="quotelev1">&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt; [0x7f572081145a]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so.0(MPI_Recv 
</span><br>
<span class="quotelev1">&gt; +0x2bc)
</span><br>
<span class="quotelev1">&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [10] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [11] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [12] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt; [0x7f57208120bb]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_mtl_mx.so
</span><br>
<span class="quotelev1">&gt; [0x7f572060b80a]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_progress+0xbc)
</span><br>
<span class="quotelev1">&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt; [0x7f572081147a]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [10]
</span><br>
<span class="quotelev1">&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so.0(MPI_Recv 
</span><br>
<span class="quotelev1">&gt; +0x2bc)
</span><br>
<span class="quotelev1">&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [11] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [12] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] [13] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev1">&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 1709 on node joe0 exited  
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francois Trahay
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;bug-report.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9578.php">Yann JOBIC: "[OMPI users] MPI_Lookup_name"</a>
<li><strong>Previous message:</strong> <a href="9576.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for	a	single	machine	installation ?"</a>
<li><strong>In reply to:</strong> <a href="9563.php">Fran&#231;ois Trahay: "[OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9583.php">Noam Bernstein: "[OMPI users] mpirun delay"</a>
<li><strong>Reply:</strong> <a href="9583.php">Noam Bernstein: "[OMPI users] mpirun delay"</a>
<li><strong>Reply:</strong> <a href="9594.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
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
