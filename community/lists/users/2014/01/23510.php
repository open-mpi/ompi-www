<?
$subject_val = "Re: [OMPI users] Running on two nodes slower than running on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 07:43:39 2014" -->
<!-- isoreceived="20140130124339" -->
<!-- sent="Thu, 30 Jan 2014 07:43:34 -0500" -->
<!-- isosent="20140130124334" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on two nodes slower than running on one node" -->
<!-- id="52EA48F6.4080001_at_aol.com" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-30 07:43:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23511.php">Brock Palen: "[OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<li><strong>Previous message:</strong> <a href="23509.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23504.php">Ralph Castain: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23524.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23524.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/29/2014 11:30 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2014, at 7:56 PM, Victor &lt;victor.major_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:victor.major_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the insights Tim. I was aware that the CPUs will choke 
</span><br>
<span class="quotelev2">&gt;&gt; beyond a certain point. From memory on my machine this happens with 5 
</span><br>
<span class="quotelev2">&gt;&gt; concurrent MPI jobs with that benchmark that I am using.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My primary question was about scaling between the nodes. I was not 
</span><br>
<span class="quotelev2">&gt;&gt; getting close to double the performance when running MPI jobs acros 
</span><br>
<span class="quotelev2">&gt;&gt; two 4 core nodes. It may be better now since I have Open-MX in place, 
</span><br>
<span class="quotelev2">&gt;&gt; but I have not repeated the benchmarks yet since I need to get one 
</span><br>
<span class="quotelev2">&gt;&gt; simulation job done asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of that may be due to expected loss of performance when you 
</span><br>
<span class="quotelev1">&gt; switch from shared memory to inter-node transports. While it is true 
</span><br>
<span class="quotelev1">&gt; about saturation of the memory path, what you reported could be more 
</span><br>
<span class="quotelev1">&gt; consistent with that transition - i.e., it isn't unusual to see 
</span><br>
<span class="quotelev1">&gt; applications perform better when run on a single node, depending upon 
</span><br>
<span class="quotelev1">&gt; how they are written, up to a certain size of problem (which your code 
</span><br>
<span class="quotelev1">&gt; may not be hitting).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding your mention of setting affinities and MPI ranks do you 
</span><br>
<span class="quotelev2">&gt;&gt; have a specific (as in syntactically specific since I am a novice and 
</span><br>
<span class="quotelev2">&gt;&gt; easily confused...) examples how I may want to set affinities to get 
</span><br>
<span class="quotelev2">&gt;&gt; the Westmere node performing better?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to-core -cpus-per-rank 2 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will bind each MPI rank to 2 cores. Note that this will definitely 
</span><br>
<span class="quotelev1">&gt; *not* be a good idea if you are running more than two threads in your 
</span><br>
<span class="quotelev1">&gt; process - if you are, then set --cpus-per-rank to the number of 
</span><br>
<span class="quotelev1">&gt; threads, keeping in mind that you want things to break evenly across 
</span><br>
<span class="quotelev1">&gt; the sockets. In other words, if you have two 6 core/socket Westmere's 
</span><br>
<span class="quotelev1">&gt; on the node, then you either want to run 6 process at cpus-per-rank=2 
</span><br>
<span class="quotelev1">&gt; if each process runs 2 threads, or 4 processes with cpus-per-rank=3 if 
</span><br>
<span class="quotelev1">&gt; each process runs 3 threads, or 2 processes with no cpus-per-rank but 
</span><br>
<span class="quotelev1">&gt; --bind-to-socket instead of --bind-to-core for any other thread number 
</span><br>
<span class="quotelev2">&gt; &gt; 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You would not want to run any other number of processes on the node or 
</span><br>
<span class="quotelev1">&gt; else the binding pattern will cause a single process to split its 
</span><br>
<span class="quotelev1">&gt; threads across the sockets - which will definitely hurt performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
-cpus-per-rank 2 is an effective choice for this platform.  As Ralph 
<br>
said, it should work automatically for 2 threads per rank.
<br>
Ralph's point about not splitting a process across sockets is an 
<br>
important one.  Even splitting a process across internal busses, which 
<br>
would happen with 3 threads per process, seems problematical.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23511.php">Brock Palen: "[OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<li><strong>Previous message:</strong> <a href="23509.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23504.php">Ralph Castain: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23524.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23524.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
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
