<?
$subject_val = "Re: [OMPI users] 1.6.2 affinity failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 11:02:11 2012" -->
<!-- isoreceived="20121220160211" -->
<!-- sent="Thu, 20 Dec 2012 11:02:04 -0500" -->
<!-- isosent="20121220160204" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.6.2 affinity failures" -->
<!-- id="FECECD29-3EA1-4EF1-882E-47B976DBA2ED_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B0ED6E01-AEA2-4C6D-B34A-3BA255587DCE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.6.2 affinity failures<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 11:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21026.php">Corey Allen: "[OMPI users] Question about Lost Messages"</a>
<li><strong>Previous message:</strong> <a href="21024.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>In reply to:</strong> <a href="21024.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
w00t :-)
<br>
<p>Thanks
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Dec 20, 2012, at 10:46 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm....I'll see what I can do about the error message. I don't think there is much in 1.6 I can do, but in 1.7 I could generate an appropriate error message as we have a way to check the topologies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2012, at 7:11 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the info, 
</span><br>
<span class="quotelev2">&gt;&gt; That said I found the problem, one of the new nodes, had Hyperthreading on, and the rest didn't so all the nodes didn't match.  A quick 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pdsh lstopo | dshbak -c 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Uncovered the one different node.  The error just didn't give me a clue to that being the cause, which was very odd:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Correct node:
</span><br>
<span class="quotelev2">&gt;&gt; [brockp_at_nyx0930 ~]$ lstopo 
</span><br>
<span class="quotelev2">&gt;&gt; Machine (64GB)
</span><br>
<span class="quotelev2">&gt;&gt; NUMANode L#0 (P#0 32GB) + Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt; NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#8 (256KB) + L1 L#8 (32KB) + Core L#8 + PU L#8 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#9 (256KB) + L1 L#9 (32KB) + Core L#9 + PU L#9 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#10 (256KB) + L1 L#10 (32KB) + Core L#10 + PU L#10 (P#10)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#11 (256KB) + L1 L#11 (32KB) + Core L#11 + PU L#11 (P#11)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#12 (256KB) + L1 L#12 (32KB) + Core L#12 + PU L#12 (P#12)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#13 (256KB) + L1 L#13 (32KB) + Core L#13 + PU L#13 (P#13)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#14 (256KB) + L1 L#14 (32KB) + Core L#14 + PU L#14 (P#14)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#15 (256KB) + L1 L#15 (32KB) + Core L#15 + PU L#15 (P#15)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bad node:
</span><br>
<span class="quotelev2">&gt;&gt; [brockp_at_nyx0936 ~]$ lstopo
</span><br>
<span class="quotelev2">&gt;&gt; Machine (64GB)
</span><br>
<span class="quotelev2">&gt;&gt; NUMANode L#0 (P#0 32GB) + Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#1 (P#16)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#2 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#3 (P#17)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#4 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#5 (P#18)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#6 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#7 (P#19)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#8 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#9 (P#20)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#10 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#11 (P#21)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#12 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#13 (P#22)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#14 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#15 (P#23)
</span><br>
<span class="quotelev2">&gt;&gt; NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#8 (256KB) + L1 L#8 (32KB) + Core L#8
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#16 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#17 (P#24)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#9 (256KB) + L1 L#9 (32KB) + Core L#9
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#18 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#19 (P#25)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#10 (256KB) + L1 L#10 (32KB) + Core L#10
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#20 (P#10)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#21 (P#26)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#11 (256KB) + L1 L#11 (32KB) + Core L#11
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#22 (P#11)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#23 (P#27)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#12 (256KB) + L1 L#12 (32KB) + Core L#12
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#24 (P#12)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#25 (P#28)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#13 (256KB) + L1 L#13 (32KB) + Core L#13
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#26 (P#13)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#27 (P#29)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#14 (256KB) + L1 L#14 (32KB) + Core L#14
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#28 (P#14)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#29 (P#30)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#15 (256KB) + L1 L#15 (32KB) + Core L#15
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#30 (P#15)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#31 (P#31)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Once I removed that node from the pool the error went away, and using bind-to-core and cpus-per-rank worked. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see how an error message of the sort given would ever lead me to find a node with 'more' cores, even if fake, I was looking for a node that had a bad socket or wrong part.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 19, 2012, at 9:08 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid these are both known problems in the 1.6.2 release. I believe we fixed npersocket in 1.6.3, though you might check to be sure. On the large-scale issue, cpus-per-rank well might fail under those conditions. The algorithm in the 1.6 series hasn't seen much use, especially at scale.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In fact, cpus-per-rank has somewhat fallen by the wayside recently due to apparent lack of interest. I'm restoring it for the 1.7 series over the holiday (currently doesn't work in 1.7 or trunk).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 19, 2012, at 4:34 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Using openmpi 1.6.2 with intel 13.0  though the problem not specific to the compiler.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Using two 12 core 2 socket nodes, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 4 -npersocket 2 uptime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your job has requested a conflicting number of processes for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; App: uptime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; number of procs:  4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is more processes than we can launch under the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional directives and conditions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; number of sockets:   0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; npersocket:   2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any idea why this wouldn't work?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another problem the following does what I expect,  two 2 socket 8 core sockets. 16 total cores/node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 8 -npernode 4 -bind-to-core -cpus-per-rank 4 hwloc-bind --get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x0000000f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x0000000f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x000000f0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x000000f0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x00000f00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x00000f00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x0000f000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x0000f000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But fails at large scale:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 276 -npernode 4 -bind-to-core -cpus-per-rank 4 hwloc-bind --get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="21026.php">Corey Allen: "[OMPI users] Question about Lost Messages"</a>
<li><strong>Previous message:</strong> <a href="21024.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>In reply to:</strong> <a href="21024.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
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
