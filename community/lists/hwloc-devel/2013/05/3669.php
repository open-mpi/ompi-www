<?
$subject_val = "[hwloc-devel] hwloc-1.7 Warnings on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 00:44:18 2013" -->
<!-- isoreceived="20130503044418" -->
<!-- sent="Thu, 02 May 2013 23:44:12 -0500" -->
<!-- isosent="20130503044412" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.7 Warnings on FreeBSD" -->
<!-- id="5183409C.70100_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.7 Warnings on FreeBSD<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-03 00:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3670.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="3668.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3670.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="3670.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="3671.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>hwloc-1.7 is throwing a number of warnings on FreeBSD.  Most of them are
<br>
for global variables being shadowed and incorrect function casting.  I
<br>
am able to reproduce it with CFLAGS='-Wall -Wextra -Wshadow
<br>
-Wbad-function-cast'.
<br>
<p>Here are some of the warnings --
<br>
<p>In file included from
<br>
/home/balaji/software/mpich/hwloc/include/hwloc.h:2225,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from topology-freebsd.c:26:
<br>
/home/balaji/software/mpich/hwloc/include/hwloc/helper.h: In function
<br>
'hwloc_distribute':
<br>
/home/balaji/software/mpich/hwloc/include/hwloc/helper.h:786: warning:
<br>
declaration of 'cpuset' shadows a global declaration
<br>
/usr/include/sys/cpuset.h:222: warning: shadowed declaration is here
<br>
/home/balaji/software/mpich/hwloc/include/hwloc/helper.h: In function
<br>
'hwloc_distributev':
<br>
/home/balaji/software/mpich/hwloc/include/hwloc/helper.h:806: warning:
<br>
declaration of 'cpuset' shadows a global declaration
<br>
<p><p>lstopo-draw.c: In function 'pci_device_draw':
<br>
lstopo-draw.c:437: warning: cast from function call of type 'double' to
<br>
non-matching type 'unsigned int'
<br>
lstopo-draw.c:437: warning: cast from function call of type 'double' to
<br>
non-matching type 'unsigned int'
<br>
lstopo-draw.c:444: warning: cast from function call of type 'double' to
<br>
non-matching type 'unsigned int'
<br>
lstopo-draw.c:444: warning: cast from function call of type 'double' to
<br>
non-matching type 'unsigned int'
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3670.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="3668.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3670.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="3670.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="3671.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
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
