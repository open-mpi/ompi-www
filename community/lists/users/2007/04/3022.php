<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 15:28:45 2007" -->
<!-- isoreceived="20070404192845" -->
<!-- sent="Wed, 4 Apr 2007 15:28:14 -0400" -->
<!-- isosent="20070404192814" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_endpoint errors" -->
<!-- id="BC6C67E2-1172-4B00-83A5-F5C9C3E0FA88_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C23805B2.148D%heywood_at_cshl.edu" -->
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
<strong>Date:</strong> 2007-04-04 15:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3023.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="3021.php">Jeff Squyres: "Re: [OMPI users] problem with MPI_Bcast over ethernet"</a>
<li><strong>In reply to:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2007, at 1:22 PM, Heywood, Todd wrote:
<br>
<p><span class="quotelev1">&gt; ssh: connect to host blade45 port 22: No route to host
</span><br>
<span class="quotelev1">&gt; [blade1:05832] ERROR: A daemon on node blade45 failed to start as  
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [blade1:05832] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [blade1:05832] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [blade1:05832] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev1">&gt; [blade1:05832] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [blade1:05832] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1187
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can understand this arising from an ssh bottleneck, with a  
</span><br>
<span class="quotelev1">&gt; timeout. So, a
</span><br>
<span class="quotelev1">&gt; question to the OMPI folks: could the &quot;no route to host&quot; (113)  
</span><br>
<span class="quotelev1">&gt; error in
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint.c:572 also result from a timeout?
</span><br>
<p>I think it *could*, but it's really an OS-level question.  OMPI is  
<br>
simply reporting what errno is giving us back from a failed TCP  
<br>
connect() API call.
<br>
<p>The timeout shown in the error message above is really an ORTE  
<br>
timeout, meaning that we waited for a daemon to start that didn't, so  
<br>
we timed out and gave up.  It's on the &quot;to do&quot; list to recognize  
<br>
quicker that an ssh failed (or any of the other starters failed --  
<br>
SLURM/srun failures behaves similarly to ssh failures right now)  
<br>
faster than a timeout, probably not until at least the 1.3 timeframe,  
<br>
however.
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
<li><strong>Next message:</strong> <a href="3023.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="3021.php">Jeff Squyres: "Re: [OMPI users] problem with MPI_Bcast over ethernet"</a>
<li><strong>In reply to:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
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
