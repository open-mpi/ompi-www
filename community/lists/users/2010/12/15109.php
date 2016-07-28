<?
$subject_val = "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 11:55:19 2010" -->
<!-- isoreceived="20101213165519" -->
<!-- sent="Mon, 13 Dec 2010 08:55:15 -0800" -->
<!-- isosent="20101213165515" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu" -->
<!-- id="E1PSBgB-0006tP-Si_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] curious behavior during wait for broadcast: 100%	cpu" -->
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
<strong>Subject:</strong> Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 11:55:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15110.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Previous message:</strong> <a href="15108.php">Riccardo Murri: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15125.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15125.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Bottom line for users: the results remain the same. If no other
</span><br>
process wants time, you'll continue to see near 100% utilization even if
<br>
we yield because we will always poll for some time before deciding to yield.
<br>
<p>Not surprisingly, I am seeing this with recv/send too, at least when
<br>
nothing else is running.  This is true even though all workers are on
<br>
different nodes (so no need for shared memory connection between them).
<br>
<p>Is there a tool in openmpi that will reveal how much &quot;spin time&quot; the
<br>
processes are using?  The previous version of the program I'm currently
<br>
working on used PVM, and for that implementation gstat, top, etc.
<br>
provided a good idea of the percent activity on the compute nodes.  Not
<br>
so here.  At the moment our cluster is heterogeneous with 3 nodes about
<br>
3X faster than the other 20.  Because of a lack of load balancing
<br>
(that's what I am trying to address now) the fast nodes must be idle
<br>
around 60% of the time, since they will finish their task long before
<br>
the other nodes, but I can't see it, can you?  Here are the relevant
<br>
columns from one gstat reading, the idle values jump around between
<br>
machines with no apparent pattern.  The 3 faster ones are 02, 05, and
<br>
15, but no way to tell that from this data:
<br>
<p>[  User,  Nice, System, Idle, Wio]
<br>
01 [  49.7,   0.0,  50.3,   0.0,   0.0]
<br>
02 [  41.4,   0.0,  58.6,   0.0,   0.0]
<br>
03 [  43.2,   0.0,  49.7,   7.0,   0.0]
<br>
04 [  38.8,   0.0,  46.0,  15.2,   0.0]
<br>
05 [  38.6,   0.0,  46.4,  15.0,   0.0]
<br>
06 [  48.3,   0.0,  51.7,   0.0,   0.0]
<br>
07 [  38.5,   0.0,  46.6,  14.9,   0.0]
<br>
08 [  43.8,   0.0,  51.3,   4.8,   0.0]
<br>
09 [  44.9,   0.0,  48.8,   6.3,   0.0]
<br>
10 [  48.9,   0.0,  49.1,   2.0,   0.0]
<br>
11 [  50.7,   0.0,  49.3,   0.0,   0.0]
<br>
12 [  46.8,   0.0,  53.2,   0.0,   0.0]
<br>
13 [  48.4,   0.0,  51.6,   0.0,   0.0]
<br>
14 [  44.2,   0.0,  48.2,   7.6,   0.0]
<br>
15 [  43.3,   0.0,  56.7,   0.0,   0.0]
<br>
16 [  44.7,   0.0,  50.3,   5.0,   0.0]
<br>
17 [  42.8,   0.0,  57.2,   0.0,   0.0]
<br>
18 [  50.7,   0.0,  49.3,   0.0,   0.0]
<br>
19 [  46.9,   0.0,  45.2,   7.9,   0.0]
<br>
20 [  46.0,   0.0,  48.9,   5.1,   0.0]
<br>
<p>Top is even less help, it just shows the worker process on each node at
<br>
<span class="quotelev1">&gt;98% CPU.
</span><br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15110.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Previous message:</strong> <a href="15108.php">Riccardo Murri: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15125.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15125.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
