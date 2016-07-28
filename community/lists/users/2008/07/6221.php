<?
$subject_val = "[OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 13:45:31 2008" -->
<!-- isoreceived="20080730174531" -->
<!-- sent="Wed, 30 Jul 2008 10:45:16 -0700" -->
<!-- isosent="20080730174516" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="[OMPI users] Missing F90 modules" -->
<!-- id="4890A8AC.2070009_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> [OMPI users] Missing F90 modules<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 13:45:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6220.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6224.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm attempting to move to OpenMPI from another MPICH-derived 
<br>
implementation. I compiled openmpi 1.2.6 using the following configure:
<br>
<p>./configure --build=x86_64-redhat-linux-gnu 
<br>
--host=x86_64-redhat-linux-gnu --target=x86_64-redhat-linux-gnu 
<br>
--program-prefix= --prefix=/usr/mpi/pathscale/openmpi-1.2.6 
<br>
--exec-prefix=/usr/mpi/pathscale/openmpi-1.2.6 
<br>
--bindir=/usr/mpi/pathscale/openmpi-1.2.6/bin 
<br>
--sbindir=/usr/mpi/pathscale/openmpi-1.2.6/sbin 
<br>
--sysconfdir=/usr/mpi/pathscale/openmpi-1.2.6/etc 
<br>
--datadir=/usr/mpi/pathscale/openmpi-1.2.6/share 
<br>
--includedir=/usr/mpi/pathscale/openmpi-1.2.6/include 
<br>
--libdir=/usr/mpi/pathscale/openmpi-1.2.6/lib64 
<br>
--libexecdir=/usr/mpi/pathscale/openmpi-1.2.6/libexec 
<br>
--localstatedir=/var 
<br>
--sharedstatedir=/usr/mpi/pathscale/openmpi-1.2.6/com 
<br>
--mandir=/usr/mpi/pathscale/openmpi-1.2.6/share/man 
<br>
--infodir=/usr/share/info --with-openib=/usr 
<br>
--with-openib-libdir=/usr/lib64 CC=pathcc CXX=pathCC F77=pathf90 
<br>
FC=pathf90 --with-psm-dir=/usr --enable-mpirun-prefix-by-default 
<br>
--with-mpi-f90-size=large
<br>
<p>It looks like there is a single MPI.mod generated upon compilation and 
<br>
installation. Is this normal? I have a user complaining that MPI1.mod, 
<br>
MPI2.mod, and the f90base directory among others are missing (and thus 
<br>
the installation is incomplete). Are these modules provided by OpenMPI?
<br>
<p>I see in the configure help that the f90 bindings are enabled by default 
<br>
so I didn't add the &quot;--enable-mpi-f90&quot; option.
<br>
<p>Scot
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6220.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6224.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
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
