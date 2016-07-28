<?
$subject_val = "[OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 07:08:17 2010" -->
<!-- isoreceived="20101004110817" -->
<!-- sent="Mon, 4 Oct 2010 12:08:10 +0100" -->
<!-- isosent="20101004110810" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="[OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="29BFC896-F983-47DF-92F3-458848BCBE23_at_warwick.ac.uk" -->
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
<strong>From:</strong> Chris Jewell (<em>chris.jewell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 07:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14364.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14362.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14364.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14364.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="14383.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14745.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14749.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14752.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14755.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14757.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14758.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Firstly, hello to the mailing list for the first time!  Secondly, sorry for the non-descript subject line, but I couldn't really think how to be more specific!  
<br>
<p>Anyway, I am currently having a problem getting OpenMPI to work within my installation of SGE 6.2u5.  I compiled OpenMPI 1.4.2 from source, and installed under /usr/local/packages/openmpi-1.4.2.  Software on my system is controlled by the Modules framework which adds the bin and lib directories to PATH and LD_LIBRARY_PATH respectively when a user is connected to an execution node.  I configured a parallel environment in which OpenMPI is to be used: 
<br>
<p>pe_name            mpi
<br>
slots              16
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $round_robin
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary FALSE
<br>
<p>I then tried a simple job submission script:
<br>
<p>#!/bin/bash
<br>
#
<br>
#$ -S /bin/bash
<br>
. /etc/profile
<br>
module add ompi gcc
<br>
mpirun hostname
<br>
<p>If the parallel environment runs within one execution host (8 slots per host), then all is fine.  However, if scheduled across  several nodes, I get an error:
<br>
<p>execv: No such file or directory
<br>
execv: No such file or directory
<br>
execv: No such file or directory
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 1629) died unexpectedly with status 1 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p><p>I'm at a loss on how to start debugging this, and I don't seem to be getting anything useful using the mpirun '-d' and '-v' switches.  SGE logs don't note anything.  Can anyone suggest either what is wrong, or how I might progress with getting more information?
<br>
<p>Many thanks,
<br>
<p><p>Chris
<br>
<p><p><p><pre>
--
Dr Chris Jewell
Department of Statistics
University of Warwick
Coventry
CV4 7AL
UK
Tel: +44 (0)24 7615 0778
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14364.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14362.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14364.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14364.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="14383.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14745.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14749.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14752.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14755.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14757.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14758.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Maybe reply:</strong> <a href="../../2010/11/14766.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
