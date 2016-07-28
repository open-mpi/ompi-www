<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 21:44:29 2009" -->
<!-- isoreceived="20090811014429" -->
<!-- sent="Mon, 10 Aug 2009 19:44:15 -0600" -->
<!-- isosent="20090811014415" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="221DEB83-82FA-445A-8D47-CFAF26DA13E5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E639A4EC-A2C6-4ADC-B1A5-B7019D0762A2_at_uvic.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 21:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10281.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10281.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check your LD_LIBRARY_PATH - there is an earlier version of OMPI in  
<br>
your path that is interfering with operation (i.e., it comes before  
<br>
your 1.3.3 installation).
<br>
<p><p>On Aug 10, 2009, at 7:38 PM, Klymak Jody wrote:
<br>
<p><span class="quotelev1">&gt; So,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --display-allocation -pernode --display-map hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gives me the output below.  Simple jobs seem to run, but the MITgcm  
</span><br>
<span class="quotelev1">&gt; does not, either under ssh or torque.  It hangs at some early point  
</span><br>
<span class="quotelev1">&gt; in execution before anything is written, so its hard for me to tell  
</span><br>
<span class="quotelev1">&gt; what the error is.  Could these MCA warnings have anything to do  
</span><br>
<span class="quotelev1">&gt; with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've recompiled the gcm with -L /usr/local/openmpi/lib, so hopefully  
</span><br>
<span class="quotelev1">&gt; that catches the right library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev1">&gt; &quot;mca_ras_dash_host&quot; uses an MCA interface that is not recogniz
</span><br>
<span class="quotelev1">&gt; ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev1">&gt; &quot;mca_ras_hostfile&quot; uses an MCA interface that is not recognize
</span><br>
<span class="quotelev1">&gt; d (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev1">&gt; &quot;mca_ras_localhost&quot; uses an MCA interface that is not recogniz
</span><br>
<span class="quotelev1">&gt; ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev1">&gt; &quot;mca_ras_xgrid&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev1">&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; [xserve02.local:38126] mca: base: component_find: iof  
</span><br>
<span class="quotelev1">&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev1">&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; [xserve02.local:38126] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
</span><br>
<span class="quotelev1">&gt; uses an MCA interface that is not recognized (co
</span><br>
<span class="quotelev1">&gt; mponent MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data for node: Name: xserve02.local    Num slots: 8    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: xserve01.local    Num slots: 8    Max slots: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data for node: Name: xserve02.local    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [20967,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data for node: Name: xserve01.local    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [20967,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:38518] mca: base: component_find: iof  
</span><br>
<span class="quotelev1">&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized
</span><br>
<span class="quotelev1">&gt; (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:38518] mca: base: component_find: iof  
</span><br>
<span class="quotelev1">&gt; &quot;mca_iof_svc&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev1">&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; xserve02.local
</span><br>
<span class="quotelev1">&gt; xserve01.cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10281.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10281.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
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
