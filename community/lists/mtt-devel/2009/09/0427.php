<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 14:10:18 2009" -->
<!-- isoreceived="20090908181018" -->
<!-- sent="Tue, 8 Sep 2009 14:10:09 -0400" -->
<!-- isosent="20090908181009" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1314" -->
<!-- id="20090908181009.GC34883_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200909081343.n88DhbnO029225_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2009-09-08 14:10:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/08/0426.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Reply:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>What if argv contains a funclet, e.g.,
<br>
<p>&nbsp;&nbsp;argv = &amp;foo()
<br>
<p>Won't this change prevent it from getting expanded?
<br>
<p>-Ethan
<br>
<p><p>On Tue, Sep/08/2009 09:43:37AM, miked_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2009-09-08 09:43:37 EDT (Tue, 08 Sep 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1314
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1314">https://svn.open-mpi.org/trac/mtt/changeset/1314</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &amp;test_np() can return incorrect value if used inside argv, here is a scenario:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This behavior can be explained in next words as evaluation &amp;np_test()
</span><br>
<span class="quotelev1">&gt; returns uninitialized $MTT::Test::Run::test_np that is initialized later in _run_one_np function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a result using
</span><br>
<span class="quotelev1">&gt; $MTT::Test::Run::test_argv = $run-&gt;{argv};
</span><br>
<span class="quotelev1">&gt; allows to avoid damaging $MTT::Test::Run::test_argv  variable on current step but evaluation of &amp;test_np() is done with whole command_line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/RunEngine.pm |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/RunEngine.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/RunEngine.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/RunEngine.pm	2009-09-08 09:43:37 EDT (Tue, 08 Sep 2009)
</span><br>
<span class="quotelev1">&gt; @@ -191,7 +191,7 @@
</span><br>
<span class="quotelev1">&gt;          $MTT::Test::Run::test_executable_abspath = $test_exe_abs;
</span><br>
<span class="quotelev1">&gt;          $MTT::Test::Run::test_executable_basename = $test_exe_basename;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -        $MTT::Test::Run::test_argv = MTT::Values::EvaluateString($run-&gt;{argv}, $ini, $test_run_full_name);
</span><br>
<span class="quotelev1">&gt; +        $MTT::Test::Run::test_argv = $run-&gt;{argv};
</span><br>
<span class="quotelev1">&gt;          my $all_np = MTT::Values::EvaluateString($run-&gt;{np}, $ini, $test_run_full_name);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          my $save_run_mpi_details = $MTT::Test::Run::mpi_details;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/08/0426.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
<li><strong>Reply:</strong> <a href="0428.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1314"</a>
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
