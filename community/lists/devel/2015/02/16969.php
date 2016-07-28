<?
$subject_val = "Re: [OMPI devel] opal_dss.load question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 19:04:13 2015" -->
<!-- isoreceived="20150212000413" -->
<!-- sent="Wed, 11 Feb 2015 16:04:08 -0800" -->
<!-- isosent="20150212000408" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_dss.load question" -->
<!-- id="AA361C72-D4C5-45CC-A257-DEA5CF2E146C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj7srmrvcDLhWb45ibm8wAW7zHm+yzPTL-nGd+niip2Ziw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_dss.load question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-11 19:04:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16970.php">Adrian Reber: "[OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16968.php">Howard Pritchard: "[OMPI devel] opal_dss.load question"</a>
<li><strong>In reply to:</strong> <a href="16968.php">Howard Pritchard: "[OMPI devel] opal_dss.load question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well yes - when you OBJ_RELEASE(buf), it calls free on the data blob. All you have to do is set buf-&gt;base_ptr = NULL prior to releasing.
<br>
<p>You could also save a lot of malloc wastage by just using OBJ_CONSTRUCT/DESTRUCT for buf, though you still have to NULL the base_ptr before calling DESTRUCT
<br>
<p><span class="quotelev1">&gt; On Feb 11, 2015, at 2:57 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got a question about the opal_dss.load functionality.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I have a construct like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; opal_dss.load(buffer, input_ptr, num_bytes_to_load);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm finding that input_ptr has to have been something
</span><br>
<span class="quotelev1">&gt; returned by malloc and friends or else I get heap corruption.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't do something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oob_allgatherv(input_ptr, bytes_from_each_rank, output_ptr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for (cptr = output_ptr, i = 0 ; i &lt; pmix_size ;i ++) {
</span><br>
<span class="quotelev1">&gt; opal_dss.load(buf, cptr, bytes_from_each_rank[i]);
</span><br>
<span class="quotelev1">&gt; unpack message into dstore
</span><br>
<span class="quotelev1">&gt; cptr += bytes_from_each_rank[i];
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to create a separate malloc'd buffer each time through the
</span><br>
<span class="quotelev1">&gt; loop and do a memcpy into the tmp buffer, then call opal_dss.load
</span><br>
<span class="quotelev1">&gt; for that particular tmp buffer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this expected behavior of opal_dss.load?  Is there a way to
</span><br>
<span class="quotelev1">&gt; avoid these extra mallocs/memcopy's?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I don't do the above technique, the heap allocator blows up
</span><br>
<span class="quotelev1">&gt; in OBJ_RELEASE of buffer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16968.php">http://www.open-mpi.org/community/lists/devel/2015/02/16968.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16970.php">Adrian Reber: "[OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16968.php">Howard Pritchard: "[OMPI devel] opal_dss.load question"</a>
<li><strong>In reply to:</strong> <a href="16968.php">Howard Pritchard: "[OMPI devel] opal_dss.load question"</a>
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
