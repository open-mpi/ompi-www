<?
$subject_val = "[OMPI devel] MPI_Cart_coords_f segv with Intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 09:54:39 2012" -->
<!-- isoreceived="20120524135439" -->
<!-- sent="Thu, 24 May 2012 09:54:35 -0400" -->
<!-- isosent="20120524135435" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Cart_coords_f segv with Intel compiler" -->
<!-- id="4FBE3D9B.3090102_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Cart_coords_f segv with Intel compiler<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 09:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11029.php">Jeff Squyres: "[OMPI devel] SVN trunk PSM MTL is busted"</a>
<li><strong>Previous message:</strong> <a href="11027.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11032.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Reply:</strong> <a href="11032.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing several Cart Fortran tests (like MPI_Cart_coords_f) segv in 
<br>
opal_memory_ptmalloc2_int_free when OMPI trunk is compiled with icc 
<br>
12.1.0 for 64 bit on linux.   Just wondering if anyone has seen anything 
<br>
similar to this with a different version of icc.  Other non-Intel 
<br>
compilers seem to not exhibit this issue.
<br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11029.php">Jeff Squyres: "[OMPI devel] SVN trunk PSM MTL is busted"</a>
<li><strong>Previous message:</strong> <a href="11027.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11032.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Reply:</strong> <a href="11032.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
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
