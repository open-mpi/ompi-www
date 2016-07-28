<?
$subject_val = "[OMPI users] OpenMPI does not see other nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 06:26:41 2011" -->
<!-- isoreceived="20110121112641" -->
<!-- sent="Fri, 21 Jan 2011 12:26:35 +0100 (CET)" -->
<!-- isosent="20110121112635" -->
<!-- name="Steffen Brinkmann" -->
<!-- email="brinkmann_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI does not see other nodes" -->
<!-- id="11257436.15973.1295609195802.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI does not see other nodes<br>
<strong>From:</strong> Steffen Brinkmann (<em>brinkmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 06:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15391.php">Nico Mittenzwey: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Previous message:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15391.php">Nico Mittenzwey: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Reply:</strong> <a href="15391.php">Nico Mittenzwey: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Reply:</strong> <a href="15396.php">Gus Correa: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I have installed OpenMPI on a cluster consisting of ~30 nodes with 16 Xeon cores each. NFS is set up and working. For testing I have installed locally with
<br>
<p>./configure --prefix=/home_dir/openmpi-1.4.3_installation/; make all install
<br>
<p>everything smooth so far. 
<br>
<p>When I run a parallel program with 
<br>
<p>/home_dir/openmpi-1.4.3_installation/bin/mpirun -n 2 ./my_parprog
<br>
<p>everything scales perfectly up to -n 16. When I go to -n 32, the execution time is the same as with -n 16. 
<br>
<p>/home_dir/openmpi-1.4.3_installation/bin/mpirun -n 32 hostname
<br>
<p>returns 32 times the same node.
<br>
<p>The program is fine (runs since years on several machines) and another mpi installation scales well, so the cluster should be ok as well.
<br>
<p>What did I do wrong???
<br>
<p>Thanks for any hint!
<br>
<p>Steffen
<br>
<p><p><pre>
--
Dr. Steffen Brinkmann
High Performance Computing Center Stuttgart (HLRS)
Nobelstra&#195;&#159;e 19
D - 70569 Stuttgart
Germany
Phone:	++49(0)711 / 685-64548
Fax:	++49(0)711 / 685-65832
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15391.php">Nico Mittenzwey: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Previous message:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15391.php">Nico Mittenzwey: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Reply:</strong> <a href="15391.php">Nico Mittenzwey: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Reply:</strong> <a href="15396.php">Gus Correa: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
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
