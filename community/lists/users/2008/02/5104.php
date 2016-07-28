<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump	with	MPI_Reduce and MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 10:20:19 2008" -->
<!-- isoreceived="20080229152019" -->
<!-- sent="Fri, 29 Feb 2008 15:20:09 +0000" -->
<!-- isosent="20080229152009" -->
<!-- name="John Markus Bj&#248;rndalen" -->
<!-- email="jmb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump	with	MPI_Reduce and MPI_Gather" -->
<!-- id="47C822A9.3000906_at_cs.uit.no" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0C7DC5C9-1F49-465B-A8AD-96EE45DAA067_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump	with	MPI_Reduce and MPI_Gather<br>
<strong>From:</strong> John Markus Bj&#248;rndalen (<em>jmb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 10:20:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5105.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5103.php">Chembeti, Ramesh (S&amp;T-Student): "Re: [OMPI users] OpenMPI on intel core 2 duo machine forparallel	computation."</a>
<li><strong>In reply to:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><p>[.....]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think the root crashed. I guess that one of the other nodes 
</span><br>
<span class="quotelev1">&gt; crashed, the root got a bad socket (which is what the first error 
</span><br>
<span class="quotelev1">&gt; message seems to indicate), and get terminated. As the output is not 
</span><br>
<span class="quotelev1">&gt; synchronized between the nodes, one cannot rely on its order nor 
</span><br>
<span class="quotelev1">&gt; contents. Moreover, mpirun report that the root was killed with signal 
</span><br>
<span class="quotelev1">&gt; 15, which is how we cleanup the remaining processes when we detect 
</span><br>
<span class="quotelev1">&gt; that something really bad (like a seg fault) happened in the parallel 
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sorry, I should have rephrased that as a question (&quot;is it the root?&quot;). 
<br>
I'm not that familiar with the debug output of OpenMPI yet, so I 
<br>
included it in case somebody made more sense of it than me.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are many differences between the routed and non routed 
</span><br>
<span class="quotelev1">&gt; collectives. All errors that you reported so far are related to rooted 
</span><br>
<span class="quotelev1">&gt; collectives, which make sense. I didn't state that it is normal that 
</span><br>
<span class="quotelev1">&gt; Open MPI do not behave [sic]. I wonder if you can get such errors with 
</span><br>
<span class="quotelev1">&gt; non routed collectives (such as allreduce, allgather and alltoall), or 
</span><br>
<span class="quotelev1">&gt; with messages larger than the eager size ?
</span><br>
You're right, I haven't seen any crashes with the All*-variants.
<br>
<p>TCP eager limit is set to 65536 (output from ompi_info):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;)
<br>
<p>I observed crashes with Broadcasts and Reduces of 131072 bytes. I'm 
<br>
playing around with larger messages now, and while Reduce with 16 nodes 
<br>
seem stable at 262144 byte messages, it still crashes with 44 nodes.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you type &quot;ompi_info --param btl tcp&quot;, you will see what is the 
</span><br>
<span class="quotelev1">&gt; eager size for the TCP BTL. Everything smaller than this size will be 
</span><br>
<span class="quotelev1">&gt; send eagerly; have the opportunity to became unexpected on the 
</span><br>
<span class="quotelev1">&gt; receiver side and can lead to this problem. As a quick test, you can 
</span><br>
<span class="quotelev1">&gt; add &quot;--mca btl_tcp_eager_limit 2048&quot; to your mpirun command line, and 
</span><br>
<span class="quotelev1">&gt; this problem will not happen with for size over the 2K. This was the 
</span><br>
<span class="quotelev1">&gt; original solution for the flow control problem. If you know your 
</span><br>
<span class="quotelev1">&gt; application will generate thousands of unexpected messages, then you 
</span><br>
<span class="quotelev1">&gt; should set the eager limit to zero.
</span><br>
I tried running Reduce with 4096 ints (16384 bytes), 16 nodes and eager 
<br>
limit 2048:
<br>
<p>mpirun -hostfile lamhosts.all.r360 -np 16 --mca btl_tcp_eager_limit 2048 
<br>
./ompi-crash 4096 2 3000
<br>
{  'groupsize' : 16, 'count' : 4096, 'bytes' : 16384, 'bufbytes' : 
<br>
262144, 'iters' : 3000, 'bmno' : 2
<br>
[compute-2-2][0,1,10][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] 
<br>
[compute-3-2][0,1,14][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed with errno=104
<br>
mca_btl_tcp_frag_recv: readv failed with errno=104
<br>
mpirun noticed that job rank 0 with PID 30407 on node compute-0-0 exited 
<br>
on signal 15 (Terminated).
<br>
15 additional processes aborted (not shown)
<br>
<p>This one tries to run Reduce with 1 integer per node and also crashes 
<br>
(with eager size 0):
<br>
<p>/mpirun -hostfile lamhosts.all.r360 -np 16 --mca btl_tcp_eager_limit 0 
<br>
./ompi-crash 1 2 3000
<br>
...
<br>
<p>This is puzzling.
<br>
<p><p>I'm mostly familiarizing myself with OpenMPI at the moment as well as 
<br>
poking around to see how the collective operations work and perform 
<br>
compared to LAM. Partly because I have some ideas I'd like to test out, 
<br>
and partly because I'm considering to move some student exercises over 
<br>
from LAM to OpenMPI. I don't expect to write actual applications that 
<br>
treat MPI like this myself, but on the other hand, not having to do 
<br>
throttling on top of MPI could be an advantage in some application 
<br>
patterns.
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
<li><strong>Next message:</strong> <a href="5105.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5103.php">Chembeti, Ramesh (S&amp;T-Student): "Re: [OMPI users] OpenMPI on intel core 2 duo machine forparallel	computation."</a>
<li><strong>In reply to:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
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
