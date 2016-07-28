<?
$subject_val = "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 12:17:01 2016" -->
<!-- isoreceived="20160506161701" -->
<!-- sent="Fri, 6 May 2016 12:17:00 -0400" -->
<!-- isosent="20160506161700" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v2.x] more &amp;quot;patcher&amp;quot; issues" -->
<!-- id="CAMJJpkWCUAX=cbH62iShGW8aVzXSPJkFRGhh5pChb+6NgSZ-NA_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 12:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Previous message:</strong> <a href="18928.php">Paul Hargrove: "[OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>In reply to:</strong> <a href="18928.php">Paul Hargrove: "[OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are getting extremely frequent C++ application deadlocks with the new
<br>
patcher. We are still investigating.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, May 6, 2016 at 12:14 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18928.php">http://www.open-mpi.org/community/lists/devel/2016/05/18928.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18929/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Previous message:</strong> <a href="18928.php">Paul Hargrove: "[OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>In reply to:</strong> <a href="18928.php">Paul Hargrove: "[OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
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
