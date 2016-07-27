<?
$subject_val = "Re: [MTT devel] Analysis of hung jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 11:06:27 2009" -->
<!-- isoreceived="20091008150627" -->
<!-- sent="Thu, 08 Oct 2009 16:06:34 +0100" -->
<!-- isosent="20091008150634" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Analysis of hung jobs." -->
<!-- id="1255014394.7273.1.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091008144634.GA14468_at_sun.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 11:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0457.php">Jeff Squyres: "[MTT devel] Trac changes for MPI Forum members"</a>
<li><strong>Previous message:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/11/0458.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/11/0458.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-10-08 at 10:46 -0400, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; It looks like it's using a bad option to pdsh?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ padb --debug=all --verbose --config-option rmgr=mpirun --full-report=24303
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;   padb version 3.n (Revision 283)
</span><br>
<span class="quotelev1">&gt;   full job report for job 24303
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Attaching to job 24303
</span><br>
<span class="quotelev1">&gt;   Use of uninitialized value in string ne at padb line 2720.
</span><br>
<span class="quotelev1">&gt;   Job has 1 process(es)
</span><br>
<span class="quotelev1">&gt;   Job spans 0 host(s)
</span><br>
<span class="quotelev1">&gt;   DEBUG (verbose):   0: There are 1 processes over 0 hosts
</span><br>
<span class="quotelev1">&gt;   DEBUG (verbose):   0: Remote process data available on frontend
</span><br>
<span class="quotelev1">&gt;   DEBUG (show_cmd):   0: pdsh -w  padb --inner --outer=&quot;burl-ct-v20z-0:52314&quot;
</span><br>
<span class="quotelev1">&gt;   einner: pdsh: illegal option -- -
</span><br>
<p>I see the problem there, I hadn't allowed for dashes in hostnames either
<br>
try another update and it should match this time.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0457.php">Jeff Squyres: "[MTT devel] Trac changes for MPI Forum members"</a>
<li><strong>Previous message:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/11/0458.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/11/0458.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
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
