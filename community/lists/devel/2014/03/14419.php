<?
$subject_val = "Re: [OMPI devel] system call failed during shared memory	initialization	with openmpi-1.8a1r31254";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 07:25:06 2014" -->
<!-- isoreceived="20140328112506" -->
<!-- sent="Fri, 28 Mar 2014 11:25:04 +0000" -->
<!-- isosent="20140328112504" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] system call failed during shared memory	initialization	with openmpi-1.8a1r31254" -->
<!-- id="BCD68D59-2F26-4C59-AB33-B19D69EE736D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF789D0328.37A083F1-ON49257CA9.003B1E7C-49257CA9.003BA2CF_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] system call failed during shared memory	initialization	with openmpi-1.8a1r31254<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 07:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14420.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14420.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Reply:</strong> <a href="14420.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Reply:</strong> <a href="14428.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph applied a bunch of CMRs to the v1.8 branch after the nightly tarball was made last night.
<br>
<p>I just created a new nightly tarball that includes all of those CMRs: 1.8a1r31269.  It should have the fix for this error included in it.
<br>
<p><p>On Mar 28, 2014, at 6:50 AM, &lt;tmishima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Jeff. It seems to be really the latest one - ticket #4474.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 28, 2014, at 5:45 AM, &lt;tmishima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A system call failed during shared memory initialization that should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not have.  It is likely that your MPI job will now either abort or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; experience performance degradation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local host:  node03.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System call: unlink
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; (2) /tmp/openmpi-sessions-mishima_at_node03_0/17579/1/vader_segment.node03.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error:       No such file or directory (errno 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This error was just fixed last night.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14416.php">http://www.open-mpi.org/community/lists/devel/2014/03/14416.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14417.php">http://www.open-mpi.org/community/lists/devel/2014/03/14417.php</a>
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
<li><strong>Next message:</strong> <a href="14420.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14420.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Reply:</strong> <a href="14420.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Reply:</strong> <a href="14428.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
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
