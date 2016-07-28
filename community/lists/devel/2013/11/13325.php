<?
$subject_val = "Re: [OMPI devel] bug in opal_generic_simple_pack_function()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 08:12:42 2013" -->
<!-- isoreceived="20131125131242" -->
<!-- sent="Mon, 25 Nov 2013 14:10:59 +0100" -->
<!-- isosent="20131125131059" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in opal_generic_simple_pack_function()" -->
<!-- id="52934C63.1020006_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="86159EFC-807B-43C3-9BB7-F8A207C1B410_at_icl.utk.edu" -->
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
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 08:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13326.php">Matthias Jurenz: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13324.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Reply:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thx for the detailed answer!
<br>
I did my tests on a v1.6.2 (changeset: 141b22222759).
<br>
After you told me it worked for you with earlier releases, I looked at 
<br>
the changesets applied since that time. I guess 28fd94d282a3is the one 
<br>
that fixes my issue?
<br>
<p>Regards,
<br>
Nadia
<br>
<p>On 25/11/2013 13:36, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Nadia,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which version of Open MPI are you using? I tried with the nightly 
</span><br>
<span class="quotelev1">&gt; r29751, the current 1.6 and the current 1.7 and I __always__ got the 
</span><br>
<span class="quotelev1">&gt; expected output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a simple way to show what the datatype engine is doing. You 
</span><br>
<span class="quotelev1">&gt; can set the MCA parameters
</span><br>
<span class="quotelev1">&gt; mpi_ddt_unpack_debug and mpi_ddt_pack_debug to get more info. If you 
</span><br>
<span class="quotelev1">&gt; only want to see how the datatype looks after the MPI_Commit step you 
</span><br>
<span class="quotelev1">&gt; can call directly ompi_datatype_dump(ddt). This will show the 
</span><br>
<span class="quotelev1">&gt; internals of the datatype, converted in predefined types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an example I took the application you provided and build the 
</span><br>
<span class="quotelev1">&gt; following picture of what is send and what is received (original 
</span><br>
<span class="quotelev1">&gt; buffer, send datatype, packed buffer, recv datatype, resulting buffer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now using the ompi_datatype_dump, I see the recv and the send 
</span><br>
<span class="quotelev1">&gt; datatypes as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x0 (0) extent 1 
</span><br>
<span class="quotelev1">&gt; (size 8)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x10 (16) extent 1 
</span><br>
<span class="quotelev1">&gt; (size 8)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]           OPAL_INT4 count 4 disp 0x30 (48) 
</span><br>
<span class="quotelev1">&gt; extent 4 (size 16)
</span><br>
<span class="quotelev1">&gt; ----------------------G---[---][---]          OPAL_END_LOOP pref 3 
</span><br>
<span class="quotelev1">&gt; elements first elem displacement 0 size of data 32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 24 disp 0x10 (16) extent 1 
</span><br>
<span class="quotelev1">&gt; (size 24)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x30 (48) extent 1 
</span><br>
<span class="quotelev1">&gt; (size 8)
</span><br>
<span class="quotelev1">&gt; ---------G---[---][---]         OPAL_END_LOOP prev 2 elements first 
</span><br>
<span class="quotelev1">&gt; elem displacement 16 size of data 32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This match perfectly to the datatype drawn by hand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2013, at 11:40 , Nadia Derbey &lt;Nadia.Derbey_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Nadia.Derbey_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm currently working on a bug occuring at the client site with 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi when calling MPI_Sendreceive() on datatypes built by the 
</span><br>
<span class="quotelev2">&gt;&gt; application.
</span><br>
<span class="quotelev2">&gt;&gt; I think I've found where the bug comes from (it is located in 
</span><br>
<span class="quotelev2">&gt;&gt; opal_generic_simple_pack_function() - file 
</span><br>
<span class="quotelev2">&gt;&gt; opal/datatype/opal_datatype_pack.c). But this code is so complicated 
</span><br>
<span class="quotelev2">&gt;&gt; that I'm more than unsure of my fix. What I can say is that it fixes 
</span><br>
<span class="quotelev2">&gt;&gt; things for me, but I need some advices from the datatypes specialists.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You will find in attachment the reproducer provided by the client, as 
</span><br>
<span class="quotelev2">&gt;&gt; well as the resulting output.
</span><br>
<span class="quotelev2">&gt;&gt; datatypes.c : reproducer
</span><br>
<span class="quotelev2">&gt;&gt; to run the binary: salloc --exclusive -p B510 -N 1 -n 1 mpirun 
</span><br>
<span class="quotelev2">&gt;&gt; ./datatypes
</span><br>
<span class="quotelev2">&gt;&gt; trc_ko: traces got without the patch applied
</span><br>
<span class="quotelev2">&gt;&gt; trc_ok: traces got with the patch applied.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The proposed patch is the following: (Note that the very first change 
</span><br>
<span class="quotelev2">&gt;&gt; in this patch was enough in my case, but I thought all the 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;source_base&quot; settings should follow this model.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------
</span><br>
<span class="quotelev2">&gt;&gt; opal_generic_simple_pack_function: add the datatype lb when 
</span><br>
<span class="quotelev2">&gt;&gt; progressing in the input buffer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff -r cb23c2f07e1f opal/datatype/opal_datatype_pack.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/datatype/opal_datatype_pack.c        Sun Nov 24 17:06:51 
</span><br>
<span class="quotelev2">&gt;&gt; 2013 +0000
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/datatype/opal_datatype_pack.c        Mon Nov 25 10:48:00 
</span><br>
<span class="quotelev2">&gt;&gt; 2013 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -301,7 +301,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev2">&gt;&gt;                  PACK_PREDEFINED_DATATYPE( pConvertor, pElem, count_desc,
</span><br>
<span class="quotelev2">&gt;&gt;                                            source_base, destination, 
</span><br>
<span class="quotelev2">&gt;&gt; iov_len_local );
</span><br>
<span class="quotelev2">&gt;&gt;                  if( 0 == count_desc ) {  /* completed */
</span><br>
<span class="quotelev2">&gt;&gt; -                    source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev2">&gt;&gt; +                    source_base = pConvertor-&gt;pBaseBuf + 
</span><br>
<span class="quotelev2">&gt;&gt; pStack-&gt;disp + pData-&gt;lb;
</span><br>
<span class="quotelev2">&gt;&gt;                      pos_desc++;  /* advance to the next data */
</span><br>
<span class="quotelev2">&gt;&gt;                      UPDATE_INTERNAL_COUNTERS( description, pos_desc, 
</span><br>
<span class="quotelev2">&gt;&gt; pElem, count_desc );
</span><br>
<span class="quotelev2">&gt;&gt;                      continue;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -333,7 +333,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev2">&gt;&gt;                          pStack-&gt;disp += 
</span><br>
<span class="quotelev2">&gt;&gt; description[pStack-&gt;index].loop.extent;
</span><br>
<span class="quotelev2">&gt;&gt;                      }
</span><br>
<span class="quotelev2">&gt;&gt;                  }
</span><br>
<span class="quotelev2">&gt;&gt; -                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev2">&gt;&gt; +                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + 
</span><br>
<span class="quotelev2">&gt;&gt; pData-&gt;lb;
</span><br>
<span class="quotelev2">&gt;&gt;                  UPDATE_INTERNAL_COUNTERS( description, pos_desc, 
</span><br>
<span class="quotelev2">&gt;&gt; pElem, count_desc );
</span><br>
<span class="quotelev2">&gt;&gt;                  DO_DEBUG( opal_output( 0, &quot;pack new_loop count %d 
</span><br>
<span class="quotelev2">&gt;&gt; stack_pos %d pos_desc %d disp %ld space %lu\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; (int)pStack-&gt;count, pConvertor-&gt;stack_pos, pos_desc, 
</span><br>
<span class="quotelev2">&gt;&gt; (long)pStack-&gt;disp, (unsigned long)iov_len_local ); );
</span><br>
<span class="quotelev2">&gt;&gt; @@ -354,7 +354,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev2">&gt;&gt;                              pStack-&gt;disp + local_disp);
</span><br>
<span class="quotelev2">&gt;&gt;                  pos_desc++;
</span><br>
<span class="quotelev2">&gt;&gt;              update_loop_description:  /* update the current state */
</span><br>
<span class="quotelev2">&gt;&gt; -                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev2">&gt;&gt; +                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + 
</span><br>
<span class="quotelev2">&gt;&gt; pData-&gt;lb;
</span><br>
<span class="quotelev2">&gt;&gt;                  UPDATE_INTERNAL_COUNTERS( description, pos_desc, 
</span><br>
<span class="quotelev2">&gt;&gt; pElem, count_desc );
</span><br>
<span class="quotelev2">&gt;&gt;                  DDT_DUMP_STACK( pConvertor-&gt;pStack, 
</span><br>
<span class="quotelev2">&gt;&gt; pConvertor-&gt;stack_pos, pElem, &quot;advance loop&quot; );
</span><br>
<span class="quotelev2">&gt;&gt;                  continue;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -374,7 +374,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;      /* I complete an element, next step I should go to the next one */
</span><br>
<span class="quotelev2">&gt;&gt;      PUSH_STACK( pStack, pConvertor-&gt;stack_pos, pos_desc, 
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_DATATYPE_INT8, count_desc,
</span><br>
<span class="quotelev2">&gt;&gt; -                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf );
</span><br>
<span class="quotelev2">&gt;&gt; +                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf - 
</span><br>
<span class="quotelev2">&gt;&gt; pData-&gt;lb );
</span><br>
<span class="quotelev2">&gt;&gt;      DO_DEBUG( opal_output( 0, &quot;pack save stack stack_pos %d pos_desc 
</span><br>
<span class="quotelev2">&gt;&gt; %d count_desc %d disp %ld\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                             pConvertor-&gt;stack_pos, pStack-&gt;index, 
</span><br>
<span class="quotelev2">&gt;&gt; (int)pStack-&gt;count, (long)pStack-&gt;disp ); );
</span><br>
<span class="quotelev2">&gt;&gt;      return 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Nadia Derbey
</span><br>
<span class="quotelev2">&gt;&gt; Bull, Architect of an Open World
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.bull.com">http://www.bull.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;datatypes.c&gt;&lt;trc_ko.txt&gt;&lt;trc_ok.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Nadia Derbey
Bull, Architect of an Open World
<a href="http://www.bull.com">http://www.bull.com</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-13325/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13326.php">Matthias Jurenz: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13324.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Reply:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
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
