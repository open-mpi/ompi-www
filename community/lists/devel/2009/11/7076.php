<?
$subject_val = "[OMPI devel] orte_rml_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 06:42:41 2009" -->
<!-- isoreceived="20091103114241" -->
<!-- sent="Tue, 3 Nov 2009 17:12:07 +0530" -->
<!-- isosent="20091103114207" -->
<!-- name="Amit Sharma" -->
<!-- email="amit.sharma5_at_[hidden]" -->
<!-- subject="[OMPI devel] orte_rml_base_select failed" -->
<!-- id="00a301ca5c7a$ac1da570$ab925880_at_EC4HP167996" -->
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
<strong>Subject:</strong> [OMPI devel] orte_rml_base_select failed<br>
<strong>From:</strong> Amit Sharma (<em>amit.sharma5_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 06:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Reply:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Maybe reply:</strong> <a href="7101.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
Hi,
<br>
<p>I am using open-mpi version 1.3.2. on SLES 11 machine. I have built it
<br>
simply like ./configure =&gt; make =&gt; make install.
<br>
<p>I am facing the following error with mpirun on some machines.
<br>
<p>Root # mpirun -np 2 ls 
<br>
&nbsp;
<br>
[NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at
<br>
line 182
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort. There are many reasons that a parallel process can fail
<br>
during orte_init; some of which are due to configuration or environment
<br>
problems. This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>orte_rml_base_select failed
<br>
--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[host-desktop1:09127] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_system_init.c at line 42 [host-desktop1:09127] [NO-NAME]
<br>
ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly. The error occured while
<br>
attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>Can you please guide me to resolve this issue. Is there any run time
<br>
environmental variable be set to get rid of this issue?
<br>
<p><p>Thanks in Advance,
<br>
Amit
<br>
&nbsp;
<br>
<p><p><p>Please do not print this email unless it is absolutely necessary. 
<br>
<p>The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
<br>
<p>WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
<br>
<p>www.wipro.com
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Reply:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Maybe reply:</strong> <a href="7101.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
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
