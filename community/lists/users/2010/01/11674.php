<?
$subject_val = "[OMPI users] Dual quad core Opteron hangs on Bcast.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 01:02:30 2010" -->
<!-- isoreceived="20100104060230" -->
<!-- sent="Mon, 04 Jan 2010 01:04:32 -0500" -->
<!-- isosent="20100104060432" -->
<!-- name="Louis Rossi" -->
<!-- email="rossi_at_[hidden]" -->
<!-- subject="[OMPI users] Dual quad core Opteron hangs on Bcast." -->
<!-- id="4B4184F0.3090205_at_math.udel.edu" -->
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
<strong>Subject:</strong> [OMPI users] Dual quad core Opteron hangs on Bcast.<br>
<strong>From:</strong> Louis Rossi (<em>rossi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 01:04:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11673.php">chih lee: "[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Reply:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Maybe reply:</strong> <a href="11680.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Reply:</strong> <a href="11684.php">Matthew MacManes: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Maybe reply:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having a problem with BCast hanging on a dual quad core Opteron 
<br>
(2382, 2.6GHz, Quad Core, 4 x 512KB L2, 6MB L3 Cache) system running 
<br>
FC11 with openmpi-1.4.  The LD_LIBRARY_PATH and PATH variables are 
<br>
correctly set.  I have used the FC11 rpm distribution of openmpi and 
<br>
built openmpi-1.4 locally with the same results.  The problem was first 
<br>
observed in a larger reliable CFD code, but I can create the problem 
<br>
with a simple demo code (attached).  The code attempts to execute 2000 
<br>
pairs of broadcasts.
<br>
<p>The hostfile contains a single line
<br>
&lt;machinename&gt; slots=8
<br>
<p>If I run it with 4 cores or fewer, the code will run fine.
<br>
<p>If I run it with 5 cores or more, it will hang some of the time after 
<br>
successfully executing several hundred broadcasts.  The number varies 
<br>
from run to run.  The code usually finishes with 5 cores.  The 
<br>
probability of hanging seems to increase with the number of nodes.  The 
<br>
syntax I use is simple.
<br>
<p>mpiexec -machinefile hostfile -np 5 bcast_example
<br>
<p>There was some discussion of a similar problem on the user list, but I 
<br>
could not find a resolution.  I have tried setting the processor 
<br>
affinity (--mca mpi_paffinity_alone 1).  I have tried varying the 
<br>
broadcast algorithm (--mca coll_tuned_bcast_algorithm 1-6).  I have also 
<br>
tried excluding (-mca oob_tcp_if_exclude) my eth1 interface (see 
<br>
ifconfig.txt attached) which is not connected to anything.  None of 
<br>
these changed the outcome.
<br>
<p>Any thoughts or suggestions would be appreciated.
<br>
<p><pre>
-- 
&quot;Through nonaction, no action is left undone.&quot; --Lao Tzu
Louis F. Rossi				rossi_at_[hidden]
Department of Mathematical Sciences	<a href="http://www.math.udel.edu/~rossi">http://www.math.udel.edu/~rossi</a>
University of Delaware			(302) 831-1880 (voice)
Newark, DE 19716			(302) 831-4511 (fax)



</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11674/bcast_example.c.gz">bcast_example.c.gz</a>
</ul>
<!-- attachment="bcast_example.c.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11674/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11674/ifconfig.txt.gz">ifconfig.txt.gz</a>
</ul>
<!-- attachment="ifconfig.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11673.php">chih lee: "[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Reply:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Maybe reply:</strong> <a href="11680.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Reply:</strong> <a href="11684.php">Matthew MacManes: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Maybe reply:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
