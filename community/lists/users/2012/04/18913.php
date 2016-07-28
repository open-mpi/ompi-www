<?
$subject_val = "Re: [OMPI users] openmpi 1.5.5. build issue with cuda 4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 15:43:26 2012" -->
<!-- isoreceived="20120402194326" -->
<!-- sent="Mon, 2 Apr 2012 13:43:01 -0600" -->
<!-- isosent="20120402194301" -->
<!-- name="Srinath Vadlamani" -->
<!-- email="srinath.vadlamani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.5.5. build issue with cuda 4.1" -->
<!-- id="CAJ02NuHPmHLiY9SWNa6=PWFEePM_7bd11b2Wo6+fBjU0izneRA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJ02NuH6E8T8fj4nrRk5OnQHKYUUFFsuSicBoi3ZLiMREMD0yQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.5.5. build issue with cuda 4.1<br>
<strong>From:</strong> Srinath Vadlamani (<em>srinath.vadlamani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 15:43:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18914.php">Rohan Deshpande: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="18912.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18911.php">Srinath Vadlamani: "[OMPI users] openmpi 1.5.5. build issue with cuda 4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The offending file: openmpi/contrib/vt/vt/vtlib/vt_cudartwrap.c
<br>
<p>is easily fixed with placing a const in front of the void *ptr
<br>
for the cudaPointerGetAttributes wrapper code segments.
<br>
<p>Then the openmpi 1.5.5 release compiles with Cuda 4.1
<br>
<p>&lt;&gt;Srinath
<br>
=================================
<br>
Srinath Vadlamani
<br>
=================================
<br>
<p><p>On Mon, Apr 2, 2012 at 11:26 AM, Srinath Vadlamani &lt;
<br>
srinath.vadlamani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a build error with the newest release openmpi 1.5.5 building
</span><br>
<span class="quotelev1">&gt; against. cuda 4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in vtlib
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/build/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;   CC     vt_libwrap.lo
</span><br>
<span class="quotelev1">&gt;   CC     vt_gpu.lo
</span><br>
<span class="quotelev1">&gt;   CC     vt_cudartwrap.lo
</span><br>
<span class="quotelev1">&gt;   CC     vt_cudart.lo
</span><br>
<span class="quotelev1">&gt; /opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/openmpi-1.5.5/ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:1378:14:
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'cudaPointerGetAttributes'
</span><br>
<span class="quotelev1">&gt; cudaError_t  cudaPointerGetAttributes(struct cudaPointerAttributes
</span><br>
<span class="quotelev1">&gt; *attributes, void *ptr)
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/openmpi-1.5.5/ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:13:
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/openmpi-1.5.5/ompi/contrib/vt/vt/vtlib/vt_cudartwrap.h:25:
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /opt/local/var/macports/build/_opt_local_var_macports_sources_rsync.macports.org_release_ports_science_openmpi/openmpi/work/openmpi-1.5.5/ompi/contrib/vt/vt/vtlib/vt_cuda_runtime_api.h:20:
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:3899:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration is here
</span><br>
<span class="quotelev1">&gt; extern __host__ cudaError_t CUDARTAPI cudaPointerGetAttributes(struct
</span><br>
<span class="quotelev1">&gt; cudaPointerAttributes *attributes, const void *ptr);
</span><br>
<span class="quotelev1">&gt;                                       ^
</span><br>
<span class="quotelev1">&gt; 1 error generated.
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_cudartwrap.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error stems from the use of cuda 4.0 version of
</span><br>
<span class="quotelev1">&gt; cudaPointerGetAttribute
</span><br>
<span class="quotelev1">&gt; from:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://developer.download.nvidia.com/compute/DevZone/docs/html/C/doc/html/group__CUDART__UNIFIED_gccb4831aa37562c0af3e6b6712e0f12c.html">http://developer.download.nvidia.com/compute/DevZone/docs/html/C/doc/html/group__CUDART__UNIFIED_gccb4831aa37562c0af3e6b6712e0f12c.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but:
</span><br>
<span class="quotelev1">&gt; cudaPointerGetAttributes(struct cudaPointerAttributes *attributes, const
</span><br>
<span class="quotelev1">&gt; void *ptr);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is the correct signature for Cuda 4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cuda 4.1 is the current release so I suggest a patch be made for openpmpi
</span><br>
<span class="quotelev1">&gt; 1.5.5 to detect cuda version and then use the appropriate signature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&gt;Srinath
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Srinath Vadlamani
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18914.php">Rohan Deshpande: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="18912.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18911.php">Srinath Vadlamani: "[OMPI users] openmpi 1.5.5. build issue with cuda 4.1"</a>
<!-- nextthread="start" -->
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
