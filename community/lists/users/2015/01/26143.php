<?
$subject_val = "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 18:36:30 2015" -->
<!-- isoreceived="20150108233630" -->
<!-- sent="Fri, 9 Jan 2015 00:36:29 +0100" -->
<!-- isosent="20150108233629" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="CAG8o1y7k0oeZA_Tr+Qyip5rZzOgTOjYC=84uBYj-LZYSt9iqTA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54AF0C85.90205_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 18:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26144.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26142.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26142.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26146.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26146.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gus, Dear All,
<br>
so are you suggesting to use DOUBLE PRECISION and not REAL(dp)?
<br>
Thanks again
<br>
<p>Diego
<br>
<p><p>On 9 January 2015 at 00:02, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 01/08/2015 05:50 PM, Diego Avesani wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear George, Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; what are the other issues?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why did you put in selected_real_kind(15, 307) the number 307
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is the Fortran 90 (and later) syntax for selected_real_kind.
</span><br>
<span class="quotelev1">&gt; The first number is the number of digits in the mantissa,
</span><br>
<span class="quotelev1">&gt; the second is the exponent range.
</span><br>
<span class="quotelev1">&gt; For (simpler) alternatives, see here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://fortranwiki.org/fortran/show/Real+precision">http://fortranwiki.org/fortran/show/Real+precision</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A lot of grief (and probably the segfault)
</span><br>
<span class="quotelev1">&gt; could have been saved if you just used
</span><br>
<span class="quotelev1">&gt; &quot;DOUBLE PRECISION&quot;, instead of REAL in your
</span><br>
<span class="quotelev1">&gt; structure components declaration, as I suggested a while back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks again
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8 January 2015 at 23:24, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Diego,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Please find below the corrected example. There were several issues
</span><br>
<span class="quotelev2">&gt;&gt;     but the most important one, which is certainly the cause of the
</span><br>
<span class="quotelev2">&gt;&gt;     segfault, is that &quot;real(dp)&quot; (with dp = selected_real_kind(p=16)) is
</span><br>
<span class="quotelev2">&gt;&gt;     NOT equal to MPI_DOUBLE_RECISION. For double precision you should
</span><br>
<span class="quotelev2">&gt;&gt;     use 15 (and not 16).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Jan 8, 2015 at 6:08 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         There were still some minor errors left over in the attached
</span><br>
<span class="quotelev2">&gt;&gt;         program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I strongly encourage you to use &quot;use mpi&quot; instead of &quot;include
</span><br>
<span class="quotelev2">&gt;&gt;         'mpif.h'&quot; because you will get compile time errors when you pass
</span><br>
<span class="quotelev2">&gt;&gt;         incorrect / forget to pass parameters to MPI subroutines.  When
</span><br>
<span class="quotelev2">&gt;&gt;         I switched your program to &quot;use mpi&quot;, here's what the compiler
</span><br>
<span class="quotelev2">&gt;&gt;         showed me:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         1. the name &quot;MPI&quot; is reserved
</span><br>
<span class="quotelev2">&gt;&gt;         2. need to pass displacements(1:nstruct+1) to
</span><br>
<span class="quotelev2">&gt;&gt; mpi_type_create_struct
</span><br>
<span class="quotelev2">&gt;&gt;         3. need to pass request(1) to mpi_isend
</span><br>
<span class="quotelev2">&gt;&gt;         4. need to pass request(1) to mpi_wait
</span><br>
<span class="quotelev2">&gt;&gt;         5. need to pass ierr argument to mpi_wait
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         1-4 are technically not correct, but the program would likely
</span><br>
<span class="quotelev2">&gt;&gt;         (usually) compile/run &quot;correctly&quot; anyway.  5 is probably what
</span><br>
<span class="quotelev2">&gt;&gt;         caused your segv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Attached is my copy of your program with fixes for the
</span><br>
<span class="quotelev2">&gt;&gt;         above-mentioned issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         BTW, I missed the beginning of this thread -- I assume that this
</span><br>
<span class="quotelev2">&gt;&gt;         is an artificial use of mpi_type_create_resized for the purposes
</span><br>
<span class="quotelev2">&gt;&gt;         of a small example.  The specific use of it in this program
</span><br>
<span class="quotelev2">&gt;&gt;         appears to be superfluous.
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
<span class="quotelev2">&gt;&gt;         On Jan 8, 2015, at 4:26 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Diego,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; yes, it works for me (at least with the v1.8 head and gnu
</span><br>
<span class="quotelev2">&gt;&gt; compilers)
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; On 2015/01/08 17:51, Diego Avesani wrote:
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Dear Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; thanks again, however it does not work.
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; the program says:  &quot;SIGSEGV, segmentation fault occurred&quot;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Does the program run in your case?
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Thanks again
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; On 8 January 2015 at 03:02, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet@
</span><br>
<span class="quotelev2">&gt;&gt; iferc.org&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;  Diego,
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; my bad, i should have passed displacements(1) to
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_create_struct
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; here is an updated version
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; (note you have to use a REQUEST integer for MPI_Isend and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv,
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; and you also have to call MPI_Wait to ensure the requests
</span><br>
<span class="quotelev2">&gt;&gt; complete)
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; On 2015/01/08 8:23, Diego Avesani wrote:
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Dear Gilles, Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; I'm sorry to bother you again, but I have some problem with
</span><br>
<span class="quotelev2">&gt;&gt; send and
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; receive the struct_data.
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; I tried to send a MPI_Type_Create_Struct but I get a
</span><br>
<span class="quotelev2">&gt;&gt; segmentation fault
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; occurred and I do not know why. The program is very simple,
</span><br>
<span class="quotelev2">&gt;&gt; it is the old
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; one with the isend and irecv subroutines
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; (you can find it in the attachment)
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Diego
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; On 5 January 2015 at 15:54, Diego Avesani
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; &lt;diego.avesani_at_[hidden] &lt;mailto:diego.avesani_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;diego.avesani_at_[hidden] &lt;mailto:diego.avesani_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;  Dear Gilles,
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Thanks, Thanks a lot.
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Now is more clear.
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Again, thanks a lot
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Diego
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; users mailing
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;listusers_at_[hidden] &lt;mailto:listusers_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/">http://www.open-mpi.org/community/lists/users/2015/01/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 26116.php
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/">http://www.open-mpi.org/community/lists/users/2015/01/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 26118.php
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26124.php">http://www.open-mpi.org/community/lists/users/2015/01/26124.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Link to this post:<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt; community/lists/users/2015/01/26126.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/01/26127.php">http://www.open-mpi.org/community/lists/users/2015/01/26127.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/01/26140.php">http://www.open-mpi.org/community/lists/users/2015/01/26140.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/">http://www.open-mpi.org/community/lists/users/2015/01/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 26141.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/">http://www.open-mpi.org/community/lists/users/2015/01/</a>
</span><br>
<span class="quotelev1">&gt; 26142.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26144.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26142.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26142.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26146.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26146.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
