<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 10:38:11 2014" -->
<!-- isoreceived="20141003143811" -->
<!-- sent="Fri, 3 Oct 2014 16:38:10 +0200" -->
<!-- isosent="20141003143810" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAG8o1y64X=-H3FUhyY3F9+Urfa=998jzOG+A5kZU0=_W2fP3FQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="79423DD2-E4F3-48D8-B169-A23D342ED308_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 10:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25445.php">Maxime Boissonneault: "[OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<li><strong>Previous message:</strong> <a href="25443.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25443.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all, Dear Jeff,
<br>
when I use
<br>
use MPI, I get
<br>
<p>/tmp/ifortiW8IBH.i90: catastrophic error: **Internal compiler error:
<br>
segmentation violation signal raised** Please report this error along with
<br>
the circumstances in which it occurred in a Software Problem Report.  Note:
<br>
File and line given may not be explicit cause of this error.
<br>
compilation aborted for SPH_MPI.f90 (code 1)
<br>
<p>If i use &quot;use mpi_f08&quot;, I get
<br>
<p><p>SPH_MPI.f90(43): error #6285: There is no matching specific subroutine for
<br>
this generic subroutine call.   [MPI_CART_CREATE]
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_CART_CREATE
<br>
(MPI_COMM_WORLD,ndims,dims,periods,.TRUE.,COMM_CART,MPI%iErr)
<br>
--------^
<br>
SPH_MPI.f90(44): error #6285: There is no matching specific subroutine for
<br>
this generic subroutine call.   [MPI_COMM_RANK]
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_COMM_RANK(COMM_CART,MPI%myrank,MPI%iErr)
<br>
--------^
<br>
SPH_MPI.f90(47): error #6285: There is no matching specific subroutine for
<br>
this generic subroutine call.   [MPI_CART_SHIFT]
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_CART_SHIFT(COMM_CART,0, 1,source,RCPU,MPI%iErr)  ! x-dir, right
<br>
--------^
<br>
SPH_MPI.f90(48): error #6285: There is no matching specific subroutine for
<br>
this generic subroutine call.   [MPI_CART_SHIFT]
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_CART_SHIFT(COMM_CART,0,-1,source,LCPU,MPI%iErr) ! x-dir, left
<br>
--------^
<br>
SPH_MPI.f90(49): error #6285: There is no matching specific subroutine for
<br>
this generic subroutine call.   [MPI_CART_SHIFT]
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_CART_SHIFT(COMM_CART,1, 1,source,TCPU,MPI%iErr)  ! y-dir, top
<br>
--------^
<br>
SPH_MPI.f90(50): error #6285: There is no matching specific subroutine for
<br>
this generic subroutine call.   [MPI_CART_SHIFT]
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_CART_SHIFT(COMM_CART,1,-1,source,BCPU,MPI%iErr) ! y-dir, bottom
<br>
--------^
<br>
SPH_MPI.f90(52): error #6285: There is no matching specific subroutine for
<br>
this generic subroutine call.   [MPI_CART_COORDS]
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_CART_COORDS(COMM_CART,MPI%myrank,ndims,MPI%mycoords,MPI%iErr)
<br>
--------^
<br>
<p><p><p><p>about mpif90 -r8 *.f90
<br>
when I istalled open MPI I run
<br>
<p>./configure --prefix/opt/openmpi cc=icc cxx=icpc f77=ifort FC=ifort
<br>
<p>What do you think?
<br>
<p>Thanks again
<br>
<p><p><p><p>On 3 October 2014 16:01, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; use mpi
</span><br>
<p><p><p><p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25445.php">Maxime Boissonneault: "[OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<li><strong>Previous message:</strong> <a href="25443.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25443.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
