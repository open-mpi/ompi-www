<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 11:35:28 2009" -->
<!-- isoreceived="20090909153528" -->
<!-- sent="Wed, 9 Sep 2009 11:35:23 -0400" -->
<!-- isosent="20090909153523" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1314" -->
<!-- id="20090909153522.GD34883_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b20b52800909090030v7eb0c246jdf8fc2d5d49d58be_at_mail.gmail.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 11:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0430.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Previous message:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>In reply to:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0430.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Reply:</strong> <a href="0430.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep/09/2009 10:30:44AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;    Hey Eytan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    It seems argv is participating in the following scenarios:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. argv should be defined in mtt.ini for every single [Test Run] section
</span><br>
<span class="quotelev1">&gt;    2. Currently, &amp;test_argv() is returing un-evaluated argv`s value
</span><br>
<span class="quotelev1">&gt;    3. &amp;test_argv() is usually part of &quot;exec=&quot; parameter line of [MPI
</span><br>
<span class="quotelev1">&gt;    Details], which is evaluated for very test invocation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpiexec @options@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    According to analysis above, if argv contains funclets or variables, they
</span><br>
<span class="quotelev1">&gt;    will get expanded during &quot;exec&quot; line evaluation.
</span><br>
<p>Okay, so we delay the evaluation of &quot;argv&quot; to when &quot;exec&quot; is
<br>
evaluated. The error case is:
<br>
<p>&nbsp;&nbsp;argv = &amp;test_np()
<br>
<p>Before fix:
<br>
<p>&nbsp;&nbsp;argv is undefined
<br>
<p>After fix:
<br>
<p>&nbsp;&nbsp;argv is the value of &amp;test_np()
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Tue, Sep 8, 2009 at 9:10 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Mike,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      What if argv contains a funclet, e.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      *argv = &amp;foo()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Won't this change prevent it from getting expanded?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Tue, Sep/08/2009 09:43:37AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;      &gt; Author: miked
</span><br>
<span class="quotelev2">&gt;      &gt; Date: 2009-09-08 09:43:37 EDT (Tue, 08 Sep 2009)
</span><br>
<span class="quotelev2">&gt;      &gt; New Revision: 1314
</span><br>
<span class="quotelev2">&gt;      &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1314">https://svn.open-mpi.org/trac/mtt/changeset/1314</a>
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Log:
</span><br>
<span class="quotelev2">&gt;      &gt; fix:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; &amp;test_np() can return incorrect value if used inside argv, here is a
</span><br>
<span class="quotelev1">&gt;      scenario:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; This behavior can be explained in next words as evaluation &amp;np_test()
</span><br>
<span class="quotelev2">&gt;      &gt; returns uninitialized $MTT::Test::Run::test_np that is initialized
</span><br>
<span class="quotelev1">&gt;      later in _run_one_np function.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; As a result using
</span><br>
<span class="quotelev2">&gt;      &gt; $MTT::Test::Run::test_argv = $run-&gt;{argv};
</span><br>
<span class="quotelev2">&gt;      &gt; allows to avoid damaging $MTT::Test::Run::test_argv *variable on
</span><br>
<span class="quotelev1">&gt;      current step but evaluation of &amp;test_np() is done with whole
</span><br>
<span class="quotelev1">&gt;      command_line.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;      &gt; * *trunk/lib/MTT/Test/RunEngine.pm | * * 2 +-
</span><br>
<span class="quotelev2">&gt;      &gt; * *1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Modified: trunk/lib/MTT/Test/RunEngine.pm
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev1">&gt;      ==============================================================================
</span><br>
<span class="quotelev2">&gt;      &gt; --- trunk/lib/MTT/Test/RunEngine.pm * (original)
</span><br>
<span class="quotelev2">&gt;      &gt; +++ trunk/lib/MTT/Test/RunEngine.pm * 2009-09-08 09:43:37 EDT (Tue, 08
</span><br>
<span class="quotelev1">&gt;      Sep 2009)
</span><br>
<span class="quotelev2">&gt;      &gt; @@ -191,7 +191,7 @@
</span><br>
<span class="quotelev2">&gt;      &gt; * * * * *$MTT::Test::Run::test_executable_abspath = $test_exe_abs;
</span><br>
<span class="quotelev2">&gt;      &gt; * * * * *$MTT::Test::Run::test_executable_basename =
</span><br>
<span class="quotelev1">&gt;      $test_exe_basename;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; - * * * *$MTT::Test::Run::test_argv =
</span><br>
<span class="quotelev1">&gt;      MTT::Values::EvaluateString($run-&gt;{argv}, $ini, $test_run_full_name);
</span><br>
<span class="quotelev2">&gt;      &gt; + * * * *$MTT::Test::Run::test_argv = $run-&gt;{argv};
</span><br>
<span class="quotelev2">&gt;      &gt; * * * * *my $all_np = MTT::Values::EvaluateString($run-&gt;{np}, $ini,
</span><br>
<span class="quotelev1">&gt;      $test_run_full_name);
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; * * * * *my $save_run_mpi_details = $MTT::Test::Run::mpi_details;
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt;      mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Visible links
</span><br>
<span class="quotelev1">&gt;    . mailto:ethan.mallove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . mailto:miked_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="https://svn.open-mpi.org/trac/mtt/changeset/1314">https://svn.open-mpi.org/trac/mtt/changeset/1314</a>
</span><br>
<span class="quotelev1">&gt;    . mailto:mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;    . mailto:mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0430.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Previous message:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>In reply to:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0430.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Reply:</strong> <a href="0430.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
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
