<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 16 18:23:19 2010" -->
<!-- isoreceived="20100516222319" -->
<!-- sent="Mon, 17 May 2010 00:23:08 +0200" -->
<!-- isosent="20100516222308" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="201005170023.08936.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BF04B0F.8030004_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on systems with more than 64 cpus?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-16 18:23:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0075.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0075.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>thanks a lot for the clarification!
<br>
<p>I got access to 64 cores system and you are indeed right! There is however an 
<br>
issue that taskset does not support 0x80000000,0x0 format.
<br>
<p>taskset 0x80000000,0x0 sleep 100
<br>
failed to parse CPU mask 0x80000000,0x0
<br>
<p>However, 
<br>
taskset 0x8000000000000000 sleep 100
<br>
works fine:-)
<br>
<p>Can I suggest an enhancement to hwloc to support taskset format? taskset is 
<br>
currently standard utility to set CPU affinity. Some colleagues of mine don't 
<br>
want to switch to hwloc-bind yet, so supporting taskset format would be great. 
<br>
You can certainly get around with
<br>
<p>hwloc-calc --proclist --physical 0x80000000,0x0
<br>
<p>but it will make unnecessarily complex. 
<br>
<p>Could you either add new option --cpuset-taskset-compatible or perhaps change 
<br>
--cpuset output from 0x80000000,0x0
<br>
to 0x8000000000000000 ?
<br>
<p>Please let me know your opinion.
<br>
<p>=====================================
<br>
hwloc-1.0rc5.tar.bz2 used for testing
<br>
hwloc-ls --merge --cpuset
<br>
PU p#63 cpuset=0x80000000,0x0
<br>
<p>hwloc-bind 0x80000000,0x0 sleep 1000
<br>
<p>hwloc-ls --top
<br>
PU #63 (phys=63) + 12147 sleep
<br>
<p>taskset -p 12147
<br>
pid 12147's current affinity mask: 8000000000000000
<br>
======================================
<br>
<p><p>Thanks a lot!
<br>
Jirka
<br>
<p>On Sunday 16 May 2010 09:44:15 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; No, there is no such limit. If you have 128cores, the cpuset string will
</span><br>
<span class="quotelev1">&gt; be 0xffffffff,0xffffffff,0xffffffff,0xffffffff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As long as you have less than 1024 cores, everything should work fine.
</span><br>
<span class="quotelev1">&gt; For more than 1024, you'll need to rebuild with a manual change in the
</span><br>
<span class="quotelev1">&gt; source code, or wait for hwloc 1.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 14/05/2010 23:51, Jirka Hladky wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Samuel!!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The data looks fine. hwloc rocks.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I assume
</span><br>
<span class="quotelev2">&gt; &gt; --cpuset
</span><br>
<span class="quotelev2">&gt; &gt; option (lstopo command)
</span><br>
<span class="quotelev2">&gt; &gt; is not supported on such systems, right?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My understanding is that cpuset masks works only upto 64 cores. Is it
</span><br>
<span class="quotelev2">&gt; &gt; correct?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Jirka
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 14 May 2010 08:06:12 pm Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres, le Fri 14 May 2010 09:09:44 -0400, a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I believe that Brice / Samuel (the two main developers) have tested
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc on an old Altix 4700 with 256 itanium cores.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I don't have their exact results, and I don't see them on IM right now,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; so I don't know if they're around today or not...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It was tested on a 256 core itanium machine, see
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tests/linux/256ia64-64n2s2c.tar.gz.output
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Samuel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0075.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0075.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0077.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
