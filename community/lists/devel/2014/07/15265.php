<?
$subject_val = "Re: [OMPI devel] Trunk broken for --with-devel-headers?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 11:51:46 2014" -->
<!-- isoreceived="20140725155146" -->
<!-- sent="Fri, 25 Jul 2014 15:51:45 +0000" -->
<!-- isosent="20140725155145" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken for --with-devel-headers?" -->
<!-- id="B71F2D74-E327-4A53-BB28-3BEFDC60184E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BC1146A6-5997-4B2D-BAFA-BD1F06D01EC1_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 11:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15266.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Previous message:</strong> <a href="15264.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15262.php">Ralph Castain: "[OMPI devel] Trunk broken for --with-devel-headers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15266.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Reply:</strong> <a href="15266.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unable to replicate... perhaps you have a stale install tree?
<br>
<p><p>On Jul 24, 2014, at 6:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something in the last day or so appears to have broken the trunk's ability to run --with-devel-headers. It looks like the headers are being installed correctly, but mpicc fails to compile a program that uses them - the include passes, but the linker fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;_opal_hwloc172_hwloc_bitmap_alloc&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _main in hello.o
</span><br>
<span class="quotelev1">&gt;   &quot;_opal_hwloc172_hwloc_bitmap_list_asprintf&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _main in hello.o
</span><br>
<span class="quotelev1">&gt;   &quot;_opal_hwloc172_hwloc_get_cpubind&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _main in hello.o
</span><br>
<span class="quotelev1">&gt;   &quot;_opal_hwloc_topology&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _main in hello.o
</span><br>
<span class="quotelev1">&gt;   &quot;_orte_process_info&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _main in hello.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anybody else seeing this?
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15262.php">http://www.open-mpi.org/community/lists/devel/2014/07/15262.php</a>
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
<li><strong>Next message:</strong> <a href="15266.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Previous message:</strong> <a href="15264.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15262.php">Ralph Castain: "[OMPI devel] Trunk broken for --with-devel-headers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15266.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Reply:</strong> <a href="15266.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
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
