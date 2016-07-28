<?
$subject_val = "Re: [OMPI users] run openMPI jobs with SGE,";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 05:06:26 2010" -->
<!-- isoreceived="20100412090626" -->
<!-- sent="Mon, 12 Apr 2010 11:06:07 +0200" -->
<!-- isosent="20100412090607" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run openMPI jobs with SGE," -->
<!-- id="53F0BDF9-1361-4B27-B8E9-096462CCCF07_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="p2tb66245471004091448m5148780fyae0ba16ab06b292_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-04-12 05:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12605.php">Hideyuki Jitsumoto: "[OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="12603.php">Baowei Liu: "[OMPI users] openMPI configure/Installing problem on Mac with gnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12599.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 09.04.2010 um 23:48 schrieb Cristobal Navarro:
<br>
<p><span class="quotelev1">&gt; Thanks, 
</span><br>
<span class="quotelev1">&gt; now i get mixed results and everything seems to be working ok with mixed mpi xecution
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is it normal that after receiving the results, the hosts remain busy like 15 seconds ??
</span><br>
<span class="quotelev1">&gt; example
</span><br>
<p>yes. This is the time SGE needs for housekeeping, ist can even take some minutes (especially if you kill a parallel job).
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; master:common master$ qrsh -verbose -pe orte 10 /opt/openmpi-1.4.1/bin/mpirun -np 10 hostname
</span><br>
<span class="quotelev1">&gt; Your job 65 (&quot;mpirun&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt; Your interactive job 65 has been successfully scheduled.
</span><br>
<span class="quotelev1">&gt; Establishing builtin session to host worker00.local ...
</span><br>
<span class="quotelev1">&gt; worker00.local
</span><br>
<span class="quotelev1">&gt; worker00.local
</span><br>
<span class="quotelev1">&gt; worker00.local
</span><br>
<span class="quotelev1">&gt; worker00.local
</span><br>
<span class="quotelev1">&gt; worker00.local
</span><br>
<span class="quotelev1">&gt; master.local
</span><br>
<span class="quotelev1">&gt; master.local
</span><br>
<span class="quotelev1">&gt; master.local
</span><br>
<span class="quotelev1">&gt; master.local
</span><br>
<span class="quotelev1">&gt; master.local
</span><br>
<span class="quotelev1">&gt; #after some seconds, i query the hosts status and slots are still used
</span><br>
<span class="quotelev1">&gt; master:common master$ qstat -f
</span><br>
<span class="quotelev1">&gt; queuename                      qtype resv/used/tot. load_avg arch          states
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; all.q_at_master.local             BIP   0/5/16         0.02     darwin-x86    
</span><br>
<span class="quotelev1">&gt;      65 0.55500 mpirun     master       r     04/09/2010 17:44:36     5        
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; all.q_at_worker00.local           BIP   0/5/16         0.01     darwin-x86    
</span><br>
<span class="quotelev1">&gt;      65 0.55500 mpirun     master       r     04/09/2010 17:44:36     5        
</span><br>
<span class="quotelev1">&gt; master:common master$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but after waiting more time, they get free again
</span><br>
<span class="quotelev1">&gt; master:common master$ qstat -f
</span><br>
<span class="quotelev1">&gt; queuename                      qtype resv/used/tot. load_avg arch          states
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; all.q_at_master.local             BIP   0/0/16         0.01     darwin-x86    
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; all.q_at_worker00.local           BIP   0/0/16         0.01     darwin-x86 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; anyways these are just details, thanks to your help the important aspects are working.
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
<span class="quotelev1">&gt; On Fri, Apr 9, 2010 at 1:34 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Am 09.04.2010 um 18:57 schrieb Cristobal Navarro:
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
<span class="quotelev1">&gt; $pe_slots means that all slots must come from one and the same machine (e.g. for smp jobs). You can try $round_robin.
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
<span class="quotelev2">&gt; &gt; i noticed that if i put 2 slots (since the queue has 2 slots) on the -pe pempi N   argument and also the full path to mpirun as you guys pointed, it works!!!
</span><br>
<span class="quotelev2">&gt; &gt; cristobal_at_neoideo:~$ qrsh -verbose -pe pempi 2 /opt/openmpi-1.4.1/bin/mpirun -np 6 hostname
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
<span class="quotelev2">&gt; &gt; cristobal_at_neoideo:~$ qrsh -verbose -pe pempi 2 /opt/openmpi-1.4.1/bin/mpirun -np 6 hostname
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
<span class="quotelev2">&gt; &gt; On Fri, Apr 9, 2010 at 8:58 AM, Huynh Thuc Cuoc &lt;htcuoc_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt; &gt; job-ID  prior   name       user         state submit/start at     queue                          slots ja-task-ID
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;      35 0.55500 myphylo.qs huong        r     04/09/2010 19:28:59 all.q_at_[hidden]        3
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
<span class="quotelev2">&gt; &gt; headnode: 4 CPUs. $GRAM, CentOS 5.4 + sge 6.2u4 (qmaster and also execd host) + openmpi 1.4.1
</span><br>
<span class="quotelev2">&gt; &gt; nodes 4CPUs, 1GRAM, CentOS 5.4 + sgeexecd + openmpi1.4.1
</span><br>
<span class="quotelev2">&gt; &gt; PE=orte and set to 4 slots.
</span><br>
<span class="quotelev2">&gt; &gt; The app myphylo.qsub has the long cmd in the shell:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/bin/mpirun -np 10 $HOME/MyPhylo/bin/par-phylo-builder --data . . . .
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
<span class="quotelev2">&gt; &gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe orte 2 /opt/openmpi/bin/mpirun -np 6 hostname
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
<span class="quotelev2">&gt; &gt; On Fri, Apr 9, 2010 at 11:02 AM, Cristobal Navarro &lt;axischire_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; after some days of work and testing, i managed to install SGE on two machines, also installed openMPI 1.4.1 for each one.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SGE is working, i can submit jobs and it schedules the jobs to the available cores total of 6,
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
<li><strong>Next message:</strong> <a href="12605.php">Hideyuki Jitsumoto: "[OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="12603.php">Baowei Liu: "[OMPI users] openMPI configure/Installing problem on Mac with gnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12599.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
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
