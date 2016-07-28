<?
$subject_val = "Re: [OMPI docs] Defining an Authoring Environment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 15:31:27 2007" -->
<!-- isoreceived="20071218203127" -->
<!-- sent="Tue, 18 Dec 2007 15:31:13 -0500" -->
<!-- isosent="20071218203113" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Defining an Authoring Environment" -->
<!-- id="185C902E-3EBF-4ECE-B402-011DBC5085E4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="476027D8.1040603_at_sun.com" -->
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
<strong>Date:</strong> 2007-12-18 15:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Amit Kumar Saha: "Re: [OMPI docs] Updated Wiki on Authoring Tools"</a>
<li><strong>In reply to:</strong> <a href="0079.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>Reply:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry; I missed this post.
<br>
<p>SVN can handle any type of file.  It works best with text-based files  
<br>
(to capture diffs between revisions), but it'll work just fine with  
<br>
binary files, too.  You'll need to be careful between revisions -- SVN  
<br>
won't be able to integrate changes from two different sources.  E.g.:
<br>
<p>- foo.odt is in the repository at r1
<br>
- Bob makes a change to foo.odt and commits the change at r2
<br>
- Alice makes a change to foo.odt *r1* and tries to commit
<br>
<p>Alice's change will not be able to be merged back in because foo.odt  
<br>
is a binary format and SVN doesn't know how to merge it in.  SVN in  
<br>
this case will detect the discrepancy and tell Alice that she can't  
<br>
check in -- there's been a conflict that a human needs to resolve.  So  
<br>
Alice will need to get the new foo.odt at r2 and manually integrate  
<br>
her changes in.  Then she'll be able to commit it back to the  
<br>
repository.
<br>
<p><p>On Dec 12, 2007, at 1:26 PM, Richard.Friedman_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Finally I'm able to get back to this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Take a look at this website, which was suggested to me by one of the  
</span><br>
<span class="quotelev1">&gt; Sun folks involved with StarOffice and OpenOffice documentation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://oooauthors.org/">http://oooauthors.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This site is home for the community of writers creating  
</span><br>
<span class="quotelev1">&gt; documentation for OpenOffice. There are some valuable tips on how to  
</span><br>
<span class="quotelev1">&gt; write documentation and how to use OpenOffice that we can very  
</span><br>
<span class="quotelev1">&gt; easily adopt for our project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may be easier to think of archiving all the documentation in .odt  
</span><br>
<span class="quotelev1">&gt; format for now and publishing in pdf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question is, can we work with .odt files or do they have to be in  
</span><br>
<span class="quotelev1">&gt; some ascii format like .xml?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;R&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Amit Kumar Saha: "Re: [OMPI docs] Updated Wiki on Authoring Tools"</a>
<li><strong>In reply to:</strong> <a href="0079.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>Reply:</strong> <a href="0086.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] Defining an Authoring Environment"</a>
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
