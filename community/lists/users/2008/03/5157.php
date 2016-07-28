<?
$subject_val = "[OMPI users] Problem: openmpi using lam";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 11:31:12 2008" -->
<!-- isoreceived="20080307163112" -->
<!-- sent="Fri, 07 Mar 2008 17:31:04 +0100" -->
<!-- isosent="20080307163104" -->
<!-- name="Justus Schwabedal" -->
<!-- email="justus.schwabedal_at_[hidden]" -->
<!-- subject="[OMPI users] Problem: openmpi using lam" -->
<!-- id="20080307163104.238790_at_gmx.net" -->
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
<strong>Subject:</strong> [OMPI users] Problem: openmpi using lam<br>
<strong>From:</strong> Justus Schwabedal (<em>justus.schwabedal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-07 11:31:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5158.php">Brock Palen: "Re: [OMPI users] eager limits?"</a>
<li><strong>Previous message:</strong> <a href="5156.php">Jeff Pummill: "[OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5159.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Reply:</strong> <a href="5159.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Community,
<br>
I need advise to get openmpi to work using lam. For testing I installed it on two machines running opensuse10.3 (both atholon 64) connected via ethernet. I then try to run a test script &quot;hello.x&quot; with the following commands:
<br>
jus_at_cusp:~/Code/Spielwiese/Mpi&gt; make hello
<br>
mpicc hello.c -o hello.x
<br>
jus_at_cusp:~/Code/Spielwiese/Mpi&gt; lamboot mfile
<br>
<p>LAM 7.1.4/MPI 2 C++/ROMIO - Indiana University
<br>
<p>Enter passphrase for key '/cusp/jus/.ssh/id_rsa':
<br>
Enter passphrase for key '/cusp/jus/.ssh/id_rsa':
<br>
jus_at_cusp:~/Code/Spielwiese/Mpi&gt; lamnodes
<br>
n0      cusp:1:origin,this_node
<br>
n1      neutrino.stat.physik.uni-potsdam.de:1:
<br>
jus_at_cusp:~/Code/Spielwiese/Mpi&gt; mpirun -np 2 hello.x
<br>
Process 0 on cusp out of 2
<br>
Process 1 on cusp out of 2
<br>
<p>The jobs are thus wrapped only on the node &quot;cusp&quot;, not on both. I have no clue why this is.
<br>
Thanks, Justus
<br>
<pre>
-- 
Psst! Geheimtipp: Online Games kostenlos spielen bei den GMX Free Games! 
<a href="http://games.entertainment.gmx.net/de/entertainment/games/free">http://games.entertainment.gmx.net/de/entertainment/games/free</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5158.php">Brock Palen: "Re: [OMPI users] eager limits?"</a>
<li><strong>Previous message:</strong> <a href="5156.php">Jeff Pummill: "[OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5159.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Reply:</strong> <a href="5159.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
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
