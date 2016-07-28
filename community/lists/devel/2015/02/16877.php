<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 13:04:08 2015" -->
<!-- isoreceived="20150202180408" -->
<!-- sent="Mon, 2 Feb 2015 10:04:05 -0800" -->
<!-- isosent="20150202180405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="CAMD57ocW0GHjArLK0sJJ4GLzAVRfv7d5jHd8wxePvGxT6vdU=A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B02B77C7-4153-4B6F-AEEE-A8F21EE2AC89_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 13:04:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16878.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16876.php">Chris Samuel: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16879.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16879.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Returning to the libltdl question: I think we may have a problem here. If
<br>
we remove libltdl and default to disable-dlopen, then the user will -
<br>
without warning - slurp all components that are able to build into libompi.
<br>
This includes everything they specified, BUT because of our &quot;build if you
<br>
can&quot; policy, it also includes a lot of stuff that they didn't specify and
<br>
may not even realize is present.
<br>
<p>As a result, they not only will have a bloated memory footprint, but they
<br>
also may very well have slurped in GPL libraries (e.g., if Slurm is
<br>
present) that could potentially impact their legal situation. We may need
<br>
to reconsider our build policy in light of this situation.
<br>
<p><p>On Mon, Feb 2, 2015 at 3:35 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Ah -- the point being that this is not an issue related to the libltdl
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 2, 2015, at 2:51 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have reported the same error a few days ago and submitted it now as a
</span><br>
<span class="quotelev2">&gt; &gt; github issue: <a href="https://github.com/open-mpi/ompi/issues/371">https://github.com/open-mpi/ompi/issues/371</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 02, 2015 at 12:36:54PM +1100, Christopher Samuel wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 31/01/15 10:51, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; New tarball posted (same location).  Now featuring 100% fewer &quot;make
</span><br>
<span class="quotelev1">&gt; check&quot; failures.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On our BG/Q front-end node (PPC64, RHEL 6.4) I see:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ../../config/test-driver: line 95: 30173 Segmentation fault      (core
</span><br>
<span class="quotelev1">&gt; dumped) &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FAIL: opal_lifo
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Stack trace implies the culprit is in:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x0000000010001048 in opal_atomic_swap_32 (addr=0x20, newval=1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:51
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 51              old = *addr;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've attached a script of gdb doing &quot;thread apply all bt full&quot; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; case that's helpful.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; All the best,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev3">&gt; &gt;&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Script started on Mon 02 Feb 2015 12:32:56 EST
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [samuel_at_avoca class]$ gdb
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/build-gcc/test/class/.libs/lt-opal_lifo
</span><br>
<span class="quotelev1">&gt; core.32444
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  [?1034hGNU gdb (GDB) Red Hat Enterprise Linux (7.2-60.el6_4.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Copyright (C) 2010 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; License GPLv3+: GNU GPL version 3 or later &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show
</span><br>
<span class="quotelev1">&gt; copying&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This GDB was configured as &quot;ppc64-redhat-linux-gnu&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/build-gcc/test/class/.libs/lt-opal_lifo...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 32465]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 32464]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 32466]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 32444]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 32469]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 32467]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 32470]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 32463]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 32468]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Missing separate debuginfo for
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/build-gcc/opal/.libs/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Try: yum --disablerepo='*' --enablerepo='*-debug*' install
</span><br>
<span class="quotelev1">&gt; /usr/lib/debug/.build-id/de/a09192aa84bbc15579ae5190dc8acd16eb94fe
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Missing separate debuginfo for /usr/local/slurm/14.03.10/lib/libpmi.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Try: yum --disablerepo='*' --enablerepo='*-debug*' install
</span><br>
<span class="quotelev1">&gt; /usr/lib/debug/.build-id/28/09dfc4706ed44259cc31a5898c8d1a9b76b949
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Missing separate debuginfo for
</span><br>
<span class="quotelev1">&gt; /usr/local/slurm/14.03.10/lib/libslurm.so.27
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Try: yum --disablerepo='*' --enablerepo='*-debug*' install
</span><br>
<span class="quotelev1">&gt; /usr/lib/debug/.build-id/e2/39d8a2994ae061ab7ada0ebb7719b8efa5de96
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Missing separate debuginfo for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Try: yum --disablerepo='*' --enablerepo='*-debug*' install
</span><br>
<span class="quotelev1">&gt; /usr/lib/debug/.build-id/1a/063e3d64bb5560021ec2ba5329fb1e420b470f
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/build-gcc/opal/.libs/libopen-pal.so.0...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/build-gcc/opal/.libs/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from /usr/local/slurm/14.03.10/lib/libpmi.so.0...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for /usr/local/slurm/14.03.10/lib/libpmi.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from
</span><br>
<span class="quotelev1">&gt; /usr/local/slurm/14.03.10/lib/libslurm.so.27...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for /usr/local/slurm/14.03.10/lib/libslurm.so.27
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from /lib64/libdl.so.2...(no debugging symbols
</span><br>
<span class="quotelev1">&gt; found)...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for /lib64/libdl.so.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from /lib64/libpthread.so.0...(no debugging symbols
</span><br>
<span class="quotelev1">&gt; found)...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from /lib64/librt.so.1...(no debugging symbols
</span><br>
<span class="quotelev1">&gt; found)...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for /lib64/librt.so.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from /lib64/libm.so.6...(no debugging symbols
</span><br>
<span class="quotelev1">&gt; found)...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for /lib64/libm.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from /lib64/libutil.so.1...(no debugging symbols
</span><br>
<span class="quotelev1">&gt; found)...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for /lib64/libutil.so.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from /lib64/libc.so.6...(no debugging symbols
</span><br>
<span class="quotelev1">&gt; found)...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from /lib64/ld64.so.1...(no debugging symbols
</span><br>
<span class="quotelev1">&gt; found)...done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Loaded symbols for /lib64/ld64.so.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Core was generated by
</span><br>
<span class="quotelev1">&gt; `/vlsci/VLSCI/samuel/tmp/OMPI/build-gcc/test/class/.libs/lt-opal_lifo '.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x0000000010001048 in opal_atomic_swap_32 (addr=0x20, newval=1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:51
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 51           old = *addr;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev1">&gt; glibc-2.12-1.107.el6_4.5.ppc64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) thread apply all bt full
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread 9 (Thread 0xfff7a0ef200 (LWP 32468)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x00000080adb6629c in .__libc_write () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0x00000fff7d6905b4 in show_stackframe (signo=11,
</span><br>
<span class="quotelev1">&gt; info=0xfff7a0ee3d8, p=0xfff7a0edd00)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/util/stacktrace.c:81
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        print_buffer = &quot;[avoca:32444] *** Process received signal
</span><br>
<span class="quotelev1">&gt; ***\n&quot;, '\000' &lt;repeats 977 times&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        tmp = 0xfff7a0ed858 &quot;[avoca:32444] *** Process received signal
</span><br>
<span class="quotelev1">&gt; ***\n&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        size = 1024
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        ret = 46
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        si_code_str = 0xfff7d75bab8 &quot;&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #2  &lt;signal handler called&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #3  0x0000000010001048 in opal_atomic_swap_32 (addr=0x20, newval=1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:51
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        old = 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #4  0x0000000010001408 in opal_lifo_pop_atomic (lifo=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/class/opal_lifo.h:193
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #5  0x0000000010001630 in thread_test (arg=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/test/class/opal_lifo.c:50
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = 4002
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        lifo = 0xffff9e4a6a0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c840
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        start = {tv_sec = 1422840607, tv_usec = 750972}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        stop = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        total = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        timing = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #6  0x00000080adb5c21c in .start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #7  0x00000080ada5a53c in .__clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread 8 (Thread 0xfff7d2ef200 (LWP 32463)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x0000000010001048 in opal_atomic_swap_32 (addr=0x20, newval=1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:51
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        old = 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0x0000000010001408 in opal_lifo_pop_atomic (lifo=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/class/opal_lifo.h:193
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #2  0x0000000010001630 in thread_test (arg=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/test/class/opal_lifo.c:50
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = 2049
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        lifo = 0xffff9e4a6a0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c7e0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        start = {tv_sec = 1422840607, tv_usec = 750871}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        stop = {tv_sec = 17589991303296, tv_usec = 24}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        total = {tv_sec = 17589991305936, tv_usec = 17589991336208}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        timing = 2.8183218451323255e-315
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #3  0x00000080adb5c21c in .start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #4  0x00000080ada5a53c in .__clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread 7 (Thread 0xfff78cef200 (LWP 32470)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x0000000010001048 in opal_atomic_swap_32 (addr=0x20, newval=1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:51
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        old = 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0x0000000010001408 in opal_lifo_pop_atomic (lifo=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/class/opal_lifo.h:193
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #2  0x0000000010001630 in thread_test (arg=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/test/class/opal_lifo.c:50
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = 1883
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        lifo = 0xffff9e4a6a0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c7e0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        start = {tv_sec = 1422840607, tv_usec = 751036}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        stop = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        total = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        timing = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #3  0x00000080adb5c21c in .start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #4  0x00000080ada5a53c in .__clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread 6 (Thread 0xfff7aaef200 (LWP 32467)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x0000000010001048 in opal_atomic_swap_32 (addr=0x20, newval=1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:51
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        old = 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0x0000000010001408 in opal_lifo_pop_atomic (lifo=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/class/opal_lifo.h:193
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #2  0x0000000010001630 in thread_test (arg=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/test/class/opal_lifo.c:50
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = 3250
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        lifo = 0xffff9e4a6a0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c7e0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        start = {tv_sec = 1422840607, tv_usec = 750953}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        stop = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        total = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        timing = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #3  0x00000080adb5c21c in .start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #4  0x00000080ada5a53c in .__clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread 5 (Thread 0xfff796ef200 (LWP 32469)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x0000000010001048 in opal_atomic_swap_32 (addr=0x20, newval=1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:51
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        old = 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0x0000000010001408 in opal_lifo_pop_atomic (lifo=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/class/opal_lifo.h:193
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #2  0x0000000010001630 in thread_test (arg=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/test/class/opal_lifo.c:50
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = 1922
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        lifo = 0xffff9e4a6a0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c7e0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        start = {tv_sec = 1422840607, tv_usec = 751004}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        stop = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        total = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        timing = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #3  0x00000080adb5c21c in .start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #4  0x00000080ada5a53c in .__clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread 4 (Thread 0x80ad907ef0 (LWP 32444)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x00000080adb5c754 in .pthread_join () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0x0000000010001ccc in main (argc=1, argv=0xffff9e4ab68) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/test/class/opal_lifo.c:163
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        ret = 0x1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        threads = {17589991305728, 17589980819968, 17589970334208,
</span><br>
<span class="quotelev1">&gt; 17589959848448, 17589949362688, 17589938876928, 17589928391168,
</span><br>
<span class="quotelev1">&gt; 17589917905408}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c8d0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        prev = 0xffff9e4a6c0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item2 = 0x1000511b640
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        start = {tv_sec = 1422840607, tv_usec = 750782}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        stop = {tv_sec = 1422840607, tv_usec = 515534}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        total = {tv_sec = 0, tv_usec = 42314}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        lifo = {super = {obj_class = 0xfff7d7733e8, obj_reference_count
</span><br>
<span class="quotelev1">&gt; = 1}, opal_lifo_head = {data = {counter = 0, item = 0x1000511c7e0}},
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          opal_lifo_ghost = {super = {obj_class = 0xfff7d773228,
</span><br>
<span class="quotelev1">&gt; obj_reference_count = 1}, opal_list_next = 0xffff9e4a6c0, opal_list_prev =
</span><br>
<span class="quotelev1">&gt; 0x0,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            item_free = 1}}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        success = false
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        timing = 4.2313999999999998e-08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        rc = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread 3 (Thread 0xfff7b4ef200 (LWP 32466)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  opal_atomic_swap_32 (addr=0x1000511c860, newval=1) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:52
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        old = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0x0000000010001408 in opal_lifo_pop_atomic (lifo=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/class/opal_lifo.h:193
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c840
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #2  0x0000000010001630 in thread_test (arg=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/test/class/opal_lifo.c:50
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = 1876
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        lifo = 0xffff9e4a6a0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c840
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        start = {tv_sec = 1422840607, tv_usec = 750939}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        stop = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        total = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        timing = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #3  0x00000080adb5c21c in .start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #4  0x00000080ada5a53c in .__clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread 2 (Thread 0xfff7c8ef200 (LWP 32464)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x0000000010000f88 in opal_atomic_cmpset_64 (addr=0xffff9e4a6b8,
</span><br>
<span class="quotelev1">&gt; oldval=1099596679232, newval=1099596679136)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/powerpc/atomic.h:194
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        ret = 1099596679232
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0x00000000100010e4 in opal_atomic_cmpset_ptr (addr=0xffff9e4a6b8,
</span><br>
<span class="quotelev1">&gt; oldval=0x1000511c840, newval=0x1000511c7e0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:227
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No locals.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #2  0x0000000010001438 in opal_lifo_pop_atomic (lifo=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/class/opal_lifo.h:198
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c840
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #3  0x0000000010001630 in thread_test (arg=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/test/class/opal_lifo.c:50
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = 3968
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        lifo = 0xffff9e4a6a0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c840
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        start = {tv_sec = 1422840607, tv_usec = 750893}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        stop = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        total = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        timing = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #4  0x00000080adb5c21c in .start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #5  0x00000080ada5a53c in .__clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread 1 (Thread 0xfff7beef200 (LWP 32465)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #0  0x0000000010001048 in opal_atomic_swap_32 (addr=0x20, newval=1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:51
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        old = 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1  0x0000000010001408 in opal_lifo_pop_atomic (lifo=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/class/opal_lifo.h:193
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #2  0x0000000010001630 in thread_test (arg=0xffff9e4a6a0) at
</span><br>
<span class="quotelev1">&gt; /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/test/class/opal_lifo.c:50
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = 3734
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        lifo = 0xffff9e4a6a0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        item = 0x1000511c7e0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        start = {tv_sec = 1422840607, tv_usec = 750907}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        stop = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        total = {tv_sec = 0, tv_usec = 0}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        timing = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #3  0x00000080adb5c21c in .start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #4  0x00000080ada5a53c in .__clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol table info available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) quit
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  ]0;samuel_at_avoca:~tmp/OMPI/build-gcc/test/class [samuel_at_avoca class]$
</span><br>
<span class="quotelev1">&gt; exit
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Script done on Mon 02 Feb 2015 12:33:16 EST
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/index.php">http://www.open-mpi.org/community/lists/devel/2015/02/index.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16873.php">http://www.open-mpi.org/community/lists/devel/2015/02/16873.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16875.php">http://www.open-mpi.org/community/lists/devel/2015/02/16875.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16878.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16876.php">Chris Samuel: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16879.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16879.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
