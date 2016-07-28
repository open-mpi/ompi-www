<?
$subject_val = "[OMPI users] missing symbols in Windows 1.5.3 binaries?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 22:01:28 2011" -->
<!-- isoreceived="20110416020128" -->
<!-- sent="Fri, 15 Apr 2011 20:01:21 -0600" -->
<!-- isosent="20110416020121" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="[OMPI users] missing symbols in Windows 1.5.3 binaries?" -->
<!-- id="4DA8F871.5060207_at_khubla.com" -->
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
<strong>Subject:</strong> [OMPI users] missing symbols in Windows 1.5.3 binaries?<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-15 22:01:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16260.php">Michael Di Domenico: "[OMPI users] Ofed v1.5.3?"</a>
<li><strong>Previous message:</strong> <a href="16258.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16261.php">Shiqing Fan: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Reply:</strong> <a href="16261.php">Shiqing Fan: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hiya,
<br>
<p>I just tested the 1.5.3 binaries and my link pass broke.  Using 1.5.3 I 
<br>
get unresolved externals on things like _MPI_NULL_COPY_FN.  On 1.5.2.2 
<br>
it's fine.  I did a dumpbin on libmpi.lib for both versions, and in 
<br>
1.5.3 there's upper-case symbols for _OMPI_C_MPI_NULL_COPY_FN, but not 
<br>
_MPI_NULL_COPY_FN.  In the 1.5.2.2 libmpi.lib there's symbols for both.
<br>
<p>Damien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16260.php">Michael Di Domenico: "[OMPI users] Ofed v1.5.3?"</a>
<li><strong>Previous message:</strong> <a href="16258.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16261.php">Shiqing Fan: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Reply:</strong> <a href="16261.php">Shiqing Fan: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
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
