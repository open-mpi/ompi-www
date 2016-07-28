<?
$subject_val = "Re: [hwloc-users] Selecting real cores vs HT cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 16:41:32 2014" -->
<!-- isoreceived="20141211214132" -->
<!-- sent="Thu, 11 Dec 2014 21:41:31 +0000" -->
<!-- isosent="20141211214131" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Selecting real cores vs HT cores" -->
<!-- id="930D148A-C1C5-446F-8DD8-EBC32C6FE06B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7710D42E-2149-48C6-A72A-8AAA52B41B93_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Selecting real cores vs HT cores<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 16:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1129.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1129.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1129.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2014, at 1:36 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok let me expand then.  I don't have control over the bios.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The testing I am doing resides on a cloud provider and from our testing it appears that it has HT enabled.  It is ambiguous though to me what I see vs how they allocate on their hypervisor. 
</span><br>
<p>Oh, if you're in a hypervisor, then what you're seeing has zero correlation to reality.
<br>
<p>If it's an HPC cloud provider, they *likely* paired cores in the hypervisor with real/physical cores.  More specifically: they *probably* paired hyper threads in the hypervisor with real/physical hyper threads (i.e., so that the lstopo in the hypervisor is equivalent to lstopo outside the hypervisor).
<br>
<p>But you'll need to ask them, because modern VMs let you do whatever you want in terms of mapping VM cores/HTs to physical cores/HTs.
<br>
<p>Consider: you can run dozens on web server VMs on a machine with 10 cores.  Each VM will say that it has, say, 1 or 2 cores.  But clearly, the sum of number of cores in the VMs is larger than the total number of physical cores.
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
<li><strong>Next message:</strong> <a href="1129.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1129.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1129.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
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
