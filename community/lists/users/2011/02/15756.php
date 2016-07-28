<?
$subject_val = "[OMPI users] anybody tried OMPI with gpudirect?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 11:16:11 2011" -->
<!-- isoreceived="20110228161611" -->
<!-- sent="Mon, 28 Feb 2011 17:16:04 +0100" -->
<!-- isosent="20110228161604" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[OMPI users] anybody tried OMPI with gpudirect?" -->
<!-- id="4D6BCA44.7010806_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI users] anybody tried OMPI with gpudirect?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 11:16:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to play with nvidia's gpudirect. The test program given with
<br>
the gpudirect tarball just does a basic MPI ping-pong between two
<br>
process that allocated their buffers with cudaHostMalloc instead of
<br>
malloc. It seems to work with Intel MPI but Open MPI 1.5 hangs in the
<br>
first MPI_Send. Replacing the cuda buffer with a normally-malloc'ed
<br>
buffer makes the program work again. I assume that something goes wrong
<br>
when OMPI tries to register/pin the cuda buffer in the IB stack (that's
<br>
what gpudirect seems to be about), but I don't see why Intel MPI would
<br>
succeed there.
<br>
<p>Has anybody ever looked at this?
<br>
<p>FWIW, we're using OMPI 1.5, OFED 1.5.2, Intel MPI 4.0.0.28 and SLES11 w/
<br>
and w/o the gpudirect patch.
<br>
<p>Thanks
<br>
Brice Goglin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Reply:</strong> <a href="15757.php">Rolf vandeVaart: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
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
