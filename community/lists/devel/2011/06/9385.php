<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 17:32:59 2011" -->
<!-- isoreceived="20110617213259" -->
<!-- sent="Fri, 17 Jun 2011 17:32:55 -0400" -->
<!-- isosent="20110617213255" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTi=FUWNokXTDmABN3OH2iLp1E7XTcg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="661FC8A756404BAABFA68D66AD5844B8_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-17 17:32:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9384.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9384.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does this include a fix for the problem I reported with mpirun-hosted processes?
<br>
<p>If not I would ask that we holding off on putting it into the trunk
<br>
until that particular bug is addressed. From my experience tackling
<br>
this particular issues requires some code refactoring, which should
<br>
probably be done once in the trunk instead of two possibly disruptive
<br>
commits.
<br>
<p>-- Josh
<br>
<p>On Fri, Jun 17, 2011 at 5:18 PM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This is a reminder that the Resilient ORTE RFC is set to go into the trunk
</span><br>
<span class="quotelev1">&gt; on Monday at COB.
</span><br>
<span class="quotelev1">&gt; I've updated the code with a few of the changes that were mentioned on and
</span><br>
<span class="quotelev1">&gt; off the list (moved code out of orted_comm.c, errmgr_set_callback returns
</span><br>
<span class="quotelev1">&gt; previous callback, post_startup function, corrected normal termination
</span><br>
<span class="quotelev1">&gt; issues). Please take another look at it if you have any interest. The code
</span><br>
<span class="quotelev1">&gt; can be found here:
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/wesbland/resilient-orte/">https://bitbucket.org/wesbland/resilient-orte/</a>
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Wesley Bland
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9384.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9384.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
