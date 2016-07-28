<?
$subject_val = "[hwloc-users] hwloc on Blue Gene/Q?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 12:06:52 2013" -->
<!-- isoreceived="20130108170652" -->
<!-- sent="Tue, 8 Jan 2013 12:06:48 -0500" -->
<!-- isosent="20130108170648" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc on Blue Gene/Q?" -->
<!-- id="CADKQjjcahTwBpa0yEGCp3agYwTBreUUY4Nq8GV2K0-=-U8TQLg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc on Blue Gene/Q?<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 12:06:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0799.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to use hwloc on a Blue Gene/Q. Building and installing worked
<br>
fine, and it reports the system configuration fine as well (i.e. it shows
<br>
all PUs). However, when I try to inquire the thread/core bindings, hwloc
<br>
crashes with an error in libc's free(). This is both with 1.6 and 1.6.1rc1.
<br>
<p>The error occurs apparently in CPU_FREE called from
<br>
hwloc_linux_find_kernel_nr_cpus.
<br>
<p>Does this ring a bell with anyone? I know this is not enough information to
<br>
debug things, but do you have any pointers for things to look at?
<br>
<p>I remember reading somewhere that the last bit in a cpu_set_t cannot be
<br>
used. A Blue Gene/Q has 64 PUs, and may be using 64-bit integers to hold
<br>
cpu_set_t data. Could this be an issue?
<br>
<p>My goal is to examine and experiment with thread/core bindings with OpenMP
<br>
to improve performance.
<br>
<p>-erik
<br>
<p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0799.php">Ashley Reid: "Re: [hwloc-users] Mapping a GPU to a pci local CPU on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0801.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
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
