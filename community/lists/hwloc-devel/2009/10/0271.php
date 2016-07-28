<?
$subject_val = "Re: [hwloc-devel] Priority of env vars vs. application options";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 09:38:04 2009" -->
<!-- isoreceived="20091028133804" -->
<!-- sent="Wed, 28 Oct 2009 09:37:59 -0400" -->
<!-- isosent="20091028133759" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Priority of env vars vs. application options" -->
<!-- id="0380A0CC-35B2-4BD4-905B-55FEDEAC82DE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091028132929.GN5226_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 09:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0272.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0272.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0272.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2009, at 9:29 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I would think that the API *only* looks at the names passed as
</span><br>
<span class="quotelev2">&gt; &gt; parameters -- command line, env variable, etc. are upper-layer
</span><br>
<span class="quotelev2">&gt; &gt; abstractions added by top-level tools like lstopo, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See Brice's case, where it's not the user that provides the xml file,
</span><br>
<span class="quotelev1">&gt; but a deployment tool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Ya, I saw that.  For a small tool like the hwloc library, it doesn't  
<br>
feel right to offer back-door hooks that can circumvent the  
<br>
application.  If an application is buggy, then the application should  
<br>
be fixed -- it doesn't seem like the right thing to intentionally add  
<br>
hooks just to accommodate buggy applications.  Is that what you're  
<br>
suggesting, or am I missing the point?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0272.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0272.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0272.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
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
