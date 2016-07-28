<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 13:06:54 2009" -->
<!-- isoreceived="20090217180654" -->
<!-- sent="Tue, 17 Feb 2009 13:06:48 -0500" -->
<!-- isosent="20090217180648" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="408613DC-CA88-45DF-BCAC-ECEF417EDA53_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499AFBC0.2060309_at_sun.com" -->
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
<strong>Date:</strong> 2009-02-17 13:06:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5449.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5447.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5447.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5454.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5454.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah!  Sorry; I thought we had some discussion about that but perhaps it  
<br>
was forgotten.  :-\
<br>
<p>Here's what I typically run to bring down changes from SVN to HG:
<br>
<p># Ensure all the latest hg repo changes are in the working dir
<br>
hg up
<br>
# Bring in all the SVN changes
<br>
svn up
<br>
# Refresh the .hgignore file (may change due to the svn up)
<br>
./contrib/hg/build-hgignore.pl
<br>
# Add / remove any files to hg
<br>
hg addremove
<br>
# Now commit to hg
<br>
hg ci -m &quot;Up to SVN rzzzzz&quot;
<br>
<p>Would you mind adding something like this to the wiki page?
<br>
<p><p>On Feb 17, 2009, at 1:02 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I've been wading through this page over and over, but can't seem to  
</span><br>
<span class="quotelev1">&gt; find this particular tidbit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have the OMPI SVN repository, a combo SVN/HG area, and an HG  
</span><br>
<span class="quotelev1">&gt; clone (the pictures on that web page would have you going from left  
</span><br>
<span class="quotelev1">&gt; to right), then the page tells you:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) How to populate these repositories initially, going from left to  
</span><br>
<span class="quotelev1">&gt; right.
</span><br>
<span class="quotelev1">&gt; 2) How to bring changes back from your HG workspace to OMPI SVN,  
</span><br>
<span class="quotelev1">&gt; going from right to left.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm asking about something that I can't find discussed.  Namely, how  
</span><br>
<span class="quotelev1">&gt; do you propagate subsequent updates from left to right.  I'm  
</span><br>
<span class="quotelev1">&gt; guessing that if I'm in my combo workspace, after I do an &quot;svn up&quot;,  
</span><br>
<span class="quotelev1">&gt; I do an &quot;hg commit&quot;, but I'm losing my brains trying to keep all  
</span><br>
<span class="quotelev1">&gt; this stuff synced up.  (Your work on eliminating SVN sounds  
</span><br>
<span class="quotelev1">&gt; appealing.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check this wiki page out: <a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 17, 2009, at 12:36 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's say I have a combo SVN/HG workspace.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's say someone makes changes to the trunk.  I guess I bring  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; those  over to my combo workspace with &quot;svn up&quot;.  Yes?  How then  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do I make  the HG side of the combo repository see those updates?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5449.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5447.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5447.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5454.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5454.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
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
