<?
$subject_val = "[OMPI users] strange behavior of MPI_wait() method";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 07:24:52 2015" -->
<!-- isoreceived="20150728112452" -->
<!-- sent="Tue, 28 Jul 2015 13:24:50 +0200" -->
<!-- isosent="20150728112450" -->
<!-- name="Cristian RUIZ" -->
<!-- email="cristian.ruiz_at_[hidden]" -->
<!-- subject="[OMPI users] strange behavior of MPI_wait() method" -->
<!-- id="55B76682.9060202_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI users] strange behavior of MPI_wait() method<br>
<strong>From:</strong> Cristian RUIZ (<em>cristian.ruiz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 07:24:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27344.php">Gilles Gouaillardet: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
<li><strong>Previous message:</strong> <a href="27342.php">Gilles Gouaillardet: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27344.php">Gilles Gouaillardet: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
<li><strong>Reply:</strong> <a href="27344.php">Gilles Gouaillardet: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm measuring the overhead of using Linux container for HPC 
<br>
applications. To do so I was comparing the execution time of NAS 
<br>
parallel benchmarks on two infrastructures:
<br>
<p>1) real: 16 real machines
<br>
2) container: 16 containers distributed over 16 real machines
<br>
<p>Each machine used is equipped with two Intel Xeon E5-2630v3 processors 
<br>
(with 8 cores each), 128 GB of RAM and a 10 Gigabit Ethernet adapter.
<br>
<p>In my results, I found a particular performance degradation for CG.B 
<br>
benchmark:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;walltime numprocess      type      ci1      ci2    overhead
<br>
1   6615085         16    native  6473340  6756830   1.1271473
<br>
2   6349030         32    native  6315947  6382112   2.2187747
<br>
3   5811724         64    native  5771509  5851938   0.8983445
<br>
4   4002865        128    native  3966314  4039416 *180.7472715*
<br>
5   4077885        256    native  4044667  4111103 *402.8036531
<br>
<p>*    walltime numprocess      type      ci1      ci2    overhead
<br>
6   6540523         16 container  6458503  6622543   0.0000000
<br>
7   6208159         32 container  6184888  6231431   0.0000000
<br>
8   5759514         64 container  5719453  5799575   0.0000000
<br>
9  11237935        128 container 10762906 11712963   0.0000000
<br>
10 20503755        256 container 19830425 21177085   0.0000000
<br>
<p>(16 MPI processes per machine/container)
<br>
<p>When I use containers everything is fine before 128 MPI processes. I got 
<br>
180% and 400% performance degration with 128  and 256 MPI processes 
<br>
respectively. I repeated again the meaures and I had statistically the 
<br>
same results. So, I decided to generate a trace of the execution using 
<br>
TAU. I discovered that the source of the overhead is the MPI_wait() 
<br>
method that sometimes takes around 0.2 seconds and this happens around 
<br>
20 times which adds around 4 seconds to the execution time. The method 
<br>
is called 25992 times and in avarage takes between 50 and 300 usecs 
<br>
(values obtained with profiling).
<br>
This strange behavior was reported in this paper[1] (page 10)  that says:
<br>
<p>&quot;We can see two outstanding zones of MPI_Send and MPI_Wait. Such 
<br>
operations typically take few microseconds to less than a millisecond. 
<br>
Here they take 0.2 seconds&quot;
<br>
<p>They attributed that strange behavior to package loss and network 
<br>
malfunctioning. In my experiments I measured the number of packets 
<br>
dropped and nothing unusual happened.
<br>
I used two versions of OpenMPI 1.6.5 and 1.8.5 and in both versions I 
<br>
got the same strange behavior. Any clues of what could be the source of 
<br>
that strange behavior? could you please suggest any method to
<br>
debug this problem?
<br>
<p><p>Thank you in advance
<br>
<p>[1] <a href="https://hal.inria.fr/hal-00919507/file/smpi_pmbs13.pdf">https://hal.inria.fr/hal-00919507/file/smpi_pmbs13.pdf</a>
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27343/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27344.php">Gilles Gouaillardet: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
<li><strong>Previous message:</strong> <a href="27342.php">Gilles Gouaillardet: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27344.php">Gilles Gouaillardet: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
<li><strong>Reply:</strong> <a href="27344.php">Gilles Gouaillardet: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
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
