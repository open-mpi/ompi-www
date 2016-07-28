<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 10:00:30 2011" -->
<!-- isoreceived="20111107150030" -->
<!-- sent="Mon, 7 Nov 2011 10:00:27 -0500" -->
<!-- isosent="20111107150027" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="ED99BB4A-79B7-4AE8-A9E2-ED279D755BBE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="23b586fd8e381b367d5705680b1ff0a2_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 10:00:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9913.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9912.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a union, right?  So the size increase (and type change for the 64 value) shouldn't have been necessary.
<br>
<p><p>On Nov 7, 2011, at 9:56 AM, Nathan T. Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Just keeping it consistent with the existing code. Thought it might be
</span><br>
<span class="quotelev1">&gt; necessary for heterogenous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 7 Nov 2011 09:14:21 -0500, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Just curious -- why was it necessary to increase the size of the 8, 32,
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; 64 arrays?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 6, 2011, at 11:19 AM, hjelmn_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: hjelmn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 25445
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25445">https://svn.open-mpi.org/trac/ompi/changeset/25445</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes to seg_key needed for a new btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/btl.h                      |     8 ++++----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/mx/btl_mx.c                |     6 +++---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/portals/btl_portals.c      |    12 ++++++------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/portals/btl_portals_frag.c |     2 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/portals/btl_portals_rdma.c |     8 ++++----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/self/btl_self.c            |     4 ++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/sm/btl_sm.c                |     6 +++---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/vader/btl_vader.c          |     4 ++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/vader/btl_vader_get.c      |     6 +++---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/vader/btl_vader_put.c      |     6 +++---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  10 files changed, 31 insertions(+), 31 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/btl.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/btl.h	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/btl.h	2011-11-06 11:19:09 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -238,10 +238,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /** Memory segment key required by some RDMA networks */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    union {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        uint32_t  key32[2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        uint64_t  key64;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        uint8_t   key8[8];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        uintptr_t ptr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        uint32_t  key32[4];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        uint64_t  key64[2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        uint8_t   key8[16];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        uintptr_t ptr[2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    } seg_key;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef struct mca_btl_base_segment_t mca_btl_base_segment_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/mx/btl_mx.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/mx/btl_mx.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/mx/btl_mx.c	2011-11-06 11:19:09 EST (Sun, 06 Nov
</span><br>
<span class="quotelev2">&gt;&gt; 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -323,13 +323,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;segment[0].seg_len       = *size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_convertor_get_current_pointer( convertor,
</span><br>
<span class="quotelev2">&gt;&gt; (void**)&amp;(frag-&gt;segment[0].seg_addr.pval) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    frag-&gt;segment[0].seg_key.key64 = (uint64_t)(intptr_t)frag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    frag-&gt;segment[0].seg_key.key64[0] = (uint64_t)(intptr_t)frag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mx_segment.segment_ptr    = frag-&gt;segment[0].seg_addr.pval;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mx_segment.segment_length = frag-&gt;segment[0].seg_len;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mx_return = mx_irecv( mx_btl-&gt;mx_endpoint, &amp;mx_segment, 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                          frag-&gt;segment[0].seg_key.key64,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                          frag-&gt;segment[0].seg_key.key64[0],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          BTL_MX_PUT_MASK, NULL, &amp;(frag-&gt;mx_request) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if( OPAL_UNLIKELY(MX_SUCCESS != mx_return) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        opal_output( 0, &quot;Fail to re-register a fragment with the MX NIC
</span><br>
<span class="quotelev2">&gt;&gt; ...\n&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -396,7 +396,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mx_return = mx_isend( mx_btl-&gt;mx_endpoint, mx_segment,
</span><br>
<span class="quotelev2">&gt;&gt; descriptor-&gt;des_src_cnt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          endpoint-&gt;mx_peer_addr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                          descriptor-&gt;des_dst[0].seg_key.key64, frag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                          descriptor-&gt;des_dst[0].seg_key.key64[0],
</span><br>
<span class="quotelev2">&gt;&gt; frag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          &amp;frag-&gt;mx_request );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if( OPAL_UNLIKELY(MX_SUCCESS != mx_return) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        opal_output( 0, &quot;mx_isend fails with error %s\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; mx_strerror(mx_return) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/portals/btl_portals.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/portals/btl_portals.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/portals/btl_portals.c	2011-11-06 11:19:09 EST
</span><br>
<span class="quotelev2">&gt;&gt; (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -357,7 +357,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        frag-&gt;segments[0].seg_len = max_data;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        frag-&gt;segments[0].seg_addr.pval = iov.iov_base;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        frag-&gt;segments[0].seg_key.key64 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        frag-&gt;segments[0].seg_key.key64[0] =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_THREAD_ADD64(&amp;(mca_btl_portals_module.portals_rdma_key), 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        frag-&gt;base.des_src_cnt = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -366,13 +366,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             &quot;rdma src posted for frag 0x%lx, callback
</span><br>
<span class="quotelev2">&gt;&gt; 0x%lx, bits %&quot;PRIu64&quot;, flags say %d&quot; ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             (unsigned long) frag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             (unsigned long) frag-&gt;base.des_cbfunc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                             frag-&gt;segments[0].seg_key.key64, flags));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             frag-&gt;segments[0].seg_key.key64[0],
</span><br>
<span class="quotelev2">&gt;&gt; flags));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        /* create a match entry */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ret = PtlMEAttach(mca_btl_portals_module.portals_ni_h,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          OMPI_BTL_PORTALS_RDMA_TABLE_ID,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          *((mca_btl_base_endpoint_t*) peer),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                          frag-&gt;segments[0].seg_key.key64, /* match */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                          frag-&gt;segments[0].seg_key.key64[0], /* match
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          0, /* ignore */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          PTL_UNLINK,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          PTL_INS_AFTER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -449,7 +449,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;segments[0].seg_len = *size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_convertor_get_current_pointer( convertor,
</span><br>
<span class="quotelev2">&gt;&gt; (void**)&amp;(frag-&gt;segments[0].seg_addr.pval) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    frag-&gt;segments[0].seg_key.key64 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    frag-&gt;segments[0].seg_key.key64[0] =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL_THREAD_ADD64(&amp;(mca_btl_portals_module.portals_rdma_key),
</span><br>
<span class="quotelev2">&gt;&gt; 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_src = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_src_cnt = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -461,14 +461,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         &quot;rdma dest posted for frag 0x%lx, callback
</span><br>
<span class="quotelev2">&gt;&gt; 0x%lx, bits %&quot; PRIu64 &quot; flags %d&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         (unsigned long) frag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         (unsigned long) frag-&gt;base.des_cbfunc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                         frag-&gt;segments[0].seg_key.key64,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                         frag-&gt;segments[0].seg_key.key64[0],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         flags));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* create a match entry */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ret = PtlMEAttach(mca_btl_portals_module.portals_ni_h,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      OMPI_BTL_PORTALS_RDMA_TABLE_ID,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      *((mca_btl_base_endpoint_t*) peer),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                      frag-&gt;segments[0].seg_key.key64, /* match */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                      frag-&gt;segments[0].seg_key.key64[0], /* match */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      0, /* ignore */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      PTL_UNLINK,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      PTL_INS_AFTER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/portals/btl_portals_frag.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/portals/btl_portals_frag.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/portals/btl_portals_frag.c	2011-11-06 11:19:09
</span><br>
<span class="quotelev2">&gt;&gt; EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -34,7 +34,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;segments[0].seg_addr.pval = frag + 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;segments[0].seg_len = frag-&gt;size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    frag-&gt;segments[0].seg_key.key64 = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    frag-&gt;segments[0].seg_key.key64[0] = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;md_h = PTL_INVALID_HANDLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/portals/btl_portals_rdma.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/portals/btl_portals_rdma.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/portals/btl_portals_rdma.c	2011-11-06 11:19:09
</span><br>
<span class="quotelev2">&gt;&gt; EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -39,7 +39,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    OPAL_OUTPUT_VERBOSE((90, mca_btl_portals_component.portals_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         &quot;PtlPut (rdma) fragment %lx, bits %&quot; PRIx64,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         (unsigned long) frag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                         frag-&gt;base.des_dst[0].seg_key.key64));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                         frag-&gt;base.des_dst[0].seg_key.key64[0]));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    assert(&amp;mca_btl_portals_module == (mca_btl_portals_module_t*)
</span><br>
<span class="quotelev2">&gt;&gt; btl_base);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    assert(frag-&gt;md_h != PTL_INVALID_HANDLE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -55,7 +55,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 *((mca_btl_base_endpoint_t*) btl_peer),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 OMPI_BTL_PORTALS_RDMA_TABLE_ID,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 0, /* ac_index - not used*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                 frag-&gt;base.des_dst[0].seg_key.key64, /* match bits */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                 frag-&gt;base.des_dst[0].seg_key.key64[0], /* match bits
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 0, /* remote offset - not used */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 *((ptl_hdr_data_t*) hdr_data));            /* hdr_data:
</span><br>
<span class="quotelev2">&gt;&gt; tag */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (ret != PTL_OK) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -79,7 +79,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    OPAL_OUTPUT_VERBOSE((90, mca_btl_portals_component.portals_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         &quot;PtlGet (rdma) fragment %lx, bits %&quot; PRIx64,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         (unsigned long) frag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                         frag-&gt;base.des_src[0].seg_key.key64));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                         frag-&gt;base.des_src[0].seg_key.key64[0]));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    assert(&amp;mca_btl_portals_module == (mca_btl_portals_module_t*)
</span><br>
<span class="quotelev2">&gt;&gt; btl_base);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    assert(frag-&gt;md_h != PTL_INVALID_HANDLE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -91,7 +91,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 *((mca_btl_base_endpoint_t*) btl_peer),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 OMPI_BTL_PORTALS_RDMA_TABLE_ID,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 0, /* ac_index - not used*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                 frag-&gt;base.des_src[0].seg_key.key64, /* match bits */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                 frag-&gt;base.des_src[0].seg_key.key64[0], /* match bits
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 0); /* remote offset - not used */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (ret != PTL_OK) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        opal_output(mca_btl_portals_component.portals_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/self/btl_self.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/self/btl_self.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/self/btl_self.c	2011-11-06 11:19:09 EST (Sun, 06
</span><br>
<span class="quotelev2">&gt;&gt; Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -235,7 +235,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_flags = flags;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_src          = &amp;frag-&gt;segment;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_src_cnt      = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    frag-&gt;segment.seg_key.key64 = (uint64_t)(intptr_t)convertor;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    frag-&gt;segment.seg_key.key64[0] = (uint64_t)(intptr_t)convertor;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return &amp;frag-&gt;base;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -264,7 +264,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* setup descriptor to point directly to user buffer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_convertor_get_current_pointer( convertor,
</span><br>
<span class="quotelev2">&gt;&gt; (void**)&amp;(frag-&gt;segment.seg_addr.pval) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;segment.seg_len = reserve + max_data;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    frag-&gt;segment.seg_key.key64 = (uint64_t)(intptr_t)convertor;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    frag-&gt;segment.seg_key.key64[0] = (uint64_t)(intptr_t)convertor;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_dst = &amp;frag-&gt;segment;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_dst_cnt = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_flags = flags;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/sm/btl_sm.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/sm/btl_sm.c	2011-11-06 11:19:09 EST (Sun, 06 Nov
</span><br>
<span class="quotelev2">&gt;&gt; 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -739,7 +739,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if (OPAL_UNLIKELY(ioctl(sm_btl-&gt;knem_fd, KNEM_CMD_CREATE_REGION,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;knem_cr) &lt; 0)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            return NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        frag-&gt;segment.seg_key.key64 = knem_cr.cookie;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        frag-&gt;segment.seg_key.key64[0] = knem_cr.cookie;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_src = &amp;(frag-&gt;segment);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -968,7 +968,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    recv_iovec.len =  dst-&gt;seg_len;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    icopy.local_iovec_array = (uintptr_t)&amp;recv_iovec;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    icopy.local_iovec_nr = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    icopy.remote_cookie = src-&gt;seg_key.key64;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    icopy.remote_cookie = src-&gt;seg_key.key64[0];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    icopy.remote_offset = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    icopy.write = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1044,7 +1044,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        sm_btl-&gt;knem_status_first_avail = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ++sm_btl-&gt;knem_status_num_used;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    icopy.remote_cookie = src-&gt;seg_key.key64;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    icopy.remote_cookie = src-&gt;seg_key.key64[0];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    icopy.remote_offset = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* Use the DMA flag if knem supports it *and* the segment length
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/vader/btl_vader.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/vader/btl_vader.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/vader/btl_vader.c	2011-11-06 11:19:09 EST (Sun,
</span><br>
<span class="quotelev2">&gt;&gt; 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -643,7 +643,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_convertor_get_current_pointer (convertor, (void **) &amp;data_ptr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    frag-&gt;segment.seg_key.ptr = (uintptr_t) data_ptr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    frag-&gt;segment.seg_key.ptr[0] = (uintptr_t) data_ptr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;segment.seg_len     = *size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    frag-&gt;base.des_dst     = &amp;frag-&gt;segment;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -738,7 +738,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            return NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        frag-&gt;segment.seg_key.ptr = (uintptr_t) data_ptr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        frag-&gt;segment.seg_key.ptr[0] = (uintptr_t) data_ptr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        frag-&gt;segment.seg_len = reserve + *size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/vader/btl_vader_get.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/vader/btl_vader_get.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/vader/btl_vader_get.c	2011-11-06 11:19:09 EST
</span><br>
<span class="quotelev2">&gt;&gt; (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -34,15 +34,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void *rem_ptr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    reg = vader_get_registation (endpoint-&gt;peer_smp_rank,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                                 (void *) src-&gt;seg_key.ptr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                 (void *) src-&gt;seg_key.ptr[0],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 src-&gt;seg_len, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (OPAL_UNLIKELY(NULL == reg)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    rem_ptr = vader_reg_to_ptr (reg, (void *) src-&gt;seg_key.ptr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    rem_ptr = vader_reg_to_ptr (reg, (void *) src-&gt;seg_key.ptr[0]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    vader_memmove ((void *) dst-&gt;seg_key.ptr, rem_ptr, size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    vader_memmove ((void *) dst-&gt;seg_key.ptr[0], rem_ptr, size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    vader_return_registration (reg, endpoint-&gt;peer_smp_rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/vader/btl_vader_put.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/vader/btl_vader_put.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/vader/btl_vader_put.c	2011-11-06 11:19:09 EST
</span><br>
<span class="quotelev2">&gt;&gt; (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -34,15 +34,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void *rem_ptr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    reg = vader_get_registation (endpoint-&gt;peer_smp_rank,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                                 (void *) dst-&gt;seg_key.ptr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                 (void *) dst-&gt;seg_key.ptr[0],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 dst-&gt;seg_len, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (OPAL_UNLIKELY(NULL == reg)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    rem_ptr = vader_reg_to_ptr (reg, (void *) dst-&gt;seg_key.ptr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    rem_ptr = vader_reg_to_ptr (reg, (void *) dst-&gt;seg_key.ptr[0]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    vader_memmove (rem_ptr, (void *) src-&gt;seg_key.ptr, size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    vader_memmove (rem_ptr, (void *) src-&gt;seg_key.ptr[0], size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    vader_return_registration (reg, endpoint-&gt;peer_smp_rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9913.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9912.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
