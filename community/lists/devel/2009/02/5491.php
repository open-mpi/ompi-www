<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 15:04:04 2009" -->
<!-- isoreceived="20090219200404" -->
<!-- sent="Thu, 19 Feb 2009 13:03:56 -0700" -->
<!-- isosent="20090219200356" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="9491C7F0-5F03-4AA0-974A-42D49A7D6C6A_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499DB505.9090004_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 15:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5492.php">Jeff Squyres: "Re: [OMPI devel] ORTE meeting Feb 25-27, 2008"</a>
<li><strong>Previous message:</strong> <a href="5490.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5490.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5496.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5496.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you are all over-engineering what is in truth a very, very  
<br>
simple procedure I do dozens of times a day...and can best be  
<br>
&quot;discovered&quot; by simply doing &quot;hg help&quot; or looking at their great  
<br>
documentation for svn users.  ;-)
<br>
<p>&quot;svn add&quot; takes as arguments the files that need to be added. If you  
<br>
do an &quot;svn st&quot;, you will see those identified with a '?' at the  
<br>
beginning of the line. I generally do this whenever I add new files to  
<br>
the svn/hg repo (as opposed to waiting until I'm about to commit back  
<br>
to the main OMPI repo) just because it is easier to keep track of  
<br>
things that way.
<br>
<p>Likewise, you will need to do an &quot;svn del&quot; to delete any files that hg  
<br>
removed. In this case, when you do &quot;svn st&quot;, the files will be marked  
<br>
with a '!' at the beginning of the line.
<br>
<p>Unlike hg, svn does its ignore properties on a per-directory basis.  
<br>
These properties tell svn &quot;ignore these files&quot; so it (a) doesn't show  
<br>
them when you do a status (i.e., &quot;svn st&quot;), and (b) doesn't track them  
<br>
or attempt to add them to the repository. We ask that everyone set the  
<br>
properties when they create a new directory to keep things clean - you  
<br>
can look at a similar directory to see what should be included.
<br>
<p>To edit properties, do &quot;svn pe svn:ignore &lt;directory&gt;&quot;.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Feb 19, 2009, at 12:37 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, thanks for all the feedback.  New version is at:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/">https://svn.open-mpi.org/trac/ompi/wiki/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; UsingMercurial#Developmentcycle
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If everyone is happy with that, I'll remove the old version, along  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the diagram.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I like the new text much better than the old, but I think your  
</span><br>
<span class="quotelev2">&gt;&gt; diagram is still pertinent in the context of the new text.    The  
</span><br>
<span class="quotelev2">&gt;&gt; only issue I have with the diagram is you don't see the steps in  
</span><br>
<span class="quotelev2">&gt;&gt; the order that are given in the text but I am not sure that is  
</span><br>
<span class="quotelev2">&gt;&gt; possible to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the diagram contributes little to the new text and, in fact,  
</span><br>
<span class="quotelev1">&gt; confuses things.  The diagram really corresponds to the old  
</span><br>
<span class="quotelev1">&gt; description.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I think your text is generally good enough (some nits  
</span><br>
<span class="quotelev2">&gt;&gt; below).   You might want to say that &quot;this is one way&quot; or somesuch,  
</span><br>
<span class="quotelev2">&gt;&gt; because  there are other variants (e.g., I typically commit  
</span><br>
<span class="quotelev2">&gt;&gt; multiple times  before pushing, etc.).  But I doubt it's worth  
</span><br>
<span class="quotelev2">&gt;&gt; going into that much  detail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.  Let experts diverge from the notes as they will.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Minor nits:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Speaking of which, I changed walla to voila.  (You said elsewhere  
</span><br>
<span class="quotelev1">&gt; that you didn't speak French.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - On the &quot;put back to SVN&quot; side, note that you might need to SVN  
</span><br>
<span class="quotelev2">&gt;&gt; add/ remove as well (i.e., if you added or removed stuff in hg).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm confused.  It would seem to me, you should do this after an &quot;hg  
</span><br>
<span class="quotelev1">&gt; update&quot; in the combo workspace.  What arguments should &quot;svn add&quot;  
</span><br>
<span class="quotelev1">&gt; take?  That is, how do you know which files were just added by &quot;hg  
</span><br>
<span class="quotelev1">&gt; update&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's also  common to need to update various svn:ignore properties.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does this mean?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - On the &quot;commit to my local hg&quot; side, it's not always a good idea  
</span><br>
<span class="quotelev2">&gt;&gt; to  just run a top-level &quot;hg addremove&quot; -- that may slurp in some  
</span><br>
<span class="quotelev2">&gt;&gt; kruft  files that you have in your workspace.  I usually use a  
</span><br>
<span class="quotelev2">&gt;&gt; finer-grained  &quot;hg add file1 file2 ...&quot; approach (because I've been  
</span><br>
<span class="quotelev2">&gt;&gt; burned by the top- level &quot;hg addremove&quot; approach before).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay.  Done.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5492.php">Jeff Squyres: "Re: [OMPI devel] ORTE meeting Feb 25-27, 2008"</a>
<li><strong>Previous message:</strong> <a href="5490.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5490.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5496.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5496.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
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
