<?
$subject_val = "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 11:18:50 2011" -->
<!-- isoreceived="20110210161850" -->
<!-- sent="Thu, 10 Feb 2011 08:18:52 -0800" -->
<!-- isosent="20110210161852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)" -->
<!-- id="F9CEB8DD-0C7C-46D7-BF21-987E4A64F8EB_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="05A2D633CD5E734DAF0DF7A7CBBB8C7E63B76BFCFB_at_Eagle.Blue.Roguewave.Com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 11:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<li><strong>Previous message:</strong> <a href="8974.php">Nikolay Piskun: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<li><strong>In reply to:</strong> <a href="8974.php">Nikolay Piskun: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<li><strong>Reply:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think what Ralph was trying to say is that Open MPI doesn't (currently) support running parallel debuggers when only srun is used (and mpirun is not).
<br>
<p>We'd certainly be open to someone submitting a patch to enable this functionality, though!
<br>
<p><p>On Feb 10, 2011, at 8:02 AM, Nikolay Piskun wrote:
<br>
<p><span class="quotelev1">&gt; Actually in SLURM 2.2.0 that I am using now,  there is a support for parallel debugger and srun does provide needed info  and fill proc_table and set up all debug variable correctly. The only problem that I see so far is the one that I described. Maybe the solution would be to check if job was started by non orterun and then/or check for MPIR_debug_gate before waiting for signal.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Nikolay Piskun | Director of Continuing Engineering | Totalview Technologies |
</span><br>
<span class="quotelev1">&gt; Rogue Wave Software Inc  |  24 Prime Parkway, Natick, MA 01760 | p 508-652-7739|
</span><br>
<span class="quotelev1">&gt; nikolay.piskun_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.roguewave.com
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, February 10, 2011 10:47 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If you srun a job, then there is no &quot;mpirun&quot; to provide a proc_table. So running a  job directly via srun means you cannot run TV on it.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2011, at 8:34 AM, Nikolay Piskun wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to use Totalview with srun and hit interesting problem. Looks like if OMPI is started by &#147;srun   &#150;mpi=ompi &#148;, mpi job is hang in ompi_wait_for_debugger() subroutine. What happen, I think is ompi was compiled without ORTE_DISABLE_FULL_SUPPORT and as result rank 0 is waiting for message from HNP (by the way what is HNP?)  that was supposed to be send by orterun. The problem is that orterun was never invoked because MPI was initiated by srun, not orterun.  So what is the solution? Should we always compile OMPI with  ORTE_DISABLE_FULL_SUPPORT=true for anything that uses different starters like srun from SLURM?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Nikolay
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Nikolay Piskun | Director of Continuing Engineering | Totalview Technologies |
</span><br>
<span class="quotelev1">&gt; Rogue Wave Software Inc  |  24 Prime Parkway, Natick, MA 01760 | p 508-652-7739|
</span><br>
<span class="quotelev1">&gt; nikolay.piskun_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.roguewave.com
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<li><strong>Previous message:</strong> <a href="8974.php">Nikolay Piskun: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<li><strong>In reply to:</strong> <a href="8974.php">Nikolay Piskun: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<li><strong>Reply:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
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
