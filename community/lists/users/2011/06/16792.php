<?
$subject_val = "Re: [OMPI users] data types and alignment to word boundary";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 02:36:47 2011" -->
<!-- isoreceived="20110630063647" -->
<!-- sent="Thu, 30 Jun 2011 08:36:40 +0200" -->
<!-- isosent="20110630063640" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] data types and alignment to word boundary" -->
<!-- id="BANLkTimbgcb5roYXJt1SF19gZy9J2PBvAw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E0B828E.5000700_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 02:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16791.php">Gus Correa: "Re: [OMPI users] Problem in static linking and usage of openmpi	with icc (and gcc)"</a>
<li><strong>In reply to:</strong> <a href="16789.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16788.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OOOps - i did not intend to cause any heart attacks =:)
<br>
<p>Perhaps my reaction was a bit exaggerated, but i spent quite some time
<br>
to figure out why i didn't receive the same numbers i sent off....
<br>
And, after reading section 3.1 of the MPI complete reference i must say
<br>
that i would have been warned if i had read that chapter more carefully...
<br>
<p>Fortunately, i don't have to send around a lot of these structs,
<br>
so i will do the padding (using the offsetof macro Dave recommended).
<br>
<p>Thanks again
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On Wed, Jun 29, 2011 at 9:52 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Guys - Thank You for your replies!
</span><br>
<span class="quotelev2">&gt;&gt; (wow : that was a rhyme! :) )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checked my structure with the offsetof macro on my laptop at home
</span><br>
<span class="quotelev2">&gt;&gt; and found the following offsets:
</span><br>
<span class="quotelev2">&gt;&gt; offs iSpeciesID: &#160;0
</span><br>
<span class="quotelev2">&gt;&gt; offs sCapacityFile: &#160;2
</span><br>
<span class="quotelev2">&gt;&gt; offs adGParams: &#160;68
</span><br>
<span class="quotelev2">&gt;&gt; total size &#160; &#160; &#160; &#160; &#160; &#160; 100
</span><br>
<span class="quotelev2">&gt;&gt; so there seems to be a 2 byte gap before the double array;
</span><br>
<span class="quotelev2">&gt;&gt; and this machine seems to &#160;prefer multiples of 4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A 32-bit laptop perhaps?
</span><br>
<span class="quotelev1">&gt; I would guess the offsets are machine and compiler dependent,
</span><br>
<span class="quotelev1">&gt; and optimization flags may matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But is this alignment problem not also a danger for heterogeneous clusters
</span><br>
<span class="quotelev2">&gt;&gt; using OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you mean danger or excitement? &#160;:)
</span><br>
<span class="quotelev1">&gt; If the doubles and shorts and long longs have different sizes on
</span><br>
<span class="quotelev1">&gt; each of two heterogeneous nodes, what could MPI do about them anyway?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess the only portable solution is to forget about MPI Data types and
</span><br>
<span class="quotelev2">&gt;&gt; &#160;somehow pack or serialize the data before sending and unpack/deserialize
</span><br>
<span class="quotelev2">&gt;&gt; after receiving it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody:
</span><br>
<span class="quotelev1">&gt; Jeff may have a heart attack when he reads what you just wrote about
</span><br>
<span class="quotelev1">&gt; the usefulness of MPI data types vs. packing/unpacking. &#160;:)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Guessing away, I would think you are focusing on memory/space savings,
</span><br>
<span class="quotelev1">&gt; rather than on performance.
</span><br>
<span class="quotelev1">&gt; Maybe memory/space savings is part of your code requirements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, have you tried instead to explicitly pad your structure,
</span><br>
<span class="quotelev1">&gt; say, to a multiple of the size of your largest intrinsic type,
</span><br>
<span class="quotelev1">&gt; which double in your case, or perhaps to a multiple of the natural
</span><br>
<span class="quotelev1">&gt; memory alignment boundary that your computer/compiler likes (which may
</span><br>
<span class="quotelev1">&gt; be 8 bytes, 16 bytes, 128 bytes, whatever).
</span><br>
<span class="quotelev1">&gt; I never did this comparison, but I would guess the padded version
</span><br>
<span class="quotelev1">&gt; of the code would run faster (if compiled with '-align' type of flag
</span><br>
<span class="quotelev1">&gt; and friends).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, C is a foreign language here, I must say.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my unwarranted guesses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 29, 2011 at 6:18 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have noticed on my machine that a struct which i have defined as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; typedef struct {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; short &#160;iSpeciesID;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; char &#160; sCapacityFile[SHORT_INPUT];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; double adGParams[NUM_GPARAMS];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; } tVStruct;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (where SHORT_INPUT=64 and NUM_GPARAMS=4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has size 104 (instead of 98) whereas the corresponding MPI Datatype i
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; created
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; int aiLengthsT5[3] &#160; &#160; &#160; = {1, SHORT_INPUT, NUM_GPARAMS};
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; MPI_Aint aiDispsT5[3] &#160; &#160;= {0, iShortSize, iShortSize+SHORT_INPUT};
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; MPI_Datatype aTypesT5[3] = {MPI_UNSIGNED_SHORT, MPI_CHAR, MPI_DOUBLE};
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; MPI_Type_create_struct(3, aiLengthsT5, aiDispsT5, aTypesT5,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp;m_dtVegetationData3);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; MPI_Type_commit(&amp;m_dtVegetationData3);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only has length 98 (as expected). The size differences resulted in an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error when doing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; tVegetationData3 VD;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; MPI_Send(&amp;VD, 1, m_dtVegetationData3, 1, TAG_STEP_CMD,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and the corresponding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; tVegetationData3 VD;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; MPI_Recv(&amp;VD, 1, m_dtVegetationData3, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TAG_STEP_CMD, MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (in fact, the last double in my array was not transmitted correctly)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It seems that on my machine the struct was padded to a multiple of 8.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By manually adding some padding bytes to my MPI Datatype in order
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to fill it up to the next multiple of 8 i could work around this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (not very nice, and very probably not portable)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My question: is there a way to tell MPI to automatically use the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; required padding?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My naive guesses:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think when you create the MPI structure you can pass the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; byte displacement of each structure component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You would need to modify your aiDispsT5[3], to match the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actual memory alignment, I guess.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, indeed portability may be sacrificed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is some clarification in &quot;MPI, The Complete Reference, Vol 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2nd Ed, Marc Snir et al.&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Section 3.2 and 3.3 (general on type map &amp; type signature).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Section 3.4.8 MPI_Type_create_struct (examples, specially 3.13).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Section 3.10, on portability, doesn't seem to guarantee portability of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Type_Struct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16791.php">Gus Correa: "Re: [OMPI users] Problem in static linking and usage of openmpi	with icc (and gcc)"</a>
<li><strong>In reply to:</strong> <a href="16789.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16788.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
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
