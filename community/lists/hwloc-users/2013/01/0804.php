<?
$subject_val = "Re: [hwloc-users] hwloc on Blue Gene/Q?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 17:33:54 2013" -->
<!-- isoreceived="20130108223354" -->
<!-- sent="Tue, 8 Jan 2013 16:33:29 -0600" -->
<!-- isosent="20130108223329" -->
<!-- name="Jeff Hammond" -->
<!-- email="jhammond_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on Blue Gene/Q?" -->
<!-- id="CAGKz=uKCvZ8AOpTR=Qg6OUnjL4bji09Nxq6WpD1FOKOOEH818A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50EC52EF.9090103_at_inria.fr" -->
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
<strong>From:</strong> Jeff Hammond (<em>jhammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 17:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0803.php">Brice Goglin: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As a temporary, non-portable substitute for hwloc, you can use the SPI
<br>
calls that are described on my Wiki:
<br>
<a href="https://wiki.alcf.anl.gov/parts/index.php/Blue_Gene/Q#Node_topology">https://wiki.alcf.anl.gov/parts/index.php/Blue_Gene/Q#Node_topology</a>.
<br>
I presume that this is the means by which hwloc will support BGQ when
<br>
it does.
<br>
<p>Blue Gene/Q has 16+1 cores with 4 hw threads each.  Only 16 cores are
<br>
visible to applications but as users can, in theory, run code on the
<br>
17th core (see <a href="https://wiki.alcf.anl.gov/parts/index.php/Blue_Gene/Q#17th_Core_App_Agents">https://wiki.alcf.anl.gov/parts/index.php/Blue_Gene/Q#17th_Core_App_Agents</a>
<br>
for how), it is important for these functions to return values in the
<br>
range 0..16 and 0..67 instead of 0..15 and 0..63.  I include this
<br>
information in case users are confused about the additional range
<br>
documented for these calls.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>On Tue, Jan 8, 2013 at 11:10 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello Erik,
</span><br>
<span class="quotelev1">&gt; We need specific BGQ binding support, the binding API is different. Also we
</span><br>
<span class="quotelev1">&gt; don't properly detect the 16 4-way cores properly, we only only 64 identical
</span><br>
<span class="quotelev1">&gt; PUs.
</span><br>
<span class="quotelev1">&gt; I am supposed to get a BGQ account in the near future so I hope I will have
</span><br>
<span class="quotelev1">&gt; everything working in v1.7.
</span><br>
<span class="quotelev1">&gt; Stay tuned
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
<span class="quotelev1">&gt; Le 08/01/2013 18:06, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use hwloc on a Blue Gene/Q. Building and installing worked
</span><br>
<span class="quotelev1">&gt; fine, and it reports the system configuration fine as well (i.e. it shows
</span><br>
<span class="quotelev1">&gt; all PUs). However, when I try to inquire the thread/core bindings, hwloc
</span><br>
<span class="quotelev1">&gt; crashes with an error in libc's free(). This is both with 1.6 and 1.6.1rc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error occurs apparently in CPU_FREE called from
</span><br>
<span class="quotelev1">&gt; hwloc_linux_find_kernel_nr_cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this ring a bell with anyone? I know this is not enough information to
</span><br>
<span class="quotelev1">&gt; debug things, but do you have any pointers for things to look at?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I remember reading somewhere that the last bit in a cpu_set_t cannot be
</span><br>
<span class="quotelev1">&gt; used. A Blue Gene/Q has 64 PUs, and may be using 64-bit integers to hold
</span><br>
<span class="quotelev1">&gt; cpu_set_t data. Could this be an issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My goal is to examine and experiment with thread/core bindings with OpenMP
</span><br>
<span class="quotelev1">&gt; to improve performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
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
<p><p><p><pre>
-- 
Jeff Hammond
Argonne Leadership Computing Facility
University of Chicago Computation Institute
jhammond_at_[hidden] / (630) 252-5381
<a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
<a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0803.php">Brice Goglin: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
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
