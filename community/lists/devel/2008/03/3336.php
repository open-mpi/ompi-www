<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 13:02:32 2008" -->
<!-- isoreceived="20080303180232" -->
<!-- sent="Mon, 03 Mar 2008 11:02:21 -0700" -->
<!-- isosent="20080303180221" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681" -->
<!-- id="C3F18B3D.C781%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200803031821.51768.keller_at_hlrs.de" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 13:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3337.php">Ralph H Castain: "[OMPI devel] Configure and contrib pkgs"</a>
<li><strong>Previous message:</strong> <a href="3335.php">Jeff Squyres: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>In reply to:</strong> <a href="3331.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
./orte/mca/errmgr/errmgr.h(135): warning #1286: invalid attribute for
<br>
&quot;orte_errmgr_base_module_abort_fn_t&quot;
<br>
<p>typedef void (*orte_errmgr_base_module_abort_fn_t)(int error_code, char
<br>
*fmt, ...) __opal_attribute_format__(__printf__, 2, 3);
<br>
<p>I think the issue is that you can't apply attributes to the type def for the
<br>
function pointer, but only to the particular instance of that function. At
<br>
one time, we also had an attribute indicating that a function did not
<br>
return. This would also apply to this function, but IIRC you cannot have
<br>
multiple attributes (or at least, we used to run into problems with it).
<br>
<p>So I figured I would just let this ride for now and re-address it later.
<br>
<p>On 3/3/08 10:21 AM, &quot;Rainer Keller&quot; &lt;keller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; On Monday 03 March 2008 17:06, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-03-03 11:06:47 EST (Mon, 03 Mar 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 17681
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17681">https://svn.open-mpi.org/trac/ompi/changeset/17681</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Cleanup an attribute warning - not sure which one to set or where it should
</span><br>
<span class="quotelev2">&gt;&gt; go, so I'll leave that to someone more familiar with &quot;attributes&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ensure some debugging is only enabled when have_debug is set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/errmgr.h
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; === --- trunk/orte/mca/errmgr/errmgr.h (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/errmgr.h 2008-03-03 11:06:47 EST (Mon, 03 Mar
</span><br>
<span class="quotelev2">&gt;&gt; 2008) @@ -132,7 +132,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   * itself, and then exit - it takes no other actions. The intent here is
</span><br>
<span class="quotelev2">&gt;&gt; to provide * a last-ditch exit procedure that attempts to clean up a
</span><br>
<span class="quotelev2">&gt;&gt; little. */
</span><br>
<span class="quotelev2">&gt;&gt; -typedef void (*orte_errmgr_base_module_abort_fn_t)(int error_code, char
</span><br>
<span class="quotelev2">&gt;&gt; *fmt, ...) __opal_attribute_format__(__printf__, 2, 3);
</span><br>
<span class="quotelev2">&gt;&gt; +typedef void (*orte_errmgr_base_module_abort_fn_t)(int error_code, char
</span><br>
<span class="quotelev2">&gt;&gt; *fmt, ...); 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What was the warning requiring You to get rid of the attribute?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attribute should help find errors in the callers to
</span><br>
<span class="quotelev1">&gt; orte_errmgr_base_abort...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe the help on
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/CompilerAttributes">https://svn.open-mpi.org/trac/ompi/wiki/CompilerAttributes</a>
</span><br>
<span class="quotelev1">&gt; could be improved?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3337.php">Ralph H Castain: "[OMPI devel] Configure and contrib pkgs"</a>
<li><strong>Previous message:</strong> <a href="3335.php">Jeff Squyres: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>In reply to:</strong> <a href="3331.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
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
