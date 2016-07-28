<?
$subject_val = "Re: [OMPI devel] Trunk broken for --with-devel-headers?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 14:20:40 2014" -->
<!-- isoreceived="20140725182040" -->
<!-- sent="Fri, 25 Jul 2014 11:19:20 -0700" -->
<!-- isosent="20140725181920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken for --with-devel-headers?" -->
<!-- id="9320EBBD-BD7A-46C1-A57D-466BBE6A46E7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D9CD40D9-991C-441C-AAF6-96D1BE773D33_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk broken for --with-devel-headers?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 14:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15271.php">Mike Dubman: "[OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="15266.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works okay with a fresh checkout, so something in my tree must have been hosed.
<br>
<p><p>On Jul 25, 2014, at 8:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It seems to be only happening on my Mac, not Linux, but I'll try with a fresh checkout
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2014, at 8:51 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm unable to replicate... perhaps you have a stale install tree?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 24, 2014, at 6:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Something in the last day or so appears to have broken the trunk's ability to run --with-devel-headers. It looks like the headers are being installed correctly, but mpicc fails to compile a program that uses them - the include passes, but the linker fails:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;_opal_hwloc172_hwloc_bitmap_alloc&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _main in hello.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;_opal_hwloc172_hwloc_bitmap_list_asprintf&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _main in hello.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;_opal_hwloc172_hwloc_get_cpubind&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _main in hello.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;_opal_hwloc_topology&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _main in hello.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;_orte_process_info&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _main in hello.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anybody else seeing this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15262.php">http://www.open-mpi.org/community/lists/devel/2014/07/15262.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15265.php">http://www.open-mpi.org/community/lists/devel/2014/07/15265.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15271.php">Mike Dubman: "[OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="15266.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
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
