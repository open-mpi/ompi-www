<?
$subject_val = "[OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 17:19:58 2012" -->
<!-- isoreceived="20120127221958" -->
<!-- sent="Fri, 27 Jan 2012 17:19:50 -0500" -->
<!-- isosent="20120127221950" -->
<!-- name="Tom Bryan" -->
<!-- email="tombry_at_[hidden]" -->
<!-- subject="[OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="CB488D37.124C5%tombry_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Tom Bryan (<em>tombry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 17:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18306.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18304.php">Rodrigo Silva Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18313.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18313.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am in the process of setting up a grid engine (SGE) cluster for running
<br>
Open MPI applications.  I'll detail the set up below, but my current problem
<br>
is that this call to Span_multiple never seems to return.
<br>
<p>// Spawn all of the children processes.
<br>
_intercomm = MPI::COMM_WORLD.Spawn_multiple( _nProc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const_cast&lt;const char **&gt;(_command),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const_cast&lt;const char ***&gt;(_arg),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_maxProc, _info, 0, errCode );
<br>
<p>I'm new to both SGE and MPI, which is making this problem difficult for me
<br>
to troubleshoot.
<br>
<p>I can schedule simple (non-MPI) jobs on the SGE grid with qsub.
<br>
<p>I can use qsub to schedule multiple copies of a simple Hello World type of
<br>
application using mpirun spawn the processes in a script like this:
<br>
#!/bin/sh
<br>
#
<br>
#$ -S /bin/sh
<br>
#$ -V
<br>
#$ -pe orte 4
<br>
#$ -cwd
<br>
#$ -j yes
<br>
export LD_LIBRARY_PATH=/${VXR_STATIC}/openmpi-1.5.4/lib
<br>
mpirun -np 4 ./mpihello $*
<br>
<p>That seems to work.  The processes report the hostname where they were run,
<br>
and they appear to be scheduled on different machines in my SGE grid.
<br>
<p>The problem is with a program, mpitest, that tries to use Spawn_multiple to
<br>
launch multiple child processes.  The script that I submit to the SGE grid
<br>
looks like this:
<br>
#!/bin/sh
<br>
#
<br>
#$ -S /bin/sh
<br>
#$ -V
<br>
#$ -pe orte 1-
<br>
#$ -cwd
<br>
#$ -j yes
<br>
export LD_LIBRARY_PATH=/${VXR_STATIC}/openmpi-1.5.4/lib
<br>
./mpitest $*
<br>
<p>The mpitest program is the one that calls Spawn_multiple.  In this case, it
<br>
just tries to run multiple copies of itself.  If I restrict my SGE
<br>
configuration so that the orte parallel environment has to run all jobs on a
<br>
single host, then mpitest runs to completion, spawning 4 &quot;child&quot; processes
<br>
that are scheduled via SGE to run on the same host as the root process.  The
<br>
processes Send and Recv some messages, and the program exits.
<br>
<p>If I permit SGE to schedule jobs on multiple hosts, then the child processes
<br>
appear to be scheduled and launched.  (That is, I can see them as children
<br>
of the sge_execd and sge_shepherd processes on various machines.)  But the
<br>
original call to Spawn_multiple doesn't appear to return in the root
<br>
mpitest.  I assume that there's some problem setting up the communications
<br>
channel among the different processes, but it's possible that my mpitest
<br>
code is just buggy.  I already tried disabling the firewall on all of the
<br>
machines.  I'm not sure how else to get useful debug information at this
<br>
stage of the troubleshooting.
<br>
<p>It would be great if someone could look at the attached code and just let me
<br>
know whether what I'm doing is horribly incorrect.  If it should work, then
<br>
I can focus on systems and SGE configuration issues.  If the code is broken
<br>
and really shouldn't work, then I'd like to fix that first, of course.
<br>
<p>Thanks,
<br>
---Tom
<br>
<p><p><p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18305/mpitest.tgz">mpitest.tgz</a>
</ul>
<!-- attachment="mpitest.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18306.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18304.php">Rodrigo Silva Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18313.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18313.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
