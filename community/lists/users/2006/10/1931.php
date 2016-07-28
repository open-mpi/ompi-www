<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  4 19:42:25 2006" -->
<!-- isoreceived="20061004234225" -->
<!-- sent="Wed, 4 Oct 2006 19:42:16 -0400" -->
<!-- isosent="20061004234216" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="AA9A140E-824A-4DFB-9291-1670C34CEA67_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E7F2066C-7293-46CC-B7EB-5D231ED595CE_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-10-04 19:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem was found and fixed. Until the patch get applied to the  
<br>
1.1 and 1.2 branches please use the attached patch.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks for you help for discovering and fixing this bug,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>

<br><p>
<p>On Oct 4, 2006, at 5:32 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; That's just amazing. We pass all the trapezoidal tests but we fail
</span><br>
<span class="quotelev1">&gt; the general ones (rectangular matrix) if the leading dimension of the
</span><br>
<span class="quotelev1">&gt; matrix on the destination processor is greater than the leading
</span><br>
<span class="quotelev1">&gt; dimension on the sender. At least now I narrow down the place where
</span><br>
<span class="quotelev1">&gt; the error occur ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2006, at 4:41 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, that was my 5 minutes hall of shame. Setting the verbosity level
</span><br>
<span class="quotelev2">&gt;&gt; in bt.dat to 6 give me enough information to know exactly the data-
</span><br>
<span class="quotelev2">&gt;&gt; type share. Now, I know how to fix things ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 4, 2006, at 4:35 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm working on this bug. As far as I see the patch from the bug 365
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do not help us here. However, on my 64 bits machines (not Opteron  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; G5) I don't get the segfault. Anyway, I get the bad data  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transmission
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for test #1 and #51. So far my main problem is that I cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reproduce these errors with any other data-type tests [and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; believe me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we have a bunch of them]. The only one who fails is the BLACS. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wonder what the data-type looks like for the failing tests. Someone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here knows how to extract the BLACS data-type (for test #1 and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #51) ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or how to force BLACS to print the data-type information for each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test  (M, N and so on) ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 4, 2006, at 4:13 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 4, 2006, at 8:22 AM, Harald Forbert wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The TRANSCOMM setting that we are using here and that I think is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; correct one is &quot;-DUseMpi2&quot; since OpenMPI implements the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; corresponding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi2 calls. You need a recent version of BLACS for this setting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to be available (1.1 with patch 3 should be fine). Together with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; patch to openmpi1.1.1 from ticket 356 we are passing the blacs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tester
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for 4 processors. I didn't have to time to test with other numbers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; though.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately this did not solve the problems I'm seeing, could be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that my system is 64 bits (another person seeing problems on an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Opteron system).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New tests of BLACS 1.1p3 vs. OpenMPI (1.1.1, 1.1.2rc1, 1.3a1r11962)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with Intel ifort 9.0.32 and g95 (Sep 27 2006).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; System: Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5, all tests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4 processors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) patched OpenMPI 1.1.1 and 1.1.2rc1 using the two lines from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ticket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 356.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) set TRANSCOMM = -DUseMpi2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Intel ifort 9.0.32 tests (INTFACE=-DAdd):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI 1.1.1 (patched) &amp; OpenMPI 1.1.2rc1 (patched):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    In the xCbtest both generated errors until Integer Sum tests  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; no more errors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI 1.3a1r11962: no errors until crash:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; COMPLEX AMX TESTS: BEGIN.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Failing at addr:0xe62000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (opal_backtrace_print+0x1f) [0x2a95aa8c1f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Failing at addr:0xbc0000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (opal_backtrace_print+0x1f) [0x2a95aa8c1f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; g95 (Sep 27 2006) tests (INTFACE=-Df77IsF2C):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI 1.1.1 (patched) &amp; OpenMPI 1.1.2rc1 (patched):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    In the xCbtest both generated errors until Integer Sum tests  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; no more errors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI 1.3a1r11962:  no errors until crash:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; COMPLEX SUM TESTS: BEGIN.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; COMPLEX SUM TESTS: 1152 TESTS;  864 PASSED,  288 SKIPPED,    0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAILED.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Failing at addr:0xb6f000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0] func:/opt/g95/openmpi/1.3/lib/libopal.so.0(opal_backtrace_print
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0x1f) [0x2a95aa7c1f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; COMPLEX AMX TESTS: BEGIN.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Failing at addr:0xe27000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0] func:/opt/g95/openmpi/1.3/lib/libopal.so.0(opal_backtrace_print
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0x1f) [0x2a95aa7c1f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1931/ddt.patch">ddt.patch</a>
</ul>
<!-- attachment="ddt.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1930.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
