<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 10:37:07 2009" -->
<!-- isoreceived="20090219153707" -->
<!-- sent="Thu, 19 Feb 2009 10:36:56 -0500" -->
<!-- isosent="20090219153656" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="499D7C98.8040704_at_sun.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 10:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5480.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5480.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 19, 2009, at 5:39 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres wrote:
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As it has been spoken, so has it been done:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was looking at the added stuff and it looks to me that the steps 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are missing doing an &quot;hg up&quot; on the SVN/HG workspace before doing 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the svn up.  Am I missing something here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No - the doc is missing that step, but you should do it (or at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; least, I always do, and it &quot;works for me&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I'll add it then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, thanks for reviewing the content.  (I guess Jeff was 
</span><br>
<span class="quotelev1">&gt; just dazzled by my brilliant diagram!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, I'd like to understand this better.  Jeff's e-mail above has an 
</span><br>
<span class="quotelev1">&gt; &quot;hg up&quot; before the &quot;svn up&quot;.  But, I was trying to organize the steps 
</span><br>
<span class="quotelev1">&gt; in terms of stuff that propagates &quot;from left to right&quot; (from OMPI 
</span><br>
<span class="quotelev1">&gt; central repository out to HG clones) and stuff that propagates &quot;from 
</span><br>
<span class="quotelev1">&gt; right to left&quot; (from HG clones back to central repository).  Changes 
</span><br>
<span class="quotelev1">&gt; could be happening anywhere along the way (people putting code back to 
</span><br>
<span class="quotelev1">&gt; central repository or combo workspaces while you're doing development 
</span><br>
<span class="quotelev1">&gt; work in a clone), and so changes have to be propagated in both 
</span><br>
<span class="quotelev1">&gt; directions.  Merges could happen at different points.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, I had an &quot;hg up&quot;, but it's sitting on the right-to-left 
</span><br>
<span class="quotelev1">&gt; trail.  It's step #2 on the return trail.  It's at the bottom middle 
</span><br>
<span class="quotelev1">&gt; of the diagram.  Isn't this sufficient?  Doesn't &quot;svn up&quot; bring 
</span><br>
<span class="quotelev1">&gt; updates from the central repository to the combo workspace, while &quot;hg 
</span><br>
<span class="quotelev1">&gt; up&quot; brings the changes from the clones into the combo?  So, in the 
</span><br>
<span class="quotelev1">&gt; &quot;left/right&quot; organization, they belong to different directions.
</span><br>
Ok, I guess I was trying to use the instructions more as a template of 
<br>
what I need to do instead of trying to separate the commands based on 
<br>
change flow.  I agree you are technically correct as to how you 
<br>
separated the flow but
<br>
it was unclear to me that if you wanted to update your svn/hg workspace 
<br>
from the svn repository that you need to do the &quot;hg up&quot; first before the 
<br>
&quot;svn up&quot; or else you'd lose the changes made to the hg workspace side.
<br>
<p>Note, cleaning up/detecting such a mistake can be a really big pain in 
<br>
the butt.  We've ran into this issue multiple times internally in Sun 
<br>
(hahaha, who do you work for again?) where we've svn up'd a release 
<br>
workspace before hg up'ing thus losing changes.  It's not that big of 
<br>
deal to try and rollback (mostly dog work), probably the bigger issue is 
<br>
it becomes very confusing to one when all of a sudden a certain feature 
<br>
has disappeared especially when several other putbacks have then occurred.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5480.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5480.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
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
