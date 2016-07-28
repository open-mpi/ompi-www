<?
$subject_val = "[OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 14:46:44 2016" -->
<!-- isoreceived="20160106194644" -->
<!-- sent="Wed, 6 Jan 2016 14:46:13 -0500" -->
<!-- isosent="20160106194613" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CAFb48S8WttBsOQbdD1onZ5wTfQx0Tqm1M7YVvbGP0=UUMjurbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 14:46:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28216.php">Palmer, Bruce J: "[OMPI users] Put/Get semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Open MPI Gurus,
<br>
<p>As I explore MPI-OpenMP hybrid codes, I'm trying to figure out how to do
<br>
things to get the same behavior in various stacks. For example, I have a
<br>
28-core node (2 14-core Haswells), and I'd like to run 4 MPI processes and
<br>
7 OpenMP threads. Thus, I'd like the processes to be 2 processes per socket
<br>
with the OpenMP threads laid out on them. Using a &quot;hybrid Hello World&quot;
<br>
program, I can achieve this with Intel MPI (after a lot of testing):
<br>
<p>(1097) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
<br>
./hello-hybrid.x | sort -g -k 18
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 2
<br>
Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 3
<br>
Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 4
<br>
Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 5
<br>
Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 6
<br>
Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 7
<br>
Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 8
<br>
Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 9
<br>
Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU 10
<br>
Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU 11
<br>
Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU 12
<br>
Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU 13
<br>
Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 16
<br>
Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 17
<br>
Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 18
<br>
Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 19
<br>
Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 20
<br>
Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 21
<br>
Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 22
<br>
Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 23
<br>
Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 24
<br>
Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 25
<br>
Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 26
<br>
Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 27
<br>
<p>Other than the odd fact that Process #0 seemed to start on Socket #1 (this
<br>
might be an artifact of how I'm trying to detect the CPU I'm on), this
<br>
looks reasonable. 14 threads on each socket and each process is laying out
<br>
its threads in a nice orderly fashion.
<br>
<p>I'm trying to figure out how to do this with Open MPI (version 1.10.0) and
<br>
apparently I am just not quite good enough to figure it out. The closest
<br>
I've gotten is:
<br>
<p>(1155) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4 -map-by
<br>
ppr:2:socket ./hello-hybrid.x | sort -g -k 18
<br>
Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 2
<br>
Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 2
<br>
Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 3
<br>
Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 3
<br>
Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 4
<br>
Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 4
<br>
Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 5
<br>
Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 5
<br>
Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 6
<br>
Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 6
<br>
Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 16
<br>
Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 16
<br>
Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 17
<br>
Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU 17
<br>
Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 18
<br>
Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU 18
<br>
Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 19
<br>
Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU 19
<br>
Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 20
<br>
Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU 20
<br>
<p>Obviously not right. Any ideas on how to help me learn? The man mpirun page
<br>
is a bit formidable in the pinning part, so maybe I've missed an obvious
<br>
answer.
<br>
<p>Matt
<br>
<pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28216.php">Palmer, Bruce J: "[OMPI users] Put/Get semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
