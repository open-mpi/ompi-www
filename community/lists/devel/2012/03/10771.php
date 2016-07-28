<?
$subject_val = "[OMPI devel] Debugger question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 13:18:50 2012" -->
<!-- isoreceived="20120326171850" -->
<!-- sent="Mon, 26 Mar 2012 17:17:17 +0000" -->
<!-- isosent="20120326171717" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] Debugger question" -->
<!-- id="CB9600BA.D098%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Debugger question<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 13:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
<li><strong>Previous message:</strong> <a href="10770.php">Shamis, Pavel: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
<li><strong>Reply:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>In ompi/debuggers/predefined_gap_test.c, there's set of tests looking at
<br>
all the fields in a window structure.  The other source files in
<br>
ompi/debuggers/ don't seem to use most of those fields (since they really
<br>
shouldn't be useful to a debugger anyway).  I removed some of the fields
<br>
as part of my MPI-3 RMA changes; is there anything I need to do other than
<br>
remove those GAP_CHECK() calls in the test code?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
<li><strong>Previous message:</strong> <a href="10770.php">Shamis, Pavel: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
<li><strong>Reply:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
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
