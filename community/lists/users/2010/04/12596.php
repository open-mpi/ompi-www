<?
$subject_val = "Re: [OMPI users] run openMPI jobs with SGE,";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 08:58:27 2010" -->
<!-- isoreceived="20100409125827" -->
<!-- sent="Fri, 9 Apr 2010 19:58:20 +0700" -->
<!-- isosent="20100409125820" -->
<!-- name="Huynh Thuc Cuoc" -->
<!-- email="htcuoc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run openMPI jobs with SGE," -->
<!-- id="p2w5903bc431004090558m2403f927ha89181f42f32c2ee_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="j2qb66245471004082102o3460897auf3f26031b700708b_at_mail.gmail.com" -->
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
<strong>From:</strong> Huynh Thuc Cuoc (<em>htcuoc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-09 08:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12595.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12594.php">Cristobal Navarro: "[OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear friend,
<br>
1.
<br>
I prefer to use sge qsub cmd, for examples:
<br>
<p>[huong_at_ioitg2 MyPhylo]$ qsub -pe orte 3 myphylo.qsub
<br>
Your job 35 (&quot;myphylo.qsub&quot;) has been submitted
<br>
[huong_at_ioitg2 MyPhylo]$ qstat
<br>
job-ID  prior   name       user         state submit/start at
<br>
queue                          slots ja-task-ID
<br>
-----------------------------------------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;35 0.55500 myphylo.qs huong        r     04/09/2010 19:28:59
<br>
all.q_at_[hidden]        3
<br>
[huong_at_ioitg2 MyPhylo]$ qstat
<br>
[huong_at_ioitg2 MyPhylo]$
<br>
<p>This job is running on node2 of my cluster.
<br>
My softs as following:
<br>
headnode: 4 CPUs. $GRAM, CentOS 5.4 + sge 6.2u4 (qmaster and also execd
<br>
host) + openmpi 1.4.1
<br>
nodes 4CPUs, 1GRAM, CentOS 5.4 + sgeexecd + openmpi1.4.1
<br>
PE=orte and set to 4 slots.
<br>
The app myphylo.qsub has the long cmd in the shell:
<br>
/opt/openmpi/bin/mpirun -np 10 $HOME/MyPhylo/bin/par-phylo-builder --data .
<br>
. . .
<br>
Try to set PE as orte, use default PE = make instead.
<br>
<p>2. I test your cmd on my sytem as:
<br>
a.
<br>
[huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe make mpirun -np 6 hostname
<br>
error: Numerical value invalid!
<br>
The initial portion of string &quot;mpirun&quot; contains no decimal number
<br>
[huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe orte 2 mpirun -np 6 hostname
<br>
Your job 36 (&quot;mpirun&quot;) has been submitted
<br>
waiting for interactive job to be scheduled ...
<br>
Your interactive job 36 has been successfully scheduled.
<br>
Establishing builtin session to host ioitg2.ioit-grid.ac.vn ...
<br>
bash: mpirun: command not found
<br>
[huong_at_ioitg2 MyPhylo]$
<br>
<p>ERROR ! So I try:
<br>
[huong_at_ioitg2 MyPhylo]$ qrsh -verbose -pe orte 2 /opt/openmpi/bin/mpirun -np
<br>
6 hostname
<br>
Your job 38 (&quot;mpirun&quot;) has been submitted
<br>
waiting for interactive job to be scheduled ...
<br>
Your interactive job 38 has been successfully scheduled.
<br>
Establishing builtin session to host ioitg2.ioit-grid.ac.vn ...
<br>
ioitg2.ioit-grid.ac.vn
<br>
ioitg2.ioit-grid.ac.vn
<br>
ioitg2.ioit-grid.ac.vn
<br>
ioitg2.ioit-grid.ac.vn
<br>
ioitg2.ioit-grid.ac.vn
<br>
ioitg2.ioit-grid.ac.vn
<br>
[huong_at_ioitg2 MyPhylo]$
<br>
<p>This OK.
<br>
What is: the PATH points to where mpirun is located.
<br>
<p>TRY.
<br>
<p>Good chance
<br>
HT Cuoc
<br>
<p><p>On Fri, Apr 9, 2010 at 11:02 AM, Cristobal Navarro &lt;axischire_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after some days of work and testing, i managed to install SGE on two
</span><br>
<span class="quotelev1">&gt; machines, also installed openMPI 1.4.1 for each one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SGE is working, i can submit jobs and it schedules the jobs to the
</span><br>
<span class="quotelev1">&gt; available cores total of 6,
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
<p><p><span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12595.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>In reply to:</strong> <a href="12594.php">Cristobal Navarro: "[OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12597.php">Cristobal Navarro: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
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
