<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 05:50:33 2011" -->
<!-- isoreceived="20111216105033" -->
<!-- sent="Fri, 16 Dec 2011 05:50:28 -0500" -->
<!-- isosent="20111216105028" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069" -->
<!-- id="7E3DBF4D-9111-46B7-B7E3-910CD0A03089_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4EEA162B.1030205_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 05:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2655.php">Jeff Squyres: "[hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="2653.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc3r4071)"</a>
<li><strong>In reply to:</strong> <a href="2651.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All the changes you made look good; thanks for doing it.
<br>
<p>On Dec 15, 2011, at 10:45 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 15/12/2011 16:31, bgoglin_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Author: bgoglin
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-12-15 10:31:50 EST (Thu, 15 Dec 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 4069
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4069">https://svn.open-mpi.org/trac/hwloc/changeset/4069</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix a long-standing obsolete PREDEFINED in the website doxygen config
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are still some significant differences between doxygen &quot;normal&quot;
</span><br>
<span class="quotelev1">&gt; config (doxygen.cfg) and the website one (www.open-mpi.org.cfg). I think
</span><br>
<span class="quotelev1">&gt; we often forgot to update the latter when changing the former. Here are
</span><br>
<span class="quotelev1">&gt; what I think should be backported into www.open-mpi.org to clean things up:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are non-trivial but they were changed in doxygen.cfg after the
</span><br>
<span class="quotelev1">&gt; last modification of www.open-mpi.org.cfg.
</span><br>
<span class="quotelev1">&gt; BRIEF_MEMBER_DESC yes-&gt;no
</span><br>
<span class="quotelev1">&gt; SHORT_NAMES no-&gt;yes
</span><br>
<span class="quotelev1">&gt; SHOW_FILES yes-&gt;no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These ones probably don't matter because we use the tarball PDF for the
</span><br>
<span class="quotelev1">&gt; website, we don't rerun latex there. So I can unformize these.
</span><br>
<span class="quotelev1">&gt; LATEX_CMD_NAME latex-&gt;pdflatex-&gt;
</span><br>
<span class="quotelev1">&gt; EXTRA_PACKAGES -&gt;times
</span><br>
<span class="quotelev1">&gt; LATEX_SOURCE_CODE no-&gt;yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2655.php">Jeff Squyres: "[hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="2653.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc3r4071)"</a>
<li><strong>In reply to:</strong> <a href="2651.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069"</a>
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
