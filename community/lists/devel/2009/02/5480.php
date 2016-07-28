<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 10:37:52 2009" -->
<!-- isoreceived="20090219153752" -->
<!-- sent="Thu, 19 Feb 2009 10:37:46 -0500" -->
<!-- isosent="20090219153746" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="2D1EBBB1-A99D-4653-912D-5DA1D4F02ADA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 10:37:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5479.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5485.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2009, at 10:16 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; But, I'd like to understand this better.  Jeff's e-mail above has an  
</span><br>
<span class="quotelev1">&gt; &quot;hg up&quot; before the &quot;svn up&quot;.  But, I was trying to organize the  
</span><br>
<span class="quotelev1">&gt; steps in terms of stuff that propagates &quot;from left to right&quot; (from  
</span><br>
<span class="quotelev1">&gt; OMPI central repository out to HG clones) and stuff that propagates  
</span><br>
<span class="quotelev1">&gt; &quot;from right to left&quot; (from HG clones back to central repository).   
</span><br>
<span class="quotelev1">&gt; Changes could be happening anywhere along the way (people putting  
</span><br>
<span class="quotelev1">&gt; code back to central repository or combo workspaces while you're  
</span><br>
<span class="quotelev1">&gt; doing development work in a clone), and so changes have to be  
</span><br>
<span class="quotelev1">&gt; propagated in both directions.  Merges could happen at different  
</span><br>
<span class="quotelev1">&gt; points.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, I had an &quot;hg up&quot;, but it's sitting on the right-to-left  
</span><br>
<span class="quotelev1">&gt; trail.  It's step #2 on the return trail.  It's at the bottom middle  
</span><br>
<span class="quotelev1">&gt; of the diagram.  Isn't this sufficient?  Doesn't &quot;svn up&quot; bring  
</span><br>
<span class="quotelev1">&gt; updates from the central repository to the combo workspace, while  
</span><br>
<span class="quotelev1">&gt; &quot;hg up&quot; brings the changes from the clones into the combo?  So, in  
</span><br>
<span class="quotelev1">&gt; the &quot;left/right&quot; organization, they belong to different directions.
</span><br>
<p>Yes... and no.  :-)
<br>
<p>I do the &quot;hg up&quot; in both cases (r2l and l2r) because
<br>
<p>a) I may have forgotten to do it in one case (e.g., &quot;hg push&quot; doesn't  
<br>
automatically &quot;hg up&quot; at the target; I rarely login to the target  
<br>
machine to run &quot;hg up&quot; after an &quot;hg push&quot;)
<br>
b) others may have done an &quot;hg push&quot; to my repo without a  
<br>
corresponding &quot;hg up&quot; (i.e., even if *I* am religious about running  
<br>
&quot;hg up&quot; after &quot;hg push&quot;, others may not be)
<br>
c) it can create confusion/fear/mayhem/conflicts/complicated merges if  
<br>
there is stuff in the hg repo but not in the working directory before  
<br>
doing the &quot;svn up&quot;
<br>
<p>But you're correct that if you *always* &quot;hg up&quot; after &quot;hg push&quot;, then  
<br>
the &quot;hg up&quot; before the &quot;svn up&quot; should be unnecessary.  My experience  
<br>
has been that it safer to assume that that is not true in practice.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5479.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5485.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
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
