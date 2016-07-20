<?
$subject_val = "Re: [hwloc-users] lstopo hangs for centos 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 31 23:18:28 2016" -->
<!-- isoreceived="20160201041828" -->
<!-- sent="Sun, 31 Jan 2016 20:18:27 -0800" -->
<!-- isosent="20160201041827" -->
<!-- name="Jianjun Wen" -->
<!-- email="jianjun396_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo hangs for centos 7" -->
<!-- id="CAKpNQu+At2cLpV+z3CJ56xqdu8cU2jho8vtuT97ymXpJcVfQ_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKpNQuJcrT0DO=9U50GjijAgpEBre8XrwMueeOxD+iMRw_wQow_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-31 23:18:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1251.php">Christopher Samuel: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1251.php">Christopher Samuel: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just realize that yum on centos 7 use hwloc version 1.7.
<br>
I Downloaded 1.11.2 version source, built and install. Still hangs.
<br>
<p>0x00007ffff7bcb32c in hwloc_x86_cpuid (edx=&lt;synthetic pointer&gt;,
<br>
ecx=&lt;synthetic pointer&gt;, ebx=0x7fffffffdbec,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;eax=&lt;synthetic pointer&gt;) at
<br>
/home/wen/Downloads/hwloc-1.11.2/include/private/cpuid-x86.h:67
<br>
67  __asm__(
<br>
<p><p><p>On Sun, Jan 31, 2016 at 8:09 PM, Jianjun Wen &lt;jianjun396_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brice
</span><br>
<span class="quotelev1">&gt; Thanks for the reply.
</span><br>
<span class="quotelev1">&gt; I use yum install hwloc to install it.
</span><br>
<span class="quotelev1">&gt; The cpu usage is 100%.
</span><br>
<span class="quotelev1">&gt; I got this after Ctrl + C, and c, several times:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0x00007ffff7bce13c in look_proc () from /lib64/libhwloc.so.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Always the same place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jan 31, 2016 at 12:29 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the report. I have never seen this issue. I have CentOS 7 VMs
</span><br>
<span class="quotelev2">&gt;&gt; (kvm), lstopo works fine. Did you try this in similar VMs in the past?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you say &quot;latest hwloc&quot;, do you mean &quot;build latest tarball&quot; (1.11.2)
</span><br>
<span class="quotelev2">&gt;&gt; or &quot;installed latest centos package&quot; (1.7)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First thing to check: run lstopo, let it hang, and check under top
</span><br>
<span class="quotelev2">&gt;&gt; whether it uses 100% CPU or 0% CPU (to see if that's an infinite loop or
</span><br>
<span class="quotelev2">&gt;&gt; not).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, run it under gdb:
</span><br>
<span class="quotelev2">&gt;&gt; $ gdb lstopo
</span><br>
<span class="quotelev2">&gt;&gt; Type 'r' and Enter
</span><br>
<span class="quotelev2">&gt;&gt; When things hang, do ctrl-c
</span><br>
<span class="quotelev2">&gt;&gt; Type &quot;where&quot; and send the output to us.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you got 100% in top above, you should do this multiple time. After
</span><br>
<span class="quotelev2">&gt;&gt; &quot;where&quot;, type 'c' to go back to the execution, ctrl+c again, &quot;where&quot; again
</span><br>
<span class="quotelev2">&gt;&gt; and check whether the backtrace is similar.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 31/01/2016 04:48, Jianjun Wen a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed the latest centos 7 (1151) on VM (vmware), then installed
</span><br>
<span class="quotelev2">&gt;&gt; latest hwloc.
</span><br>
<span class="quotelev2">&gt;&gt; lstopo command hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_topology_load()
</span><br>
<span class="quotelev2">&gt;&gt; function call also hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this an know issue? How to find out what's wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; -Jianjun Wen
</span><br>
<span class="quotelev2">&gt;&gt; Wancube.com - 3D photography
</span><br>
<span class="quotelev2">&gt;&gt; Phone: 408 888 7023
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1247.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1247.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1248.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1248.php</a>
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
<p><p><p><pre>
-- 
-Jianjun Wen
Wancube.com - 3D photography
Phone: 408 888 7023
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1251.php">Christopher Samuel: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1251.php">Christopher Samuel: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
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
