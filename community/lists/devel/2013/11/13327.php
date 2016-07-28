<?
$subject_val = "Re: [OMPI devel] bug in opal_generic_simple_pack_function()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 08:31:52 2013" -->
<!-- isoreceived="20131125133152" -->
<!-- sent="Mon, 25 Nov 2013 14:31:48 +0100" -->
<!-- isosent="20131125133148" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in opal_generic_simple_pack_function()" -->
<!-- id="6EFAEF69-6334-44FC-9B0B-653CEB444B91_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="52934C63.1020006_at_bull.net" -->
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
<strong>Date:</strong> 2013-11-25 08:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13328.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13326.php">Matthias Jurenz: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13329.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Reply:</strong> <a href="13329.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nadia,
<br>
<p>I guess the revisions mentioned are from HG? If I&#146;m not mistaken the change you mentioned corresponds to r29285. I&#146;m not sure if they are related, as r29285 is about positioning a convertor, and this is only used in the case of multi-fragments messages. As this is not the case for your example, I don&#146;t think they are related.
<br>
<p>I guess we should look at all the patches in the opal/datatype and ompi/datatype over the last 13 months (the starting point of the 1.6.3).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Nov 25, 2013, at 14:10 , Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thx for the detailed answer!
</span><br>
<span class="quotelev1">&gt; I did my tests on a v1.6.2 (changeset: 141b22222759).
</span><br>
<span class="quotelev1">&gt; After you told me it worked for you with earlier releases, I looked at the changesets applied since that time. I guess 28fd94d282a3 is the one that fixes my issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 25/11/2013 13:36, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Nadia,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which version of Open MPI are you using? I tried with the nightly r29751, the current 1.6 and the current 1.7 and I __always__ got the expected output.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a simple way to show what the datatype engine is doing. You can set the MCA parameters
</span><br>
<span class="quotelev2">&gt;&gt; mpi_ddt_unpack_debug and mpi_ddt_pack_debug to get more info. If you only want to see how the datatype looks after the MPI_Commit step you can call directly ompi_datatype_dump(ddt). This will show the internals of the datatype, converted in predefined types.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As an example I took the application you provided and build the following picture of what is send and what is received (original buffer, send datatype, packed buffer, recv datatype, resulting buffer).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Mail Attachment.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now using the ompi_datatype_dump, I see the recv and the send datatypes as:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x0 (0) extent 1 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x10 (16) extent 1 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -cC&#151;P-DB-[&#151;][&#151;]           OPAL_INT4 count 4 disp 0x30 (48) extent 4 (size 16)
</span><br>
<span class="quotelev2">&gt;&gt; &#151;&#151;&#151;&#151;&#151;&#151;&#151;-G&#151;[&#151;][&#151;]          OPAL_END_LOOP pref 3 elements first elem displacement 0 size of data 32
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 24 disp 0x10 (16) extent 1 (size 24)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 8 disp 0x30 (48) extent 1 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; &#151;&#151;&#151;G---[---][---]         OPAL_END_LOOP prev 2 elements first elem displacement 16 size of data 32
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This match perfectly to the datatype drawn by hand.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2013, at 11:40 , Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm currently working on a bug occuring at the client site with openmpi when calling MPI_Sendreceive() on datatypes built by the application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I've found where the bug comes from (it is located in opal_generic_simple_pack_function() - file opal/datatype/opal_datatype_pack.c). But this code is so complicated that I'm more than unsure of my fix. What I can say is that it fixes things for me, but I need some advices from the datatypes specialists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You will find in attachment the reproducer provided by the client, as well as the resulting output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatypes.c : reproducer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to run the binary: salloc --exclusive -p B510 -N 1 -n 1 mpirun ./datatypes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trc_ko: traces got without the patch applied
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trc_ok: traces got with the patch applied.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The proposed patch is the following: (Note that the very first change in this patch was enough in my case, but I thought all the &quot;source_base&quot; settings should follow this model.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_generic_simple_pack_function: add the datatype lb when progressing in the input buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff -r cb23c2f07e1f opal/datatype/opal_datatype_pack.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/opal/datatype/opal_datatype_pack.c        Sun Nov 24 17:06:51 2013 +0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/opal/datatype/opal_datatype_pack.c        Mon Nov 25 10:48:00 2013 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -301,7 +301,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  PACK_PREDEFINED_DATATYPE( pConvertor, pElem, count_desc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                            source_base, destination, iov_len_local );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  if( 0 == count_desc ) {  /* completed */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + pData-&gt;lb;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      pos_desc++;  /* advance to the next data */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      UPDATE_INTERNAL_COUNTERS( description, pos_desc, pElem, count_desc );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -333,7 +333,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          pStack-&gt;disp += description[pStack-&gt;index].loop.extent;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + pData-&gt;lb;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  UPDATE_INTERNAL_COUNTERS( description, pos_desc, pElem, count_desc );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  DO_DEBUG( opal_output( 0, &quot;pack new_loop count %d stack_pos %d pos_desc %d disp %ld space %lu\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                         (int)pStack-&gt;count, pConvertor-&gt;stack_pos, pos_desc, (long)pStack-&gt;disp, (unsigned long)iov_len_local ); );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -354,7 +354,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              pStack-&gt;disp + local_disp);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  pos_desc++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              update_loop_description:  /* update the current state */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                source_base = pConvertor-&gt;pBaseBuf + pStack-&gt;disp + pData-&gt;lb;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  UPDATE_INTERNAL_COUNTERS( description, pos_desc, pElem, count_desc );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  DDT_DUMP_STACK( pConvertor-&gt;pStack, pConvertor-&gt;stack_pos, pElem, &quot;advance loop&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -374,7 +374,7 @@ opal_generic_simple_pack_function( opal_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* I complete an element, next step I should go to the next one */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      PUSH_STACK( pStack, pConvertor-&gt;stack_pos, pos_desc, OPAL_DATATYPE_INT8, count_desc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                source_base - pStack-&gt;disp - pConvertor-&gt;pBaseBuf - pData-&gt;lb );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DO_DEBUG( opal_output( 0, &quot;pack save stack stack_pos %d pos_desc %d count_desc %d disp %ld\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             pConvertor-&gt;stack_pos, pStack-&gt;index, (int)pStack-&gt;count, (long)pStack-&gt;disp ); );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nadia
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nadia Derbey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bull, Architect of an Open World
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.bull.com">http://www.bull.com</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;datatypes.c&gt;&lt;trc_ko.txt&gt;&lt;trc_ok.txt&gt;_______________________________________________
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nadia Derbey
</span><br>
<span class="quotelev1">&gt; Bull, Architect of an Open World
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bull.com">http://www.bull.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13328.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13326.php">Matthias Jurenz: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13329.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Reply:</strong> <a href="13329.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
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
