<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 12:15:07 2009" -->
<!-- isoreceived="20090219171507" -->
<!-- sent="Thu, 19 Feb 2009 09:14:18 -0800" -->
<!-- isosent="20090219171418" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="499D936A.5030405_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499D77DE.20208_at_sun.com" -->
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
<strong>Date:</strong> 2009-02-19 12:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5486.php">Ralph Castain: "[OMPI devel] ORTE meeting Feb 25-27, 2008"</a>
<li><strong>Previous message:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5487.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5487.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5489.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, thanks for all the feedback.  New version is at:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#Developmentcycle">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#Developmentcycle</a>
<br>
<p>If everyone is happy with that, I'll remove the old version, along with 
<br>
the diagram.
<br>
<p><span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here's what I typically run to bring down changes from SVN to HG:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Ensure all the latest hg repo changes are in the working dir
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hg up
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Bring in all the SVN changes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; svn up
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Refresh the .hgignore file (may change due to the svn up)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./contrib/hg/build-hgignore.pl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Add / remove any files to hg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hg addremove
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Now commit to hg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hg ci -m &quot;Up to SVN rzzzzz&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Would you mind adding something like this to the wiki page?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#Developmentcycle">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#Developmentcycle</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5486.php">Ralph Castain: "[OMPI devel] ORTE meeting Feb 25-27, 2008"</a>
<li><strong>Previous message:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5487.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5487.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5489.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
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
