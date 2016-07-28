<?
$subject_val = "Re: [OMPI users] data types and alignment to word boundary";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 15:52:55 2011" -->
<!-- isoreceived="20110629195255" -->
<!-- sent="Wed, 29 Jun 2011 15:52:46 -0400" -->
<!-- isosent="20110629195246" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] data types and alignment to word boundary" -->
<!-- id="4E0B828E.5000700_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BANLkTimgNaxsCbbJO=G2-=zKXZadXtAsZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] data types and alignment to word boundary<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 15:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16790.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Previous message:</strong> <a href="16788.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16787.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16792.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16792.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody
<br>
<p>jody wrote:
<br>
<span class="quotelev1">&gt; Guys - Thank You for your replies!
</span><br>
<span class="quotelev1">&gt; (wow : that was a rhyme! :) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked my structure with the offsetof macro on my laptop at home
</span><br>
<span class="quotelev1">&gt; and found the following offsets:
</span><br>
<span class="quotelev1">&gt; offs iSpeciesID:  0
</span><br>
<span class="quotelev1">&gt; offs sCapacityFile:  2
</span><br>
<span class="quotelev1">&gt; offs adGParams:  68
</span><br>
<span class="quotelev1">&gt; total size             100
</span><br>
<span class="quotelev1">&gt; so there seems to be a 2 byte gap before the double array;
</span><br>
<span class="quotelev1">&gt; and this machine seems to  prefer multiples of 4.
</span><br>
<p>A 32-bit laptop perhaps?
<br>
I would guess the offsets are machine and compiler dependent,
<br>
and optimization flags may matter.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But is this alignment problem not also a danger for heterogeneous clusters
</span><br>
<span class="quotelev1">&gt; using OpenMPI?
</span><br>
<p>Do you mean danger or excitement?  :)
<br>
If the doubles and shorts and long longs have different sizes on
<br>
each of two heterogeneous nodes, what could MPI do about them anyway?
<br>
<p><span class="quotelev1">&gt; I guess the only portable solution is to forget about MPI Data types and
</span><br>
<span class="quotelev1">&gt;  somehow pack or serialize the data before sending and unpack/deserialize
</span><br>
<span class="quotelev1">&gt; after receiving it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Jody:
<br>
Jeff may have a heart attack when he reads what you just wrote about
<br>
the usefulness of MPI data types vs. packing/unpacking.  :)
<br>
<p>Guessing away, I would think you are focusing on memory/space savings,
<br>
rather than on performance.
<br>
Maybe memory/space savings is part of your code requirements.
<br>
<p>However, have you tried instead to explicitly pad your structure,
<br>
say, to a multiple of the size of your largest intrinsic type,
<br>
which double in your case, or perhaps to a multiple of the natural
<br>
memory alignment boundary that your computer/compiler likes (which may
<br>
be 8 bytes, 16 bytes, 128 bytes, whatever).
<br>
I never did this comparison, but I would guess the padded version
<br>
of the code would run faster (if compiled with '-align' type of flag
<br>
and friends).
<br>
<p>Anyway, C is a foreign language here, I must say.
<br>
<p>Just my unwarranted guesses.
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 29, 2011 at 6:18 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have noticed on my machine that a struct which i have defined as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef struct {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    short  iSpeciesID;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char   sCapacityFile[SHORT_INPUT];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    double adGParams[NUM_GPARAMS];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } tVStruct;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (where SHORT_INPUT=64 and NUM_GPARAMS=4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has size 104 (instead of 98) whereas the corresponding MPI Datatype i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; created
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int aiLengthsT5[3]       = {1, SHORT_INPUT, NUM_GPARAMS};
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Aint aiDispsT5[3]    = {0, iShortSize, iShortSize+SHORT_INPUT};
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Datatype aTypesT5[3] = {MPI_UNSIGNED_SHORT, MPI_CHAR, MPI_DOUBLE};
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Type_create_struct(3, aiLengthsT5, aiDispsT5, aTypesT5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;m_dtVegetationData3);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Type_commit(&amp;m_dtVegetationData3);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only has length 98 (as expected). The size differences resulted in an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error when doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    tVegetationData3 VD;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Send(&amp;VD, 1, m_dtVegetationData3, 1, TAG_STEP_CMD, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the corresponding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    tVegetationData3 VD;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Recv(&amp;VD, 1, m_dtVegetationData3, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TAG_STEP_CMD, MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (in fact, the last double in my array was not transmitted correctly)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that on my machine the struct was padded to a multiple of 8.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By manually adding some padding bytes to my MPI Datatype in order
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to fill it up to the next multiple of 8 i could work around this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (not very nice, and very probably not portable)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question: is there a way to tell MPI to automatically use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required padding?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My naive guesses:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think when you create the MPI structure you can pass the
</span><br>
<span class="quotelev2">&gt;&gt; byte displacement of each structure component.
</span><br>
<span class="quotelev2">&gt;&gt; You would need to modify your aiDispsT5[3], to match the
</span><br>
<span class="quotelev2">&gt;&gt; actual memory alignment, I guess.
</span><br>
<span class="quotelev2">&gt;&gt; Yes, indeed portability may be sacrificed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is some clarification in &quot;MPI, The Complete Reference, Vol 1,
</span><br>
<span class="quotelev2">&gt;&gt; 2nd Ed, Marc Snir et al.&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Section 3.2 and 3.3 (general on type map &amp; type signature).
</span><br>
<span class="quotelev2">&gt;&gt; Section 3.4.8 MPI_Type_create_struct (examples, specially 3.13).
</span><br>
<span class="quotelev2">&gt;&gt; Section 3.10, on portability, doesn't seem to guarantee portability of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_Struct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16790.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Previous message:</strong> <a href="16788.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16787.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16792.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16792.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
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
