<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 16:38:46 2010" -->
<!-- isoreceived="20100602203846" -->
<!-- sent="Wed, 02 Jun 2010 13:40:44 -0700" -->
<!-- isosent="20100602204044" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="4C06C1CC.8040008_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="97F3365C-9879-4D6D-99D6-1A7C22176A2C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 16:40:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8043.php">Rolf vandeVaart: "[OMPI devel] RFC: openib BTL failover"</a>
<li><strong>Previous message:</strong> <a href="8041.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8039.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;Yes, I think the mmap code in the sm btl actually has a sync point inside add_procs that when the root allocs and sets up the area, it'll locally broadcast a &quot;yes, we're good -- mmap attach and let's continue&quot; or &quot;bad things happened; sm btl is broke&quot; message.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, that's great.  But my point was that (it used to be that) after 
<br>
that point, processes would start eating chunks out of that shared area 
<br>
and for large proc counts the last allocations would fail.  (The size of 
<br>
the shared area was poorly chosen and happened to be insufficient.)  So, 
<br>
despite the sync point you describe, some procs would succeed at 
<br>
mca_btl_sm_add_procs() while others would not.  This particular case is 
<br>
now, I believe, resolved.  It just seemed at the time like a case where 
<br>
the upper layers were making assumptions that were inconsistent with 
<br>
what the sm BTL was providing.
<br>
<p><span class="quotelev1">&gt;But I am not confident about the other BTLs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jun 2, 2010, at 12:51 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We did assume that at least the errors are symmetric, i.e. if A fails
</span><br>
<span class="quotelev3">&gt;&gt;&gt;to connect to B then B will fail when trying to connect to A.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I've not been following this thread closely, but thought I'd add a comment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;It used to be that the sm BTL could fail asymmetrically.  A shared
</span><br>
<span class="quotelev2">&gt;&gt;memory could be allocated and processes start to allocate resources
</span><br>
<span class="quotelev2">&gt;&gt;within shared memory.  At some point, the shared area would be
</span><br>
<span class="quotelev2">&gt;&gt;exhausted.  So, some processes were set up to communicate to others, but
</span><br>
<span class="quotelev2">&gt;&gt;the others would not be able to communicate back via the same BTL.  I
</span><br>
<span class="quotelev2">&gt;&gt;think this led to much brokenness.  (E.g., how would a process return a
</span><br>
<span class="quotelev2">&gt;&gt;sm fragment to a sender?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;At this point, my recollection of those issues is very fuzzy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In any case, I think those issues went away with the shared-memory work
</span><br>
<span class="quotelev2">&gt;&gt;I did a while back.  The size of the area is now computed to be large
</span><br>
<span class="quotelev2">&gt;&gt;enough that each process's initial allocation would succeed.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8043.php">Rolf vandeVaart: "[OMPI devel] RFC: openib BTL failover"</a>
<li><strong>Previous message:</strong> <a href="8041.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8039.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
