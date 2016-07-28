<?
$subject_val = "Re: [OMPI devel] 0.9.1rc2 is available";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 19:29:53 2009" -->
<!-- isoreceived="20091021232953" -->
<!-- sent="Thu, 22 Oct 2009 10:29:36 +1100 (EST)" -->
<!-- isosent="20091021232936" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 0.9.1rc2 is available" -->
<!-- id="1297887994.4931051256167776886.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1229532279.4930581256167297248.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 0.9.1rc2 is available<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 19:29:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6993.php">Lisandro Dalcin: "[OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
<li><strong>Maybe in reply to:</strong> <a href="6990.php">Jeff Squyres: "[OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="6997.php">Tony Breeds: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Give it a whirl:
</span><br>
<p>Nice - built without warnings with GCC 4.4.2.
<br>
<p>Some sample results below for configs not represented
<br>
on the current website.
<br>
<p><p>Dual socket Shanghai:
<br>
<p>System(31GB)
<br>
&nbsp;&nbsp;Node#0(15GB) + Socket#0 + L3(6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#0 + P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#1 + P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#2 + P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#3 + P#3
<br>
&nbsp;&nbsp;Node#1(16GB) + Socket#1 + L3(6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#0 + P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#1 + P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#2 + P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#3 + P#7
<br>
<p><p>Dual socket single core Opteron:
<br>
<p>System(3961MB)
<br>
&nbsp;&nbsp;Node#0(2014MB) + Socket#0 + L2(1024KB) + L1(1024KB) + Core#0 + P#0
<br>
&nbsp;&nbsp;Node#1(2017MB) + Socket#1 + L2(1024KB) + L1(1024KB) + Core#0 + P#1
<br>
<p><p>Dual socket, dual core Power5 (SMT disabled) running SLES9
<br>
(2.6.9 based kernel):
<br>
<p>System(15GB)
<br>
&nbsp;&nbsp;Node#0(7744MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#2
<br>
&nbsp;&nbsp;Node#1(8000MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#6
<br>
<p><p>Inside a single CPU Torque job (using cpusets) on a dual socket Shanghai:
<br>
<p>System(31GB)
<br>
&nbsp;&nbsp;Node#0(15GB) + Socket#0 + L3(6144KB) + L2(512KB) + L1(64KB) + Core#0 + P#0
<br>
&nbsp;&nbsp;Node#1(16GB)
<br>
<p><p><pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6993.php">Lisandro Dalcin: "[OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
<li><strong>Maybe in reply to:</strong> <a href="6990.php">Jeff Squyres: "[OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="6997.php">Tony Breeds: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
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
