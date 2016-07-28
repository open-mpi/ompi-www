<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  6 00:05:00 2006" -->
<!-- isoreceived="20061006040500" -->
<!-- sent="Fri, 06 Oct 2006 00:04:51 -0400" -->
<!-- isosent="20061006040451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="C14B4E23.29CB2%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-06 00:04:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1937.php">흆e Sandgren: "[OMPI users] Bugs in config tests for threads (1.1.2rc3 at least)"</a>
<li><strong>Previous message:</strong> <a href="1935.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="1917.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1947.php">Ralph Castain: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1947.php">Ralph Castain: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1958.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1986.php">흆e Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/5/06 2:42 PM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; System: BLACS 1.1p3 on Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5,
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
<p>Good.  Can you expand on what you mean by &quot;slowed down&quot;?
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; OpenMPI 1.3a1r11962 patched: much better, completes all tests with
</span><br>
<span class="quotelev1">&gt; default data set but the tester crashes on exit (different problem?)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<p>Quite possibly so.  1.3 is the active development trunk and is not always
<br>
stable; we're working on some ORTE issues right now, so it's possible that
<br>
mpirun may not be rock solid at the moment.  :-)
<br>
<p><span class="quotelev1">&gt; The final auxiliary test is for BLACS_ABORT.
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
<p>Ya; don't worry about this on the trunk at the moment.  :-)
<br>
<p><span class="quotelev1">&gt; Results of testing the patch on my system:
</span><br>
<span class="quotelev1">&gt; 1) Not certain which branches this patch can be applied to so I may
</span><br>
<span class="quotelev1">&gt; have tried to do too much.
</span><br>
<span class="quotelev1">&gt; 2) I don't have 11970 on my system so I tried to apply the patch to
</span><br>
<span class="quotelev1">&gt; 1.1.1, 1.1.2rc1, 1.3a1r11962
</span><br>
<p>Good.  I literally just posted 1.1.2rc3 with this DDT fix (among others).
<br>
It looks like we're getting darn close to releasing 1.1.2.
<br>
<p><span class="quotelev1">&gt;   (no nightly tarball for 1.3a1r11970 this morning)
</span><br>
<p>We had a failure in the trunk tarball creation last night.
<br>
<p><span class="quotelev1">&gt;   (side note where is 1.2?, only via cvs?)
</span><br>
<p>We haven't opened up nightly tarballs for v1.2 yet because we're not quite
<br>
happy yet with the level of stability there yet.  That is, we expect the 1.1
<br>
series nightly tarballs to be more-or-less stable.  And we've never provided
<br>
guarantees about trunk stability ;-).  We'll open up the 1.2 nightly
<br>
tarballs probably in the not-distant future.
<br>
<p><span class="quotelev1">&gt; 3) patch complained about all three I tried to apply it to but seemed
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
<p>No worries - we definitely appreciate all your testing!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1937.php">흆e Sandgren: "[OMPI users] Bugs in config tests for threads (1.1.2rc3 at least)"</a>
<li><strong>Previous message:</strong> <a href="1935.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="1917.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1947.php">Ralph Castain: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1947.php">Ralph Castain: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1958.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1986.php">흆e Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
