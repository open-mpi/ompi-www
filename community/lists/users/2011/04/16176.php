<?
$subject_val = "Re: [OMPI users] SGE and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 20:01:18 2011" -->
<!-- isoreceived="20110407000118" -->
<!-- sent="Wed, 6 Apr 2011 17:01:11 -0700" -->
<!-- isosent="20110407000111" -->
<!-- name="Jason Palmer" -->
<!-- email="japalmer29_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openmpi" -->
<!-- id="053501cbf4b6$e839abf0$b8ad03d0$_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE and openmpi<br>
<strong>From:</strong> Jason Palmer (<em>japalmer29_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 20:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16175.php">Jason Palmer: "[OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Reply:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Btw, I did compile openmpi with the --with-sge flag.
<br>
<p>I am able to compile a test program using openf90 with no errors or
<br>
warnings. But when I try to run a test program that just calls
<br>
MPI_INIT(ierr), then MPI_COMM_RANK(ierr), I get the following, whether
<br>
static or linked, and whether run with mpirun or directly:
<br>
<p>[juggling.ucsd.edu:20218] *** An error occurred in MPI_Comm_rank
<br>
[juggling.ucsd.edu:20218] *** on communicator MPI_COMM_WORLD
<br>
[juggling.ucsd.edu:20218] *** MPI_ERR_COMM: invalid communicator
<br>
[juggling.ucsd.edu:20218] *** MPI_ERRORS_ARE_FATAL (your MPI job will now
<br>
abort)
<br>
<p>Is there something  missing in the linux or parallel environment settings?
<br>
Thanks.
<br>
<p>-----Original Message-----
<br>
From: Jason Palmer [mailto:japalmer29_at_[hidden]] 
<br>
Sent: Wednesday, April 06, 2011 4:09 PM
<br>
To: 'Open MPI Users'
<br>
Subject: SGE and openmpi
<br>
<p>Hi,
<br>
I am having trouble running a batch job in SGE using openmpi.  I have read
<br>
the faq, which says that openmpi will automatically do the right thing, but
<br>
something seems to be wrong.
<br>
<p>Previously I used MPICH1 under SGE without any problems. I'm avoiding MPICH2
<br>
because it doesn't seem to support static compilation, whereas I was able to
<br>
get openmpi to compile with open64 and compile my program statically.
<br>
<p>But I am having problems launching. According to the documentation, I should
<br>
be able to have a script file, qsub.sh:
<br>
<p>#!/bin/bash
<br>
#$ -cwd
<br>
#$ -j y
<br>
#$ -S /bin/bash
<br>
#$ -q all.q
<br>
#$ -pe orte 18
<br>
MPI_DIR=/home/jason/openmpi-1.4.3-install/bin
<br>
/home/jason/openmpi-1.4.3-install/bin/mpirun -np $NSLOTS  myprog
<br>
<p>Then,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ qsub  qsub.sh
<br>
<p>Previously with MPICH1 I would have
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-machinefile $TMP/machines
<br>
<p>in the mpirun arguments, and the rest of the script the same except -pe
<br>
mpich 18, and it would work. The -machinefile argument doesn't seem to work
<br>
in orte. The error in qsub.sh.o is:
<br>
<p>[jason_at_juggling ~/amica_open64]$ cat qsub.sh.o7514 [compute-0-0.local:17792]
<br>
*** An error occurred in MPI_Comm_rank [compute-0-0.local:17792] *** on
<br>
communicator MPI_COMM_WORLD [compute-0-0.local:17792] *** MPI_ERR_COMM:
<br>
invalid communicator [compute-0-0.local:17792] *** MPI_ERRORS_ARE_FATAL
<br>
(your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 17792 on node
<br>
compute-0-0.local exiting without calling &quot;finalize&quot;. This may have caused
<br>
other processes in the application to be terminated by signals sent by
<br>
mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:17788] 8 more processes have sent help message
<br>
help-mpi-errors.txt / mpi_errors_are_fatal [compute-0-0.local:17788] Set MCA
<br>
parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p><p>I ran qconf, and I get the same output as in the documentation:
<br>
<p>[jason_at_juggling ~/amica_open64]$ qconf -sp orte
<br>
pe_name            orte
<br>
slots              9999
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $fill_up
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary TRUE
<br>
<p>The qconf mpich output is:
<br>
<p>[jason_at_juggling ~/amica_open64]$ qconf -sp mpich
<br>
pe_name            mpich
<br>
slots              9999
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /opt/gridengine/mpi/startmpi.sh -catch_rsh $pe_hostfile
<br>
stop_proc_args     /opt/gridengine/mpi/stopmpi.sh
<br>
allocation_rule    $fill_up
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary TRUE
<br>
<p>with specific scripts for start_proc_args and stop_proc_args ...
<br>
<p>Am I missing something necessary to run openmpi under SGE?
<br>
<p>Thanks very much,
<br>
Jason
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16175.php">Jason Palmer: "[OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Reply:</strong> <a href="16177.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
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
