<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performanceplug-ins)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 16:50:19 2009" -->
<!-- isoreceived="20090319205019" -->
<!-- sent="Thu, 19 Mar 2009 16:50:12 -0400" -->
<!-- isosent="20090319205012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performanceplug-ins)" -->
<!-- id="257DF427-BE6F-4062-8613-299243945AC1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800903191217p79d772e8n1e4a74013bcda756_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performanceplug-ins)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 16:50:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0366.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance	plug-ins)"</a>
<li><strong>Previous message:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
<li><strong>In reply to:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0366.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance	plug-ins)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think it's an issue of the parsers -- what Ethan is saying is  
<br>
that the database is not storing the data properly.  The current db  
<br>
schema is only setup to handle the data he mentioned.  So we'd need to  
<br>
expand the database to include the data you're talking about  
<br>
(potentially a different table to hold hpl results).
<br>
<p><p>On Mar 19, 2009, at 3:17 PM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Hello Eithan,
</span><br>
<span class="quotelev1">&gt; Thanks for info, will refactor it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from <a href="http://www.netlib.org/benchmark/hpl/">http://www.netlib.org/benchmark/hpl/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; HPL is a software package that solves a (random) dense linear system  
</span><br>
<span class="quotelev1">&gt; in double precision (64 bits) arithmetic on distributed-memory  
</span><br>
<span class="quotelev1">&gt; computers. It can thus be regarded as a portable as well as freely  
</span><br>
<span class="quotelev1">&gt; available implementation of the High Performance Computing Linpack  
</span><br>
<span class="quotelev1">&gt; Benchmark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The HPL package provides a testing and timing program to quantify  
</span><br>
<span class="quotelev1">&gt; the accuracy of the obtained solution as well as the time it took to  
</span><br>
<span class="quotelev1">&gt; compute it
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where do you think is a good place to keep parsers for other then  
</span><br>
<span class="quotelev1">&gt; lat/bw based mpi benchmarks?
</span><br>
<span class="quotelev1">&gt; I think we can have a collection of such parsers in the mtt and at  
</span><br>
<span class="quotelev1">&gt; some point we can enhance mtt reports with other metrics.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 19, 2009 at 8:22 PM, Ethan Mallove  
</span><br>
<span class="quotelev1">&gt; &lt;ethan.mallove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is HPL a latency and/or bandwidth performance test?  All the Analyze
</span><br>
<span class="quotelev1">&gt; plug-ins in lib/MTT/Test/Analyze/Performance are for latency/bandwidth
</span><br>
<span class="quotelev1">&gt; tests, which means they can then be rendered as graphs in the MTT
</span><br>
<span class="quotelev1">&gt; Reporter.  All of these plug-ins are required to output at least one
</span><br>
<span class="quotelev1">&gt; of the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  latency_avg
</span><br>
<span class="quotelev1">&gt;  latency_min
</span><br>
<span class="quotelev1">&gt;  latency_max
</span><br>
<span class="quotelev1">&gt;  bandwidth_avg
</span><br>
<span class="quotelev1">&gt;  bandwidth_min
</span><br>
<span class="quotelev1">&gt;  bandwidth_max
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They all contain this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $report-&gt;{test_type} = 'latency_bandwidth';
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPL.pm should have a line like this somewhere:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $report-&gt;{test_type} = 'tv_gflops';
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe HPL.pm could go into a different directory or have a comment
</span><br>
<span class="quotelev1">&gt; somewhere to clear up this confusion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar/19/2009 02:11:05AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2009-03-19 02:11:04 EDT (Thu, 19 Mar 2009)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1273
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1273">https://svn.open-mpi.org/trac/mtt/changeset/1273</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; HPL analyzer added
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/lib/MTT/Test/Analyze/Performance/HPL.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/lib/MTT/Test/Analyze/Performance/HPL.pm
</span><br>
<span class="quotelev2">&gt; &gt;  
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
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Test/Analyze/Performance/HPL.pm     2009-03-19  
</span><br>
<span class="quotelev1">&gt; 02:11:04 EDT (Thu, 19 Mar 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,63 @@
</span><br>
<span class="quotelev2">&gt; &gt; +#!/usr/bin/env perl
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2007      Voltaire  All rights reserved.
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
<span class="quotelev2">&gt; &gt; +package MTT::Test::Analyze::Performance::HPL;
</span><br>
<span class="quotelev2">&gt; &gt; +use strict;
</span><br>
<span class="quotelev2">&gt; &gt; +use Data::Dumper;
</span><br>
<span class="quotelev2">&gt; &gt; +#use MTT::Messages;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Process the result_stdout emitted from one of hpl tests
</span><br>
<span class="quotelev2">&gt; &gt; +sub Analyze {
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    my($result_stdout) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +    my $report;
</span><br>
<span class="quotelev2">&gt; &gt; +    my(@t_v,
</span><br>
<span class="quotelev2">&gt; &gt; +       @time,
</span><br>
<span class="quotelev2">&gt; &gt; +       @gflops);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +$report-&gt;{test_name}=&quot;HPL&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    my @lines = split(/\n|\r/, $result_stdout);
</span><br>
<span class="quotelev2">&gt; &gt; +    # Sample result_stdout:
</span><br>
<span class="quotelev2">&gt; &gt; +#- The matrix A is randomly generated for each test.
</span><br>
<span class="quotelev2">&gt; &gt; +#- The following scaled residual check will be computed:
</span><br>
<span class="quotelev2">&gt; &gt; +#      ||Ax-b||_oo / ( eps * ( || x ||_oo * || A ||_oo + || b || 
</span><br>
<span class="quotelev1">&gt; _oo ) * N )
</span><br>
<span class="quotelev2">&gt; &gt; +#- The relative machine precision (eps) is taken to  
</span><br>
<span class="quotelev1">&gt; be               1.110223e-16
</span><br>
<span class="quotelev2">&gt; &gt; +#- Computational tests pass if scaled residuals are less  
</span><br>
<span class="quotelev1">&gt; than                16.0
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #= 
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
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; +#T/V                N    NB     P     Q                
</span><br>
<span class="quotelev1">&gt; Time                 Gflops
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +#WR00L2L2       29184   128     2     4            
</span><br>
<span class="quotelev1">&gt; 15596.86              1.063e+00
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +#||Ax-b||_oo/(eps*(||A||_oo*||x||_oo+||b||_oo)*N)=         
</span><br>
<span class="quotelev1">&gt; 0.0008986 ...... PASSED
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #= 
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
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; +#T/V                N    NB     P     Q                
</span><br>
<span class="quotelev1">&gt; Time                 Gflops
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +#WR00L2L4       29184   128     2     4            
</span><br>
<span class="quotelev1">&gt; 15251.81              1.087e+00
</span><br>
<span class="quotelev2">&gt; &gt; +    my $line;
</span><br>
<span class="quotelev2">&gt; &gt; +    while (defined($line = shift(@lines))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        #WR00L2L2       29184   128     2     4            
</span><br>
<span class="quotelev1">&gt; 15596.86              1.063e+00
</span><br>
<span class="quotelev2">&gt; &gt; +        if ($line =~ m/^(\S+)\s+\d+\s+\d+\s+\d+\s+\d+\s+(\d+[\.\d] 
</span><br>
<span class="quotelev1">&gt; +)\s+(\S+)/) {
</span><br>
<span class="quotelev2">&gt; &gt; +            push(@t_v, $1);
</span><br>
<span class="quotelev2">&gt; &gt; +            push(@time, $2);
</span><br>
<span class="quotelev2">&gt; &gt; +            push(@gflops, $3);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +      # Postgres uses brackets for array insertion
</span><br>
<span class="quotelev2">&gt; &gt; +    # (see postgresql.org/docs/7.4/interactive/arrays.html)
</span><br>
<span class="quotelev2">&gt; &gt; +    $report-&gt;{tv}   = &quot;{&quot; . join(&quot;,&quot;, @t_v) . &quot;}&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    $report-&gt;{time}   = &quot;{&quot; . join(&quot;,&quot;, @time) . &quot;}&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    $report-&gt;{gflops}   = &quot;{&quot; . join(&quot;,&quot;, @gflops) . &quot;}&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +    return $report;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +1;
</span><br>
<span class="quotelev2">&gt; &gt; +
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0366.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance	plug-ins)"</a>
<li><strong>Previous message:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
<li><strong>In reply to:</strong> <a href="0364.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance plug-ins)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0366.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance	plug-ins)"</a>
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
