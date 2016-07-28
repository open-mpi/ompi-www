<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 18:41:45 2016" -->
<!-- isoreceived="20160502224145" -->
<!-- sent="Mon, 2 May 2016 16:41:43 -0600" -->
<!-- isosent="20160502224143" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures" -->
<!-- id="20160502224143.GI22814_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15x+=uLrD-GotzBm0NxpnTeQW17wxF4E7mMXkpcAZdNsw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 18:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18884.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] openib btl build failure"</a>
<li><strong>Previous message:</strong> <a href="18882.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<li><strong>In reply to:</strong> <a href="18882.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like patcher/linux needs some work on 32-bit systems. I will try
<br>
to get this fixed in the next day or two.
<br>
<p>-Nathan
<br>
<p>On Mon, May 02, 2016 at 03:36:35PM -0700, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;    New since the last time I did testing, I now have access to Linux MIPS64
</span><br>
<span class="quotelev1">&gt;    (Cavium Octeon II) systems.
</span><br>
<span class="quotelev1">&gt;    They are infinitely better than the QEMU-emulated MIPS I have used for
</span><br>
<span class="quotelev1">&gt;    previous testing.
</span><br>
<span class="quotelev1">&gt;    I have access to both big-endian and little-endian, and am setup to test
</span><br>
<span class="quotelev1">&gt;    the three main ABIs (32, n32 and 64).
</span><br>
<span class="quotelev1">&gt;    For the little-endian system all three ABIs pass build, pass &quot;make check&quot;
</span><br>
<span class="quotelev1">&gt;    and run a sampling of the examples.
</span><br>
<span class="quotelev1">&gt;    However, for the big-endian system only the &quot;-mabi=64&quot; case passes.
</span><br>
<span class="quotelev1">&gt;    With big-endian and &quot;-mabi=32&quot; I passed &quot;make check&quot; but saw a SEGV from
</span><br>
<span class="quotelev1">&gt;    ring_c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05119] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05119] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05119] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05119] Failing at address: 0x401c7c0
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05119] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;      Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    With big-endian and &quot;-mabi=n32&quot; I fail the dl_open test (the first
</span><br>
<span class="quotelev1">&gt;    non-trivial test) in &quot;make check&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt;      `/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-mips64-n32/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt;      PASS: predefined_gap_test
</span><br>
<span class="quotelev1">&gt;      PASS: predefined_pad_test
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-2.0.0rc2-linux-mips64-n32/openmpi-2.0.0rc2/config/test-driver:
</span><br>
<span class="quotelev1">&gt;      line 107: 14795 Segmentation fault      &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;      FAIL: dlopen_test
</span><br>
<span class="quotelev1">&gt;      ============================================================================
</span><br>
<span class="quotelev1">&gt;      Testsuite summary for Open MPI 2.0.0rc2
</span><br>
<span class="quotelev1">&gt;      ============================================================================
</span><br>
<span class="quotelev1">&gt;      # TOTAL: 3
</span><br>
<span class="quotelev1">&gt;      # PASS:  2
</span><br>
<span class="quotelev1">&gt;      # SKIP:  0
</span><br>
<span class="quotelev1">&gt;      # XFAIL: 0
</span><br>
<span class="quotelev1">&gt;      # FAIL:  1
</span><br>
<span class="quotelev1">&gt;      # XPASS: 0
</span><br>
<span class="quotelev1">&gt;      # ERROR: 0
</span><br>
<span class="quotelev1">&gt;      ============================================================================
</span><br>
<span class="quotelev1">&gt;      See ompi/debuggers/test-suite.log
</span><br>
<span class="quotelev1">&gt;      Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;      ============================================================================
</span><br>
<span class="quotelev1">&gt;      make[4]: *** [test-suite.log] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Or, when run manually:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      $ ./ompi/debuggers/dlopen_test
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05134] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05134] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05134] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05134] Failing at address: 0x1100154c
</span><br>
<span class="quotelev1">&gt;      [erpro8-fsf1:05134] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;      Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Unfortunately, gdb is not working properly on the core files generated by
</span><br>
<span class="quotelev1">&gt;    either failure.
</span><br>
<span class="quotelev1">&gt;    In addition to the endian differences between the two MIPS64 systems, the
</span><br>
<span class="quotelev1">&gt;    little-endian one is running a newer distro (Debian jessie vs wheezy).
</span><br>
<span class="quotelev1">&gt;    So, I cannot conclusively state that the endianness is the root cause.
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18882.php">http://www.open-mpi.org/community/lists/devel/2016/05/18882.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18883/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18884.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] openib btl build failure"</a>
<li><strong>Previous message:</strong> <a href="18882.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<li><strong>In reply to:</strong> <a href="18882.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
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
