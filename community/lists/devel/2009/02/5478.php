<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 10:17:28 2009" -->
<!-- isoreceived="20090219151728" -->
<!-- sent="Thu, 19 Feb 2009 07:16:46 -0800" -->
<!-- isosent="20090219151646" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="499D77DE.20208_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499D66ED.7010502_at_sun.com" -->
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
<strong>Date:</strong> 2009-02-19 10:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5479.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5476.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5479.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5479.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5480.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5485.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 19, 2009, at 5:39 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here's what I typically run to bring down changes from SVN to HG:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Ensure all the latest hg repo changes are in the working dir
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hg up
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Bring in all the SVN changes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn up
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Refresh the .hgignore file (may change due to the svn up)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./contrib/hg/build-hgignore.pl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Add / remove any files to hg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hg addremove
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Now commit to hg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hg ci -m &quot;Up to SVN rzzzzz&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Would you mind adding something like this to the wiki page?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As it has been spoken, so has it been done:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was looking at the added stuff and it looks to me that the steps 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are missing doing an &quot;hg up&quot; on the SVN/HG workspace before doing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the svn up.  Am I missing something here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No - the doc is missing that step, but you should do it (or at least, 
</span><br>
<span class="quotelev2">&gt;&gt; I always do, and it &quot;works for me&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I'll add it then.
</span><br>
<p>First of all, thanks for reviewing the content.  (I guess Jeff was just 
<br>
dazzled by my brilliant diagram!)
<br>
<p>But, I'd like to understand this better.  Jeff's e-mail above has an &quot;hg 
<br>
up&quot; before the &quot;svn up&quot;.  But, I was trying to organize the steps in 
<br>
terms of stuff that propagates &quot;from left to right&quot; (from OMPI central 
<br>
repository out to HG clones) and stuff that propagates &quot;from right to 
<br>
left&quot; (from HG clones back to central repository).  Changes could be 
<br>
happening anywhere along the way (people putting code back to central 
<br>
repository or combo workspaces while you're doing development work in a 
<br>
clone), and so changes have to be propagated in both directions.  Merges 
<br>
could happen at different points.
<br>
<p>Anyhow, I had an &quot;hg up&quot;, but it's sitting on the right-to-left trail.  
<br>
It's step #2 on the return trail.  It's at the bottom middle of the 
<br>
diagram.  Isn't this sufficient?  Doesn't &quot;svn up&quot; bring updates from 
<br>
the central repository to the combo workspace, while &quot;hg up&quot; brings the 
<br>
changes from the clones into the combo?  So, in the &quot;left/right&quot; 
<br>
organization, they belong to different directions.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5479.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5476.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5479.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5479.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5480.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5485.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
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
