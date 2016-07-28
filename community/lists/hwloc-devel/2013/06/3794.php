<?
$subject_val = "Re: [hwloc-devel] First plugin namespace issue report";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  5 02:13:05 2013" -->
<!-- isoreceived="20130605061305" -->
<!-- sent="Wed, 05 Jun 2013 08:12:58 +0200" -->
<!-- isosent="20130605061258" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] First plugin namespace issue report" -->
<!-- id="51AED6EA.8000207_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F65BDDE_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] First plugin namespace issue report<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-05 02:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3795.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Previous message:</strong> <a href="3793.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>In reply to:</strong> <a href="3792.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3795.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3795.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/06/2013 05:38, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jun 4, 2013, at 9:55 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One option might be to try to lt_dlsym one of the hwloc symbols that you know you'll need in the plugin (or any public hwloc symbol, for that matter).  If ltdl_sym gets NULL back for the hwloc global symbol, then the plugin should disqualify itself and have itself unloaded (perhaps with some way of reporting what/why it did that).
</span><br>
<span class="quotelev2">&gt;&gt; lt_dlsym doesn't seem to accept special handles such as RTLD_DEFAULT
</span><br>
<span class="quotelev2">&gt;&gt; like dlsym does, and we don't have a handle on hwloc. I don't see how to
</span><br>
<span class="quotelev2">&gt;&gt; do that with lt_dlsym?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we lt_dlopen(NULL) to get a handle to this process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yeah that works! OpenCL doesn't crashes anymore, and normal programs
<br>
seem to still load plugins fine.
<br>
<p>For the record, we'll have to link plugins with -lltdl and add the
<br>
following code:
<br>
<p>&nbsp;&nbsp;lt_dlhandle handle;
<br>
&nbsp;&nbsp;void *sym;
<br>
<p>&nbsp;&nbsp;handle = lt_dlopen(NULL);
<br>
&nbsp;&nbsp;if (!handle)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;sym = lt_dlsym(handle, &quot;hwloc_backend_alloc&quot;);
<br>
&nbsp;&nbsp;lt_dlclose(handle);
<br>
&nbsp;&nbsp;if (!sym)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
<p><p>Components have an instantiate() callback that is always called first,
<br>
so this code could go there. The XML libxml plugin is different, there
<br>
are 3 possible entry points (backend init, export_xml and
<br>
export_xmlbuffer). So the above code would be needed in all of them (we
<br>
don't have a global plugin init() function, everything is in a struct).
<br>
<p>This code has to be in the plugin for real, it obviously cannot be
<br>
shared in the hwloc core, but putting it in a static inline in
<br>
hwloc/plugins.h may still be OK?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3795.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Previous message:</strong> <a href="3793.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>In reply to:</strong> <a href="3792.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3795.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3795.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
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
