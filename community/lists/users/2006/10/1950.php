<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  7 09:07:48 2006" -->
<!-- isoreceived="20061007130748" -->
<!-- sent="Sat, 07 Oct 2006 09:07:42 -0400" -->
<!-- isosent="20061007130742" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2" -->
<!-- id="C14D1EDE.29F6A%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F5FD1_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2006-10-07 09:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1951.php">Ralph Castain: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="1942.php">Maestas, Christopher Daniel: "[OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Followups on this show that this was caused by accidentally running on a one
<br>
node Torque allocation and using the &quot;-nolocal&quot; option to mpirun.  So Open
<br>
MPI is doing what it should do (refusing to run), but being less than
<br>
helpful about its error message.
<br>
<p>I'll file a feature enhancement to see if we can make the resulting error
<br>
message a bit more obvious.
<br>
<p><p>On 10/6/06 12:33 PM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone ever seen this?
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; [dn32:07156] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_node.c at line 153
</span><br>
<span class="quotelev1">&gt; [dn32:07156] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file
</span><br>
<span class="quotelev1">&gt; rmaps_rr.c at line 270
</span><br>
<span class="quotelev1">&gt; [dn32:07156] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 428
</span><br>
<span class="quotelev1">&gt; [dn32:07156] orterun: spawn failed with errno=-3
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This happened on a 2ppn job using 2 nodes.
</span><br>
<span class="quotelev1">&gt; I tried searching the site, but didn't find anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -cdm
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1951.php">Ralph Castain: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="1942.php">Maestas, Christopher Daniel: "[OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
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
