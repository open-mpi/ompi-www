<?
$subject_val = "Re: [MTT devel] Analysis of hung jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 09:51:47 2009" -->
<!-- isoreceived="20091008135147" -->
<!-- sent="Thu, 8 Oct 2009 09:51:42 -0400" -->
<!-- isosent="20091008135142" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Analysis of hung jobs." -->
<!-- id="20091008135141.GD14465_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1254947887.3133.122.camel_at_alpha" -->
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
<strong>Date:</strong> 2009-10-08 09:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct/07/2009 09:38:07PM, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2009-10-07 at 16:21 -0400, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   No secret file (/home/em162155/.padb-secret)
</span><br>
<span class="quotelev2">&gt; &gt;   Error: Could not load secret file on this node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need to do this once to set a secret key for security purposes, run
</span><br>
<span class="quotelev1">&gt; the following two commands and try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo secret=ochi4aeZ &gt; /home/em162155/.padb-secret
</span><br>
<span class="quotelev1">&gt; chmod 0600 /home/em162155/.padb-secret
</span><br>
<p>Getting closer ...
<br>
<p>&nbsp;&nbsp;$ padb --verbose --debug=all --config-option rmgr=mpirun --full-report=6336
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;full job report for job 6336
<br>
<p>&nbsp;&nbsp;Attaching to job 6336
<br>
&nbsp;&nbsp;mpirun resource manager requires pdsh to be installed
<br>
&nbsp;&nbsp;Use of uninitialized value in printf at padb line 729.
<br>
&nbsp;&nbsp;Use of uninitialized value in printf at padb line 729.
<br>
&nbsp;&nbsp;DEBUG (verbose):   0: There are 0 processes over 0 hosts
<br>
&nbsp;&nbsp;Fatal problem setting up the resource manager: mpirun
<br>
<p>I assume it's referring to the below &quot;pdsh&quot;?
<br>
<p>&nbsp;&nbsp;<a href="http://sourceforge.net/projects/pdsh">http://sourceforge.net/projects/pdsh</a>
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
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
<li><strong>Next message:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0452.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
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
