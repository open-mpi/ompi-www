<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 08:47:43 2011" -->
<!-- isoreceived="20110906124743" -->
<!-- sent="Tue, 06 Sep 2011 12:47:36 -0000 (UTC)" -->
<!-- isosent="20110906124736" -->
<!-- name="Igor Gali&#196;&#135;" -->
<!-- email="i.galic_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="31c429d6-aba4-4f36-ac6b-b3e5f4fdee9a_at_iris" -->
<!-- charset="utf-8" -->
<!-- inreplyto="b3a8a403-c65d-45b4-883d-a48b3f8b7b82_at_iris" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC<br>
<strong>From:</strong> Igor Gali&#196;&#135; (<em>i.galic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 08:47:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2382.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2380.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2380.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2382.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The failing test (i386):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_next_obj_covering_cpuset
</span><br>
<span class="quotelev1">&gt; Assertion failed: !obj, file hwloc_get_obj_inside_cpuset.c, line 40
</span><br>
<span class="quotelev1">&gt; /bin/bash: line 5: 20986 Abort                   (core dumped)
</span><br>
<span class="quotelev1">&gt; ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_get_obj_inside_cpuset
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_get_shared_cache_covering_obj
</span><br>
<p>here's a completely inconclusive backtrace of the coredump:
<br>
<p>igalic_at_unstable10x ...-i386/build-isa-i386/hwloc-1.2.1/tests (git)-[csw] %  LD_LIBRARY_PATH=&quot;/home/igalic/mgar/pkg/hwloc/trunk/work/solaris9-i386/build-isa-i386/hwloc-1.2.1/src/.libs:$LD_LIBRARY_PATH&quot; dbx .libs/hwloc_get_obj_inside_cpuset core
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.6' in your .dbxrc
<br>
Reading hwloc_get_obj_inside_cpuset
<br>
dbx: warning: core object name &quot;hwloc_get_obj_i&quot; matches
<br>
object name &quot;hwloc_get_obj_inside_cpuset&quot; within the limit of 14. assuming they match
<br>
core file header read successfully
<br>
Reading ld.so.1
<br>
Reading libhwloc.so.3.1.3
<br>
Reading libxml2.so.2.7.8
<br>
Reading libkstat.so.1
<br>
Reading libc.so.1
<br>
Reading libdl.so.1
<br>
Reading libpthread.so.1
<br>
Reading libz.so.1.2.5
<br>
Reading libiconv.so.2.5.1
<br>
Reading libm.so.1
<br>
Reading libsocket.so.1
<br>
Reading libnsl.so.1
<br>
t_at_1 (l_at_1) program terminated by signal ABRT (Abort)
<br>
0xfed8b485: __lwp_kill+0x0015:  jae      __lwp_kill+0x23        [ 0xfed8b493, .+0xe ]
<br>
(dbx) where                                                                  
<br>
current thread: t_at_1
<br>
=&gt;[1] __lwp_kill(0x1, 0x6), at 0xfed8b485 
<br>
&nbsp;&nbsp;[2] _thr_kill(0x1, 0x6), at 0xfed8630e 
<br>
&nbsp;&nbsp;[3] raise(0x6), at 0xfed326b7 
<br>
&nbsp;&nbsp;[4] abort(0x1, 0x8063090, 0x65737341, 0x6f697472, 0x6166206e, 0x64656c69), at 0xfed11e1d 
<br>
&nbsp;&nbsp;[5] __assert(0x80516d0, 0x80516b0, 0x28, 0xfeb72a00), at 0xfed12037 
<br>
&nbsp;&nbsp;[6] main(0x1, 0x8047a84, 0x8047a8c, 0x805088f), at 0x8050c5f 
<br>
(dbx) 
<br>
<p><p>i
<br>
<p><pre>
-- 
Igor Gali&#196;&#135;
Tel: +43 (0) 664 886 22 883
Mail: i.galic_at_[hidden]
URL: <a href="http://brainsware.org/">http://brainsware.org/</a>
GPG: 571B 8B8A FC97 266D BDA3  EF6F 43AD 80A4 5779 3257
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2382.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2380.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2380.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2382.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
