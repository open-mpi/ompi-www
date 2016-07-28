<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 02:13:01 2012" -->
<!-- isoreceived="20120126071301" -->
<!-- sent="Thu, 26 Jan 2012 09:12:34 +0200" -->
<!-- isosent="20120126071234" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1433" -->
<!-- id="CAL3GGtqNFC6YjUOy4zLgLSx_gZM1GE1ziz8e+41O1-BLsQOPYA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D05AAFB3-CCEB-4DBD-8727-8C649ED86F1A_at_cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 02:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/02/0579.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="0577.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>In reply to:</strong> <a href="0577.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
done
<br>
credit goes to Valentin as a creator of this feature!
<br>
<p>On Wed, Jan 25, 2012 at 3:11 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yummy -- thanks Mike!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you add this field (and any others you have added) to the wiki?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/mtt/wiki/MTTINIFileFields">https://svn.open-mpi.org/trac/mtt/wiki/MTTINIFileFields</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is our *only* documentation; it's important to keep it up to date.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2012, at 6:02 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1433
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1433">https://svn.open-mpi.org/trac/mtt/changeset/1433</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; * Introduce mtt.break_threshold_timeout_and_fail ini param to specify %
</span><br>
<span class="quotelev1">&gt; of overall failed tests to trigger stop execution.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Reporter/TextFile.pm |     9 ++++-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Test/Run.pm          |    30 ++++++++++++++++----
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Test/RunEngine.pm    |    60
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++--------
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Util.pm              |     6 ++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Values.pm            |     3 +
</span><br>
<span class="quotelev2">&gt; &gt;   5 files changed, 86 insertions(+), 22 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Reporter/TextFile.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Reporter/TextFile.pm        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Reporter/TextFile.pm        2012-01-25 06:02:47 EST
</span><br>
<span class="quotelev1">&gt; (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -230,8 +230,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;     my $filename = &quot;All_phase-summary.txt&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;     my $file = &quot;$dirname/&quot; . MTT::Files::make_safe_filename(&quot;$filename&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    my $body = join(&quot;\n&quot;, ($summary_header, $table-&gt;render, $perf_stat,
</span><br>
<span class="quotelev1">&gt; $summary_footer));
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +    my $body;
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold}){
</span><br>
<span class="quotelev2">&gt; &gt; +        $body = join(&quot;\n&quot;, ($summary_header, $table-&gt;render,
</span><br>
<span class="quotelev1">&gt; $perf_stat, $MTT::Globals::Internals-&gt;{stopped_on_break_threshold_message},
</span><br>
<span class="quotelev1">&gt; $summary_footer));
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else{
</span><br>
<span class="quotelev2">&gt; &gt; +        $body = join(&quot;\n&quot;, ($summary_header, $table-&gt;render,
</span><br>
<span class="quotelev1">&gt; $perf_stat, $summary_footer));
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt;     print $body;
</span><br>
<span class="quotelev2">&gt; &gt;     _output_results($file, $body);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Test/Run.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Test/Run.pm (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Test/Run.pm 2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -64,8 +64,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sub Run {
</span><br>
<span class="quotelev2">&gt; &gt; -    my ($ini, $ini_full, $install_dir, $runs_data_dir, $force) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($ini, $ini_full, $install_dir, $runs_data_dir, $force,
</span><br>
<span class="quotelev1">&gt; $count_total_tests_number) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($count_total_tests_number ne &quot;yes&quot;){
</span><br>
<span class="quotelev2">&gt; &gt; +        Run($ini, $ini_full, $install_dir, $runs_data_dir,
</span><br>
<span class="quotelev1">&gt; $force,&quot;yes&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt;     # Save the environment
</span><br>
<span class="quotelev2">&gt; &gt;     my %ENV_SAVE = %ENV;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -188,7 +191,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                                     _do_run($ini, $section, $test_build,
</span><br>
<span class="quotelev2">&gt; &gt;                                             $mpi_get, $mpi_install,
</span><br>
<span class="quotelev2">&gt; &gt;                                             $install_dir, $runs_data_dir,
</span><br>
<span class="quotelev2">&gt; &gt; -                                            $force);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;  $force,$count_total_tests_number);
</span><br>
<span class="quotelev2">&gt; &gt;                                     delete
</span><br>
<span class="quotelev1">&gt; $MTT::Globals::Internals-&gt;{mpi_get_name};
</span><br>
<span class="quotelev2">&gt; &gt;                                     delete
</span><br>
<span class="quotelev1">&gt; $MTT::Globals::Internals-&gt;{mpi_install_name};
</span><br>
<span class="quotelev2">&gt; &gt;                                     delete
</span><br>
<span class="quotelev1">&gt; $MTT::Globals::Internals-&gt;{test_get_name};
</span><br>
<span class="quotelev2">&gt; &gt; @@ -196,12 +199,24 @@
</span><br>
<span class="quotelev2">&gt; &gt;                                     delete
</span><br>
<span class="quotelev1">&gt; $MTT::Globals::Internals-&gt;{test_run_name};
</span><br>
<span class="quotelev2">&gt; &gt;                                     %ENV = %ENV_SAVE;
</span><br>
<span class="quotelev2">&gt; &gt;                                 }
</span><br>
<span class="quotelev2">&gt; &gt; +                                last
</span><br>
<span class="quotelev2">&gt; &gt; +                                if
</span><br>
<span class="quotelev1">&gt; ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev2">&gt; &gt;                             }
</span><br>
<span class="quotelev2">&gt; &gt; +                            last
</span><br>
<span class="quotelev2">&gt; &gt; +                            if
</span><br>
<span class="quotelev1">&gt; ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev2">&gt; &gt;                         }
</span><br>
<span class="quotelev2">&gt; &gt; +                        last
</span><br>
<span class="quotelev2">&gt; &gt; +                        if
</span><br>
<span class="quotelev1">&gt; ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev2">&gt; &gt;                     }
</span><br>
<span class="quotelev2">&gt; &gt; +                    last
</span><br>
<span class="quotelev2">&gt; &gt; +                    if
</span><br>
<span class="quotelev1">&gt; ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev2">&gt; &gt;                 }
</span><br>
<span class="quotelev2">&gt; &gt; +                last
</span><br>
<span class="quotelev2">&gt; &gt; +                if
</span><br>
<span class="quotelev1">&gt; ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; +        last
</span><br>
<span class="quotelev2">&gt; &gt; +        if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Verbose(&quot;*** Run test phase complete\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -211,7 +226,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sub _do_run {
</span><br>
<span class="quotelev2">&gt; &gt;     my ($ini, $section, $test_build, $mpi_get, $mpi_install,
</span><br>
<span class="quotelev1">&gt; $install_dir,
</span><br>
<span class="quotelev2">&gt; &gt; -        $runs_data_dir, $force) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +        $runs_data_dir, $force, $count_total_tests_number) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     # Simple section name
</span><br>
<span class="quotelev2">&gt; &gt;     my $simple_section = GetSimpleSection($section);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -528,9 +543,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;     # If we got a list of tests to run, invoke the run engine to
</span><br>
<span class="quotelev2">&gt; &gt;     # actually run them.
</span><br>
<span class="quotelev2">&gt; &gt;     if ($ret &amp;&amp; $ret-&gt;{test_result}) {
</span><br>
<span class="quotelev2">&gt; &gt; -        MTT::Test::RunEngine::RunEngine($ini, $section, $install_dir,
</span><br>
<span class="quotelev2">&gt; &gt; +        my $return_value;
</span><br>
<span class="quotelev2">&gt; &gt; +        $return_value = MTT::Test::RunEngine::RunEngine($ini, $section,
</span><br>
<span class="quotelev1">&gt; $install_dir,
</span><br>
<span class="quotelev2">&gt; &gt;                                         $runs_data_dir, $mpi_details,
</span><br>
<span class="quotelev2">&gt; &gt; -                                        $test_build, $force, $ret);
</span><br>
<span class="quotelev2">&gt; &gt; +                                        $test_build, $force, $ret,
</span><br>
<span class="quotelev1">&gt; $count_total_tests_number);
</span><br>
<span class="quotelev2">&gt; &gt; +        if ($count_total_tests_number eq &quot;yes&quot;){
</span><br>
<span class="quotelev2">&gt; &gt; +            $MTT::Globals::Internals-&gt;{total_tests_counter} +=
</span><br>
<span class="quotelev1">&gt; $return_value;
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     # Unload any loaded environment modules
</span><br>
<span class="quotelev2">&gt; &gt; @@ -545,7 +564,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;         # means reverting to an env snapshot.
</span><br>
<span class="quotelev2">&gt; &gt;         MTT::EnvImporter::unload(reverse @env_importers);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
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
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Test/RunEngine.pm   2012-01-25 06:02:47 EST (Wed, 25
</span><br>
<span class="quotelev1">&gt; Jan 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -38,10 +38,14 @@
</span><br>
<span class="quotelev2">&gt; &gt; my $section;
</span><br>
<span class="quotelev2">&gt; &gt; my $mpi_details_name;
</span><br>
<span class="quotelev2">&gt; &gt; my $test_run_full_name;
</span><br>
<span class="quotelev2">&gt; &gt; +my $break_threshold;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Keep track of how many tests have passed, failed, skipped, and timed
</span><br>
<span class="quotelev1">&gt; out
</span><br>
<span class="quotelev2">&gt; &gt; my $test_results_count;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#same as test_results_count but global over all envokations of RunEngine
</span><br>
<span class="quotelev2">&gt; &gt; +my $test_results_count_global;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; # Submit results after each run or after *all* the runs
</span><br>
<span class="quotelev2">&gt; &gt; my $report_after_each_result = 0;
</span><br>
<span class="quotelev2">&gt; &gt; my $report_results_count = 0;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -56,7 +60,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     my ($install_dir, $runs_data_dir, $mpi_details, $test_build, $force,
</span><br>
<span class="quotelev1">&gt; $ret);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     # Make sure though, that the $ini remains a global
</span><br>
<span class="quotelev2">&gt; &gt; -    ($ini, $section, $install_dir, $runs_data_dir, $mpi_details,
</span><br>
<span class="quotelev1">&gt; $test_build, $force, $ret) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    ($ini, $section, $install_dir, $runs_data_dir, $mpi_details,
</span><br>
<span class="quotelev1">&gt; $test_build, $force, $ret, my $count_total_tests_number) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     my $test_results;
</span><br>
<span class="quotelev2">&gt; &gt;     $group_reports = MTT::Values::Value($ini, &quot;mtt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;submit_group_results&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -81,12 +85,16 @@
</span><br>
<span class="quotelev2">&gt; &gt;     my $variants_count_total =
</span><br>
<span class="quotelev2">&gt; &gt;         $test_count_total * $np_count_total * $argv_count_total *
</span><br>
<span class="quotelev1">&gt; $exec_count_total;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($count_total_tests_number eq &quot;yes&quot;){
</span><br>
<span class="quotelev2">&gt; &gt; +        return $variants_count_total;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt;     # Set some thresholds for an early exit
</span><br>
<span class="quotelev2">&gt; &gt; -    my $break_threshold;
</span><br>
<span class="quotelev2">&gt; &gt; +    $break_threshold = undef;
</span><br>
<span class="quotelev2">&gt; &gt;     $break_threshold-&gt;{MTT::Values::PASS}      = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_pass&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     $break_threshold-&gt;{MTT::Values::FAIL}      = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_fail&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     $break_threshold-&gt;{MTT::Values::TIMED_OUT} = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_timeout&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     $break_threshold-&gt;{MTT::Values::SKIPPED}   = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_skipped&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $break_threshold-&gt;{MTT::Values::TIMED_OUT_OR_FAIL} = Value($ini,
</span><br>
<span class="quotelev1">&gt; &quot;mtt&quot;, &quot;break_threshold_timeout_and_fail&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     # This boolean value defaults to 0, and allows the user to submit
</span><br>
<span class="quotelev1">&gt; results
</span><br>
<span class="quotelev2">&gt; &gt;     # after each test to ensure at least *some* results are submitted
</span><br>
<span class="quotelev1">&gt; (in case
</span><br>
<span class="quotelev2">&gt; &gt; @@ -208,25 +216,29 @@
</span><br>
<span class="quotelev2">&gt; &gt;             $run-&gt;{wdir} = $wdir;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         # Just one np, or an array of np values?
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;         if (ref($all_np) eq &quot;&quot;) {
</span><br>
<span class="quotelev2">&gt; &gt; -            $test_results-&gt;{$all_np} =
</span><br>
<span class="quotelev2">&gt; &gt; -                _run_one_np($install_dir, $run, $mpi_details, $all_np,
</span><br>
<span class="quotelev1">&gt; $force);
</span><br>
<span class="quotelev2">&gt; &gt; +            $test_results-&gt;{$all_np} = _run_one_np($install_dir, $run,
</span><br>
<span class="quotelev1">&gt; $mpi_details, $all_np, $force);
</span><br>
<span class="quotelev2">&gt; &gt;         } else {
</span><br>
<span class="quotelev2">&gt; &gt;             foreach my $this_np (@$all_np) {
</span><br>
<span class="quotelev2">&gt; &gt;                 # See if we're supposed to terminate.
</span><br>
<span class="quotelev2">&gt; &gt;                 last
</span><br>
<span class="quotelev2">&gt; &gt; -                    if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev2">&gt; &gt; +                   if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                $test_results-&gt;{$all_np} = _run_one_np($install_dir,
</span><br>
<span class="quotelev1">&gt; $run, $mpi_details, $this_np,$force);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -                $test_results-&gt;{$this_np} =
</span><br>
<span class="quotelev2">&gt; &gt; -                    _run_one_np($install_dir, $run, $mpi_details,
</span><br>
<span class="quotelev1">&gt; $this_np,
</span><br>
<span class="quotelev2">&gt; &gt; -                                $force);
</span><br>
<span class="quotelev2">&gt; &gt; +                last
</span><br>
<span class="quotelev2">&gt; &gt; +                   if
</span><br>
<span class="quotelev1">&gt; ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        last
</span><br>
<span class="quotelev2">&gt; &gt; +           if
</span><br>
<span class="quotelev1">&gt; ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold});
</span><br>
<span class="quotelev2">&gt; &gt;         ++$test_count;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         # Write out the &quot;to be saved&quot; test run results
</span><br>
<span class="quotelev2">&gt; &gt;         MTT::Test::SaveRuns($runs_data_dir);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;         $MTT::Test::Run::mpi_details = $save_run_mpi_details;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         # Output a progress bar
</span><br>
<span class="quotelev2">&gt; &gt; @@ -247,6 +259,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         MTT::Reporter::QueueSubmit();
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sub _run_one_np {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -290,16 +303,30 @@
</span><br>
<span class="quotelev2">&gt; &gt;                 foreach my $e (@$execs) {
</span><br>
<span class="quotelev2">&gt; &gt;                     # See if we're supposed to terminate.
</span><br>
<span class="quotelev2">&gt; &gt;                     last
</span><br>
<span class="quotelev2">&gt; &gt; -                        if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev2">&gt; &gt; +                    if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;                     _run_one_test($install_dir, $run, $mpi_details, $e,
</span><br>
<span class="quotelev1">&gt; $name,
</span><br>
<span class="quotelev2">&gt; &gt; -                                  $variant++, $force);
</span><br>
<span class="quotelev2">&gt; &gt; +                        $variant++, $force);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                    last
</span><br>
<span class="quotelev2">&gt; &gt; +                    if (MTT::Util::check_break_threshold(
</span><br>
<span class="quotelev2">&gt; &gt; +                            $test_results_count_global,
</span><br>
<span class="quotelev2">&gt; &gt; +                            $break_threshold,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;  $MTT::Globals::Internals-&gt;{total_tests_counter})
</span><br>
<span class="quotelev2">&gt; &gt; +                    );
</span><br>
<span class="quotelev2">&gt; &gt;                 }
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +            last
</span><br>
<span class="quotelev2">&gt; &gt; +            if (MTT::Util::check_break_threshold(
</span><br>
<span class="quotelev2">&gt; &gt; +                    $test_results_count_global,
</span><br>
<span class="quotelev2">&gt; &gt; +                    $break_threshold,
</span><br>
<span class="quotelev2">&gt; &gt; +                    $MTT::Globals::Internals-&gt;{total_tests_counter})
</span><br>
<span class="quotelev2">&gt; &gt; +            );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;             $MTT::Test::Run::test_argv = undef;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     $MTT::Test::Run::test_np = undef;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -457,6 +484,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;     $test_results_count-&gt;{$report-&gt;{test_result}}++
</span><br>
<span class="quotelev2">&gt; &gt;         if (exists($report-&gt;{test_result}));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    $test_results_count_global-&gt;{$report-&gt;{test_result}}++
</span><br>
<span class="quotelev2">&gt; &gt; +                if (exists($report-&gt;{test_result}));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $test_results_count_global-&gt;{MTT::Values::TIMED_OUT_OR_FAIL}++
</span><br>
<span class="quotelev2">&gt; &gt; +                if (exists($report-&gt;{test_result}) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; +                    (MTT::Values::FAIL == $report-&gt;{test_result} ||
</span><br>
<span class="quotelev1">&gt; MTT::Values::TIMED_OUT == $report-&gt;{test_result}));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     # If there is an after_each step, run it
</span><br>
<span class="quotelev2">&gt; &gt;     $ENV{MTT_TEST_RUN_RESULT_MESSAGE} =
</span><br>
<span class="quotelev2">&gt; &gt;         (MTT::Values::PASS == $report-&gt;{test_result} ? &quot;passed&quot; :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Util.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Util.pm     (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Util.pm     2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -205,6 +205,12 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         if (($count-&gt;{$result} / $total) &gt; $threshold-&gt;{$result}) {
</span><br>
<span class="quotelev2">&gt; &gt;             Verbose(&quot;--&gt; Threshold ($per) exceeded for
</span><br>
<span class="quotelev1">&gt; \&quot;$result_label\&quot;: $count-&gt;{$result} out of $total.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +            $MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold} =
</span><br>
<span class="quotelev1">&gt; &quot;true&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;  $MTT::Globals::Internals-&gt;{stopped_on_break_threshold_message} = &quot;--&gt;
</span><br>
<span class="quotelev1">&gt; Threshold ($per) exceeded for \&quot;$result_label\&quot;: $count-&gt;{$result} out of
</span><br>
<span class="quotelev1">&gt; $total.\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +            print STDOUT &quot;--&gt; Threshold ($per) exceeded for
</span><br>
<span class="quotelev1">&gt; \&quot;$result_label\&quot;: $count-&gt;{$result} out of $total.\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +            if
</span><br>
<span class="quotelev1">&gt; ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold}){
</span><br>
<span class="quotelev2">&gt; &gt; +                print STDOUT &quot;0xdeadbeef: it works&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt;             return 1;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Values.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Values.pm   (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Values.pm   2012-01-25 06:02:47 EST (Wed, 25 Jan 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -45,6 +45,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     PASS =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt;     SKIPPED =&gt; 2,
</span><br>
<span class="quotelev2">&gt; &gt;     TIMED_OUT =&gt; 3,
</span><br>
<span class="quotelev2">&gt; &gt; +    TIMED_OUT_OR_FAIL =&gt;4,
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Map to human-readable English labels
</span><br>
<span class="quotelev2">&gt; &gt; @@ -53,7 +54,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; $result_messages-&gt;{MTT::Values::PASS}      = &quot;pass&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; $result_messages-&gt;{MTT::Values::TIMED_OUT} = &quot;timeout&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; $result_messages-&gt;{MTT::Values::SKIPPED}   = &quot;skipped&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +$result_messages-&gt;{MTT::Values::TIMED_OUT_OR_FAIL} = &quot;timeout_and_fail&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; # current $ini and $section parameters (we use it in funclets)
</span><br>
<span class="quotelev2">&gt; &gt; our $evaluate_string_ini;
</span><br>
<span class="quotelev2">&gt; &gt; our $evaluate_string_section;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0578/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/02/0579.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="0577.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<li><strong>In reply to:</strong> <a href="0577.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1433"</a>
<!-- nextthread="start" -->
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
