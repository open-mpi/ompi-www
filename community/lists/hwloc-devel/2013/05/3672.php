<?
$subject_val = "[hwloc-devel] nvidia and nouveau driver differences";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 16:38:14 2013" -->
<!-- isoreceived="20130503203814" -->
<!-- sent="Fri, 03 May 2013 15:38:08 -0500" -->
<!-- isosent="20130503203808" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] nvidia and nouveau driver differences" -->
<!-- id="51842030.1080000_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] nvidia and nouveau driver differences<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-03 16:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Previous message:</strong> <a href="3671.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Reply:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The short answer to this may be that my Nvidia driver is too old. My Nvidia
<br>
card is old so I have to use the version 173 proprietary driver on it, but the
<br>
latest nouveau driver works fine.
<br>
<p>I'm on Fedora 18, testing hwloc-1.7. I fetched and built the latest
<br>
libXNVCtrl, 319.17, from <a href="ftp://download.nvidia.com/XFree86/nvidia-settings">ftp://download.nvidia.com/XFree86/nvidia-settings</a>.
<br>
The one shipped with Fedora is too old and hwloc will not build with it.
<br>
<p>When I have the nvidia proprietary driver installed, it does not show as an OS
<br>
device. Here's the end of the tests/hwloc_iodevs output:
<br>
<p>Found 3 OS devices
<br>
&nbsp;Found OS device em1 subtype 2
<br>
&nbsp;Found OS device sda subtype 0
<br>
&nbsp;Found OS device sr0 subtype 0
<br>
<p>with the open-source nouveau driver loaded, it looks like this:
<br>
<p>Found 5 OS devices
<br>
&nbsp;Found OS device card0 subtype 1
<br>
&nbsp;Found OS device controlD64 subtype 1
<br>
&nbsp;Found OS device em1 subtype 2
<br>
&nbsp;Found OS device sda subtype 0
<br>
&nbsp;Found OS device sr0 subtype 0
<br>
<p>The card0 and controlD64 objects have no infos associated with them.
<br>
<p>There are no other differences in the output. Both drivers seem operational.
<br>
I've attached the gather-topology output (created with the nvidia driver
<br>
loaded) in case anyone wants to see it.
<br>
<p>thanks,
<br>
--Guy
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3672/mentos.hsv.redhat.com.tar.bz2">mentos.hsv.redhat.com.tar.bz2</a>
</ul>
<!-- attachment="mentos.hsv.redhat.com.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Previous message:</strong> <a href="3671.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Reply:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
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
