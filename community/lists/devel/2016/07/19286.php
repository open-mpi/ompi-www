<?
$subject_val = "Re: [OMPI devel] tcp btl rendezvous performance question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 10:00:31 2016" -->
<!-- isoreceived="20160726140031" -->
<!-- sent="Tue, 26 Jul 2016 14:00:25 +0000" -->
<!-- isosent="20160726140025" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tcp btl rendezvous performance question" -->
<!-- id="74e40de44e7e4f97a2619fb0084d8e6b_at_EXG13-P-MBX06.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANi1EtPqtqC5EGFZHUWyBPS=kNsfr-YNwCOBct2nC4uNyZ8dOA_at_mail.gmail.com" -->
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
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-26 10:00:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19287.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Previous message:</strong> <a href="19285.php">Eric Chamberland: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>In reply to:</strong> <a href="19284.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sreenidhi
<br>
<p>Only partial resolution.  By pushing out the eager path to 4 MB we were able to get around 2GB/sec per socket connection with osu bw test.
<br>
<p>The kernel is quite old though - 2.6.x - and being a summer student project with a focus on IB vs rout able ROCE we've moved on.
<br>
<p>Howard
<br>
<p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Sreenidhi Bharathkar Ramesh &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt;
<br>
Sent: Tuesday, July 26, 2016 4:11:06 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] tcp btl rendezvous performance question
<br>
<p>hi Howard,
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
<p><p>On Tue, Jul 19, 2016 at 10:50 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
<br>
<p>Howard,
<br>
<p><p>did you bump both btl_tcp_rndv_eager_limit and btl_tcp_eager_limit ?
<br>
<p>you might also need to bump btl_tcp_sndbuf, btl_tcp_rcvbuf and btl_tcp_max_send_size to get the max performance out of your 100Gb ethernet cards
<br>
<p>last but not least, you might also need to bump btl_tcp_links to saturate your network (that is likely a good thing when running 1 task per node, but that can lead to decreased performance when running several tasks per node)
<br>
<p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On 7/19/2016 6:57 AM, Howard Pritchard wrote:
<br>
Hi Folks,
<br>
<p>I have a cluster with some 100 Gb ethernet cards
<br>
installed.  What we are noticing if we force Open MPI 1.10.3
<br>
to go through the TCP BTL (rather than yalla)  is that
<br>
the performance of osu_bw once the TCP BTL switches
<br>
from eager to rendezvous (&gt; 32KB)
<br>
falls off a cliff, going from about 1.6 GB/sec to 233 MB/sec
<br>
and stays that way out to 4 MB message lengths.
<br>
<p>There's nothing wrong with the IP stack (iperf -P4 gives
<br>
63 Gb/sec).
<br>
<p>So, my questions are
<br>
<p>1) is this performance expected for the TCP BTL when in
<br>
rendezvous mode?
<br>
2) is there some way to get more like the single socket
<br>
performance obtained with iperf for large messages (~16 Gb/sec).
<br>
<p>We tried adjusting the tcp_btl_rendezvous threshold but that doesn't
<br>
appear to actually be adjustable from the mpirun command line.
<br>
<p>Thanks for any suggestions,
<br>
<p>Howard
<br>
<p><p><p><p><p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19237.php">http://www.open-mpi.org/community/lists/devel/2016/07/19237.php</a>
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19240.php">http://www.open-mpi.org/community/lists/devel/2016/07/19240.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19286/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19287.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Previous message:</strong> <a href="19285.php">Eric Chamberland: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>In reply to:</strong> <a href="19284.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
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
