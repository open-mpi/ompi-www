<?
$subject_val = "Re: [OMPI users] Over committing?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 09:20:03 2011" -->
<!-- isoreceived="20110414132003" -->
<!-- sent="Thu, 14 Apr 2011 07:19:53 -0600" -->
<!-- isosent="20110414131953" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Over committing?" -->
<!-- id="3BABA6FA-BD7B-41AE-92E3-05EC6FCBEE78_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="28B4A971-C712-438F-94F4-F3E8D45C60FC_at_cisco.com" -->
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
<strong>Date:</strong> 2011-04-14 09:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16242.php">Ralph Castain: "Re: [OMPI users] shm unlinking"</a>
<li><strong>In reply to:</strong> <a href="16241.php">Jeff Squyres: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...and note that it matters greatly where those barriers are - i.e., if a loop over a collective exists, and the barriers aren't in the loop, then it has nothing to do with the problem I described.
<br>
<p><p>On Apr 14, 2011, at 5:27 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think the next reasonable step is to use some kind of diagnostic to find out where and why the application is hung.  padb is a great free/open source tool that can be used here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2011, at 4:46 AM, Rushton Martin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I forwarded your question to the code custodian and received the
</span><br>
<span class="quotelev2">&gt;&gt; following reply (GRIM is the major code, the one which shows the
</span><br>
<span class="quotelev2">&gt;&gt; problem): &quot;I've not tried the debugger but GRIM does have a number of
</span><br>
<span class="quotelev2">&gt;&gt; mpi_barrier calls in it so I would think we are safe there. There is of
</span><br>
<span class="quotelev2">&gt;&gt; course a performance downside with an over-use of barriers! As mentioned
</span><br>
<span class="quotelev2">&gt;&gt; in the e-trail.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 14 April 2011 04:55
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Over committing?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have you folks used a debugger such as TotalView or padb to look at
</span><br>
<span class="quotelev2">&gt;&gt; these stalls?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ask because we discovered a long time ago that MPI collectives can
</span><br>
<span class="quotelev2">&gt;&gt; &quot;hang&quot; in the scenario you describe. It is caused by one rank falling
</span><br>
<span class="quotelev2">&gt;&gt; behind, and then never catching up due to resource allocations - i.e..,
</span><br>
<span class="quotelev2">&gt;&gt; once you fall behind due to the processor being used by something else,
</span><br>
<span class="quotelev2">&gt;&gt; you never catch up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code that causes this is generally a loop around a collective such
</span><br>
<span class="quotelev2">&gt;&gt; as Allreduce. The solution was to inject a &quot;barrier&quot; operation in the
</span><br>
<span class="quotelev2">&gt;&gt; loop periodically, thus ensuring that all ranks had an opportunity to
</span><br>
<span class="quotelev2">&gt;&gt; catch up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is an MCA param you can set that will inject the barrier - it
</span><br>
<span class="quotelev2">&gt;&gt; specifies to inject it every N collective operations (either before or
</span><br>
<span class="quotelev2">&gt;&gt; after the Nth op):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca coll_sync_barrier_before N
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; or 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca coll_sync_barrier_after N
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It'll slow the job down a little, depending upon how often you inject
</span><br>
<span class="quotelev2">&gt;&gt; the barrier. But it did allow us to run jobs reliably to completion when
</span><br>
<span class="quotelev2">&gt;&gt; the code involved such issues.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 13, 2011, at 10:07 AM, Rushton Martin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The 16 cores refers to x3755-m2s.  We have a mix of 3550s and 3755s in
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It could be memory, but I think not.  The jobs are well within memory 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; capacity, and the memory is mainly static.  If out of memory then the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs would be first candidate for the job.  Larger jobs run on the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3755s which as well as more memory have local disks for paging to.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Martin Rushton
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.QinetiQ.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QinetiQ - Delivering customer-focused solutions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: 13 April 2011 16:53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Over committing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 13.04.2011 um 17:09 schrieb Rushton Martin:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Version 1.3.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Consider a job that will run with 28 processes.  The user submits it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ qsub -l nodes=4:ppn=7 ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which reserves 7 cores on (in this case) each of x3550x014 x3550x015 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x3550x016 x3550x020.  Torque generates a file (PBS_NODEFILE) which 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lists each node 7 times.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The mpirun command given within the batch script is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 28 -machinefile $PBS_NODEFILE &lt;executable&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is what I would refer to as 7+7+7+7, and it runs fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem occurs if, for instance, a 24 core job is attempted.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qsub
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gets nodes=3:ppn=8 and mpirun has -np 24.  The job is now running on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; three nodes, using all eight cores on each node - 8+8+8.  This sort 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job will eventually hang and has to be killed off.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cores	Nodes	Ppn	Result
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----	-----	---	------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8	1	any	works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8	&gt;1	1-7	works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8	&gt;1	8	hangs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 16	1	any	works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 16	&gt;1	1-15	works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 16	&gt;1	16	hangs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How many cores do you have in each system? Looks like 8 is the maximum
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IBM offers from their datasheet, and still you can request 16 per
</span><br>
<span class="quotelev2">&gt;&gt; node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can it be a memory porblem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We have also tried test jobs on 8+7 (or 7+8) with inconclusive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some of the live jobs run for a month or more and cut down versions 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not model well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Martin Rushton
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.QinetiQ.com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; QinetiQ - Delivering customer-focused solutions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: 13 April 2011 15:34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Over committing?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 13, 2011, at 8:13 AM, Rushton Martin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The bulk of our compute nodes are 8 cores (twin 4-core IBM
</span><br>
<span class="quotelev2">&gt;&gt; x3550-m2).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jobs are submitted by Torque/MOAB.  When run with up to np=8 there 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; good performance.  Attempting to run with more processors brings 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problems, specifically if any one node of a group of nodes has all 8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores in use the job hangs.  For instance running with 14 cores 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (7+7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is fine, but running with 16 (8+8) hangs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From the FAQs I note the issues of over committing and aggressive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; scheduling.  Is it possible for mpirun (or orted on the remote 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to be blocked from progressing by a fully committed node?  We have a
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; few
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; x3755-m2 machines with 16 cores, and we have detected a similar 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with 16+16.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not entirely sure I understand your notation, but we have never 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seen an issue when running with fully loaded nodes (i.e., where the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; number of MPI procs on the node = the number of cores).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What version of OMPI are you using? Are you binding the procs?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This email and any attachments to it may be confidential and are 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intended solely for the use of the individual to whom it is
</span><br>
<span class="quotelev2">&gt;&gt; addressed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you are not the intended recipient of this email, you must neither
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; take any action based upon its contents, nor copy or show it to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anyone. Please contact the sender if you believe you have received 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this email in error. QinetiQ may monitor email traffic data and also 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the content of email for the purposes of security. QinetiQ Limited 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Registered in England &amp; Wales: Company Number: 3796233) Registered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; office: Cody Technology Park, Ively Road, Farnborough, Hampshire, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; GU14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The QinetiQ e-mail privacy policy and company information is detailed
</span><br>
<span class="quotelev2">&gt;&gt; elsewhere in the body of this email.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; The QinetiQ e-mail privacy policy and company information is detailed elsewhere in the body of this email.
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16242.php">Ralph Castain: "Re: [OMPI users] shm unlinking"</a>
<li><strong>In reply to:</strong> <a href="16241.php">Jeff Squyres: "Re: [OMPI users] Over committing?"</a>
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
