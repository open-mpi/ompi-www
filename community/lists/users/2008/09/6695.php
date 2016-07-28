<?
$subject_val = "Re: [OMPI users] where is mpif.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 06:41:00 2008" -->
<!-- isoreceived="20080923104100" -->
<!-- sent="Tue, 23 Sep 2008 12:40:54 +0200" -->
<!-- isosent="20080923104054" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where is mpif.h ?" -->
<!-- id="20080923104054.GB6663_at_brakk.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45ae3b650809230050i59045f37q5bdec50ae2000ca1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] where is mpif.h ?<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-23 06:40:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6696.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6694.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6693.php">Simon Hammond: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6697.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6697.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue 2008-09-23 08:50, Simon Hammond wrote:
<br>
<span class="quotelev1">&gt; Yes, it should be there.
</span><br>
<p>Shouldn't the path be automatically included by the mpif77 wrapper?  I
<br>
ran into this problem when building BLACS (my default OpenMPI 1.2.7
<br>
lives in /usr, MPICH2 is at /opt/mpich2).  The build tries
<br>
<p>&nbsp;&nbsp;$ /usr/bin/mpif90 -c -I. -fPIC  -Wno-unused-variable -g bi_f77_mpi_attr_get.f
<br>
&nbsp;&nbsp;Error: Can't open included file 'mpif.h'
<br>
<p>but this succeeds
<br>
<p>&nbsp;&nbsp;$ /usr/bin/mpif90 -c -I. -I/usr/include -fPIC  -Wno-unused-variable -g   bi_f77_mpi_attr_get.f
<br>
<p>and this works fine as well
<br>
<p>&nbsp;&nbsp;$ /opt/mpich2/mpif90 -c -I. -fPIC -Wno-unused-variable -g bi_f77_mpi_attr_get.f
<br>
<p>Is this the expected behavior?
<br>
<p>Jed
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6695/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6696.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6694.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6693.php">Simon Hammond: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6697.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6697.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
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
