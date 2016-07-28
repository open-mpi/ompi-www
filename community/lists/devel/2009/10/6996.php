<?
$subject_val = "Re: [OMPI devel] 0.9.1rc2 is available";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 21:08:47 2009" -->
<!-- isoreceived="20091022010847" -->
<!-- sent="Wed, 21 Oct 2009 21:08:41 -0400" -->
<!-- isosent="20091022010841" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 0.9.1rc2 is available" -->
<!-- id="DD94A16D-999C-4665-A9B5-9E400E7E47F1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="405459152.4931111256168254407.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 0.9.1rc2 is available<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 21:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6997.php">Tony Breeds: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6998.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="6998.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sweet!
<br>
<p>And -- your reply tells me that, for the 2nd time in a single day, I  
<br>
posted to the wrong list.  :-)
<br>
<p>I'll forward your replies to the hwloc-devel list.
<br>
<p>Thanks!
<br>
<p><p>On Oct 21, 2009, at 7:37 PM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Chris Samuel&quot; &lt;csamuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some sample results below for configs not represented
</span><br>
<span class="quotelev2">&gt; &gt; on the current website.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A final example of a more convoluted configuration with
</span><br>
<span class="quotelev1">&gt; a Torque job requesting 5 CPUs on a dual Shanghai node
</span><br>
<span class="quotelev1">&gt; and has been given a non-contiguous configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [csamuel_at_tango069 ~]$ cat /dev/cpuset/`cat /proc/$$/cpuset`/cpus
</span><br>
<span class="quotelev1">&gt; 0,4-7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [csamuel_at_tango069 ~]$ ~/local/hwloc/0.9.1rc2/bin/lstopo
</span><br>
<span class="quotelev1">&gt; System(31GB)
</span><br>
<span class="quotelev1">&gt;   Node#0(15GB) + Socket#0 + L3(6144KB) + L2(512KB) + L1(64KB) +  
</span><br>
<span class="quotelev1">&gt; Core#0 + P#0
</span><br>
<span class="quotelev1">&gt;   Node#1(16GB) + Socket#1 + L3(6144KB)
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#0 + P#4
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#1 + P#5
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#2 + P#6
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#3 + P#7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt;  The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt;  P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt; VPAC is a not-for-profit Registered Research Agency
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6997.php">Tony Breeds: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6998.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="6998.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
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
