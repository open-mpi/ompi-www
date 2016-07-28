<?
$subject_val = "Re: [OMPI users] Running on two nodes slower than running on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 01:16:13 2014" -->
<!-- isoreceived="20140130061613" -->
<!-- sent="Thu, 30 Jan 2014 14:16:12 +0800" -->
<!-- isosent="20140130061612" -->
<!-- name="Victor" -->
<!-- email="victor.major_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on two nodes slower than running on one node" -->
<!-- id="CAJTHAufB01afpgNkzPMprVha8_MEF3aJ56xruVuWqs7Vyzfa8w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="672F337D-EA6A-49B9-9461-345919F21D37_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running on two nodes slower than running on one node<br>
<strong>From:</strong> Victor (<em>victor.major_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-30 01:16:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23506.php">John Hearns: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23504.php">Ralph Castain: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23504.php">Ralph Castain: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23506.php">John Hearns: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23506.php">John Hearns: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the very detailed reply Ralph. I will try what you say. I
<br>
will need to ask the developers to let me know about threading of the main
<br>
solver process.
<br>
<p><p>On 30 January 2014 12:30, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2014, at 7:56 PM, Victor &lt;victor.major_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the insights Tim. I was aware that the CPUs will choke beyond a
</span><br>
<span class="quotelev1">&gt; certain point. From memory on my machine this happens with 5 concurrent MPI
</span><br>
<span class="quotelev1">&gt; jobs with that benchmark that I am using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My primary question was about scaling between the nodes. I was not getting
</span><br>
<span class="quotelev1">&gt; close to double the performance when running MPI jobs acros two 4 core
</span><br>
<span class="quotelev1">&gt; nodes. It may be better now since I have Open-MX in place, but I have not
</span><br>
<span class="quotelev1">&gt; repeated the benchmarks yet since I need to get one simulation job done
</span><br>
<span class="quotelev1">&gt; asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of that may be due to expected loss of performance when you switch
</span><br>
<span class="quotelev1">&gt; from shared memory to inter-node transports. While it is true about
</span><br>
<span class="quotelev1">&gt; saturation of the memory path, what you reported could be more consistent
</span><br>
<span class="quotelev1">&gt; with that transition - i.e., it isn't unusual to see applications perform
</span><br>
<span class="quotelev1">&gt; better when run on a single node, depending upon how they are written, up
</span><br>
<span class="quotelev1">&gt; to a certain size of problem (which your code may not be hitting).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding your mention of setting affinities and MPI ranks do you have a
</span><br>
<span class="quotelev1">&gt; specific (as in syntactically specific since I am a novice and easily
</span><br>
<span class="quotelev1">&gt; confused...) examples how I may want to set affinities to get the Westmere
</span><br>
<span class="quotelev1">&gt; node performing better?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to-core -cpus-per-rank 2 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will bind each MPI rank to 2 cores. Note that this will definitely *not*
</span><br>
<span class="quotelev1">&gt; be a good idea if you are running more than two threads in your process -
</span><br>
<span class="quotelev1">&gt; if you are, then set --cpus-per-rank to the number of threads, keeping in
</span><br>
<span class="quotelev1">&gt; mind that you want things to break evenly across the sockets. In other
</span><br>
<span class="quotelev1">&gt; words, if you have two 6 core/socket Westmere's on the node, then you
</span><br>
<span class="quotelev1">&gt; either want to run 6 process at cpus-per-rank=2 if each process runs 2
</span><br>
<span class="quotelev1">&gt; threads, or 4 processes with cpus-per-rank=3 if each process runs 3
</span><br>
<span class="quotelev1">&gt; threads, or 2 processes with no cpus-per-rank but --bind-to-socket instead
</span><br>
<span class="quotelev1">&gt; of --bind-to-core for any other thread number &gt; 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You would not want to run any other number of processes on the node or
</span><br>
<span class="quotelev1">&gt; else the binding pattern will cause a single process to split its threads
</span><br>
<span class="quotelev1">&gt; across the sockets - which will definitely hurt performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info returns this: MCA paffinity: hwloc (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component v1.6.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And finally to hybridisation... in a week or so I will get 4 AMD A10-6800
</span><br>
<span class="quotelev1">&gt; machines with 8Gb each on loan and will attempt to make them work along the
</span><br>
<span class="quotelev1">&gt; existing Intel nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Victor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 29 January 2014 22:03, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/29/2014 8:02 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quoting Victor &lt;victor.major_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks for the reply Reuti,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are two machines: Node1 with 12 physical cores (dual 6 core Xeon)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have this CPU?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://ark.intel.com/de/products/37109/Intel-Xeon">http://ark.intel.com/de/products/37109/Intel-Xeon</a>-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Processor-X5560-8M-Cache-2_80-GHz-6_40-GTs-Intel-QPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  It's expected on the Xeon Westmere 6-core CPUs to see MPI performance
</span><br>
<span class="quotelev2">&gt;&gt; saturating when all 4 of the internal buss paths are in use.  For this
</span><br>
<span class="quotelev2">&gt;&gt; reason, hybrid MPI/OpenMP with 2 cores per MPI rank, with affinity set so
</span><br>
<span class="quotelev2">&gt;&gt; that each MPI rank has its own internal CPU buss, could out-perform plain
</span><br>
<span class="quotelev2">&gt;&gt; MPI on those CPUs.
</span><br>
<span class="quotelev2">&gt;&gt; That scheme of pairing cores on selected internal buss paths hasn't been
</span><br>
<span class="quotelev2">&gt;&gt; repeated.  Some influential customers learned to prefer the 4-core version
</span><br>
<span class="quotelev2">&gt;&gt; of that CPU, given a reluctance to adopt MPI/OpenMP hybrid with affinity.
</span><br>
<span class="quotelev2">&gt;&gt; If you want to talk about &quot;downright strange,&quot; start thinking about the
</span><br>
<span class="quotelev2">&gt;&gt; schemes to optimize performance of 8 threads with 2 threads assigned to
</span><br>
<span class="quotelev2">&gt;&gt; each internal CPU buss on that CPU model.  Or your scheme of trying to
</span><br>
<span class="quotelev2">&gt;&gt; balance MPI performance between very different CPU models.
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Node2 with 4 physical cores (i5-2400).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regarding scaling on the single 12 core node, not it is also not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linear. In
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fact it is downright strange. I do not remember the numbers right now
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10 jobs are faster than 11 and 12 are the fastest with peak performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; approximately 66 Msu/s which is also far from triple the 4 core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance. This odd non-linear behaviour also happens at the lower job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; counts on that 12 core node. I understand the decrease in scaling with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; increase in core count on the single node as the memory bandwidth is an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On the 4 core machine the scaling is progressive, ie. every additional
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; brings an increase in performance. Single core delivers 8.1 Msu/s while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores deliver 30.8 Msu/s. This is almost linear.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since my original email I have also installed Open-MX and recompiled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI to use it. This has resulted in approximately 10% better
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance using the existing GbE hardware.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 29 January 2014 19:40, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Am 29.01.2014 um 03:00 schrieb Victor:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; I am running a CFD simulation benchmark cavity3d available within
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.palabos.org/images/palabos_releases/palabos-v1.4r1.tgz">http://www.palabos.org/images/palabos_releases/palabos-v1.4r1.tgz</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; It is a parallel friendly Lattice Botlzmann solver library.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Palabos provides benchmark results for the cavity3d on several
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; platforms and variables here:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://wiki.palabos.org/plb_wiki:benchmark:cavity_n400">http://wiki.palabos.org/plb_wiki:benchmark:cavity_n400</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; The problem that I have is that the benchmark performance on my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cluster
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does not scale even close to a linear scale.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; My cluster configuration:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Node1: Dual Xeon 5560 48 Gb RAM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Node2: i5-2400 24 Gb RAM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Gigabit ethernet connection on eth0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; OpenMPI 1.6.5 on Ubuntu 12.04.3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Hostfile:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Node1 -slots=4 -max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Node2 -slots=4 -max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; MPI command: mpirun --mca btl_tcp_if_include eth0 --hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/mpiuser/.mpi_hostfile -np 8 ./cavity3d 400
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Problem:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; cavity3d 400
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; When I run mpirun -np 4 on Node1 I get 35.7615 Mega site updates per
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; second
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; When I run mpirun -np 4 on Node2 I get 30.7972 Mega site updates per
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; second
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; When I run mpirun --mca btl_tcp_if_include eth0 --hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/mpiuser/.mpi_hostfile -np 8 ./cavity3d 400 I get 47.3538 Mega
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; site
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; updates per second
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; I understand that there are latencies with GbE and that there is MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; overhead, but this performance scaling still seems very poor. Are my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; expectations of scaling naive, or is there actually something wrong and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fixable that will improve the scaling? Optimistically I would like each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node to add to the cluster performance, not slow it down.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Things get even worse if I run asymmetric number of mpi jobs in each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node. For instance running -np 12 on Node1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Isn't this overloading the machine with only 8 real cores in total?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; is significantly faster than running -np 16 across Node1 and Node2,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; adding Node2 actually slows down the performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The i5-2400 has only 4 cores and no threads.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It depends on the algorithm how much data has to be exchanged between
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes, and this can indeed be worse when used across a network.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Also: is the algorithm scaling linear when used on node1 only with 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores? When it's &quot;35.7615 &quot; with 4 cores, what result do you get with 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores on this machine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prince
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
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23506.php">John Hearns: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23504.php">Ralph Castain: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23504.php">Ralph Castain: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23506.php">John Hearns: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23506.php">John Hearns: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
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
