<?
$subject_val = "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 10:06:48 2009" -->
<!-- isoreceived="20090204150648" -->
<!-- sent="Wed, 4 Feb 2009 10:06:42 -0500" -->
<!-- isosent="20090204150642" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c" -->
<!-- id="1FFED86F-145A-4E67-92FD-B693ED5EED39_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="68C50629-4247-40DE-B5B4-A6DE3AFFC852_at_Chemie.Uni-KL.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 10:06:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5369.php">Christoph van Wüllen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5367.php">Christoph van W&#252;llen: "[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>In reply to:</strong> <a href="5367.php">Christoph van W&#252;llen: "[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5369.php">Christoph van Wüllen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Reply:</strong> <a href="5369.php">Christoph van Wüllen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christoph,
<br>
<p>You're absolutely right. In addition to your comment about the  
<br>
syntactically wrong line of code, even in the case when the fortran  
<br>
and C integers have the same length, we modify the value pointer by  
<br>
the fortran IN only argument.
<br>
A patch is on the way.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 4, 2009, at 09:21 , Christoph van W&#252;llen wrote:
<br>
<p><span class="quotelev1">&gt; dear developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there is an error in the above mentioned file, in line 74:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr)) {
</span><br>
<span class="quotelev1">&gt;        OMPI_ARRAY_INT_2_FINT(coords, OMPI_FINT_2_INT(*maxdims));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the OMPI_ARRAY_INT_2_FINT macro uses the second argument with
</span><br>
<span class="quotelev1">&gt; pre-decrement, such that it must be an lvalue and should not
</span><br>
<span class="quotelev1">&gt; contain a type-cast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the built at hand this code expands to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (0 == (int) (*ierr)) {
</span><br>
<span class="quotelev1">&gt;        while((int) (*maxdims) &gt; 0) { coords[(int) (*maxdims) - 1] =  
</span><br>
<span class="quotelev1">&gt; c_coords[(int) (*maxdims) - 1]; --(int) (*maxdims); } free(c_coords);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if MPI_FINT is, e.g. &quot;long long&quot; (that is, if FORTRAN integers are
</span><br>
<span class="quotelev1">&gt; 64 bit, but C int/long is 32 bit), and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --(int) (*maxdims)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is not correct syntactically. I guess one could omit the
</span><br>
<span class="quotelev1">&gt; OMPI_FINT_2_INT in the second line, but you should check this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, bad testing. The code has probably never been build for
</span><br>
<span class="quotelev1">&gt; FORTRAN with 64-bit integers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Never mind,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +---------------------------------+----------------------------------+
</span><br>
<span class="quotelev1">&gt; | Prof. Christoph van W&#252;llen      | Tele-Phone (+49) (0)631 205 2749 |
</span><br>
<span class="quotelev1">&gt; | TU Kaiserslautern, FB Chemie    | Tele-Fax   (+49) (0)631 205 2750 |
</span><br>
<span class="quotelev1">&gt; | Erwin-Schr&#246;dinger-Str.          |                                  |
</span><br>
<span class="quotelev1">&gt; | D-67663 Kaiserslautern, Germany | vanWullen_at_[hidden]       |
</span><br>
<span class="quotelev1">&gt; |                                                                    |
</span><br>
<span class="quotelev1">&gt; | HomePage:  <a href="http://www.chemie.uni-kl.de/wcms/ag-vanwullen.html">http://www.chemie.uni-kl.de/wcms/ag-vanwullen.html</a>      |
</span><br>
<span class="quotelev1">&gt; +---------------------------------+----------------------------------+
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5369.php">Christoph van Wüllen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5367.php">Christoph van W&#252;llen: "[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>In reply to:</strong> <a href="5367.php">Christoph van W&#252;llen: "[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5369.php">Christoph van Wüllen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Reply:</strong> <a href="5369.php">Christoph van Wüllen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
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
