<?
$subject_val = "Re: [OMPI users] run openMPI jobs with SGE,";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 12:57:56 2010" -->
<!-- isoreceived="20100409165756" -->
<!-- sent="Fri, 9 Apr 2010 12:57:30 -0400" -->
<!-- isosent="20100409165730" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run openMPI jobs with SGE," -->
<!-- id="i2ob66245471004090957xcf39a1c5o3cafc083f3ba075_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="p2w5903bc431004090558m2403f927ha89181f42f32c2ee_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-04-09 12:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sorry the command was missing a number
<br>
<p>as you said it should be
<br>
<p>qrsh -verbose -pe pempi 6 mpirun -np 6 hostname
<br>
waiting for interactive job to be scheduled ...
<br>
<p>Your &quot;qrsh&quot; request could not be scheduled, try again later.
<br>
<pre>
---
*this is my parallel enviroment*
*qconf -sp pempi*
pe_name            pempi
slots              210
user_lists         NONE
xuser_lists        NONE
start_proc_args    /usr/bin/true
stop_proc_args     /usr/bin/true
allocation_rule    $pe_slots
control_slaves     TRUE
job_is_first_task  FALSE
urgency_slots      min
accounting_summary TRUE
*this is the queue
qconf -sq cola.q
*qname                 cola.q
hostlist              @allhosts
seq_no                0
load_thresholds       np_load_avg=1.75
suspend_thresholds    NONE
nsuspend              1
suspend_interval      00:05:00
priority              0
min_cpu_interval      00:05:00
processors            UNDEFINED
qtype                 BATCH INTERACTIVE
ckpt_list             NONE
pe_list               make pempi
rerun                 FALSE
slots                 2
tmpdir                /tmp
shell                 /bin/csh*
i noticed that if i put 2 slots (since the queue has 2 slots) on the -pe
pempi N   argument and also the full path to mpirun as you guys pointed, it
works!!!
*cristobal_at_neoideo:~$ qrsh -verbose -pe pempi 2
/opt/openmpi-1.4.1/bin/mpirun -np 6 hostname
Your job 125 (&quot;mpirun&quot;) has been submitted
waiting for interactive job to be scheduled ...
Your interactive job 125 has been successfully scheduled.
Establishing builtin session to host ijorge.local ...
ijorge.local
ijorge.local
ijorge.local
ijorge.local
ijorge.local
ijorge.local
cristobal_at_neoideo:~$ qrsh -verbose -pe pempi 2 /opt/openmpi-1.4.1/bin/mpirun
-np 6 hostname
Your job 126 (&quot;mpirun&quot;) has been submitted
waiting for interactive job to be scheduled ...
Your interactive job 126 has been successfully scheduled.
Establishing builtin session to host neoideo ...
neoideo
neoideo
neoideo
neoideo
neoideo
neoideo
cristobal_at_neoideo:~$ *
**
i just wonder why i didnt get mixed hostnames? like
neoideo
neoideo
ijorge.local
ijorge.local
neoideo
ijorge.local
??
thanks for the help already!!!
*
Cristobal
On Fri, Apr 9, 2010 at 8:58 AM, Huynh Thuc Cuoc &lt;htcuoc_at_[hidden]&gt; wrote:
&gt; Dear friend,
&gt; 1.
&gt; I prefer to use sge qsub cmd, for examples:
&gt;
&gt; [huong_at_ioitg2 MyPhylo]$ qsub -pe orte 3 myphylo.qsub
&gt; Your job 35 (&quot;myphylo.qsub&quot;) has been submitted
&gt; [huong_at_ioitg2 MyPhylo]$ qstat
&gt; job-ID  prior   name       user         state submit/start at
&gt; queue                          slots ja-task-ID
&gt;
&gt; -----------------------------------------------------------------------------------------------------------------
&gt;      35 0.55500 myphylo.qs huong        r     04/09/2010 19:28:59
&gt; all.q_at_[hidden]        3
&gt; [huong_at_ioitg2 MyPhylo]$ qstat
&gt; [huong_at_ioitg2 MyPhylo]$
&gt;
&gt; This job is running on node2 of my cluster.
&gt; My softs as following:
&gt; headnode: 4 CPUs. $GRAM, CentOS 5.4 + sge 6.2u4 (qmaster and also execd
&gt; host) + openmpi 1.4.1
&gt; nodes 4CPUs, 1GRAM, CentOS 5.4 + sgeexecd + openmpi1.4.1
&gt; PE=orte and set to 4 slots.
&gt; The app myphylo.qsub has the long cmd in the shell:
&gt; /opt/openmpi/bin/mpirun -np 10 $HOME/MyPhylo/bin/par-phylo-builder --data .
&gt; . . .
&gt; Try to set PE as orte, use default PE = make instead.
&gt;
&gt; 2. I test your cmd on my sytem as:
&gt; a.
&gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe make mpirun -np 6 hostname
&gt; error: Numerical value invalid!
&gt; The initial portion of string &quot;mpirun&quot; contains no decimal number
&gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe orte 2 mpirun -np 6 hostname
&gt; Your job 36 (&quot;mpirun&quot;) has been submitted
&gt;
&gt; waiting for interactive job to be scheduled ...
&gt; Your interactive job 36 has been successfully scheduled.
&gt; Establishing builtin session to host ioitg2.ioit-grid.ac.vn ...
&gt; bash: mpirun: command not found
&gt; [huong_at_ioitg2 MyPhylo]$
&gt;
&gt; ERROR ! So I try:
&gt; [huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe orte 2 /opt/openmpi/bin/mpirun
&gt; -np 6 hostname
&gt; Your job 38 (&quot;mpirun&quot;) has been submitted
&gt;
&gt; waiting for interactive job to be scheduled ...
&gt; Your interactive job 38 has been successfully scheduled.
&gt; Establishing builtin session to host ioitg2.ioit-grid.ac.vn ...
&gt; ioitg2.ioit-grid.ac.vn
&gt; ioitg2.ioit-grid.ac.vn
&gt; ioitg2.ioit-grid.ac.vn
&gt; ioitg2.ioit-grid.ac.vn
&gt; ioitg2.ioit-grid.ac.vn
&gt; ioitg2.ioit-grid.ac.vn
&gt; [huong_at_ioitg2 MyPhylo]$
&gt;
&gt; This OK.
&gt; What is: the PATH points to where mpirun is located.
&gt;
&gt; TRY.
&gt;
&gt; Good chance
&gt; HT Cuoc
&gt;
&gt;
&gt; On Fri, Apr 9, 2010 at 11:02 AM, Cristobal Navarro &lt;axischire_at_[hidden]&gt;wrote:
&gt;
&gt;&gt; Hello,
&gt;&gt;
&gt;&gt; after some days of work and testing, i managed to install SGE on two
&gt;&gt; machines, also installed openMPI 1.4.1 for each one.
&gt;&gt;
&gt;&gt; SGE is working, i can submit jobs and it schedules the jobs to the
&gt;&gt; available cores total of 6,
&gt;&gt;
&gt;&gt; my problem is that im trying to run an openMPI job and i cant.
&gt;&gt;
&gt;&gt; this is an example of what i am trying.
&gt;&gt;
&gt;
&gt;
&gt;&gt;
&gt;&gt; $qrsh -verbose -pe pempi mpirun -np 6 hostname
&gt;&gt; Your job 105 (&quot;mpirun&quot;) has been submitted
&gt;&gt; waiting for interactive job to be scheduled ...
&gt;&gt;
&gt;&gt; Your &quot;qrsh&quot; request could not be scheduled, try again later.
&gt;&gt;
&gt;&gt; im not sure what this can be,
&gt;&gt; in the ompi_info i have gridengine support.
&gt;&gt;
&gt;&gt; where do you recommend to look ??
&gt;&gt; thanks in advance
&gt;&gt;
&gt;&gt; Cristobal
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12598.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
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
