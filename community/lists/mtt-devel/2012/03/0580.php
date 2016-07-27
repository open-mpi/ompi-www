<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 11:36:59 2012" -->
<!-- isoreceived="20120302163659" -->
<!-- sent="Fri, 2 Mar 2012 11:36:54 -0500" -->
<!-- isosent="20120302163654" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1440" -->
<!-- id="44C51505-8315-405F-942C-D89F92FA6CF9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201203021527.q22FRYHr022140_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 11:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0581.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/02/0579.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0581.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<li><strong>Reply:</strong> <a href="0581.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sweet!
<br>
<p>Can you document this on the wiki in the listing of all the INI fields?
<br>
<p><p>On Mar 2, 2012, at 10:27 AM, miked_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 1440
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1440">https://svn.open-mpi.org/trac/mtt/changeset/1440</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Now it is possible to shuffle tests in mtt. The parameter that enables this feature is:
</span><br>
<span class="quotelev1">&gt; shuffle_tests=
</span><br>
<span class="quotelev1">&gt; it can be assigned a comma separated list of allowed values: sections, tests, execs, nps, args, all. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Notations: 
</span><br>
<span class="quotelev1">&gt; 	sections - shuffle test_run sections found in mtt 
</span><br>
<span class="quotelev1">&gt; 	tests - shuffle test executables if any (we have single executable per test_run)
</span><br>
<span class="quotelev1">&gt; 	execs - shuffle exec command line present in main [MTT] section
</span><br>
<span class="quotelev1">&gt; 	nps - shuffle runs with different nps
</span><br>
<span class="quotelev1">&gt; 	args - shuffle executable arguments
</span><br>
<span class="quotelev1">&gt; 	all - enable all the above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Globals.pm           |    65 +++++++++++---------------------------- 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Reporter/Email.pm    |     6 ++-                                     
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Reporter/TextFile.pm |     2                                         
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Test/Run.pm          |     7 +++                                     
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Test/RunEngine.pm    |    61 +++++++++++++++++++++++++++++--------   
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Util.pm              |    14 ++++++-                                 
</span><br>
<span class="quotelev1">&gt;   6 files changed, 89 insertions(+), 66 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Globals.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Globals.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Globals.pm	2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -80,8 +80,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     save_intermediate_report =&gt; undef,
</span><br>
<span class="quotelev1">&gt;     save_intermediate_report_enable =&gt; undef,
</span><br>
<span class="quotelev1">&gt; -    ini_value_run_for =&gt; undef,
</span><br>
<span class="quotelev1">&gt; -    start_time =&gt; localtime,
</span><br>
<span class="quotelev1">&gt; +	shuffle_tests =&gt; undef,
</span><br>
<span class="quotelev1">&gt;     description =&gt; undef,
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -181,50 +180,24 @@
</span><br>
<span class="quotelev1">&gt;         $Values-&gt;{save_intermediate_report_enable} = $val;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#    $val = MTT::Values::Value($ini, &quot;MTT&quot;, &quot;finish_at&quot;);
</span><br>
<span class="quotelev1">&gt; -#    if (defined($val)) {
</span><br>
<span class="quotelev1">&gt; -#    	#finish_at format: hh:mm[dd/MM]
</span><br>
<span class="quotelev1">&gt; -#    	$val =~ m/(\d\d:\d\d)(\[(\d\d)\/(\d\d)\])*/;
</span><br>
<span class="quotelev1">&gt; -#    	my $stop_time = $1.&quot;:00&quot;;
</span><br>
<span class="quotelev1">&gt; -#    	my $stop_day = $3;
</span><br>
<span class="quotelev1">&gt; -#    	my $stop_month =$4;
</span><br>
<span class="quotelev1">&gt; -#    	my @timeData = localtime(time);
</span><br>
<span class="quotelev1">&gt; -#    	#@timedata : [0]secs [1]minutes [2]hours [3]days [4]month-1
</span><br>
<span class="quotelev1">&gt; -#		my $finish_time = MTT::Util::parse_time_to_seconds($stop_time);
</span><br>
<span class="quotelev1">&gt; -#				
</span><br>
<span class="quotelev1">&gt; -#		
</span><br>
<span class="quotelev1">&gt; -#    	my $local_time=$timeData[2].&quot;:&quot;.$timeData[1].&quot;:&quot;.$timeData[0];
</span><br>
<span class="quotelev1">&gt; -#    	my $current_time = MTT::Util::parse_time_to_seconds($local_time);
</span><br>
<span class="quotelev1">&gt; -#    	
</span><br>
<span class="quotelev1">&gt; -#    	
</span><br>
<span class="quotelev1">&gt; -#    	
</span><br>
<span class="quotelev1">&gt; -#    	my $secs_left;
</span><br>
<span class="quotelev1">&gt; -#    	if ($current_time &lt; $finish_time){
</span><br>
<span class="quotelev1">&gt; -#    		$secs_left = $finish_time-$current_time;
</span><br>
<span class="quotelev1">&gt; -#    	} else {
</span><br>
<span class="quotelev1">&gt; -#    		$secs_left = $finish_time+24*3600-$current_time;
</span><br>
<span class="quotelev1">&gt; -#    	}
</span><br>
<span class="quotelev1">&gt; -#    	$Values-&gt;{ini_value_run_for} = $secs_left;
</span><br>
<span class="quotelev1">&gt; -#    	
</span><br>
<span class="quotelev1">&gt; -#    	if (!$stop_month){
</span><br>
<span class="quotelev1">&gt; -#	    	if ($stop_day){
</span><br>
<span class="quotelev1">&gt; -#	    		if ($stop_day &lt; $timeData[3]){
</span><br>
<span class="quotelev1">&gt; -#	    			MTT::Messages::Warning(&quot;Stop date is less than start date: disabling stop_at feature&quot;);
</span><br>
<span class="quotelev1">&gt; -#	    			$Values-&gt;{ini_value_run_for} = undef;
</span><br>
<span class="quotelev1">&gt; -#	    		}else if ($stop_day == $timeData[3]){
</span><br>
<span class="quotelev1">&gt; -#	    			if ($finish_time &lt; $current_time){
</span><br>
<span class="quotelev1">&gt; -#	    				MTT::Messages::Warning(&quot;The stop is less than start time: disabling stop_at feature&quot;);
</span><br>
<span class="quotelev1">&gt; -#	    			}
</span><br>
<span class="quotelev1">&gt; -#	    		}else{
</span><br>
<span class="quotelev1">&gt; -#	    			if ($finish_time &gt; $current_time){
</span><br>
<span class="quotelev1">&gt; -#	    				$secs_left += 24*3600;
</span><br>
<span class="quotelev1">&gt; -#	    			}
</span><br>
<span class="quotelev1">&gt; -#	    		}
</span><br>
<span class="quotelev1">&gt; -#	    	}
</span><br>
<span class="quotelev1">&gt; -#    	}
</span><br>
<span class="quotelev1">&gt; -#    	printf &quot;secs_left = &quot;,$secs_left, &quot;hours_left = &quot;,$secs_left/3600,&quot;\n&quot;; 
</span><br>
<span class="quotelev1">&gt; -#        
</span><br>
<span class="quotelev1">&gt; -#    }
</span><br>
<span class="quotelev1">&gt; +   
</span><br>
<span class="quotelev1">&gt; +    $val = MTT::Values::Value($ini, &quot;MTT&quot;, &quot;shuffle_tests&quot;);
</span><br>
<span class="quotelev1">&gt; +    if (defined($val)) {
</span><br>
<span class="quotelev1">&gt; +	    my @shuffles = grep length, split(/\s*,\s*/,$val);
</span><br>
<span class="quotelev1">&gt; +	    my @allowed_shuffles = ('sections', 'tests', 'execs', 'nps', 'args', 'all');
</span><br>
<span class="quotelev1">&gt; +	    my %allowed_map = map { $_ =&gt; 1} @allowed_shuffles;
</span><br>
<span class="quotelev1">&gt; +	    foreach my $sh (@shuffles){
</span><br>
<span class="quotelev1">&gt; +	    	if (!exists($allowed_map{$sh})){
</span><br>
<span class="quotelev1">&gt; +	    		MTT::Messages::Error(&quot;&lt;$sh&gt; is not allowed shuffle_tests value. Allowed are:&quot;, join(',',@allowed_shuffles),&quot;.&quot;);
</span><br>
<span class="quotelev1">&gt; +	    	}
</span><br>
<span class="quotelev1">&gt; +	    	$Values-&gt;{shuffle_tests}-&gt;{$sh} = 1;
</span><br>
<span class="quotelev1">&gt; +	    }
</span><br>
<span class="quotelev1">&gt; +	    if ($Values-&gt;{shuffle_tests}-&gt;{all}){
</span><br>
<span class="quotelev1">&gt; +	    	foreach my $allow (@allowed_shuffles){
</span><br>
<span class="quotelev1">&gt; +	    		$Values-&gt;{shuffle_tests}-&gt;{$allow} = 1;
</span><br>
<span class="quotelev1">&gt; +	    	}
</span><br>
<span class="quotelev1">&gt; +	    }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Reporter/Email.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Reporter/Email.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Reporter/Email.pm	2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -148,8 +148,10 @@
</span><br>
<span class="quotelev1">&gt; 			$to = Value( $Ini, $Section, &quot;email_to&quot; );
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; -	my $body = $subject.&quot;\n&quot;.$footer.&quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; -	MTT::Mail::Send($subject, $to, $from, $body );
</span><br>
<span class="quotelev1">&gt; +	my $body = $footer.&quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +	if ($to){
</span><br>
<span class="quotelev1">&gt; +		MTT::Mail::Send($subject, $to, $from, $body );
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Reporter/TextFile.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Reporter/TextFile.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Reporter/TextFile.pm	2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -142,7 +142,7 @@
</span><br>
<span class="quotelev1">&gt; sub Flush{
</span><br>
<span class="quotelev1">&gt; 	my ($info, $entries) = @_;
</span><br>
<span class="quotelev1">&gt; 	my @results_to_flush = @results;
</span><br>
<span class="quotelev1">&gt; -	push(@results_to_flush, $entries); 
</span><br>
<span class="quotelev1">&gt; +	push(@results_to_flush, $entries) if $entries;
</span><br>
<span class="quotelev1">&gt; 	_summary_report(\@results_to_flush, &quot;yes&quot;)
</span><br>
<span class="quotelev1">&gt;         if (@results_to_flush);	
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
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Run.pm	2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -77,7 +77,12 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Go through all the sections in the ini file looking for section
</span><br>
<span class="quotelev1">&gt;     # names that begin with &quot;Test run:&quot;
</span><br>
<span class="quotelev1">&gt; -    foreach my $section ($ini-&gt;Sections()) {
</span><br>
<span class="quotelev1">&gt; +    my @sects = $ini-&gt;Sections();
</span><br>
<span class="quotelev1">&gt; +    if ($MTT::Globals::Values-&gt;{shuffle_tests}-&gt;{sections}){
</span><br>
<span class="quotelev1">&gt; +    	MTT::Util::shuffle(\@sects);	
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt; +    foreach my $section (@sects) {
</span><br>
<span class="quotelev1">&gt;         # See if we're supposed to terminate.  Only check in the
</span><br>
<span class="quotelev1">&gt;         # outtermost and innermost loops (even though we *could* check
</span><br>
<span class="quotelev1">&gt;         # at every loop level); that's good enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/RunEngine.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/RunEngine.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/RunEngine.pm	2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -39,7 +39,7 @@
</span><br>
<span class="quotelev1">&gt; my $mpi_details_name;
</span><br>
<span class="quotelev1">&gt; my $test_run_full_name;
</span><br>
<span class="quotelev1">&gt; my $break_threshold;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +my $shuffle;
</span><br>
<span class="quotelev1">&gt; # Keep track of how many tests have passed, failed, skipped, and timed out
</span><br>
<span class="quotelev1">&gt; my $test_results_count;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -52,7 +52,6 @@
</span><br>
<span class="quotelev1">&gt; my $report_after_n_results;
</span><br>
<span class="quotelev1">&gt; my $prev_section_name = undef;
</span><br>
<span class="quotelev1">&gt; my $group_reports = 0;
</span><br>
<span class="quotelev1">&gt; -my $tests_performed = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -96,6 +95,10 @@
</span><br>
<span class="quotelev1">&gt;     $break_threshold-&gt;{MTT::Values::TIMED_OUT} = Value($ini, $section, &quot;break_threshold_timeout&quot;);
</span><br>
<span class="quotelev1">&gt;     $break_threshold-&gt;{MTT::Values::SKIPPED}   = Value($ini, $section, &quot;break_threshold_skipped&quot;);
</span><br>
<span class="quotelev1">&gt;     $break_threshold-&gt;{MTT::Values::TIMED_OUT_OR_FAIL} = Value($ini, &quot;mtt&quot;, &quot;break_threshold_timeout_and_fail&quot;);
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt; +   	$shuffle = undef;
</span><br>
<span class="quotelev1">&gt; +    _register_shuffles($ini,$section);
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt; 	my $reports_per_job = Value($ini, &quot;mtt&quot;, &quot;reports_per_job&quot;);
</span><br>
<span class="quotelev1">&gt;     # This boolean value defaults to 0, and allows the user to submit results
</span><br>
<span class="quotelev1">&gt;     # after each test to ensure at least *some* results are submitted (in case
</span><br>
<span class="quotelev1">&gt; @@ -167,6 +170,10 @@
</span><br>
<span class="quotelev1">&gt;     $verbose_out = 0;
</span><br>
<span class="quotelev1">&gt;     my $test_count = 0;
</span><br>
<span class="quotelev1">&gt;     my $printed = 0;
</span><br>
<span class="quotelev1">&gt; +    if ($shuffle-&gt;{tests}){
</span><br>
<span class="quotelev1">&gt; +    	MTT::Util::shuffle(\@{$ret-&gt;{tests}});
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt;     foreach my $run (@{$ret-&gt;{tests}}) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         # See if we're supposed to terminate.
</span><br>
<span class="quotelev1">&gt; @@ -221,6 +228,9 @@
</span><br>
<span class="quotelev1">&gt;         if (ref($all_np) eq &quot;&quot;) {
</span><br>
<span class="quotelev1">&gt;             $test_results-&gt;{$all_np} = _run_one_np($install_dir, $run, $mpi_details, $all_np, $force);
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt; +        	if ($shuffle-&gt;{nps}){
</span><br>
<span class="quotelev1">&gt; +    			MTT::Util::shuffle($all_np);
</span><br>
<span class="quotelev1">&gt; +    		}
</span><br>
<span class="quotelev1">&gt;             foreach my $this_np (@$all_np) {
</span><br>
<span class="quotelev1">&gt;                 # See if we're supposed to terminate.
</span><br>
<span class="quotelev1">&gt;                 last
</span><br>
<span class="quotelev1">&gt; @@ -288,13 +298,19 @@
</span><br>
<span class="quotelev1">&gt;         if (ref($all_argv) eq &quot;&quot;) {
</span><br>
<span class="quotelev1">&gt;             $all_argv = [$all_argv];
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +		if ($shuffle-&gt;{args}){
</span><br>
<span class="quotelev1">&gt; +   			MTT::Util::shuffle($all_argv);
</span><br>
<span class="quotelev1">&gt; +		}
</span><br>
<span class="quotelev1">&gt;         foreach my $this_argv (@$all_argv) {
</span><br>
<span class="quotelev1">&gt;             $MTT::Test::Run::test_argv = $this_argv;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             # Get all the exec's for this one np
</span><br>
<span class="quotelev1">&gt;             my $execs = MTT::Values::EvaluateString($mpi_details-&gt;{exec}, $ini, $mpi_details_name);
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +            if (ref($execs) ne &quot;&quot; &amp;&amp; $shuffle-&gt;{execs}){
</span><br>
<span class="quotelev1">&gt; +            	MTT::Util::shuffle($execs);	 
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            
</span><br>
<span class="quotelev1">&gt; +            
</span><br>
<span class="quotelev1">&gt;             # If we just got one, run it.  Otherwise, loop over running them.
</span><br>
<span class="quotelev1">&gt;             if (ref($execs) eq &quot;&quot;) {
</span><br>
<span class="quotelev1">&gt;                 _run_one_test($install_dir, $run, $mpi_details, $execs, $name, 1,
</span><br>
<span class="quotelev1">&gt; @@ -497,14 +513,7 @@
</span><br>
<span class="quotelev1">&gt;                 if (exists($report-&gt;{test_result}) &amp;&amp; 
</span><br>
<span class="quotelev1">&gt;                     (MTT::Values::FAIL == $report-&gt;{test_result} || MTT::Values::TIMED_OUT == $report-&gt;{test_result}));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    $tests_performed++;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -	#print &quot;\t\t--&gt; Test #&quot;,$tests_performed,&quot; done\n&quot;;
</span><br>
<span class="quotelev1">&gt; -	
</span><br>
<span class="quotelev1">&gt; -		
</span><br>
<span class="quotelev1">&gt; -	#MTT::Reporter::Flush();
</span><br>
<span class="quotelev1">&gt; -	#MTT::Reporter::TextFile::deSubmit();
</span><br>
<span class="quotelev1">&gt; -	
</span><br>
<span class="quotelev1">&gt;     # If there is an after_each step, run it
</span><br>
<span class="quotelev1">&gt;     $ENV{MTT_TEST_RUN_RESULT_MESSAGE} =
</span><br>
<span class="quotelev1">&gt;         (MTT::Values::PASS == $report-&gt;{test_result} ? &quot;passed&quot; :
</span><br>
<span class="quotelev1">&gt; @@ -558,6 +567,32 @@
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +sub _register_shuffles{
</span><br>
<span class="quotelev1">&gt; +	my ($ini,$section) = @_;
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	my $val = MTT::Values::Value($ini, $section, &quot;shuffle_tests&quot;);
</span><br>
<span class="quotelev1">&gt; +	if (defined($val)) {
</span><br>
<span class="quotelev1">&gt; +	    my @shuffles = grep length, split(/\s*,\s*/,$val);
</span><br>
<span class="quotelev1">&gt; +	    my @allowed_shuffles = ('tests', 'execs', 'nps', 'args', 'all', 'none');
</span><br>
<span class="quotelev1">&gt; +	    my %allowed_map = map { $_ =&gt; 1} @allowed_shuffles;
</span><br>
<span class="quotelev1">&gt; +	    foreach my $sh (@shuffles){
</span><br>
<span class="quotelev1">&gt; +	    	if (!exists($allowed_map{$sh})){
</span><br>
<span class="quotelev1">&gt; +	    		MTT::Messages::Error(&quot;&lt;$sh&gt; is not allowed section specific shuffle_tests value. Allowed are:&quot;, join(',',@allowed_shuffles),&quot;.&quot;);
</span><br>
<span class="quotelev1">&gt; +	    	}
</span><br>
<span class="quotelev1">&gt; +	    	$shuffle-&gt;{$sh} = 1;
</span><br>
<span class="quotelev1">&gt; +	    }
</span><br>
<span class="quotelev1">&gt; +	    if ($shuffle-&gt;{none}){
</span><br>
<span class="quotelev1">&gt; +	    	$shuffle = undef;
</span><br>
<span class="quotelev1">&gt; +	    }
</span><br>
<span class="quotelev1">&gt; +	    if ($shuffle-&gt;{all}){
</span><br>
<span class="quotelev1">&gt; +	    	foreach my $allow (@allowed_shuffles){
</span><br>
<span class="quotelev1">&gt; +	    		$shuffle-&gt;{$allow} = 1;
</span><br>
<span class="quotelev1">&gt; +	    	}
</span><br>
<span class="quotelev1">&gt; +	    }
</span><br>
<span class="quotelev1">&gt; +	    
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    else{
</span><br>
<span class="quotelev1">&gt; +    	$shuffle = $MTT::Globals::Values-&gt;{shuffle_tests};
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Util.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Util.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Util.pm	2012-03-02 10:27:34 EST (Fri, 02 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -208,9 +208,6 @@
</span><br>
<span class="quotelev1">&gt;             $MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold} = &quot;true&quot;;
</span><br>
<span class="quotelev1">&gt;             $MTT::Globals::Internals-&gt;{stopped_on_break_threshold_message} = &quot;--&gt; Threshold ($per) exceeded for \&quot;$result_label\&quot;: $count-&gt;{$result} out of $total.\n&quot;;
</span><br>
<span class="quotelev1">&gt;             print STDOUT &quot;--&gt; Threshold ($per) exceeded for \&quot;$result_label\&quot;: $count-&gt;{$result} out of $total.\n&quot;;
</span><br>
<span class="quotelev1">&gt; -            if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold}){
</span><br>
<span class="quotelev1">&gt; -                print STDOUT &quot;0xdeadbeef: it works&quot;;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt;             return 1;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; @@ -395,4 +392,15 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +sub shuffle{
</span><br>
<span class="quotelev1">&gt; +	# Shuffle an array given via reference randomly
</span><br>
<span class="quotelev1">&gt; +	my $array = shift;
</span><br>
<span class="quotelev1">&gt; +    my $i;
</span><br>
<span class="quotelev1">&gt; +    for ($i = @$array; --$i; ) {
</span><br>
<span class="quotelev1">&gt; +        my $j = int rand ($i+1);
</span><br>
<span class="quotelev1">&gt; +        next if $i == $j;
</span><br>
<span class="quotelev1">&gt; +        @$array[$i,$j] = @$array[$j,$i];
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; 1;
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0581.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/02/0579.php">Eugene Loh: "Re: [MTT devel] duplicate results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0581.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
<li><strong>Reply:</strong> <a href="0581.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1440"</a>
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
