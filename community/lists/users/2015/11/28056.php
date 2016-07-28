<?
$subject_val = "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 08:21:11 2015" -->
<!-- isoreceived="20151119132111" -->
<!-- sent="Thu, 19 Nov 2015 13:21:05 +0000" -->
<!-- isosent="20151119132105" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler" -->
<!-- id="8337B490252F0944BF1D38541059627E173BA33B_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5sVTxad=d0kAUKAgkjXB9kqBwEP9Vg4fhtE-d9JdZXBrg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bug%20in%20Fortran-module%20MPI%20of%20OpenMPI%201.10.0%20with	Intel-Ftn-compiler"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-11-19 08:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Previous message:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28071.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28071.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank You,  Nick and Gilles,
<br>

<br>
I hope the administrators of the cluster will be so kind  and will update OpenMPI for me (and others) soon.
<br>

<br>
Greetings
<br>
Michael
<br>

<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Gilles Gouaillardet
<br>
Gesendet: Donnerstag, 19. November 2015 12:59
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler
<br>

<br>
Thanks Nick for the pointer !
<br>

<br>
Michael,
<br>

<br>
good news is you do not have to upgrade ifort,
<br>
but you have to update to 1.10.1
<br>
(intel 16 changed the way gcc pragmas are handled, and ompi has been made aware in 1.10.1)
<br>
1.10.1 fixes many bugs from 1.10.0, so I strongly encourage anyone to use 1.10.1
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>
On Thursday, November 19, 2015, Nick Papior &lt;nickpapior_at_[hidden]&lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
<br>
Maybe I can chip in,
<br>

<br>
We use OpenMPI 1.10.1 with Intel /2016.1.0.423501 without problems.
<br>

<br>
I could not get 1.10.0 to work, one reason is: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27655.php">http://www.open-mpi.org/community/lists/users/2015/09/27655.php</a>
<br>

<br>
On a side-note, please note that if you require scalapack you may need to follow this approach:
<br>
<a href="https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302">https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302</a>
<br>

<br>
2015-11-19 11:24 GMT+01:00 &lt;Michael.Rachner_at_[hidden]&lt;javascript:_e(%7B%7D,'cvml','Michael.Rachner_at_[hidden]');&gt;&gt;:
<br>
Sorry, Gilles,
<br>

<br>
I cannot  update to more recent versions, because what I used is the newest combination of OpenMPI and Intel-Ftn  available on that cluster.
<br>

<br>
When looking at the list of improvements  on the OpenMPI website for  OpenMPI 1.10.1 compared to 1.10.0, I do not remember having seen this item to be corrected.
<br>

<br>
Greeting
<br>
Michael Rachner
<br>

<br>

<br>
Von: users [mailto:users-bounces_at_[hidden]&lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;] Im Auftrag von Gilles Gouaillardet
<br>
Gesendet: Donnerstag, 19. November 2015 10:21
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler
<br>

<br>
Michael,
<br>

<br>
I remember i saw similar reports.
<br>

<br>
Could you give a try to the latest v1.10.1 ?
<br>
And if that still does not work, can you upgrade icc suite and give it an other try ?
<br>

<br>
I cannot remember whether this is an ifort bug or the way ompi uses fortran...
<br>

<br>
Btw, any reason why you do not
<br>
Use mpi_f08 ?
<br>

<br>
HTH
<br>

<br>
Gilles
<br>

<br>
Michael.Rachner_at_[hidden]&lt;javascript:_e(%7B%7D,'cvml','Michael.Rachner_at_[hidden]');&gt; wrote:
<br>
Dear developers of OpenMPI,
<br>

<br>
I am trying to run our parallelized Ftn-95 code on a Linux cluster with OpenMPI-1-10.0 and Intel-16.0.0 Fortran compiler.
<br>
In the code I use the  module MPI  (&#226;&#128;&#156;use MPI&#226;&#128;&#157;-stmts).
<br>

<br>
However I am not able to compile the code, because of compiler error messages like this:
<br>

<br>
/src_SPRAY/mpi_wrapper.f90(2065): error #6285: There is no matching specific subroutin for this generic subroutine call.   [MPI_REDUCE]
<br>

<br>

<br>
The problem seems for me to be this one:
<br>

<br>
The interfaces in the module MPI for the MPI-routines do not accept a send or receive buffer array, which is
<br>
actually a variable, an array element or a constant (like MPI_IN_PLACE).
<br>

<br>
Example 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This does not work (gives the compiler error message:      error #6285: There is no matching specific subroutin for this generic subroutine call  )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ivar=123    ! &lt;-- ivar is an integer variable, not an array
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BCAST( ivar, 1, MPI_INTEGER, 0, MPI_COMM_WORLD), ierr_mpi )    ! &lt;--- this should work, but is not accepted by the compiler
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;only this cumbersome workaround works:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ivar=123
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate( iarr(1) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iarr(1) = ivar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BCAST( iarr, 1, MPI_INTEGER, 0, MPI_COMM_WORLD, ierr_mpi )    ! &lt;--- this workaround works
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ivar = iarr(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate( iarr(1) )
<br>

<br>
Example 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any call of an MPI-routine with MPI_IN_PLACE does not work, like that coding:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(lmaster) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8, MPI_MAX &amp;    ! &lt;--- this should work, but is not accepted by the compiler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,0_INT4, MPI_COMM_WORLD, ierr_mpi )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else  ! slaves
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE( rbuffarr, rdummyarr, nelem, MPI_REAL8, MPI_MAX &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,0_INT4, MPI_COMM_WORLD, ierr_mpi )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;This results in this compiler error message:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/src_SPRAY/mpi_wrapper.f90(2122): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_REDUCE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8, MPI_MAX &amp;
<br>
-------------^
<br>

<br>

<br>
In our code I observed the bug with MPI_BCAST, MPI_REDUCE, MPI_ALLREDUCE,
<br>
but probably there may be other MPI-routines with the same kind of bug.
<br>

<br>
This bug occurred for                               :     OpenMPI-1.10.0  with Intel-16.0.0
<br>
In contrast, this bug did NOT occur for:     OpenMPI-1.8.8    with Intel-16.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI-1.8.8    with Intel-15.0.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI-1.10.0  with gfortran-5.2.0
<br>

<br>
Greetings
<br>
Michael Rachner
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28052.php">http://www.open-mpi.org/community/lists/users/2015/11/28052.php</a>
<br>

<br>

<br>

<br>
--
<br>
Kind regards Nick
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Previous message:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28071.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28071.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
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
