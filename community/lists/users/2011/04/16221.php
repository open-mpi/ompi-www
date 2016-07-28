<?
$subject_val = "Re: [OMPI users] Over committing?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 11:21:04 2011" -->
<!-- isoreceived="20110413152104" -->
<!-- sent="Wed, 13 Apr 2011 09:20:56 -0600" -->
<!-- isosent="20110413152056" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Over committing?" -->
<!-- id="F06FEAD9-D69E-411B-971F-94F63998DC74_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201104131509.p3DF9eXk008799_at_milliways.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Over committing?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 11:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16222.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16222.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16222.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I have no idea - we regularly run on Torque machines with the nodes fully populated. While most runs are only for a few hours, some runs go for days.
<br>
<p><p>How was OMPI configured? What OS version?
<br>
<p><p>On Apr 13, 2011, at 9:09 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; Version 1.3.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider a job that will run with 28 processes.  The user submits it
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qsub -l nodes=4:ppn=7 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which reserves 7 cores on (in this case) each of x3550x014 x3550x015 and
</span><br>
<span class="quotelev1">&gt; x3550x016 x3550x020.  Torque generates a file (PBS_NODEFILE) which lists
</span><br>
<span class="quotelev1">&gt; each node 7 times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpirun command given within the batch script is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 28 -machinefile $PBS_NODEFILE &lt;executable&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what I would refer to as 7+7+7+7, and it runs fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem occurs if, for instance, a 24 core job is attempted.  qsub
</span><br>
<span class="quotelev1">&gt; gets nodes=3:ppn=8 and mpirun has -np 24.  The job is now running on
</span><br>
<span class="quotelev1">&gt; three nodes, using all eight cores on each node - 8+8+8.  This sort of
</span><br>
<span class="quotelev1">&gt; job will eventually hang and has to be killed off.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cores	Nodes	Ppn	Result
</span><br>
<span class="quotelev1">&gt; -----	-----	---	------
</span><br>
<span class="quotelev1">&gt; 8	1	any	works
</span><br>
<span class="quotelev1">&gt; 8	&gt;1	1-7	works
</span><br>
<span class="quotelev1">&gt; 8	&gt;1	8	hangs
</span><br>
<span class="quotelev1">&gt; 16	1	any	works
</span><br>
<span class="quotelev1">&gt; 16	&gt;1	1-15	works
</span><br>
<span class="quotelev1">&gt; 16	&gt;1	16	hangs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have also tried test jobs on 8+7 (or 7+8) with inconclusive results.
</span><br>
<span class="quotelev1">&gt; Some of the live jobs run for a month or more and cut down versions do
</span><br>
<span class="quotelev1">&gt; not model well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin Rushton
</span><br>
<span class="quotelev1">&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev1">&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev1">&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.QinetiQ.com
</span><br>
<span class="quotelev1">&gt; QinetiQ - Delivering customer-focused solutions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: 13 April 2011 15:34
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Over committing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2011, at 8:13 AM, Rushton Martin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The bulk of our compute nodes are 8 cores (twin 4-core IBM x3550-m2).
</span><br>
<span class="quotelev2">&gt;&gt; Jobs are submitted by Torque/MOAB.  When run with up to np=8 there is 
</span><br>
<span class="quotelev2">&gt;&gt; good performance.  Attempting to run with more processors brings 
</span><br>
<span class="quotelev2">&gt;&gt; problems, specifically if any one node of a group of nodes has all 8 
</span><br>
<span class="quotelev2">&gt;&gt; cores in use the job hangs.  For instance running with 14 cores (7+7) 
</span><br>
<span class="quotelev2">&gt;&gt; is fine, but running with 16 (8+8) hangs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From the FAQs I note the issues of over committing and aggressive
</span><br>
<span class="quotelev2">&gt;&gt; scheduling.  Is it possible for mpirun (or orted on the remote nodes) 
</span><br>
<span class="quotelev2">&gt;&gt; to be blocked from progressing by a fully committed node?  We have a 
</span><br>
<span class="quotelev2">&gt;&gt; few
</span><br>
<span class="quotelev2">&gt;&gt; x3755-m2 machines with 16 cores, and we have detected a similar issue 
</span><br>
<span class="quotelev2">&gt;&gt; with 16+16.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not entirely sure I understand your notation, but we have never seen
</span><br>
<span class="quotelev1">&gt; an issue when running with fully loaded nodes (i.e., where the number of
</span><br>
<span class="quotelev1">&gt; MPI procs on the node = the number of cores).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of OMPI are you using? Are you binding the procs?
</span><br>
<span class="quotelev1">&gt; This email and any attachments to it may be confidential and are
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual to whom it is 
</span><br>
<span class="quotelev1">&gt; addressed. If you are not the intended recipient of this email,
</span><br>
<span class="quotelev1">&gt; you must neither take any action based upon its contents, nor 
</span><br>
<span class="quotelev1">&gt; copy or show it to anyone. Please contact the sender if you 
</span><br>
<span class="quotelev1">&gt; believe you have received this email in error. QinetiQ may 
</span><br>
<span class="quotelev1">&gt; monitor email traffic data and also the content of email for 
</span><br>
<span class="quotelev1">&gt; the purposes of security. QinetiQ Limited (Registered in England
</span><br>
<span class="quotelev1">&gt; &amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
</span><br>
<span class="quotelev1">&gt; Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
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
<li><strong>Next message:</strong> <a href="16222.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16222.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16222.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
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
