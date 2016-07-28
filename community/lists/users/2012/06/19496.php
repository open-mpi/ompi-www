<?
$subject_val = "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 12:35:47 2012" -->
<!-- isoreceived="20120611163547" -->
<!-- sent="Mon, 11 Jun 2012 12:35:42 -0400" -->
<!-- isosent="20120611163542" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6" -->
<!-- id="BA17FB07-A6C0-4AA6-9833-27700FA4A385_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="32696_1339431062_4FD61896_32696_4247_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E25_at_THSONEA01CMS07P.one.grp" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 12:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19497.php">Yong Qin: "[OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
<li><strong>Reply:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2012, at 12:11 PM, BOUVIER Benjamin wrote:
<br>
<p><span class="quotelev1">&gt; Wow. I thought in the first place that all combinations would be equivalent, but in fact, this is not the case...
</span><br>
<span class="quotelev1">&gt; I've kept the firewalls down during all the tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - on node1, &quot;mpirun --host node1,node2 ring_c&quot;
</span><br>
<span class="quotelev1">&gt; Works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - on node1, &quot;mpirun --host node1,node3 ring_c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; - on node1, &quot;mpirun --host node2,node3 ring_c&quot;
</span><br>
<span class="quotelev1">&gt; Blocks after &quot;Process 0 sent to 1&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - on node1, &quot;mpirun --host node1,node2,node3 ring_c&quot;
</span><br>
<span class="quotelev1">&gt; &quot;Process 0 sending 10 to 1, tag 201 (3 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9&quot; then blocks
</span><br>
<p>What's the output from ifconfig on all nodes?
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
<li><strong>Next message:</strong> <a href="19497.php">Yong Qin: "[OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
<li><strong>Reply:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
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
