<?
$subject_val = "[OMPI users] error running with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 16:00:11 2013" -->
<!-- isoreceived="20130620200011" -->
<!-- sent="Thu, 20 Jun 2013 22:00:01 +0200" -->
<!-- isosent="20130620200001" -->
<!-- name="Lorenzo Don&#224;" -->
<!-- email="lorechimica91_at_[hidden]" -->
<!-- subject="[OMPI users] error running with mpirun" -->
<!-- id="BLU0-SMTP330FC3BF691B74AB81DBB34CB8E0_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] error running with mpirun<br>
<strong>From:</strong> Lorenzo Don&#224; (<em>lorechimica91_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 16:00:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22163.php">Claire Williams: "[OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22161.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error running with mpirun"</a>
<li><strong>Reply:</strong> <a href="22185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error running with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all that help me: THANKS for your patience with me.
<br>
I was able to compile with open MPI:
<br>
but now I found this error message running programs copiled with open MPI:
<br>
<p>A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      MacBook-Pro-di-Lorenzo-Dona.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-di-Lorenzo-Dona.local:34123] [[34784,0],0] ORTE_ERROR_LOG: Error in file ess_hnp_module.c at line 360
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
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-di-Lorenzo-Dona.local:34122] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 428
<br>
[MacBook-Pro-di-Lorenzo-Dona.local:34122] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 211
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
<p>&nbsp;&nbsp;orte_ess_init failed
<br>
&nbsp;&nbsp;--&gt; Returned value Unable to start a daemon on the local node (-127) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-127) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-di-Lorenzo-Dona:34122] *** An error occurred in MPI_Init
<br>
[MacBook-Pro-di-Lorenzo-Dona:34122] *** reported by process [4294967295,4294967295]
<br>
[MacBook-Pro-di-Lorenzo-Dona:34122] *** on a NULL communicator
<br>
[MacBook-Pro-di-Lorenzo-Dona:34122] *** Unknown error
<br>
[MacBook-Pro-di-Lorenzo-Dona:34122] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[MacBook-Pro-di-Lorenzo-Dona:34122] ***    and potentially your MPI job)
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: MacBook-Pro-di-Lorenzo-Dona.local
<br>
&nbsp;&nbsp;PID:        34122
<br>
--------------------------------------------------------------------------
<br>
MacBook-Pro-di-Lorenzo-Dona:v1 lorenzodona$ export LD_LIBRARY_PATH=/Users/lorenzodona/Desktop/openmpi-1.7.1/bin/lib:$LD_LIBRARY_PATH
<br>
MacBook-Pro-di-Lorenzo-Dona:v1 lorenzodona$ mpirun -np 1 /Users/lorenzodona/Downloads/abinit-7.2.2/src/98_main/abinit &lt;t4x.files
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      MacBook-Pro-di-Lorenzo-Dona.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-di-Lorenzo-Dona.local:34143] [[34804,0],0] ORTE_ERROR_LOG: Error in file ess_hnp_module.c at line 360
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
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-di-Lorenzo-Dona.local:34142] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 428
<br>
[MacBook-Pro-di-Lorenzo-Dona.local:34142] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 211
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
<p>&nbsp;&nbsp;orte_ess_init failed
<br>
&nbsp;&nbsp;--&gt; Returned value Unable to start a daemon on the local node (-127) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-127) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-di-Lorenzo-Dona:34142] *** An error occurred in MPI_Init
<br>
[MacBook-Pro-di-Lorenzo-Dona:34142] *** reported by process [4294967295,4294967295]
<br>
[MacBook-Pro-di-Lorenzo-Dona:34142] *** on a NULL communicator
<br>
[MacBook-Pro-di-Lorenzo-Dona:34142] *** Unknown error
<br>
[MacBook-Pro-di-Lorenzo-Dona:34142] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[MacBook-Pro-di-Lorenzo-Dona:34142] ***    and potentially your MPI job)
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: MacBook-Pro-di-Lorenzo-Dona.local
<br>
&nbsp;&nbsp;PID:        34142
<br>
--------------------------------------------------------------------------
<br>
MacBook-Pro-di-Lorenzo-Dona:v1 lorenzodona$ mpirun -np 1 /Users/lorenzodona/Downloads/abinit-7.2.2/src/98_main/abinit &lt;t4x.files
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      MacBook-Pro-di-Lorenzo-Dona.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-di-Lorenzo-Dona.local:34148] [[34767,0],0] ORTE_ERROR_LOG: Error in file ess_hnp_module.c at line 360
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
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-di-Lorenzo-Dona.local:34147] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 428
<br>
[MacBook-Pro-di-Lorenzo-Dona.local:34147] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 211
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
<p>&nbsp;&nbsp;orte_ess_init failed
<br>
&nbsp;&nbsp;--&gt; Returned value Unable to start a daemon on the local node (-127) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-127) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-di-Lorenzo-Dona:34147] *** An error occurred in MPI_Init
<br>
[MacBook-Pro-di-Lorenzo-Dona:34147] *** reported by process [4294967295,4294967295]
<br>
[MacBook-Pro-di-Lorenzo-Dona:34147] *** on a NULL communicator
<br>
[MacBook-Pro-di-Lorenzo-Dona:34147] *** Unknown error
<br>
[MacBook-Pro-di-Lorenzo-Dona:34147] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[MacBook-Pro-di-Lorenzo-Dona:34147] ***    and potentially your MPI job)
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: MacBook-Pro-di-Lorenzo-Dona.local
<br>
&nbsp;&nbsp;PID:        34147
<br>
<p>Can you help me?
<br>
Thans again for your patince and help.
<br>
Dearly lorenzo.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22163.php">Claire Williams: "[OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22161.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error running with mpirun"</a>
<li><strong>Reply:</strong> <a href="22185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error running with mpirun"</a>
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
