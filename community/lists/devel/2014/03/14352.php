<?
$subject_val = "Re: [OMPI devel] 1.7.5 end-of-week status report";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 16 01:19:35 2014" -->
<!-- isoreceived="20140316051935" -->
<!-- sent="Sun, 16 Mar 2014 05:19:30 +0000" -->
<!-- isosent="20140316051930" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5 end-of-week status report" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A883E00_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="10789AA6-4C4E-428A-9417-31B0F5969278_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5 end-of-week status report<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-16 01:19:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Previous message:</strong> <a href="14351.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>In reply to:</strong> <a href="14350.php">Ralph Castain: "[OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Reply:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday, March 14, 2014 8:48 PM, devel [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]] wrote:
<br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] 1.7.5 end-of-week status report
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have both good and bad news to report - first the good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OSHMEM now passes nearly all its tests on my Linux cluster (tcp). My hat is off to the Mellanox guys for getting this done, including getting our MTT repo tests complete.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPI layer passes nearly all the IBM, Intel, and one-sided tests. Only a few failures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the bad. The coll/ml component continues to have problems, including segfaults, and I have discovered that the bcol and coll/ml code remains entangled (I thought it had been separated, but sadly not). I have therefore ompi_ignored coll/ml and bcol/ptpcoll.
</span><br>
<p>No need. I discovered a bug in my last coll/ml fix. It incorrectly handled one of the possibly hierarchies. The bug is fixed in trunk and a CMR is open for 1.7.5. In the future I will clean up this path but the fix should have us working again.
<br>
<p>-Nathan<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Previous message:</strong> <a href="14351.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>In reply to:</strong> <a href="14350.php">Ralph Castain: "[OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Reply:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
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
