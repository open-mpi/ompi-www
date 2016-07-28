<?
$subject_val = "Re: [OMPI users] Optimal mapping/binding when threads are used?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 12 11:56:54 2014" -->
<!-- isoreceived="20140412155654" -->
<!-- sent="Sat, 12 Apr 2014 11:56:54 -0400" -->
<!-- isosent="20140412155654" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Optimal mapping/binding when threads are used?" -->
<!-- id="CA+ssbKVX2vO+LQe92Jr14UL9E1Fc6UxOKc0Ri4JLRCB4qM74cA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKXE6cQB+4RebZ1BzafH4bADBi12e9yRyJw31dSXF0cbfg_at_mail.gmail.com" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-12 11:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24165.php">Cristian Butincu: "[OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24163.php">Anthony Alba: "Re: [OMPI users] OpenMPI PMI2 with SLURM 14.03 not working [SOLVED]"</a>
<li><strong>In reply to:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an update. Yes, binding to all is as same as binding to none. I was
<br>
mistaken by my memory :)
<br>
<p><p>On Fri, Apr 11, 2014 at 1:22 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Ralph for the details and it's a good point you mentioned on
</span><br>
<span class="quotelev1">&gt; mapping by node vs socket. We have another program that uses a chain of
</span><br>
<span class="quotelev1">&gt; send receives, which will benefit from having consecutive ranks nearby.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've a question on bind to none being equal to bind to all. I understand
</span><br>
<span class="quotelev1">&gt; the two concepts mean the same thing, but I remember seeing poor
</span><br>
<span class="quotelev1">&gt; performance when bind to none is explicitly given. I need to check the
</span><br>
<span class="quotelev1">&gt; options I used and will let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this test was mainly to understand how different patterns perform and
</span><br>
<span class="quotelev1">&gt; it seems P=1 is not suitable for this hardware configuration and may be in
</span><br>
<span class="quotelev1">&gt; general as you've mentioned.
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
<span class="quotelev1">&gt; On Fri, Apr 11, 2014 at 12:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting data. Couple of quick points that might help:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; option B is equivalent to --map-by node --bind-to none. When you bind to
</span><br>
<span class="quotelev2">&gt;&gt; every core on the node, we don't bind you at all since &quot;bind to all&quot; is
</span><br>
<span class="quotelev2">&gt;&gt; exactly equivalent to &quot;bind to none&quot;. So it will definitely run slower as
</span><br>
<span class="quotelev2">&gt;&gt; the threads run across the different NUMA regions on the node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might also want to try --map-by socket, with no binding directive.
</span><br>
<span class="quotelev2">&gt;&gt; This would map one process to each socket, binding it to the socket - which
</span><br>
<span class="quotelev2">&gt;&gt; is similar to what your option A actually accomplished. The only difference
</span><br>
<span class="quotelev2">&gt;&gt; is that the procs that share a node will differ in rank by 1, whereas
</span><br>
<span class="quotelev2">&gt;&gt; option A would have those procs differ in rank by N. Depending on your
</span><br>
<span class="quotelev2">&gt;&gt; communication pattern, this could make a big difference.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Map-by socket is typically the fastest performance for threaded apps. You
</span><br>
<span class="quotelev2">&gt;&gt; generally don't want P=1 unless you have a *lot* of threads in the process
</span><br>
<span class="quotelev2">&gt;&gt; as it removes any use of shared memory, and so messaging will run slower -
</span><br>
<span class="quotelev2">&gt;&gt; and you want the ranks that share a node to be the ones that most
</span><br>
<span class="quotelev2">&gt;&gt; frequently communicate to each other, if you can identify them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2014, at 5:59 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am evaluating the performance of a clustering program written in Java
</span><br>
<span class="quotelev2">&gt;&gt; with MPI+threads and would like to get some insight in solving a peculiar
</span><br>
<span class="quotelev2">&gt;&gt; case. I've attached a performance graph to explain this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In essence the tests were carried out as TxPxN, where T is threads per
</span><br>
<span class="quotelev2">&gt;&gt; process, P is processes per node, and N is number of nodes. I noticed an
</span><br>
<span class="quotelev2">&gt;&gt; inefficiency with Tx*1*xN cases in general (tall bars in graph).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To elaborate a bit further,
</span><br>
<span class="quotelev2">&gt;&gt; 1. each node has 2 sockets with 4 cores each (totaling 8 cores)
</span><br>
<span class="quotelev2">&gt;&gt; 2. used OpenMPI 1.7.5rc5 (later tested with 1.8 and observed the same)
</span><br>
<span class="quotelev2">&gt;&gt; 3. with options
</span><br>
<span class="quotelev2">&gt;&gt;      A.) --map-by node:PE=4 and --bind-to core
</span><br>
<span class="quotelev2">&gt;&gt;      B.) --map-by node:PE=8 and --bind-to-core
</span><br>
<span class="quotelev2">&gt;&gt;      C.) --map-by socket and --bind-to none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Timing of A,B,C came out as A &lt; B &lt; C, so used results from option A for
</span><br>
<span class="quotelev2">&gt;&gt; Tx*1*xN in the graph.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you please give some suggestion that may help to speed up these Tx
</span><br>
<span class="quotelev2">&gt;&gt; *1*xN cases? Also, I expected B to perform better than A as threads
</span><br>
<span class="quotelev2">&gt;&gt; could utilize all 8 cores, but it wasn't the case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;image.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24164/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24165.php">Cristian Butincu: "[OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24163.php">Anthony Alba: "Re: [OMPI users] OpenMPI PMI2 with SLURM 14.03 not working [SOLVED]"</a>
<li><strong>In reply to:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
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
