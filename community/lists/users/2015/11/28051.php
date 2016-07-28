<?
$subject_val = "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 04:20:56 2015" -->
<!-- isoreceived="20151119092056" -->
<!-- sent="Thu, 19 Nov 2015 18:20:39 +0900" -->
<!-- isosent="20151119092039" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler" -->
<!-- id="t6lheejwsjd6w94a5tmahsj8.1447924631129_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler" -->
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
<strong>Date:</strong> 2015-11-19 04:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28050.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="28050.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>I remember i saw similar reports.
<br>
<p>Could you give a try to the latest v1.10.1 ?
<br>
And if that still does not work, can you upgrade icc suite and give it an other try ?
<br>
<p>I cannot remember whether this is an ifort bug or the way ompi uses fortran...
<br>
<p>Btw, any reason why you do not
<br>
Use mpi_f08 ?
<br>
<p>HTH
<br>
<p>Gilles
<br>
<p>Michael.Rachner_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;&lt;!-- /* Font Definitions */ @font-face 	{font-family:Wingdings; 	panose-1:5 0 0 0 0 0 0 0 0 0;} @font-face 	{font-family:Wingdings; 	panose-1:5 0 0 0 0 0 0 0 0 0;} @font-face 	{font-family:Calibri; 	panose-1:2 15 5 2 2 2 4 3 2 4;} /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{margin:0cm; 	margin-bottom:.0001pt; 	font-size:11.0pt; 	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;; 	mso-fareast-language:EN-US;} a:link, span.MsoHyperlink 	{mso-style-priority:99; 	color:blue; 	text-decoration:underline;} a:visited, span.MsoHyperlinkFollowed 	{mso-style-priority:99; 	color:purple; 	text-decoration:underline;} span.E-MailFormatvorlage17 	{mso-style-type:personal-compose; 	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;; 	color:windowtext;} .MsoChpDefault 	{mso-style-type:export-only; 	font-size:10.0pt; 	mso-fareast-language:EN-US;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:70.85pt 70.85pt 2.0cm 70.85pt;} div.WordSection1 	{page:WordSection1;} --&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear developers of OpenMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am trying to run our parallelized Ftn-95 code on a Linux cluster with OpenMPI-1-10.0 and Intel-16.0.0 Fortran compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In the code I use the&#194;&#160; module MPI&#194;&#160; (&#226;&#128;&#156;use MPI&#226;&#128;&#157;-stmts).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However I am not able to compile the code, because of compiler error messages like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/src_SPRAY/mpi_wrapper.f90(2065): error #6285: There is no matching specific subroutin for this generic subroutine call.&#194;&#160;&#194;&#160; [MPI_REDUCE]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The problem seems for me to be this one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The interfaces in the module MPI for the MPI-routines do not accept a send or receive buffer array, which is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;actually a variable, an array element or a constant (like MPI_IN_PLACE).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Example 1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; This does not work (gives the compiler error message: &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;error #6285: There is no matching specific subroutin for this generic subroutine call&#194;&#160; )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ivar=123&#194;&#160;&#194;&#160;&#194;&#160; ! &#195;&#159; ivar is an integer variable, not an array
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; call MPI_BCAST( ivar, 1, MPI_INTEGER, 0, MPI_COMM_WORLD), ierr_mpi )&#194;&#160;&#194;&#160;&#194;&#160; ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; only this cumbersome workaround works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ivar=123
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; allocate( iarr(1) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;iarr(1) = ivar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; call MPI_BCAST( iarr, 1, MPI_INTEGER, 0, MPI_COMM_WORLD, ierr_mpi )&#194;&#160;&#194;&#160;&#194;&#160; ! &#195;&#159;- this workaround works
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;ivar = iarr(1) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;deallocate( iarr(1) )&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Example 2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Any call of an MPI-routine with MPI_IN_PLACE does not work, like that coding:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; if(lmaster) then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8, MPI_MAX &amp;&#194;&#160;&#194;&#160;&#194;&#160; ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;,0_INT4, MPI_COMM_WORLD, ierr_mpi )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; else&#194;&#160; ! slaves
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; call MPI_REDUCE( rbuffarr, rdummyarr, nelem, MPI_REAL8, MPI_MAX &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ,0_INT4, MPI_COMM_WORLD, ierr_mpi )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;This results in this compiler error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; /src_SPRAY/mpi_wrapper.f90(2122): error #6285: There is no matching specific subroutine for this generic subroutine call.&#194;&#160;&#194;&#160; [MPI_REDUCE]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8, MPI_MAX &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-------------^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In our code I observed the bug with MPI_BCAST, MPI_REDUCE, MPI_ALLREDUCE,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;but probably there may be other MPI-routines with the same kind of bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This bug occurred for&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;:&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;OpenMPI-1.10.0 &#194;&#160;with Intel-16.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In contrast, this bug did NOT occur for:&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;OpenMPI-1.8.8 &#194;&#160;&#194;&#160;&#194;&#160;with Intel-16.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;OpenMPI-1.8.8 &#194;&#160;&#194;&#160;&#194;&#160;with Intel-15.0.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;OpenMPI-1.10.0 &#194;&#160;with gfortran-5.2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Greetings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Michael Rachner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28051/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28050.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="28050.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28052.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
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
