<?
$subject_val = "Re: [OMPI devel] Fixing SPARC bus errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 15:40:57 2008" -->
<!-- isoreceived="20080103204057" -->
<!-- sent="Thu, 3 Jan 2008 15:40:50 -0500" -->
<!-- isosent="20080103204050" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fixing SPARC bus errors" -->
<!-- id="04EBF9FB-8CF7-4BFB-97A0-2F7FD5701E6C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="477D3BE4.2020804_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fixing SPARC bus errors<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 15:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2929.php">Rolf vandeVaart: "[OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>In reply to:</strong> <a href="2929.php">Rolf vandeVaart: "[OMPI devel] Fixing SPARC bus errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2935.php">Rolf Vandevaart: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>Reply:</strong> <a href="2935.php">Rolf Vandevaart: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>If we memcpy instead of assigning the header in the OB1 PML why do we  
<br>
need the padding in the frag header ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 3, 2008, at 2:47 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings.  We have seen some bus errors when compiling a user
</span><br>
<span class="quotelev1">&gt; application with certain compiler flags and running on a sparc based
</span><br>
<span class="quotelev1">&gt; server.  The issue is that some structures are not word or double word
</span><br>
<span class="quotelev1">&gt; aligned causing a bus error.  I have tracked down two places where I  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; make a minor change and everything seems to work fine.   However, I  
</span><br>
<span class="quotelev1">&gt; want
</span><br>
<span class="quotelev1">&gt; to see if anyone has issues with these changes.  The two changes are
</span><br>
<span class="quotelev1">&gt; shown below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; burl-ct-v440-0 206 =&gt;svn diff
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/sm/btl_sm_frag.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/sm/btl_sm_frag.h    (revision 17039)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/sm/btl_sm_frag.h    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev1">&gt; *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2008      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; *  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -41,6 +42,10 @@
</span><br>
<span class="quotelev1">&gt;    struct mca_btl_sm_frag_t *frag;
</span><br>
<span class="quotelev1">&gt;    size_t len;
</span><br>
<span class="quotelev1">&gt;    mca_btl_base_tag_t tag;
</span><br>
<span class="quotelev1">&gt; +   /* Add a 4 byte pad to round out structure to 16 bytes for 32-bit
</span><br>
<span class="quotelev1">&gt; +    * and to 24 bytes for 64-bit.  Helps prevent bus errors for  
</span><br>
<span class="quotelev1">&gt; strict
</span><br>
<span class="quotelev1">&gt; +    * alignment cases like SPARC. */
</span><br>
<span class="quotelev1">&gt; +    char pad[4];
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; typedef struct mca_btl_sm_hdr_t mca_btl_sm_hdr_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/pml/ob1/pml_ob1_recvfrag.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/pml/ob1/pml_ob1_recvfrag.h    (revision 17039)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/pml/ob1/pml_ob1_recvfrag.h    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev1">&gt; *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2008      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; *  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -67,7 +68,8 @@
</span><br>
<span class="quotelev1">&gt;    unsigned char* _ptr = (unsigned char*)frag- 
</span><br>
<span class="quotelev2">&gt; &gt;addr;                   \
</span><br>
<span class="quotelev1">&gt;    /* init recv_frag  
</span><br>
<span class="quotelev1">&gt; */                                                \
</span><br>
<span class="quotelev1">&gt;    frag-&gt;btl =  
</span><br>
<span class="quotelev1">&gt; btl;                                                    \
</span><br>
<span class="quotelev1">&gt; -    frag-&gt;hdr =  
</span><br>
<span class="quotelev1">&gt; *(mca_pml_ob1_hdr_t*)hdr;                               \
</span><br>
<span class="quotelev1">&gt; +    memcpy(&amp;frag-&gt;hdr, (void *) 
</span><br>
<span class="quotelev1">&gt; ((mca_pml_ob1_hdr_t*)hdr)                \
</span><br>
<span class="quotelev1">&gt; +            
</span><br>
<span class="quotelev1">&gt; sizeof(mca_pml_ob1_hdr_t));                                  \
</span><br>
<span class="quotelev1">&gt;    frag-&gt;num_segments =  
</span><br>
<span class="quotelev1">&gt; 1;                                             \
</span><br>
<span class="quotelev1">&gt;    _size =  
</span><br>
<span class="quotelev1">&gt; segs[0].seg_len;                                            \
</span><br>
<span class="quotelev1">&gt;    for( i = 1; i &lt; cnt; i++ )  
</span><br>
<span class="quotelev1">&gt; {                                        \
</span><br>
<span class="quotelev1">&gt; burl-ct-v440-0 207 =&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ticket associated with this issue is
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1148">https://svn.open-mpi.org/trac/ompi/ticket/1148</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2930/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2929.php">Rolf vandeVaart: "[OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>In reply to:</strong> <a href="2929.php">Rolf vandeVaart: "[OMPI devel] Fixing SPARC bus errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2935.php">Rolf Vandevaart: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>Reply:</strong> <a href="2935.php">Rolf Vandevaart: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
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
