<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 09:15:34 2007" -->
<!-- isoreceived="20070327131534" -->
<!-- sent="Tue, 27 Mar 2007 09:15:24 -0400" -->
<!-- isosent="20070327131524" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes  swapping out" -->
<!-- id="C22E912C.1320%heywood_at_cshl.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4C6DDE2-D12B-4531-A82C-5303E7E44C86_at_cs.utk.edu" -->
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
<strong>From:</strong> Heywood, Todd (<em>heywood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-27 09:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2929.php">de Almeida, Valmor F.: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Previous message:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>In reply to:</strong> <a href="2907.php">George Bosilca: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried the trunk version with &quot;--mca btl tcp,self&quot;. Essentially system time
<br>
changes to idle time, since empty polling is being replaced by blocking
<br>
(right?). Page faults go to 0 though.
<br>
<p>It is interesting since you can see what is going on now, with distinct
<br>
phases of user time and idle time (sleep mode, en masse). Before, vmstat
<br>
showed processes going into sleep mode rather randomly, and distinct phases
<br>
of mostly user time or mostly system time were not visible.
<br>
<p>I also tried mpi_yield_when_idle=0 with the trunk version. No effect on
<br>
behavior.
<br>
<p>Todd
<br>
<p><p>On 3/23/07 7:15 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So far the described behavior seems as normal as expected. As Open
</span><br>
<span class="quotelev1">&gt; MPI never goes in blocking mode, the processes will always spin
</span><br>
<span class="quotelev1">&gt; between active and sleep mode. More processes on the same node leads
</span><br>
<span class="quotelev1">&gt; to more time in the system mode (because of the empty polls). There
</span><br>
<span class="quotelev1">&gt; is a trick in the trunk version of Open MPI which will trigger the
</span><br>
<span class="quotelev1">&gt; blocking mode if and only if TCP is the only used device. Please try
</span><br>
<span class="quotelev1">&gt; add &quot;--mca btl tcp,self&quot; to your mpirun command line, and check the
</span><br>
<span class="quotelev1">&gt; output of vmstat.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2007, at 3:32 PM, Heywood, Todd wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rolf,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible that everything is working just as it should?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's what I'm afraid of :-). But I did not expect to see such
</span><br>
<span class="quotelev2">&gt;&gt; communication overhead due to blocking from mpiBLAST, which is very
</span><br>
<span class="quotelev2">&gt;&gt; course-grained. I then tried HPL, which is computation-heavy, and
</span><br>
<span class="quotelev2">&gt;&gt; found the
</span><br>
<span class="quotelev2">&gt;&gt; same thing. Also, the system time seemed to correspond to the MPI
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; cycling between run and sleep (as seen via top), and I thought that
</span><br>
<span class="quotelev2">&gt;&gt; setting
</span><br>
<span class="quotelev2">&gt;&gt; the mpi_yield_when_idle parameter to 0 would keep the processes from
</span><br>
<span class="quotelev2">&gt;&gt; entering sleep state when blocking. But it doesn't.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Todd
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/23/07 2:06 PM, &quot;Rolf Vandevaart&quot; &lt;Rolf.Vandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Todd:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I assume the system time is being consumed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the calls to send and receive data over the TCP sockets.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As the number of processes in the job increases, then more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time is spent waiting for data from one of the other processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did a little experiment on a single node to see the difference
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in system time consumed when running over TCP vs when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running over shared memory.   When running on a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node and using the sm btl, I see almost 100% user time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I assume this is because the sm btl handles sending and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receiving its data within a shared memory segment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I switch over to TCP, I see my system time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go up.  Note that this is on Solaris.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RUNNING OVER SELF,SM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 8 -mca btl self,sm hpcc.amd64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    PID USERNAME USR SYS TRP TFL DFL LCK SLP LAT VCX ICX SCL SIG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PROCESS/NLWP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3505 rolfv    100 0.0 0.0 0.0 0.0 0.0 0.0 0.0   0  75 182   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3503 rolfv    100 0.0 0.0 0.0 0.0 0.0 0.0 0.2   0  69 116   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3499 rolfv     99 0.0 0.0 0.0 0.0 0.0 0.0 0.5   0 106 236   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3497 rolfv     99 0.0 0.0 0.0 0.0 0.0 0.0 1.0   0 169 200   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3501 rolfv     98 0.0 0.0 0.0 0.0 0.0 0.0 1.9   0 127 158   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3507 rolfv     98 0.0 0.0 0.0 0.0 0.0 0.0 2.0   0 244 200   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3509 rolfv     98 0.0 0.0 0.0 0.0 0.0 0.0 2.0   0 282 212   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3495 rolfv     97 0.0 0.0 0.0 0.0 0.0 0.0 3.2   0 237  98   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RUNNING OVER SELF,TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 8 -mca btl self,tcp hpcc.amd64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    PID USERNAME USR SYS TRP TFL DFL LCK SLP LAT VCX ICX SCL SIG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PROCESS/NLWP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4316 rolfv     93 6.9 0.0 0.0 0.0 0.0 0.0 0.2   5 346 .6M   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4328 rolfv     91 8.4 0.0 0.0 0.0 0.0 0.0 0.4   3  59 .15   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4324 rolfv     98 1.1 0.0 0.0 0.0 0.0 0.0 0.7   2 270 .1M   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4320 rolfv     88  12 0.0 0.0 0.0 0.0 0.0 0.8   4 244 .15   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4322 rolfv     94 5.1 0.0 0.0 0.0 0.0 0.0 1.3   2 150 .2M   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4318 rolfv     92 6.7 0.0 0.0 0.0 0.0 0.0 1.4   5 236 .9M   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4326 rolfv     93 5.3 0.0 0.0 0.0 0.0 0.0 1.7   7 117 .2M   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4314 rolfv     91 6.6 0.0 0.0 0.0 0.0 1.3 0.9  19 150 .10   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hpcc.amd64/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also ran HPL over a larger cluster of 6 nodes, and noticed even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; higher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system times.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And lastly, I ran a simple MPI test over a cluster of 64 nodes, 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using Sun HPC ClusterTools 6, and saw about a 50/50 split between
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and system time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   PID USERNAME USR SYS TRP TFL DFL LCK SLP LAT VCX ICX SCL SIG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PROCESS/NLWP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  11525 rolfv     55  44 0.1 0.0 0.0 0.0 0.1 0.4  76 960 .3M   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maxtrunc_ct6/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  11526 rolfv     54  45 0.0 0.0 0.0 0.0 0.0 1.0   0 362 .4M   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maxtrunc_ct6/1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible that everything is working just as it should?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Heywood, Todd wrote On 03/22/07 13:30,:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, according to the FAQ, aggressive mode can be &quot;forced&quot; so I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did try
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setting OMPI_MCA_mpi_yield_when_idle=0 before running. I also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tried turning
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor/memory affinity on. Efffects were minor. The MPI tasks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; still cycle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bewteen run and sleep states, driving up system time well over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mpstat shows SGE is indeed giving 4 or 2 slots per node as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; approporiate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (depending on memory) and the MPI tasks are using 4 or 2 cores,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sure, I also tried running directly with a hostfile with slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or slots=2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The same behavior occurs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This behavior is a function of the size of the job. I.e. As I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scale from 200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to 800 tasks the run/sleep cycling increases, so that system time
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grows from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maybe half the user time to maybe 5 times user time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is for TCP/gigE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Todd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3/22/07 12:19 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just for clarification: ompi_info only shows the *default* value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of the MCA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter. In this case, mpi_yield_when_idle defaults to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; aggressive, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that value is reset internally if the system sees an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;oversubscribed&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; condition.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The issue here isn't how many cores are on the node, but rather
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; how many
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; were specifically allocated to this job. If the allocation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wasn't at least 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (in your example), then we would automatically reset
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi_yield_when_idle to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be non-aggressive, regardless of how many cores are actually on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 3/22/07 7:14 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Yes, I'm using SGE. I also just noticed that when 2 tasks/slots
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; run on a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4-core node, the 2 tasks are still cycling between run and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sleep, with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; higher system time than user time.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ompi_info shows the MCA parameter mpi_yield_when_idle to be 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (aggressive),
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so that suggests the tasks aren't swapping out on bloccking calls.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Still puzzled.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Todd
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 3/22/07 7:36 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are you using a scheduler on your system?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; More specifically, does Open MPI know that you have for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; process slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on each node?  If you are using a hostfile and didn't specify
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;slots=4&quot; for each host, Open MPI will think that it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; oversubscribing and will therefore call sched_yield() in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; depths
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; of its progress engine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mar 21, 2007, at 5:08 PM, Heywood, Todd wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; P.s. I should have said this this is a pretty course-grained
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; application,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and netstat doesn't show much communication going on (except in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; stages).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 3/21/07 4:21 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I noticed that my OpenMPI processes are using larger amounts of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; system time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; than user time (via vmstat, top). I'm running on dual-core,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; dual-CPU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Opterons, with 4 slots per node, where the program has the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; themselves. A closer look showed that they are constantly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; switching between
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; run and sleep states with 4-8 page faults per second.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Why would this be? It doesn't happen with 4 sequential jobs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; running on a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node, where I get 99% user time, maybe 1% system time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The processes have plenty of memory. This behavior occurs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; whether
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processor/memory affinity or not (there is no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; oversubscription).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Todd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
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
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="2929.php">de Almeida, Valmor F.: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Previous message:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>In reply to:</strong> <a href="2907.php">George Bosilca: "Re: [OMPI users] MPI processes  swapping out"</a>
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
