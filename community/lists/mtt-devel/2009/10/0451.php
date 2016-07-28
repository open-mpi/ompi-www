<?
$subject_val = "Re: [MTT devel] Analysis of hung jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 16:21:45 2009" -->
<!-- isoreceived="20091007202145" -->
<!-- sent="Wed, 7 Oct 2009 16:21:39 -0400" -->
<!-- isosent="20091007202139" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Analysis of hung jobs." -->
<!-- id="20091007202139.GC14465_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1254945862.3133.119.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [MTT devel] Analysis of hung jobs.<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 16:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct/07/2009 09:04:22PM, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2009-10-07 at 15:41 -0400, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I got the following error doing a simple test:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As it happens I saw this error earlier on FC8, r279 should fix this
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<p>Thanks. That eliminates the perl regex error.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   $ perl --version
</span><br>
<span class="quotelev2">&gt; &gt;   This is perl, v5.8.4 built for sun4-solaris-64int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had wondered if you'd be using solaris, this is not something I've
</span><br>
<span class="quotelev1">&gt; tested and not something I'd expect to work.  The stack trace code
</span><br>
<span class="quotelev1">&gt; should all be fine but there might be some problems reading data
</span><br>
<span class="quotelev1">&gt; from /proc.  In the past padb has worked on Tru64, possibly all that
</span><br>
<span class="quotelev1">&gt; needs porting would be getting parent pid and process name from ps
</span><br>
<span class="quotelev1">&gt; rather than /proc/status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Okay. I've moved to Linux for testing:
<br>
<p>&nbsp;&nbsp;$ padb --debug=all --verbose --config-option rmgr=mpirun --full-report=29713
<br>
&nbsp;&nbsp;Loading config from &quot;/etc/padb.conf&quot;
<br>
&nbsp;&nbsp;Loading config from &quot;/home/em162155/.padbrc&quot;
<br>
&nbsp;&nbsp;Loading config from environment
<br>
&nbsp;&nbsp;Loading config from command line
<br>
&nbsp;&nbsp;Setting 'rmgr' to 'mpirun'
<br>
&nbsp;&nbsp;DEBUG (config):   0: Finished setting configuration options
<br>
&nbsp;&nbsp;padb version 3.n (Revision 279)
<br>
&nbsp;&nbsp;full job report for job 29713
<br>
<p>&nbsp;&nbsp;No secret file (/home/em162155/.padb-secret)
<br>
&nbsp;&nbsp;Error: Could not load secret file on this node
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
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
