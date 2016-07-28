<?
$subject_val = "[OMPI users] SGE and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 19:09:35 2011" -->
<!-- isoreceived="20110406230935" -->
<!-- sent="Wed, 6 Apr 2011 16:09:27 -0700" -->
<!-- isosent="20110406230927" -->
<!-- name="Jason Palmer" -->
<!-- email="japalmer29_at_[hidden]" -->
<!-- subject="[OMPI users] SGE and openmpi" -->
<!-- id="053101cbf4af$aeac9070$0c05b150$_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] SGE and openmpi<br>
<strong>From:</strong> Jason Palmer (<em>japalmer29_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 19:09:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16176.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16174.php">Gus Correa: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16176.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Reply:</strong> <a href="16186.php">Prentice Bisbal: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
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
<p>[jason_at_juggling ~/amica_open64]$ cat qsub.sh.o7514
<br>
[compute-0-0.local:17792] *** An error occurred in MPI_Comm_rank
<br>
[compute-0-0.local:17792] *** on communicator MPI_COMM_WORLD
<br>
[compute-0-0.local:17792] *** MPI_ERR_COMM: invalid communicator
<br>
[compute-0-0.local:17792] *** MPI_ERRORS_ARE_FATAL (your MPI job will now
<br>
abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 17792 on
<br>
node compute-0-0.local exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:17788] 8 more processes have sent help message
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[compute-0-0.local:17788] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
<br>
to see all help / error messages
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
<li><strong>Next message:</strong> <a href="16176.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16174.php">Gus Correa: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16176.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Reply:</strong> <a href="16186.php">Prentice Bisbal: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
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
