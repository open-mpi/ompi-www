<?
$subject_val = "[hwloc-users] RPM for hwloc 1.1 for Fedora and RHEL5 (via EPEL5) is out";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  1 18:51:48 2011" -->
<!-- isoreceived="20110101235148" -->
<!-- sent="Sun, 2 Jan 2011 00:51:43 +0100" -->
<!-- isosent="20110101235143" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-users] RPM for hwloc 1.1 for Fedora and RHEL5 (via EPEL5) is out" -->
<!-- id="AANLkTim66EDdwXVK6DqzLox1+di_fqTRyW6o1NiQ6YZV_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-users] RPM for hwloc 1.1 for Fedora and RHEL5 (via EPEL5) is out<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-01 18:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0256.php">guillaume Arnal: "[hwloc-users] some questions about hwloc"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/12/0254.php">Brice Goglin: "Re: [hwloc-users] Identifying NIC in a topology using HWLOC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have just pushed RPM for hwloc 1.1 to Fedora repositories. I have updated
<br>
EPEL5 as well. It should be available for download shortly.
<br>
<p>It' based on
<br>
<p><a href="http://www.open-mpi.org/software/hwloc/nightly/v1.1/hwloc-1.1rc6r2967.tar.bz2">http://www.open-mpi.org/software/hwloc/nightly/v1.1/hwloc-1.1rc6r2967.tar.bz2</a>
<br>
<p>which is hwloc 1.1 plus following fixes:
<br>
<p>- Fix hwloc_bitmap_to_ulong right after allocating the bitmap.
<br>
- Fix the minimum width of NUMA nodes, caches and the legend in the
<br>
graphical lstopo output.
<br>
- Cleanup error management in hwloc-gather-topology.sh.
<br>
- Add a manpage and usage for hwloc-gather-topology.sh on Linux.
<br>
<p>I have also renamed hwloc-gather-topology.sh to hwloc-gather-topology to be
<br>
consistent with the naming in the upcoming version 1.2
<br>
<p>Thanks
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0255/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0256.php">guillaume Arnal: "[hwloc-users] some questions about hwloc"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/12/0254.php">Brice Goglin: "Re: [hwloc-users] Identifying NIC in a topology using HWLOC"</a>
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
