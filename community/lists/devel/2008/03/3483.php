<?
$subject_val = "[OMPI devel] RFC: Removal of orte_sys_info structure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 14:04:43 2008" -->
<!-- isoreceived="20080320180443" -->
<!-- sent="Thu, 20 Mar 2008 12:04:29 -0600" -->
<!-- isosent="20080320180429" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Removal of orte_sys_info structure" -->
<!-- id="C408034D.CB5E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Removal of orte_sys_info structure<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 14:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3482.php">Brian W. Barrett: "[OMPI devel] Proc modex change"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove the orte_sys_info structure from the system
<br>
<p>WHY: Outside of the nodeid and nodename fields, the fields do not appear to
<br>
be used anywhere. However, they occupy (albeit small) space, and every proc
<br>
expends some effort filling them in.
<br>
<p>WHERE: removal of the orte/runtime/orte_sys.[hc] files, and remove the
<br>
include file entries in orte_init/finalize. The nodeid and nodename
<br>
discovery code would go into the ess/base std_{app,orted} functions.
<br>
<p>TIMEOUT: COB, Mon, Mar 24
<br>
<p>DESCRIPTION:
<br>
<p>Finding and setting the nodeid and nodename is a system-dependent procedure,
<br>
so it makes no sense to penalize every proc to use the default method and
<br>
then have the enviro-specific ess module &quot;overwrite&quot; the result.
<br>
<p>The other fields do not appear to be used anywhere, so it makes no sense to
<br>
occupy the (albeit small) memory space for nothing, nor to take time (again,
<br>
albeit small) doing system calls to populate the unused fields.
<br>
<p><p>IF SOMEONE IS ACTUALLY USING THOSE FIELDS, OR INTENDS TO, PLEASE SPEAK UP
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3482.php">Brian W. Barrett: "[OMPI devel] Proc modex change"</a>
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
