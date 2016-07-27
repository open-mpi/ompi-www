<?
$subject_val = "Re: [hwloc-devel] v0.9 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 16:05:33 2009" -->
<!-- isoreceived="20091021200533" -->
<!-- sent="Wed, 21 Oct 2009 22:03:58 +0200" -->
<!-- isosent="20091021200358" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v0.9 branch" -->
<!-- id="4ADF692E.3030001_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C99EBCFE-A7A6-45CD-A83F-60F44F982F73_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v0.9 branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 16:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0226.php">Pavan Balaji: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 21, 2009, at 3:43 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that I try to implement it, I remember why an inline is convenient:
</span><br>
<span class="quotelev2">&gt;&gt; it doesn't require any build-time/run-time dependency unless you really
</span><br>
<span class="quotelev2">&gt;&gt; use it. If we make this code non-inline, we actually need libibverbs at
</span><br>
<span class="quotelev2">&gt;&gt; build time and runtime. Distro packages will have to depend on
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs, and we'll get lots of complaints. Same for linux-libnuma.h
</span><br>
<span class="quotelev2">&gt;&gt; and maybe nvidia cuda one day :) So we'll probably end up splitting this
</span><br>
<span class="quotelev2">&gt;&gt; code out of libhwloc.so and make a libhwloc-openfabrics-verbs.so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, good reason.  Let's leave it as inline for 0.9.1, then.  But we do
</span><br>
<span class="quotelev1">&gt; need to fix the topology parameter, sorry.  :-(
</span><br>
<p>Ok, but we still have a problem with LINUX_SYS not being visible to
<br>
external users (it's only defined in private/config.h). Our test gets
<br>
the right Linux code because it includes private/config.h explicitely.
<br>
But all externall users will use the default/dumb code path.
<br>
<p>We could either:
<br>
* use unifdef at install time to keep the relevant #ifdef/#ifndef code
<br>
path (I don't know how popular unifdef is)
<br>
or
<br>
* have different headers in the tarball, one for each OS, and only
<br>
install the right one
<br>
<p><span class="quotelev1">&gt; Should we make a dlopen-like functionality for this kind of stuff for
</span><br>
<span class="quotelev1">&gt; v1.0?  It's not hard to do with libltdl.
</span><br>
<p>No idea :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0226.php">Pavan Balaji: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
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
