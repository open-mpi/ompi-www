<?
$subject_val = "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 06:59:22 2015" -->
<!-- isoreceived="20151119115922" -->
<!-- sent="Thu, 19 Nov 2015 20:59:19 +0900" -->
<!-- isosent="20151119115919" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler" -->
<!-- id="CAAkFZ5sVTxad=d0kAUKAgkjXB9kqBwEP9Vg4fhtE-d9JdZXBrg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc75n+NAx9AA2pqNecuFaZW3HZR32dbj=FXS3frz8pLDRw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 06:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28056.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28054.php">Federico Reghenzani: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>In reply to:</strong> <a href="28053.php">Nick Papior: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28056.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28056.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Nick for the pointer !
<br>
<p>Michael,
<br>
<p>good news is you do not have to upgrade ifort,
<br>
but you have to update to 1.10.1
<br>
(intel 16 changed the way gcc pragmas are handled, and ompi has been made
<br>
aware in 1.10.1)
<br>
1.10.1 fixes many bugs from 1.10.0, so I strongly encourage anyone to use
<br>
1.10.1
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, November 19, 2015, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Maybe I can chip in,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use OpenMPI 1.10.1 with Intel /2016.1.0.423501 without problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could not get 1.10.0 to work, one reason is:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27655.php">http://www.open-mpi.org/community/lists/users/2015/09/27655.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a side-note, please note that if you require scalapack you may need to
</span><br>
<span class="quotelev1">&gt; follow this approach:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302">https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-11-19 11:24 GMT+01:00 &lt;Michael.Rachner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','Michael.Rachner_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cannot  update to more recent versions, because what I used is the
</span><br>
<span class="quotelev2">&gt;&gt; newest combination of OpenMPI and Intel-Ftn  available on that cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When looking at the list of improvements  on the OpenMPI website for
</span><br>
<span class="quotelev2">&gt;&gt;  OpenMPI 1.10.1 compared to 1.10.0, I do not remember having seen this item
</span><br>
<span class="quotelev2">&gt;&gt; to be corrected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greeting
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael Rachner
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Von:* users [mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;] *Im
</span><br>
<span class="quotelev2">&gt;&gt; Auftrag von *Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; *Gesendet:* Donnerstag, 19. November 2015 10:21
</span><br>
<span class="quotelev2">&gt;&gt; *An:* Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Betreff:* Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0
</span><br>
<span class="quotelev2">&gt;&gt; with Intel-Ftn-compiler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I remember i saw similar reports.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you give a try to the latest v1.10.1 ?
</span><br>
<span class="quotelev2">&gt;&gt; And if that still does not work, can you upgrade icc suite and give it an
</span><br>
<span class="quotelev2">&gt;&gt; other try ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cannot remember whether this is an ifort bug or the way ompi uses
</span><br>
<span class="quotelev2">&gt;&gt; fortran...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Btw, any reason why you do not
</span><br>
<span class="quotelev2">&gt;&gt; Use mpi_f08 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael.Rachner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','Michael.Rachner_at_[hidden]');&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear developers of OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run our parallelized Ftn-95 code on a Linux cluster with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI-1-10.0 and Intel-16.0.0 Fortran compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the code I use the  module MPI  (&#226;&#128;&#156;use MPI&#226;&#128;&#157;-stmts).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However I am not able to compile the code, because of compiler error
</span><br>
<span class="quotelev2">&gt;&gt; messages like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /src_SPRAY/mpi_wrapper.f90(2065): error #6285: There is no matching
</span><br>
<span class="quotelev2">&gt;&gt; specific subroutin for this generic subroutine call.   [MPI_REDUCE]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems for me to be this one:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The interfaces in the module MPI for the MPI-routines do not accept a
</span><br>
<span class="quotelev2">&gt;&gt; send or receive buffer array, which is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; actually a variable, an array element or a constant (like MPI_IN_PLACE).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example 1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      This does not work (gives the compiler error message:      error
</span><br>
<span class="quotelev2">&gt;&gt; #6285: There is no matching specific subroutin for this generic subroutine
</span><br>
<span class="quotelev2">&gt;&gt; call  )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              ivar=123    ! &#195;&#159; ivar is an integer variable, not an array
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           *call* MPI_BCAST( ivar, 1, MPI_INTEGER, 0, MPI_COMM_WORLD),
</span><br>
<span class="quotelev2">&gt;&gt; ierr_mpi )    ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       only this cumbersome workaround works:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               ivar=123
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 allocate( iarr(1) )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 iarr(1) = ivar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *         call* MPI_BCAST( iarr, 1, MPI_INTEGER, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt; ierr_mpi )    ! &#195;&#159;- this workaround works
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 ivar = iarr(1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 deallocate( iarr(1) )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example 2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Any call of an MPI-routine with MPI_IN_PLACE does not work, like
</span><br>
<span class="quotelev2">&gt;&gt; that coding:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       *if*(lmaster) *then*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         *call* MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_MAX &amp;    ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                          ,0_INT4, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt; ierr_mpi )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       *else*  ! slaves
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         *call* MPI_REDUCE( rbuffarr, rdummyarr, nelem, MPI_REAL8,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_MAX &amp;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         ,0_INT4, MPI_COMM_WORLD, ierr_mpi )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       *endif*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This results in this compiler error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       /src_SPRAY/mpi_wrapper.f90(2122): error #6285: There is no matching
</span><br>
<span class="quotelev2">&gt;&gt; specific subroutine for this generic subroutine call.   [MPI_REDUCE]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_MAX &amp;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In our code I observed the bug with MPI_BCAST, MPI_REDUCE, MPI_ALLREDUCE,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but probably there may be other MPI-routines with the same kind of bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This bug occurred for                               :     OpenMPI-1.10.0
</span><br>
<span class="quotelev2">&gt;&gt;  with Intel-16.0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In contrast, this bug did NOT occur for:     OpenMPI-1.8.8    with
</span><br>
<span class="quotelev2">&gt;&gt; Intel-16.0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    OpenMPI-1.8.8    with Intel-15.0.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                              OpenMPI-1.10.0  with
</span><br>
<span class="quotelev2">&gt;&gt; gfortran-5.2.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael Rachner
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28052.php">http://www.open-mpi.org/community/lists/users/2015/11/28052.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28056.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28054.php">Federico Reghenzani: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>In reply to:</strong> <a href="28053.php">Nick Papior: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28056.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28056.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
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
