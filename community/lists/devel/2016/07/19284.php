<?
$subject_val = "Re: [OMPI devel] tcp btl rendezvous performance question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 06:11:09 2016" -->
<!-- isoreceived="20160726101109" -->
<!-- sent="Tue, 26 Jul 2016 15:41:06 +0530" -->
<!-- isosent="20160726101106" -->
<!-- name="Sreenidhi Bharathkar Ramesh" -->
<!-- email="sreenidhi-bharathkar.ramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tcp btl rendezvous performance question" -->
<!-- id="CANi1EtPqtqC5EGFZHUWyBPS=kNsfr-YNwCOBct2nC4uNyZ8dOA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="c1955434-7a9b-756a-ea53-e6cce428f188_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] tcp btl rendezvous performance question<br>
<strong>From:</strong> Sreenidhi Bharathkar Ramesh (<em>sreenidhi-bharathkar.ramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-26 06:11:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19285.php">Eric Chamberland: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Previous message:</strong> <a href="19283.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>In reply to:</strong> <a href="19240.php">Gilles Gouaillardet: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19286.php">Pritchard Jr., Howard: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>Reply:</strong> <a href="19286.php">Pritchard Jr., Howard: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi Howard,
<br>
<p>Was this issue resolved ?  If so, what is the solution ?
<br>
Please let me know.
<br>
Curious to know , since we are also experimenting with these limits.
<br>
<p>Thanks,
<br>
- Sreenidhi.
<br>
<p><p>On Tue, Jul 19, 2016 at 10:50 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did you bump both btl_tcp_rndv_eager_limit and btl_tcp_eager_limit ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you might also need to bump btl_tcp_sndbuf, btl_tcp_rcvbuf and
</span><br>
<span class="quotelev1">&gt; btl_tcp_max_send_size to get the max performance out of your 100Gb ethernet
</span><br>
<span class="quotelev1">&gt; cards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; last but not least, you might also need to bump btl_tcp_links to saturate
</span><br>
<span class="quotelev1">&gt; your network (that is likely a good thing when running 1 task per node, but
</span><br>
<span class="quotelev1">&gt; that can lead to decreased performance when running several tasks per node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/19/2016 6:57 AM, Howard Pritchard wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a cluster with some 100 Gb ethernet cards
</span><br>
<span class="quotelev1">&gt; installed.  What we are noticing if we force Open MPI 1.10.3
</span><br>
<span class="quotelev1">&gt; to go through the TCP BTL (rather than yalla)  is that
</span><br>
<span class="quotelev1">&gt; the performance of osu_bw once the TCP BTL switches
</span><br>
<span class="quotelev1">&gt; from eager to rendezvous (&gt; 32KB)
</span><br>
<span class="quotelev1">&gt; falls off a cliff, going from about 1.6 GB/sec to 233 MB/sec
</span><br>
<span class="quotelev1">&gt; and stays that way out to 4 MB message lengths.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's nothing wrong with the IP stack (iperf -P4 gives
</span><br>
<span class="quotelev1">&gt; 63 Gb/sec).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, my questions are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) is this performance expected for the TCP BTL when in
</span><br>
<span class="quotelev1">&gt; rendezvous mode?
</span><br>
<span class="quotelev1">&gt; 2) is there some way to get more like the single socket
</span><br>
<span class="quotelev1">&gt; performance obtained with iperf for large messages (~16 Gb/sec).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We tried adjusting the tcp_btl_rendezvous threshold but that doesn't
</span><br>
<span class="quotelev1">&gt; appear to actually be adjustable from the mpirun command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any suggestions,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19237.php">http://www.open-mpi.org/community/lists/devel/2016/07/19237.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19240.php">http://www.open-mpi.org/community/lists/devel/2016/07/19240.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19285.php">Eric Chamberland: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Previous message:</strong> <a href="19283.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>In reply to:</strong> <a href="19240.php">Gilles Gouaillardet: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19286.php">Pritchard Jr., Howard: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>Reply:</strong> <a href="19286.php">Pritchard Jr., Howard: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
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
