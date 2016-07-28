<?
$subject_val = "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  2 07:43:48 2011" -->
<!-- isoreceived="20110902114348" -->
<!-- sent="Fri, 2 Sep 2011 07:43:39 -0400" -->
<!-- isosent="20110902114339" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I want to check our own modified Ofed stack with MPI application" -->
<!-- id="B5E0EC77-A3B8-42A5-9F9A-CF7B75809748_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPOYHvZT8wL9nkkH3_oRWYtKC5NaJmYa2PLDwxTqBM=pTz5_kQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-02 07:43:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17136.php">Jeff Squyres: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Previous message:</strong> <a href="17134.php">bhimesh akula: "[OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>In reply to:</strong> <a href="17134.php">bhimesh akula: "[OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17150.php">bhimesh akula: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>Reply:</strong> <a href="17150.php">bhimesh akula: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I understand you correctly, it sounds like MPI -- overall -- is new to you.
<br>
<p>If that's the case, here's the 2 minute overview: MPI is communications middleware, typically used for parallel applications.  MPI, as an API, is underlying-network-agnostic; hence, it can be used with TCP sockets, ethernet, OpenFabrics-based networks, etc., without the upper-layer application being aware of the differences between these networks.  
<br>
<p>There's lots of MPI-based applications out there, including bunches of benchmarks and tests.  You might want to get the Intel MPI Benchmarks (aka &quot;IMB&quot;) and compile and run those with Open MPI over your modified OFED stack. The IMB are sufficiently complex, and MPI implementations themselves are sufficiently complex and different from each other that running IMB with 4 or 8 processes will exercise your OFED stack in many different ways; that's probably why MPI was recommended to you.
<br>
<p>The two big open source MPI implementations -- Open MPI and MPICH2 -- both come with &quot;wrapper&quot; compilers (mpicc, mpic++, mpf77, mpif90, ...etc.) that add all the relevant compiler/linker flags to the command line to compile/link your application.  Hence, in Makefiles, you can typically remove all MPI-inspired references to -I, -L, and -l and just use the wrapper compilers.  For example:
<br>
<p>mpicc -c foo.c
<br>
mpicc -c bar.c
<br>
mpicc foo.o bar.o -o my_mpi_application
<br>
<p>You then use &quot;mpirun&quot; to launch your application in parallel.  For example:
<br>
<p>mpirun -np 8 --hostfile my_hostfile my_mpi_application
<br>
<p>See the mpirun(1) for more details, and the FAQ.  Each MPI implementation's mpirun is typically different than the others (e.g., Open MPI's mpirun has different CLI options than MPICH2's mpirun).
<br>
<p>Open MPI also allows the concept of run-time customization of the underlying MPI processing engine via &quot;MCA&quot; parameters.  You can pass MCA params via the command line, environment, or files (see the FAQ).  Open MPI should probably pick the OpenFabrics-based transport by default on your machines, but just to be sure, you can force the use of the &quot;openib&quot; BTL (byte transport layer) in Open MPI thusly:
<br>
<p>mpirun -np 8 --hostfile my_hostfile --mca btl openib,sm,self my_mpi_application
<br>
<p>openib = OFED-based transport (for MPI procs on remote servers)
<br>
sm = shared memory-based transport (for MPI procs on the same server)
<br>
self = process loopback
<br>
<p>That should be enough to get you going; good luck.
<br>
<p><p><p>On Sep 2, 2011, at 7:17 AM, bhimesh akula wrote:
<br>
<p><span class="quotelev1">&gt; Hi ,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We developed new OFED stack as for our requirements to our new product.Now it is needed to check the functionality of new OFED stack using MPI,used multi node setup to check this stack.But problem is we are not having no idea how to use OPEN-MPI tool to check our stack.I went through this site &quot;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&quot;,here only mentioned how to run MPI applications but we need our new stack has to be checked using MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As we checked our new stack using qperf tool but MPI is more recommended .Want to know how to run MPI as how we used qperf. we used qperf like &quot;at one node running qperf as server and running qperf at other node as client,ran all the qperf test cases from client to see the functionality and performance of OFED&quot;.Like this how we can use OPEN-MPI tool to test the new stack.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think problem conveyed well,please get back to me on this as soon as possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; regards,
</span><br>
<span class="quotelev1">&gt; Punya Bhimesh.
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17136.php">Jeff Squyres: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Previous message:</strong> <a href="17134.php">bhimesh akula: "[OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>In reply to:</strong> <a href="17134.php">bhimesh akula: "[OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17150.php">bhimesh akula: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>Reply:</strong> <a href="17150.php">bhimesh akula: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
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
