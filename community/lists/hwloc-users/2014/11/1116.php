<?
$subject_val = "Re: [hwloc-users] lstopo error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 10:02:52 2014" -->
<!-- isoreceived="20141118150252" -->
<!-- sent="Tue, 18 Nov 2014 16:02:50 +0100" -->
<!-- isosent="20141118150250" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo error" -->
<!-- id="546B5F9A.5000905_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAJO4Ey6ohbhHgjZWzjSs2Zq7axiLay2fzs3o+Cxgh=S+xT+a=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] lstopo error<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-18 10:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1117.php">Thomas Van Doren: "[hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1115.php">Diego Regueira: "[hwloc-users] lstopo error"</a>
<li><strong>In reply to:</strong> <a href="1115.php">Diego Regueira: "[hwloc-users] lstopo error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/11/2014 14:46, Diego Regueira a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi, I'm getting an error from the lstopo command. 
</span><br>
<span class="quotelev1">&gt; Please, check the attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<p>Hello,
<br>
It's a very common problem on AMD platforms unfortunately.
<br>
<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error</a>
<br>
In your case, I think the problem is the NUMA information, which
<br>
conflicts with Socket information. That's still likely a BIOS bug. You
<br>
may try upgrading the machine BIOS to the latest version.
<br>
Or, if you don't care much about sockets and/or NUMA in your problem,
<br>
set HWLOC_HIDE_ERRORS=1 in your environment.
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1117.php">Thomas Van Doren: "[hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1115.php">Diego Regueira: "[hwloc-users] lstopo error"</a>
<li><strong>In reply to:</strong> <a href="1115.php">Diego Regueira: "[hwloc-users] lstopo error"</a>
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
