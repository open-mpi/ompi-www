<?
$subject_val = "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 17:32:20 2015" -->
<!-- isoreceived="20151124223220" -->
<!-- sent="Tue, 24 Nov 2015 14:32:14 -0800" -->
<!-- isosent="20151124223214" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler" -->
<!-- id="6BD886A2-6BFD-42CB-BB3E-CC228DF85BC4_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAGKz=uLrPz-jVimabAfKDFibu=i6wS+79gkpVj5MeGCepsXTzg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 17:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28111.php">JR Cary: "[OMPI users] Problem building 1.10.1 on OSX:"</a>
<li><strong>Previous message:</strong> <a href="28109.php">Jeff Hammond: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28109.php">Jeff Hammond: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>I believe you misunderstood my comment. My point was that everyone optimizes their distributions according to different rules based on a variety of factors. Intel MPI targets a specific market segment that allows them to set all those nice little parameters such as eager limit to something that is appropriate for that segment.
<br>
<p>OpenMPI isn&#226;&#128;&#153;t targeted at any specific segment. So the choice of default params is haphazard, primarily based on what made that component work best on the system of interest to the specific developer that wrote it. The choice isn&#226;&#128;&#153;t based on market needs, nor is there some product manager driving the overall convergence of the params from across the code.
<br>
<p>Thus, if someone really wants to compare performance between the two code bases, you have to take a little time to tune each of them. OMPI generally requires a little more effort than IMPI for the reasons stated above.
<br>
<p>The various MPI implementations watch each other like hawks. Since each camp knows its code very well, the developers know how to get the most out of their own code, and over time have become generally knowledgable on how to tune their competitors to something reasonable. If any MPI finds a competitor is more than a couple of percent different from their own MPI, they immediately rectify the situation.
<br>
<p>So when someone sees a giant gap like 20%, you can bet your bottom nickel that it is a tuning difference for that specific machine.
<br>
<p><p><span class="quotelev1">&gt; On Nov 24, 2015, at 10:36 AM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel MPI supports a wide range of conduits in the same library (<a href="https://software.intel.com/sites/default/files/Reference_Manual_1.pdf">https://software.intel.com/sites/default/files/Reference_Manual_1.pdf</a> &lt;<a href="https://software.intel.com/sites/default/files/Reference_Manual_1.pdf">https://software.intel.com/sites/default/files/Reference_Manual_1.pdf</a>&gt;, section 3.3.1), which can be selected at runtime, so I don't understand your specialization argument.  Are you suggesting that a lack of CPU-specific optimizations are responsible for the ~20% difference here?  I have a hard time believing that, especially if OpenMPI is compiled with the Intel compiler, which will inline optimized memcpy, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A more likely source of the difference is the eager limit (I_MPI_EAGER_THRESHOLD), which is 262144 bytes in Intel MPI, which is larger than any of the limits that I can find OpenMPI using.  Perhaps you consider the eager limit a network-specific optimization, although Intel MPI does not treat it that way (the default is not network-specific).  Obviously, it is easy enough for an OpenMPI user to replicate this behavior with MCA settings and see if that makes a difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, since Intel MPI is based on MPICH, there are plenty of intrinsic differences that could explain the performance gap observed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 23, 2015 at 9:03 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; FWIW: the usual reason for differences between IMPI and OMPI lies in OMPI&#226;&#128;&#153;s default settings, which are focused on ensuring it can run anywhere as opposed to being optimized for a specific platform. You might look at the MCA params relating to your environment and networks to optimize them for your cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 23, 2015, at 8:07 AM, Michael.Rachner_at_[hidden] &lt;mailto:Michael.Rachner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; In the meantime the administrators have installed (Thanks!)  OpenMPI-1.10.1 with Intel-16.0.0 on the cluster.
</span><br>
<span class="quotelev2">&gt;&gt; I have tested it with our code:  It works.
</span><br>
<span class="quotelev2">&gt;&gt; The time spent for MPI-data transmission was the same as with OpenMPI-1.8.3&amp;Intel-14.0.4, but was ~20% higher than with IMPI-5.1.1&amp;Intel-16.0.0
</span><br>
<span class="quotelev2">&gt;&gt; for the same case running on 3 nodes and 8 procs per node.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Greetings
</span><br>
<span class="quotelev2">&gt;&gt;   Michael Rachner
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Von: users [mailto:users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] Im Auftrag von Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; Gesendet: Freitag, 20. November 2015 00:53
</span><br>
<span class="quotelev2">&gt;&gt; An: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Betreff: Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Michael,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in the mean time, you can use 'mpi_f08' instead of 'use mpi'
</span><br>
<span class="quotelev2">&gt;&gt; this is really a f90 binding issue, and f08 is safe
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/19/2015 10:21 PM, Michael.Rachner_at_[hidden] &lt;mailto:Michael.Rachner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thank You,  Nick and Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I hope the administrators of the cluster will be so kind  and will update OpenMPI for me (and others) soon.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Greetings
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Von: users [mailto:users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] Im Auftrag von Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; Gesendet: Donnerstag, 19. November 2015 12:59
</span><br>
<span class="quotelev2">&gt;&gt; An: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Betreff: Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Nick for the pointer !
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Michael,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; good news is you do not have to upgrade ifort,
</span><br>
<span class="quotelev2">&gt;&gt; but you have to update to 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt; (intel 16 changed the way gcc pragmas are handled, and ompi has been made aware in 1.10.1)
</span><br>
<span class="quotelev2">&gt;&gt; 1.10.1 fixes many bugs from 1.10.0, so I strongly encourage anyone to use 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, November 19, 2015, Nick Papior &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I can chip in,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; We use OpenMPI 1.10.1 with Intel /2016.1.0.423501 without problems.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I could not get 1.10.0 to work, one reason is: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27655.php">http://www.open-mpi.org/community/lists/users/2015/09/27655.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27655.php">http://www.open-mpi.org/community/lists/users/2015/09/27655.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On a side-note, please note that if you require scalapack you may need to follow this approach:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302">https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302</a> &lt;<a href="https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302">https://software.intel.com/en-us/forums/intel-math-kernel-library/topic/590302</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 2015-11-19 11:24 GMT+01:00 &lt;Michael.Rachner_at_[hidden] &lt;mailto:Michael.Rachner_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I cannot  update to more recent versions, because what I used is the newest combination of OpenMPI and Intel-Ftn  available on that cluster.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; When looking at the list of improvements  on the OpenMPI website for  OpenMPI 1.10.1 compared to 1.10.0, I do not remember having seen this item to be corrected.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Greeting
</span><br>
<span class="quotelev2">&gt;&gt; Michael Rachner
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Von: users [mailto: &lt;mailto:users-bounces_at_[hidden]&gt; &lt;&gt;users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] Im Auftrag von Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; Gesendet: Donnerstag, 19. November 2015 10:21
</span><br>
<span class="quotelev2">&gt;&gt; An: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Betreff: Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler
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
<span class="quotelev2">&gt;&gt; And if that still does not work, can you upgrade icc suite and give it an other try ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I cannot remember whether this is an ifort bug or the way ompi uses fortran...
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
<span class="quotelev2">&gt;&gt;  &lt;&gt;Michael.Rachner_at_[hidden] &lt;mailto:Michael.Rachner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear developers of OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run our parallelized Ftn-95 code on a Linux cluster with OpenMPI-1-10.0 and Intel-16.0.0 Fortran compiler.
</span><br>
<span class="quotelev2">&gt;&gt; In the code I use the  module MPI  (&#226;&#128;&#156;use MPI&#226;&#128;&#157;-stmts).
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; However I am not able to compile the code, because of compiler error messages like this:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; /src_SPRAY/mpi_wrapper.f90(2065): error #6285: There is no matching specific subroutin for this generic subroutine call.   [MPI_REDUCE]
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems for me to be this one:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The interfaces in the module MPI for the MPI-routines do not accept a send or receive buffer array, which is
</span><br>
<span class="quotelev2">&gt;&gt; actually a variable, an array element or a constant (like MPI_IN_PLACE).
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Example 1:
</span><br>
<span class="quotelev2">&gt;&gt;      This does not work (gives the compiler error message:      error #6285: There is no matching specific subroutin for this generic subroutine call  )
</span><br>
<span class="quotelev2">&gt;&gt;              ivar=123    ! &#195;&#159; ivar is an integer variable, not an array
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_BCAST( ivar, 1, MPI_INTEGER, 0, MPI_COMM_WORLD), ierr_mpi )    ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;       only this cumbersome workaround works:
</span><br>
<span class="quotelev2">&gt;&gt;               ivar=123
</span><br>
<span class="quotelev2">&gt;&gt;                 allocate( iarr(1) )
</span><br>
<span class="quotelev2">&gt;&gt;                 iarr(1) = ivar
</span><br>
<span class="quotelev2">&gt;&gt;          call MPI_BCAST( iarr, 1, MPI_INTEGER, 0, MPI_COMM_WORLD, ierr_mpi )    ! &#195;&#159;- this workaround works
</span><br>
<span class="quotelev2">&gt;&gt;                 ivar = iarr(1)
</span><br>
<span class="quotelev2">&gt;&gt;                 deallocate( iarr(1) )      
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Example 2:
</span><br>
<span class="quotelev2">&gt;&gt;      Any call of an MPI-routine with MPI_IN_PLACE does not work, like that coding:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;       if(lmaster) then
</span><br>
<span class="quotelev2">&gt;&gt;         call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8, MPI_MAX &amp;    ! &#195;&#159;- this should work, but is not accepted by the compiler
</span><br>
<span class="quotelev2">&gt;&gt;                                          ,0_INT4, MPI_COMM_WORLD, ierr_mpi )
</span><br>
<span class="quotelev2">&gt;&gt;       else  ! slaves
</span><br>
<span class="quotelev2">&gt;&gt;         call MPI_REDUCE( rbuffarr, rdummyarr, nelem, MPI_REAL8, MPI_MAX &amp;
</span><br>
<span class="quotelev2">&gt;&gt;                         ,0_INT4, MPI_COMM_WORLD, ierr_mpi )
</span><br>
<span class="quotelev2">&gt;&gt;       endif
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     This results in this compiler error message:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;       /src_SPRAY/mpi_wrapper.f90(2122): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_REDUCE]
</span><br>
<span class="quotelev2">&gt;&gt;             call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8, MPI_MAX &amp;
</span><br>
<span class="quotelev2">&gt;&gt; -------------^
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; In our code I observed the bug with MPI_BCAST, MPI_REDUCE, MPI_ALLREDUCE,
</span><br>
<span class="quotelev2">&gt;&gt; but probably there may be other MPI-routines with the same kind of bug.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; This bug occurred for                               :     OpenMPI-1.10.0  with Intel-16.0.0
</span><br>
<span class="quotelev2">&gt;&gt; In contrast, this bug did NOT occur for:     OpenMPI-1.8.8    with Intel-16.0.0
</span><br>
<span class="quotelev2">&gt;&gt;                                                                             OpenMPI-1.8.8    with Intel-15.0.3
</span><br>
<span class="quotelev2">&gt;&gt;                                                                             OpenMPI-1.10.0  with gfortran-5.2.0
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Greetings
</span><br>
<span class="quotelev2">&gt;&gt; Michael Rachner
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;&gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28052.php">http://www.open-mpi.org/community/lists/users/2015/11/28052.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28052.php">http://www.open-mpi.org/community/lists/users/2015/11/28052.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28056.php">http://www.open-mpi.org/community/lists/users/2015/11/28056.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28056.php">http://www.open-mpi.org/community/lists/users/2015/11/28056.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28098.php">http://www.open-mpi.org/community/lists/users/2015/11/28098.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28098.php">http://www.open-mpi.org/community/lists/users/2015/11/28098.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28099.php">http://www.open-mpi.org/community/lists/users/2015/11/28099.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28099.php">http://www.open-mpi.org/community/lists/users/2015/11/28099.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> &lt;<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28109.php">http://www.open-mpi.org/community/lists/users/2015/11/28109.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28110/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28111.php">JR Cary: "[OMPI users] Problem building 1.10.1 on OSX:"</a>
<li><strong>Previous message:</strong> <a href="28109.php">Jeff Hammond: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28109.php">Jeff Hammond: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/12/28129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
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
