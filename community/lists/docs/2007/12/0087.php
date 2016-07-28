<?
$subject_val = "Re: [OMPI docs] Defining an Authoring Environment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 16:46:36 2007" -->
<!-- isoreceived="20071218214636" -->
<!-- sent="Tue, 18 Dec 2007 16:45:51 -0500" -->
<!-- isosent="20071218214551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Defining an Authoring Environment" -->
<!-- id="123F6E43-B838-4B85-B8CB-F6BF7CB437A5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47683D2D.7050902_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Defining an Authoring Environment<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 16:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2008/01/0088.php">Jeff Squyres: "[OMPI docs] OOO environment"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you can lock files.  We don't use this model in the OMPI  
<br>
community, but given the fact that you'll be working with binary  
<br>
files, it's probably a good idea.
<br>
<p>Check out:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://svnbook.red-bean.com/en/1.4/svn-book.html#svn.advanced.locking">http://svnbook.red-bean.com/en/1.4/svn-book.html#svn.advanced.locking</a>
<br>
<p>In particular, check out the part at the end of the section about the  
<br>
&quot;svn:needs-lock&quot; attribute -- it looks like that would help quite a bit.
<br>
<p><p>On Dec 18, 2007, at 4:35 PM, Richard.Friedman_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry; I missed this post.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SVN can handle any type of file.  It works best with text-based  
</span><br>
<span class="quotelev2">&gt;&gt; files (to capture diffs between revisions), but it'll work just  
</span><br>
<span class="quotelev2">&gt;&gt; fine with binary files, too.  You'll need to be careful between  
</span><br>
<span class="quotelev2">&gt;&gt; revisions -- SVN won't be able to integrate changes from two  
</span><br>
<span class="quotelev2">&gt;&gt; different sources.  E.g.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - foo.odt is in the repository at r1
</span><br>
<span class="quotelev2">&gt;&gt; - Bob makes a change to foo.odt and commits the change at r2
</span><br>
<span class="quotelev2">&gt;&gt; - Alice makes a change to foo.odt *r1* and tries to commit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alice's change will not be able to be merged back in because  
</span><br>
<span class="quotelev2">&gt;&gt; foo.odt is a binary format and SVN doesn't know how to merge it  
</span><br>
<span class="quotelev2">&gt;&gt; in.  SVN in this case will detect the discrepancy and tell Alice  
</span><br>
<span class="quotelev2">&gt;&gt; that she can't check in -- there's been a conflict that a human  
</span><br>
<span class="quotelev2">&gt;&gt; needs to resolve.  So Alice will need to get the new foo.odt at r2  
</span><br>
<span class="quotelev2">&gt;&gt; and manually integrate her changes in.  Then she'll be able to  
</span><br>
<span class="quotelev2">&gt;&gt; commit it back to the repository.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; So I assume the workflow for Alice must be something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. grab the latest revision (the one that includes Bob's changes)
</span><br>
<span class="quotelev1">&gt; 2. edit that revision
</span><br>
<span class="quotelev1">&gt; 3. commit it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there no way to lock a revision while you're working on it (like  
</span><br>
<span class="quotelev1">&gt; SCCS) so no one can commit while you are actively editing that  
</span><br>
<span class="quotelev1">&gt; content?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I think we'll have to implement is a verbal agreement that only  
</span><br>
<span class="quotelev1">&gt; one person work on a chapter at a time to avoid such clashes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the team is pretty small, I don't see that as a problem.
</span><br>
<span class="quotelev1">&gt; &lt;R&gt;
</span><br>
<span class="quotelev1">&gt; &lt;rchrd.vcf&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2008/01/0088.php">Jeff Squyres: "[OMPI docs] OOO environment"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<!-- nextthread="start" -->
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
