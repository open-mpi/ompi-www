<?
$subject_val = "[OMPI users] MPI_Allreduce hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 13:32:24 2012" -->
<!-- isoreceived="20120423173224" -->
<!-- sent="Mon, 23 Apr 2012 10:32:19 -0700" -->
<!-- isosent="20120423173219" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allreduce hangs" -->
<!-- id="20120423173219.GB17343_at_stikine.sfu.ca" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allreduce hangs<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 13:32:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19073.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19077.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19077.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am debugging a program that hangs in MPI_Allreduce (openmpi-1.4.3).
<br>
An strace of one of the processes shows:
<br>
<p>Process 10925 attached with 3 threads - interrupt to quit
<br>
[pid 10927] poll([{fd=17, events=POLLIN}, {fd=16, events=POLLIN}], 2, -1 &lt;unfini
<br>
shed ...&gt;
<br>
[pid 10926] select(15, [8 14], [], NULL, NULL &lt;unfinished ...&gt;
<br>
[pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
<br>
LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
<br>
[pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
<br>
LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
<br>
[pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
<br>
LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
<br>
[pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
<br>
LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
<br>
...
<br>
<p>The program is a Fortran program using 64bit integers (compiled with -i8)
<br>
and I correspondingly compiled openmpi (version 1.4.3) with -i8 for
<br>
the Fortran compiler as well.
<br>
<p>The program is somewhat difficult to debug since it takes 3 days to reach
<br>
the point where it hangs. This is what I found so far:
<br>
<p>MPI_Allreduce is called as
<br>
<p>call MPI_Allreduce(MPI_IN_PLACE, recvbuf, count, MPI_DOUBLE_PRECISION, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, MPI_COMM_WORLD, mpierr)
<br>
<p>with count = 455295488. Since the Fortran interface just calls the
<br>
C routines in OpenMPI and count variables are 32bit integers in C I started
<br>
to wonder what is the largest integer &quot;count&quot; for which a MPI_Allreduce
<br>
succeeds. E.g., in MPICH (it has been a while that I looked into this, i.e.,
<br>
this may or may not be correct anymore) all send/recv were converted
<br>
into send/recv of MPI_BYTE, thus the largest count for doubles was
<br>
(2^31-1)/8 = 268435455. Thus, I started to wrap the MPI_Allreduce call
<br>
with a myMPI_Allreduce routine that repeatedly calls MPI_Allreduce when
<br>
the count is larger than some value maxallreduce (the myMPI_Allreduce.f90
<br>
is attached). I have tested the routine with a trivial program that
<br>
just fills an array with numbers and calls myMPI_Allreduce and this
<br>
test succeeds.
<br>
However, with the real program the situations is very strange:
<br>
When I set maxallreduce = 268435456, the program hangs at the first call
<br>
(iallreduce = 1) to MPI_Allreduce in the do loop
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do iallreduce = 1, nallreduce - 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;idx = (iallreduce - 1)*length + 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Allreduce(MPI_IN_PLACE, recvbuf(idx), length, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;datatype, op, comm, mpierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mpierr /= MPI_SUCCESS) return
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
<p>With maxallreduce = 134217728 the first call succeeds, the second hangs. 
<br>
For maxallreduce = 67108864, the first two calls to MPI_Allreduce complete, 
<br>
but the third (iallreduce = 3) hangs. For maxallreduce = 8388608 the
<br>
17th call hangs, for 1048576 the 138th call hangs; here is a table 
<br>
(values from gdb attached to process 0 when the program hangs):
<br>
<p>maxallreduce iallreduce         idx        length
<br>
268435456             1           1     227647744
<br>
134217728             2   113823873     113823872
<br>
&nbsp;67108864             3   130084427      65042213
<br>
&nbsp;&nbsp;8388608            17   137447697       8590481
<br>
&nbsp;&nbsp;1048576           138   143392010       1046657
<br>
<p>As if there is (are) some element(s) in the middle of the array with 
<br>
idx &gt;= 143392010 that cannot be sent or recv'd.
<br>
<p>Has anybody seen this kind of behaviour?
<br>
Has anybody an idea what could be causing this?
<br>
Ideas how to get around this?
<br>
Anything that could help would be appreciated ... I already spent a
<br>
huge amount of time on this and I am running out of ideas.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Simon Fraser University
Burnaby, British Columbia
Canada

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19074/myMPI_Allreduce.f90">myMPI_Allreduce.f90</a>
</ul>
<!-- attachment="myMPI_Allreduce.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19073.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19077.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19077.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
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
