<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 08:19:15 2007" -->
<!-- isoreceived="20070727121915" -->
<!-- sent="Fri, 27 Jul 2007 08:18:58 -0400" -->
<!-- isosent="20070727121858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error message when running openmpi on multiple machines" -->
<!-- id="FD24FA11-2FDD-43E1-8BF2-1AD8697D0662_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="010707251713001.1871_at_os-09.cs.huji.ac.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 08:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3779.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3777.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<li><strong>In reply to:</strong> <a href="3765.php">David Erukhimovich: "[OMPI users] Error message when running openmpi on multiple machines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 25, 2007, at 10:22 AM, David Erukhimovich wrote:
<br>
<p><span class="quotelev1">&gt; But when I trying to run it on more computers with the attached  
</span><br>
<span class="quotelev1">&gt; machinefile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec --machinefile mpd.hosts -np 2 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error massage:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mos31:31104] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate  
</span><br>
<span class="quotelev1">&gt; space in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [mos31:31104] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate  
</span><br>
<span class="quotelev1">&gt; space in file gpr_replica_cmd_processor.c at line 361
</span><br>
<p>Can you double check that you're not mixing multiple versions of Open  
<br>
MPI across your two machines?  We tend to change wire protocols  
<br>
behind the scenes between versions -- if you have OMPI version A on  
<br>
one machine and OMPI version B on another, things may behave in  
<br>
unpredictable (read: bad) ways.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3779.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3777.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<li><strong>In reply to:</strong> <a href="3765.php">David Erukhimovich: "[OMPI users] Error message when running openmpi on multiple machines"</a>
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
