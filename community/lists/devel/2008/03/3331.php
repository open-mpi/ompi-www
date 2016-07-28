<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 12:21:38 2008" -->
<!-- isoreceived="20080303172138" -->
<!-- sent="Mon, 3 Mar 2008 18:21:50 +0100" -->
<!-- isosent="20080303172150" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681" -->
<!-- id="200803031821.51768.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200803031606.m23G6mqg023764_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 12:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3332.php">Jeff Squyres: "[OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Previous message:</strong> <a href="3330.php">Tim Prins: "[OMPI devel] [RFC] Removal of orte_proc_table"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3336.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<li><strong>Reply:</strong> <a href="3336.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
On Monday 03 March 2008 17:06, rhc_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2008-03-03 11:06:47 EST (Mon, 03 Mar 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17681
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17681">https://svn.open-mpi.org/trac/ompi/changeset/17681</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Cleanup an attribute warning - not sure which one to set or where it should
</span><br>
<span class="quotelev1">&gt; go, so I'll leave that to someone more familiar with &quot;attributes&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ensure some debugging is only enabled when have_debug is set.
</span><br>
<p><span class="quotelev1">&gt; Modified: trunk/orte/mca/errmgr/errmgr.h
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt;=== --- trunk/orte/mca/errmgr/errmgr.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/errmgr/errmgr.h	2008-03-03 11:06:47 EST (Mon, 03 Mar
</span><br>
<span class="quotelev1">&gt; 2008) @@ -132,7 +132,7 @@
</span><br>
<span class="quotelev1">&gt;   * itself, and then exit - it takes no other actions. The intent here is
</span><br>
<span class="quotelev1">&gt; to provide * a last-ditch exit procedure that attempts to clean up a
</span><br>
<span class="quotelev1">&gt; little. */
</span><br>
<span class="quotelev1">&gt; -typedef void (*orte_errmgr_base_module_abort_fn_t)(int error_code, char
</span><br>
<span class="quotelev1">&gt; *fmt, ...) __opal_attribute_format__(__printf__, 2, 3);
</span><br>
<span class="quotelev1">&gt; +typedef void (*orte_errmgr_base_module_abort_fn_t)(int error_code, char
</span><br>
<span class="quotelev1">&gt; *fmt, ...); 
</span><br>
<p>What was the warning requiring You to get rid of the attribute?
<br>
<p>The attribute should help find errors in the callers to 
<br>
orte_errmgr_base_abort...
<br>
<p>Maybe the help on 
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/CompilerAttributes">https://svn.open-mpi.org/trac/ompi/wiki/CompilerAttributes</a>
<br>
could be improved?
<br>
<p><p>Thanks,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3332.php">Jeff Squyres: "[OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Previous message:</strong> <a href="3330.php">Tim Prins: "[OMPI devel] [RFC] Removal of orte_proc_table"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3336.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<li><strong>Reply:</strong> <a href="3336.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
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
