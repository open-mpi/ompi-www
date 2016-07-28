<?
$subject_val = "[OMPI users] where is opal_install_dirs?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 12:22:39 2008" -->
<!-- isoreceived="20081010162239" -->
<!-- sent="Fri, 10 Oct 2008 17:22:14 +0100" -->
<!-- isosent="20081010162214" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] where is opal_install_dirs?" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE801BDF7B0_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] where is opal_install_dirs?<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 12:22:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6938.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6936.php">Warner Yuen: "[OMPI users]  build failed using intel compilers on mac os"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6951.php">Jeff Squyres: "Re: [OMPI users] where is opal_install_dirs?"</a>
<li><strong>Reply:</strong> <a href="6951.php">Jeff Squyres: "Re: [OMPI users] where is opal_install_dirs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried building Global Arrays with OpenMPI 1.2.3 and the portland
<br>
compilers 7.0.2. It gives  an error message about an undefined symbol
<br>
&quot;opal_install_dirs&quot;:
<br>
<p>mpif90 -O -i8  -c -o dgetf2.o dgetf2.f
<br>
mpif90: symbol lookup error: mpif90: undefined symbol: opal_install_dirs
<br>
make[1]: *** [dgetf2.o] Error 127
<br>
<p>Does anyone have any idea what the problem could be? If I use pgf90
<br>
instead of the mpi wrapper the error does not occur, so something is
<br>
missing there.
<br>
<p>Thanks
<br>
<p>Henk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6938.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6936.php">Warner Yuen: "[OMPI users]  build failed using intel compilers on mac os"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6951.php">Jeff Squyres: "Re: [OMPI users] where is opal_install_dirs?"</a>
<li><strong>Reply:</strong> <a href="6951.php">Jeff Squyres: "Re: [OMPI users] where is opal_install_dirs?"</a>
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
