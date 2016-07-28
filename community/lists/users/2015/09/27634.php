<?
$subject_val = "[OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 15:57:30 2015" -->
<!-- isoreceived="20150920195730" -->
<!-- sent="Sun, 20 Sep 2015 15:57:24 -0400" -->
<!-- isosent="20150920195724" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?" -->
<!-- id="20150920195724.GQ11997_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-20 15:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Reply:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While debugging a problem that is causing emission of a non-fatal OpenMPI error
<br>
message to stderr, the error message is followed by a line similar to the
<br>
following (I have help message aggregation turned on):
<br>
<p>[myhost:10008] 17 more processes have sent help message some_file.txt / blah blah failed
<br>
<p>The job that I am running is started as a single process (via SLURM using PMI)
<br>
that spawns 2 processes via MPI_Spawn; the number of processes reported in the
<br>
above line, however, is much larger than 2. Why would the number of processes
<br>
reporting an error be so big? When I examine the MPI processes in real time as they
<br>
run (e.g., via top), there never appear to be that many processes running.
<br>
<p>I'm using OpenMPI 1.10.0 built on Ubuntu 14.04.3; as indicated by ompi_info, I
<br>
don't have multiple MPI threads enabled:
<br>
<p>posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Reply:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
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
