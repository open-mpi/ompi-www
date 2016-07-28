<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 08:35:45 2010" -->
<!-- isoreceived="20100125133545" -->
<!-- sent="Mon, 25 Jan 2010 08:35:40 -0500" -->
<!-- isosent="20100125133540" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664" -->
<!-- id="0EE00B57-69ED-464A-A15E-7F5E55D985B9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201001250207.o0P27gW8000412_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 08:35:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0622.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664"</a>
<li><strong>Previous message:</strong> <a href="0620.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0622.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664"</a>
<li><strong>Reply:</strong> <a href="0622.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664"</a>
<li><strong>Reply:</strong> <a href="0623.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick!
<br>
<p>Does this mean that some versions of doxy have this bug and some don't?
<br>
<p><p><p>On Jan 24, 2010, at 9:07 PM, &lt;sthibaul_at_[hidden]&gt; &lt;sthibaul_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-01-24 21:07:42 EST (Sun, 24 Jan 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1664
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1664">https://svn.open-mpi.org/trac/hwloc/changeset/1664</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; ignore errors when renaming the bogus files
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/doc/Makefile.am |    20 ++++++++++----------                   
</span><br>
<span class="quotelev1">&gt;    1 files changed, 10 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/doc/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/doc/Makefile.am       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/doc/Makefile.am       2010-01-24 21:07:42 EST (Sun, 24 Jan 2010)
</span><br>
<span class="quotelev1">&gt; @@ -123,16 +123,16 @@
</span><br>
<span class="quotelev1">&gt;         @rm -rf $(DOX_DIR)/man/man3
</span><br>
<span class="quotelev1">&gt;         @mv $(DOX_DIR)/man.tmp $(DOX_DIR)/man/man3
</span><br>
<span class="quotelev1">&gt;         @echo &quot;Work-around buggy doxygen filenames...&quot;
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/html/termsanddefs.html $(DOX_DIR)/html/a00001.html
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/latex/termsanddefs.tex $(DOX_DIR)/latex/a00001.tex
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/html/tools.html $(DOX_DIR)/html/a00002.html
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/latex/tools.tex $(DOX_DIR)/latex/a00002.tex
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/html/envvar.html $(DOX_DIR)/html/a00003.html
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/latex/envvar.tex $(DOX_DIR)/latex/a00003.tex
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/html/embed.html $(DOX_DIR)/html/a00004.html
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/latex/embed.tex $(DOX_DIR)/latex/a00004.tex
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/html/switchfromplpa.html $(DOX_DIR)/html/a00005.html
</span><br>
<span class="quotelev1">&gt; -       @mv -f $(DOX_DIR)/latex/switchfromplpa.tex $(DOX_DIR)/latex/a00005.tex
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/html/termsanddefs.html $(DOX_DIR)/html/a00001.html
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/latex/termsanddefs.tex $(DOX_DIR)/latex/a00001.tex
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/html/tools.html $(DOX_DIR)/html/a00002.html
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/latex/tools.tex $(DOX_DIR)/latex/a00002.tex
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/html/envvar.html $(DOX_DIR)/html/a00003.html
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/latex/envvar.tex $(DOX_DIR)/latex/a00003.tex
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/html/embed.html $(DOX_DIR)/html/a00004.html
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/latex/embed.tex $(DOX_DIR)/latex/a00004.tex
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/html/switchfromplpa.html $(DOX_DIR)/html/a00005.html
</span><br>
<span class="quotelev1">&gt; +       -_at_mv -f $(DOX_DIR)/latex/switchfromplpa.tex $(DOX_DIR)/latex/a00005.tex
</span><br>
<span class="quotelev1">&gt;  endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0622.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664"</a>
<li><strong>Previous message:</strong> <a href="0620.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0622.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664"</a>
<li><strong>Reply:</strong> <a href="0622.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664"</a>
<li><strong>Reply:</strong> <a href="0623.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1664"</a>
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
