<?
$subject_val = "[OMPI devel] OpenMPI 1.8 Bug Report";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 05:30:14 2015" -->
<!-- isoreceived="20150827093014" -->
<!-- sent="Thu, 27 Aug 2015 11:29:47 +0200" -->
<!-- isosent="20150827092947" -->
<!-- name="Michael Knobloch" -->
<!-- email="m.knobloch_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI 1.8 Bug Report" -->
<!-- id="55DED88B.4030108_at_fz-juelich.de" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI 1.8 Bug Report<br>
<strong>From:</strong> Michael Knobloch (<em>m.knobloch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 05:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17893.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
<p>I noticed a bug in the definition of the 3 MPI-3 RMA functions
<br>
MPI_Compare_and_swap, MPI_Fetch_and_op and MPI_Raccumulate.
<br>
<p>According to the MPI standard, the origin_addr and compare_addr
<br>
parameters of these functions have a const attribute, which is missing
<br>
in OpenMPI's mpi.h (OpenMPI 1.8.x and 1.10.0).
<br>
<p>Regards,
<br>
<p>Michael
<br>
<pre>
--
Michael Knobloch
Institute for Advanced Simulation (IAS)
J&#195;&#188;lich Supercomputing Centre (JSC)
Telefon: +49 2461 61-3546
Telefax: +49 2461 61-6656
E-Mail: m.knobloch_at_[hidden]
Internet: <a href="http://www.fz-juelich.de/jsc">http://www.fz-juelich.de/jsc</a>
------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------
Forschungszentrum Juelich GmbH
52425 Juelich
Sitz der Gesellschaft: Juelich
Eingetragen im Handelsregister des Amtsgerichts Dueren Nr. HR B 3498
Vorsitzender des Aufsichtsrats: MinDir Dr. Karl Eugen Huthmacher
Geschaeftsfuehrung: Prof. Dr.-Ing. Wolfgang Marquardt (Vorsitzender),
Karsten Beneke (stellv. Vorsitzender), Prof. Dr.-Ing. Harald Bolt,
Prof. Dr. Sebastian M. Schmidt
------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17893.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
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
