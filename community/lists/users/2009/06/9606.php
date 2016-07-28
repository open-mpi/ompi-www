<?
$subject_val = "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 14:21:08 2009" -->
<!-- isoreceived="20090611182108" -->
<!-- sent="Thu, 11 Jun 2009 12:21:01 -0600" -->
<!-- isosent="20090611182101" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="3DAF386F-E8AD-4D90-9059-0BC770BA9E4A_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A314ADF.9040108_at_labri.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 14:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9607.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9605.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9605.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9608.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Almost assuredly, the MTL is not thread safe, and such support is  
<br>
unlikely to happen in the short term.  You might be better off  
<br>
concentrating on the BTL, as George has done significant work on that  
<br>
front.
<br>
<p>Brian
<br>
<p><p>On Jun 11, 2009, at 12:20 PM, Fran&#231;ois Trahay wrote:
<br>
<p><span class="quotelev1">&gt; The stack trace is from the MX MTL (I attach the backtraces I get  
</span><br>
<span class="quotelev1">&gt; with both MX MTL and MX BTL)
</span><br>
<span class="quotelev1">&gt; Here is the program that I use. It is quite simple. It runs ping  
</span><br>
<span class="quotelev1">&gt; pongs concurrently (with one thread per node, then with two threads  
</span><br>
<span class="quotelev1">&gt; per node, etc.)
</span><br>
<span class="quotelev1">&gt; The error occurs when two threads run concurrently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francois
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott Atchley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Brian and George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not know if the stack trace is complete, but I do not see any  
</span><br>
<span class="quotelev2">&gt;&gt; mx_* functions called which would indicate a crash inside MX due to  
</span><br>
<span class="quotelev2">&gt;&gt; multiple threads trying to complete the same request. It does show  
</span><br>
<span class="quotelev2">&gt;&gt; an assert failed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Francois, is the stack trace from the MX MTL or BTL? Can you send a  
</span><br>
<span class="quotelev2">&gt;&gt; small program that reproduces this abort?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 11, 2009, at 12:25 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Neither the CM PML or the MX MTL has been looked at for thread  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; safety.  There's not much code to cause problems in the CM PML.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The MX MTL would likely need some work to ensure the restrictions  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scott mentioned are met (currently, there's no such guarantee in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MX MTL).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 11, 2009, at 10:21 AM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The comment on the FAQ (and on the other thread) is only true for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some BTLs (TCP, SM and MX). I don't have resources to test for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the others BTL, it is their developers responsibility to do the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; required modifications to make them thread safe.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In addition, I have to confess that I never tested the MTL for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thread safety. It is a completely different implementations for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the message passing, supposed to map directly on top of the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; underlying network capabilities. However, there are clearly few  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; places where thread safety should be enforced in the MTL layer,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I don't know if this is the case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 11, 2009, at 09:35 , Scott Atchley wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Francois,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For threads, the FAQ has:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=supported-systems#thread-support">http://www.open-mpi.org/faq/?category=supported-systems#thread-support</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It mentions that thread support is designed in, but lightly  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tested. It is also possible that the FAQ is out of date and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_THREAD_MULTIPLE is fully supported.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The stack trace below shows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_free()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_progress()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Recv()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I do not know this code, but it may be in the higher level code  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that calls the BTLs and/or MTLs and it would be a place to see  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if that code handles the TCP BTL differently than MX BTL/MTL.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MX is thread safe with the caveat that two threads may not try  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to complete the same request at the same time. This includes  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; calling mx_test(), mx_wait(), mx_test_any() and/or mx_wait_any()  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where the latter two have match bits and match mask that could  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; complete a request being tested/waited by another thread.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Scott
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 11, 2009, at 6:00 AM, Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Well, according to George Bosilca (<a href="http://www.open-mpi.org/community/lists/users/2005/02/0005.php">http://www.open-mpi.org/community/lists/users/2005/02/0005.php</a> 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ), threads are supported in OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The program I try to run works with the TCP stack and MX driver  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is thread-safe, so i guess the problem comes from the MX BTL or  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MTL.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Francois
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Scott Atchley wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Francois,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am not familiar with the internals of the OMPI code. Are you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sure, however, that threads are fully supported yet? I was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; under the impression that thread support was still partial.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can anyone else comment?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Scott
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 8, 2009, at 8:43 AM, Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm encountering some issues when running a multithreaded  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; program with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI (trunk rev. 21380, configured with --enable-mpi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; threads)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My program (included in the tar.bz2) uses several pthreads  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that perform
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ping pongs concurrently (thread #1 uses tag #1, thread #2  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; uses tag #2, etc.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This program crashes over MX (either btl or mtl) with the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; backtrace:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; concurrent_ping_v2: pml_cm_recvreq.c:53:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_cm_recv_request_completion: Assertion `0 ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ((mca_pml_cm_thin_recv_request_t*)base_request)- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;req_base.req_pml_complete'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] Failing at address: 0x1238949c4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] Signal: Aborted (6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] Signal code:  (-6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7f5722cba065]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 2] /lib/libc.so.6(abort+0x183) [0x7f5722cbd153]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 3] /lib/libc.so.6(__assert_fail+0xe9)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f5722cb3159]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 0] /lib/libpthread.so.0 [0x7f57240be7b0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pal.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57238d0a08]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pal.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57238cf8cc]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pal.so.0(opal_free+0x4e)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57238bdc69]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_mtl_mx.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f572060b72f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pal.so.0(opal_progress+0xbc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f572081145a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0(MPI_Recv+0x2bc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [10] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [11] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [12] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57208120bb]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_mtl_mx.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f572060b80a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libopen- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pal.so.0(opal_progress+0xbc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57238948e0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f572081147a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57208113b7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_cm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f57208112e7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/ftrahay/sources/openmpi/trunk/install//lib/libmpi.so. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0(MPI_Recv+0x2bc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x7f5723e07690]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [11] ./concurrent_ping_v2(client+0x123) [0x401404]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [12] /lib/libpthread.so.0 [0x7f57240b6faa]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] [13] /lib/libc.so.6(clone+0x6d) [0x7f5722d5629d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [joe0:01709] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 1709 on node joe0  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; exited on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; signal 6 (Aborted).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any idea ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Francois Trahay
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;bug- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; report.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; ftrahay_at_joe0 mpiexec --mca pml cm --mca btl mx -machinefile ./joe - 
</span><br>
<span class="quotelev1">&gt; np 2 ./concurrent_ping
</span><br>
<span class="quotelev1">&gt; [1 communicating threads]
</span><br>
<span class="quotelev1">&gt; thread #0
</span><br>
<span class="quotelev1">&gt; [1 communicating threads]
</span><br>
<span class="quotelev1">&gt; [0]     1       3.071749           0.326           0.310
</span><br>
<span class="quotelev1">&gt; [0]     2       3.065395           0.652           0.622
</span><br>
<span class="quotelev1">&gt; [0]     4       3.064346           1.305           1.245
</span><br>
<span class="quotelev1">&gt; [0]     8       3.058898           2.615           2.494
</span><br>
<span class="quotelev1">&gt; [2 communicating threads]
</span><br>
<span class="quotelev1">&gt; thread #1
</span><br>
<span class="quotelev1">&gt; [2 communicating threads]
</span><br>
<span class="quotelev1">&gt; concurrent_ping: pml_cm_recvreq.c:53:  
</span><br>
<span class="quotelev1">&gt; mca_pml_cm_recv_request_completion: Assertion `0 ==  
</span><br>
<span class="quotelev1">&gt; ((mca_pml_cm_thin_recv_request_t*)base_request)- 
</span><br>
<span class="quotelev2">&gt; &gt;req_base.req_pml_complete' failed.
</span><br>
<span class="quotelev1">&gt; [joe0:16355] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [joe0:16355] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [joe0:16355] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [joe0:16355] Failing at address: 0x1b3f769c4
</span><br>
<span class="quotelev1">&gt; [joe0:16355] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [joe0:16355] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [joe0:16355] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 0] /lib/libpthread.so.0 [0x7f64b34b07b0]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7f64b3181065]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 2] /lib/libc.so.6(abort+0x183) [0x7f64b3184153]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 3] /lib/libc.so.6(__assert_fail+0xe9) [0x7f64b317a159]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 0] /lib/libpthread.so.0 [0x7f64b34b07b0]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 1] /home/ftrahay/sources/openmpi/trunk/install//lib/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0 [0x7f64b3fb2a08]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 2] /home/ftrahay/sources/openmpi/trunk/install//lib/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0 [0x7f64b3fb18cc]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 3] /home/ftrahay/sources/openmpi/trunk/install//lib/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0(opal_free+0x4e) [0x7f64b3f9fc69]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 4] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_mtl_mx.so [0x7f64b0ad272f]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 5] /home/ftrahay/sources/openmpi/trunk/install//lib/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0(opal_progress+0xbc) [0x7f64b3f768e0]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 6] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f64b0cd845a]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 7] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f64b0cd83b7]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 8] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f64b0cd82e7]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 9] /home/ftrahay/sources/openmpi/trunk/install//lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0(MPI_Recv+0x2bc) [0x7f64b44e9690]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [10] ./concurrent_ping(client+0xf5) [0x401185]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [11] /lib/libpthread.so.0 [0x7f64b34a8faa]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [12] /lib/libc.so.6(clone+0x6d) [0x7f64b321d29d]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 4] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f64b0cd90bb]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 5] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_mtl_mx.so [0x7f64b0ad280a]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 6] /home/ftrahay/sources/openmpi/trunk/install//lib/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0(opal_progress+0xbc) [0x7f64b3f768e0]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 7] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f64b0cd847a]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 8] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f64b0cd83b7]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [ 9] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f64b0cd82e7]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [10] /home/ftrahay/sources/openmpi/trunk/install//lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0(MPI_Recv+0x2bc) [0x7f64b44e9690]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [11] ./concurrent_ping(client+0xf5) [0x401185]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [12] /lib/libpthread.so.0 [0x7f64b34a8faa]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] [13] /lib/libc.so.6(clone+0x6d) [0x7f64b321d29d]
</span><br>
<span class="quotelev1">&gt; [joe0:16355] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 1 with PID 16355 on node joe0  
</span><br>
<span class="quotelev1">&gt; exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ftrahay_at_joe0$
</span><br>
<span class="quotelev1">&gt; ftrahay_at_joe0$ mpiexec --mca pml cm --mca mtl mx -machinefile ./joe - 
</span><br>
<span class="quotelev1">&gt; np 2 ./concurrent_ping
</span><br>
<span class="quotelev1">&gt; [1 communicating threads]
</span><br>
<span class="quotelev1">&gt; thread #0
</span><br>
<span class="quotelev1">&gt; [1 communicating threads]
</span><br>
<span class="quotelev1">&gt; [0]     1       3.066409           0.326           0.311
</span><br>
<span class="quotelev1">&gt; [0]     2       3.054011           0.655           0.625
</span><br>
<span class="quotelev1">&gt; [0]     4       3.055394           1.309           1.249
</span><br>
<span class="quotelev1">&gt; [0]     8       3.057003           2.617           2.496
</span><br>
<span class="quotelev1">&gt; [2 communicating threads]
</span><br>
<span class="quotelev1">&gt; thread #1
</span><br>
<span class="quotelev1">&gt; [2 communicating threads]
</span><br>
<span class="quotelev1">&gt; unknown request type 4
</span><br>
<span class="quotelev1">&gt; concurrent_ping: pml_cm_recvreq.c:53:  
</span><br>
<span class="quotelev1">&gt; mca_pml_cm_recv_request_completion: Assertion `0 ==  
</span><br>
<span class="quotelev1">&gt; ((mca_pml_cm_thin_recv_request_t*)base_request)- 
</span><br>
<span class="quotelev2">&gt; &gt;req_base.req_pml_complete' failed.
</span><br>
<span class="quotelev1">&gt; [joe0:16337] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [joe0:16337] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [joe0:16337] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 0] /lib/libpthread.so.0 [0x7f5ed8efc7b0]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7f5ed8bcd065]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 2] /lib/libc.so.6(abort+0x183) [0x7f5ed8bd0153]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 3] /lib/libc.so.6(__assert_fail+0xe9) [0x7f5ed8bc6159]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 4] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f5ed67250bb]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 5] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_mtl_mx.so [0x7f5ed651e80a]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 6] /home/ftrahay/sources/openmpi/trunk/install//lib/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0(opal_progress+0xbc) [0x7f5ed99c28e0]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 7] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f5ed672447a]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 8] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f5ed67243b7]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [ 9] /home/ftrahay/sources/openmpi/trunk/install/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_cm.so [0x7f5ed67242e7]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [10] /home/ftrahay/sources/openmpi/trunk/install//lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0(MPI_Recv+0x2bc) [0x7f5ed9f35690]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [11] ./concurrent_ping(client+0xf5) [0x401185]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [12] /lib/libpthread.so.0 [0x7f5ed8ef4faa]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] [13] /lib/libc.so.6(clone+0x6d) [0x7f5ed8c6929d]
</span><br>
<span class="quotelev1">&gt; [joe0:16337] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 1 with PID 16337 on node joe0  
</span><br>
<span class="quotelev1">&gt; exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ftrahay_at_joe0:$
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; * NewMadeleine
</span><br>
<span class="quotelev1">&gt; * Copyright (C) 2006 (see AUTHORS file)
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * This program is free software; you can redistribute it and/or modify
</span><br>
<span class="quotelev1">&gt; * it under the terms of the GNU General Public License as published by
</span><br>
<span class="quotelev1">&gt; * the Free Software Foundation; either version 2 of the License, or  
</span><br>
<span class="quotelev1">&gt; (at
</span><br>
<span class="quotelev1">&gt; * your option) any later version.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * This program is distributed in the hope that it will be useful, but
</span><br>
<span class="quotelev1">&gt; * WITHOUT ANY WARRANTY; without even the implied warranty of
</span><br>
<span class="quotelev1">&gt; * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
</span><br>
<span class="quotelev1">&gt; * General Public License for more details.
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;semaphore.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* This program performs several ping pong in parallel.
</span><br>
<span class="quotelev1">&gt; * This evaluates the efficienty to access nmad from 1, 2, 3, ...n  
</span><br>
<span class="quotelev1">&gt; threads simultanously
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define LEN_DEFAULT      4
</span><br>
<span class="quotelev1">&gt; #define WARMUPS_DEFAULT	1000
</span><br>
<span class="quotelev1">&gt; #define LOOPS_DEFAULT	10000
</span><br>
<span class="quotelev1">&gt; #define THREADS_DEFAULT 16
</span><br>
<span class="quotelev1">&gt; #define DATA_CONTROL_ACTIVATED 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int	comm_rank	= -1;
</span><br>
<span class="quotelev1">&gt; static int	comm_size	= -1;
</span><br>
<span class="quotelev1">&gt; static char	host_name[1024]	= &quot;&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int       max_len   =  16;
</span><br>
<span class="quotelev1">&gt; static int	 loops;
</span><br>
<span class="quotelev1">&gt; static int       threads;
</span><br>
<span class="quotelev1">&gt; static int       warmups;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static sem_t ready_sem;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int go;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static __inline__
</span><br>
<span class="quotelev1">&gt; uint32_t _next(uint32_t len, uint32_t multiplier, uint32_t increment)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  if (!len)
</span><br>
<span class="quotelev1">&gt;    return 1+increment;
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;    return len*multiplier+increment;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void usage_ping() {
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;-L len - packet length [%d]\n&quot;, LEN_DEFAULT);
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;-N iterations - iterations [%d]\n&quot;, LOOPS_DEFAULT);
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;-T thread - number of communicating threads [%d] 
</span><br>
<span class="quotelev1">&gt; \n&quot;, THREADS_DEFAULT);
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;-W warmup - number of warmup iterations [%d]\n&quot;,  
</span><br>
<span class="quotelev1">&gt; WARMUPS_DEFAULT);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void fill_buffer(char *buffer, int len) {
</span><br>
<span class="quotelev1">&gt;  unsigned int i = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; len; i++) {
</span><br>
<span class="quotelev1">&gt;    buffer[i] = 'a'+(i%26);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void clear_buffer(char *buffer, int len) {
</span><br>
<span class="quotelev1">&gt;  memset(buffer, 0, len);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt; static void control_buffer(char *msg, char *buffer, int len) {
</span><br>
<span class="quotelev1">&gt;  tbx_bool_t   ok = tbx_true;
</span><br>
<span class="quotelev1">&gt;  unsigned char expected_char;
</span><br>
<span class="quotelev1">&gt;  unsigned int          i  = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for(i = 0; i &lt; len; i++){
</span><br>
<span class="quotelev1">&gt;    expected_char = 'a'+(i%26);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if(buffer[i] != expected_char){
</span><br>
<span class="quotelev1">&gt;      printf(&quot;Bad data at byte %d: expected %c, received %c\n&quot;,
</span><br>
<span class="quotelev1">&gt;             i, expected_char, buffer[i]);
</span><br>
<span class="quotelev1">&gt;      ok = tbx_false;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (!ok) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Controling %s - &quot;, msg);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;%d bytes reception failed\n&quot;, len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    TBX_FAILURE(&quot;data corruption&quot;);
</span><br>
<span class="quotelev1">&gt;  } else {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;ok\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; server(void* arg) {
</span><br>
<span class="quotelev1">&gt;  int    my_pos = (uint8_t)arg;
</span><br>
<span class="quotelev1">&gt;  char	*buf	= NULL;
</span><br>
<span class="quotelev1">&gt;  uint8_t tag   = (uint8_t)arg;
</span><br>
<span class="quotelev1">&gt;  int    i, k;
</span><br>
<span class="quotelev1">&gt;  int len;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  buf = malloc(max_len);
</span><br>
<span class="quotelev1">&gt;  clear_buffer(buf, max_len);
</span><br>
<span class="quotelev1">&gt;  for(i = my_pos; i &lt;= threads; i++) {
</span><br>
<span class="quotelev1">&gt;    /* Be sure all the communicating threads have been created before  
</span><br>
<span class="quotelev1">&gt; we start */
</span><br>
<span class="quotelev1">&gt;    while(go &lt; i )
</span><br>
<span class="quotelev1">&gt;      sched_yield();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for(len=1; len &lt; max_len; len*=2){
</span><br>
<span class="quotelev1">&gt;      for(k = 0; k &lt; loops + warmups; k++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_Request request;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt;      control_buffer(&quot;received&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;      MPI_Send(buf, len , MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    sem_post(&amp;ready_sem);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; client(void *arg) {
</span><br>
<span class="quotelev1">&gt;  int        my_pos = (uint8_t)arg;
</span><br>
<span class="quotelev1">&gt;  uint8_t    tag    = (uint8_t)my_pos;
</span><br>
<span class="quotelev1">&gt;  char	    *buf    = NULL;
</span><br>
<span class="quotelev1">&gt;  double t1, t2;
</span><br>
<span class="quotelev1">&gt;  double     sum, lat, bw_million_byte, bw_mbyte;
</span><br>
<span class="quotelev1">&gt;  int        i, k;
</span><br>
<span class="quotelev1">&gt;  int len;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;thread #%d\n&quot;, my_pos);
</span><br>
<span class="quotelev1">&gt;  buf = malloc(max_len);
</span><br>
<span class="quotelev1">&gt;  clear_buffer(buf, max_len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  fill_buffer(buf, len);
</span><br>
<span class="quotelev1">&gt;  for(i = my_pos; i &lt;= threads; i++) {
</span><br>
<span class="quotelev1">&gt;    /* Be sure all the communicating threads have been created before  
</span><br>
<span class="quotelev1">&gt; we start */
</span><br>
<span class="quotelev1">&gt;    while(go &lt; i )
</span><br>
<span class="quotelev1">&gt;      sched_yield();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for(len=1; len &lt; max_len; len*=2){
</span><br>
<span class="quotelev1">&gt;      for(k = 0; k &lt; warmups; k++) {
</span><br>
<span class="quotelev1">&gt; 	    MPI_Request request;
</span><br>
<span class="quotelev1">&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt; 	    control_buffer(&quot;sending&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 	    MPI_Send(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	    MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt; 	    control_buffer(&quot;received&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      t1= MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      for(k = 0; k &lt; loops; k++) {
</span><br>
<span class="quotelev1">&gt;        MPI_Request request;
</span><br>
<span class="quotelev1">&gt;  #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt;        control_buffer(&quot;sending&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;        MPI_Send(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;        MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;  #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt;        control_buffer(&quot;received&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      t2 = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      sum = (t2 - t1)*1e6;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      lat	      = sum / (2 * loops);
</span><br>
<span class="quotelev1">&gt;      bw_million_byte = len * (loops / (sum / 2));
</span><br>
<span class="quotelev1">&gt;      bw_mbyte        = bw_million_byte / 1.048576;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      printf(&quot;[%d]\t%d\t%lf\t%8.3f\t%8.3f\n&quot;, my_pos, len, lat,  
</span><br>
<span class="quotelev1">&gt; bw_million_byte, bw_mbyte);
</span><br>
<span class="quotelev1">&gt;      fflush(stdout);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    sem_post(&amp;ready_sem);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int	  argc,
</span><br>
<span class="quotelev1">&gt;     char	**argv) {
</span><br>
<span class="quotelev1">&gt;  int		 i, j;
</span><br>
<span class="quotelev1">&gt;  pthread_t    * pid;
</span><br>
<span class="quotelev1">&gt;  static sem_t bourrin_ready;
</span><br>
<span class="quotelev1">&gt;  pthread_attr_t attr;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  //len =        LEN_DEFAULT;
</span><br>
<span class="quotelev1">&gt;  loops = LOOPS_DEFAULT;
</span><br>
<span class="quotelev1">&gt;  threads =    THREADS_DEFAULT;
</span><br>
<span class="quotelev1">&gt;  warmups =    WARMUPS_DEFAULT;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int provided;
</span><br>
<span class="quotelev1">&gt;  int needed = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev1">&gt;  MPI_Init_thread(&amp;argc, &amp;argv, needed, &amp;provided);
</span><br>
<span class="quotelev1">&gt;  if(provided &lt; needed){
</span><br>
<span class="quotelev1">&gt; 	  fprintf(stderr, &quot;needed: %d, provided: %d\n&quot;, needed, provided);
</span><br>
<span class="quotelev1">&gt; 	  exit(0);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (argc &gt; 1 &amp;&amp; !strcmp(argv[1], &quot;--help&quot;)) {
</span><br>
<span class="quotelev1">&gt;    usage_ping();
</span><br>
<span class="quotelev1">&gt;    exit(0);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for(i=1 ; i&lt;argc ; i+=2) {
</span><br>
<span class="quotelev1">&gt;    if (!strcmp(argv[i], &quot;-N&quot;)) {
</span><br>
<span class="quotelev1">&gt;      loops = atoi(argv[i+1]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else if (!strcmp(argv[i], &quot;-L&quot;)) {
</span><br>
<span class="quotelev1">&gt; 	    //len = atoi(argv[i+1]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else if (!strcmp(argv[i], &quot;-T&quot;)) {
</span><br>
<span class="quotelev1">&gt;      threads = atoi(argv[i+1]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else if (!strcmp(argv[i], &quot;-W&quot;)) {
</span><br>
<span class="quotelev1">&gt;      warmups = atoi(argv[i+1]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else {
</span><br>
<span class="quotelev1">&gt;      fprintf(stderr, &quot;Illegal argument %s\n&quot;, argv[i]);
</span><br>
<span class="quotelev1">&gt;      usage_ping();
</span><br>
<span class="quotelev1">&gt;      exit(0);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  pthread_attr_init(&amp;attr);
</span><br>
<span class="quotelev1">&gt;  pid = malloc(sizeof(pthread_t) * threads);
</span><br>
<span class="quotelev1">&gt;  sem_init(&amp;ready_sem, 0, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  go = 0;
</span><br>
<span class="quotelev1">&gt;  for (i = 0 ; i&lt; threads ; i++) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;[%d communicating threads]\n&quot;, i+1);
</span><br>
<span class="quotelev1">&gt;    if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;      pthread_create(&amp;pid[i], &amp;attr, (void*)server, (uint8_t)i);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;      pthread_create(&amp;pid[i], &amp;attr, (void*)client, (uint8_t)i);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for( j = 0; j &lt;= i; j++){
</span><br>
<span class="quotelev1">&gt;      sem_wait(&amp;ready_sem); 	
</span><br>
<span class="quotelev1">&gt;      go=j;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    go++;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for(i=0;i&lt;threads;i++)
</span><br>
<span class="quotelev1">&gt;    pthread_join(pid[i],NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  exit(0);
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="9607.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9605.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9605.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9608.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
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
