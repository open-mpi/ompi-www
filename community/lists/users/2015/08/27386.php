<?
$subject_val = "[OMPI users] segfault on java binding from MPI.init()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 19:36:37 2015" -->
<!-- isoreceived="20150803233637" -->
<!-- sent="Mon, 3 Aug 2015 13:36:06 -1000" -->
<!-- isosent="20150803233606" -->
<!-- name="Nate Chambers" -->
<!-- email="nchamber_at_[hidden]" -->
<!-- subject="[OMPI users] segfault on java binding from MPI.init()" -->
<!-- id="CAKMpcFq=edum7tvQQEm8yYNoQ1cJa+PAqM-T7jBcePsDMWwRtw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] segfault on java binding from MPI.init()<br>
<strong>From:</strong> Nate Chambers (<em>nchamber_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-03 19:36:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27385.php">Gus Correa: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've been struggling with this error for a while, so hoping someone more
<br>
knowledgeable can help!
<br>
<p>Our java MPI code exits with a segfault during its normal operation, *but
<br>
the segfault occurs before our code ever uses MPI functionality like
<br>
sending/receiving. *We've removed all message calls and any use of
<br>
MPI.COMM_WORLD from the code. The segfault occurs if we call MPI.init(args)
<br>
in our code, and does not if we comment that line out. Further vexing us,
<br>
the crash doesn't happen at the point of the MPI.init call, but later on in
<br>
the program. I don't have an easy-to-run example here because our non-MPI
<br>
code is so large and complicated. We have run simpler test programs with
<br>
MPI and the segfault does not occur.
<br>
<p>We have isolated the line where the segfault occurs. However, if we comment
<br>
that out, the program will run longer, but then randomly (but
<br>
deterministically) segfault later on in the code. Does anyone have tips on
<br>
how to debug this? We have tried several flags with mpirun, but no good
<br>
clues.
<br>
<p>We have also tried several MPI versions, including stable 1.8.7 and the
<br>
most recent 1.8.8rc1
<br>
<p><p>ATTACHED
<br>
- config.log from installation
<br>
- output from `ompi_info -all`
<br>
<p><p>OUTPUT FROM RUNNING
<br>
<p><span class="quotelev1">&gt; mpirun -np 2 java -mx4g FeaturizeDay datadir/ days.txt
</span><br>
...
<br>
some normal output from our code
<br>
...
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 29646 on node r9n69 exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27386/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27386/ompi_info.txt.bz2">ompi_info.txt.bz2</a>
</ul>
<!-- attachment="ompi_info.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27385.php">Gus Correa: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
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
