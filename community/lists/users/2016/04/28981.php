<?
$subject_val = "Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 09:25:47 2016" -->
<!-- isoreceived="20160420132547" -->
<!-- sent="Wed, 20 Apr 2016 13:25:45 +0000" -->
<!-- isosent="20160420132545" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris" -->
<!-- id="A65D081D-3C87-4FBF-AAAB-B1042762EBFF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1b75acc3-949f-5578-b4ee-e9041ecd5d15_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 09:25:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Previous message:</strong> <a href="28980.php">Gilles Gouaillardet: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>In reply to:</strong> <a href="28978.php">Siegmar Gross: "[OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>Thanks for the report.  I filed <a href="https://github.com/open-mpi/ompi/issues/1565">https://github.com/open-mpi/ompi/issues/1565</a> to track the issue.
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 20, 2016, at 4:48 AM, Siegmar Gross &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to build openmpi-dev-3868-g178c97b on my machines
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
<span class="quotelev1">&gt; tyr openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc 76 tail -15 log.make.SunOS.sparc.64_gcc
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc/opal/mca/memory/patcher'
</span><br>
<span class="quotelev1">&gt;  CC       memory_patcher_component.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c: In function 'intercept_madvise':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c:196:19: error: 'POSIX_MADV_DONTNEED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         advice == POSIX_MADV_DONTNEED)
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c:196:19: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c:202:41: error: 'SYS_madvise' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         result = memory_patcher_syscall(SYS_madvise, start, length, advice);
</span><br>
<span class="quotelev1">&gt;                                         ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [memory_patcher_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc/opal/mca/memory/patcher'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-3868-g178c97b-SunOS.sparc.64_gcc 77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc 122 tail -10 log.make.SunOS.sparc.64_cc
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc/opal/mca/memory/patcher'
</span><br>
<span class="quotelev1">&gt;  CC       memory_patcher_component.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c&quot;, line 196: undefined symbol: POSIX_MADV_DONTNEED
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c&quot;, line 202: undefined symbol: SYS_madvise
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for ../../../../../openmpi-dev-3868-g178c97b/opal/mca/memory/patcher/memory_patcher_component.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [memory_patcher_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc/opal/mca/memory/patcher'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-3868-g178c97b-SunOS.sparc.64_cc 123
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28978.php">http://www.open-mpi.org/community/lists/users/2016/04/28978.php</a>
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
<li><strong>Next message:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Previous message:</strong> <a href="28980.php">Gilles Gouaillardet: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>In reply to:</strong> <a href="28978.php">Siegmar Gross: "[OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
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
