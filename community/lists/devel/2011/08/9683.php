<?
$subject_val = "Re: [OMPI devel] Broken TotalView behavior in 1.5.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 19 16:13:46 2011" -->
<!-- isoreceived="20110819201346" -->
<!-- sent="Fri, 19 Aug 2011 14:13:41 -0600" -->
<!-- isosent="20110819201341" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Broken TotalView behavior in 1.5.4" -->
<!-- id="16925538-393A-405E-8823-4C146956E32D_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A06F5E87-390A-4835-8FB4-E5CD9169C36E_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Broken TotalView behavior in 1.5.4<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-19 16:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9684.php">Eugene Loh: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Previous message:</strong> <a href="9682.php">Ralph Castain: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>In reply to:</strong> <a href="9681.php">David Gunter: "[OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just a follow-up. I've build OMPI-1.5.4 on a non-SLURM, PBS-based system and TotalView behaves the same (incorrect) way.  Still not sure what is happening.
<br>
<p>-david
<br>
<p><pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
On Aug 19, 2011, at 1:17 PM, David Gunter wrote:
&gt; I've built the latest 1.5.4 release for one of our SLURM clusters now Totalview only appears to debug the main job launcher that calls orterun(). The actual MPI job still runs on the specified number of nodes yet TV doesn't seem to see it.
&gt; 
&gt; Here's my launch line:
&gt; 
&gt; $ totalview mpirun -a -n 16 my.exe
&gt; 
&gt; The same application built against ompi-1.4.3 debugs just fine under Totalview.
&gt; 
&gt; Any thoughts?
&gt; 
&gt; -david
&gt; --
&gt; David Gunter
&gt; HPC-3: Infrastructure Team
&gt; Los Alamos National Laboratory
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9684.php">Eugene Loh: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Previous message:</strong> <a href="9682.php">Ralph Castain: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>In reply to:</strong> <a href="9681.php">David Gunter: "[OMPI devel] Broken TotalView behavior in 1.5.4"</a>
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
