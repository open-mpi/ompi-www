<?
$subject_val = "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 18:02:34 2015" -->
<!-- isoreceived="20150108230234" -->
<!-- sent="Thu, 08 Jan 2015 18:02:29 -0500" -->
<!-- isosent="20150108230229" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="54AF0C85.90205_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAG8o1y47jU-4a02tAcMSwr+4pKJTZY_i3WjW_wTxR0btC7+cRQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 18:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26143.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26141.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26141.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26143.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26143.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/08/2015 05:50 PM, Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; Dear George, Dear all,
</span><br>
<span class="quotelev1">&gt; what are the other issues?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why did you put in selected_real_kind(15, 307) the number 307
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Diego
<br>
<p>That is the Fortran 90 (and later) syntax for selected_real_kind.
<br>
The first number is the number of digits in the mantissa,
<br>
the second is the exponent range.
<br>
For (simpler) alternatives, see here:
<br>
<p><a href="http://fortranwiki.org/fortran/show/Real+precision">http://fortranwiki.org/fortran/show/Real+precision</a>
<br>
<p>A lot of grief (and probably the segfault)
<br>
could have been saved if you just used
<br>
&quot;DOUBLE PRECISION&quot;, instead of REAL in your
<br>
structure components declaration, as I suggested a while back.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p><span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8 January 2015 at 23:24, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Please find below the corrected example. There were several issues
</span><br>
<span class="quotelev1">&gt;     but the most important one, which is certainly the cause of the
</span><br>
<span class="quotelev1">&gt;     segfault, is that &quot;real(dp)&quot; (with dp = selected_real_kind(p=16)) is
</span><br>
<span class="quotelev1">&gt;     NOT equal to MPI_DOUBLE_RECISION. For double precision you should
</span><br>
<span class="quotelev1">&gt;     use 15 (and not 16).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Thu, Jan 8, 2015 at 6:08 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         There were still some minor errors left over in the attached
</span><br>
<span class="quotelev1">&gt;         program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I strongly encourage you to use &quot;use mpi&quot; instead of &quot;include
</span><br>
<span class="quotelev1">&gt;         'mpif.h'&quot; because you will get compile time errors when you pass
</span><br>
<span class="quotelev1">&gt;         incorrect / forget to pass parameters to MPI subroutines.  When
</span><br>
<span class="quotelev1">&gt;         I switched your program to &quot;use mpi&quot;, here's what the compiler
</span><br>
<span class="quotelev1">&gt;         showed me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         1. the name &quot;MPI&quot; is reserved
</span><br>
<span class="quotelev1">&gt;         2. need to pass displacements(1:nstruct+1) to mpi_type_create_struct
</span><br>
<span class="quotelev1">&gt;         3. need to pass request(1) to mpi_isend
</span><br>
<span class="quotelev1">&gt;         4. need to pass request(1) to mpi_wait
</span><br>
<span class="quotelev1">&gt;         5. need to pass ierr argument to mpi_wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         1-4 are technically not correct, but the program would likely
</span><br>
<span class="quotelev1">&gt;         (usually) compile/run &quot;correctly&quot; anyway.  5 is probably what
</span><br>
<span class="quotelev1">&gt;         caused your segv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Attached is my copy of your program with fixes for the
</span><br>
<span class="quotelev1">&gt;         above-mentioned issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         BTW, I missed the beginning of this thread -- I assume that this
</span><br>
<span class="quotelev1">&gt;         is an artificial use of mpi_type_create_resized for the purposes
</span><br>
<span class="quotelev1">&gt;         of a small example.  The specific use of it in this program
</span><br>
<span class="quotelev1">&gt;         appears to be superfluous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Jan 8, 2015, at 4:26 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;         &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Diego,
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; yes, it works for me (at least with the v1.8 head and gnu compilers)
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Cheers,
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Gilles
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; On 2015/01/08 17:51, Diego Avesani wrote:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Dear Gilles,
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; thanks again, however it does not work.
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; the program says:  &quot;SIGSEGV, segmentation fault occurred&quot;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Does the program run in your case?
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Thanks again
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; On 8 January 2015 at 03:02, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;  Diego,
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; my bad, i should have passed displacements(1) to MPI_Type_create_struct
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; here is an updated version
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; (note you have to use a REQUEST integer for MPI_Isend and MPI_Irecv,
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; and you also have to call MPI_Wait to ensure the requests complete)
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; On 2015/01/08 8:23, Diego Avesani wrote:
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Dear Gilles, Dear all,
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; I'm sorry to bother you again, but I have some problem with send and
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; receive the struct_data.
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; I tried to send a MPI_Type_Create_Struct but I get a segmentation fault
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; occurred and I do not know why. The program is very simple, it is the old
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; one with the isend and irecv subroutines
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; (you can find it in the attachment)
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Thanks again
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; On 5 January 2015 at 15:54, Diego Avesani
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; &lt;diego.avesani_at_[hidden] &lt;mailto:diego.avesani_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;diego.avesani_at_[hidden] &lt;mailto:diego.avesani_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;  Dear Gilles,
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Thanks, Thanks a lot.
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Now is more clear.
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Again, thanks a lot
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; users mailing
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;listusers_at_[hidden] &lt;mailto:listusers_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26116.php">http://www.open-mpi.org/community/lists/users/2015/01/26116.php</a>
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26118.php">http://www.open-mpi.org/community/lists/users/2015/01/26118.php</a>
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26124.php">http://www.open-mpi.org/community/lists/users/2015/01/26124.php</a>
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;         &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;         &gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;         &gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/01/26126.php">http://www.open-mpi.org/community/lists/users/2015/01/26126.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/01/26127.php">http://www.open-mpi.org/community/lists/users/2015/01/26127.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/01/26140.php">http://www.open-mpi.org/community/lists/users/2015/01/26140.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26141.php">http://www.open-mpi.org/community/lists/users/2015/01/26141.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26143.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26141.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26141.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26143.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26143.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
