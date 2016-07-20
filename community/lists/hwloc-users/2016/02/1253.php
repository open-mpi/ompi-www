<?
$subject_val = "Re: [hwloc-users] lstopo hangs for centos 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 00:48:47 2016" -->
<!-- isoreceived="20160201054847" -->
<!-- sent="Mon, 1 Feb 2016 06:48:45 +0100" -->
<!-- isosent="20160201054845" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo hangs for centos 7" -->
<!-- id="56AEF1BD.2070408_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAKpNQuJeO3ST-_WjwDn9tZB3PhgpAYWNi6R3KJLpZ=f01Ff=XA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] lstopo hangs for centos 7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-01 00:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1254.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1254.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Reply:</strong> <a href="1254.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the debugging. I guess VMware doesn't properly emulate the
<br>
CPUID instruction.
<br>
<p>Please do:
<br>
1) take a tarball from git master at
<br>
<a href="https://ci.inria.fr/hwloc/job/master-0-tarball/">https://ci.inria.fr/hwloc/job/master-0-tarball/</a> and build it
<br>
2) export HWLOC_COMPONENTS=-x86 in your terminal
<br>
3) do utils/hwloc/hwloc-gather-cpuid
<br>
4) tar cfj cpuid.tbz2 foo and send that cpuid.tbz2
<br>
<p>Step (3) might do an infinite loop for the same reason, please replace
<br>
for(i=0; ; i++) {
<br>
with
<br>
for(i=0; i&lt;10; i++) {
<br>
everywhere in utils/hwloc/hwloc-gather-cpuid.c
<br>
<p>This tarball will help me find what's buggy in VMware CPUID instruction.
<br>
<p><p>In the meantime, you can fix your hwloc by exporting
<br>
HWLOC_COMPONENTS=-x86 in your environment.
<br>
<p>If somebody knows how do detect vmware by looking under /proc or /sys,
<br>
we could use that to automatically set that environment variable.
<br>
<p>thanks
<br>
Brice
<br>
<p><p><p><p>Le 01/02/2016 05:59, Jianjun Wen a &#233;crit :
<br>
<span class="quotelev1">&gt; I did a debug build. Found it loops forever in this loop in
</span><br>
<span class="quotelev1">&gt; topology-x86.c:404.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Get package/core/thread information from cpuid 0x0b
</span><br>
<span class="quotelev1">&gt;    * (Intel x2APIC)
</span><br>
<span class="quotelev1">&gt;    */
</span><br>
<span class="quotelev1">&gt;   if (cpuid_type == intel &amp;&amp; has_x2apic(features)) {
</span><br>
<span class="quotelev1">&gt;     unsigned level, apic_nextshift, apic_number, apic_type, apic_id =
</span><br>
<span class="quotelev1">&gt; 0, apic_shift = 0, id;
</span><br>
<span class="quotelev1">&gt;     for (level = 0; ; level++) {
</span><br>
<span class="quotelev1">&gt;       ecx = level;
</span><br>
<span class="quotelev1">&gt;       eax = 0x0b;
</span><br>
<span class="quotelev1">&gt;       hwloc_x86_cpuid(&amp;eax, &amp;ebx, &amp;ecx, &amp;edx);
</span><br>
<span class="quotelev1">&gt;       if (!eax &amp;&amp; !ebx)
</span><br>
<span class="quotelev1">&gt;         break;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jan 31, 2016 at 8:30 PM, Christopher Samuel
</span><br>
<span class="quotelev1">&gt; &lt;samuel_at_[hidden] &lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 01/02/16 15:09, Jianjun Wen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; 0x00007ffff7bce13c in look_proc () from /lib64/libhwloc.so.5
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Always the same place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     pstack on the process when stuck might give more of an insight as it
</span><br>
<span class="quotelev1">&gt;     should give more of a stack trace.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Also running lstopo under strace should show what it is trying to
</span><br>
<span class="quotelev1">&gt;     do at
</span><br>
<span class="quotelev1">&gt;     that point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     All the best,
</span><br>
<span class="quotelev1">&gt;     Chris
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;      Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;      VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;      Email: samuel_at_[hidden] &lt;mailto:samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Phone: +61 (0)3 903 55545 &lt;tel:%2B61%20%280%293%20903%2055545&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1251.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1251.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -Jianjun Wen
</span><br>
<span class="quotelev1">&gt; Wancube.com - 3D photography
</span><br>
<span class="quotelev1">&gt; Phone: 408 888 7023
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1253/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1254.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1254.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Reply:</strong> <a href="1254.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
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
