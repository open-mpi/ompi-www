<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  4 11:56:26 2012" -->
<!-- isoreceived="20120804155626" -->
<!-- sent="Sat, 4 Aug 2012 18:55:59 +0300" -->
<!-- isosent="20120804155559" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter" -->
<!-- id="CAL3GGtrgNjGw2faGdJERpR_cm-yApkACYggDDg9Npd5DP+0+=g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="74244D61-2E89-49AE-BC28-43D8D3EDB949_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-04 11:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0592.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client	lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="0590.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0592.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client	lib/MTT/Reporter"</a>
<li><strong>Reply:</strong> <a href="0592.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client	lib/MTT/Reporter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are switching from datastore (feature we added a couple of years ago) to
<br>
MongoDB NoSQL DB to keep mtt results.
<br>
<p>We are adding some &quot;regression&quot; capability based on  MTT and MongoDB
<br>
reporter:
<br>
<p>- run mtt
<br>
- when mtt finishes, extract results for previous runs of the same test
<br>
with same parameters
<br>
- compare performance metrics and generate regression report (excel)
<br>
- attach regression report to the mtt email report
<br>
<p>So, we are adding all lego-like utils to support this:
<br>
<p>- save results to OO storage (for comfort using from Perl)
<br>
- create Analyzers for various well-known tests
<br>
- query results, group them and generate regression statistics, place
<br>
report into excel (mongo-query.pl)
<br>
- Generate report which can be attached to mtt report (breport.pl)
<br>
<p><p>So, we have reporter and query tool for Mongo, which is simple and
<br>
customizable.
<br>
<p>regards
<br>
M
<br>
<p><p>On Wed, Aug 1, 2012 at 2:00 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MongoDB is a NoSQL thingy, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you describe this plugin a bit?  Do you guys have some kind of
</span><br>
<span class="quotelev1">&gt; reporter for MongoDB?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2012, at 5:46 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2012-08-01 05:46:03 EDT (Wed, 01 Aug 2012)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1481
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1481">https://svn.open-mpi.org/trac/mtt/changeset/1481</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; add modified version mongobquery and MTTMongodb
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/client/mongobquery.pl   (contents, props changed)
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Reporter/MTTMongodb.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/client/mongobquery.pl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/client/mongobquery.pl       2012-08-01 05:46:03 EDT (Wed, 01
</span><br>
<span class="quotelev1">&gt; Aug 2012)      (r1481)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,1018 @@
</span><br>
<span class="quotelev2">&gt; &gt; +#!/usr/bin/perl
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2009
</span><br>
<span class="quotelev2">&gt; &gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Now that @INC is setup, bring in the modules
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#use strict;
</span><br>
<span class="quotelev2">&gt; &gt; +#use warnings;
</span><br>
<span class="quotelev2">&gt; &gt; +use LWP::UserAgent;
</span><br>
<span class="quotelev2">&gt; &gt; +use HTTP::Request::Common;
</span><br>
<span class="quotelev2">&gt; &gt; +use Data::Dumper;
</span><br>
<span class="quotelev2">&gt; &gt; +use File::Basename;
</span><br>
<span class="quotelev2">&gt; &gt; +use File::Temp;
</span><br>
<span class="quotelev2">&gt; &gt; +use Config::IniFiles;
</span><br>
<span class="quotelev2">&gt; &gt; +use YAML::XS;
</span><br>
<span class="quotelev2">&gt; &gt; +use MongoDB;
</span><br>
<span class="quotelev2">&gt; &gt; +use MongoDB::OID;
</span><br>
<span class="quotelev2">&gt; &gt; +use YAML;
</span><br>
<span class="quotelev2">&gt; &gt; +use YAML::Syck;
</span><br>
<span class="quotelev2">&gt; &gt; +use DateTime;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +###########################################################
</span><br>
<span class="quotelev2">&gt; &gt; +# Set variables
</span><br>
<span class="quotelev2">&gt; &gt; +###########################################################
</span><br>
<span class="quotelev2">&gt; &gt; +my $module_name=$0;
</span><br>
<span class="quotelev2">&gt; &gt; +my $module_path=$0;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +$module_name=~s/([^\/\\]+)$//;
</span><br>
<span class="quotelev2">&gt; &gt; +$module_name=$1;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +$module_path=~s/([^\/\\]+)$//;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +###########################################################
</span><br>
<span class="quotelev2">&gt; &gt; +# Main block
</span><br>
<span class="quotelev2">&gt; &gt; +###########################################################
</span><br>
<span class="quotelev2">&gt; &gt; +use Getopt::Long qw(:config no_ignore_case);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_help;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_server;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_username;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_password;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_ping;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_upload;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_query;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_view;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_admin;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my @opt_data;
</span><br>
<span class="quotelev2">&gt; &gt; +my @opt_raw;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_gqls;
</span><br>
<span class="quotelev2">&gt; &gt; +my @opt_gqlf;
</span><br>
<span class="quotelev2">&gt; &gt; +my @opt_section;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_dir;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_no_raw;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_dstore;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_info;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_format;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_mailto;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_regression_from;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_regression_to;
</span><br>
<span class="quotelev2">&gt; &gt; +my $opt_regression_step;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my @opt_newuser;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +GetOptions (&quot;help|h&quot; =&gt; \$opt_help,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;server|a=s&quot; =&gt; \$opt_server,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;username|u=s&quot; =&gt; \$opt_username,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;password|p=s&quot; =&gt; \$opt_password,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;ping&quot; =&gt; \$opt_ping,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;upload&quot; =&gt; \$opt_upload,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;query&quot; =&gt; \$opt_query,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;view&quot; =&gt; \$opt_view,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;admin&quot; =&gt; \$opt_admin,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;data|S=s&quot; =&gt; \@opt_data,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;raw|R=s&quot; =&gt; \@opt_raw,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;gqls|L=s&quot; =&gt; \$opt_gqls,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;gqlf|F=s&quot; =&gt; \@opt_gqlf,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;section|T=s&quot; =&gt; \@opt_section,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;dir|O=s&quot; =&gt; \$opt_dir,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;no-raw&quot; =&gt; \$opt_no_raw,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;dstore|D&quot; =&gt; \$opt_dstore,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;info|I=s&quot; =&gt; \$opt_info,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;format|V=s&quot; =&gt; \$opt_format,
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;email|e=s&quot; =&gt; \$opt_mailto,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            &quot;newuser=s{3,5}&quot; =&gt; \@opt_newuser,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                     &quot;regression-from=s&quot; =&gt; \$opt_regression_from,
</span><br>
<span class="quotelev2">&gt; &gt; +                     &quot;regression-to=s&quot; =&gt; \$opt_regression_to,
</span><br>
<span class="quotelev2">&gt; &gt; +                     &quot;regression-step=s&quot; =&gt; \$opt_regression_step
</span><br>
<span class="quotelev2">&gt; &gt; +            );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my $url = ();
</span><br>
<span class="quotelev2">&gt; &gt; +my $username = ();
</span><br>
<span class="quotelev2">&gt; &gt; +my $password = ();
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +$url = $opt_server ? $opt_server : &quot;<a href="http://bgate.mellanox.com:27017">http://bgate.mellanox.com:27017</a>&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +$url =~ s/http:\/\///;
</span><br>
<span class="quotelev2">&gt; &gt; +$username = $opt_username ? $opt_username : &quot;admin&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +$password = $opt_password ? $opt_password : &quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my %conf = ('url' =&gt; &quot;$url\/client&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +            'username' =&gt; $username,
</span><br>
<span class="quotelev2">&gt; &gt; +            'password' =&gt; $password
</span><br>
<span class="quotelev2">&gt; &gt; +            );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +if ($opt_help)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my $action = '';
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $action = 'ping' if ($opt_ping);
</span><br>
<span class="quotelev2">&gt; &gt; +    $action = 'upload' if ($opt_upload);
</span><br>
<span class="quotelev2">&gt; &gt; +    $action = 'query' if ($opt_query);
</span><br>
<span class="quotelev2">&gt; &gt; +    $action = 'view' if ($opt_view);
</span><br>
<span class="quotelev2">&gt; &gt; +    $action = 'admin' if ($opt_admin);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    help($action);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    exit;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +elsif ($opt_ping)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +     #ping( \%conf );
</span><br>
<span class="quotelev2">&gt; &gt; +     #print $url,&quot; url\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $conn = MongoDB::Connection-&gt;new(host =&gt; $url );
</span><br>
<span class="quotelev2">&gt; &gt; +     if($conn != 0)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             print&quot;\n\nping: success\n\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +elsif ($opt_upload)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($#opt_data &lt; 0)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        help('upload');
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +     my @data = split(/,/,join(',',@opt_data)) if (@opt_data);
</span><br>
<span class="quotelev2">&gt; &gt; +     my @raw = split(/,/,join(',',@opt_raw)) if (@opt_raw);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Check if files existed
</span><br>
<span class="quotelev2">&gt; &gt; +     verify_opt_file( @data );
</span><br>
<span class="quotelev2">&gt; &gt; +     verify_opt_file( @raw );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     $conf{data} = \@data;
</span><br>
<span class="quotelev2">&gt; &gt; +     $conf{raw} = \@raw;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     upload( \%conf );
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +elsif ($opt_query)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my $gql = ();
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($opt_gqls)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $gql = $opt_gqls;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        help('query');
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +     #print $gql, &quot; before\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/\s+/ /g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/ /#/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/And/AND/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/and/AND/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/Or/OR/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/or/OR/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#In#/IN/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#in#/IN/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/Not/NOT/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/not/NOT/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#AND#/ AND /g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#OR#/ \| /g;
</span><br>
<span class="quotelev2">&gt; &gt; +     #$gql =~ s/#IN#/IN/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#NOT/NOT/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#=#/=/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#&gt;#/&gt;/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#&gt;=#/&gt;=/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#&lt;#/&lt;/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql =~ s/#&lt;=#/&lt;=/g;
</span><br>
<span class="quotelev2">&gt; &gt; +     #print $gql,&quot; after\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     #exit;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     my @date_array;
</span><br>
<span class="quotelev2">&gt; &gt; +     if($gql =~ m/=&gt;|=&lt;/)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +                     print &quot;\nError:\nInvalid format: \&quot;=&gt;\&quot; or
</span><br>
<span class="quotelev1">&gt; \&quot;=&lt;\&quot;\nUse \&quot;&gt;=\&quot; or \&quot;&lt;=\&quot; instead\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     exit;
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     if($opt_regression_step)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             if($opt_regression_step =~ m/^\d{4}-\d{2}-\d{2}$/)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     #print &quot;ok $opt_regression_step \n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             }else
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     die &quot;\nparametr \&quot;regression-step\&quot; has invalid
</span><br>
<span class="quotelev1">&gt; format. YYYY-MM-DD\nexample --regression-step=\'0000-01-03\'&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             if($gql =~ m/TestRunPhase\.start_time/)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     $str_start_time = $';
</span><br>
<span class="quotelev2">&gt; &gt; +                     if($str_start_time =~
</span><br>
<span class="quotelev1">&gt; m/\d{4}-\d{2}-\d{2}#\d{2}:\d{2}:\d{2}/)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             $str_start_time = $&amp;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }else
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             die &quot;synrax error&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +             }else
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     die &quot;syntax error&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             if($gql =~ m/TestRunPhase\.end_time/)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     $str_end_time = $';
</span><br>
<span class="quotelev2">&gt; &gt; +                     if($str_end_time =~
</span><br>
<span class="quotelev1">&gt; m/\d{4}-\d{2}-\d{2}#\d{2}:\d{2}:\d{2}/)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             $str_end_time = $&amp;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }else
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             die &quot;syntax error&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +             }else
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     die &quot;syntax error&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             #print &quot;start_time $str_start_time end_time $str_end_time
</span><br>
<span class="quotelev1">&gt; \n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             my $timezone = DateTime-&gt;now;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             @numbers = split(/:|-|#/,$str_start_time);
</span><br>
<span class="quotelev2">&gt; &gt; +             #print @numbers[0],&quot;-year &quot; , @numbers[1], &quot;-month &quot;,
</span><br>
<span class="quotelev1">&gt;  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,  @numbers[4] ,&quot;-min &quot;,
</span><br>
<span class="quotelev1">&gt; @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             my %hash_start_time = (year =&gt; @numbers[0],month =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt; @numbers[3],minute =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt; 0,time_zone=&gt;
</span><br>
<span class="quotelev1">&gt; $timezone-&gt;time_zone());
</span><br>
<span class="quotelev2">&gt; &gt; +             my $DateTime_start_time = DateTime-&gt;new(%hash_start_time);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             @numbers = split(/:|-|#/,$str_end_time);
</span><br>
<span class="quotelev2">&gt; &gt; +             #print @numbers[0],&quot;-year &quot; , @numbers[1], &quot;-month &quot;,
</span><br>
<span class="quotelev1">&gt;  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,  @numbers[4] ,&quot;-min &quot;,
</span><br>
<span class="quotelev1">&gt; @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             my %hash_end_time = (year =&gt; @numbers[0],month =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt; @numbers[3],minute =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt; 0,time_zone=&gt;
</span><br>
<span class="quotelev1">&gt; $timezone-&gt;time_zone());
</span><br>
<span class="quotelev2">&gt; &gt; +             my $DateTime_end_time = DateTime-&gt;new(%hash_end_time);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             print &quot;\n\nacceptable dates:\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             my $count = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +             my @arg_to_subtract = split(/-/,$opt_regression_step);
</span><br>
<span class="quotelev2">&gt; &gt; +             #print &quot;\n\n_at_arg_to_subtract\n\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             while(DateTime-&gt;compare( $DateTime_start_time,
</span><br>
<span class="quotelev1">&gt; $DateTime_end_time )!=1)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                     $DateTime_end_time-&gt;subtract(years=&gt;
</span><br>
<span class="quotelev1">&gt; @arg_to_subtract[0],months=&gt;@arg_to_subtract[1],days =&gt;@arg_to_subtract[2]);
</span><br>
<span class="quotelev2">&gt; &gt; +                     my $month = $DateTime_end_time-&gt;month();
</span><br>
<span class="quotelev2">&gt; &gt; +                     my $day = $DateTime_end_time-&gt;day();
</span><br>
<span class="quotelev2">&gt; &gt; +                     if(!($day =~ m/\d{2}/))
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             $day = &quot;0&quot;.$day;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +                     if(!($month =~ m/\d{2}/))
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             $month = &quot;0&quot;.$month;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +                     $str = $DateTime_end_time-&gt;year() . &quot;-&quot; . $month .
</span><br>
<span class="quotelev1">&gt; &quot;-&quot; . $day;
</span><br>
<span class="quotelev2">&gt; &gt; +                     push(@date_array,$str);
</span><br>
<span class="quotelev2">&gt; &gt; +                     print &quot;$str  &quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     if($count % 7  == 0)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             print&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +                     $count++;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +             #print&quot;\n\n @date_array\n\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +     #print &quot;hash start_time &quot;, $DateTime_start_time,  &quot; hash end_time
</span><br>
<span class="quotelev1">&gt; &quot;, $DateTime_end_time, &quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     #print &quot;time zone &quot;,$timezone,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     my $query_to_mongo = string2query($gql);
</span><br>
<span class="quotelev2">&gt; &gt; +     $query_to_mongo .= &quot;;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     print
</span><br>
<span class="quotelev1">&gt; &quot;\n\n**********************************************************************query
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; mongo*************************************************************************&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     print &quot;\n&quot;,$query_to_mongo,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     print
</span><br>
<span class="quotelev1">&gt; &quot;*************************************************************************************************************************************************************\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ######################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +     #mongo
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #######################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +     my $conn = MongoDB::Connection-&gt;new(host =&gt; $url);
</span><br>
<span class="quotelev2">&gt; &gt; +     my $db = $conn-&gt;mtt;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $mtt_result = $db-&gt;TestRunPhase;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $all_result = $mtt_result-&gt;find(eval $query_to_mongo);
</span><br>
<span class="quotelev2">&gt; &gt; +     my $i = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +     if($opt_regression_step)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             while (my $doc = $all_result-&gt;next)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; if($doc-&gt;{&quot;modules&quot;}-&gt;{&quot;TestRunPhase&quot;}-&gt;{&quot;start_time&quot;} =~
</span><br>
<span class="quotelev1">&gt; m/\d{4}-\d{2}-\d{2}/)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             if ($&amp; ~~ @date_array)
</span><br>
<span class="quotelev2">&gt; &gt; +                             {
</span><br>
<span class="quotelev2">&gt; &gt; +                                     open F, '&gt;', &quot;$i.yaml&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     print F YAML::Syck::Dump( $doc );
</span><br>
<span class="quotelev2">&gt; &gt; +                                     close F;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     $i++;
</span><br>
<span class="quotelev2">&gt; &gt; +                             }
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +                     else
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             die &quot;something strange happened&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +     }else
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             while (my $doc = $all_result-&gt;next)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                     open F, '&gt;', &quot;$i.yaml&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     print F YAML::Syck::Dump( $doc );
</span><br>
<span class="quotelev2">&gt; &gt; +                     close F;
</span><br>
<span class="quotelev2">&gt; &gt; +                     $i++;
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +     print &quot;found $i documents\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ######################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +     #mongo
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; ######################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +elsif ($opt_view)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +     if ($opt_gqls)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +     #    $conf{gql} = $opt_gqls;
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +     elsif (@opt_gqlf &amp;&amp; @opt_section &amp;&amp; (@opt_gqlf == @opt_section))
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +     #    my $gql = ();
</span><br>
<span class="quotelev2">&gt; &gt; +     #    my @a_select;
</span><br>
<span class="quotelev2">&gt; &gt; +     #    my $v_from;
</span><br>
<span class="quotelev2">&gt; &gt; +     #    my @a_where;
</span><br>
<span class="quotelev2">&gt; &gt; +     #    my @a_order;
</span><br>
<span class="quotelev2">&gt; &gt; +     #    my $v_limit;
</span><br>
<span class="quotelev2">&gt; &gt; +     #    my $v_offset;
</span><br>
<span class="quotelev2">&gt; &gt; +     #    my $i = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +     #
</span><br>
<span class="quotelev2">&gt; &gt; +     #   my @files=split(/,/,join(',',@opt_gqlf)) if (@opt_gqlf);
</span><br>
<span class="quotelev2">&gt; &gt; +     #   my @sections=split(/,/,join(',',@opt_section)) if
</span><br>
<span class="quotelev1">&gt; (@opt_section);
</span><br>
<span class="quotelev2">&gt; &gt; +     #
</span><br>
<span class="quotelev2">&gt; &gt; +     #   # Check if files existed
</span><br>
<span class="quotelev2">&gt; &gt; +     #   verify_opt_file( @files );
</span><br>
<span class="quotelev2">&gt; &gt; +     #
</span><br>
<span class="quotelev2">&gt; &gt; +     #   for($i=0; $i &lt; @files; $i++)
</span><br>
<span class="quotelev2">&gt; &gt; +     #   {
</span><br>
<span class="quotelev2">&gt; &gt; +     #       # Use ini-file in case it is set in command line
</span><br>
<span class="quotelev2">&gt; &gt; +     #       my $cfg = new Config::IniFiles( -file =&gt; &quot;$files[$i]&quot;,
</span><br>
<span class="quotelev1">&gt; -nocase =&gt; 1 );
</span><br>
<span class="quotelev2">&gt; &gt; +     #       if (not defined $cfg or $@)
</span><br>
<span class="quotelev2">&gt; &gt; +     #       {
</span><br>
<span class="quotelev2">&gt; &gt; +     #           die &quot;$!&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     #       }
</span><br>
<span class="quotelev2">&gt; &gt; +     #       $opt_format = $cfg-&gt;val(&quot;$sections[$i]&quot;, 'format') if
</span><br>
<span class="quotelev1">&gt; ($cfg-&gt;val(&quot;$sections[$i]&quot;, 'format'));
</span><br>
<span class="quotelev2">&gt; &gt; +     #
</span><br>
<span class="quotelev2">&gt; &gt; +     #       my @a_temp_select = $cfg-&gt;val(&quot;$sections[$i]&quot;, 'select')
</span><br>
<span class="quotelev1">&gt; if ($cfg-&gt;val(&quot;$sections[$i]&quot;, 'select'));
</span><br>
<span class="quotelev2">&gt; &gt; +     #       my $v_temp_from = $cfg-&gt;val(&quot;$sections[$i]&quot;, 'from') if
</span><br>
<span class="quotelev1">&gt; ($cfg-&gt;val(&quot;$sections[$i]&quot;, 'from'));
</span><br>
<span class="quotelev2">&gt; &gt; +     #       my @a_temp_where = $cfg-&gt;val(&quot;$sections[$i]&quot;, 'where') if
</span><br>
<span class="quotelev1">&gt; ($cfg-&gt;val(&quot;$sections[$i]&quot;, 'where'));
</span><br>
<span class="quotelev2">&gt; &gt; +     #       my @a_temp_order = $cfg-&gt;val(&quot;$sections[$i]&quot;, 'order') if
</span><br>
<span class="quotelev1">&gt; ($cfg-&gt;val(&quot;$sections[$i]&quot;, 'order'));
</span><br>
<span class="quotelev2">&gt; &gt; +     #       my $v_temp_limit = $cfg-&gt;val(&quot;$sections[$i]&quot;, 'limit') if
</span><br>
<span class="quotelev1">&gt; ($cfg-&gt;val(&quot;$sections[$i]&quot;, 'limit'));
</span><br>
<span class="quotelev2">&gt; &gt; +     #        my $v_temp_offset = $cfg-&gt;val(&quot;$sections[$i]&quot;, 'offset')
</span><br>
<span class="quotelev1">&gt; if ($cfg-&gt;val(&quot;$sections[$i]&quot;, 'offset'));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     #       @a_select = @a_temp_select if ($#a_temp_select != (-1));
</span><br>
<span class="quotelev2">&gt; &gt; +     #       $v_from = $v_temp_from if ($v_temp_from);
</span><br>
<span class="quotelev2">&gt; &gt; +     #       my $j = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +     #       my $k = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +     #       for ($j = 0; $j &lt; scalar(@a_where); $j++)
</span><br>
<span class="quotelev2">&gt; &gt; +     #       {
</span><br>
<span class="quotelev2">&gt; &gt; +     #           for ($k = 0; $k &lt; scalar(@a_temp_where); $k++)
</span><br>
<span class="quotelev2">&gt; &gt; +     #           {
</span><br>
<span class="quotelev2">&gt; &gt; +     #               if ($a_temp_where[$k])
</span><br>
<span class="quotelev2">&gt; &gt; +     #               {
</span><br>
<span class="quotelev2">&gt; &gt; +     #                   $a_temp_where[$k] =~ m/^\s*(\w+)/i;
</span><br>
<span class="quotelev2">&gt; &gt; +     #                   if (grep /^\s*$1/, $a_where[$j])
</span><br>
<span class="quotelev2">&gt; &gt; +     #                   {
</span><br>
<span class="quotelev2">&gt; &gt; +     #                       $a_where[$j] = $a_temp_where[$k];
</span><br>
<span class="quotelev2">&gt; &gt; +     #                       delete($a_temp_where[$k]);
</span><br>
<span class="quotelev2">&gt; &gt; +     #                       next;
</span><br>
<span class="quotelev2">&gt; &gt; +     #                   }
</span><br>
<span class="quotelev2">&gt; &gt; +     #               }
</span><br>
<span class="quotelev2">&gt; &gt; +     #           }
</span><br>
<span class="quotelev2">&gt; &gt; +     #       }
</span><br>
<span class="quotelev2">&gt; &gt; +     #       foreach (@a_temp_where)
</span><br>
<span class="quotelev2">&gt; &gt; +     #       {
</span><br>
<span class="quotelev2">&gt; &gt; +     #           push(@a_where, $_) if ($_);
</span><br>
<span class="quotelev2">&gt; &gt; +     #       }
</span><br>
<span class="quotelev2">&gt; &gt; +     #
</span><br>
<span class="quotelev2">&gt; &gt; +     #       @a_order = @a_temp_order if ($#a_temp_order != (-1));
</span><br>
<span class="quotelev2">&gt; &gt; +     #       $v_limit = $v_temp_limit if ($v_temp_limit);
</span><br>
<span class="quotelev2">&gt; &gt; +     #       $v_offset = $v_temp_offset if ($v_temp_offset);
</span><br>
<span class="quotelev2">&gt; &gt; +     #   }
</span><br>
<span class="quotelev2">&gt; &gt; +     #
</span><br>
<span class="quotelev2">&gt; &gt; +     #   $gql = '';
</span><br>
<span class="quotelev2">&gt; &gt; +     #   $gql .= ' select ' . join(',',@a_select) if (@a_select);
</span><br>
<span class="quotelev2">&gt; &gt; +     #   $gql .= ' from ' . $v_from if ($v_from);
</span><br>
<span class="quotelev2">&gt; &gt; +     #   $gql .= ' where ' . join(' and ',@a_where) if (@a_where);
</span><br>
<span class="quotelev2">&gt; &gt; +     #   $gql .= ' order by ' . join(',',@a_order) if (@a_order);
</span><br>
<span class="quotelev2">&gt; &gt; +     #   $gql .= ' limit ' . $v_limit if ($v_limit);
</span><br>
<span class="quotelev2">&gt; &gt; +     #   $gql .= ' offset ' . $v_offset if ($v_offset);
</span><br>
<span class="quotelev2">&gt; &gt; +     #
</span><br>
<span class="quotelev2">&gt; &gt; +     #   $conf{gql} = $gql;
</span><br>
<span class="quotelev2">&gt; &gt; +     #
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     print &quot;this feature temporarily unavailable\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     exit;
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +    elsif ($opt_dstore)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $conf{kind} = 'all';
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    elsif ($opt_info)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $conf{kind} = $opt_info;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        help('view');
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($opt_format)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        foreach my $format qw(raw txt html yaml)
</span><br>
<span class="quotelev2">&gt; &gt; +        {
</span><br>
<span class="quotelev2">&gt; &gt; +            $conf{format} = $format if ($opt_format eq $format) ;
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    $conf{format} = 'raw' if (!exists($conf{format})) ;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    view( \%conf );
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +elsif ($opt_admin)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     print &quot;this feature temporarily unavailable\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     exit;
</span><br>
<span class="quotelev2">&gt; &gt; +     #if ($#opt_newuser &gt; 0)
</span><br>
<span class="quotelev2">&gt; &gt; +     #{
</span><br>
<span class="quotelev2">&gt; &gt; +     #    $conf{newuser} = \@opt_newuser;
</span><br>
<span class="quotelev2">&gt; &gt; +     #}
</span><br>
<span class="quotelev2">&gt; &gt; +     #admin( \%conf );
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +else
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    help();
</span><br>
<span class="quotelev2">&gt; &gt; +    exit;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Send notification by e-mail
</span><br>
<span class="quotelev2">&gt; &gt; +if ( $opt_mailto ) {
</span><br>
<span class="quotelev2">&gt; &gt; +#    send_results_by_mail($opt_mailto, @files);
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +# Define functions
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +#convert string to query
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub string2query
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +     my $gql = $_[0];
</span><br>
<span class="quotelev2">&gt; &gt; +     my $before;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $after;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $match_case;
</span><br>
<span class="quotelev2">&gt; &gt; +     while($gql =~ m/\([^\(\)]+(=|&gt;=|&lt;=|&lt;|&gt;|IN\([^\(\)]+\))+[^\(\)]+\)/)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             $before = $`;
</span><br>
<span class="quotelev2">&gt; &gt; +             $after = $';
</span><br>
<span class="quotelev2">&gt; &gt; +             $match_case = $&amp;;
</span><br>
<span class="quotelev2">&gt; &gt; +             chop($match_case);
</span><br>
<span class="quotelev2">&gt; &gt; +             $match_case = reverse($match_case);
</span><br>
<span class="quotelev2">&gt; &gt; +             chop($match_case);
</span><br>
<span class="quotelev2">&gt; &gt; +             $match_case = reverse($match_case);
</span><br>
<span class="quotelev2">&gt; &gt; +             #print &quot;() before: &quot;,$before,&quot; after: &quot;,$after,&quot; match
</span><br>
<span class="quotelev1">&gt; case: &quot;,$match_case,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             #&lt;STDIN&gt;;
</span><br>
<span class="quotelev2">&gt; &gt; +             $gql = $before . string2query($match_case) . $after;
</span><br>
<span class="quotelev2">&gt; &gt; +             #print &quot;gql after: &quot;,$gql,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +     if($gql =~ m/\|/ &amp;&amp; $gql =~ m/AND/)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             while($gql =~ m/[^\|]+(AND)+[^\|]+/)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     $before = $`;
</span><br>
<span class="quotelev2">&gt; &gt; +                     $after = $';
</span><br>
<span class="quotelev2">&gt; &gt; +                     $match_case = $&amp;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     #chop($match_case);
</span><br>
<span class="quotelev2">&gt; &gt; +                     #$match_case = reverse($match_case);
</span><br>
<span class="quotelev2">&gt; &gt; +                     #chop($match_case);
</span><br>
<span class="quotelev2">&gt; &gt; +                     #$match_case = reverse($match_case);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                     #print &quot;AND OR before: &quot;,$before,&quot; after:
</span><br>
<span class="quotelev1">&gt; &quot;,$after,&quot; match case: &quot;,$match_case,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     #&lt;STDIN&gt;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     $gql = $before . string2query($match_case) .
</span><br>
<span class="quotelev1">&gt; $after;
</span><br>
<span class="quotelev2">&gt; &gt; +                     #print &quot;gql after: &quot;,$gql,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     #print &quot;lowest level: &quot;,$gql,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     #&lt;STDIN&gt;;
</span><br>
<span class="quotelev2">&gt; &gt; +     $gql = string2query_lowest($gql);
</span><br>
<span class="quotelev2">&gt; &gt; +     #print &quot;gql after: &quot;,$gql,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     return $gql;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +#convert string to query (lowest level)
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +sub string2query_lowest
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +     my $input_string = $_[0];
</span><br>
<span class="quotelev2">&gt; &gt; +     my @subs = split(/\s/,$input_string);
</span><br>
<span class="quotelev2">&gt; &gt; +     my $arg;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $query_to_mongo = &quot; {&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $before;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $after;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $match_case;
</span><br>
<span class="quotelev2">&gt; &gt; +     #my $prefix = &quot;modules.TestRunPhase.&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $prefix = &quot;modules.&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     if($input_string =~ m/AND/ &amp;&amp; $input_string =~ m/\|/)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             print &quot;error: bquery lowest level\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             print &quot;input string: &quot;,$input_string,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             die;
</span><br>
<span class="quotelev2">&gt; &gt; +     }elsif($input_string =~ m/\|/)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             $query_to_mongo .= &quot;\'\$or\'=&gt;[&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     }else
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             $query_to_mongo .= &quot;\'\$and\'=&gt;[&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +     foreach $arg(@subs)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             #print $arg,&quot; subs\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +     foreach $arg(@subs)
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +             $arg =~ s/#/ /g;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             if($arg =~m/&gt;=|&lt;=|NOTIN/)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     #print &quot;before match: &quot;, $before,&quot;, after match:
</span><br>
<span class="quotelev1">&gt; &quot;,$after,&quot; match case: &quot;,$match_case,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     $before =&quot;{\'$prefix&quot; . $` . &quot;\'=&gt;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     $after = $';
</span><br>
<span class="quotelev2">&gt; &gt; +                     $match_case = $&amp;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     if($match_case eq &quot;&gt;=&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             #print &quot;bolshe ili ravno\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $query_to_mongo .=  $before .
</span><br>
<span class="quotelev1">&gt; &quot;{\'\$gte\'=&gt;&quot; . $after . &quot;}},&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                     }elsif($match_case eq &quot;&lt;=&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             #print &quot;menshe ili ravno\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $query_to_mongo .=  $before .
</span><br>
<span class="quotelev1">&gt; &quot;{\'\$lte\'=&gt;&quot; . $after . &quot;}},&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                     }else
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             #print &quot;NIN\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $after =~ s/\(/\[/g;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $after =~ s/\)/\]/g;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $query_to_mongo .= $before .
</span><br>
<span class="quotelev1">&gt; &quot;{\'\$nin\'=&gt;&quot; . $after . &quot;}},&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +             elsif($arg =~ m/{.+=&gt;.+}/)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     $query_to_mongo .= $arg . &quot;,&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +             elsif($arg =~ m/&gt;|=|&lt;|IN/)
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +                     #print &quot;before match1: &quot;, $before,&quot; after match:
</span><br>
<span class="quotelev1">&gt; &quot;,$after,&quot; match case: &quot;,$match_case,&quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                     $before =&quot;{\'$prefix&quot; . $` . &quot;\'=&gt;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     $after = $';
</span><br>
<span class="quotelev2">&gt; &gt; +                     $match_case = $&amp;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                     if($match_case eq &quot;&gt;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             #print &quot;bolshe\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $query_to_mongo .= $before . &quot;{\'\$gt\'=&gt;&quot;
</span><br>
<span class="quotelev1">&gt; . $after . &quot;}},&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                     }elsif($match_case eq &quot;=&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             #print &quot;ravno\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $query_to_mongo .= $before . $after .&quot;},&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }elsif($match_case eq &quot;&lt;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             #print &quot;menshe\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $query_to_mongo .=  $before .
</span><br>
<span class="quotelev1">&gt; &quot;{\'\$lt\'=&gt;&quot; . $after . &quot;}},&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +                     else
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +                             #print &quot;IN\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $after =~ s/\(/\[/g;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $after =~ s/\)/\]/g;
</span><br>
<span class="quotelev2">&gt; &gt; +                             $query_to_mongo .= $before . &quot;{\'\$in\'=&gt;&quot;
</span><br>
<span class="quotelev1">&gt; . $after . &quot;}},&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +     }
</span><br>
<span class="quotelev2">&gt; &gt; +     chop($query_to_mongo);
</span><br>
<span class="quotelev2">&gt; &gt; +     $query_to_mongo .= &quot;]} &quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     return $query_to_mongo;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Show help to tool
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +sub help
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($action)=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print (&quot;Usage: $module_name [options...] &lt;action&gt;
</span><br>
<span class="quotelev1">&gt; [arguments...]\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    print (&quot;\'$module_name\' communicate with datastore .\n\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print (&quot;\nOptions:\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    printf (&quot; %-5s %-10s\t%-s\n&quot;, '-h,', '--help', &quot;Show the help
</span><br>
<span class="quotelev1">&gt; message and exit.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    printf (&quot; %-5s %-10s\t%-s\n&quot;, '-a,', '--server', &quot;The server to
</span><br>
<span class="quotelev1">&gt; connect to.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    printf (&quot; %-5s %-10s\t%-s\n&quot;, '-u,', '--username', &quot;User name.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    printf (&quot; %-5s %-10s\t%-s\n&quot;, '-p,', '--password', &quot;Password.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print (&quot;\nActions:\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($action) || $action eq '' || $action eq 'ping')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        print (&quot; --ping\t The 'ping' command check connection with
</span><br>
<span class="quotelev1">&gt; datastore.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($action) || $action eq '' || $action eq 'upload')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        print (&quot; --upload\t The 'upload' command translates input data
</span><br>
<span class="quotelev1">&gt; into datastore entities and uploads them into your application's
</span><br>
<span class="quotelev1">&gt; datastore.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($action) || $action eq '' || $action eq 'query')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        print (&quot; --query\t The 'query' command translates input string
</span><br>
<span class="quotelev1">&gt; in special request to datastore and download data form query set.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($action) || $action eq '' || $action eq 'view')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        print (&quot; --view\t The 'view' command requests information from
</span><br>
<span class="quotelev1">&gt; datastore.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($action) || $action eq '' || $action eq 'admin')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        print (&quot; --admin\t The 'admin' admin of datastore
</span><br>
<span class="quotelev1">&gt; operations.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print (&quot;\nArguments:\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($action) || $action eq '' || $action eq 'upload')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-S,', '--data', &quot;The name of the
</span><br>
<span class="quotelev1">&gt; file containing the data to upload.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-R,', '--raw', &quot;Raw file
</span><br>
<span class="quotelev1">&gt; associated with data.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($action) || $action eq '' || $action eq 'query')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-L,', '--gqls', &quot;String with GQL
</span><br>
<span class="quotelev1">&gt; query.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-F,', '--gqlf', &quot;The path to
</span><br>
<span class="quotelev1">&gt; file inclusive query.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-T,', '--section', &quot;Section of
</span><br>
<span class="quotelev1">&gt; configuration file with query.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-O,', '--dir', &quot;The path to the
</span><br>
<span class="quotelev1">&gt; directory that will store retrieved data.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '', '--no-raw', &quot;Don't download
</span><br>
<span class="quotelev1">&gt; Raw file associated with data.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($action) || $action eq '' || $action eq 'view')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-D,', '--dstore', &quot;Retrieve
</span><br>
<span class="quotelev1">&gt; Google Data store detailed organization with names of models and
</span><br>
<span class="quotelev1">&gt; properties.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-I,', '--info', &quot;Show
</span><br>
<span class="quotelev1">&gt; information about clusters, compilers, bench applications and mpi. One of
</span><br>
<span class="quotelev1">&gt; following as 'suite','mpi','compiler','cluster'&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-L,', '--gqls', &quot;String with GQL
</span><br>
<span class="quotelev1">&gt; query.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-F,', '--gqlf', &quot;The path to
</span><br>
<span class="quotelev1">&gt; file inclusive query.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-T,', '--section', &quot;Section of
</span><br>
<span class="quotelev1">&gt; configuration file with query.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '-V,', '--format', &quot;Output
</span><br>
<span class="quotelev1">&gt; format. One of following as 'txt','html','yaml','raw'. Default is 'raw'&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($action) || $action eq '' || $action eq 'admin')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        printf (&quot; %-5s %-10s\t%-s\n&quot;, '', '--newuser', &quot;User
</span><br>
<span class="quotelev1">&gt; information as username, password, email (mandatory) and first_name,
</span><br>
<span class="quotelev1">&gt; last_name (optinal). Keep order&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    printf (&quot; %-5s %-10s\t%-s\n&quot;, '-e,', '--email', &quot;e-mail address&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    exit;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Check if files directed in command line exists
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +sub verify_opt_file
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my (@files)=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $file (@files)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        if( ! -e $file)
</span><br>
<span class="quotelev2">&gt; &gt; +        {
</span><br>
<span class="quotelev2">&gt; &gt; +            die &quot;$file doesn't exist!&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Ping procedure
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +sub ping
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($conf_ref)=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ua = LWP::UserAgent-&gt;new();
</span><br>
<span class="quotelev2">&gt; &gt; +    $ua-&gt;agent(&quot;mtt-submit&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $ua-&gt;proxy('http', $ENV{'http_proxy'});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $request = POST(
</span><br>
<span class="quotelev2">&gt; &gt; +                    $conf_ref-&gt;{url},
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content_Type =&gt; 'form-data',
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content =&gt; [
</span><br>
<span class="quotelev2">&gt; &gt; +                            PING      =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                            description =&gt; 'bquery ping'
</span><br>
<span class="quotelev2">&gt; &gt; +                             ]);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $request-&gt;authorization_basic($conf_ref-&gt;{username},
</span><br>
<span class="quotelev1">&gt; $conf_ref-&gt;{password});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $response = $ua-&gt;request($request);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print &quot;Error at $conf_ref-&gt;{url}\n &quot;, $response-&gt;status_line, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        unless $response-&gt;is_success;
</span><br>
<span class="quotelev2">&gt; &gt; +    print &quot;content type at $conf_ref-&gt;{url} -- &quot;,
</span><br>
<span class="quotelev1">&gt; $response-&gt;content_type, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        unless $response-&gt;content_type eq 'text/html';
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print $response-&gt;content;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Upload procedure
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +sub upload
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($conf_ref)=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +    my $i = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +    use MongoDB;
</span><br>
<span class="quotelev2">&gt; &gt; +     use MongoDB::OID;
</span><br>
<span class="quotelev2">&gt; &gt; +     use YAML;
</span><br>
<span class="quotelev2">&gt; &gt; +     use Data::Dumper;
</span><br>
<span class="quotelev2">&gt; &gt; +     use YAML::XS;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $conn = MongoDB::Connection-&gt;new(host =&gt;
</span><br>
<span class="quotelev1">&gt; 'bgate.mellanox.com:27017');
</span><br>
<span class="quotelev2">&gt; &gt; +     my $db = $conn-&gt;mtt;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $TestRunPhase = $db-&gt;TestRunPhase;
</span><br>
<span class="quotelev2">&gt; &gt; +    for ($i=0; $i&lt;@{$conf_ref-&gt;{data}}; $i++)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        my $ua = LWP::UserAgent-&gt;new();
</span><br>
<span class="quotelev2">&gt; &gt; +        $ua-&gt;agent(&quot;mtt-submit&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        $ua-&gt;proxy('http', $ENV{'http_proxy'});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        my $request;
</span><br>
<span class="quotelev2">&gt; &gt; +        my $data_file = &quot;$conf_ref-&gt;{data}-&gt;[$i]&quot; if
</span><br>
<span class="quotelev1">&gt; defined($conf_ref-&gt;{data}-&gt;[$i]);
</span><br>
<span class="quotelev2">&gt; &gt; +        my $raw_file = &quot;$conf_ref-&gt;{raw}-&gt;[$i]&quot; if
</span><br>
<span class="quotelev1">&gt; defined($conf_ref-&gt;{raw}-&gt;[$i]);
</span><br>
<span class="quotelev2">&gt; &gt; +        if ($raw_file)
</span><br>
<span class="quotelev2">&gt; &gt; +        {
</span><br>
<span class="quotelev2">&gt; &gt; +                     #$request = POST(
</span><br>
<span class="quotelev2">&gt; &gt; +                     #               $conf_ref-&gt;{url},
</span><br>
<span class="quotelev2">&gt; &gt; +                     #               Content_Type =&gt; 'form-data',
</span><br>
<span class="quotelev2">&gt; &gt; +                     #               Content =&gt; [
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                   SUBMIT      =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                           data        =&gt;
</span><br>
<span class="quotelev1">&gt; [$data_file],
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                   raw         =&gt; [$raw_file],
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                           description =&gt; 'MTT
</span><br>
<span class="quotelev1">&gt; Results Submission'
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                        ]);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +        else
</span><br>
<span class="quotelev2">&gt; &gt; +        {
</span><br>
<span class="quotelev2">&gt; &gt; +                     print &quot;load $data_file\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     open my $fh, '&lt;', &quot;$data_file&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +                     or die &quot;can't open config file: $!&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     my $f_hash = LoadFile($fh);
</span><br>
<span class="quotelev2">&gt; &gt; +                     #print Dumper($f_hash), &quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     my $inserted_id = $TestRunPhase-&gt;insert($f_hash);
</span><br>
<span class="quotelev2">&gt; &gt; +                     print &quot;inserted id $inserted_id \n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                     #$request = POST(
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                $conf_ref-&gt;{url},
</span><br>
<span class="quotelev2">&gt; &gt; +                     #               Content_Type =&gt; 'form-data',
</span><br>
<span class="quotelev2">&gt; &gt; +                     #               Content =&gt; [
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                   SUBMIT      =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                   data        =&gt; [$data_file],
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                   description =&gt; 'bquery submit'
</span><br>
<span class="quotelev2">&gt; &gt; +                     #                ]);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             #$request-&gt;authorization_basic($conf_ref-&gt;{username},
</span><br>
<span class="quotelev1">&gt; $conf_ref-&gt;{password});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             #my $response = $ua-&gt;request($request);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             #print &quot;Error at $conf_ref-&gt;{url}\n &quot;,
</span><br>
<span class="quotelev1">&gt; $response-&gt;status_line, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +             #   unless $response-&gt;is_success;
</span><br>
<span class="quotelev2">&gt; &gt; +             #print &quot;content type at $conf_ref-&gt;{url} -- &quot;,
</span><br>
<span class="quotelev1">&gt; $response-&gt;content_type, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +             #    unless $response-&gt;content_type eq 'text/html';
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             #print $response-&gt;content;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Query procedure
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +sub query
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($conf_ref)=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ua = LWP::UserAgent-&gt;new();
</span><br>
<span class="quotelev2">&gt; &gt; +    $ua-&gt;agent(&quot;mtt-submit&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $ua-&gt;proxy('http', $ENV{'http_proxy'});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $request = POST(
</span><br>
<span class="quotelev2">&gt; &gt; +                    $conf_ref-&gt;{url},
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content_Type =&gt; 'form-data',
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content =&gt; [
</span><br>
<span class="quotelev2">&gt; &gt; +                            QUERY       =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                            gql         =&gt; $conf_ref-&gt;{gql},
</span><br>
<span class="quotelev2">&gt; &gt; +                            raw         =&gt; $conf_ref-&gt;{raw},
</span><br>
<span class="quotelev2">&gt; &gt; +                            description =&gt; 'bquery view'
</span><br>
<span class="quotelev2">&gt; &gt; +                             ]);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $request-&gt;authorization_basic($conf_ref-&gt;{username},
</span><br>
<span class="quotelev1">&gt; $conf_ref-&gt;{password});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $response = $ua-&gt;request($request);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    die &quot;Error at $conf_ref-&gt;{url}\n &quot;, $response-&gt;status_line, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        unless $response-&gt;is_success;
</span><br>
<span class="quotelev2">&gt; &gt; +    die &quot;content type at $conf_ref-&gt;{url} -- &quot;,
</span><br>
<span class="quotelev1">&gt; $response-&gt;content_type, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        unless $response-&gt;content_type eq 'text/yaml';
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     # Load respond into YAML hash
</span><br>
<span class="quotelev2">&gt; &gt; +    use YAML::Syck ();
</span><br>
<span class="quotelev2">&gt; &gt; +    $YAML::Syck::ImplicitTyping = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $temp_str = $response-&gt;content;
</span><br>
<span class="quotelev2">&gt; &gt; +    my $data = eval {YAML::Syck::Load($temp_str)};
</span><br>
<span class="quotelev2">&gt; &gt; +#    use YAML::XS ();
</span><br>
<span class="quotelev2">&gt; &gt; +#    my $temp_str = $response-&gt;content;
</span><br>
<span class="quotelev2">&gt; &gt; +#    my $data = eval {YAML::XS::Load($temp_str)};
</span><br>
<span class="quotelev2">&gt; &gt; +    if (not defined $data or $@)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        die &quot;$!&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    MTT::Files::mkdir($conf_ref-&gt;{dir}) || die &quot;cannot mkdir
</span><br>
<span class="quotelev1">&gt; $conf_ref-&gt;{dir}: $!&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $default_form = {
</span><br>
<span class="quotelev2">&gt; &gt; +        product =&gt; 'mtt-gds',
</span><br>
<span class="quotelev2">&gt; &gt; +        version =&gt; &quot;0.1&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +        app_id  =&gt; 'query'
</span><br>
<span class="quotelev2">&gt; &gt; +    };
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $respond_form (@{$data-&gt;{data}})
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +     my $filename = &quot;$conf_ref-&gt;{dir}\/$respond_form-&gt;{key}&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $raw_filename = $filename.'.zip';
</span><br>
<span class="quotelev2">&gt; &gt; +     $filename = $filename.'.yaml';
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +             my %form = (%$respond_form, %$default_form);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +         if (int($conf_ref-&gt;{raw}) == 1 &amp;&amp; exists($form{raw}))
</span><br>
<span class="quotelev2">&gt; &gt; +         {
</span><br>
<span class="quotelev2">&gt; &gt; +             open(fh_temp, &quot;&gt;$raw_filename&quot;) || die &quot;cannot create
</span><br>
<span class="quotelev1">&gt; $raw_filename: $!&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             binmode fh_temp;
</span><br>
<span class="quotelev2">&gt; &gt; +             print fh_temp $form{raw};
</span><br>
<span class="quotelev2">&gt; &gt; +             close fh_temp;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            delete $form{raw};
</span><br>
<span class="quotelev2">&gt; &gt; +         }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        delete $form{key};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        # Generate YAML file contents
</span><br>
<span class="quotelev2">&gt; &gt; +        YAML::XS::DumpFile($filename, \%form);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# View procedure
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +sub view
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($conf_ref)=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ua = LWP::UserAgent-&gt;new();
</span><br>
<span class="quotelev2">&gt; &gt; +    $ua-&gt;agent(&quot;mtt-submit&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $ua-&gt;proxy('http', $ENV{'http_proxy'});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $request;
</span><br>
<span class="quotelev2">&gt; &gt; +    if (exists($conf_ref-&gt;{kind}))
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $request = POST(
</span><br>
<span class="quotelev2">&gt; &gt; +                    $conf_ref-&gt;{url},
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content_Type =&gt; 'form-data',
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content =&gt; [
</span><br>
<span class="quotelev2">&gt; &gt; +                            VIEW      =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                            kind      =&gt; $conf_ref-&gt;{kind},
</span><br>
<span class="quotelev2">&gt; &gt; +                            format    =&gt; $conf_ref-&gt;{format},
</span><br>
<span class="quotelev2">&gt; &gt; +                            description =&gt; 'bquery view'
</span><br>
<span class="quotelev2">&gt; &gt; +                             ]);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    elsif (exists($conf_ref-&gt;{gql}))
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $request = POST(
</span><br>
<span class="quotelev2">&gt; &gt; +                    $conf_ref-&gt;{url},
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content_Type =&gt; 'form-data',
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content =&gt; [
</span><br>
<span class="quotelev2">&gt; &gt; +                            VIEW      =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                            gql      =&gt; $conf_ref-&gt;{gql},
</span><br>
<span class="quotelev2">&gt; &gt; +                            format    =&gt; $conf_ref-&gt;{format},
</span><br>
<span class="quotelev2">&gt; &gt; +                            description =&gt; 'bquery view'
</span><br>
<span class="quotelev2">&gt; &gt; +                             ]);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $request-&gt;authorization_basic($conf_ref-&gt;{username},
</span><br>
<span class="quotelev1">&gt; $conf_ref-&gt;{password});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $response = $ua-&gt;request($request);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print &quot;Error at $conf_ref-&gt;{url}\n &quot;, $response-&gt;status_line, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        unless $response-&gt;is_success;
</span><br>
<span class="quotelev2">&gt; &gt; +    print &quot;content type at $conf_ref-&gt;{url} -- &quot;,
</span><br>
<span class="quotelev1">&gt; $response-&gt;content_type, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        unless $response-&gt;content_type eq 'text/html';
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print $response-&gt;content;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Admin procedure
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +sub admin
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($conf_ref)=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ua = LWP::UserAgent-&gt;new();
</span><br>
<span class="quotelev2">&gt; &gt; +    $ua-&gt;agent(&quot;mtt-submit&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $ua-&gt;proxy('http', $ENV{'http_proxy'});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $request;
</span><br>
<span class="quotelev2">&gt; &gt; +    if (exists($conf_ref-&gt;{newuser}) &amp;&amp; $#{$conf_ref-&gt;{newuser}} &gt;=2)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $request = POST(
</span><br>
<span class="quotelev2">&gt; &gt; +                    $conf_ref-&gt;{url},
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content_Type =&gt; 'form-data',
</span><br>
<span class="quotelev2">&gt; &gt; +                    Content =&gt; [
</span><br>
<span class="quotelev2">&gt; &gt; +                            ADMIN       =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                            _NEWUSER_   =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                            username    =&gt; $conf_ref-&gt;{newuser}-&gt;[0],
</span><br>
<span class="quotelev2">&gt; &gt; +                            password    =&gt; $conf_ref-&gt;{newuser}-&gt;[1],
</span><br>
<span class="quotelev2">&gt; &gt; +                            email       =&gt; $conf_ref-&gt;{newuser}-&gt;[2],
</span><br>
<span class="quotelev2">&gt; &gt; +                            first_name  =&gt; ($#{$conf_ref-&gt;{newuser}}
</span><br>
<span class="quotelev2">&gt; &gt;=3 ? $conf_ref-&gt;{newuser}-&gt;[3] : ''),
</span><br>
<span class="quotelev2">&gt; &gt; +                            last_name   =&gt; ($#{$conf_ref-&gt;{newuser}}
</span><br>
<span class="quotelev2">&gt; &gt;=4 ? $conf_ref-&gt;{newuser}-&gt;[4] : ''),
</span><br>
<span class="quotelev2">&gt; &gt; +                            description =&gt; 'bquery admin'
</span><br>
<span class="quotelev2">&gt; &gt; +                             ]);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $request-&gt;authorization_basic($conf_ref-&gt;{username},
</span><br>
<span class="quotelev1">&gt; $conf_ref-&gt;{password});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $response = $ua-&gt;request($request);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print &quot;Error at $conf_ref-&gt;{url}\n &quot;, $response-&gt;status_line, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        unless $response-&gt;is_success;
</span><br>
<span class="quotelev2">&gt; &gt; +    print &quot;content type at $conf_ref-&gt;{url} -- &quot;,
</span><br>
<span class="quotelev1">&gt; $response-&gt;content_type, &quot;\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        unless $response-&gt;content_type eq 'text/html';
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    print $response-&gt;content;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Send files by e-mail
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +###############################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +sub send_results_by_mail
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($mail_to, @files) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $mail_file (@files)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        system(&quot;echo report is attached | /usr/bin/mutt -s 'breport' -a
</span><br>
<span class="quotelev1">&gt; $mail_file $mail_to&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/lib/MTT/Reporter/MTTMongodb.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Reporter/MTTMongodb.pm      2012-08-01 05:46:03 EDT
</span><br>
<span class="quotelev1">&gt; (Wed, 01 Aug 2012)      (r1481)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,1195 @@
</span><br>
<span class="quotelev2">&gt; &gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2009 Voltaire
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +package MTT::Reporter::MTTMongodb;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +use strict;
</span><br>
<span class="quotelev2">&gt; &gt; +use MTT::Messages;
</span><br>
<span class="quotelev2">&gt; &gt; +use MTT::Values;
</span><br>
<span class="quotelev2">&gt; &gt; +use MTT::Values::Functions;
</span><br>
<span class="quotelev2">&gt; &gt; +use MTT::Version;
</span><br>
<span class="quotelev2">&gt; &gt; +use MTT::Globals;
</span><br>
<span class="quotelev2">&gt; &gt; +use MTT::DoCommand;
</span><br>
<span class="quotelev2">&gt; &gt; +use LWP::UserAgent;
</span><br>
<span class="quotelev2">&gt; &gt; +use HTTP::Request::Common qw(POST);
</span><br>
<span class="quotelev2">&gt; &gt; +use Data::Dumper;
</span><br>
<span class="quotelev2">&gt; &gt; +use File::Basename;
</span><br>
<span class="quotelev2">&gt; &gt; +use File::Temp qw(tempfile tempdir);
</span><br>
<span class="quotelev2">&gt; &gt; +use YAML::XS;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +use POSIX qw(strftime);
</span><br>
<span class="quotelev2">&gt; &gt; +use File::stat;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# http credentials
</span><br>
<span class="quotelev2">&gt; &gt; +my $username;
</span><br>
<span class="quotelev2">&gt; &gt; +my $password;
</span><br>
<span class="quotelev2">&gt; &gt; +my $realm;
</span><br>
<span class="quotelev2">&gt; &gt; +my $url;
</span><br>
<span class="quotelev2">&gt; &gt; +my $port;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# platform common name
</span><br>
<span class="quotelev2">&gt; &gt; +my $platform;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# LWP user agents (one per proxy)
</span><br>
<span class="quotelev2">&gt; &gt; +my @lwps;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Hostname string to report
</span><br>
<span class="quotelev2">&gt; &gt; +my $hostname;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# User ID (can be overridden in the INI)
</span><br>
<span class="quotelev2">&gt; &gt; +my $local_username;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# directory and file to write to
</span><br>
<span class="quotelev2">&gt; &gt; +my $dirname;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my $testrun_files_count    = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +my $testbuild_files_count  = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +my $mpiinstall_files_count = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +our $clusterInfo = undef;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub Init {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($ini, $section) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;[MTTGDS reporter] Init\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Have we been initialized already?  If so, error -- per #261,
</span><br>
<span class="quotelev2">&gt; &gt; +    # this module can currently only handle submitting to one database
</span><br>
<span class="quotelev2">&gt; &gt; +    # in a given run.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (defined($username)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        Error(&quot;The MTTGDS plugin can only be used once in an INI
</span><br>
<span class="quotelev1">&gt; file.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Extract data from the ini fields
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $username = Value($ini, $section, &quot;mttdatabase_username&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $password = Value($ini, $section, &quot;mttdatabase_password&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $url = Value($ini, $section, &quot;mttdatabase_url&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +     #$url = Value($ini, $section, &quot;mttdatabase_url&quot;).'client';
</span><br>
<span class="quotelev2">&gt; &gt; +    $realm = Value($ini, $section, &quot;mttdatabase_realm&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $hostname = Value($ini, $section, &quot;mttdatabase_hostname&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $local_username = Value($ini, &quot;mtt&quot;, &quot;local_username&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!$url) {
</span><br>
<span class="quotelev2">&gt; &gt; +        Warning(&quot;Need URL in MTTGDS Reporter section [$section]\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        return undef;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    my $count = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +    ++$count if ($username);
</span><br>
<span class="quotelev2">&gt; &gt; +    ++$count if ($password);
</span><br>
<span class="quotelev2">&gt; &gt; +    ++$count if ($realm);
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($count &gt; 0 &amp;&amp; $count != 3) {
</span><br>
<span class="quotelev2">&gt; &gt; +        Warning(&quot;MTTGDS Reporter section [$section]: if password,
</span><br>
<span class="quotelev1">&gt; username, or realm is specified, they all must be specified.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        return undef;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    $platform = Value($ini, $section, &quot;mttdatabase_platform&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Extract the host and port from the URL.  Needed for the
</span><br>
<span class="quotelev2">&gt; &gt; +    # credentials section.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $dir;
</span><br>
<span class="quotelev2">&gt; &gt; +    my $host = $url;
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($host =~ /(http:\/\/[-a-zA-Z0-9.]+):(\d+)\/?(.*)?$/) {
</span><br>
<span class="quotelev2">&gt; &gt; +        $host = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +        $port = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        $dir = $3;
</span><br>
<span class="quotelev2">&gt; &gt; +    } elsif ($host =~ /(http:\/\/[-a-zA-Z0-9.]+)\/?(.*)?$/) {
</span><br>
<span class="quotelev2">&gt; &gt; +        $host = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +        $dir = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        $port = 80;
</span><br>
<span class="quotelev2">&gt; &gt; +    } elsif ($host =~ /(https:\/\/[-a-zA-Z0-9.]+)\/?(.*)?$/) {
</span><br>
<span class="quotelev2">&gt; &gt; +        $host = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +        $dir = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        $port = 443;
</span><br>
<span class="quotelev2">&gt; &gt; +    } elsif  ($host =~ /(https:\/\/[-a-zA-Z0-9.]+):(\d+)\/?(.*)?$/) {
</span><br>
<span class="quotelev2">&gt; &gt; +        $host = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +        $port = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        $dir = $3;
</span><br>
<span class="quotelev2">&gt; &gt; +    } else {
</span><br>
<span class="quotelev2">&gt; &gt; +        Warning(&quot;MTTGDS Reporter did not get a valid url: $url .\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        return undef;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    $url = &quot;$host:$port&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    # Setup proxies
</span><br>
<span class="quotelev2">&gt; &gt; +    my $scheme = (80 == $port) ? &quot;http&quot; : &quot;https&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Create the Perl LWP stuff to setup for HTTP requests later.
</span><br>
<span class="quotelev2">&gt; &gt; +    # Make one for each proxy (we'll always have at least one proxy
</span><br>
<span class="quotelev2">&gt; &gt; +    # entry, even if it's empty).
</span><br>
<span class="quotelev2">&gt; &gt; +    my $proxies = \@{$MTT::Globals::Values-&gt;{proxies}-&gt;{$scheme}};
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $p (@{$proxies}) {
</span><br>
<span class="quotelev2">&gt; &gt; +        my %params = { env_proxy =&gt; 0 };
</span><br>
<span class="quotelev2">&gt; &gt; +        my $ua = LWP::UserAgent-&gt;new(%params);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        # @#$@!$# LWP proxying for https *does not work*.  So
</span><br>
<span class="quotelev2">&gt; &gt; +        # don't set $ua-&gt;proxy() for it.  Instead, we'll set
</span><br>
<span class="quotelev2">&gt; &gt; +        # $ENV{https_proxy} whenever we process requests that
</span><br>
<span class="quotelev2">&gt; &gt; +        # require SSL proxying, because that is obeyed deep down
</span><br>
<span class="quotelev2">&gt; &gt; +        # in the innards underneath LWP.
</span><br>
<span class="quotelev2">&gt; &gt; +        $ua-&gt;proxy([$scheme], $p-&gt;{proxy})
</span><br>
<span class="quotelev2">&gt; &gt; +            if ($p-&gt;{proxy} ne &quot;&quot; &amp;&amp; $scheme ne &quot;https&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        $ua-&gt;agent(&quot;MPI Test MTTGDS Reporter&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        push(@lwps, {
</span><br>
<span class="quotelev2">&gt; &gt; +            scheme =&gt; $scheme,
</span><br>
<span class="quotelev2">&gt; &gt; +            agent =&gt; $ua,
</span><br>
<span class="quotelev2">&gt; &gt; +            proxy =&gt; $p-&gt;{proxy},
</span><br>
<span class="quotelev2">&gt; &gt; +            source =&gt; $p-&gt;{source},
</span><br>
<span class="quotelev2">&gt; &gt; +        });
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($realm &amp;&amp; $username &amp;&amp; $password) {
</span><br>
<span class="quotelev2">&gt; &gt; +        Verbose(&quot;   Set HTTP credentials for realm \&quot;$realm\&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Do a test ping to ensure that we can reach this URL.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;MTTGDS client pinging a server...\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    my $form = {
</span><br>
<span class="quotelev2">&gt; &gt; +        PING =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +        Description =&gt; 'Pinging a server'
</span><br>
<span class="quotelev2">&gt; &gt; +    };
</span><br>
<span class="quotelev2">&gt; &gt; +     #DINARDINARDINARDINAR
</span><br>
<span class="quotelev2">&gt; &gt; +     #my $req = POST ($url, $form);
</span><br>
<span class="quotelev2">&gt; &gt; +    #$req-&gt;authorization_basic($username, $password);
</span><br>
<span class="quotelev2">&gt; &gt; +     #my $response = _do_request($req);
</span><br>
<span class="quotelev2">&gt; &gt; +     #if (! $response-&gt;is_success()) {
</span><br>
<span class="quotelev2">&gt; &gt; +     #    Warning(&quot;&gt;&gt; Failed test ping to MTTGDS URL: $url\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +     #    Warning(&quot;&gt;&gt; Error was: &quot; . $response-&gt;status_line . &quot;\n&quot; .
</span><br>
<span class="quotelev2">&gt; &gt; +     #            $response-&gt;content);
</span><br>
<span class="quotelev2">&gt; &gt; +     #    Error(&quot;&gt;&gt; Do not want to continue with possible bad
</span><br>
<span class="quotelev1">&gt; submission URL -- aborting\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +     #}
</span><br>
<span class="quotelev2">&gt; &gt; +     #DINARDINARDINARDINAR
</span><br>
<span class="quotelev2">&gt; &gt; +     #Debug(&quot;MTTGDS reporter initialized ($realm, $username, XXXXXX,
</span><br>
<span class="quotelev1">&gt; $url, $platform)\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +     #Debug(&quot;MTTGDS reporter respond content ($response-&gt;content)\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Extract data from the ini fields
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $dirname = MTT::DoCommand::cwd();
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;Collect cluster information...\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    my $clusterinfo_module = MTT::Values::Value($ini, &quot;vbench&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;clusterinfo_module&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    $clusterinfo_module = &quot;UnknownCluster&quot; if
</span><br>
<span class="quotelev1">&gt; (!defined($clusterinfo_module) || $clusterinfo_module eq &quot;&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;Use $clusterinfo_module module to collect information.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $clusterInfo =
</span><br>
<span class="quotelev1">&gt; MTT::Module::Run(&quot;MTT::Reporter::Utils::$clusterinfo_module&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;get_cluster_info&quot;, MTT::Values::Functions::env_hosts(2));
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($clusterInfo)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        Error(&quot;Fatal: Can't collect cluster information\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;Collect cluster information Finished\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;File reporter initialized ($dirname)\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return 1;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my $entries;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub Submit {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $info, $newentries ) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;[MTTGDS reporter] Submit\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($newentries)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        Warning(&quot;[MTTGDS reporter]: Submit parameter is undef.
</span><br>
<span class="quotelev1">&gt; Skip.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        return;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( !defined($entries) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        %$entries = ();
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $phase (keys(%$newentries))
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +        my $phase_obj = $newentries -&gt;{$phase};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        foreach my $section ( keys(%$phase_obj) )
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +           Debug(&quot;Phase: $phase Section: $section\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +           my $new_section_obj = $phase_obj-&gt;{$section};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +           my $section_obj = $entries-&gt;{$phase}-&gt;{$section};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +           foreach my $report (@$new_section_obj)
</span><br>
<span class="quotelev2">&gt; &gt; +                {
</span><br>
<span class="quotelev2">&gt; &gt; +               Debug(&quot;  add report\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +               push(@$section_obj, $report);
</span><br>
<span class="quotelev2">&gt; &gt; +           }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +           $entries-&gt;{$phase}-&gt;{$section} = $section_obj;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +       }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    Verbose(&quot;&gt;&gt; Reporter MTTGDS: cached for later submit\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;[MTTGDS reporter] Exit from Submit\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub Finalize {
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;[MTTGDS reporter] Finalize\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    _do_submit();
</span><br>
<span class="quotelev2">&gt; &gt; +    undef $entries;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    undef $username;
</span><br>
<span class="quotelev2">&gt; &gt; +    undef $password;
</span><br>
<span class="quotelev2">&gt; &gt; +    undef $realm;
</span><br>
<span class="quotelev2">&gt; &gt; +    undef $url;
</span><br>
<span class="quotelev2">&gt; &gt; +    undef $platform;
</span><br>
<span class="quotelev2">&gt; &gt; +    undef @lwps;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _do_submit {
</span><br>
<span class="quotelev2">&gt; &gt; +     #DinarDinarDinarDinar
</span><br>
<span class="quotelev2">&gt; &gt; +     use MongoDB;
</span><br>
<span class="quotelev2">&gt; &gt; +     use MongoDB::OID;
</span><br>
<span class="quotelev2">&gt; &gt; +     use YAML;
</span><br>
<span class="quotelev2">&gt; &gt; +     use Data::Dumper;
</span><br>
<span class="quotelev2">&gt; &gt; +     use YAML::XS;
</span><br>
<span class="quotelev2">&gt; &gt; +     $url =~ s/http:\/\///;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $conn = MongoDB::Connection-&gt;new(host =&gt; $url);
</span><br>
<span class="quotelev2">&gt; &gt; +     my $db = $conn-&gt;mtt;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $TestRunPhase = $db-&gt;TestRunPhase;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $MPIInstallPhase = $db-&gt;MPIInstallPhase;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $TestBuildPhase = $db-&gt;TestBuildPhase;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $doc;
</span><br>
<span class="quotelev2">&gt; &gt; +     my @numbers;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $inserted_id;
</span><br>
<span class="quotelev2">&gt; &gt; +     my $old_date;
</span><br>
<span class="quotelev2">&gt; &gt; +     my %new_date;
</span><br>
<span class="quotelev2">&gt; &gt; +     #DinarDinarDinarDinar
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Make a default form that will be used to seed all the forms that
</span><br>
<span class="quotelev2">&gt; &gt; +    # will be sent
</span><br>
<span class="quotelev2">&gt; &gt; +    my $default_form = {
</span><br>
<span class="quotelev2">&gt; &gt; +        product =&gt; 'mtt-gds',
</span><br>
<span class="quotelev2">&gt; &gt; +        version =&gt; &quot;0.1&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +        app_id  =&gt; 'submit',
</span><br>
<span class="quotelev2">&gt; &gt; +    };
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ini = $MTT::Globals::Internals-&gt;{ini};
</span><br>
<span class="quotelev2">&gt; &gt; +    my $submit_failed_results = MTT::Values::Value( $ini, &quot;VBench&quot;,
</span><br>
<span class="quotelev1">&gt; 'submit_failed_results_to_gds' );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # mtt ini flag to control what mtt results to submit to GDS
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($submit_failed_results) || $submit_failed_results eq
</span><br>
<span class="quotelev1">&gt; '')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $submit_failed_results = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $submit_results = MTT::Values::Value( $ini, &quot;VBench&quot;,
</span><br>
<span class="quotelev1">&gt; 'submit_results_to_gds' );
</span><br>
<span class="quotelev2">&gt; &gt; +    # mtt ini flag to control what mtt results to submit to GDS
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($submit_results) || $submit_results eq '' ||
</span><br>
<span class="quotelev1">&gt; $submit_results eq '1' || $submit_results eq 'True')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $submit_results = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +    } else {
</span><br>
<span class="quotelev2">&gt; &gt; +        $submit_results = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    #foreach my $phase (keys(%$entries)) {
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $phase ( &quot;MPI Install&quot;, &quot;Test Build&quot;, &quot;Test Run&quot; )
</span><br>
<span class="quotelev2">&gt; &gt; +     {
</span><br>
<span class="quotelev2">&gt; &gt; +        my $submitted = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +        my $phase_obj = $entries-&gt;{$phase};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        foreach my $section ( keys(%$phase_obj) )
</span><br>
<span class="quotelev2">&gt; &gt; +             {
</span><br>
<span class="quotelev2">&gt; &gt; +            my $section_obj = $phase_obj-&gt;{$section};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            foreach my $report_original (@$section_obj)
</span><br>
<span class="quotelev2">&gt; &gt; +                     {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                # Each section of a phase gets its own report to the
</span><br>
<span class="quotelev2">&gt; &gt; +                # database.  Make a deep copy of the default form to
</span><br>
<span class="quotelev1">&gt; start
</span><br>
<span class="quotelev2">&gt; &gt; +                # with.
</span><br>
<span class="quotelev2">&gt; &gt; +                my $form;
</span><br>
<span class="quotelev2">&gt; &gt; +                %$form = %{$default_form};
</span><br>
<span class="quotelev2">&gt; &gt; +                $form-&gt;{modules} = {};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                # Ensure to do a deep copy of the report (vs. just
</span><br>
<span class="quotelev2">&gt; &gt; +                # copying the reference) because we want to locally
</span><br>
<span class="quotelev2">&gt; &gt; +                # change some values
</span><br>
<span class="quotelev2">&gt; &gt; +                my $report;
</span><br>
<span class="quotelev2">&gt; &gt; +                %$report = %{$report_original};
</span><br>
<span class="quotelev2">&gt; &gt; +                %$report-&gt;{files_to_copy} = {} if
</span><br>
<span class="quotelev1">&gt; (!exists($report-&gt;{files_to_copy}));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                $MTT::Values::Functions::current_report = $report;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                my $attachment = {};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                if ( $phase eq &quot;Test Run&quot; )
</span><br>
<span class="quotelev2">&gt; &gt; +                             {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                    my $mpi_install = $entries-&gt;{&quot;MPI
</span><br>
<span class="quotelev1">&gt; Install&quot;}-&gt;{$report-&gt;{mpi_install_section_name}};
</span><br>
<span class="quotelev2">&gt; &gt; +                    my $mpi_report = @$mpi_install[0];
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                    _process_phase_mpi_install(&quot;MPI Install&quot;,
</span><br>
<span class="quotelev1">&gt; $report-&gt;{mpi_install_section_name}, $mpi_report, $form-&gt;{modules});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                    my $test_build = $entries-&gt;{&quot;Test
</span><br>
<span class="quotelev1">&gt; Build&quot;}-&gt;{$report-&gt;{test_build_section_name}};
</span><br>
<span class="quotelev2">&gt; &gt; +                    my $build_report = @$test_build[0];
</span><br>
<span class="quotelev2">&gt; &gt; +                    _process_phase_test_build(&quot;Test Build&quot;,
</span><br>
<span class="quotelev1">&gt; $report-&gt;{test_build_section_name}, $build_report, $form-&gt;{modules});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                    _process_phase_test_run($phase, $section, $report,
</span><br>
<span class="quotelev1">&gt; $form-&gt;{modules});
</span><br>
<span class="quotelev2">&gt; &gt; +                    $attachment = $report-&gt;{files_to_copy};
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +                elsif ( $phase eq &quot;Test Build&quot; )
</span><br>
<span class="quotelev2">&gt; &gt; +                             {
</span><br>
<span class="quotelev2">&gt; &gt; +                    my $mpi_install = $entries-&gt;{&quot;MPI
</span><br>
<span class="quotelev1">&gt; Install&quot;}-&gt;{$report-&gt;{mpi_install_section_name}};
</span><br>
<span class="quotelev2">&gt; &gt; +                    my $mpi_report = @$mpi_install[0];
</span><br>
<span class="quotelev2">&gt; &gt; +                    _process_phase_mpi_install(&quot;MPI Install&quot;,
</span><br>
<span class="quotelev1">&gt; $report-&gt;{mpi_install_section_name}, $mpi_report, $form-&gt;{modules});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                    _process_phase_test_build($phase, $section,
</span><br>
<span class="quotelev1">&gt; $report, $form-&gt;{modules});
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +                elsif ( $phase eq &quot;MPI Install&quot; )
</span><br>
<span class="quotelev2">&gt; &gt; +                             {
</span><br>
<span class="quotelev2">&gt; &gt; +                    _process_phase_mpi_install($phase, $section,
</span><br>
<span class="quotelev1">&gt; $report, $form-&gt;{modules});
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +                else
</span><br>
<span class="quotelev2">&gt; &gt; +                             {
</span><br>
<span class="quotelev2">&gt; &gt; +                    Debug(&quot;Phase: $phase Section: $section SKIPPED\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +                    next;
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                $MTT::Values::Functions::current_report = undef;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                Debug(&quot;Submitting to MongoDB...\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                my ($req, $file) = _prepare_request($phase, $report,
</span><br>
<span class="quotelev1">&gt; $form, $attachment);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                # do not submit result with non PASS status in case
</span><br>
<span class="quotelev1">&gt; 'submit_failed_results_to_gds' key is set as '0'
</span><br>
<span class="quotelev2">&gt; &gt; +                if ( ($submit_failed_results == 0) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; ($report-&gt;{test_result} != 1) )
</span><br>
<span class="quotelev2">&gt; &gt; +                {
</span><br>
<span class="quotelev2">&gt; &gt; +                    Debug(&quot;MTT ini-file has key
</span><br>
<span class="quotelev1">&gt; \'submit_failed_results_to_gds\'=$submit_failed_results and phase: $phase
</span><br>
<span class="quotelev1">&gt; test_result: $report-&gt;{test_result}\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +                    next;
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                if ( $submit_results == 0 )
</span><br>
<span class="quotelev2">&gt; &gt; +                {
</span><br>
<span class="quotelev2">&gt; &gt; +                    Debug(&quot;MTT ini-file has key
</span><br>
<span class="quotelev1">&gt; \'submit_results_to_gds\'=$submit_results\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +                    next;
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                             #DinarDinarDinar
</span><br>
<span class="quotelev2">&gt; &gt; +                if ( $phase eq &quot;Test Run&quot; )
</span><br>
<span class="quotelev2">&gt; &gt; +                             {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'TestRunPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'TestRun_start_time'} =
</span><br>
<span class="quotelev1">&gt; DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'TestBuildPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'TestBuild_start_time'} =
</span><br>
<span class="quotelev1">&gt; DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'MpiInstallPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'MpiInstall_start_time'}
</span><br>
<span class="quotelev1">&gt; = DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'TestRunPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'TestRun_end_time'} =
</span><br>
<span class="quotelev1">&gt; DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'TestBuildPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'TestBuild_end_time'} =
</span><br>
<span class="quotelev1">&gt; DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'MpiInstallPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'MpiInstall_end_time'} =
</span><br>
<span class="quotelev1">&gt; DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     my $inserted_id =
</span><br>
<span class="quotelev1">&gt; $TestRunPhase-&gt;insert($form);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$doc =
</span><br>
<span class="quotelev1">&gt; ($TestRunPhase-&gt;find({'_id'=&gt;$inserted_id}))-&gt;next;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #TestRun
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'TestRunPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$TestRunPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.TestRunPhase.start_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'TestRunPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$TestRunPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.TestRunPhase.end_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #MPIInstall
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'MpiInstallPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$TestRunPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.MpiInstallPhase.start_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'MpiInstallPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$TestRunPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.MpiInstallPhase.end_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #TestBuild
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'TestBuildPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$TestRunPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.TestBuildPhase.start_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'TestBuildPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$TestRunPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.TestBuildPhase.end_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                             }
</span><br>
<span class="quotelev2">&gt; &gt; +                             if ( $phase eq &quot;MPI Install&quot; )
</span><br>
<span class="quotelev2">&gt; &gt; +                             {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'MpiInstallPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'MpiInstall_start_time'}
</span><br>
<span class="quotelev1">&gt; = DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'MpiInstallPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'MpiInstall_end_time'} =
</span><br>
<span class="quotelev1">&gt; DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     $inserted_id =
</span><br>
<span class="quotelev1">&gt;  $MPIInstallPhase-&gt;insert($form);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$doc =
</span><br>
<span class="quotelev1">&gt; ($MPIInstallPhase-&gt;find({'_id'=&gt;$inserted_id}))-&gt;next;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #MPIInstall
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'MpiInstallPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$MPIInstallPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.MpiInstallPhase.start_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'MpiInstallPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$MPIInstallPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.MpiInstallPhase.end_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                             }
</span><br>
<span class="quotelev2">&gt; &gt; +                             if ( $phase eq &quot;Test Build&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +                             {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'TestBuildPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'TestBuild_start_time'} =
</span><br>
<span class="quotelev1">&gt; DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{'modules'}-&gt;{'TestBuildPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$form-&gt;{'TestBuild_end_time'} =
</span><br>
<span class="quotelev1">&gt; DateTime-&gt;new(%new_date);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     my $inserted_id =
</span><br>
<span class="quotelev1">&gt;  $TestBuildPhase-&gt;insert($form);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$doc =
</span><br>
<span class="quotelev1">&gt; ($TestBuildPhase-&gt;find({'_id'=&gt;$inserted_id}))-&gt;next;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #TestBuild
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'TestBuildPhase'}-&gt;{'start_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$TestBuildPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.TestBuildPhase.start_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #$old_date =
</span><br>
<span class="quotelev1">&gt; $doc-&gt;{'modules'}-&gt;{'TestBuildPhase'}-&gt;{'end_time'};
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #@numbers =
</span><br>
<span class="quotelev1">&gt; split(/:|-|\s/,$old_date);
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #print @numbers[0],&quot;-year &quot; ,
</span><br>
<span class="quotelev1">&gt; @numbers[1], &quot;-month &quot;,  @numbers[2], &quot;-day &quot;,  @numbers[3],&quot;-hour &quot; ,
</span><br>
<span class="quotelev1">&gt;  @numbers[4] ,&quot;-min &quot;,   @numbers[5],&quot;-sec\n&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +                                     #%new_date = (year =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[0],month =&gt; @numbers[1],day =&gt; @numbers[2],hour =&gt;
</span><br>
<span class="quotelev1">&gt; @numbers[3],minute =&gt; @numbers[4],second =&gt; @numbers[5],nanosecond =&gt;
</span><br>
<span class="quotelev1">&gt; 0,time_zone=&gt; 'America/Chicago');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; #$TestBuildPhase-&gt;update({'_id'=&gt;$inserted_id},{'$set'=&gt;{'modules.TestBuildPhase.end_time'=&gt;DateTime-&gt;new(%new_date)}});
</span><br>
<span class="quotelev2">&gt; &gt; +                             }
</span><br>
<span class="quotelev2">&gt; &gt; +                             #DinarDinarDinar
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +                $submitted = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +        Verbose(&quot;&gt;&gt; Submitted $phase to MongoDB\n&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; +            if ($submitted);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _process_phase_mpi_install {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $phase, $section, $report, $form )=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +    $form-&gt;{MpiInstallPhase} = {};
</span><br>
<span class="quotelev2">&gt; &gt; +    my $phase_form = $form-&gt;{MpiInstallPhase};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_submit_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_compiler_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_cluster_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_mpi_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{start_time} = strftime( &quot;%Y-%m-%d %H:%M:%S&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                        localtime $report-&gt;{start_timestamp} );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $duration = $report-&gt;{duration};
</span><br>
<span class="quotelev2">&gt; &gt; +    $duration =~ m/^(\w+)\s(.+)/;
</span><br>
<span class="quotelev2">&gt; &gt; +    $duration = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{duration} = $duration;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{end_time} = strftime( &quot;%Y-%m-%d %H:%M:%S&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                        localtime ($report-&gt;{start_timestamp} +
</span><br>
<span class="quotelev1">&gt; $phase_form-&gt;{duration}) );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{description} = $report-&gt;{description};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{stdout} = $report-&gt;{result_stdout};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{stderr} = $report-&gt;{result_stderr};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{status} = $report-&gt;{test_result};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{configuration} = $report-&gt;{configure_arguments};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ini = $MTT::Globals::Internals-&gt;{ini};
</span><br>
<span class="quotelev2">&gt; &gt; +    my $mpi_section = $report-&gt;{mpi_install_section_name};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $mpiget_section = MTT::Values::Value( $ini, &quot;MPI install: &quot; .
</span><br>
<span class="quotelev1">&gt; $mpi_section, &quot;mpi_get&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $mpiget_module = MTT::Values::Value( $ini, &quot;MPI get: &quot; .
</span><br>
<span class="quotelev1">&gt; $mpiget_section, &quot;module&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($mpiget_module eq &quot;AlreadyInstalled&quot;) {
</span><br>
<span class="quotelev2">&gt; &gt; +        $phase_form-&gt;{mpi_path} = MTT::Values::Value( $ini, &quot;MPI get:
</span><br>
<span class="quotelev1">&gt; &quot;. $mpiget_section, &quot;alreadyinstalled_dir&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +        $phase_form-&gt;{mpi_path} = EvaluateString(
</span><br>
<span class="quotelev1">&gt; $phase_form-&gt;{mpi_path}, $ini, &quot;MPI get: &quot;. $mpiget_section );
</span><br>
<span class="quotelev2">&gt; &gt; +    } else {
</span><br>
<span class="quotelev2">&gt; &gt; +        my $mpi_install =
</span><br>
<span class="quotelev1">&gt; $MTT::MPI::installs-&gt;{$mpiget_section}-&gt;{$report-&gt;{mpi_version}}-&gt;{$mpi_section};
</span><br>
<span class="quotelev2">&gt; &gt; +        $phase_form-&gt;{mpi_path} = $mpi_install-&gt;{installdir};
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return 0;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _process_phase_test_build {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $phase, $section, $report, $form )=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +    $form-&gt;{TestBuildPhase} = {};
</span><br>
<span class="quotelev2">&gt; &gt; +    my $phase_form = $form-&gt;{TestBuildPhase};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_submit_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_compiler_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_cluster_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_mpi_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_suite_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{start_time} = strftime( &quot;%Y-%m-%d %H:%M:%S&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                        localtime $report-&gt;{start_timestamp} );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $duration = $report-&gt;{duration};
</span><br>
<span class="quotelev2">&gt; &gt; +    $duration =~ m/^(\w+)\s(.+)/;
</span><br>
<span class="quotelev2">&gt; &gt; +    $duration = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{duration} = $duration;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{end_time} = strftime( &quot;%Y-%m-%d %H:%M:%S&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                        localtime ($report-&gt;{start_timestamp} +
</span><br>
<span class="quotelev1">&gt; $phase_form-&gt;{duration}) );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{description} = $report-&gt;{description};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{stdout} = $report-&gt;{result_stdout};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{stderr} = $report-&gt;{result_stderr};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{status} = $report-&gt;{test_result};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return 0;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _process_phase_test_run {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $phase, $section, $report, $form )=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +    $form-&gt;{TestRunPhase} = {};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    _pre_process_phase( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # copy benchmark's additional data about mpi (filled in benchmark's
</span><br>
<span class="quotelev1">&gt; analyzer)
</span><br>
<span class="quotelev2">&gt; &gt; +    %$form-&gt;{TestRunPhase} = ( %$report-&gt;{testphase} ) if (defined
</span><br>
<span class="quotelev1">&gt; ($report-&gt;{testphase}));#!!!!!!!!!!!!
</span><br>
<span class="quotelev2">&gt; &gt; +    my $phase_form = $form-&gt;{TestRunPhase};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_submit_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_compiler_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_cluster_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_mpi_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_suite_info( $phase, $section, $report, $form );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{start_time} = strftime( &quot;%Y-%m-%d %H:%M:%S&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                localtime $report-&gt;{start_timestamp} );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $duration = $report-&gt;{duration};
</span><br>
<span class="quotelev2">&gt; &gt; +    $duration =~ m/^(\w+)\s(.+)/;
</span><br>
<span class="quotelev2">&gt; &gt; +    $duration = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{duration} = $duration;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{end_time} = strftime( &quot;%Y-%m-%d %H:%M:%S&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                localtime ($report-&gt;{start_timestamp} +
</span><br>
<span class="quotelev1">&gt; $phase_form-&gt;{duration}) );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{description} = $report-&gt;{description};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{stdout} = $report-&gt;{result_stdout};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{stderr} = $report-&gt;{result_stderr};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{status} = $report-&gt;{test_result};
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{cmdline} = $report-&gt;{command};
</span><br>
<span class="quotelev2">&gt; &gt; +    my @sections;
</span><br>
<span class="quotelev2">&gt; &gt; +    push( @sections, &quot;test run: &quot; . $section );
</span><br>
<span class="quotelev2">&gt; &gt; +    push( @sections, &quot;MTT&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +    push( @sections, &quot;VBench&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{test_name} = $report-&gt;{test_name} if
</span><br>
<span class="quotelev1">&gt; (!defined($phase_form-&gt;{test_name}));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{mpi_nproc}    = int($report-&gt;{np});
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{mpi_hlist} = MTT::Values::Functions::env_hosts(2);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{net_note} = _get_value( &quot;vbench:net_note&quot;, @sections
</span><br>
<span class="quotelev1">&gt; );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ini = $MTT::Globals::Internals-&gt;{ini};
</span><br>
<span class="quotelev2">&gt; &gt; +    my @taglist = ();
</span><br>
<span class="quotelev2">&gt; &gt; +    my @tagsections = (@sections);
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $tagsection (@tagsections) {
</span><br>
<span class="quotelev2">&gt; &gt; +       my @val = MTT::Values::Value($ini,  $tagsection, &quot;vbench:tag&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +       if ( $#val != (-1) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +            @val = split(/\n/, $val[0]) if ($#val == 0);
</span><br>
<span class="quotelev2">&gt; &gt; +            foreach (@val)
</span><br>
<span class="quotelev2">&gt; &gt; +            {
</span><br>
<span class="quotelev2">&gt; &gt; +                my $tag = $_;
</span><br>
<span class="quotelev2">&gt; &gt; +                push( @taglist, $tag ) if ($tag);
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    @{$phase_form-&gt;{tag}} = @taglist;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{test_case} = $report-&gt;{parameters}
</span><br>
<span class="quotelev2">&gt; &gt; +        if ( !defined( $phase_form-&gt;{test_case} ) );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # JMS Why do we have an mpi_mca field?  Shouldn't this kind of
</span><br>
<span class="quotelev2">&gt; &gt; +    # stuff be in the MPI Details parameters and network fields?
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($phase_form-&gt;{mpi_mca})) {
</span><br>
<span class="quotelev2">&gt; &gt; +        # JMS Should generlize this to be &quot;extract from the current
</span><br>
<span class="quotelev2">&gt; &gt; +        # ::MPI::module&quot;.  There are other instances of this direct
</span><br>
<span class="quotelev2">&gt; &gt; +        # call in MTT::Test::Analyze::Performance::*.
</span><br>
<span class="quotelev2">&gt; &gt; +        $phase_form-&gt;{mpi_mca} =
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;  MTT::Values::Functions::MPI::OMPI::find_mca_params($report-&gt;{command});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        if (!defined($phase_form-&gt;{mpi_rlist})) {
</span><br>
<span class="quotelev2">&gt; &gt; +            my $rankfile = undef;
</span><br>
<span class="quotelev2">&gt; &gt; +            my $cmdline  = $report-&gt;{command};
</span><br>
<span class="quotelev2">&gt; &gt; +            if ( $cmdline =~ m/-rf\s([\S]+)/ ) {
</span><br>
<span class="quotelev2">&gt; &gt; +                $rankfile = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +            if ( $cmdline =~ m/--rankfile\s([\S]+)/ ) {
</span><br>
<span class="quotelev2">&gt; &gt; +                $rankfile = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +          $phase_form-&gt;{mpi_rlist} = $rankfile;
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    } else {
</span><br>
<span class="quotelev2">&gt; &gt; +         if (!defined($phase_form-&gt;{mpi_rlist})) {
</span><br>
<span class="quotelev2">&gt; &gt; +             $phase_form-&gt;{mpi_rlist} = &quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +         }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( $phase_form-&gt;{mpi_rlist} ne &quot;&quot;) {
</span><br>
<span class="quotelev2">&gt; &gt; +        push(@{$report-&gt;{files_to_copy}}, $phase_form-&gt;{mpi_rlist});
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # fill mpi_btl string list
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($phase_form-&gt;{mpi_mca} =~ m/-mca\sbtl\s(\S+)/) {
</span><br>
<span class="quotelev2">&gt; &gt; +        @{$phase_form-&gt;{mpi_btl}} = split /,/, $1;
</span><br>
<span class="quotelev2">&gt; &gt; +    } else {
</span><br>
<span class="quotelev2">&gt; &gt; +        @{$phase_form-&gt;{mpi_btl}} = ();
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # filling dynamic fields with prefix &quot;data_&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{data_message_size} = $report-&gt;{message_size} if
</span><br>
<span class="quotelev1">&gt; (exists( $report-&gt;{message_size} ));
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{data_latency_min} = $report-&gt;{latency_min} if
</span><br>
<span class="quotelev1">&gt; (exists( $report-&gt;{latency_min} ));
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{data_latency_avg} = $report-&gt;{latency_avg} if
</span><br>
<span class="quotelev1">&gt; (exists( $report-&gt;{latency_avg} ));
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{data_latency_max} = $report-&gt;{latency_max} if
</span><br>
<span class="quotelev1">&gt; (exists( $report-&gt;{latency_max} ));
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{data_bandwidth_min} = $report-&gt;{bandwidth_min} if
</span><br>
<span class="quotelev1">&gt; (exists( $report-&gt;{bandwidth_min} ));
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{data_bandwidth_avg} = $report-&gt;{bandwidth_avg} if
</span><br>
<span class="quotelev1">&gt; (exists( $report-&gt;{bandwidth_avg} ));
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{data_bandwidth_min} = $report-&gt;{bandwidth_min} if
</span><br>
<span class="quotelev1">&gt; (exists( $report-&gt;{bandwidth_min} ));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # filling dynamic fields with prefix &quot;custom_&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Special named export environment variables set in mpirun command
</span><br>
<span class="quotelev1">&gt; line
</span><br>
<span class="quotelev2">&gt; &gt; +    # should be stored as part of data in GDS datastore
</span><br>
<span class="quotelev2">&gt; &gt; +    while ( $phase_form-&gt;{cmdline} =~
</span><br>
<span class="quotelev1">&gt; m/\s+-[x|e]\s+(custom_\w+)\=([^\s\&quot;\']+)/g){
</span><br>
<span class="quotelev2">&gt; &gt; +        my $value = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        eval &quot;\$value = \&quot;$value\&quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        $phase_form-&gt;{$1} = $value;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    while ( $phase_form-&gt;{cmdline} =~
</span><br>
<span class="quotelev1">&gt; m/\s+-[x|e]\s+(custom_\w+)\=\&quot;([^\&quot;]*)\&quot;/g ){
</span><br>
<span class="quotelev2">&gt; &gt; +        my $value = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        eval &quot;\$value = \&quot;$value\&quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        $phase_form-&gt;{$1} = $value;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    while ( $phase_form-&gt;{cmdline} =~
</span><br>
<span class="quotelev1">&gt; m/\s+-[x|e]\s+\&quot;(custom_\w+)\=([^\&quot;]*)\&quot;/g){
</span><br>
<span class="quotelev2">&gt; &gt; +        my $value = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        eval &quot;\$value = \&quot;$value\&quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        $phase_form-&gt;{$1} = $value;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    while ( $phase_form-&gt;{cmdline} =~
</span><br>
<span class="quotelev1">&gt; m/\s+-[x|e]\s+(custom_\w+)\=\'([^\']*)\'/g ){
</span><br>
<span class="quotelev2">&gt; &gt; +        my $value = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        eval &quot;\$value = \&quot;$value\&quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        $phase_form-&gt;{$1} = $value;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    while ( $phase_form-&gt;{cmdline} =~
</span><br>
<span class="quotelev1">&gt; m/\s+-[x|e]\s+\'(custom_\w+)\=([^\']*)\'/g){
</span><br>
<span class="quotelev2">&gt; &gt; +        my $value = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        eval &quot;\$value = \&quot;$value\&quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        $phase_form-&gt;{$1} = $value;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # filling cached fields with prefix &quot;cached_&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +    _fill_cached_info( $form );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return 0;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _get_value {
</span><br>
<span class="quotelev2">&gt; &gt; +    my $name     = shift @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    my @sections = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ini = $MTT::Globals::Internals-&gt;{ini};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    #    push (@sections, &quot;MTT&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    #    push (@sections, &quot;VBench&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $value = MTT::Values::Value( $ini, &quot;VBench&quot;, $name );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    #   my $value = VBench::Values::getValueFromSections($ini, $name,
</span><br>
<span class="quotelev1">&gt; @sections);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return $value;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _pre_process_phase {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $phase, $section, $report, $form )=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ini    = $MTT::Globals::Internals-&gt;{ini};
</span><br>
<span class="quotelev2">&gt; &gt; +    my $module = $ini-&gt;val( &quot;Test run: &quot; . $section, &quot;analyze_module&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # If there's no analyze module, then just return
</span><br>
<span class="quotelev2">&gt; &gt; +    return $form
</span><br>
<span class="quotelev2">&gt; &gt; +        if (!$module);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $module = &quot;MTT::Test::Analyze::Performance::$module&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    my $method = &quot;PreReport&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    my @args   = ( $phase, $section, $report );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;Call PreReport on $module module.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $str   = &quot;require $module&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    my $check = eval $str;
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($@) {
</span><br>
<span class="quotelev2">&gt; &gt; +        Warning(&quot;Could not load module $module: $@\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    } else {
</span><br>
<span class="quotelev2">&gt; &gt; +        my $ret = undef;
</span><br>
<span class="quotelev2">&gt; &gt; +        $str = &quot;\$ret = exists(\$${module}::{$method})&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        eval $str;
</span><br>
<span class="quotelev2">&gt; &gt; +        if (1 == $ret) {
</span><br>
<span class="quotelev2">&gt; &gt; +            $ret = undef;
</span><br>
<span class="quotelev2">&gt; &gt; +            $str   = &quot;\$ret = \&amp;${module}::$method(\@args)&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +            $check = eval $str;
</span><br>
<span class="quotelev2">&gt; &gt; +            if ($@) {
</span><br>
<span class="quotelev2">&gt; &gt; +                Warning(&quot;Could not run module $module:$method: $@\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return $form;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _fill_cached_info {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $form ) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    my $phase_form = $form-&gt;{TestRunPhase};
</span><br>
<span class="quotelev2">&gt; &gt; +    my @info_list = ( &quot;SubmitInfo&quot;, &quot;ClusterInfo&quot;, &quot;MpiInfo&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;CompilerInfo&quot;, &quot;SuiteInfo&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +    my @exception_list = ( &quot;clusterinfo_net_conf&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;clusterinfo_net_pci&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $info (@info_list) {
</span><br>
<span class="quotelev2">&gt; &gt; +        foreach my $key (keys(%{$form-&gt;{$info}})) {
</span><br>
<span class="quotelev2">&gt; &gt; +            $phase_form-&gt;{lc(&quot;cached\_$info\_$key&quot;)} =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{$info}-&gt;{$key};
</span><br>
<span class="quotelev2">&gt; &gt; +             foreach (@exception_list) {
</span><br>
<span class="quotelev2">&gt; &gt; +                     if (lc(&quot;$_&quot;) eq lc(&quot;$info\_$key&quot;)) {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev1">&gt; delete($phase_form-&gt;{lc(&quot;cached\_$info\_$key&quot;)});
</span><br>
<span class="quotelev2">&gt; &gt; +                             last;
</span><br>
<span class="quotelev2">&gt; &gt; +                     }
</span><br>
<span class="quotelev2">&gt; &gt; +             }
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $phase_form-&gt;{&quot;cached_mpiinstallphase_mpi_path&quot;} =
</span><br>
<span class="quotelev1">&gt; $form-&gt;{MpiInstallPhase}-&gt;{mpi_path};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return $phase_form;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _fill_cluster_info {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $phase, $section, $report, $form ) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    $form-&gt;{ClusterInfo} = {};
</span><br>
<span class="quotelev2">&gt; &gt; +    my $info_form = $form-&gt;{ClusterInfo};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( !defined($report) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        die &quot;Runtime Error&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else {
</span><br>
<span class="quotelev2">&gt; &gt; +            my @sections;
</span><br>
<span class="quotelev2">&gt; &gt; +            push( @sections, &quot;test run: &quot; . $section );
</span><br>
<span class="quotelev2">&gt; &gt; +            push( @sections, &quot;MTT&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +            push( @sections, &quot;VBench&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            $info_form-&gt;{cluster_name} = $platform;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            my $node_count =
</span><br>
<span class="quotelev2">&gt; &gt; +                _get_value( &quot;vbench:cluster_node_count&quot;, @sections );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            %$info_form = (%$info_form, %$clusterInfo);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            delete $info_form-&gt;{total_mhz};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            if (defined($node_count) &amp;&amp; $node_count ne &quot;&quot;) {
</span><br>
<span class="quotelev2">&gt; &gt; +                $info_form-&gt;{node_count} = $node_count;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return $info_form;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _fill_mpi_info {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $phase, $section, $report, $form ) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    $form-&gt;{MpiInfo} = {};
</span><br>
<span class="quotelev2">&gt; &gt; +    # copy benchmark's additional data about mpi (filled in benchmark's
</span><br>
<span class="quotelev1">&gt; analyzer)
</span><br>
<span class="quotelev2">&gt; &gt; +    %$form-&gt;{MpiInfo} = ( %$report-&gt;{mpi} ) if (exists
</span><br>
<span class="quotelev1">&gt; ($report-&gt;{mpi}));#!!!!!!!!!!!!
</span><br>
<span class="quotelev2">&gt; &gt; +    my $info_form = $form-&gt;{MpiInfo};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( !defined($report) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        die &quot;Runtime Error&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else {
</span><br>
<span class="quotelev2">&gt; &gt; +        my @sections;
</span><br>
<span class="quotelev2">&gt; &gt; +        push( @sections, &quot;test run: &quot; . $section );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        my @mpi_name_parts =
</span><br>
<span class="quotelev2">&gt; &gt; +              split( /:/, $report-&gt;{mpi_install_section_name}, 1 );
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{mpi_name} = @mpi_name_parts[0];
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{mpi_version} = $report-&gt;{mpi_version};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        my $mpi_path;
</span><br>
<span class="quotelev2">&gt; &gt; +        my $ini = $MTT::Globals::Internals-&gt;{ini};
</span><br>
<span class="quotelev2">&gt; &gt; +        my $mpi_section = $report-&gt;{mpi_install_section_name};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        my $mpiget_section = MTT::Values::Value( $ini, &quot;MPI install: &quot;
</span><br>
<span class="quotelev1">&gt; . $mpi_section, &quot;mpi_get&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        my $mpiget_module = MTT::Values::Value( $ini, &quot;MPI get: &quot; .
</span><br>
<span class="quotelev1">&gt; $mpiget_section, &quot;module&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        if ($mpiget_module eq &quot;AlreadyInstalled&quot;) {
</span><br>
<span class="quotelev2">&gt; &gt; +            $mpi_path = MTT::Values::Value( $ini, &quot;MPI get: &quot;.
</span><br>
<span class="quotelev1">&gt; $mpiget_section, &quot;alreadyinstalled_dir&quot; );
</span><br>
<span class="quotelev2">&gt; &gt; +            $mpi_path = EvaluateString( $mpi_path, $ini, &quot;MPI get: &quot;.
</span><br>
<span class="quotelev1">&gt; $mpiget_section );
</span><br>
<span class="quotelev2">&gt; &gt; +        } else {
</span><br>
<span class="quotelev2">&gt; &gt; +            my $mpi_install =
</span><br>
<span class="quotelev1">&gt; $MTT::MPI::installs-&gt;{$mpiget_section}-&gt;{$report-&gt;{mpi_version}}-&gt;{$mpi_section};
</span><br>
<span class="quotelev2">&gt; &gt; +            $mpi_path = $mpi_install-&gt;{installdir};
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        my $error = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +        my $cmd = &quot;LD_LIBRARY_PATH=&quot; . $mpi_path . &quot;/lib &quot; . $mpi_path
</span><br>
<span class="quotelev1">&gt; . &quot;/bin/mpirun --version&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        open(SHELL, &quot;$cmd 2&gt;&amp;1|&quot;) || ($error = 1);
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{oma_version} = &quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        if ($error == 0) {
</span><br>
<span class="quotelev2">&gt; &gt; +            while (&lt;SHELL&gt;) {
</span><br>
<span class="quotelev2">&gt; &gt; +                if ( $_ =~ m/OMA\s+([r\d\.-]+)\s/) {
</span><br>
<span class="quotelev2">&gt; &gt; +                    $info_form-&gt;{oma_version} = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +                    last;
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +            close SHELL;
</span><br>
<span class="quotelev2">&gt; &gt; +        } # $error = 0
</span><br>
<span class="quotelev2">&gt; &gt; +        else {
</span><br>
<span class="quotelev2">&gt; &gt; +            $error = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        # Add host file to &quot;copy list&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        if ( MTT::Values::Functions::have_hostfile() ) {
</span><br>
<span class="quotelev2">&gt; &gt; +            my $hostFile = MTT::Values::Functions::hostfile();
</span><br>
<span class="quotelev2">&gt; &gt; +            push(@{$report-&gt;{files_to_copy}}, $hostFile);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    return $info_form;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _fill_suite_info {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $phase, $section, $report, $form ) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    $form-&gt;{SuiteInfo} = {};
</span><br>
<span class="quotelev2">&gt; &gt; +    # copy benchmark's additional data about benchmark suite (filled in
</span><br>
<span class="quotelev1">&gt; benchmark's analyzer)
</span><br>
<span class="quotelev2">&gt; &gt; +    %$form-&gt;{SuiteInfo} = ( %$report-&gt;{suiteinfo} ) if (exists
</span><br>
<span class="quotelev1">&gt; ($report-&gt;{suiteinfo}));#!!!!!!!!!!!!
</span><br>
<span class="quotelev2">&gt; &gt; +    my $info_form = $form-&gt;{SuiteInfo};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( !defined($report) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        die &quot;Runtime Error&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else {
</span><br>
<span class="quotelev2">&gt; &gt; +        my @sections;
</span><br>
<span class="quotelev2">&gt; &gt; +        push( @sections, &quot;test run: &quot; . $section );
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        my $suite_name = undef;
</span><br>
<span class="quotelev2">&gt; &gt; +        my $suite_version = undef;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        my $test_run = $section;
</span><br>
<span class="quotelev2">&gt; &gt; +        if ( $test_run =~ m/^(\S+):(\S+)/ ) {
</span><br>
<span class="quotelev2">&gt; &gt; +            $suite_name    = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +            $suite_version = $2;
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +        else {
</span><br>
<span class="quotelev2">&gt; &gt; +            if ( $test_run =~ m/^(\S+)\s(.+)$/ ) {
</span><br>
<span class="quotelev2">&gt; &gt; +                $suite_name    = $1;
</span><br>
<span class="quotelev2">&gt; &gt; +                $suite_version = &quot;undefined&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +            else {
</span><br>
<span class="quotelev2">&gt; &gt; +                $suite_name    = $test_run;
</span><br>
<span class="quotelev2">&gt; &gt; +                $suite_version = &quot;undefined&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{suite_name}    = $suite_name if
</span><br>
<span class="quotelev1">&gt; (!defined($info_form-&gt;{suite_name}));
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{suite_version} = $suite_version if
</span><br>
<span class="quotelev1">&gt; (!defined($info_form-&gt;{suite_version}));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    return $info_form;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _fill_submit_info {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $phase, $section, $report, $form ) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    $form-&gt;{SubmitInfo} = {};
</span><br>
<span class="quotelev2">&gt; &gt; +    my $info_form = $form-&gt;{SubmitInfo};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( !defined($report) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        die &quot;Runtime Error&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else {
</span><br>
<span class="quotelev2">&gt; &gt; +         if (!$local_username) {
</span><br>
<span class="quotelev2">&gt; &gt; +             $local_username = getpwuid($&lt;);
</span><br>
<span class="quotelev2">&gt; &gt; +         }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +         if (!defined($hostname) || &quot;&quot; eq $hostname) {
</span><br>
<span class="quotelev2">&gt; &gt; +             $hostname = `hostname`;
</span><br>
<span class="quotelev2">&gt; &gt; +             chomp($hostname);
</span><br>
<span class="quotelev2">&gt; &gt; +         }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{hostname} = $hostname;
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{local_username} = $local_username;
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{http_username} = $username;
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{mtt_version} = $MTT::Version::Combined;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    return $info_form;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _fill_compiler_info {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ( $phase, $section, $report, $form ) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    $form-&gt;{CompilerInfo} = {};
</span><br>
<span class="quotelev2">&gt; &gt; +    my $info_form = $form-&gt;{CompilerInfo};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( !defined($report) ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        die &quot;Runtime Error&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else {
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{compiler_name} = &quot;unknown&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{compiler_name} = $report-&gt;{compiler_name} if
</span><br>
<span class="quotelev1">&gt; (defined($report-&gt;{compiler_name}));
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{compiler_version} = &quot;unknown&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        $info_form-&gt;{compiler_version} = $report-&gt;{compiler_version} if
</span><br>
<span class="quotelev1">&gt; (defined($report-&gt;{compiler_version}));
</span><br>
<span class="quotelev2">&gt; &gt; +   }
</span><br>
<span class="quotelev2">&gt; &gt; +    return $info_form;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _do_request {
</span><br>
<span class="quotelev2">&gt; &gt; +    my $req = shift;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Ensure that the environment is clean so that nothing happens
</span><br>
<span class="quotelev2">&gt; &gt; +    # that we're unaware of.
</span><br>
<span class="quotelev2">&gt; &gt; +    my %ENV_SAVE = %ENV;
</span><br>
<span class="quotelev2">&gt; &gt; +    delete $ENV{http_proxy};
</span><br>
<span class="quotelev2">&gt; &gt; +    delete $ENV{https_proxy};
</span><br>
<span class="quotelev2">&gt; &gt; +    delete $ENV{HTTP_PROXY};
</span><br>
<span class="quotelev2">&gt; &gt; +    delete $ENV{HTTPS_PROXY};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Go through each ua and try to get a good connection.  If we get
</span><br>
<span class="quotelev2">&gt; &gt; +    # connection refused from any of them, try another.
</span><br>
<span class="quotelev2">&gt; &gt; +    my $response;
</span><br>
<span class="quotelev2">&gt; &gt; +    foreach my $ua (@lwps) {
</span><br>
<span class="quotelev2">&gt; &gt; +        Debug(&quot;MTTGDS client trying proxy: $ua-&gt;{proxy} /
</span><br>
<span class="quotelev1">&gt; $ua-&gt;{source}\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        $ENV{https_proxy} = $ua-&gt;{proxy}
</span><br>
<span class="quotelev2">&gt; &gt; +            if (&quot;https&quot; eq $ua-&gt;{scheme});
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        # Do the HTTP request
</span><br>
<span class="quotelev2">&gt; &gt; +        $response = $ua-&gt;{agent}-&gt;request($req);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        # If it succeeded, or if it failed with something other than
</span><br>
<span class="quotelev2">&gt; &gt; +        # code 500, return (code 500 = can't connect)
</span><br>
<span class="quotelev2">&gt; &gt; +        if ($response-&gt;is_success() ||
</span><br>
<span class="quotelev2">&gt; &gt; +            $response-&gt;code() != 500) {
</span><br>
<span class="quotelev2">&gt; &gt; +            Debug(&quot;MTTGDS proxy successful / not 500\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +            %ENV = %ENV_SAVE;
</span><br>
<span class="quotelev2">&gt; &gt; +            return $response;
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +        Debug(&quot;MTTGDS proxy unsuccessful -- trying next\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        # Otherwise, loop around and try again
</span><br>
<span class="quotelev2">&gt; &gt; +        Debug(&quot;Proxy $ua-&gt;{proxy} failed code: &quot; .
</span><br>
<span class="quotelev2">&gt; &gt; +              $response-&gt;status_line . &quot;\n&quot; . $response-&gt;content .
</span><br>
<span class="quotelev1">&gt; &quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Sorry -- nothing got through...
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;MTTGDS proxy totally unsuccessful\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    %ENV = %ENV_SAVE;
</span><br>
<span class="quotelev2">&gt; &gt; +    return $response;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Create test file results, and prepare the HTTP file upload
</span><br>
<span class="quotelev2">&gt; &gt; +# request
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +my $request_count = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub _prepare_request {
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($phase, $report, $form, $attachment )=@_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $ini = $MTT::Globals::Internals-&gt;{ini};
</span><br>
<span class="quotelev2">&gt; &gt; +    my $repository_path = MTT::Values::Value( $ini, &quot;VBench&quot;,
</span><br>
<span class="quotelev1">&gt; 'repository_tempdir' );
</span><br>
<span class="quotelev2">&gt; &gt; +    my $repository_name = MTT::Values::Value( $ini, &quot;VBench&quot;,
</span><br>
<span class="quotelev1">&gt; 'repository_dirname_prefix' );
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($fh, $filename);
</span><br>
<span class="quotelev2">&gt; &gt; +    my $tmpdir;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Find a temporary directory for files
</span><br>
<span class="quotelev2">&gt; &gt; +    if (!defined($repository_path) || $repository_path eq '')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $tmpdir = tempdir( CLEANUP =&gt; 1);
</span><br>
<span class="quotelev2">&gt; &gt; +        ($fh, $filename) = tempfile( DIR =&gt; $tmpdir, SUFFIX =&gt; '.yaml'
</span><br>
<span class="quotelev1">&gt; );
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    elsif  (!defined($repository_name) || $repository_name eq '')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +     MTT::Files::mkdir($repository_path) if (! -d $repository_path);
</span><br>
<span class="quotelev2">&gt; &gt; +     $tmpdir = tempdir( DIR =&gt; &quot;$repository_path&quot;, CLEANUP =&gt; 0);
</span><br>
<span class="quotelev2">&gt; &gt; +        ($fh, $filename) = tempfile( DIR =&gt; $tmpdir, SUFFIX =&gt; '.yaml'
</span><br>
<span class="quotelev1">&gt; );
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $request_count++;
</span><br>
<span class="quotelev2">&gt; &gt; +        MTT::Files::mkdir($repository_path) if (! -d $repository_path);
</span><br>
<span class="quotelev2">&gt; &gt; +        $tmpdir =
</span><br>
<span class="quotelev1">&gt; &quot;${repository_path}/${repository_name}_${request_count}&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        $filename = &quot;$tmpdir/${repository_name}_${request_count}.yaml&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $raw_filename = ();
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    MTT::Files::mkdir($tmpdir);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( keys %$attachment ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        foreach my $file (keys %$attachment) {
</span><br>
<span class="quotelev2">&gt; &gt; +            Debug (&quot;    Attachment: $file\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +            MTT::Values::Functions::shell(&quot;cp -r $file
</span><br>
<span class="quotelev1">&gt; $tmpdir/$attachment-&gt;{$file}&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +        $raw_filename = &quot;$tmpdir/data_file.zip&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Generate YAML file contents
</span><br>
<span class="quotelev2">&gt; &gt; +    YAML::XS::DumpFile(&quot;$filename&quot;, $form);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ( $raw_filename ne '')
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        MTT::Values::Functions::shell(
</span><br>
<span class="quotelev2">&gt; &gt; +                   &quot;cd $tmpdir; zip -9 -r $raw_filename *&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    # Chech Google Datastore put entity limitation
</span><br>
<span class="quotelev2">&gt; &gt; +    $raw_filename = '' if  1048576 &lt;= ((-s &quot;$raw_filename&quot;) + (-s
</span><br>
<span class="quotelev1">&gt; &quot;$filename&quot;));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my $req;
</span><br>
<span class="quotelev2">&gt; &gt; +    # Create the &quot;upload&quot; POST request
</span><br>
<span class="quotelev2">&gt; &gt; +    if (-e $raw_filename)
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +         $req = POST $url,
</span><br>
<span class="quotelev2">&gt; &gt; +             Content_Type =&gt; 'form-data',
</span><br>
<span class="quotelev2">&gt; &gt; +             Content =&gt; [
</span><br>
<span class="quotelev2">&gt; &gt; +                 SUBMIT      =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                 data        =&gt; [&quot;$filename&quot;],
</span><br>
<span class="quotelev2">&gt; &gt; +                 raw         =&gt; [&quot;$raw_filename&quot;],
</span><br>
<span class="quotelev2">&gt; &gt; +                 description =&gt; &quot;Submit data and raw on the phase
</span><br>
<span class="quotelev1">&gt; &lt;$phase&gt;&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +              ];
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    else
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +        $req = POST $url,
</span><br>
<span class="quotelev2">&gt; &gt; +            Content_Type =&gt; 'form-data',
</span><br>
<span class="quotelev2">&gt; &gt; +            Content =&gt; [
</span><br>
<span class="quotelev2">&gt; &gt; +                SUBMIT      =&gt; 1,
</span><br>
<span class="quotelev2">&gt; &gt; +                data        =&gt; [&quot;$filename&quot;],
</span><br>
<span class="quotelev2">&gt; &gt; +                description =&gt; &quot;Submit data only on the phase &lt;$phase&gt;&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +             ];
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    $req-&gt;authorization_basic($username, $password);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return (\$req, $filename);
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +1;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0591/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0592.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client	lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="0590.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0592.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client	lib/MTT/Reporter"</a>
<li><strong>Reply:</strong> <a href="0592.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client	lib/MTT/Reporter"</a>
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
