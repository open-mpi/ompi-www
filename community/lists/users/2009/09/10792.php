<?
$subject_val = "Re: [OMPI users] MPI_Irecv segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 11:15:08 2009" -->
<!-- isoreceived="20090928151508" -->
<!-- sent="Mon, 28 Sep 2009 11:15:03 -0400" -->
<!-- isosent="20090928151503" -->
<!-- name="Everette Clemmer" -->
<!-- email="clemmece_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv segmentation fault" -->
<!-- id="351727c0909280815s77ede2f5r24907d4035b6ff77_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0909220624n7a482954w19805684b3277030_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Irecv segmentation fault<br>
<strong>From:</strong> Everette Clemmer (<em>clemmece_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 11:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10791.php">Aniruddha Marathe: "[OMPI users] Debugging OpenMPI calls"</a>
<li><strong>In reply to:</strong> <a href="10721.php">jody: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes I did, forgot to mention that in my last. Most of the example code
<br>
I've seen online passes the buffer variable by reference...
<br>
<p>I think I've gotten past the segfault at this point, but it looks like
<br>
MPI_Isend is never completing. I have an MPI_Test() that sets a flag
<br>
immediately following the MPI_Irecv call, but the process seems to
<br>
hang before it gets to it. Not really sure why it wouldn't complete.
<br>
<p>Everette
<br>
<p>On Tue, Sep 22, 2009 at 9:24 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Did you also change the &quot;&amp;buffer&quot; to buffer in your MPI_Send call?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 22, 2009 at 1:38 PM, Everette Clemmer &lt;clemmece_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, tried changing MPI_Irecv( &amp;buffer....) to MPI_Irecv( buffer...)
</span><br>
<span class="quotelev2">&gt;&gt; and still no luck. Stack trace follows if that's helpful:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; prompt$ mpirun -np 2 ./display_test_debug
</span><br>
<span class="quotelev2">&gt;&gt; Sending 'q' from node 0 to node 1
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] Signal code: &#160;(0)
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] Failing at address: 0x0
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] [ 0] 2 &#160; libSystem.B.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 0x00007fff87e280aa _sigtramp + 26
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] [ 1] 3 &#160; ???
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000000000000 0x0 + 0
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] [ 2] 4 &#160; GLUT
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000100024a21 glutMainLoop + 261
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] [ 3] 5 &#160; display_test_debug
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000100001444 xsMainLoop + 67
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] [ 4] 6 &#160; display_test_debug
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000100001335 main + 59
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] [ 5] 7 &#160; display_test_debug
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000100000d9c start + 52
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] [ 6] 8 &#160; ???
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000000000001 0x0 + 1
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTER:50898] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 50897 on node COMPUTER.local
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Everette
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 22, 2009 at 2:28 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 2009-09-21 at 19:26 -0400, Everette Clemmer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hey all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm getting a segmentation fault when I attempt to receive a single
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; character via MPI_Irecv. Code follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void recv_func() {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; if( !MASTER ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; char &#160; &#160; &#160; &#160; &#160; &#160;buffer[ 1 ];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; int &#160; &#160; &#160; &#160; &#160; &#160; flag;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Request request;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Status &#160; &#160; &#160;status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Irecv( &amp;buffer, 1, MPI_CHAR, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;request);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It should be MPI_Irecv(buffer, 1, ...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The segfault disappears if I comment out the MPI_Irecv call in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recv_func so I'm assuming that there's something wrong with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameters that I'm passing to it. Thoughts?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Internet: ake_at_[hidden] &#160; Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; - Everette
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
<p><p><p><pre>
-- 
- Everette
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10791.php">Aniruddha Marathe: "[OMPI users] Debugging OpenMPI calls"</a>
<li><strong>In reply to:</strong> <a href="10721.php">jody: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
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
