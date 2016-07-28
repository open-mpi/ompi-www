<?
$subject_val = "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 30 22:29:15 2014" -->
<!-- isoreceived="20140331022915" -->
<!-- sent="Mon, 31 Mar 2014 11:28:33 +0900" -->
<!-- isosent="20140331022833" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254" -->
<!-- id="OFFDDCF560.CEBA07AD-ON49257CAB.00835CBE-49257CAC.000DA689_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BCD68D59-2F26-4C59-AB33-B19D69EE736D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20system%20call%20failed%20during%20shared	memory	initialization	with%20openmpi-1.8a1r31254"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-30 22:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14429.php">Bert Wesarg: "[OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14427.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14419.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory	initialization	with openmpi-1.8a1r31254"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>it worked for me with openmpi-1.8rc1.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; Ralph applied a bunch of CMRs to the v1.8 branch after the nightly
</span><br>
tarball was made last night.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just created a new nightly tarball that includes all of those CMRs:
</span><br>
1.8a1r31269.  It should have the fix for this error included in it.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 28, 2014, at 6:50 AM, &lt;tmishima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Jeff. It seems to be really the latest one - ticket #4474.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 28, 2014, at 5:45 AM, &lt;tmishima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A system call failed during shared memory initialization that should
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; not have.  It is likely that your MPI job will now either abort or
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; experience performance degradation.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Local host:  node03.cluster
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; System call: unlink
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
(2) /tmp/openmpi-sessions-mishima_at_node03_0/17579/1/vader_segment.node03.0
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Error:       No such file or directory (errno 2)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This error was just fixed last night.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14416.php">http://www.open-mpi.org/community/lists/devel/2014/03/14416.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/03/14417.php">http://www.open-mpi.org/community/lists/devel/2014/03/14417.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/03/14419.php">http://www.open-mpi.org/community/lists/devel/2014/03/14419.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14429.php">Bert Wesarg: "[OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14427.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14419.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory	initialization	with openmpi-1.8a1r31254"</a>
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
