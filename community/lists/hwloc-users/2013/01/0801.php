<?
$subject_val = "Re: [hwloc-users] hwloc on Blue Gene/Q?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 12:10:13 2013" -->
<!-- isoreceived="20130108171013" -->
<!-- sent="Tue, 08 Jan 2013 18:10:07 +0100" -->
<!-- isosent="20130108171007" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on Blue Gene/Q?" -->
<!-- id="50EC52EF.9090103_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADKQjjcahTwBpa0yEGCp3agYwTBreUUY4Nq8GV2K0-=-U8TQLg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on Blue Gene/Q?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 12:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0802.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>Previous message:</strong> <a href="0800.php">Erik Schnetter: "[hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0800.php">Erik Schnetter: "[hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0804.php">Jeff Hammond: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0804.php">Jeff Hammond: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Erik,
<br>
We need specific BGQ binding support, the binding API is different. Also
<br>
we don't properly detect the 16 4-way cores properly, we only only 64
<br>
identical PUs.
<br>
I am supposed to get a BGQ account in the near future so I hope I will
<br>
have everything working in v1.7.
<br>
Stay tuned
<br>
Brice
<br>
<p><p><p><p>Le 08/01/2013 18:06, Erik Schnetter a &#233;crit :
<br>
<span class="quotelev1">&gt; I am trying to use hwloc on a Blue Gene/Q. Building and installing
</span><br>
<span class="quotelev1">&gt; worked fine, and it reports the system configuration fine as well
</span><br>
<span class="quotelev1">&gt; (i.e. it shows all PUs). However, when I try to inquire the
</span><br>
<span class="quotelev1">&gt; thread/core bindings, hwloc crashes with an error in libc's free().
</span><br>
<span class="quotelev1">&gt; This is both with 1.6 and 1.6.1rc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error occurs apparently in CPU_FREE called from
</span><br>
<span class="quotelev1">&gt; hwloc_linux_find_kernel_nr_cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this ring a bell with anyone? I know this is not enough
</span><br>
<span class="quotelev1">&gt; information to debug things, but do you have any pointers for things
</span><br>
<span class="quotelev1">&gt; to look at?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I remember reading somewhere that the last bit in a cpu_set_t cannot
</span><br>
<span class="quotelev1">&gt; be used. A Blue Gene/Q has 64 PUs, and may be using 64-bit integers to
</span><br>
<span class="quotelev1">&gt; hold cpu_set_t data. Could this be an issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My goal is to examine and experiment with thread/core bindings with
</span><br>
<span class="quotelev1">&gt; OpenMP to improve performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden] &lt;mailto:schnetter_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0801/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0802.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>Previous message:</strong> <a href="0800.php">Erik Schnetter: "[hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0800.php">Erik Schnetter: "[hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0804.php">Jeff Hammond: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0804.php">Jeff Hammond: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
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
