<?
$subject_val = "Re: [OMPI users] SGE and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 21:18:21 2011" -->
<!-- isoreceived="20110407011821" -->
<!-- sent="Wed, 6 Apr 2011 19:18:12 -0600" -->
<!-- isosent="20110407011812" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openmpi" -->
<!-- id="0E02D1F3-8B14-4247-8828-4EAF754534B7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="053501cbf4b6$e839abf0$b8ad03d0$_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 21:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16178.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16176.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16176.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16178.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you able to run non-MPI programs like &quot;hostname&quot;?
<br>
<p>I ask because that error message indicates that everything started just fine, but there is an error in your application.
<br>
<p><p>On Apr 6, 2011, at 6:01 PM, Jason Palmer wrote:
<br>
<p><span class="quotelev1">&gt; Btw, I did compile openmpi with the --with-sge flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am able to compile a test program using openf90 with no errors or
</span><br>
<span class="quotelev1">&gt; warnings. But when I try to run a test program that just calls
</span><br>
<span class="quotelev1">&gt; MPI_INIT(ierr), then MPI_COMM_RANK(ierr), I get the following, whether
</span><br>
<span class="quotelev1">&gt; static or linked, and whether run with mpirun or directly:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [juggling.ucsd.edu:20218] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [juggling.ucsd.edu:20218] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [juggling.ucsd.edu:20218] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [juggling.ucsd.edu:20218] *** MPI_ERRORS_ARE_FATAL (your MPI job will now
</span><br>
<span class="quotelev1">&gt; abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something  missing in the linux or parallel environment settings?
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jason Palmer [mailto:japalmer29_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 06, 2011 4:09 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: SGE and openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am having trouble running a batch job in SGE using openmpi.  I have read
</span><br>
<span class="quotelev1">&gt; the faq, which says that openmpi will automatically do the right thing, but
</span><br>
<span class="quotelev1">&gt; something seems to be wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Previously I used MPICH1 under SGE without any problems. I'm avoiding MPICH2
</span><br>
<span class="quotelev1">&gt; because it doesn't seem to support static compilation, whereas I was able to
</span><br>
<span class="quotelev1">&gt; get openmpi to compile with open64 and compile my program statically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I am having problems launching. According to the documentation, I should
</span><br>
<span class="quotelev1">&gt; be able to have a script file, qsub.sh:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -q all.q
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 18
</span><br>
<span class="quotelev1">&gt; MPI_DIR=/home/jason/openmpi-1.4.3-install/bin
</span><br>
<span class="quotelev1">&gt; /home/jason/openmpi-1.4.3-install/bin/mpirun -np $NSLOTS  myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then,
</span><br>
<span class="quotelev1">&gt; 	$ qsub  qsub.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Previously with MPICH1 I would have
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	-machinefile $TMP/machines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the mpirun arguments, and the rest of the script the same except -pe
</span><br>
<span class="quotelev1">&gt; mpich 18, and it would work. The -machinefile argument doesn't seem to work
</span><br>
<span class="quotelev1">&gt; in orte. The error in qsub.sh.o is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jason_at_juggling ~/amica_open64]$ cat qsub.sh.o7514 [compute-0-0.local:17792]
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Comm_rank [compute-0-0.local:17792] *** on
</span><br>
<span class="quotelev1">&gt; communicator MPI_COMM_WORLD [compute-0-0.local:17792] *** MPI_ERR_COMM:
</span><br>
<span class="quotelev1">&gt; invalid communicator [compute-0-0.local:17792] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev1">&gt; (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 17792 on node
</span><br>
<span class="quotelev1">&gt; compute-0-0.local exiting without calling &quot;finalize&quot;. This may have caused
</span><br>
<span class="quotelev1">&gt; other processes in the application to be terminated by signals sent by
</span><br>
<span class="quotelev1">&gt; mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:17788] 8 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-errors.txt / mpi_errors_are_fatal [compute-0-0.local:17788] Set MCA
</span><br>
<span class="quotelev1">&gt; parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran qconf, and I get the same output as in the documentation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jason_at_juggling ~/amica_open64]$ qconf -sp orte
</span><br>
<span class="quotelev1">&gt; pe_name            orte
</span><br>
<span class="quotelev1">&gt; slots              9999
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The qconf mpich output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jason_at_juggling ~/amica_open64]$ qconf -sp mpich
</span><br>
<span class="quotelev1">&gt; pe_name            mpich
</span><br>
<span class="quotelev1">&gt; slots              9999
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /opt/gridengine/mpi/startmpi.sh -catch_rsh $pe_hostfile
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /opt/gridengine/mpi/stopmpi.sh
</span><br>
<span class="quotelev1">&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with specific scripts for start_proc_args and stop_proc_args ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I missing something necessary to run openmpi under SGE?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks very much,
</span><br>
<span class="quotelev1">&gt; Jason
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16178.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16176.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16176.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16178.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
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
