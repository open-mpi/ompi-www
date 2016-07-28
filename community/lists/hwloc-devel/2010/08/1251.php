<?
$subject_val = "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  6 11:14:40 2010" -->
<!-- isoreceived="20100806151440" -->
<!-- sent="Fri, 06 Aug 2010 17:14:21 +0200" -->
<!-- isosent="20100806151421" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints" -->
<!-- id="1281107661.12957.523.camel_at_kallies.zib.de" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4C5C1354.3080608_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-06 11:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1252.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1252.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-08-06 at 15:51 +0200, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Can you send /proc/mounts of both systems?
</span><br>
<span class="quotelev1">&gt; I fixed a problem after 1.0.2 was released [1], it could be related.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2357">https://svn.open-mpi.org/trac/hwloc/changeset/2357</a>
</span><br>
<p>/proc/mounts is symlinked to self/mounts on both systems.
<br>
<p>The contents are:
<br>
<p>SLES10SP3 machine
<br>
-----------------
<br>
rootfs / rootfs rw 0 0
<br>
udev /dev tmpfs rw 0 0
<br>
/dev/sda6 / ext3 rw,data=ordered 0 0
<br>
proc /proc proc rw 0 0
<br>
sysfs /sys sysfs rw 0 0
<br>
debugfs /sys/kernel/debug debugfs rw 0 0
<br>
devpts /dev/pts devpts rw 0 0
<br>
/dev/sda1 /boot ext3 rw,data=ordered 0 0
<br>
cpuset /dev/cpuset cpuset rw 0 0
<br>
securityfs /sys/kernel/security securityfs rw 0 0
<br>
proc /var/lib/ntp/proc proc rw 0 0
<br>
<p><p>SLES11SP1 machine
<br>
-----------------
<br>
rootfs / rootfs rw 0 0
<br>
udev /dev tmpfs rw,relatime,nr_inodes=0,mode=755 0 0
<br>
tmpfs /dev/shm tmpfs rw,relatime 0 0
<br>
/dev/sda6 / ext3 rw,relatime,errors=continue,barrier=1,data=ordered 0 0
<br>
proc /proc proc rw,relatime 0 0
<br>
sysfs /sys sysfs rw,relatime 0 0
<br>
debugfs /sys/kernel/debug debugfs rw,relatime 0 0
<br>
devpts /dev/pts devpts rw,relatime,gid=5,mode=620,ptmxmode=000 0 0
<br>
/dev/sda1 /boot ext3 rw,relatime,errors=continue,barrier=1,data=ordered 0 0
<br>
fusectl /sys/fs/fuse/connections fusectl rw,relatime 0 0
<br>
securityfs /sys/kernel/security securityfs rw,relatime 0 0
<br>
none /proc/sys/fs/binfmt_misc binfmt_misc rw,relatime 0 0
<br>
proc /var/lib/ntp/proc proc rw,relatime 0 0
<br>
cpuset /dev/cpuset cgroup rw,relatime,cpuset,noprefix,release_agent=/sbin/cpuset_release_agent 0 0
<br>
<p><p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1252.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1252.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
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
