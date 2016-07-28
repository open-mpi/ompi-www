<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 02:15:44 2009" -->
<!-- isoreceived="20090818061544" -->
<!-- sent="Tue, 18 Aug 2009 16:15:35 +1000 (EST)" -->
<!-- isosent="20090818061535" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="1851478729.1478561250576135780.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="211821457.1478531250575905556.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 02:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6671.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6669.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6669.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6688.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Chris Samuel&quot; &lt;csamuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is most likely because it's getting an error from the
</span><br>
<span class="quotelev1">&gt; kernel when trying to bind to a socket it's not permitted
</span><br>
<span class="quotelev1">&gt; to access.
</span><br>
<p>This is what strace reports:
<br>
<p>18561 sched_setaffinity(18561, 8,  { f0 } &lt;unfinished ...&gt;
<br>
18561 &lt;... sched_setaffinity resumed&gt; ) = -1 EINVAL (Invalid argument)
<br>
<p>so that would appear to be it.
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6671.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6669.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6669.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6688.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
