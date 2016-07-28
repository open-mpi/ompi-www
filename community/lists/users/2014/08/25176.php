<?
$subject_val = "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 04:09:03 2014" -->
<!-- isoreceived="20140828080903" -->
<!-- sent="Thu, 28 Aug 2014 08:09:01 +0000" -->
<!-- isosent="20140828080901" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun 1.5.4 problems when request &amp;gt; 28 slots (updated findings)" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293E2E0E6_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Mpirun 1.5.4 problems when request &amp;gt; 28 slots (updated findings)" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 04:09:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25177.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25175.php">Mike Dubman: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25179.php">Reuti: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)"</a>
<li><strong>Reply:</strong> <a href="25179.php">Reuti: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have some updates on these issues and some test results as well.
<br>
<p>We upgraded OpenMPI to the latest version 1.8.2, but when submitting jobs via the SGE orte parallel environment received
<br>
errors whenever more slots are requested than there are actual cores on the first node allocated to the job.
<br>
<p>The btl tcp,self switch passed to mpirun made significant differences in performance as per the below:
<br>
<p>Even with the oversubscribe option, the memory mapping errors still persist. On 32 core nodes and with HPL run compiled for openmpi/1.8.2,  it reliably starts failing at 20 cores allocated. Note that I tested with 'btl tcp,self' defined and it does slow down the solve by 2 on a quick solve. The results on a larger solve would probably be more dramatic:
<br>
- Quick HPL 16 core with SM: ~19GFlops
<br>
- Quick HPL 16 core without SM: ~10GFlops
<br>
<p>Unfortunately, a recompiled HPL did not work, but it did give us more information (error below). Still trying a couple things.
<br>
<p>A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;Node:        csclprd3-0-7
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
<p>When using the SGE make parallel environment to submit jobs everything worked perfectly.
<br>
I noticed when using the make PE, the number of slots allocated from each node to the job
<br>
corresponded to the number of CPU's and disregarded any additional cores within a CPU and
<br>
any hyperthreading cores.
<br>
<p>Here are the definitions of the two parallel environments tested (with orte always failing when
<br>
more slots are requested than there are CPU cores on the first node allocated to the job by
<br>
SGE):
<br>
<p>[root_at_csclprd3 ~]# qconf -sp orte
<br>
pe_name            orte
<br>
slots              9999
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $fill_up
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary TRUE
<br>
qsort_args         NONE
<br>
<p>[root_at_csclprd3 ~]# qconf -sp make
<br>
pe_name            make
<br>
slots              999
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    NONE
<br>
stop_proc_args     NONE
<br>
allocation_rule    $round_robin
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary TRUE
<br>
qsort_args         NONE
<br>
<p>Although everything seems to work with the make PE, I'd still like
<br>
to know why? Because on a much older version of openMPI loaded
<br>
on an older version of CentOS, SGE and ROCKS, using all physical
<br>
cores, as well as all hyperthreads was never a problem (even on NUMA
<br>
nodes).
<br>
<p>What is the recommended SGE parallel environment definition for
<br>
OpenMPI 1.8.2?
<br>
<p>I apologize for the length of this, but I thought it best to provide more
<br>
information than less.
<br>
<p>Thank you in advance,
<br>
<p>-Bill Lane
<br>
<p>________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
<br>
Sent: Friday, August 08, 2014 5:25 AM
<br>
To: Open MPI User's List
<br>
Subject: Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots
<br>
<p>On Aug 8, 2014, at 1:24 AM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Using the &quot;--mca btl tcp,self&quot; switch to mpirun solved all the issues (in addition to
</span><br>
<span class="quotelev1">&gt; the requirement to include the --mca btl_tcp_if_include eth0 switch). I believe
</span><br>
<span class="quotelev1">&gt; the &quot;--mca btl tcp,self&quot; switch limits inter-process communication within a node to using the TCP
</span><br>
<span class="quotelev1">&gt; loopback rather than shared memory.
</span><br>
<p>Correct.  You will not be using shared memory for MPI communication at all -- just TCP.
<br>
<p><span class="quotelev1">&gt; I should also point out that all of the nodes
</span><br>
<span class="quotelev1">&gt; on this cluster feature NUMA architecture.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will using the &quot;--mca btl tcp,self&quot; switch to mpirun result in any degraded performance
</span><br>
<span class="quotelev1">&gt; issues over using shared memory?
</span><br>
<p>Generally yes, but it depends on your application.  If your application does very little MPI communication, then the difference between shared memory and TCP is likely negligible.
<br>
<p>I'd strongly suggest two things:
<br>
<p>- Upgrade to at least Open MPI 1.6.5 (1.8.x would be better, if possible)
<br>
- Run your program through a memory-checking debugger such as Valgrind
<br>
<p>Seg faults like you initially described can be caused by errors in your MPI application itself -- the fact that using TCP only (and not shared memory) avoids the segvs does not mean that the issue is actually fixed; it may well mean that the error is still there, but is happening in a case that doesn't seem to cause enough damage to cause a segv.
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24951.php">http://www.open-mpi.org/community/lists/users/2014/08/24951.php</a>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25177.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25175.php">Mike Dubman: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25179.php">Reuti: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)"</a>
<li><strong>Reply:</strong> <a href="25179.php">Reuti: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)"</a>
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
