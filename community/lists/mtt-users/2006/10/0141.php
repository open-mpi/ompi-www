<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 01:31:06 2006" -->
<!-- isoreceived="20061011053106" -->
<!-- sent="Tue, 10 Oct 2006 22:35:22 -0700" -->
<!-- isosent="20061011053522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests build, but do not run" -->
<!-- id="C151D0AA.2A408%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061009213909.GD53848_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-10-11 01:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0140.php">Ethan Mallove: "Re: [MTT users] Missing data"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not quite sure I understand the problem.  In each phase's section, you
<br>
are supposed to identify the one (or more) predecessor phase sections.  For
<br>
example, in MPI install phases, you specify an &quot;mpi_get&quot; field that
<br>
indicates which MPI get phases should be built with this install section:
<br>
<p>[MPI Get: foo]
<br>
...
<br>
<p>[MPI Get: bar]
<br>
....
<br>
<p>[MPI Install: whatever]
<br>
Mpi_get = foo,bar
<br>
<p>The &quot;whatever&quot; MPI install section will build both the &quot;foo&quot; and &quot;bar&quot; MPI
<br>
get sections.  This is also true with test get, build, and run phases.
<br>
<p>[Test get: foo]
<br>
...
<br>
<p>[Test build: bar]
<br>
Test_get = foo
<br>
<p>[test run: baz]
<br>
Test_build = bar
<br>
<p>These &quot;back pointer&quot; fields refer backwards to its parent/predecessor phase.
<br>
They can also be comma-delimited lists of phase names (just like the
<br>
&quot;mpi_get&quot; field in the MPI install phase) to help prevent duplication in the
<br>
ini file.
<br>
<p>So MTT does not assume or require that test get, build, and run phases all
<br>
have the same base phase name (e.g., [test get: intel], [test build: intel],
<br>
[test run: intel]).  You just have to link up names correctly with the
<br>
corresponding &quot;back pointer&quot; field names.
<br>
<p>Having said all that, does this make your problem easier?  I'm not entirely
<br>
sure I understand the problem, so I'm not entirely sure that this is the
<br>
answer.  :-)
<br>
<p><p>On 10/9/06 5:39 PM, &quot;Ethan Mallove&quot; &lt;ethan.mallove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; To answer my own question, apparently Test Get/Build/Run
</span><br>
<span class="quotelev1">&gt; section labels must indeed match up
</span><br>
<span class="quotelev1">&gt; (<a href="http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview">http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview</a>).  To
</span><br>
<span class="quotelev1">&gt; work within these confines, I am instead breaking up my ini
</span><br>
<span class="quotelev1">&gt; file into several ini files (see below), and have created a
</span><br>
<span class="quotelev1">&gt; wrapper script to cat in only the specific platform/bitness
</span><br>
<span class="quotelev1">&gt; ini files I want to test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   trunk.ini
</span><br>
<span class="quotelev1">&gt;   v1.0.ini
</span><br>
<span class="quotelev1">&gt;   v1.1.ini
</span><br>
<span class="quotelev1">&gt;   v1.2.ini
</span><br>
<span class="quotelev1">&gt;   ompi-core-template.ini
</span><br>
<span class="quotelev1">&gt;   build-intel-i386-32.ini
</span><br>
<span class="quotelev1">&gt;   build-intel-i386-64.ini
</span><br>
<span class="quotelev1">&gt;   build-intel-sparc-32.ini
</span><br>
<span class="quotelev1">&gt;   build-intel-sparc-64.ini
</span><br>
<span class="quotelev1">&gt;   mpi-install-i386-32.ini
</span><br>
<span class="quotelev1">&gt;   mpi-install-i386-64.ini
</span><br>
<span class="quotelev1">&gt;   mpi-install-sparc-32.ini
</span><br>
<span class="quotelev1">&gt;   mpi-install-sparc-64.ini
</span><br>
<span class="quotelev1">&gt;   reporter.ini
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat $mttdir/build-intel-$arch-$bit.ini &quot; \
</span><br>
<span class="quotelev1">&gt;     $mttdir/mpi-install-$arch-$bit.ini &quot; \
</span><br>
<span class="quotelev1">&gt;     $mttdir/ompi-core-template.ini &quot; \
</span><br>
<span class="quotelev1">&gt;     $mttdir/reporter.ini &quot; \
</span><br>
<span class="quotelev1">&gt;     $mttdir/$branch.ini &quot; | \
</span><br>
<span class="quotelev1">&gt; client/mtt [...] 
</span><br>
<span class="quotelev1">&gt;     --scratch ./$scratch &quot; \
</span><br>
<span class="quotelev1">&gt;     mttdatabase_platform='Sun $bit-bit' &quot; \
</span><br>
<span class="quotelev1">&gt;     mpi_get='ompi-nightly-$branch'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think things were more manageable all in one file.  I
</span><br>
<span class="quotelev1">&gt; don't suppose there's an easy way to allow this using an ini
</span><br>
<span class="quotelev1">&gt; parameter (e.g., suite_name), versus the section name after
</span><br>
<span class="quotelev1">&gt; the ':'?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Oct/09/2006 10:58:55AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; My intel tests compile okay, but then do not run.
</span><br>
<span class="quotelev2">&gt;&gt; Here's the salient --debug output:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Test build [test build: intel sparc 32]
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: intel
</span><br>
<span class="quotelev2">&gt;&gt;    Building for [ompi-nightly-v1.2] / [1.2a1r12050] /
</span><br>
<span class="quotelev2">&gt;&gt; [solaris sparc 32] / [intel sparc 32]
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: Intel_OMPI_Tests
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: tests (cwd:
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nig
</span><br>
<span class="quotelev2">&gt;&gt; htly-v1.2/solaris_sparc_32/1.2a1r12050)
</span><br>
<span class="quotelev2">&gt;&gt; tests does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: intel_sparc_32 (cwd:
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nig
</span><br>
<span class="quotelev2">&gt;&gt; htly-v1.2/solaris_sparc_32/1.2a1r12050/tests)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; OUT:[[[ END OF COMPILE ]]]
</span><br>
<span class="quotelev2">&gt;&gt; OUT:Compile complete. Log in all_tests_no_perf.12950.out
</span><br>
<span class="quotelev2">&gt;&gt; OUT:Start: Mon Oct  9 02:48:19 EDT 2006
</span><br>
<span class="quotelev2">&gt;&gt; OUT:End:   Mon Oct  9 03:05:28 EDT 2006
</span><br>
<span class="quotelev2">&gt;&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev2">&gt;&gt; Writing built file:
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nig
</span><br>
<span class="quotelev2">&gt;&gt; htly-v1.2/solaris_sparc_32/1.2a1r12050/tests/intel_sparc_32/intel_tests/test_
</span><br>
<span class="quotelev2">&gt;&gt; built.ini
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;    Completed test build successfully
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Test run [intel]
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: intel (how come no tests get run?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Test run [ibm]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this because my &quot;Test get&quot; sections do not match my &quot;Test
</span><br>
<span class="quotelev2">&gt;&gt; build&quot; and &quot;Test run&quot; sections?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [Test get: intel]
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: intel sparc 32]
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: intel sparc 64]
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: intel i386 32]
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: intel i386 64]
</span><br>
<span class="quotelev2">&gt;&gt; [Test run: intel]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If so, it might be nice to get a &quot;no match found&quot; warning
</span><br>
<span class="quotelev2">&gt;&gt; of some kind.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0140.php">Ethan Mallove: "Re: [MTT users] Missing data"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
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
