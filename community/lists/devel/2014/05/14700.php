<?
$subject_val = "[OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 09:24:21 2014" -->
<!-- isoreceived="20140507132421" -->
<!-- sent="Wed, 7 May 2014 17:24:20 +0400" -->
<!-- isosent="20140507132420" -->
<!-- name="Elena Elkina" -->
<!-- email="elena.elkina_at_[hidden]" -->
<!-- subject="[OMPI devel] regression with derived datatypes" -->
<!-- id="CANhOtjZ3cVffNb4c1KHW8WQq-pscGKMQomTE3Z-qtrpMye74Tw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] regression with derived datatypes<br>
<strong>From:</strong> Elena Elkina (<em>elena.elkina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 09:24:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14699.php">Gilles Gouaillardet: "[OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've found that
<br>
commit b531973419a056696e6f88d813769aa4f1f1aee6 doesn't work
<br>
Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Date:   Tue Apr 22 19:48:56 2014 +0000
<br>
<p>caused new failures with derived datatypes. Collectives return incorrect
<br>
results.
<br>
But it doesn't reproduce on a regular manner. Need many iterations to
<br>
reproduce.
<br>
Examples are:
<br>
- gather with short_int datatype in amount of 20000 and in-place is on,
<br>
- allgather with a random generated derived datatype in amount of 20000.
<br>
<p>It leads to the following output (this is a little fragment):
<br>
<p>&nbsp;../../../opal/datatype/opal_datatype_position.c:72
<br>
Pointer 0x7fff8119c11d size 16 is outside [0x7fff80cd6040,0x7fff80f4702d]
<br>
for
<br>
&nbsp;base ptr 0x7fff80cd6040 count 40000 and data
<br>
&nbsp;Datatype 0xa72080[] size 38 align 16 id 0 length 7 used 6
<br>
true_lb 0 true_ub 45 (true_extent 45) lb 0 ub 64 (extent 64)
<br>
nbElems 6 loops 0 flags 104 (commited )-c-----GD--[---][---]
<br>
&nbsp;&nbsp;&nbsp;contain OPAL_INT2 OPAL_INT4 OPAL_UINT8 OPAL_FLOAT4 OPAL_FLOAT16
<br>
--C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0x0 (0) extent 8 (size 8)
<br>
--C---P-D--[---][---]    OPAL_FLOAT4 count 1 disp 0xa (10) extent 4 (size 4)
<br>
--C---P-D--[---][---]      OPAL_INT4 count 1 disp 0xe (14) extent 4 (size 4)
<br>
--C---P-D--[---][---]      OPAL_INT2 count 1 disp 0x17 (23) extent 2 (size
<br>
2)
<br>
--C---P-D--[---][---]   OPAL_FLOAT16 count 1 disp 0x19 (25) extent 16 (size
<br>
16)
<br>
--C---P-D--[---][---]      OPAL_INT4 count 1 disp 0x29 (41) extent 4 (size
<br>
4)
<br>
-------G---[---][---]  OPAL_END_LOOP prev 6 elements first elem
<br>
displacement 0 size of data 38
<br>
Optimized description
<br>
-cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0x0 (0) extent 8 (size 8)
<br>
-cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0xa (10) extent 1 (size 8)
<br>
-cC---P-DB-[---][---]     OPAL_UINT1 count 22 disp 0x17 (23) extent 1 (size
<br>
22)
<br>
-------G---[---][---]  OPAL_END_LOOP prev 3 elements first elem
<br>
displacement 0 size of data 38
<br>
<p>Best regards,
<br>
Elena
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14700/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14699.php">Gilles Gouaillardet: "[OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
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
