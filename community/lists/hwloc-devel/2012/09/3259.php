<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:42:15 2012" -->
<!-- isoreceived="20120905154215" -->
<!-- sent="Wed, 5 Sep 2012 11:42:11 -0400" -->
<!-- isosent="20120905154211" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="3E5718E4-4ED0-47CB-90E4-8340B8CCB2D7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120905153609.GE14606_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 11:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3260.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3258.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>In reply to:</strong> <a href="3256.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3260.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3260.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3280.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2012, at 11:36 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. We do not allow &quot;./configure --enable-static --enable-shared&quot;.  Even though that's valid Automake/Libtool (i.e., it'll generate libhwloc.a *and* libhwloc.so), we don't allow it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, actually for instance Debian builds once with -static, and once
</span><br>
<span class="quotelev1">&gt; with -shared, and installs both...
</span><br>
<p>That scenario is fine.  It's just the &quot;build both at once&quot; scenario that isn't allowed.
<br>
<p><span class="quotelev1">&gt; BTW, I guess it wasn't attempted to make OMPI plugins work on windows?
</span><br>
<span class="quotelev1">&gt; The nightmare is even worse there...
</span><br>
<p>I don't know if Shiqing (the main OMPI Windows maintainer) allows plugins on Windows, or if he slurps the plugins into libmpi.dll.
<br>
<p><span class="quotelev2">&gt;&gt; 2. If --enable-shared (which is OMPI's default), we build plugins as DSOs and do not link them against libmpi.so (and friends).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. If --enable-static, we build plugins are part of libmpi.a (and friends).  Issues #9 and #12 from table 1 on the wiki are avoided, as are 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. However: in both libmpi.so / libmpi.a cases, we can still allow the use of DSOs -- e.g., if a vendor drops in another DSO plugin that OMPI will just find/load/use at run time.  This is cases #2, #5, #8, and #11 in table 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't these vendor-provided DSO need to use some OMPI functions?
</span><br>
<p>Yes.  And they work fine for #2 (above).
<br>
<p><span class="quotelev1">&gt; That said it looks a not too bad solution: avoiding loading plugins in
</span><br>
<span class="quotelev1">&gt; the static case, but still allowing third-party plugins, and it's up to
</span><br>
<span class="quotelev1">&gt; the user to make it work :)
</span><br>
<p><p>That's generally the conclusion we came to.  The &quot;need to open (hwloc|OMPI) as a plugin itself&quot; case is not common.  Specifically, it came up in the case of Python, Perl, and R MPI bindings.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3260.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3258.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>In reply to:</strong> <a href="3256.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3260.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3260.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3280.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
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
