<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 14:22:48 2009" -->
<!-- isoreceived="20090319182248" -->
<!-- sent="Thu, 19 Mar 2009 13:22:40 -0500" -->
<!-- isosent="20090319182240" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)" -->
<!-- id="20090319182239.GC26923_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200903190611.n2J6B5Rl025572_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 14:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
<li><strong>Previous message:</strong> <a href="0362.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
<li><strong>Reply:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mike,
<br>
<p>Is HPL a latency and/or bandwidth performance test?  All the Analyze
<br>
plug-ins in lib/MTT/Test/Analyze/Performance are for latency/bandwidth
<br>
tests, which means they can then be rendered as graphs in the MTT
<br>
Reporter.  All of these plug-ins are required to output at least one
<br>
of the following:
<br>
<p>&nbsp;&nbsp;latency_avg
<br>
&nbsp;&nbsp;latency_min
<br>
&nbsp;&nbsp;latency_max
<br>
&nbsp;&nbsp;bandwidth_avg
<br>
&nbsp;&nbsp;bandwidth_min
<br>
&nbsp;&nbsp;bandwidth_max
<br>
<p>They all contain this:
<br>
<p>&nbsp;&nbsp;$report-&gt;{test_type} = 'latency_bandwidth';
<br>
<p>HPL.pm should have a line like this somewhere:
<br>
<p>&nbsp;&nbsp;$report-&gt;{test_type} = 'tv_gflops';
<br>
<p>Maybe HPL.pm could go into a different directory or have a comment
<br>
somewhere to clear up this confusion.
<br>
<p>Regards,
<br>
Ethan
<br>
<p><p>On Thu, Mar/19/2009 02:11:05AM, miked_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2009-03-19 02:11:04 EDT (Thu, 19 Mar 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1273
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1273">https://svn.open-mpi.org/trac/mtt/changeset/1273</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; HPL analyzer added
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Analyze/Performance/HPL.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/MTT/Test/Analyze/Performance/HPL.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Analyze/Performance/HPL.pm	2009-03-19 02:11:04 EDT (Thu, 19 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,63 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007      Voltaire  All rights reserved.
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
<span class="quotelev1">&gt; +package MTT::Test::Analyze::Performance::HPL;
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +use Data::Dumper;
</span><br>
<span class="quotelev1">&gt; +#use MTT::Messages;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Process the result_stdout emitted from one of hpl tests
</span><br>
<span class="quotelev1">&gt; +sub Analyze {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my($result_stdout) = @_;
</span><br>
<span class="quotelev1">&gt; +    my $report;
</span><br>
<span class="quotelev1">&gt; +    my(@t_v,
</span><br>
<span class="quotelev1">&gt; +       @time,
</span><br>
<span class="quotelev1">&gt; +       @gflops);
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt; +$report-&gt;{test_name}=&quot;HPL&quot;;
</span><br>
<span class="quotelev1">&gt; +    my @lines = split(/\n|\r/, $result_stdout);
</span><br>
<span class="quotelev1">&gt; +    # Sample result_stdout:
</span><br>
<span class="quotelev1">&gt; +#- The matrix A is randomly generated for each test.
</span><br>
<span class="quotelev1">&gt; +#- The following scaled residual check will be computed:
</span><br>
<span class="quotelev1">&gt; +#      ||Ax-b||_oo / ( eps * ( || x ||_oo * || A ||_oo + || b ||_oo ) * N )
</span><br>
<span class="quotelev1">&gt; +#- The relative machine precision (eps) is taken to be               1.110223e-16
</span><br>
<span class="quotelev1">&gt; +#- Computational tests pass if scaled residuals are less than                16.0
</span><br>
<span class="quotelev1">&gt; +#================================================================================
</span><br>
<span class="quotelev1">&gt; +#T/V                N    NB     P     Q               Time                 Gflops
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +#WR00L2L2       29184   128     2     4           15596.86              1.063e+00
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +#||Ax-b||_oo/(eps*(||A||_oo*||x||_oo+||b||_oo)*N)=        0.0008986 ...... PASSED
</span><br>
<span class="quotelev1">&gt; +#================================================================================
</span><br>
<span class="quotelev1">&gt; +#T/V                N    NB     P     Q               Time                 Gflops
</span><br>
<span class="quotelev1">&gt; +#--------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +#WR00L2L4       29184   128     2     4           15251.81              1.087e+00
</span><br>
<span class="quotelev1">&gt; +    my $line;
</span><br>
<span class="quotelev1">&gt; +    while (defined($line = shift(@lines))) {
</span><br>
<span class="quotelev1">&gt; +        #WR00L2L2       29184   128     2     4           15596.86              1.063e+00
</span><br>
<span class="quotelev1">&gt; +        if ($line =~ m/^(\S+)\s+\d+\s+\d+\s+\d+\s+\d+\s+(\d+[\.\d]+)\s+(\S+)/) {
</span><br>
<span class="quotelev1">&gt; +            push(@t_v, $1);
</span><br>
<span class="quotelev1">&gt; +            push(@time, $2);
</span><br>
<span class="quotelev1">&gt; +            push(@gflops, $3);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      # Postgres uses brackets for array insertion
</span><br>
<span class="quotelev1">&gt; +    # (see postgresql.org/docs/7.4/interactive/arrays.html)
</span><br>
<span class="quotelev1">&gt; +    $report-&gt;{tv}   = &quot;{&quot; . join(&quot;,&quot;, @t_v) . &quot;}&quot;;
</span><br>
<span class="quotelev1">&gt; +    $report-&gt;{time}   = &quot;{&quot; . join(&quot;,&quot;, @time) . &quot;}&quot;;
</span><br>
<span class="quotelev1">&gt; +    $report-&gt;{gflops}   = &quot;{&quot; . join(&quot;,&quot;, @gflops) . &quot;}&quot;;
</span><br>
<span class="quotelev1">&gt; +    return $report;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt; +
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
<li><strong>Next message:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
<li><strong>Previous message:</strong> <a href="0362.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
<li><strong>Reply:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
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
