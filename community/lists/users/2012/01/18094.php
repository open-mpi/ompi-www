<?
$subject_val = "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  4 14:42:54 2012" -->
<!-- isoreceived="20120104194254" -->
<!-- sent="Wed, 04 Jan 2012 11:42:50 -0800" -->
<!-- isosent="20120104194250" -->
<!-- name="V. Ram" -->
<!-- email="vramml0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes" -->
<!-- id="1325706170.30709.140661019279809_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EEF3C79.5030305_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes<br>
<strong>From:</strong> V. Ram (<em>vramml0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-04 14:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18095.php">Venkateswara Rao Dokku: "[OMPI users] Issue with Open -MPI while running intel IMB benchmarks"</a>
<li><strong>Previous message:</strong> <a href="18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18004.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
<p>Sorry for the delay in confirming the minimum load that would trigger
<br>
the RnR error; the holidays here were a significant interruption.
<br>
<p>On Mon, Dec 19, 2011, at 03:30 PM, Yevgeny Kliteynik wrote:
<br>
<p><span class="quotelev1">&gt; What's the smallest number of nodes that are needed to reproduce this
</span><br>
<span class="quotelev1">&gt; problem? Does it happen with just two HCAs, one process per node?
</span><br>
<p>Our nodes with these HCAs are dual-socket, 4 Intel cores/socket.
<br>
<p>Working with the users, it turns out we were unable to reproduce the
<br>
issue with anything less than 3 nodes and 17 processes total, with no
<br>
nodes oversubscribed.  So two nodes were running with 8 processes each
<br>
and the third with 1 process.
<br>
<p>It could be some sort of race condition or timing issue that could
<br>
theoretically be triggered for less than this, but we weren't able to
<br>
provoke it.
<br>
<p><span class="quotelev1">&gt; Let's get you to the latest firmware GA of this card.
</span><br>
<p>Just as a reminder, I responded to the firmware part of this earlier:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/12/18014.php">http://www.open-mpi.org/community/lists/users/2011/12/18014.php</a>
<br>
<p>Thank you,
<br>
<p>V. Ram
<br>
<p><pre>
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Access your email from home and the web
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18095.php">Venkateswara Rao Dokku: "[OMPI users] Issue with Open -MPI while running intel IMB benchmarks"</a>
<li><strong>Previous message:</strong> <a href="18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18004.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
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
