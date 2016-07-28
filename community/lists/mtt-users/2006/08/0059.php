<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 29 20:57:37 2006" -->
<!-- isoreceived="20060830005737" -->
<!-- sent="Tue, 29 Aug 2006 20:57:29 -0400" -->
<!-- isosent="20060830005729" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests timing out" -->
<!-- id="2C4A7F6D-9867-4BD9-9207-8B64F0BCA9A1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C11A3E89.24C2E%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-29 20:57:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0060.php">Jeff Squyres: "[MTT users] Update your checkouts"</a>
<li><strong>Previous message:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0061.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0061.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2006, at 6:57 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On 8/29/06 1:55 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I'm having trouble getting tests to complete without timing out in
</span><br>
<span class="quotelev2">&gt;&gt; MTT. It seems that the tests timeout and hang in MTT, but complete
</span><br>
<span class="quotelev2">&gt;&gt; normally outside of MTT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this apply to *all* tests, or only some of the tests (like  
</span><br>
<span class="quotelev1">&gt; allgather)?
</span><br>
<p>All of the tests: Trivial and ibm. They all timeout :(
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are some details:
</span><br>
<span class="quotelev2">&gt;&gt; Build:
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI Trunk (1.3a1r11481)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tests:
</span><br>
<span class="quotelev2">&gt;&gt;    Trivial
</span><br>
<span class="quotelev2">&gt;&gt;    ibm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTL:
</span><br>
<span class="quotelev2">&gt;&gt;    tcp
</span><br>
<span class="quotelev2">&gt;&gt;    self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nodes/processes:
</span><br>
<span class="quotelev2">&gt;&gt;    16 nodes (32 processors) on the Odin Cluster at IU
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In MTT all of the tests timeout:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mtt snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running command: mpirun  -mca btl tcp,self -np 32 --prefix
</span><br>
<span class="quotelev2">&gt;&gt;     /san/homedirs/mpiteam/tmp/mtt-scratch/installs/ompi-nightly- 
</span><br>
<span class="quotelev2">&gt;&gt; trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_g
</span><br>
<span class="quotelev2">&gt;&gt;     cc_warnings/1.3a1r11481/install collective/allgather
</span><br>
<span class="quotelev2">&gt;&gt; Timeout: 1 - 1156872348 (vs. now: 1156872028)
</span><br>
<span class="quotelev2">&gt;&gt; Past timeout! 1156872348 &lt; 1156872349
</span><br>
<span class="quotelev2">&gt;&gt; Past timeout! 1156872348 &lt; 1156872349
</span><br>
<span class="quotelev1">&gt; [snipped]
</span><br>
<span class="quotelev2">&gt;&gt; &amp;or: returning 0
</span><br>
<span class="quotelev2">&gt;&gt; String now: 0
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: Test: allgather, np=32, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/mtt snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Outside of MTT using the same build the test runs and completes
</span><br>
<span class="quotelev2">&gt;&gt; normally:
</span><br>
<span class="quotelev2">&gt;&gt;   $ cd ~/tmp/mtt-scratch/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_gcc_warnings/1.3a1r11481/tests/ibm/ibm/
</span><br>
<span class="quotelev2">&gt;&gt;   $ mpirun -mca btl tcp,self -np 32 --prefix /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; tmp/mtt-scratch/installs/ompi-nightly-trunk/odin_gcc_warnings/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r11481/install collective/allgather
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where is mpirun in your path?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MTT actually drops sourceable files in the top-level install dir  
</span><br>
<span class="quotelev1">&gt; (i.e., the
</span><br>
<span class="quotelev1">&gt; 1.3a1r11481) that you can source in your shell and set the
</span><br>
<span class="quotelev1">&gt; PATH/LD_LIBRARY_PATH for that install.  Can you source it and try  
</span><br>
<span class="quotelev1">&gt; to run
</span><br>
<span class="quotelev1">&gt; again?
</span><br>
<p>Yep I exported the PATH/LD_LIBRARY_PATH to the one cited in the -- 
<br>
prefix argument before running manually.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How long does it take to run manually -- just a few seconds, or a  
</span><br>
<span class="quotelev1">&gt; long time
</span><br>
<span class="quotelev1">&gt; (that could potentially timeout)?
</span><br>
<p>Just a few seconds (say 5 or so).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0060.php">Jeff Squyres: "[MTT users] Update your checkouts"</a>
<li><strong>Previous message:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0061.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0061.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
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
