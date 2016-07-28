<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28319 - trunk/opal/datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 10 09:04:56 2013" -->
<!-- isoreceived="20130410130456" -->
<!-- sent="Wed, 10 Apr 2013 13:04:31 +0000" -->
<!-- isosent="20130410130431" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28319 - trunk/opal/datatype" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FFEEF8_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130409230154.E491016032D_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28319 - trunk/opal/datatype<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-10 09:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
<li><strong>Previous message:</strong> <a href="12269.php">marco atzeri: "Re: [OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12272.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28319 - trunk/opal/datatype"</a>
<li><strong>Reply:</strong> <a href="12272.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28319 - trunk/opal/datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>I'm guessing this should be CMR'ed to v1.7, right?
<br>
<p>Does it need to go to v1.6, too?
<br>
<p><p>On Apr 9, 2013, at 7:01 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev1">&gt; Date: 2013-04-09 19:01:54 EDT (Tue, 09 Apr 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 28319
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28319">https://svn.open-mpi.org/trac/ompi/changeset/28319</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix an issue identified by Thomas Jahns and his colleague when the data
</span><br>
<span class="quotelev1">&gt; representation is not correctly optimized (it is off by the extend).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; During the data representation process, if the opportunity to merge several
</span><br>
<span class="quotelev1">&gt; items appear, we replace them with the new merged element. However, if one
</span><br>
<span class="quotelev1">&gt; of the components of this merged element was comming from a &quot;loop representation&quot;
</span><br>
<span class="quotelev1">&gt; then the new first element of this loop must have a displacement moved by the
</span><br>
<span class="quotelev1">&gt; extent of the loop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/datatype/opal_datatype_optimize.c |    56 +++++++++++++++++++++++---------------- 
</span><br>
<span class="quotelev1">&gt;   1 files changed, 33 insertions(+), 23 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/datatype/opal_datatype_optimize.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/datatype/opal_datatype_optimize.c	Tue Apr  9 18:08:03 2013	(r28318)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/datatype/opal_datatype_optimize.c	2013-04-09 19:01:54 EDT (Tue, 09 Apr 2013)	(r28319)
</span><br>
<span class="quotelev1">&gt; @@ -73,15 +73,12 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     dt_elem_desc_t* pElemDesc;
</span><br>
<span class="quotelev1">&gt;     ddt_elem_desc_t opt_elem;
</span><br>
<span class="quotelev1">&gt; -    OPAL_PTRDIFF_TYPE last_disp = 0;
</span><br>
<span class="quotelev1">&gt;     dt_stack_t* pStack;            /* pointer to the position on the stack */
</span><br>
<span class="quotelev1">&gt;     int32_t pos_desc = 0;          /* actual position in the description of the derived datatype */
</span><br>
<span class="quotelev1">&gt; -    int32_t stack_pos = 0, last_type = OPAL_DATATYPE_UINT1;
</span><br>
<span class="quotelev1">&gt; -    int32_t type = OPAL_DATATYPE_LOOP, nbElems = 0, changes = 0;
</span><br>
<span class="quotelev1">&gt; -    int32_t optimized = 0, continuity;
</span><br>
<span class="quotelev1">&gt; +    int32_t stack_pos = 0, last_type = OPAL_DATATYPE_UINT1, last_length = 0;
</span><br>
<span class="quotelev1">&gt; +    int32_t type = OPAL_DATATYPE_LOOP, nbElems = 0, continuity;
</span><br>
<span class="quotelev1">&gt; +    OPAL_PTRDIFF_TYPE total_disp = 0, last_extent = 1, last_disp = 0;
</span><br>
<span class="quotelev1">&gt;     uint16_t last_flags = 0xFFFF;  /* keep all for the first datatype */
</span><br>
<span class="quotelev1">&gt; -    OPAL_PTRDIFF_TYPE total_disp = 0, last_extent = 1;
</span><br>
<span class="quotelev1">&gt; -	int32_t last_length = 0;
</span><br>
<span class="quotelev1">&gt;     uint32_t i;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     pStack = (dt_stack_t*)alloca( sizeof(dt_stack_t) * (pData-&gt;btypes[OPAL_DATATYPE_LOOP]+2) );
</span><br>
<span class="quotelev1">&gt; @@ -134,7 +131,8 @@
</span><br>
<span class="quotelev1">&gt;                     /* the whole loop is contiguous */
</span><br>
<span class="quotelev1">&gt;                     if( !continuity ) {
</span><br>
<span class="quotelev1">&gt;                         if( 0 != last_length ) {
</span><br>
<span class="quotelev1">&gt; -                            CREATE_ELEM( pElemDesc, last_type, OPAL_DATATYPE_FLAG_BASIC, last_length, last_disp, last_extent );
</span><br>
<span class="quotelev1">&gt; +                            CREATE_ELEM( pElemDesc, last_type, OPAL_DATATYPE_FLAG_BASIC,
</span><br>
<span class="quotelev1">&gt; +                                         last_length, last_disp, last_extent );
</span><br>
<span class="quotelev1">&gt;                             pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt;                             last_length = 0;
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt; @@ -144,9 +142,9 @@
</span><br>
<span class="quotelev1">&gt;                                    + loop-&gt;loops * end_loop-&gt;size);
</span><br>
<span class="quotelev1">&gt;                     last_type   = OPAL_DATATYPE_UINT1;
</span><br>
<span class="quotelev1">&gt;                     last_extent = 1;
</span><br>
<span class="quotelev1">&gt; -                    optimized++;
</span><br>
<span class="quotelev1">&gt;                 } else {
</span><br>
<span class="quotelev1">&gt;                     int counter = loop-&gt;loops;
</span><br>
<span class="quotelev1">&gt; +                    OPAL_PTRDIFF_TYPE merged_disp = 0;
</span><br>
<span class="quotelev1">&gt;                     /* if the previous data is contiguous with this piece and it has a length not ZERO */
</span><br>
<span class="quotelev1">&gt;                     if( last_length != 0 ) {
</span><br>
<span class="quotelev1">&gt;                         if( continuity ) {
</span><br>
<span class="quotelev1">&gt; @@ -155,27 +153,42 @@
</span><br>
<span class="quotelev1">&gt;                             last_type    = OPAL_DATATYPE_UINT1;
</span><br>
<span class="quotelev1">&gt;                             last_extent  = 1;
</span><br>
<span class="quotelev1">&gt;                             counter--;
</span><br>
<span class="quotelev1">&gt; +                            merged_disp = loop-&gt;extent;  /* merged loop, update the disp of the remaining elems */
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt; -                        CREATE_ELEM( pElemDesc, last_type, OPAL_DATATYPE_FLAG_BASIC, last_length, last_disp, last_extent );
</span><br>
<span class="quotelev1">&gt; +                        CREATE_ELEM( pElemDesc, last_type, OPAL_DATATYPE_FLAG_BASIC,
</span><br>
<span class="quotelev1">&gt; +                                     last_length, last_disp, last_extent );
</span><br>
<span class="quotelev1">&gt;                         pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt;                         last_disp += last_length;
</span><br>
<span class="quotelev1">&gt;                         last_length = 0;
</span><br>
<span class="quotelev1">&gt;                         last_type = OPAL_DATATYPE_LOOP;
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt; -                    /* we have a gap in the begining or the end of the loop but the whole
</span><br>
<span class="quotelev1">&gt; -                     * loop can be merged in just one memcpy.
</span><br>
<span class="quotelev1">&gt; +                    /**
</span><br>
<span class="quotelev1">&gt; +                     * The content of the loop is contiguous (maybe with a gap before or after).
</span><br>
<span class="quotelev1">&gt; +                     *
</span><br>
<span class="quotelev1">&gt; +                     * If any of the loops have been merged with the previous element, then the
</span><br>
<span class="quotelev1">&gt; +                     * displacement of the first element (or the displacement of all elements if the
</span><br>
<span class="quotelev1">&gt; +                     * loop will be removed) must be updated accordingly.
</span><br>
<span class="quotelev1">&gt;                      */
</span><br>
<span class="quotelev1">&gt; -                    CREATE_LOOP_START( pElemDesc, counter, 2, loop-&gt;extent, loop-&gt;common.flags );
</span><br>
<span class="quotelev1">&gt; -                    pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt; -                    CREATE_ELEM( pElemDesc, OPAL_DATATYPE_UINT1, OPAL_DATATYPE_FLAG_BASIC, end_loop-&gt;size, loop_disp, 1);
</span><br>
<span class="quotelev1">&gt; -                    pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt; -                    CREATE_LOOP_END( pElemDesc, 2, end_loop-&gt;first_elem_disp, end_loop-&gt;size,
</span><br>
<span class="quotelev1">&gt; -                                     end_loop-&gt;common.flags );
</span><br>
<span class="quotelev1">&gt; -                    pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt; -                    if( loop-&gt;items &gt; 2 ) optimized++;
</span><br>
<span class="quotelev1">&gt; +                    if( counter &lt;= 2 ) {
</span><br>
<span class="quotelev1">&gt; +                        merged_disp += end_loop-&gt;first_elem_disp;
</span><br>
<span class="quotelev1">&gt; +                        while( counter &gt; 0 ) {
</span><br>
<span class="quotelev1">&gt; +                            CREATE_ELEM( pElemDesc, OPAL_DATATYPE_UINT1, OPAL_DATATYPE_FLAG_BASIC,
</span><br>
<span class="quotelev1">&gt; +                                         end_loop-&gt;size, merged_disp, 1);
</span><br>
<span class="quotelev1">&gt; +                            pElemDesc++; nbElems++; counter--;
</span><br>
<span class="quotelev1">&gt; +                            merged_disp += loop-&gt;extent;
</span><br>
<span class="quotelev1">&gt; +                        }
</span><br>
<span class="quotelev1">&gt; +                    } else {
</span><br>
<span class="quotelev1">&gt; +                        CREATE_LOOP_START( pElemDesc, counter, 2, loop-&gt;extent, loop-&gt;common.flags );
</span><br>
<span class="quotelev1">&gt; +                        pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt; +                        CREATE_ELEM( pElemDesc, OPAL_DATATYPE_UINT1, OPAL_DATATYPE_FLAG_BASIC,
</span><br>
<span class="quotelev1">&gt; +                                     end_loop-&gt;size, loop_disp, 1);
</span><br>
<span class="quotelev1">&gt; +                        pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt; +                        CREATE_LOOP_END( pElemDesc, 2, end_loop-&gt;first_elem_disp + merged_disp,
</span><br>
<span class="quotelev1">&gt; +                                         end_loop-&gt;size, end_loop-&gt;common.flags );
</span><br>
<span class="quotelev1">&gt; +                        pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 pos_desc += loop-&gt;items + 1;
</span><br>
<span class="quotelev1">&gt; -                changes++;
</span><br>
<span class="quotelev1">&gt;             } else {
</span><br>
<span class="quotelev1">&gt;                 ddt_elem_desc_t* elem = (ddt_elem_desc_t*)&amp;(pData-&gt;desc.desc[pos_desc+1]);
</span><br>
<span class="quotelev1">&gt;                 if( last_length != 0 ) {
</span><br>
<span class="quotelev1">&gt; @@ -192,7 +205,6 @@
</span><br>
<span class="quotelev1">&gt;                                      loop-&gt;loops, elem-&gt;disp, loop-&gt;extent );
</span><br>
<span class="quotelev1">&gt;                         pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt;                         pos_desc += loop-&gt;items + 1;
</span><br>
<span class="quotelev1">&gt; -                        changes++; optimized++;
</span><br>
<span class="quotelev1">&gt;                         goto complete_loop;
</span><br>
<span class="quotelev1">&gt;                     } else if( loop-&gt;loops &lt; 3 ) {
</span><br>
<span class="quotelev1">&gt;                         OPAL_PTRDIFF_TYPE elem_displ = elem-&gt;disp;
</span><br>
<span class="quotelev1">&gt; @@ -203,7 +215,6 @@
</span><br>
<span class="quotelev1">&gt;                             pElemDesc++; nbElems++;
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;                         pos_desc += loop-&gt;items + 1;
</span><br>
<span class="quotelev1">&gt; -                        changes += loop-&gt;loops; optimized += loop-&gt;loops;
</span><br>
<span class="quotelev1">&gt;                         goto complete_loop;
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; @@ -238,7 +249,6 @@
</span><br>
<span class="quotelev1">&gt;                             pData-&gt;desc.desc[pos_desc].elem.count * opal_datatype_basicDatatypes[type]-&gt;size;
</span><br>
<span class="quotelev1">&gt;                         last_type = OPAL_DATATYPE_UINT1;
</span><br>
<span class="quotelev1">&gt;                         last_extent = 1;
</span><br>
<span class="quotelev1">&gt; -                        optimized++;
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 last_flags &amp;= pData-&gt;desc.desc[pos_desc].elem.common.flags;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
<li><strong>Previous message:</strong> <a href="12269.php">marco atzeri: "Re: [OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12272.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28319 - trunk/opal/datatype"</a>
<li><strong>Reply:</strong> <a href="12272.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28319 - trunk/opal/datatype"</a>
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
