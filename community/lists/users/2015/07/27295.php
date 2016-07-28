<?
$subject_val = "[OMPI users] shared memory performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 03:19:52 2015" -->
<!-- isoreceived="20150722071952" -->
<!-- sent="Wed, 22 Jul 2015 09:19:40 +0200" -->
<!-- isosent="20150722071940" -->
<!-- name="Crisitan RUIZ" -->
<!-- email="cristian.ruiz_at_[hidden]" -->
<!-- subject="[OMPI users] shared memory performance" -->
<!-- id="55AF440C.7050202_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI users] shared memory performance<br>
<strong>From:</strong> Crisitan RUIZ (<em>cristian.ruiz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 03:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27296.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27294.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27296.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Reply:</strong> <a href="27296.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Reply:</strong> <a href="27297.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hello,
<br>
<p>I'm running OpenMPI 1.8.5 on a cluster with the following characteristics:
<br>
<p>Each node is equipped with two Intel Xeon E5-2630v3 processors (with 8 
<br>
cores each), 128 GB of RAM and a 10 Gigabit Ethernet adapter.
<br>
<p>When I run the NAS benchmarks using 8 cores in the same machine, I'm 
<br>
getting almost the same performance as using 8 machines running a mpi 
<br>
process per machine.
<br>
<p>I used the following commands:
<br>
<p>for running multi-node:
<br>
<p>mpirun -np 8 --machinefile machine_file.txt --mca btl self,sm,tcp 
<br>
--allow-run-as-root mg.C.8
<br>
<p>for running in with 8 cores:
<br>
<p>mpirun -np 8  --mca btl self,sm,tcp --allow-run-as-root mg.C.8
<br>
<p><p>I got the following results:
<br>
<p>8 cores:
<br>
<p>&nbsp;&nbsp;Mop/s total     =                 19368.43
<br>
<p>8 machines:
<br>
<p>Mop/s total     =                 19326.60
<br>
<p><p>The results are similar for other benchmarks. Is this behavior normal? I 
<br>
was expecting to see a better behavior using 8 cores given that they use 
<br>
directly the memory to communicate.
<br>
<p>Thank you,
<br>
<p>Cristian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27296.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27294.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27296.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Reply:</strong> <a href="27296.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Reply:</strong> <a href="27297.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
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
