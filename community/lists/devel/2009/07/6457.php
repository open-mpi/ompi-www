<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21703";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 15:15:28 2009" -->
<!-- isoreceived="20090716191528" -->
<!-- sent="Thu, 16 Jul 2009 15:15:23 -0400" -->
<!-- isosent="20090716191523" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21703" -->
<!-- id="911EBF87-4E5D-430B-8C52-3D1952758F6D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200907161913.n6GJDVEF019156_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21703<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 15:15:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6456.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George!
<br>
<p>On Jul 16, 2009, at 3:13 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-07-16 15:13:30 EDT (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21703
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21703">https://svn.open-mpi.org/trac/ompi/changeset/21703</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Get rid of the ompi_convertor.h header file. Replace all references  
</span><br>
<span class="quotelev1">&gt; to ompi_convertor
</span><br>
<span class="quotelev1">&gt; by opal_convertor.
</span><br>
<span class="quotelev1">&gt; Cleanup the pcie BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/ompi_convertor.h
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/Makefile.am              |     1 -
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/pcie/btl_pcie.c           |    15 ++++++++-------
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/pcie/btl_pcie.h           |     4 ++--
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/pcie/btl_pcie_component.c |     1 -
</span><br>
<span class="quotelev1">&gt;   4 files changed, 10 insertions(+), 11 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/datatype/Makefile.am
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/datatype/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/datatype/Makefile.am	2009-07-16 15:13:30 EDT (Thu, 16  
</span><br>
<span class="quotelev1">&gt; Jul 2009)
</span><br>
<span class="quotelev1">&gt; @@ -20,7 +20,6 @@
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; headers = \
</span><br>
<span class="quotelev1">&gt; -        ompi_convertor.h \
</span><br>
<span class="quotelev1">&gt;         ompi_datatype.h \
</span><br>
<span class="quotelev1">&gt;         ompi_datatype_internal.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/ompi/datatype/ompi_convertor.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/datatype/ompi_convertor.h	2009-07-16 15:13:30 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev1">&gt; +++ (empty file)
</span><br>
<span class="quotelev1">&gt; @@ -1,89 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -/* -*- Mode: C; c-basic-offset:4 ; -*- */
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2009      The University of Tennessee and The  
</span><br>
<span class="quotelev1">&gt; University
</span><br>
<span class="quotelev1">&gt; - *                         of Tennessee Research Foundation.  All  
</span><br>
<span class="quotelev1">&gt; rights
</span><br>
<span class="quotelev1">&gt; - *                         reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2009      Oak Ridge National Labs.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; - * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * $HEADER$
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#ifndef OMPI_CONVERTOR_H
</span><br>
<span class="quotelev1">&gt; -#define OMPI_CONVERTOR_H
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &lt;stddef.h&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/datatype/opal_convertor.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/datatype/ompi_datatype.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * XXX TODO To be deleted again.
</span><br>
<span class="quotelev1">&gt; - * Very small interface to have code, which depends on  
</span><br>
<span class="quotelev1">&gt; ompi_convertor_prepare... interface
</span><br>
<span class="quotelev1">&gt; - * to work, still...
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; - * However, still any header #include &quot;opal/datatype/ 
</span><br>
<span class="quotelev1">&gt; opal_convertor.h&quot; will need
</span><br>
<span class="quotelev1">&gt; - * to be renamed to #include &quot;ompi/datatype/ompi_convertor.h&quot;
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -#warning &quot;This header file should only be included as a  
</span><br>
<span class="quotelev1">&gt; convenience. Please use the opal_convert.h header, functions and  
</span><br>
<span class="quotelev1">&gt; macros&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#define ompi_convertor_t    opal_convertor_t
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static inline int32_t  
</span><br>
<span class="quotelev1">&gt; ompi_convertor_prepare_for_send( opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; -                                                       const  
</span><br>
<span class="quotelev1">&gt; ompi_datatype_t* datatype,
</span><br>
<span class="quotelev1">&gt; -                                                       int32_t count,
</span><br>
<span class="quotelev1">&gt; -                                                       const void*  
</span><br>
<span class="quotelev1">&gt; pUserBuf)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    return opal_convertor_prepare_for_send( convertor,
</span><br>
<span class="quotelev1">&gt; -                                            &amp;(datatype-&gt;super),
</span><br>
<span class="quotelev1">&gt; -                                            count,
</span><br>
<span class="quotelev1">&gt; -                                            pUserBuf);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static inline int32_t  
</span><br>
<span class="quotelev1">&gt; ompi_convertor_copy_and_prepare_for_send( const opal_convertor_t*  
</span><br>
<span class="quotelev1">&gt; pSrcConv,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; const ompi_datatype_t* datatype,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; int32_t count,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; const void* pUserBuf,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; int32_t flags,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; opal_convertor_t* convertor )
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    return opal_convertor_copy_and_prepare_for_send( pSrcConv,
</span><br>
<span class="quotelev1">&gt; -                                                     &amp;(datatype- 
</span><br>
<span class="quotelev2">&gt; &gt;super),
</span><br>
<span class="quotelev1">&gt; -                                                     count,
</span><br>
<span class="quotelev1">&gt; -                                                     pUserBuf,
</span><br>
<span class="quotelev1">&gt; -                                                     flags,
</span><br>
<span class="quotelev1">&gt; -                                                     convertor );
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static inline int32_t  
</span><br>
<span class="quotelev1">&gt; ompi_convertor_prepare_for_recv( opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; -                                                       const  
</span><br>
<span class="quotelev1">&gt; ompi_datatype_t* datatype,
</span><br>
<span class="quotelev1">&gt; -                                                       int32_t count,
</span><br>
<span class="quotelev1">&gt; -                                                       const void*  
</span><br>
<span class="quotelev1">&gt; pUserBuf )
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    return opal_convertor_prepare_for_recv( convertor,
</span><br>
<span class="quotelev1">&gt; -                                            &amp;(datatype-&gt;super),
</span><br>
<span class="quotelev1">&gt; -                                            count,
</span><br>
<span class="quotelev1">&gt; -                                            pUserBuf );
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static inline int32_t  
</span><br>
<span class="quotelev1">&gt; ompi_convertor_copy_and_prepare_for_recv( const opal_convertor_t*  
</span><br>
<span class="quotelev1">&gt; pSrcConv,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; const ompi_datatype_t* datatype,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; int32_t count,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; const void* pUserBuf,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; int32_t flags,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; opal_convertor_t* convertor )
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    return opal_convertor_copy_and_prepare_for_recv( pSrcConv,
</span><br>
<span class="quotelev1">&gt; -                                                     &amp;(datatype- 
</span><br>
<span class="quotelev2">&gt; &gt;super),
</span><br>
<span class="quotelev1">&gt; -                                                     count,
</span><br>
<span class="quotelev1">&gt; -                                                     pUserBuf,
</span><br>
<span class="quotelev1">&gt; -                                                     flags,
</span><br>
<span class="quotelev1">&gt; -                                                     convertor );
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#endif /* OMPI_CONVERTOR_H */
</span><br>
<span class="quotelev1">&gt; \ No newline at end of file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/pcie/btl_pcie.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/pcie/btl_pcie.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/pcie/btl_pcie.c	2009-07-16 15:13:30 EDT (Thu,  
</span><br>
<span class="quotelev1">&gt; 16 Jul 2009)
</span><br>
<span class="quotelev1">&gt; @@ -19,7 +19,8 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/paffinity/paffinity.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/datatype/ompi_convertor.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/datatype/opal_convertor.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/datatype/ompi_datatype.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/btl/base/btl_base_error.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -205,7 +206,7 @@
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt;     struct mca_mpool_base_registration_t* registration,
</span><br>
<span class="quotelev1">&gt; -    struct ompi_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; +    struct opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt;     uint8_t order,
</span><br>
<span class="quotelev1">&gt;     size_t reserve,
</span><br>
<span class="quotelev1">&gt;     size_t* size,
</span><br>
<span class="quotelev1">&gt; @@ -223,7 +224,7 @@
</span><br>
<span class="quotelev1">&gt;     BTL_VERBOSE((&quot;btl_pcie_prepare_src called with reserve %lu&quot;,  
</span><br>
<span class="quotelev1">&gt; (unsigned long)reserve));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* check and see if the data is contiguous */
</span><br>
<span class="quotelev1">&gt; -    if(ompi_convertor_need_buffers(convertor) == false &amp;&amp; 0 ==  
</span><br>
<span class="quotelev1">&gt; reserve) {
</span><br>
<span class="quotelev1">&gt; +    if(opal_convertor_need_buffers(convertor) == false &amp;&amp; 0 ==  
</span><br>
<span class="quotelev1">&gt; reserve) {
</span><br>
<span class="quotelev1">&gt;        MCA_BTL_PCIE_FRAG_ALLOC_DMA(btl, frag, rc);
</span><br>
<span class="quotelev1">&gt;         if(NULL == frag) {
</span><br>
<span class="quotelev1">&gt;             return NULL;
</span><br>
<span class="quotelev1">&gt; @@ -233,7 +234,7 @@
</span><br>
<span class="quotelev1">&gt;         iov.iov_base = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* get the user buffer's address */
</span><br>
<span class="quotelev1">&gt; -        ompi_convertor_pack(convertor, &amp;iov, &amp;iov_count, &amp;max_data);
</span><br>
<span class="quotelev1">&gt; +        opal_convertor_pack(convertor, &amp;iov, &amp;iov_count, &amp;max_data);
</span><br>
<span class="quotelev1">&gt;         *size = max_data;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if(NULL == registration) {
</span><br>
<span class="quotelev1">&gt; @@ -280,7 +281,7 @@
</span><br>
<span class="quotelev1">&gt;             iov.iov_len = max_data;
</span><br>
<span class="quotelev1">&gt;             iov.iov_base = (unsigned char*) frag- 
</span><br>
<span class="quotelev2">&gt; &gt;segment.seg_addr.pval + reserve;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -            rc = ompi_convertor_pack(convertor, &amp;iov, &amp;iov_count,  
</span><br>
<span class="quotelev1">&gt; &amp;max_data );
</span><br>
<span class="quotelev1">&gt; +            rc = opal_convertor_pack(convertor, &amp;iov, &amp;iov_count,  
</span><br>
<span class="quotelev1">&gt; &amp;max_data );
</span><br>
<span class="quotelev1">&gt;             *size  = max_data;
</span><br>
<span class="quotelev1">&gt;             if( rc &lt; 0 ) {
</span><br>
<span class="quotelev1">&gt;                 MCA_BTL_PCIE_FRAG_RETURN(btl, frag, rc);
</span><br>
<span class="quotelev1">&gt; @@ -305,7 +306,7 @@
</span><br>
<span class="quotelev1">&gt;             iov.iov_len = max_data;
</span><br>
<span class="quotelev1">&gt;             iov.iov_base = (unsigned char*) frag- 
</span><br>
<span class="quotelev2">&gt; &gt;segment.seg_addr.pval + reserve;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -            rc = ompi_convertor_pack(convertor, &amp;iov, &amp;iov_count,  
</span><br>
<span class="quotelev1">&gt; &amp;max_data );
</span><br>
<span class="quotelev1">&gt; +            rc = opal_convertor_pack(convertor, &amp;iov, &amp;iov_count,  
</span><br>
<span class="quotelev1">&gt; &amp;max_data );
</span><br>
<span class="quotelev1">&gt;             *size  = max_data;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             if( rc &lt; 0 ) {
</span><br>
<span class="quotelev1">&gt; @@ -344,7 +345,7 @@
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt;     struct mca_mpool_base_registration_t* registration,
</span><br>
<span class="quotelev1">&gt; -    struct ompi_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; +    struct opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt;     uint8_t order,
</span><br>
<span class="quotelev1">&gt;     size_t reserve,
</span><br>
<span class="quotelev1">&gt;     size_t* size,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/pcie/btl_pcie.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/pcie/btl_pcie.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/pcie/btl_pcie.h	2009-07-16 15:13:30 EDT (Thu,  
</span><br>
<span class="quotelev1">&gt; 16 Jul 2009)
</span><br>
<span class="quotelev1">&gt; @@ -334,7 +334,7 @@
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt;     struct mca_mpool_base_registration_t* registration,
</span><br>
<span class="quotelev1">&gt; -    struct ompi_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; +    struct opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt;     uint8_t order,
</span><br>
<span class="quotelev1">&gt;     size_t reserve,
</span><br>
<span class="quotelev1">&gt;     size_t* size,
</span><br>
<span class="quotelev1">&gt; @@ -345,7 +345,7 @@
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt;     struct mca_mpool_base_registration_t* registration,
</span><br>
<span class="quotelev1">&gt; -    struct ompi_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt; +    struct opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt;     uint8_t order,
</span><br>
<span class="quotelev1">&gt;     size_t reserve,
</span><br>
<span class="quotelev1">&gt;     size_t* size,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/pcie/btl_pcie_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/pcie/btl_pcie_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/pcie/btl_pcie_component.c	2009-07-16 15:13:30  
</span><br>
<span class="quotelev1">&gt; EDT (Thu, 16 Jul 2009)
</span><br>
<span class="quotelev1">&gt; @@ -32,7 +32,6 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/datatype/ompi_convertor.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/btl/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/btl/base/btl_base_error.h&quot;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6456.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
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
