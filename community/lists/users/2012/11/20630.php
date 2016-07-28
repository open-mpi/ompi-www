<?
$subject_val = "[OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 18:25:04 2012" -->
<!-- isoreceived="20121102222504" -->
<!-- sent="Fri, 2 Nov 2012 15:24:39 -0700" -->
<!-- isosent="20121102222439" -->
<!-- name="Adam DeConinck" -->
<!-- email="ajdecon_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location" -->
<!-- id="CAM2q2A7CO_WG5uCmKD8mSm61kYiZETi3a5AkonoDw_YzC7SHQw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location<br>
<strong>From:</strong> Adam DeConinck (<em>ajdecon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 18:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20631.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="20629.php">Jeff Squyres: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20640.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>Maybe reply:</strong> <a href="20640.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>Maybe reply:</strong> <a href="20646.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all,
<br>
<p>Not sure that this is the right location to send this report to, might
<br>
be more appropriate for the dev list. Let me know if so.
<br>
<p>The pre-release OpenMPI 1.7rc5 does not built correctly if you attempt
<br>
to compile it with a non-standard CUDA location. The culprit is in
<br>
ompi/contrib/vt/vt/vtlib/Makefile, which uses /usr/local/cuda
<br>
regardless of the CUDA directory supplied in ./configure
<br>
--with-cuda=$CUDA_HOME.
<br>
<p>(We keep several different versions of CUDA and select between them
<br>
using environment modules, so /usr/local/cuda is always wrong.)
<br>
<p>To duplicate:
<br>
<p>tar xzf openmpi-1.7rc5.tar.gz
<br>
cd openmpi-1.7rc5
<br>
./configure --with-cuda=$CUDA_HOME (where CUDA_HOME is not /usr/local/cuda)
<br>
grep &quot;usr/local/cuda&quot; ompi/contrib/vt/vt/vtlib/Makefile
<br>
<p>will show:
<br>
CUDATKDIR = /usr/local/cuda/
<br>
CUDATKINCDIR = -I/usr/local/cuda/include/
<br>
CUDATKLIBDIR = -L/usr/local/cuda/lib64
<br>
CUPTIINCDIR = -I/usr/local/cuda//extras/CUPTI/include/
<br>
<p>Attempting to make then failed.
<br>
<p>I was able to build successfully by manually substituting the correct
<br>
location into the Makefile in question.
<br>
<p>Cheers,
<br>
Adam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20631.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="20629.php">Jeff Squyres: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20640.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>Maybe reply:</strong> <a href="20640.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>Maybe reply:</strong> <a href="20646.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
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
