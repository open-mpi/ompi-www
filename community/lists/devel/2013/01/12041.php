<?
$subject_val = "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 20:43:25 2013" -->
<!-- isoreceived="20130129014325" -->
<!-- sent="Mon, 28 Jan 2013 17:43:17 -0800" -->
<!-- isosent="20130129014317" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code" -->
<!-- id="04482279-5CDE-4A7E-BA4A-5082E3CDC1F0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA140WLAJUEU5C-1KpFyzQZz+DfZ7r54qLbB=1SgOWiQFMQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 20:43:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12042.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12040.php">Paul Hargrove: "[OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>In reply to:</strong> <a href="12040.php">Paul Hargrove: "[OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12045.php">Paul Hargrove: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Reply:</strong> <a href="12045.php">Paul Hargrove: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, we need to make it absolutely clear that c/r is no longer supported - I'll remove that configure option.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Jan 28, 2013, at 5:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When configured using --with-ft=cr on linux/x86 I see the following build failure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mca/errmgr
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/BLD/orte/mca/errmgr'
</span><br>
<span class="quotelev1">&gt;   CC       base/errmgr_base_close.lo
</span><br>
<span class="quotelev1">&gt;   CC       base/errmgr_base_select.lo
</span><br>
<span class="quotelev1">&gt;   CC       base/errmgr_base_open.lo
</span><br>
<span class="quotelev1">&gt;   CC       base/errmgr_base_fns.lo
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c: In function 'orte_errmgr_base_proc_state_notify':
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:331: error: parse error before ',' token
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c: In function 'orte_errmgr_base_restart_job':
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622: error: 'orte_errmgr_base_module_t' has no member named 'update_state'
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622: error: 'ORTE_JOB_STATE_RESTART' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/errmgr_base_fns.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/BLD/orte/mca/errmgr'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/BLD/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both errors appear to have be absent from trunk, suggesting there is at least one CMR needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These errors were fixed on the trunk by changesets 26773 and 26770, respectively, which also make numerous changes in other files.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12042.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12040.php">Paul Hargrove: "[OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>In reply to:</strong> <a href="12040.php">Paul Hargrove: "[OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12045.php">Paul Hargrove: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Reply:</strong> <a href="12045.php">Paul Hargrove: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
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
