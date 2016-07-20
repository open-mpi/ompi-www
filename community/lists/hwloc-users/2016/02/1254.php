<?
$subject_val = "Re: [hwloc-users] lstopo hangs for centos 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 01:20:05 2016" -->
<!-- isoreceived="20160201062005" -->
<!-- sent="Sun, 31 Jan 2016 22:20:04 -0800" -->
<!-- isosent="20160201062004" -->
<!-- name="Jianjun Wen" -->
<!-- email="jianjun396_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo hangs for centos 7" -->
<!-- id="CAKpNQuJ6He+1sJYcHLi59zGkhoo5jxvPs5-gwMSanaEqAHPasQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56AEF1BD.2070408_at_inria.fr" -->
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
<strong>From:</strong> Jianjun Wen (<em>jianjun396_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-01 01:20:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1255.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1255.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
Thanks for the workaround -- it works very good.
<br>
<p>Attached please find the two output file after run hwloc-gather-cpuid.
<br>
Let me after this is fixed!
<br>
<p>thanks,
<br>
Jianjun
<br>
<p>On Sun, Jan 31, 2016 at 9:48 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the debugging. I guess VMware doesn't properly emulate the
</span><br>
<span class="quotelev1">&gt; CPUID instruction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please do:
</span><br>
<span class="quotelev1">&gt; 1) take a tarball from git master at
</span><br>
<span class="quotelev1">&gt; <a href="https://ci.inria.fr/hwloc/job/master-0-tarball/">https://ci.inria.fr/hwloc/job/master-0-tarball/</a> and build it
</span><br>
<span class="quotelev1">&gt; 2) export HWLOC_COMPONENTS=-x86 in your terminal
</span><br>
<span class="quotelev1">&gt; 3) do utils/hwloc/hwloc-gather-cpuid
</span><br>
<span class="quotelev1">&gt; 4) tar cfj cpuid.tbz2 foo and send that cpuid.tbz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step (3) might do an infinite loop for the same reason, please replace
</span><br>
<span class="quotelev1">&gt; for(i=0; ; i++) {
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; for(i=0; i&lt;10; i++) {
</span><br>
<span class="quotelev1">&gt; everywhere in utils/hwloc/hwloc-gather-cpuid.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This tarball will help me find what's buggy in VMware CPUID instruction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the meantime, you can fix your hwloc by exporting HWLOC_COMPONENTS=-x86
</span><br>
<span class="quotelev1">&gt; in your environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If somebody knows how do detect vmware by looking under /proc or /sys, we
</span><br>
<span class="quotelev1">&gt; could use that to automatically set that environment variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 01/02/2016 05:59, Jianjun Wen a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt;     unsigned level, apic_nextshift, apic_number, apic_type, apic_id = 0,
</span><br>
<span class="quotelev1">&gt; apic_shift = 0, id;
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
<span class="quotelev1">&gt; On Sun, Jan 31, 2016 at 8:30 PM, Christopher Samuel &lt;
</span><br>
<span class="quotelev1">&gt; &lt;samuel_at_[hidden]&gt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 01/02/16 15:09, Jianjun Wen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0x00007ffff7bce13c in look_proc () from /lib64/libhwloc.so.5
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Always the same place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pstack on the process when stuck might give more of an insight as it
</span><br>
<span class="quotelev2">&gt;&gt; should give more of a stack trace.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also running lstopo under strace should show what it is trying to do at
</span><br>
<span class="quotelev2">&gt;&gt; that point.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All the best,
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev2">&gt;&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1251.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1251.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1254.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1254.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
-Jianjun Wen
Wancube.com - 3D photography
Phone: 408 888 7023


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1254/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1254/aaa.output">aaa.output</a>
</ul>
<!-- attachment="aaa.output" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1254/aaa.tar.bz2">aaa.tar.bz2</a>
</ul>
<!-- attachment="aaa.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1255.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1255.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
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
