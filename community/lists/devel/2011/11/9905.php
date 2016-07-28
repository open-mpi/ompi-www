<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  6 23:06:00 2011" -->
<!-- isoreceived="20111107040600" -->
<!-- sent="Sun, 6 Nov 2011 23:05:57 -0500" -->
<!-- isosent="20111107040557" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445" -->
<!-- id="ABFC628B-8291-430B-BDFE-BFAD514AD431_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201111061619.pA6GJ9mq015009_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-06 23:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9906.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9904.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9906.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9906.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I might have missed some of the phone conferences, but this is a highly critical modification of the one of the performance critical sub-system of Open MPI. There was no RFC about and no prior warning. This change impacts every other BTL and PML out there. Moreover, at this point there is no assessment of the impact on performance (because the seg_key modification).
<br>
<p>Please roll-back r25445 and r25448.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 6, 2011, at 11:19 , hjelmn_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn
</span><br>
<span class="quotelev1">&gt; Date: 2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25445
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25445">https://svn.open-mpi.org/trac/ompi/changeset/25445</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; changes to seg_key needed for a new btl
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/btl.h                      |     8 ++++----                                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/mx/btl_mx.c                |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/portals/btl_portals.c      |    12 ++++++------                            
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/portals/btl_portals_frag.c |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/portals/btl_portals_rdma.c |     8 ++++----                                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/self/btl_self.c            |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sm/btl_sm.c                |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/vader/btl_vader.c          |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/vader/btl_vader_get.c      |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/vader/btl_vader_put.c      |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;   10 files changed, 31 insertions(+), 31 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/btl.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/btl.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/btl.h	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -238,10 +238,10 @@
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     /** Memory segment key required by some RDMA networks */
</span><br>
<span class="quotelev1">&gt;     union {
</span><br>
<span class="quotelev1">&gt; -        uint32_t  key32[2];
</span><br>
<span class="quotelev1">&gt; -        uint64_t  key64;
</span><br>
<span class="quotelev1">&gt; -        uint8_t   key8[8];
</span><br>
<span class="quotelev1">&gt; -        uintptr_t ptr;
</span><br>
<span class="quotelev1">&gt; +        uint32_t  key32[4];
</span><br>
<span class="quotelev1">&gt; +        uint64_t  key64[2];
</span><br>
<span class="quotelev1">&gt; +        uint8_t   key8[16];
</span><br>
<span class="quotelev1">&gt; +        uintptr_t ptr[2];
</span><br>
<span class="quotelev1">&gt;     } seg_key;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; typedef struct mca_btl_base_segment_t mca_btl_base_segment_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/mx/btl_mx.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/mx/btl_mx.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/mx/btl_mx.c	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -323,13 +323,13 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     frag-&gt;segment[0].seg_len       = *size;
</span><br>
<span class="quotelev1">&gt;     opal_convertor_get_current_pointer( convertor, (void**)&amp;(frag-&gt;segment[0].seg_addr.pval) );
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;segment[0].seg_key.key64 = (uint64_t)(intptr_t)frag;
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;segment[0].seg_key.key64[0] = (uint64_t)(intptr_t)frag;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mx_segment.segment_ptr    = frag-&gt;segment[0].seg_addr.pval;
</span><br>
<span class="quotelev1">&gt;     mx_segment.segment_length = frag-&gt;segment[0].seg_len;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mx_return = mx_irecv( mx_btl-&gt;mx_endpoint, &amp;mx_segment, 1,
</span><br>
<span class="quotelev1">&gt; -                          frag-&gt;segment[0].seg_key.key64, 
</span><br>
<span class="quotelev1">&gt; +                          frag-&gt;segment[0].seg_key.key64[0], 
</span><br>
<span class="quotelev1">&gt;                           BTL_MX_PUT_MASK, NULL, &amp;(frag-&gt;mx_request) );
</span><br>
<span class="quotelev1">&gt;     if( OPAL_UNLIKELY(MX_SUCCESS != mx_return) ) {
</span><br>
<span class="quotelev1">&gt;         opal_output( 0, &quot;Fail to re-register a fragment with the MX NIC ...\n&quot; );
</span><br>
<span class="quotelev1">&gt; @@ -396,7 +396,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mx_return = mx_isend( mx_btl-&gt;mx_endpoint, mx_segment, descriptor-&gt;des_src_cnt,
</span><br>
<span class="quotelev1">&gt;                           endpoint-&gt;mx_peer_addr,
</span><br>
<span class="quotelev1">&gt; -                          descriptor-&gt;des_dst[0].seg_key.key64, frag,
</span><br>
<span class="quotelev1">&gt; +                          descriptor-&gt;des_dst[0].seg_key.key64[0], frag,
</span><br>
<span class="quotelev1">&gt;                           &amp;frag-&gt;mx_request );
</span><br>
<span class="quotelev1">&gt;     if( OPAL_UNLIKELY(MX_SUCCESS != mx_return) ) {
</span><br>
<span class="quotelev1">&gt;         opal_output( 0, &quot;mx_isend fails with error %s\n&quot;, mx_strerror(mx_return) );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/portals/btl_portals.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/portals/btl_portals.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/portals/btl_portals.c	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -357,7 +357,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         frag-&gt;segments[0].seg_len = max_data;
</span><br>
<span class="quotelev1">&gt;         frag-&gt;segments[0].seg_addr.pval = iov.iov_base;
</span><br>
<span class="quotelev1">&gt; -        frag-&gt;segments[0].seg_key.key64 = 
</span><br>
<span class="quotelev1">&gt; +        frag-&gt;segments[0].seg_key.key64[0] = 
</span><br>
<span class="quotelev1">&gt;             OPAL_THREAD_ADD64(&amp;(mca_btl_portals_module.portals_rdma_key), 1);
</span><br>
<span class="quotelev1">&gt;         frag-&gt;base.des_src_cnt = 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -366,13 +366,13 @@
</span><br>
<span class="quotelev1">&gt;                              &quot;rdma src posted for frag 0x%lx, callback 0x%lx, bits %&quot;PRIu64&quot;, flags say %d&quot; ,
</span><br>
<span class="quotelev1">&gt;                              (unsigned long) frag, 
</span><br>
<span class="quotelev1">&gt;                              (unsigned long) frag-&gt;base.des_cbfunc,
</span><br>
<span class="quotelev1">&gt; -                             frag-&gt;segments[0].seg_key.key64, flags));
</span><br>
<span class="quotelev1">&gt; +                             frag-&gt;segments[0].seg_key.key64[0], flags));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* create a match entry */
</span><br>
<span class="quotelev1">&gt;         ret = PtlMEAttach(mca_btl_portals_module.portals_ni_h,
</span><br>
<span class="quotelev1">&gt;                           OMPI_BTL_PORTALS_RDMA_TABLE_ID,
</span><br>
<span class="quotelev1">&gt;                           *((mca_btl_base_endpoint_t*) peer),
</span><br>
<span class="quotelev1">&gt; -                          frag-&gt;segments[0].seg_key.key64, /* match */
</span><br>
<span class="quotelev1">&gt; +                          frag-&gt;segments[0].seg_key.key64[0], /* match */
</span><br>
<span class="quotelev1">&gt;                           0, /* ignore */
</span><br>
<span class="quotelev1">&gt;                           PTL_UNLINK,
</span><br>
<span class="quotelev1">&gt;                           PTL_INS_AFTER,
</span><br>
<span class="quotelev1">&gt; @@ -449,7 +449,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     frag-&gt;segments[0].seg_len = *size;
</span><br>
<span class="quotelev1">&gt;     opal_convertor_get_current_pointer( convertor, (void**)&amp;(frag-&gt;segments[0].seg_addr.pval) );
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;segments[0].seg_key.key64 = 
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;segments[0].seg_key.key64[0] = 
</span><br>
<span class="quotelev1">&gt;         OPAL_THREAD_ADD64(&amp;(mca_btl_portals_module.portals_rdma_key), 1);
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_src = NULL;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_src_cnt = 0;
</span><br>
<span class="quotelev1">&gt; @@ -461,14 +461,14 @@
</span><br>
<span class="quotelev1">&gt;                          &quot;rdma dest posted for frag 0x%lx, callback 0x%lx, bits %&quot; PRIu64 &quot; flags %d&quot;,
</span><br>
<span class="quotelev1">&gt;                          (unsigned long) frag,
</span><br>
<span class="quotelev1">&gt;                          (unsigned long) frag-&gt;base.des_cbfunc,
</span><br>
<span class="quotelev1">&gt; -                         frag-&gt;segments[0].seg_key.key64,
</span><br>
<span class="quotelev1">&gt; +                         frag-&gt;segments[0].seg_key.key64[0],
</span><br>
<span class="quotelev1">&gt;                          flags));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* create a match entry */
</span><br>
<span class="quotelev1">&gt;     ret = PtlMEAttach(mca_btl_portals_module.portals_ni_h,
</span><br>
<span class="quotelev1">&gt;                       OMPI_BTL_PORTALS_RDMA_TABLE_ID,
</span><br>
<span class="quotelev1">&gt;                       *((mca_btl_base_endpoint_t*) peer),
</span><br>
<span class="quotelev1">&gt; -                      frag-&gt;segments[0].seg_key.key64, /* match */
</span><br>
<span class="quotelev1">&gt; +                      frag-&gt;segments[0].seg_key.key64[0], /* match */
</span><br>
<span class="quotelev1">&gt;                       0, /* ignore */
</span><br>
<span class="quotelev1">&gt;                       PTL_UNLINK,
</span><br>
<span class="quotelev1">&gt;                       PTL_INS_AFTER,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/portals/btl_portals_frag.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/portals/btl_portals_frag.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/portals/btl_portals_frag.c	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -34,7 +34,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     frag-&gt;segments[0].seg_addr.pval = frag + 1;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;segments[0].seg_len = frag-&gt;size;
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;segments[0].seg_key.key64 = 0;
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;segments[0].seg_key.key64[0] = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     frag-&gt;md_h = PTL_INVALID_HANDLE;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/portals/btl_portals_rdma.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/portals/btl_portals_rdma.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/portals/btl_portals_rdma.c	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -39,7 +39,7 @@
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((90, mca_btl_portals_component.portals_output,
</span><br>
<span class="quotelev1">&gt;                          &quot;PtlPut (rdma) fragment %lx, bits %&quot; PRIx64,
</span><br>
<span class="quotelev1">&gt;                          (unsigned long) frag,
</span><br>
<span class="quotelev1">&gt; -                         frag-&gt;base.des_dst[0].seg_key.key64));
</span><br>
<span class="quotelev1">&gt; +                         frag-&gt;base.des_dst[0].seg_key.key64[0]));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     assert(&amp;mca_btl_portals_module == (mca_btl_portals_module_t*) btl_base);
</span><br>
<span class="quotelev1">&gt;     assert(frag-&gt;md_h != PTL_INVALID_HANDLE);
</span><br>
<span class="quotelev1">&gt; @@ -55,7 +55,7 @@
</span><br>
<span class="quotelev1">&gt;                  *((mca_btl_base_endpoint_t*) btl_peer),
</span><br>
<span class="quotelev1">&gt;                  OMPI_BTL_PORTALS_RDMA_TABLE_ID,
</span><br>
<span class="quotelev1">&gt;                  0, /* ac_index - not used*/
</span><br>
<span class="quotelev1">&gt; -                 frag-&gt;base.des_dst[0].seg_key.key64, /* match bits */
</span><br>
<span class="quotelev1">&gt; +                 frag-&gt;base.des_dst[0].seg_key.key64[0], /* match bits */
</span><br>
<span class="quotelev1">&gt;                  0, /* remote offset - not used */
</span><br>
<span class="quotelev1">&gt;                  *((ptl_hdr_data_t*) hdr_data));            /* hdr_data: tag */
</span><br>
<span class="quotelev1">&gt;     if (ret != PTL_OK) {
</span><br>
<span class="quotelev1">&gt; @@ -79,7 +79,7 @@
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((90, mca_btl_portals_component.portals_output,
</span><br>
<span class="quotelev1">&gt;                          &quot;PtlGet (rdma) fragment %lx, bits %&quot; PRIx64,
</span><br>
<span class="quotelev1">&gt;                          (unsigned long) frag,
</span><br>
<span class="quotelev1">&gt; -                         frag-&gt;base.des_src[0].seg_key.key64));
</span><br>
<span class="quotelev1">&gt; +                         frag-&gt;base.des_src[0].seg_key.key64[0]));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     assert(&amp;mca_btl_portals_module == (mca_btl_portals_module_t*) btl_base);
</span><br>
<span class="quotelev1">&gt;     assert(frag-&gt;md_h != PTL_INVALID_HANDLE);
</span><br>
<span class="quotelev1">&gt; @@ -91,7 +91,7 @@
</span><br>
<span class="quotelev1">&gt;                  *((mca_btl_base_endpoint_t*) btl_peer),
</span><br>
<span class="quotelev1">&gt;                  OMPI_BTL_PORTALS_RDMA_TABLE_ID,
</span><br>
<span class="quotelev1">&gt;                  0, /* ac_index - not used*/
</span><br>
<span class="quotelev1">&gt; -                 frag-&gt;base.des_src[0].seg_key.key64, /* match bits */
</span><br>
<span class="quotelev1">&gt; +                 frag-&gt;base.des_src[0].seg_key.key64[0], /* match bits */
</span><br>
<span class="quotelev1">&gt;                  0); /* remote offset - not used */
</span><br>
<span class="quotelev1">&gt;     if (ret != PTL_OK) {
</span><br>
<span class="quotelev1">&gt;         opal_output(mca_btl_portals_component.portals_output,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/self/btl_self.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/self/btl_self.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/self/btl_self.c	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -235,7 +235,7 @@
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_flags = flags;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_src          = &amp;frag-&gt;segment;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_src_cnt      = 1;
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;segment.seg_key.key64 = (uint64_t)(intptr_t)convertor;
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;segment.seg_key.key64[0] = (uint64_t)(intptr_t)convertor;
</span><br>
<span class="quotelev1">&gt;     return &amp;frag-&gt;base;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -264,7 +264,7 @@
</span><br>
<span class="quotelev1">&gt;     /* setup descriptor to point directly to user buffer */
</span><br>
<span class="quotelev1">&gt;     opal_convertor_get_current_pointer( convertor, (void**)&amp;(frag-&gt;segment.seg_addr.pval) );
</span><br>
<span class="quotelev1">&gt;     frag-&gt;segment.seg_len = reserve + max_data;
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;segment.seg_key.key64 = (uint64_t)(intptr_t)convertor;
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;segment.seg_key.key64[0] = (uint64_t)(intptr_t)convertor;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_dst = &amp;frag-&gt;segment;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_dst_cnt = 1;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_flags = flags;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/sm/btl_sm.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/sm/btl_sm.c	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -739,7 +739,7 @@
</span><br>
<span class="quotelev1">&gt;         if (OPAL_UNLIKELY(ioctl(sm_btl-&gt;knem_fd, KNEM_CMD_CREATE_REGION, &amp;knem_cr) &lt; 0)) {
</span><br>
<span class="quotelev1">&gt;             return NULL;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        frag-&gt;segment.seg_key.key64 = knem_cr.cookie;
</span><br>
<span class="quotelev1">&gt; +        frag-&gt;segment.seg_key.key64[0] = knem_cr.cookie;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_src = &amp;(frag-&gt;segment);
</span><br>
<span class="quotelev1">&gt; @@ -968,7 +968,7 @@
</span><br>
<span class="quotelev1">&gt;     recv_iovec.len =  dst-&gt;seg_len;
</span><br>
<span class="quotelev1">&gt;     icopy.local_iovec_array = (uintptr_t)&amp;recv_iovec;
</span><br>
<span class="quotelev1">&gt;     icopy.local_iovec_nr = 1;
</span><br>
<span class="quotelev1">&gt; -    icopy.remote_cookie = src-&gt;seg_key.key64;
</span><br>
<span class="quotelev1">&gt; +    icopy.remote_cookie = src-&gt;seg_key.key64[0];
</span><br>
<span class="quotelev1">&gt;     icopy.remote_offset = 0;
</span><br>
<span class="quotelev1">&gt;     icopy.write = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -1044,7 +1044,7 @@
</span><br>
<span class="quotelev1">&gt;         sm_btl-&gt;knem_status_first_avail = 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     ++sm_btl-&gt;knem_status_num_used;
</span><br>
<span class="quotelev1">&gt; -    icopy.remote_cookie = src-&gt;seg_key.key64;
</span><br>
<span class="quotelev1">&gt; +    icopy.remote_cookie = src-&gt;seg_key.key64[0];
</span><br>
<span class="quotelev1">&gt;     icopy.remote_offset = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Use the DMA flag if knem supports it *and* the segment length
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/vader/btl_vader.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/vader/btl_vader.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/vader/btl_vader.c	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -643,7 +643,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     opal_convertor_get_current_pointer (convertor, (void **) &amp;data_ptr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;segment.seg_key.ptr = (uintptr_t) data_ptr;
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;segment.seg_key.ptr[0] = (uintptr_t) data_ptr;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;segment.seg_len     = *size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_dst     = &amp;frag-&gt;segment;
</span><br>
<span class="quotelev1">&gt; @@ -738,7 +738,7 @@
</span><br>
<span class="quotelev1">&gt;             return NULL;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        frag-&gt;segment.seg_key.ptr = (uintptr_t) data_ptr;
</span><br>
<span class="quotelev1">&gt; +        frag-&gt;segment.seg_key.ptr[0] = (uintptr_t) data_ptr;
</span><br>
<span class="quotelev1">&gt;         frag-&gt;segment.seg_len = reserve + *size;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/vader/btl_vader_get.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/vader/btl_vader_get.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/vader/btl_vader_get.c	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -34,15 +34,15 @@
</span><br>
<span class="quotelev1">&gt;     void *rem_ptr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     reg = vader_get_registation (endpoint-&gt;peer_smp_rank,
</span><br>
<span class="quotelev1">&gt; -                                 (void *) src-&gt;seg_key.ptr,
</span><br>
<span class="quotelev1">&gt; +                                 (void *) src-&gt;seg_key.ptr[0],
</span><br>
<span class="quotelev1">&gt;                                  src-&gt;seg_len, 0);
</span><br>
<span class="quotelev1">&gt;     if (OPAL_UNLIKELY(NULL == reg)) {
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    rem_ptr = vader_reg_to_ptr (reg, (void *) src-&gt;seg_key.ptr);
</span><br>
<span class="quotelev1">&gt; +    rem_ptr = vader_reg_to_ptr (reg, (void *) src-&gt;seg_key.ptr[0]);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    vader_memmove ((void *) dst-&gt;seg_key.ptr, rem_ptr, size);
</span><br>
<span class="quotelev1">&gt; +    vader_memmove ((void *) dst-&gt;seg_key.ptr[0], rem_ptr, size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     vader_return_registration (reg, endpoint-&gt;peer_smp_rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/vader/btl_vader_put.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/vader/btl_vader_put.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/vader/btl_vader_put.c	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -34,15 +34,15 @@
</span><br>
<span class="quotelev1">&gt;     void *rem_ptr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     reg = vader_get_registation (endpoint-&gt;peer_smp_rank,
</span><br>
<span class="quotelev1">&gt; -                                 (void *) dst-&gt;seg_key.ptr,
</span><br>
<span class="quotelev1">&gt; +                                 (void *) dst-&gt;seg_key.ptr[0],
</span><br>
<span class="quotelev1">&gt;                                  dst-&gt;seg_len, 0);
</span><br>
<span class="quotelev1">&gt;     if (OPAL_UNLIKELY(NULL == reg)) {
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    rem_ptr = vader_reg_to_ptr (reg, (void *) dst-&gt;seg_key.ptr);
</span><br>
<span class="quotelev1">&gt; +    rem_ptr = vader_reg_to_ptr (reg, (void *) dst-&gt;seg_key.ptr[0]);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    vader_memmove (rem_ptr, (void *) src-&gt;seg_key.ptr, size);
</span><br>
<span class="quotelev1">&gt; +    vader_memmove (rem_ptr, (void *) src-&gt;seg_key.ptr[0], size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     vader_return_registration (reg, endpoint-&gt;peer_smp_rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9906.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9904.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9906.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9906.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
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
