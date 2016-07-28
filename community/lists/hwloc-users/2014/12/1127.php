<?
$subject_val = "Re: [hwloc-users] Selecting real cores vs HT cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 16:36:47 2014" -->
<!-- isoreceived="20141211213647" -->
<!-- sent="Thu, 11 Dec 2014 16:36:42 -0500" -->
<!-- isosent="20141211213642" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Selecting real cores vs HT cores" -->
<!-- id="7710D42E-2149-48C6-A72A-8AAA52B41B93_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F54DD49-0034-444A-BB45-756D2C8CF7F7_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 16:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1126.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1126.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok let me expand then.  I don't have control over the bios.
<br>
<p>The testing I am doing resides on a cloud provider and from our testing it appears that it has HT enabled.  It is ambiguous though to me what I see vs how they allocate on their hypervisor. 
<br>
<p>I want to see if this has any effect. given the providers advertised CPU types they use vs my bare metal ones of the same types everything feels 'half as fast'  Thus the question about HT.
<br>
<p>Here is the lstopo from the provider:
<br>
<p>lstopo-no-graphics
<br>
<p>Machine (7484MB)
<br>
&nbsp;&nbsp;Socket L#0 + L3 L#0 (25MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#3)
<br>
&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:7010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 1013:00b8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:10ed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#0 &quot;eth0&quot;
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><span class="quotelev1">&gt; On Dec 11, 2014, at 4:12 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure you're asking a well-formed question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the BIOS is set to enable hyper threading, then several resources on the core are split when the machine is booted up (e.g., some of the queue depths for various processing units in the core are half the length that they are when hyperthreading is disabled in the BIOS).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, running a process on a core that only uses a single hyperthread (when HT is enabled) is not quite the same thing as booting up with HT disabled and running that same job on the core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: if you want to test HT vs. non-HT performance, you really need to change the BIOS settings and reboot, sorry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, note that if you have HT enabled and you run a single-threaded app bound to a core, it will only use 1 of those HTs -- the other HT will be largely dormant. Meaning: don't expect that running a single-threaded app on a core that has HT enabled will magically take advantage of some performance benefit of aggressive automatic parallelization.  You really need multiple threads in a process to get performance advantages out of HT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2014, at 12:51 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When a system has HT enabled is one core presented the real one and one the fake partner?  Or is that not the case?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If wanting to test behavior without messing with the bios how do I select just the 'real cores'  if this is the case?   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am looking for the equivelent of 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-bind ALLREALCORES  my.exe
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Doing some performance study type things.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1126.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1126.php</a>
</span><br>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1127.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1127.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1126.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1126.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
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
