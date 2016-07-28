<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  5 14:42:41 2006" -->
<!-- isoreceived="20061005184241" -->
<!-- sent="Thu, 5 Oct 2006 14:42:32 -0400" -->
<!-- isosent="20061005184232" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="74F3417C-F94A-4097-A05B-F9324B1AE7BA_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A899D94E-BCF6-4CFE-B5BC-72BD90A903F9_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-10-05 14:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1935.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1933.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<li><strong>In reply to:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1935.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1935.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 4, 2006, at 7:51 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; This is the correct patch (same as previous minus the debugging  
</span><br>
<span class="quotelev1">&gt; statements).
</span><br>
On Oct 4, 2006, at 7:42 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The problem was found and fixed. Until the patch get applied to the  
</span><br>
<span class="quotelev1">&gt; 1.1 and 1.2 branches please use the attached patch.
</span><br>
<p>System: BLACS 1.1p3 on Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5,  
<br>
Intel ifort 9.0.32 all tests with 4 processors (comments below)
<br>
<p>OpenMPi 1.1.1 patched and OpenMPI 1.1.2 patched:
<br>
&nbsp;&nbsp;&nbsp;C &amp; F tests: no errors with default data set.  F test slowed down  
<br>
in the middle of the tests.
<br>
<p>OpenMPI 1.3a1r11962 patched: much better, completes all tests with  
<br>
default data set but the tester crashes on exit (different problem?)
<br>
------------------------------------------------------------
<br>
The final auxiliary test is for BLACS_ABORT.
<br>
Immediately after this message, all processes should be killed.
<br>
If processes survive the call, your BLACS_ABORT is incorrect.
<br>
{0,2}, pnum=2, Contxt=0, killed other procs, exiting with error #-1.
<br>
<p>[cluster:32133] [0,0,0] ORTE_ERROR_LOG: Communication failure in file  
<br>
base/errmgr_base_receive.c at line 143
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x100000030
<br>
[0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0 
<br>
(opal_backtrace_print+0x1f) [0x2a957e4c1f]
<br>
*** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
------------------------------------------------------------
<br>
<p>Results of testing the patch on my system:
<br>
1) Not certain which branches this patch can be applied to so I may  
<br>
have tried to do too much.
<br>
2) I don't have 11970 on my system so I tried to apply the patch to  
<br>
1.1.1, 1.1.2rc1, 1.3a1r11962
<br>
&nbsp;&nbsp;(no nightly tarball for 1.3a1r11970 this morning)
<br>
&nbsp;&nbsp;(side note where is 1.2?, only via cvs?)
<br>
3) patch complained about all three I tried to apply it to but seemed  
<br>
to apply the patch most of the time, I hand-checked all three patched  
<br>
routines in the three branches I tried and hand fixed anything that  
<br>
got missed because of differences in line numbers.
<br>
4) The patch applied best against 1.3a1r11962 and second best against  
<br>
1.1.1 -- my lack of experience with patch likely confused the issue.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1935.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1933.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<li><strong>In reply to:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1935.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1935.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
