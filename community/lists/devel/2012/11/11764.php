<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27573 - trunk/ompi/mca/pml/v";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 12:31:30 2012" -->
<!-- isoreceived="20121107173130" -->
<!-- sent="Wed, 7 Nov 2012 12:31:26 -0500" -->
<!-- isosent="20121107173126" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27573 - trunk/ompi/mca/pml/v" -->
<!-- id="CALwSR2U-Dt_cDAbYb=CaO+-GS+B1veUBHeL=nHSah5zHdaSwCw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20121106212519.A323415FAC0_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27573 - trunk/ompi/mca/pml/v<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 12:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11765.php">David Singleton: "[OMPI devel] -npersocket in 1.6"</a>
<li><strong>Previous message:</strong> <a href="11763.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
Although this typo fix is correct, AFAIK, it is unnecessary to check
<br>
for NULL before calling free().
<br>
-- Tim &quot;the perpetual OMPI lurker&quot; Mattox
<br>
P.S. - I have a coding problem... I'm still watching commits 3+ years
<br>
after giving up gatekeeper duties!
<br>
<p>On Tue, Nov 6, 2012 at 4:25 PM,  &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2012-11-06 16:25:19 EST (Tue, 06 Nov 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 27573
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27573">https://svn.open-mpi.org/trac/ompi/changeset/27573</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fix typo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/v/pml_v_component.c |     2 +-
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/v/pml_v_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/v/pml_v_component.c      Tue Nov  6 15:06:54 2012        (r27572)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/v/pml_v_component.c      2012-11-06 16:25:19 EST (Tue, 06 Nov 2012)      (r27573)
</span><br>
<span class="quotelev1">&gt; @@ -86,7 +86,7 @@
</span><br>
<span class="quotelev1">&gt;      V_OUTPUT_VERBOSE(500, &quot;loaded&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      rc = mca_vprotocol_base_open(vprotocol_include_list);
</span><br>
<span class="quotelev1">&gt; -    if (NULL == vprotocol_include_list) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL != vprotocol_include_list) {
</span><br>
<span class="quotelev1">&gt;          free (vprotocol_include_list);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
 timattox_at_[hidden] || tmattox_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11765.php">David Singleton: "[OMPI devel] -npersocket in 1.6"</a>
<li><strong>Previous message:</strong> <a href="11763.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
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
