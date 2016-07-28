<?
$subject_val = "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 31 11:43:34 2009" -->
<!-- isoreceived="20091231164334" -->
<!-- sent="Thu, 31 Dec 2009 08:45:12 -0800" -->
<!-- isosent="20091231164512" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding Fortran 90 subroutines with MPI" -->
<!-- id="4B3CD518.2000608_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B3CCE92.6010603_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding Fortran 90 subroutines with MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-31 11:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11669.php">ETHAN DENEAULT: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>In reply to:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11669.php">ETHAN DENEAULT: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; It would help if you would include the error messages you encounter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to call MPI_Init(ierr) before you can call (just about) any 
</span><br>
<span class="quotelev1">&gt; other MPI call.  E.g., add &quot;call MPI_Init(ierr)&quot; as the first 
</span><br>
<span class="quotelev1">&gt; executable statement of your &quot;program  prog&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error I get with your program is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Comm_f2c
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose that message could be clearer.
</span><br>
<p>I filed a request for a &quot;minor enhancement&quot;.  See 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2152">https://svn.open-mpi.org/trac/ompi/ticket/2152</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11669.php">ETHAN DENEAULT: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>In reply to:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11669.php">ETHAN DENEAULT: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
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
