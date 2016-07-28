<?
$subject_val = "Re: [OMPI devel] progress threads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 12:12:11 2009" -->
<!-- isoreceived="20091124171211" -->
<!-- sent="Tue, 24 Nov 2009 10:11:55 -0700" -->
<!-- isosent="20091124171155" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] progress threads" -->
<!-- id="C73161EB.278F%bwbarre_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A9C0D4F1-5158-4DFB-A36C-E5F334E8C9F0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] progress threads<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 12:11:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7145.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="7143.php">Jeff Squyres: "[OMPI devel] progress threads"</a>
<li><strong>In reply to:</strong> <a href="7143.php">Jeff Squyres: "[OMPI devel] progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7147.php">George Bosilca: "Re: [OMPI devel] progress threads"</a>
<li><strong>Reply:</strong> <a href="7147.php">George Bosilca: "Re: [OMPI devel] progress threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff -
<br>
<p>I was going to look into the ROMIO problems this weekend.  I started looking
<br>
at them on the train between Portland and Seattle after the Forum (trying to
<br>
get async progress to work for some tests of the RMA code), but got too
<br>
confused.  We're doing requests absolutely incorrectly with ROMIO right now
<br>
-- this code is all part of the brokenness.  Look for fixes by Monday.
<br>
<p>Are there any BTLs we think might possibly work with progress threads right
<br>
now?  It's really something we should get working (at least to progress long
<br>
messages), although I as usual don't have time to do it (and the network
<br>
interface I care most about provides it under the covers with CM....).
<br>
<p>Brian
<br>
<p><p>On 11/24/09 10:06 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Per the call today, I've added a Big Hairy Warning if you --enable-
</span><br>
<span class="quotelev1">&gt; progress-threads.  It's a configure change, so I'll &quot;sleep 6h; svn
</span><br>
<span class="quotelev1">&gt; ci ....&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I can't compile the trunk right now if --enable-progress-
</span><br>
<span class="quotelev1">&gt; threads is used:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    CC     base/io_base_request.lo
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:254: error: syntax error before &quot;progress_thread&quot;
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:254: warning: type defaults to `int' in
</span><br>
<span class="quotelev1">&gt; declaration of `progress_thread'
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:254: error: ISO C forbids data definition with
</span><br>
<span class="quotelev1">&gt; no type or storage class
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c: In function `mca_io_base_request_progress_init':
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:291: error: `opal_thread_t_class' undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:291: error: (Each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:291: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:293: error: request for member `t_run' in
</span><br>
<span class="quotelev1">&gt; something not a structure or union
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:294: error: request for member `t_arg' in
</span><br>
<span class="quotelev1">&gt; something not a structure or union
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c: In function `mca_io_base_request_progress_add':
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:309: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; `opal_thread_start'
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c: In function `mca_io_base_request_progress_fini':
</span><br>
<span class="quotelev1">&gt; base/io_base_request.c:340: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; `opal_thread_join'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7145.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="7143.php">Jeff Squyres: "[OMPI devel] progress threads"</a>
<li><strong>In reply to:</strong> <a href="7143.php">Jeff Squyres: "[OMPI devel] progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7147.php">George Bosilca: "Re: [OMPI devel] progress threads"</a>
<li><strong>Reply:</strong> <a href="7147.php">George Bosilca: "Re: [OMPI devel] progress threads"</a>
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
