<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 17:51:33 2009" -->
<!-- isoreceived="20090217225133" -->
<!-- sent="Tue, 17 Feb 2009 14:50:57 -0800" -->
<!-- isosent="20090217225057" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="499B3F51.2070002_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="408613DC-CA88-45DF-BCAC-ECEF417EDA53_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] workspace management question<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 17:50:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5455.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5453.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5448.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5455.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5455.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5471.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Here's what I typically run to bring down changes from SVN to HG:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Ensure all the latest hg repo changes are in the working dir
</span><br>
<span class="quotelev1">&gt; hg up
</span><br>
<span class="quotelev1">&gt; # Bring in all the SVN changes
</span><br>
<span class="quotelev1">&gt; svn up
</span><br>
<span class="quotelev1">&gt; # Refresh the .hgignore file (may change due to the svn up)
</span><br>
<span class="quotelev1">&gt; ./contrib/hg/build-hgignore.pl
</span><br>
<span class="quotelev1">&gt; # Add / remove any files to hg
</span><br>
<span class="quotelev1">&gt; hg addremove
</span><br>
<span class="quotelev1">&gt; # Now commit to hg
</span><br>
<span class="quotelev1">&gt; hg ci -m &quot;Up to SVN rzzzzz&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you mind adding something like this to the wiki page?
</span><br>
<p>As it has been spoken, so has it been done:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5455.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5453.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5448.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5455.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5455.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5471.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
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
