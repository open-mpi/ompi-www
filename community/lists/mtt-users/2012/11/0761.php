<?
$subject_val = "[MTT users] test example connectivity_c cannot run on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 02:39:35 2012" -->
<!-- isoreceived="20121126073935" -->
<!-- sent="Mon, 26 Nov 2012 15:39:25 +0800 (GMT+08:00)" -->
<!-- isosent="20121126073925" -->
<!-- name="&#184;&#223;&#208;&#199;" -->
<!-- email="xinggao_at_[hidden]" -->
<!-- subject="[MTT users] test example connectivity_c cannot run on multiple nodes" -->
<!-- id="120e435.48be.13b3ba805da.Coremail.xinggao_at_impcas.ac.cn" -->
<!-- charset="GBK" -->
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
<strong>Subject:</strong> [MTT users] test example connectivity_c cannot run on multiple nodes<br>
<strong>From:</strong> &#184;&#223;&#208;&#199; (<em>xinggao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-26 02:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/02/0762.php">Denis Wollenhaupt: "[MTT users] Apply for an MTT username/password"</a>
<li><strong>Previous message:</strong> <a href="0760.php">Jeff Squyres: "Re: [MTT users] [OMPI devel] Open MPI MTT is moving"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear mtt-users,
<br>
<p>Recently I installed openmpi version 1.6.3 under my user home directory. After installation, I run the test examples under ~openmpi-1.6.3/examples. There is no problem when running hello_c/cxx/f77/f90. But when I try to run ring_c/cxx/f77/f90 and connectivity_c, I got problems. I chose two nodes (named node20 and node30, each node has 8 cores), and tried to run &quot;mpirun -np 2 connectivity_c&quot; after login onto those two nodes, I got message saying &quot;connectivity test on 2 processes passed&quot;. There is no problem. Then I tried non-interactive test by running &quot;ssh node20/node30 mpirun -np 2 connectivity_c&quot; from server, there is no problem, either. I also tried to do this test by defining a machinefile &quot;mpirun -np 2 --hostfile myhostfile.txt connectivity_c&quot; with myhostfile.txt containing either only node20 with slots=2 or only node30 with slots=2, the test passed with no problem either. However, if I contain both node20 and node30 in myhostfile.txt, the program fails. (The program hangs there, when I run ring_c, the <br>
program hangs on the output line &quot;Process 0 decremented value: 9&quot;).
<br>
<p>Has anybody ever met this kind of problem? And What should I check to solve this problem? Attached please find the ompi_info result.
<br>
<p>Thanks in advance!
<br>
<p>Xing
<br>
<p><p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0761/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0761/openmpi-info.tar">openmpi-info.tar</a>
</ul>
<!-- attachment="openmpi-info.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/02/0762.php">Denis Wollenhaupt: "[MTT users] Apply for an MTT username/password"</a>
<li><strong>Previous message:</strong> <a href="0760.php">Jeff Squyres: "Re: [MTT users] [OMPI devel] Open MPI MTT is moving"</a>
<!-- nextthread="start" -->
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
