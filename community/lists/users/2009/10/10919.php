<?
$subject_val = "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 03:13:23 2009" -->
<!-- isoreceived="20091016071323" -->
<!-- sent="Fri, 16 Oct 2009 16:13:15 +0900" -->
<!-- isosent="20091016071315" -->
<!-- name="Hakime Seddik" -->
<!-- email="hakime_at_[hidden]" -->
<!-- subject="[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard" -->
<!-- id="DAE1B913-A32D-46A8-9224-251F988953F2_at_pop.lowtem.hokudai.ac.jp" -->
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
<strong>Subject:</strong> [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard<br>
<strong>From:</strong> Hakime Seddik (<em>hakime_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-16 03:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10920.php">nam kim: "[OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10927.php">Jeff Squyres: "Re: [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>Reply:</strong> <a href="10927.php">Jeff Squyres: "Re: [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following my previous post regarding the problems that i am having to  
<br>
compile OpenMPI 1.3.3 on Snow Leopard, I found a way to fix the problem.
<br>
<p>When I was trying to compile OpenMPI, I used the -ftree-vectorize  
<br>
compiler switch, which actually was the cause of the compilation  
<br>
failure. Removing it fixed the problem and Open MPI 1.3.3 compiles now  
<br>
fine. Note that this only affects Open MPI version 1.3 and higher.  
<br>
Using the -ftree-vectorize switch when compiling Open MPI 1.2.9 does  
<br>
not make any problem.
<br>
<p>Hope it helps, if someone else is having the same issue.
<br>
<p>Regards,
<br>
<p>Hakime Seddik
<br>
Glacier and Ice Sheet Research Group
<br>
Tel:+81-(0)90-6263-4074
<br>
email: hakime_at_[hidden]
<br>
<p>Institute of Low Temperature Science
<br>
Hokkaido University, Kita-19, Nishi-8, Kita-ku
<br>
Sapporo 060-0819. Japan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10920.php">nam kim: "[OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10927.php">Jeff Squyres: "Re: [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>Reply:</strong> <a href="10927.php">Jeff Squyres: "Re: [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
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
