<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 11:44:39 2013" -->
<!-- isoreceived="20130618154439" -->
<!-- sent="Tue, 18 Jun 2013 17:44:35 +0200" -->
<!-- isosent="20130618154435" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi" -->
<!-- id="20130618154435.GQ7095_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51C0200B.2020902_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 11:44:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3810.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5687)"</a>
<li><strong>Previous message:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3806.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 18 Jun 2013 10:54:33 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; You likely need to compile and install another hwloc instance for your MIC.
</span><br>
<p>Yes. The host build is to be compiled as usual. For the device build,
<br>
you need to restart the build using:
<br>
<p>./configure --host=x86_64-k1om-linux
<br>
<p>and install in another directory, and put the lib/ part in
<br>
SINK_LD_LIBRARY_PATH, so that the MIC loader can find it automatically.
<br>
<p>For building your application, you need to point pkg-config at the
<br>
lib/pkgconfig/ path of the MIC-built version of hwloc, through
<br>
PKG_CONFIG_PATH.
<br>
<p><span class="quotelev1">&gt; It looks like /opt/intel/mic/filesystem/base/ on the host contains the MIC
</span><br>
<span class="quotelev1">&gt; filesystem, so you could theorically install there. But I guess you don't want
</span><br>
<span class="quotelev1">&gt; to modify this special filesystem
</span><br>
<p>This is not needed, the MIC loader finds the library from
<br>
SINK_LD_LIBRARY_PATH.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3810.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5687)"</a>
<li><strong>Previous message:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3806.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
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
