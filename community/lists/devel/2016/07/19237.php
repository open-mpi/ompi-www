<?
$subject_val = "[OMPI devel] tcp btl rendezvous performance question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 18 17:57:02 2016" -->
<!-- isoreceived="20160718215702" -->
<!-- sent="Mon, 18 Jul 2016 15:57:00 -0600" -->
<!-- isosent="20160718215700" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] tcp btl rendezvous performance question" -->
<!-- id="CAF1Cqj7D380DTAa4R_Pb_juyedLK4uUeocSrQ7jNnxsSKz2f1w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] tcp btl rendezvous performance question<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-18 17:57:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19238.php">Christopher Samuel: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>Previous message:</strong> <a href="19236.php">Paul Hargrove: "Re: [OMPI devel] Change compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19240.php">Gilles Gouaillardet: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>Reply:</strong> <a href="19240.php">Gilles Gouaillardet: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19238.php">Christopher Samuel: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>Previous message:</strong> <a href="19236.php">Paul Hargrove: "Re: [OMPI devel] Change compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19240.php">Gilles Gouaillardet: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>Reply:</strong> <a href="19240.php">Gilles Gouaillardet: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
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
