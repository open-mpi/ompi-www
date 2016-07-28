<?
$subject_val = "Re: [OMPI users] data types and alignment to word boundary";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 15:19:45 2011" -->
<!-- isoreceived="20110629191945" -->
<!-- sent="Wed, 29 Jun 2011 21:19:40 +0200" -->
<!-- isosent="20110629191940" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] data types and alignment to word boundary" -->
<!-- id="BANLkTimgNaxsCbbJO=G2-=zKXZadXtAsZA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E0B5050.7040008_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-06-29 15:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16788.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16786.php">Jeff Squyres: "Re: [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<li><strong>In reply to:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16789.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16789.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys - Thank You for your replies!
<br>
(wow : that was a rhyme! :) )
<br>
<p>I checked my structure with the offsetof macro on my laptop at home
<br>
and found the following offsets:
<br>
offs iSpeciesID:  0
<br>
offs sCapacityFile:  2
<br>
offs adGParams:  68
<br>
total size             100
<br>
so there seems to be a 2 byte gap before the double array;
<br>
and this machine seems to  prefer multiples of 4.
<br>
<p>But is this alignment problem not also a danger for heterogeneous clusters
<br>
using OpenMPI?
<br>
I guess the only portable solution is to forget about MPI Data types and
<br>
&nbsp;somehow pack or serialize the data before sending and unpack/deserialize
<br>
after receiving it.
<br>
<p>Jody
<br>
<p><p>On Wed, Jun 29, 2011 at 6:18 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have noticed on my machine that a struct which i have defined as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;short &#160;iSpeciesID;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;char &#160; sCapacityFile[SHORT_INPUT];
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;double adGParams[NUM_GPARAMS];
</span><br>
<span class="quotelev2">&gt;&gt; } tVStruct;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (where SHORT_INPUT=64 and NUM_GPARAMS=4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; has size 104 (instead of 98) whereas the corresponding MPI Datatype i
</span><br>
<span class="quotelev2">&gt;&gt; created
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;int aiLengthsT5[3] &#160; &#160; &#160; = {1, SHORT_INPUT, NUM_GPARAMS};
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;MPI_Aint aiDispsT5[3] &#160; &#160;= {0, iShortSize, iShortSize+SHORT_INPUT};
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;MPI_Datatype aTypesT5[3] = {MPI_UNSIGNED_SHORT, MPI_CHAR, MPI_DOUBLE};
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;MPI_Type_create_struct(3, aiLengthsT5, aiDispsT5, aTypesT5,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;m_dtVegetationData3);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;MPI_Type_commit(&amp;m_dtVegetationData3);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; only has length 98 (as expected). The size differences resulted in an
</span><br>
<span class="quotelev2">&gt;&gt; error when doing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;tVegetationData3 VD;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;MPI_Send(&amp;VD, 1, m_dtVegetationData3, 1, TAG_STEP_CMD, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the corresponding
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;tVegetationData3 VD;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;MPI_Recv(&amp;VD, 1, m_dtVegetationData3, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev2">&gt;&gt; TAG_STEP_CMD, MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (in fact, the last double in my array was not transmitted correctly)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that on my machine the struct was padded to a multiple of 8.
</span><br>
<span class="quotelev2">&gt;&gt; By manually adding some padding bytes to my MPI Datatype in order
</span><br>
<span class="quotelev2">&gt;&gt; to fill it up to the next multiple of 8 i could work around this problem.
</span><br>
<span class="quotelev2">&gt;&gt; (not very nice, and very probably not portable)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My question: is there a way to tell MPI to automatically use the
</span><br>
<span class="quotelev2">&gt;&gt; required padding?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Jody
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My naive guesses:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think when you create the MPI structure you can pass the
</span><br>
<span class="quotelev1">&gt; byte displacement of each structure component.
</span><br>
<span class="quotelev1">&gt; You would need to modify your aiDispsT5[3], to match the
</span><br>
<span class="quotelev1">&gt; actual memory alignment, I guess.
</span><br>
<span class="quotelev1">&gt; Yes, indeed portability may be sacrificed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is some clarification in &quot;MPI, The Complete Reference, Vol 1,
</span><br>
<span class="quotelev1">&gt; 2nd Ed, Marc Snir et al.&quot;.
</span><br>
<span class="quotelev1">&gt; Section 3.2 and 3.3 (general on type map &amp; type signature).
</span><br>
<span class="quotelev1">&gt; Section 3.4.8 MPI_Type_create_struct (examples, specially 3.13).
</span><br>
<span class="quotelev1">&gt; Section 3.10, on portability, doesn't seem to guarantee portability of
</span><br>
<span class="quotelev1">&gt; MPI_Type_Struct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="16788.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16786.php">Jeff Squyres: "Re: [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<li><strong>In reply to:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16789.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16789.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
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
