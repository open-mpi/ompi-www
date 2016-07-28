<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 18:26:35 2005" -->
<!-- isoreceived="20051021232635" -->
<!-- sent="Fri, 21 Oct 2005 18:26:32 -0500" -->
<!-- isosent="20051021232632" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="20051021232632.GG30127_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ec59eb132e878408e576d417e4a49749_at_indiana.edu" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 18:26:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0473.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Brian Barrett: "Re:  BUG: --disable-cxx still runs c++ configure tests"</a>
<li><strong>In reply to:</strong> <a href="0469.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0473.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0473.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0481.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 21, 2005 at 04:12:05PM -0500, Andrew Friedley wrote:
<br>
<span class="quotelev1">&gt; I just committed a fix to the trunk to fix your original segfault down 
</span><br>
<span class="quotelev1">&gt; in opal_show_help() - this is the same problem Ken posted. This fix 
</span><br>
<span class="quotelev1">&gt; should make it into the v1.0 branch eventually.  Even so, you are going 
</span><br>
<span class="quotelev1">&gt; to run into the real problem you were handling - this fix is just for 
</span><br>
<span class="quotelev1">&gt; proper error handling/output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error below looks like a word size mismatch - one thing is compiled 
</span><br>
<span class="quotelev1">&gt; 64bit, the other is compiled 32bit.  Make sure everything is compiled 
</span><br>
<span class="quotelev1">&gt; either 32bit or 64bit.
</span><br>
<p>Another note.. I think I may have had some problems because I built with
<br>
'make -j16'.. has anyone else tried parallel make builds?
<br>
<p>I have a working mpirun now.
<br>
<p>Now I'm back to having NetPIPE segfault when I run it..
<br>
<p>troy_at_opteron1:/usr/src/netpipe3-dev$ mpirun -np 2 -host
<br>
opteron1,opteron2 NPmpi
<br>
0: opteron1
<br>
1: opteron2
<br>
mpirun noticed that job rank 0 with PID 20293 on node &quot;opteron1&quot; exited
<br>
on signal 11.
<br>
1 additional process aborted (not shown)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0473.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Brian Barrett: "Re:  BUG: --disable-cxx still runs c++ configure tests"</a>
<li><strong>In reply to:</strong> <a href="0469.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0473.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0473.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0481.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
