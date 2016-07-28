<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 04:06:11 2012" -->
<!-- isoreceived="20120201090611" -->
<!-- sent="Wed, 01 Feb 2012 10:06:06 +0100" -->
<!-- isosent="20120201090606" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10" -->
<!-- id="4F29007E.5010707_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F28A8DD.9040208_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 04:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2750.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2767.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Reply:</strong> <a href="2767.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/02/2012 03:52, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; ...c343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_PU.3
</span><br>
<span class="quotelev2">&gt;&gt; /export/home
</span><br>
<span class="quotelev2">&gt;&gt; /phargrov/O
</span><br>
<span class="quotelev2">&gt;&gt; '/export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343/INST/share/man/man3'
</span><br>
<span class="quotelev2">&gt;&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/./config/install-sh:
</span><br>
<span class="quotelev2">&gt;&gt; /export/home/phargrov/O does not exist.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think it would be safe to venture a guess from the truncated name
</span><br>
<span class="quotelev2">&gt;&gt; in the &quot;does not exist&quot;, that this command has exceeded the maximum
</span><br>
<span class="quotelev2">&gt;&gt; command line length.  The subsequent commands to install manpages
</span><br>
<span class="quotelev2">&gt;&gt; suffer the same sort of problem.
</span><br>
<p>As explained in the automake doc, I am going to split the man3_MANS line
<br>
into pieces to split these command lines. Please try again with a new
<br>
trunk tarball (either the next nightly build, or I can send one in
<br>
private earlier).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2750.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2767.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Reply:</strong> <a href="2767.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
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
