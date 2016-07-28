<?
$subject_val = "[OMPI devel] 1.7rc6 build failure: bogus errmgr code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 20:38:20 2013" -->
<!-- isoreceived="20130129013820" -->
<!-- sent="Mon, 28 Jan 2013 17:38:15 -0800" -->
<!-- isosent="20130129013815" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7rc6 build failure: bogus errmgr code" -->
<!-- id="CAAvDA140WLAJUEU5C-1KpFyzQZz+DfZ7r54qLbB=1SgOWiQFMQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7rc6 build failure: bogus errmgr code<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 20:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12041.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Previous message:</strong> <a href="12039.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12041.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Reply:</strong> <a href="12041.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When configured using --with-ft=cr on linux/x86 I see the following build
<br>
failure:
<br>
<p>Making all in mca/errmgr
<br>
make[2]: Entering directory
<br>
`/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/BLD/orte/mca/errmgr'
<br>
&nbsp;&nbsp;CC       base/errmgr_base_close.lo
<br>
&nbsp;&nbsp;CC       base/errmgr_base_select.lo
<br>
&nbsp;&nbsp;CC       base/errmgr_base_open.lo
<br>
&nbsp;&nbsp;CC       base/errmgr_base_fns.lo
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:
<br>
In function 'orte_errmgr_base_proc_state_notify':
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:331:
<br>
error: parse error before ',' token
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:
<br>
In function 'orte_errmgr_base_restart_job':
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622:
<br>
error: 'orte_errmgr_base_module_t' has no member named 'update_state'
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622:
<br>
error: 'ORTE_JOB_STATE_RESTART' undeclared (first use in this function)
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622:
<br>
error: (Each undeclared identifier is reported only once
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/openmpi-1.7rc6/orte/mca/errmgr/base/errmgr_base_fns.c:622:
<br>
error: for each function it appears in.)
<br>
make[2]: *** [base/errmgr_base_fns.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/BLD/orte/mca/errmgr'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/pcp1/phargrov/OMPI/openmpi-1.7rc6-linux-x86-blcr/BLD/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Both errors appear to have be absent from trunk, suggesting there is at
<br>
least one CMR needed.
<br>
<p>These errors were fixed on the trunk by changesets 26773 and 26770,
<br>
respectively, which also make numerous changes in other files.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12041.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Previous message:</strong> <a href="12039.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12041.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Reply:</strong> <a href="12041.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
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
