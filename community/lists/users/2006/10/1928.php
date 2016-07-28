<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  4 16:35:54 2006" -->
<!-- isoreceived="20061004203554" -->
<!-- sent="Wed, 4 Oct 2006 16:35:42 -0400" -->
<!-- isosent="20061004203542" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="77106FFE-EF21-40DD-9171-E238D1A0C6BE_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="411DDC88-1D5A-4890-892F-727976EFEDDA_at_ieee.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-04 16:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1929.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1929.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1929.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm working on this bug. As far as I see the patch from the bug 365  
<br>
do not help us here. However, on my 64 bits machines (not Opteron but  
<br>
G5) I don't get the segfault. Anyway, I get the bad data transmission  
<br>
for test #1 and #51. So far my main problem is that I cannot  
<br>
reproduce these errors with any other data-type tests [and believe me  
<br>
we have a bunch of them]. The only one who fails is the BLACS. I  
<br>
wonder what the data-type looks like for the failing tests. Someone  
<br>
here knows how to extract the BLACS data-type (for test #1 and #51) ?  
<br>
Or how to force BLACS to print the data-type information for each  
<br>
test  (M, N and so on) ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 4, 2006, at 4:13 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 4, 2006, at 8:22 AM, Harald Forbert wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The TRANSCOMM setting that we are using here and that I think is the
</span><br>
<span class="quotelev2">&gt;&gt; correct one is &quot;-DUseMpi2&quot; since OpenMPI implements the corresponding
</span><br>
<span class="quotelev2">&gt;&gt; mpi2 calls. You need a recent version of BLACS for this setting
</span><br>
<span class="quotelev2">&gt;&gt; to be available (1.1 with patch 3 should be fine). Together with the
</span><br>
<span class="quotelev2">&gt;&gt; patch to openmpi1.1.1 from ticket 356 we are passing the blacs tester
</span><br>
<span class="quotelev2">&gt;&gt; for 4 processors. I didn't have to time to test with other numbers
</span><br>
<span class="quotelev2">&gt;&gt; though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately this did not solve the problems I'm seeing, could be
</span><br>
<span class="quotelev1">&gt; that my system is 64 bits (another person seeing problems on an
</span><br>
<span class="quotelev1">&gt; Opteron system).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; New tests of BLACS 1.1p3 vs. OpenMPI (1.1.1, 1.1.2rc1, 1.3a1r11962)
</span><br>
<span class="quotelev1">&gt; with Intel ifort 9.0.32 and g95 (Sep 27 2006).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System: Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5, all tests with
</span><br>
<span class="quotelev1">&gt; 4 processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) patched OpenMPI 1.1.1 and 1.1.2rc1 using the two lines from Ticket
</span><br>
<span class="quotelev1">&gt; 356.
</span><br>
<span class="quotelev1">&gt; 2) set TRANSCOMM = -DUseMpi2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel ifort 9.0.32 tests (INTFACE=-DAdd):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.1 (patched) &amp; OpenMPI 1.1.2rc1 (patched):
</span><br>
<span class="quotelev1">&gt;    In the xCbtest both generated errors until Integer Sum tests then
</span><br>
<span class="quotelev1">&gt; no more errors)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3a1r11962: no errors until crash:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; COMPLEX AMX TESTS: BEGIN.
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xe62000
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_backtrace_print+0x1f) [0x2a95aa8c1f]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xbc0000
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_backtrace_print+0x1f) [0x2a95aa8c1f]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g95 (Sep 27 2006) tests (INTFACE=-Df77IsF2C):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.1 (patched) &amp; OpenMPI 1.1.2rc1 (patched):
</span><br>
<span class="quotelev1">&gt;    In the xCbtest both generated errors until Integer Sum tests then
</span><br>
<span class="quotelev1">&gt; no more errors)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3a1r11962:  no errors until crash:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; COMPLEX SUM TESTS: BEGIN.
</span><br>
<span class="quotelev1">&gt; COMPLEX SUM TESTS: 1152 TESTS;  864 PASSED,  288 SKIPPED,    0 FAILED.
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xb6f000
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/g95/openmpi/1.3/lib/libopal.so.0(opal_backtrace_print
</span><br>
<span class="quotelev1">&gt; +0x1f) [0x2a95aa7c1f]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; COMPLEX AMX TESTS: BEGIN.
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xe27000
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/g95/openmpi/1.3/lib/libopal.so.0(opal_backtrace_print
</span><br>
<span class="quotelev1">&gt; +0x1f) [0x2a95aa7c1f]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1929.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1929.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1929.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
