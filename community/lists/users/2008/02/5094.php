<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 14:45:30 2008" -->
<!-- isoreceived="20080228194530" -->
<!-- sent="Thu, 28 Feb 2008 19:45:21 +0000" -->
<!-- isosent="20080228194521" -->
<!-- name="John Markus Bj&#248;rndalen" -->
<!-- email="jmb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather" -->
<!-- id="47C70F51.1030807_at_cs.uit.no" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CDED2B35-C65A-423C-8992-2529A4EF5406_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather<br>
<strong>From:</strong> John Markus Bj&#248;rndalen (<em>jmb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 14:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5093.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>In reply to:</strong> <a href="5086.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, and thanks for the feedback everyone.
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Brian is completely right. Here is a more detailed description of this 
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
[....]
<br>
<span class="quotelev1">&gt; On the other side, I hope that not many users write such applications. 
</span><br>
<span class="quotelev1">&gt; This is the best way to completely kill the performances of any MPI 
</span><br>
<span class="quotelev1">&gt; implementation, by overloading one process with messages. This is 
</span><br>
<span class="quotelev1">&gt; exactly what MPI_Reduce and MPI_Gather do, one process will get the 
</span><br>
<span class="quotelev1">&gt; final result and all other processes only have to send some data. This 
</span><br>
<span class="quotelev1">&gt; behavior only arises when the gather or the reduce use a very flat 
</span><br>
<span class="quotelev1">&gt; tree, and only for short messages. Because of the short messages there 
</span><br>
<span class="quotelev1">&gt; is no handshake between the sender and the receiver, which will make 
</span><br>
<span class="quotelev1">&gt; all messages unexpected, and the flat tree guarantee that there will 
</span><br>
<span class="quotelev1">&gt; be a lot of small messages. If you add a barrier every now and then 
</span><br>
<span class="quotelev1">&gt; (100 iterations) this problem will never happens.
</span><br>
I have done some more testing. Of the tested parameters, I'm observing 
<br>
this behaviour with group sizes from 16-44, and from 1 to 32768 integers 
<br>
in MPI_Reduce. For MPI_Gather, I'm observing crashes with group sizes 
<br>
16-44 and from 1 to 4096 integers (per node).
<br>
<p>In other words, it actually happens with other tree configurations and 
<br>
larger packet sizes :-/
<br>
<p>By the way, I'm also observing crashes with MPI_Broadcast (groups of 
<br>
size 4-44 with the root process (rank 0) broadcasting integer arrays of 
<br>
size 16384 and 32768).  It looks like the root process is crashing. Can 
<br>
a sender crash because it runs out of buffer space as well?
<br>
<p>---------- snip --------------
<br>
/home/johnm/local/ompi/bin/mpirun -hostfile lamhosts.all.r360 -np 4 
<br>
./ompi-crash  16384 1 3000
<br>
{  'groupsize' : 4, 'count' : 16384, 'bytes' : 65536, 'bufbytes' : 
<br>
262144, 'iters' : 3000, 'bmno' : 1
<br>
[compute-0-0][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed with errno=104
<br>
mpirun noticed that job rank 0 with PID 16366 on node compute-0-0 exited 
<br>
on signal 15 (Terminated).
<br>
3 additional processes aborted (not shown)
<br>
---------- snip --------------
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more thing, doing a lot of collective in a loop and computing the 
</span><br>
<span class="quotelev1">&gt; total time is not the correct way to evaluate the cost of any 
</span><br>
<span class="quotelev1">&gt; collective communication, simply because you will favor all algorithms 
</span><br>
<span class="quotelev1">&gt; based on pipelining. There is plenty of literature about this topic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
As I said in the original e-mail: I had only thrown them in for a bit of 
<br>
sanity checking. I expected funny numbers, but not that OpenMPI would 
<br>
crash.
<br>
<p>The original idea was just to make a quick comparison of Allreduce, 
<br>
Allgather and Alltoall in LAM and OpenMPI. The opportunity for 
<br>
pipelining the operations there is rather small since they can't get 
<br>
much out of phase with each other.
<br>
<p><p>Regards,
<br>
<p><pre>
-- 
// John Markus Bj&#248;rndalen
// <a href="http://www.cs.uit.no/~johnm/">http://www.cs.uit.no/~johnm/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5093.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>In reply to:</strong> <a href="5086.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
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
