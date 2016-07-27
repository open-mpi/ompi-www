<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1147";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 14:57:49 2008" -->
<!-- isoreceived="20080131195749" -->
<!-- sent="Thu, 31 Jan 2008 14:57:46 -0500" -->
<!-- isosent="20080131195746" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1147" -->
<!-- id="C047636A-FFF9-4292-8284-8BCA5DD4B230_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200801311951.m0VJpCT6031901_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1147<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 14:57:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0232.php">Josh Hursey: "[MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0230.php">Jeff Squyres: "Re: [MTT devel] Reporter Slowness"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I updated the Wiki to reflect the changes to the crontab that result  
<br>
from this commit:
<br>
<a href="https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance">https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance</a>
<br>
<p>This new script will better maintain our data, and hopefully not get  
<br>
in the way too often.
<br>
<p>-- Josh
<br>
<p>On Jan 31, 2008, at 2:51 PM, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2008-01-31 14:51:11 EST (Thu, 31 Jan 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 1147
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1147">https://svn.open-mpi.org/trac/mtt/changeset/1147</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Replace the nightly maintenance script with a periodic script that  
</span><br>
<span class="quotelev1">&gt; is a bit more
</span><br>
<span class="quotelev1">&gt; flexible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/server/sql/cron/periodic-maintenance.pl   (contents, props  
</span><br>
<span class="quotelev1">&gt; changed)
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;   trunk/server/sql/cron/maintain-nightly.pl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/server/sql/cron/maintain-nightly.pl
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/sql/cron/maintain-nightly.pl	2008-01-31 14:51:11  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 31 Jan 2008)
</span><br>
<span class="quotelev1">&gt; +++ (empty file)
</span><br>
<span class="quotelev1">&gt; @@ -1,67 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#
</span><br>
<span class="quotelev1">&gt; -# Josh Hursey
</span><br>
<span class="quotelev1">&gt; -#
</span><br>
<span class="quotelev1">&gt; -use strict;
</span><br>
<span class="quotelev1">&gt; -use DBI;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -my $argc = scalar(@ARGV);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -my $year;
</span><br>
<span class="quotelev1">&gt; -my $month;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -my @month_array = ( &quot;01&quot;, &quot;02&quot;, &quot;03&quot;, &quot;04&quot;, &quot;05&quot;, &quot;06&quot;,
</span><br>
<span class="quotelev1">&gt; -                    &quot;07&quot;, &quot;08&quot;, &quot;09&quot;, &quot;10&quot;, &quot;11&quot;, &quot;12&quot;);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -my @year_array = (2006, 2007);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -my $mtt_user = &quot;mtt&quot;;
</span><br>
<span class="quotelev1">&gt; -my $dbh_mtt = DBI-&gt;connect(&quot;dbi:Pg:dbname=mtt&quot;,  $mtt_user);
</span><br>
<span class="quotelev1">&gt; -my $stmt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#my $vacuum_type = &quot;VACUUM FULL&quot;;
</span><br>
<span class="quotelev1">&gt; -my $vacuum_type = &quot;VACUUM&quot;;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -$stmt = $dbh_mtt-&gt;prepare(&quot;set vacuum_mem = &quot;.(32 * 1024));
</span><br>
<span class="quotelev1">&gt; -$stmt-&gt;execute();
</span><br>
<span class="quotelev1">&gt; -$stmt-&gt;finish;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -foreach $year (@year_array) {
</span><br>
<span class="quotelev1">&gt; -  my @cur_month_array = ();
</span><br>
<span class="quotelev1">&gt; -  if( $year == 2006 ) {
</span><br>
<span class="quotelev1">&gt; -    push(@cur_month_array, 11);
</span><br>
<span class="quotelev1">&gt; -    push(@cur_month_array, 12);
</span><br>
<span class="quotelev1">&gt; -  }
</span><br>
<span class="quotelev1">&gt; -  else {
</span><br>
<span class="quotelev1">&gt; -    @cur_month_array = @month_array;
</span><br>
<span class="quotelev1">&gt; -  }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -  foreach $month (@cur_month_array) {
</span><br>
<span class="quotelev1">&gt; -    my $cur_wk = 0;
</span><br>
<span class="quotelev1">&gt; -    for($cur_wk = 1; $cur_wk &lt;= 5; ++$cur_wk) {
</span><br>
<span class="quotelev1">&gt; -      my $post_fix = &quot;y&quot; . $year . &quot;_m&quot; . $month . &quot;_wk&quot; . $cur_wk;
</span><br>
<span class="quotelev1">&gt; -      print(&quot;Looking at $post_fix...\n&quot;);
</span><br>
<span class="quotelev1">&gt; -      $stmt = $dbh_mtt-&gt;prepare($vacuum_type.&quot; mpi_install_&quot;. 
</span><br>
<span class="quotelev1">&gt; $post_fix);
</span><br>
<span class="quotelev1">&gt; -      $stmt-&gt;execute();
</span><br>
<span class="quotelev1">&gt; -      $stmt-&gt;finish;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      $stmt = $dbh_mtt-&gt;prepare($vacuum_type.&quot; test_build_&quot;. 
</span><br>
<span class="quotelev1">&gt; $post_fix);
</span><br>
<span class="quotelev1">&gt; -      $stmt-&gt;execute();
</span><br>
<span class="quotelev1">&gt; -      $stmt-&gt;finish;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -      $stmt = $dbh_mtt-&gt;prepare($vacuum_type.&quot; test_run_&quot;.$post_fix);
</span><br>
<span class="quotelev1">&gt; -      $stmt-&gt;execute();
</span><br>
<span class="quotelev1">&gt; -      $stmt-&gt;finish;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -  }
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -print(&quot;Finally Analyze...\n&quot;);
</span><br>
<span class="quotelev1">&gt; -$stmt = $dbh_mtt-&gt;prepare(&quot;ANALYZE&quot;);
</span><br>
<span class="quotelev1">&gt; -$stmt-&gt;execute();
</span><br>
<span class="quotelev1">&gt; -$stmt-&gt;finish;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -$dbh_mtt-&gt;disconnect;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -exit 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: trunk/server/sql/cron/periodic-maintenance.pl
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/sql/cron/periodic-maintenance.pl	2008-01-31  
</span><br>
<span class="quotelev1">&gt; 14:51:11 EST (Thu, 31 Jan 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,340 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Josh Hursey
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Daily:
</span><br>
<span class="quotelev1">&gt; +#   VACUUM  - Current Month, Last Month (no args)
</span><br>
<span class="quotelev1">&gt; +#   ANALYZE - Entire Database (no args)
</span><br>
<span class="quotelev1">&gt; +# Weekly:
</span><br>
<span class="quotelev1">&gt; +#   VACUUM  - Current Month, Last Month, Base Tables (no args)
</span><br>
<span class="quotelev1">&gt; +#   ANALYZE - Entire Database (no args)
</span><br>
<span class="quotelev1">&gt; +# Monthly:
</span><br>
<span class="quotelev1">&gt; +#   VACUUM  - Current Month, Last Month, Base Tables (FULL)
</span><br>
<span class="quotelev1">&gt; +#   ANALYZE - Entire Database (no args)
</span><br>
<span class="quotelev1">&gt; +# Yearly:
</span><br>
<span class="quotelev1">&gt; +#   VACUUM  - Entire Database (FULL)
</span><br>
<span class="quotelev1">&gt; +#   ANALYZE - Entire Database (no args)
</span><br>
<span class="quotelev1">&gt; +#   - Email partition tables reminder (JJH TODO)
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +use DBI;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +my $debug;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +my $MAIN_DAY   = 0;
</span><br>
<span class="quotelev1">&gt; +my $MAIN_WEEK  = 1;
</span><br>
<span class="quotelev1">&gt; +my $MAIN_MONTH = 2;
</span><br>
<span class="quotelev1">&gt; +my $MAIN_YEAR  = 3;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +my $cur_main = $MAIN_DAY;
</span><br>
<span class="quotelev1">&gt; +my $cur_year  = `date +\%Y`;
</span><br>
<span class="quotelev1">&gt; +my $cur_month = `date +\%m`;
</span><br>
<span class="quotelev1">&gt; +chomp($cur_year);
</span><br>
<span class="quotelev1">&gt; +chomp($cur_month);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +my $dbh_mtt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +my $epoch_year = &quot;2006&quot;;
</span><br>
<span class="quotelev1">&gt; +my @epoch_months = (&quot;11&quot;, &quot;12&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +my @week_array = ( &quot;1&quot;, &quot;2&quot;, &quot;3&quot;, &quot;4&quot;, &quot;5&quot;);
</span><br>
<span class="quotelev1">&gt; +my @part_table_postfix = ();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +my @main_part_tables = (&quot;mpi_install&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;test_build&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;test_run&quot;);
</span><br>
<span class="quotelev1">&gt; +my @main_base_tables = (&quot;compiler&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;compute_cluster&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;description&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;environment&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;interconnects&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;latency_bandwidth&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;mpi_get&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;performance&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;permalinks&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;result_message&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;submit&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;test_names&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;test_suites&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;test_run_command&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;test_run_networks&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;mtt_stats_contrib&quot;,
</span><br>
<span class="quotelev1">&gt; +                        &quot;mtt_stats_database&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Parse Command Line Arguments
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +if( 0 != parse_args() ) {
</span><br>
<span class="quotelev1">&gt; +  exit -1;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +set_date_ranges();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# VACUUM database
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +if( 0 != do_vacuum() ) {
</span><br>
<span class="quotelev1">&gt; +  exit -1;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# ANALYZE database
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +if( 0 != do_analyze() ) {
</span><br>
<span class="quotelev1">&gt; +  exit -1;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +exit 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub parse_args() {
</span><br>
<span class="quotelev1">&gt; +  my $argc = scalar(@ARGV);
</span><br>
<span class="quotelev1">&gt; +  my $i;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  for( $i = 0; $i &lt; $argc; ++$i) {
</span><br>
<span class="quotelev1">&gt; +    if( $ARGV[$i] =~ /-daily/ ||
</span><br>
<span class="quotelev1">&gt; +        $ARGV[$i] =~ /-day/ ) {
</span><br>
<span class="quotelev1">&gt; +      $cur_main = $MAIN_DAY;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    elsif( $ARGV[$i] =~ /-week/ ) {
</span><br>
<span class="quotelev1">&gt; +      $cur_main = $MAIN_WEEK;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    elsif( $ARGV[$i] =~ /-month/ ) {
</span><br>
<span class="quotelev1">&gt; +      $cur_main = $MAIN_MONTH;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    elsif( $ARGV[$i] =~ /-year/ ) {
</span><br>
<span class="quotelev1">&gt; +      $cur_main = $MAIN_YEAR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    else {
</span><br>
<span class="quotelev1">&gt; +      print &quot;Unknown ARG $i) &lt;&quot;.$ARGV[$i].&quot;&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub set_date_ranges() {
</span><br>
<span class="quotelev1">&gt; +  my ($y, $m);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  if( defined($debug) ) {
</span><br>
<span class="quotelev1">&gt; +    print &quot;Current Year/Month: &lt;$cur_year&gt; &lt;$cur_month&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  # Daily:   Current Month, Last Month
</span><br>
<span class="quotelev1">&gt; +  # Weekly:  Current Month, Last Month
</span><br>
<span class="quotelev1">&gt; +  # Monthly: Current Month, Last Month
</span><br>
<span class="quotelev1">&gt; +  if( $MAIN_DAY   == $cur_main ||
</span><br>
<span class="quotelev1">&gt; +      $MAIN_WEEK  == $cur_main ||
</span><br>
<span class="quotelev1">&gt; +      $MAIN_MONTH == $cur_main ) {
</span><br>
<span class="quotelev1">&gt; +    if( ($cur_month + 0) == 1 ) {
</span><br>
<span class="quotelev1">&gt; +      push(@part_table_postfix, get_part_table_postfix($cur_year-1,  
</span><br>
<span class="quotelev1">&gt; &quot;12&quot;));
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +      push(@part_table_postfix, get_part_table_postfix($cur_year,    
</span><br>
<span class="quotelev1">&gt; $cur_month - 1));
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    push(@part_table_postfix, get_part_table_postfix($cur_year,    
</span><br>
<span class="quotelev1">&gt; $cur_month));
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +  # Yearly: All Months
</span><br>
<span class="quotelev1">&gt; +  elsif( $MAIN_YEAR == $cur_main ) {
</span><br>
<span class="quotelev1">&gt; +    my @year_array = ($epoch_year);
</span><br>
<span class="quotelev1">&gt; +    # Extend the year array
</span><br>
<span class="quotelev1">&gt; +    for( $y = $year_array[0] + 1; $y &lt;= $cur_year; ++$y) {
</span><br>
<span class="quotelev1">&gt; +      push(@year_array, $y);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    foreach $y (@year_array) {
</span><br>
<span class="quotelev1">&gt; +      my @cur_month_array = ();
</span><br>
<span class="quotelev1">&gt; +      @cur_month_array = get_month_set($y);
</span><br>
<span class="quotelev1">&gt; +      foreach $m (@cur_month_array) {
</span><br>
<span class="quotelev1">&gt; +        push(@part_table_postfix, get_part_table_postfix($y, $m));
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub do_vacuum() {
</span><br>
<span class="quotelev1">&gt; +  my $vac_cmd = &quot;VACUUM&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  if(    $MAIN_DAY   == $cur_main ) { $vac_cmd = &quot;VACUUM&quot;; }
</span><br>
<span class="quotelev1">&gt; +  elsif( $MAIN_WEEK  == $cur_main ) { $vac_cmd = &quot;VACUUM&quot;; }
</span><br>
<span class="quotelev1">&gt; +  elsif( $MAIN_MONTH == $cur_main ) { $vac_cmd = &quot;VACUUM FULL&quot;; }
</span><br>
<span class="quotelev1">&gt; +  elsif( $MAIN_YEAR  == $cur_main ) { $vac_cmd = &quot;VACUUM FULL&quot;; }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  connect_db();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  # Process the partition tables (does not include master partition  
</span><br>
<span class="quotelev1">&gt; tables)
</span><br>
<span class="quotelev1">&gt; +  forall_part_tables($vac_cmd);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  # Process the base tables (include master partition tables)
</span><br>
<span class="quotelev1">&gt; +  if( $MAIN_DAY   != $cur_main ) {
</span><br>
<span class="quotelev1">&gt; +    forall_base_tables($vac_cmd);
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  disconnect_db();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub do_analyze() {
</span><br>
<span class="quotelev1">&gt; +  my $stmt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  if( defined($debug) ) {
</span><br>
<span class="quotelev1">&gt; +    return 0;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  connect_db();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  print(&quot;Analyze...\n&quot;);
</span><br>
<span class="quotelev1">&gt; +  $stmt = $dbh_mtt-&gt;prepare(&quot;ANALYZE&quot;);
</span><br>
<span class="quotelev1">&gt; +  $stmt-&gt;execute();
</span><br>
<span class="quotelev1">&gt; +  $stmt-&gt;finish;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  disconnect_db();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub connect_db() {
</span><br>
<span class="quotelev1">&gt; +  my $mtt_user = &quot;mtt&quot;;
</span><br>
<span class="quotelev1">&gt; +  my $stmt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  if( defined($debug) ) {
</span><br>
<span class="quotelev1">&gt; +    return 0;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  $dbh_mtt = DBI-&gt;connect(&quot;dbi:Pg:dbname=mtt&quot;,  $mtt_user);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  $stmt = $dbh_mtt-&gt;prepare(&quot;set vacuum_mem = &quot;.(32 * 1024));
</span><br>
<span class="quotelev1">&gt; +  $stmt-&gt;execute();
</span><br>
<span class="quotelev1">&gt; +  $stmt-&gt;finish;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub disconnect_db() {
</span><br>
<span class="quotelev1">&gt; +  if( defined($debug) ) {
</span><br>
<span class="quotelev1">&gt; +    return 0;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  $dbh_mtt-&gt;disconnect;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub forall_part_tables() {
</span><br>
<span class="quotelev1">&gt; +  my $base_cmd = shift(@_);
</span><br>
<span class="quotelev1">&gt; +  my $cmd;
</span><br>
<span class="quotelev1">&gt; +  my $stmt;
</span><br>
<span class="quotelev1">&gt; +  my $week;
</span><br>
<span class="quotelev1">&gt; +  my $p;
</span><br>
<span class="quotelev1">&gt; +  my $base_table;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  foreach $base_table (@main_part_tables) {
</span><br>
<span class="quotelev1">&gt; +    foreach $p (@part_table_postfix) {
</span><br>
<span class="quotelev1">&gt; +      print($base_cmd.&quot;'ing table &quot;.$base_table.&quot;_&quot;.$p.&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; +      foreach $week (@week_array) {
</span><br>
<span class="quotelev1">&gt; +        my $post_fix = get_part_table_postfix_append_week($p, $week);
</span><br>
<span class="quotelev1">&gt; +        if( defined($debug) ) {
</span><br>
<span class="quotelev1">&gt; +          print(&quot;Processing Command &lt;&quot;.$base_cmd.&quot; &quot;. 
</span><br>
<span class="quotelev1">&gt; $base_table.&quot;_&quot;.$post_fix.&quot;&gt;\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +          $stmt = $dbh_mtt-&gt;prepare($base_cmd.&quot; &quot;.$base_table.&quot;_&quot;. 
</span><br>
<span class="quotelev1">&gt; $post_fix);
</span><br>
<span class="quotelev1">&gt; +          $stmt-&gt;execute();
</span><br>
<span class="quotelev1">&gt; +          $stmt-&gt;finish;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub forall_base_tables() {
</span><br>
<span class="quotelev1">&gt; +  my $base_cmd = shift(@_);
</span><br>
<span class="quotelev1">&gt; +  my $cmd;
</span><br>
<span class="quotelev1">&gt; +  my $stmt;
</span><br>
<span class="quotelev1">&gt; +  my $base_table;
</span><br>
<span class="quotelev1">&gt; +  my @all_tables = ();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  push(@all_tables, @main_part_tables);
</span><br>
<span class="quotelev1">&gt; +  push(@all_tables, @main_base_tables);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  foreach $base_table (@all_tables) {
</span><br>
<span class="quotelev1">&gt; +    if( defined($debug) ) {
</span><br>
<span class="quotelev1">&gt; +      print(&quot;Processing Command &lt;&quot;.$base_cmd.&quot; &quot;.$base_table.&quot;&gt;\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +      $stmt = $dbh_mtt-&gt;prepare($base_cmd.&quot; &quot;.$base_table);
</span><br>
<span class="quotelev1">&gt; +      $stmt-&gt;execute();
</span><br>
<span class="quotelev1">&gt; +      $stmt-&gt;finish;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub get_month_set() {
</span><br>
<span class="quotelev1">&gt; +  my $year = shift(@_);
</span><br>
<span class="quotelev1">&gt; +  my $m;
</span><br>
<span class="quotelev1">&gt; +  my @tmp_array = ();
</span><br>
<span class="quotelev1">&gt; +  my @loc_month_array = ( &quot;01&quot;, &quot;02&quot;, &quot;03&quot;, &quot;04&quot;, &quot;05&quot;, &quot;06&quot;,
</span><br>
<span class="quotelev1">&gt; +                          &quot;07&quot;, &quot;08&quot;, &quot;09&quot;, &quot;10&quot;, &quot;11&quot;, &quot;12&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  #
</span><br>
<span class="quotelev1">&gt; +  # If epoch, only add the epoch months
</span><br>
<span class="quotelev1">&gt; +  #
</span><br>
<span class="quotelev1">&gt; +  if( $year == $epoch_year ) {
</span><br>
<span class="quotelev1">&gt; +    foreach $m (@epoch_months) {
</span><br>
<span class="quotelev1">&gt; +      push(@tmp_array, $m);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +  #
</span><br>
<span class="quotelev1">&gt; +  # If this is the current year then add only the active months
</span><br>
<span class="quotelev1">&gt; +  #
</span><br>
<span class="quotelev1">&gt; +  elsif( $year == $cur_year ) {
</span><br>
<span class="quotelev1">&gt; +    foreach $m (@loc_month_array) {
</span><br>
<span class="quotelev1">&gt; +      push(@tmp_array, $m);
</span><br>
<span class="quotelev1">&gt; +      if( $m eq $cur_month ) {
</span><br>
<span class="quotelev1">&gt; +        last;
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +  #
</span><br>
<span class="quotelev1">&gt; +  # Otherwise add all months
</span><br>
<span class="quotelev1">&gt; +  #
</span><br>
<span class="quotelev1">&gt; +  else {
</span><br>
<span class="quotelev1">&gt; +    @tmp_array = @loc_month_array;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  return @tmp_array;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub get_part_table_postfix() {
</span><br>
<span class="quotelev1">&gt; +  my $year = shift(@_);
</span><br>
<span class="quotelev1">&gt; +  my $month = shift(@_);
</span><br>
<span class="quotelev1">&gt; +  my $week  = shift(@_);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  if( ($month + 0) &lt; 10 ) {
</span><br>
<span class="quotelev1">&gt; +    $month = &quot;0&quot; . ($month + 0);
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  if( !defined($week) ) {
</span><br>
<span class="quotelev1">&gt; +    return (&quot;y&quot;.$year. &quot;_m&quot;.$month);
</span><br>
<span class="quotelev1">&gt; +  } else {
</span><br>
<span class="quotelev1">&gt; +    return (&quot;y&quot;.$year. &quot;_m&quot;.$month.&quot;_wk&quot;.$week);
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub get_part_table_postfix_append_week() {
</span><br>
<span class="quotelev1">&gt; +  my $postfix = shift(@_);
</span><br>
<span class="quotelev1">&gt; +  my $week = shift(@_);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  if( $postfix =~ /_wk$/ ) {
</span><br>
<span class="quotelev1">&gt; +    return $postfix . $week;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +  elsif( $postfix =~ /_wk\d$/ ) {
</span><br>
<span class="quotelev1">&gt; +    return $postfix;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +  else {
</span><br>
<span class="quotelev1">&gt; +    return $postfix . &quot;_wk&quot; . $week;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +}
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
<li><strong>Next message:</strong> <a href="0232.php">Josh Hursey: "[MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0230.php">Jeff Squyres: "Re: [MTT devel] Reporter Slowness"</a>
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
