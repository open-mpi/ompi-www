<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  4 16:41:58 2006" -->
<!-- isoreceived="20061004204158" -->
<!-- sent="Wed, 4 Oct 2006 16:41:47 -0400" -->
<!-- isosent="20061004204147" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="CA974627-D0C5-483E-87E9-68B4A6C45B32_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="77106FFE-EF21-40DD-9171-E238D1A0C6BE_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-10-04 16:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, that was my 5 minutes hall of shame. Setting the verbosity level  
<br>
in bt.dat to 6 give me enough information to know exactly the data- 
<br>
type share. Now, I know how to fix things ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 4, 2006, at 4:35 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I'm working on this bug. As far as I see the patch from the bug 365
</span><br>
<span class="quotelev1">&gt; do not help us here. However, on my 64 bits machines (not Opteron but
</span><br>
<span class="quotelev1">&gt; G5) I don't get the segfault. Anyway, I get the bad data transmission
</span><br>
<span class="quotelev1">&gt; for test #1 and #51. So far my main problem is that I cannot
</span><br>
<span class="quotelev1">&gt; reproduce these errors with any other data-type tests [and believe me
</span><br>
<span class="quotelev1">&gt; we have a bunch of them]. The only one who fails is the BLACS. I
</span><br>
<span class="quotelev1">&gt; wonder what the data-type looks like for the failing tests. Someone
</span><br>
<span class="quotelev1">&gt; here knows how to extract the BLACS data-type (for test #1 and #51) ?
</span><br>
<span class="quotelev1">&gt; Or how to force BLACS to print the data-type information for each
</span><br>
<span class="quotelev1">&gt; test  (M, N and so on) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2006, at 4:13 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 4, 2006, at 8:22 AM, Harald Forbert wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The TRANSCOMM setting that we are using here and that I think is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct one is &quot;-DUseMpi2&quot; since OpenMPI implements the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi2 calls. You need a recent version of BLACS for this setting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be available (1.1 with patch 3 should be fine). Together with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patch to openmpi1.1.1 from ticket 356 we are passing the blacs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tester
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for 4 processors. I didn't have to time to test with other numbers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately this did not solve the problems I'm seeing, could be
</span><br>
<span class="quotelev2">&gt;&gt; that my system is 64 bits (another person seeing problems on an
</span><br>
<span class="quotelev2">&gt;&gt; Opteron system).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; New tests of BLACS 1.1p3 vs. OpenMPI (1.1.1, 1.1.2rc1, 1.3a1r11962)
</span><br>
<span class="quotelev2">&gt;&gt; with Intel ifort 9.0.32 and g95 (Sep 27 2006).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; System: Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5, all tests with
</span><br>
<span class="quotelev2">&gt;&gt; 4 processors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) patched OpenMPI 1.1.1 and 1.1.2rc1 using the two lines from Ticket
</span><br>
<span class="quotelev2">&gt;&gt; 356.
</span><br>
<span class="quotelev2">&gt;&gt; 2) set TRANSCOMM = -DUseMpi2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Intel ifort 9.0.32 tests (INTFACE=-DAdd):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.1.1 (patched) &amp; OpenMPI 1.1.2rc1 (patched):
</span><br>
<span class="quotelev2">&gt;&gt;    In the xCbtest both generated errors until Integer Sum tests then
</span><br>
<span class="quotelev2">&gt;&gt; no more errors)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.3a1r11962: no errors until crash:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX AMX TESTS: BEGIN.
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0xe62000
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (opal_backtrace_print+0x1f) [0x2a95aa8c1f]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0xbc0000
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (opal_backtrace_print+0x1f) [0x2a95aa8c1f]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g95 (Sep 27 2006) tests (INTFACE=-Df77IsF2C):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.1.1 (patched) &amp; OpenMPI 1.1.2rc1 (patched):
</span><br>
<span class="quotelev2">&gt;&gt;    In the xCbtest both generated errors until Integer Sum tests then
</span><br>
<span class="quotelev2">&gt;&gt; no more errors)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.3a1r11962:  no errors until crash:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX SUM TESTS: BEGIN.
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX SUM TESTS: 1152 TESTS;  864 PASSED,  288 SKIPPED,    0  
</span><br>
<span class="quotelev2">&gt;&gt; FAILED.
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0xb6f000
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/g95/openmpi/1.3/lib/libopal.so.0(opal_backtrace_print
</span><br>
<span class="quotelev2">&gt;&gt; +0x1f) [0x2a95aa7c1f]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX AMX TESTS: BEGIN.
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0xe27000
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/g95/openmpi/1.3/lib/libopal.so.0(opal_backtrace_print
</span><br>
<span class="quotelev2">&gt;&gt; +0x1f) [0x2a95aa7c1f]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
