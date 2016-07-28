<?
$subject_val = "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 21:35:49 2016" -->
<!-- isoreceived="20160616013549" -->
<!-- sent="Wed, 15 Jun 2016 18:35:39 -0700" -->
<!-- isosent="20160616013539" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()" -->
<!-- id="CAAvDA16NhmaVGYF69QU8wL97FYk0QAbZ_Uc3KOb4A3z7sP3HDg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16g3PBsHUdchwa9Bc23rndxkZ9yfwyP39F8r+kyaxqxQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 21:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19108.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] Solaris Studio Linux/x86-64 and -m32"</a>
<li><strong>Previous message:</strong> <a href="19106.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>In reply to:</strong> <a href="19105.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19114.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Reply:</strong> <a href="19114.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also seen now on a big-endian Power7 with XLC-13.1
<br>
<p>-Paul
<br>
<p>On Wed, Jun 15, 2016 at 6:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On a little-endian Power8 with XLC-13.1.2 I see a crash not seen with
</span><br>
<span class="quotelev1">&gt; gcc-4.9.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; PASS: predefined_gap_test
</span><br>
<span class="quotelev1">&gt; PASS: predefined_pad_test
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/config/test-driver:
</span><br>
<span class="quotelev1">&gt; line 107: 69310 Segmen
</span><br>
<span class="quotelev1">&gt; tation fault      (core dumped) &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gdb shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program terminated with signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev1">&gt; bzip2-libs-1.0.6-14.fc21.ppc64le elfutils-libelf-0.163-1.fc21.ppc64le
</span><br>
<span class="quotelev1">&gt; elfutils-libs-0.163-1.fc21.ppc64le glibc-2.20-7.fc21.ppc64le
</span><br>
<span class="quotelev1">&gt; libgcc-4.9.2-1.fc21.ppc64le systemd-libs-216-17.fc21.ppc64le
</span><br>
<span class="quotelev1">&gt; xz-libs-5.1.2-14alpha.fc21.ppc64le zlib-1.2.8-7.fc21.ppc64le
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x00003fff82f8e8d8 in intercept_munmap (start=0x3fff82e50000,
</span><br>
<span class="quotelev1">&gt; length=65536)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/opal/mca/memory/patcher/memory_patcher_component.c:155
</span><br>
<span class="quotelev1">&gt; #2  0x00003fff82b1bc80 in __GI__IO_setb () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00003fff82b19528 in __GI__IO_file_close_it () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00003fff82b07f74 in fclose@@GLIBC_2.17 () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x0000000010000f7c in do_test ()
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/ompi/debuggers/dlopen_test.c:97
</span><br>
<span class="quotelev1">&gt; #6  0x00000000100010e0 in main (argc=1, argv=0x3ffff7505048)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/ompi/debuggers/dlopen_test.c:135
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19107/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19108.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] Solaris Studio Linux/x86-64 and -m32"</a>
<li><strong>Previous message:</strong> <a href="19106.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>In reply to:</strong> <a href="19105.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19114.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Reply:</strong> <a href="19114.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
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
