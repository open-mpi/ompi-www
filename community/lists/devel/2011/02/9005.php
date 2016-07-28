<?
$subject_val = "Re: [OMPI devel] Minor OMPI SVN configuration change";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 11:11:29 2011" -->
<!-- isoreceived="20110217161129" -->
<!-- sent="Thu, 17 Feb 2011 11:11:24 -0500" -->
<!-- isosent="20110217161124" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Minor OMPI SVN configuration change" -->
<!-- id="733F24F1-DDBB-4BFB-8E33-7D1B419D34D5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2D094A28F6B31745BE7B844EA0FF609644509D1E50_at_ES04SNLNT.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Minor OMPI SVN configuration change<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 11:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9006.php">Barrett, Brian W: "[OMPI devel] trunk hwloc &amp; static builds"</a>
<li><strong>Previous message:</strong> <a href="9004.php">Ken Lloyd: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>In reply to:</strong> <a href="9003.php">Barrett, Brian W: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2011, at 10:49 AM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Why did &quot;we&quot; make this change?  It was originally this way, and we changed it to the no-auth way for a reason.
</span><br>
<p>Are you obliquely saying that there's a reason to have no-auth https access?
<br>
<p>DongInn and I changed it because we're still having a problem with svnsync on the OMPI repo:
<br>
<p>-----
<br>
% svnsync init --username jsquyres file://`pwd`/foomirror <a href="https://svn.open-mpi.org/svn/ompi">https://svn.open-mpi.org/svn/ompi</a>
<br>
% svnsync sync file://`pwd`/foomirror
<br>
[...MUCH output and about 12 hours...]
<br>
Transmitting file data ............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................svnsync: REPORT of '<a href="https://svn.open-mpi.org/svn/ompi">https://svn.open-mpi.org/svn/ompi</a>': Could not read chunk size: Secure co<br>
nnection truncated (<a href="https://svn.open-mpi.org">https://svn.open-mpi.org</a>)
<br>
%
<br>
-----
<br>
<p>I did some googling and (re)discovered a bug report that DongInn and I submitted long ago about svnsync:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://subversion.tigris.org/issues/show_bug.cgi?id=3080">http://subversion.tigris.org/issues/show_bug.cgi?id=3080</a>
<br>
<p>The guidance from the SVN developers was to have one method for open+closed (i.e., anon RO access, except for the closed trees) and have a 2nd method for auth-only.  I checked with DongInn and we had never followed up on their guidance.  I figured we might as well do that as a first step and see if that solved the svnsync problem.
<br>
<p>Unfortunately, it didn't.  DongInn is still investigating.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9006.php">Barrett, Brian W: "[OMPI devel] trunk hwloc &amp; static builds"</a>
<li><strong>Previous message:</strong> <a href="9004.php">Ken Lloyd: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>In reply to:</strong> <a href="9003.php">Barrett, Brian W: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
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
