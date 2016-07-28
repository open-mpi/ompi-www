<?
$subject_val = "[OMPI devel] Silly question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 15 19:56:54 2010" -->
<!-- isoreceived="20100315235654" -->
<!-- sent="Tue, 16 Mar 2010 00:56:41 +0100" -->
<!-- isosent="20100315235641" -->
<!-- name="Leonardo Fialho" -->
<!-- email="leonardofialho_at_[hidden]" -->
<!-- subject="[OMPI devel] Silly question" -->
<!-- id="AA8C0AC2-50E3-4325-8D8D-7401BF5C858D_at_caos.uab.es" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Silly question<br>
<strong>From:</strong> Leonardo Fialho (<em>leonardofialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-15 19:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7593.php">Ralph Castain: "Re: [OMPI devel] Silly question"</a>
<li><strong>Previous message:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7593.php">Ralph Castain: "Re: [OMPI devel] Silly question"</a>
<li><strong>Reply:</strong> <a href="7593.php">Ralph Castain: "Re: [OMPI devel] Silly question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know that it should be uncommon but why I get an error while I try to run a &quot;parallel&quot; application with only one process?
<br>
<p>aopclf:ping fialho$ mpirun -np 1 ./ping
<br>
[Fialho-2.local:02834] OPAL dss:unpack: got type 32 when expecting type 9
<br>
[Fialho-2.local:02834] [[57446,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at line 330
<br>
[Fialho-2.local:02834] [[57446,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 444
<br>
aopclf:ping fialho$ 
<br>
<p>I understand the error and I know the reason, but this is a limitation from Open MPI (due to modex?) or from the MPI standard?
<br>
<p>Leonardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7593.php">Ralph Castain: "Re: [OMPI devel] Silly question"</a>
<li><strong>Previous message:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7593.php">Ralph Castain: "Re: [OMPI devel] Silly question"</a>
<li><strong>Reply:</strong> <a href="7593.php">Ralph Castain: "Re: [OMPI devel] Silly question"</a>
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
