<?
$subject_val = "[OMPI users] Running on two nodes slower than running on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 21:00:56 2014" -->
<!-- isoreceived="20140129020056" -->
<!-- sent="Wed, 29 Jan 2014 10:00:55 +0800" -->
<!-- isosent="20140129020055" -->
<!-- name="Victor" -->
<!-- email="victor.major_at_[hidden]" -->
<!-- subject="[OMPI users] Running on two nodes slower than running on one node" -->
<!-- id="CAJTHAucCtL5YZKfMzfpj+AYm1TZ003_h+BMpAYioCA+zW4rcfg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Running on two nodes slower than running on one node<br>
<strong>From:</strong> Victor (<em>victor.major_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 21:00:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23492.php">Reuti: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23490.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23492.php">Reuti: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23492.php">Reuti: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running a CFD simulation benchmark cavity3d available within
<br>
<a href="http://www.palabos.org/images/palabos_releases/palabos-v1.4r1.tgz">http://www.palabos.org/images/palabos_releases/palabos-v1.4r1.tgz</a>
<br>
<p>It is a parallel friendly Lattice Botlzmann solver library.
<br>
<p>Palabos provides benchmark results for the cavity3d on several different
<br>
platforms and variables here:
<br>
<a href="http://wiki.palabos.org/plb_wiki:benchmark:cavity_n400">http://wiki.palabos.org/plb_wiki:benchmark:cavity_n400</a>
<br>
<p>The problem that I have is that the benchmark performance on my cluster
<br>
does not scale even close to a linear scale.
<br>
<p>My cluster configuration:
<br>
<p>Node1: Dual Xeon 5560 48 Gb RAM
<br>
Node2: i5-2400 24 Gb RAM
<br>
<p>Gigabit ethernet connection on eth0
<br>
<p>OpenMPI 1.6.5 on Ubuntu 12.04.3
<br>
<p><p>Hostfile:
<br>
<p>Node1 -slots=4 -max-slots=4
<br>
Node2 -slots=4 -max-slots=4
<br>
<p>MPI command: mpirun --mca btl_tcp_if_include eth0 --hostfile
<br>
/home/mpiuser/.mpi_hostfile -np 8 ./cavity3d 400
<br>
<p>Problem:
<br>
<p>cavity3d 400
<br>
<p>When I run mpirun -np 4 on Node1 I get 35.7615 Mega site updates per second
<br>
When I run mpirun -np 4 on Node2 I get 30.7972 Mega site updates per second
<br>
When I run mpirun --mca btl_tcp_if_include eth0 --hostfile
<br>
/home/mpiuser/.mpi_hostfile -np 8 ./cavity3d 400 I get  47.3538 Mega site
<br>
updates per second
<br>
<p>I understand that there are latencies with GbE and that there is MPI
<br>
overhead, but this performance scaling still seems very poor. Are my
<br>
expectations of scaling naive, or is there actually something wrong and
<br>
fixable that will improve the scaling? Optimistically I would like each
<br>
node to add to the cluster performance, not slow it down.
<br>
<p>Things get even worse if I run asymmetric number of mpi jobs in each node.
<br>
For instance running -np 12 on Node1 is significantly faster than running
<br>
-np 16 across Node1 and Node2, thus adding Node2 actually slows down the
<br>
performance.
<br>
<p>Thanks,
<br>
<p>Victor
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23491/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23492.php">Reuti: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23490.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23492.php">Reuti: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23492.php">Reuti: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
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
