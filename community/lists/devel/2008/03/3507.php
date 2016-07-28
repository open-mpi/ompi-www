<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 16:13:10 2008" -->
<!-- isoreceived="20080324201310" -->
<!-- sent="Mon, 24 Mar 2008 15:13:06 -0500" -->
<!-- isosent="20080324201306" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="47E80B52.5080000_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="065F1BCE-906C-4511-A9FB-535B7670A81C_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Switching away from SVN?<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-24 16:13:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3508.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3506.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3508.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3508.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
generally, I have no objections to switch away from svn to another 
<br>
method, assuming that we do not give up much of the comfort that we have 
<br>
today, as George mentioned. One question related to that however is, 
<br>
whether upcoming svn releases would solve some of the issues which we 
<br>
have today with svn, especially with long-living branches?
<br>
<p>Edgar
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; After playing with hg and git for few days, I tend to agree with the 
</span><br>
<span class="quotelev1">&gt; emacs guys. It looks to me that any of them will do the job (as did 
</span><br>
<span class="quotelev1">&gt; svn). I don't really care which one will be selected by the community as 
</span><br>
<span class="quotelev1">&gt; long as we:
</span><br>
<span class="quotelev1">&gt; 1. Don't spend months in deciding which one to choose.
</span><br>
<span class="quotelev1">&gt; 2. Don't loose the nice integration o svn with our TRAC. Independent on 
</span><br>
<span class="quotelev1">&gt; how good/fast the dVCS is, the way svn integrate with trac is a real 
</span><br>
<span class="quotelev1">&gt; time saver. Tracking bugs, linking to revisions and to the wiki are 
</span><br>
<span class="quotelev1">&gt; really important features to me, and I think that whatever our decision 
</span><br>
<span class="quotelev1">&gt; will be we should not lose this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 24, 2008, at 2:12 PM, Roland Dreier wrote:
</span><br>
<span class="quotelev2">&gt;&gt; LWN.net has an interesting article about how Emacs chose a new version
</span><br>
<span class="quotelev2">&gt;&gt; control system: &lt;<a href="http://lwn.net/Articles/272011/">http://lwn.net/Articles/272011/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They were back in the CVS stone ages, but their main contenders were
</span><br>
<span class="quotelev2">&gt;&gt; the same big three of distributed VCSs: git, hg and bzr.  The article
</span><br>
<span class="quotelev2">&gt;&gt; pulls out a couple of very good quotes from their discussion.  The one
</span><br>
<span class="quotelev2">&gt;&gt; that caught my eye was from Richard Stallman:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    We already know the most important thing about what we will find from
</span><br>
<span class="quotelev2">&gt;&gt;    a careful study of git, mercurial and Bzr. We will find that each has
</span><br>
<span class="quotelev2">&gt;&gt;    its advantages and disadvantages -- but none of them conclusive. Each
</span><br>
<span class="quotelev2">&gt;&gt;    will be preferred by some people, but any one of them would work out
</span><br>
<span class="quotelev2">&gt;&gt;    well enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - R.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3508.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3506.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3508.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3508.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
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
