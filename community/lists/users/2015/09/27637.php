<?
$subject_val = "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 17:30:13 2015" -->
<!-- isoreceived="20150920213013" -->
<!-- sent="Sun, 20 Sep 2015 17:30:09 -0400" -->
<!-- isosent="20150920213009" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?" -->
<!-- id="20150920213009.GT11997_at_avicenna.ee.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DA42CA66-F76F-40B2-8EF8-BC974527B55E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-20 17:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27638.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>Previous message:</strong> <a href="27636.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>In reply to:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Reply:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Ralph Castain on Sun, Sep 20, 2015 at 05:08:10PM EDT:
<br>
<span class="quotelev2">&gt; &gt; On Sep 20, 2015, at 12:57 PM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; While debugging a problem that is causing emission of a non-fatal OpenMPI error
</span><br>
<span class="quotelev2">&gt; &gt; message to stderr, the error message is followed by a line similar to the
</span><br>
<span class="quotelev2">&gt; &gt; following (I have help message aggregation turned on):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [myhost:10008] 17 more processes have sent help message some_file.txt / blah blah failed
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The job that I am running is started as a single process (via SLURM using PMI)
</span><br>
<span class="quotelev2">&gt; &gt; that spawns 2 processes via MPI_Spawn; the number of processes reported in the
</span><br>
<span class="quotelev2">&gt; &gt; above line, however, is much larger than 2. Why would the number of processes
</span><br>
<span class="quotelev2">&gt; &gt; reporting an error be so big? When I examine the MPI processes in real time as they
</span><br>
<span class="quotelev2">&gt; &gt; run (e.g., via top), there never appear to be that many processes running.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm using OpenMPI 1.10.0 built on Ubuntu 14.04.3; as indicated by ompi_info, I
</span><br>
<span class="quotelev2">&gt; &gt; don't have multiple MPI threads enabled:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
</span><br>
<p><span class="quotelev1">&gt; Just to be clear: you are starting the single process using &#226;&#128;&#156;srun -n 1 ./app&#226;&#128;&#157;,
</span><br>
<span class="quotelev1">&gt; and the app calls MPI_Comm_spawn?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m not sure that&#226;&#128;&#153;s really supported&#226;&#128;&#166;I think there might be something in Slurm
</span><br>
<span class="quotelev1">&gt; behind that call, but I have no idea if it really works.
</span><br>
<p>Well, the same question applies if I don't use SLURM and launch with mpiexec -np
<br>
1. 
<br>
<p>On a closer look, it seems that the &quot;17&quot; corresponds to the number of times the
<br>
error was emitted after its occurrence regardless of how many actual MPI processes
<br>
were running (each of the MPI processes spawned by my program iterates a certain
<br>
number of times and causes the error to occur during each iteration).
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
<li><strong>Next message:</strong> <a href="27638.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>Previous message:</strong> <a href="27636.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>In reply to:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Reply:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
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
