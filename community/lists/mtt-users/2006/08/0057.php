<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 29 13:56:01 2006" -->
<!-- isoreceived="20060829175601" -->
<!-- sent="Tue, 29 Aug 2006 13:55:58 -0400" -->
<!-- isosent="20060829175558" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT users] Tests timing out" -->
<!-- id="9B8B685B-610A-4D03-882B-3825179E2403_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2006-08-29 13:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Previous message:</strong> <a href="0056.php">Jeff Squyres: "[MTT users] OMPI snapshot tarball generation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Maybe reply:</strong> <a href="0067.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all,
<br>
<p>So I'm having trouble getting tests to complete without timing out in  
<br>
MTT. It seems that the tests timeout and hang in MTT, but complete  
<br>
normally outside of MTT.
<br>
<p>Here are some details:
<br>
Build:
<br>
&nbsp;&nbsp;&nbsp;Open MPI Trunk (1.3a1r11481)
<br>
<p>Tests:
<br>
&nbsp;&nbsp;&nbsp;Trivial
<br>
&nbsp;&nbsp;&nbsp;ibm
<br>
<p>BTL:
<br>
&nbsp;&nbsp;&nbsp;tcp
<br>
&nbsp;&nbsp;&nbsp;self
<br>
<p>Nodes/processes:
<br>
&nbsp;&nbsp;&nbsp;16 nodes (32 processors) on the Odin Cluster at IU
<br>
<p><p>In MTT all of the tests timeout:
<br>
&lt;mtt snip&gt;
<br>
Running command: mpirun  -mca btl tcp,self -np 32 --prefix
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/tmp/mtt-scratch/installs/ompi-nightly-trunk/ 
<br>
odin_g
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc_warnings/1.3a1r11481/install collective/allgather
<br>
Timeout: 1 - 1156872348 (vs. now: 1156872028)
<br>
Past timeout! 1156872348 &lt; 1156872349
<br>
Past timeout! 1156872348 &lt; 1156872349
<br>
Command complete, exit status: 72057594037927935
<br>
Evaluating: &amp;or(&amp;eq(&amp;test_exit_status(), 0), &amp;eq(&amp;test_exit_status(),  
<br>
77))
<br>
Got name: test_exit_status
<br>
Got args:
<br>
_do: $ret = MTT::Values::Functions::test_exit_status()
<br>
&amp;test_exit_status returning: 72057594037927935
<br>
String now: &amp;or(&amp;eq(72057594037927935, 0), &amp;eq(&amp;test_exit_status(), 77))
<br>
Got name: eq
<br>
Got args: 72057594037927935, 0
<br>
_do: $ret = MTT::Values::Functions::eq(72057594037927935, 0)
<br>
&amp;eq got: 72057594037927935 0
<br>
&amp;eq: returning 0
<br>
String now: &amp;or(0, &amp;eq(&amp;test_exit_status(), 77))
<br>
Got name: test_exit_status
<br>
Got args:
<br>
_do: $ret = MTT::Values::Functions::test_exit_status()
<br>
&amp;test_exit_status returning: 72057594037927935
<br>
String now: &amp;or(0, &amp;eq(72057594037927935, 77))
<br>
Got name: eq
<br>
Got args: 72057594037927935, 77
<br>
_do: $ret = MTT::Values::Functions::eq(72057594037927935, 77)
<br>
&amp;eq got: 72057594037927935 77
<br>
&amp;eq: returning 0
<br>
String now: &amp;or(0, 0)
<br>
Got name: or
<br>
Got args: 0, 0
<br>
_do: $ret = MTT::Values::Functions::or(0, 0)
<br>
&amp;or got: 0 0
<br>
&amp;or: returning 0
<br>
String now: 0
<br>
*** WARNING: Test: allgather, np=32, variant=1: TIMED OUT (failed)
<br>
&lt;/mtt snip&gt;
<br>
<p>Outside of MTT using the same build the test runs and completes  
<br>
normally:
<br>
&nbsp;&nbsp;$ cd ~/tmp/mtt-scratch/installs/ompi-nightly-trunk/ 
<br>
odin_gcc_warnings/1.3a1r11481/tests/ibm/ibm/
<br>
&nbsp;&nbsp;$ mpirun -mca btl tcp,self -np 32 --prefix /san/homedirs/mpiteam/ 
<br>
tmp/mtt-scratch/installs/ompi-nightly-trunk/odin_gcc_warnings/ 
<br>
1.3a1r11481/install collective/allgather
<br>
&nbsp;&nbsp;$
<br>
<p>Any thoughts on why this might be happening in MTT but not outside of  
<br>
it?
<br>
<p>Cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Previous message:</strong> <a href="0056.php">Jeff Squyres: "[MTT users] OMPI snapshot tarball generation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0058.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Maybe reply:</strong> <a href="0067.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
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
