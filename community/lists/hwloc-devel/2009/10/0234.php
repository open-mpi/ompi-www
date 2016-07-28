<?
$subject_val = "[hwloc-devel] Fwd: [OMPI devel] 0.9.1rc2 is available";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 21:09:34 2009" -->
<!-- isoreceived="20091022010934" -->
<!-- sent="Wed, 21 Oct 2009 21:09:30 -0400" -->
<!-- isosent="20091022010930" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fwd: [OMPI devel] 0.9.1rc2 is available" -->
<!-- id="D35991A3-F9A4-403D-A1EF-060C7CB94852_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1297887994.4931051256167776886.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> [hwloc-devel] Fwd: [OMPI devel] 0.9.1rc2 is available<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 21:09:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0235.php">Jeff Squyres: "[hwloc-devel] Fwd: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="0233.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1216)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arrgh.  I posted to the &quot;0.9.1rc2 is available&quot; notice to the wrong  
<br>
list (stupid mail client autocomplete...).
<br>
<p>But Chris Samuel replied with 2 mails (the first is below) with some  
<br>
results:
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Chris Samuel&quot; &lt;csamuel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: October 21, 2009 7:29:36 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] 0.9.1rc2 is available
</span><br>
<span class="quotelev1">&gt; Reply-To: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Give it a whirl:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nice - built without warnings with GCC 4.4.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some sample results below for configs not represented
</span><br>
<span class="quotelev1">&gt; on the current website.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dual socket Shanghai:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System(31GB)
</span><br>
<span class="quotelev1">&gt;   Node#0(15GB) + Socket#0 + L3(6144KB)
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#0 + P#0
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#1 + P#1
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#2 + P#2
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#3 + P#3
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dual socket single core Opteron:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System(3961MB)
</span><br>
<span class="quotelev1">&gt;   Node#0(2014MB) + Socket#0 + L2(1024KB) + L1(1024KB) + Core#0 + P#0
</span><br>
<span class="quotelev1">&gt;   Node#1(2017MB) + Socket#1 + L2(1024KB) + L1(1024KB) + Core#0 + P#1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dual socket, dual core Power5 (SMT disabled) running SLES9
</span><br>
<span class="quotelev1">&gt; (2.6.9 based kernel):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System(15GB)
</span><br>
<span class="quotelev1">&gt;   Node#0(7744MB)
</span><br>
<span class="quotelev1">&gt;     P#0
</span><br>
<span class="quotelev1">&gt;     P#2
</span><br>
<span class="quotelev1">&gt;   Node#1(8000MB)
</span><br>
<span class="quotelev1">&gt;     P#4
</span><br>
<span class="quotelev1">&gt;     P#6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inside a single CPU Torque job (using cpusets) on a dual socket  
</span><br>
<span class="quotelev1">&gt; Shanghai:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System(31GB)
</span><br>
<span class="quotelev1">&gt;   Node#0(15GB) + Socket#0 + L3(6144KB) + L2(512KB) + L1(64KB) +  
</span><br>
<span class="quotelev1">&gt; Core#0 + P#0
</span><br>
<span class="quotelev1">&gt;   Node#1(16GB)
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0235.php">Jeff Squyres: "[hwloc-devel] Fwd: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="0233.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1216)"</a>
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
