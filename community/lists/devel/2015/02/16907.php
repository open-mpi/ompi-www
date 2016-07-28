<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 00:26:20 2015" -->
<!-- isoreceived="20150203052620" -->
<!-- sent="Mon, 2 Feb 2015 21:26:18 -0800" -->
<!-- isosent="20150203052618" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="CAAvDA17fE3EzkqrOAYoiH1NOq_uEXsQUY=tX15kakfNk4Rw_xw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17T13u4zFtYfFKjAUynPnT8bya4t-0y=ZpN87o1_Pu5Uw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-03 00:26:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16908.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16906.php">Ralph Castain: "Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<li><strong>In reply to:</strong> <a href="16893.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16908.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16908.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Feb 2, 2015 at 5:47 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'll report my test results more completely later, but all 4 PGI-based
</span><br>
<span class="quotelev1">&gt; builds I have results for so far have failed with libtool replacing
</span><br>
<span class="quotelev1">&gt; &quot;-lltdl&quot; in  link command line with &quot;/usr/lib/libltdl.so&quot; rather than the
</span><br>
<span class="quotelev1">&gt; correct &quot;/usr/lib64/libltdl.so&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, this is a PGI compiler issue not a Cray one.
</span><br>
<span class="quotelev1">&gt; Will know later is &quot;PGI&quot; needs to be replaced with &quot;non-GNU&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>All non-PGI compilers tested out fine, including Open64, PathScale,
<br>
Oracle/Studio, IBM and Intel.  I found no other problems with Jeff's
<br>
tarball that aren't also present in master.
<br>
<p>My PGI testers (one each for v 9, 10, 11, 12, 13, and 14) are all on 2
<br>
systems at NERSC.
<br>
I am now going to see about a PGI compiler on a system at another center
<br>
(or two?) in order to see how universal the problem is.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16907/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16908.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16906.php">Ralph Castain: "Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<li><strong>In reply to:</strong> <a href="16893.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16908.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16908.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
