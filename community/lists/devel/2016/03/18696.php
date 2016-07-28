<?
$subject_val = "[OMPI devel] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 21:03:38 2016" -->
<!-- isoreceived="20160315010338" -->
<!-- sent="Mon, 14 Mar 2016 18:03:38 -0700" -->
<!-- isosent="20160315010338" -->
<!-- name="Dominic Kedelty" -->
<!-- email="dkedelty_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI Error" -->
<!-- id="CALimjmWfEJZWX+YZbePk4C9nJXW4+d5Lg9UYeZapdg1PYoTLnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI Error<br>
<strong>From:</strong> Dominic Kedelty (<em>dkedelty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-14 21:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18697.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18695.php">Pavel Emelyanov: "[OMPI devel] Invitation to Checkpoint-Restore micro-conference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18697.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18697.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting the following error using openmpi and I am wondering if anyone
<br>
would have clue as to why it is happening. It is an error coming from
<br>
openmpi.
<br>
<p>Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes
<br>
(40) fd_size=213909504 off=8617247540
<br>
Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes
<br>
(40) fd_size=213909504 off=8617247540
<br>
application called MPI_Abort(MPI_COMM_WORLD, 1) - process 157
<br>
application called MPI_Abort(MPI_COMM_WORLD, 1) - process 477
<br>
<p>Any help would be appreciated. Thanks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18696/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18697.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18695.php">Pavel Emelyanov: "[OMPI devel] Invitation to Checkpoint-Restore micro-conference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18697.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18697.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
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
