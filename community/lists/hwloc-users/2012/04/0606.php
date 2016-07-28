<?
$subject_val = "[hwloc-users] AMD Opteron 6238 lstopo wrong topology";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 07:51:34 2012" -->
<!-- isoreceived="20120419115134" -->
<!-- sent="Thu, 19 Apr 2012 13:51:08 +0200" -->
<!-- isosent="20120419115108" -->
<!-- name="Petros Aristidou" -->
<!-- email="p3tris_at_[hidden]" -->
<!-- subject="[hwloc-users] AMD Opteron 6238 lstopo wrong topology" -->
<!-- id="CAFBR3giHT8CdSwhXEcjn-doGr==K136zxmo_fGovej3ZPqSvsg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] AMD Opteron 6238 lstopo wrong topology<br>
<strong>From:</strong> Petros Aristidou (<em>p3tris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 07:51:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0607.php">Samuel Thibault: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/03/0605.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0607.php">Samuel Thibault: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Maybe reply:</strong> <a href="0607.php">Samuel Thibault: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Reply:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I run lstopo on my 4-socket 6238, Supermicro system and I get the following
<br>
figures: <a href="http://dl.dropbox.com/u/258337/lstop_odysseus_1.4.1.pdf">http://dl.dropbox.com/u/258337/lstop_odysseus_1.4.1.pdf</a> and
<br>
<a href="http://dl.dropbox.com/u/258337/lstopo_verbose.txt">http://dl.dropbox.com/u/258337/lstopo_verbose.txt</a>
<br>
<p>It shows that each socket has 2 numanodes with 6 cores each. It shows a
<br>
shared L3 memory but dedicated L2 and L1. In other references, like:
<br>
<a href="http://www.olcf.ornl.gov/wp-content/uploads/2012/01/TitanWorkshop2012_Day1_AMD.pdf">http://www.olcf.ornl.gov/wp-content/uploads/2012/01/TitanWorkshop2012_Day1_AMD.pdf</a>
<br>
<a href="http://www.siliconmechanics.com/files/BulldozerInterlagosInfo.pdf">http://www.siliconmechanics.com/files/BulldozerInterlagosInfo.pdf</a>  and
<br>
<a href="http://www.hpc2n.umu.se/resources/abisko/cpuarch">http://www.hpc2n.umu.se/resources/abisko/cpuarch</a>
<br>
I get that L1 is dedicated, L2 is shared by 2 cores and L3 shared by all 6
<br>
in the numanode.
<br>
<p>What's the truth? Is lstopo wrongly reporting that?
<br>
<p>I am running the latest stable version of Debian Linux (6.0.4 Squeeze) with
<br>
all updates and have hwloc v1.4.1 installed.
<br>
<p>Any insight is welcome!
<br>
<p>Petros
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0607.php">Samuel Thibault: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/03/0605.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0607.php">Samuel Thibault: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Maybe reply:</strong> <a href="0607.php">Samuel Thibault: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
<li><strong>Reply:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-users] AMD Opteron 6238 lstopo wrong topology"</a>
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
