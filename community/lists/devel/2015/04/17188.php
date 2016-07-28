<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 20:29:58 2015" -->
<!-- isoreceived="20150407002958" -->
<!-- sent="Mon, 6 Apr 2015 17:29:55 -0700" -->
<!-- isosent="20150407002955" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)" -->
<!-- id="CAAvDA14OeiHyunmX3xQkXsJXj6t8rmcXXE+nWPushgN-dro+jg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3B4BDD39-10D1-40FE-8A64-FCAF0C137D60_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 20:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>In reply to:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 6, 2015 at 5:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
[...]
<br>
<p><span class="quotelev1">&gt; I believe we have seen this before, and it was an issue caused by a change
</span><br>
<span class="quotelev1">&gt; in libtool itself. The Mac automatically updated to the new version, which
</span><br>
<span class="quotelev1">&gt; triggers the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is why we embedded ltdl directly into the OMPI master, and is why the
</span><br>
<span class="quotelev1">&gt; master is building while the 1.8 branch is not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have a ready fix at hand - might have to wait for Jeff to return
</span><br>
<span class="quotelev1">&gt; next week to advise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>FYI:
<br>
<p>I retested on MacOS X 10.8 w/ CC=gcc and CXX=g++ and see the same results
<br>
(failure with LP64 and success with ILP32).
<br>
However, keep in mind gcc on this system is llvm-gcc, not fsf's gcc, and
<br>
therefore not much different from clang in many ways.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17188/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>In reply to:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
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
