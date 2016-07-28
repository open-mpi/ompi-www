<?
$subject_val = "[OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 13:18:36 2011" -->
<!-- isoreceived="20110215181836" -->
<!-- sent="Tue, 15 Feb 2011 13:18:08 -0500" -->
<!-- isosent="20110215181808" -->
<!-- name="Petit, George (Cont, ARL/CISD)" -->
<!-- email="george.petit_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library" -->
<!-- id="B7C522117AA39D42B2EBD869F5AF622E01750E8B_at_ARLABML02.DS.ARL.ARMY.MIL" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library<br>
<strong>From:</strong> Petit, George (Cont, ARL/CISD) (<em>george.petit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 13:18:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15619.php">Barnet Wagman: "[OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15617.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Reply:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A user posted the following ticket to our site.  Should the referenced MPI routine be included in the mpif90 library?  If not, why?  And is there a way to get it added.
<br>
&nbsp;
<br>
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
I receive the following error when I try to compile my code with ifort with the
<br>
openmpi library:
<br>
<p>grid.f(38): error #6285: There is no matching specific subroutine for this generic
<br>
subroutine call. [MPI_TYPE_CREATE_SUBARRAY]
<br>
call
<br>
mpi_type_create_subarray(3,isizes,isubs,istarts,MPI_ORDER_FORTRAN,MPI_REAL8,DTghost(1),ierr)
<br>
-------------^ 
<br>
<p>It looks like the 'mpi_type_create_subarray' routine is missing from the openmpi
<br>
library libmpi_f90.so. The routine is in libmpi_f77.so. Is it possible to add it
<br>
to the f90 library? The fortran 90 versions of mpi for sgi_mpt, xt-mpt, ibm-mpi and
<br>
intelmpi all include this routine. Thanks. -Rob
<br>
<p>George Petit
<br>
Lockheed Martin
<br>
ARL DSRC Customer Support Team Lead
<br>
george.petit_at_[hidden]
<br>
410-278-9283
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15619.php">Barnet Wagman: "[OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15617.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Reply:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
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
