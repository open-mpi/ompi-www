<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  4 16:13:59 2006" -->
<!-- isoreceived="20061004201359" -->
<!-- sent="Wed, 4 Oct 2006 16:13:51 -0400" -->
<!-- isosent="20061004201351" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="411DDC88-1D5A-4890-892F-727976EFEDDA_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.61.0610041411300.21466_at_bryan.theochem.ruhr-uni-bochum.de" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-04 16:13:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 4, 2006, at 8:22 AM, Harald Forbert wrote:
<br>
<p><span class="quotelev1">&gt; The TRANSCOMM setting that we are using here and that I think is the
</span><br>
<span class="quotelev1">&gt; correct one is &quot;-DUseMpi2&quot; since OpenMPI implements the corresponding
</span><br>
<span class="quotelev1">&gt; mpi2 calls. You need a recent version of BLACS for this setting
</span><br>
<span class="quotelev1">&gt; to be available (1.1 with patch 3 should be fine). Together with the
</span><br>
<span class="quotelev1">&gt; patch to openmpi1.1.1 from ticket 356 we are passing the blacs tester
</span><br>
<span class="quotelev1">&gt; for 4 processors. I didn't have to time to test with other numbers
</span><br>
<span class="quotelev1">&gt; though.
</span><br>
<p>Unfortunately this did not solve the problems I'm seeing, could be  
<br>
that my system is 64 bits (another person seeing problems on an  
<br>
Opteron system).
<br>
<p>New tests of BLACS 1.1p3 vs. OpenMPI (1.1.1, 1.1.2rc1, 1.3a1r11962)  
<br>
with Intel ifort 9.0.32 and g95 (Sep 27 2006).
<br>
<p>System: Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5, all tests with  
<br>
4 processors
<br>
<p>1) patched OpenMPI 1.1.1 and 1.1.2rc1 using the two lines from Ticket  
<br>
356.
<br>
2) set TRANSCOMM = -DUseMpi2
<br>
<p>Intel ifort 9.0.32 tests (INTFACE=-DAdd):
<br>
<p>OpenMPI 1.1.1 (patched) &amp; OpenMPI 1.1.2rc1 (patched):
<br>
&nbsp;&nbsp;&nbsp;In the xCbtest both generated errors until Integer Sum tests then  
<br>
no more errors)
<br>
<p>OpenMPI 1.3a1r11962: no errors until crash:
<br>
<p>COMPLEX AMX TESTS: BEGIN.
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xe62000
<br>
[0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0 
<br>
(opal_backtrace_print+0x1f) [0x2a95aa8c1f]
<br>
*** End of error message ***
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xbc0000
<br>
[0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0 
<br>
(opal_backtrace_print+0x1f) [0x2a95aa8c1f]
<br>
*** End of error message ***
<br>
<p>g95 (Sep 27 2006) tests (INTFACE=-Df77IsF2C):
<br>
<p>OpenMPI 1.1.1 (patched) &amp; OpenMPI 1.1.2rc1 (patched):
<br>
&nbsp;&nbsp;&nbsp;In the xCbtest both generated errors until Integer Sum tests then  
<br>
no more errors)
<br>
<p>OpenMPI 1.3a1r11962:  no errors until crash:
<br>
<p>COMPLEX SUM TESTS: BEGIN.
<br>
COMPLEX SUM TESTS: 1152 TESTS;  864 PASSED,  288 SKIPPED,    0 FAILED.
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xb6f000
<br>
[0] func:/opt/g95/openmpi/1.3/lib/libopal.so.0(opal_backtrace_print 
<br>
+0x1f) [0x2a95aa7c1f]
<br>
*** End of error message ***
<br>
<p>COMPLEX AMX TESTS: BEGIN.
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xe27000
<br>
[0] func:/opt/g95/openmpi/1.3/lib/libopal.so.0(opal_backtrace_print 
<br>
+0x1f) [0x2a95aa7c1f]
<br>
*** End of error message ***
<br>
3 additional processes aborted (not shown)
<br>
<p><p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1928.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
