<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  9 17:39:13 2006" -->
<!-- isoreceived="20061009213913" -->
<!-- sent="Mon, 9 Oct 2006 17:39:09 -0400" -->
<!-- isosent="20061009213909" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests build, but do not run" -->
<!-- id="20061009213909.GD53848_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061009145855.GA53848_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-10-09 17:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0139.php">Ethan Mallove: "[MTT users] Missing data"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Ethan Mallove: "[MTT users] Tests build, but do not run"</a>
<li><strong>In reply to:</strong> <a href="0137.php">Ethan Mallove: "[MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To answer my own question, apparently Test Get/Build/Run
<br>
section labels must indeed match up
<br>
(<a href="http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview">http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview</a>).  To
<br>
work within these confines, I am instead breaking up my ini
<br>
file into several ini files (see below), and have created a
<br>
wrapper script to cat in only the specific platform/bitness
<br>
ini files I want to test.
<br>
<p>&nbsp;&nbsp;trunk.ini
<br>
&nbsp;&nbsp;v1.0.ini
<br>
&nbsp;&nbsp;v1.1.ini
<br>
&nbsp;&nbsp;v1.2.ini
<br>
&nbsp;&nbsp;ompi-core-template.ini
<br>
&nbsp;&nbsp;build-intel-i386-32.ini
<br>
&nbsp;&nbsp;build-intel-i386-64.ini
<br>
&nbsp;&nbsp;build-intel-sparc-32.ini
<br>
&nbsp;&nbsp;build-intel-sparc-64.ini
<br>
&nbsp;&nbsp;mpi-install-i386-32.ini
<br>
&nbsp;&nbsp;mpi-install-i386-64.ini
<br>
&nbsp;&nbsp;mpi-install-sparc-32.ini
<br>
&nbsp;&nbsp;mpi-install-sparc-64.ini
<br>
&nbsp;&nbsp;reporter.ini
<br>
<p>E.g.,
<br>
<p>cat $mttdir/build-intel-$arch-$bit.ini &quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$mttdir/mpi-install-$arch-$bit.ini &quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$mttdir/ompi-core-template.ini &quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$mttdir/reporter.ini &quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$mttdir/$branch.ini &quot; | \
<br>
client/mtt [...] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--scratch ./$scratch &quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mttdatabase_platform='Sun $bit-bit' &quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_get='ompi-nightly-$branch'
<br>
<p>I think things were more manageable all in one file.  I
<br>
don't suppose there's an easy way to allow this using an ini
<br>
parameter (e.g., suite_name), versus the section name after
<br>
the ':'?
<br>
<p>-Ethan
<br>
<p><p><p>On Mon, Oct/09/2006 10:58:55AM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; My intel tests compile okay, but then do not run.
</span><br>
<span class="quotelev1">&gt; Here's the salient --debug output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test build [test build: intel sparc 32]
</span><br>
<span class="quotelev1">&gt; Evaluating: intel
</span><br>
<span class="quotelev1">&gt;    Building for [ompi-nightly-v1.2] / [1.2a1r12050] /
</span><br>
<span class="quotelev1">&gt; [solaris sparc 32] / [intel sparc 32]
</span><br>
<span class="quotelev1">&gt; Evaluating: Intel_OMPI_Tests
</span><br>
<span class="quotelev1">&gt; Making dir: tests (cwd:
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nightly-v1.2/solaris_sparc_32/1.2a1r12050)
</span><br>
<span class="quotelev1">&gt; tests does not exist -- creating
</span><br>
<span class="quotelev1">&gt; Making dir: intel_sparc_32 (cwd:
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nightly-v1.2/solaris_sparc_32/1.2a1r12050/tests)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; OUT:[[[ END OF COMPILE ]]]
</span><br>
<span class="quotelev1">&gt; OUT:Compile complete. Log in all_tests_no_perf.12950.out
</span><br>
<span class="quotelev1">&gt; OUT:Start: Mon Oct  9 02:48:19 EDT 2006
</span><br>
<span class="quotelev1">&gt; OUT:End:   Mon Oct  9 03:05:28 EDT 2006
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Writing built file:
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nightly-v1.2/solaris_sparc_32/1.2a1r12050/tests/intel_sparc_32/intel_tests/test_built.ini
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    Completed test build successfully
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test run [intel]
</span><br>
<span class="quotelev1">&gt; Evaluating: intel (how come no tests get run?)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test run [ibm]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this because my &quot;Test get&quot; sections do not match my &quot;Test
</span><br>
<span class="quotelev1">&gt; build&quot; and &quot;Test run&quot; sections?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: intel]
</span><br>
<span class="quotelev1">&gt; [Test build: intel sparc 32]
</span><br>
<span class="quotelev1">&gt; [Test build: intel sparc 64]
</span><br>
<span class="quotelev1">&gt; [Test build: intel i386 32]
</span><br>
<span class="quotelev1">&gt; [Test build: intel i386 64]
</span><br>
<span class="quotelev1">&gt; [Test run: intel]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, it might be nice to get a &quot;no match found&quot; warning
</span><br>
<span class="quotelev1">&gt; of some kind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0139.php">Ethan Mallove: "[MTT users] Missing data"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Ethan Mallove: "[MTT users] Tests build, but do not run"</a>
<li><strong>In reply to:</strong> <a href="0137.php">Ethan Mallove: "[MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
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
