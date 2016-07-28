<?
$subject_val = "Re: [OMPI users] Over committing?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 12:04:39 2011" -->
<!-- isoreceived="20110413160439" -->
<!-- sent="Wed, 13 Apr 2011 17:04:23 +0100" -->
<!-- isosent="20110413160423" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Over committing?" -->
<!-- id="201104131604.p3DG4Z5j012399_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45A45D8D2A0DBB49B1BE570660FCE2F503C319E9_at_naeapaxrez04v.nadsusea.nads.navy.mil" -->
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
<strong>Date:</strong> 2011-04-13 12:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16226.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16224.php">Reuti: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16223.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16224.php">Reuti: "Re: [OMPI users] Over committing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Inline 
<br>
<p>-----Original Message-----
<br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On Behalf Of Stergiou, Jonathan C CIV NSWCCD West Bethesda,6640
<br>
<span class="quotelev1">&gt; Sent: 13 April 2011 16:52
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Over committing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Martin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have seen similar behavior when using certain codes.  CodeA can run
</span><br>
at ppn=8 with no problem, but CodeB will run much more slowly (or hang)
<br>
<span class="quotelev1">&gt; with ppn=8; instead we use ppn=7 for CodeB. 
</span><br>
<p>That is just what we have to do, but it does mean we are wasting 12.5%
<br>
of our CPU resource, something I'd rather not do permanently.
<br>
<p><span class="quotelev1">&gt; This becomes complicated when we run CodeA and CodeB together (coupled
</span><br>
simulations).  It requires a bit of fancy language in the Torque
<br>
<span class="quotelev1">&gt; script, but we are able to get these coupled jobs to run successfully.
</span><br>
<p><p><span class="quotelev1">&gt; Question: do you see this &quot;ppn=8 hanging behavior&quot; on every parallel
</span><br>
code you run, or only on specific applications?  Do you see it with and
<br>
<span class="quotelev1">&gt; without Torque?  Can you try running ppn=7 and ppn=8 on a simple mpi
</span><br>
code? 
<br>
<p>We only run one major code, the other codes run as single process and so
<br>
we do not see the problem.  When (if) the load comes down I can try
<br>
simpler jobs with ppn=8, but the hang often occurs a day or so into the
<br>
run.  I don't want to stop productive work with non-productive cycle
<br>
stealers!  It is worth noting that the main application is very CPU
<br>
intensive, it is FORTRAN code, so most of the memory is static, indeed
<br>
most of the memory is configured as a humungous one-dimensional array.
<br>
Very old school but what the heck, it works well when it's not hung.
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Rushton Martin
<br>
Sent: Wednesday, April 13, 2011 11:29
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Over committing?
<br>
<p>I'm afraid I can't comment on how OMPI was configured, &quot;as supplied by
<br>
the suppliers&quot;!  The users experiencing these problems use the Intel
<br>
bindings, loaded via the modules command.  We are running CentOS 5.3.
<br>
<p><p>Martin Rushton
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
Sent: 13 April 2011 16:21
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Over committing?
<br>
<p>Afraid I have no idea - we regularly run on Torque machines with the
<br>
nodes fully populated. While most runs are only for a few hours, some
<br>
runs go for days.
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
<span class="quotelev1">&gt; which reserves 7 cores on (in this case) each of x3550x014 x3550x015 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; x3550x016 x3550x020.  Torque generates a file (PBS_NODEFILE) which 
</span><br>
<span class="quotelev1">&gt; lists each node 7 times.
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
<p><span class="quotelev1">&gt; gets nodes=3:ppn=8 and mpirun has -np 24.  The job is now running on 
</span><br>
<span class="quotelev1">&gt; three nodes, using all eight cores on each node - 8+8+8.  This sort of
</span><br>
<p><span class="quotelev1">&gt; job will eventually hang and has to be killed off.
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
<span class="quotelev1">&gt; We have also tried test jobs on 8+7 (or 7+8) with inconclusive
</span><br>
results.
<br>
<span class="quotelev1">&gt; Some of the live jobs run for a month or more and cut down versions do
</span><br>
<p><span class="quotelev1">&gt; not model well.
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
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Ralph Castain
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
<p><span class="quotelev2">&gt;&gt; good performance.  Attempting to run with more processors brings 
</span><br>
<span class="quotelev2">&gt;&gt; problems, specifically if any one node of a group of nodes has all 8 
</span><br>
<span class="quotelev2">&gt;&gt; cores in use the job hangs.  For instance running with 14 cores (7+7)
</span><br>
<p><span class="quotelev2">&gt;&gt; is fine, but running with 16 (8+8) hangs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From the FAQs I note the issues of over committing and aggressive
</span><br>
<span class="quotelev2">&gt;&gt; scheduling.  Is it possible for mpirun (or orted on the remote nodes)
</span><br>
<p><span class="quotelev2">&gt;&gt; to be blocked from progressing by a fully committed node?  We have a 
</span><br>
<span class="quotelev2">&gt;&gt; few
</span><br>
<span class="quotelev2">&gt;&gt; x3755-m2 machines with 16 cores, and we have detected a similar issue
</span><br>
<p><span class="quotelev2">&gt;&gt; with 16+16.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not entirely sure I understand your notation, but we have never 
</span><br>
<span class="quotelev1">&gt; seen an issue when running with fully loaded nodes (i.e., where the 
</span><br>
<span class="quotelev1">&gt; number of MPI procs on the node = the number of cores).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of OMPI are you using? Are you binding the procs?
</span><br>
<span class="quotelev1">&gt; This email and any attachments to it may be confidential and are 
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual to whom it is addressed.
</span><br>
<p><span class="quotelev1">&gt; If you are not the intended recipient of this email, you must neither 
</span><br>
<span class="quotelev1">&gt; take any action based upon its contents, nor copy or show it to 
</span><br>
<span class="quotelev1">&gt; anyone. Please contact the sender if you believe you have received 
</span><br>
<span class="quotelev1">&gt; this email in error. QinetiQ may monitor email traffic data and also 
</span><br>
<span class="quotelev1">&gt; the content of email for the purposes of security. QinetiQ Limited 
</span><br>
<span class="quotelev1">&gt; (Registered in England &amp; Wales: Company Number: 3796233) Registered
</span><br>
<span class="quotelev1">&gt; office: Cody Technology Park, Ively Road, Farnborough, Hampshire, GU14
</span><br>
<p><span class="quotelev1">&gt; 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
The QinetiQ e-mail privacy policy and company information is detailed
<br>
elsewhere in the body of this email.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
The QinetiQ e-mail privacy policy and company information is detailed elsewhere in the body of this email.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16226.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16224.php">Reuti: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16223.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16224.php">Reuti: "Re: [OMPI users] Over committing?"</a>
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
