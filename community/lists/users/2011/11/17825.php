<?
$subject_val = "[OMPI users] open-mpi error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 24 15:41:35 2011" -->
<!-- isoreceived="20111124204135" -->
<!-- sent="Thu, 24 Nov 2011 21:41:28 +0100" -->
<!-- isosent="20111124204128" -->
<!-- name="Markus Stiller" -->
<!-- email="pge08fjv_at_[hidden]" -->
<!-- subject="[OMPI users] open-mpi error" -->
<!-- id="4ECEABF8.2010501_at_studserv.uni-leipzig.de" -->
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
<strong>Subject:</strong> [OMPI users] open-mpi error<br>
<strong>From:</strong> Markus Stiller (<em>pge08fjv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-24 15:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17824.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>i have some problem with mpi, i looked in the FAQ and google already but 
<br>
i couldnt find a solution.
<br>
<p>To build mpi i used this:
<br>
shell$ ./configure --prefix=/opt/mpirun
<br>
&lt;...lots of output...&gt;
<br>
shell$ make all install
<br>
<p>Worked fine so far. I am using dlpoly, and this makefile:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(MAKE) LD=&quot;mpif90 -o&quot; LDFLAGS=&quot;-O3&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=&quot;mpif90 -c&quot; FCFLAGS=&quot;-O3&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EX=$(EX) BINROOT=$(BINROOT) $(TYPE)
<br>
<p>This worked fine too,
<br>
the problem occurs when i want to run a job with
<br>
mpiexec -n 4 ./DLPOLY.Z   or
<br>
mpirun -n 4 ./DLPOLY.z
<br>
<p>I get this error:
<br>
--------------------------------------------------------------------------
<br>
[linux-6wa6:02927] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
orterun.c at line 543
<br>
markus_at_linux-6wa6:/media/808CCB178CCB069E/MD Simulations/Test Simu1&gt; 
<br>
sudo mpiexec -n 4 ./DLPOLY.Z
<br>
[linux-6wa6:03731] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_init.c at line 125
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
<p>&nbsp;&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[linux-6wa6:03731] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
orterun.c at line 543
<br>
<p><p>Some Informations:
<br>
I use Open MPI 1.4.4, Suse 64bit, AMD quadcore
<br>
<p>make check gives:
<br>
make: *** No rule to make target `check'.  Stop.
<br>
I attached the ompi_info.
<br>
<p>Thx alot for your help,
<br>
<p>regards,
<br>
Markus
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17825/ompi_info">ompi_info</a>
</ul>
<!-- attachment="ompi_info" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17824.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
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
