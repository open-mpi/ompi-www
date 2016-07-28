<?
$subject_val = "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 13:37:15 2015" -->
<!-- isoreceived="20151124183715" -->
<!-- sent="Tue, 24 Nov 2015 10:36:52 -0800" -->
<!-- isosent="20151124183652" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler" -->
<!-- id="CAGKz=uLrPz-jVimabAfKDFibu=i6wS+79gkpVj5MeGCepsXTzg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D2FDBC20-B1D2-46D1-8310-B488A5058078_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 13:36:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28110.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28108.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28110.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28110.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph:
<br>
<p>Intel MPI supports a wide range of conduits in the same library (
<br>
<a href="https://software.intel.com/sites/default/files/Reference_Manual_1.pdf">https://software.intel.com/sites/default/files/Reference_Manual_1.pdf</a>,
<br>
section 3.3.1), which can be selected at runtime, so I don't understand
<br>
your specialization argument.  Are you suggesting that a lack of
<br>
CPU-specific optimizations are responsible for the ~20% difference here?  I
<br>
have a hard time believing that, especially if OpenMPI is compiled with the
<br>
Intel compiler, which will inline optimized memcpy, etc.
<br>
<p>A more likely source of the difference is the eager limit
<br>
(I_MPI_EAGER_THRESHOLD), which is 262144 bytes in Intel MPI, which is
<br>
larger than any of the limits that I can find OpenMPI using.  Perhaps you
<br>
consider the eager limit a network-specific optimization, although Intel
<br>
MPI does not treat it that way (the default is not network-specific).
<br>
Obviously, it is easy enough for an OpenMPI user to replicate this behavior
<br>
with MCA settings and see if that makes a difference.
<br>
<p>Of course, since Intel MPI is based on MPICH, there are plenty of intrinsic
<br>
differences that could explain the performance gap observed.
<br>
<p>Jeff
<br>
<p>On Mon, Nov 23, 2015 at 9:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: the usual reason for differences between IMPI and OMPI lies in
</span><br>
<span class="quotelev1">&gt; OMPI&#226;&#128;&#153;s default settings, which are focused on ensuring it can run anywhere
</span><br>
<span class="quotelev1">&gt; as opposed to being optimized for a specific platform. You might look at
</span><br>
<span class="quotelev1">&gt; the MCA params relating to your environment and networks to optimize them
</span><br>
<span class="quotelev1">&gt; for your cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2015, at 8:07 AM, Michael.Rachner_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the meantime the administrators have installed (Thanks!)
</span><br>
<span class="quotelev1">&gt;  OpenMPI-1.10.1 with Intel-16.0.0 on the cluster.
</span><br>
<span class="quotelev1">&gt; I have tested it with our code:  It works.
</span><br>
<span class="quotelev1">&gt; The time spent for MPI-data transmission was the same as with
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.8.3&amp;Intel-14.0.4, but was ~20% higher than with
</span><br>
<span class="quotelev1">&gt; IMPI-5.1.1&amp;Intel-16.0.0
</span><br>
<span class="quotelev1">&gt; for the same case running on 3 nodes and 8 procs per node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt;   Michael Rachner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Von:* users [mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;users-bounces_at_[hidden]&gt;] *Im Auftrag von *Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; *Gesendet:* Freitag, 20. November 2015 00:53
</span><br>
<span class="quotelev1">&gt; *An:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Betreff:* Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0
</span><br>
<span class="quotelev1">&gt; with Intel-Ftn-compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the mean time, you can use 'mpi_f08' instead of 'use mpi'
</span><br>
<span class="quotelev1">&gt; this is really a f90 binding issue, and f08 is safe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; On 11/19/2015 10:21 PM, Michael.Rachner_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You,  Nick and Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope the administrators of the cluster will be so kind  and will update
</span><br>
<span class="quotelev1">&gt; OpenMPI for me (and others) soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Von:* users [mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;users-bounces_at_[hidden]&gt;] *Im Auftrag von *Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; *Gesendet:* Donnerstag, 19. November 2015 12:59
</span><br>
<span class="quotelev1">&gt; *An:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Betreff:* Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0
</span><br>
<span class="quotelev1">&gt; with Intel-Ftn-compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Nick for the pointer !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; good news is you do not have to upgrade ifort,
</span><br>
<span class="quotelev1">&gt; but you have to update to 1.10.1
</span><br>
<span class="quotelev1">&gt; (intel 16 changed the way gcc pragmas are handled, and ompi has been made
</span><br>
<span class="quotelev1">&gt; aware in 1.10.1)
</span><br>
<span class="quotelev1">&gt; 1.10.1 fixes many bugs from 1.10.0, so I strongly encourage anyone to use
</span><br>
<span class="quotelev1">&gt; 1.10.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, November 19, 2015, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Maybe I can chip in,
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
<span class="quotelev1">&gt; 2015-11-19 11:24 GMT+01:00 &lt;Michael.Rachner_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Sorry, Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot  update to more recent versions, because what I used is the
</span><br>
<span class="quotelev1">&gt; newest combination of OpenMPI and Intel-Ftn  available on that cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When looking at the list of improvements  on the OpenMPI website for
</span><br>
<span class="quotelev1">&gt;  OpenMPI 1.10.1 compared to 1.10.0, I do not remember having seen this item
</span><br>
<span class="quotelev1">&gt; to be corrected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greeting
</span><br>
<span class="quotelev1">&gt; Michael Rachner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Von:* users [mailto: &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]] *Im Auftrag von *Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; *Gesendet:* Donnerstag, 19. November 2015 10:21
</span><br>
<span class="quotelev1">&gt; *An:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Betreff:* Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0
</span><br>
<span class="quotelev1">&gt; with Intel-Ftn-compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I remember i saw similar reports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you give a try to the latest v1.10.1 ?
</span><br>
<span class="quotelev1">&gt; And if that still does not work, can you upgrade icc suite and give it an
</span><br>
<span class="quotelev1">&gt; other try ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot remember whether this is an ifort bug or the way ompi uses
</span><br>
<span class="quotelev1">&gt; fortran...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Btw, any reason why you do not
</span><br>
<span class="quotelev1">&gt; Use mpi_f08 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael.Rachner_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; Dear developers of OpenMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run our parallelized Ftn-95 code on a Linux cluster with
</span><br>
<span class="quotelev1">&gt; OpenMPI-1-10.0 and Intel-16.0.0 Fortran compiler.
</span><br>
<span class="quotelev1">&gt; In the code I use the  module MPI  (&#226;&#128;&#156;use MPI&#226;&#128;&#157;-stmts).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I am not able to compile the code, because of compiler error
</span><br>
<span class="quotelev1">&gt; messages like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /src_SPRAY/mpi_wrapper.f90(2065): error #6285: There is no matching
</span><br>
<span class="quotelev1">&gt; specific subroutin for this generic subroutine call.   [MPI_REDUCE]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem seems for me to be this one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interfaces in the module MPI for the MPI-routines do not accept a send
</span><br>
<span class="quotelev1">&gt; or receive buffer array, which is
</span><br>
<span class="quotelev1">&gt; actually a variable, an array element or a constant (like MPI_IN_PLACE).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example 1:
</span><br>
<span class="quotelev1">&gt;      This does not work (gives the compiler error message:      error
</span><br>
<span class="quotelev1">&gt; #6285: There is no matching specific subroutin for this generic subroutine
</span><br>
<span class="quotelev1">&gt; call  )
</span><br>
<span class="quotelev1">&gt;              ivar=123    ! &#195;&#159; ivar is an integer variable, not an array
</span><br>
<span class="quotelev1">&gt;           *call* MPI_BCAST( ivar, 1, MPI_INTEGER, 0, MPI_COMM_WORLD),
</span><br>
<span class="quotelev1">&gt; ierr_mpi )    ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       only this cumbersome workaround works:
</span><br>
<span class="quotelev1">&gt;               ivar=123
</span><br>
<span class="quotelev1">&gt;                 allocate( iarr(1) )
</span><br>
<span class="quotelev1">&gt;                 iarr(1) = ivar
</span><br>
<span class="quotelev1">&gt; *         call* MPI_BCAST( iarr, 1, MPI_INTEGER, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; ierr_mpi )    ! &#195;&#159;- this workaround works
</span><br>
<span class="quotelev1">&gt;                 ivar = iarr(1)
</span><br>
<span class="quotelev1">&gt;                 deallocate( iarr(1) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example 2:
</span><br>
<span class="quotelev1">&gt;      Any call of an MPI-routine with MPI_IN_PLACE does not work, like that
</span><br>
<span class="quotelev1">&gt; coding:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       *if*(lmaster) *then*
</span><br>
<span class="quotelev1">&gt;         *call* MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8,
</span><br>
<span class="quotelev1">&gt; MPI_MAX &amp;    ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev1">&gt;                                          ,0_INT4, MPI_COMM_WORLD, ierr_mpi
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt;       *else*  ! slaves
</span><br>
<span class="quotelev1">&gt;         *call* MPI_REDUCE( rbuffarr, rdummyarr, nelem, MPI_REAL8, MPI_MAX
</span><br>
<span class="quotelev1">&gt; &amp;
</span><br>
<span class="quotelev1">&gt;                         ,0_INT4, MPI_COMM_WORLD, ierr_mpi )
</span><br>
<span class="quotelev1">&gt;       *endif*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This results in this compiler error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /src_SPRAY/mpi_wrapper.f90(2122): error #6285: There is no matching
</span><br>
<span class="quotelev1">&gt; specific subroutine for this generic subroutine call.   [MPI_REDUCE]
</span><br>
<span class="quotelev1">&gt;             call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8,
</span><br>
<span class="quotelev1">&gt; MPI_MAX &amp;
</span><br>
<span class="quotelev1">&gt; -------------^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our code I observed the bug with MPI_BCAST, MPI_REDUCE, MPI_ALLREDUCE,
</span><br>
<span class="quotelev1">&gt; but probably there may be other MPI-routines with the same kind of bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This bug occurred for                               :     OpenMPI-1.10.0
</span><br>
<span class="quotelev1">&gt;  with Intel-16.0.0
</span><br>
<span class="quotelev1">&gt; In contrast, this bug did NOT occur for:     OpenMPI-1.8.8    with
</span><br>
<span class="quotelev1">&gt; Intel-16.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    OpenMPI-1.8.8    with Intel-15.0.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                              OpenMPI-1.10.0  with
</span><br>
<span class="quotelev1">&gt; gfortran-5.2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; Michael Rachner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28052.php">http://www.open-mpi.org/community/lists/users/2015/11/28052.php</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28056.php">http://www.open-mpi.org/community/lists/users/2015/11/28056.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28098.php">http://www.open-mpi.org/community/lists/users/2015/11/28098.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28099.php">http://www.open-mpi.org/community/lists/users/2015/11/28099.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28110.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28108.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28110.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Reply:</strong> <a href="28110.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
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
