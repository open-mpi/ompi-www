<?
$subject_val = "[hwloc-users] object intersection without inclusion";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 15:30:20 2016" -->
<!-- isoreceived="20160210203020" -->
<!-- sent="Wed, 10 Feb 2016 18:30:13 -0200" -->
<!-- isosent="20160210203013" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="[hwloc-users] object intersection without inclusion" -->
<!-- id="56BB9DD5.8030209_at_gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] object intersection without inclusion<br>
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 15:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1257.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] object intersection without inclusion"</a>
<li><strong>Previous message:</strong> <a href="1255.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1257.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] object intersection without inclusion"</a>
<li><strong>Reply:</strong> <a href="1257.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] object intersection without inclusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello there
<br>
<p>I'm facing an issue with hwloc 1.5.3 (old, i know, but it's the stock 
<br>
centos 6 package) in that a single node emits this message whenever i 
<br>
run any MPI-enabled program.
<br>
<p>****************************************************************************
<br>
* Hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* object (Socket P#0 cpuset 0x0000ffff) intersection without inclusion!
<br>
* Error occurred in topology.c line 718
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology.sh script.
<br>
****************************************************************************
<br>
<p><p>This happen only in one node. Other similar nodes (same hardware, same 
<br>
OS, same software) run fine. The OS is centos 6.5 x86_64.
<br>
<p><p>In the attachments, 'compute-0-0' is the healthy node, 'compute-0-12' is 
<br>
the quirky one.
<br>
<p><p>Is it possible to point the faulty hardware from the attached outputs ?
<br>
<p><p>TIA,
<br>
Fabricio
<br>
<p>



<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1256/compute-0-0.output">compute-0-0.output</a>
</ul>
<!-- attachment="compute-0-0.output" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1256/compute-0-0.tar.bz2">compute-0-0.tar.bz2</a>
</ul>
<!-- attachment="compute-0-0.tar.bz2" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1256/compute-0-12.output">compute-0-12.output</a>
</ul>
<!-- attachment="compute-0-12.output" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1256/compute-0-12.tar.bz2">compute-0-12.tar.bz2</a>
</ul>
<!-- attachment="compute-0-12.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1257.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] object intersection without inclusion"</a>
<li><strong>Previous message:</strong> <a href="1255.php">Brice Goglin: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1257.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] object intersection without inclusion"</a>
<li><strong>Reply:</strong> <a href="1257.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] object intersection without inclusion"</a>
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
