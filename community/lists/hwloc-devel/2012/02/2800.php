<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 13:01:16 2012" -->
<!-- isoreceived="20120203180116" -->
<!-- sent="Fri, 3 Feb 2012 19:01:10 +0100" -->
<!-- isosent="20120203180110" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu" -->
<!-- id="20120203180110.GA10030_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1000483798.636324.1328123939125.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 13:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2801.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2799.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2747.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2803.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2803.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2804.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul H. Hargrove, le Wed 01 Feb 2012 20:18:59 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; So if qemu's emulation were at fault, then one would expect more wide-spread
</span><br>
<span class="quotelev1">&gt; problems and a generally unstable system.
</span><br>
<span class="quotelev1">&gt; While -mabi=64 is not the default in user-space, it IS the way the linux
</span><br>
<span class="quotelev1">&gt; kernel is built and thus should be well tested.
</span><br>
<p>Except that it does not use floating point operations. I've commited a
<br>
&quot;fix&quot;. It makes the failures change. I got fun things with the mips64
<br>
libc:
<br>
<p>fprintf(stderr,&quot;%f\n&quot;, min_distance);
<br>
fprintf(stderr,&quot;%f\n&quot;, accuracy);
<br>
fprintf(stderr,&quot;%f %f\n&quot;, min_distance, min_distance);
<br>
fprintf(stderr,&quot;%f %f\n&quot;, min_distance, accuracy);
<br>
<p>will print
<br>
<p>2.0
<br>
0
<br>
2.0 2.0
<br>
0.0 0.0
<br>
<p>! It seems lenny on qemu-mips64 is not really stable with floats yet :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2801.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2799.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2747.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2803.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2803.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2804.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
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
