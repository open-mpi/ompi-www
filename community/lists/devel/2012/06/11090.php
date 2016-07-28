<?
$subject_val = "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 13:44:20 2012" -->
<!-- isoreceived="20120611174420" -->
<!-- sent="Mon, 11 Jun 2012 13:44:14 -0400" -->
<!-- isosent="20120611174414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults" -->
<!-- id="E04B877D-EACE-410F-B5C8-06B90AB7EFD7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F3C715C4-0657-4585-BE48-B35F5015053C_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 13:44:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11091.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Previous message:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>In reply to:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11091.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Reply:</strong> <a href="11091.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2012, at 1:42 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; will have to look more at the loop_spawn issue later.
</span><br>
<span class="quotelev2">&gt;&gt; The original one I reported, I assume?  I see similar stacks on segfaults with a variety of tests.  So, I think it's not specific to loop_spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a race condition in the oob, so I'm looking at it.
</span><br>
<p>FWIW, I'm seeing some hangs on the trunk this morning, too -- even when I specify the tcp oob.  Mebbe 1 run in 10.  I haven't had time to diagnose -- I'm working on something else...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11091.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Previous message:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>In reply to:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11091.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Reply:</strong> <a href="11091.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
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
