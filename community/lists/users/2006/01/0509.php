<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 16:14:04 2006" -->
<!-- isoreceived="20060118211404" -->
<!-- sent="Wed, 18 Jan 2006 13:13:12 -0800" -->
<!-- isosent="20060118211312" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="[O-MPI users] does btl_openib work ?" -->
<!-- id="1137618792.24430.28.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-18 16:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0518.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="0518.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0564.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have been trying for the past few days to get an MPI application (the
<br>
pallas bm) to run with ompi and openib.
<br>
<p>My environment:
<br>
===============
<br>
. two quad cpu hosts with one mlx hca each.
<br>
. the hosts are running suse10 (kernel 2.6.13) with the latest (close to
<br>
it) from openib. (rev 4904, specifically)
<br>
. opensm runs on third machine with the same os.
<br>
. openmpi is built from openmpi-1.1a1r8727.tar.bz2
<br>
<p>Behaviour:
<br>
==========
<br>
. openib seems to behave ok (ipoib works, rdma_bw and rdma_lat work, osm
<br>
works)
<br>
. I can mpirun any non-mpi program like ls, hostname, or ompi_info all
<br>
right.
<br>
. I can mpirun the pallas bm on any single host (the local one or the
<br>
other)
<br>
. I can mpirun the pallas bm on  the two nodes provided that I disable
<br>
the openib btl
<br>
. If I try to use the openib btl, the bm does not start (at best I get
<br>
the initial banner, sometimes not). On both hosts, I see that the PMB
<br>
processes (the correct number for each host) use 99% cpu.
<br>
<p>I obtained the exact same behaviour with the following src packages:
<br>
&nbsp;openmpi-1.0.1.tar.bz2
<br>
&nbsp;openmpi-1.0.2a3r8706.tar.bz2
<br>
&nbsp;openmpi-1.1a1r8727.tar.bz2
<br>
<p>Earlier on, I also did the same experiment with openmpi-1.0.1 and the
<br>
stock gen2 of the suse kernel; same thing.
<br>
<p>Configuration:
<br>
==============
<br>
For building, I tried the following variants:
<br>
<p>./configure --prefix=/opt/ompi --enable-mpi-threads --enable-progress-thread
<br>
./configure --prefix=/opt/ompi
<br>
./configure --prefix=/opt/ompi --disable-smp-locks
<br>
<p>I also tried many variations to mca-params.conf. What I normally use for trying openib is:
<br>
rmaps_base_schedule_policy = node
<br>
btl = ^tcp
<br>
mpi_paffinity_alone = 1
<br>
<p>The mpirun cmd I normally use is:
<br>
mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np 2 PMB-MPI1
<br>
<p>My machine file being:
<br>
bench1 slots=4 max-slots=4
<br>
bench2 slots=4 max-slots=4
<br>
<p>Am I doing something obviously wrong ?
<br>
<p>Thanks for any help !
<br>
<p><pre>
-- 
Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
PANTA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0518.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="0518.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0564.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
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
