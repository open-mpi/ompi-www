<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 16:23:06 2008" -->
<!-- isoreceived="20080324202306" -->
<!-- sent="Mon, 24 Mar 2008 16:22:43 -0400" -->
<!-- isosent="20080324202243" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="87215F41-2CEA-491B-89B6-64E24BD2D371_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47E80B52.5080000_at_cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-24 16:22:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3507.php">Edgar Gabriel: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3507.php">Edgar Gabriel: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SVN v1.5 has completely revamped how they do merging -- it is supposed  
<br>
to be much mo' betta (although I have not tried it myself).  The whole  
<br>
business of needing to track what you have already merged on a long- 
<br>
lived branch has been eliminated; in this way, SVN v1.5 will be much  
<br>
more like git/hg/bzr.
<br>
<p>However, a key difference over SVN will still be that git/hg/bzr are  
<br>
*distributed* VCS's, where SVN is still *centralized*.  Several of us  
<br>
have been using distributed workarounds to SVN for a while (e.g.,  
<br>
using git, hg, or svk as a gateway to the centralized SVN server);  
<br>
having a true distributed VCS could be quite nice.  There are other  
<br>
advantages, too, such as publishing arbitrary temporary or research  
<br>
branches (perhaps even on your own server; you don't need to sign the  
<br>
OMPI 3rd party contrib agreement to get commit access to our server)  
<br>
that aren't ready for prime-time, etc.
<br>
<p><p><p>On Mar 24, 2008, at 4:13 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; generally, I have no objections to switch away from svn to another
</span><br>
<span class="quotelev1">&gt; method, assuming that we do not give up much of the comfort that we  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; today, as George mentioned. One question related to that however is,
</span><br>
<span class="quotelev1">&gt; whether upcoming svn releases would solve some of the issues which we
</span><br>
<span class="quotelev1">&gt; have today with svn, especially with long-living branches?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; After playing with hg and git for few days, I tend to agree with the
</span><br>
<span class="quotelev2">&gt;&gt; emacs guys. It looks to me that any of them will do the job (as did
</span><br>
<span class="quotelev2">&gt;&gt; svn). I don't really care which one will be selected by the  
</span><br>
<span class="quotelev2">&gt;&gt; community as
</span><br>
<span class="quotelev2">&gt;&gt; long as we:
</span><br>
<span class="quotelev2">&gt;&gt; 1. Don't spend months in deciding which one to choose.
</span><br>
<span class="quotelev2">&gt;&gt; 2. Don't loose the nice integration o svn with our TRAC.  
</span><br>
<span class="quotelev2">&gt;&gt; Independent on
</span><br>
<span class="quotelev2">&gt;&gt; how good/fast the dVCS is, the way svn integrate with trac is a real
</span><br>
<span class="quotelev2">&gt;&gt; time saver. Tracking bugs, linking to revisions and to the wiki are
</span><br>
<span class="quotelev2">&gt;&gt; really important features to me, and I think that whatever our  
</span><br>
<span class="quotelev2">&gt;&gt; decision
</span><br>
<span class="quotelev2">&gt;&gt; will be we should not lose this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 24, 2008, at 2:12 PM, Roland Dreier wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LWN.net has an interesting article about how Emacs chose a new  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; control system: &lt;<a href="http://lwn.net/Articles/272011/">http://lwn.net/Articles/272011/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They were back in the CVS stone ages, but their main contenders were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same big three of distributed VCSs: git, hg and bzr.  The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; article
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pulls out a couple of very good quotes from their discussion.  The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caught my eye was from Richard Stallman:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   We already know the most important thing about what we will find  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   a careful study of git, mercurial and Bzr. We will find that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each has
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   its advantages and disadvantages -- but none of them conclusive.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   will be preferred by some people, but any one of them would work  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   well enough.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - R.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<li><strong>Next message:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3507.php">Edgar Gabriel: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3507.php">Edgar Gabriel: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
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
