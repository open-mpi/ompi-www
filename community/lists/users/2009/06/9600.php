<?
$subject_val = "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 12:22:03 2009" -->
<!-- isoreceived="20090611162203" -->
<!-- sent="Thu, 11 Jun 2009 12:21:54 -0400" -->
<!-- isosent="20090611162154" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="B9565CB1-0466-4281-9F4E-0A6E09D65F23_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9343E7A8-5452-4308-A2E9-2F4FE82A7413_at_myri.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 12:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9601.php">Brian Barrett: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9601.php">Brian Barrett: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9601.php">Brian Barrett: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The comment on the FAQ (and on the other thread) is only true for some  
<br>
BTLs (TCP, SM and MX). I don't have resources to test for the others  
<br>
BTL, it is their developers responsibility to do the required  
<br>
modifications to make them thread safe.
<br>
<p>In addition, I have to confess that I never tested the MTL for thread  
<br>
safety. It is a completely different implementations for the message  
<br>
passing, supposed to map directly on top of the underlying network  
<br>
capabilities. However, there are clearly few places where thread  
<br>
safety should be enforced in the MTL layer, and I don't know if this  
<br>
is the case.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 11, 2009, at 09:35 , Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; Francois,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For threads, the FAQ has:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=supported-systems#thread-support">http://www.open-mpi.org/faq/?category=supported-systems#thread-support</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It mentions that thread support is designed in, but lightly tested.  
</span><br>
<span class="quotelev1">&gt; It is also possible that the FAQ is out of date and  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE is fully supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The stack trace below shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_free()
</span><br>
<span class="quotelev1">&gt; opal_progress()
</span><br>
<span class="quotelev1">&gt; MPI_Recv()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know this code, but it may be in the higher level code that  
</span><br>
<span class="quotelev1">&gt; calls the BTLs and/or MTLs and it would be a place to see if that  
</span><br>
<span class="quotelev1">&gt; code handles the TCP BTL differently than MX BTL/MTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MX is thread safe with the caveat that two threads may not try to  
</span><br>
<span class="quotelev1">&gt; complete the same request at the same time. This includes calling  
</span><br>
<span class="quotelev1">&gt; mx_test(), mx_wait(), mx_test_any() and/or mx_wait_any() where the  
</span><br>
<span class="quotelev1">&gt; latter two have match bits and match mask that could complete a  
</span><br>
<span class="quotelev1">&gt; request being tested/waited by another thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 11, 2009, at 6:00 AM, Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, according to George Bosilca (<a href="http://www.open-mpi.org/community/lists/users/2005/02/0005.php">http://www.open-mpi.org/community/lists/users/2005/02/0005.php</a> 
</span><br>
<span class="quotelev2">&gt;&gt; ), threads are supported in OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; The program I try to run works with the TCP stack and MX driver is  
</span><br>
<span class="quotelev2">&gt;&gt; thread-safe, so i guess the problem comes from the MX BTL or MTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Francois
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scott Atchley wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Francois,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not familiar with the internals of the OMPI code. Are you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure, however, that threads are fully supported yet? I was under  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the impression that thread support was still partial.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone else comment?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scott
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 8, 2009, at 8:43 AM, Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm encountering some issues when running a multithreaded program  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI (trunk rev. 21380, configured with --enable-mpi-threads)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My program (included in the tar.bz2) uses several pthreads that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; perform
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ping pongs concurrently (thread #1 uses tag #1, thread #2 uses  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tag #2, etc.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This program crashes over MX (either btl or mtl) with the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; backtrace:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; concurrent_ping_v2: pml_cm_recvreq.c:53:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_cm_recv_request_completion: Assertion `0 ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ((mca_pml_cm_thin_recv_request_t*)base_request)- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;req_base.req_pml_complete'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] Failing at address: 0x1238949c4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] Signal: Aborted (6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] Signal code:  (-6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7f5722cba065]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 2] /lib/libc.so.6(abort+0x183) [0x7f5722cbd153]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 3] /lib/libc.so.6(__assert_fail+0xe9)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f5722cb3159]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57238d0a08]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57238cf8cc]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0(opal_free+0x4e)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57238bdc69]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_mtl_mx.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f572060b72f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0(opal_progress+0xbc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f572081145a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0(MPI_Recv+0x2bc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [10] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [11] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [12] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57208120bb]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_mtl_mx.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f572060b80a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen-pal.so. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0(opal_progress+0xbc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f572081147a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0(MPI_Recv+0x2bc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [11] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [12] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] [13] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 1709 on node joe0  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exited on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signal 6 (Aborted).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any idea ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Francois Trahay
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;bug-report.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9601.php">Brian Barrett: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9601.php">Brian Barrett: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9601.php">Brian Barrett: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
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
