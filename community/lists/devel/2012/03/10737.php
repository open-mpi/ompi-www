<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: ob1: fallback on put/send on rget failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 19 09:45:02 2012" -->
<!-- isoreceived="20120319134502" -->
<!-- sent="Mon, 19 Mar 2012 13:44:32 +0000" -->
<!-- isosent="20120319134432" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: ob1: fallback on put/send on rget failure" -->
<!-- id="CB8CB0A7.B3CC%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9983FEDF-B2F1-476E-B372-8EBE3613B1B9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: ob1: fallback on put/send on rget failure<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-19 09:44:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10738.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10736.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>In reply to:</strong> <a href="10736.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I'm the best one to comment on OB1 these days, but I didn't
<br>
see anything obviously wrong.
<br>
<p>Brian
<br>
<p>On 3/19/12 9:32 AM, &quot;Jeffrey Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;George / Brian --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you guys comment on this patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mar 15, 2012, at 5:07 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What: Update ob1 to do the following:
</span><br>
<span class="quotelev2">&gt;&gt;       - fallback on send after rdma_put_retries_limit failures of
</span><br>
<span class="quotelev2">&gt;&gt;prepare_dst
</span><br>
<span class="quotelev2">&gt;&gt;       - fallback on put (single non-pipelined) if the btl returns
</span><br>
<span class="quotelev2">&gt;&gt;OMPI_ERR_NOT_AVAILABLE on a get transaction.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When: Timeout in about one week (Mar 22)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why: Two reasons:
</span><br>
<span class="quotelev2">&gt;&gt;       - Some btls (ugni) need to switch to put for certain
</span><br>
<span class="quotelev2">&gt;&gt;transactions. It makes sense to make this switch at the pml level.
</span><br>
<span class="quotelev2">&gt;&gt;       - If prepare_dst repeatedly fails for a get transaction we
</span><br>
<span class="quotelev2">&gt;&gt;currently deadlock. We can avoid the deadlock (in most cases) by
</span><br>
<span class="quotelev2">&gt;&gt;switching to send for the transaction.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please take a look at the attached patch. Feedback and constructive
</span><br>
<span class="quotelev2">&gt;&gt;criticism is needed!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3, 
</span><br>
<span class="quotelev2">&gt;&gt;LANL&lt;ompi_trunk_ob1_get_fallback.patch.gz&gt;_______________________________
</span><br>
<span class="quotelev2">&gt;&gt;________________
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
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10738.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10736.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>In reply to:</strong> <a href="10736.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
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
