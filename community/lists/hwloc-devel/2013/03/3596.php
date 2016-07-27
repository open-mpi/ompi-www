<?
$subject_val = "Re: [hwloc-devel] Solaris chiptype / rename.h";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 12:10:35 2013" -->
<!-- isoreceived="20130326161035" -->
<!-- sent="Tue, 26 Mar 2013 17:10:30 +0100" -->
<!-- isosent="20130326161030" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Solaris chiptype / rename.h" -->
<!-- id="5151C876.7030805_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43FC6572_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Solaris chiptype / rename.h<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 12:10:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3597.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>Previous message:</strong> <a href="3595.php">Jeff Squyres (jsquyres): "[hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>In reply to:</strong> <a href="3595.php">Jeff Squyres (jsquyres): "[hwloc-devel] Solaris chiptype / rename.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3597.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>Reply:</strong> <a href="3597.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed the problem is not reported by my custom check in tests/rename/
<br>
because it includes hwloc.h before solaris-chiptype.h. So your
<br>
conclusion looks ok to me.
<br>
<p>Brice
<br>
<p><p><p>Le 26/03/2013 16:56, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just committed <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5513">https://svn.open-mpi.org/trac/hwloc/changeset/5513</a> on the v1.5 branch, which ensures that the symbols in topology-solaris-chiptype.c are subject to &lt;hwloc/rename.h&gt;.  We discovered this problem on the OMPI SVN trunk, which embeds hwloc 1.5.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the hwloc trunk, I see that  #include &lt;hwloc/autogen/config.h&gt; was added to chiptype.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be sure before I commit (and because I don't have a Solaris machine with which to test), this will *not* include &lt;hwloc/rename.h&gt;, and therefore merging over r5513 to the trunk is still a good idea (i.e., include &lt;hwloc.h&gt;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3597.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>Previous message:</strong> <a href="3595.php">Jeff Squyres (jsquyres): "[hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>In reply to:</strong> <a href="3595.php">Jeff Squyres (jsquyres): "[hwloc-devel] Solaris chiptype / rename.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3597.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>Reply:</strong> <a href="3597.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
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
