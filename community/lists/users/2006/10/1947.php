<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  6 23:12:54 2006" -->
<!-- isoreceived="20061007031254" -->
<!-- sent="Fri, 06 Oct 2006 21:12:48 -0600" -->
<!-- isosent="20061007031248" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="C14C7750.4044%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C14B4E23.29CB2%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-06 23:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1948.php">Jeff Squyres: "Re: [OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>Previous message:</strong> <a href="1946.php">Greg Lindahl: "Re: [OMPI users] IB HCA support"</a>
<li><strong>In reply to:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1958.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/5/06 10:04 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 10/5/06 2:42 PM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
</span><br>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The final auxiliary test is for BLACS_ABORT.
</span><br>
<span class="quotelev2">&gt;&gt; Immediately after this message, all processes should be killed.
</span><br>
<span class="quotelev2">&gt;&gt; If processes survive the call, your BLACS_ABORT is incorrect.
</span><br>
<span class="quotelev2">&gt;&gt; {0,2}, pnum=2, Contxt=0, killed other procs, exiting with error #-1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [cluster:32133] [0,0,0] ORTE_ERROR_LOG: Communication failure in file
</span><br>
<span class="quotelev2">&gt;&gt; base/errmgr_base_receive.c at line 143
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x100000030
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (opal_backtrace_print+0x1f) [0x2a957e4c1f]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I believe this is now fixed on the trunk. Please take another crack at it
<br>
and let me know.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1948.php">Jeff Squyres: "Re: [OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>Previous message:</strong> <a href="1946.php">Greg Lindahl: "Re: [OMPI users] IB HCA support"</a>
<li><strong>In reply to:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1958.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
