<?
$subject_val = "Re: [OMPI devel] progress threads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 18:27:20 2009" -->
<!-- isoreceived="20091124232720" -->
<!-- sent="Tue, 24 Nov 2009 18:27:10 -0500" -->
<!-- isosent="20091124232710" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] progress threads" -->
<!-- id="35852D6C-FBE7-4EA3-AFC4-C3CB3219C600_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C73161EB.278F%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 18:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7148.php">Barrett, Brian W: "[OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Previous message:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<li><strong>In reply to:</strong> <a href="7144.php">Barrett, Brian W: "Re: [OMPI devel] progress threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Last time I played with the async progress I used the TCP BTL, and it  
<br>
worked. The disclaimer here is that it was few month ago (about a year  
<br>
to be really honest) ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 24, 2009, at 12:11 , Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Jeff -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was going to look into the ROMIO problems this weekend.  I started  
</span><br>
<span class="quotelev1">&gt; looking
</span><br>
<span class="quotelev1">&gt; at them on the train between Portland and Seattle after the Forum  
</span><br>
<span class="quotelev1">&gt; (trying to
</span><br>
<span class="quotelev1">&gt; get async progress to work for some tests of the RMA code), but got  
</span><br>
<span class="quotelev1">&gt; too
</span><br>
<span class="quotelev1">&gt; confused.  We're doing requests absolutely incorrectly with ROMIO  
</span><br>
<span class="quotelev1">&gt; right now
</span><br>
<span class="quotelev1">&gt; -- this code is all part of the brokenness.  Look for fixes by Monday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any BTLs we think might possibly work with progress  
</span><br>
<span class="quotelev1">&gt; threads right
</span><br>
<span class="quotelev1">&gt; now?  It's really something we should get working (at least to  
</span><br>
<span class="quotelev1">&gt; progress long
</span><br>
<span class="quotelev1">&gt; messages), although I as usual don't have time to do it (and the  
</span><br>
<span class="quotelev1">&gt; network
</span><br>
<span class="quotelev1">&gt; interface I care most about provides it under the covers with CM....).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/24/09 10:06 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per the call today, I've added a Big Hairy Warning if you --enable-
</span><br>
<span class="quotelev2">&gt;&gt; progress-threads.  It's a configure change, so I'll &quot;sleep 6h; svn
</span><br>
<span class="quotelev2">&gt;&gt; ci ....&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that I can't compile the trunk right now if --enable-progress-
</span><br>
<span class="quotelev2">&gt;&gt; threads is used:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   CC     base/io_base_request.lo
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:254: error: syntax error before  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;progress_thread&quot;
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:254: warning: type defaults to `int' in
</span><br>
<span class="quotelev2">&gt;&gt; declaration of `progress_thread'
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:254: error: ISO C forbids data definition with
</span><br>
<span class="quotelev2">&gt;&gt; no type or storage class
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c: In function  
</span><br>
<span class="quotelev2">&gt;&gt; `mca_io_base_request_progress_init':
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:291: error: `opal_thread_t_class' undeclared
</span><br>
<span class="quotelev2">&gt;&gt; (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:291: error: (Each undeclared identifier is
</span><br>
<span class="quotelev2">&gt;&gt; reported only once
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:291: error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:293: error: request for member `t_run' in
</span><br>
<span class="quotelev2">&gt;&gt; something not a structure or union
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:294: error: request for member `t_arg' in
</span><br>
<span class="quotelev2">&gt;&gt; something not a structure or union
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c: In function  
</span><br>
<span class="quotelev2">&gt;&gt; `mca_io_base_request_progress_add':
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:309: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt;&gt; `opal_thread_start'
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c: In function  
</span><br>
<span class="quotelev2">&gt;&gt; `mca_io_base_request_progress_fini':
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_request.c:340: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt;&gt; `opal_thread_join'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7148.php">Barrett, Brian W: "[OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Previous message:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<li><strong>In reply to:</strong> <a href="7144.php">Barrett, Brian W: "Re: [OMPI devel] progress threads"</a>
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
