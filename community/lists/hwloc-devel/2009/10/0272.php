<?
$subject_val = "Re: [hwloc-devel] Priority of env vars vs. application options";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 09:54:31 2009" -->
<!-- isoreceived="20091028135431" -->
<!-- sent="Wed, 28 Oct 2009 14:54:16 +0100" -->
<!-- isosent="20091028135416" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Priority of env vars vs. application options" -->
<!-- id="4AE84D08.3030407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0380A0CC-35B2-4BD4-905B-55FEDEAC82DE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Priority of env vars vs. application options<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 09:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0273.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0271.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0271.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0273.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0273.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 28, 2009, at 9:29 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I would think that the API *only* looks at the names passed as
</span><br>
<span class="quotelev3">&gt;&gt; &gt; parameters -- command line, env variable, etc. are upper-layer
</span><br>
<span class="quotelev3">&gt;&gt; &gt; abstractions added by top-level tools like lstopo, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See Brice's case, where it's not the user that provides the xml file,
</span><br>
<span class="quotelev2">&gt;&gt; but a deployment tool.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ya, I saw that.  For a small tool like the hwloc library, it doesn't
</span><br>
<span class="quotelev1">&gt; feel right to offer back-door hooks that can circumvent the
</span><br>
<span class="quotelev1">&gt; application.  If an application is buggy, then the application should
</span><br>
<span class="quotelev1">&gt; be fixed -- it doesn't seem like the right thing to intentionally add
</span><br>
<span class="quotelev1">&gt; hooks just to accommodate buggy applications.  Is that what you're
</span><br>
<span class="quotelev1">&gt; suggesting, or am I missing the point?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It's not (only) about buggy applications, the bug could in hwloc as
<br>
well. You might want to check the hwloc behavior with this application
<br>
if the topology if different.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0273.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0271.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0271.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0273.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0273.php">Jeff Squyres: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
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
