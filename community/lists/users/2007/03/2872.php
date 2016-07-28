<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 07:42:15 2007" -->
<!-- isoreceived="20070322114215" -->
<!-- sent="Thu, 22 Mar 2007 07:41:57 -0400" -->
<!-- isosent="20070322114157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] threading" -->
<!-- id="CAB5C04A-2204-49EF-9AC2-A9FAF70F775B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4601A3A9.1050008_at_qlink.queensu.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 07:41:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI currently has minimal use of hidden &quot;progress&quot; threads, but  
<br>
we will likely be experimenting with more usage of them over time  
<br>
(previous MPI implementations have shown that progress threads can be  
<br>
a big performance win for large messages, although they do tend to  
<br>
add a bit of latency).
<br>
<p>To answer your direct question, when you ask Open MPI for N processes  
<br>
(E.g., &quot;mpirun -np &lt;n&gt; a.out&quot;), you'll get N unix processes.  Open  
<br>
MPI will not create N threads (or split threads across nodes without  
<br>
oversubscription such that you get a total of N ranks in  
<br>
MPI_COMM_WORLD).
<br>
<p>Previous MPI implementations have tried this kind of scheme  
<br>
(launching threads as MPI processes), but (IMHO) it violated the Law  
<br>
of Least Astonishment (see <a href="http://www.canonical.org/~kragen/tao-of">http://www.canonical.org/~kragen/tao-of</a>- 
<br>
programming.html) in that the user's MPI application was then subject  
<br>
to the constraints of multi-threaded programming.
<br>
<p>So most (all?) modern MPI implementations that I am aware of deal  
<br>
with operating system processes as individual MPI_COMM_WORLD ranks  
<br>
(as opposed to threads).
<br>
<p><p><p>On Mar 21, 2007, at 5:29 PM, David Burns wrote:
<br>
<p><span class="quotelev1">&gt; I have used POSIX threading and Open MPI without problems on our  
</span><br>
<span class="quotelev1">&gt; Opteron
</span><br>
<span class="quotelev1">&gt; 2216 Cluster (4 cores per node). Moving to core-level parallelization
</span><br>
<span class="quotelev1">&gt; with multi threading resulted in significant performance gains.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam Adams wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have been looking, but I haven't really found a good answer about
</span><br>
<span class="quotelev2">&gt;&gt; system level threading.  We are about to get a new cluster of
</span><br>
<span class="quotelev2">&gt;&gt; dual-processor quad-core nodes or 8 cores per node.  Traditionally I
</span><br>
<span class="quotelev2">&gt;&gt; would just tell MPI to launch two processes per dual processor single
</span><br>
<span class="quotelev2">&gt;&gt; core node, but with eight cores on a node, having 8 processes seems
</span><br>
<span class="quotelev2">&gt;&gt; inefficient.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My question is this: does OpenMPI sense that there are multiple cores
</span><br>
<span class="quotelev2">&gt;&gt; on a node and use something like pthreads instead of creating new
</span><br>
<span class="quotelev2">&gt;&gt; processes automatically when I request 8 processes for a node, or
</span><br>
<span class="quotelev2">&gt;&gt; should I run a single process per node and use OpenMP or pthreads
</span><br>
<span class="quotelev2">&gt;&gt; explicitly to get better performance on a per node basis?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
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
