<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 17:46:32 2010" -->
<!-- isoreceived="20100401214632" -->
<!-- sent="Thu, 01 Apr 2010 23:46:27 +0200" -->
<!-- isosent="20100401214627" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896" -->
<!-- id="4BB51433.4080100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2537AFA2-6214-45EA-AF68-A9EE400F452A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 17:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0854.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<li><strong>Previous message:</strong> <a href="0852.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<li><strong>In reply to:</strong> <a href="0852.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0854.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<li><strong>Reply:</strong> <a href="0854.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it's fixed in 1.6.3.
<br>
<p>Brice
<br>
<p><p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Has this bug been reported upstream to the doxygen people?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thread safety section wasn't showing up in the PDF this afternoon; it confounded me for an hour before I stumbled across this workaround in the Makefile.am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 1, 2010, at 5:33 PM, &lt;jsquyres_at_[hidden]&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-04-01 17:33:14 EDT (Thu, 01 Apr 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 1896
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1896">https://svn.open-mpi.org/trac/hwloc/changeset/1896</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Ensure to include the thread safety stuff in the PDF.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/doc/Makefile.am |    10 ++++++----                             
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 6 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/doc/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/doc/Makefile.am       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/doc/Makefile.am       2010-04-01 17:33:14 EDT (Thu, 01 Apr 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -134,10 +134,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;         -_at_mv -f $(DOX_DIR)/latex/tools.tex $(DOX_DIR)/latex/a00002.tex
</span><br>
<span class="quotelev2">&gt;&gt;         -_at_mv -f $(DOX_DIR)/html/envvar.html $(DOX_DIR)/html/a00003.html
</span><br>
<span class="quotelev2">&gt;&gt;         -_at_mv -f $(DOX_DIR)/latex/envvar.tex $(DOX_DIR)/latex/a00003.tex
</span><br>
<span class="quotelev2">&gt;&gt; -       -_at_mv -f $(DOX_DIR)/html/embed.html $(DOX_DIR)/html/a00004.html
</span><br>
<span class="quotelev2">&gt;&gt; -       -_at_mv -f $(DOX_DIR)/latex/embed.tex $(DOX_DIR)/latex/a00004.tex
</span><br>
<span class="quotelev2">&gt;&gt; -       -_at_mv -f $(DOX_DIR)/html/switchfromplpa.html $(DOX_DIR)/html/a00005.html
</span><br>
<span class="quotelev2">&gt;&gt; -       -_at_mv -f $(DOX_DIR)/latex/switchfromplpa.tex $(DOX_DIR)/latex/a00005.tex
</span><br>
<span class="quotelev2">&gt;&gt; +       -_at_mv -f $(DOX_DIR)/html/threadsafety.html $(DOX_DIR)/html/a00004.html
</span><br>
<span class="quotelev2">&gt;&gt; +       -_at_mv -f $(DOX_DIR)/latex/threadsafety.tex $(DOX_DIR)/latex/a00004.tex
</span><br>
<span class="quotelev2">&gt;&gt; +       -_at_mv -f $(DOX_DIR)/html/embed.html $(DOX_DIR)/html/a00005.html
</span><br>
<span class="quotelev2">&gt;&gt; +       -_at_mv -f $(DOX_DIR)/latex/embed.tex $(DOX_DIR)/latex/a00005.tex
</span><br>
<span class="quotelev2">&gt;&gt; +       -_at_mv -f $(DOX_DIR)/html/switchfromplpa.html $(DOX_DIR)/html/a00006.html
</span><br>
<span class="quotelev2">&gt;&gt; +       -_at_mv -f $(DOX_DIR)/latex/switchfromplpa.tex $(DOX_DIR)/latex/a00006.tex
</span><br>
<span class="quotelev2">&gt;&gt;  endif
</span><br>
<span class="quotelev2">&gt;&gt;  endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0854.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<li><strong>Previous message:</strong> <a href="0852.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<li><strong>In reply to:</strong> <a href="0852.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0854.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<li><strong>Reply:</strong> <a href="0854.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
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
