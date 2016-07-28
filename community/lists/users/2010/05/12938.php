<?
$subject_val = "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand	interconnect ... ??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 14:41:47 2010" -->
<!-- isoreceived="20100506184147" -->
<!-- sent="Thu, 6 May 2010 14:39:18 -0400" -->
<!-- isosent="20100506183918" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand	interconnect ... ??" -->
<!-- id="5E9838FE224683419F586D9DF46A0E256CD7249A9B_at_MBOX.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9EC175F6-07C3-4CB1-B7D8-AC0955EAEC7E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand	interconnect ... ??<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 14:39:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12939.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>In reply to:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph/All,
<br>
<p>Thanks much ... will do ... I have built it with IB of course!
<br>
<p>rbw
<br>
<p>&nbsp;&nbsp;&nbsp;Richard Walsh
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
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Thursday, May 06, 2010 2:36 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand     interconnect ... ??
<br>
<p>Yeah, you just need to set the param specified in the warning message. We inserted that to ensure that people understand that IB doesn't play well with fork'd processes, so you need to be careful when doing so.
<br>
<p><p>On May 6, 2010, at 12:27 PM, Addepalli, Srirangam V wrote:
<br>
<p><span class="quotelev1">&gt; Hello    Richard,
</span><br>
<span class="quotelev1">&gt; Yes NWCHEM can be run on IB using 1.4.1.  If you have built openmpi with IB support.
</span><br>
<span class="quotelev1">&gt; Note: If your IB cards are qlogic you need to compile NWCHEM with MPI-SPAWN.
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Settings for my Build with MPI-SPAWN:
</span><br>
<span class="quotelev1">&gt; export ARMCI_NETWORK=MPI-SPAWN
</span><br>
<span class="quotelev1">&gt; export IB_HOME=/usr
</span><br>
<span class="quotelev1">&gt; export IB_INCLUDE=/usr/include
</span><br>
<span class="quotelev1">&gt; export IB_LIB=/usr/lib64
</span><br>
<span class="quotelev1">&gt; export IB_LIB_NAME=&quot;-libverbs -libumad -lpthread &quot;
</span><br>
<span class="quotelev1">&gt; export NWCHEM_TOP=/lustre/work/apps/nwchem-5.1.1
</span><br>
<span class="quotelev1">&gt; export NWCHEM_MODULES=&quot;venus geninterface all&quot;
</span><br>
<span class="quotelev1">&gt; export LIBMPI=&quot;-lmpi&quot;
</span><br>
<span class="quotelev1">&gt; export ARMCI_DEFAULT_SHMMAX=256
</span><br>
<span class="quotelev1">&gt; export BLASLIB=goto2_penrynp-r1.00
</span><br>
<span class="quotelev1">&gt; export BLASLOC=/lustre/work/apps/goto/
</span><br>
<span class="quotelev1">&gt; export BLASOPT=&quot;-L/lustre/work/apps/goto/ -l$BLASLIB&quot;
</span><br>
<span class="quotelev1">&gt; export CC=icc
</span><br>
<span class="quotelev1">&gt; export CFLG=&quot;-xP -fPIC&quot;
</span><br>
<span class="quotelev1">&gt; export CXX=icpc
</span><br>
<span class="quotelev1">&gt; export F77=ifort
</span><br>
<span class="quotelev1">&gt; export F90=ifort
</span><br>
<span class="quotelev1">&gt; export FC=ifort
</span><br>
<span class="quotelev1">&gt; export FL=ifort
</span><br>
<span class="quotelev1">&gt; export LARGE_FILES=TRUE
</span><br>
<span class="quotelev1">&gt; export LIB_DEFINES=-DDFLT_TOT_MEM=2147483647
</span><br>
<span class="quotelev1">&gt; export MPI_LOC=/lustre/work/apps/IB-ICC-IFORT-OPENMPI-IB/
</span><br>
<span class="quotelev1">&gt; export MPI_INCLUDE=$MPI_LOC/include
</span><br>
<span class="quotelev1">&gt; export MPI_LIB=$MPI_LOC/lib
</span><br>
<span class="quotelev1">&gt; export MPI_BIN=$MPI_LOC/bin
</span><br>
<span class="quotelev1">&gt; export NWCHEM_TARGET=LINUX64
</span><br>
<span class="quotelev1">&gt; export TARGET=LINUX64
</span><br>
<span class="quotelev1">&gt; export USE_MPI=y
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting with OPENIB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export ARMCI_NETWORK=OPENIB
</span><br>
<span class="quotelev1">&gt; export IB_HOME=/usr
</span><br>
<span class="quotelev1">&gt; export IB_INCLUDE=/usr/include
</span><br>
<span class="quotelev1">&gt; export IB_LIB=/usr/lib64
</span><br>
<span class="quotelev1">&gt; export IBV_FORK_SAFE=1
</span><br>
<span class="quotelev1">&gt; export NWCHEM_TOP=/lustre/work/apps/nwchem-5.1.1
</span><br>
<span class="quotelev1">&gt; export NWCHEM_MODULES=&quot;all qm geninterface&quot;
</span><br>
<span class="quotelev1">&gt; #export LIBMPI=&quot;-lmpich -libumad -libverbs -lrdmacm -pthread&quot;
</span><br>
<span class="quotelev1">&gt; export LIBMPI=&quot;-lmpi -pthread -libumad -libverbs -lrdmacm -pthread&quot;
</span><br>
<span class="quotelev1">&gt; export ARMCI_DEFAULT_SHMMAX=256
</span><br>
<span class="quotelev1">&gt; export BLASLIB=goto2_penrynp-r1.00
</span><br>
<span class="quotelev1">&gt; export BLASLOC=/lustre/work/apps/goto/
</span><br>
<span class="quotelev1">&gt; export BLASOPT=&quot;-L/lustre/work/apps/goto/ -l$BLASLIB&quot;
</span><br>
<span class="quotelev1">&gt; export CC=icc
</span><br>
<span class="quotelev1">&gt; export CFLG=&quot;-xP -fPIC&quot;
</span><br>
<span class="quotelev1">&gt; export CXX=icpc
</span><br>
<span class="quotelev1">&gt; export F77=ifort
</span><br>
<span class="quotelev1">&gt; export F90=ifort
</span><br>
<span class="quotelev1">&gt; export FC=ifort
</span><br>
<span class="quotelev1">&gt; export FL=ifort
</span><br>
<span class="quotelev1">&gt; export GOTO_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; export LARGE_FILES=TRUE
</span><br>
<span class="quotelev1">&gt; export LIB_DEFINES=-DDFLT_TOT_MEM=2147483647
</span><br>
<span class="quotelev1">&gt; export MA_USE_ARMCI_MEM=1
</span><br>
<span class="quotelev1">&gt; export MPI_LOC=/lustre/work/apps/IB-ICC-IFORT-OPENMPI
</span><br>
<span class="quotelev1">&gt; export MPI_INCLUDE=$MPI_LOC/include
</span><br>
<span class="quotelev1">&gt; export MPI_LIB=$MPI_LOC/lib
</span><br>
<span class="quotelev1">&gt; export MPI_BIN=$MPI_LOC/bin
</span><br>
<span class="quotelev1">&gt; export NWCHEM_TARGET=LINUX64
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; export TARGET=LINUX64
</span><br>
<span class="quotelev1">&gt; export USE_MPI=y
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Richard Walsh [Richard.Walsh_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 06, 2010 1:06 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built NWChem successfully, and trying to run it with an
</span><br>
<span class="quotelev1">&gt; Intel built version of OpenMPI 1.4.1.  If I force to run over over
</span><br>
<span class="quotelev1">&gt; 1 GigE maintenance interconnect it works, but when I try it over
</span><br>
<span class="quotelev1">&gt; the default InfiniBand communications network it fails with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev1">&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev1">&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev1">&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev1">&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev1">&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process that invoked fork was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Local host:          gpute-2 (PID 15996)
</span><br>
<span class="quotelev1">&gt;  MPI_COMM_WORLD rank: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are *absolutely sure* that your application will successfully
</span><br>
<span class="quotelev1">&gt; and correctly survive a call to fork(), you may disable this warning
</span><br>
<span class="quotelev1">&gt; by setting the mpi_warn_on_fork MCA parameter to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks to be a known problem.  Is there I go around?  I have seen
</span><br>
<span class="quotelev1">&gt; it suggested in some places that I need to use Mellanox's version of MPI,
</span><br>
<span class="quotelev1">&gt; which is not an option and surprises me as they are a big OFED contributor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are my options ... other than using GigE ... ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Richard Walsh
</span><br>
<span class="quotelev1">&gt;   Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt;   CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt;   718-982-3319
</span><br>
<span class="quotelev1">&gt;   612-382-4620
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Mighty the Wizard
</span><br>
<span class="quotelev1">&gt;   Who found me at sunrise
</span><br>
<span class="quotelev1">&gt;   Sleeping, and woke me
</span><br>
<span class="quotelev1">&gt;   And learn'd me Magic!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Think green before you print this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Think green before you print this email.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12939.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>In reply to:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
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
