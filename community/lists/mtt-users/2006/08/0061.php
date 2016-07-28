<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 07:20:04 2006" -->
<!-- isoreceived="20060830112004" -->
<!-- sent="Wed, 30 Aug 2006 07:19:55 -0400" -->
<!-- isosent="20060830111955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests timing out" -->
<!-- id="C11AEC9B.24CFF%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2C4A7F6D-9867-4BD9-9207-8B64F0BCA9A1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-08-30 07:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0062.php">Jeff Squyres: "[MTT users] OMPI snapshot tarball generation"</a>
<li><strong>Previous message:</strong> <a href="0060.php">Jeff Squyres: "[MTT users] Update your checkouts"</a>
<li><strong>In reply to:</strong> <a href="0059.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0064.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0064.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/29/06 8:57 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Does this apply to *all* tests, or only some of the tests (like
</span><br>
<span class="quotelev2">&gt;&gt; allgather)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All of the tests: Trivial and ibm. They all timeout :(
</span><br>
<p>Blah.  The trivial tests are simply &quot;hello world&quot;, so they should take just
<br>
about no time at all.
<br>
<p>Is this running under SLURM?  I put the code in there to know how many procs
<br>
to use in SLURM but have not tested it in eons.  I doubt that's the problem,
<br>
but that's one thing to check.
<br>
<p>Can you set a super-long timeout (e.g., a few minutes), and while one of the
<br>
trivial tests is running, do some ps's on the relevant nodes and see what,
<br>
if anything, is running?  E.g., mpirun, the test executable on the nodes,
<br>
etc.
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
<li><strong>Next message:</strong> <a href="0062.php">Jeff Squyres: "[MTT users] OMPI snapshot tarball generation"</a>
<li><strong>Previous message:</strong> <a href="0060.php">Jeff Squyres: "[MTT users] Update your checkouts"</a>
<li><strong>In reply to:</strong> <a href="0059.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0064.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0064.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
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
