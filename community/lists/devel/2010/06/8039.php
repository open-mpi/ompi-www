<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 13:38:37 2010" -->
<!-- isoreceived="20100602173837" -->
<!-- sent="Wed, 2 Jun 2010 13:38:33 -0400" -->
<!-- isosent="20100602173833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="97F3365C-9879-4D6D-99D6-1A7C22176A2C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C068C2D.1070705_at_oracle.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 13:38:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8040.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8035.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8042.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8042.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I think the mmap code in the sm btl actually has a sync point inside add_procs that when the root allocs and sets up the area, it'll locally broadcast a &quot;yes, we're good -- mmap attach and let's continue&quot; or &quot;bad things happened; sm btl is broke&quot; message.
<br>
<p>But I am not confident about the other BTLs.
<br>
<p><p>On Jun 2, 2010, at 12:51 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We did assume that at least the errors are symmetric, i.e. if A fails
</span><br>
<span class="quotelev2">&gt; &gt; to connect to B then B will fail when trying to connect to A.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've not been following this thread closely, but thought I'd add a comment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It used to be that the sm BTL could fail asymmetrically.  A shared
</span><br>
<span class="quotelev1">&gt; memory could be allocated and processes start to allocate resources
</span><br>
<span class="quotelev1">&gt; within shared memory.  At some point, the shared area would be
</span><br>
<span class="quotelev1">&gt; exhausted.  So, some processes were set up to communicate to others, but
</span><br>
<span class="quotelev1">&gt; the others would not be able to communicate back via the same BTL.  I
</span><br>
<span class="quotelev1">&gt; think this led to much brokenness.  (E.g., how would a process return a
</span><br>
<span class="quotelev1">&gt; sm fragment to a sender?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point, my recollection of those issues is very fuzzy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In any case, I think those issues went away with the shared-memory work
</span><br>
<span class="quotelev1">&gt; I did a while back.  The size of the area is now computed to be large
</span><br>
<span class="quotelev1">&gt; enough that each process's initial allocation would succeed.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8040.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8035.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8042.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8042.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
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
