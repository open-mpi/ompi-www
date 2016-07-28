<?
$subject_val = "Re: [OMPI users] run openMPI jobs with SGE,";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 13:34:59 2010" -->
<!-- isoreceived="20100409173459" -->
<!-- sent="Fri, 9 Apr 2010 19:34:45 +0200" -->
<!-- isosent="20100409173445" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run openMPI jobs with SGE," -->
<!-- id="1DFE1DF0-05D6-4856-A916-810F4E5BFCF0_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="i2ob66245471004090957xcf39a1c5o3cafc083f3ba075_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] run openMPI jobs with SGE,<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-09 13:34:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12599.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12599.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12599.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 09.04.2010 um 18:57 schrieb Cristobal Navarro:
<br>
<p><span class="quotelev1">&gt; sorry the command was missing a number
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as you said it should be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qrsh -verbose -pe pempi 6 mpirun -np 6 hostname
</span><br>
<span class="quotelev1">&gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your &quot;qrsh&quot; request could not be scheduled, try again later.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; this is my parallel enviroment
</span><br>
<span class="quotelev1">&gt; qconf -sp pempi
</span><br>
<span class="quotelev1">&gt; pe_name            pempi
</span><br>
<span class="quotelev1">&gt; slots              210
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /usr/bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /usr/bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule    $pe_slots
</span><br>
<p>$pe_slots means that all slots must come from one and the same machine (e.g. for smp jobs). You can try $round_robin.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is the queue
</span><br>
<span class="quotelev1">&gt; qconf -sq cola.q
</span><br>
<span class="quotelev1">&gt; qname                 cola.q
</span><br>
<span class="quotelev1">&gt; hostlist              @allhosts
</span><br>
<span class="quotelev1">&gt; seq_no                0
</span><br>
<span class="quotelev1">&gt; load_thresholds       np_load_avg=1.75
</span><br>
<span class="quotelev1">&gt; suspend_thresholds    NONE
</span><br>
<span class="quotelev1">&gt; nsuspend              1
</span><br>
<span class="quotelev1">&gt; suspend_interval      00:05:00
</span><br>
<span class="quotelev1">&gt; priority              0
</span><br>
<span class="quotelev1">&gt; min_cpu_interval      00:05:00
</span><br>
<span class="quotelev1">&gt; processors            UNDEFINED
</span><br>
<span class="quotelev1">&gt; qtype                 BATCH INTERACTIVE
</span><br>
<span class="quotelev1">&gt; ckpt_list             NONE
</span><br>
<span class="quotelev1">&gt; pe_list               make pempi
</span><br>
<span class="quotelev1">&gt; rerun                 FALSE
</span><br>
<span class="quotelev1">&gt; slots                 2
</span><br>
<span class="quotelev1">&gt; tmpdir                /tmp
</span><br>
<span class="quotelev1">&gt; shell                 /bin/csh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i noticed that if i put 2 slots (since the queue has 2 slots) on the -pe pempi N   argument and also the full path to mpirun as you guys pointed, it works!!! 
</span><br>
<span class="quotelev1">&gt; cristobal_at_neoideo:~$ qrsh -verbose -pe pempi 2 /opt/openmpi-1.4.1/bin/mpirun -np 6 hostname
</span><br>
<span class="quotelev1">&gt; Your job 125 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt; Your interactive job 125 has been successfully scheduled.
</span><br>
<span class="quotelev1">&gt; Establishing builtin session to host ijorge.local ...
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev1">&gt; cristobal_at_neoideo:~$ qrsh -verbose -pe pempi 2 /opt/openmpi-1.4.1/bin/mpirun -np 6 hostname
</span><br>
<span class="quotelev1">&gt; Your job 126 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt; Your interactive job 126 has been successfully scheduled.
</span><br>
<span class="quotelev1">&gt; Establishing builtin session to host neoideo ...
</span><br>
<span class="quotelev1">&gt; neoideo
</span><br>
<span class="quotelev1">&gt; neoideo
</span><br>
<span class="quotelev1">&gt; neoideo
</span><br>
<span class="quotelev1">&gt; neoideo
</span><br>
<span class="quotelev1">&gt; neoideo
</span><br>
<span class="quotelev1">&gt; neoideo
</span><br>
<span class="quotelev1">&gt; cristobal_at_neoideo:~$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i just wonder why i didnt get mixed hostnames? like
</span><br>
<span class="quotelev1">&gt; neoideo
</span><br>
<span class="quotelev1">&gt; neoideo
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev1">&gt; neoideo
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for the help already!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 9, 2010 at 8:58 AM, Huynh Thuc Cuoc &lt;htcuoc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear friend,
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt; I prefer to use sge qsub cmd, for examples:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [huong_at_ioitg2 MyPhylo]$ qsub -pe orte 3 myphylo.qsub
</span><br>
<span class="quotelev1">&gt; Your job 35 (&quot;myphylo.qsub&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; [huong_at_ioitg2 MyPhylo]$ qstat
</span><br>
<span class="quotelev1">&gt; job-ID  prior   name       user         state submit/start at     queue                          slots ja-task-ID 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      35 0.55500 myphylo.qs huong        r     04/09/2010 19:28:59 all.q_at_[hidden]        3        
</span><br>
<span class="quotelev1">&gt; [huong_at_ioitg2 MyPhylo]$ qstat
</span><br>
<span class="quotelev1">&gt; [huong_at_ioitg2 MyPhylo]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This job is running on node2 of my cluster.
</span><br>
<span class="quotelev1">&gt; My softs as following:
</span><br>
<span class="quotelev1">&gt; headnode: 4 CPUs. $GRAM, CentOS 5.4 + sge 6.2u4 (qmaster and also execd host) + openmpi 1.4.1
</span><br>
<span class="quotelev1">&gt; nodes 4CPUs, 1GRAM, CentOS 5.4 + sgeexecd + openmpi1.4.1
</span><br>
<span class="quotelev1">&gt; PE=orte and set to 4 slots.
</span><br>
<span class="quotelev1">&gt; The app myphylo.qsub has the long cmd in the shell:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun -np 10 $HOME/MyPhylo/bin/par-phylo-builder --data . . . .
</span><br>
<span class="quotelev1">&gt; Try to set PE as orte, use default PE = make instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I test your cmd on my sytem as:
</span><br>
<span class="quotelev1">&gt; a.
</span><br>
<span class="quotelev1">&gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe make mpirun -np 6 hostname
</span><br>
<span class="quotelev1">&gt; error: Numerical value invalid!
</span><br>
<span class="quotelev1">&gt; The initial portion of string &quot;mpirun&quot; contains no decimal number
</span><br>
<span class="quotelev1">&gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe orte 2 mpirun -np 6 hostname
</span><br>
<span class="quotelev1">&gt; Your job 36 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt; Your interactive job 36 has been successfully scheduled.
</span><br>
<span class="quotelev1">&gt; Establishing builtin session to host ioitg2.ioit-grid.ac.vn ...
</span><br>
<span class="quotelev1">&gt; bash: mpirun: command not found
</span><br>
<span class="quotelev1">&gt; [huong_at_ioitg2 MyPhylo]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR ! So I try:
</span><br>
<span class="quotelev1">&gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe orte 2 /opt/openmpi/bin/mpirun -np 6 hostname
</span><br>
<span class="quotelev1">&gt; Your job 38 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt; Your interactive job 38 has been successfully scheduled.
</span><br>
<span class="quotelev1">&gt; Establishing builtin session to host ioitg2.ioit-grid.ac.vn ...
</span><br>
<span class="quotelev1">&gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev1">&gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev1">&gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev1">&gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev1">&gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev1">&gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev1">&gt; [huong_at_ioitg2 MyPhylo]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This OK.
</span><br>
<span class="quotelev1">&gt; What is: the PATH points to where mpirun is located.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TRY.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good chance
</span><br>
<span class="quotelev1">&gt; HT Cuoc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 9, 2010 at 11:02 AM, Cristobal Navarro &lt;axischire_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after some days of work and testing, i managed to install SGE on two machines, also installed openMPI 1.4.1 for each one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SGE is working, i can submit jobs and it schedules the jobs to the available cores total of 6,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my problem is that im trying to run an openMPI job and i cant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is an example of what i am trying.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $qrsh -verbose -pe pempi mpirun -np 6 hostname
</span><br>
<span class="quotelev1">&gt; Your job 105 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your &quot;qrsh&quot; request could not be scheduled, try again later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; im not sure what this can be, 
</span><br>
<span class="quotelev1">&gt; in the ompi_info i have gridengine support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where do you recommend to look ??
</span><br>
<span class="quotelev1">&gt; thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12599.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12599.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12599.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
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
