<?
$subject_val = "[OMPI users] Problems in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 00:40:38 2009" -->
<!-- isoreceived="20090710044038" -->
<!-- sent="Thu, 9 Jul 2009 23:40:32 -0500" -->
<!-- isosent="20090710044032" -->
<!-- name="Yin Feng" -->
<!-- email="yfeng1_at_[hidden]" -->
<!-- subject="[OMPI users] Problems in OpenMPI" -->
<!-- id="1e8c69dc0907092140x299c065ar549f81d642c5a53a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems in OpenMPI<br>
<strong>From:</strong> Yin Feng (<em>yfeng1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 00:40:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9904.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Previous message:</strong> <a href="9902.php">John R. Cary: "[OMPI users] Using openmpi within python and crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am a beginner in MPI.
<br>
<p>I ran an example code using OpenMPI and it seems work.
<br>
And then I tried a parallel example in PETSc tutorials folder (ex5).
<br>
<p>mpirun -np 4 ex5
<br>
It can do but the results are not as accurate as just running ex5.
<br>
Is that thing normal?
<br>
<p>After that, send this job to supercomputer which allocates me 4 nodes
<br>
and each node has 8 processors. When I check load on each node, I
<br>
found:
<br>
Node      LOAD     CPU
<br>
0              32           800
<br>
1               0              0
<br>
2               0              0
<br>
3               0              0
<br>
<p>But for other's job, they got
<br>
Node      LOAD
<br>
0               8
<br>
1               8
<br>
2               8
<br>
3               8
<br>
<p>It seems the master node take all the load and the speed is even lower
<br>
than it works on single processor.
<br>
<p>Does anyone have any idea about this?
<br>
<p>Thank you in advance!
<br>
<p>Sincerely,
<br>
YIN
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9904.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Previous message:</strong> <a href="9902.php">John R. Cary: "[OMPI users] Using openmpi within python and crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
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
