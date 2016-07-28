<?
$subject_val = "Re: [hwloc-users] hwloc on Blue Gene/Q?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 21:34:07 2013" -->
<!-- isoreceived="20130109023407" -->
<!-- sent="Tue, 8 Jan 2013 20:33:43 -0600" -->
<!-- isosent="20130109023343" -->
<!-- name="Jeff Hammond" -->
<!-- email="jhammond_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on Blue Gene/Q?" -->
<!-- id="CAGKz=u+Fg=km0NN2cgoj4szMYj1Gn+jj8Yq7PfDCORYf38DHYg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADKQjjfVA816uF_jROq9-vk2VWCxAfykYGK8qBJFRY1=nrHJJQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-01-08 21:33:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0807.php">cessenat_at_[hidden]: "[hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These functions are returning the physical placement at the moment
<br>
they are called.  If a Pthread moves around, it will still return the
<br>
correct, current value.
<br>
<p>You should not cache the output of these functions.  They require ~105
<br>
cycles per call (I just measured this for 1M calls, with 315-318M
<br>
cycles required for the test), which is cheaper than loading a stored
<br>
value if it's not in cache.
<br>
<p>Jeff
<br>
<p>On Tue, Jan 8, 2013 at 7:50 PM, Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, this is helpful. I am mostly interested in finding out which threads
</span><br>
<span class="quotelev1">&gt; share the D1 cache. I guess that get_bgq_core returns this information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to guarantee that this association doesn't change at run
</span><br>
<span class="quotelev1">&gt; time? I guess I could just check periodically...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 8, 2013 at 5:33 PM, Jeff Hammond &lt;jhammond_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a temporary, non-portable substitute for hwloc, you can use the SPI
</span><br>
<span class="quotelev2">&gt;&gt; calls that are described on my Wiki:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://wiki.alcf.anl.gov/parts/index.php/Blue_Gene/Q#Node_topology">https://wiki.alcf.anl.gov/parts/index.php/Blue_Gene/Q#Node_topology</a>.
</span><br>
<span class="quotelev2">&gt;&gt; I presume that this is the means by which hwloc will support BGQ when
</span><br>
<span class="quotelev2">&gt;&gt; it does.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Blue Gene/Q has 16+1 cores with 4 hw threads each.  Only 16 cores are
</span><br>
<span class="quotelev2">&gt;&gt; visible to applications but as users can, in theory, run code on the
</span><br>
<span class="quotelev2">&gt;&gt; 17th core (see
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://wiki.alcf.anl.gov/parts/index.php/Blue_Gene/Q#17th_Core_App_Agents">https://wiki.alcf.anl.gov/parts/index.php/Blue_Gene/Q#17th_Core_App_Agents</a>
</span><br>
<span class="quotelev2">&gt;&gt; for how), it is important for these functions to return values in the
</span><br>
<span class="quotelev2">&gt;&gt; range 0..16 and 0..67 instead of 0..15 and 0..63.  I include this
</span><br>
<span class="quotelev2">&gt;&gt; information in case users are confused about the additional range
</span><br>
<span class="quotelev2">&gt;&gt; documented for these calls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jan 8, 2013 at 11:10 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello Erik,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We need specific BGQ binding support, the binding API is different. Also
</span><br>
<span class="quotelev3">&gt;&gt; &gt; we
</span><br>
<span class="quotelev3">&gt;&gt; &gt; don't properly detect the 16 4-way cores properly, we only only 64
</span><br>
<span class="quotelev3">&gt;&gt; &gt; identical
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PUs.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am supposed to get a BGQ account in the near future so I hope I will
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have
</span><br>
<span class="quotelev3">&gt;&gt; &gt; everything working in v1.7.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Stay tuned
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Le 08/01/2013 18:06, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am trying to use hwloc on a Blue Gene/Q. Building and installing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; worked
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fine, and it reports the system configuration fine as well (i.e. it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; shows
</span><br>
<span class="quotelev3">&gt;&gt; &gt; all PUs). However, when I try to inquire the thread/core bindings, hwloc
</span><br>
<span class="quotelev3">&gt;&gt; &gt; crashes with an error in libc's free(). This is both with 1.6 and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1.6.1rc1.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The error occurs apparently in CPU_FREE called from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc_linux_find_kernel_nr_cpus.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Does this ring a bell with anyone? I know this is not enough information
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; debug things, but do you have any pointers for things to look at?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I remember reading somewhere that the last bit in a cpu_set_t cannot be
</span><br>
<span class="quotelev3">&gt;&gt; &gt; used. A Blue Gene/Q has 64 PUs, and may be using 64-bit integers to hold
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cpu_set_t data. Could this be an issue?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My goal is to examine and experiment with thread/core bindings with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OpenMP
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to improve performance.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -erik
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; Argonne Leadership Computing Facility
</span><br>
<span class="quotelev2">&gt;&gt; University of Chicago Computation Institute
</span><br>
<span class="quotelev2">&gt;&gt; jhammond_at_[hidden] / (630) 252-5381
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
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
<li><strong>Next message:</strong> <a href="0807.php">cessenat_at_[hidden]: "[hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0805.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
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
