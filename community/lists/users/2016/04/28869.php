<?
$subject_val = "Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  2 11:53:07 2016" -->
<!-- isoreceived="20160402155307" -->
<!-- sent="Sat, 2 Apr 2016 08:53:03 -0700" -->
<!-- isosent="20160402155303" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris" -->
<!-- id="F00E8194-212B-4FA9-9EC5-837F6F431B00_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56FFDBE1.5080405_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-02 11:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28870.php">dpchoudh .: "[OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28868.php">Siegmar Gross: "[OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<li><strong>In reply to:</strong> <a href="28868.php">Siegmar Gross: "[OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just pushed a fix for the OPAL_ALIGN_PTR issue - have to let someone else deal with the asm warning
<br>
<p><span class="quotelev1">&gt; On Apr 2, 2016, at 7:49 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to build openmpi-dev-3762-gf2e33c7 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev1">&gt; 12.1 x86_64) with gcc-5.2.0 and Sun C 5.13. I was successful on
</span><br>
<span class="quotelev1">&gt; my Linux machine, but I got the following errors on both Solaris
</span><br>
<span class="quotelev1">&gt; platforms with both compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GCC-5.2.0
</span><br>
<span class="quotelev1">&gt; =========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_gcc 80 tail -14 log.make.SunOS.x86_64.64_gcc
</span><br>
<span class="quotelev1">&gt;  CC       base/mpool_base_tree.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/mpool_base_default.lo
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c: In function 'mca_mpool_default_alloc':
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c:38:11: warning: implicit declaration of function 'OPAL_ALIGN_PTR' [-Wimplicit-function-declaration]
</span><br>
<span class="quotelev1">&gt;     ret = OPAL_ALIGN_PTR((intptr_t) addr + 8, align, void *);
</span><br>
<span class="quotelev1">&gt;           ^
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c:38:54: error: expected expression before 'void'
</span><br>
<span class="quotelev1">&gt;     ret = OPAL_ALIGN_PTR((intptr_t) addr + 8, align, void *);
</span><br>
<span class="quotelev1">&gt;                                                      ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/mpool_base_default.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_gcc/opal/mca/mpool'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_gcc/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_gcc 81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SUN C 5.13
</span><br>
<span class="quotelev1">&gt; ==========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_cc 83 tail -20 log.make.SunOS.x86_64.64_cc
</span><br>
<span class="quotelev1">&gt;  CC       base/mpool_base_tree.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 163: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 209: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 230: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 251: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 272: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt;  CC       base/mpool_base_default.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 163: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 209: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 230: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 251: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/include/opal/sys/amd64/atomic.h&quot;, line 272: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c&quot;, line 38: warning: implicit function declaration: OPAL_ALIGN_PTR
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c&quot;, line 38: syntax error before or at: void
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for ../../../../openmpi-dev-3762-gf2e33c7/opal/mca/mpool/base/mpool_base_default.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/mpool_base_default.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_cc/opal/mca/mpool'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_cc/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi-dev-3762-gf2e33c7-SunOS.x86_64.64_cc 84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28868.php">http://www.open-mpi.org/community/lists/users/2016/04/28868.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28870.php">dpchoudh .: "[OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28868.php">Siegmar Gross: "[OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<li><strong>In reply to:</strong> <a href="28868.php">Siegmar Gross: "[OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
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
