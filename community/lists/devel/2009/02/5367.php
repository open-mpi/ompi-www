<?
$subject_val = "[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 09:21:44 2009" -->
<!-- isoreceived="20090204142144" -->
<!-- sent="Wed, 4 Feb 2009 15:21:38 +0100" -->
<!-- isosent="20090204142138" -->
<!-- name="Christoph van W&#252;llen" -->
<!-- email="vanWullen_at_[hidden]" -->
<!-- subject="[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c" -->
<!-- id="68C50629-4247-40DE-B5B4-A6DE3AFFC852_at_Chemie.Uni-KL.de" -->
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
<strong>Subject:</strong> [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c<br>
<strong>From:</strong> Christoph van W&#252;llen (<em>vanWullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 09:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Reply:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Reply:</strong> <a href="5370.php">Rainer Keller: "Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear developers,
<br>
<p>there is an error in the above mentioned file, in line 74:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ARRAY_INT_2_FINT(coords, OMPI_FINT_2_INT(*maxdims));
<br>
<p>the OMPI_ARRAY_INT_2_FINT macro uses the second argument with
<br>
pre-decrement, such that it must be an lvalue and should not
<br>
contain a type-cast.
<br>
<p>In the built at hand this code expands to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (0 == (int) (*ierr)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while((int) (*maxdims) &gt; 0) { coords[(int) (*maxdims) - 1] =  
<br>
c_coords[(int) (*maxdims) - 1]; --(int) (*maxdims); } free(c_coords);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>if MPI_FINT is, e.g. &quot;long long&quot; (that is, if FORTRAN integers are
<br>
64 bit, but C int/long is 32 bit), and
<br>
<p>--(int) (*maxdims)
<br>
<p>is not correct syntactically. I guess one could omit the
<br>
OMPI_FINT_2_INT in the second line, but you should check this.
<br>
<p>Anyway, bad testing. The code has probably never been build for
<br>
FORTRAN with 64-bit integers.
<br>
<p>Never mind,
<br>
+---------------------------------+----------------------------------+
<br>
| Prof. Christoph van W&#252;llen      | Tele-Phone (+49) (0)631 205 2749 |
<br>
| TU Kaiserslautern, FB Chemie    | Tele-Fax   (+49) (0)631 205 2750 |
<br>
| Erwin-Schr&#246;dinger-Str.          |                                  |
<br>
| D-67663 Kaiserslautern, Germany | vanWullen_at_[hidden]       |
<br>
|                                                                    |
<br>
| HomePage:  <a href="http://www.chemie.uni-kl.de/wcms/ag-vanwullen.html">http://www.chemie.uni-kl.de/wcms/ag-vanwullen.html</a>      |
<br>
+---------------------------------+----------------------------------+
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5367/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Reply:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Reply:</strong> <a href="5370.php">Rainer Keller: "Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
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
