<?
$subject_val = "[hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 10:58:07 2013" -->
<!-- isoreceived="20130423145807" -->
<!-- sent="Tue, 23 Apr 2013 16:58:01 +0200" -->
<!-- isosent="20130423145801" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="CALT_uBRFrkDK5adB=vQAey0t+vRNioRJFnm0a67hCzSuGAjMxw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] RPATH issues when building in Fedora 18<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 10:58:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3633.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.1rc1r5553)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I have upgraded to Fedora 18 recently and I see following when building
<br>
hwloc rpm:
<br>
<p>ERROR   0001: file '/usr/bin/lstopo-no-graphics' contains a standard rpath
<br>
'/usr/lib64' in [/usr/lib64]
<br>
ERROR   0001: file '/usr/bin/lstopo' contains a standard rpath '/usr/lib64'
<br>
in [/usr/lib64]
<br>
ERROR   0001: file '/usr/bin/hwloc-distances' contains a standard rpath
<br>
'/usr/lib64' in [/usr/lib64]
<br>
ERROR   0001: file '/usr/bin/hwloc-distrib' contains a standard rpath
<br>
'/usr/lib64' in [/usr/lib64]
<br>
ERROR   0001: file '/usr/bin/hwloc-calc' contains a standard rpath
<br>
'/usr/lib64' in [/usr/lib64]
<br>
ERROR   0001: file '/usr/bin/hwloc-annotate' contains a standard rpath
<br>
'/usr/lib64' in [/usr/lib64]
<br>
ERROR   0001: file '/usr/bin/hwloc-bind' contains a standard rpath
<br>
'/usr/lib64' in [/usr/lib64]
<br>
ERROR   0001: file '/usr/bin/hwloc-ps' contains a standard rpath
<br>
'/usr/lib64' in [/usr/lib64]
<br>
ERROR   0001: file '/usr/bin/hwloc-assembler' contains a standard rpath
<br>
'/usr/lib64' in [/usr/lib64]
<br>
error: Bad exit status from /var/tmp/rpm-tmp.6Uu2Z4 (%install)
<br>
<p>*    0x0001 ... standard RPATHs (e.g. /usr/lib); such RPATHs are a minor
<br>
*               issue but are introducing redundant searchpaths without
<br>
*               providing a benefit. They can also cause errors in multilib
<br>
*               environments.
<br>
<p>RPATH is not allowed to be in binary files in RPM:
<br>
<p><a href="https://fedoraproject.org/wiki/Packaging:Guidelines#Beware_of_Rpath">https://fedoraproject.org/wiki/Packaging:Guidelines#Beware_of_Rpath</a>
<br>
<p>I have tried to eliminate rpath by using methods described here:
<br>
<p><a href="https://fedoraproject.org/wiki/Packaging:Guidelines#Removing_Rpath">https://fedoraproject.org/wiki/Packaging:Guidelines#Removing_Rpath</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;- If the application uses configure, try passing the
<br>
*--disable-rpath*flag to configure. =&gt; it's not supported in the
<br>
current version of hwloc
<br>
&nbsp;&nbsp;&nbsp;- If the application uses a local copy of libtool, add the following
<br>
&nbsp;&nbsp;&nbsp;lines to the spec after %configure:=&gt; it will make tests FAIL (without this
<br>
&nbsp;&nbsp;&nbsp;change, it runs just fine - all tests are PASSED)
<br>
<p>FAIL: test-hwloc-annotate.sh
<br>
FAIL: test-hwloc-assembler.sh
<br>
PASS: test-hwloc-calc.sh
<br>
PASS: test-hwloc-distances.sh
<br>
PASS: test-hwloc-distrib.sh
<br>
FAIL: test-hwloc-info.sh
<br>
<p>Log file is attached.
<br>
<p>Do you have any idea what's going on? Could you enhance ./configure to
<br>
add *--disable-rpath
<br>
*feature?*
<br>
*
<br>
Thanks a lot!
<br>
Jirka*
<br>
*
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3634/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3634/test-suite.log">test-suite.log</a>
</ul>
<!-- attachment="test-suite.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3633.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.1rc1r5553)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
