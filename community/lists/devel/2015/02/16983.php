<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 02:49:22 2015" -->
<!-- isoreceived="20150213074922" -->
<!-- sent="Fri, 13 Feb 2015 08:49:21 +0100" -->
<!-- isosent="20150213074921" -->
<!-- name="Philipp Thomas" -->
<!-- email="pth_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="20150213074921.GA11899_at_paradies.suse.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Philipp Thomas (<em>pth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-13 02:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16984.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16982.php">George Bosilca: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16984.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16984.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
sorry for chiming in so late, but this list is on low priority for me at the
<br>
moment.
<br>
<p>* Paul Hargrove (phhargrove_at_[hidden]) [20150202 22:58]:
<br>
<p><span class="quotelev1">&gt; is erroneous is that /usr/lib contains 32-bit libs (and target is 64-bit).
</span><br>
<span class="quotelev1">&gt; Therefore libtool should have replaced -lltdl with /usr/lib64/libltdl.so
</span><br>
<p>It doesn't need to do so. If only -lltdl is passed, the linker will by
<br>
default search /usr/lib64. As I'm SUSE's maintainer of libtool (and openMPI
<br>
:) maintainer, I'll gladly try to help with any issue.
<br>
<p>Philipp
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16984.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16982.php">George Bosilca: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16984.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16984.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
