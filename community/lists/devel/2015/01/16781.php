<?
$subject_val = "[OMPI devel] mpi_sizeof in openmpi 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 03:50:24 2015" -->
<!-- isoreceived="20150113085024" -->
<!-- sent="Tue, 13 Jan 2015 09:50:23 +0100" -->
<!-- isosent="20150113085023" -->
<!-- name="Valery" -->
<!-- email="valeryweber_at_[hidden]" -->
<!-- subject="[OMPI devel] mpi_sizeof in openmpi 1.8.4" -->
<!-- id="DUB110-W11062EC749D7B3541DFBF5ABD400_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB110-W9013E30D5C6A3D15A11F20BD590_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI devel] mpi_sizeof in openmpi 1.8.4<br>
<strong>From:</strong> Valery (<em>valeryweber_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-13 03:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="16780.php">Ralph Castain: "Re: [OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<li><strong>Reply:</strong> <a href="16782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following code doesnt compile anymore with 1.8.4 (was working with older version eg 1.7.4)
<br>
<p>openmpi was compiled as
<br>
<p>../openmpi-1.8.4/configure --prefix=1.8.4-gcc-4.9.2 --enable-static --disable-shared --enable-mpi-fortran=all CC=gcc-4.9.2 FC=gfortran-4.9.2 CXX=g++-4.9.2
<br>
<p>Many thanks
<br>
<p>Valery
<br>
<p><p>cat tmp.f90
<br>
module mod
<br>
&nbsp;&nbsp;USE MPI
<br>
contains
<br>
&nbsp;&nbsp;FUNCTION c_get_size_of ( this ) RESULT( reslt )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CHARACTER(*), INTENT( IN ) :: this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: reslt, ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_sizeof ( this, reslt, ierr )
<br>
&nbsp;&nbsp;END FUNCTION c_get_size_of
<br>
&nbsp;&nbsp;FUNCTION l_get_size_of ( this ) RESULT( reslt )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL, INTENT( IN ) :: this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: reslt, ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_sizeof ( this, reslt, ierr )
<br>
&nbsp;&nbsp;END FUNCTION l_get_size_of
<br>
end module mod
<br>
<p>mpifort tmp.f90 -c
<br>
tmp.f90:16.41:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_sizeof ( this, reslt, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: There is no specific subroutine for the generic 'mpi_sizeof' at (1)
<br>
tmp.f90:10.41:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_sizeof ( this, reslt, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: There is no specific subroutine for the generic 'mpi_sizeof' at (1)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="16780.php">Ralph Castain: "Re: [OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<li><strong>Reply:</strong> <a href="16782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
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
