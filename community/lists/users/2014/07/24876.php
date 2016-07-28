<?
$subject_val = "[OMPI users] Trying to use openmpi with MOM getting a compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 12:37:52 2014" -->
<!-- isoreceived="20140725163752" -->
<!-- sent="Fri, 25 Jul 2014 12:37:51 -0400" -->
<!-- isosent="20140725163751" -->
<!-- name="Dan Shell" -->
<!-- email="dshellwireless_at_[hidden]" -->
<!-- subject="[OMPI users] Trying to use openmpi with MOM getting a compile error" -->
<!-- id="CAHhAqLHUf6dO5yXTEH924A=H_zqrmPvNt2BM2DhoQRdt7Sp3ug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Trying to use openmpi with MOM getting a compile error<br>
<strong>From:</strong> Dan Shell (<em>dshellwireless_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 12:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24877.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Previous message:</strong> <a href="24875.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24877.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Reply:</strong> <a href="24877.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMOM-mpi
<br>
I am trying to compile MOM and have installed openmpi 1.8.1 getting an
<br>
installation error below
<br>
Looking for some help in openmpi to make sure the mpif.h is loaded correctly
<br>
Should I use an older version of openmpi?
<br>
Thank You
<br>
Dan Shell
<br>
<p>gfortran  -Duse_netCDF -Duse_netCDF3 -Duse_libMPI -DUSE_OCEAN_BGC
<br>
-DENABLE_ODA -DSPMD -DLAND_BND_TRACERS     -c
<br>
-I/root/Desktop/NEW_MOM/newmom/src/shared/include
<br>
-I/root/Desktop/NEW_MOM/newmom/src/shared/mpp/include
<br>
/root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90
<br>
/root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90:23:
<br>
<p>include &lt;mpif.h&gt;
<br>
1
<br>
Error: Unclassifiable statement at (1)
<br>
/root/Desktop/NEW_MOM/newmom/src/shared/mpp/include/mpp_data_mpi.inc:8.31:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Included at /root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90:45:
<br>
<p>integer :: stat(MPI_STATUS_SIZE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Symbol 'mpi_status_size' at (1) has no IMPLICIT type
<br>
/root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90:28.16:
<br>
<p>&nbsp;&nbsp;public :: stat, mpp_stack, ptr_stack, status, ptr_status, sync, ptr_sync
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: The module or main program array 'stat' at (1) must have constant
<br>
shape
<br>
make: *** [mpp_data.o] Error 1
<br>
if ( 2 ) then
<br>
echo Make failed to create  lib_FMS.a
<br>
Make failed to create  lib_FMS.a
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24877.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Previous message:</strong> <a href="24875.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24877.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Reply:</strong> <a href="24877.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
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
