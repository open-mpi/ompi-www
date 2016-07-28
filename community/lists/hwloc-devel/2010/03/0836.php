<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 28 05:28:20 2010" -->
<!-- isoreceived="20100328092820" -->
<!-- sent="Sun, 28 Mar 2010 11:28:13 +0200" -->
<!-- isosent="20100328092813" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865" -->
<!-- id="20100328092813.GE7497_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="36ca99e91003270706yead8a7er781ff0a4eb53a29_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-28 05:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0837.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0835.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="0834.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert Wesarg, le Sat 27 Mar 2010 15:06:43 +0100, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; + &#160;if (needed_count &lt;= ulongs_count)
</span><br>
<span class="quotelev2">&gt; &gt; + &#160; &#160;return;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; + &#160;while (ulongs_count &lt; needed_count)
</span><br>
<span class="quotelev2">&gt; &gt; + &#160; &#160;ulongs_count *= 2;
</span><br>
<p>Mmm, this is actually 1 &lt;&lt; (hwloc_fls(needed_count)), isn't it?
<br>
<p>SAmuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0837.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0835.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="0834.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865"</a>
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
