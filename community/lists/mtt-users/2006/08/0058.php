<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 29 18:57:23 2006" -->
<!-- isoreceived="20060829225723" -->
<!-- sent="Tue, 29 Aug 2006 18:57:13 -0400" -->
<!-- isosent="20060829225713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests timing out" -->
<!-- id="C11A3E89.24C2E%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9B8B685B-610A-4D03-882B-3825179E2403_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-08-29 18:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0059.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Previous message:</strong> <a href="0057.php">Josh Hursey: "[MTT users] Tests timing out"</a>
<li><strong>In reply to:</strong> <a href="0057.php">Josh Hursey: "[MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0059.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0059.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/29/06 1:55 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So I'm having trouble getting tests to complete without timing out in
</span><br>
<span class="quotelev1">&gt; MTT. It seems that the tests timeout and hang in MTT, but complete
</span><br>
<span class="quotelev1">&gt; normally outside of MTT.
</span><br>
<p>Does this apply to *all* tests, or only some of the tests (like allgather)?
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Here are some details:
</span><br>
<span class="quotelev1">&gt; Build:
</span><br>
<span class="quotelev1">&gt;    Open MPI Trunk (1.3a1r11481)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tests:
</span><br>
<span class="quotelev1">&gt;    Trivial
</span><br>
<span class="quotelev1">&gt;    ibm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTL:
</span><br>
<span class="quotelev1">&gt;    tcp
</span><br>
<span class="quotelev1">&gt;    self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nodes/processes:
</span><br>
<span class="quotelev1">&gt;    16 nodes (32 processors) on the Odin Cluster at IU
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In MTT all of the tests timeout:
</span><br>
<span class="quotelev1">&gt; &lt;mtt snip&gt;
</span><br>
<span class="quotelev1">&gt; Running command: mpirun  -mca btl tcp,self -np 32 --prefix
</span><br>
<span class="quotelev1">&gt;     /san/homedirs/mpiteam/tmp/mtt-scratch/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev1">&gt; odin_g
</span><br>
<span class="quotelev1">&gt;     cc_warnings/1.3a1r11481/install collective/allgather
</span><br>
<span class="quotelev1">&gt; Timeout: 1 - 1156872348 (vs. now: 1156872028)
</span><br>
<span class="quotelev1">&gt; Past timeout! 1156872348 &lt; 1156872349
</span><br>
<span class="quotelev1">&gt; Past timeout! 1156872348 &lt; 1156872349
</span><br>
[snipped]
<br>
<span class="quotelev1">&gt; &amp;or: returning 0
</span><br>
<span class="quotelev1">&gt; String now: 0
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: allgather, np=32, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; &lt;/mtt snip&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Outside of MTT using the same build the test runs and completes
</span><br>
<span class="quotelev1">&gt; normally:
</span><br>
<span class="quotelev1">&gt;   $ cd ~/tmp/mtt-scratch/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev1">&gt; odin_gcc_warnings/1.3a1r11481/tests/ibm/ibm/
</span><br>
<span class="quotelev1">&gt;   $ mpirun -mca btl tcp,self -np 32 --prefix /san/homedirs/mpiteam/
</span><br>
<span class="quotelev1">&gt; tmp/mtt-scratch/installs/ompi-nightly-trunk/odin_gcc_warnings/
</span><br>
<span class="quotelev1">&gt; 1.3a1r11481/install collective/allgather
</span><br>
<p>Where is mpirun in your path?
<br>
<p>MTT actually drops sourceable files in the top-level install dir (i.e., the
<br>
1.3a1r11481) that you can source in your shell and set the
<br>
PATH/LD_LIBRARY_PATH for that install.  Can you source it and try to run
<br>
again?
<br>
<p>How long does it take to run manually -- just a few seconds, or a long time
<br>
(that could potentially timeout)?
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
<li><strong>Next message:</strong> <a href="0059.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Previous message:</strong> <a href="0057.php">Josh Hursey: "[MTT users] Tests timing out"</a>
<li><strong>In reply to:</strong> <a href="0057.php">Josh Hursey: "[MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0059.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0059.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
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
