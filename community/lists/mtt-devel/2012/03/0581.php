<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 13:11:43 2012" -->
<!-- isoreceived="20120302181143" -->
<!-- sent="Fri, 2 Mar 2012 20:11:18 +0200" -->
<!-- isosent="20120302181118" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1440" -->
<!-- id="CAL3GGtp3mT97zn33PZ0ZdqQcYm8r=yXmVF+0PqSU9B8ZpnEJvg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44C51505-8315-405F-942C-D89F92FA6CF9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1440<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 13:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0582.php">Jeff Squyres (jsquyres): "[MTT devel] Broken MTT trunk"</a>
<li><strong>Previous message:</strong> <a href="0580.php">Jeffrey Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<li><strong>In reply to:</strong> <a href="0580.php">Jeffrey Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
already there!
<br>
:)
<br>
<p>On Fri, Mar 2, 2012 at 6:36 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sweet!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you document this on the wiki in the listing of all the INI fields?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2012, at 10:27 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1440
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1440">https://svn.open-mpi.org/trac/mtt/changeset/1440</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Now it is possible to shuffle tests in mtt. The parameter that enables
</span><br>
<span class="quotelev1">&gt; this feature is:
</span><br>
<span class="quotelev2">&gt; &gt; shuffle_tests=
</span><br>
<span class="quotelev2">&gt; &gt; it can be assigned a comma separated list of allowed values: sections,
</span><br>
<span class="quotelev1">&gt; tests, execs, nps, args, all.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Notations:
</span><br>
<span class="quotelev2">&gt; &gt;       sections - shuffle test_run sections found in mtt
</span><br>
<span class="quotelev2">&gt; &gt;       tests - shuffle test executables if any (we have single executable
</span><br>
<span class="quotelev1">&gt; per test_run)
</span><br>
<span class="quotelev2">&gt; &gt;       execs - shuffle exec command line present in main [MTT] section
</span><br>
<span class="quotelev2">&gt; &gt;       nps - shuffle runs with different nps
</span><br>
<span class="quotelev2">&gt; &gt;       args - shuffle executable arguments
</span><br>
<span class="quotelev2">&gt; &gt;       all - enable all the above.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Globals.pm           |    65
</span><br>
<span class="quotelev1">&gt; +++++++++++----------------------------
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Reporter/Email.pm    |     6 ++-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Reporter/TextFile.pm |     2
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Test/Run.pm          |     7 +++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Test/RunEngine.pm    |    61
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++--------
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Util.pm              |    14 ++++++-
</span><br>
<span class="quotelev2">&gt; &gt;   6 files changed, 89 insertions(+), 66 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Globals.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Globals.pm  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Globals.pm  2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -80,8 +80,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     save_intermediate_report =&gt; undef,
</span><br>
<span class="quotelev2">&gt; &gt;     save_intermediate_report_enable =&gt; undef,
</span><br>
<span class="quotelev2">&gt; &gt; -    ini_value_run_for =&gt; undef,
</span><br>
<span class="quotelev2">&gt; &gt; -    start_time =&gt; localtime,
</span><br>
<span class="quotelev2">&gt; &gt; +     shuffle_tests =&gt; undef,
</span><br>
<span class="quotelev2">&gt; &gt;     description =&gt; undef,
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -181,50 +180,24 @@
</span><br>
<span class="quotelev2">&gt; &gt;         $Values-&gt;{save_intermediate_report_enable} = $val;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#    $val = MTT::Values::Value($ini, &quot;MTT&quot;, &quot;finish_at&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -#    if (defined($val)) {
</span><br>
<span class="quotelev2">&gt; &gt; -#            #finish_at format: hh:mm[dd/MM]
</span><br>
<span class="quotelev2">&gt; &gt; -#            $val =~ m/(\d\d:\d\d)(\[(\d\d)\/(\d\d)\])*/;
</span><br>
<span class="quotelev2">&gt; &gt; -#            my $stop_time = $1.&quot;:00&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; -#            my $stop_day = $3;
</span><br>
<span class="quotelev2">&gt; &gt; -#            my $stop_month =$4;
</span><br>
<span class="quotelev2">&gt; &gt; -#            my @timeData = localtime(time);
</span><br>
<span class="quotelev2">&gt; &gt; -#            #@timedata : [0]secs [1]minutes [2]hours [3]days [4]month-1
</span><br>
<span class="quotelev2">&gt; &gt; -#            my $finish_time =
</span><br>
<span class="quotelev1">&gt; MTT::Util::parse_time_to_seconds($stop_time);
</span><br>
<span class="quotelev2">&gt; &gt; -#
</span><br>
<span class="quotelev2">&gt; &gt; -#
</span><br>
<span class="quotelev2">&gt; &gt; -#            my
</span><br>
<span class="quotelev1">&gt; $local_time=$timeData[2].&quot;:&quot;.$timeData[1].&quot;:&quot;.$timeData[0];
</span><br>
<span class="quotelev2">&gt; &gt; -#            my $current_time =
</span><br>
<span class="quotelev1">&gt; MTT::Util::parse_time_to_seconds($local_time);
</span><br>
<span class="quotelev2">&gt; &gt; -#
</span><br>
<span class="quotelev2">&gt; &gt; -#
</span><br>
<span class="quotelev2">&gt; &gt; -#
</span><br>
<span class="quotelev2">&gt; &gt; -#            my $secs_left;
</span><br>
<span class="quotelev2">&gt; &gt; -#            if ($current_time &lt; $finish_time){
</span><br>
<span class="quotelev2">&gt; &gt; -#                    $secs_left = $finish_time-$current_time;
</span><br>
<span class="quotelev2">&gt; &gt; -#            } else {
</span><br>
<span class="quotelev2">&gt; &gt; -#                    $secs_left = $finish_time+24*3600-$current_time;
</span><br>
<span class="quotelev2">&gt; &gt; -#            }
</span><br>
<span class="quotelev2">&gt; &gt; -#            $Values-&gt;{ini_value_run_for} = $secs_left;
</span><br>
<span class="quotelev2">&gt; &gt; -#
</span><br>
<span class="quotelev2">&gt; &gt; -#            if (!$stop_month){
</span><br>
<span class="quotelev2">&gt; &gt; -#            if ($stop_day){
</span><br>
<span class="quotelev2">&gt; &gt; -#                    if ($stop_day &lt; $timeData[3]){
</span><br>
<span class="quotelev2">&gt; &gt; -#                            MTT::Messages::Warning(&quot;Stop date is less
</span><br>
<span class="quotelev1">&gt; than start date: disabling stop_at feature&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -#                            $Values-&gt;{ini_value_run_for} = undef;
</span><br>
<span class="quotelev2">&gt; &gt; -#                    }else if ($stop_day == $timeData[3]){
</span><br>
<span class="quotelev2">&gt; &gt; -#                            if ($finish_time &lt; $current_time){
</span><br>
<span class="quotelev2">&gt; &gt; -#                                    MTT::Messages::Warning(&quot;The stop
</span><br>
<span class="quotelev1">&gt; is less than start time: disabling stop_at feature&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -#                            }
</span><br>
<span class="quotelev2">&gt; &gt; -#                    }else{
</span><br>
<span class="quotelev2">&gt; &gt; -#                            if ($finish_time &gt; $current_time){
</span><br>
<span class="quotelev2">&gt; &gt; -#                                    $secs_left += 24*3600;
</span><br>
<span class="quotelev2">&gt; &gt; -#                            }
</span><br>
<span class="quotelev2">&gt; &gt; -#                    }
</span><br>
<span class="quotelev2">&gt; &gt; -#            }
</span><br>
<span class="quotelev2">&gt; &gt; -#            }
</span><br>
<span class="quotelev2">&gt; &gt; -#            printf &quot;secs_left = &quot;,$secs_left, &quot;hours_left =
</span><br>
<span class="quotelev1">&gt; &quot;,$secs_left/3600,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; -#
</span><br>
<span class="quotelev2">&gt; &gt; -#    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $val = MTT::Values::Value($ini, &quot;MTT&quot;, &quot;shuffle_tests&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    if (defined($val)) {
</span><br>
<span class="quotelev2">&gt; &gt; +         my @shuffles = grep length, split(/\s*,\s*/,$val);
</span><br>
<span class="quotelev2">&gt; &gt; +         my @allowed_shuffles = ('sections', 'tests', 'execs', 'nps',
</span><br>
<span class="quotelev1">&gt; 'args', 'all');
</span><br>
<span class="quotelev2">&gt; &gt; +         my %allowed_map = map { $_ =&gt; 1} @allowed_shuffles;
</span><br>
<span class="quotelev2">&gt; &gt; +         foreach my $sh (@shuffles){
</span><br>
<span class="quotelev2">&gt; &gt; +             if (!exists($allowed_map{$sh})){
</span><br>
<span class="quotelev2">&gt; &gt; +                     MTT::Messages::Error(&quot;&lt;$sh&gt; is not allowed
</span><br>
<span class="quotelev1">&gt; shuffle_tests value. Allowed are:&quot;, join(',',@allowed_shuffles),&quot;.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +             $Values-&gt;{shuffle_tests}-&gt;{$sh} = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +         }
</span><br>
<span class="quotelev2">&gt; &gt; +         if ($Values-&gt;{shuffle_tests}-&gt;{all}){
</span><br>
<span class="quotelev2">&gt; &gt; +             foreach my $allow (@allowed_shuffles){
</span><br>
<span class="quotelev2">&gt; &gt; +                     $Values-&gt;{shuffle_tests}-&gt;{$allow} = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +         }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
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
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Reporter/Email.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Reporter/Email.pm   (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Reporter/Email.pm   2012-03-02 10:27:34 EST (Fri, 02
</span><br>
<span class="quotelev1">&gt; Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -148,8 +148,10 @@
</span><br>
<span class="quotelev2">&gt; &gt;                       $to = Value( $Ini, $Section, &quot;email_to&quot; );
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt; -     my $body = $subject.&quot;\n&quot;.$footer.&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; -     MTT::Mail::Send($subject, $to, $from, $body );
</span><br>
<span class="quotelev2">&gt; &gt; +     my $body = $footer.&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     if ($to){
</span><br>
<span class="quotelev2">&gt; &gt; +             MTT::Mail::Send($subject, $to, $from, $body );
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1;
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
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Reporter/TextFile.pm        2012-03-02 10:27:34 EST
</span><br>
<span class="quotelev1">&gt; (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -142,7 +142,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; sub Flush{
</span><br>
<span class="quotelev2">&gt; &gt;       my ($info, $entries) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;       my @results_to_flush = @results;
</span><br>
<span class="quotelev2">&gt; &gt; -     push(@results_to_flush, $entries);
</span><br>
<span class="quotelev2">&gt; &gt; +     push(@results_to_flush, $entries) if $entries;
</span><br>
<span class="quotelev2">&gt; &gt;       _summary_report(\@results_to_flush, &quot;yes&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;         if (@results_to_flush);
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
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Test/Run.pm 2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -77,7 +77,12 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     # Go through all the sections in the ini file looking for section
</span><br>
<span class="quotelev2">&gt; &gt;     # names that begin with &quot;Test run:&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -    foreach my $section ($ini-&gt;Sections()) {
</span><br>
<span class="quotelev2">&gt; &gt; +    my @sects = $ini-&gt;Sections();
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($MTT::Globals::Values-&gt;{shuffle_tests}-&gt;{sections}){
</span><br>
<span class="quotelev2">&gt; &gt; +     MTT::Util::shuffle(\@sects);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $section (@sects) {
</span><br>
<span class="quotelev2">&gt; &gt;         # See if we're supposed to terminate.  Only check in the
</span><br>
<span class="quotelev2">&gt; &gt;         # outtermost and innermost loops (even though we *could* check
</span><br>
<span class="quotelev2">&gt; &gt;         # at every loop level); that's good enough.
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
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Test/RunEngine.pm   2012-03-02 10:27:34 EST (Fri, 02
</span><br>
<span class="quotelev1">&gt; Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -39,7 +39,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; my $mpi_details_name;
</span><br>
<span class="quotelev2">&gt; &gt; my $test_run_full_name;
</span><br>
<span class="quotelev2">&gt; &gt; my $break_threshold;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +my $shuffle;
</span><br>
<span class="quotelev2">&gt; &gt; # Keep track of how many tests have passed, failed, skipped, and timed
</span><br>
<span class="quotelev1">&gt; out
</span><br>
<span class="quotelev2">&gt; &gt; my $test_results_count;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -52,7 +52,6 @@
</span><br>
<span class="quotelev2">&gt; &gt; my $report_after_n_results;
</span><br>
<span class="quotelev2">&gt; &gt; my $prev_section_name = undef;
</span><br>
<span class="quotelev2">&gt; &gt; my $group_reports = 0;
</span><br>
<span class="quotelev2">&gt; &gt; -my $tests_performed = 0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -96,6 +95,10 @@
</span><br>
<span class="quotelev2">&gt; &gt;     $break_threshold-&gt;{MTT::Values::TIMED_OUT} = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_timeout&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     $break_threshold-&gt;{MTT::Values::SKIPPED}   = Value($ini, $section,
</span><br>
<span class="quotelev1">&gt; &quot;break_threshold_skipped&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     $break_threshold-&gt;{MTT::Values::TIMED_OUT_OR_FAIL} = Value($ini,
</span><br>
<span class="quotelev1">&gt; &quot;mtt&quot;, &quot;break_threshold_timeout_and_fail&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     $shuffle = undef;
</span><br>
<span class="quotelev2">&gt; &gt; +    _register_shuffles($ini,$section);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;       my $reports_per_job = Value($ini, &quot;mtt&quot;, &quot;reports_per_job&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     # This boolean value defaults to 0, and allows the user to submit
</span><br>
<span class="quotelev1">&gt; results
</span><br>
<span class="quotelev2">&gt; &gt;     # after each test to ensure at least *some* results are submitted
</span><br>
<span class="quotelev1">&gt; (in case
</span><br>
<span class="quotelev2">&gt; &gt; @@ -167,6 +170,10 @@
</span><br>
<span class="quotelev2">&gt; &gt;     $verbose_out = 0;
</span><br>
<span class="quotelev2">&gt; &gt;     my $test_count = 0;
</span><br>
<span class="quotelev2">&gt; &gt;     my $printed = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($shuffle-&gt;{tests}){
</span><br>
<span class="quotelev2">&gt; &gt; +     MTT::Util::shuffle(\@{$ret-&gt;{tests}});
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     foreach my $run (@{$ret-&gt;{tests}}) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         # See if we're supposed to terminate.
</span><br>
<span class="quotelev2">&gt; &gt; @@ -221,6 +228,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;         if (ref($all_np) eq &quot;&quot;) {
</span><br>
<span class="quotelev2">&gt; &gt;             $test_results-&gt;{$all_np} = _run_one_np($install_dir, $run,
</span><br>
<span class="quotelev1">&gt; $mpi_details, $all_np, $force);
</span><br>
<span class="quotelev2">&gt; &gt;         } else {
</span><br>
<span class="quotelev2">&gt; &gt; +             if ($shuffle-&gt;{nps}){
</span><br>
<span class="quotelev2">&gt; &gt; +                     MTT::Util::shuffle($all_np);
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt;             foreach my $this_np (@$all_np) {
</span><br>
<span class="quotelev2">&gt; &gt;                 # See if we're supposed to terminate.
</span><br>
<span class="quotelev2">&gt; &gt;                 last
</span><br>
<span class="quotelev2">&gt; &gt; @@ -288,13 +298,19 @@
</span><br>
<span class="quotelev2">&gt; &gt;         if (ref($all_argv) eq &quot;&quot;) {
</span><br>
<span class="quotelev2">&gt; &gt;             $all_argv = [$all_argv];
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +             if ($shuffle-&gt;{args}){
</span><br>
<span class="quotelev2">&gt; &gt; +                     MTT::Util::shuffle($all_argv);
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt;         foreach my $this_argv (@$all_argv) {
</span><br>
<span class="quotelev2">&gt; &gt;             $MTT::Test::Run::test_argv = $this_argv;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             # Get all the exec's for this one np
</span><br>
<span class="quotelev2">&gt; &gt;             my $execs =
</span><br>
<span class="quotelev1">&gt; MTT::Values::EvaluateString($mpi_details-&gt;{exec}, $ini, $mpi_details_name);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +            if (ref($execs) ne &quot;&quot; &amp;&amp; $shuffle-&gt;{execs}){
</span><br>
<span class="quotelev2">&gt; &gt; +             MTT::Util::shuffle($execs);
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;             # If we just got one, run it.  Otherwise, loop over running
</span><br>
<span class="quotelev1">&gt; them.
</span><br>
<span class="quotelev2">&gt; &gt;             if (ref($execs) eq &quot;&quot;) {
</span><br>
<span class="quotelev2">&gt; &gt;                 _run_one_test($install_dir, $run, $mpi_details, $execs,
</span><br>
<span class="quotelev1">&gt; $name, 1,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -497,14 +513,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                 if (exists($report-&gt;{test_result}) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt;                     (MTT::Values::FAIL == $report-&gt;{test_result} ||
</span><br>
<span class="quotelev1">&gt; MTT::Values::TIMED_OUT == $report-&gt;{test_result}));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    $tests_performed++;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -     #print &quot;\t\t--&gt; Test #&quot;,$tests_performed,&quot; done\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     #MTT::Reporter::Flush();
</span><br>
<span class="quotelev2">&gt; &gt; -     #MTT::Reporter::TextFile::deSubmit();
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     # If there is an after_each step, run it
</span><br>
<span class="quotelev2">&gt; &gt;     $ENV{MTT_TEST_RUN_RESULT_MESSAGE} =
</span><br>
<span class="quotelev2">&gt; &gt;         (MTT::Values::PASS == $report-&gt;{test_result} ? &quot;passed&quot; :
</span><br>
<span class="quotelev2">&gt; &gt; @@ -558,6 +567,32 @@
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +sub _register_shuffles{
</span><br>
<span class="quotelev2">&gt; &gt; +     my ($ini,$section) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     my $val = MTT::Values::Value($ini, $section, &quot;shuffle_tests&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +     if (defined($val)) {
</span><br>
<span class="quotelev2">&gt; &gt; +         my @shuffles = grep length, split(/\s*,\s*/,$val);
</span><br>
<span class="quotelev2">&gt; &gt; +         my @allowed_shuffles = ('tests', 'execs', 'nps', 'args',
</span><br>
<span class="quotelev1">&gt; 'all', 'none');
</span><br>
<span class="quotelev2">&gt; &gt; +         my %allowed_map = map { $_ =&gt; 1} @allowed_shuffles;
</span><br>
<span class="quotelev2">&gt; &gt; +         foreach my $sh (@shuffles){
</span><br>
<span class="quotelev2">&gt; &gt; +             if (!exists($allowed_map{$sh})){
</span><br>
<span class="quotelev2">&gt; &gt; +                     MTT::Messages::Error(&quot;&lt;$sh&gt; is not allowed section
</span><br>
<span class="quotelev1">&gt; specific shuffle_tests value. Allowed are:&quot;,
</span><br>
<span class="quotelev1">&gt; join(',',@allowed_shuffles),&quot;.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +             $shuffle-&gt;{$sh} = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +         }
</span><br>
<span class="quotelev2">&gt; &gt; +         if ($shuffle-&gt;{none}){
</span><br>
<span class="quotelev2">&gt; &gt; +             $shuffle = undef;
</span><br>
<span class="quotelev2">&gt; &gt; +         }
</span><br>
<span class="quotelev2">&gt; &gt; +         if ($shuffle-&gt;{all}){
</span><br>
<span class="quotelev2">&gt; &gt; +             foreach my $allow (@allowed_shuffles){
</span><br>
<span class="quotelev2">&gt; &gt; +                     $shuffle-&gt;{$allow} = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +         }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +    else{
</span><br>
<span class="quotelev2">&gt; &gt; +     $shuffle = $MTT::Globals::Values-&gt;{shuffle_tests};
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; 1;
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
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Util.pm     2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -208,9 +208,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;             $MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold} =
</span><br>
<span class="quotelev1">&gt; &quot;true&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; $MTT::Globals::Internals-&gt;{stopped_on_break_threshold_message} = &quot;--&gt;
</span><br>
<span class="quotelev1">&gt; Threshold ($per) exceeded for \&quot;$result_label\&quot;: $count-&gt;{$result} out of
</span><br>
<span class="quotelev1">&gt; $total.\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;             print STDOUT &quot;--&gt; Threshold ($per) exceeded for
</span><br>
<span class="quotelev1">&gt; \&quot;$result_label\&quot;: $count-&gt;{$result} out of $total.\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; -            if
</span><br>
<span class="quotelev1">&gt; ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold}){
</span><br>
<span class="quotelev2">&gt; &gt; -                print STDOUT &quot;0xdeadbeef: it works&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; -            }
</span><br>
<span class="quotelev2">&gt; &gt;             return 1;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -395,4 +392,15 @@
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +sub shuffle{
</span><br>
<span class="quotelev2">&gt; &gt; +     # Shuffle an array given via reference randomly
</span><br>
<span class="quotelev2">&gt; &gt; +     my $array = shift;
</span><br>
<span class="quotelev2">&gt; &gt; +    my $i;
</span><br>
<span class="quotelev2">&gt; &gt; +    for ($i = @$array; --$i; ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        my $j = int rand ($i+1);
</span><br>
<span class="quotelev2">&gt; &gt; +        next if $i == $j;
</span><br>
<span class="quotelev2">&gt; &gt; +        @$array[$i,$j] = @$array[$j,$i];
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; 1;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0581/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0582.php">Jeff Squyres (jsquyres): "[MTT devel] Broken MTT trunk"</a>
<li><strong>Previous message:</strong> <a href="0580.php">Jeffrey Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<li><strong>In reply to:</strong> <a href="0580.php">Jeffrey Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
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
