<?
$subject_val = "[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 14:20:04 2012" -->
<!-- isoreceived="20120131192004" -->
<!-- sent="Tue, 31 Jan 2012 12:19:57 -0700" -->
<!-- isosent="20120131191957" -->
<!-- name="Daniel Milroy" -->
<!-- email="Daniel.Milroy_at_[hidden]" -->
<!-- subject="[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2" -->
<!-- id="CAJyx1QFEJ5CGempbZJf1-ZkN+hp2FMTAtqd71RDK89FAktpX=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2<br>
<strong>From:</strong> Daniel Milroy (<em>Daniel.Milroy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 14:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="18344.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Reply:</strong> <a href="18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18353.php">Götz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have built OpenMPI 1.4.5rc2 with Intel 12.1 compilers in an HPC
<br>
environment.  We are running RHEL 5, kernel 2.6.18-238 with Intel Xeon
<br>
X5660 cpus.  You can find my build options below.  In an effort to
<br>
test the OpenMPI build, I compiled &quot;Hello world&quot; with an mpi_init call
<br>
in C and Fortran.  Mpirun of both versions on a single node results in
<br>
a segfault.  I have attached the pertinent portion of gdb's output of
<br>
the &quot;Hello world&quot; core dump.  Submitting a parallel &quot;Hello world&quot; job
<br>
to torque results in segfaults across the respective nodes.  However,
<br>
if I execute mpirun of C or Fortran &quot;Hello world&quot; following a segfault
<br>
the program will exit successfully.  Additionally, if I strace mpirun
<br>
on either a single node or on multiple nodes in parallel &quot;Hello world&quot;
<br>
runs successfully.  I am unsure how to proceed- any help would be
<br>
greatly appreciated.
<br>
<p><p>Thank you in advance,
<br>
<p>Dan Milroy
<br>
<p><p>Build options:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source /ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/iccvars.sh intel64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source /ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/ifortvars.sh
<br>
intel64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export CC=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/icc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export CXX=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/icpc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export F77=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export F90=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export FC=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/openmpi-1.4.5rc2_intel-12.1
<br>
--with-tm=/torque-2.5.8/ --enable-shared --enable-static --without-psm
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18345/GDB_hello.c_core_dump">GDB_hello.c_core_dump</a>
</ul>
<!-- attachment="GDB_hello.c_core_dump" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="18344.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Reply:</strong> <a href="18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18353.php">Götz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
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
