<?
$subject_val = "[OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 19:09:59 2015" -->
<!-- isoreceived="20150423230959" -->
<!-- sent="Thu, 23 Apr 2015 16:09:47 -0700" -->
<!-- isosent="20150423230947" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;maybe&amp;quot; issue in 1.8.5rc[23]" -->
<!-- id="CAAvDA14M=nZUPLM9Uqjw3EtN90Rg__gfHRJFo-b6RmtN6_QkVw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 19:09:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Previous message:</strong> <a href="17350.php">Paul Hargrove: "Re: [OMPI devel] Suggested README changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Reply:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a system w/ xlc-11.1.
<br>
It has essentially always failed &quot;make check&quot; in a LP64 build due to xlc
<br>
botching the atomics.
<br>
So, when it failed with 1.8.5.rc2 I didn't look closely.
<br>
<p>Today it has failed with rc3 and I *did* look closely and here is what I
<br>
see:
<br>
<p>PASS: predefined_gap_test
<br>
/bin/sh: line 5: 39766 Segmentation fault      ${dir}$tst
<br>
FAIL: dlopen_test
<br>
========================================================
<br>
1 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p>I also see the same in the rc2 results I hadn't examined closely before.
<br>
Meanwhile the rc1 failure was the known atomics-related one.
<br>
<p>So, UNLESS I find that the dlopen_test failure is related to the atomics or
<br>
some other problem specific to xlc, this may be a new issue related to the
<br>
elimination of the built-in libltdl.  Note that this system.
<br>
<p>Here's hoping this is a new symptom, and not a new problem.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17351/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Previous message:</strong> <a href="17350.php">Paul Hargrove: "Re: [OMPI devel] Suggested README changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Reply:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
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
