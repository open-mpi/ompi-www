<?
$subject_val = "[OMPI devel] Matched probe support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 16:13:28 2012" -->
<!-- isoreceived="20120208211328" -->
<!-- sent="Wed, 8 Feb 2012 21:12:57 +0000" -->
<!-- isosent="20120208211257" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] Matched probe support" -->
<!-- id="CB58336D.A5E3%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Matched probe support<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 16:12:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10345.php">Christopher Yeoh: "[OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10343.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>With r25865, the trunk now has support for the MPI-3 matched probe
<br>
functionality.  Currently, all PMLs other than OB1 will throw a not
<br>
implemented error when mprobe, improbe, mrecv, or imrecv are called.  I
<br>
will adding support to CM for matched probe (which will likely require
<br>
changes to the MTL interface) in the near future.  The owners of the
<br>
following PMLs will need to update their PMLs to support matched probe.
<br>
For most of them, I believe that copying the changes to the OB1 PML should
<br>
be sufficient.
<br>
<p>&nbsp;&nbsp;bfo
<br>
&nbsp;&nbsp;crcpw  csum
<br>
&nbsp;&nbsp;dr
<br>
&nbsp;&nbsp;v
<br>
<p>If you have any questions, feel free to bug me.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10345.php">Christopher Yeoh: "[OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10343.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
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
