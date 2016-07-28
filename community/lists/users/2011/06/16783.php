<?
$subject_val = "Re: [OMPI users] data types and alignment to word boundary";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 11:56:54 2011" -->
<!-- isoreceived="20110629155654" -->
<!-- sent="Wed, 29 Jun 2011 11:56:48 -0400" -->
<!-- isosent="20110629155648" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] data types and alignment to word boundary" -->
<!-- id="69255DEF-F0CF-4C91-A7C1-C45BDFB2CF06_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimh1Mm7TZ=aqrqWoLR35hsQ5vjMsw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 11:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16784.php">Dave Goodell: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16782.php">jody: "[OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16782.php">jody: "[OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16784.php">Dave Goodell: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16784.php">Dave Goodell: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's probably an alignment gap between the short and char array, and possibly an alignment gap between the char array and the double array (depending on the value of SHORT_INPUT and your architecture).
<br>
<p>So for your displacements, you should probably actually measure what the displacements are instead of using sizeof(short), for example.
<br>
<p>tVStruct foo;
<br>
aiDispsT5[0] = 0;
<br>
aiDispsT5[0] = ((char*) &amp;(foo.sCapacityFile) - (char*) &amp;foo);
<br>
<p>(I just typed that in my email client and didn't verify it; pardon typos)
<br>
<p>On Jun 29, 2011, at 11:42 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have noticed on my machine that a struct which i have defined as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; typedef struct {
</span><br>
<span class="quotelev1">&gt;    short  iSpeciesID;
</span><br>
<span class="quotelev1">&gt;    char   sCapacityFile[SHORT_INPUT];
</span><br>
<span class="quotelev1">&gt;    double adGParams[NUM_GPARAMS];
</span><br>
<span class="quotelev1">&gt; } tVStruct;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (where SHORT_INPUT=64 and NUM_GPARAMS=4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; has size 104 (instead of 98) whereas the corresponding MPI Datatype i created
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    int aiLengthsT5[3]       = {1, SHORT_INPUT, NUM_GPARAMS};
</span><br>
<span class="quotelev1">&gt;    MPI_Aint aiDispsT5[3]    = {0, iShortSize, iShortSize+SHORT_INPUT};
</span><br>
<span class="quotelev1">&gt;    MPI_Datatype aTypesT5[3] = {MPI_UNSIGNED_SHORT, MPI_CHAR, MPI_DOUBLE};
</span><br>
<span class="quotelev1">&gt;    MPI_Type_create_struct(3, aiLengthsT5, aiDispsT5, aTypesT5,
</span><br>
<span class="quotelev1">&gt; &amp;m_dtVegetationData3);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_commit(&amp;m_dtVegetationData3);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; only has length 98 (as expected). The size differences resulted in an
</span><br>
<span class="quotelev1">&gt; error when doing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    tVegetationData3 VD;
</span><br>
<span class="quotelev1">&gt;    MPI_Send(&amp;VD, 1, m_dtVegetationData3, 1, TAG_STEP_CMD, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the corresponding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    tVegetationData3 VD;
</span><br>
<span class="quotelev1">&gt;    MPI_Recv(&amp;VD, 1, m_dtVegetationData3, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev1">&gt; TAG_STEP_CMD, MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (in fact, the last double in my array was not transmitted correctly)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that on my machine the struct was padded to a multiple of 8.
</span><br>
<span class="quotelev1">&gt; By manually adding some padding bytes to my MPI Datatype in order
</span><br>
<span class="quotelev1">&gt; to fill it up to the next multiple of 8 i could work around this problem.
</span><br>
<span class="quotelev1">&gt; (not very nice, and very probably not portable)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question: is there a way to tell MPI to automatically use the
</span><br>
<span class="quotelev1">&gt; required padding?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16784.php">Dave Goodell: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16782.php">jody: "[OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16782.php">jody: "[OMPI users] data types and alignment to word boundary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16784.php">Dave Goodell: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16784.php">Dave Goodell: "Re: [OMPI users] data types and alignment to word boundary"</a>
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
