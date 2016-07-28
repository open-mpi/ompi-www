<?
$subject_val = "Re: [OMPI users] data types and alignment to word boundary";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 15:33:34 2011" -->
<!-- isoreceived="20110629193334" -->
<!-- sent="Wed, 29 Jun 2011 15:33:25 -0400" -->
<!-- isosent="20110629193325" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] data types and alignment to word boundary" -->
<!-- id="4E0B7E05.5080602_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 15:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16789.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16787.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<span class="quotelev1">&gt; jody wrote:
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
<span class="quotelev2">&gt;&gt;     short  iSpeciesID;
</span><br>
<span class="quotelev2">&gt;&gt;     char   sCapacityFile[SHORT_INPUT];
</span><br>
<span class="quotelev2">&gt;&gt;     double adGParams[NUM_GPARAMS];
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
<span class="quotelev2">&gt;&gt;     int aiLengthsT5[3]       = {1, SHORT_INPUT, NUM_GPARAMS};
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Aint aiDispsT5[3]    = {0, iShortSize, iShortSize+SHORT_INPUT};
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Datatype aTypesT5[3] = {MPI_UNSIGNED_SHORT, MPI_CHAR, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DOUBLE};
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Type_create_struct(3, aiLengthsT5, aiDispsT5, aTypesT5,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;m_dtVegetationData3);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Type_commit(&amp;m_dtVegetationData3);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; only has length 98 (as expected). The size differences resulted in an
</span><br>
<span class="quotelev2">&gt;&gt; error when doing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     tVegetationData3 VD;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Send(&amp;VD, 1, m_dtVegetationData3, 1, TAG_STEP_CMD, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the corresponding
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     tVegetationData3 VD;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Recv(&amp;VD, 1, m_dtVegetationData3, MPI_ANY_SOURCE,
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
<span class="quotelev2">&gt;&gt;   Jody
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
<p>Hi Jody
<br>
<p>How about compiling the program with  -fpack-struct ?
<br>
<p>This is assuming you're using gcc.
<br>
Or use an equivalent flag if using another compiler.
<br>
I think in icc it is -noalign,
<br>
and pgcc may be -Mnodalign -Mnollalign.
<br>
See man gcc/icc/pgcc.
<br>
Code won't be optimal, compatible, etc,
<br>
which may be a price too high to pay to squeeze a
<br>
structure in smallest amount of memory possible.
<br>
<p>Also, check if the 8-byte alignment you see
<br>
is hidden behind other general optimization flags.
<br>
<p>**
<br>
How about this 'alignment-aware-memory-wasteful' alternative:
<br>
<p>typedef struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;short  iSpeciesID;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;short[3]  dummy; /* just padding */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char   sCapacityFile[SHORT_INPUT];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double adGParams[NUM_GPARAMS];
<br>
&nbsp;&nbsp;} tVStruct;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int aiLengthsT5[4]       = {1, 3, SHORT_INPUT, NUM_GPARAMS};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint aiDispsT5[4]    = {0, iShortSize, 4*iShortSize, 
<br>
4*iShortSize+SHORT_INPUT};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype aTypesT5[4] = {MPI_UNSIGNED_SHORT, 
<br>
MPI_UNSIGNED_SHORT, MPI_CHAR, MPI_DOUBLE};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_create_struct(4, aiLengthsT5, aiDispsT5, aTypesT5,
<br>
&nbsp;&nbsp;&amp;m_dtVegetationData3);
<br>
MPI_Type_commit(&amp;m_dtVegetationData3);
<br>
<p>Maybe replacing some of the 3s and 4s above by a preprocessor macro,
<br>
say PAD_SIZE (=3), and (PAD_SIZE+1), to be able to adjust for other
<br>
choices of SHORT_INPUT.
<br>
<p>Would it be viable?
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16789.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16787.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
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
