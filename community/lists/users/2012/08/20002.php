<?
$subject_val = "[OMPI users] ORTE_ERROR: orte_ess_base_open failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 13:58:59 2012" -->
<!-- isoreceived="20120824175859" -->
<!-- sent="Fri, 24 Aug 2012 13:58:55 -0400" -->
<!-- isosent="20120824175855" -->
<!-- name="Shanthini Kannan" -->
<!-- email="shanthinick_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE_ERROR: orte_ess_base_open failed" -->
<!-- id="CACY7q+nLhGCb+nQ7me7iGndO4QF-yZbHkxm-J+dFxXvhrabXCA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ORTE_ERROR: orte_ess_base_open failed<br>
<strong>From:</strong> Shanthini Kannan (<em>shanthinick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 13:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20001.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Reply:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am running mpptest over Open MPI (v1.5.4).
<br>
I get the following error saying component &quot;env&quot; in Framework &quot;ess&quot; is not
<br>
found. Am I missing something?  I am new to MPI and any help you can offer
<br>
is appreciated.
<br>
<p>A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      AV8
<br>
Framework: ess
<br>
Component: env
<br>
--------------------------------------------------------------------------
<br>
[AV8:05354] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 120
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
<p>Thanks!
<br>
Shanthini
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20001.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Reply:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
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
