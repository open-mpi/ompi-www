<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 26 10:52:00 2006" -->
<!-- isoreceived="20060726145200" -->
<!-- sent="Wed, 26 Jul 2006 07:51:08 -0700" -->
<!-- isosent="20060726145108" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[OMPI users] minor program build problem" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F202C928FC_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-26 10:51:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1681.php">Mauricio Felga Gobbi: "[OMPI users] Open-MPI running os SMP cluster"</a>
<li><strong>Previous message:</strong> <a href="1679.php">Michael Kluskens: "Re: [OMPI users] Runtime Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1698.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<li><strong>Reply:</strong> <a href="1698.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When building the nasa overflow 2.0aa code with openmpi 1.1.1b3 using
<br>
the intel compilers on a Opteron cluster running
<br>
SLES 9 with the intel 9 compilers, I get the following warnings when
<br>
linking :
<br>
<p>/acct/bsb3227/openmpi_1.1.1b3/bin/mpif90 -xW -O2 -convert big_endian
<br>
-align all
<br>
-o overmpi_intel90_64_2.0aa_openmpi111b3 modules/*.o chimera/*.o
<br>
grid/*.o linear
<br>
/*.o unix/*.o utilities/*.o omisoft/adaptq/*.o omisoft/brick/*.o
<br>
omisoft/collisi
<br>
on/*.o omisoft/dcfcrt/*.o omisoft/errest/*.o omisoft/global/*.o
<br>
omisoft/gmp/*.o
<br>
omisoft/groupr/*.o omisoft/invmap/*.o omisoft/sixdof/*.o ns/bc/*.o
<br>
ns/control/*.
<br>
o ns/euler/*.o ns/fomo/*.o ns/mg/*.o ns/smoothing/*.o ns/source/*.o
<br>
ns/step/*.o
<br>
ns/turbulence/*.o ns/utilities/*.o ns/viscous/*.o ke/bc/*.o
<br>
ke/convection/*.o ke
<br>
/diffusion/*.o ke/source/*.o ke/step/*.o ke/turbulence/*.o
<br>
ke/utilities/*.o ret/
<br>
bc/*.o ret/convection/*.o ret/diffusion/*.o ret/source/*.o ret/step/*.o
<br>
ret/turb
<br>
ulence/*.o ret/utilities/*.o sce/bc/*.o sce/convection/*.o
<br>
sce/smoothing/*.o sce
<br>
/step/*.o sce/utilities/*.o -i-static
<br>
<p>ld: Warning: size of symbol `mpi_fortran_argv_null_' changed from 1 in
<br>
chimera/d
<br>
iscmo.o to 16 in
<br>
/home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
<br>
ld: Warning: size of symbol `mpi_fortran_argvs_null_' changed from 4 in
<br>
chimera/
<br>
discmo.o to 16 in
<br>
/home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
<br>
ld: Warning: size of symbol `mpi_fortran_status_ignore_' changed from 20
<br>
in chim
<br>
era/discmo.o to 16 in
<br>
/home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_
<br>
f.o)
<br>
ld: Warning: size of symbol `mpi_fortran_errcodes_ignore_' changed from
<br>
4 in chi
<br>
mera/discmo.o to 16 in
<br>
/home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants
<br>
_f.o)
<br>
<p>in mpif-common.h there are some common block definitions :
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common/mpi_fortran_bottom/MPI_BOTTOM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common/mpi_fortran_in_place/MPI_IN_PLACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common/mpi_fortran_argv_null/MPI_ARGV_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common/mpi_fortran_argvs_null/MPI_ARGVS_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common/mpi_fortran_errcodes_ignore/MPI_ERRCODES_IGNORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common/mpi_fortran_status_ignore/MPI_STATUS_IGNORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common/mpi_fortran_statuses_ignore/MPI_STATUSES_IGNORE
<br>
<p>These names are apparently conflicting with the names in the static
<br>
library.
<br>
<p>Hope this gives you enough to go on.  
<br>
<p>Thanx to the open-mpi team for the improvements that keep coming with
<br>
newer releases of the product.
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1681.php">Mauricio Felga Gobbi: "[OMPI users] Open-MPI running os SMP cluster"</a>
<li><strong>Previous message:</strong> <a href="1679.php">Michael Kluskens: "Re: [OMPI users] Runtime Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1698.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<li><strong>Reply:</strong> <a href="1698.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
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
