<?
$subject_val = "[OMPI devel] SLES 9 compilation error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 08:06:35 2008" -->
<!-- isoreceived="20080616120635" -->
<!-- sent="Mon, 16 Jun 2008 08:06:26 -0400" -->
<!-- isosent="20080616120626" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] SLES 9 compilation error" -->
<!-- id="48565742.2090502_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] SLES 9 compilation error<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 08:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4131.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Previous message:</strong> <a href="4129.php">Brian Barrett: "[OMPI devel] Two large patches in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4131.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Reply:</strong> <a href="4131.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When compiling the latest trunk under SLES 9 I am seeing the following 
<br>
error:
<br>
<p>../../../../../opal/mca/maffinity/libnuma/maffinity_libnuma_module.c:118: 
<br>
error: `MPOL_MF_MOVE' undeclared (first use in this function)
<br>
<p>Looks like SLES 9 numaif.h does not support MPOL_MF_MOVE.  Can we 
<br>
somehow make the use of MPOL_MF_MOVE configurable?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4131.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Previous message:</strong> <a href="4129.php">Brian Barrett: "[OMPI devel] Two large patches in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4131.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Reply:</strong> <a href="4131.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
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
