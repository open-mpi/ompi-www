<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1602 - in trunk/lib/MTT: . Reporter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 19 08:29:26 2013" -->
<!-- isoreceived="20130319122926" -->
<!-- sent="Tue, 19 Mar 2013 12:29:19 +0000" -->
<!-- isosent="20130319122919" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1602 - in trunk/lib/MTT: . Reporter" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FB34DC_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130319062704.3893116033E_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1602 - in trunk/lib/MTT: . Reporter<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-19 08:29:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0606.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1607 - in trunk/lib/MTT: Reporter	Values/Functions"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Jeff Squyres (jsquyres): "[MTT devel] Fwd: [OMPI svn-full] svn:open-mpi r28142 - trunk/ompi/mca/common/cuda"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome.  +1!
<br>
<p>On Mar 18, 2013, at 11:27 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-03-19 02:27:03 EDT (Tue, 19 Mar 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 1602
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1602">https://svn.open-mpi.org/trac/mtt/changeset/1602</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fixes #1971
</span><br>
<span class="quotelev1">&gt; Add new reporter HTMLReport.pm;
</span><br>
<span class="quotelev1">&gt; Took TextReporter.pm and deleted from it all parts that are related to working with text file, only things that related to html remains.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Reporter/HTMLReport.pm
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Module.pm              |     1                                         
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Reporter/HTMLReport.pm |   895 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   2 files changed, 896 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Module.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Module.pm	Tue Mar 12 18:45:53 2013	(r1601)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Module.pm	2013-03-19 02:27:03 EDT (Tue, 19 Mar 2013)	(r1602)
</span><br>
<span class="quotelev1">&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     my $str = &quot;require $module&quot;;
</span><br>
<span class="quotelev1">&gt;     Debug(&quot;Evaluating: $str\n&quot;);
</span><br>
<span class="quotelev1">&gt; +	print &quot;qqqqq $module\n&quot;;
</span><br>
<span class="quotelev1">&gt;     my $check = eval $str;
</span><br>
<span class="quotelev1">&gt;     if ($@) {
</span><br>
<span class="quotelev1">&gt;         if (!$check) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/MTT/Reporter/HTMLReport.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- /dev/null	00:00:00 1970	(empty, because file is newly added)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Reporter/HTMLReport.pm	2013-03-19 02:27:03 EDT (Tue, 19 Mar 2013)	(r1602)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,895 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2005-2006 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +# 
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +# 
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +package MTT::Reporter::HTMLReport;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +use POSIX qw(strftime);
</span><br>
<span class="quotelev1">&gt; +use MTT::Messages;
</span><br>
<span class="quotelev1">&gt; +use MTT::Values;
</span><br>
<span class="quotelev1">&gt; +use MTT::Files;
</span><br>
<span class="quotelev1">&gt; +use MTT::Version;
</span><br>
<span class="quotelev1">&gt; +use MTT::Mail;
</span><br>
<span class="quotelev1">&gt; +use MTT::DoCommand;
</span><br>
<span class="quotelev1">&gt; +use Data::Dumper;
</span><br>
<span class="quotelev1">&gt; +use File::Basename;
</span><br>
<span class="quotelev1">&gt; +use File::Temp;
</span><br>
<span class="quotelev1">&gt; +use Text::Wrap;
</span><br>
<span class="quotelev1">&gt; +use File::Copy;
</span><br>
<span class="quotelev1">&gt; +use IO::File;
</span><br>
<span class="quotelev1">&gt; +use MTT::INI;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# directory and file to write to
</span><br>
<span class="quotelev1">&gt; +my $dirname;
</span><br>
<span class="quotelev1">&gt; +my $filename;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# files we've written to already in this run
</span><br>
<span class="quotelev1">&gt; +my $written_files;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# global array of all the MTT results
</span><br>
<span class="quotelev1">&gt; +my @results;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# user specified headers and footers
</span><br>
<span class="quotelev1">&gt; +my $summary_header;
</span><br>
<span class="quotelev1">&gt; +my $summary_footer;
</span><br>
<span class="quotelev1">&gt; +my $detail_header;
</span><br>
<span class="quotelev1">&gt; +my $detail_footer;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# wordwrap pref for reports
</span><br>
<span class="quotelev1">&gt; +my $textwrap;
</span><br>
<span class="quotelev1">&gt; +
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
<span class="quotelev1">&gt; +# Do we have Text::TabularDisplay?
</span><br>
<span class="quotelev1">&gt; +my $have_tabulardisplay;
</span><br>
<span class="quotelev1">&gt; +eval &quot;\$have_tabulardisplay = require Text::TabularDisplay&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub Init 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    ($ini, $section) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Sanity check
</span><br>
<span class="quotelev1">&gt; +    if (!$have_tabulardisplay) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        Error(&quot;Summary table requested via the TextFile reporter, but the perl module Text::TabularDisplay cannot be found/loaded.  Please install Text::TabularDisplay and try again.\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Grab TextFile INI params
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $summary_header = Value($ini, $section, &quot;textfile_summary_header&quot;) . &quot;\n&quot;; 
</span><br>
<span class="quotelev1">&gt; +    $summary_footer = Value($ini, $section, &quot;textfile_summary_footer&quot;) . &quot;\n&quot;; 
</span><br>
<span class="quotelev1">&gt; +    $detail_header  = Value($ini, $section, &quot;textfile_detail_header &quot;) . &quot;\n&quot;; 
</span><br>
<span class="quotelev1">&gt; +    $detail_footer  = Value($ini, $section, &quot;textfile_detail_footer &quot;) . &quot;\n&quot;; 
</span><br>
<span class="quotelev1">&gt; +    $textwrap       = Value($ini, $section, &quot;textfile_textwrap&quot;); 
</span><br>
<span class="quotelev1">&gt; +    $filename       = Value($ini, $section, &quot;textfile_filename&quot;); 
</span><br>
<span class="quotelev1">&gt; +    $dirname        = Value($ini, $section, &quot;textfile_dirname&quot;); 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Make it an absolute filename, because there's oodles of
</span><br>
<span class="quotelev1">&gt; +    # chdir()'s within the testing.  Whack the file if it's already
</span><br>
<span class="quotelev1">&gt; +    # there.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if ($filename ne &quot;-&quot;) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        if ($filename !~ /\//) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +            $dirname = MTT::DoCommand::cwd();
</span><br>
<span class="quotelev1">&gt; +            $filename = &quot;$filename&quot;;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            $dirname = dirname($filename) if (! defined($dirname));
</span><br>
<span class="quotelev1">&gt; +            $filename = basename($filename);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # Make sure we have a directory to write to
</span><br>
<span class="quotelev1">&gt; +        MTT::Files::safe_mkdir($dirname);
</span><br>
<span class="quotelev1">&gt; +        MTT::Files::safe_mkdir(&quot;$dirname/html&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        Debug(&quot;File reporter initialized ($dirname/$filename)\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    } else 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        Debug(&quot;File reporter initialized (&lt;stdout&gt;)\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Initialize nail notification for summary 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $to = Value($ini, $section, &quot;email_to&quot;);
</span><br>
<span class="quotelev1">&gt; +    if ($to) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        # Setup the mailer
</span><br>
<span class="quotelev1">&gt; +        my $agent = Value($ini, $section, &quot;email_agent&quot;);
</span><br>
<span class="quotelev1">&gt; +        if (!MTT::Mail::Init($agent)) 
</span><br>
<span class="quotelev1">&gt; +		{
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
<span class="quotelev1">&gt; +    return 1;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub Finalize 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +	my $flush_mode = undef;
</span><br>
<span class="quotelev1">&gt; +	if ($MTT::Globals::Values-&gt;{save_intermediate_report})
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +		$flush_mode = &quot;finalize&quot;;
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    # Print a roll-up report
</span><br>
<span class="quotelev1">&gt; +    _summary_report(\@results, $flush_mode)
</span><br>
<span class="quotelev1">&gt; +        if (@results);
</span><br>
<span class="quotelev1">&gt; +	undef $dirname;
</span><br>
<span class="quotelev1">&gt; +	undef $filename;
</span><br>
<span class="quotelev1">&gt; +	undef $written_files;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub Flush
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +	my ($info, $entries) = @_;
</span><br>
<span class="quotelev1">&gt; +	my @results_to_flush = @results;
</span><br>
<span class="quotelev1">&gt; +	push(@results_to_flush, $entries) if $entries;
</span><br>
<span class="quotelev1">&gt; +	_summary_report(\@results_to_flush, &quot;yes&quot;)
</span><br>
<span class="quotelev1">&gt; +        if (@results_to_flush);	
</span><br>
<span class="quotelev1">&gt; +        
</span><br>
<span class="quotelev1">&gt; +    _detail_report($info, $entries, &quot;yes&quot;);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub Submit 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my ($info, $entries) = @_;
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;File reporter\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Push entries into the global results array
</span><br>
<span class="quotelev1">&gt; +    push(@results, $entries);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	if ($MTT::Globals::Values-&gt;{save_intermediate_report})
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +		return;
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    # TextFile output has its own columns-width
</span><br>
<span class="quotelev1">&gt; +    my $save_columns = $Text::Wrap::columns;
</span><br>
<span class="quotelev1">&gt; +    $Text::Wrap::columns = $textwrap
</span><br>
<span class="quotelev1">&gt; +        if ($textwrap);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Do a detail report
</span><br>
<span class="quotelev1">&gt; +    _detail_report($info, $entries);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $Text::Wrap::columns = $save_columns
</span><br>
<span class="quotelev1">&gt; +        if ($textwrap);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub _summary_report 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $results_arr = shift;
</span><br>
<span class="quotelev1">&gt; +	my $flush_mode = shift;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	if (!$flush_mode || $flush_mode eq &quot;finalize&quot;)
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +    	print(&quot;\nMTT Results Summary&quot; . $MTT::Globals::Values-&gt;{description} . &quot;, started at: &quot; . $MTT::Globals::Values-&gt;{start_time} . &quot; report generated at: &quot; . localtime() . &quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; +	    print $summary_header;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    my $table = Text::TabularDisplay-&gt;new((&quot;Phase&quot;,&quot;Section&quot;,&quot;MPI Version&quot;, &quot;Duration&quot;,&quot;Pass&quot;,&quot;Fail&quot;,&quot;Time out&quot;,&quot;Skip&quot;,&quot;Detailed report&quot;));
</span><br>
<span class="quotelev1">&gt; +    my ($total_fail, $total_succ, $total_duration, $html_table_content) = (0,0,0,&quot;&quot;);
</span><br>
<span class="quotelev1">&gt; +    foreach my $results (@$results_arr) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        foreach my $phase (keys %$results) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +            my $phase_obj = $results-&gt;{$phase};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            foreach my $section (keys %{$phase_obj}) 
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +                my $section_obj = $results-&gt;{$phase}{$section};
</span><br>
<span class="quotelev1">&gt; +                my ($per_mpiver) = ();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                foreach my $results_hash (@$section_obj) 
</span><br>
<span class="quotelev1">&gt; +				{
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                    my $mpi_version = $results_hash-&gt;{mpi_version};
</span><br>
<span class="quotelev1">&gt; +                    if ($results_hash-&gt;{test_result} eq MTT::Values::PASS) 
</span><br>
<span class="quotelev1">&gt; +					{
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{pass}++;
</span><br>
<span class="quotelev1">&gt; +                        $total_succ++;
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +					elsif ($results_hash-&gt;{test_result} eq MTT::Values::FAIL) 
</span><br>
<span class="quotelev1">&gt; +					{
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{fail}++;
</span><br>
<span class="quotelev1">&gt; +                        $total_fail++;
</span><br>
<span class="quotelev1">&gt; +                    } elsif ($results_hash-&gt;{test_result} eq MTT::Values::TIMED_OUT) 
</span><br>
<span class="quotelev1">&gt; +					{
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{timed}++;
</span><br>
<span class="quotelev1">&gt; +                        $total_fail++;
</span><br>
<span class="quotelev1">&gt; +                    } elsif ($results_hash-&gt;{test_result} eq MTT::Values::SKIPPED) 
</span><br>
<span class="quotelev1">&gt; +					{
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{skipped}++;
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                    if ( defined($results_hash-&gt;{duration}) ) 
</span><br>
<span class="quotelev1">&gt; +					{
</span><br>
<span class="quotelev1">&gt; +                        my $one_test_duration = $results_hash-&gt;{duration};
</span><br>
<span class="quotelev1">&gt; +                        $one_test_duration =~ s/(\d+).+/$1/g;
</span><br>
<span class="quotelev1">&gt; +                        $per_mpiver-&gt;{$mpi_version}{duration} += $one_test_duration;
</span><br>
<span class="quotelev1">&gt; +                        $total_duration += $one_test_duration;
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                    $per_mpiver-&gt;{$mpi_version}{report} = $results_hash;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                foreach my $mpi_version (keys %{$per_mpiver}) 
</span><br>
<span class="quotelev1">&gt; +				{
</span><br>
<span class="quotelev1">&gt; +                    my $mpi_stat        = $per_mpiver-&gt;{$mpi_version};
</span><br>
<span class="quotelev1">&gt; +                    my $report          = $mpi_stat-&gt;{report};
</span><br>
<span class="quotelev1">&gt; +                    my $rep_file        = basename(_get_filename($report, $section));
</span><br>
<span class="quotelev1">&gt; +                    $rep_file           =~ s/\.txt/\.html/g;
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
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    my $total_tests =  $total_fail + $total_succ;
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
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $body;
</span><br>
<span class="quotelev1">&gt; +    if ($MTT::Globals::Internals-&gt;{is_stopped_on_break_threshold})
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        $body = join(&quot;\n&quot;, ($summary_header, $table-&gt;render, $perf_stat, $MTT::Globals::Internals-&gt;{stopped_on_break_threshold_message}, $summary_footer));
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    else
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        $body = join(&quot;\n&quot;, ($summary_header, $table-&gt;render, $perf_stat, $summary_footer));
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if (!$flush_mode || $flush_mode eq &quot;finalize&quot;)
</span><br>
<span class="quotelev1">&gt; +	{   
</span><br>
<span class="quotelev1">&gt; +    	print $body;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #_output_results($file, $body, $flush_mode);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Wrte html report to a file
</span><br>
<span class="quotelev1">&gt; +    my $html_body = get_html_summary_report_template();
</span><br>
<span class="quotelev1">&gt; +    $html_body =~ s/%TESTS_RESULTS%/$html_table_content/g;
</span><br>
<span class="quotelev1">&gt; +    my $html_totals = &quot;&lt;td&gt;$total_tests&lt;/td&gt;&lt;td&gt;$total_fail&lt;/td&gt;&lt;td&gt;$total_succ&lt;/td&gt;&lt;td&gt;$total_duration_human&lt;/td&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    $html_body =~ s/%TOTALS%/$html_totals/g;
</span><br>
<span class="quotelev1">&gt; +    my $html_filename = &quot;All_phase-summary.html&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $html_file = &quot;$dirname/&quot; . MTT::Files::make_safe_filename(&quot;$html_filename&quot;);
</span><br>
<span class="quotelev1">&gt; +    _output_results($html_file, $html_body,$flush_mode);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	if (!$flush_mode || $flush_mode eq &quot;finalize&quot;)
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +	    if ( $to ) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +	        # Evaluate the email subject header and from
</span><br>
<span class="quotelev1">&gt; +	        my ($subject, $body_footer);
</span><br>
<span class="quotelev1">&gt; +	        my $subject_tmpl = Value($ini, $section, &quot;email_subject&quot;);
</span><br>
<span class="quotelev1">&gt; +	        my $body_footer_tmpl = Value($ini, $section, &quot;email_footer&quot;);
</span><br>
<span class="quotelev1">&gt; +	        if ($MTT::Globals::Values-&gt;{extra_subject})
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +	        	$subject_tmpl = $subject_tmpl.&quot;$MTT::Globals::Values-&gt;{extra_subject}&quot;;
</span><br>
<span class="quotelev1">&gt; +	        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if ($MTT::Globals::Values-&gt;{extra_footer})
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +                $body_footer_tmpl = $body_footer_tmpl.&quot;\n\n$MTT::Globals::Values-&gt;{extra_footer}&quot;;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +	        my $from = Value($ini, $section, &quot;email_from&quot;);
</span><br>
<span class="quotelev1">&gt; +	        my $detailed_report = Logical($ini, $section, &quot;email_detailed_report&quot;);
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	        my $overall_mtt_status = &quot;success&quot;;
</span><br>
<span class="quotelev1">&gt; +	        if ( $total_fail &gt; 0 ) 
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +	            $overall_mtt_status = &quot;failed&quot;;
</span><br>
<span class="quotelev1">&gt; +	        }
</span><br>
<span class="quotelev1">&gt; +	        my $str = &quot;\$body_footer = \&quot;$body_footer_tmpl\&quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +	        eval $str;
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	        my $str = &quot;\$subject = \&quot;$subject_tmpl\&quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +	        eval $str;
</span><br>
<span class="quotelev1">&gt; +	        Verbose(&quot;&gt;&gt; Subject: $subject\n&quot;);
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	        # Now send it
</span><br>
<span class="quotelev1">&gt; +	        if ( $detailed_report ) 
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +	            my @reports = _get_report_filenames($results_arr);
</span><br>
<span class="quotelev1">&gt; +	            Verbose(&quot;&gt;&gt; Sending detailed reports: @reports\n&quot;);
</span><br>
<span class="quotelev1">&gt; +	            MTT::Mail::Send($subject, $to, $from, $body . $body_footer, @reports);
</span><br>
<span class="quotelev1">&gt; +	        } else 
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +	            MTT::Mail::Send($subject, $to, $from, $body . $body_footer);
</span><br>
<span class="quotelev1">&gt; +	        }
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	        Verbose(&quot;&gt;&gt; Reported to e-mail: $to\n&quot;);
</span><br>
<span class="quotelev1">&gt; +	    }
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    return 1;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub is_result_failed
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my ($key) = @_;
</span><br>
<span class="quotelev1">&gt; +    my $failed = 0;
</span><br>
<span class="quotelev1">&gt; +    if (($key ne &quot;Success&quot;) and ($key ne &quot;Passed&quot;) and ($key ne &quot;Skipped&quot;)) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        $failed = 1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    $failed;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub _bystatus
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $key1 = $$a{result_message};
</span><br>
<span class="quotelev1">&gt; +    my $key2 = $$b{result_message};
</span><br>
<span class="quotelev1">&gt; +    is_result_failed($key2) &lt;=&gt; is_result_failed($key1);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Show individual test outputs
</span><br>
<span class="quotelev1">&gt; +sub _detail_report 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my ($info, $entries, $flush_mode) = @_;
</span><br>
<span class="quotelev1">&gt; +    my $file;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $table = Text::TabularDisplay-&gt;new((&quot;Field&quot;, &quot;Value&quot;));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $separator = { &quot; &quot; =&gt; &quot; &quot; };
</span><br>
<span class="quotelev1">&gt; +    my %existing_report_file = ();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    foreach my $phase (keys(%$entries)) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        my $phase_obj = $entries-&gt;{$phase};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        foreach my $section (keys(%$phase_obj)) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +            my $section_obj = $phase_obj-&gt;{$section};
</span><br>
<span class="quotelev1">&gt; +            my $multi_line;
</span><br>
<span class="quotelev1">&gt; +            my $html_table = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # Put fields that are identical all the way through in 
</span><br>
<span class="quotelev1">&gt; +            # the title
</span><br>
<span class="quotelev1">&gt; +            my $title = _get_replicated_fields($section_obj);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # Make timestamps human-readable
</span><br>
<span class="quotelev1">&gt; +           	$title = _convert_timestamps($title);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            _add_to_tables($table, \$html_table, $title, undef);
</span><br>
<span class="quotelev1">&gt; +            _add_to_table($table, $separator, undef);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            foreach my $report (sort _bystatus @$section_obj) 
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +				$file   = _get_filename($report, $section);
</span><br>
<span class="quotelev1">&gt; +				$report = _convert_timestamps($report);
</span><br>
<span class="quotelev1">&gt; +				$report = _convert_array_refs($report);
</span><br>
<span class="quotelev1">&gt; +				_add_to_tables($table, \$html_table, $report, $title);
</span><br>
<span class="quotelev1">&gt; +				_add_to_table($table, $separator, undef);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            # Write the report to a file (or stdout)
</span><br>
<span class="quotelev1">&gt; +            my $html_file = $file;
</span><br>
<span class="quotelev1">&gt; +            $html_file    =~  s/\.txt/\.html/g;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            my $html_body = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +            if (not defined $existing_report_file{$html_file}) 
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +                $existing_report_file{$html_file} = 1;
</span><br>
<span class="quotelev1">&gt; +                my $html_start = get_html_phase_report_template_start();
</span><br>
<span class="quotelev1">&gt; +                Verbose(&quot;&gt;&gt; html: adding css $html_file\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                $html_body = $html_start;
</span><br>
<span class="quotelev1">&gt; +            } else 
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +                Verbose(&quot;&gt;&gt; html: not adding report css, already exists: $html_file\n&quot;);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            $html_body .= $html_table;
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +           	_output_results($html_file, $html_body, $flush_mode);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +			#_output_results($file, join(&quot;\n&quot;, ($detail_header, $table-&gt;render, $detail_footer)), $flush_mode);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        foreach my $rep_file (keys %existing_report_file) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +            my $close_report_html = get_html_phase_report_template_stop();
</span><br>
<span class="quotelev1">&gt; +            	_output_results($rep_file, $close_report_html);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Return a list of field-value pairs to put in the title
</span><br>
<span class="quotelev1">&gt; +# (to avoid print them over and over for each result)
</span><br>
<span class="quotelev1">&gt; +sub _get_replicated_fields {
</span><br>
<span class="quotelev1">&gt; +    my ($section_obj) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $title;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Iterate through the array of hashes (each one is an
</span><br>
<span class="quotelev1">&gt; +    # individual test result)
</span><br>
<span class="quotelev1">&gt; +    foreach my $results_hash (@$section_obj) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        foreach my $key (keys %$results_hash) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +            $title-&gt;{$key}-&gt;{$results_hash-&gt;{$key}} = 1;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my @to_be_removed;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Stick runs of identical keys into the title
</span><br>
<span class="quotelev1">&gt; +    foreach my $key (keys %$title) {
</span><br>
<span class="quotelev1">&gt; +        my @keys = keys %{$title-&gt;{$key}};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if (scalar @keys &gt; 1) {
</span><br>
<span class="quotelev1">&gt; +            push(@to_be_removed, $key);
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            $title-&gt;{$key} = shift @keys;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Delete the remaining keys to be printed in _detail_report
</span><br>
<span class="quotelev1">&gt; +    foreach my $key (@to_be_removed) {
</span><br>
<span class="quotelev1">&gt; +        delete $title-&gt;{$key};
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $title;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Add rows to the TabularDisplay object
</span><br>
<span class="quotelev1">&gt; +# (exclude_hash items will not be added)
</span><br>
<span class="quotelev1">&gt; +sub _add_to_tables 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my($table, $htable_ref, $include_hash, $exclude_hash) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Skip over database fields that will have
</span><br>
<span class="quotelev1">&gt; +    # *no* meaning to the MTT operator
</span><br>
<span class="quotelev1">&gt; +    my @frivolous = (
</span><br>
<span class="quotelev1">&gt; +        &quot;mpi_install_id&quot;,
</span><br>
<span class="quotelev1">&gt; +        &quot;test_build_id&quot;,
</span><br>
<span class="quotelev1">&gt; +        &quot;test_result&quot;,
</span><br>
<span class="quotelev1">&gt; +        &quot;saved_to&quot;,
</span><br>
<span class="quotelev1">&gt; +    );
</span><br>
<span class="quotelev1">&gt; +    my $frivolous = join(&quot;|&quot;, @frivolous);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # it can absent, if test did not start from some reason (wrong path to already installed mpi)
</span><br>
<span class="quotelev1">&gt; +    my $strClass = &quot;Passed&quot;;
</span><br>
<span class="quotelev1">&gt; +    if ( !$include_hash-&gt;{&quot;result_message&quot;} and !$include_hash-&gt;{&quot;test_result&quot;}) {
</span><br>
<span class="quotelev1">&gt; +        $strClass = &quot;Error&quot;;
</span><br>
<span class="quotelev1">&gt; +    } elsif ( ($include_hash-&gt;{&quot;result_message&quot;} ne &quot;Success&quot;) and 
</span><br>
<span class="quotelev1">&gt; +        ($include_hash-&gt;{&quot;result_message&quot;} ne &quot;Passed&quot;) and 
</span><br>
<span class="quotelev1">&gt; +        ($include_hash-&gt;{&quot;result_message&quot;} ne &quot;Skipped&quot;)) {
</span><br>
<span class="quotelev1">&gt; +        $strClass = &quot;Error&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $has_result = 0;
</span><br>
<span class="quotelev1">&gt; +    foreach my $key (sort keys %$include_hash) {
</span><br>
<span class="quotelev1">&gt; +        # Skip over frivolous data
</span><br>
<span class="quotelev1">&gt; +        next if ($key =~ /$frivolous/);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if (! defined($exclude_hash-&gt;{$key})) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +			#$table-&gt;add($key, wrap('', '', $include_hash-&gt;{$key}));
</span><br>
<span class="quotelev1">&gt; +            $table-&gt;add($key, $include_hash-&gt;{$key});
</span><br>
<span class="quotelev1">&gt; +            if (defined $htable_ref) 
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +                if (!$has_result ) 
</span><br>
<span class="quotelev1">&gt; +				{
</span><br>
<span class="quotelev1">&gt; +                    $$htable_ref .= get_html_phase_report_table_start_template();
</span><br>
<span class="quotelev1">&gt; +                    $has_result++;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                my $val = $include_hash-&gt;{$key};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                # can be too big, browser hangs, save it as a href
</span><br>
<span class="quotelev1">&gt; +                if ($key eq &quot;result_stdout&quot;) {
</span><br>
<span class="quotelev1">&gt; +                	if (!$MTT::Globals::Values-&gt;{save_intermediate_report})
</span><br>
<span class="quotelev1">&gt; +					{
</span><br>
<span class="quotelev1">&gt; +                		$include_hash-&gt;{saved_to}=undef;
</span><br>
<span class="quotelev1">&gt; +                	}
</span><br>
<span class="quotelev1">&gt; +                	if (!$include_hash-&gt;{saved_to})
</span><br>
<span class="quotelev1">&gt; +					{
</span><br>
<span class="quotelev1">&gt; +						my $tmp = new File::Temp(UNLINK =&gt; 0, SUFFIX =&gt; '.txt', TEMPLATE=&gt;'test_stdout_XXXXXX', DIR=&gt;&quot;$dirname/html&quot;);
</span><br>
<span class="quotelev1">&gt; +						my $fname = $tmp-&gt;filename;
</span><br>
<span class="quotelev1">&gt; +						close $tmp;
</span><br>
<span class="quotelev1">&gt; +						_output_results($fname, $val);
</span><br>
<span class="quotelev1">&gt; +						$include_hash-&gt;{saved_to} = $fname;
</span><br>
<span class="quotelev1">&gt; +                	}
</span><br>
<span class="quotelev1">&gt; +                	 my $fname_base = basename($include_hash-&gt;{saved_to});
</span><br>
<span class="quotelev1">&gt; +                	$$htable_ref .= &quot;&lt;tr valign='top' class='$strClass'&gt;&lt;td&gt;$key&lt;/td&gt;&lt;td&gt;&lt;a href='html/$fname_base'&gt;$fname_base&lt;/a&gt;&lt;/td&gt;&lt;/tr&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +                } elsif ( $key eq &quot;result_message&quot;) 
</span><br>
<span class="quotelev1">&gt; +				{
</span><br>
<span class="quotelev1">&gt; +                    $val =~ s/\n/&lt;br&gt;/g;
</span><br>
<span class="quotelev1">&gt; +                    $val =~ s/[ ]/&amp;nbsp;/g;
</span><br>
<span class="quotelev1">&gt; +                    $$htable_ref .= &quot;&lt;tr valign='top' class='$strClass'&gt;&lt;td&gt;$key&lt;/td&gt;&lt;td&gt;$val&lt;/td&gt;&lt;/tr&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +                } else 
</span><br>
<span class="quotelev1">&gt; +				{
</span><br>
<span class="quotelev1">&gt; +                    $val =~ s/\n/&lt;br&gt;/g;
</span><br>
<span class="quotelev1">&gt; +                    $val =~ s/[ ]/&amp;nbsp;/g;
</span><br>
<span class="quotelev1">&gt; +                    $$htable_ref .= &quot;&lt;tr valign='top' class='Passed'&gt;&lt;td&gt;$key&lt;/td&gt;&lt;td&gt;$val&lt;/td&gt;&lt;/tr&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if ($has_result &amp;&amp; defined $htable_ref) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        $$htable_ref .= get_html_phase_report_table_stop_template();
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub _add_to_table 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my($table, $include_hash, $exclude_hash) = @_;
</span><br>
<span class="quotelev1">&gt; +    return _add_to_tables($table, undef, $include_hash, $exclude_hash);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Output results to a file or 
</span><br>
<span class="quotelev1">&gt; +sub _output_results 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my ($file, $str, $clear) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;Writing to text file: $file\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # If we have not yet written to the file in this run,
</span><br>
<span class="quotelev1">&gt; +    # then whack the file.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	if ($clear){
</span><br>
<span class="quotelev1">&gt; +		unlink($file);
</span><br>
<span class="quotelev1">&gt; +	} elsif (!exists($written_files-&gt;{$file})) {
</span><br>
<span class="quotelev1">&gt; +        unlink($file);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Write to stdout or append to the file
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if ($file eq &quot;-&quot;) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        print $str;
</span><br>
<span class="quotelev1">&gt; +        Verbose(&quot;&gt;&gt; Reported to stdout\n&quot;)
</span><br>
<span class="quotelev1">&gt; +            if (!exists($written_files-&gt;{$file}));
</span><br>
<span class="quotelev1">&gt; +    } else 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +    	if ($clear)
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +    		MTT::Files::SafeWrite(1, $file, $str, &quot;&gt;&quot;);
</span><br>
<span class="quotelev1">&gt; +    	} else 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +        	MTT::Files::SafeWrite(1, $file, $str, &quot;&gt;&gt;&quot;);
</span><br>
<span class="quotelev1">&gt; +    	}
</span><br>
<span class="quotelev1">&gt; +        Verbose(&quot;&gt;&gt; Reported to text file $file\n&quot;)
</span><br>
<span class="quotelev1">&gt; +            if (!exists($written_files-&gt;{$file}));
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    $written_files-&gt;{$file} = 1;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub _get_report_filenames 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $results_arr = shift;
</span><br>
<span class="quotelev1">&gt; +    my @files = ();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    foreach my $results (@$results_arr) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        foreach my $phase (keys %$results) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +            my $phase_obj = $results-&gt;{$phase};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            foreach my $section (keys %{$phase_obj}) 
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +                my $section_obj = $phase_obj-&gt;{$section};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                foreach my $report (@$section_obj) 
</span><br>
<span class="quotelev1">&gt; +				{
</span><br>
<span class="quotelev1">&gt; +                    my $rep_file = _get_filename($report, $section);
</span><br>
<span class="quotelev1">&gt; +                    unshift(@files, $rep_file);
</span><br>
<span class="quotelev1">&gt; +		        }
</span><br>
<span class="quotelev1">&gt; +	        }
</span><br>
<span class="quotelev1">&gt; +	    }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return @files;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub _get_filename {
</span><br>
<span class="quotelev1">&gt; +    my ($report, $section) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Substitute in the filename
</span><br>
<span class="quotelev1">&gt; +    my $date = strftime(&quot;%m%d%Y&quot;, localtime());
</span><br>
<span class="quotelev1">&gt; +    my $time = strftime(&quot;%H%M%S&quot;, localtime());
</span><br>
<span class="quotelev1">&gt; +    my $mpi_name = $report-&gt;{mpi_name};
</span><br>
<span class="quotelev1">&gt; +    my $mpi_install_section_name = $report-&gt;{mpi_install_section_name};
</span><br>
<span class="quotelev1">&gt; +    my $mpi_version = $report-&gt;{mpi_version};
</span><br>
<span class="quotelev1">&gt; +    my $phase = $report-&gt;{phase};
</span><br>
<span class="quotelev1">&gt; +	my $suffix = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; +    my $ret;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	if ($mpi_install_section_name) {
</span><br>
<span class="quotelev1">&gt; +		$suffix = &quot;-$mpi_install_section_name&quot;
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Hardcoded filename
</span><br>
<span class="quotelev1">&gt; +    my $basename = MTT::Files::make_safe_filename(&quot;$phase-$section-$mpi_name-$mpi_version&quot; . $suffix . &quot;.txt&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Use an absolute path
</span><br>
<span class="quotelev1">&gt; +    $ret = &quot;$dirname/$basename&quot;; 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#    Debug(&quot;_get_filename returning $ret\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Stringify any array references
</span><br>
<span class="quotelev1">&gt; +sub _convert_array_refs 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $report = shift;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    foreach my $key (keys(%$report)) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if (ref($report-&gt;{$key}) =~ /array/i) {
</span><br>
<span class="quotelev1">&gt; +            $report-&gt;{$key} = join(&quot;\n\n---\n\n&quot;, @{$report-&gt;{$key}});
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $report;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Make timestamps human-readable
</span><br>
<span class="quotelev1">&gt; +sub _convert_timestamps 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $report = shift;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    foreach my $key (keys(%$report)) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +        if ($key =~ /timestamp/ &amp;&amp; $report-&gt;{$key} =~ /\d+/ &amp;&amp; !($key =~ /human/)) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +            $report-&gt;{$key . &quot;_human&quot;} = gmtime($report-&gt;{$key});
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $report;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
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
<span class="quotelev1">&gt; +sub get_css_template
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
<span class="quotelev1">&gt; +    ';
</span><br>
<span class="quotelev1">&gt; +    return $tmpl;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub get_html_summary_report_template
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $css = get_css_template();
</span><br>
<span class="quotelev1">&gt; +	my $values_replace = {};
</span><br>
<span class="quotelev1">&gt; +	$values_replace-&gt;{'REPORT_DATE'} =  `date +%F` .&quot; &quot;. `date +%k:%M:%S`;
</span><br>
<span class="quotelev1">&gt; +	$values_replace-&gt;{'OFED_VERSION'} = `ofed_info -s`;
</span><br>
<span class="quotelev1">&gt; +	$values_replace-&gt;{'CLUSTER_NAME'} = MTT::Values::Functions::cluster_name();
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	my $helpper_hash = {};
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	my $ini = $MTT::Globals::Internals-&gt;{ini};
</span><br>
<span class="quotelev1">&gt; +	my @sects = $ini-&gt;Sections();
</span><br>
<span class="quotelev1">&gt; +	my $product_version;
</span><br>
<span class="quotelev1">&gt; +	my $skip_section;
</span><br>
<span class="quotelev1">&gt; +	if ($MTT::Globals::Values-&gt;{shuffle_tests}-&gt;{sections})
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +		MTT::Util::shuffle(\@sects);	
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +	foreach my $section (@sects) 
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +		print(&quot;text reporter: section  $section\n&quot;);
</span><br>
<span class="quotelev1">&gt; +		if ($section =~ /^\s*mpi install:/) 
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +			my $sim_sec_name = GetSimpleSection($section);
</span><br>
<span class="quotelev1">&gt; +			$product_version =  MTT::Values::Value($ini, &quot;mpi install: $sim_sec_name&quot;,'product_version');
</span><br>
<span class="quotelev1">&gt; +			$skip_section = MTT::Values::Value($ini, &quot;mpi install: $sim_sec_name&quot;,'skip_section');
</span><br>
<span class="quotelev1">&gt; +			if(!defined($helpper_hash-&gt;{$product_version}) &amp;&amp; $skip_section == 0)
</span><br>
<span class="quotelev1">&gt; +			{
</span><br>
<span class="quotelev1">&gt; +				$values_replace-&gt;{'PRODUCT'} .= $product_version . &quot; &quot;;
</span><br>
<span class="quotelev1">&gt; +				$helpper_hash-&gt;{$product_version} = 1;
</span><br>
<span class="quotelev1">&gt; +			}
</span><br>
<span class="quotelev1">&gt; +		}
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +    my $tmpl = '
</span><br>
<span class="quotelev1">&gt; +    &lt;title&gt;MTT Results: Summary&lt;/title&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;h1&gt;MTT Results&lt;/h1&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;hr size=&quot;1&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +	&lt;/tbody&gt;&lt;/table&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;h2&gt;Additional info&lt;/h2&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;table class=&quot;details&quot; border=&quot;0&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot; width=&quot;95%&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;tbody&gt;&lt;tr valign=&quot;top&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;th&gt;report date&lt;/th&gt;&lt;th&gt;product&lt;/th&gt;&lt;th&gt;ofed version&lt;/th&gt;&lt;th nowrap=&quot;&quot;&gt;cluster name&lt;/th&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;/tr&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;tr valign=&quot;top&quot; class=&quot;Pass&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;td&gt;%REPORT_DATE%&lt;/td&gt;&lt;td&gt;%PRODUCT%&lt;/td&gt;&lt;td&gt;%OFED_VERSION%&lt;/td&gt;&lt;td&gt;%CLUSTER_NAME%&lt;/td&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;/tr&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;/tbody&gt;&lt;/table&gt;
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
<span class="quotelev1">&gt; +	my $tmp2;
</span><br>
<span class="quotelev1">&gt; +	foreach my $key (keys %{$values_replace})
</span><br>
<span class="quotelev1">&gt; +	{
</span><br>
<span class="quotelev1">&gt; +		$tmp2 = $values_replace-&gt;{$key};
</span><br>
<span class="quotelev1">&gt; +		$tmpl =~ s/%$key%/$tmp2/;
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    return $css . $tmpl;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub get_html_phase_report_table_start_template
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $tmpl = '
</span><br>
<span class="quotelev1">&gt; +    &lt;table class=&quot;details&quot; border=&quot;0&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot; width=&quot;95%&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;tr valign=&quot;top&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;th width=&quot;20%&quot;&gt;Field&lt;/th&gt;&lt;th&gt;Value&lt;/th&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;/tr&gt;
</span><br>
<span class="quotelev1">&gt; +    ';
</span><br>
<span class="quotelev1">&gt; +    return $tmpl;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +sub get_html_phase_report_table_stop_template
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $tmpl = '
</span><br>
<span class="quotelev1">&gt; +    &lt;/table&gt;
</span><br>
<span class="quotelev1">&gt; +    ';
</span><br>
<span class="quotelev1">&gt; +    return $tmpl;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +sub get_html_phase_report_template_start
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $css = get_css_template();
</span><br>
<span class="quotelev1">&gt; +    my $tmpl = '
</span><br>
<span class="quotelev1">&gt; +    &lt;title&gt;Phase report&lt;/title&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;h1&gt;MTT Report for single phase execution&lt;/h1&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;hr size=&quot;1&quot;&gt;
</span><br>
<span class="quotelev1">&gt; +    &lt;h2&gt;Report&lt;/h2&gt;
</span><br>
<span class="quotelev1">&gt; +    ';
</span><br>
<span class="quotelev1">&gt; +    return $css . $tmpl;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub get_html_phase_report_template_stop
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my $tmpl = '
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
<span class="quotelev1">&gt; +1;
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
<li><strong>Next message:</strong> <a href="0606.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1607 - in trunk/lib/MTT: Reporter	Values/Functions"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Jeff Squyres (jsquyres): "[MTT devel] Fwd: [OMPI svn-full] svn:open-mpi r28142 - trunk/ompi/mca/common/cuda"</a>
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
