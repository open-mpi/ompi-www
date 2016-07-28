<?
$subject_val = "[OMPI users] Best way to map MPI processes to sockets?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 13:26:29 2012" -->
<!-- isoreceived="20121107182629" -->
<!-- sent="Wed, 7 Nov 2012 18:25:15 +0000" -->
<!-- isosent="20121107182515" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Best way to map MPI processes to sockets?" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F168D5F_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Best way to map MPI processes to sockets?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 13:25:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20653.php">Blosch, Edwin L: "[OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20651.php">Blosch, Edwin L: "[OMPI users] Question on shmem MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20654.php">Josh Hursey: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20654.php">Josh Hursey: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Maybe reply:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to map MPI processes to sockets in a somewhat compacted pattern and I am wondering the best way to do it.
<br>
<p>Say there are 2 sockets (0 and 1) and each processor has 4 cores (0,1,2,3) and I have 4 MPI processes, each of which will use 2 OpenMP processes.
<br>
<p>I've re-ordered my parallel work such that pairs of ranks (0,1 and 2,3) communicate more with each other than with other ranks.  Thus I think the best mapping would be:
<br>
<p>RANK   SOCKET    CORE
<br>
0              0              0
<br>
1              0              2
<br>
2              1              0
<br>
3              1              2
<br>
<p>My understanding is that --bysocket --bind-to-socket will give me ranks 0 and 2 on socket 0 and ranks 1 and 3 on socket 1, not what I want.
<br>
<p>It looks like --cpus-per-proc might be what I want, i.e. seems like I might give the value 2.  But it was unclear to me whether I would also need to give --bysocket and the FAQ suggests this combination is untested.
<br>
<p>May be a rankfile is what I need?
<br>
<p>I would appreciate some advice on the easiest way to get this mapping.
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20653.php">Blosch, Edwin L: "[OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20651.php">Blosch, Edwin L: "[OMPI users] Question on shmem MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20654.php">Josh Hursey: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20654.php">Josh Hursey: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Maybe reply:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
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
