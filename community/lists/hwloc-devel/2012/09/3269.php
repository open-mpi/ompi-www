<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 04:08:00 2012" -->
<!-- isoreceived="20120906080800" -->
<!-- sent="Thu, 06 Sep 2012 10:00:57 +0200" -->
<!-- isosent="20120906080057" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="50485839.7070001_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50477841.3010308_at_inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 04:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3270.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Previous message:</strong> <a href="3268.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3262.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3271.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3271.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/09/2012 18:05, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 05/09/2012 17:23, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 5, 2012, at 11:12 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To be clear: we have exactly the same situation in OMPI, and we do not link any of our DSOs against libmpi.so (we used to, but we don't any more because of the discussion on the <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a> wiki page).  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I would need to remove -no-undefined from plugins ldflags and darwin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and you?) may be happy again? But iirc, removing this flag broke
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something else, I'll check again.
</span><br>
<span class="quotelev2">&gt;&gt; Ah, yes; I confess that I have not looked closely on the components branch.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But yes; you should not have --no-undefined when building the plugins.  It's fine for building libhwloc, I think.
</span><br>
<span class="quotelev1">&gt; The reason for adding -no-undefined is &quot;libtool: link: undefined symbols
</span><br>
<span class="quotelev1">&gt; not allowed in i686-w64-ming32 shared libraries&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's an easy answer to this, disable plugins on Windows. Can you ask
</span><br>
<span class="quotelev1">&gt; Shiqing about what he thinks/does for OMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I just installed openmpi 1.6.1 win32.exe. I don't see any plugin in
<br>
there. There are several libmpi*.dll or libo*.dll, but no mca_btl_* or so
<br>
<p>I don't see anything related to specialized networks (no openib or so),
<br>
so I guess there's no real need for plugins in OMPI/Windows.
<br>
<p>As long as we don't have libxml or libpci on Windows, hwloc plugins are
<br>
useless on Windows. But that might change with other plugins.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3270.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Previous message:</strong> <a href="3268.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3262.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3271.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3271.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
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
