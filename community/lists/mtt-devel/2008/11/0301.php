<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1242";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 11:49:39 2008" -->
<!-- isoreceived="20081106164939" -->
<!-- sent="Thu, 6 Nov 2008 11:49:34 -0500" -->
<!-- isosent="20081106164934" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1242" -->
<!-- id="20081106164934.GK12131_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200811060914.mA69EsUh029470_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1242<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 11:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0302.php">Jeff Squyres: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey, this is good stuff!
<br>
<p>It would be fun to sync up the HTML style of
<br>
open-mpi.org/mtt with your local HTML file add-on (in a
<br>
single .css file?). Now that TextFile dumps .txt *and* .html
<br>
report files, maybe we need to rename the module
<br>
LocalFile.pm?
<br>
<p>-Ethan
<br>
<p><p>On Thu, Nov/06/2008 04:14:54AM, miked_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2008-11-06 04:14:53 EST (Thu, 06 Nov 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 1242
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1242">https://svn.open-mpi.org/trac/mtt/changeset/1242</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; generate html report: All_phase-summary.html
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Reporter/TextFile.pm |   196 +++++++++++++++++++++++++++++++-------- 
</span><br>
<span class="quotelev1">&gt;    1 files changed, 156 insertions(+), 40 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Reporter/TextFile.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Reporter/TextFile.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Reporter/TextFile.pm	2008-11-06 04:14:53 EST (Thu, 06 Nov 2008)
</span><br>
<span class="quotelev1">&gt; @@ -158,8 +158,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      print $summary_header;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    my $table = Text::TabularDisplay-&gt;new((&quot;Phase&quot;,&quot;Section&quot;,&quot;MPI Version&quot;, &quot;Duration (secs.)&quot;,&quot;Pass&quot;,&quot;Fail&quot;,&quot;Time out&quot;,&quot;Skip&quot;));
</span><br>
<span class="quotelev1">&gt; -    my ($total_fail, $total_succ, $total_tests,$total_duration) = (0,0,0,0);
</span><br>
<span class="quotelev1">&gt; +    my $table = Text::TabularDisplay-&gt;new((&quot;Phase&quot;,&quot;Section&quot;,&quot;MPI Version&quot;, &quot;Duration&quot;,&quot;Pass&quot;,&quot;Fail&quot;,&quot;Time out&quot;,&quot;Skip&quot;,&quot;Detailed report&quot;));
</span><br>
<span class="quotelev1">&gt; +    my ($total_fail, $total_succ, $total_duration, $html_table_content) = (0,0,0,&quot;&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      foreach my $results (@$results_arr) {
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -168,41 +168,48 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;              foreach my $section (keys %{$phase_obj}) {
</span><br>
<span class="quotelev1">&gt;                  my $section_obj = $results-&gt;{$phase}{$section};
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -                my ($pass, $fail, $timed, $skipped, $duration, $mpi_version) = (0, 0, 0, 0, 0, undef);
</span><br>
<span class="quotelev1">&gt; +                my ($per_mpiver) = ();
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  foreach my $results_hash (@$section_obj) {
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +                    my $mpi_version = $results_hash-&gt;{mpi_version};
</span><br>
<span class="quotelev1">&gt;                      if ($results_hash-&gt;{test_result} eq MTT::Values::PASS) {
</span><br>
<span class="quotelev1">&gt; -                        $pass++;
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{pass}++;
</span><br>
<span class="quotelev1">&gt; +                        $total_succ++;
</span><br>
<span class="quotelev1">&gt;                      } elsif ($results_hash-&gt;{test_result} eq MTT::Values::FAIL) {
</span><br>
<span class="quotelev1">&gt; -                        $fail++;
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{fail}++;
</span><br>
<span class="quotelev1">&gt; +                        $total_fail++;
</span><br>
<span class="quotelev1">&gt;                      } elsif ($results_hash-&gt;{test_result} eq MTT::Values::TIMED_OUT) {
</span><br>
<span class="quotelev1">&gt; -                        $timed++;
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{timed}++;
</span><br>
<span class="quotelev1">&gt; +                        $total_fail++;
</span><br>
<span class="quotelev1">&gt;                      } elsif ($results_hash-&gt;{test_result} eq MTT::Values::SKIPPED) {
</span><br>
<span class="quotelev1">&gt; -                        $skipped++;
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{skipped}++;
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt;                      if ( defined($results_hash-&gt;{duration}) ) {
</span><br>
<span class="quotelev1">&gt;                          my $one_test_duration = $results_hash-&gt;{duration};
</span><br>
<span class="quotelev1">&gt;                          $one_test_duration =~ s/(\d+).+/$1/g;
</span><br>
<span class="quotelev1">&gt; -                        $duration += $one_test_duration;
</span><br>
<span class="quotelev1">&gt; -                    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -                    if (defined($results_hash-&gt;{mpi_version}) and !$mpi_version) {
</span><br>
<span class="quotelev1">&gt; -                        $mpi_version = $results_hash-&gt;{mpi_version};
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{duration} += $one_test_duration;
</span><br>
<span class="quotelev1">&gt; +                        $total_duration += $one_test_duration;
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt; +                    $per_mpiver-&gt;{$mpi_version}{report} = $results_hash;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -                $total_fail += $fail + $timed;
</span><br>
<span class="quotelev1">&gt; -                $total_succ += $pass;
</span><br>
<span class="quotelev1">&gt; -                $total_duration += $duration;
</span><br>
<span class="quotelev1">&gt; -                $table-&gt;add($phase, $section, $mpi_version, $duration, $pass, $fail, $timed, $skipped);
</span><br>
<span class="quotelev1">&gt; +                foreach my $mpi_version (keys %{$per_mpiver}) {
</span><br>
<span class="quotelev1">&gt; +                    my $mpi_stat        = $per_mpiver-&gt;{$mpi_version};
</span><br>
<span class="quotelev1">&gt; +                    my $report          = $mpi_stat-&gt;{report};
</span><br>
<span class="quotelev1">&gt; +                    my $rep_file        = basename(_get_filename($report, $section));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                    my $duration_human  = _convert_duration($mpi_stat-&gt;{duration});
</span><br>
<span class="quotelev1">&gt; +                    $table-&gt;add($phase, $section, $mpi_version, $duration_human, $mpi_stat-&gt;{pass}, $mpi_stat-&gt;{fail}, 
</span><br>
<span class="quotelev1">&gt; +                        $mpi_stat-&gt;{timed}, $mpi_stat-&gt;{skipped}, $rep_file);
</span><br>
<span class="quotelev1">&gt; +                    $html_table_content .= add_tr($phase, $section, $mpi_version, $duration_human, $mpi_stat-&gt;{pass}, $mpi_stat-&gt;{fail},
</span><br>
<span class="quotelev1">&gt; +                        $mpi_stat-&gt;{timed}, $mpi_stat-&gt;{skipped}, $rep_file);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    $total_tests =  $total_fail + $total_succ;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    my $total_tests =  $total_fail + $total_succ;
</span><br>
<span class="quotelev1">&gt;      my $total_duration_human = _convert_duration($total_duration);
</span><br>
<span class="quotelev1">&gt;      my $perf_stat = &quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -223,27 +230,40 @@
</span><br>
<span class="quotelev1">&gt;      print $body;
</span><br>
<span class="quotelev1">&gt;      _output_results($file, $body);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -   if ( $to ) {
</span><br>
<span class="quotelev1">&gt; -     # Evaluate the email subject header and from
</span><br>
<span class="quotelev1">&gt; -     my ($subject, $body_footer);
</span><br>
<span class="quotelev1">&gt; -     my $subject_tmpl = Value($ini, $section, &quot;email_subject&quot;);
</span><br>
<span class="quotelev1">&gt; -     my $body_footer_tmpl = Value($ini, $section, &quot;email_footer&quot;);
</span><br>
<span class="quotelev1">&gt; -     my $from = Value($ini, $section, &quot;email_from&quot;);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -     my $overall_mtt_status = &quot;success&quot;;
</span><br>
<span class="quotelev1">&gt; -     if ( $total_fail &gt; 0 ) {
</span><br>
<span class="quotelev1">&gt; -         $overall_mtt_status = &quot;failed&quot;;
</span><br>
<span class="quotelev1">&gt; -     }
</span><br>
<span class="quotelev1">&gt; -     my $str = &quot;\$body_footer = \&quot;$body_footer_tmpl\&quot;&quot;;
</span><br>
<span class="quotelev1">&gt; -     eval $str;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -     my $str = &quot;\$subject = \&quot;$subject_tmpl\&quot;&quot;;
</span><br>
<span class="quotelev1">&gt; -     eval $str;
</span><br>
<span class="quotelev1">&gt; -     Verbose(&quot;&gt;&gt; Subject: $subject\n&quot;);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -     # Now send it
</span><br>
<span class="quotelev1">&gt; -     MTT::Mail::Send($subject, $to, $from, $body . $body_footer);
</span><br>
<span class="quotelev1">&gt; -     Verbose(&quot;&gt;&gt; Reported to e-mail: $to\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Wrte html report to a file
</span><br>
<span class="quotelev1">&gt; +    my $html_body = get_html_template();
</span><br>
<span class="quotelev1">&gt; +    $html_body =~ s/%TESTS_RESULTS%/$html_table_content/g;
</span><br>
<span class="quotelev1">&gt; +    my $html_totals = &quot;&lt;td&gt;$total_tests&lt;/td&gt;&lt;td&gt;$total_fail&lt;/td&gt;&lt;td&gt;$total_succ&lt;/td&gt;&lt;td&gt;$total_duration_human&lt;/td&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    $html_body =~ s/%TOTALS%/$html_totals/g;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $html_filename = &quot;All_phase-summary.html&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $html_file = &quot;$dirname/&quot; . MTT::Files::make_safe_filename(&quot;$html_filename&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    _output_results($html_file, $html_body);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if ( $to ) {
</span><br>
<span class="quotelev1">&gt; +        # Evaluate the email subject header and from
</span><br>
<span class="quotelev1">&gt; +        my ($subject, $body_footer);
</span><br>
<span class="quotelev1">&gt; +        my $subject_tmpl = Value($ini, $section, &quot;email_subject&quot;);
</span><br>
<span class="quotelev1">&gt; +        my $body_footer_tmpl = Value($ini, $section, &quot;email_footer&quot;);
</span><br>
<span class="quotelev1">&gt; +        my $from = Value($ini, $section, &quot;email_from&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        my $overall_mtt_status = &quot;success&quot;;
</span><br>
<span class="quotelev1">&gt; +        if ( $total_fail &gt; 0 ) {
</span><br>
<span class="quotelev1">&gt; +            $overall_mtt_status = &quot;failed&quot;;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        my $str = &quot;\$body_footer = \&quot;$body_footer_tmpl\&quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +        eval $str;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        my $str = &quot;\$subject = \&quot;$subject_tmpl\&quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +        eval $str;
</span><br>
<span class="quotelev1">&gt; +        Verbose(&quot;&gt;&gt; Subject: $subject\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # Now send it
</span><br>
<span class="quotelev1">&gt; +        MTT::Mail::Send($subject, $to, $from, $body . $body_footer);
</span><br>
<span class="quotelev1">&gt; +        Verbose(&quot;&gt;&gt; Reported to e-mail: $to\n&quot;);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      return 1;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -445,5 +465,101 @@
</span><br>
<span class="quotelev1">&gt;      return $res;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +sub add_tr
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my ($phase, $section, $mpi_version, $duration_human, $pass, $fail, $timed, $skipped, $rep_file_url) = @_;
</span><br>
<span class="quotelev1">&gt; +    my $trClass = &quot;Passed&quot;;
</span><br>
<span class="quotelev1">&gt; +    if ($fail or $timed) {
</span><br>
<span class="quotelev1">&gt; +        $trClass = &quot;Error&quot;;
</span><br>
<span class="quotelev1">&gt; +    } 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $tr = &quot;&lt;tr valign='top' class='$trClass'&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    $tr .= &quot;&lt;td&gt;&lt;a href='$rep_file_url'&gt;$phase&lt;/a&gt;&lt;/td&gt;&lt;td&gt;$section&lt;/td&gt;&lt;td&gt;$mpi_version&lt;/td&gt;&lt;td&gt;$duration_human&lt;/td&gt;&lt;td&gt;$pass&lt;/td&gt;&lt;td&gt;$fail&lt;/td&gt;&lt;td&gt;$timed&lt;/td&gt;&lt;td&gt;$skipped&lt;/td&gt;\n&lt;/tr&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $tr;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub get_html_template
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $tmpl = '
</span><br>
<span class="quotelev1">&gt; +    &lt;html xmlns:lxslt=&quot;<a href="http://xml.apache.org/xslt">http://xml.apache.org/xslt</a>&quot; xmlns:stringutils=&quot;xalan://org.apache.tools.ant.util.StringUtils&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;META http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=US-ASCII&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;head&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;style type=&quot;text/css&quot; media=screen&gt;
</span><br>
<span class="quotelev1">&gt; +    body {
</span><br>
<span class="quotelev1">&gt; +    font:normal 68% verdana,arial,helvetica;
</span><br>
<span class="quotelev1">&gt; +    color:#000000;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    table tr td, table tr th {
</span><br>
<span class="quotelev1">&gt; +    font-size: 68%;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    table.details tr th{
</span><br>
<span class="quotelev1">&gt; +    font-weight: bold;
</span><br>
<span class="quotelev1">&gt; +    text-align:left;
</span><br>
<span class="quotelev1">&gt; +    background:#a6caf0;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    table.details tr td{
</span><br>
<span class="quotelev1">&gt; +    background:#eeeee0;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    p {
</span><br>
<span class="quotelev1">&gt; +    line-height:1.5em;
</span><br>
<span class="quotelev1">&gt; +    margin-top:0.5em; margin-bottom:1.0em;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    h1 {
</span><br>
<span class="quotelev1">&gt; +    margin: 0px 0px 5px; font: 165% verdana,arial,helvetica
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    h2 {
</span><br>
<span class="quotelev1">&gt; +    margin-top: 1em; margin-bottom: 0.5em; font: bold 125% verdana,arial,helvetica
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    h3 {
</span><br>
<span class="quotelev1">&gt; +    margin-bottom: 0.5em; font: bold 115% verdana,arial,helvetica
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    h4 {
</span><br>
<span class="quotelev1">&gt; +    margin-bottom: 0.5em; font: bold 100% verdana,arial,helvetica
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    h5 {
</span><br>
<span class="quotelev1">&gt; +    margin-bottom: 0.5em; font: bold 100% verdana,arial,helvetica
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    h6 {
</span><br>
<span class="quotelev1">&gt; +    margin-bottom: 0.5em; font: bold 100% verdana,arial,helvetica
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    .Error {
</span><br>
<span class="quotelev1">&gt; +    font-weight:bold; color:red;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    .Failure {
</span><br>
<span class="quotelev1">&gt; +    font-weight:bold; color:purple;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    .Properties {
</span><br>
<span class="quotelev1">&gt; +    text-align:right;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    &lt;/style&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;/head&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;title&gt;MTT Results: Summary&lt;/title&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;h1&gt;MTT Results&lt;/h1&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;hr size=&quot;1&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;h2&gt;Summary&lt;/h2&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;table class=&quot;details&quot; border=&quot;0&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot; width=&quot;95%&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;tr valign=&quot;top&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;th&gt;Phase&lt;/th&gt;&lt;th&gt;Section&lt;/th&gt;&lt;th&gt;MPI Version&lt;/th&gt;&lt;th&gt;Duration&lt;/th&gt;&lt;th&gt;Pass&lt;/th&gt;&lt;th&gt;Fail&lt;/th&gt;&lt;th&gt;Time Out&lt;/th&gt;&lt;th&gt;Skip&lt;/th&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;/tr&gt;
</span><br>
<span class="quotelev1">&gt; +    %TESTS_RESULTS%
</span><br>
<span class="quotelev1">&gt; +    &lt;/table&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;h2&gt;Totals&lt;/h2&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;table class=&quot;details&quot; border=&quot;0&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot; width=&quot;95%&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;tr valign=&quot;top&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;th&gt;Tests&lt;/th&gt;&lt;th&gt;Failed&lt;/th&gt;&lt;th&gt;Passed&lt;/th&gt;&lt;th nowrap&gt;Duration&lt;/th&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;/tr&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;tr valign=&quot;top&quot; class=&quot;Pass&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    %TOTALS%
</span><br>
<span class="quotelev1">&gt; +    &lt;/tr&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;/table&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    &lt;/body&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;/html&gt;
</span><br>
<span class="quotelev1">&gt; +    ';
</span><br>
<span class="quotelev1">&gt; +    return $tmpl;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  1;
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
<li><strong>Next message:</strong> <a href="0302.php">Jeff Squyres: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
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
