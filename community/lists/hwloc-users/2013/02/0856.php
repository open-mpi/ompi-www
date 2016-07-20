<?
$subject_val = "Re: [hwloc-users] hwloc on Blue Gene/Q?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 17:46:18 2013" -->
<!-- isoreceived="20130209224618" -->
<!-- sent="Sat, 09 Feb 2013 23:46:12 +0100" -->
<!-- isosent="20130209224612" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on Blue Gene/Q?" -->
<!-- id="5116D1B4.6090501_at_inria.fr" -->
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
<strong>Date:</strong> 2013-02-09 17:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0855.php">Brice Goglin: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/01/0800.php">Erik Schnetter: "[hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0858.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The new &quot;bgq&quot; branch now contains proper topology for BG/Q nodes
<br>
(including cores and caches, except the prefetching cache) as well as
<br>
support for set/get binding of the current thread or of another thread.
<br>
No process-wide binding since I don't know how to iterate over all
<br>
threads of a process.
<br>
<p>A tarball is available at:
<br>
&nbsp;&nbsp;&nbsp;
<br>
<a href="https://ci.inria.fr/hwloc/job/hwloc-zcustom-tarball/lastSuccessfulBuild/artifact/hwloc-1.7a1r5312.tar.gz">https://ci.inria.fr/hwloc/job/hwloc-zcustom-tarball/lastSuccessfulBuild/artifact/hwloc-1.7a1r5312.tar.gz</a>
<br>
(this is our new regression testing tool, I hope the tarball won't
<br>
disappear too soon)
<br>
<p>I don't expect a lot more features so this branch will likely go into
<br>
trunk very soon. But if you can look at it, that'll be great.
<br>
<p>Brice
<br>
<p><p><p>Le 08/01/2013 18:06, Erik Schnetter a &#233;crit :
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0856/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0855.php">Brice Goglin: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/01/0800.php">Erik Schnetter: "[hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0858.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
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
