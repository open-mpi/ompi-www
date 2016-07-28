<?
$subject_val = "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 05:59:04 2009" -->
<!-- isoreceived="20090611095904" -->
<!-- sent="Thu, 11 Jun 2009 12:00:22 +0200" -->
<!-- isosent="20090611100022" -->
<!-- name="Fran&#231;ois Trahay" -->
<!-- email="francois.trahay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="4A30D5B6.2060800_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D02939C-C22D-4F4D-A0CC-B6056E164906_at_myri.com" -->
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
<strong>From:</strong> Fran&#231;ois Trahay (<em>francois.trahay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 06:00:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9595.php">jody: "[OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<li><strong>Previous message:</strong> <a href="9593.php">Gleb \: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>In reply to:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, according to George Bosilca 
<br>
(<a href="http://www.open-mpi.org/community/lists/users/2005/02/0005.php">http://www.open-mpi.org/community/lists/users/2005/02/0005.php</a>), 
<br>
threads are supported in OpenMPI.
<br>
The program I try to run works with the TCP stack and MX driver is 
<br>
thread-safe, so i guess the problem comes from the MX BTL or MTL.
<br>
<p>Francois
<br>
<p><p>Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; Hi Francois,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not familiar with the internals of the OMPI code. Are you sure, 
</span><br>
<span class="quotelev1">&gt; however, that threads are fully supported yet? I was under the 
</span><br>
<span class="quotelev1">&gt; impression that thread support was still partial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone else comment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2009, at 8:43 AM, Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'm encountering some issues when running a multithreaded program with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI (trunk rev. 21380, configured with --enable-mpi-threads)
</span><br>
<span class="quotelev2">&gt;&gt; My program (included in the tar.bz2) uses several pthreads that perform
</span><br>
<span class="quotelev2">&gt;&gt; ping pongs concurrently (thread #1 uses tag #1, thread #2 uses tag 
</span><br>
<span class="quotelev2">&gt;&gt; #2, etc.)
</span><br>
<span class="quotelev2">&gt;&gt; This program crashes over MX (either btl or mtl) with the following
</span><br>
<span class="quotelev2">&gt;&gt; backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; concurrent_ping_v2: pml_cm_recvreq.c:53:
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_cm_recv_request_completion: Assertion `0 ==
</span><br>
<span class="quotelev2">&gt;&gt; ((mca_pml_cm_thin_recv_request_t*)base_request)-&gt;req_base.req_pml_complete' 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; failed.
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] Failing at address: 0x1238949c4
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7f5722cba065]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 2] /lib/libc.so.6(abort+0x183) [0x7f5722cbd153]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 3] /lib/libc.so.6(__assert_fail+0xe9) [0x7f5722cb3159]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57238d0a08]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57238cf8cc]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0(opal_free+0x4e) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57238bdc69]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_mtl_mx.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f572060b72f]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0(opal_progress+0xbc) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f572081145a]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so.0(MPI_Recv+0x2bc) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [10] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [11] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [12] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57208120bb]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_mtl_mx.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f572060b80a]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0(opal_progress+0xbc) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f572081147a]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so.0(MPI_Recv+0x2bc) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [11] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [12] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] [13] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev2">&gt;&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 1709 on node joe0 exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Francois Trahay
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bug-report.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9595.php">jody: "[OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<li><strong>Previous message:</strong> <a href="9593.php">Gleb \: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>In reply to:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
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
