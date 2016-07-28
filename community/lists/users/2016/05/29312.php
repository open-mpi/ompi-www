<?
$subject_val = "Re: [OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use	mpi_f08&quot; with gfortran 5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 23:46:52 2016" -->
<!-- isoreceived="20160525034652" -->
<!-- sent="Wed, 25 May 2016 03:46:49 +0000" -->
<!-- isosent="20160525034649" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran problem when mixing &amp;quot;use mpi&amp;quot; and &amp;quot;use	mpi_f08&amp;quot; with gfortran 5" -->
<!-- id="504CDE03-0380-4195-8C63-21092D6A39FB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPUxaiRhZBTg2HncCaXDO70oGzThR+8OfOx9aXzKpY5k4yt86A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use	mpi_f08&quot; with gfortran 5<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-24 23:46:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29313.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29311.php">Ryan Novosielski: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>In reply to:</strong> <a href="29264.php">Andrea Negri: "[OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use mpi_f08&quot; with gfortran 5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2016, at 12:17 PM, Andrea Negri &lt;negri.andre_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, in the last few days I ported my entire fortran mpi code to &quot;use
</span><br>
<span class="quotelev1">&gt; mpif_08&quot;. You really did a great job with this interface. However,
</span><br>
<span class="quotelev1">&gt; since HDF5 still uses integers to handle communicators, I have a
</span><br>
<span class="quotelev1">&gt; module where I still use &quot;use mpi&quot;, and with gfortran 5.3.0 and
</span><br>
<span class="quotelev1">&gt; openmpi-1.10.2 I got some errors.
</span><br>
<p>FWIW, you can actually mix integer handles with mpi_f08 handles.  The mpi_f08 handles are derived datatypes that contain exactly one member: an integer.
<br>
<p>For example, if you call a subroutine with an integer MPI handle as a dummy parameter, and that subroutine has a Type(MPI_Comm)::comm variable, you can assign:
<br>
<p>comm%mpi_val = integer_handle
<br>
<p>And then use that Type(MPI_Comm) as an mpi_f08 handle.
<br>
<p>The opposite is true, too -- you can extract the %mpi_val from an mpi_f08 handle and use it as an integer handle with &quot;use mpi&quot; or mpif.h interfaces.
<br>
<p>Meaning: the %mpi_val value is exactly equivalent to the integer handles.
<br>
<p><span class="quotelev1">&gt; I have been able to produce an extremely minimalistic example that
</span><br>
<span class="quotelev1">&gt; reproduces the same errors. If you try to compile with mpifort -c this
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<p>I think you had a typo -- it should be &quot;use test1_mod&quot;, right?
<br>
<p>I expanded your code a little to give it a program, and run it:
<br>
<p>-----
<br>
&nbsp;&nbsp;!==========================================                                         
<br>
module test1_mod
<br>
&nbsp;&nbsp;! I use ONLY here just to show you that errors happen even with  ONLY               
<br>
&nbsp;&nbsp;use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;private
<br>
&nbsp;&nbsp;public ::  test1
<br>
contains
<br>
&nbsp;&nbsp;subroutine test1(a)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;real, intent(inout) :: a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Here I am&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Done with finalize&quot;
<br>
&nbsp;&nbsp;endsubroutine test1
<br>
endmodule test1_mod
<br>
<p><p><p>module prova2
<br>
&nbsp;&nbsp;use mpi_f08
<br>
&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;public :: prova3
<br>
contains
<br>
&nbsp;&nbsp;subroutine prova3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use test1_mod
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;real :: a
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call test1(a)
<br>
&nbsp;&nbsp;endsubroutine prova3
<br>
endmodule prova2
<br>
!==========================================                                           
<br>
<p>program doit
<br>
&nbsp;&nbsp;use prova2
<br>
&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;call prova3()
<br>
end program doit
<br>
-----
<br>
<p>I then compiled it with the Intel compiler and ran it:
<br>
<p>-----
<br>
$ mpifort mix-usempi-usempif08-2.f90 -I. &amp;&amp; mpirun -np 2 ./a.out
<br>
&nbsp;Here I am
<br>
&nbsp;Here I am
<br>
&nbsp;Done with finalize
<br>
&nbsp;Done with finalize
<br>
-----
<br>
<p>Now that does not mean that there isn't a bug in OMPI -- I'm just saying that it works with the Intel compiler.
<br>
<p>I tried the following:
<br>
<p>- Open MPI dev master with icc: works
<br>
- Open MPI dev master with gcc 5.2.0: works
<br>
- Open MPI v1.10.x head with icc: works
<br>
- Open MPI v1.10.x head with gcc 5.2.0: same errors you got
<br>
- Open MPI v2.x head with gcc 5.2.0: works
<br>
<p>We have clearly changed something since v1.10.x, but I don't know offhand exactly what would have caused this difference.
<br>
<p>Is there a chance you can use the Intel compiler?  Or the Open MPI v2.0.0 rc?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29313.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29311.php">Ryan Novosielski: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>In reply to:</strong> <a href="29264.php">Andrea Negri: "[OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use mpi_f08&quot; with gfortran 5"</a>
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
