<?
$subject_val = "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 17:27:34 2012" -->
<!-- isoreceived="20120611212734" -->
<!-- sent="Mon, 11 Jun 2012 15:27:29 -0600" -->
<!-- isosent="20120611212729" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults" -->
<!-- id="510A190D-B86B-4C2A-8A75-BB4C0D6FA2E9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E04B877D-EACE-410F-B5C8-06B90AB7EFD7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 17:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11092.php">Jeff Squyres: "[OMPI devel] Fwd: Open MPI concall agenda (06/12/2012)"</a>
<li><strong>Previous message:</strong> <a href="11090.php">Jeff Squyres: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>In reply to:</strong> <a href="11090.php">Jeff Squyres: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've reverted the default config for now - not sure when I'll get another chance to tackle it, but hopefully soon. Looks like there is a problem in the TCP oob where we lose messages every now and then.
<br>
<p><p>On Jun 11, 2012, at 11:44 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 11, 2012, at 1:42 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will have to look more at the loop_spawn issue later.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The original one I reported, I assume?  I see similar stacks on segfaults with a variety of tests.  So, I think it's not specific to loop_spawn.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's a race condition in the oob, so I'm looking at it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I'm seeing some hangs on the trunk this morning, too -- even when I specify the tcp oob.  Mebbe 1 run in 10.  I haven't had time to diagnose -- I'm working on something else...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="11092.php">Jeff Squyres: "[OMPI devel] Fwd: Open MPI concall agenda (06/12/2012)"</a>
<li><strong>Previous message:</strong> <a href="11090.php">Jeff Squyres: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>In reply to:</strong> <a href="11090.php">Jeff Squyres: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
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
