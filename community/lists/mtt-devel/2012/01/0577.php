<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 08:11:08 2012" -->
<!-- isoreceived="20120125131108" -->
<!-- sent="Wed, 25 Jan 2012 08:11:03 -0500" -->
<!-- isosent="20120125131103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1433" -->
<!-- id="D05AAFB3-CCEB-4DBD-8727-8C649ED86F1A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201201251102.q0PB2npR003828_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1433<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 08:11:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>Previous message:</strong> <a href="0576.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>Reply:</strong> <a href="0578.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yummy -- thanks Mike!
<br>
<p>Can you add this field (and any others you have added) to the wiki?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/wiki/MTTINIFileFields">https://svn.open-mpi.org/trac/mtt/wiki/MTTINIFileFields</a>
<br>
<p>This is our *only* documentation; it's important to keep it up to date.
<br>
<p>Thanks!
<br>
<p><p>On Jan 25, 2012, at 6:02 AM, miked_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 1433
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1433">https://svn.open-mpi.org/trac/mtt/changeset/1433</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; * Introduce mtt.break_threshold_timeout_and_fail ini param to specify % of overall failed tests to trigger stop execution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Reporter/TextFile.pm |     9 ++++-                                   
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Test/Run.pm          |    30 ++++++++++++++++----                    
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Test/RunEngine.pm    |    60 +++++++++++++++++++++++++++++++-------- 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Util.pm              |     6 ++++                                    
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Values.pm            |     3 +                                       
</span><br>
<span class="quotelev1">&gt;   5 files changed, 86 insertions(+), 22 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Reporter/TextFile.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Reporter/TextFile.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Reporter/TextFile.pm	2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev1">&gt; @@ -230,8 +230,13 @@
</span><br>
<span class="quotelev1">&gt;     my $filename = &quot;All_phase-summary.txt&quot;;
</span><br>
<span class="quotelev1">&gt;     my $file = &quot;$dirname/&quot; . MTT::Files::make_safe_filename(&quot;$filename&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    my $body = join(&quot;\n&quot;, ($summary_header, $table-&gt;render, $perf_stat, $summary_footer));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    my $body;
</span><br>
<span class="quotelev1">&gt; +    if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold}){
</span><br>
<span class="quotelev1">&gt; +        $body = join(&quot;\n&quot;, ($summary_header, $table-&gt;render, $perf_stat, $MTT::Globals::Internals-&gt;{stopped_on_break_threshold_message}, $summary_footer));
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    else{
</span><br>
<span class="quotelev1">&gt; +        $body = join(&quot;\n&quot;, ($summary_header, $table-&gt;render, $perf_stat, $summary_footer));
</span><br>
<span class="quotelev1">&gt; +    }   
</span><br>
<span class="quotelev1">&gt;     print $body;
</span><br>
<span class="quotelev1">&gt;     _output_results($file, $body);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Run.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Run.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Run.pm	2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev1">&gt; @@ -64,8 +64,11 @@
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sub Run {
</span><br>
<span class="quotelev1">&gt; -    my ($ini, $ini_full, $install_dir, $runs_data_dir, $force) = @_;
</span><br>
<span class="quotelev1">&gt; +    my ($ini, $ini_full, $install_dir, $runs_data_dir, $force, $count_total_tests_number) = @_;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    if ($count_total_tests_number ne &quot;yes&quot;){
</span><br>
<span class="quotelev1">&gt; +        Run($ini, $ini_full, $install_dir, $runs_data_dir, $force,&quot;yes&quot;);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;     # Save the environment
</span><br>
<span class="quotelev1">&gt;     my %ENV_SAVE = %ENV;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -188,7 +191,7 @@
</span><br>
<span class="quotelev1">&gt;                                     _do_run($ini, $section, $test_build, 
</span><br>
<span class="quotelev1">&gt;                                             $mpi_get, $mpi_install,
</span><br>
<span class="quotelev1">&gt;                                             $install_dir, $runs_data_dir, 
</span><br>
<span class="quotelev1">&gt; -                                            $force);
</span><br>
<span class="quotelev1">&gt; +                                            $force,$count_total_tests_number);
</span><br>
<span class="quotelev1">&gt;                                     delete $MTT::Globals::Internals-&gt;{mpi_get_name};
</span><br>
<span class="quotelev1">&gt;                                     delete $MTT::Globals::Internals-&gt;{mpi_install_name};
</span><br>
<span class="quotelev1">&gt;                                     delete $MTT::Globals::Internals-&gt;{test_get_name};
</span><br>
<span class="quotelev1">&gt; @@ -196,12 +199,24 @@
</span><br>
<span class="quotelev1">&gt;                                     delete $MTT::Globals::Internals-&gt;{test_run_name};
</span><br>
<span class="quotelev1">&gt;                                     %ENV = %ENV_SAVE;
</span><br>
<span class="quotelev1">&gt;                                 }
</span><br>
<span class="quotelev1">&gt; +                                last
</span><br>
<span class="quotelev1">&gt; +                                if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev1">&gt;                             }
</span><br>
<span class="quotelev1">&gt; +                            last
</span><br>
<span class="quotelev1">&gt; +                            if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt; +                        last
</span><br>
<span class="quotelev1">&gt; +                        if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev1">&gt;                     }                        
</span><br>
<span class="quotelev1">&gt; +                    last
</span><br>
<span class="quotelev1">&gt; +                    if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; +                last
</span><br>
<span class="quotelev1">&gt; +                if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +        last
</span><br>
<span class="quotelev1">&gt; +        if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Verbose(&quot;*** Run test phase complete\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -211,7 +226,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sub _do_run {
</span><br>
<span class="quotelev1">&gt;     my ($ini, $section, $test_build, $mpi_get, $mpi_install, $install_dir, 
</span><br>
<span class="quotelev1">&gt; -        $runs_data_dir, $force) = @_;
</span><br>
<span class="quotelev1">&gt; +        $runs_data_dir, $force, $count_total_tests_number) = @_;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Simple section name
</span><br>
<span class="quotelev1">&gt;     my $simple_section = GetSimpleSection($section);
</span><br>
<span class="quotelev1">&gt; @@ -528,9 +543,13 @@
</span><br>
<span class="quotelev1">&gt;     # If we got a list of tests to run, invoke the run engine to
</span><br>
<span class="quotelev1">&gt;     # actually run them.
</span><br>
<span class="quotelev1">&gt;     if ($ret &amp;&amp; $ret-&gt;{test_result}) {
</span><br>
<span class="quotelev1">&gt; -        MTT::Test::RunEngine::RunEngine($ini, $section, $install_dir, 
</span><br>
<span class="quotelev1">&gt; +        my $return_value;
</span><br>
<span class="quotelev1">&gt; +        $return_value = MTT::Test::RunEngine::RunEngine($ini, $section, $install_dir, 
</span><br>
<span class="quotelev1">&gt;                                         $runs_data_dir, $mpi_details,
</span><br>
<span class="quotelev1">&gt; -                                        $test_build, $force, $ret);
</span><br>
<span class="quotelev1">&gt; +                                        $test_build, $force, $ret, $count_total_tests_number);
</span><br>
<span class="quotelev1">&gt; +        if ($count_total_tests_number eq &quot;yes&quot;){
</span><br>
<span class="quotelev1">&gt; +            $MTT::Globals::Internals-&gt;{total_tests_counter} += $return_value;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Unload any loaded environment modules
</span><br>
<span class="quotelev1">&gt; @@ -545,7 +564,6 @@
</span><br>
<span class="quotelev1">&gt;         # means reverting to an env snapshot.
</span><br>
<span class="quotelev1">&gt;         MTT::EnvImporter::unload(reverse @env_importers);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/RunEngine.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/RunEngine.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/RunEngine.pm	2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev1">&gt; @@ -38,10 +38,14 @@
</span><br>
<span class="quotelev1">&gt; my $section;
</span><br>
<span class="quotelev1">&gt; my $mpi_details_name;
</span><br>
<span class="quotelev1">&gt; my $test_run_full_name;
</span><br>
<span class="quotelev1">&gt; +my $break_threshold;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Keep track of how many tests have passed, failed, skipped, and timed out
</span><br>
<span class="quotelev1">&gt; my $test_results_count;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#same as test_results_count but global over all envokations of RunEngine
</span><br>
<span class="quotelev1">&gt; +my $test_results_count_global;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; # Submit results after each run or after *all* the runs
</span><br>
<span class="quotelev1">&gt; my $report_after_each_result = 0;
</span><br>
<span class="quotelev1">&gt; my $report_results_count = 0;
</span><br>
<span class="quotelev1">&gt; @@ -56,7 +60,7 @@
</span><br>
<span class="quotelev1">&gt;     my ($install_dir, $runs_data_dir, $mpi_details, $test_build, $force, $ret);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Make sure though, that the $ini remains a global
</span><br>
<span class="quotelev1">&gt; -    ($ini, $section, $install_dir, $runs_data_dir, $mpi_details, $test_build, $force, $ret) = @_;
</span><br>
<span class="quotelev1">&gt; +    ($ini, $section, $install_dir, $runs_data_dir, $mpi_details, $test_build, $force, $ret, my $count_total_tests_number) = @_;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     my $test_results;
</span><br>
<span class="quotelev1">&gt;     $group_reports = MTT::Values::Value($ini, &quot;mtt&quot;, &quot;submit_group_results&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -81,12 +85,16 @@
</span><br>
<span class="quotelev1">&gt;     my $variants_count_total =
</span><br>
<span class="quotelev1">&gt;         $test_count_total * $np_count_total * $argv_count_total * $exec_count_total;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    if ($count_total_tests_number eq &quot;yes&quot;){
</span><br>
<span class="quotelev1">&gt; +        return $variants_count_total;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;     # Set some thresholds for an early exit
</span><br>
<span class="quotelev1">&gt; -    my $break_threshold;
</span><br>
<span class="quotelev1">&gt; +    $break_threshold = undef;
</span><br>
<span class="quotelev1">&gt;     $break_threshold-&gt;{MTT::Values::PASS}      = Value($ini, $section, &quot;break_threshold_pass&quot;);
</span><br>
<span class="quotelev1">&gt;     $break_threshold-&gt;{MTT::Values::FAIL}      = Value($ini, $section, &quot;break_threshold_fail&quot;);
</span><br>
<span class="quotelev1">&gt;     $break_threshold-&gt;{MTT::Values::TIMED_OUT} = Value($ini, $section, &quot;break_threshold_timeout&quot;);
</span><br>
<span class="quotelev1">&gt;     $break_threshold-&gt;{MTT::Values::SKIPPED}   = Value($ini, $section, &quot;break_threshold_skipped&quot;);
</span><br>
<span class="quotelev1">&gt; +    $break_threshold-&gt;{MTT::Values::TIMED_OUT_OR_FAIL} = Value($ini, &quot;mtt&quot;, &quot;break_threshold_timeout_and_fail&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # This boolean value defaults to 0, and allows the user to submit results
</span><br>
<span class="quotelev1">&gt;     # after each test to ensure at least *some* results are submitted (in case
</span><br>
<span class="quotelev1">&gt; @@ -208,25 +216,29 @@
</span><br>
<span class="quotelev1">&gt;             $run-&gt;{wdir} = $wdir;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         # Just one np, or an array of np values?
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         if (ref($all_np) eq &quot;&quot;) {
</span><br>
<span class="quotelev1">&gt; -            $test_results-&gt;{$all_np} =
</span><br>
<span class="quotelev1">&gt; -                _run_one_np($install_dir, $run, $mpi_details, $all_np, $force);
</span><br>
<span class="quotelev1">&gt; +            $test_results-&gt;{$all_np} = _run_one_np($install_dir, $run, $mpi_details, $all_np, $force);
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt;             foreach my $this_np (@$all_np) {
</span><br>
<span class="quotelev1">&gt;                 # See if we're supposed to terminate.
</span><br>
<span class="quotelev1">&gt;                 last
</span><br>
<span class="quotelev1">&gt; -                    if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt; +                   if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                $test_results-&gt;{$all_np} = _run_one_np($install_dir, $run, $mpi_details, $this_np,$force);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -                $test_results-&gt;{$this_np} =
</span><br>
<span class="quotelev1">&gt; -                    _run_one_np($install_dir, $run, $mpi_details, $this_np,
</span><br>
<span class="quotelev1">&gt; -                                $force);
</span><br>
<span class="quotelev1">&gt; +                last
</span><br>
<span class="quotelev1">&gt; +                   if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        last
</span><br>
<span class="quotelev1">&gt; +           if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev1">&gt;         ++$test_count;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         # Write out the &quot;to be saved&quot; test run results
</span><br>
<span class="quotelev1">&gt;         MTT::Test::SaveRuns($runs_data_dir);
</span><br>
<span class="quotelev1">&gt; -        
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         $MTT::Test::Run::mpi_details = $save_run_mpi_details;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         # Output a progress bar
</span><br>
<span class="quotelev1">&gt; @@ -247,6 +259,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MTT::Reporter::QueueSubmit();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sub _run_one_np {
</span><br>
<span class="quotelev1">&gt; @@ -290,16 +303,30 @@
</span><br>
<span class="quotelev1">&gt;                 foreach my $e (@$execs) {
</span><br>
<span class="quotelev1">&gt;                     # See if we're supposed to terminate.
</span><br>
<span class="quotelev1">&gt;                     last
</span><br>
<span class="quotelev1">&gt; -                        if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt; +                    if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt; +                    
</span><br>
<span class="quotelev1">&gt;                     _run_one_test($install_dir, $run, $mpi_details, $e, $name,
</span><br>
<span class="quotelev1">&gt; -                                  $variant++, $force);
</span><br>
<span class="quotelev1">&gt; +                        $variant++, $force);
</span><br>
<span class="quotelev1">&gt; +                    
</span><br>
<span class="quotelev1">&gt; +                    last
</span><br>
<span class="quotelev1">&gt; +                    if (MTT::Util::check_break_threshold(
</span><br>
<span class="quotelev1">&gt; +                            $test_results_count_global,
</span><br>
<span class="quotelev1">&gt; +                            $break_threshold,
</span><br>
<span class="quotelev1">&gt; +                            $MTT::Globals::Internals-&gt;{total_tests_counter})
</span><br>
<span class="quotelev1">&gt; +                    );
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; -            
</span><br>
<span class="quotelev1">&gt; +            last
</span><br>
<span class="quotelev1">&gt; +            if (MTT::Util::check_break_threshold(
</span><br>
<span class="quotelev1">&gt; +                    $test_results_count_global,
</span><br>
<span class="quotelev1">&gt; +                    $break_threshold,
</span><br>
<span class="quotelev1">&gt; +                    $MTT::Globals::Internals-&gt;{total_tests_counter})
</span><br>
<span class="quotelev1">&gt; +            );
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;             $MTT::Test::Run::test_argv = undef;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     $MTT::Test::Run::test_np = undef;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -457,6 +484,13 @@
</span><br>
<span class="quotelev1">&gt;     $test_results_count-&gt;{$report-&gt;{test_result}}++ 
</span><br>
<span class="quotelev1">&gt;         if (exists($report-&gt;{test_result}));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    $test_results_count_global-&gt;{$report-&gt;{test_result}}++
</span><br>
<span class="quotelev1">&gt; +                if (exists($report-&gt;{test_result}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $test_results_count_global-&gt;{MTT::Values::TIMED_OUT_OR_FAIL}++
</span><br>
<span class="quotelev1">&gt; +                if (exists($report-&gt;{test_result}) &amp;&amp; 
</span><br>
<span class="quotelev1">&gt; +                    (MTT::Values::FAIL == $report-&gt;{test_result} || MTT::Values::TIMED_OUT == $report-&gt;{test_result}));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     # If there is an after_each step, run it
</span><br>
<span class="quotelev1">&gt;     $ENV{MTT_TEST_RUN_RESULT_MESSAGE} =
</span><br>
<span class="quotelev1">&gt;         (MTT::Values::PASS == $report-&gt;{test_result} ? &quot;passed&quot; :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Util.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Util.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Util.pm	2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev1">&gt; @@ -205,6 +205,12 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (($count-&gt;{$result} / $total) &gt; $threshold-&gt;{$result}) {
</span><br>
<span class="quotelev1">&gt;             Verbose(&quot;--&gt; Threshold ($per) exceeded for \&quot;$result_label\&quot;: $count-&gt;{$result} out of $total.\n&quot;);
</span><br>
<span class="quotelev1">&gt; +            $MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold} = &quot;true&quot;;
</span><br>
<span class="quotelev1">&gt; +            $MTT::Globals::Internals-&gt;{stopped_on_break_threshold_message} = &quot;--&gt; Threshold ($per) exceeded for \&quot;$result_label\&quot;: $count-&gt;{$result} out of $total.\n&quot;;
</span><br>
<span class="quotelev1">&gt; +            print STDOUT &quot;--&gt; Threshold ($per) exceeded for \&quot;$result_label\&quot;: $count-&gt;{$result} out of $total.\n&quot;;
</span><br>
<span class="quotelev1">&gt; +            if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold}){
</span><br>
<span class="quotelev1">&gt; +                print STDOUT &quot;0xdeadbeef: it works&quot;;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt;             return 1;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Values.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Values.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Values.pm	2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev1">&gt; @@ -45,6 +45,7 @@
</span><br>
<span class="quotelev1">&gt;     PASS =&gt; 1,
</span><br>
<span class="quotelev1">&gt;     SKIPPED =&gt; 2,
</span><br>
<span class="quotelev1">&gt;     TIMED_OUT =&gt; 3,
</span><br>
<span class="quotelev1">&gt; +    TIMED_OUT_OR_FAIL =&gt;4,
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Map to human-readable English labels
</span><br>
<span class="quotelev1">&gt; @@ -53,7 +54,7 @@
</span><br>
<span class="quotelev1">&gt; $result_messages-&gt;{MTT::Values::PASS}      = &quot;pass&quot;;
</span><br>
<span class="quotelev1">&gt; $result_messages-&gt;{MTT::Values::TIMED_OUT} = &quot;timeout&quot;;
</span><br>
<span class="quotelev1">&gt; $result_messages-&gt;{MTT::Values::SKIPPED}   = &quot;skipped&quot;;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +$result_messages-&gt;{MTT::Values::TIMED_OUT_OR_FAIL} = &quot;timeout_and_fail&quot;;
</span><br>
<span class="quotelev1">&gt; # current $ini and $section parameters (we use it in funclets)
</span><br>
<span class="quotelev1">&gt; our $evaluate_string_ini;
</span><br>
<span class="quotelev1">&gt; our $evaluate_string_section;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>Previous message:</strong> <a href="0576.php">Josh Hursey: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>Reply:</strong> <a href="0578.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
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
