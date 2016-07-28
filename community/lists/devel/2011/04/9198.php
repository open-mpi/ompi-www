<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r24617";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 18:03:13 2011" -->
<!-- isoreceived="20110414220313" -->
<!-- sent="Thu, 14 Apr 2011 18:03:08 -0400" -->
<!-- isosent="20110414220308" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r24617" -->
<!-- id="F28AC4CA-6E3F-4CC6-9556-709A059B527D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201104142150.p3ELo7UD024482_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r24617<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 18:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9199.php">Rolf vandeVaart: "[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9197.php">George Bosilca: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Unfortunately, this didn't automatically create CMRs (I'm not sure why).  :-(
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: April 14, 2011 5:50:07 PM EDT
</span><br>
<span class="quotelev1">&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r24617
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2011-04-14 17:50:06 EDT (Thu, 14 Apr 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24617
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24617">https://svn.open-mpi.org/trac/ompi/changeset/24617</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Based on the patch submitted by Pascal Deveze, here is the memory leak fix
</span><br>
<span class="quotelev1">&gt; for the type indexed creation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CMR v1.4 and v1.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/datatype/ompi_datatype_create_indexed.c |    62 ++++++++++++++++----------------------- 
</span><br>
<span class="quotelev1">&gt;   1 files changed, 26 insertions(+), 36 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/datatype/ompi_datatype_create_indexed.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/datatype/ompi_datatype_create_indexed.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/datatype/ompi_datatype_create_indexed.c	2011-04-14 17:50:06 EDT (Thu, 14 Apr 2011)
</span><br>
<span class="quotelev1">&gt; @@ -3,7 +3,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2006 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;  *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2009 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2010 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt;  *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2006 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev1">&gt; @@ -46,26 +46,21 @@
</span><br>
<span class="quotelev1">&gt;     dLength = pBlockLength[0];
</span><br>
<span class="quotelev1">&gt;     endat = disp + dLength;
</span><br>
<span class="quotelev1">&gt;     ompi_datatype_type_extent( oldType, &amp;extent );
</span><br>
<span class="quotelev1">&gt; -    if( 1 &gt;= count ) {
</span><br>
<span class="quotelev1">&gt; -        pdt = ompi_datatype_create( oldType-&gt;super.desc.used + 2 );
</span><br>
<span class="quotelev1">&gt; -        /* multiply by count to make it zero if count is zero */
</span><br>
<span class="quotelev1">&gt; -        ompi_datatype_add( pdt, oldType, count * dLength, disp * extent, extent );
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        pdt = ompi_datatype_create( count * (2 + oldType-&gt;super.desc.used) );
</span><br>
<span class="quotelev1">&gt; -        for( i = 1; i &lt; count; i++ ) {
</span><br>
<span class="quotelev1">&gt; -            if( endat == pDisp[i] ) {
</span><br>
<span class="quotelev1">&gt; -                /* contiguous with the previsious */
</span><br>
<span class="quotelev1">&gt; -                dLength += pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; -                endat += pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; -            } else {
</span><br>
<span class="quotelev1">&gt; -                ompi_datatype_add( pdt, oldType, dLength, disp * extent, extent );
</span><br>
<span class="quotelev1">&gt; -                disp = pDisp[i];
</span><br>
<span class="quotelev1">&gt; -                dLength = pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; -                endat = disp + pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    pdt = ompi_datatype_create( count * (2 + oldType-&gt;super.desc.used) );
</span><br>
<span class="quotelev1">&gt; +    for( i = 1; i &lt; count; i++ ) {
</span><br>
<span class="quotelev1">&gt; +        if( endat == pDisp[i] ) {
</span><br>
<span class="quotelev1">&gt; +            /* contiguous with the previsious */
</span><br>
<span class="quotelev1">&gt; +            dLength += pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; +            endat += pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            ompi_datatype_add( pdt, oldType, dLength, disp * extent, extent );
</span><br>
<span class="quotelev1">&gt; +            disp = pDisp[i];
</span><br>
<span class="quotelev1">&gt; +            dLength = pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; +            endat = disp + pBlockLength[i];
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        ompi_datatype_add( pdt, oldType, dLength, disp * extent, extent );
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    ompi_datatype_add( pdt, oldType, dLength, disp * extent, extent );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *newType = pdt;
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; @@ -91,25 +86,20 @@
</span><br>
<span class="quotelev1">&gt;     dLength = pBlockLength[0];
</span><br>
<span class="quotelev1">&gt;     endat = disp + dLength * extent;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if( 1 &gt;= count ) {
</span><br>
<span class="quotelev1">&gt; -        pdt = ompi_datatype_create( oldType-&gt;super.desc.used + 2 );
</span><br>
<span class="quotelev1">&gt; -        /* multiply by count to make it zero if count is zero */
</span><br>
<span class="quotelev1">&gt; -        ompi_datatype_add( pdt, oldType, count * dLength, disp, extent );
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        for( i = 1; i &lt; count; i++ ) {
</span><br>
<span class="quotelev1">&gt; -            if( endat == pDisp[i] ) {
</span><br>
<span class="quotelev1">&gt; -                /* contiguous with the previsious */
</span><br>
<span class="quotelev1">&gt; -                dLength += pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; -                endat += pBlockLength[i] * extent;
</span><br>
<span class="quotelev1">&gt; -            } else {
</span><br>
<span class="quotelev1">&gt; -                ompi_datatype_add( pdt, oldType, dLength, disp, extent );
</span><br>
<span class="quotelev1">&gt; -                disp = pDisp[i];
</span><br>
<span class="quotelev1">&gt; -                dLength = pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; -                endat = disp + pBlockLength[i] * extent;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; +    for( i = 1; i &lt; count; i++ ) {
</span><br>
<span class="quotelev1">&gt; +        if( endat == pDisp[i] ) {
</span><br>
<span class="quotelev1">&gt; +            /* contiguous with the previsious */
</span><br>
<span class="quotelev1">&gt; +            dLength += pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; +            endat += pBlockLength[i] * extent;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            ompi_datatype_add( pdt, oldType, dLength, disp, extent );
</span><br>
<span class="quotelev1">&gt; +            disp = pDisp[i];
</span><br>
<span class="quotelev1">&gt; +            dLength = pBlockLength[i];
</span><br>
<span class="quotelev1">&gt; +            endat = disp + pBlockLength[i] * extent;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        ompi_datatype_add( pdt, oldType, dLength, disp, extent );
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    ompi_datatype_add( pdt, oldType, dLength, disp, extent );
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     *newType = pdt;
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9199.php">Rolf vandeVaart: "[OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9197.php">George Bosilca: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
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
