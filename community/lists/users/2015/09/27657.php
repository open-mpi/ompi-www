<?
$subject_val = "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 20:18:37 2015" -->
<!-- isoreceived="20150924001837" -->
<!-- sent="Thu, 24 Sep 2015 09:18:29 +0900" -->
<!-- isosent="20150924001829" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0" -->
<!-- id="56034155.1010401_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5602CCA2.6060601_at_obspm.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-23 20:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27658.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>Previous message:</strong> <a href="27656.php">Surivinta Surivinta: "[OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>In reply to:</strong> <a href="27655.php">Fabrice Roy: "[OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27660.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27660.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fabrice,
<br>
<p>i do not fully understand the root cause of this error, and you might 
<br>
want to ask Intel folks to comment on that.
<br>
<p>that being said, and since this compiler does support fortran 2008, i 
<br>
strongly encourage you to
<br>
use mpi_f08
<br>
instead of
<br>
use mpi
<br>
<p>a happy feature/side effect is that your program compiles and runs just 
<br>
fine if you use mpi_f08 module (!)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 9/24/2015 1:00 AM, Fabrice Roy wrote:
<br>
<span class="quotelev1">&gt; program testmpi
</span><br>
<span class="quotelev1">&gt;     use mpi
</span><br>
<span class="quotelev1">&gt;     implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     integer :: pid
</span><br>
<span class="quotelev1">&gt;     integer :: ierr
</span><br>
<span class="quotelev1">&gt;     integer :: tok
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;     call mpi_comm_rank(mpi_comm_world, pid,ierr)
</span><br>
<span class="quotelev1">&gt;     if(pid==0) then
</span><br>
<span class="quotelev1">&gt;        tok = 1
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;        tok = 0
</span><br>
<span class="quotelev1">&gt;     end if
</span><br>
<span class="quotelev1">&gt;     call mpi_bcast(tok,1,mpi_integer,0,mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt;     call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;   end program testmpi 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27658.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>Previous message:</strong> <a href="27656.php">Surivinta Surivinta: "[OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>In reply to:</strong> <a href="27655.php">Fabrice Roy: "[OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27660.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27660.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
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
