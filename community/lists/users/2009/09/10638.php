<?
$subject_val = "[OMPI users] OpenMPI much slower than Mpich2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 05:09:03 2009" -->
<!-- isoreceived="20090914090903" -->
<!-- sent="Mon, 14 Sep 2009 11:08:58 +0200" -->
<!-- isosent="20090914090858" -->
<!-- name="Sam Verboven" -->
<!-- email="sam.verboven_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI much slower than Mpich2" -->
<!-- id="abe5240f0909140208y36bc5een97affdbb609d8016_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI much slower than Mpich2<br>
<strong>From:</strong> Sam Verboven (<em>sam.verboven_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 05:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10639.php">Jeff Squyres: "[OMPI users] Announcing Portable Hardware Locality (&quot;hwloc&quot;) -- an Open MPI sub-project"</a>
<li><strong>Previous message:</strong> <a href="10637.php">Warner Yuen: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10672.php">Jeff Squyres: "Re: [OMPI users] OpenMPI much slower than Mpich2"</a>
<li><strong>Reply:</strong> <a href="10672.php">Jeff Squyres: "Re: [OMPI users] OpenMPI much slower than Mpich2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I'm having the following problem. If I execute the exact same
<br>
application using both openmpi and mpich2, the former takes more than
<br>
2 times as long. When we compared the ganglia output we could see that
<br>
openmpi generates more than 60 percent System CPU whereas mpich2 only
<br>
has about 5, the remaining cycles all going to User CPU. This about
<br>
explains the slowdown: when using openmpi we lose more than half the
<br>
cycles to operating system overhead. We would very much like to know
<br>
why our openmpi implementation incurs such a dramatic overhead.
<br>
<p>The only reason I could think of myself is the fact that we use
<br>
bridged network interfaces on the cluster. Openmpi would not run
<br>
properly until we specified the mca command to use the br0 interface
<br>
instead of the physical eth0. Mpich2 does not require any extra
<br>
parameters.
<br>
<p>The calculations themselves are done using fortran. The operating
<br>
system is ubuntu 9.04, we have 14 dual quad core nodes and both
<br>
openmpi and mpich2 are compiled from source without any configure
<br>
options.
<br>
<p>Full command OpenMPI:
<br>
mpirun.openmpi --mca btl_tcp_if_include br0 --prefix
<br>
/usr/shares/mpi/openmpi -hostfile hostfile -np 224
<br>
/home/arickx/bin/Linux/F_me_Kl1l2_3cl_mpi_2
<br>
<p>Full command Mpich2:
<br>
mpiexec.mpich2 -machinefile machinefile -np 113
<br>
/home/arickx/bin/Linux/F_me_Kl1l2_3cl_mpi_2
<br>
<p>I appreciate any help you may be able to provide.
<br>
<p>Logs:
<br>
<a href="http://win.ua.ac.be/~svboven/config.log">http://win.ua.ac.be/~svboven/config.log</a>
<br>
<a href="http://win.ua.ac.be/~svboven/ompi_info.txt">http://win.ua.ac.be/~svboven/ompi_info.txt</a>
<br>
<p>Yours faithfully,
<br>
Sam Verboven
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10639.php">Jeff Squyres: "[OMPI users] Announcing Portable Hardware Locality (&quot;hwloc&quot;) -- an Open MPI sub-project"</a>
<li><strong>Previous message:</strong> <a href="10637.php">Warner Yuen: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10672.php">Jeff Squyres: "Re: [OMPI users] OpenMPI much slower than Mpich2"</a>
<li><strong>Reply:</strong> <a href="10672.php">Jeff Squyres: "Re: [OMPI users] OpenMPI much slower than Mpich2"</a>
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
