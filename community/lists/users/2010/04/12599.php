<?
$subject_val = "Re: [OMPI users] run openMPI jobs with SGE,";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 17:49:17 2010" -->
<!-- isoreceived="20100409214917" -->
<!-- sent="Fri, 9 Apr 2010 17:48:51 -0400" -->
<!-- isosent="20100409214851" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run openMPI jobs with SGE," -->
<!-- id="p2tb66245471004091448m5148780fyae0ba16ab06b292_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1DFE1DF0-05D6-4856-A916-810F4E5BFCF0_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-09 17:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12600.php">Juergen Kaiser: "[OMPI users] Adding new process to running job"</a>
<li><strong>Previous message:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12604.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12604.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
now i get mixed results and everything seems to be working ok with mixed mpi
<br>
xecution
<br>
<p>is it normal that after receiving the results, the hosts remain busy like 15
<br>
seconds ??
<br>
example
<br>
master:common master$ qrsh -verbose -pe orte 10
<br>
/opt/openmpi-1.4.1/bin/mpirun -np 10 hostname
<br>
Your job 65 (&quot;mpirun&quot;) has been submitted
<br>
waiting for interactive job to be scheduled ...
<br>
Your interactive job 65 has been successfully scheduled.
<br>
Establishing builtin session to host worker00.local ...
<br>
worker00.local
<br>
worker00.local
<br>
worker00.local
<br>
worker00.local
<br>
worker00.local
<br>
master.local
<br>
master.local
<br>
master.local
<br>
master.local
<br>
master.local
<br>
#after some seconds, i query the hosts status and slots are still used
<br>
master:common master$ qstat -f
<br>
queuename                      qtype resv/used/tot. load_avg arch
<br>
&nbsp;states
<br>
---------------------------------------------------------------------------------
<br>
all.q_at_master.local             BIP   0/5/16         0.02     darwin-x86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65 0.55500 mpirun     master       r     04/09/2010 17:44:36     5
<br>
<p>---------------------------------------------------------------------------------
<br>
all.q_at_worker00.local           BIP   0/5/16         0.01     darwin-x86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65 0.55500 mpirun     master       r     04/09/2010 17:44:36     5
<br>
<p>master:common master$
<br>
<p>but after waiting more time, they get free again
<br>
master:common master$ qstat -f
<br>
queuename                      qtype resv/used/tot. load_avg arch
<br>
&nbsp;states
<br>
---------------------------------------------------------------------------------
<br>
all.q_at_master.local             BIP   0/0/16         0.01     darwin-x86
<br>
---------------------------------------------------------------------------------
<br>
all.q_at_worker00.local           BIP   0/0/16         0.01     darwin-x86
<br>
<p>anyways these are just details, thanks to your help the important aspects
<br>
are working.
<br>
Cristobal
<br>
<p><p><p><p>On Fri, Apr 9, 2010 at 1:34 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 09.04.2010 um 18:57 schrieb Cristobal Navarro:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; sorry the command was missing a number
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as you said it should be
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; qrsh -verbose -pe pempi 6 mpirun -np 6 hostname
</span><br>
<span class="quotelev2">&gt; &gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your &quot;qrsh&quot; request could not be scheduled, try again later.
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; this is my parallel enviroment
</span><br>
<span class="quotelev2">&gt; &gt; qconf -sp pempi
</span><br>
<span class="quotelev2">&gt; &gt; pe_name            pempi
</span><br>
<span class="quotelev2">&gt; &gt; slots              210
</span><br>
<span class="quotelev2">&gt; &gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt; &gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt; &gt; start_proc_args    /usr/bin/true
</span><br>
<span class="quotelev2">&gt; &gt; stop_proc_args     /usr/bin/true
</span><br>
<span class="quotelev2">&gt; &gt; allocation_rule    $pe_slots
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $pe_slots means that all slots must come from one and the same machine
</span><br>
<span class="quotelev1">&gt; (e.g. for smp jobs). You can try $round_robin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt; &gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt; &gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt; &gt; accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; this is the queue
</span><br>
<span class="quotelev2">&gt; &gt; qconf -sq cola.q
</span><br>
<span class="quotelev2">&gt; &gt; qname                 cola.q
</span><br>
<span class="quotelev2">&gt; &gt; hostlist              @allhosts
</span><br>
<span class="quotelev2">&gt; &gt; seq_no                0
</span><br>
<span class="quotelev2">&gt; &gt; load_thresholds       np_load_avg=1.75
</span><br>
<span class="quotelev2">&gt; &gt; suspend_thresholds    NONE
</span><br>
<span class="quotelev2">&gt; &gt; nsuspend              1
</span><br>
<span class="quotelev2">&gt; &gt; suspend_interval      00:05:00
</span><br>
<span class="quotelev2">&gt; &gt; priority              0
</span><br>
<span class="quotelev2">&gt; &gt; min_cpu_interval      00:05:00
</span><br>
<span class="quotelev2">&gt; &gt; processors            UNDEFINED
</span><br>
<span class="quotelev2">&gt; &gt; qtype                 BATCH INTERACTIVE
</span><br>
<span class="quotelev2">&gt; &gt; ckpt_list             NONE
</span><br>
<span class="quotelev2">&gt; &gt; pe_list               make pempi
</span><br>
<span class="quotelev2">&gt; &gt; rerun                 FALSE
</span><br>
<span class="quotelev2">&gt; &gt; slots                 2
</span><br>
<span class="quotelev2">&gt; &gt; tmpdir                /tmp
</span><br>
<span class="quotelev2">&gt; &gt; shell                 /bin/csh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i noticed that if i put 2 slots (since the queue has 2 slots) on the -pe
</span><br>
<span class="quotelev1">&gt; pempi N   argument and also the full path to mpirun as you guys pointed, it
</span><br>
<span class="quotelev1">&gt; works!!!
</span><br>
<span class="quotelev2">&gt; &gt; cristobal_at_neoideo:~$ qrsh -verbose -pe pempi 2
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.1/bin/mpirun -np 6 hostname
</span><br>
<span class="quotelev2">&gt; &gt; Your job 125 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev2">&gt; &gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev2">&gt; &gt; Your interactive job 125 has been successfully scheduled.
</span><br>
<span class="quotelev2">&gt; &gt; Establishing builtin session to host ijorge.local ...
</span><br>
<span class="quotelev2">&gt; &gt; ijorge.local
</span><br>
<span class="quotelev2">&gt; &gt; ijorge.local
</span><br>
<span class="quotelev2">&gt; &gt; ijorge.local
</span><br>
<span class="quotelev2">&gt; &gt; ijorge.local
</span><br>
<span class="quotelev2">&gt; &gt; ijorge.local
</span><br>
<span class="quotelev2">&gt; &gt; ijorge.local
</span><br>
<span class="quotelev2">&gt; &gt; cristobal_at_neoideo:~$ qrsh -verbose -pe pempi 2
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.1/bin/mpirun -np 6 hostname
</span><br>
<span class="quotelev2">&gt; &gt; Your job 126 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev2">&gt; &gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev2">&gt; &gt; Your interactive job 126 has been successfully scheduled.
</span><br>
<span class="quotelev2">&gt; &gt; Establishing builtin session to host neoideo ...
</span><br>
<span class="quotelev2">&gt; &gt; neoideo
</span><br>
<span class="quotelev2">&gt; &gt; neoideo
</span><br>
<span class="quotelev2">&gt; &gt; neoideo
</span><br>
<span class="quotelev2">&gt; &gt; neoideo
</span><br>
<span class="quotelev2">&gt; &gt; neoideo
</span><br>
<span class="quotelev2">&gt; &gt; neoideo
</span><br>
<span class="quotelev2">&gt; &gt; cristobal_at_neoideo:~$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i just wonder why i didnt get mixed hostnames? like
</span><br>
<span class="quotelev2">&gt; &gt; neoideo
</span><br>
<span class="quotelev2">&gt; &gt; neoideo
</span><br>
<span class="quotelev2">&gt; &gt; ijorge.local
</span><br>
<span class="quotelev2">&gt; &gt; ijorge.local
</span><br>
<span class="quotelev2">&gt; &gt; neoideo
</span><br>
<span class="quotelev2">&gt; &gt; ijorge.local
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ??
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks for the help already!!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cristobal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Apr 9, 2010 at 8:58 AM, Huynh Thuc Cuoc &lt;htcuoc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear friend,
</span><br>
<span class="quotelev2">&gt; &gt; 1.
</span><br>
<span class="quotelev2">&gt; &gt; I prefer to use sge qsub cmd, for examples:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$ qsub -pe orte 3 myphylo.qsub
</span><br>
<span class="quotelev2">&gt; &gt; Your job 35 (&quot;myphylo.qsub&quot;) has been submitted
</span><br>
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$ qstat
</span><br>
<span class="quotelev2">&gt; &gt; job-ID  prior   name       user         state submit/start at     queue
</span><br>
<span class="quotelev1">&gt;                        slots ja-task-ID
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;      35 0.55500 myphylo.qs huong        r     04/09/2010 19:28:59
</span><br>
<span class="quotelev1">&gt; all.q_at_[hidden]        3
</span><br>
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$ qstat
</span><br>
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This job is running on node2 of my cluster.
</span><br>
<span class="quotelev2">&gt; &gt; My softs as following:
</span><br>
<span class="quotelev2">&gt; &gt; headnode: 4 CPUs. $GRAM, CentOS 5.4 + sge 6.2u4 (qmaster and also execd
</span><br>
<span class="quotelev1">&gt; host) + openmpi 1.4.1
</span><br>
<span class="quotelev2">&gt; &gt; nodes 4CPUs, 1GRAM, CentOS 5.4 + sgeexecd + openmpi1.4.1
</span><br>
<span class="quotelev2">&gt; &gt; PE=orte and set to 4 slots.
</span><br>
<span class="quotelev2">&gt; &gt; The app myphylo.qsub has the long cmd in the shell:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/bin/mpirun -np 10 $HOME/MyPhylo/bin/par-phylo-builder --data
</span><br>
<span class="quotelev1">&gt; . . . .
</span><br>
<span class="quotelev2">&gt; &gt; Try to set PE as orte, use default PE = make instead.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. I test your cmd on my sytem as:
</span><br>
<span class="quotelev2">&gt; &gt; a.
</span><br>
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe make mpirun -np 6 hostname
</span><br>
<span class="quotelev2">&gt; &gt; error: Numerical value invalid!
</span><br>
<span class="quotelev2">&gt; &gt; The initial portion of string &quot;mpirun&quot; contains no decimal number
</span><br>
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe orte 2 mpirun -np 6 hostname
</span><br>
<span class="quotelev2">&gt; &gt; Your job 36 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev2">&gt; &gt; Your interactive job 36 has been successfully scheduled.
</span><br>
<span class="quotelev2">&gt; &gt; Establishing builtin session to host ioitg2.ioit-grid.ac.vn ...
</span><br>
<span class="quotelev2">&gt; &gt; bash: mpirun: command not found
</span><br>
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ERROR ! So I try:
</span><br>
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe orte 2 /opt/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -np 6 hostname
</span><br>
<span class="quotelev2">&gt; &gt; Your job 38 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev2">&gt; &gt; Your interactive job 38 has been successfully scheduled.
</span><br>
<span class="quotelev2">&gt; &gt; Establishing builtin session to host ioitg2.ioit-grid.ac.vn ...
</span><br>
<span class="quotelev2">&gt; &gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev2">&gt; &gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev2">&gt; &gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev2">&gt; &gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev2">&gt; &gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev2">&gt; &gt; ioitg2.ioit-grid.ac.vn
</span><br>
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This OK.
</span><br>
<span class="quotelev2">&gt; &gt; What is: the PATH points to where mpirun is located.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TRY.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Good chance
</span><br>
<span class="quotelev2">&gt; &gt; HT Cuoc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Apr 9, 2010 at 11:02 AM, Cristobal Navarro &lt;axischire_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; after some days of work and testing, i managed to install SGE on two
</span><br>
<span class="quotelev1">&gt; machines, also installed openMPI 1.4.1 for each one.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SGE is working, i can submit jobs and it schedules the jobs to the
</span><br>
<span class="quotelev1">&gt; available cores total of 6,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; my problem is that im trying to run an openMPI job and i cant.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; this is an example of what i am trying.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $qrsh -verbose -pe pempi mpirun -np 6 hostname
</span><br>
<span class="quotelev2">&gt; &gt; Your job 105 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev2">&gt; &gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your &quot;qrsh&quot; request could not be scheduled, try again later.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; im not sure what this can be,
</span><br>
<span class="quotelev2">&gt; &gt; in the ompi_info i have gridengine support.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where do you recommend to look ??
</span><br>
<span class="quotelev2">&gt; &gt; thanks in advance
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cristobal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12599/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12600.php">Juergen Kaiser: "[OMPI users] Adding new process to running job"</a>
<li><strong>Previous message:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12604.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12604.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
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
