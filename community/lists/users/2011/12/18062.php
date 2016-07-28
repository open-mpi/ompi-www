<?
$subject_val = "Re: [OMPI users] Openmpi performance issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 27 12:58:51 2011" -->
<!-- isoreceived="20111227175851" -->
<!-- sent="Tue, 27 Dec 2011 09:58:43 -0800" -->
<!-- isosent="20111227175843" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi performance issue" -->
<!-- id="4EFA0753.1060703_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C80E3764-8B30-4928-B29E-9EA2332E2665_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-27 12:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Previous message:</strong> <a href="18061.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178;, &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "Re: [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>In reply to:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I remember correctly, both Intel MPI and MVAPICH2 bind processes by 
<br>
default.  OMPI does not.  There are many cases where the &quot;bind by 
<br>
default&quot; behavior gives better default performance.  (There are also 
<br>
cases where it can give catastrophically worse performance.)  Anyhow, it 
<br>
seems possible to me that this accounts for the difference you're seeing.
<br>
<p>To play with binding in OMPI, you can try adding &quot;--bind-to-socket 
<br>
--bysocket&quot; to your mpirun command line, though what to try can depend 
<br>
on what version of OMPI you're using as well as details of your 
<br>
processor (HyperThreads?), your application, etc.  There's a FAQ entry 
<br>
at <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
<p>On 12/27/2011 6:45 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It depends a lot on the application and how you ran it. Can you 
</span><br>
<span class="quotelev1">&gt; provide some info? For example, if you oversubscribed the node, then 
</span><br>
<span class="quotelev1">&gt; we dial down the performance to provide better cpu sharing. Another 
</span><br>
<span class="quotelev1">&gt; point: we don't bind processes by default while other MPIs do. Etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So more info (like the mpirun command line you used, which version you 
</span><br>
<span class="quotelev1">&gt; used, how OMPI was configured, etc.) would help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 27, 2011, at 6:35 AM, Eric Feng wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone help me?
</span><br>
<span class="quotelev2">&gt;&gt; I got similar performance issue when comparing to mvapich2 which is 
</span><br>
<span class="quotelev2">&gt;&gt; much faster in each MPI function in real application but similar in 
</span><br>
<span class="quotelev2">&gt;&gt; IMB benchmark.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* Eric Feng &lt;hpc_benchmark_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:hpc_benchmark_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *To:* &quot;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Friday, December 23, 2011 9:12 PM
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* [OMPI users] Openmpi performance issue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running into performance issue with Open MPI, I wish experts 
</span><br>
<span class="quotelev2">&gt;&gt; here can provide me some help,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have one application calls a lot of sendrecv, and isend/irecv, so 
</span><br>
<span class="quotelev2">&gt;&gt; waitall. When I run Intel MPI, it is around 30% faster than OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; However if i test sendrecv using IMB, OpenMPI is even faster than 
</span><br>
<span class="quotelev2">&gt;&gt; Intel MPI, but when run with real application, Open MPI is much 
</span><br>
<span class="quotelev2">&gt;&gt; slower than Intel MPI in all MPI functions by looking at profiling 
</span><br>
<span class="quotelev2">&gt;&gt; results. So this is not some function issue, it has a overall 
</span><br>
<span class="quotelev2">&gt;&gt; drawback somewhere. Can anyone give me some suggestions of where to 
</span><br>
<span class="quotelev2">&gt;&gt; tune to make it run faster with real application?
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18062/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Previous message:</strong> <a href="18061.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178;, &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "Re: [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>In reply to:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18063.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
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
