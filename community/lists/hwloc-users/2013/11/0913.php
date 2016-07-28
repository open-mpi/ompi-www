<?
$subject_val = "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 10:37:20 2013" -->
<!-- isoreceived="20131101143720" -->
<!-- sent="Fri, 01 Nov 2013 15:37:15 +0100" -->
<!-- isosent="20131101143715" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&amp;quot; ?" -->
<!-- id="5273BC9B.7070105_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A3198_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 10:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0914.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="0912.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="0912.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0914.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I missed the mail on OMPI-users.
<br>
<p>This hwloc looks veeeeeeeeeeeery old. We don't have Misc objects instead
<br>
of Groups since we switched from 0.9 to 1.0. You should regenerate the
<br>
XML file with a hwloc version that came out after the big bang (or
<br>
better, after the asteroid killed the dinosaurs). Please resend that XML
<br>
from a recent hwloc so that we can get a better clue of the problem.
<br>
<p>Assuming there's a bug in OMPI's hwloc, I would suggests downloading
<br>
hwloc 1.5.3 and running make check on that machine. And try again with
<br>
hwloc 1.7.2 in case that's already fixed.
<br>
<p>thanks
<br>
Brice
<br>
<p><p><p><p><p><p>Le 01/11/2013 15:24, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Paul Kapinos originally reported this issue on the OMPI users list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; He is showing a stack trace from OMPI-1.7.3, which uses hwloc 1.5.2
</span><br>
<span class="quotelev1">&gt; (note that OMPI 1.7.4 will use hwloc 1.7.2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to read the xml file he provided with the git hwloc master
</span><br>
<span class="quotelev1">&gt; HEAD, and it fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; ??? ./utils/lstopo -i lstopo_linuxitvc00.xml
</span><br>
<span class="quotelev1">&gt; ignoring depth attribute for object type without depth
</span><br>
<span class="quotelev1">&gt; ignoring depth attribute for object type without depth
</span><br>
<span class="quotelev1">&gt; XML component discovery failed.
</span><br>
<span class="quotelev1">&gt; hwloc_topology_load() failed (Invalid argument).
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what's happening here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I can apply the fix to both the OMPI SVN trunk and v1.7 branch
</span><br>
<span class="quotelev1">&gt; (since OMPI v1.7 is now up to hwloc 1.7.2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2013, at 1:28 PM, Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; using 1.7.x (1.7.2 and 1.7.3 tested), we get SIGSEGV from somewhere
</span><br>
<span class="quotelev1">&gt; in-deepth of 'hwlock' library - see the attached screenshot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because the error is strongly aligned to just one single node, which
</span><br>
<span class="quotelev1">&gt; in turn is kinda special one (see output of 'lstopo -'), it smells
</span><br>
<span class="quotelev1">&gt; like an error in the 'hwlock' library.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to disable hwlock or to debug it in somehow way?
</span><br>
<span class="quotelev2">&gt; &gt; (besides to build a debug version of hwlock and OpenMPI)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt; &gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt; &gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt; &gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;lstopo_linuxitvc00.txt&gt;&lt;opal_hwlock_SIGSEGV.png&gt;&lt;lstopo_linuxitvc00.xml&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0914.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="0912.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="0912.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0914.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
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
