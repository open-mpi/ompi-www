<?
$subject_val = "[OMPI devel] bug in opal_generic_simple_pack_function()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 05:41:45 2013" -->
<!-- isoreceived="20131125104145" -->
<!-- sent="Mon, 25 Nov 2013 11:40:07 +0100" -->
<!-- isosent="20131125104007" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] bug in opal_generic_simple_pack_function()" -->
<!-- id="52932907.2080107_at_bull.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] bug in opal_generic_simple_pack_function()<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 05:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13322.php">Solibakke Per Bjarte: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13320.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Reply:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm currently working on a bug occuring at the client site with openmpi 
<br>
when calling MPI_Sendreceive() on datatypes built by the application.
<br>
I think I've found where the bug comes from (it is located in 
<br>
opal_generic_simple_pack_function() - file 
<br>
opal/datatype/opal_datatype_pack.c). But this code is so complicated 
<br>
that I'm more than unsure of my fix. What I can say is that it fixes 
<br>
things for me, but I need some advices from the datatypes specialists.
<br>
<p>---------------
<br>
<p>You will find in attachment the reproducer provided by the client, as 
<br>
well as the resulting output.
<br>
datatypes.c : reproducer
<br>
to run the binary: salloc --exclusive -p B510 -N 1 -n 1 mpirun ./datatypes
<br>
trc_ko: traces got without the patch applied
<br>
trc_ok: traces got with the patch applied.
<br>
<p>---------------
<br>
<p>The proposed patch is the following: (Note that the very first change in 
<br>
this patch was enough in my case, but I thought all the &quot;source_base&quot; 
<br>
settings should follow this model.)
<br>
<p>-------------------------
<br>
opal_generic_simple_pack_function: add the datatype lb when progressing 
<br>
in the input buffer
<br>
<p>diff -r cb23c2f07e1f opal/datatype/opal_datatype_pack.c
<br>
--- a/opal/datatype/opal_datatype_pack.c        Sun Nov 24 17:06:51 2013 
<br>
+0000
<br>
+++ b/opal/datatype/opal_datatype_pack.c        Mon Nov 25 10:48:00 2013 
<br>
+0100
<br>
@@ -301,7 +301,7 @@ opal_generic_simple_pack_function( opal_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PACK_PREDEFINED_DATATYPE( pConvertor, pElem, count_desc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source_base, destination, 
<br>
iov_len_local );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 0 == count_desc ) {  /* completed */
<br>
-                    source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
<br>
+                    source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + 
<br>
pData-&gt;lb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pos_desc++;  /* advance to the next data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UPDATE_INTERNAL_COUNTERS( description, pos_desc, 
<br>
pElem, count_desc );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
@@ -333,7 +333,7 @@ opal_generic_simple_pack_function( opal_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pStack-&gt;disp += 
<br>
description[pStack-&gt;index].loop.extent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
<br>
+                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + 
<br>
pData-&gt;lb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UPDATE_INTERNAL_COUNTERS( description, pos_desc, 
<br>
pElem, count_desc );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DO_DEBUG( opal_output( 0, &quot;pack new_loop count %d 
<br>
stack_pos %d pos_desc %d disp %ld space %lu\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int)pStack-&gt;count, 
<br>
pConvertor-&gt;stack_pos, pos_desc, (long)pStack-&gt;disp, (unsigned 
<br>
long)iov_len_local ); );
<br>
@@ -354,7 +354,7 @@ opal_generic_simple_pack_function( opal_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pStack-&gt;disp + local_disp);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pos_desc++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update_loop_description:  /* update the current state */
<br>
-                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
<br>
+                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + 
<br>
pData-&gt;lb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UPDATE_INTERNAL_COUNTERS( description, pos_desc, 
<br>
pElem, count_desc );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DDT_DUMP_STACK( pConvertor-&gt;pStack, 
<br>
pConvertor-&gt;stack_pos, pElem, &quot;advance loop&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
@@ -374,7 +374,7 @@ opal_generic_simple_pack_function( opal_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* I complete an element, next step I should go to the next one */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PUSH_STACK( pStack, pConvertor-&gt;stack_pos, pos_desc, 
<br>
OPAL_DATATYPE_INT8, count_desc,
<br>
-                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf );
<br>
+                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf - 
<br>
pData-&gt;lb );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DO_DEBUG( opal_output( 0, &quot;pack save stack stack_pos %d pos_desc 
<br>
%d count_desc %d disp %ld\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pConvertor-&gt;stack_pos, pStack-&gt;index, 
<br>
(int)pStack-&gt;count, (long)pStack-&gt;disp ); );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>-------------------------------
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
Nadia Derbey
Bull, Architect of an Open World
<a href="http://www.bull.com">http://www.bull.com</a>
</pre>
<p>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13321/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13321/datatypes.c">datatypes.c</a>
</ul>
<!-- attachment="datatypes.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13321/trc_ko">trc_ko</a>
</ul>
<!-- attachment="trc_ko" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13321/trc_ok">trc_ok</a>
</ul>
<!-- attachment="trc_ok" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13322.php">Solibakke Per Bjarte: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13320.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Reply:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
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
