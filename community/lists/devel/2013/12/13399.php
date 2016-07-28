<?
$subject_val = "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  9 05:11:38 2013" -->
<!-- isoreceived="20131209101138" -->
<!-- sent="Mon, 9 Dec 2013 11:11:35 +0100" -->
<!-- isosent="20131209101135" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)" -->
<!-- id="20131209101135.GK6156_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEm9XEe0H8oMtNNHKWPbzKfDZ3ZxSN9yckjuF3h9O+uhTA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-09 05:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13400.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13398.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13393.php">Josh Hursey: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 06, 2013 at 08:43:39AM -0600, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Did the mca_base_component_distill_checkpoint_ready paramter go away? Its
</span><br>
<span class="quotelev1">&gt; intention was to allow a user to have a build with C/R compiled in and then
</span><br>
<span class="quotelev1">&gt; choose at runtime if they want to restrict their component section to just
</span><br>
<span class="quotelev1">&gt; C/R enabled components or not. I have reservations about that part of the
</span><br>
<span class="quotelev1">&gt; patch.
</span><br>
<p>It really is gone (as far as I understand it). The only occurrence is in
<br>
a parameter file, but it is not available as a C variable:
<br>
<p>$ git grep mca_base_component_distill_checkpoint_ready
<br>
contrib/amca-param-sets/ft-enable-cr:mca_base_component_distill_checkpoint_ready=1
<br>
contrib/amca-param-sets/ft-enable-cr-recovery:mca_base_component_distill_checkpoint_ready=1
<br>
<p><span class="quotelev1">&gt; If it is a compilation issue and that MCA parameter was lost, then I would
</span><br>
<span class="quotelev1">&gt; leave the code in an #ifdef so we come back and make sure that
</span><br>
<span class="quotelev1">&gt; functionality is preserved in the final version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think if you fix the distill_checkpoint issue, then this patch is ok with
</span><br>
<span class="quotelev1">&gt; me.
</span><br>
<p>I will resubmit this patch with the proposed fixes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13400.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13398.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13393.php">Josh Hursey: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
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
