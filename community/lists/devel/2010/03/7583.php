<?
$subject_val = "[OMPI devel] Build issue: mpi_portable_platform.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 16:17:47 2010" -->
<!-- isoreceived="20100312211747" -->
<!-- sent="Fri, 12 Mar 2010 16:17:41 -0500" -->
<!-- isosent="20100312211741" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] Build issue: mpi_portable_platform.h" -->
<!-- id="3AB28236-9AC5-41E0-A6E7-B7271BD87E90_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Build issue: mpi_portable_platform.h<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 16:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7584.php">Paul H. Hargrove: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7582.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (4)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7584.php">Paul H. Hargrove: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7584.php">Paul H. Hargrove: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7585.php">Rainer Keller: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed the following build error on the OMPI trunk (r22821) on IU's Odin machine:
<br>
&nbsp;&nbsp;make[3]: *** No rule to make target `mpi_portable_platform.h', needed by `all-am'.  Stop.
<br>
<p>I took a quick pass through the svn commit log and did not see anything that would have broken this. Any thoughts on what could be causing this?
<br>
<p>-- Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7584.php">Paul H. Hargrove: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7582.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (4)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7584.php">Paul H. Hargrove: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7584.php">Paul H. Hargrove: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7585.php">Rainer Keller: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
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
