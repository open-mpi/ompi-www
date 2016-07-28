<?
$subject_val = "Re: [OMPI devel] Fixing SPARC bus errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 13:49:12 2008" -->
<!-- isoreceived="20080104184912" -->
<!-- sent="Fri, 04 Jan 2008 13:49:01 -0500" -->
<!-- isosent="20080104184901" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fixing SPARC bus errors" -->
<!-- id="477E7F9D.6080709_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04EBF9FB-8CF7-4BFB-97A0-2F7FD5701E6C_at_eecs.utk.edu" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-04 13:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2936.php">Gleb Natapov: "Re: [OMPI devel] Common initialization code for IB."</a>
<li><strong>Previous message:</strong> <a href="2934.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>In reply to:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello George:
<br>
<p>While the change on the shm side does initially seem unnecessary, it
<br>
is handling a bus error case on the sending side, not on the receiving
<br>
side.
<br>
<p>The change in the mca_btl_sm_hdr_t is necessary because of the way the
<br>
pml and btl headers are stored in shared memory and because of the
<br>
fact that in some cases, the pml header has a uint64_t in it.  If the
<br>
mca_btl_sm_hdr_t is size 12, then the pml header does not start on a
<br>
double-word aligned boundary.  In the case the pml header is a
<br>
mca_pml_ob1_rendezvous_hdr_t, we get a bus error while loading the
<br>
hdr_msg_length.  Here is an example of it although it can happen in
<br>
other places as well. (Line numbers are close to what is in the trunk
<br>
give or take a few lines)
<br>
<p>program terminated by signal BUS (invalid address alignment)
<br>
Current function is mca_pml_ob1_send_request_start_rndv (optimized)
<br>
&nbsp;&nbsp;&nbsp;743 hdr-&gt;hdr_rndv.hdr_msg_length = sendreq-&gt;req_send.req_bytes_packed;
<br>
&nbsp;&nbsp;(dbx) print &amp;(hdr-&gt;hdr_rndv.hdr_msg_length)
<br>
&amp;hdr-&gt;hdr_rndv.hdr_msg_length = 0xf4d1e81c
<br>
&nbsp;&nbsp;(dbx) where
<br>
=&gt;[1] mca_pml_ob1_send_request_start_rndv() (optimized),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 0xfd5f76b8 (line ~743) in &quot;pml_ob1_sendreq.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[2] mca_pml_ob1_send_request_start() (optimized),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 0xfd5d013c (line ~388) in &quot;pml_ob1_sendreq.h&quot;
<br>
&nbsp;&nbsp;&nbsp;[3] mca_pml_ob1_send() (optimized), at 0xfd5d1544 (line ~117) in 
<br>
&quot;pml_ob1_isend.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[4] PMPI_Send), at 0xfedd7204 (line ~65) in &quot;psend.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[5] main(0xffbfed40, 0xfffffff8, 0x2, 0x0, 0x7d1, 0x7d0), at 0x125bc
<br>
(dbx)
<br>
<p><p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Rolf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we memcpy instead of assigning the header in the OB1 PML why do we 
</span><br>
<span class="quotelev1">&gt; need the padding in the frag header ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2008, at 2:47 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings.  We have seen some bus errors when compiling a user
</span><br>
<span class="quotelev2">&gt;&gt; application with certain compiler flags and running on a sparc based
</span><br>
<span class="quotelev2">&gt;&gt; server.  The issue is that some structures are not word or double word
</span><br>
<span class="quotelev2">&gt;&gt; aligned causing a bus error.  I have tracked down two places where I can
</span><br>
<span class="quotelev2">&gt;&gt; make a minor change and everything seems to work fine.   However, I want
</span><br>
<span class="quotelev2">&gt;&gt; to see if anyone has issues with these changes.  The two changes are
</span><br>
<span class="quotelev2">&gt;&gt; shown below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; burl-ct-v440-0 206 =&gt;svn diff
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/btl/sm/btl_sm_frag.h
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/btl/sm/btl_sm_frag.h    (revision 17039)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/btl/sm/btl_sm_frag.h    (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2008      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; *  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -41,6 +42,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;    struct mca_btl_sm_frag_t *frag;
</span><br>
<span class="quotelev2">&gt;&gt;    size_t len;
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_base_tag_t tag;
</span><br>
<span class="quotelev2">&gt;&gt; +   /* Add a 4 byte pad to round out structure to 16 bytes for 32-bit
</span><br>
<span class="quotelev2">&gt;&gt; +    * and to 24 bytes for 64-bit.  Helps prevent bus errors for strict
</span><br>
<span class="quotelev2">&gt;&gt; +    * alignment cases like SPARC. */
</span><br>
<span class="quotelev2">&gt;&gt; +    char pad[4];
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct mca_btl_sm_hdr_t mca_btl_sm_hdr_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/pml/ob1/pml_ob1_recvfrag.h
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/pml/ob1/pml_ob1_recvfrag.h    (revision 17039)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/pml/ob1/pml_ob1_recvfrag.h    (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2008      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; *  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -67,7 +68,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;    unsigned char* _ptr = (unsigned char*)frag-&gt;addr;                   \
</span><br>
<span class="quotelev2">&gt;&gt;    /* init recv_frag */                                                \
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;btl = btl;                                                    \
</span><br>
<span class="quotelev2">&gt;&gt; -    frag-&gt;hdr = 
</span><br>
<span class="quotelev2">&gt;&gt; *(mca_pml_ob1_hdr_t*)hdr;                               \
</span><br>
<span class="quotelev2">&gt;&gt; +    memcpy(&amp;frag-&gt;hdr, (void 
</span><br>
<span class="quotelev2">&gt;&gt; *)((mca_pml_ob1_hdr_t*)hdr)                \
</span><br>
<span class="quotelev2">&gt;&gt; +           
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(mca_pml_ob1_hdr_t));                                  \
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;num_segments = 1;                                             \
</span><br>
<span class="quotelev2">&gt;&gt;    _size = segs[0].seg_len;                                            \
</span><br>
<span class="quotelev2">&gt;&gt;    for( i = 1; i &lt; cnt; i++ ) {                                        \
</span><br>
<span class="quotelev2">&gt;&gt; burl-ct-v440-0 207 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ticket associated with this issue is
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1148">https://svn.open-mpi.org/trac/ompi/ticket/1148</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2936.php">Gleb Natapov: "Re: [OMPI devel] Common initialization code for IB."</a>
<li><strong>Previous message:</strong> <a href="2934.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>In reply to:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
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
