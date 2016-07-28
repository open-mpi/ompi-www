<?
$subject_val = "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 11:07:35 2015" -->
<!-- isoreceived="20151123160735" -->
<!-- sent="Mon, 23 Nov 2015 16:07:29 +0000" -->
<!-- isosent="20151123160729" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler" -->
<!-- id="8337B490252F0944BF1D38541059627E173BB5C6_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="564E60E5.2080408_at_rist.or.jp" -->
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
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bug%20in%20Fortran-module%20MPI%20of%20OpenMPI%201.10.0%20with%20Intel-Ftn-compiler"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-11-23 11:07:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28097.php">Surivinta Surivinta: "Re: [OMPI users] MPI instructional and reference sources"</a>
<li><strong>In reply to:</strong> <a href="28071.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles,
<br>
<p>In the meantime the administrators have installed (Thanks!)  OpenMPI-1.10.1 with Intel-16.0.0 on the cluster.
<br>
I have tested it with our code:  It works.
<br>
The time spent for MPI-data transmission was the same as with OpenMPI-1.8.3&amp;Intel-14.0.4, but was ~20% higher than with IMPI-5.1.1&amp;Intel-16.0.0
<br>
for the same case running on 3 nodes and 8 procs per node.
<br>
<p>Greetings
<br>
&nbsp;&nbsp;Michael Rachner
<br>
<p><p>Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Gilles Gouaillardet
<br>
Gesendet: Freitag, 20. November 2015 00:53
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler
<br>
<p>Michael,
<br>
<p>in the mean time, you can use 'mpi_f08' instead of 'use mpi'
<br>
this is really a f90 binding issue, and f08 is safe
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
On 11/19/2015 10:21 PM, Michael.Rachner_at_[hidden]&lt;mailto:Michael.Rachner_at_[hidden]&gt; wrote:
<br>
Thank You,  Nick and Gilles,
<br>
<p>I hope the administrators of the cluster will be so kind  and will update OpenMPI for me (and others) soon.
<br>
<p>Greetings
<br>
Michael
<br>
<p>Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Gilles Gouaillardet
<br>
Gesendet: Donnerstag, 19. November 2015 12:59
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler
<br>
<p>Thanks Nick for the pointer !
<br>
<p>Michael,
<br>
<p>good news is you do not have to upgrade ifort,
<br>
but you have to update to 1.10.1
<br>
(intel 16 changed the way gcc pragmas are handled, and ompi has been made aware in 1.10.1)
<br>
1.10.1 fixes many bugs from 1.10.0, so I strongly encourage anyone to use 1.10.1
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, November 19, 2015, Nick Papior &lt;nickpapior_at_[hidden]&lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
<br>
Maybe I can chip in,
<br>
<p>We use OpenMPI 1.10.1 with Intel /2016.1.0.423501 without problems.
<br>
<p>I could not get 1.10.0 to work, one reason is: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27655.php">http://www.open-mpi.org/community/lists/users/2015/09/27655.php</a>
<br>
<p>On a side-note, please note that if you require scalapack you may need to follow this approach:
<br>
<a href="https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302">https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302</a>
<br>
<p>2015-11-19 11:24 GMT+01:00 &lt;Michael.Rachner_at_[hidden]&lt;mailto:Michael.Rachner_at_[hidden]&gt;&gt;:
<br>
Sorry, Gilles,
<br>
<p>I cannot  update to more recent versions, because what I used is the newest combination of OpenMPI and Intel-Ftn  available on that cluster.
<br>
<p>When looking at the list of improvements  on the OpenMPI website for  OpenMPI 1.10.1 compared to 1.10.0, I do not remember having seen this item to be corrected.
<br>
<p>Greeting
<br>
Michael Rachner
<br>
<p><p>Von: users [mailto:users-bounces_at_[hidden]&lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;] Im Auftrag von Gilles Gouaillardet
<br>
Gesendet: Donnerstag, 19. November 2015 10:21
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler
<br>
<p>Michael,
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
<p>Michael.Rachner_at_[hidden]&lt;javascript:_e(%7B%7D,'cvml','Michael.Rachner_at_[hidden]');&gt; wrote:
<br>
Dear developers of OpenMPI,
<br>
<p>I am trying to run our parallelized Ftn-95 code on a Linux cluster with OpenMPI-1-10.0 and Intel-16.0.0 Fortran compiler.
<br>
In the code I use the  module MPI  (&quot;use MPI&quot;-stmts).
<br>
<p>However I am not able to compile the code, because of compiler error messages like this:
<br>
<p>/src_SPRAY/mpi_wrapper.f90(2065): error #6285: There is no matching specific subroutin for this generic subroutine call.   [MPI_REDUCE]
<br>
<p><p>The problem seems for me to be this one:
<br>
<p>The interfaces in the module MPI for the MPI-routines do not accept a send or receive buffer array, which is
<br>
actually a variable, an array element or a constant (like MPI_IN_PLACE).
<br>
<p>Example 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This does not work (gives the compiler error message:      error #6285: There is no matching specific subroutin for this generic subroutine call  )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ivar=123    ! &lt;-- ivar is an integer variable, not an array
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BCAST( ivar, 1, MPI_INTEGER, 0, MPI_COMM_WORLD), ierr_mpi )    ! &lt;--- this should work, but is not accepted by the compiler
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;only this cumbersome workaround works:
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
<p>Example 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any call of an MPI-routine with MPI_IN_PLACE does not work, like that coding:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(lmaster) then
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;This results in this compiler error message:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/src_SPRAY/mpi_wrapper.f90(2122): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_REDUCE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8, MPI_MAX &amp;
<br>
-------------^
<br>
<p><p>In our code I observed the bug with MPI_BCAST, MPI_REDUCE, MPI_ALLREDUCE,
<br>
but probably there may be other MPI-routines with the same kind of bug.
<br>
<p>This bug occurred for                               :     OpenMPI-1.10.0  with Intel-16.0.0
<br>
In contrast, this bug did NOT occur for:     OpenMPI-1.8.8    with Intel-16.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI-1.8.8    with Intel-15.0.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI-1.10.0  with gfortran-5.2.0
<br>
<p>Greetings
<br>
Michael Rachner
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28052.php">http://www.open-mpi.org/community/lists/users/2015/11/28052.php</a>
<br>
<p><p><p><pre>
--
Kind regards Nick
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28056.php">http://www.open-mpi.org/community/lists/users/2015/11/28056.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28097.php">Surivinta Surivinta: "Re: [OMPI users] MPI instructional and reference sources"</a>
<li><strong>In reply to:</strong> <a href="28071.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
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
