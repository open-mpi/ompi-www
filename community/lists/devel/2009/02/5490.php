<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 14:38:11 2009" -->
<!-- isoreceived="20090219193811" -->
<!-- sent="Thu, 19 Feb 2009 11:37:41 -0800" -->
<!-- isosent="20090219193741" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="499DB505.9090004_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499DA1CA.3060007_at_sun.com" -->
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
<strong>Date:</strong> 2009-02-19 14:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5491.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5489.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5487.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5491.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5491.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, thanks for all the feedback.  New version is at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#Developmentcycle">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#Developmentcycle</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If everyone is happy with that, I'll remove the old version, along 
</span><br>
<span class="quotelev2">&gt;&gt; with the diagram.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I like the new text much better than the old, but I think your 
</span><br>
<span class="quotelev1">&gt; diagram is still pertinent in the context of the new text.    The only 
</span><br>
<span class="quotelev1">&gt; issue I have with the diagram is you don't see the steps in the order 
</span><br>
<span class="quotelev1">&gt; that are given in the text but I am not sure that is possible to do.
</span><br>
<p>I think the diagram contributes little to the new text and, in fact, 
<br>
confuses things.  The diagram really corresponds to the old description.
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I think your text is generally good enough (some nits below).   
</span><br>
<span class="quotelev1">&gt; You might want to say that &quot;this is one way&quot; or somesuch, because  
</span><br>
<span class="quotelev1">&gt; there are other variants (e.g., I typically commit multiple times  
</span><br>
<span class="quotelev1">&gt; before pushing, etc.).  But I doubt it's worth going into that much  
</span><br>
<span class="quotelev1">&gt; detail.
</span><br>
<p>Right.  Let experts diverge from the notes as they will.
<br>
<p><span class="quotelev1">&gt; Minor nits:
</span><br>
<p>Speaking of which, I changed walla to voila.  (You said elsewhere that 
<br>
you didn't speak French.)
<br>
<p><span class="quotelev1">&gt; - On the &quot;put back to SVN&quot; side, note that you might need to SVN add/ 
</span><br>
<span class="quotelev1">&gt; remove as well (i.e., if you added or removed stuff in hg).
</span><br>
<p>I'm confused.  It would seem to me, you should do this after an &quot;hg 
<br>
update&quot; in the combo workspace.  What arguments should &quot;svn add&quot; take?  
<br>
That is, how do you know which files were just added by &quot;hg update&quot;?
<br>
<p><span class="quotelev1">&gt; It's also  common to need to update various svn:ignore properties.
</span><br>
<p>What does this mean?
<br>
<p><span class="quotelev1">&gt; - On the &quot;commit to my local hg&quot; side, it's not always a good idea to  
</span><br>
<span class="quotelev1">&gt; just run a top-level &quot;hg addremove&quot; -- that may slurp in some kruft  
</span><br>
<span class="quotelev1">&gt; files that you have in your workspace.  I usually use a finer-grained  
</span><br>
<span class="quotelev1">&gt; &quot;hg add file1 file2 ...&quot; approach (because I've been burned by the 
</span><br>
<span class="quotelev1">&gt; top- level &quot;hg addremove&quot; approach before). 
</span><br>
<p>Okay.  Done.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5491.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5489.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5487.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5491.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5491.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
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
