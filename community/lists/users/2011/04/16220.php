<?
$subject_val = "Re: [OMPI users] Over committing?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 11:09:45 2011" -->
<!-- isoreceived="20110413150945" -->
<!-- sent="Wed, 13 Apr 2011 16:09:27 +0100" -->
<!-- isosent="20110413150927" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Over committing?" -->
<!-- id="201104131509.p3DF9eXk008799_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="06A32C80-F418-4408-B4FA-A490EF57D81D_at_open-mpi.org" -->
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
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 11:09:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16221.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16221.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16221.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16224.php">Reuti: "Re: [OMPI users] Over committing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Version 1.3.2
<br>
<p>Consider a job that will run with 28 processes.  The user submits it
<br>
with:
<br>
<p>$ qsub -l nodes=4:ppn=7 ...
<br>
<p>which reserves 7 cores on (in this case) each of x3550x014 x3550x015 and
<br>
x3550x016 x3550x020.  Torque generates a file (PBS_NODEFILE) which lists
<br>
each node 7 times.
<br>
<p>The mpirun command given within the batch script is:
<br>
<p>$ mpirun -np 28 -machinefile $PBS_NODEFILE &lt;executable&gt;
<br>
<p>This is what I would refer to as 7+7+7+7, and it runs fine.
<br>
<p>The problem occurs if, for instance, a 24 core job is attempted.  qsub
<br>
gets nodes=3:ppn=8 and mpirun has -np 24.  The job is now running on
<br>
three nodes, using all eight cores on each node - 8+8+8.  This sort of
<br>
job will eventually hang and has to be killed off.
<br>
<p>Cores	Nodes	Ppn	Result
<br>
-----	-----	---	------
<br>
8	1	any	works
<br>
8	&gt;1	1-7	works
<br>
8	&gt;1	8	hangs
<br>
16	1	any	works
<br>
16	&gt;1	1-15	works
<br>
16	&gt;1	16	hangs
<br>
<p>We have also tried test jobs on 8+7 (or 7+8) with inconclusive results.
<br>
Some of the live jobs run for a month or more and cut down versions do
<br>
not model well.
<br>
<p>Martin Rushton
<br>
HPC System Manager, Weapons Technologies
<br>
Tel: 01959 514777, Mobile: 07939 219057
<br>
email: jmrushton_at_[hidden]
<br>
www.QinetiQ.com
<br>
QinetiQ - Delivering customer-focused solutions
<br>
<p>Please consider the environment before printing this email.
<br>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: 13 April 2011 15:34
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Over committing?
<br>
<p><p>On Apr 13, 2011, at 8:13 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; The bulk of our compute nodes are 8 cores (twin 4-core IBM x3550-m2).
</span><br>
<span class="quotelev1">&gt; Jobs are submitted by Torque/MOAB.  When run with up to np=8 there is 
</span><br>
<span class="quotelev1">&gt; good performance.  Attempting to run with more processors brings 
</span><br>
<span class="quotelev1">&gt; problems, specifically if any one node of a group of nodes has all 8 
</span><br>
<span class="quotelev1">&gt; cores in use the job hangs.  For instance running with 14 cores (7+7) 
</span><br>
<span class="quotelev1">&gt; is fine, but running with 16 (8+8) hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From the FAQs I note the issues of over committing and aggressive
</span><br>
<span class="quotelev1">&gt; scheduling.  Is it possible for mpirun (or orted on the remote nodes) 
</span><br>
<span class="quotelev1">&gt; to be blocked from progressing by a fully committed node?  We have a 
</span><br>
<span class="quotelev1">&gt; few
</span><br>
<span class="quotelev1">&gt; x3755-m2 machines with 16 cores, and we have detected a similar issue 
</span><br>
<span class="quotelev1">&gt; with 16+16.
</span><br>
<p>I'm not entirely sure I understand your notation, but we have never seen
<br>
an issue when running with fully loaded nodes (i.e., where the number of
<br>
MPI procs on the node = the number of cores).
<br>
<p>What version of OMPI are you using? Are you binding the procs?
<br>
This email and any attachments to it may be confidential and are
<br>
intended solely for the use of the individual to whom it is 
<br>
addressed. If you are not the intended recipient of this email,
<br>
you must neither take any action based upon its contents, nor 
<br>
copy or show it to anyone. Please contact the sender if you 
<br>
believe you have received this email in error. QinetiQ may 
<br>
monitor email traffic data and also the content of email for 
<br>
the purposes of security. QinetiQ Limited (Registered in England
<br>
&amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
<br>
Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16221.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16221.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16221.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16224.php">Reuti: "Re: [OMPI users] Over committing?"</a>
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
