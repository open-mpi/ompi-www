<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 21:45:50 2016" -->
<!-- isoreceived="20160506014550" -->
<!-- sent="Fri, 6 May 2016 01:45:48 +0000" -->
<!-- isosent="20160506014548" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="9939E3E0-FB5F-4942-B244-B64445E82A4E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALb_wBRZsD8+PrrTfrL2+1iW-QV3deNOJgWj3EQt68djDzbLjw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 21:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29085.php">Zhen Wang: "[OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's taking so long because you are sleeping for .1 second between calling MPI_Test().
<br>
<p>The TCP transport is only sending a few fragments of your message during each iteration through MPI_Test (because, by definition, it has to return &quot;immediately&quot;).  Other transports do better handing off large messages like this to hardware for asynchronous progress.
<br>
<p>Additionally, in the upcoming v2.0.0 release is a non-default option to enable an asynchronous progress thread for the TCP transport.  We're up to v2.0.0rc2; you can give that async TCP support a whirl, if you want.  Pass &quot;--mca btl_tcp_progress_thread 1&quot; on the mpirun command line to enable the TCP progress thread to try it.
<br>
<p><p><span class="quotelev1">&gt; On May 4, 2016, at 7:40 PM, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having a problem with Isend, Recv and Test in Linux Mint 16 Petra. The source is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI 1.10.2 is configured with
</span><br>
<span class="quotelev1">&gt; ./configure --enable-debug --prefix=/home/&lt;me&gt;/Tool/openmpi-1.10.2-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The source is built with
</span><br>
<span class="quotelev1">&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpiCC a5.cpp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and run in one node with
</span><br>
<span class="quotelev1">&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpirun -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output is in the end. What puzzles me is why MPI_Test is called so many times, and it takes so long to send a message. Am I doing something wrong? I'm simulating a more complicated program: MPI 0 Isends data to MPI 1, computes (usleep here), and calls Test to check if data are sent. MPI 1 Recvs data, and computes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Zhen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 0 started at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 0 started at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 0 finished at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 0 finished at 20:32:39.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;a5.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29085.php">http://www.open-mpi.org/community/lists/users/2016/05/29085.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29085.php">Zhen Wang: "[OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
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
