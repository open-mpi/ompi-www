<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 03:30:49 2009" -->
<!-- isoreceived="20090909073049" -->
<!-- sent="Wed, 9 Sep 2009 10:30:44 +0300" -->
<!-- isosent="20090909073044" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1314" -->
<!-- id="b20b52800909090030v7eb0c246jdf8fc2d5d49d58be_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090908181009.GC34883_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1314<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 03:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Reply:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Eytan,
<br>
<p>It seems argv is participating in the following scenarios:
<br>
<p><p>1. argv should be defined in mtt.ini for every single [Test Run] section
<br>
2. Currently, &amp;test_argv() is returing un-evaluated argv`s value
<br>
3. &amp;test_argv() is usually part of &quot;exec=&quot; parameter line of [MPI Details],
<br>
which is evaluated for very test invocation:
<br>
<p>mpiexec @options@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
<br>
<p><p>According to analysis above, if argv contains funclets or variables, they
<br>
will get expanded during &quot;exec&quot; line evaluation.
<br>
<p>regards
<br>
<p>Mike
<br>
<p>On Tue, Sep 8, 2009 at 9:10 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What if argv contains a funclet, e.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  argv = &amp;foo()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Won't this change prevent it from getting expanded?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep/08/2009 09:43:37AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2009-09-08 09:43:37 EDT (Tue, 08 Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1314
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1314">https://svn.open-mpi.org/trac/mtt/changeset/1314</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; fix:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &amp;test_np() can return incorrect value if used inside argv, here is a
</span><br>
<span class="quotelev1">&gt; scenario:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This behavior can be explained in next words as evaluation &amp;np_test()
</span><br>
<span class="quotelev2">&gt; &gt; returns uninitialized $MTT::Test::Run::test_np that is initialized later
</span><br>
<span class="quotelev1">&gt; in _run_one_np function.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As a result using
</span><br>
<span class="quotelev2">&gt; &gt; $MTT::Test::Run::test_argv = $run-&gt;{argv};
</span><br>
<span class="quotelev2">&gt; &gt; allows to avoid damaging $MTT::Test::Run::test_argv  variable on current
</span><br>
<span class="quotelev1">&gt; step but evaluation of &amp;test_np() is done with whole command_line.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/lib/MTT/Test/RunEngine.pm |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Test/RunEngine.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Test/RunEngine.pm   (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Test/RunEngine.pm   2009-09-08 09:43:37 EDT (Tue, 08
</span><br>
<span class="quotelev1">&gt; Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -191,7 +191,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;          $MTT::Test::Run::test_executable_abspath = $test_exe_abs;
</span><br>
<span class="quotelev2">&gt; &gt;          $MTT::Test::Run::test_executable_basename = $test_exe_basename;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        $MTT::Test::Run::test_argv =
</span><br>
<span class="quotelev1">&gt; MTT::Values::EvaluateString($run-&gt;{argv}, $ini, $test_run_full_name);
</span><br>
<span class="quotelev2">&gt; &gt; +        $MTT::Test::Run::test_argv = $run-&gt;{argv};
</span><br>
<span class="quotelev2">&gt; &gt;          my $all_np = MTT::Values::EvaluateString($run-&gt;{np}, $ini,
</span><br>
<span class="quotelev1">&gt; $test_run_full_name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          my $save_run_mpi_details = $MTT::Test::Run::mpi_details;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Reply:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
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
