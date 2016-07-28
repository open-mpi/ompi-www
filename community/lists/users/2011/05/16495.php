<?
$subject_val = "Re: [OMPI users] Request for F90 bindings for Windows Builds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 10:13:38 2011" -->
<!-- isoreceived="20110509141338" -->
<!-- sent="Mon, 9 May 2011 07:13:40 -0700" -->
<!-- isosent="20110509141340" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Request for F90 bindings for Windows Builds" -->
<!-- id="8A6BCB4F-932A-4440-84C1-9331048232F7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTin4KDMrseVWW7WUtjJ25zpMdtL9JQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Request for F90 bindings for Windows Builds<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-09 10:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16494.php">hi: "Re: [OMPI users] Request for F90 bindings for Windows Builds"</a>
<li><strong>In reply to:</strong> <a href="16494.php">hi: "Re: [OMPI users] Request for F90 bindings for Windows Builds"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have F90 support in Open MPI; it's a question of Fortran support in the Windows binary builds.
<br>
<p>The Windows binaries are only available for the 1.5.x series (it is highly unlikely that we will provide Windows binaries for the 1.4.x series).  I *thought* that we had added Fortran support to those 1.5.x Windows binaries recently...
<br>
<p>Ah, I see: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.5/ms-windows.php">http://www.open-mpi.org/software/ompi/v1.5/ms-windows.php</a>
<br>
<p>It specifically only lists F77 bindings.  
<br>
<p>Shiqing -- can we add the F90 bindings, too?
<br>
<p><p>On May 9, 2011, at 7:01 AM, hi wrote:
<br>
<p><span class="quotelev1">&gt; I also vote for F90 support in OpenMPI.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16494.php">hi: "Re: [OMPI users] Request for F90 bindings for Windows Builds"</a>
<li><strong>In reply to:</strong> <a href="16494.php">hi: "Re: [OMPI users] Request for F90 bindings for Windows Builds"</a>
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
