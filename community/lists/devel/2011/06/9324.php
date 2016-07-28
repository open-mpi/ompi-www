<?
$subject_val = "[OMPI devel] RFC: Fortran support in Open MPI Extensions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 10:11:28 2011" -->
<!-- isoreceived="20110608141128" -->
<!-- sent="Wed, 8 Jun 2011 10:11:24 -0400" -->
<!-- isosent="20110608141124" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Fortran support in Open MPI Extensions" -->
<!-- id="BANLkTikgbfGy9e=zxgJkcPE099OWt92jwA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Fortran support in Open MPI Extensions<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-08 10:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>Previous message:</strong> <a href="9323.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>Reply:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Fortran 77 and 90 support for the Open MPI Extensions
<br>
<p>WHY: Trunk only supports C.
<br>
<p>WHERE: build system updates, ompi/mpiext
<br>
<p>WHEN: Open MPI trunk
<br>
<p>TIMEOUT: Friday, June 10, 2011 COB
<br>
<p>Details:
<br>
-------------------------------------------
<br>
A bitbucket branch is available here (last sync to r24757 of trunk)
<br>
&nbsp;&nbsp;<a href="https://bitbucket.org/jjhursey/ompi-ext-fortran">https://bitbucket.org/jjhursey/ompi-ext-fortran</a>
<br>
<p>The current Open MPI trunk supports only C interfaces to Open MPI
<br>
interface extensions. This branch adds support for f77 and f90.
<br>
Supporting these three language interfaces enables Fortran
<br>
applications to take advantage of available interface extensions.
<br>
Configure detects if the extension supports C, f77, and/or f90 and
<br>
takes the appropriate action. The C interfaces are required, and the
<br>
f77/f90 interfaces are optional. This fix does not require changes to
<br>
any existing extensions.
<br>
<p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>Previous message:</strong> <a href="9323.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>Reply:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
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
