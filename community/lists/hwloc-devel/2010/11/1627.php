<?
$subject_val = "Re: [hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 09:00:59 2010" -->
<!-- isoreceived="20101129140059" -->
<!-- sent="Mon, 29 Nov 2010 09:00:53 -0500" -->
<!-- isosent="20101129140053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="EC26900B-F4F0-45FE-87E0-495EB22810D8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201011291351.oATDpYVx032519_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 09:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1628.php">Jeff Squyres: "Re: [hwloc-devel] multiline legend"</a>
<li><strong>Previous message:</strong> <a href="1626.php">Brice Goglin: "[hwloc-devel] multiline legend"</a>
<li><strong>In reply to:</strong> <a href="1625.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was a &quot;make dist&quot; that was endlessly spinning in hwloc-bind.  The IU admins advised me of it this morning, so I killed the errant hwloc-bind (which then ended up killing the &quot;make dist&quot;, etc.).
<br>
<p><p><p>On Nov 29, 2010, at 8:51 AM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Thu Nov 11 21:01:02 EST 2010
</span><br>
<span class="quotelev1">&gt; End time:   Mon Nov 29 08:51:33 EST 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; truncating system cpuset to 51 chars (truncate to four and a half 32bit subsets)
</span><br>
<span class="quotelev1">&gt; got 0x0000ffff,0xffffffff,0xffffffff,0xffffffff,0xffff
</span><br>
<span class="quotelev1">&gt; first cpu cpuset is 0x00000001
</span><br>
<span class="quotelev1">&gt; first cpu cpuset converted back and forth, ok
</span><br>
<span class="quotelev1">&gt; last cpu cpuset is 0x00008000,,,,,,,,,,,,,,,,,,,,,,0x0
</span><br>
<span class="quotelev1">&gt; last cpu cpuset converted back and forth, ok
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_bitmap_string
</span><br>
<span class="quotelev1">&gt; looked for 120 closest entries, found 119
</span><br>
<span class="quotelev1">&gt; ancestor type 1 depth 0 number 0 is system level
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_closest_objs
</span><br>
<span class="quotelev1">&gt; found covering object type Socket covering cpuset 0x0,0x0fff,0xf0000000
</span><br>
<span class="quotelev1">&gt; covering object of 0x0,0x0fff,0xf0000000 is 0x0000ffff,0xff000000, expected 0x0000ffff,0xff000000
</span><br>
<span class="quotelev1">&gt; found system as covering object of first+last cpus cpuset 0x8000,,,,,,,,,,,,,,,,,,,,,,0x1
</span><br>
<span class="quotelev1">&gt; found no covering object for too-large cpuset 0x10000,,,,,,,,,,,,,,,,,,,,,,0x0
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_obj_covering_cpuset
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_cache_covering_cpuset
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_largest_objs_inside_cpuset
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_next_obj_covering_cpuset
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_obj_inside_cpuset
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_shared_cache_covering_obj
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_obj_below_array_by_type
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_bitmap_first_last_weight
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_bitmap_singlify
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_type_depth
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1: 26503 Terminated              ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_bind
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_object_userdata
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_synthetic
</span><br>
<span class="quotelev1">&gt; Binding with OS backend       : OK
</span><br>
<span class="quotelev1">&gt; Binding with synthetic backend: OK
</span><br>
<span class="quotelev1">&gt; Binding with synthetic backend faking is_thissystem: OK
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_is_thissystem
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_insert_misc
</span><br>
<span class="quotelev1">&gt; PASS: glibc-sched
</span><br>
<span class="quotelev1">&gt; exported to buffer 0x9f55750 length 2023
</span><br>
<span class="quotelev1">&gt; re-exported to buffer 0x9f5a440 length 2023
</span><br>
<span class="quotelev1">&gt; PASS: xmlbuffer
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 19 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; make[4]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2781/hwloc/hwloc-1.2a1r2781/_build/tests'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2781/hwloc/hwloc-1.2a1r2781/_build/tests'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2781/hwloc/hwloc-1.2a1r2781/_build/tests'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2781/hwloc/hwloc-1.2a1r2781/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1628.php">Jeff Squyres: "Re: [hwloc-devel] multiline legend"</a>
<li><strong>Previous message:</strong> <a href="1626.php">Brice Goglin: "[hwloc-devel] multiline legend"</a>
<li><strong>In reply to:</strong> <a href="1625.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
