<?
$subject_val = "Re: [hwloc-devel] -lhwloc in components.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 07:46:05 2012" -->
<!-- isoreceived="20120906114605" -->
<!-- sent="Thu, 6 Sep 2012 07:46:01 -0400" -->
<!-- isosent="20120906114601" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lhwloc in components." -->
<!-- id="3A400D7B-A456-4CC2-ABDC-3F20EAF7112E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5047811B.6000706_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 07:46:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3271.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3269.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3263.php">Brice Goglin: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2012, at 12:43 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; It may even be easier in hwloc since plugins are disabled by default. We
</span><br>
<span class="quotelev1">&gt; may just need to forbid --enable-static and --enabled-plugins
</span><br>
<span class="quotelev1">&gt; simultaneously.
</span><br>
<p>Static + plugins isn't a problem.  See cases 8 and 11 on <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a>.
<br>
<p>It's a combo build of both libhwloc.a and libhwloc.so that is a problem.
<br>
<p><span class="quotelev1">&gt; Did anybody ever complained about shared+static not being allowed
</span><br>
<span class="quotelev1">&gt; simultaneously in OMPI?
</span><br>
<p>Not that I remember.
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
<li><strong>Next message:</strong> <a href="3271.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3269.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3263.php">Brice Goglin: "Re: [hwloc-devel] -lhwloc in components."</a>
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
