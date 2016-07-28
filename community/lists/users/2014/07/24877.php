<?
$subject_val = "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 13:14:04 2014" -->
<!-- isoreceived="20140725171404" -->
<!-- sent="Fri, 25 Jul 2014 13:14:38 -0400" -->
<!-- isosent="20140725171438" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trying to use openmpi with MOM getting a compile error" -->
<!-- id="53D2907E.2010404_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHhAqLHUf6dO5yXTEH924A=H_zqrmPvNt2BM2DhoQRdt7Sp3ug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trying to use openmpi with MOM getting a compile error<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 13:14:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24878.php">Dan Shell: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Previous message:</strong> <a href="24876.php">Dan Shell: "[OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>In reply to:</strong> <a href="24876.php">Dan Shell: "[OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24878.php">Dan Shell: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Reply:</strong> <a href="24878.php">Dan Shell: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Reply:</strong> <a href="24880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dan
<br>
<p>This is not an Open MPI problem.
<br>
This is most likely a problem with the MOM Makefile,
<br>
which seems to be missing your Open MPI include directory.
<br>
<p>Change the mkmf.template file and replace the Fortran
<br>
compiler name (gfortran) by the Open MPI (OMPI) Fortran compiler 
<br>
wrapper: mpifortran (or mpif90 if it still exists
<br>
in OMPI 1.8.1), perhaps using the full path to it.
<br>
The mpifortran/mpif90 compiler wrapper knows exactly where to find
<br>
the Open MPI include files, the libraries, etc.
<br>
You may need to comment out or remove spurious entries
<br>
mkmf.template pointing to other MPI implementations (e.g.
<br>
to MPICH libraries and include files).
<br>
<p>Then rebuild the Makefile and compile MOM again.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
<p><p>On 07/25/2014 12:37 PM, Dan Shell wrote:
<br>
<span class="quotelev1">&gt; OpenMOM-mpi
</span><br>
<span class="quotelev1">&gt; I am trying to compile MOM and have installed openmpi 1.8.1 getting an
</span><br>
<span class="quotelev1">&gt; installation error below
</span><br>
<span class="quotelev1">&gt; Looking for some help in openmpi to make sure the mpif.h is loaded correctly
</span><br>
<span class="quotelev1">&gt; Should I use an older version of openmpi?
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; Dan Shell
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gfortran  -Duse_netCDF -Duse_netCDF3 -Duse_libMPI -DUSE_OCEAN_BGC
</span><br>
<span class="quotelev1">&gt; -DENABLE_ODA -DSPMD -DLAND_BND_TRACERS     -c
</span><br>
<span class="quotelev1">&gt; -I/root/Desktop/NEW_MOM/newmom/src/shared/include
</span><br>
<span class="quotelev1">&gt; -I/root/Desktop/NEW_MOM/newmom/src/shared/mpp/include
</span><br>
<span class="quotelev1">&gt; /root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90
</span><br>
<span class="quotelev1">&gt; /root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90:23:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; include &lt;mpif.h&gt;
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt; /root/Desktop/NEW_MOM/newmom/src/shared/mpp/include/mpp_data_mpi.inc:8.31:
</span><br>
<span class="quotelev1">&gt;      Included at
</span><br>
<span class="quotelev1">&gt; /root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90:45:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; integer :: stat(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;                                 1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'mpi_status_size' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt; /root/Desktop/NEW_MOM/newmom/src/shared/mpp/mpp_data.F90:28.16:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    public :: stat, mpp_stack, ptr_stack, status, ptr_status, sync, ptr_sync
</span><br>
<span class="quotelev1">&gt;                  1
</span><br>
<span class="quotelev1">&gt; Error: The module or main program array 'stat' at (1) must have constant
</span><br>
<span class="quotelev1">&gt; shape
</span><br>
<span class="quotelev1">&gt; make: *** [mpp_data.o] Error 1
</span><br>
<span class="quotelev1">&gt; if ( 2 ) then
</span><br>
<span class="quotelev1">&gt; echo Make failed to create  lib_FMS.a
</span><br>
<span class="quotelev1">&gt; Make failed to create  lib_FMS.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24876.php">http://www.open-mpi.org/community/lists/users/2014/07/24876.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24878.php">Dan Shell: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Previous message:</strong> <a href="24876.php">Dan Shell: "[OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>In reply to:</strong> <a href="24876.php">Dan Shell: "[OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24878.php">Dan Shell: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Reply:</strong> <a href="24878.php">Dan Shell: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Reply:</strong> <a href="24880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
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
