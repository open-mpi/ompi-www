<?
$subject_val = "[OMPI devel] [bugs] OSC-related datatype bugs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 20:22:28 2013" -->
<!-- isoreceived="20130905002228" -->
<!-- sent="Thu, 5 Sep 2013 00:22:09 +0000" -->
<!-- isosent="20130905002209" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [bugs] OSC-related datatype bugs" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC190A701D_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] [bugs] OSC-related datatype bugs<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 20:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12867.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I and my colleague found 3 OSC-related bugs in OMPI datatype code.
<br>
One for trunk and v1.6/v1.7 branches, and two for only v1.6 branch.
<br>
<p>(1) OMPI_DATATYPE_ALIGN_PTR should be placed after memcpy
<br>
<p>&nbsp;&nbsp;Last year I reported a bug in OMPI datatype code and it was
<br>
&nbsp;&nbsp;fixed in r25721. But the fix was not correct and the problem
<br>
&nbsp;&nbsp;still exists.
<br>
<p>&nbsp;&nbsp;My reported bug and the patch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2012/01/10207.php">http://www.open-mpi.org/community/lists/devel/2012/01/10207.php</a>
<br>
&nbsp;&nbsp;r25721:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/25721">https://svn.open-mpi.org/trac/ompi/changeset/25721</a>
<br>
<p>&nbsp;&nbsp;OMPI_DATATYPE_ALIGN_PTR should be placed after memcpy
<br>
&nbsp;&nbsp;in __ompi_datatype_pack_description function, like the
<br>
&nbsp;&nbsp;patch attached in my previous mail.
<br>
<p>&nbsp;&nbsp;I didn't confirm r25721 well when it was committed, sorry.
<br>
<p>&nbsp;&nbsp;The attached file datatype-align.patch is the correct patch
<br>
&nbsp;&nbsp;for the latest trunk. This fix should be applied to trunk
<br>
&nbsp;&nbsp;and v1.7/v1.6 branches.
<br>
<p>(2) r28790 should be merged into v1.6
<br>
<p>&nbsp;&nbsp;The trunk changeset r28790 had been merged into v1.7 in r28790
<br>
&nbsp;&nbsp;(ticket #3673), but it is not yet merged into v1.6.
<br>
<p>&nbsp;&nbsp;I confirmed the problem reported last month also occurs in v1.6
<br>
&nbsp;&nbsp;and can be fixed by merging r28790 into v1.6.
<br>
<p>&nbsp;&nbsp;The original reported problem:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2013/07/12595.php">http://www.open-mpi.org/community/lists/devel/2013/07/12595.php</a>
<br>
<p>(3) OMPI_DATATYPE_MAX_PREDEFINED should be 46 for v1.6
<br>
<p>&nbsp;&nbsp;In v1.6 branch, ompi/datatype/ompi_datatype.h defines
<br>
&nbsp;&nbsp;OMPI_DATATYPE_MAX_PREDEFINED as 45 but the number of
<br>
&nbsp;&nbsp;predefined datatypes is 46 and the last predefined
<br>
&nbsp;&nbsp;datatype ID (OMPI_DATATYPE_MPI_UB) is 45.
<br>
<p>&nbsp;&nbsp;OMPI_DATATYPE_MAX_PREDEFINED is used as the number of
<br>
&nbsp;&nbsp;predefined datatypes or maximum predefined datatype ID + 1,
<br>
&nbsp;&nbsp;not the maximum predefined datatype ID, like below.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi/op/op.c:79:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// the number of predefined datatypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ompi_op_ddt_map[OMPI_DATATYPE_MAX_PREDEFINED];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi/datatype/ompi_datatype_args.c:573:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// maximum predefined datatype ID + 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert( data_id &lt; OMPI_DATATYPE_MAX_PREDEFINED );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi/datatype/ompi_datatype_args.c:492:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// first unused datatype ID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// (= maximum predefined datatype ID + 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int next_index = OMPI_DATATYPE_MAX_PREDEFINED;
<br>
<p>&nbsp;&nbsp;So its value should be 46 for v1.6.
<br>
<p>&nbsp;&nbsp;Actually, at r28932 in trunk, one datatype (MPI_Count) is
<br>
&nbsp;&nbsp;added but OMPI_DATATYPE_MAX_PREDEFINED is increased
<br>
&nbsp;&nbsp;from 45 to 47. So current trunk is correct.
<br>
<p>&nbsp;&nbsp;This bug causes a random error, like SEGV, &quot;Error recreating
<br>
&nbsp;&nbsp;datatype&quot;, or &quot;received packet for Window with unknown type&quot;,
<br>
&nbsp;&nbsp;if you use MPI_UB in OSC, like the attached program osc_ub.c.
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>

<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12866/datatype-align.patch">datatype-align.patch</a>
</ul>
<!-- attachment="datatype-align.patch" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12866/osc_ub.c">osc_ub.c</a>
</ul>
<!-- attachment="osc_ub.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12867.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
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
