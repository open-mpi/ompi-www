<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 16:12:37 2008" -->
<!-- isoreceived="20080228211237" -->
<!-- sent="Thu, 28 Feb 2008 16:12:31 -0500" -->
<!-- isosent="20080228211231" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635" -->
<!-- id="4B9100B3-583C-4FF3-8EB0-939570C2564D_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E4442869-FABB-49CF-96BC-5F3F6CAB1B10_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 16:12:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3323.php">George Bosilca: "Re: [OMPI devel] Latency optimizations"</a>
<li><strong>Previous message:</strong> <a href="3321.php">Richard Graham: "[OMPI devel] Latency optimizations"</a>
<li><strong>In reply to:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apparently there are many people complaining about the Mercurial  
<br>
inability to deal with empty directories (and with moving  
<br>
directories). I didn't really understood exactly the deep woodoo of  
<br>
this problem, but from the emails exchanges it doesn't look like there  
<br>
will be a fix for this any time soon.
<br>
<p>My point was the people who use Mercurial, can create this file in  
<br>
their repository once and for all, and they will stop having problems  
<br>
with this empty directory. And this without propagating fixes for  
<br>
Mercurial &quot;features&quot; into the main subversion repository.
<br>
<p>Anyway, the file is back so I guess this topic is closed :)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 28, 2008, at 3:03 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 28, 2008, at 2:32 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not caution this kind of support. Subversion is the official
</span><br>
<span class="quotelev2">&gt;&gt; version control system for Open MPI. If one decide to use another
</span><br>
<span class="quotelev2">&gt;&gt; version control system, then he/she should add this file in their
</span><br>
<span class="quotelev2">&gt;&gt; own repository.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not to start a religious war, but...  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree that SVN is the official repo of OMPI.  But some of us are
</span><br>
<span class="quotelev1">&gt; using other SCM's in order to do distributed development (e.g.,
</span><br>
<span class="quotelev1">&gt; Mercurial).  It allows us to test on a variety of platforms without a)
</span><br>
<span class="quotelev1">&gt; lots of commits back to SVN, and b) committing potentially untested /
</span><br>
<span class="quotelev1">&gt; broken code back to SVN before it has been tested / fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mercurial (and others) are different from SVN in that they are
</span><br>
<span class="quotelev1">&gt; distributed by nature (whereas SVN has a singe, common repo).  Hence,
</span><br>
<span class="quotelev1">&gt; it's not a matter of just committing a single helper file back to your
</span><br>
<span class="quotelev1">&gt; top-level Mercurial repo because you have multiple top-level Mercurial
</span><br>
<span class="quotelev1">&gt; repo's.  The OMPI SVN is the only repo that they all have in common.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the community need this file, then someone should devote and
</span><br>
<span class="quotelev2">&gt;&gt; commit it back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Er... isn't that what Ralph did?  :-)
</span><br>
<p>It came bundled with the ORTE import, while it is obvious it doesn't  
<br>
have anything in common with orte.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it hadn't been named .hg&lt;something&gt; you might not have  
</span><br>
<span class="quotelev1">&gt; noticed.  :-D
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps we could call it .not-empty or .placeholder or something
</span><br>
<span class="quotelev1">&gt; else?  I don't see the harm in having this file there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eventually, the same person should consider submitting a patch to
</span><br>
<span class="quotelev2">&gt;&gt; ROMIO developers ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds more like a Mercurial bug to me, actually...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3322/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3323.php">George Bosilca: "Re: [OMPI devel] Latency optimizations"</a>
<li><strong>Previous message:</strong> <a href="3321.php">Richard Graham: "[OMPI devel] Latency optimizations"</a>
<li><strong>In reply to:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
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
