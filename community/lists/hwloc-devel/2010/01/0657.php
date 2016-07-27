<?
$subject_val = "Re: [hwloc-devel] random api questions";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 11:34:38 2010" -->
<!-- isoreceived="20100130163438" -->
<!-- sent="Sat, 30 Jan 2010 17:34:32 +0100" -->
<!-- isosent="20100130163432" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] random api questions" -->
<!-- id="4B645F98.4060906_at_inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100130162304.GQ4798_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] random api questions<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 11:34:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0658.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0656.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0656.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0658.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0658.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0662.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; What about now (r1711)?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, it's good now.
<br>
<p>But now that I understand all this, I wonder what application developers
<br>
will think about it. Most applications want the list of procs that are
<br>
online and allowed. So they'll have to compute the intersection of
<br>
online and allowed. I think it'd be better ot have &quot;obj-&gt;cpuset&quot;
<br>
contains this intersection. And rename the current &quot;obj-&gt;cpuset&quot; into
<br>
something like &quot;obj-&gt;present_cpuset&quot;.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0658.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0656.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0656.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0658.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0658.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0662.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
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
