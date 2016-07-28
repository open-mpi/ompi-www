<?
$subject_val = "Re: [OMPI devel] bug in opal_generic_simple_pack_function()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 09:14:39 2013" -->
<!-- isoreceived="20131125141439" -->
<!-- sent="Mon, 25 Nov 2013 15:12:59 +0100" -->
<!-- isosent="20131125141259" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in opal_generic_simple_pack_function()" -->
<!-- id="52935AEB.2010901_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6EFAEF69-6334-44FC-9B0B-653CEB444B91_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-11-25 09:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13328.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Yes, the revisions are from HG.
<br>
Actually, I saw the key word &quot;convertor&quot;, in the summary and I thought 
<br>
that was the one!
<br>
You're right there are about 10 changesets aboout DDt fixes since the 
<br>
release I was testing with!
<br>
<p>Thanks,
<br>
Nadia
<br>
<p>On 25/11/2013 14:31, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Nadia,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess the revisions mentioned are from HG? If I'm not mistaken the 
</span><br>
<span class="quotelev1">&gt; change you mentioned corresponds to r29285. I'm not sure if they are 
</span><br>
<span class="quotelev1">&gt; related, as r29285 is about positioning a convertor, and this is only 
</span><br>
<span class="quotelev1">&gt; used in the case of multi-fragments messages. As this is not the case 
</span><br>
<span class="quotelev1">&gt; for your example, I don't think they are related.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess we should look at all the patches in the opal/datatype and 
</span><br>
<span class="quotelev1">&gt; ompi/datatype over the last 13 months (the starting point of the 1.6.3).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2013, at 14:10 , Nadia Derbey &lt;Nadia.Derbey_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Nadia.Derbey_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thx for the detailed answer!
</span><br>
<span class="quotelev2">&gt;&gt; I did my tests on a v1.6.2 (changeset: 141b22222759).
</span><br>
<span class="quotelev2">&gt;&gt; After you told me it worked for you with earlier releases, I looked 
</span><br>
<span class="quotelev2">&gt;&gt; at the changesets applied since that time. I guess 28fd94d282a3is the 
</span><br>
<span class="quotelev2">&gt;&gt; one that fixes my issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 25/11/2013 13:36, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nadia,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which version of Open MPI are you using? I tried with the nightly 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r29751, the current 1.6 and the current 1.7 and I __always__ got the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a simple way to show what the datatype engine is doing. You 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can set the MCA parameters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_ddt_unpack_debug and mpi_ddt_pack_debug to get more info. If you 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only want to see how the datatype looks after the MPI_Commit step 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can call directly ompi_datatype_dump(ddt). This will show the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internals of the datatype, converted in predefined types.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As an example I took the application you provided and build the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following picture of what is send and what is received (original 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer, send datatype, packed buffer, recv datatype, resulting buffer).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Mail Attachment.png&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now using the ompi_datatype_dump, I see the recv and the send 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatypes as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x0 (0) extent 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x10 (16) extent 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]           OPAL_INT4 count 4 disp 0x30 (48) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extent 4 (size 16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------G---[---][---]          OPAL_END_LOOP pref 3 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; elements first elem displacement 0 size of data 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 24 disp 0x10 (16) extent 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 (size 24)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x30 (48) extent 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------G---[---][---]         OPAL_END_LOOP prev 2 elements first 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; elem displacement 16 size of data 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This match perfectly to the datatype drawn by hand.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 25, 2013, at 11:40 , Nadia Derbey &lt;Nadia.Derbey_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:Nadia.Derbey_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm currently working on a bug occuring at the client site with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi when calling MPI_Sendreceive() on datatypes built by the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think I've found where the bug comes from (it is located in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_generic_simple_pack_function() - file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/datatype/opal_datatype_pack.c). But this code is so 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; complicated that I'm more than unsure of my fix. What I can say is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it fixes things for me, but I need some advices from the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datatypes specialists.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You will find in attachment the reproducer provided by the client, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as well as the resulting output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datatypes.c : reproducer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to run the binary: salloc --exclusive -p B510 -N 1 -n 1 mpirun 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./datatypes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trc_ko: traces got without the patch applied
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trc_ok: traces got with the patch applied.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The proposed patch is the following: (Note that the very first 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; change in this patch was enough in my case, but I thought all the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;source_base&quot; settings should follow this model.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_generic_simple_pack_function: add the datatype lb when 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; progressing in the input buffer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; diff -r cb23c2f07e1f opal/datatype/opal_datatype_pack.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- a/opal/datatype/opal_datatype_pack.c Sun Nov 24 17:06:51 2013 +0000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ b/opal/datatype/opal_datatype_pack.c Mon Nov 25 10:48:00 2013 +0100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -301,7 +301,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  PACK_PREDEFINED_DATATYPE( pConvertor, pElem, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; count_desc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; source_base, destination, iov_len_local );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  if( 0 == count_desc ) {  /* completed */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    source_base = pConvertor-&gt;pBaseBuf + 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pStack-&gt;disp + pData-&gt;lb;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      pos_desc++;  /* advance to the next data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      UPDATE_INTERNAL_COUNTERS( description, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pos_desc, pElem, count_desc );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -333,7 +333,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          pStack-&gt;disp += 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; description[pStack-&gt;index].loop.extent;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + pData-&gt;lb;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  UPDATE_INTERNAL_COUNTERS( description, pos_desc, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pElem, count_desc );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  DO_DEBUG( opal_output( 0, &quot;pack new_loop count %d 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stack_pos %d pos_desc %d disp %ld space %lu\n&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (int)pStack-&gt;count, pConvertor-&gt;stack_pos, pos_desc, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (long)pStack-&gt;disp, (unsigned long)iov_len_local ); );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -354,7 +354,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                              pStack-&gt;disp + local_disp);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  pos_desc++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              update_loop_description:  /* update the current state */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + pData-&gt;lb;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  UPDATE_INTERNAL_COUNTERS( description, pos_desc, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pElem, count_desc );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  DDT_DUMP_STACK( pConvertor-&gt;pStack, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pConvertor-&gt;stack_pos, pElem, &quot;advance loop&quot; );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -374,7 +374,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /* I complete an element, next step I should go to the next one */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      PUSH_STACK( pStack, pConvertor-&gt;stack_pos, pos_desc, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_DATATYPE_INT8, count_desc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - pData-&gt;lb );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      DO_DEBUG( opal_output( 0, &quot;pack save stack stack_pos %d 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pos_desc %d count_desc %d disp %ld\n&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pConvertor-&gt;stack_pos, pStack-&gt;index, (int)pStack-&gt;count, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (long)pStack-&gt;disp ); );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nadia
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nadia Derbey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bull, Architect of an Open World
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.bull.com">http://www.bull.com</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;datatypes.c&gt;&lt;trc_ko.txt&gt;&lt;trc_ok.txt&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Nadia Derbey
</span><br>
<span class="quotelev2">&gt;&gt; Bull, Architect of an Open World
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.bull.com">http://www.bull.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13330.php">Adrian Reber: "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13328.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
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
