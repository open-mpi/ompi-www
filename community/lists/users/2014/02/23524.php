<?
$subject_val = "Re: [OMPI users] Running on two nodes slower than running on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 08:54:25 2014" -->
<!-- isoreceived="20140201135425" -->
<!-- sent="Sat, 1 Feb 2014 21:54:24 +0800" -->
<!-- isosent="20140201135424" -->
<!-- name="Victor" -->
<!-- email="victor.major_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on two nodes slower than running on one node" -->
<!-- id="CAJTHAuf9Fg3DKeLR6Xuta-=dYBwWmLA3Nrce4hmQx_QRwbV2YQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52EA48F6.4080001_at_aol.com" -->
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
<strong>Date:</strong> 2014-02-01 08:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23525.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and	Rendezvous) protocols"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23509.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you all for your help. --bind-to-core increased the cluster
<br>
performance by approximately 10%, so in addition to the improvements
<br>
through the implementation of Open-MX, the performance now scales within
<br>
expectations - not linear, but much better than with the original setup.
<br>
<p><p>On 30 January 2014 20:43, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/29/2014 11:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Jan 29, 2014, at 7:56 PM, Victor &lt;victor.major_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for the insights Tim. I was aware that the CPUs will choke beyond
</span><br>
<span class="quotelev1">&gt; a certain point. From memory on my machine this happens with 5 concurrent
</span><br>
<span class="quotelev1">&gt; MPI jobs with that benchmark that I am using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My primary question was about scaling between the nodes. I was not
</span><br>
<span class="quotelev1">&gt; getting close to double the performance when running MPI jobs acros two 4
</span><br>
<span class="quotelev1">&gt; core nodes. It may be better now since I have Open-MX in place, but I have
</span><br>
<span class="quotelev1">&gt; not repeated the benchmarks yet since I need to get one simulation job done
</span><br>
<span class="quotelev1">&gt; asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Some of that may be due to expected loss of performance when you switch
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
<span class="quotelev1">&gt;  Regarding your mention of setting affinities and MPI ranks do you have a
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
<span class="quotelev1">&gt;  mpirun --bind-to-core -cpus-per-rank 2 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  will bind each MPI rank to 2 cores. Note that this will definitely *not*
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
<span class="quotelev1">&gt;  You would not want to run any other number of processes on the node or
</span><br>
<span class="quotelev1">&gt; else the binding pattern will cause a single process to split its threads
</span><br>
<span class="quotelev1">&gt; across the sockets - which will definitely hurt performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -cpus-per-rank 2 is an effective choice for this platform.  As Ralph
</span><br>
<span class="quotelev1">&gt; said, it should work automatically for 2 threads per rank.
</span><br>
<span class="quotelev1">&gt; Ralph's point about not splitting a process across sockets is an important
</span><br>
<span class="quotelev1">&gt; one.  Even splitting a process across internal busses, which would happen
</span><br>
<span class="quotelev1">&gt; with 3 threads per process, seems problematical.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23525.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and	Rendezvous) protocols"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23509.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
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
