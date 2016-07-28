<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 10 18:25:52 2005" -->
<!-- isoreceived="20051010232552" -->
<!-- sent="Mon, 10 Oct 2005 18:25:47 -0500" -->
<!-- isosent="20051010232547" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="9D3C0C10-C521-4849-88E2-29F157C7F05F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051010231239.GA3630_at_odin.ac.hmc.edu" -->
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
<strong>Date:</strong> 2005-10-10 18:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0434.php">Brooks Davis: "porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Brooks Davis: "porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 10, 2005, at 6:12 PM, Brooks Davis wrote:
<br>
<p><span class="quotelev1">&gt; I'm looking at porting Open MPI to FreeBSD and am trying to get a  
</span><br>
<span class="quotelev1">&gt; handle
</span><br>
<span class="quotelev1">&gt; on the requirements.  The issue I'm hitting so far is the opal timer
</span><br>
<span class="quotelev1">&gt; code which won't finish configuration at the moment.  Where is the API
</span><br>
<span class="quotelev1">&gt; to implement documented?  Is there an intent to implement a sub- 
</span><br>
<span class="quotelev1">&gt; optimal
</span><br>
<span class="quotelev1">&gt; version with POSIX calls at some point?  If I understand the current
</span><br>
<span class="quotelev1">&gt; code correctly, something based on clock_gettime() and clock_getres()
</span><br>
<span class="quotelev1">&gt; should do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there other things I can expect to have to implement?
</span><br>
<p>That should actually be about it.  In theory, Open MPI should have  
<br>
fallen back to using gettimeofday().  Can you send the output of  
<br>
configure and the config.log file?  As for implementing a FreeBSD- 
<br>
specific timer component, if clock_gettime() and clock_getres()  
<br>
provide reasonably low perturbationtime reference, they would be be  
<br>
ideal.
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
<li><strong>Next message:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0434.php">Brooks Davis: "porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Brooks Davis: "porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0436.php">Brooks Davis: "Re:  porting guide?"</a>
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
