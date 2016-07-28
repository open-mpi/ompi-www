<?
$subject_val = "Re: [hwloc-devel] -lhwloc in components.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:08:34 2012" -->
<!-- isoreceived="20120905150834" -->
<!-- sent="Wed, 5 Sep 2012 17:08:29 +0200" -->
<!-- isosent="20120905150829" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lhwloc in components." -->
<!-- id="20120905150829.GA14606_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2A7593FC-8988-4CD5-AB6C-214BA451BF25_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] -lhwloc in components.<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 11:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3250.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3247.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3251.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3251.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 05 Sep 2012 17:06:00 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 5, 2012, at 10:21 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So ltdl does not help for that matter?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  It's not really an ltdl issue.  ltdl is just a portable wrapper around OS-specific dlopen-like mechanisms.  
</span><br>
<p>I understand that, but dlopen is usually used for plugins, and plugins
<br>
usually need such kind of calling back into what loaded the plugin.
<br>
<p><span class="quotelev2">&gt; &gt; One way would be to pass to the component a structure with all the
</span><br>
<span class="quotelev2">&gt; &gt; useful function pointers (using #define to keep the same source code).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We thought about this in OMPI and decided it would be a nightmare in the source code.
</span><br>
<p>The source code shouldn't need to be modified:
<br>
<p>#define hwloc_foo_bar(arg1, arg2) hwloc_funcs-&gt;foo_bar(arg1, arg2)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3250.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3247.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3251.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3251.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
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
