<?
$subject_val = "Re: [OMPI users] Optimal mapping/binding when threads are used?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 00:31:48 2014" -->
<!-- isoreceived="20140411043148" -->
<!-- sent="Thu, 10 Apr 2014 21:30:51 -0700" -->
<!-- isosent="20140411043051" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Optimal mapping/binding when threads are used?" -->
<!-- id="9409AF05-3E1E-4382-A9F0-1887E516995C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKW4jeMNnta=OqdqZS2LUbDNY8rGAh+E3Lm9ww-DXwCs-A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Optimal mapping/binding when threads are used?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 00:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24149.php">Anthony Alba: "[OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<li><strong>Previous message:</strong> <a href="24147.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24146.php">Saliya Ekanayake: "[OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Reply:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting data. Couple of quick points that might help:
<br>
<p>option B is equivalent to --map-by node --bind-to none. When you bind to every core on the node, we don't bind you at all since &quot;bind to all&quot; is exactly equivalent to &quot;bind to none&quot;. So it will definitely run slower as the threads run across the different NUMA regions on the node.
<br>
<p>You might also want to try --map-by socket, with no binding directive. This would map one process to each socket, binding it to the socket - which is similar to what your option A actually accomplished. The only difference is that the procs that share a node will differ in rank by 1, whereas option A would have those procs differ in rank by N. Depending on your communication pattern, this could make a big difference.
<br>
<p>Map-by socket is typically the fastest performance for threaded apps. You generally don't want P=1 unless you have a *lot* of threads in the process as it removes any use of shared memory, and so messaging will run slower - and you want the ranks that share a node to be the ones that most frequently communicate to each other, if you can identify them.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Apr 10, 2014, at 5:59 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am evaluating the performance of a clustering program written in Java with MPI+threads and would like to get some insight in solving a peculiar case. I've attached a performance graph to explain this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In essence the tests were carried out as TxPxN, where T is threads per process, P is processes per node, and N is number of nodes. I noticed an inefficiency with Tx1xN cases in general (tall bars in graph).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To elaborate a bit further, 
</span><br>
<span class="quotelev1">&gt; 1. each node has 2 sockets with 4 cores each (totaling 8 cores) 
</span><br>
<span class="quotelev1">&gt; 2. used OpenMPI 1.7.5rc5 (later tested with 1.8 and observed the same)
</span><br>
<span class="quotelev1">&gt; 3. with options
</span><br>
<span class="quotelev1">&gt;      A.) --map-by node:PE=4 and --bind-to core
</span><br>
<span class="quotelev1">&gt;      B.) --map-by node:PE=8 and --bind-to-core
</span><br>
<span class="quotelev1">&gt;      C.) --map-by socket and --bind-to none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Timing of A,B,C came out as A &lt; B &lt; C, so used results from option A for Tx1xN in the graph. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please give some suggestion that may help to speed up these Tx1xN cases? Also, I expected B to perform better than A as threads could utilize all 8 cores, but it wasn't the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24149.php">Anthony Alba: "[OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<li><strong>Previous message:</strong> <a href="24147.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24146.php">Saliya Ekanayake: "[OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Reply:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
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
