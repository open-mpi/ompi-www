<?
$subject_val = "[OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 21:20:52 2016" -->
<!-- isoreceived="20160616012052" -->
<!-- sent="Wed, 15 Jun 2016 18:20:39 -0700" -->
<!-- isosent="20160616012039" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()" -->
<!-- id="CAAvDA16g3PBsHUdchwa9Bc23rndxkZ9yfwyP39F8r+kyaxqxQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 21:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19106.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>Previous message:</strong> <a href="19104.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19107.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Reply:</strong> <a href="19107.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a little-endian Power8 with XLC-13.1.2 I see a crash not seen with
<br>
gcc-4.9.2:
<br>
<p>make[4]: Entering directory
<br>
'/home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/BLD/ompi/debuggers'
<br>
PASS: predefined_gap_test
<br>
PASS: predefined_pad_test
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/config/test-driver:
<br>
line 107: 69310 Segmen
<br>
tation fault      (core dumped) &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
<br>
FAIL: dlopen_test
<br>
<p>gdb shows:
<br>
<p>Program terminated with signal SIGSEGV, Segmentation fault.
<br>
#0  0x0000000000000000 in ?? ()
<br>
Missing separate debuginfos, use: debuginfo-install
<br>
bzip2-libs-1.0.6-14.fc21.ppc64le elfutils-libelf-0.163-1.fc21.ppc64le
<br>
elfutils-libs-0.163-1.fc21.ppc64le glibc-2.20-7.fc21.ppc64le
<br>
libgcc-4.9.2-1.fc21.ppc64le systemd-libs-216-17.fc21.ppc64le
<br>
xz-libs-5.1.2-14alpha.fc21.ppc64le zlib-1.2.8-7.fc21.ppc64le
<br>
(gdb) where
<br>
#0  0x0000000000000000 in ?? ()
<br>
#1  0x00003fff82f8e8d8 in intercept_munmap (start=0x3fff82e50000,
<br>
length=65536)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/opal/mca/memory/patcher/memory_patcher_component.c:155
<br>
#2  0x00003fff82b1bc80 in __GI__IO_setb () from /lib64/libc.so.6
<br>
#3  0x00003fff82b19528 in __GI__IO_file_close_it () from /lib64/libc.so.6
<br>
#4  0x00003fff82b07f74 in fclose@@GLIBC_2.17 () from /lib64/libc.so.6
<br>
#5  0x0000000010000f7c in do_test ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/ompi/debuggers/dlopen_test.c:97
<br>
#6  0x00000000100010e0 in main (argc=1, argv=0x3ffff7505048)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/ompi/debuggers/dlopen_test.c:135
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19105/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19106.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>Previous message:</strong> <a href="19104.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19107.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Reply:</strong> <a href="19107.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
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
