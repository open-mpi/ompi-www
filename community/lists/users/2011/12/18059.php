<?
$subject_val = "Re: [OMPI users] Openmpi performance issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 27 09:46:05 2011" -->
<!-- isoreceived="20111227144605" -->
<!-- sent="Tue, 27 Dec 2011 07:45:56 -0700" -->
<!-- isosent="20111227144556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi performance issue" -->
<!-- id="C80E3764-8B30-4928-B29E-9EA2332E2665_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1324992908.963.YahooMailNeo_at_web124707.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2011-12-27 09:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18060.php">Ralph Castain: "Re: [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Previous message:</strong> <a href="18058.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>In reply to:</strong> <a href="18057.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18062.php">Eugene Loh: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18062.php">Eugene Loh: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends a lot on the application and how you ran it. Can you provide some info? For example, if you oversubscribed the node, then we dial down the performance to provide better cpu sharing. Another point: we don't bind processes by default while other MPIs do. Etc.
<br>
<p>So more info (like the mpirun command line you used, which version you used, how OMPI was configured, etc.) would help.
<br>
<p><p>On Dec 27, 2011, at 6:35 AM, Eric Feng wrote:
<br>
<p><span class="quotelev1">&gt; Can anyone help me?
</span><br>
<span class="quotelev1">&gt; I got similar performance issue when comparing to mvapich2 which is much faster in each MPI function in real application but similar in IMB benchmark.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Eric Feng &lt;hpc_benchmark_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Friday, December 23, 2011 9:12 PM
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Openmpi performance issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running into performance issue with Open MPI, I wish experts here can provide me some help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have one application calls a lot of sendrecv, and isend/irecv, so waitall. When I run Intel MPI, it is around 30% faster than OpenMPI.
</span><br>
<span class="quotelev1">&gt; However if i test sendrecv using IMB, OpenMPI is even faster than Intel MPI, but when run with real application, Open MPI is much slower than Intel MPI in all MPI functions by looking at profiling results. So this is not some function issue, it has a overall drawback somewhere. Can anyone give me some suggestions of where to tune to make it run faster with real application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Eric
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18060.php">Ralph Castain: "Re: [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Previous message:</strong> <a href="18058.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>In reply to:</strong> <a href="18057.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18062.php">Eugene Loh: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18062.php">Eugene Loh: "Re: [OMPI users] Openmpi performance issue"</a>
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
