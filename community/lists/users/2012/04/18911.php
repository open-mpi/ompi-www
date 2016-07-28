<?
$subject_val = "[OMPI users] openmpi 1.5.5. build issue with cuda 4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 13:26:37 2012" -->
<!-- isoreceived="20120402172637" -->
<!-- sent="Mon, 2 Apr 2012 11:26:12 -0600" -->
<!-- isosent="20120402172612" -->
<!-- name="Srinath Vadlamani" -->
<!-- email="srinath.vadlamani_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.5.5. build issue with cuda 4.1" -->
<!-- id="CAJ02NuH6E8T8fj4nrRk5OnQHKYUUFFsuSicBoi3ZLiMREMD0yQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.5.5. build issue with cuda 4.1<br>
<strong>From:</strong> Srinath Vadlamani (<em>srinath.vadlamani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 13:26:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18912.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18910.php">Reuti: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18913.php">Srinath Vadlamani: "Re: [OMPI users] openmpi 1.5.5. build issue with cuda 4.1"</a>
<li><strong>Reply:</strong> <a href="18913.php">Srinath Vadlamani: "Re: [OMPI users] openmpi 1.5.5. build issue with cuda 4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a build error with the newest release openmpi 1.5.5 building
<br>
against. cuda 4.1
<br>
<p>Making all in vtlib
<br>
make[5]: Entering directory
<br>
`/opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/build/ompi/contrib/vt/vt/vtlib'
<br>
&nbsp;&nbsp;CC     vt_libwrap.lo
<br>
&nbsp;&nbsp;CC     vt_gpu.lo
<br>
&nbsp;&nbsp;CC     vt_cudartwrap.lo
<br>
&nbsp;&nbsp;CC     vt_cudart.lo
<br>
/opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/openmpi-1.5.5/ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:1378:14:
<br>
error: conflicting types for 'cudaPointerGetAttributes'
<br>
cudaError_t  cudaPointerGetAttributes(struct cudaPointerAttributes
<br>
*attributes, void *ptr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/openmpi-1.5.5/ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:13:
<br>
In file included from
<br>
/opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/openmpi-1.5.5/ompi/contrib/vt/vt/vtlib/vt_cudartwrap.h:25:
<br>
In file included from
<br>
/opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/openmpi-1.5.5/ompi/contrib/vt/vt/vtlib/vt_cuda_runtime_api.h:20:
<br>
/usr/local/cuda/include/cuda_runtime_api.h:3899:39: note: previous
<br>
declaration is here
<br>
extern __host__ cudaError_t CUDARTAPI cudaPointerGetAttributes(struct
<br>
cudaPointerAttributes *attributes, const void *ptr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
1 error generated.
<br>
make[5]: *** [vt_cudartwrap.lo] Error 1
<br>
<p>The error stems from the use of cuda 4.0 version of cudaPointerGetAttribute
<br>
from:
<br>
<a href="http://developer.download.nvidia.com/compute/DevZone/docs/html/C/doc/html/group__CUDART__UNIFIED_gccb4831aa37562c0af3e6b6712e0f12c.html">http://developer.download.nvidia.com/compute/DevZone/docs/html/C/doc/html/group__CUDART__UNIFIED_gccb4831aa37562c0af3e6b6712e0f12c.html</a>
<br>
<p>but:
<br>
cudaPointerGetAttributes(struct cudaPointerAttributes *attributes, const
<br>
void *ptr);
<br>
<p>is the correct signature for Cuda 4.1
<br>
<p>Cuda 4.1 is the current release so I suggest a patch be made for openpmpi
<br>
1.5.5 to detect cuda version and then use the appropriate signature.
<br>
<p>&lt;&gt;Srinath
<br>
<p><p>=================================
<br>
Srinath Vadlamani
<br>
=================================
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18912.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18910.php">Reuti: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18913.php">Srinath Vadlamani: "Re: [OMPI users] openmpi 1.5.5. build issue with cuda 4.1"</a>
<li><strong>Reply:</strong> <a href="18913.php">Srinath Vadlamani: "Re: [OMPI users] openmpi 1.5.5. build issue with cuda 4.1"</a>
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
