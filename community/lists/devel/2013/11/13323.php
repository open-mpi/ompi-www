<?
$subject_val = "Re: [OMPI devel] bug in opal_generic_simple_pack_function()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 07:36:12 2013" -->
<!-- isoreceived="20131125123612" -->
<!-- sent="Mon, 25 Nov 2013 13:36:04 +0100" -->
<!-- isosent="20131125123604" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in opal_generic_simple_pack_function()" -->
<!-- id="86159EFC-807B-43C3-9BB7-F8A207C1B410_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="52932907.2080107_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in opal_generic_simple_pack_function()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 07:36:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13324.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13322.php">Solibakke Per Bjarte: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13321.php">Nadia Derbey: "[OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Reply:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nadia,
<br>
<p>Which version of Open MPI are you using? I tried with the nightly r29751, the current 1.6 and the current 1.7 and I __always__ got the expected output.
<br>
<p>There is a simple way to show what the datatype engine is doing. You can set the MCA parameters
<br>
mpi_ddt_unpack_debug and mpi_ddt_pack_debug to get more info. If you only want to see how the datatype looks after the MPI_Commit step you can call directly ompi_datatype_dump(ddt). This will show the internals of the datatype, converted in predefined types.
<br>
<p>As an example I took the application you provided and build the following picture of what is send and what is received (original buffer, send datatype, packed buffer, recv datatype, resulting buffer).
<br>
<p><p><p>Now using the ompi_datatype_dump, I see the recv and the send datatypes as:
<br>
<p>-cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x0 (0) extent 1 (size 8)
<br>
-cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x10 (16) extent 1 (size 8)
<br>
-cC&#151;P-DB-[&#151;][&#151;]           OPAL_INT4 count 4 disp 0x30 (48) extent 4 (size 16)
<br>
&#151;&#151;&#151;&#151;&#151;&#151;&#151;-G&#151;[&#151;][&#151;]          OPAL_END_LOOP pref 3 elements first elem displacement 0 size of data 32
<br>
<p>-cC---P-DB-[---][---]     OPAL_UINT1 count 24 disp 0x10 (16) extent 1 (size 24)
<br>
-cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x30 (48) extent 1 (size 8)
<br>
&#151;&#151;&#151;G---[---][---]         OPAL_END_LOOP prev 2 elements first elem displacement 16 size of data 32
<br>
<p>This match perfectly to the datatype drawn by hand.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Nov 25, 2013, at 11:40 , Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently working on a bug occuring at the client site with openmpi when calling MPI_Sendreceive() on datatypes built by the application.
</span><br>
<span class="quotelev1">&gt; I think I've found where the bug comes from (it is located in opal_generic_simple_pack_function() - file opal/datatype/opal_datatype_pack.c). But this code is so complicated that I'm more than unsure of my fix. What I can say is that it fixes things for me, but I need some advices from the datatypes specialists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will find in attachment the reproducer provided by the client, as well as the resulting output.
</span><br>
<span class="quotelev1">&gt; datatypes.c : reproducer
</span><br>
<span class="quotelev1">&gt; to run the binary: salloc --exclusive -p B510 -N 1 -n 1 mpirun ./datatypes
</span><br>
<span class="quotelev1">&gt; trc_ko: traces got without the patch applied
</span><br>
<span class="quotelev1">&gt; trc_ok: traces got with the patch applied.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The proposed patch is the following: (Note that the very first change in this patch was enough in my case, but I thought all the &quot;source_base&quot; settings should follow this model.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; opal_generic_simple_pack_function: add the datatype lb when progressing in the input buffer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -r cb23c2f07e1f opal/datatype/opal_datatype_pack.c
</span><br>
<span class="quotelev1">&gt; --- a/opal/datatype/opal_datatype_pack.c        Sun Nov 24 17:06:51 2013 +0000
</span><br>
<span class="quotelev1">&gt; +++ b/opal/datatype/opal_datatype_pack.c        Mon Nov 25 10:48:00 2013 +0100
</span><br>
<span class="quotelev1">&gt; @@ -301,7 +301,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev1">&gt;                  PACK_PREDEFINED_DATATYPE( pConvertor, pElem, count_desc,
</span><br>
<span class="quotelev1">&gt;                                            source_base, destination, iov_len_local );
</span><br>
<span class="quotelev1">&gt;                  if( 0 == count_desc ) {  /* completed */
</span><br>
<span class="quotelev1">&gt; -                    source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev1">&gt; +                    source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + pData-&gt;lb;
</span><br>
<span class="quotelev1">&gt;                      pos_desc++;  /* advance to the next data */
</span><br>
<span class="quotelev1">&gt;                      UPDATE_INTERNAL_COUNTERS( description, pos_desc, pElem, count_desc );
</span><br>
<span class="quotelev1">&gt;                      continue;
</span><br>
<span class="quotelev1">&gt; @@ -333,7 +333,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev1">&gt;                          pStack-&gt;disp += description[pStack-&gt;index].loop.extent;
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; -                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev1">&gt; +                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + pData-&gt;lb;
</span><br>
<span class="quotelev1">&gt;                  UPDATE_INTERNAL_COUNTERS( description, pos_desc, pElem, count_desc );
</span><br>
<span class="quotelev1">&gt;                  DO_DEBUG( opal_output( 0, &quot;pack new_loop count %d stack_pos %d pos_desc %d disp %ld space %lu\n&quot;,
</span><br>
<span class="quotelev1">&gt;                                         (int)pStack-&gt;count, pConvertor-&gt;stack_pos, pos_desc, (long)pStack-&gt;disp, (unsigned long)iov_len_local ); );
</span><br>
<span class="quotelev1">&gt; @@ -354,7 +354,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev1">&gt;                              pStack-&gt;disp + local_disp);
</span><br>
<span class="quotelev1">&gt;                  pos_desc++;
</span><br>
<span class="quotelev1">&gt;              update_loop_description:  /* update the current state */
</span><br>
<span class="quotelev1">&gt; -                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev1">&gt; +                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + pData-&gt;lb;
</span><br>
<span class="quotelev1">&gt;                  UPDATE_INTERNAL_COUNTERS( description, pos_desc, pElem, count_desc );
</span><br>
<span class="quotelev1">&gt;                  DDT_DUMP_STACK( pConvertor-&gt;pStack, pConvertor-&gt;stack_pos, pElem, &quot;advance loop&quot; );
</span><br>
<span class="quotelev1">&gt;                  continue;
</span><br>
<span class="quotelev1">&gt; @@ -374,7 +374,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      /* I complete an element, next step I should go to the next one */
</span><br>
<span class="quotelev1">&gt;      PUSH_STACK( pStack, pConvertor-&gt;stack_pos, pos_desc, OPAL_DATATYPE_INT8, count_desc,
</span><br>
<span class="quotelev1">&gt; -                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf );
</span><br>
<span class="quotelev1">&gt; +                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf - pData-&gt;lb );
</span><br>
<span class="quotelev1">&gt;      DO_DEBUG( opal_output( 0, &quot;pack save stack stack_pos %d pos_desc %d count_desc %d disp %ld\n&quot;,
</span><br>
<span class="quotelev1">&gt;                             pConvertor-&gt;stack_pos, pStack-&gt;index, (int)pStack-&gt;count, (long)pStack-&gt;disp ); );
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nadia Derbey
</span><br>
<span class="quotelev1">&gt; Bull, Architect of an Open World
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bull.com">http://www.bull.com</a>
</span><br>
<span class="quotelev1">&gt; &lt;datatypes.c&gt;&lt;trc_ko.txt&gt;&lt;trc_ok.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-13323/PastedGraphic-1.png" alt="PastedGraphic-1.png">
<!-- attachment="PastedGraphic-1.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13324.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13322.php">Solibakke Per Bjarte: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13321.php">Nadia Derbey: "[OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Reply:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
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
