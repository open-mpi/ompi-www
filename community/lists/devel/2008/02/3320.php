<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 15:04:30 2008" -->
<!-- isoreceived="20080228200430" -->
<!-- sent="Thu, 28 Feb 2008 15:03:49 -0500" -->
<!-- isosent="20080228200349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635" -->
<!-- id="E4442869-FABB-49CF-96BC-5F3F6CAB1B10_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="15FFC921-5B10-4469-B589-0542F89651B3_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 15:03:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3321.php">Richard Graham: "[OMPI devel] Latency optimizations"</a>
<li><strong>Previous message:</strong> <a href="3319.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>In reply to:</strong> <a href="3319.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3322.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>Reply:</strong> <a href="3322.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2008, at 2:32 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I do not caution this kind of support. Subversion is the official  
</span><br>
<span class="quotelev1">&gt; version control system for Open MPI. If one decide to use another  
</span><br>
<span class="quotelev1">&gt; version control system, then he/she should add this file in their  
</span><br>
<span class="quotelev1">&gt; own repository.
</span><br>
<p>Not to start a religious war, but...  :-)
<br>
<p>I agree that SVN is the official repo of OMPI.  But some of us are  
<br>
using other SCM's in order to do distributed development (e.g.,  
<br>
Mercurial).  It allows us to test on a variety of platforms without a)  
<br>
lots of commits back to SVN, and b) committing potentially untested /  
<br>
broken code back to SVN before it has been tested / fixed.
<br>
<p>Mercurial (and others) are different from SVN in that they are  
<br>
distributed by nature (whereas SVN has a singe, common repo).  Hence,  
<br>
it's not a matter of just committing a single helper file back to your  
<br>
top-level Mercurial repo because you have multiple top-level Mercurial  
<br>
repo's.  The OMPI SVN is the only repo that they all have in common.
<br>
<p><span class="quotelev1">&gt; If the community need this file, then someone should devote and  
</span><br>
<span class="quotelev1">&gt; commit it back.
</span><br>
<p>Er... isn't that what Ralph did?  :-)
<br>
<p>If it hadn't been named .hg&lt;something&gt; you might not have noticed.  :-D
<br>
<p>Perhaps we could call it .not-empty or .placeholder or something  
<br>
else?  I don't see the harm in having this file there.
<br>
<p><span class="quotelev1">&gt; Eventually, the same person should consider submitting a patch to  
</span><br>
<span class="quotelev1">&gt; ROMIO developers ...
</span><br>
<p>Sounds more like a Mercurial bug to me, actually...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3321.php">Richard Graham: "[OMPI devel] Latency optimizations"</a>
<li><strong>Previous message:</strong> <a href="3319.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>In reply to:</strong> <a href="3319.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3322.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>Reply:</strong> <a href="3322.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
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
