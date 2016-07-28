<?
$subject_val = "Re: [OMPI devel] tcp btl rendezvous performance question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 01:20:53 2016" -->
<!-- isoreceived="20160719052053" -->
<!-- sent="Tue, 19 Jul 2016 14:20:50 +0900" -->
<!-- isosent="20160719052050" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tcp btl rendezvous performance question" -->
<!-- id="c1955434-7a9b-756a-ea53-e6cce428f188_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAF1Cqj7D380DTAa4R_Pb_juyedLK4uUeocSrQ7jNnxsSKz2f1w_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 01:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19241.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Previous message:</strong> <a href="19239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>In reply to:</strong> <a href="19237.php">Howard Pritchard: "[OMPI devel] tcp btl rendezvous performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19284.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>Reply:</strong> <a href="19284.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p><p>did you bump both btl_tcp_rndv_eager_limit and btl_tcp_eager_limit ?
<br>
<p>you might also need to bump btl_tcp_sndbuf, btl_tcp_rcvbuf and 
<br>
btl_tcp_max_send_size to get the max performance out of your 100Gb 
<br>
ethernet cards
<br>
<p>last but not least, you might also need to bump btl_tcp_links to 
<br>
saturate your network (that is likely a good thing when running 1 task 
<br>
per node, but that can lead to decreased performance when running 
<br>
several tasks per node)
<br>
<p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/19/2016 6:57 AM, Howard Pritchard wrote:
<br>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19237.php">http://www.open-mpi.org/community/lists/devel/2016/07/19237.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19241.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Previous message:</strong> <a href="19239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>In reply to:</strong> <a href="19237.php">Howard Pritchard: "[OMPI devel] tcp btl rendezvous performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19284.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>Reply:</strong> <a href="19284.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
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
