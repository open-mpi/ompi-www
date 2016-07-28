<?
$subject_val = "[OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 08:10:56 2012" -->
<!-- isoreceived="20120820121056" -->
<!-- sent="Mon, 20 Aug 2012 14:11:04 +0200" -->
<!-- isosent="20120820121104" -->
<!-- name="Yann RADENAC" -->
<!-- email="Yann.Radenac_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;Connection to lifeline lost&amp;quot; when developing a new rsh agent" -->
<!-- id="50322958.9050407_at_inria.fr" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent<br>
<strong>From:</strong> Yann RADENAC (<em>Yann.Radenac_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 08:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Previous message:</strong> <a href="19960.php">EatDirt: "Re: [OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Reply:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm developing MPI support for XtreemOS (www.xtreemos.eu) so that an MPI 
<br>
program is managed as a single XtreemOS job.
<br>
To manage all processes as a single XtreemOS job, I've developed the 
<br>
program xos-createProcess that plays the role of the rsh agent 
<br>
(replacing ssh/rsh) to start a process on a remote machine that is part 
<br>
of the ones reserved for the current job.
<br>
<p>I'm running a simple hello world MPI program where each processes sends 
<br>
a string to the process 0 that itself prints them on standard output.
<br>
<p>When using OpenMPI with ssh, this program works perfectly on several 
<br>
machines.
<br>
<p>When using OpenMPI with my launcher xos-createProcess, it works with an 
<br>
MPI program of 2 processes on 2 different machines.
<br>
<p>However I cannot pass through the following error that happens when 
<br>
running an MPI program of 3 processes on 3 different machines (or any n 
<br>
processes on n different machines with n &gt;= 3).
<br>
<p>A process started by xos-createProcess on a remote machine ends with the 
<br>
following error:
<br>
<p>[paradent-5.rennes.grid5000.fr:08191] [[50627,0],2] routed:binomial: 
<br>
Connection to lifeline [[50627,0],0] lost
<br>
<p>But, process 0 is still running! lifeline should not have been lost!
<br>
Actually, process 0 is still waiting for remote process to terminate 
<br>
(checked with gdb, the initial process is calling libc's poll()).
<br>
<p><p>The run command is:
<br>
<p>-bash -c '(mpirun  --mca orte_rsh_agent xos-createProcess 
<br>
--leave-session-attached   -np 2   -host `xreservation -a $XOS_RSVID` 
<br>
mpi/hello_world_MPI  &lt; /dev/null &gt; mpirun.out) &gt;&amp; mpirun.err'
<br>
<p>Same problem with or without option --leave-session-attached.
<br>
<p><p><p>So, how is the lifeline implemented? why does it work with 2 processes 
<br>
but start failing when using 3 or more processes?
<br>
<p><p>I'm using Open MPI 1.6.
<br>
<p><p>Thanks for your help.
<br>
<p><pre>
-- 
Yann Radenac
Research Engineer, INRIA
Myriads research team, INRIA Rennes - Bretagne Atlantique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Previous message:</strong> <a href="19960.php">EatDirt: "Re: [OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Reply:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
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
