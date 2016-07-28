<?
$subject_val = "[OMPI devel] 1.7.4rc2r30403 testing report";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 02:01:33 2014" -->
<!-- isoreceived="20140124070133" -->
<!-- sent="Thu, 23 Jan 2014 23:01:32 -0800" -->
<!-- isosent="20140124070132" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30403 testing report" -->
<!-- id="CAAvDA14=D-r4vjCFSBKzvYV=whB+jFQug5UtnaOmSTPFkKzm3Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30403 testing report<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 02:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13898.php">Paul Hargrove: "[OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<li><strong>Previous message:</strong> <a href="13896.php">Paul Hargrove: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13907.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30403 testing report"</a>
<li><strong>Reply:</strong> <a href="13907.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30403 testing report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've run tonight's v1.7 tarball through most of my test platforms.
<br>
At this point I am aware of only 2 significant issues which I can reproduce:
<br>
<p>1) At least open64 and pathscale &quot;regress&quot; with respect to mpif08 bindings
<br>
(were not built in 1.7.3, but 1.7.4 is trying and failing to build them).
<br>
&nbsp;One can manually disable f08 binding to avoid the issue.
<br>
<p>2) At least one ppc32 platform fails to link.  This is (blocker) ticket
<br>
#4143 and I've confirmed that the fix proposed there works for my test
<br>
platform.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13897/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13898.php">Paul Hargrove: "[OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<li><strong>Previous message:</strong> <a href="13896.php">Paul Hargrove: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13907.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30403 testing report"</a>
<li><strong>Reply:</strong> <a href="13907.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30403 testing report"</a>
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
