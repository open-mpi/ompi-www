<?
$subject_val = "Re: [OMPI users] Openmpi performance issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 27 20:40:36 2011" -->
<!-- isoreceived="20111228014036" -->
<!-- sent="Tue, 27 Dec 2011 18:40:27 -0700" -->
<!-- isosent="20111228014027" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi performance issue" -->
<!-- id="B8683325-3BAA-49B6-AD38-847EF9FC2CA4_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1325033223.74409.YahooMailNeo_at_web124715.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi performance issue<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-27 20:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18065.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>In reply to:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18058.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you build from the svn repo, or from a tarball? I ask because you don't need to run ./autogen.sh (and usually don't) if building from a tarball.
<br>
<p>Reason that is important: our configure code checks to see if the code came from svn. If it did, the configure assumes it is a developer doing the build, and so debug is automatically enabled - which significantly reduces performance.
<br>
<p>If it came from a tarball, then we build without debug by default - but we still do not optimize. Other MPIs will typically build optimized, and their performance is therefore better out-of-the-box. I would have expected that to also reflect in the benchmark, but it can be rather hit-and-miss as benchmarks are very poor predictors of actual performance.
<br>
<p>If you really want to test performance, you should always configure --disable-debug CFLAGS=-O3 (or pick your favorite optimization level for your selected compiler - the results for a given optimization level are very compiler-specific).
<br>
<p>Some applications are also sensitive to the relative positioning of ranks. The mapping pattern of OMPI can differ significantly from that of other MPIs, so you might also want to check and see what ranks went where. For OMPI, you can see the mapping by adding --display-map to the mpirun cmd line.
<br>
<p>Beyond that, without seeing the mpirun cmd line vs what you did for the other MPIs, all we can do is whistle in the dark  :-)
<br>
<p><p>On Dec 27, 2011, at 5:47 PM, Eric Feng wrote:
<br>
<p><span class="quotelev1">&gt; I used  &quot;--bind-to-socket --bysocket&quot;  all the time. It helps performance. I never oversubscribed node.
</span><br>
<span class="quotelev1">&gt; I have Intel westmere CPUs in each node, all cores will be used for application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI version is 1.5.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The way i did to install openmpi:
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/mpi/openmpi-1.5.4 --with-openib CC=icc CXX=icpc F77=ifort FC=ifort --with-knem=/opt/knem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Cc: Eric Feng &lt;hpc_benchmark_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 28, 2011 1:58 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Openmpi performance issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I remember correctly, both Intel MPI and MVAPICH2 bind processes by default.  OMPI does not.  There are many cases where the &quot;bind by default&quot; behavior gives better default performance.  (There are also cases where it can give catastrophically worse performance.)  Anyhow, it seems possible to me that this accounts for the difference you're seeing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To play with binding in OMPI, you can try adding &quot;--bind-to-socket --bysocket&quot; to your mpirun command line, though what to try can depend on what version of OMPI you're using as well as details of your processor (HyperThreads?), your application, etc.  There's a FAQ entry at <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/27/2011 6:45 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It depends a lot on the application and how you ran it. Can you provide some info? For example, if you oversubscribed the node, then we dial down the performance to provide better cpu sharing. Another point: we don't bind processes by default while other MPIs do. Etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So more info (like the mpirun command line you used, which version you used, how OMPI was configured, etc.) would help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 27, 2011, at 6:35 AM, Eric Feng wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone help me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got similar performance issue when comparing to mvapich2 which is much faster in each MPI function in real application but similar in IMB benchmark.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Eric Feng &lt;hpc_benchmark_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, December 23, 2011 9:12 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] Openmpi performance issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running into performance issue with Open MPI, I wish experts here can provide me some help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have one application calls a lot of sendrecv, and isend/irecv, so waitall. When I run Intel MPI, it is around 30% faster than OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However if i test sendrecv using IMB, OpenMPI is even faster than Intel MPI, but when run with real application, Open MPI is much slower than Intel MPI in all MPI functions by looking at profiling results. So this is not some function issue, it has a overall drawback somewhere. Can anyone give me some suggestions of where to tune to make it run faster with real application?
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18064/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18065.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>In reply to:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18058.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
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
