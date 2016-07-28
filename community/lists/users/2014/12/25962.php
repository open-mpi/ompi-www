<?
$subject_val = "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 05:59:58 2014" -->
<!-- isoreceived="20141211105958" -->
<!-- sent="Thu, 11 Dec 2014 02:59:54 -0800" -->
<!-- isosent="20141211105954" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5" -->
<!-- id="D92B3B29-714F-4AAF-971B-55F993232F2F_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54889C8C.5010905_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 05:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Previous message:</strong> <a href="25961.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>In reply to:</strong> <a href="25955.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are more than welcome - we really appreciate your spotting the problem!
<br>
<p>As a side note: you commented about how this works now even if you don&#146;t set the &#147;yield&#148; MCA param. Just as an FYI: we automatically set the &#147;yield&#148; param for you when we detect that you are oversubscribing the node as we know this will otherwise kill performance. So you can use the MCA param to force us to &#147;not yield&#148; in that scenario - otherwise, we will always protect you.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Dec 10, 2014, at 11:18 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/10/2014 12:55 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tarball now available on web site
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#146;ll run the tarball generator now so you can try the nightly tarball.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ok, retrieved openmpi-v1.8.3-236-ga21cb20 and it compiled, linked, and
</span><br>
<span class="quotelev2">&gt;&gt; executed nicely when oversubscribing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, forgot something:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks a lot!!! ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25955.php">http://www.open-mpi.org/community/lists/users/2014/12/25955.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Previous message:</strong> <a href="25961.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>In reply to:</strong> <a href="25955.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
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
