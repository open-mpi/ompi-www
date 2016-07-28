<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 13 04:44:07 2007" -->
<!-- isoreceived="20070413084407" -->
<!-- sent="Fri, 13 Apr 2007 10:44:01 +0200" -->
<!-- isosent="20070413084401" -->
<!-- name="Christine Kreuzer" -->
<!-- email="c.kreuzer_at_[hidden]" -->
<!-- subject="[OMPI users] orte_init failed" -->
<!-- id="20070413104401.fgiuh7qlk4og04w0_at_webmail.rz.uni-saarland.de" -->
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
<strong>From:</strong> Christine Kreuzer (<em>c.kreuzer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-13 04:44:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3074.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3072.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3075.php">Brian Barrett: "Re: [OMPI users] orte_init failed"</a>
<li><strong>Reply:</strong> <a href="3075.php">Brian Barrett: "Re: [OMPI users] orte_init failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I run openmpi on a AMD Opteron with two dualcore processors an SLE10,  
<br>
until today everything worked fine but than I got the following error  
<br>
message:
<br>
<p>[computername:20612][0,0,0] ORTE_ERROR_LOG: Error in file  
<br>
../../orte/runtime/orte_init_stage1.c at line 302
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
<p>&nbsp;&nbsp;&nbsp;orte_session_dir failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[computername:20612] [0,0,0] ORTE_ERROR_LOG: Error in file  
<br>
../../orte/runtime/orte_system_init.c at line 42
<br>
[computername:20612] [0,0,0] ORTE_ERROR_LOG: Error in file  
<br>
../../orte/runtime/orte_init.c at line 49
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>I would appreciate any help or ideas to solve this problem.
<br>
Thanks in advance!
<br>
<p>Regards,
<br>
Christine
<br>
<pre>
-- 
Universit&#228;t des Saarlandes
AG Prof. Dr. Christoph Becher
Fachrichtung 7.3 (Technische Physik)
Geb. E2.6, Zimmer 2.04
D-66123 Saarbr&#252;cken
Phone:+49(0)681 302 3418
Fax: +49(0)681 302 4676
E-mail: c.kreuzer_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3074.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3072.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3075.php">Brian Barrett: "Re: [OMPI users] orte_init failed"</a>
<li><strong>Reply:</strong> <a href="3075.php">Brian Barrett: "Re: [OMPI users] orte_init failed"</a>
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
