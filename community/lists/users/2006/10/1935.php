<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  5 15:01:49 2006" -->
<!-- isoreceived="20061005190149" -->
<!-- sent="Thu, 5 Oct 2006 15:01:39 -0400" -->
<!-- isosent="20061005190139" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="22E07DB8-D8A6-4E52-B2E8-4D783938F7BE_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="74F3417C-F94A-4097-A05B-F9324B1AE7BA_at_ieee.org" -->
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
<strong>Date:</strong> 2006-10-05 15:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1934.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1934.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Michael.
<br>
<p>The seg-fault is related to some orterun problem. I notice it  
<br>
yesterday and we try to find a fix. For the rest I'm quite happy that  
<br>
the BLACS problem was solved.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks for your help,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 5, 2006, at 2:42 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2006, at 7:51 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is the correct patch (same as previous minus the debugging
</span><br>
<span class="quotelev2">&gt;&gt; statements).
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2006, at 7:42 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The problem was found and fixed. Until the patch get applied to the
</span><br>
<span class="quotelev2">&gt;&gt; 1.1 and 1.2 branches please use the attached patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System: BLACS 1.1p3 on Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5,
</span><br>
<span class="quotelev1">&gt; Intel ifort 9.0.32 all tests with 4 processors (comments below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPi 1.1.1 patched and OpenMPI 1.1.2 patched:
</span><br>
<span class="quotelev1">&gt;    C &amp; F tests: no errors with default data set.  F test slowed down
</span><br>
<span class="quotelev1">&gt; in the middle of the tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3a1r11962 patched: much better, completes all tests with
</span><br>
<span class="quotelev1">&gt; default data set but the tester crashes on exit (different problem?)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The final auxiliary test is for BLACS_ABORT.
</span><br>
<span class="quotelev1">&gt; Immediately after this message, all processes should be killed.
</span><br>
<span class="quotelev1">&gt; If processes survive the call, your BLACS_ABORT is incorrect.
</span><br>
<span class="quotelev1">&gt; {0,2}, pnum=2, Contxt=0, killed other procs, exiting with error #-1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:32133] [0,0,0] ORTE_ERROR_LOG: Communication failure in file
</span><br>
<span class="quotelev1">&gt; base/errmgr_base_receive.c at line 143
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x100000030
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_backtrace_print+0x1f) [0x2a957e4c1f]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Results of testing the patch on my system:
</span><br>
<span class="quotelev1">&gt; 1) Not certain which branches this patch can be applied to so I may
</span><br>
<span class="quotelev1">&gt; have tried to do too much.
</span><br>
<span class="quotelev1">&gt; 2) I don't have 11970 on my system so I tried to apply the patch to
</span><br>
<span class="quotelev1">&gt; 1.1.1, 1.1.2rc1, 1.3a1r11962
</span><br>
<span class="quotelev1">&gt;   (no nightly tarball for 1.3a1r11970 this morning)
</span><br>
<span class="quotelev1">&gt;   (side note where is 1.2?, only via cvs?)
</span><br>
<span class="quotelev1">&gt; 3) patch complained about all three I tried to apply it to but seemed
</span><br>
<span class="quotelev1">&gt; to apply the patch most of the time, I hand-checked all three patched
</span><br>
<span class="quotelev1">&gt; routines in the three branches I tried and hand fixed anything that
</span><br>
<span class="quotelev1">&gt; got missed because of differences in line numbers.
</span><br>
<span class="quotelev1">&gt; 4) The patch applied best against 1.3a1r11962 and second best against
</span><br>
<span class="quotelev1">&gt; 1.1.1 -- my lack of experience with patch likely confused the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1934.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1934.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
