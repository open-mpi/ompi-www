<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 11:14:44 2006" -->
<!-- isoreceived="20060425151444" -->
<!-- sent="Tue, 25 Apr 2006 11:14:31 -0400" -->
<!-- isosent="20060425151431" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] f90 module files compile a lot faster" -->
<!-- id="62C71014-051D-485C-BB5C-40C7DE6338FC_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF709109_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-25 11:14:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1139.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>In reply to:</strong> <a href="1137.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could I/we have a translation of what &quot;trivial, small, medium, large&quot;  
<br>
means to the end user?
<br>
<p>I for one don't read the docs every week with new 1.1 alpha tests.
<br>
<p>Michael
<br>
<p>On Apr 25, 2006, at 10:12 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, April 25, 2006 9:56 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] f90 module files compile a lot faster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strange thing, with the latest g95 and the last OpenMPI 1.1
</span><br>
<span class="quotelev2">&gt;&gt; (a3r9704)
</span><br>
<span class="quotelev2">&gt;&gt; [on OS X 10.4.6] there does not seem to be the compilation penalty
</span><br>
<span class="quotelev2">&gt;&gt; for using &quot;USE MPI&quot; instead of &quot;include mpi.h&quot; that there used to be.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My test programs compile almost instantly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Blast.  We changed the default F90 compile options but did not update
</span><br>
<span class="quotelev1">&gt; any of the documentation.  Sigh.  I'll fix that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are now 4 &quot;sizes&quot; of the F90 MPI bindings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - trivial: includes a handful of MPI-2 F90-specific functions only
</span><br>
<span class="quotelev1">&gt; - small: trivial + all MPI functions that take no choice buffers
</span><br>
<span class="quotelev1">&gt; - medium: small + all MPI functions that take 1 choice buffer (this  
</span><br>
<span class="quotelev1">&gt; was
</span><br>
<span class="quotelev1">&gt; the only option in OMPI 1.0.x)
</span><br>
<span class="quotelev1">&gt; - large: medium + all MPI functions that take 2 choice buffers, but  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; when both buffers are of the same type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The default is currently &quot;small&quot;.  So this is different than it was in
</span><br>
<span class="quotelev1">&gt; OMPI 1.0, but the compile time savings were judged to be worth it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about the docs -- I can't believe I missed that.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I'm still seeing:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/
</span><br>
<span class="quotelev2">&gt;&gt; soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev2">&gt;&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/
</span><br>
<span class="quotelev2">&gt;&gt; oob_base_xcast.c at line 108
</span><br>
<span class="quotelev2">&gt;&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev2">&gt;&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/
</span><br>
<span class="quotelev2">&gt;&gt; soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev2">&gt;&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/
</span><br>
<span class="quotelev2">&gt;&gt; oob_base_xcast.c at line 108
</span><br>
<span class="quotelev2">&gt;&gt; [a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph -- I'm going to throw this one to you.  Can you poke around?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that this means that the SOH is saying that it found more than
</span><br>
<span class="quotelev1">&gt; one proc state / exit code in the GPR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1139.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>In reply to:</strong> <a href="1137.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
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
