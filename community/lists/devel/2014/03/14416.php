<?
$subject_val = "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 06:23:44 2014" -->
<!-- isoreceived="20140328102344" -->
<!-- sent="Fri, 28 Mar 2014 10:23:42 +0000" -->
<!-- isosent="20140328102342" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254" -->
<!-- id="1DF01EBF-E141-41F9-93A8-32F33CC74DF1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF191F9548.9E587B6E-ON49257CA9.00332658-49257CA9.0035AF26_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 06:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14415.php">tmishima_at_[hidden]: "[OMPI devel] system call failed during shared memory initialization with openmpi-1.8a1r31254"</a>
<li><strong>In reply to:</strong> <a href="14415.php">tmishima_at_[hidden]: "[OMPI devel] system call failed during shared memory initialization with openmpi-1.8a1r31254"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Reply:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 28, 2014, at 5:45 AM, &lt;tmishima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A system call failed during shared memory initialization that should
</span><br>
<span class="quotelev1">&gt; not have.  It is likely that your MPI job will now either abort or
</span><br>
<span class="quotelev1">&gt; experience performance degradation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:  node03.cluster
</span><br>
<span class="quotelev1">&gt;  System call: unlink
</span><br>
<span class="quotelev1">&gt; (2) /tmp/openmpi-sessions-mishima_at_node03_0/17579/1/vader_segment.node03.0
</span><br>
<span class="quotelev1">&gt;  Error:       No such file or directory (errno 2)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p>This error was just fixed last night.
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
<li><strong>Next message:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14415.php">tmishima_at_[hidden]: "[OMPI devel] system call failed during shared memory initialization with openmpi-1.8a1r31254"</a>
<li><strong>In reply to:</strong> <a href="14415.php">tmishima_at_[hidden]: "[OMPI devel] system call failed during shared memory initialization with openmpi-1.8a1r31254"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Reply:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
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
