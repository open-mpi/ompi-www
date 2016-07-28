<?
$subject_val = "[OMPI users] Question about OpenMPI automatically spawns multiple threads for each task";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 12:33:25 2010" -->
<!-- isoreceived="20100517163325" -->
<!-- sent="Mon, 17 May 2010 11:38:23 -0500" -->
<!-- isosent="20100517163823" -->
<!-- name="Ping Luo" -->
<!-- email="pingluo_at_[hidden]" -->
<!-- subject="[OMPI users] Question about OpenMPI automatically spawns multiple threads for each task" -->
<!-- id="20100517113823.066dfdad_at_zhejiang.tamu.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Question about OpenMPI automatically spawns multiple threads for each task<br>
<strong>From:</strong> Ping Luo (<em>pingluo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 12:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13062.php">Christopher Maestas: "[OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Previous message:</strong> <a href="13060.php">Jaime Perea: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13064.php">Jeff Squyres: "Re: [OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
<li><strong>Reply:</strong> <a href="13064.php">Jeff Squyres: "Re: [OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I found when running am MPI program that is linked against OpenMPI library, 
<br>
for each MPI task, OpenMPI will spawn three threads, as the sample shown
<br>
below:
<br>
<p><p>$ ps axms
<br>
...
<br>
13536  3565 0000000000000000                -                -                - -    pts/14     0:00 mpirun -n 2 ./a.out
<br>
13536     - 0000000000000000 0000000000000000 0000000000000000 0000000180015ee2 S+   -          0:00 -
<br>
13536  3566 0000000000000000                -                -                - -    pts/14     0:00 ./a.out
<br>
13536     - 0000000000000000 0000000000010000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
<br>
13536     - 0000000000000000 0000000000000000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
<br>
13536     - 0000000000000000 0000000000000000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
<br>
13536  3567 0000000000000000                -                -                - -    pts/14     0:00 ./a.out
<br>
13536     - 0000000000000000 0000000000010000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
<br>
13536     - 0000000000000000 0000000000000000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
<br>
13536     - 0000000000000000 0000000000000000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
<br>
...
<br>
<p><p>Does OpenMPI always spawn three threads for each MPI task by default? Can the number 
<br>
of threads be changed? Why is it implemented this way? Is there any case that it will 
<br>
degrade performance because of over-subscription?
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Ping Luo
105 CSA, Building #517
Texas A&amp;M University
Email: pingluo_at_[hidden]
Phone: (979)862-3107
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13062.php">Christopher Maestas: "[OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Previous message:</strong> <a href="13060.php">Jaime Perea: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13064.php">Jeff Squyres: "Re: [OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
<li><strong>Reply:</strong> <a href="13064.php">Jeff Squyres: "Re: [OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
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
