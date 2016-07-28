<?
$subject_val = "Re: [OMPI users] open-mpi error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 24 16:08:07 2011" -->
<!-- isoreceived="20111124210807" -->
<!-- sent="Thu, 24 Nov 2011 21:08:25 -0000" -->
<!-- isosent="20111124210825" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi error" -->
<!-- id="000001ccaaed$35e62cb0$a1b28610$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ECEABF8.2010501_at_studserv.uni-leipzig.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi error<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-24 16:08:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17827.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17825.php">Markus Stiller: "[OMPI users] open-mpi error"</a>
<li><strong>In reply to:</strong> <a href="17825.php">Markus Stiller: "[OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17827.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17827.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17828.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I get the same error while linking against home built 1.5.4 openmpi libs on
<br>
win32.
<br>
I didn't get this error against the prebuilt libs.
<br>
<p>I see you use Suse. There probably is a openmpi.rpm or openmpi.dpkg already
<br>
available for Suse which contains the libraries and you could link against
<br>
those and that may work
<br>
<p>MM
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Markus Stiller
<br>
Sent: 24 November 2011 20:41
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] open-mpi error
<br>
<p>Hello,
<br>
<p>i have some problem with mpi, i looked in the FAQ and google already but i
<br>
couldnt find a solution.
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
orterun.c at line 543 markus_at_linux-6wa6:/media/808CCB178CCB069E/MD
<br>
Simulations/Test Simu1&gt; sudo mpiexec -n 4 ./DLPOLY.Z [linux-6wa6:03731]
<br>
[[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at
<br>
line 125
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can fail
<br>
during orte_init; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17827.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17825.php">Markus Stiller: "[OMPI users] open-mpi error"</a>
<li><strong>In reply to:</strong> <a href="17825.php">Markus Stiller: "[OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17827.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17827.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17828.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
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
