<?
$subject_val = "Re: [OMPI users] Running 1 proc per socket but no more";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 16:16:05 2015" -->
<!-- isoreceived="20150701201605" -->
<!-- sent="Wed, 1 Jul 2015 16:16:04 -0400" -->
<!-- isosent="20150701201604" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running 1 proc per socket but no more" -->
<!-- id="CA+ssbKWvEGwvDXBxXfL7ZYMFsG+CXmWikLxxT8RSVxze3U-Ypg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKUGQVAgWNUxitVi=S50P_cOkgVg7UdqQwA=TgXnjENmxQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running 1 proc per socket but no more<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 16:16:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27243.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Previous message:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>In reply to:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried this, but I get an error,
<br>
<p>-------
<br>
An invalid value was given for the number of processes
<br>
per resource (ppr) to be mapped on each node:
<br>
<p>&nbsp;&nbsp;PPR:  12:node,span
<br>
<p>The specification must be a comma-separated list containing
<br>
combinations of number, followed by a colon, followed
<br>
by the resource type. For example, a value of &quot;1:socket&quot; indicates that
<br>
one process is to be mapped onto each socket. Values are supported
<br>
for hwthread, core, L1-3 caches, socket, numa, and node. Note that
<br>
enough characters must be provided to clearly specify the desired
<br>
resource (e.g., &quot;nu&quot; for &quot;numa&quot;).
<br>
<p>On Wed, Jul 1, 2015 at 4:04 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 1, 2015 at 4:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scenario 2: --map-by ppr:12:node,span --bind-to core
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; will put 12 procs on each node, load balanced across the sockets, each
</span><br>
<span class="quotelev2">&gt;&gt; proc bound to 1 core
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 1, 2015 at 2:42 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am doing some benchmarks and would like to test the following two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scenarios. Each machine has 4 sockets each with 6 cores (lstopo image
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scenario 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Run 12 procs per node each bound to 2 cores. I can do this by --map-by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket:PE=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scenario 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Run 12 procs per node each bound to just 1 core. This is what I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know how to do, because if I do --map-by socket:PE=1 then mpirun will put
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more than 12 procs per node as it can do so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd appreciate any help on this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27239.php">http://www.open-mpi.org/community/lists/users/2015/07/27239.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27240.php">http://www.open-mpi.org/community/lists/users/2015/07/27240.php</a>
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
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27243.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Previous message:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>In reply to:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
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
