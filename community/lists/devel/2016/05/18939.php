<?
$subject_val = "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 12:55:00 2016" -->
<!-- isoreceived="20160507165500" -->
<!-- sent="Sat, 7 May 2016 16:54:58 +0000" -->
<!-- isosent="20160507165458" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v2.x] more &amp;quot;patcher&amp;quot; issues" -->
<!-- id="7A61E8B7-961F-4412-94FD-B45D31A1AED9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15MvhKmXjJZHYe9Ny9mJUM0GyvYh+qLv6MfnL2+=QgdTg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 12:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18938.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc] memory:patcher fragility"</a>
<li><strong>In reply to:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Issue filed -- please follow up here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/issues/1654">https://github.com/open-mpi/ompi/issues/1654</a>
<br>
<p><p><p><span class="quotelev1">&gt; On May 6, 2016, at 12:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BIG-endian PPC64 w/ xlc V13.1 experiences a nearly identical failure.
</span><br>
<span class="quotelev1">&gt; However, this time gdb appears to have been able to resolve frame #0 to a PLT slot (instead of &quot;??&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00000fff8904ef88 in 00000010.plt_call.opal_mem_hooks_release_hook+0 ()
</span><br>
<span class="quotelev1">&gt;    from /gpfs-biou/phh1/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64-xlc-13.1/INST/lib/libopen-pal.so.20
</span><br>
<span class="quotelev1">&gt; #1  0x00000fff8910b630 in intercept_munmap (start=0xfff88d20000, length=2097152)
</span><br>
<span class="quotelev1">&gt;     at /gpfs-biou/phh1/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64-xlc-13.1/openmpi-gitclone/opal/mca/memory/patcher/memory_patcher_component.c:155
</span><br>
<span class="quotelev1">&gt; #2  0x000000800cc5ca80 in ._IO_setb () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x000000800cc5b16c in ._IO_file_close_it () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x000000800cc4a758 in .fclose () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x0000000010000f88 in do_test ()
</span><br>
<span class="quotelev1">&gt;     at /gpfs-biou/phh1/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64-xlc-13.1/openmpi-gitclone/ompi/debuggers/dlopen_test.c:97
</span><br>
<span class="quotelev1">&gt; #6  0x00000000100010d8 in main (argc=1, argv=0xffff462f398)
</span><br>
<span class="quotelev1">&gt;     at /gpfs-biou/phh1/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64-xlc-13.1/openmpi-gitclone/ompi/debuggers/dlopen_test.c:135
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 6, 2016 at 9:14 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I am testing a tarball built from v2.x-dev-1410-g81e0924
</span><br>
<span class="quotelev1">&gt; This includes pull request #1128 in which Nathan addressed multiple &quot;patcher&quot; issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I see the crash below in dlopen_test on a LITTLE-ENDIAN Power8 system.
</span><br>
<span class="quotelev1">&gt; This is happening when built with &quot;V13.1.2 (5725-C73, 5765-J08)&quot;, but not with gcc on the same system.
</span><br>
<span class="quotelev1">&gt; So, I cannot conclusively assign blame to OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program terminated with signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x00003fff897adb38 in intercept_munmap (start=0x3fff89670000, length=65536)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64el-xlc/openmpi-gitclone/opal/mca/memory/patcher/memory_patcher_component.c:155
</span><br>
<span class="quotelev1">&gt; #2  0x00003fff8933bc80 in __GI__IO_setb () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00003fff89339528 in __GI__IO_file_close_it () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00003fff89327f74 in fclose@@GLIBC_2.17 () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x0000000010000f7c in do_test ()
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64el-xlc/openmpi-gitclone/ompi/debuggers/dlopen_test.c:97
</span><br>
<span class="quotelev1">&gt; #6  0x00000000100010e0 in main (argc=1, argv=0x3fffff332888)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64el-xlc/openmpi-gitclone/ompi/debuggers/dlopen_test.c:135
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;start&quot; is valid:
</span><br>
<span class="quotelev1">&gt; (gdb) print *(char*)0x3fff89670000
</span><br>
<span class="quotelev1">&gt; $1 = 35 '#'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Frame 1:
</span><br>
<span class="quotelev1">&gt; 155         opal_mem_hooks_release_hook (start, length, true);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18930.php">http://www.open-mpi.org/community/lists/devel/2016/05/18930.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18938.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc] memory:patcher fragility"</a>
<li><strong>In reply to:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
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
