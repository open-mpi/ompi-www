<?
$subject_val = "Re: [OMPI users] MPI_Irecv segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 09:25:00 2009" -->
<!-- isoreceived="20090922132500" -->
<!-- sent="Tue, 22 Sep 2009 15:24:54 +0200" -->
<!-- isosent="20090922132454" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv segmentation fault" -->
<!-- id="9b0da5ce0909220624n7a482954w19805684b3277030_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="351727c0909220438i1284f29m35171b4c847f04e0_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 09:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10720.php">Blesson Varghese: "[OMPI users] MPI_Comm_spawn query"</a>
<li><strong>In reply to:</strong> <a href="10719.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10792.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Reply:</strong> <a href="10792.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you also change the &quot;&amp;buffer&quot; to buffer in your MPI_Send call?
<br>
<p>Jody
<br>
<p>On Tue, Sep 22, 2009 at 1:38 PM, Everette Clemmer &lt;clemmece_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hmm, tried changing MPI_Irecv( &amp;buffer....) to MPI_Irecv( buffer...)
</span><br>
<span class="quotelev1">&gt; and still no luck. Stack trace follows if that's helpful:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; prompt$ mpirun -np 2 ./display_test_debug
</span><br>
<span class="quotelev1">&gt; Sending 'q' from node 0 to node 1
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] Signal code: &#160;(0)
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] Failing at address: 0x0
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] [ 0] 2 &#160; libSystem.B.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff87e280aa _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] [ 1] 3 &#160; ???
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000 0x0 + 0
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] [ 2] 4 &#160; GLUT
</span><br>
<span class="quotelev1">&gt; 0x0000000100024a21 glutMainLoop + 261
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] [ 3] 5 &#160; display_test_debug
</span><br>
<span class="quotelev1">&gt; 0x0000000100001444 xsMainLoop + 67
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] [ 4] 6 &#160; display_test_debug
</span><br>
<span class="quotelev1">&gt; 0x0000000100001335 main + 59
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] [ 5] 7 &#160; display_test_debug
</span><br>
<span class="quotelev1">&gt; 0x0000000100000d9c start + 52
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] [ 6] 8 &#160; ???
</span><br>
<span class="quotelev1">&gt; 0x0000000000000001 0x0 + 1
</span><br>
<span class="quotelev1">&gt; [COMPUTER:50898] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 50897 on node COMPUTER.local
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Everette
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 22, 2009 at 2:28 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 2009-09-21 at 19:26 -0400, Everette Clemmer wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting a segmentation fault when I attempt to receive a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; character via MPI_Irecv. Code follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void recv_func() {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; if( !MASTER ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; char &#160; &#160; &#160; &#160; &#160; &#160;buffer[ 1 ];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; int &#160; &#160; &#160; &#160; &#160; &#160; flag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Request request;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Status &#160; &#160; &#160;status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Irecv( &amp;buffer, 1, MPI_CHAR, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;request);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It should be MPI_Irecv(buffer, 1, ...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The segfault disappears if I comment out the MPI_Irecv call in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recv_func so I'm assuming that there's something wrong with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters that I'm passing to it. Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev2">&gt;&gt; Internet: ake_at_[hidden] &#160; Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev2">&gt;&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; - Everette
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
<li><strong>Next message:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10720.php">Blesson Varghese: "[OMPI users] MPI_Comm_spawn query"</a>
<li><strong>In reply to:</strong> <a href="10719.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10792.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>Reply:</strong> <a href="10792.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
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
