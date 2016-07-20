<?
$subject_val = "Re: [hwloc-users] lstopo hangs for centos 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 31 03:29:42 2016" -->
<!-- isoreceived="20160131082942" -->
<!-- sent="Sun, 31 Jan 2016 09:29:39 +0100" -->
<!-- isosent="20160131082939" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo hangs for centos 7" -->
<!-- id="56ADC5F3.8050601_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAKpNQuK1Qb5zhERehHJpdfE1=fxFw=5FYKko6k-yF+_6p8ezvA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-31 03:29:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1247.php">Jianjun Wen: "[hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="1247.php">Jianjun Wen: "[hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Reply:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>Thanks for the report. I have never seen this issue. I have CentOS 7 VMs
<br>
(kvm), lstopo works fine. Did you try this in similar VMs in the past?
<br>
<p>When you say &quot;latest hwloc&quot;, do you mean &quot;build latest tarball&quot; (1.11.2)
<br>
or &quot;installed latest centos package&quot; (1.7)?
<br>
<p>First thing to check: run lstopo, let it hang, and check under top
<br>
whether it uses 100% CPU or 0% CPU (to see if that's an infinite loop or
<br>
not).
<br>
<p>Then, run it under gdb:
<br>
$ gdb lstopo
<br>
Type 'r' and Enter
<br>
When things hang, do ctrl-c
<br>
Type &quot;where&quot; and send the output to us.
<br>
<p>If you got 100% in top above, you should do this multiple time. After
<br>
&quot;where&quot;, type 'c' to go back to the execution, ctrl+c again, &quot;where&quot;
<br>
again and check whether the backtrace is similar.
<br>
<p>Brice
<br>
<p><p><p>Le 31/01/2016 04:48, Jianjun Wen a &#233;crit :
<br>
<span class="quotelev1">&gt; I installed the latest centos 7 (1151) on VM (vmware), then installed
</span><br>
<span class="quotelev1">&gt; latest hwloc.
</span><br>
<span class="quotelev1">&gt; lstopo command hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_load()
</span><br>
<span class="quotelev1">&gt; function call also hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this an know issue? How to find out what's wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1247.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1247.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1248/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1247.php">Jianjun Wen: "[hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>In reply to:</strong> <a href="1247.php">Jianjun Wen: "[hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Reply:</strong> <a href="1249.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
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
