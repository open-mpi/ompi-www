<?
$subject_val = "Re: [hwloc-devel] standalone-like build inside other projects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 07:00:01 2010" -->
<!-- isoreceived="20100630110001" -->
<!-- sent="Wed, 30 Jun 2010 07:00:00 -0400" -->
<!-- isosent="20100630110000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] standalone-like build inside other projects" -->
<!-- id="0BCB3082-1C61-4F99-99C5-9920DAA1589C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C2B1431.3090801_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] standalone-like build inside other projects<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 07:00:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1121.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2280)"</a>
<li><strong>Previous message:</strong> <a href="1119.php">Brice Goglin: "[hwloc-devel] standalone-like build inside other projects"</a>
<li><strong>In reply to:</strong> <a href="1119.php">Brice Goglin: "[hwloc-devel] standalone-like build inside other projects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 30, 2010, at 5:53 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Modified: mvapich2/trunk/src/mpid/ch3/channels/mrail/src/hwloc/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- mvapich2/trunk/src/mpid/ch3/channels/mrail/src/hwloc/Makefile.am    2010-06-29 22:01:58 UTC (rev 3997)
</span><br>
<span class="quotelev1">&gt; +++ mvapich2/trunk/src/mpid/ch3/channels/mrail/src/hwloc/Makefile.am    2010-06-29 22:02:09 UTC (rev 3998)
</span><br>
<span class="quotelev1">&gt; @@ -7,7 +7,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  SUBDIRS = src include
</span><br>
<span class="quotelev1">&gt;  if HWLOC_BUILD_STANDALONE
</span><br>
<span class="quotelev1">&gt; -SUBDIRS += utils tests doc
</span><br>
<span class="quotelev1">&gt; +SUBDIRS += utils tests
</span><br>
<span class="quotelev1">&gt;  endif
</span><br>
<p>Doing this means that their &quot;make dist&quot; will not include the doc directory.
<br>
<p>This may be (and probably is) fine for their requirements.  For how they're using it, they technically don't need the utils, tests, or doc directories (aside from the fact that they're not using the embedded build).  Indeed, in OMPI, I &quot;svn -rm&quot;'ed most of the contents of tests, doc, and utils, just so that an OMPI tarball wouldn't have to carry around all the hwloc man pages, PDF docs, etc. (but the directories themselves must still exist; the Autotools do sanity tests to ensure that they exist, even if they aren't traversed).  I don't remember the numbers, but removing this stuff did make a noticeable difference on the size of the resulting OMPI tarball.
<br>
<p><span class="quotelev1">&gt; If more people are going to use hwloc in standalone-mode inside other
</span><br>
<span class="quotelev1">&gt; projects, maybe we need to talk:
</span><br>
<span class="quotelev1">&gt; * tell them to switch to the embedded mode ? if not, what do they miss
</span><br>
<span class="quotelev1">&gt; in the embedded mode ?
</span><br>
<p>There's 2 ways to do the embedded mode:
<br>
<p>1. use the m4 stuff, like Open MPI (and like I did with some other internal Cisco projects)
<br>
2. use &quot;./configure --enable-embedded-mode ...&quot; (which I used in at least 1 internal Cisco project)
<br>
<p>Both are documented in the docs.
<br>
<p>I can see how some people wouldn't want to get their hands dirty with the m4 stuff.  But I'm not sure why they're not using the 2nd form.
<br>
<p>According to the docs, here's what embedded mode gives you:
<br>
<p>-----
<br>
When used in &quot;embedded&quot; mode, hwloc will:
<br>
<p>- not install any header files
<br>
- not build any documentation files
<br>
- not build or install any executables or tests
<br>
- not build &lt;tt&gt;libhwloc.*&lt;/tt&gt; -- instead, it will build
<br>
&nbsp;&nbsp;&lt;tt&gt;libhwloc_embedded.*&lt;/tt&gt;
<br>
-----
<br>
<p><span class="quotelev1">&gt; * look at supporting the disabling the doc/tools build when called by
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_SUBDIRS ?
</span><br>
<p>AC_CONFIG_SUBDIRS is unfortunately fairly limited.  We don't use it in Open MPI because of all of its restrictions; we ended up rolling our own OMPI_CONFIG_SUBDIRS (which, while it isn't perfect, eases many/most of the restrictions from AC_CONDIF_SUBDIRS).  
<br>
<p>You can pass --enable-embedded-mode from the top-level configure to enable hwloc's embedded mode when invoked via AC_CONFIG_SUBDIRS, but that seems unattractive.  I suppose the top-level configure could setenv $enable_embedded_mode before finishing, which would have the same effect as passing the actual flag --enable-embedded-mode, but I haven't tried this myself...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1121.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2280)"</a>
<li><strong>Previous message:</strong> <a href="1119.php">Brice Goglin: "[hwloc-devel] standalone-like build inside other projects"</a>
<li><strong>In reply to:</strong> <a href="1119.php">Brice Goglin: "[hwloc-devel] standalone-like build inside other projects"</a>
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
