<?
$subject_val = "Re: [OMPI users] Running 1 proc per socket but no more";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 16:01:40 2015" -->
<!-- isoreceived="20150701200140" -->
<!-- sent="Wed, 1 Jul 2015 15:01:38 -0500" -->
<!-- isosent="20150701200138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running 1 proc per socket but no more" -->
<!-- id="CAMD57oekcj6Nu_-HSPq5+NpENfMNaOjAe=AkUF0jwWWL66nGtQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKVSXaMqvQwM8irCdOa28A+tzTPzxWzS7cV7jFvzjO44xw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 16:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Previous message:</strong> <a href="27239.php">Saliya Ekanayake: "[OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>In reply to:</strong> <a href="27239.php">Saliya Ekanayake: "[OMPI users] Running 1 proc per socket but no more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Reply:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scenario 2: --map-by ppr:12:node,span --bind-to core
<br>
<p>will put 12 procs on each node, load balanced across the sockets, each proc
<br>
bound to 1 core
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Wed, Jul 1, 2015 at 2:42 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am doing some benchmarks and would like to test the following two
</span><br>
<span class="quotelev1">&gt; scenarios. Each machine has 4 sockets each with 6 cores (lstopo image
</span><br>
<span class="quotelev1">&gt; attached).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scenario 1
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Run 12 procs per node each bound to 2 cores. I can do this by --map-by
</span><br>
<span class="quotelev1">&gt; socket:PE=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scenario 2
</span><br>
<span class="quotelev1">&gt; Run 12 procs per node each bound to just 1 core. This is what I don't know
</span><br>
<span class="quotelev1">&gt; how to do, because if I do --map-by socket:PE=1 then mpirun will put more
</span><br>
<span class="quotelev1">&gt; than 12 procs per node as it can do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd appreciate any help on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27239.php">http://www.open-mpi.org/community/lists/users/2015/07/27239.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Previous message:</strong> <a href="27239.php">Saliya Ekanayake: "[OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>In reply to:</strong> <a href="27239.php">Saliya Ekanayake: "[OMPI users] Running 1 proc per socket but no more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Reply:</strong> <a href="27241.php">Saliya Ekanayake: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
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
