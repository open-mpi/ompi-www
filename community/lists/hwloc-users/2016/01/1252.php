<?
$subject_val = "Re: [hwloc-users] lstopo hangs for centos 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 31 23:59:29 2016" -->
<!-- isoreceived="20160201045929" -->
<!-- sent="Sun, 31 Jan 2016 20:59:19 -0800" -->
<!-- isosent="20160201045919" -->
<!-- name="Jianjun Wen" -->
<!-- email="jianjun396_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo hangs for centos 7" -->
<!-- id="CAKpNQuJeO3ST-_WjwDn9tZB3PhgpAYWNi6R3KJLpZ=f01Ff=XA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56AEDF53.7050804_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2016-01-31 23:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1251.php">Christopher Samuel: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="1251.php">Christopher Samuel: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did a debug build. Found it loops forever in this loop in
<br>
topology-x86.c:404.
<br>
<p><p>/* Get package/core/thread information from cpuid 0x0b
<br>
&nbsp;&nbsp;&nbsp;* (Intel x2APIC)
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;if (cpuid_type == intel &amp;&amp; has_x2apic(features)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned level, apic_nextshift, apic_number, apic_type, apic_id = 0,
<br>
apic_shift = 0, id;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (level = 0; ; level++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ecx = level;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eax = 0x0b;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_x86_cpuid(&amp;eax, &amp;ebx, &amp;ecx, &amp;edx);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!eax &amp;&amp; !ebx)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>On Sun, Jan 31, 2016 at 8:30 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On 01/02/16 15:09, Jianjun Wen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 0x00007ffff7bce13c in look_proc () from /lib64/libhwloc.so.5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Always the same place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pstack on the process when stuck might give more of an insight as it
</span><br>
<span class="quotelev1">&gt; should give more of a stack trace.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also running lstopo under strace should show what it is trying to do at
</span><br>
<span class="quotelev1">&gt; that point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1251.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1251.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1251.php">Christopher Samuel: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="1251.php">Christopher Samuel: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1253.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
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
