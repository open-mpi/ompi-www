<?
$subject_val = "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 21:18:06 2013" -->
<!-- isoreceived="20130129021806" -->
<!-- sent="Mon, 28 Jan 2013 18:18:01 -0800" -->
<!-- isosent="20130129021801" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code" -->
<!-- id="CAAvDA16K2DjV3kDLH8cR=tLuD=xdCTVfM8TtNsnOOzD6=nzR6g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04482279-5CDE-4A7E-BA4A-5082E3CDC1F0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 21:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Previous message:</strong> <a href="12044.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>In reply to:</strong> <a href="12041.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12048.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Reply:</strong> <a href="12048.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might say that I like to &quot;push all the buttons and see which ones go
<br>
boom&quot;.
<br>
See the commit message for
<br>
r8099&lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/8099">https://svn.open-mpi.org/trac/ompi/changeset/8099</a>&gt; (which
<br>
I don't imagine Jeff or Brian ever thought I'd read).
<br>
<p>-Paul
<br>
<p><p>On Mon, Jan 28, 2013 at 5:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, we need to make it absolutely clear that c/r is no longer supported -
</span><br>
<span class="quotelev1">&gt; I'll remove that configure option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 5:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When configured using --with-ft=cr on linux/x86 I see the following build
</span><br>
<span class="quotelev1">&gt; failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/errmgr
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/BLD/orte/mca/errmgr'
</span><br>
<span class="quotelev1">&gt;   CC       base/errmgr_base_close.lo
</span><br>
<span class="quotelev1">&gt;   CC       base/errmgr_base_select.lo
</span><br>
<span class="quotelev1">&gt;   CC       base/errmgr_base_open.lo
</span><br>
<span class="quotelev1">&gt;   CC       base/errmgr_base_fns.lo
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:
</span><br>
<span class="quotelev1">&gt; In function 'orte_errmgr_base_proc_state_notify':
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:331:
</span><br>
<span class="quotelev1">&gt; error: parse error before ',' token
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:
</span><br>
<span class="quotelev1">&gt; In function 'orte_errmgr_base_restart_job':
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622:
</span><br>
<span class="quotelev1">&gt; error: 'orte_errmgr_base_module_t' has no member named 'update_state'
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622:
</span><br>
<span class="quotelev1">&gt; error: 'ORTE_JOB_STATE_RESTART' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622:
</span><br>
<span class="quotelev1">&gt; error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622:
</span><br>
<span class="quotelev1">&gt; error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/errmgr_base_fns.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/BLD/orte/mca/errmgr'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/BLD/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both errors appear to have be absent from trunk, suggesting there is at
</span><br>
<span class="quotelev1">&gt; least one CMR needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These errors were fixed on the trunk by changesets 26773 and 26770,
</span><br>
<span class="quotelev1">&gt; respectively, which also make numerous changes in other files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Previous message:</strong> <a href="12044.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>In reply to:</strong> <a href="12041.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12048.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Reply:</strong> <a href="12048.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
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
