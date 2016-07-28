<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 17:07:03 2009" -->
<!-- isoreceived="20090219220703" -->
<!-- sent="Thu, 19 Feb 2009 14:06:00 -0800" -->
<!-- isosent="20090219220600" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="499DD7C8.9000503_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9491C7F0-5F03-4AA0-974A-42D49A7D6C6A_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-02-19 17:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5497.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5491.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5489.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I think you are all over-engineering what is in truth a very, very  
</span><br>
<span class="quotelev1">&gt; simple procedure
</span><br>
<p>Yes, guilty as charged.
<br>
<p><span class="quotelev1">&gt; I do dozens of times a day...
</span><br>
<p>Aha!  Therein lies the difference.  I haven't even done this a dozen 
<br>
times in my lifetime.
<br>
<p><span class="quotelev1">&gt; and can best be  &quot;discovered&quot; by simply doing &quot;hg help&quot; or looking at 
</span><br>
<span class="quotelev1">&gt; their great  documentation for svn users.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;svn add&quot; takes as arguments the files that need to be added. If you  
</span><br>
<span class="quotelev1">&gt; do an &quot;svn st&quot;, you will see those identified with a '?' at the  
</span><br>
<span class="quotelev1">&gt; beginning of the line. I generally do this whenever I add new files 
</span><br>
<span class="quotelev1">&gt; to  the svn/hg repo (as opposed to waiting until I'm about to commit 
</span><br>
<span class="quotelev1">&gt; back  to the main OMPI repo) just because it is easier to keep track 
</span><br>
<span class="quotelev1">&gt; of  things that way.
</span><br>
<p>Okay, I changed it again!  Hopefully, the churn rate is starting to subside.
<br>
<p><span class="quotelev1">&gt; Likewise, you will need to do an &quot;svn del&quot; to delete any files that 
</span><br>
<span class="quotelev1">&gt; hg  removed. In this case, when you do &quot;svn st&quot;, the files will be 
</span><br>
<span class="quotelev1">&gt; marked  with a '!' at the beginning of the line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unlike hg, svn does its ignore properties on a per-directory basis.  
</span><br>
<span class="quotelev1">&gt; These properties tell svn &quot;ignore these files&quot; so it (a) doesn't show  
</span><br>
<span class="quotelev1">&gt; them when you do a status (i.e., &quot;svn st&quot;), and (b) doesn't track 
</span><br>
<span class="quotelev1">&gt; them  or attempt to add them to the repository. We ask that everyone 
</span><br>
<span class="quotelev1">&gt; set the  properties when they create a new directory to keep things 
</span><br>
<span class="quotelev1">&gt; clean - you  can look at a similar directory to see what should be 
</span><br>
<span class="quotelev1">&gt; included.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To edit properties, do &quot;svn pe svn:ignore &lt;directory&gt;&quot;. 
</span><br>
<p>I'm inclined not to talk about this.  The original setup instructions 
<br>
set some ignore stuff up.  Thereafter, if people stick to the usual 
<br>
svn/hg commands, no further ignore directives have to be modified.  (I'm 
<br>
assuming here.)  If someone wants to get fancy, let them blaze their own 
<br>
trail.
<br>
<p><span class="quotelev1">&gt; On Feb 19, 2009, at 12:37 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay, thanks for all the feedback.  New version is at:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/">https://svn.open-mpi.org/trac/ompi/wiki/</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; UsingMercurial#Developmentcycle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If everyone is happy with that, I'll remove the old version, along  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the diagram.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - On the &quot;put back to SVN&quot; side, note that you might need to SVN  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add/ remove as well (i.e., if you added or removed stuff in hg).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm confused.  It would seem to me, you should do this after an &quot;hg  
</span><br>
<span class="quotelev2">&gt;&gt; update&quot; in the combo workspace.  What arguments should &quot;svn add&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; take?  That is, how do you know which files were just added by &quot;hg  
</span><br>
<span class="quotelev2">&gt;&gt; update&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's also  common to need to update various svn:ignore properties.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does this mean?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5497.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>In reply to:</strong> <a href="5491.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5489.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
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
