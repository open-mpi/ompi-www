<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 21:38:33 2009" -->
<!-- isoreceived="20090811013833" -->
<!-- sent="Mon, 10 Aug 2009 18:38:28 -0700" -->
<!-- isosent="20090811013828" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="E639A4EC-A2C6-4ADC-B1A5-B7019D0762A2_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="31F0F06E-3F6A-41D1-8F2D-9657F2710225_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 21:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So,
<br>
<p>mpirun --display-allocation -pernode --display-map hostname
<br>
<p>gives me the output below.  Simple jobs seem to run, but the MITgcm  
<br>
does not, either under ssh or torque.  It hangs at some early point in  
<br>
execution before anything is written, so its hard for me to tell what  
<br>
the error is.  Could these MCA warnings have anything to do with it?
<br>
<p>I've recompiled the gcm with -L /usr/local/openmpi/lib, so hopefully  
<br>
that catches the right library.
<br>
<p>Thanks,  Jody
<br>
<p><p>[xserve02.local:38126] mca: base: component_find: ras  
<br>
&quot;mca_ras_dash_host&quot; uses an MCA interface that is not recogniz
<br>
ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve02.local:38126] mca: base: component_find: ras  
<br>
&quot;mca_ras_hostfile&quot; uses an MCA interface that is not recognize
<br>
d (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve02.local:38126] mca: base: component_find: ras  
<br>
&quot;mca_ras_localhost&quot; uses an MCA interface that is not recogniz
<br>
ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve02.local:38126] mca: base: component_find: ras &quot;mca_ras_xgrid&quot;  
<br>
uses an MCA interface that is not recognized (
<br>
component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve02.local:38126] mca: base: component_find: iof &quot;mca_iof_proxy&quot;  
<br>
uses an MCA interface that is not recognized (
<br>
component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve02.local:38126] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
<br>
uses an MCA interface that is not recognized (co
<br>
mponent MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;&nbsp;Data for node: Name: xserve02.local    Num slots: 8    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: xserve01.local    Num slots: 8    Max slots: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;&nbsp;Data for node: Name: xserve02.local    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [20967,1] Process rank: 0
<br>
<p>&nbsp;&nbsp;Data for node: Name: xserve01.local    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [20967,1] Process rank: 1
<br>
<p>&nbsp;&nbsp;=============================================================
<br>
[xserve01.cluster:38518] mca: base: component_find: iof  
<br>
&quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized
<br>
&nbsp;&nbsp;(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve01.cluster:38518] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
<br>
uses an MCA interface that is not recognized (
<br>
component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
xserve02.local
<br>
xserve01.cluster
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
