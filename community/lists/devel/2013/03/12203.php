<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  8 12:29:28 2013" -->
<!-- isoreceived="20130308172928" -->
<!-- sent="Fri, 8 Mar 2013 17:29:22 +0000" -->
<!-- isosent="20130308172922" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F9980F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BE0561DB-DBDC-46C5-AB5E-1AECE40C6CF7_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-08 12:29:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12204.php">Nilesh Mahajan: "[OMPI devel] Send Recv Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2013, at 12:07 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Check pml_ob1_component.c:230. The commented out test seems to be doing what you look for, making sure that when the PML is closed no allocated requests are outside of the free list (like the matching or pending queues).
</span><br>
<p><p>Cool; I'll check that.  Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12204.php">Nilesh Mahajan: "[OMPI devel] Send Recv Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12202.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
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
