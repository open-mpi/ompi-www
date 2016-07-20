<?
$subject_val = "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 08:30:16 2012" -->
<!-- isoreceived="20120419123016" -->
<!-- sent="Thu, 19 Apr 2012 14:29:51 +0200" -->
<!-- isosent="20120419122951" -->
<!-- name="Petros Aristidou" -->
<!-- email="p3tris_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology" -->
<!-- id="CAFBR3gjb+7Sz43efvR_6k+fYQ7LkK8+Z+GPt0P7r15XAg3Xrqw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F8FFF77.7040103_at_inria.fr" -->
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
<strong>From:</strong> Petros Aristidou (<em>p3tris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 08:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0610.php">Jeffrey Squyres: "[hwloc-users] Using distances"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks both for the fast response! I upgraded to 3.2 kernel from the
<br>
unstable and now I get the right ones:
<br>
<a href="http://dl.dropbox.com/u/258337/lstop_odysseus_1.4.1_kernel3.2.pdf">http://dl.dropbox.com/u/258337/lstop_odysseus_1.4.1_kernel3.2.pdf</a>
<br>
<p>I generally like to stick with Debian stable because I never got any
<br>
problem. While with unstable or Ubuntu I get some not so pleasant glitches
<br>
from time to time.
<br>
<p>Thanks a lot!
<br>
<p>Petros
<br>
<p>On Thu, Apr 19, 2012 at 14:05, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a longstanding kernel bug. It was finally fixed recently in kernel
</span><br>
<span class="quotelev1">&gt; 3.3 and backported in 3.2.9 and 3.0.23. Not sure if the Debian kernel devs
</span><br>
<span class="quotelev1">&gt; would accept backporting it to squeeze. The relevant commit is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit 32c3233885eb10ac9cb9410f2f8cd64b8df2b2a1
</span><br>
<span class="quotelev1">&gt; Author: Andreas Herrmann &lt;andreas.herrmann3_at_[hidden]&gt; &lt;andreas.herrmann3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Feb 8 20:52:29 2012 +0100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     x86/amd: Fix L1i and L2 cache sharing information for AMD family 15h processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For L1 instruction cache and L2 cache the shared CPU information
</span><br>
<span class="quotelev1">&gt;     is wrong. On current AMD family 15h CPUs those caches are shared
</span><br>
<span class="quotelev1">&gt;     between both cores of a compute unit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This fixes <a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need to stay with an old kernel that can't be fixed for this
</span><br>
<span class="quotelev1">&gt; machine, we can provide you with a corrected XML topology.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On 19/04/2012 13:51, Petros Aristidou wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I run lstopo on my 4-socket 6238, Supermicro system and I get the
</span><br>
<span class="quotelev1">&gt; following figures: <a href="http://dl.dropbox.com/u/258337/lstop_odysseus_1.4.1.pdfand">http://dl.dropbox.com/u/258337/lstop_odysseus_1.4.1.pdfand</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://dl.dropbox.com/u/258337/lstopo_verbose.txt">http://dl.dropbox.com/u/258337/lstopo_verbose.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It shows that each socket has 2 numanodes with 6 cores each. It shows a
</span><br>
<span class="quotelev1">&gt; shared L3 memory but dedicated L2 and L1. In other references, like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.olcf.ornl.gov/wp-content/uploads/2012/01/TitanWorkshop2012_Day1_AMD.pdf">http://www.olcf.ornl.gov/wp-content/uploads/2012/01/TitanWorkshop2012_Day1_AMD.pdf</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.siliconmechanics.com/files/BulldozerInterlagosInfo.pdf">http://www.siliconmechanics.com/files/BulldozerInterlagosInfo.pdf</a>  and
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hpc2n.umu.se/resources/abisko/cpuarch">http://www.hpc2n.umu.se/resources/abisko/cpuarch</a>
</span><br>
<span class="quotelev1">&gt; I get that L1 is dedicated, L2 is shared by 2 cores and L3 shared by all 6
</span><br>
<span class="quotelev1">&gt; in the numanode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  What's the truth? Is lstopo wrongly reporting that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am running the latest stable version of Debian Linux (6.0.4 Squeeze)
</span><br>
<span class="quotelev1">&gt; with all updates and have hwloc v1.4.1 installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Any insight is welcome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Petros
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0609/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0610.php">Jeffrey Squyres: "[hwloc-users] Using distances"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
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
