<?
$subject_val = "[hwloc-devel] win64 support for &gt;32 processors OK";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 07:20:34 2012" -->
<!-- isoreceived="20120501112034" -->
<!-- sent="Tue, 01 May 2012 13:20:27 +0200" -->
<!-- isosent="20120501112027" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] win64 support for &amp;gt;32 processors OK" -->
<!-- id="4F9FC6FB.5090108_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="071901cd2629$724595d0$56d0c170$_at_gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] win64 support for &gt;32 processors OK<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 07:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3055.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/04/3053.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4460)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bouncing this to -devel for archive.
<br>
Brice
<br>
<p><p>-------- Message original --------
<br>
Sujet: 	RE: hwloc/windows
<br>
Date : 	Sun, 29 Apr 2012 11:59:29 -0500
<br>
De : 	Hartmut Kaiser &lt;hartmut.kaiser_at_[hidden]&gt;
<br>
R&#233;pondre &#224; : 	&lt;hartmut.kaiser_at_[hidden]&gt;
<br>
Pour : 	'Brice Goglin' &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><p><p>Brice,
<br>
<p>Please see attached the output for 'lstopo-text.exe --of console' (32 and 64
<br>
bit builds, stdout and stderr). The 64 bit build seems to work fine now. The
<br>
32 bit build produces the (almost) correct output for the first 32 cores,
<br>
which is probably all we can expect to get, but stderr still shows:
<br>
<p>****************************************************************************
<br>
* Hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* object intersection without inclusion!
<br>
* Error occurred in topology.c line 701
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology.sh script.
<br>
****************************************************************************
<br>
<p>Regards Hartmut
<br>
---------------
<br>
<a href="http://boost-spirit.com">http://boost-spirit.com</a>
<br>
<a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
<br>
<p><p><p><p><p>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3054/lstopo-smp-48core-winx32-output.txt">lstopo-smp-48core-winx32-output.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx32-output.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3054/lstopo-smp-48core-winx64.txt">lstopo-smp-48core-winx64.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx64.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3054/lstopo-smp-48core-winx64-output.txt">lstopo-smp-48core-winx64-output.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx64-output.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3054/lstopo-smp-48core-winx32.txt">lstopo-smp-48core-winx32.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx32.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3055.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/04/3053.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4460)"</a>
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
