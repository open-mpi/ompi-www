<?
$subject_val = "Re: [OMPI users] Reducing Varying Length Arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 10 01:05:36 2013" -->
<!-- isoreceived="20131110060536" -->
<!-- sent="Sun, 10 Nov 2013 01:05:36 -0500" -->
<!-- isosent="20131110060536" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Reducing Varying Length Arrays" -->
<!-- id="CA+ssbKUmi0QhesEuuHjC3STo-r7nEDDq4tBVDUpUhUinFwKt+Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8371435407429591854_at_unknownmsgid" -->
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
<strong>Subject:</strong> Re: [OMPI users] Reducing Varying Length Arrays<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-10 01:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22935.php">Christoffer Hamberg: "[OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22933.php">Jeff Hammond: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<li><strong>In reply to:</strong> <a href="22933.php">Jeff Hammond: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff, it solved the problem.
<br>
<p>Saliya
<br>
<p><p>On Sat, Nov 9, 2013 at 8:15 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; MPI_{Gather,Allgather}v are appropriate for this. See docs for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 9, 2013, at 6:15 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to contact bunch of strings from MPI processes. For example, say
</span><br>
<span class="quotelev1">&gt; with 2 processes,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P1 has text &quot;hi&quot;
</span><br>
<span class="quotelev1">&gt; P2 has text &quot;world&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have these stored as char arrays in processes. Is there a simple way to
</span><br>
<span class="quotelev1">&gt; do a reduce operation to concat these?
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
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22934/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22935.php">Christoffer Hamberg: "[OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22933.php">Jeff Hammond: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<li><strong>In reply to:</strong> <a href="22933.php">Jeff Hammond: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
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
