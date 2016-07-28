<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 10:12:54 2006" -->
<!-- isoreceived="20060425141254" -->
<!-- sent="Tue, 25 Apr 2006 10:12:49 -0400" -->
<!-- isosent="20060425141249" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] f90 module files compile a lot faster" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF709109_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] f90 module files compile a lot faster" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-25 10:12:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1138.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1136.php">Aniruddha Shet: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<li><strong>Maybe in reply to:</strong> <a href="1134.php">Michael Kluskens: "[OMPI users] f90 module files compile a lot faster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1140.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Reply:</strong> <a href="1140.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 25, 2006 9:56 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] f90 module files compile a lot faster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strange thing, with the latest g95 and the last OpenMPI 1.1 
</span><br>
<span class="quotelev1">&gt; (a3r9704)  
</span><br>
<span class="quotelev1">&gt; [on OS X 10.4.6] there does not seem to be the compilation penalty  
</span><br>
<span class="quotelev1">&gt; for using &quot;USE MPI&quot; instead of &quot;include mpi.h&quot; that there used to be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My test programs compile almost instantly.
</span><br>
<p>Blast.  We changed the default F90 compile options but did not update
<br>
any of the documentation.  Sigh.  I'll fix that.
<br>
<p>There are now 4 &quot;sizes&quot; of the F90 MPI bindings:
<br>
<p>- trivial: includes a handful of MPI-2 F90-specific functions only
<br>
- small: trivial + all MPI functions that take no choice buffers
<br>
- medium: small + all MPI functions that take 1 choice buffer (this was
<br>
the only option in OMPI 1.0.x)
<br>
- large: medium + all MPI functions that take 2 choice buffers, but only
<br>
when both buffers are of the same type
<br>
<p>The default is currently &quot;small&quot;.  So this is different than it was in
<br>
OMPI 1.0, but the compile time savings were judged to be worth it.
<br>
<p>Sorry about the docs -- I can't believe I missed that.  :-)
<br>
<p><span class="quotelev1">&gt; However, I'm still seeing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev1">&gt; soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev1">&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev1">&gt; oob_base_xcast.c at line 108
</span><br>
<span class="quotelev1">&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev1">&gt; rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev1">&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev1">&gt; soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev1">&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev1">&gt; oob_base_xcast.c at line 108
</span><br>
<span class="quotelev1">&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev1">&gt; rmgr_base_stage_gate.c at line 276
</span><br>
<p>Ralph -- I'm going to throw this one to you.  Can you poke around?
<br>
<p>I think that this means that the SOH is saying that it found more than
<br>
one proc state / exit code in the GPR.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1138.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1136.php">Aniruddha Shet: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<li><strong>Maybe in reply to:</strong> <a href="1134.php">Michael Kluskens: "[OMPI users] f90 module files compile a lot faster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1140.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Reply:</strong> <a href="1140.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
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
