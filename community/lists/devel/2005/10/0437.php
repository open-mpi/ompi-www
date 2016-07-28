<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 10 23:26:49 2005" -->
<!-- isoreceived="20051011042649" -->
<!-- sent="Mon, 10 Oct 2005 23:26:41 -0500" -->
<!-- isosent="20051011042641" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="B7A39DBE-AB4E-4731-8AA5-1F1ED6510C4E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051010235950.GC3630_at_odin.ac.hmc.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-10 23:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0438.php">Galen M. Shipman: "NPB- FT errors"</a>
<li><strong>Previous message:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 10, 2005, at 6:59 PM, Brooks Davis wrote:
<br>
<p><span class="quotelev1">&gt; The configure output ends with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; config.status: creating test/util/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating include/ompi_config.h
</span><br>
<span class="quotelev1">&gt; config.status: creating include/mpi.h
</span><br>
<span class="quotelev1">&gt; config.status: include/mpi.h is unchanged
</span><br>
<span class="quotelev1">&gt; config.status: linking ./opal/mca/timer/base/timer_base_null.h to  
</span><br>
<span class="quotelev1">&gt; opal/mca/timer/base/base_impl.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached gziped copies of the configure output and config.log.
</span><br>
<p>Ok, this was a silly error on our part - a header file wasn't shipped  
<br>
as part of the distribution tarball.  I committed a patch to the  
<br>
trunk to fix this bug and it should be in the 1.0 as soon as the 1.0  
<br>
release manager gets a chance to review the commit (should be  
<br>
tomorrow).  If you want to try a nightly, they are available here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/">http://www.open-mpi.org/nightly/</a>
<br>
<p>Of course, the 1.0 nightly for tomorrow morning will not have the fix  
<br>
just yet.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0438.php">Galen M. Shipman: "NPB- FT errors"</a>
<li><strong>Previous message:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
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
