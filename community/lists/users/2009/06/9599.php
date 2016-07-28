<?
$subject_val = "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 09:35:42 2009" -->
<!-- isoreceived="20090611133542" -->
<!-- sent="Thu, 11 Jun 2009 09:35:25 -0400" -->
<!-- isosent="20090611133525" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="9343E7A8-5452-4308-A2E9-2F4FE82A7413_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A30D5B6.2060800_at_labri.fr" -->
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
<strong>Date:</strong> 2009-06-11 09:35:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9600.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9598.php">Ralph Castain: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<li><strong>In reply to:</strong> <a href="9594.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9600.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9600.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Francois,
<br>
<p>For threads, the FAQ has:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=supported-systems#thread-support">http://www.open-mpi.org/faq/?category=supported-systems#thread-support</a>
<br>
<p>It mentions that thread support is designed in, but lightly tested. It  
<br>
is also possible that the FAQ is out of date and MPI_THREAD_MULTIPLE  
<br>
is fully supported.
<br>
<p>The stack trace below shows:
<br>
<p>opal_free()
<br>
opal_progress()
<br>
MPI_Recv()
<br>
<p>I do not know this code, but it may be in the higher level code that  
<br>
calls the BTLs and/or MTLs and it would be a place to see if that code  
<br>
handles the TCP BTL differently than MX BTL/MTL.
<br>
<p>MX is thread safe with the caveat that two threads may not try to  
<br>
complete the same request at the same time. This includes calling  
<br>
mx_test(), mx_wait(), mx_test_any() and/or mx_wait_any() where the  
<br>
latter two have match bits and match mask that could complete a  
<br>
request being tested/waited by another thread.
<br>
<p>Scott
<br>
<p>On Jun 11, 2009, at 6:00 AM, Fran&#231;ois Trahay wrote:
<br>
<p><span class="quotelev1">&gt; Well, according to George Bosilca (<a href="http://www.open-mpi.org/community/lists/users/2005/02/0005.php">http://www.open-mpi.org/community/lists/users/2005/02/0005.php</a> 
</span><br>
<span class="quotelev1">&gt; ), threads are supported in OpenMPI.
</span><br>
<span class="quotelev1">&gt; The program I try to run works with the TCP stack and MX driver is  
</span><br>
<span class="quotelev1">&gt; thread-safe, so i guess the problem comes from the MX BTL or MTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francois
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott Atchley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Francois,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not familiar with the internals of the OMPI code. Are you  
</span><br>
<span class="quotelev2">&gt;&gt; sure, however, that threads are fully supported yet? I was under  
</span><br>
<span class="quotelev2">&gt;&gt; the impression that thread support was still partial.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone else comment?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 8, 2009, at 8:43 AM, Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm encountering some issues when running a multithreaded program  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI (trunk rev. 21380, configured with --enable-mpi-threads)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My program (included in the tar.bz2) uses several pthreads that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perform
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ping pongs concurrently (thread #1 uses tag #1, thread #2 uses tag  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2, etc.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This program crashes over MX (either btl or mtl) with the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; backtrace:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concurrent_ping_v2: pml_cm_recvreq.c:53:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_cm_recv_request_completion: Assertion `0 ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ((mca_pml_cm_thin_recv_request_t*)base_request)- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;req_base.req_pml_complete'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] Failing at address: 0x1238949c4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] Signal: Aborted (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] Signal code:  (-6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7f5722cba065]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 2] /lib/libc.so.6(abort+0x183) [0x7f5722cbd153]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 3] /lib/libc.so.6(__assert_fail+0xe9)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5722cb3159]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57238d0a08]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57238cf8cc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(opal_free+0x4e)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57238bdc69]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_mtl_mx.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f572060b72f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(opal_progress+0xbc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f572081145a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(MPI_Recv+0x2bc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [10] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [11] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [12] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57208120bb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_mtl_mx.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f572060b80a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(opal_progress+0xbc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f572081147a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(MPI_Recv+0x2bc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [11] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [12] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] [13] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 1709 on node joe0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 6 (Aborted).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Francois Trahay
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bug-report.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9600.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9598.php">Ralph Castain: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<li><strong>In reply to:</strong> <a href="9594.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9600.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9600.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
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
