<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (6)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 05:08:52 2010" -->
<!-- isoreceived="20100318090852" -->
<!-- sent="Thu, 18 Mar 2010 18:09:38 +0900" -->
<!-- isosent="20100318090938" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (6)" -->
<!-- id="4BA1EDD2.2000907_at_np.css.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (6)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-18 05:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7632.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Previous message:</strong> <a href="7630.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (5)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
6th question is as follows:
<br>
<p>(6) About the first_continue_pass static variable in the ft_event functions.
<br>
<p>Related frameworks are following.
<br>
<p>Framework         : bml
<br>
Component         : r2
<br>
The source file   : ompi/mca/bml/r2/bml_r2_ft.c
<br>
The function name : mca_bml_r2_ft_event
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : ompi_crcp_bkmrk_pml_ft_event
<br>
<p>Framework         : pml
<br>
Component         : ob1
<br>
The source file   : ompi/mca/pml/ob1/pml_ob1.c
<br>
The function name : mca_pml_ob1_ft_event
<br>
Component         : csum
<br>
The source file   : ompi/mca/pml/csum/pml_csum.c
<br>
The function name : mca_pml_csum_ft_event
<br>
<p>I think the first_continue_pass variable exists to identify
<br>
whether mca_pml.pml_ft_event(OPAL_CRS_CONTINUE) has been called at the first time
<br>
or at second time in INC-continue section when ompi_cr_continue_like_restart is true.
<br>
<p>When mca_pml.pml_ft_event(OPAL_CRS_CONTINUE) is called at the first time,
<br>
first_continue_pass variable is true, if it is called by ompi_cr_coord_pre_continue function.
<br>
<p>When mca_pml.pml_ft_event(OPAL_CRS_CONTINUE) is called at the second time,
<br>
first_continue_pass variable is false, if it is called by ompi_cr_coord_post_continue function,
<br>
<p>However, I think that there is a problem, if ompi_cr_continue_like_restart isn't true.
<br>
<p>If ompi_cr_continue_like_restart isn't true and when checkpoint is executed in an odd number of times,
<br>
INC-continue section is executed under the condition which first_continue_pass is true.
<br>
<p>If ompi_cr_continue_like_restart isn't true and when checkpoint is executed in an even number of times,
<br>
INC-continue section is executed under the condition which first_continue_pass is false.
<br>
<p>Therefor, mca_pml.pml_ft_event(OPAL_CRS_CONTINUE) is called in INC-continue section just once
<br>
if ompi_cr_continue_like_restart isn't true.
<br>
<p>This behavior is incorrect.
<br>
I think that the first_continue_pass be always true if ompi_cr_continue_like_restart isn't true.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7632.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Previous message:</strong> <a href="7630.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (5)"</a>
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
