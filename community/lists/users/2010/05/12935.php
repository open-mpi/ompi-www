<?
$subject_val = "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 14:27:17 2010" -->
<!-- isoreceived="20100506182717" -->
<!-- sent="Thu, 6 May 2010 13:27:11 -0500" -->
<!-- isosent="20100506182711" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640E5AB6A862E_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E9838FE224683419F586D9DF46A0E256CD7249A9A_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 14:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12936.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12934.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12932.php">Richard Walsh: "[OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>Reply:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello    Richard,
<br>
Yes NWCHEM can be run on IB using 1.4.1.  If you have built openmpi with IB support. 
<br>
Note: If your IB cards are qlogic you need to compile NWCHEM with MPI-SPAWN.
<br>
Rangam
<br>
<p>Settings for my Build with MPI-SPAWN:
<br>
export ARMCI_NETWORK=MPI-SPAWN
<br>
export IB_HOME=/usr
<br>
export IB_INCLUDE=/usr/include
<br>
export IB_LIB=/usr/lib64
<br>
export IB_LIB_NAME=&quot;-libverbs -libumad -lpthread &quot;
<br>
export NWCHEM_TOP=/lustre/work/apps/nwchem-5.1.1
<br>
export NWCHEM_MODULES=&quot;venus geninterface all&quot;
<br>
export LIBMPI=&quot;-lmpi&quot;
<br>
export ARMCI_DEFAULT_SHMMAX=256
<br>
export BLASLIB=goto2_penrynp-r1.00
<br>
export BLASLOC=/lustre/work/apps/goto/
<br>
export BLASOPT=&quot;-L/lustre/work/apps/goto/ -l$BLASLIB&quot;
<br>
export CC=icc
<br>
export CFLG=&quot;-xP -fPIC&quot;
<br>
export CXX=icpc
<br>
export F77=ifort
<br>
export F90=ifort
<br>
export FC=ifort
<br>
export FL=ifort
<br>
export LARGE_FILES=TRUE
<br>
export LIB_DEFINES=-DDFLT_TOT_MEM=2147483647
<br>
export MPI_LOC=/lustre/work/apps/IB-ICC-IFORT-OPENMPI-IB/
<br>
export MPI_INCLUDE=$MPI_LOC/include
<br>
export MPI_LIB=$MPI_LOC/lib
<br>
export MPI_BIN=$MPI_LOC/bin
<br>
export NWCHEM_TARGET=LINUX64
<br>
export TARGET=LINUX64
<br>
export USE_MPI=y
<br>
<p>Setting with OPENIB
<br>
<p>export ARMCI_NETWORK=OPENIB
<br>
export IB_HOME=/usr
<br>
export IB_INCLUDE=/usr/include
<br>
export IB_LIB=/usr/lib64
<br>
export IBV_FORK_SAFE=1
<br>
export NWCHEM_TOP=/lustre/work/apps/nwchem-5.1.1
<br>
export NWCHEM_MODULES=&quot;all qm geninterface&quot;
<br>
#export LIBMPI=&quot;-lmpich -libumad -libverbs -lrdmacm -pthread&quot;
<br>
export LIBMPI=&quot;-lmpi -pthread -libumad -libverbs -lrdmacm -pthread&quot;
<br>
export ARMCI_DEFAULT_SHMMAX=256
<br>
export BLASLIB=goto2_penrynp-r1.00
<br>
export BLASLOC=/lustre/work/apps/goto/
<br>
export BLASOPT=&quot;-L/lustre/work/apps/goto/ -l$BLASLIB&quot;
<br>
export CC=icc
<br>
export CFLG=&quot;-xP -fPIC&quot;
<br>
export CXX=icpc
<br>
export F77=ifort
<br>
export F90=ifort
<br>
export FC=ifort
<br>
export FL=ifort
<br>
export GOTO_NUM_THREADS=1
<br>
export LARGE_FILES=TRUE
<br>
export LIB_DEFINES=-DDFLT_TOT_MEM=2147483647
<br>
export MA_USE_ARMCI_MEM=1
<br>
export MPI_LOC=/lustre/work/apps/IB-ICC-IFORT-OPENMPI
<br>
export MPI_INCLUDE=$MPI_LOC/include
<br>
export MPI_LIB=$MPI_LOC/lib
<br>
export MPI_BIN=$MPI_LOC/bin
<br>
export NWCHEM_TARGET=LINUX64
<br>
export OMP_NUM_THREADS=1
<br>
export TARGET=LINUX64
<br>
export USE_MPI=y
<br>
<p><p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Richard Walsh [Richard.Walsh_at_[hidden]]
<br>
Sent: Thursday, May 06, 2010 1:06 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??
<br>
<p>All,
<br>
<p>I have built NWChem successfully, and trying to run it with an
<br>
Intel built version of OpenMPI 1.4.1.  If I force to run over over
<br>
1 GigE maintenance interconnect it works, but when I try it over
<br>
the default InfiniBand communications network it fails with:
<br>
<p>--------------------------------------------------------------------------
<br>
An MPI process has executed an operation involving a call to the
<br>
&quot;fork()&quot; system call to create a child process.  Open MPI is currently
<br>
operating in a condition that could result in memory corruption or
<br>
other system errors; your MPI job may hang, crash, or produce silent
<br>
data corruption.  The use of fork() (or system() or other calls that
<br>
create child processes) is strongly discouraged.
<br>
<p>The process that invoked fork was:
<br>
<p>&nbsp;&nbsp;Local host:          gpute-2 (PID 15996)
<br>
&nbsp;&nbsp;MPI_COMM_WORLD rank: 0
<br>
<p>If you are *absolutely sure* that your application will successfully
<br>
and correctly survive a call to fork(), you may disable this warning
<br>
by setting the mpi_warn_on_fork MCA parameter to 0.
<br>
--------------------------------------------------------------------------
<br>
<p>This looks to be a known problem.  Is there I go around?  I have seen
<br>
it suggested in some places that I need to use Mellanox's version of MPI,
<br>
which is not an option and surprises me as they are a big OFED contributor.
<br>
<p>What are my options ... other than using GigE ... ??
<br>
<p>Thanks,
<br>
<p>rbw
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;Richard Walsh
<br>
&nbsp;&nbsp;&nbsp;Parallel Applications and Systems Manager
<br>
&nbsp;&nbsp;&nbsp;CUNY HPC Center, Staten Island, NY
<br>
&nbsp;&nbsp;&nbsp;718-982-3319
<br>
&nbsp;&nbsp;&nbsp;612-382-4620
<br>
<p>&nbsp;&nbsp;&nbsp;Mighty the Wizard
<br>
&nbsp;&nbsp;&nbsp;Who found me at sunrise
<br>
&nbsp;&nbsp;&nbsp;Sleeping, and woke me
<br>
&nbsp;&nbsp;&nbsp;And learn'd me Magic!
<br>
<p>Think green before you print this email.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12936.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12934.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12932.php">Richard Walsh: "[OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>Reply:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
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
