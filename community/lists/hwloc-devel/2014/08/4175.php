<?
$subject_val = "Re: [hwloc-devel] --enable-plugins broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 15:07:09 2014" -->
<!-- isoreceived="20140818190709" -->
<!-- sent="Mon, 18 Aug 2014 21:07:07 +0200" -->
<!-- isosent="20140818190707" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] --enable-plugins broken" -->
<!-- id="53F24EDB.7050606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59276730-5E61-429F-85F5-41CFD7A09D02_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 15:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4176.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>Previous message:</strong> <a href="4174.php">Jeff Squyres (jsquyres): "[hwloc-devel] --enable-plugins broken"</a>
<li><strong>In reply to:</strong> <a href="4174.php">Jeff Squyres (jsquyres): "[hwloc-devel] --enable-plugins broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4176.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>Reply:</strong> <a href="4176.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] --enable-plugins broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/08/2014 20:37, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; I notice that --enable-plugins seems to be broken -- it always ends in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Plugin support requested, but could not find ltdl.h
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you don't have libltdl installed.  Is this intentional?  I.e., have we already relied on an external libltdl?  Or have we previously embedded libltdl (via LT_CONFIG_LTDL_DIR), and it has just bit-rotted?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We had both external and embedded ltdl support in the beginning. We
<br>
removed embedded in 1.7.1.
<br>
Brice
<br>
<p><p>commit 7491172a4754b0e198f699cb31b7c65c59ac4df6
<br>
Author: Brice Goglin &lt;brice.goglin_at_[hidden]&gt;
<br>
Date:   Wed May 15 08:15:49 2013 +0000
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Stop embedding libltdl, always use the system-wide libltdl
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The ltdl embedding caused problems to the hwloc embedding such as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3659.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3659.php</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;We fixed the embedding AM_CONDITIONAL problem in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/5605">https://svn.open-mpi.org/trac/hwloc/changeset/5605</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;but the generated tarballs now (sometimes) miss libltdl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;causing configure to break.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The patch in the first link above worked around that issue but...
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Embedding ltdl is useful when you rely on recent ltdl features,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while ltdl 1.5 (couldn't test earlier) looks OK for hwloc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and that version is very old and available everywhere.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* the ltdl embedding ability isn't perfect in &quot;recursive&quot; mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(we had a hack for its config.h file in our configure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;see <a href="http://lists.gnu.org/archive/html/libtool/2012-08/msg00016.html">http://lists.gnu.org/archive/html/libtool/2012-08/msg00016.html</a>)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* we only need ltdl when --enable-plugins (not by default)
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;That's enough reasons to consider not embedding ltdl anymore.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;We now require people to install libltdl-dev/libtool-ltdl-dev
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if they want plugins.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This commit was SVN r5618.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4176.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>Previous message:</strong> <a href="4174.php">Jeff Squyres (jsquyres): "[hwloc-devel] --enable-plugins broken"</a>
<li><strong>In reply to:</strong> <a href="4174.php">Jeff Squyres (jsquyres): "[hwloc-devel] --enable-plugins broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4176.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] --enable-plugins broken"</a>
<li><strong>Reply:</strong> <a href="4176.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] --enable-plugins broken"</a>
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
