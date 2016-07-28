<?
$subject_val = "[OMPI devel] [v2.x] more &quot;patcher&quot; issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 12:15:00 2016" -->
<!-- isoreceived="20160506161500" -->
<!-- sent="Fri, 6 May 2016 09:14:54 -0700" -->
<!-- isosent="20160506161454" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [v2.x] more &amp;quot;patcher&amp;quot; issues" -->
<!-- id="CAAvDA16vnYqGuqQmXGJGDjvsC9+NrKgyP1FyKuj+5oO6LUO6qw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [v2.x] more &quot;patcher&quot; issues<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 12:14:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18929.php">George Bosilca: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Previous message:</strong> <a href="18927.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18929.php">George Bosilca: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Reply:</strong> <a href="18929.php">George Bosilca: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Reply:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am testing a tarball built from v2.x-dev-1410-g81e0924
<br>
This includes pull request #1128 in which Nathan addressed multiple
<br>
&quot;patcher&quot; issues.
<br>
<p>However, I see the crash below in dlopen_test on a LITTLE-ENDIAN Power8
<br>
system.
<br>
This is happening when built with &quot;V13.1.2 (5725-C73, 5765-J08)&quot;, but not
<br>
with gcc on the same system.
<br>
So, I cannot conclusively assign blame to OpenMPI.
<br>
<p>-Paul
<br>
<p>Program terminated with signal SIGSEGV, Segmentation fault.
<br>
<p>(gdb) where
<br>
#0  0x0000000000000000 in ?? ()
<br>
#1  0x00003fff897adb38 in intercept_munmap (start=0x3fff89670000,
<br>
length=65536)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64el-xlc/openmpi-gitclone/opal/mca/memory/patcher/memory_patcher_component.c:155
<br>
#2  0x00003fff8933bc80 in __GI__IO_setb () from /lib64/libc.so.6
<br>
#3  0x00003fff89339528 in __GI__IO_file_close_it () from /lib64/libc.so.6
<br>
#4  0x00003fff89327f74 in fclose@@GLIBC_2.17 () from /lib64/libc.so.6
<br>
#5  0x0000000010000f7c in do_test ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64el-xlc/openmpi-gitclone/ompi/debuggers/dlopen_test.c:97
<br>
#6  0x00000000100010e0 in main (argc=1, argv=0x3fffff332888)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-ppc64el-xlc/openmpi-gitclone/ompi/debuggers/dlopen_test.c:135
<br>
<p>&quot;start&quot; is valid:
<br>
(gdb) print *(char*)0x3fff89670000
<br>
$1 = 35 '#'
<br>
<p>Frame 1:
<br>
155         opal_mem_hooks_release_hook (start, length, true);
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18929.php">George Bosilca: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Previous message:</strong> <a href="18927.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18929.php">George Bosilca: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Reply:</strong> <a href="18929.php">George Bosilca: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Reply:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
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
