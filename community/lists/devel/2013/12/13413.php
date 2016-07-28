<?
$subject_val = "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 11 15:01:25 2013" -->
<!-- isoreceived="20131211200125" -->
<!-- sent="Wed, 11 Dec 2013 20:01:23 +0000" -->
<!-- isosent="20131211200123" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Test suite of openMPI 1.7.3 fails" -->
<!-- id="CFD10ED1-6F21-4D21-AD86-BD32EBBE0CA3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131210145351.GA31984_at_paradies.suse.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Test suite of openMPI 1.7.3 fails<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-11 15:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13414.php">Prindeville, Philip: "[OMPI devel] iWARP development"</a>
<li><strong>Previous message:</strong> <a href="13412.php">Kawashima, Takahiro: "[OMPI devel] [patch] async-signal-safe signal handler"</a>
<li><strong>In reply to:</strong> <a href="13410.php">Philipp Thomas: "[OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13421.php">Philipp Thomas: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Reply:</strong> <a href="13421.php">Philipp Thomas: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the opal_config.h file from your build tree?
<br>
<p>This will help us look into what's going on.
<br>
<p><p>On Dec 10, 2013, at 8:53 AM, Philipp Thomas &lt;pth_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Two of the asm tests are failing on my machine with 
</span><br>
<span class="quotelev1">&gt; Intel(R) Core(TM) i7-4960X CPU @ 3.60GHz running openSUSE 13.1 and
</span><br>
<span class="quotelev1">&gt; gcc (SUSE Linux) 4.8.1 20130909 [gcc-4_8-branch revision 202388]. Could
</span><br>
<span class="quotelev1">&gt; anyone give me pointers as to what to check next? I added running
</span><br>
<span class="quotelev1">&gt; 'make check' from the spec file so a failing test suite makes the package
</span><br>
<span class="quotelev1">&gt; build fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Philipp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================
</span><br>
<span class="quotelev1">&gt;   Open MPI 1.7.3: test/asm/test-suite.log
</span><br>
<span class="quotelev1">&gt; =============================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # TOTAL: 8
</span><br>
<span class="quotelev1">&gt; # PASS:  6
</span><br>
<span class="quotelev1">&gt; # SKIP:  0
</span><br>
<span class="quotelev1">&gt; # XFAIL: 0
</span><br>
<span class="quotelev1">&gt; # FAIL:  2
</span><br>
<span class="quotelev1">&gt; # XPASS: 0
</span><br>
<span class="quotelev1">&gt; # ERROR: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .. contents:: :depth: 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FAIL: atomic_cmpset
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; atomic_cmpset: atomic_cmpset.c:227: main: Assertion `opal_atomic_add_32(&amp;val32, 5) == (42 + 5)' failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FAIL: atomic_cmpset_noinline
</span><br>
<span class="quotelev1">&gt; ============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; atomic_cmpset_noinline: atomic_cmpset_noinline.c:227: main: Assertion `opal_atomic_add_32(&amp;val32, 5) == (42 + 5)' failed.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13414.php">Prindeville, Philip: "[OMPI devel] iWARP development"</a>
<li><strong>Previous message:</strong> <a href="13412.php">Kawashima, Takahiro: "[OMPI devel] [patch] async-signal-safe signal handler"</a>
<li><strong>In reply to:</strong> <a href="13410.php">Philipp Thomas: "[OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13421.php">Philipp Thomas: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Reply:</strong> <a href="13421.php">Philipp Thomas: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
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
