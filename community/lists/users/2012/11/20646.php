<?
$subject_val = "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 04:12:31 2012" -->
<!-- isoreceived="20121107091231" -->
<!-- sent="Wed, 07 Nov 2012 10:12:27 +0100" -->
<!-- isosent="20121107091227" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location" -->
<!-- id="2184211.z8TVLSNZ53_at_rico" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 04:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20647.php">Markus Wittmann: "[OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20645.php">huydanlin: "[OMPI users] Communication round-trip time"</a>
<li><strong>Maybe in reply to:</strong> <a href="20630.php">Adam DeConinck: "[OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Adam,
<br>
<p><span class="quotelev1">&gt; I was able to build successfully by manually substituting the correct 
</span><br>
location into the Makefile in question. 
<br>
<p>Another, more convenient workaround would be to add the following option to 
<br>
the Open MPI configure command:
<br>
<p>&nbsp;&nbsp;&nbsp;--with-contrib-vt-flags=&quot;--with-cuda-dir=$CUDA_HOME&quot;
<br>
<p>The next release of v1.7 will automatically forward the '--with-cuda' setting 
<br>
to the VT configure option '--with-cuda-dir'.
<br>
<p>Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20647.php">Markus Wittmann: "[OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20645.php">huydanlin: "[OMPI users] Communication round-trip time"</a>
<li><strong>Maybe in reply to:</strong> <a href="20630.php">Adam DeConinck: "[OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
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
