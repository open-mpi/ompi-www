<?
$subject_val = "[OMPI devel] MPI_Reduce_scatter_block";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 10:47:47 2012" -->
<!-- isoreceived="20120625144747" -->
<!-- sent="Mon, 25 Jun 2012 10:47:38 -0400" -->
<!-- isosent="20120625144738" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Reduce_scatter_block" -->
<!-- id="4FE87A0A.8070704_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Reduce_scatter_block<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 10:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11163.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11161.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11164.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>Reply:</strong> <a href="11164.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>Reply:</strong> <a href="11165.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In tarball 26642, Fortran compilation no longer succeeds.  I suspect the 
<br>
problem might be 26641.  E.g.,
<br>
<p>libmpi_usempif08.so:
<br>
undefined reference to `ompi_iscan_f'
<br>
libmpi_mpifh.so:
<br>
undefined reference to `MPI_Reduce_scatter_block'
<br>
libmpi_mpifh.so:
<br>
undefined reference to `MPI_Ireduce_scatter_block'
<br>
<p>If you need further characterization, let me know.  I can isolate further.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11163.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11161.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11164.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>Reply:</strong> <a href="11164.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>Reply:</strong> <a href="11165.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
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
