<?
$subject_val = "[OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 14:08:02 2010" -->
<!-- isoreceived="20100506180802" -->
<!-- sent="Thu, 6 May 2010 14:06:13 -0400" -->
<!-- isosent="20100506180613" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="[OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??" -->
<!-- id="5E9838FE224683419F586D9DF46A0E256CD7249A9A_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 14:06:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12933.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12935.php">Addepalli, Srirangam V: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>Reply:</strong> <a href="12935.php">Addepalli, Srirangam V: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12933.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12935.php">Addepalli, Srirangam V: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>Reply:</strong> <a href="12935.php">Addepalli, Srirangam V: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
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
