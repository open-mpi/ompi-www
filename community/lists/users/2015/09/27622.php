<?
$subject_val = "[OMPI users] possible GATS bug in osc/sm";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 04:33:21 2015" -->
<!-- isoreceived="20150918083321" -->
<!-- sent="Fri, 18 Sep 2015 10:33:18 +0200" -->
<!-- isosent="20150918083318" -->
<!-- name="Steffen Christgau" -->
<!-- email="christgau_at_[hidden]" -->
<!-- subject="[OMPI users] possible GATS bug in osc/sm" -->
<!-- id="55FBCC4E.9000706_at_cs.uni-potsdam.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] possible GATS bug in osc/sm<br>
<strong>From:</strong> Steffen Christgau (<em>christgau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 04:33:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27623.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27646.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Reply:</strong> <a href="27646.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Reply:</strong> <a href="27649.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>[the following discussion is based on v1.8.8]
<br>
<p>suppose you have a MPI one-sided program using general active target
<br>
synchronization (GATS). In that program, a single origin process
<br>
performs two rounds of communication, i.e. two access epochs, to
<br>
different target process groups. The target processes synchronizes
<br>
accordingly with the single origin process.
<br>
<p>Suppose further, that - for any reason - there is a process skew
<br>
that delays the target processes of the first group but does not affect
<br>
the second group. Thus, the processes in the second group issue a post
<br>
operation earlier than the first group.
<br>
<p>IMO, this should have no effect for the origin process. It should first
<br>
complete its access epoch to the first group of targets, then to the
<br>
other one.
<br>
<p>Things do work as expected with the osc/rdma component but do not with
<br>
osc/sm. To get osc/sm involved, compile the attached program with
<br>
-DUSE_WIN_ALLOCATE compiler flag. In detail I used
<br>
<p>mpicc -O0 -g -Wall std=c99 -DUSE_WIN_ALLOCATE  pscw_epochs.c -o pscw_epochs
<br>
<p>Run the compiled program on a shared memory system (e.g. your
<br>
workstation) with more than 2 processes and either use --mca osc sm or
<br>
do not specify any mca parameter at all (sm component is used for
<br>
windows automatically on shared memory systems if win is created by
<br>
MPI_Win_allocate and friends).
<br>
<p>This will give a deadlock (timestamps from output removed):
<br>
mpiexec -n 3 ./pscw_epochs
<br>
<p>[2 @ pscw_epochs.c:72]: posted, waiting for wait to return...
<br>
[0 @ pscw_epochs.c:41]: putting to 1
<br>
[0 @ pscw_epochs.c:44]: done with put/complete
<br>
[1 @ pscw_epochs.c:61]: sleeping...
<br>
[0 @ pscw_epochs.c:53]: putting value 2 to rank 2
<br>
[1 @ pscw_epochs.c:63]: woke up.
<br>
[1 @ pscw_epochs.c:66]: window buffer modified before sync'ed
<br>
[1 @ pscw_epochs.c:72]: posted, waiting for wait to return...
<br>
[2 @ pscw_epochs.c:75]: target done got 2 -&gt; success
<br>
^C
<br>
<p>Note, that is does not only cause a deadlock but also puts data in the
<br>
window of a process that has not synchronized already (rank 1)
<br>
<p>If I run the program with more than 3 processes the effect of wrong data
<br>
in the window disappears, but the deadlock manifests:
<br>
<p>mpiexec -n 4 ./pscw_epochs
<br>
[1 @ pscw_epochs.c:61]: sleeping...
<br>
[2 @ pscw_epochs.c:72]: posted, waiting for wait to return...
<br>
[3 @ pscw_epochs.c:72]: posted, waiting for wait to return...
<br>
[1 @ pscw_epochs.c:63]: woke up.
<br>
[1 @ pscw_epochs.c:72]: posted, waiting for wait to return...
<br>
^C
<br>
<p>The reason for this seems to be the employed implementation using a
<br>
counter to check if all processes given in START have issued according
<br>
POST operations. START only checks if the counter's value matches the
<br>
number of processes in the start group. That way, it is prone to
<br>
modifications by other target processes from &quot;future&quot; epochs.
<br>
<p>IMO, the counter is simply not a good solution for implementing START as
<br>
it is not capable of tracking which process has performed POST. I
<br>
suppose a solution for this would be to have a list or bit vector as
<br>
proposed in [1].
<br>
<p>Looking forward for a discussion (may be at EuroMPI or MPI Forum next week)
<br>
<p><p>Kind regards, Steffen
<br>
<p>[1] Ping Lai, Sayantan Sur, and Dhabaleswar K. Panda. &#226;&#128;&#156;Designing truly
<br>
one- sided MPI-2 RMA intra-node communication on multi-core systems&#226;&#128;&#157;.
<br>
In: Computer Science - R&amp;D 25.1-2 (2010), pp. 3&#226;&#128;&#147;14, DOI:
<br>
10.1007/s00450-010-0115-3
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27622/pscw_epochs.c">pscw_epochs.c</a>
</ul>
<!-- attachment="pscw_epochs.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27623.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27646.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Reply:</strong> <a href="27646.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Reply:</strong> <a href="27649.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
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
