<?
$subject_val = "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 10:24:24 2013" -->
<!-- isoreceived="20131101142424" -->
<!-- sent="Fri, 1 Nov 2013 14:24:21 +0000" -->
<!-- isosent="20131101142421" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&amp;quot; ?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A3198_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5272933B.6020004_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 10:24:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/10/0911.php">Brice Goglin: "Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Reply:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Maybe reply:</strong> <a href="0914.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul Kapinos originally reported this issue on the OMPI users list.
<br>

<br>
He is showing a stack trace from OMPI-1.7.3, which uses hwloc 1.5.2 (note that OMPI 1.7.4 will use hwloc 1.7.2).
<br>

<br>
I tried to read the xml file he provided with the git hwloc master HEAD, and it fails:
<br>

<br>
-----
<br>
&#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; ./utils/lstopo -i lstopo_linuxitvc00.xml
<br>
ignoring depth attribute for object type without depth
<br>
ignoring depth attribute for object type without depth
<br>
XML component discovery failed.
<br>
hwloc_topology_load() failed (Invalid argument).
<br>
-----
<br>

<br>
Any idea what's happening here?
<br>

<br>
BTW, I can apply the fix to both the OMPI SVN trunk and v1.7 branch (since OMPI v1.7 is now up to hwloc 1.7.2).
<br>

<br>

<br>

<br>
On Oct 31, 2013, at 1:28 PM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using 1.7.x (1.7.2 and 1.7.3 tested), we get SIGSEGV from somewhere in-deepth of 'hwlock' library - see the attached screenshot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because the error is strongly aligned to just one single node, which in turn is kinda special one (see output of 'lstopo -'), it smells like an error in the 'hwlock' library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to disable hwlock or to debug it in somehow way?
</span><br>
<span class="quotelev1">&gt; (besides to build a debug version of hwlock and OpenMPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; &lt;lstopo_linuxitvc00.txt&gt;&lt;opal_hwlock_SIGSEGV.png&gt;&lt;lstopo_linuxitvc00.xml&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>

<br>
--
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
[cid:2e96120b-7548-4e23-9f50-876178585eff_at_[hidden]]
<br>
<p>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-users/att-0912/opal_hwlock_SIGSEGV.png" alt="opal_hwlock_SIGSEGV.png
">
<!-- attachment="opal_hwlock_SIGSEGV.png" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0912/lstopo_linuxitvc00.xml">lstopo_linuxitvc00.xml</a>
</ul>
<!-- attachment="lstopo_linuxitvc00.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/10/0911.php">Brice Goglin: "Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Reply:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Maybe reply:</strong> <a href="0914.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
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
