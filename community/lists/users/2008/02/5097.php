<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 17:08:59 2008" -->
<!-- isoreceived="20080228220859" -->
<!-- sent="Thu, 28 Feb 2008 17:08:51 -0500" -->
<!-- isosent="20080228220851" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather" -->
<!-- id="0C7DC5C9-1F49-465B-A8AD-96EE45DAA067_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47C70F51.1030807_at_cs.uit.no" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 17:08:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5098.php">Chembeti, Ramesh (S&T-Student): "[OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<li><strong>Previous message:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5094.php">John Markus Bj&#248;rndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5104.php">John Markus Bjørndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump	with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5104.php">John Markus Bjørndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump	with	MPI_Reduce and MPI_Gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2008, at 2:45 PM, John Markus Bj&#248;rndalen wrote:
<br>
<p><span class="quotelev1">&gt; Hi, and thanks for the feedback everyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Brian is completely right. Here is a more detailed description of  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt; [....]
</span><br>
<span class="quotelev2">&gt;&gt; On the other side, I hope that not many users write such  
</span><br>
<span class="quotelev2">&gt;&gt; applications.
</span><br>
<span class="quotelev2">&gt;&gt; This is the best way to completely kill the performances of any MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementation, by overloading one process with messages. This is
</span><br>
<span class="quotelev2">&gt;&gt; exactly what MPI_Reduce and MPI_Gather do, one process will get the
</span><br>
<span class="quotelev2">&gt;&gt; final result and all other processes only have to send some data.  
</span><br>
<span class="quotelev2">&gt;&gt; This
</span><br>
<span class="quotelev2">&gt;&gt; behavior only arises when the gather or the reduce use a very flat
</span><br>
<span class="quotelev2">&gt;&gt; tree, and only for short messages. Because of the short messages  
</span><br>
<span class="quotelev2">&gt;&gt; there
</span><br>
<span class="quotelev2">&gt;&gt; is no handshake between the sender and the receiver, which will make
</span><br>
<span class="quotelev2">&gt;&gt; all messages unexpected, and the flat tree guarantee that there will
</span><br>
<span class="quotelev2">&gt;&gt; be a lot of small messages. If you add a barrier every now and then
</span><br>
<span class="quotelev2">&gt;&gt; (100 iterations) this problem will never happens.
</span><br>
<span class="quotelev1">&gt; I have done some more testing. Of the tested parameters, I'm observing
</span><br>
<span class="quotelev1">&gt; this behaviour with group sizes from 16-44, and from 1 to 32768  
</span><br>
<span class="quotelev1">&gt; integers
</span><br>
<span class="quotelev1">&gt; in MPI_Reduce. For MPI_Gather, I'm observing crashes with group sizes
</span><br>
<span class="quotelev1">&gt; 16-44 and from 1 to 4096 integers (per node).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, it actually happens with other tree configurations and
</span><br>
<span class="quotelev1">&gt; larger packet sizes :-/
</span><br>
<p>This is the limit for the rendez-vous protocol over TCP. And is the  
<br>
upper limit where this problem will arise. I have a strong doubt that  
<br>
is possible to create the same problem with messages larger than the  
<br>
eager size of your BTL ...
<br>
<p><span class="quotelev1">&gt; By the way, I'm also observing crashes with MPI_Broadcast (groups of
</span><br>
<span class="quotelev1">&gt; size 4-44 with the root process (rank 0) broadcasting integer arrays  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; size 16384 and 32768).  It looks like the root process is crashing.  
</span><br>
<span class="quotelev1">&gt; Can
</span><br>
<span class="quotelev1">&gt; a sender crash because it runs out of buffer space as well?
</span><br>
<p>I don't think the root crashed. I guess that one of the other nodes  
<br>
crashed, the root got a bad socket (which is what the first error  
<br>
message seems to indicate), and get terminated. As the output is not  
<br>
synchronized between the nodes, one cannot rely on its order nor  
<br>
contents. Moreover, mpirun report that the root was killed with signal  
<br>
15, which is how we cleanup the remaining processes when we detect  
<br>
that something really bad (like a seg fault) happened in the parallel  
<br>
application.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- snip --------------
</span><br>
<span class="quotelev1">&gt; /home/johnm/local/ompi/bin/mpirun -hostfile lamhosts.all.r360 -np 4
</span><br>
<span class="quotelev1">&gt; ./ompi-crash  16384 1 3000
</span><br>
<span class="quotelev1">&gt; {  'groupsize' : 4, 'count' : 16384, 'bytes' : 65536, 'bufbytes' :
</span><br>
<span class="quotelev1">&gt; 262144, 'iters' : 3000, 'bmno' : 1
</span><br>
<span class="quotelev1">&gt; [compute-0-0][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=104
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 16366 on node compute-0-0  
</span><br>
<span class="quotelev1">&gt; exited
</span><br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; ---------- snip --------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One more thing, doing a lot of collective in a loop and computing the
</span><br>
<span class="quotelev2">&gt;&gt; total time is not the correct way to evaluate the cost of any
</span><br>
<span class="quotelev2">&gt;&gt; collective communication, simply because you will favor all  
</span><br>
<span class="quotelev2">&gt;&gt; algorithms
</span><br>
<span class="quotelev2">&gt;&gt; based on pipelining. There is plenty of literature about this topic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev1">&gt; As I said in the original e-mail: I had only thrown them in for a  
</span><br>
<span class="quotelev1">&gt; bit of
</span><br>
<span class="quotelev1">&gt; sanity checking. I expected funny numbers, but not that OpenMPI would
</span><br>
<span class="quotelev1">&gt; crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The original idea was just to make a quick comparison of Allreduce,
</span><br>
<span class="quotelev1">&gt; Allgather and Alltoall in LAM and OpenMPI. The opportunity for
</span><br>
<span class="quotelev1">&gt; pipelining the operations there is rather small since they can't get
</span><br>
<span class="quotelev1">&gt; much out of phase with each other.
</span><br>
<p>There are many differences between the routed and non routed  
<br>
collectives. All errors that you reported so far are related to rooted  
<br>
collectives, which make sense. I didn't state that it is normal that  
<br>
Open MPI do not behave [sic]. I wonder if you can get such errors with  
<br>
non routed collectives (such as allreduce, allgather and alltoall), or  
<br>
with messages larger than the eager size ?
<br>
<p>If you type &quot;ompi_info --param btl tcp&quot;, you will see what is the  
<br>
eager size for the TCP BTL. Everything smaller than this size will be  
<br>
send eagerly; have the opportunity to became unexpected on the  
<br>
receiver side and can lead to this problem. As a quick test, you can  
<br>
add &quot;--mca btl_tcp_eager_limit 2048&quot; to your mpirun command line, and  
<br>
this problem will not happen with for size over the 2K. This was the  
<br>
original solution for the flow control problem. If you know your  
<br>
application will generate thousands of unexpected messages, then you  
<br>
should set the eager limit to zero.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; // John Markus Bj&#248;rndalen
</span><br>
<span class="quotelev1">&gt; // <a href="http://www.cs.uit.no/~johnm/">http://www.cs.uit.no/~johnm/</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5097/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5098.php">Chembeti, Ramesh (S&T-Student): "[OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<li><strong>Previous message:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5094.php">John Markus Bj&#248;rndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5104.php">John Markus Bjørndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump	with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5104.php">John Markus Bjørndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump	with	MPI_Reduce and MPI_Gather"</a>
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
