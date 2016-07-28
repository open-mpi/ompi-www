<?
$subject_val = "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 12:07:52 2014" -->
<!-- isoreceived="20141205170752" -->
<!-- sent="Fri, 5 Dec 2014 17:07:50 +0000" -->
<!-- isosent="20141205170750" -->
<!-- name="John Bray" -->
<!-- email="jbray_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code" -->
<!-- id="CAM2Y-dakTFgYQY52bzwEdCySvrJc0f1LEkAfdAHMP7YmQM9YUw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C4FE43E9-CC7A-4B37-8453-15BF9327D0E8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code<br>
<strong>From:</strong> John Bray (<em>jbray_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-05 12:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25920.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25920.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25920.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25927.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>I have a motherboard with 2 X6580 chips, each with 6 cores 2 way
<br>
hyperthreading, so /proc/cpuinfo reports 24 cores
<br>
<p>Doing a pure compute OpenMP loop where I'd expect the number of iterations
<br>
in 10s to rise with number of threads
<br>
with gnu and mpich
<br>
OMP_NUM_THREADS=1 -n 1 : 112 iterations
<br>
OMP_NUM_THREADS=2 -n 1 : 224 iterations
<br>
OMP_NUM_THREADS=6 -n 1 : 644 iterations
<br>
OMP_NUM_THREADS=12 -n 1 : 1287 iterations
<br>
OMP_NUM_THREADS=22 -n 1 : 1182 iterations
<br>
OMP_NUM_THREADS=24 -n 1 : 454 iterations
<br>
<p>which shows that mpich is spreading across the cores, but hyperthreading is
<br>
not useful, and using the whole node counterproductive
<br>
<p>with gnu and openmpi 1.8.3
<br>
OMP_NUM_THREADS=1 mpiexec -n 1 : 112
<br>
OMP_NUM_THREADS=2 mpiexec -n 1 : 113
<br>
which suggests you aren't allowing the threads to spread across cores
<br>
<p>adding --cpus-per-node I gain access to the resources on one chip
<br>
<p>OMP_NUM_THREADS=1 mpiexec --cpus-per-proc 1 -n 1 : 112
<br>
OMP_NUM_THREADS=2 mpiexec --cpus-per-proc 2 -n 1 : 224
<br>
OMP_NUM_THREADS=6 mpiexec --cpus-per-proc 2 -n 1 : 644
<br>
then
<br>
OMP_NUM_THREADS=12 mpiexec --cpus-per-proc 12 -n 1
<br>
<p>A request for multiple cpus-per-proc was given, but a directive
<br>
was also give to map to an object level that has less cpus than
<br>
requested ones:
<br>
<p>&nbsp;&nbsp;#cpus-per-proc:  12
<br>
&nbsp;&nbsp;number of cpus:  6
<br>
&nbsp;&nbsp;map-by:          BYNUMA
<br>
<p>So you aren't happy using both chips for one process
<br>
<p>OMP_NUM_THREADS=1 mpiexec -n 1 --cpus-per-proc 1 --use-hwthread-cpus : 112
<br>
OMP_NUM_THREADS=2 mpiexec -n 1 --cpus-per-proc 2 --use-hwthread-cpus : 112
<br>
OMP_NUM_THREADS=4 mpiexec -n 1 --cpus-per-proc 4 --use-hwthread-cpus : 224
<br>
OMP_NUM_THREADS=6 mpiexec -n 1 --cpus-per-proc 6 --use-hwthread-cpus : 324
<br>
OMP_NUM_THREADS=6 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus : 631
<br>
OMP_NUM_THREADS=12 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus : 647
<br>
<p>OMP_NUM_THREADS=24 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus
<br>
<p>A request for multiple cpus-per-proc was given, but a directive
<br>
was also give to map to an object level that has less cpus than
<br>
requested ones:
<br>
<p>&nbsp;&nbsp;#cpus-per-proc:  24
<br>
&nbsp;&nbsp;number of cpus:  12
<br>
&nbsp;&nbsp;map-by:          BYNUMA
<br>
<p>OMP_NUM_THREADS=1 mpiexec -n 1 --cpus-per-proc 2 --use-hwthread-cpus : 112
<br>
OMP_NUM_THREADS=2 mpiexec -n 1 --cpus-per-proc 4 --use-hwthread-cpus : 224
<br>
OMP_NUM_THREADS=6 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus :: 644
<br>
<p>OMP_NUM_THREADS=12 mpiexec -n 1 --cpus-per-proc 24 --use-hwthread-cpus ::
<br>
644
<br>
<p>A request for multiple cpus-per-proc was given, but a directive
<br>
was also give to map to an object level that has less cpus than
<br>
requested ones:
<br>
<p>&nbsp;&nbsp;#cpus-per-proc:  24
<br>
&nbsp;&nbsp;number of cpus:  12
<br>
&nbsp;&nbsp;map-by:          BYNUMA
<br>
<p>So it seems that --use-hwthread-cpus means that --cpus-per-proc changes
<br>
from physical cores to hyperthreaded cores, but I can't get both chips
<br>
working on the problem in way mpich can
<br>
<p>John
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25919/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25920.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25920.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25920.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25927.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
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
