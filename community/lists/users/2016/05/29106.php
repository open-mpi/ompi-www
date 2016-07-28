<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 22:10:09 2016" -->
<!-- isoreceived="20160506021009" -->
<!-- sent="Thu, 5 May 2016 21:09:49 -0500" -->
<!-- isosent="20160506020949" -->
<!-- name="Zhen Wang" -->
<!-- email="toddwz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="CALb_wBTka-wZdYKxfmpu8pv0BKX8jQ6uNDxgU7HUxJcmnESfSQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9939E3E0-FB5F-4942-B244-B64445E82A4E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Isend, Recv and Test<br>
<strong>From:</strong> Zhen Wang (<em>toddwz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 22:09:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29107.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Previous message:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks.
<br>
<p>Best regards,
<br>
Zhen
<br>
<p>On Thu, May 5, 2016 at 8:45 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; It's taking so long because you are sleeping for .1 second between calling
</span><br>
<span class="quotelev1">&gt; MPI_Test().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The TCP transport is only sending a few fragments of your message during
</span><br>
<span class="quotelev1">&gt; each iteration through MPI_Test (because, by definition, it has to return
</span><br>
<span class="quotelev1">&gt; &quot;immediately&quot;).  Other transports do better handing off large messages like
</span><br>
<span class="quotelev1">&gt; this to hardware for asynchronous progress.
</span><br>
<span class="quotelev1">&gt;
</span><br>
This agrees with what I observed. Larger messages needs more calls of
<br>
MPI_Test. What do you mean by other transports?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, in the upcoming v2.0.0 release is a non-default option to
</span><br>
<span class="quotelev1">&gt; enable an asynchronous progress thread for the TCP transport.  We're up to
</span><br>
<span class="quotelev1">&gt; v2.0.0rc2; you can give that async TCP support a whirl, if you want.  Pass
</span><br>
<span class="quotelev1">&gt; &quot;--mca btl_tcp_progress_thread 1&quot; on the mpirun command line to enable the
</span><br>
<span class="quotelev1">&gt; TCP progress thread to try it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Does this mean there's an additional thread to transfer data in background?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 4, 2016, at 7:40 PM, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm having a problem with Isend, Recv and Test in Linux Mint 16 Petra.
</span><br>
<span class="quotelev1">&gt; The source is attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI 1.10.2 is configured with
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --enable-debug --prefix=/home/&lt;me&gt;/Tool/openmpi-1.10.2-debug
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The source is built with
</span><br>
<span class="quotelev2">&gt; &gt; ~/Tool/openmpi-1.10.2-debug/bin/mpiCC a5.cpp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and run in one node with
</span><br>
<span class="quotelev2">&gt; &gt; ~/Tool/openmpi-1.10.2-debug/bin/mpirun -n 2 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output is in the end. What puzzles me is why MPI_Test is called so
</span><br>
<span class="quotelev1">&gt; many times, and it takes so long to send a message. Am I doing something
</span><br>
<span class="quotelev1">&gt; wrong? I'm simulating a more complicated program: MPI 0 Isends data to MPI
</span><br>
<span class="quotelev1">&gt; 1, computes (usleep here), and calls Test to check if data are sent. MPI 1
</span><br>
<span class="quotelev1">&gt; Recvs data, and computes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Zhen
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: Isend of 0 started at 20:32:35.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 1: Recv of 0 started at 20:32:35.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 1: Recv of 0 finished at 20:32:39.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt; &gt; MPI 0: Isend of 0 finished at 20:32:39.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;a5.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29085.php">http://www.open-mpi.org/community/lists/users/2016/05/29085.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29105.php">http://www.open-mpi.org/community/lists/users/2016/05/29105.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29106/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29107.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Previous message:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
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
