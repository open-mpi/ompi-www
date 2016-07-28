<?
$subject_val = "Re: [MTT devel] Analysis of hung jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 10:18:02 2009" -->
<!-- isoreceived="20091008141802" -->
<!-- sent="Thu, 08 Oct 2009 15:18:07 +0100" -->
<!-- isosent="20091008141807" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Analysis of hung jobs." -->
<!-- id="1255011488.5945.2.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091008135141.GD14465_at_sun.com" -->
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
<strong>Date:</strong> 2009-10-08 10:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0453.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0453.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-10-08 at 09:51 -0400, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; $ padb --verbose --debug=all --config-option rmgr=mpirun --full-report=6336
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;   full job report for job 6336
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Attaching to job 6336
</span><br>
<span class="quotelev1">&gt;   mpirun resource manager requires pdsh to be installed
</span><br>
<span class="quotelev1">&gt;   Use of uninitialized value in printf at padb line 729.
</span><br>
<span class="quotelev1">&gt;   Use of uninitialized value in printf at padb line 729.
</span><br>
<span class="quotelev1">&gt;   DEBUG (verbose):   0: There are 0 processes over 0 hosts
</span><br>
<span class="quotelev1">&gt;   Fatal problem setting up the resource manager: mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume it's referring to the below &quot;pdsh&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://sourceforge.net/projects/pdsh">http://sourceforge.net/projects/pdsh</a>
</span><br>
<p>Yes, you'll need to able to ssh freely around from the node where
<br>
padb/pdsh is running to all compute nodes as well.  For debian I had to
<br>
add &quot;export PDSH_RCMD_TYPE=ssh&quot; to my .bashrc to tell it to use ssh
<br>
rather than rsh.
<br>
<p>Could you update to r283 as well, the &quot;mpirun&quot; resource manager is new
<br>
and I discovered this morning that it didn't like digits in hostnames.
<br>
As an added benefit it won't use pdsh or ssh if all processes are local.
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
<li><strong>Next message:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0453.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0453.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0455.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
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
