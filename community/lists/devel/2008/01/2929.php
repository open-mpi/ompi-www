<?
$subject_val = "[OMPI devel] Fixing SPARC bus errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 14:43:16 2008" -->
<!-- isoreceived="20080103194316" -->
<!-- sent="Thu, 03 Jan 2008 14:47:48 -0500" -->
<!-- isosent="20080103194748" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Fixing SPARC bus errors" -->
<!-- id="477D3BE4.2020804_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Fixing SPARC bus errors<br>
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 14:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>Previous message:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>Reply:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings.  We have seen some bus errors when compiling a user 
<br>
application with certain compiler flags and running on a sparc based 
<br>
server.  The issue is that some structures are not word or double word 
<br>
aligned causing a bus error.  I have tracked down two places where I can 
<br>
make a minor change and everything seems to work fine.   However, I want 
<br>
to see if anyone has issues with these changes.  The two changes are 
<br>
shown below.
<br>
<p>burl-ct-v440-0 206 =&gt;svn diff
<br>
Index: ompi/mca/btl/sm/btl_sm_frag.h
<br>
===================================================================
<br>
--- ompi/mca/btl/sm/btl_sm_frag.h    (revision 17039)
<br>
+++ ompi/mca/btl/sm/btl_sm_frag.h    (working copy)
<br>
@@ -9,6 +9,7 @@
<br>
&nbsp;*                         University of Stuttgart.  All rights reserved.
<br>
&nbsp;* Copyright (c) 2004-2005 The Regents of the University of California.
<br>
&nbsp;*                         All rights reserved.
<br>
+ * Copyright (c) 2008      Sun Microsystems, Inc.  All rights reserved.
<br>
&nbsp;* $COPYRIGHT$
<br>
&nbsp;*  * Additional copyrights may follow
<br>
@@ -41,6 +42,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_sm_frag_t *frag;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_base_tag_t tag;
<br>
+   /* Add a 4 byte pad to round out structure to 16 bytes for 32-bit
<br>
+    * and to 24 bytes for 64-bit.  Helps prevent bus errors for strict
<br>
+    * alignment cases like SPARC. */
<br>
+    char pad[4];
<br>
};
<br>
typedef struct mca_btl_sm_hdr_t mca_btl_sm_hdr_t;
<br>
<p><p>Index: ompi/mca/pml/ob1/pml_ob1_recvfrag.h
<br>
===================================================================
<br>
--- ompi/mca/pml/ob1/pml_ob1_recvfrag.h    (revision 17039)
<br>
+++ ompi/mca/pml/ob1/pml_ob1_recvfrag.h    (working copy)
<br>
@@ -9,6 +9,7 @@
<br>
&nbsp;*                         University of Stuttgart.  All rights reserved.
<br>
&nbsp;* Copyright (c) 2004-2005 The Regents of the University of California.
<br>
&nbsp;*                         All rights reserved.
<br>
+ * Copyright (c) 2008      Sun Microsystems, Inc.  All rights reserved.
<br>
&nbsp;* $COPYRIGHT$
<br>
&nbsp;*  * Additional copyrights may follow
<br>
@@ -67,7 +68,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned char* _ptr = (unsigned char*)frag-&gt;addr;                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* init recv_frag */                                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;btl = btl;                                                    \
<br>
-    frag-&gt;hdr = *(mca_pml_ob1_hdr_t*)hdr;                               \
<br>
+    memcpy(&amp;frag-&gt;hdr, (void *)((mca_pml_ob1_hdr_t*)hdr)                \
<br>
+           sizeof(mca_pml_ob1_hdr_t));                                  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;num_segments = 1;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_size = segs[0].seg_len;                                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for( i = 1; i &lt; cnt; i++ ) {                                        \
<br>
burl-ct-v440-0 207 =&gt;
<br>
<p><p>The ticket associated with this issue is 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1148">https://svn.open-mpi.org/trac/ompi/ticket/1148</a>
<br>
<p>Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>Previous message:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>Reply:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
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
