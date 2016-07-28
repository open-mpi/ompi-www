<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 10:09:20 2007" -->
<!-- isoreceived="20070619140920" -->
<!-- sent="Tue, 19 Jun 2007 16:09:10 +0200" -->
<!-- isosent="20070619140910" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_REAL2 support and Fortran ddt numbering" -->
<!-- id="200706191609.10660.keller_at_hlrs.de" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 10:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1728.php">Andrew Friedley: "Re: [OMPI devel] openib coord teleconf"</a>
<li><strong>Previous message:</strong> <a href="1726.php">Don Kerr: "[OMPI devel] udapl v1.2.4  merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1729.php">Terry D. Dontje: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>Maybe reply:</strong> <a href="1729.php">Terry D. Dontje: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello dear all,
<br>
with the current numbering in mpif-common.h, the optional ddt MPI_REAL2 will 
<br>
break the binary compatibility of the fortran interface from v1.2 to v1.3 
<br>
(see r15133).
<br>
<p>Now apart from MPI_REAL2 being of let's say rather minor importance, the group 
<br>
may feal that the numbering of datatypes is crucial to the end user and the 
<br>
(once agreed upon) allowed binary incompatibility for major version number 
<br>
changes is void.
<br>
<p>(The most important datatype that this change affects is MPI_DOUBLE_PRECISION: 
<br>
users will need to recompile their code with v1.3...)
<br>
<p>Please raise Your hand if anybody cares.
<br>
<p>Thanks,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1728.php">Andrew Friedley: "Re: [OMPI devel] openib coord teleconf"</a>
<li><strong>Previous message:</strong> <a href="1726.php">Don Kerr: "[OMPI devel] udapl v1.2.4  merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1729.php">Terry D. Dontje: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
<li><strong>Maybe reply:</strong> <a href="1729.php">Terry D. Dontje: "Re: [OMPI devel] MPI_REAL2 support and Fortran ddt numbering"</a>
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
