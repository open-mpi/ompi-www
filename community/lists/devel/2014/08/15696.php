<?
$subject_val = "Re: [OMPI devel] 1.8.2rc5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 15:09:26 2014" -->
<!-- isoreceived="20140822190926" -->
<!-- sent="Fri, 22 Aug 2014 19:09:24 +0000" -->
<!-- isosent="20140822190924" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc5 released" -->
<!-- id="1FC1CEBB-B00F-41C9-8EA6-69A4FE651C61_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BFD4A2B6-BA1B-46C7-B916-8896D8157098_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.2rc5 released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 15:09:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15697.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>In reply to:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15698.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>Reply:</strong> <a href="15698.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No -- most of these were not user-visible, or they were fixes from fixes post-1.8.1.
<br>
<p>I think the relevant ones were put in NEWS already.  I'm recording a podcast right now -- can you double check?
<br>
<p><p><p>On Aug 22, 2014, at 2:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Did you update the NEWS with these?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2014, at 11:33 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the usual location:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Changes since rc4:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Add a missing atomics stuff into tarball
</span><br>
<span class="quotelev2">&gt;&gt; - fortran: add missing bindings for WIN_SYNC, WIN_LOCK_ALL, WIN_UNLOCK_ALL
</span><br>
<span class="quotelev2">&gt;&gt; - README updates
</span><br>
<span class="quotelev2">&gt;&gt; - usnic: ensure to have a safe destruction of an opal_list_item_t
</span><br>
<span class="quotelev2">&gt;&gt; - remove deprecation warnings for pernode, npernode, and npersocket
</span><br>
<span class="quotelev2">&gt;&gt; - OOB updates: if an address fails, just try the next one
</span><br>
<span class="quotelev2">&gt;&gt; - usnic: Fix connectivity checker pointer mismatch
</span><br>
<span class="quotelev2">&gt;&gt; - btl/scif: use safe syntax
</span><br>
<span class="quotelev2">&gt;&gt; - openib/btl: better detect max reg memory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15694.php">http://www.open-mpi.org/community/lists/devel/2014/08/15694.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15695.php">http://www.open-mpi.org/community/lists/devel/2014/08/15695.php</a>
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
<li><strong>Next message:</strong> <a href="15697.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>In reply to:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15698.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>Reply:</strong> <a href="15698.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
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
