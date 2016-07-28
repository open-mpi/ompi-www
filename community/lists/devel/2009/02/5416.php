<?
$subject_val = "Re: [OMPI devel] svn commit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 15:24:39 2009" -->
<!-- isoreceived="20090213202439" -->
<!-- sent="Fri, 13 Feb 2009 13:24:29 -0700" -->
<!-- isosent="20090213202429" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] svn commit" -->
<!-- id="8097B537-A586-4D91-BAF7-8DA4F6E9088E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4995D355.2050004_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] svn commit<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 15:24:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5417.php">Eugene Loh: "Re: [OMPI devel] svn commit"</a>
<li><strong>Previous message:</strong> <a href="5415.php">Eugene Loh: "[OMPI devel] svn commit"</a>
<li><strong>In reply to:</strong> <a href="5415.php">Eugene Loh: "[OMPI devel] svn commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5417.php">Eugene Loh: "Re: [OMPI devel] svn commit"</a>
<li><strong>Reply:</strong> <a href="5417.php">Eugene Loh: "Re: [OMPI devel] svn commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you push something to an hg repo, you have to go to that repo and  
<br>
do an &quot;hg up&quot; to update it. Hg holds your changes until you do the  
<br>
update.
<br>
<p>Once you have them in the hg repo, you can do an &quot;svn st&quot; to see if  
<br>
you need to do anything further before committing back to the svn repo  
<br>
- e.g., add or remove files. When you are ready, just do an &quot;svn ci&quot;  
<br>
to commit your changes to the svn repo.
<br>
<p>Ralph
<br>
<p>On Feb 13, 2009, at 1:08 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm having trouble figuring out how to put my changes back to the  
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been looking at the wiki pages, but don't really see the one  
</span><br>
<span class="quotelev1">&gt; last piece that I need of this puzzle.  I've used <a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial</a> 
</span><br>
<span class="quotelev1">&gt;  to get me through these steps:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svn check-out of trunk to make an svn workspace on milliways
</span><br>
<span class="quotelev1">&gt; turn this also into an hg repository
</span><br>
<span class="quotelev1">&gt; bring hg workspace over to a local (Sun) workspace
</span><br>
<span class="quotelev1">&gt; make changes
</span><br>
<span class="quotelev1">&gt; hg commit and push back to milliways
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, two questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Why don't I see my changes on milliways?  If I look at a file I  
</span><br>
<span class="quotelev1">&gt; changed in my local workspace, I don't see that change when I look  
</span><br>
<span class="quotelev1">&gt; at the same file on milliways.  However, if I do a fresh hg clone  
</span><br>
<span class="quotelev1">&gt; from the milliways workspace, I do see the changes.  So, somehow my  
</span><br>
<span class="quotelev1">&gt; changes are on milliways, but only in a way that hg sees them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) How do I get the changes from my milliways svn/hg workspace back  
</span><br>
<span class="quotelev1">&gt; into the trunk?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The workspace on milliways is /u/eloh/hg/sm_latency in case that  
</span><br>
<span class="quotelev1">&gt; matters.
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
<li><strong>Next message:</strong> <a href="5417.php">Eugene Loh: "Re: [OMPI devel] svn commit"</a>
<li><strong>Previous message:</strong> <a href="5415.php">Eugene Loh: "[OMPI devel] svn commit"</a>
<li><strong>In reply to:</strong> <a href="5415.php">Eugene Loh: "[OMPI devel] svn commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5417.php">Eugene Loh: "Re: [OMPI devel] svn commit"</a>
<li><strong>Reply:</strong> <a href="5417.php">Eugene Loh: "Re: [OMPI devel] svn commit"</a>
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
