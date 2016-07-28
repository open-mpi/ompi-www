<?
$subject_val = "Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 17:10:42 2013" -->
<!-- isoreceived="20131220221042" -->
<!-- sent="Fri, 20 Dec 2013 23:10:41 +0100" -->
<!-- isosent="20131220221041" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again" -->
<!-- id="20131220221041.GY367_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1387486461-8239-1-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 17:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13532.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 testing summary"</a>
<li><strong>Previous message:</strong> <a href="13530.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>In reply to:</strong> <a href="13496.php">Adrian Reber: "[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 19, 2013 at 09:54:19PM +0100, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; This is the second try to replace the usage of blocking send and
</span><br>
<span class="quotelev1">&gt; recv in the C/R code with the non-blocking versions. The new code
</span><br>
<span class="quotelev1">&gt; compiles (in contrast to the old code) but does not work yet.
</span><br>
<span class="quotelev1">&gt; This is the first step to get the C/R code working again. Right
</span><br>
<span class="quotelev1">&gt; now it only compiles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changes from V1:
</span><br>
<span class="quotelev1">&gt; * #ifdef out the broken code (so it is preserved for later re-design)
</span><br>
<span class="quotelev1">&gt; * marked the broken C/R code with ENABLE_FT_FIXED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changes from V2:
</span><br>
<span class="quotelev1">&gt; * only #ifdef out parts where the behaviour actually changes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adrian Reber (2):
</span><br>
<span class="quotelev1">&gt;   Trying to get the C/R code to compile again. (recv_*_nb)
</span><br>
<span class="quotelev1">&gt;   Trying to get the C/R code to compile again. (send_*_nb)
</span><br>
<p>Thanks for all the reviews. All patches are now committed.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13532.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 testing summary"</a>
<li><strong>Previous message:</strong> <a href="13530.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>In reply to:</strong> <a href="13496.php">Adrian Reber: "[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
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
