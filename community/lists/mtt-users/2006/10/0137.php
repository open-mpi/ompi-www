<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  9 10:58:59 2006" -->
<!-- isoreceived="20061009145859" -->
<!-- sent="Mon, 9 Oct 2006 10:58:55 -0400" -->
<!-- isosent="20061009145855" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] Tests build, but do not run" -->
<!-- id="20061009145855.GA53848_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="066.73cec78e0779f7f866650c97f1e89e2c_at_open-mpi.org" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-09 10:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0136.php">Jeff Squyres: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Maybe reply:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My intel tests compile okay, but then do not run.
<br>
Here's the salient --debug output:
<br>
<p>...
<br>
<span class="quotelev2">&gt;&gt; Test build [test build: intel sparc 32]
</span><br>
Evaluating: intel
<br>
&nbsp;&nbsp;&nbsp;Building for [ompi-nightly-v1.2] / [1.2a1r12050] /
<br>
[solaris sparc 32] / [intel sparc 32]
<br>
Evaluating: Intel_OMPI_Tests
<br>
Making dir: tests (cwd:
<br>
/workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nightly-v1.2/solaris_sparc_32/1.2a1r12050)
<br>
tests does not exist -- creating
<br>
Making dir: intel_sparc_32 (cwd:
<br>
/workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nightly-v1.2/solaris_sparc_32/1.2a1r12050/tests)
<br>
<p>...
<br>
OUT:[[[ END OF COMPILE ]]]
<br>
OUT:Compile complete. Log in all_tests_no_perf.12950.out
<br>
OUT:Start: Mon Oct  9 02:48:19 EDT 2006
<br>
OUT:End:   Mon Oct  9 03:05:28 EDT 2006
<br>
Command complete, exit status: 0
<br>
Writing built file:
<br>
/workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nightly-v1.2/solaris_sparc_32/1.2a1r12050/tests/intel_sparc_32/intel_tests/test_built.ini
<br>
...
<br>
&nbsp;&nbsp;&nbsp;Completed test build successfully
<br>
...
<br>
<span class="quotelev2">&gt;&gt; Test run [intel]
</span><br>
Evaluating: intel (how come no tests get run?)
<br>
<span class="quotelev2">&gt;&gt; Test run [ibm]
</span><br>
<p>Is this because my &quot;Test get&quot; sections do not match my &quot;Test
<br>
build&quot; and &quot;Test run&quot; sections?
<br>
<p>[Test get: intel]
<br>
[Test build: intel sparc 32]
<br>
[Test build: intel sparc 64]
<br>
[Test build: intel i386 32]
<br>
[Test build: intel i386 64]
<br>
[Test run: intel]
<br>
<p>If so, it might be nice to get a &quot;no match found&quot; warning
<br>
of some kind.
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0136.php">Jeff Squyres: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Maybe reply:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
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
