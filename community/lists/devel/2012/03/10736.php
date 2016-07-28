<?
$subject_val = "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 19 09:32:32 2012" -->
<!-- isoreceived="20120319133232" -->
<!-- sent="Mon, 19 Mar 2012 09:32:28 -0400" -->
<!-- isosent="20120319133228" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure" -->
<!-- id="9983FEDF-B2F1-476E-B372-8EBE3613B1B9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1203151451370.81297_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-19 09:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10737.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10735.php">Ralph Castain: "Re: [OMPI devel] mpirun --debug"</a>
<li><strong>In reply to:</strong> <a href="10717.php">Nathan Hjelm: "[OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10737.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Reply:</strong> <a href="10737.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: ob1: fallback on put/send on rget failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George / Brian --
<br>
<p>Can you guys comment on this patch?
<br>
<p><p>On Mar 15, 2012, at 5:07 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; What: Update ob1 to do the following:
</span><br>
<span class="quotelev1">&gt;       - fallback on send after rdma_put_retries_limit failures of prepare_dst
</span><br>
<span class="quotelev1">&gt;       - fallback on put (single non-pipelined) if the btl returns OMPI_ERR_NOT_AVAILABLE on a get transaction.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Timeout in about one week (Mar 22)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: Two reasons:
</span><br>
<span class="quotelev1">&gt;       - Some btls (ugni) need to switch to put for certain transactions. It makes sense to make this switch at the pml level.
</span><br>
<span class="quotelev1">&gt;       - If prepare_dst repeatedly fails for a get transaction we currently deadlock. We can avoid the deadlock (in most cases) by switching to send for the transaction.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please take a look at the attached patch. Feedback and constructive criticism is needed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL&lt;ompi_trunk_ob1_get_fallback.patch.gz&gt;_______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10737.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10735.php">Ralph Castain: "Re: [OMPI devel] mpirun --debug"</a>
<li><strong>In reply to:</strong> <a href="10717.php">Nathan Hjelm: "[OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10737.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Reply:</strong> <a href="10737.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: ob1: fallback on put/send on rget failure"</a>
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
