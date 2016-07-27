<?
$subject_val = "Re: [hwloc-devel] --enable-plugins broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 17:10:18 2014" -->
<!-- isoreceived="20140818211018" -->
<!-- sent="Mon, 18 Aug 2014 21:10:16 +0000" -->
<!-- isosent="20140818211016" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] --enable-plugins broken" -->
<!-- id="647C38D4-2F35-49ED-A93B-F1B3EE1B5A75_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53F24EDB.7050606_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] --enable-plugins broken<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 17:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4177.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-183-gd247110)"</a>
<li><strong>Previous message:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>In reply to:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good enough; thanks for the refresher. :)
<br>
<p>Sent from my phone. No type good. 
<br>
<p><span class="quotelev1">&gt; On Aug 18, 2014, at 2:07 PM, &quot;Brice Goglin&quot; &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 18/08/2014 20:37, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I notice that --enable-plugins seems to be broken -- it always ends in:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Plugin support requested, but could not find ltdl.h
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if you don't have libltdl installed.  Is this intentional?  I.e., have we already relied on an external libltdl?  Or have we previously embedded libltdl (via LT_CONFIG_LTDL_DIR), and it has just bit-rotted?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had both external and embedded ltdl support in the beginning. We
</span><br>
<span class="quotelev1">&gt; removed embedded in 1.7.1.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 7491172a4754b0e198f699cb31b7c65c59ac4df6
</span><br>
<span class="quotelev1">&gt; Author: Brice Goglin &lt;brice.goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed May 15 08:15:49 2013 +0000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Stop embedding libltdl, always use the system-wide libltdl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The ltdl embedding caused problems to the hwloc embedding such as
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3659.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3659.php</a>
</span><br>
<span class="quotelev1">&gt;    We fixed the embedding AM_CONDITIONAL problem in
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5605">https://svn.open-mpi.org/trac/hwloc/changeset/5605</a>
</span><br>
<span class="quotelev1">&gt;    but the generated tarballs now (sometimes) miss libltdl,
</span><br>
<span class="quotelev1">&gt;    causing configure to break.
</span><br>
<span class="quotelev1">&gt;    The patch in the first link above worked around that issue but...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * Embedding ltdl is useful when you rely on recent ltdl features,
</span><br>
<span class="quotelev1">&gt;      while ltdl 1.5 (couldn't test earlier) looks OK for hwloc,
</span><br>
<span class="quotelev1">&gt;      and that version is very old and available everywhere.
</span><br>
<span class="quotelev1">&gt;    * the ltdl embedding ability isn't perfect in &quot;recursive&quot; mode
</span><br>
<span class="quotelev1">&gt;      (we had a hack for its config.h file in our configure
</span><br>
<span class="quotelev1">&gt;       see <a href="http://lists.gnu.org/archive/html/libtool/2012-08/msg00016.html">http://lists.gnu.org/archive/html/libtool/2012-08/msg00016.html</a>)
</span><br>
<span class="quotelev1">&gt;    * we only need ltdl when --enable-plugins (not by default)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    That's enough reasons to consider not embedding ltdl anymore.
</span><br>
<span class="quotelev1">&gt;    We now require people to install libltdl-dev/libtool-ltdl-dev
</span><br>
<span class="quotelev1">&gt;    if they want plugins.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This commit was SVN r5618.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4176.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4176.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4177.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-183-gd247110)"</a>
<li><strong>Previous message:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>In reply to:</strong> <a href="4175.php">Brice Goglin: "Re: [hwloc-devel] --enable-plugins broken"</a>
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
