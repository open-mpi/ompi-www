<?
$subject_val = "[OMPI devel] v2.0.0rc issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 30 19:06:47 2016" -->
<!-- isoreceived="20160430230647" -->
<!-- sent="Sat, 30 Apr 2016 16:06:44 -0700" -->
<!-- isosent="20160430230644" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] v2.0.0rc issues" -->
<!-- id="DAB24F8C-7293-4417-B5FD-EDFC6B0A5890_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] v2.0.0rc issues<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-30 19:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18865.php">George Bosilca: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>Previous message:</strong> <a href="18863.php">Howard Pritchard: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With external libevent, hwloc, and pmix 1.1.4:
<br>
<p>+-------------+-----------------+-------------+----------+------+------+----------+------+---------------------------------------------------------------------------+
<br>
| Phase       | Section        | Pass   | Fail   |   Time out 
<br>
+-------------+-----------------+-------------+----------+------+------+----------+------+---------------------------------------------------------------------------+
<br>
| Test Run    | ibm             |   375  |     0     |         1      
<br>
| Test Run    | intel            |   466  |      0    |          8 
<br>
| Test Run    | intel_skip    |   422  |      1    |         8 
<br>
| Test Run    | orte             |     15  |      0    |         4  
<br>
+-------------+-----------------+-------------+----------+------+------+----------+------+&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;+
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Total Tests:    1354
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Failures: 22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Passed:   1332
<br>
<p><p>With all internal:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Total Tests:    1354
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Failures: 1       &lt;= ibm test suite
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Passed:   1353
<br>
<p><p>I&#226;&#128;&#153;m going to investigate the difference, but given that the packagers will only supply the external variant, we need to fix these problems.
<br>
<p>Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18865.php">George Bosilca: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>Previous message:</strong> <a href="18863.php">Howard Pritchard: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
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
