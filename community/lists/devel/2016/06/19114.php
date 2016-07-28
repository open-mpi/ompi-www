<?
$subject_val = "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 23:16:15 2016" -->
<!-- isoreceived="20160616031615" -->
<!-- sent="Wed, 15 Jun 2016 21:16:07 -0600" -->
<!-- isosent="20160616031607" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()" -->
<!-- id="00167DE9-D29C-40E0-BE1C-C99C04F9508A_at_me.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16NhmaVGYF69QU8wL97FYk0QAbZ_Uc3KOb4A3z7sP3HDg_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 23:16:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19115.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="19113.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>In reply to:</strong> <a href="19107.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, that was working. Our PPC64 system is back up and I will finally be able to fix it tomorrow.
<br>
<p>-Nathan
<br>
<p><span class="quotelev1">&gt; On Jun 15, 2016, at 7:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also seen now on a big-endian Power7 with XLC-13.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 15, 2016 at 6:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On a little-endian Power8 with XLC-13.1.2 I see a crash not seen with gcc-4.9.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory '/home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; PASS: predefined_gap_test
</span><br>
<span class="quotelev1">&gt; PASS: predefined_pad_test
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/config/test-driver: line 107: 69310 Segmen
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
<span class="quotelev1">&gt; Missing separate debuginfos, use: debuginfo-install bzip2-libs-1.0.6-14.fc21.ppc64le elfutils-libelf-0.163-1.fc21.ppc64le elfutils-libs-0.163-1.fc21.ppc64le glibc-2.20-7.fc21.ppc64le libgcc-4.9.2-1.fc21.ppc64le systemd-libs-216-17.fc21.ppc64le xz-libs-5.1.2-14alpha.fc21.ppc64le zlib-1.2.8-7.fc21.ppc64le
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x00003fff82f8e8d8 in intercept_munmap (start=0x3fff82e50000, length=65536)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/opal/mca/memory/patcher/memory_patcher_component.c:155
</span><br>
<span class="quotelev1">&gt; #2  0x00003fff82b1bc80 in __GI__IO_setb () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00003fff82b19528 in __GI__IO_file_close_it () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00003fff82b07f74 in fclose@@GLIBC_2.17 () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x0000000010000f7c in do_test ()
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/ompi/debuggers/dlopen_test.c:97
</span><br>
<span class="quotelev1">&gt; #6  0x00000000100010e0 in main (argc=1, argv=0x3ffff7505048)
</span><br>
<span class="quotelev1">&gt;     at /home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc64el-xlc/openmpi-2.0.0rc3/ompi/debuggers/dlopen_test.c:135
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19107.php">http://www.open-mpi.org/community/lists/devel/2016/06/19107.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19114/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19115.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="19113.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>In reply to:</strong> <a href="19107.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
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
