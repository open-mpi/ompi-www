<?
$subject_val = "Re: [OMPI users] Over committing?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 04:46:26 2011" -->
<!-- isoreceived="20110414084626" -->
<!-- sent="Thu, 14 Apr 2011 09:46:00 +0100" -->
<!-- isosent="20110414084600" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Over committing?" -->
<!-- id="13027707807958391_at_towy" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2ED25659-8E30-429B-AE4E-D7053FD74113_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-04-14 04:46:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16240.php">Rushton Martin: "[OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16238.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16238.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16240.php">Rushton Martin: "[OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16240.php">Rushton Martin: "[OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16241.php">Jeff Squyres: "Re: [OMPI users] Over committing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forwarded your question to the code custodian and received the
<br>
following reply (GRIM is the major code, the one which shows the
<br>
problem): &quot;I've not tried the debugger but GRIM does have a number of
<br>
mpi_barrier calls in it so I would think we are safe there. There is of
<br>
course a performance downside with an over-use of barriers! As mentioned
<br>
in the e-trail.&quot;
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
Sent: 14 April 2011 04:55
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Over committing?
<br>
<p>Have you folks used a debugger such as TotalView or padb to look at
<br>
these stalls?
<br>
<p>I ask because we discovered a long time ago that MPI collectives can
<br>
&quot;hang&quot; in the scenario you describe. It is caused by one rank falling
<br>
behind, and then never catching up due to resource allocations - i.e..,
<br>
once you fall behind due to the processor being used by something else,
<br>
you never catch up.
<br>
<p>The code that causes this is generally a loop around a collective such
<br>
as Allreduce. The solution was to inject a &quot;barrier&quot; operation in the
<br>
loop periodically, thus ensuring that all ranks had an opportunity to
<br>
catch up.
<br>
<p>There is an MCA param you can set that will inject the barrier - it
<br>
specifies to inject it every N collective operations (either before or
<br>
after the Nth op):
<br>
<p>-mca coll_sync_barrier_before N
<br>
<p>or 
<br>
<p>-mca coll_sync_barrier_after N
<br>
<p>It'll slow the job down a little, depending upon how often you inject
<br>
the barrier. But it did allow us to run jobs reliably to completion when
<br>
the code involved such issues.
<br>
<p><p>On Apr 13, 2011, at 10:07 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; The 16 cores refers to x3755-m2s.  We have a mix of 3550s and 3755s in
</span><br>
<p><span class="quotelev1">&gt; the cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It could be memory, but I think not.  The jobs are well within memory 
</span><br>
<span class="quotelev1">&gt; capacity, and the memory is mainly static.  If out of memory then the 
</span><br>
<span class="quotelev1">&gt; jobs would be first candidate for the job.  Larger jobs run on the 
</span><br>
<span class="quotelev1">&gt; 3755s which as well as more memory have local disks for paging to.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; On Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: 13 April 2011 16:53
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Over committing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 13.04.2011 um 17:09 schrieb Rushton Martin:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Version 1.3.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Consider a job that will run with 28 processes.  The user submits it
</span><br>
<span class="quotelev2">&gt;&gt; with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ qsub -l nodes=4:ppn=7 ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which reserves 7 cores on (in this case) each of x3550x014 x3550x015 
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; x3550x016 x3550x020.  Torque generates a file (PBS_NODEFILE) which 
</span><br>
<span class="quotelev2">&gt;&gt; lists each node 7 times.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The mpirun command given within the batch script is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 28 -machinefile $PBS_NODEFILE &lt;executable&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is what I would refer to as 7+7+7+7, and it runs fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem occurs if, for instance, a 24 core job is attempted.  
</span><br>
<span class="quotelev2">&gt;&gt; qsub
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; gets nodes=3:ppn=8 and mpirun has -np 24.  The job is now running on 
</span><br>
<span class="quotelev2">&gt;&gt; three nodes, using all eight cores on each node - 8+8+8.  This sort 
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; job will eventually hang and has to be killed off.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cores	Nodes	Ppn	Result
</span><br>
<span class="quotelev2">&gt;&gt; -----	-----	---	------
</span><br>
<span class="quotelev2">&gt;&gt; 8	1	any	works
</span><br>
<span class="quotelev2">&gt;&gt; 8	&gt;1	1-7	works
</span><br>
<span class="quotelev2">&gt;&gt; 8	&gt;1	8	hangs
</span><br>
<span class="quotelev2">&gt;&gt; 16	1	any	works
</span><br>
<span class="quotelev2">&gt;&gt; 16	&gt;1	1-15	works
</span><br>
<span class="quotelev2">&gt;&gt; 16	&gt;1	16	hangs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How many cores do you have in each system? Looks like 8 is the maximum
</span><br>
<p><span class="quotelev1">&gt; IBM offers from their datasheet, and still you can request 16 per
</span><br>
node?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can it be a memory porblem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have also tried test jobs on 8+7 (or 7+8) with inconclusive
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<span class="quotelev2">&gt;&gt; Some of the live jobs run for a month or more and cut down versions 
</span><br>
<span class="quotelev2">&gt;&gt; do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; not model well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Martin Rushton
</span><br>
<span class="quotelev2">&gt;&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev2">&gt;&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev2">&gt;&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; www.QinetiQ.com
</span><br>
<span class="quotelev2">&gt;&gt; QinetiQ - Delivering customer-focused solutions
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 13 April 2011 15:34
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Over committing?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 13, 2011, at 8:13 AM, Rushton Martin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The bulk of our compute nodes are 8 cores (twin 4-core IBM
</span><br>
x3550-m2).
<br>
<span class="quotelev3">&gt;&gt;&gt; Jobs are submitted by Torque/MOAB.  When run with up to np=8 there 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good performance.  Attempting to run with more processors brings 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems, specifically if any one node of a group of nodes has all 8
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; cores in use the job hangs.  For instance running with 14 cores 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (7+7)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is fine, but running with 16 (8+8) hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From the FAQs I note the issues of over committing and aggressive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduling.  Is it possible for mpirun (or orted on the remote 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be blocked from progressing by a fully committed node?  We have a
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x3755-m2 machines with 16 cores, and we have detected a similar 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with 16+16.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not entirely sure I understand your notation, but we have never 
</span><br>
<span class="quotelev2">&gt;&gt; seen an issue when running with fully loaded nodes (i.e., where the 
</span><br>
<span class="quotelev2">&gt;&gt; number of MPI procs on the node = the number of cores).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What version of OMPI are you using? Are you binding the procs?
</span><br>
<span class="quotelev2">&gt;&gt; This email and any attachments to it may be confidential and are 
</span><br>
<span class="quotelev2">&gt;&gt; intended solely for the use of the individual to whom it is
</span><br>
addressed.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient of this email, you must neither
</span><br>
<p><span class="quotelev2">&gt;&gt; take any action based upon its contents, nor copy or show it to 
</span><br>
<span class="quotelev2">&gt;&gt; anyone. Please contact the sender if you believe you have received 
</span><br>
<span class="quotelev2">&gt;&gt; this email in error. QinetiQ may monitor email traffic data and also 
</span><br>
<span class="quotelev2">&gt;&gt; the content of email for the purposes of security. QinetiQ Limited 
</span><br>
<span class="quotelev2">&gt;&gt; (Registered in England &amp; Wales: Company Number: 3796233) Registered
</span><br>
<span class="quotelev2">&gt;&gt; office: Cody Technology Park, Ively Road, Farnborough, Hampshire, 
</span><br>
<span class="quotelev2">&gt;&gt; GU14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; The QinetiQ e-mail privacy policy and company information is detailed
</span><br>
elsewhere in the body of this email.
<br>
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
The QinetiQ e-mail privacy policy and company information is detailed elsewhere in the body of this email.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16240.php">Rushton Martin: "[OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16238.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16238.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16240.php">Rushton Martin: "[OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16240.php">Rushton Martin: "[OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16241.php">Jeff Squyres: "Re: [OMPI users] Over committing?"</a>
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
