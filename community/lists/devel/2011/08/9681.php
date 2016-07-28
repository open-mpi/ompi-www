<?
$subject_val = "[OMPI devel] Broken TotalView behavior in 1.5.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 19 15:17:10 2011" -->
<!-- isoreceived="20110819191710" -->
<!-- sent="Fri, 19 Aug 2011 13:17:06 -0600" -->
<!-- isosent="20110819191706" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI devel] Broken TotalView behavior in 1.5.4" -->
<!-- id="A06F5E87-390A-4835-8FB4-E5CD9169C36E_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Broken TotalView behavior in 1.5.4<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-19 15:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9682.php">Ralph Castain: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>Previous message:</strong> <a href="9680.php">Jeff Squyres: "Re: [OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9682.php">Ralph Castain: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>Reply:</strong> <a href="9682.php">Ralph Castain: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>Reply:</strong> <a href="9683.php">David Gunter: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've built the latest 1.5.4 release for one of our SLURM clusters now Totalview only appears to debug the main job launcher that calls orterun(). The actual MPI job still runs on the specified number of nodes yet TV doesn't seem to see it.
<br>
<p>Here's my launch line:
<br>
<p>$ totalview mpirun -a -n 16 my.exe
<br>
<p>The same application built against ompi-1.4.3 debugs just fine under Totalview.
<br>
<p>Any thoughts?
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9682.php">Ralph Castain: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>Previous message:</strong> <a href="9680.php">Jeff Squyres: "Re: [OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9682.php">Ralph Castain: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>Reply:</strong> <a href="9682.php">Ralph Castain: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>Reply:</strong> <a href="9683.php">David Gunter: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
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
