<?
$subject_val = "[OMPI users] mpifort wrapper.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 27 15:39:43 2014" -->
<!-- isoreceived="20140727193943" -->
<!-- sent="Sun, 27 Jul 2014 15:39:43 -0400" -->
<!-- isosent="20140727193943" -->
<!-- name="Dan Shell" -->
<!-- email="dshellwireless_at_[hidden]" -->
<!-- subject="[OMPI users] mpifort wrapper.txt" -->
<!-- id="CAHhAqLHGvCMO6PjZoV8Vh4Z=51ERwkyZ_eBiiDAu1TdR4+3ntg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] mpifort wrapper.txt<br>
<strong>From:</strong> Dan Shell (<em>dshellwireless_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-27 15:39:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24885.php">Andy Riebs: "[OMPI users] Using PLFS with Open MPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24883.php">Siegmar Gross: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpifort wrapper.txt"</a>
<li><strong>Reply:</strong> <a href="24887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpifort wrapper.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI
<br>
<p>See below
<br>
I have been looking at the openmpi doc page and would like some pointers on
<br>
how to implement the wrapper.txt file with  mpifort.
<br>
I have the wrapper .txt file how does mpifort use the wrapper.txt file.
<br>
Do I create a script copy the fortran wrapper.txt commands in the file to a
<br>
mkmf?  Not reall sure on how to proceed.  Any help would be appreciated.
<br>
See info below
<br>
Dan Shell
<br>
<p>&nbsp;make -f Make_lib_FMS
<br>
mpifort -Duse_netCDF -Duse_netCDF3 -Duse_libMPI -DUSE_OCEAN_BGC
<br>
-DENABLE_ODA -DSPMD -DLAND_BND_TRACERS -I/usr/include
<br>
-I/root/Desktop/NEW_MOM/openmpi/include
<br>
-I/root/Desktop/NEW_MOM/newmom/netcdf
<br>
-I/root/Desktop/NEW_MOM/newmom/netcdf/include   -fcray-pointer  -g
<br>
-fdefault-real-8 -O2 -Waliasing -ffree-line-length-none -fno-range-check
<br>
-c -I/root/Desktop/NEW_MOM/newmom/src/shared/include
<br>
-I/root/Desktop/NEW_MOM/newmom/src/shared/mpp/include
<br>
/root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90
<br>
--------------------------------------------------------------------------
<br>
No underlying compiler was specified in the wrapper compiler data file
<br>
(e.g., mpicc-wrapper-data.txt)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24885.php">Andy Riebs: "[OMPI users] Using PLFS with Open MPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24883.php">Siegmar Gross: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpifort wrapper.txt"</a>
<li><strong>Reply:</strong> <a href="24887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpifort wrapper.txt"</a>
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
