<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 14:34:36 2006" -->
<!-- isoreceived="20061011183436" -->
<!-- sent="Wed, 11 Oct 2006 14:34:33 -0400" -->
<!-- isosent="20061011183433" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests build, but do not run" -->
<!-- id="20061011183432.GD39581_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C151D0AA.2A408%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-11 14:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0143.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>In reply to:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0143.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0143.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct/10/2006 10:35:22PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm not quite sure I understand the problem.  In each phase's section, you
</span><br>
<span class="quotelev1">&gt; are supposed to identify the one (or more) predecessor phase sections.  For
</span><br>
<span class="quotelev1">&gt; example, in MPI install phases, you specify an &quot;mpi_get&quot; field that
</span><br>
<span class="quotelev1">&gt; indicates which MPI get phases should be built with this install section:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Get: foo]
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Get: bar]
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Install: whatever]
</span><br>
<span class="quotelev1">&gt; Mpi_get = foo,bar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;whatever&quot; MPI install section will build both the &quot;foo&quot; and &quot;bar&quot; MPI
</span><br>
<span class="quotelev1">&gt; get sections.  This is also true with test get, build, and run phases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: foo]
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: bar]
</span><br>
<span class="quotelev1">&gt; Test_get = foo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [test run: baz]
</span><br>
<span class="quotelev1">&gt; Test_build = bar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These &quot;back pointer&quot; fields refer backwards to its parent/predecessor phase.
</span><br>
<span class="quotelev1">&gt; They can also be comma-delimited lists of phase names (just like the
</span><br>
<span class="quotelev1">&gt; &quot;mpi_get&quot; field in the MPI install phase) to help prevent duplication in the
</span><br>
<span class="quotelev1">&gt; ini file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So MTT does not assume or require that test get, build, and run phases all
</span><br>
<span class="quotelev1">&gt; have the same base phase name (e.g., [test get: intel], [test build: intel],
</span><br>
<span class="quotelev1">&gt; [test run: intel]).  You just have to link up names correctly with the
</span><br>
<span class="quotelev1">&gt; corresponding &quot;back pointer&quot; field names.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having said all that, does this make your problem easier?  I'm not entirely
</span><br>
<span class="quotelev1">&gt; sure I understand the problem, so I'm not entirely sure that this is the
</span><br>
<span class="quotelev1">&gt; answer.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/9/06 5:39 PM, &quot;Ethan Mallove&quot; &lt;ethan.mallove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To answer my own question, apparently Test Get/Build/Run
</span><br>
<span class="quotelev2">&gt; &gt; section labels must indeed match up
</span><br>
<span class="quotelev2">&gt; &gt; (<a href="http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview">http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview</a>).  To
</span><br>
<span class="quotelev2">&gt; &gt; work within these confines, I am instead breaking up my ini
</span><br>
<span class="quotelev2">&gt; &gt; file into several ini files (see below), and have created a
</span><br>
<span class="quotelev2">&gt; &gt; wrapper script to cat in only the specific platform/bitness
</span><br>
<span class="quotelev2">&gt; &gt; ini files I want to test.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   trunk.ini
</span><br>
<span class="quotelev2">&gt; &gt;   v1.0.ini
</span><br>
<span class="quotelev2">&gt; &gt;   v1.1.ini
</span><br>
<span class="quotelev2">&gt; &gt;   v1.2.ini
</span><br>
<span class="quotelev2">&gt; &gt;   ompi-core-template.ini
</span><br>
<span class="quotelev2">&gt; &gt;   build-intel-i386-32.ini
</span><br>
<span class="quotelev2">&gt; &gt;   build-intel-i386-64.ini
</span><br>
<span class="quotelev2">&gt; &gt;   build-intel-sparc-32.ini
</span><br>
<span class="quotelev2">&gt; &gt;   build-intel-sparc-64.ini
</span><br>
<span class="quotelev2">&gt; &gt;   mpi-install-i386-32.ini
</span><br>
<span class="quotelev2">&gt; &gt;   mpi-install-i386-64.ini
</span><br>
<span class="quotelev2">&gt; &gt;   mpi-install-sparc-32.ini
</span><br>
<span class="quotelev2">&gt; &gt;   mpi-install-sparc-64.ini
</span><br>
<span class="quotelev2">&gt; &gt;   reporter.ini
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; E.g.,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; cat $mttdir/build-intel-$arch-$bit.ini &quot; \
</span><br>
<span class="quotelev2">&gt; &gt;     $mttdir/mpi-install-$arch-$bit.ini &quot; \
</span><br>
<span class="quotelev2">&gt; &gt;     $mttdir/ompi-core-template.ini &quot; \
</span><br>
<span class="quotelev2">&gt; &gt;     $mttdir/reporter.ini &quot; \
</span><br>
<span class="quotelev2">&gt; &gt;     $mttdir/$branch.ini &quot; | \
</span><br>
<span class="quotelev2">&gt; &gt; client/mtt [...] 
</span><br>
<span class="quotelev2">&gt; &gt;     --scratch ./$scratch &quot; \
</span><br>
<span class="quotelev2">&gt; &gt;     mttdatabase_platform='Sun $bit-bit' &quot; \
</span><br>
<span class="quotelev2">&gt; &gt;     mpi_get='ompi-nightly-$branch'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think things were more manageable all in one file.  I
</span><br>
<span class="quotelev2">&gt; &gt; don't suppose there's an easy way to allow this using an ini
</span><br>
<span class="quotelev2">&gt; &gt; parameter (e.g., suite_name), versus the section name after
</span><br>
<span class="quotelev2">&gt; &gt; the ':'?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Oct/09/2006 10:58:55AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My intel tests compile okay, but then do not run.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here's the salient --debug output:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Test build [test build: intel sparc 32]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Evaluating: intel
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Building for [ompi-nightly-v1.2] / [1.2a1r12050] /
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [solaris sparc 32] / [intel sparc 32]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Evaluating: Intel_OMPI_Tests
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Making dir: tests (cwd:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nig
</span><br>
<span class="quotelev3">&gt; &gt;&gt; htly-v1.2/solaris_sparc_32/1.2a1r12050)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tests does not exist -- creating
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Making dir: intel_sparc_32 (cwd:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nig
</span><br>
<span class="quotelev3">&gt; &gt;&gt; htly-v1.2/solaris_sparc_32/1.2a1r12050/tests)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OUT:[[[ END OF COMPILE ]]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OUT:Compile complete. Log in all_tests_no_perf.12950.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OUT:Start: Mon Oct  9 02:48:19 EDT 2006
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OUT:End:   Mon Oct  9 03:05:28 EDT 2006
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Writing built file:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/installs/ompi-nig
</span><br>
<span class="quotelev3">&gt; &gt;&gt; htly-v1.2/solaris_sparc_32/1.2a1r12050/tests/intel_sparc_32/intel_tests/test_
</span><br>
<span class="quotelev3">&gt; &gt;&gt; built.ini
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Completed test build successfully
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Test run [intel]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Evaluating: intel (how come no tests get run?)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Test run [ibm]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is this because my &quot;Test get&quot; sections do not match my &quot;Test
</span><br>
<span class="quotelev3">&gt; &gt;&gt; build&quot; and &quot;Test run&quot; sections?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Test get: intel]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Test build: intel sparc 32]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Test build: intel sparc 64]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Test build: intel i386 32]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Test build: intel i386 64]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Test run: intel]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<p>So if I do put the four combinations of platform/bitness in
<br>
a single ini file, I then have to do some ugly ini param
<br>
overriding to line up the sections, e.g.,:
<br>
<p>Command 1)
<br>
<p>$ cat /home/em162155/mtt/all.ini |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;client/mtt  -p -d -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_get='ompi-nightly-trunk'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;intel:test_build='intel $arch $bit'&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;imb:test_build='imb $arch $bit'&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ibm:test_build='ibm $arch $bit'&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;trivial:test_build='trivial $arch $bit'&quot;
<br>
<p>I was thinking it would be nice if I could do something
<br>
like this in my ini:
<br>
<p>[Test get: intel all]
<br>
suite_name = intel
<br>
[Test build: intel sparc 32]
<br>
suite_name = intel
<br>
[Test build: intel sparc 64]
<br>
suite_name = intel
<br>
[Test build: intel i386 32]
<br>
suite_name = intel
<br>
[Test build: intel i386 64]
<br>
suite_name = intel
<br>
[Test run: intel all]
<br>
suite_name = intel
<br>
<p>Then the get/build/run phase are linked by a generic
<br>
suite_name, and the following simpler command has the same
<br>
effect as &quot;Command 1&quot;:
<br>
<p>Command 2)
<br>
<p>$ cat /home/em162155/mtt/all.ini |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;client/mtt -p -d -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_get='ompi-nightly-trunk'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--section $arch;$bit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--section all
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev3">&gt; &gt;&gt; If so, it might be nice to get a &quot;no match found&quot; warning
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of some kind.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0143.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>In reply to:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0143.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0143.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
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
