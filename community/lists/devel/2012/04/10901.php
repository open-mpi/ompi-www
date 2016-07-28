<?
$subject_val = "[OMPI devel] Fortran linking problem: libraries have changed";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 22 11:57:54 2012" -->
<!-- isoreceived="20120422155754" -->
<!-- sent="Sun, 22 Apr 2012 11:57:46 -0400" -->
<!-- isosent="20120422155746" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] Fortran linking problem: libraries have changed" -->
<!-- id="4F942A7A.5070307_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fortran linking problem: libraries have changed<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-22 11:57:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10900.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Reply:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Next Fortran problem.
<br>
<p>Oracle MTT managed to build the trunk (r26307) in some cases.  No 
<br>
test-run failures in these cases, but the pass counts are way low.  
<br>
Turns out, the Fortran tests aren't being built (or run).  I try 
<br>
compiling a Fortran code:
<br>
<p>ld: fatal: library -lmpi_f77: not found
<br>
ld: fatal: library -lmpi_f90: not found
<br>
ld: fatal: File processing errors. No output written to a.out
<br>
<p>I try &quot;mpifort --showme&quot; and see that it's trying to link in &quot;-lmpi_f77 
<br>
-lmpi_f90&quot;, but those libraries no longer exist.  They have been replaced by
<br>
-lmpi_mpifh
<br>
-lmpi_usempi_ignore_tkr
<br>
-lmpi_usempif08
<br>
<p>So, the Fortran wrapper needs to be updated.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10900.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Reply:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
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
