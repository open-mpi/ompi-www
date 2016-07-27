<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 10:45:57 2011" -->
<!-- isoreceived="20111215154557" -->
<!-- sent="Thu, 15 Dec 2011 16:45:47 +0100" -->
<!-- isosent="20111215154547" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069" -->
<!-- id="4EEA162B.1030205_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201112151531.pBFFVo2c006946_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 10:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2652.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4069)"</a>
<li><strong>Previous message:</strong> <a href="2650.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2654.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069"</a>
<li><strong>Reply:</strong> <a href="2654.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 15/12/2011 16:31, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2011-12-15 10:31:50 EST (Thu, 15 Dec 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 4069
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4069">https://svn.open-mpi.org/trac/hwloc/changeset/4069</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix a long-standing obsolete PREDEFINED in the website doxygen config
</span><br>
<p>There are still some significant differences between doxygen &quot;normal&quot;
<br>
config (doxygen.cfg) and the website one (www.open-mpi.org.cfg). I think
<br>
we often forgot to update the latter when changing the former. Here are
<br>
what I think should be backported into www.open-mpi.org to clean things up:
<br>
<p>These are non-trivial but they were changed in doxygen.cfg after the
<br>
last modification of www.open-mpi.org.cfg.
<br>
BRIEF_MEMBER_DESC yes-&gt;no
<br>
SHORT_NAMES no-&gt;yes
<br>
SHOW_FILES yes-&gt;no
<br>
<p>These ones probably don't matter because we use the tarball PDF for the
<br>
website, we don't rerun latex there. So I can unformize these.
<br>
LATEX_CMD_NAME latex-&gt;pdflatex-&gt;
<br>
EXTRA_PACKAGES -&gt;times
<br>
LATEX_SOURCE_CODE no-&gt;yes
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2652.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4069)"</a>
<li><strong>Previous message:</strong> <a href="2650.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2654.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069"</a>
<li><strong>Reply:</strong> <a href="2654.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069"</a>
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
