<?
$subject_val = "Re: [OMPI users] Running on two nodes slower than running on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 23:31:18 2014" -->
<!-- isoreceived="20140130043118" -->
<!-- sent="Wed, 29 Jan 2014 20:30:58 -0800" -->
<!-- isosent="20140130043058" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on two nodes slower than running on one node" -->
<!-- id="672F337D-EA6A-49B9-9461-345919F21D37_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJTHAud5rS44Zc7t7GD9UK55xo4ZBikwOb-DOoY84e8e5q=1FQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 23:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23505.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23503.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23503.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23505.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23505.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 29, 2014, at 7:56 PM, Victor &lt;victor.major_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the insights Tim. I was aware that the CPUs will choke beyond a certain point. From memory on my machine this happens with 5 concurrent MPI jobs with that benchmark that I am using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My primary question was about scaling between the nodes. I was not getting close to double the performance when running MPI jobs acros two 4 core nodes. It may be better now since I have Open-MX in place, but I have not repeated the benchmarks yet since I need to get one simulation job done asap.
</span><br>
<p>Some of that may be due to expected loss of performance when you switch from shared memory to inter-node transports. While it is true about saturation of the memory path, what you reported could be more consistent with that transition - i.e., it isn't unusual to see applications perform better when run on a single node, depending upon how they are written, up to a certain size of problem (which your code may not be hitting).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding your mention of setting affinities and MPI ranks do you have a specific (as in syntactically specific since I am a novice and easily confused...) examples how I may want to set affinities to get the Westmere node performing better?
</span><br>
<p>mpirun --bind-to-core -cpus-per-rank 2 ...
<br>
<p>will bind each MPI rank to 2 cores. Note that this will definitely *not* be a good idea if you are running more than two threads in your process - if you are, then set --cpus-per-rank to the number of threads, keeping in mind that you want things to break evenly across the sockets. In other words, if you have two 6 core/socket Westmere's on the node, then you either want to run 6 process at cpus-per-rank=2 if each process runs 2 threads, or 4 processes with cpus-per-rank=3 if each process runs 3 threads, or 2 processes with no cpus-per-rank but --bind-to-socket instead of --bind-to-core for any other thread number &gt; 3.
<br>
<p>You would not want to run any other number of processes on the node or else the binding pattern will cause a single process to split its threads across the sockets - which will definitely hurt performance.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info returns this: MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And finally to hybridisation... in a week or so I will get 4 AMD A10-6800 machines with 8Gb each on loan and will attempt to make them work along the existing Intel nodes. 
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
<span class="quotelev1">&gt; On 1/29/2014 8:02 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; Quoting Victor &lt;victor.major_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two machines: Node1 with 12 physical cores (dual 6 core Xeon) and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have this CPU?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://ark.intel.com/de/products/37109/Intel-Xeon-Processor-X5560-8M-Cache-2_80-GHz-6_40-GTs-Intel-QPI">http://ark.intel.com/de/products/37109/Intel-Xeon-Processor-X5560-8M-Cache-2_80-GHz-6_40-GTs-Intel-QPI</a> 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's expected on the Xeon Westmere 6-core CPUs to see MPI performance saturating when all 4 of the internal buss paths are in use.  For this reason, hybrid MPI/OpenMP with 2 cores per MPI rank, with affinity set so that each MPI rank has its own internal CPU buss, could out-perform plain MPI on those CPUs.
</span><br>
<span class="quotelev1">&gt; That scheme of pairing cores on selected internal buss paths hasn't been repeated.  Some influential customers learned to prefer the 4-core version of that CPU, given a reluctance to adopt MPI/OpenMP hybrid with affinity.
</span><br>
<span class="quotelev1">&gt; If you want to talk about &quot;downright strange,&quot; start thinking about the schemes to optimize performance of 8 threads with 2 threads assigned to each internal CPU buss on that CPU model.  Or your scheme of trying to balance MPI performance between very different CPU models.
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node2 with 4 physical cores (i5-2400).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding scaling on the single 12 core node, not it is also not linear. In
</span><br>
<span class="quotelev1">&gt; fact it is downright strange. I do not remember the numbers right now but
</span><br>
<span class="quotelev1">&gt; 10 jobs are faster than 11 and 12 are the fastest with peak performance of
</span><br>
<span class="quotelev1">&gt; approximately 66 Msu/s which is also far from triple the 4 core
</span><br>
<span class="quotelev1">&gt; performance. This odd non-linear behaviour also happens at the lower job
</span><br>
<span class="quotelev1">&gt; counts on that 12 core node. I understand the decrease in scaling with
</span><br>
<span class="quotelev1">&gt; increase in core count on the single node as the memory bandwidth is an
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the 4 core machine the scaling is progressive, ie. every additional job
</span><br>
<span class="quotelev1">&gt; brings an increase in performance. Single core delivers 8.1 Msu/s while 4
</span><br>
<span class="quotelev1">&gt; cores deliver 30.8 Msu/s. This is almost linear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since my original email I have also installed Open-MX and recompiled
</span><br>
<span class="quotelev1">&gt; OpenMPI to use it. This has resulted in approximately 10% better
</span><br>
<span class="quotelev1">&gt; performance using the existing GbE hardware.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 29 January 2014 19:40, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 29.01.2014 um 03:00 schrieb Victor:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am running a CFD simulation benchmark cavity3d available within
</span><br>
<span class="quotelev1">&gt; <a href="http://www.palabos.org/images/palabos_releases/palabos-v1.4r1.tgz">http://www.palabos.org/images/palabos_releases/palabos-v1.4r1.tgz</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It is a parallel friendly Lattice Botlzmann solver library.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Palabos provides benchmark results for the cavity3d on several different
</span><br>
<span class="quotelev1">&gt; platforms and variables here:
</span><br>
<span class="quotelev1">&gt; <a href="http://wiki.palabos.org/plb_wiki:benchmark:cavity_n400">http://wiki.palabos.org/plb_wiki:benchmark:cavity_n400</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem that I have is that the benchmark performance on my cluster
</span><br>
<span class="quotelev1">&gt; does not scale even close to a linear scale.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My cluster configuration:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Node1: Dual Xeon 5560 48 Gb RAM
</span><br>
<span class="quotelev2">&gt; &gt; Node2: i5-2400 24 Gb RAM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gigabit ethernet connection on eth0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI 1.6.5 on Ubuntu 12.04.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hostfile:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Node1 -slots=4 -max-slots=4
</span><br>
<span class="quotelev2">&gt; &gt; Node2 -slots=4 -max-slots=4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI command: mpirun --mca btl_tcp_if_include eth0 --hostfile
</span><br>
<span class="quotelev1">&gt; /home/mpiuser/.mpi_hostfile -np 8 ./cavity3d 400
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Problem:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cavity3d 400
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I run mpirun -np 4 on Node1 I get 35.7615 Mega site updates per
</span><br>
<span class="quotelev1">&gt; second
</span><br>
<span class="quotelev2">&gt; &gt; When I run mpirun -np 4 on Node2 I get 30.7972 Mega site updates per
</span><br>
<span class="quotelev1">&gt; second
</span><br>
<span class="quotelev2">&gt; &gt; When I run mpirun --mca btl_tcp_if_include eth0 --hostfile
</span><br>
<span class="quotelev1">&gt; /home/mpiuser/.mpi_hostfile -np 8 ./cavity3d 400 I get 47.3538 Mega site
</span><br>
<span class="quotelev1">&gt; updates per second
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I understand that there are latencies with GbE and that there is MPI
</span><br>
<span class="quotelev1">&gt; overhead, but this performance scaling still seems very poor. Are my
</span><br>
<span class="quotelev1">&gt; expectations of scaling naive, or is there actually something wrong and
</span><br>
<span class="quotelev1">&gt; fixable that will improve the scaling? Optimistically I would like each
</span><br>
<span class="quotelev1">&gt; node to add to the cluster performance, not slow it down.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Things get even worse if I run asymmetric number of mpi jobs in each
</span><br>
<span class="quotelev1">&gt; node. For instance running -np 12 on Node1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Isn't this overloading the machine with only 8 real cores in total?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; is significantly faster than running -np 16 across Node1 and Node2, thus
</span><br>
<span class="quotelev1">&gt; adding Node2 actually slows down the performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The i5-2400 has only 4 cores and no threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on the algorithm how much data has to be exchanged between the
</span><br>
<span class="quotelev1">&gt; processes, and this can indeed be worse when used across a network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also: is the algorithm scaling linear when used on node1 only with 8
</span><br>
<span class="quotelev1">&gt; cores? When it's &quot;35.7615 &quot; with 4 cores, what result do you get with 8
</span><br>
<span class="quotelev1">&gt; cores on this machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23504/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23505.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23503.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23503.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23505.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23505.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
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
