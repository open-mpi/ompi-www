<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE]Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  4 16:49:51 2013" -->
<!-- isoreceived="20131104214951" -->
<!-- sent="Mon, 04 Nov 2013 22:49:48 +0100" -->
<!-- isosent="20131104214948" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE]Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&amp;quot; ?" -->
<!-- id="5278167C.5070001_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9da144c2-1fdd-4a8e-8764-c97770bfe77d_at_HUB2.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [WARNING: A/V UNSCANNABLE]Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-04 16:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0916.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE]Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="0914.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0916.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE]Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Reply:</strong> <a href="0916.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE]Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. That's indeed the same bug that you got in Open MPI (reuse of a
<br>
hwloc cpuset structure that was freed earlier). It's a nasty bug that
<br>
happens when reloading from XML on big machines like yours (that
<br>
explains why lstopo works while xmlbuffer and OMPI fail). It was fixed
<br>
in hwloc v1.7.1 (hence will be fixed in Open MPI 1.7.4 from what I
<br>
understand) but the fix was too big to be backported to older hwloc/OMPI.
<br>
<p>You should be able to work around the problem for now by setting
<br>
HWLOC_GROUPING=0 in your environment.
<br>
<p>I re-added hwloc-users to CC so that the bug is officially &quot;closed&quot;.
<br>
<p>Brice
<br>
<p><p><p><p>Le 04/11/2013 22:33, Paul Kapinos a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hello again,
</span><br>
<span class="quotelev1">&gt; I'm not allowed to publish to Hardware locality user list so I omit it
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/04/13 14:19, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 04/11/2013 11:44, Paul Kapinos a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sorry for this paleontologic excursion. (The 4 years old 'lstopo'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; binary was just in my private bin folder and still being runnable..)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached output of newer version 1.5 (Linux-Default one on RHEL/6.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (SL/6.4).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; II.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've also tested hwloc-1.5.2 (could not find v.1.5.3) and hwloc-1.7.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as Brice suggested, by 'confugure' + 'make test' - logs attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.5.2 fails:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh: line 5: 20677 Segmentation fault (core dumped) ${dir}$tst
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAIL: xmlbuffer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you give more details about this segfault?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try (from the build tree):
</span><br>
<span class="quotelev2">&gt;&gt; $ libtool --mode=execute gdb xmlbuffer
</span><br>
<span class="quotelev2">&gt;&gt; then type 'run'
</span><br>
<span class="quotelev2">&gt;&gt; when it crashes, type 'bt full' and send the output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; see attached file trace_1.5.2.txt
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then please also run from hwloc 1.5.2:
</span><br>
<span class="quotelev2">&gt;&gt; * &quot;lstopo foo.xml&quot; and send &quot;foo.xml&quot;
</span><br>
<span class="quotelev2">&gt;&gt; * &quot;hwloc-gather-topology foo&quot; and send &quot;foo.tar.bz2&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also attached but with non-empty names :o)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whereby 1.7.2 seem to be OK.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AFAIK in OpenMPI 1.7.4 the version of 'hwlock' has to be updated?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, the original issue should be fixed by this, huh?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hard to say before we get details about the crash in xmlbuffer above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many thanks for your help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pk224850_at_linuxitvc00:~/SVN/mpifasttest/trunk[511]lstopo 1.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ lstopo lstopo_linuxitvc00_1.5.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ lstopo lstopo_linuxitvc00_1.5.xml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/01/13 15:37, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry, I missed the mail on OMPI-users.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This hwloc looks veeeeeeeeeeeery old. We don't have Misc objects
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Groups since we switched from 0.9 to 1.0. You should regenerate the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XML file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with a hwloc version that came out after the big bang (or better,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; after the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; asteroid killed the dinosaurs). Please resend that XML from a recent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that we can get a better clue of the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Assuming there's a bug in OMPI's hwloc, I would suggests downloading
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc 1.5.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and running make check on that machine. And try again with hwloc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.7.2 in case
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that's already fixed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 01/11/2013 15:24, Jeff Squyres (jsquyres) a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul Kapinos originally reported this issue on the OMPI users list.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; He is showing a stack trace from OMPI-1.7.3, which uses hwloc 1.5.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (note that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI 1.7.4 will use hwloc 1.7.2).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried to read the xml file he provided with the git hwloc master
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HEAD, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it fails:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; ./utils/lstopo -i lstopo_linuxitvc00.xml
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ignoring depth attribute for object type without depth
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ignoring depth attribute for object type without depth
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; XML component discovery failed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc_topology_load() failed (Invalid argument).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any idea what's happening here?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BTW, I can apply the fix to both the OMPI SVN trunk and v1.7 branch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (since
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI v1.7 is now up to hwloc 1.7.2).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 31, 2013, at 1:28 PM, Paul Kapinos
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;kapinos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; using 1.7.x (1.7.2 and 1.7.3 tested), we get SIGSEGV from somewhere
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in-deepth of 'hwlock' library - see the attached screenshot.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Because the error is strongly aligned to just one single node,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which in turn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is kinda special one (see output of 'lstopo -'), it smells like an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the 'hwlock' library.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there a way to disable hwlock or to debug it in somehow way?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (besides to build a debug version of hwlock and OpenMPI)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos - High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Seffenter Weg 23, D 52074 Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;lstopo_linuxitvc00.txt&gt;&lt;opal_hwlock_SIGSEGV.png&gt;&lt;lstopo_linuxitvc00.xml&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0916.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE]Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="0914.php">Brice Goglin: "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0916.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE]Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Reply:</strong> <a href="0916.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE]Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
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
