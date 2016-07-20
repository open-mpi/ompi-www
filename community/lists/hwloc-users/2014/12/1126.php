<?
$subject_val = "Re: [hwloc-users] Selecting real cores vs HT cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 16:12:28 2014" -->
<!-- isoreceived="20141211211228" -->
<!-- sent="Thu, 11 Dec 2014 21:12:27 +0000" -->
<!-- isosent="20141211211227" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Selecting real cores vs HT cores" -->
<!-- id="9F54DD49-0034-444A-BB45-756D2C8CF7F7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EBD402D9-50CC-46CC-9B09-253FD677A37C_at_umich.edu" -->
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
<strong>Date:</strong> 2014-12-11 16:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1125.php">Brock Palen: "[hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1125.php">Brock Palen: "[hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1132.php">Samuel Thibault: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure you're asking a well-formed question.
<br>
<p>When the BIOS is set to enable hyper threading, then several resources on the core are split when the machine is booted up (e.g., some of the queue depths for various processing units in the core are half the length that they are when hyperthreading is disabled in the BIOS).
<br>
<p>Hence, running a process on a core that only uses a single hyperthread (when HT is enabled) is not quite the same thing as booting up with HT disabled and running that same job on the core.
<br>
<p>Make sense?
<br>
<p>Meaning: if you want to test HT vs. non-HT performance, you really need to change the BIOS settings and reboot, sorry.
<br>
<p>Also, note that if you have HT enabled and you run a single-threaded app bound to a core, it will only use 1 of those HTs -- the other HT will be largely dormant. Meaning: don't expect that running a single-threaded app on a core that has HT enabled will magically take advantage of some performance benefit of aggressive automatic parallelization.  You really need multiple threads in a process to get performance advantages out of HT.
<br>
<p><p><p>On Dec 11, 2014, at 12:51 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When a system has HT enabled is one core presented the real one and one the fake partner?  Or is that not the case?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If wanting to test behavior without messing with the bios how do I select just the 'real cores'  if this is the case?   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am looking for the equivelent of 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc-bind ALLREALCORES  my.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doing some performance study type things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1126.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1126.php</a>
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
<li><strong>Next message:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1125.php">Brock Palen: "[hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1125.php">Brock Palen: "[hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1127.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1132.php">Samuel Thibault: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
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
