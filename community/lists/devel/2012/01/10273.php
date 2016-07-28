<?
$subject_val = "[OMPI devel] 1.4.5rc2 linux/ppc/xlc-{7,8,9} [3 PASS, 3 FAIL]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 00:29:19 2012" -->
<!-- isoreceived="20120130052919" -->
<!-- sent="Sun, 29 Jan 2012 21:28:59 -0800" -->
<!-- isosent="20120130052859" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc2 linux/ppc/xlc-{7,8,9} [3 PASS, 3 FAIL]" -->
<!-- id="4F262A9B.508_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95BA01C2-D3A1-4EDA-AD55-06542CBAF83E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc2 linux/ppc/xlc-{7,8,9} [3 PASS, 3 FAIL]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 00:28:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10274.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10272.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10275.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up"</a>
<li><strong>Reply:</strong> <a href="10275.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While I previously reported success with xlc-11.1 on Linux for both 
<br>
ppc32 and ppc64 ABIs, I find that all is not perfect with earlier compilers.
<br>
<p>SUMMARY:
<br>
&nbsp;&nbsp;&nbsp;xlc-9.0 / xlf-11.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASS on ILP32 ABI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAIL on LP64 ABI (details below)
<br>
&nbsp;&nbsp;&nbsp;xlc-8.0 / xlf-10.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASS on ILP32 ABI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASS on LP64 ABI
<br>
&nbsp;&nbsp;&nbsp;xlc-7.0 / xlf-9.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAIL on ILP32 ABI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAIL on LP64 ABI
<br>
<p>I don't seem to have any access to an xlc-10.x release.
<br>
<p>For the xlc-9.0 compiler, &quot;make check&quot; is failing one of the atomics 
<br>
tests, but only for ppc64 ABI (ppc32 is fine):
<br>
<span class="quotelev1">&gt; --&gt; Testing atomic_spinlock
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.4.5rc2-linux-ppc64-xlc-9.0//openmpi-1.4.5rc2/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 27655 Segmentation fault      $* $threads
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Failed
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.4.5rc2-linux-ppc64-xlc-9.0//openmpi-1.4.5rc2/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 27657 Segmentation fault      $* $threads
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Failed
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.4.5rc2-linux-ppc64-xlc-9.0//openmpi-1.4.5rc2/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 27659 Segmentation fault      $* $threads
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Failed
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.4.5rc2-linux-ppc64-xlc-9.0//openmpi-1.4.5rc2/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 27661 Segmentation fault      $* $threads
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Failed
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.4.5rc2-linux-ppc64-xlc-9.0//openmpi-1.4.5rc2/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 27663 Segmentation fault      $* $threads
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Failed
</span><br>
<span class="quotelev1">&gt; FAIL: atomic_spinlock
</span><br>
<p><p>The xlc-7.0 release I have access to could not compile asm.c (says 
<br>
&quot;memory&quot; and &quot;cc&quot; are unknown registers) and complained that 
<br>
atomic-asm.S had an invalid suffix.  So, this compiler is pretty much 
<br>
useless.
<br>
<p>Since the 11.1 compilers work, I don't see the failure w/ xlc-9.0/LP64 
<br>
as a serious issue.
<br>
However, it might be worth noting the in the compiler-specific section 
<br>
of the README.
<br>
The total uselessness of the xlc-7.0 compiler is not likely to impact 
<br>
too many users, but could still be noted.
<br>
<p>Though I doubt it is related to the xlc-9/ppc64 failure, I should 
<br>
mention for completeness that the xlc tests were on 3 different CPUs:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;11.1  POWER7 (IBM pSeries 8233-E8B) [reported in a previous email]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.0  PPC970MP (IBM pSeries 8844-AC1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.0  POWER6 (IBM pSeries 9124-720)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.0  POWER6 (IBM pSeries 9124-720)
<br>
<p>I also had to disable the opal_path_nfs test again on the POWER6 
<br>
machine, even w/ the linux-&gt;__linux__ change.
<br>
I will report on that when/if I can determine the cause.
<br>
<p>-Paul
<br>
<p>On 1/19/2012 9:55 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Please test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. HargrovePHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10274.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10272.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10275.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up"</a>
<li><strong>Reply:</strong> <a href="10275.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up"</a>
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
