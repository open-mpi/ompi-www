<?
$subject_val = "[OMPI users]  can't run the code on Jaguar";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 17:11:29 2012" -->
<!-- isoreceived="20120305221129" -->
<!-- sent="Mon, 05 Mar 2012 16:11:22 -0600" -->
<!-- isosent="20120305221122" -->
<!-- name="bin Wang" -->
<!-- email="bighead521_at_[hidden]" -->
<!-- subject="[OMPI users]  can't run the code on Jaguar" -->
<!-- id="4F553A0A.6080404_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users]  can't run the code on Jaguar<br>
<strong>From:</strong> bin Wang (<em>bighead521_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 17:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18687.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Previous message:</strong> <a href="18685.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18687.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Reply:</strong> <a href="18687.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I'm trying to run the latest OpenMPI code on Jaguar.
<br>
(Cloned from the Open MPI Mercurial mirror of the Subversion repository)
<br>
The configuration and compilation of OpenMPI were fine, and benchmark
<br>
was also successfully compiled. I tried to launch my program using mpirun
<br>
within an interactive job, but it failed immediately.
<br>
<p>Core dump file gave me the following information.
<br>
====================Error Msg=========================
<br>
[jaguarpf-login2:15370] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local
<br>
node in file ess_singleton_module.c at line 220
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
ompi_mpi_init: orte_init failed
<br>
--&gt; Returned value Unable to start a daemon on the local node (-127) 
<br>
instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration33r environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
ompi_mpi_init: orte_init failed
<br>
--&gt; Returned &quot;Unable to start a daemon on40he local node&quot; (-127) instead 
<br>
of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[jaguarpf-login2:15370] *** An error occurred in MPI_Init
<br>
[jaguarpf-login2:15370] *** reported by process [4294967295,42949No 
<br>
process In: Line: ??   PC: ??
<br>
[jaguarpf-login2:15370] *** on a NULL communicator
<br>
[jaguarpf-login2:15370] *** Unknown error
<br>
[jaguarpf-login2:15370] *** MPI_ERRORS_ARE_FATAL (processes in this 
<br>
communicator will now abort,
<br>
[jaguarpf-login2:15370] *** and potentially your MPI job)
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
Reason:     Before MPI_INIT completed
<br>
Local host: jaguarpf-login2
<br>
PID:        15370
<br>
--------------------------------------------------------------------------
<br>
Program exited with code 01.
<br>
====================Error Msg Over=====================
<br>
<p>There are several components under ess, but I don't know why and how the
<br>
singleton component was chosen.
<br>
<p>I hope someone could help me to compile and run openmpi successfully on 
<br>
Jaguar.
<br>
<p>Any comment and suggestion will be appreciated.
<br>
<p>Thanks,
<br>
<p>--Bin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18687.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Previous message:</strong> <a href="18685.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18687.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Reply:</strong> <a href="18687.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
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
