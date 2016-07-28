<?
$subject_val = "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots	(updated findings)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 30 10:15:52 2014" -->
<!-- isoreceived="20140830141552" -->
<!-- sent="Sat, 30 Aug 2014 07:15:47 -0700" -->
<!-- isosent="20140830141547" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun 1.5.4 problems when request &amp;gt; 28 slots	(updated findings)" -->
<!-- id="E094D1A5-AAF2-42FC-839B-22DB39E93D0F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293E2F323_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots	(updated findings)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-30 10:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25204.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25202.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots	(updated findings)"</a>
<li><strong>In reply to:</strong> <a href="25202.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots	(updated findings)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25224.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25224.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hwloc requires the numactl-devel package in addition to the numactl one
<br>
<p>If I understand the email thread correctly, it sounds like you have at least some nodes in your system that have fewer cores than others - is that correct?
<br>
<p><span class="quotelev2">&gt;&gt; Here are the definitions of the two parallel environments tested (with orte always failing when
</span><br>
<span class="quotelev2">&gt;&gt; more slots are requested than there are CPU cores on the first node allocated to the job by
</span><br>
<span class="quotelev2">&gt;&gt; SGE):
</span><br>
<p>If that is the situation, then you need to add --hetero-nodes to your cmd line so we look at the actual topology of every node. Otherwise, for scalability reasons, we only look at the first node in the allocation and assume all nodes are the same.
<br>
<p>If that isn't the case, then it sounds like we are seeing fewer cores than exist on the system for some reason. You could try installing hwloc independently, and then running &quot;lstopo&quot; to find out what it detects. Another thing you could do is add &quot;-mca plm_base_verbose 100&quot; to your cmd line (I suggest doing that with just a couple of nodes in your allocation) and that will dump the detected topology to stderr.
<br>
<p>I'm surprised the bind-to none option didn't remove the error - it definitely should as we won't be binding when that is given. However, I note that you misspelled it in your reply, so maybe you just didn't type it correctly? It is &quot;--bind-to none&quot; - note the space between the &quot;to&quot; and the &quot;none&quot;. You'll take a performance hit, but it should at least run.
<br>
<p><p><p>On Aug 29, 2014, at 11:29 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The --bind-to-none switch didn't help, I'm still getting the same errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only NUMA package installed on the nodes in this CentOS 6.2 cluster is the
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; numactl-2.0.7-3.el6.x86_64
</span><br>
<span class="quotelev1">&gt; this package is described as: numactl.x86_64 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since many of these systems are NUMA systems (with separate memory address spaces
</span><br>
<span class="quotelev1">&gt; for the sockets) could it be that the correct NUMA libraries aren't installed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are some of the other NUMA packages available for CentOS 6.x:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yum search numa | less
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Loaded plugins: fastestmirror
</span><br>
<span class="quotelev1">&gt;                Loading mirror speeds from cached hostfile
</span><br>
<span class="quotelev1">&gt;                ============================== N/S Matched: numa ===============================
</span><br>
<span class="quotelev1">&gt;                numactl-devel.i686 : Development package for building Applications that use numa
</span><br>
<span class="quotelev1">&gt;                numactl-devel.x86_64 : Development package for building Applications that use
</span><br>
<span class="quotelev1">&gt;                                     : numa
</span><br>
<span class="quotelev1">&gt;                numad.x86_64 : NUMA user daemon
</span><br>
<span class="quotelev1">&gt;                numactl.i686 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev1">&gt;                numactl.x86_64 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Bill Lane
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Reuti [reuti_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, August 28, 2014 3:27 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 28.08.2014 um 10:09 schrieb Lane, William:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have some updates on these issues and some test results as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We upgraded OpenMPI to the latest version 1.8.2, but when submitting jobs via the SGE orte parallel environment received
</span><br>
<span class="quotelev2">&gt;&gt; errors whenever more slots are requested than there are actual cores on the first node allocated to the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does &quot;-bind-to none&quot; help? The binding is switched on by default in Open MPI 1.8 onwards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The btl tcp,self switch passed to mpirun made significant differences in performance as per the below:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Even with the oversubscribe option, the memory mapping errors still persist. On 32 core nodes and with HPL run compiled for openmpi/1.8.2,  it reliably starts failing at 20 cores allocated. Note that I tested with 'btl tcp,self' defined and it does slow down the solve by 2 on a quick solve. The results on a larger solve would probably be more dramatic:
</span><br>
<span class="quotelev2">&gt;&gt; - Quick HPL 16 core with SM: ~19GFlops
</span><br>
<span class="quotelev2">&gt;&gt; - Quick HPL 16 core without SM: ~10GFlops
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, a recompiled HPL did not work, but it did give us more information (error below). Still trying a couple things.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;  Node:        csclprd3-0-7
</span><br>
<span class="quotelev2">&gt;&gt;  #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;  #cpus:       1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When using the SGE make parallel environment to submit jobs everything worked perfectly.
</span><br>
<span class="quotelev2">&gt;&gt; I noticed when using the make PE, the number of slots allocated from each node to the job
</span><br>
<span class="quotelev2">&gt;&gt; corresponded to the number of CPU's and disregarded any additional cores within a CPU and
</span><br>
<span class="quotelev2">&gt;&gt; any hyperthreading cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For SGE the hyperthreading cores count as normal cores. In principle it's possible to have an RQS defined in SGE (`qconf -srqsl`) which will limit the number of cores for the &quot;make&quot; PE, or (better) limit it in each exechost defintion to the physical installed ones (this is what I set up usually - maybe leaving hyperthreading switched on gives some room for the kernel processes this way).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are the definitions of the two parallel environments tested (with orte always failing when
</span><br>
<span class="quotelev2">&gt;&gt; more slots are requested than there are CPU cores on the first node allocated to the job by
</span><br>
<span class="quotelev2">&gt;&gt; SGE):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_csclprd3 ~]# qconf -sp orte
</span><br>
<span class="quotelev2">&gt;&gt; pe_name            orte
</span><br>
<span class="quotelev2">&gt;&gt; slots              9999
</span><br>
<span class="quotelev2">&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt;&gt; qsort_args         NONE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_csclprd3 ~]# qconf -sp make
</span><br>
<span class="quotelev2">&gt;&gt; pe_name            make
</span><br>
<span class="quotelev2">&gt;&gt; slots              999
</span><br>
<span class="quotelev2">&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args    NONE
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args     NONE
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt;&gt; qsort_args         NONE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Although everything seems to work with the make PE, I'd still like
</span><br>
<span class="quotelev2">&gt;&gt; to know why? Because on a much older version of openMPI loaded
</span><br>
<span class="quotelev2">&gt;&gt; on an older version of CentOS, SGE and ROCKS, using all physical
</span><br>
<span class="quotelev2">&gt;&gt; cores, as well as all hyperthreads was never a problem (even on NUMA
</span><br>
<span class="quotelev2">&gt;&gt; nodes).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is the recommended SGE parallel environment definition for
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.8.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whether you prefer $fill_up or $round_robin is up to you - do you prefer all your processes on the least amount of machines or spread around in the cluster. If there is much communication maybe it's better on less machines, but if each process has heavy I/O to the local scratch disk spreading it around may be the preferred choice. This doesn't make any difference to Open MPI, as the generated $PE_HOSTFILE contains just the list of granted slots. Doing it in an $fill_up style will of course fill the first node including the hyperthreading ones before moving to the next machine (`man sge_pe`).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I apologize for the length of this, but I thought it best to provide more
</span><br>
<span class="quotelev2">&gt;&gt; information than less.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, August 08, 2014 5:25 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI User's List
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 8, 2014, at 1:24 AM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the &quot;--mca btl tcp,self&quot; switch to mpirun solved all the issues (in addition to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the requirement to include the --mca btl_tcp_if_include eth0 switch). I believe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;--mca btl tcp,self&quot; switch limits inter-process communication within a node to using the TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loopback rather than shared memory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Correct.  You will not be using shared memory for MPI communication at all -- just TCP.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I should also point out that all of the nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on this cluster feature NUMA architecture.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will using the &quot;--mca btl tcp,self&quot; switch to mpirun result in any degraded performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issues over using shared memory?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Generally yes, but it depends on your application.  If your application does very little MPI communication, then the difference between shared memory and TCP is likely negligible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd strongly suggest two things:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Upgrade to at least Open MPI 1.6.5 (1.8.x would be better, if possible)
</span><br>
<span class="quotelev2">&gt;&gt; - Run your program through a memory-checking debugger such as Valgrind
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Seg faults like you initially described can be caused by errors in your MPI application itself -- the fact that using TCP only (and not shared memory) avoids the segvs does not mean that the issue is actually fixed; it may well mean that the error is still there, but is happening in a case that doesn't seem to cause enough damage to cause a segv.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24951.php">http://www.open-mpi.org/community/lists/users/2014/08/24951.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25176.php">http://www.open-mpi.org/community/lists/users/2014/08/25176.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25179.php">http://www.open-mpi.org/community/lists/users/2014/08/25179.php</a>
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25202.php">http://www.open-mpi.org/community/lists/users/2014/08/25202.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25204.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25202.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots	(updated findings)"</a>
<li><strong>In reply to:</strong> <a href="25202.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots	(updated findings)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25224.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25224.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
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
