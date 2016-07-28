<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 19:13:17 2015" -->
<!-- isoreceived="20150203001317" -->
<!-- sent="Mon, 2 Feb 2015 16:13:14 -0800" -->
<!-- isosent="20150203001314" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="CAAvDA15zSBDzg+9Dqu0QcBcGSJHN3z7mHPtC=zoPvjHVo9Q3Pw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15nHKwa0PGExraWG20oVtq_aDO_-NKW+oXC1-rZH5wAcA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 19:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16889.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16887.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16893.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16893.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Feb 2, 2015 at 1:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 2b.  I am retrying now with all of Cray's environment modules unloaded
</span><br>
<span class="quotelev1">&gt; except the one for the PGI compiler.  Nathan had suggested something like
</span><br>
<span class="quotelev1">&gt; this to me in the past, but I've never had issues with the default
</span><br>
<span class="quotelev1">&gt; environment.  I will report the result when available.
</span><br>
<p><p><p>The result is unchanged after unloading all the Cray environment modules.
<br>
<p>However, I did notice that configure found (for instance) ALPS support
<br>
despite my unloading all the Cray environment modules and included a
<br>
message recognizing the system as CLE4.   So, it is possible that unloading
<br>
the modules was insufficient to avoid the Cray-specific aspects of the
<br>
system.
<br>
<p>HOWEVER - switching from PGI to GNU compilers made the problem go away.
<br>
So, I suspect it may be an issue with the installation/configuration of the
<br>
PGI compilers.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16888/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16889.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16887.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16893.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16893.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
