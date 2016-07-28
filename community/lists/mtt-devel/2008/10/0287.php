<?
$subject_val = "Re: [MTT devel] mtt patch: summary digest";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 10:17:57 2008" -->
<!-- isoreceived="20081027141757" -->
<!-- sent="Mon, 27 Oct 2008 09:17:53 -0500" -->
<!-- isosent="20081027141753" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt patch: summary digest" -->
<!-- id="20081027141752.GA12131_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CC2B34CB910B457F9C9DBD2CC88E94EF_at_voltaire.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt patch: summary digest<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 10:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0288.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>Previous message:</strong> <a href="0286.php">Mike Dubman: "[MTT devel] mtt patch: summary digest"</a>
<li><strong>In reply to:</strong> <a href="0286.php">Mike Dubman: "[MTT devel] mtt patch: summary digest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0288.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm fine with these changes.
<br>
<p>-Ethan
<br>
<p><p>On Sun, Oct/26/2008 04:14:23PM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Hello guys,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Please consider applying attached mtt patch to allow following features:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     1. Support for centos5
</span><br>
<span class="quotelev1">&gt;     2. Send single, digested email report for all completed tests (similar to
</span><br>
<span class="quotelev1">&gt;        text file summary file)
</span><br>
<span class="quotelev1">&gt;     3. Provide basic statistics in the digested email about completed tests
</span><br>
<span class="quotelev1">&gt;        (similar to junit): duration, mpi version, overall status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mike
</span><br>
<p><span class="quotelev1">&gt; Index: samples/ompi-core-template.ini
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- samples/ompi-core-template.ini	(revision 1235)
</span><br>
<span class="quotelev1">&gt; +++ samples/ompi-core-template.ini	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -719,6 +719,15 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  textfile_textwrap = 78
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +# Send digested summary of mtt execution by email
</span><br>
<span class="quotelev1">&gt; +#email_to = 
</span><br>
<span class="quotelev1">&gt; +#email_subject = MTT test has completed, status: $overall_mtt_status
</span><br>
<span class="quotelev1">&gt; +#email_footer = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; +#Test Scratch Directory is &amp;scratch_root()
</span><br>
<span class="quotelev1">&gt; +#EOT
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  [Reporter: send email]
</span><br>
<span class="quotelev1">&gt;  module = Email
</span><br>
<span class="quotelev1">&gt;  email_to = fill this in
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/Reporter/TextFile.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Reporter/TextFile.pm	(revision 1235)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Reporter/TextFile.pm	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -21,6 +21,7 @@
</span><br>
<span class="quotelev1">&gt;  use MTT::Files;
</span><br>
<span class="quotelev1">&gt;  use MTT::Version;
</span><br>
<span class="quotelev1">&gt;  use Data::Dumper;
</span><br>
<span class="quotelev1">&gt; +use MTT::Mail;
</span><br>
<span class="quotelev1">&gt;  use File::Basename;
</span><br>
<span class="quotelev1">&gt;  use Text::Wrap;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -43,6 +44,13 @@
</span><br>
<span class="quotelev1">&gt;  # wordwrap pref for reports
</span><br>
<span class="quotelev1">&gt;  my $textwrap;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +# global ini variables
</span><br>
<span class="quotelev1">&gt; +my ($ini, $section);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# send summary by email if requested
</span><br>
<span class="quotelev1">&gt; +my $to;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  # Do we have Text::TabularDisplay?
</span><br>
<span class="quotelev1">&gt;  my $have_tabulardisplay;
</span><br>
<span class="quotelev1">&gt;  eval &quot;\$have_tabulardisplay = require Text::TabularDisplay&quot;;
</span><br>
<span class="quotelev1">&gt; @@ -50,7 +58,7 @@
</span><br>
<span class="quotelev1">&gt;  #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  sub Init {
</span><br>
<span class="quotelev1">&gt; -    my ($ini, $section) = @_;
</span><br>
<span class="quotelev1">&gt; +    ($ini, $section) = @_;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Sanity check
</span><br>
<span class="quotelev1">&gt;      if (!$have_tabulardisplay) {
</span><br>
<span class="quotelev1">&gt; @@ -88,6 +96,24 @@
</span><br>
<span class="quotelev1">&gt;          Debug(&quot;File reporter initialized (&lt;stdout&gt;)\n&quot;);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Initialize nail notification for summary 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $to = Value($ini, $section, &quot;email_to&quot;);
</span><br>
<span class="quotelev1">&gt; +    if ($to) {
</span><br>
<span class="quotelev1">&gt; +        # Setup the mailer
</span><br>
<span class="quotelev1">&gt; +        my $agent = Value($ini, $section, &quot;email_agent&quot;);
</span><br>
<span class="quotelev1">&gt; +        if (!MTT::Mail::Init($agent)) {
</span><br>
<span class="quotelev1">&gt; +            Debug(&quot;Failed to setup TextFileEmail reporter\n&quot;);
</span><br>
<span class="quotelev1">&gt; +            return 0;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        Debug(&quot;TextFileEmail reporter initialized ($to)\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      return 1;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -132,7 +158,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      print $summary_header;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    my $table = Text::TabularDisplay-&gt;new((&quot;Phase&quot;,&quot;Section&quot;,&quot;Pass&quot;,&quot;Fail&quot;,&quot;Time out&quot;,&quot;Skip&quot;));
</span><br>
<span class="quotelev1">&gt; +    my $table = Text::TabularDisplay-&gt;new((&quot;Phase&quot;,&quot;Section&quot;,&quot;MPI Version&quot;, &quot;Duration (secs.)&quot;,&quot;Pass&quot;,&quot;Fail&quot;,&quot;Time out&quot;,&quot;Skip&quot;));
</span><br>
<span class="quotelev1">&gt; +    my ($total_fail, $total_succ, $total_tests,$total_duration) = (0,0,0,0);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      foreach my $results (@$results_arr) {
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -142,7 +169,7 @@
</span><br>
<span class="quotelev1">&gt;              foreach my $section (keys %{$phase_obj}) {
</span><br>
<span class="quotelev1">&gt;                  my $section_obj = $results-&gt;{$phase}{$section};
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -                my ($pass, $fail, $timed, $skipped) = (0, 0, 0, 0);
</span><br>
<span class="quotelev1">&gt; +                my ($pass, $fail, $timed, $skipped, $duration, $mpi_version) = (0, 0, 0, 0, 0, undef);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  foreach my $results_hash (@$section_obj) {
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -155,22 +182,69 @@
</span><br>
<span class="quotelev1">&gt;                      } elsif ($results_hash-&gt;{test_result} eq MTT::Values::SKIPPED) {
</span><br>
<span class="quotelev1">&gt;                          $skipped++;
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt; +                    if ( defined($results_hash-&gt;{duration}) ) {
</span><br>
<span class="quotelev1">&gt; +                        my $one_test_duration = $results_hash-&gt;{duration};
</span><br>
<span class="quotelev1">&gt; +                        $one_test_duration =~ s/(\d+).+/$1/g;
</span><br>
<span class="quotelev1">&gt; +                        $duration += $one_test_duration;
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                    if (defined($results_hash-&gt;{mpi_version}) and !$mpi_version) {
</span><br>
<span class="quotelev1">&gt; +                        $mpi_version = $results_hash-&gt;{mpi_version};
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; -                $table-&gt;add($phase, $section, $pass, $fail, $timed, $skipped);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                $total_fail += $fail + $timed;
</span><br>
<span class="quotelev1">&gt; +                $total_succ += $pass;
</span><br>
<span class="quotelev1">&gt; +                $total_duration += $duration;
</span><br>
<span class="quotelev1">&gt; +                $table-&gt;add($phase, $section, $mpi_version, $duration, $pass, $fail, $timed, $skipped);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    print $table-&gt;render . &quot;\n&quot; . $summary_footer;
</span><br>
<span class="quotelev1">&gt; +    $total_tests =  $total_fail + $total_succ;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    my $total_duration_human = _convert_duration($total_duration);
</span><br>
<span class="quotelev1">&gt; +    my $perf_stat = &quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Total Tests:    $total_tests
</span><br>
<span class="quotelev1">&gt; +    Total Failures: $total_fail
</span><br>
<span class="quotelev1">&gt; +    Total Passed:   $total_succ
</span><br>
<span class="quotelev1">&gt; +    Total Duration: $total_duration secs. ($total_duration_human)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    &quot;;
</span><br>
<span class="quotelev1">&gt; +    print $table-&gt;render . &quot;\n&quot; . $perf_stat . $summary_footer;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      # Write the Summary report to a file
</span><br>
<span class="quotelev1">&gt;      my $filename = &quot;All_phase-summary.txt&quot;;
</span><br>
<span class="quotelev1">&gt;      my $file = &quot;$dirname/&quot; . MTT::Files::make_safe_filename(&quot;$filename&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    _output_results($file,
</span><br>
<span class="quotelev1">&gt; -        join(&quot;\n&quot;, ($summary_header, 
</span><br>
<span class="quotelev1">&gt; -                    $table-&gt;render,
</span><br>
<span class="quotelev1">&gt; -                    $summary_footer)));
</span><br>
<span class="quotelev1">&gt; +    my $body = join(&quot;\n&quot;, ($summary_header, $table-&gt;render, $perf_stat, $summary_footer));
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    print $body;
</span><br>
<span class="quotelev1">&gt; +    _output_results($file, $body);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   if ( $to ) {
</span><br>
<span class="quotelev1">&gt; +     # Evaluate the email subject header and from
</span><br>
<span class="quotelev1">&gt; +     my ($subject, $body_footer);
</span><br>
<span class="quotelev1">&gt; +     my $subject_tmpl = Value($ini, $section, &quot;email_subject&quot;);
</span><br>
<span class="quotelev1">&gt; +     my $body_footer_tmpl = Value($ini, $section, &quot;email_footer&quot;);
</span><br>
<span class="quotelev1">&gt; +     my $from = Value($ini, $section, &quot;email_from&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +     my $overall_mtt_status = &quot;success&quot;;
</span><br>
<span class="quotelev1">&gt; +     if ( $total_fail &gt; 0 ) {
</span><br>
<span class="quotelev1">&gt; +         $overall_mtt_status = &quot;failed&quot;;
</span><br>
<span class="quotelev1">&gt; +     }
</span><br>
<span class="quotelev1">&gt; +     my $str = &quot;\$body_footer = \&quot;$body_footer_tmpl\&quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +     eval $str;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +     my $str = &quot;\$subject = \&quot;$subject_tmpl\&quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +     eval $str;
</span><br>
<span class="quotelev1">&gt; +     Verbose(&quot;&gt;&gt; Subject: $subject\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +     # Now send it
</span><br>
<span class="quotelev1">&gt; +     MTT::Mail::Send($subject, $to, $from, $body . $body_footer);
</span><br>
<span class="quotelev1">&gt; +     Verbose(&quot;&gt;&gt; Reported to e-mail: $to\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;      return 1;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -344,4 +418,32 @@
</span><br>
<span class="quotelev1">&gt;      return $report;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +# convert duration in secs to human-readable dd HH:MM:SS
</span><br>
<span class="quotelev1">&gt; +sub _convert_duration
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    use integer;
</span><br>
<span class="quotelev1">&gt; +    my ($rtime)= @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $min   = $rtime / 60;
</span><br>
<span class="quotelev1">&gt; +    my $sec   = $rtime % 60;
</span><br>
<span class="quotelev1">&gt; +    my $hour  = $min   / 60;
</span><br>
<span class="quotelev1">&gt; +    my $min   = $min   % 60;
</span><br>
<span class="quotelev1">&gt; +    my $day   = $hour  / 24;
</span><br>
<span class="quotelev1">&gt; +    my $hour  = $hour  % 24;
</span><br>
<span class="quotelev1">&gt; +    my @times;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if ($day) {
</span><br>
<span class="quotelev1">&gt; +        @times = ($day, $hour, $min, $sec);
</span><br>
<span class="quotelev1">&gt; +    } elsif ($hour) {
</span><br>
<span class="quotelev1">&gt; +        @times = ($hour, $min, $sec);
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        @times = ($min, $sec);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $res = join(':', @times);
</span><br>
<span class="quotelev1">&gt; +    $res =~ s/\b(\d)\b/0$1/g;
</span><br>
<span class="quotelev1">&gt; +    return $res;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  1;
</span><br>
<span class="quotelev1">&gt; Index: client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- client/whatami/whatami	(revision 1235)
</span><br>
<span class="quotelev1">&gt; +++ client/whatami/whatami	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -195,7 +195,7 @@
</span><br>
<span class="quotelev1">&gt;                  elif [ -n &quot;`egrep 'SGI ProPack 3' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                          distro=rhel3
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; -                elif [ -n &quot;`egrep 'CentOS release 4.[0-9]' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt; +                elif [ -n &quot;`egrep 'CentOS release [45].[0-9]' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                          distro=rhel4
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  elif [ -n &quot;`egrep 'SuSE SLES 8' /etc/issue`&quot; ]; then
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
<li><strong>Next message:</strong> <a href="0288.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
<li><strong>Previous message:</strong> <a href="0286.php">Mike Dubman: "[MTT devel] mtt patch: summary digest"</a>
<li><strong>In reply to:</strong> <a href="0286.php">Mike Dubman: "[MTT devel] mtt patch: summary digest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0288.php">Jeff Squyres: "Re: [MTT devel] mtt patch: summary digest"</a>
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
