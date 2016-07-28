<?
$subject_val = "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 12:22:45 2016" -->
<!-- isoreceived="20160506162245" -->
<!-- sent="Fri, 6 May 2016 09:22:38 -0700" -->
<!-- isosent="20160506162238" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v2.x] more &amp;quot;patcher&amp;quot; issues" -->
<!-- id="CAAvDA15MvhKmXjJZHYe9Ny9mJUM0GyvYh+qLv6MfnL2+=QgdTg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16vnYqGuqQmXGJGDjvsC9+NrKgyP1FyKuj+5oO6LUO6qw_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 12:22:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18931.php">Paul Hargrove: "[OMPI devel] [v2.x] Harmless type conversion warnings from Clang"</a>
<li><strong>Previous message:</strong> <a href="18929.php">George Bosilca: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>In reply to:</strong> <a href="18928.php">Paul Hargrove: "[OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18939.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Reply:</strong> <a href="18939.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BIG-endian PPC64 w/ xlc V13.1 experiences a nearly identical failure.
<br>
However, this time gdb appears to have been able to resolve frame #0 to a
<br>
PLT slot (instead of &quot;??&quot;).
<br>
<p>-Paul
<br>
<p>#0  0x00000fff8904ef88 in 00000010.plt_call.opal_mem_hooks_release_hook+0 ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/gpfs-biou/phh1/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64-xlc-13.1/INST/lib/libopen-pal.so.20
<br>
#1  0x00000fff8910b630 in intercept_munmap (start=0xfff88d20000,
<br>
length=2097152)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/gpfs-biou/phh1/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64-xlc-13.1/openmpi-gitclone/opal/mca/memory/patcher/memory_patcher_component.c:155
<br>
#2  0x000000800cc5ca80 in ._IO_setb () from /lib64/libc.so.6
<br>
#3  0x000000800cc5b16c in ._IO_file_close_it () from /lib64/libc.so.6
<br>
#4  0x000000800cc4a758 in .fclose () from /lib64/libc.so.6
<br>
#5  0x0000000010000f88 in do_test ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/gpfs-biou/phh1/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64-xlc-13.1/openmpi-gitclone/ompi/debuggers/dlopen_test.c:97
<br>
#6  0x00000000100010d8 in main (argc=1, argv=0xffff462f398)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/gpfs-biou/phh1/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64-xlc-13.1/openmpi-gitclone/ompi/debuggers/dlopen_test.c:135
<br>
<p><p><p>On Fri, May 6, 2016 at 9:14 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am testing a tarball built from v2.x-dev-1410-g81e0924
</span><br>
<span class="quotelev1">&gt; This includes pull request #1128 in which Nathan addressed multiple
</span><br>
<span class="quotelev1">&gt; &quot;patcher&quot; issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I see the crash below in dlopen_test on a LITTLE-ENDIAN Power8
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; This is happening when built with &quot;V13.1.2 (5725-C73, 5765-J08)&quot;, but not
</span><br>
<span class="quotelev1">&gt; with gcc on the same system.
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
<span class="quotelev1">&gt; #1  0x00003fff897adb38 in intercept_munmap (start=0x3fff89670000,
</span><br>
<span class="quotelev1">&gt; length=65536)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64el-xlc/openmpi-gitclone/opal/mca/memory/patcher/memory_patcher_component.c:155
</span><br>
<span class="quotelev1">&gt; #2  0x00003fff8933bc80 in __GI__IO_setb () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00003fff89339528 in __GI__IO_file_close_it () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00003fff89327f74 in fclose@@GLIBC_2.17 () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x0000000010000f7c in do_test ()
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64el-xlc/openmpi-gitclone/ompi/debuggers/dlopen_test.c:97
</span><br>
<span class="quotelev1">&gt; #6  0x00000000100010e0 in main (argc=1, argv=0x3fffff332888)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64el-xlc/openmpi-gitclone/ompi/debuggers/dlopen_test.c:135
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18930/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18931.php">Paul Hargrove: "[OMPI devel] [v2.x] Harmless type conversion warnings from Clang"</a>
<li><strong>Previous message:</strong> <a href="18929.php">George Bosilca: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>In reply to:</strong> <a href="18928.php">Paul Hargrove: "[OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18939.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Reply:</strong> <a href="18939.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
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
