<?
$subject_val = "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 08:05:19 2012" -->
<!-- isoreceived="20120419120519" -->
<!-- sent="Thu, 19 Apr 2012 14:05:11 +0200" -->
<!-- isosent="20120419120511" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology" -->
<!-- id="4F8FFF77.7040103_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFBR3giHT8CdSwhXEcjn-doGr==K136zxmo_fGovej3ZPqSvsg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 08:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">Petros Aristidou: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Samuel Thibault: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>In reply to:</strong> <a href="0606.php">Petros Aristidou: "[hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">Petros Aristidou: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Reply:</strong> <a href="0609.php">Petros Aristidou: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>This is a longstanding kernel bug. It was finally fixed recently in 
<br>
kernel 3.3 and backported in 3.2.9 and 3.0.23. Not sure if the Debian 
<br>
kernel devs would accept backporting it to squeeze. The relevant commit is.
<br>
<p>commit 32c3233885eb10ac9cb9410f2f8cd64b8df2b2a1
<br>
Author: Andreas Herrmann&lt;andreas.herrmann3_at_[hidden]&gt;
<br>
Date:   Wed Feb 8 20:52:29 2012 +0100
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x86/amd: Fix L1i and L2 cache sharing information for AMD family 15h processors
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For L1 instruction cache and L2 cache the shared CPU information
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is wrong. On current AMD family 15h CPUs those caches are shared
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;between both cores of a compute unit.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This fixes <a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
<br>
<p><p><p>If you need to stay with an old kernel that can't be fixed for this 
<br>
machine, we can provide you with a corrected XML topology.
<br>
<p>Brice
<br>
<p><p><p>On 19/04/2012 13:51, Petros Aristidou wrote:
<br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run lstopo on my 4-socket 6238, Supermicro system and I get the 
</span><br>
<span class="quotelev1">&gt; following figures: 
</span><br>
<span class="quotelev1">&gt; <a href="http://dl.dropbox.com/u/258337/lstop_odysseus_1.4.1.pdf">http://dl.dropbox.com/u/258337/lstop_odysseus_1.4.1.pdf</a> and
</span><br>
<span class="quotelev1">&gt; <a href="http://dl.dropbox.com/u/258337/lstopo_verbose.txt">http://dl.dropbox.com/u/258337/lstopo_verbose.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It shows that each socket has 2 numanodes with 6 cores each. It shows 
</span><br>
<span class="quotelev1">&gt; a shared L3 memory but dedicated L2 and L1. In other references, like:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.olcf.ornl.gov/wp-content/uploads/2012/01/TitanWorkshop2012_Day1_AMD.pdf">http://www.olcf.ornl.gov/wp-content/uploads/2012/01/TitanWorkshop2012_Day1_AMD.pdf</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.siliconmechanics.com/files/BulldozerInterlagosInfo.pdf">http://www.siliconmechanics.com/files/BulldozerInterlagosInfo.pdf</a>  and
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hpc2n.umu.se/resources/abisko/cpuarch">http://www.hpc2n.umu.se/resources/abisko/cpuarch</a>
</span><br>
<span class="quotelev1">&gt; I get that L1 is dedicated, L2 is shared by 2 cores and L3 shared by 
</span><br>
<span class="quotelev1">&gt; all 6 in the numanode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's the truth? Is lstopo wrongly reporting that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running the latest stable version of Debian Linux (6.0.4 Squeeze) 
</span><br>
<span class="quotelev1">&gt; with all updates and have hwloc v1.4.1 installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any insight is welcome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Petros
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">Petros Aristidou: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Samuel Thibault: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>In reply to:</strong> <a href="0606.php">Petros Aristidou: "[hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">Petros Aristidou: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Reply:</strong> <a href="0609.php">Petros Aristidou: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
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
