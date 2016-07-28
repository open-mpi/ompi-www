<?
$subject_val = "[OMPI devel] race condition in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 09:27:47 2014" -->
<!-- isoreceived="20140916132747" -->
<!-- sent="Tue, 16 Sep 2014 22:27:44 +0900" -->
<!-- isosent="20140916132744" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] race condition in oob/tcp" -->
<!-- id="CAAkFZ5vwJzCnriHwHt=FQ_ijKUz1DJE6Ai6M+sHRZr=Up7+Ypw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] race condition in oob/tcp<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-16 09:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15837.php">Artem Polyakov: "[OMPI devel] OPAL timing framework"</a>
<li><strong>Previous message:</strong> <a href="15835.php">Gilles Gouaillardet: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15844.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15844.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>here is the full description of a race condition in oob/tcp i very briefly
<br>
mentionned in a previous post :
<br>
<p>the race condition can occur when two not connected orted try to send a
<br>
message to each other for the first time and at the same time.
<br>
<p>that can occur when running mpi helloworld on 4 nodes with the grpcomm/rcd
<br>
module.
<br>
<p>here is a scenario in which the race condition occurs :
<br>
<p>orted vpid 2 and 3 enter the allgather
<br>
/* they are not orte yet oob/tcp connected*/
<br>
and they call orte.send_buffer_nb each other.
<br>
from a libevent point of view, vpid 2 and 3 will call
<br>
mca_oob_tcp_peer_try_connect
<br>
<p>vpid 2 calls mca_oob_tcp_send_handler
<br>
<p>vpid 3 calls connection_event_handler
<br>
<p>depending on the value returned by random() in libevent, vpid 3 will
<br>
either call mca_oob_tcp_send_handler (likely) or recv_handler (unlikely)
<br>
if vpid 3 calls recv_handler, it will close the two sockets to vpid 2
<br>
<p>then vpid 2 will call mca_oob_tcp_recv_handler
<br>
(peer-&gt;state is MCA_OOB_TCP_CONNECT_ACK)
<br>
that will invoke mca_oob_tcp_recv_connect_ack
<br>
tcp_peer_recv_blocking will fail
<br>
/* zero bytes are recv'ed since vpid 3 previously closed the socket before
<br>
writing a header */
<br>
and this is handled by mca_oob_tcp_recv_handler as a fatal error
<br>
/* ORTE_FORCED_TERMINATE(1) */
<br>
<p>could you please have a look at it ?
<br>
<p>if you are too busy, could you please advise where this scenario should be
<br>
handled differently ?
<br>
- should vpid 3 keep one socket instead of closing both and retrying ?
<br>
- should vpid 2 handle the failure as a non fatal error ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15837.php">Artem Polyakov: "[OMPI devel] OPAL timing framework"</a>
<li><strong>Previous message:</strong> <a href="15835.php">Gilles Gouaillardet: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15844.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15844.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
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
