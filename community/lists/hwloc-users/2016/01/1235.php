<?
$subject_val = "[hwloc-users] error from the operating system - Solaris 11.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 12:16:14 2016" -->
<!-- isoreceived="20160104171614" -->
<!-- sent="Mon, 04 Jan 2016 18:16:10 +0100" -->
<!-- isosent="20160104171610" -->
<!-- name="Karl Behler" -->
<!-- email="karl.behler_at_[hidden]" -->
<!-- subject="[hwloc-users] error from the operating system - Solaris 11.3" -->
<!-- id="568AA8DA.7000909_at_ipp.mpg.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-users] error from the operating system - Solaris 11.3<br>
<strong>From:</strong> Karl Behler (<em>karl.behler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-04 12:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1234.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>Reply:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We used to run our MPI application with the SUNWhpc implementation from 
<br>
Sun/Oracle. (This was derived from openmpi 1.5.)
<br>
However, the Oracle HPC implementation fails for the new Solaris 11.3 
<br>
platform.
<br>
So we downloaded and made openmpi 1.10.1 on this platform from scratch.
<br>
<p>All seems fine and a simple test application runs fine.
<br>
However, with the real application we are running into a hwloc problem.
<br>
<p>So we also downloaded and made the hwloc package 1.11.2.
<br>
<p>Now examining hardware locality we get the following error:
<br>
<p>hwloc-info -v --whole-io
<br>
****************************************************************************
<br>
* hwloc 1.11.2 has encountered what looks like an error from the operating system.
<br>
*
<br>
* Core (P#0 cpuset 0x00001001) intersects with NUMANode (P#1 cpuset 0x0003c001) without inclusion!
<br>
* Error occurred in topology.c line 1046
<br>
*
<br>
* The following FAQ entry in the hwloc documentation may help:
<br>
*   What should I do when hwloc reports &quot;operating system&quot; warnings?
<br>
* Otherwise please report this error message to the hwloc user's mailing list,
<br>
* along with any relevant topology information from your platform.
<br>
****************************************************************************
<br>
depth 0:        1 Machine (type #1)
<br>
&nbsp;&nbsp;depth 1:       2 Package (type #3)
<br>
&nbsp;&nbsp;&nbsp;depth 2:      2 NUMANode (type #2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 3:     1 Core (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 4:    24 PU (type #6)
<br>
<p>Since I could not find the mentioned FAQ topic I'm asking the list for 
<br>
advice.
<br>
<p>Our system is an Oracle/ Solaris 11.3 (latest patch level) on an Intel 
<br>
hardware platform from Sun.
<br>
<p>output of uname -a -&gt; SunOS sxaug28 5.11 11.3 i86pc i386 i86pc
<br>
output of psrinfo -v -&gt;
<br>
<p>Status of virtual processor 0 as of: 01/04/2016 17:10:17
<br>
&nbsp;&nbsp;&nbsp;on-line since 01/04/2016 14:44:28.
<br>
&nbsp;&nbsp;&nbsp;The i386 processor operates at 1600 MHz,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and has an i387 compatible floating point processor.
<br>
Status of virtual processor 1 as of: 01/04/2016 17:10:17
<br>
&nbsp;&nbsp;&nbsp;on-line since 01/04/2016 14:45:10.
<br>
&nbsp;&nbsp;&nbsp;The i386 processor operates at 1600 MHz,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and has an i387 compatible floating point processor.
<br>
.
<br>
. (similar lines removed)
<br>
.
<br>
Status of virtual processor 23 as of: 01/04/2016 17:10:17
<br>
&nbsp;&nbsp;&nbsp;on-line since 01/04/2016 14:45:11.
<br>
&nbsp;&nbsp;&nbsp;The i386 processor operates at 1600 MHz,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and has an i387 compatible floating point processor.
<br>
<p>Following comes the script which was used to make hwloc: (used compiler: 
<br>
Sunstudio 12.4, see config.log as bz2 attachment)
<br>
<p>setenv CFLAGS &quot;-m64 -xtarget=generic -xarch=sse2 -xprefetch -xprefetch_level=2 -xvector=simd -xdepend=yes -xbuiltin=%all -xO5&quot;
<br>
setenv CXXFLAGS &quot;$CFLAGS&quot;
<br>
setenv FCFLAGS &quot;-m64 -xtarget=generic -xarch=sse2 -xprefetch -xprefetch_level=2 -xvector=simd -stackvar -xO5&quot;
<br>
setenv FFLAGS &quot;$FCFLAGS&quot;
<br>
setenv PREFIX /usr/openmpi/hwloc-1.11.2
<br>
./configure --prefix=$PREFIX --disable-debug
<br>
dmake -j 12
<br>
# as root: make install
<br>
#        : cp -p config.status $PREFIX/config.status
<br>
<p>Any advice much appreciated.
<br>
<p>Karl
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1235/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1234.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>Reply:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
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
