<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 18:52:19 2010" -->
<!-- isoreceived="20100622225219" -->
<!-- sent="Tue, 22 Jun 2010 18:52:15 -0400" -->
<!-- isosent="20100622225215" -->
<!-- name="Mihaly Mezei" -->
<!-- email="Mihaly.Mezei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction" -->
<!-- id="f65387683bdd.4c21065f_at_mssm.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="79AE6774-5420-4C22-8A46-7AEB3657DC7A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction<br>
<strong>From:</strong> Mihaly Mezei (<em>Mihaly.Mezei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 18:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13389.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13387.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HEUREEKA!
<br>
<p>The solution that works is to keep using MPI_WORK_COMM in the MPI_ subroutine calls, include mpif.h in the subroutine, but don't try to pass it as an argument or save it in an other integer (as I did under mpich).
<br>
<p>Thanks, Jeff, for your help and patience with my stumblings.
<br>
<p>Mihaly Mezei
<br>
<p>Department of Structural and Chemical Biology, Mount Sinai School of Medicine
<br>
Voice:  (212) 659-5475   Fax: (212) 849-2456
<br>
WWW (MSSM home): <a href="http://www.mountsinai.org/Find%20A%20Faculty/profile.do?id=0000072500001497192632">http://www.mountsinai.org/Find%20A%20Faculty/profile.do?id=0000072500001497192632</a>
<br>
WWW (Lab home - software, publications): <a href="http://inka.mssm.edu/~mezei">http://inka.mssm.edu/~mezei</a>
<br>
WWW (Department): <a href="http://atlas.physbio.mssm.edu">http://atlas.physbio.mssm.edu</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13389.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13387.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
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
