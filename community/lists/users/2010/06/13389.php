<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 18:46:58 2010" -->
<!-- isoreceived="20100622224658" -->
<!-- sent="Tue, 22 Jun 2010 18:46:54 -0400" -->
<!-- isosent="20100622224654" -->
<!-- name="Mihaly Mezei" -->
<!-- email="Mihaly.Mezei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction" -->
<!-- id="f676a9ec2d93.4c21051e_at_mssm.edu" -->
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
<strong>Date:</strong> 2010-06-22 18:46:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13390.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>In reply to:</strong> <a href="13387.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13393.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13393.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Date: Tuesday, June 22, 2010 6:36 pm
<br>
Subject: Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction
<br>
<p><span class="quotelev1">&gt; I think the problem is that you didn't include mpif.h in 
</span><br>
<span class="quotelev1">&gt; testsubr().  Hence, the value of MPI_INTEGER was undefined -- I 
</span><br>
<span class="quotelev1">&gt; don't think it's a problem with the value of MPI_Comm.
</span><br>
I just tried adding the include statement, but this is what I got:
<br>
<p>&nbsp;lapis.mssm.edu % mpif90 -o mpi0 mpi0.f
<br>
/share/apps/openmpi-1.4.1/include/mpif-common.h(402): error #6406: Conflicting attributes or multiple declaration of name.   [MPI_COMM_WORLD]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameter (MPI_COMM_WORLD=0)
<br>
-----------------^
<br>
compilation aborted for mpi0.f (code 1)
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
<li><strong>Next message:</strong> <a href="13390.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>In reply to:</strong> <a href="13387.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13393.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13393.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
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
