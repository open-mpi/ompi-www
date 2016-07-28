<?
$subject_val = "[hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 21:04:40 2014" -->
<!-- isoreceived="20141120020440" -->
<!-- sent="Wed, 19 Nov 2014 18:04:19 -0800" -->
<!-- isosent="20141120020419" -->
<!-- name="Thomas Van Doren" -->
<!-- email="thomas.vandoren_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc - &amp;quot;symbol already defined&amp;quot; error building with optimizations (-O3) on 32bit ubuntu" -->
<!-- id="CAM=OmMtMDouHAkV7NWg_ySXgqG2stnTU-2d10do28Y524Wc1iA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu<br>
<strong>From:</strong> Thomas Van Doren (<em>thomas.vandoren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-19 21:04:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1116.php">Brice Goglin: "Re: [hwloc-users] lstopo error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Reply:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am getting the following error when building hwloc on 32bit ubuntu 14.10
<br>
(utopic) with optimizations (CFLAGS='-O3'):
<br>
<p>... snip ...
<br>
&nbsp;&nbsp;CC       topology-x86.lo
<br>
/home/vagrant/src/hwloc/include/private/cpuid-x86.h: Assembler messages:
<br>
/home/vagrant/src/hwloc/include/private/cpuid-x86.h:40: Error: symbol
<br>
`Lhwloc1' is already defined
<br>
Makefile:878: recipe for target 'topology-x86.lo' failed
<br>
make[1]: *** [topology-x86.lo] Error 1
<br>
make[1]: Leaving directory '/home/vagrant/src/hwloc/hwloc'
<br>
Makefile:615: recipe for target 'all-recursive' failed
<br>
make: *** [all-recursive] Error 1
<br>
<p>I used these steps to verify that the build works without optimizations and
<br>
reproduce the error above with optimizations:
<br>
<p>git clone <a href="https://github.com/open-mpi/hwloc">https://github.com/open-mpi/hwloc</a>
<br>
cd hwloc/
<br>
./autogen.sh
<br>
./configure
<br>
make
<br>
# This works, but no optimizations.
<br>
<p># This fails with the error above...
<br>
git clean -dxf
<br>
./autogen.sh
<br>
./configure CFLAGS='-O3' CXXFLAGS='-O3'
<br>
make
<br>
<p>Is this expected to work? Do you have recommendations for fixing? I first
<br>
saw this on hwloc 1.9.1 and verified it also happens on 1.10.0.
<br>
<p>I attached the configure and make V=1 output, as well as the config.log for
<br>
the build against master (sha: 77fbe8f) that fails.
<br>
<p>I am using the utopic32 vagrant box from Ubuntu:
<br>
<a href="http://cloud-images.ubuntu.com/vagrant/utopic/current/">http://cloud-images.ubuntu.com/vagrant/utopic/current/</a>
<br>
<p>Please let me know if you need any other information.
<br>
<p>Thanks!
<br>
<p>Thomas Van Doren
<br>
thomas.vandoren_at_[hidden]
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1117/hwloc-output.tar.bz2">hwloc-output.tar.bz2</a>
</ul>
<!-- attachment="hwloc-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Previous message:</strong> <a href="1116.php">Brice Goglin: "Re: [hwloc-users] lstopo error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>Reply:</strong> <a href="1118.php">Brice Goglin: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
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
