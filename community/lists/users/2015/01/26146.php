<?
$subject_val = "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 19:06:04 2015" -->
<!-- isoreceived="20150109000604" -->
<!-- sent="Thu, 08 Jan 2015 19:05:59 -0500" -->
<!-- isosent="20150109000559" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="54AF1B67.5090507_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAG8o1y7k0oeZA_Tr+Qyip5rZzOgTOjYC=84uBYj-LZYSt9iqTA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-01-08 19:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26147.php">George Bosilca: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26145.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26143.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26147.php">George Bosilca: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26147.php">George Bosilca: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Diego
<br>
<p>*EITHER*
<br>
declare your QQ and PR (?) structure components as DOUBLE PRECISION
<br>
*OR*
<br>
keep them REAL(dp) but *fix* your &quot;dp&quot; definition, as George Bosilca 
<br>
suggested.
<br>
<p>Gus Correa
<br>
<p>On 01/08/2015 06:36 PM, Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; Dear Gus, Dear All,
</span><br>
<span class="quotelev1">&gt; so are you suggesting to use DOUBLE PRECISION and not REAL(dp)?
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9 January 2015 at 00:02, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 01/08/2015 05:50 PM, Diego Avesani wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Dear George, Dear all,
</span><br>
<span class="quotelev1">&gt;         what are the other issues?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Why did you put in selected_real_kind(15, 307) the number 307
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     That is the Fortran 90 (and later) syntax for selected_real_kind.
</span><br>
<span class="quotelev1">&gt;     The first number is the number of digits in the mantissa,
</span><br>
<span class="quotelev1">&gt;     the second is the exponent range.
</span><br>
<span class="quotelev1">&gt;     For (simpler) alternatives, see here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://fortranwiki.org/__fortran/show/Real+precision">http://fortranwiki.org/__fortran/show/Real+precision</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://fortranwiki.org/fortran/show/Real+precision">http://fortranwiki.org/fortran/show/Real+precision</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A lot of grief (and probably the segfault)
</span><br>
<span class="quotelev1">&gt;     could have been saved if you just used
</span><br>
<span class="quotelev1">&gt;     &quot;DOUBLE PRECISION&quot;, instead of REAL in your
</span><br>
<span class="quotelev1">&gt;     structure components declaration, as I suggested a while back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I hope this helps,
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 8 January 2015 at 23:24, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Please find below the corrected example. There were several
</span><br>
<span class="quotelev1">&gt;         issues
</span><br>
<span class="quotelev1">&gt;              but the most important one, which is certainly the cause of the
</span><br>
<span class="quotelev1">&gt;              segfault, is that &quot;real(dp)&quot; (with dp =
</span><br>
<span class="quotelev1">&gt;         selected_real_kind(p=16)) is
</span><br>
<span class="quotelev1">&gt;              NOT equal to MPI_DOUBLE_RECISION. For double precision you
</span><br>
<span class="quotelev1">&gt;         should
</span><br>
<span class="quotelev1">&gt;              use 15 (and not 16).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              On Thu, Jan 8, 2015 at 6:08 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;              &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  There were still some minor errors left over in the
</span><br>
<span class="quotelev1">&gt;         attached
</span><br>
<span class="quotelev1">&gt;                  program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  I strongly encourage you to use &quot;use mpi&quot; instead of
</span><br>
<span class="quotelev1">&gt;         &quot;include
</span><br>
<span class="quotelev1">&gt;                  'mpif.h'&quot; because you will get compile time errors when
</span><br>
<span class="quotelev1">&gt;         you pass
</span><br>
<span class="quotelev1">&gt;                  incorrect / forget to pass parameters to MPI
</span><br>
<span class="quotelev1">&gt;         subroutines.  When
</span><br>
<span class="quotelev1">&gt;                  I switched your program to &quot;use mpi&quot;, here's what the
</span><br>
<span class="quotelev1">&gt;         compiler
</span><br>
<span class="quotelev1">&gt;                  showed me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  1. the name &quot;MPI&quot; is reserved
</span><br>
<span class="quotelev1">&gt;                  2. need to pass displacements(1:nstruct+1) to
</span><br>
<span class="quotelev1">&gt;         mpi_type_create_struct
</span><br>
<span class="quotelev1">&gt;                  3. need to pass request(1) to mpi_isend
</span><br>
<span class="quotelev1">&gt;                  4. need to pass request(1) to mpi_wait
</span><br>
<span class="quotelev1">&gt;                  5. need to pass ierr argument to mpi_wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  1-4 are technically not correct, but the program would
</span><br>
<span class="quotelev1">&gt;         likely
</span><br>
<span class="quotelev1">&gt;                  (usually) compile/run &quot;correctly&quot; anyway.  5 is
</span><br>
<span class="quotelev1">&gt;         probably what
</span><br>
<span class="quotelev1">&gt;                  caused your segv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Attached is my copy of your program with fixes for the
</span><br>
<span class="quotelev1">&gt;                  above-mentioned issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  BTW, I missed the beginning of this thread -- I assume
</span><br>
<span class="quotelev1">&gt;         that this
</span><br>
<span class="quotelev1">&gt;                  is an artificial use of mpi_type_create_resized for the
</span><br>
<span class="quotelev1">&gt;         purposes
</span><br>
<span class="quotelev1">&gt;                  of a small example.  The specific use of it in this program
</span><br>
<span class="quotelev1">&gt;                  appears to be superfluous.
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
<span class="quotelev1">&gt;                  On Jan 8, 2015, at 4:26 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;                  &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                  &lt;mailto:gilles.gouaillardet@__iferc.org
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;                  &gt; Diego,
</span><br>
<span class="quotelev2">&gt;                  &gt;
</span><br>
<span class="quotelev2">&gt;                  &gt; yes, it works for me (at least with the v1.8 head and
</span><br>
<span class="quotelev1">&gt;         gnu compilers)
</span><br>
<span class="quotelev2">&gt;                  &gt;
</span><br>
<span class="quotelev2">&gt;                  &gt; Cheers,
</span><br>
<span class="quotelev2">&gt;                  &gt;
</span><br>
<span class="quotelev2">&gt;                  &gt; Gilles
</span><br>
<span class="quotelev2">&gt;                  &gt;
</span><br>
<span class="quotelev2">&gt;                  &gt; On 2015/01/08 17:51, Diego Avesani wrote:
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; Dear Gilles,
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; thanks again, however it does not work.
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; the program says:  &quot;SIGSEGV, segmentation fault
</span><br>
<span class="quotelev1">&gt;         occurred&quot;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; Does the program run in your case?
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; Thanks again
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; On 8 January 2015 at 03:02, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;gilles.gouaillardet_at_iferc.__org
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gilles.gouaillardet@__iferc.org
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;  Diego,
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; my bad, i should have passed displacements(1) to
</span><br>
<span class="quotelev1">&gt;         MPI_Type_create_struct
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; here is an updated version
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; (note you have to use a REQUEST integer for
</span><br>
<span class="quotelev1">&gt;         MPI_Isend and MPI_Irecv,
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; and you also have to call MPI_Wait to ensure the
</span><br>
<span class="quotelev1">&gt;         requests complete)
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; On 2015/01/08 8:23, Diego Avesani wrote:
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Dear Gilles, Dear all,
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; I'm sorry to bother you again, but I have some
</span><br>
<span class="quotelev1">&gt;         problem with send and
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; receive the struct_data.
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; I tried to send a MPI_Type_Create_Struct but I get
</span><br>
<span class="quotelev1">&gt;         a segmentation fault
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; occurred and I do not know why. The program is very
</span><br>
<span class="quotelev1">&gt;         simple, it is the old
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; one with the isend and irecv subroutines
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; (you can find it in the attachment)
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Thanks again
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; On 5 January 2015 at 15:54, Diego Avesani
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; &lt;diego.avesani_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:diego.avesani_at_gmail.__com &lt;mailto:diego.avesani_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                  &lt;diego.avesani_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:diego.avesani_at_gmail.__com &lt;mailto:diego.avesani_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;  Dear Gilles,
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Thanks, Thanks a lot.
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Now is more clear.
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Again, thanks a lot
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; _________________________________________________
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; users mailing
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:listusers_at_[hidden]&gt; &lt;mailto:listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:listusers_at_[hidden]&gt;__&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;<a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26116.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26116.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26116.php">http://www.open-mpi.org/community/lists/users/2015/01/26116.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; _________________________________________________
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;<a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26118.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26118.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26118.php">http://www.open-mpi.org/community/lists/users/2015/01/26118.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                  &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; _________________________________________________
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                  &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;<a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26124.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26124.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26124.php">http://www.open-mpi.org/community/lists/users/2015/01/26124.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;                  &gt;
</span><br>
<span class="quotelev2">&gt;                  &gt; _________________________________________________
</span><br>
<span class="quotelev2">&gt;                  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;                  &gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;                  &gt;
</span><br>
<span class="quotelev1">&gt;         Subscription:<a href="http://www.open-__mpi.org/mailman/listinfo.cgi/__users">http://www.open-__mpi.org/mailman/listinfo.cgi/__users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;                  &gt; Link to this
</span><br>
<span class="quotelev1">&gt;         post:<a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26126.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26126.php</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26126.php">http://www.open-mpi.org/community/lists/users/2015/01/26126.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  --
</span><br>
<span class="quotelev1">&gt;                  Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                  For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.cisco.com/web/__about/doing_business/legal/__cri/">http://www.cisco.com/web/__about/doing_business/legal/__cri/</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  _________________________________________________
</span><br>
<span class="quotelev1">&gt;                  users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                  Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;                  Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26127.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26127.php</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26127.php">http://www.open-mpi.org/community/lists/users/2015/01/26127.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              _________________________________________________
</span><br>
<span class="quotelev1">&gt;              users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;              Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;              Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26140.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26140.php</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26140.php">http://www.open-mpi.org/community/lists/users/2015/01/26140.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _________________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26141.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26141.php</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26141.php">http://www.open-mpi.org/community/lists/users/2015/01/26141.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26142.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26142.php</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26142.php">http://www.open-mpi.org/community/lists/users/2015/01/26142.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26143.php">http://www.open-mpi.org/community/lists/users/2015/01/26143.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26147.php">George Bosilca: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26145.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26143.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26147.php">George Bosilca: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26147.php">George Bosilca: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
