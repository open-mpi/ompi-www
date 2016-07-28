<?
$subject_val = "[OMPI users] data types and alignment to word boundary";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 11:42:48 2011" -->
<!-- isoreceived="20110629154248" -->
<!-- sent="Wed, 29 Jun 2011 17:42:44 +0200" -->
<!-- isosent="20110629154244" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] data types and alignment to word boundary" -->
<!-- id="BANLkTimh1Mm7TZ=aqrqWoLR35hsQ5vjMsw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] data types and alignment to word boundary<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 11:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16781.php">rohan nigam: "[OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have noticed on my machine that a struct which i have defined as
<br>
<p>typedef struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;short  iSpeciesID;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char   sCapacityFile[SHORT_INPUT];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double adGParams[NUM_GPARAMS];
<br>
} tVStruct;
<br>
<p>(where SHORT_INPUT=64 and NUM_GPARAMS=4)
<br>
<p>has size 104 (instead of 98) whereas the corresponding MPI Datatype i created
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int aiLengthsT5[3]       = {1, SHORT_INPUT, NUM_GPARAMS};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint aiDispsT5[3]    = {0, iShortSize, iShortSize+SHORT_INPUT};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype aTypesT5[3] = {MPI_UNSIGNED_SHORT, MPI_CHAR, MPI_DOUBLE};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_create_struct(3, aiLengthsT5, aiDispsT5, aTypesT5,
<br>
&amp;m_dtVegetationData3);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;m_dtVegetationData3);
<br>
<p>only has length 98 (as expected). The size differences resulted in an
<br>
error when doing
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;tVegetationData3 VD;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;VD, 1, m_dtVegetationData3, 1, TAG_STEP_CMD, MPI_COMM_WORLD);
<br>
<p>and the corresponding
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;tVegetationData3 VD;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;VD, 1, m_dtVegetationData3, MPI_ANY_SOURCE,
<br>
TAG_STEP_CMD, MPI_COMM_WORLD, &amp;st);
<br>
<p>(in fact, the last double in my array was not transmitted correctly)
<br>
<p>It seems that on my machine the struct was padded to a multiple of 8.
<br>
By manually adding some padding bytes to my MPI Datatype in order
<br>
to fill it up to the next multiple of 8 i could work around this problem.
<br>
(not very nice, and very probably not portable)
<br>
<p><p>My question: is there a way to tell MPI to automatically use the
<br>
required padding?
<br>
<p><p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16781.php">rohan nigam: "[OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16783.php">Jeff Squyres: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Reply:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
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
