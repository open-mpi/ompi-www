<?
$subject_val = "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5	(hang	in OMPI)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 15:22:53 2011" -->
<!-- isoreceived="20110210202253" -->
<!-- sent="Thu, 10 Feb 2011 13:19:40 -0700" -->
<!-- isosent="20110210201940" -->
<!-- name="Nikolay Piskun" -->
<!-- email="Nikolay.Piskun_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Debugger problem with srun and openmpi 1.5	(hang	in OMPI)" -->
<!-- id="05A2D633CD5E734DAF0DF7A7CBBB8C7E63B7456433_at_Eagle.Blue.Roguewave.Com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="0F183F5F-E548-44B8-B19B-D94F87F4F5EE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Debugger problem with srun and openmpi 1.5	(hang	in OMPI)<br>
<strong>From:</strong> Nikolay Piskun (<em>Nikolay.Piskun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 15:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8978.php">Jeff Squyres: "[OMPI devel] 1.5.2rc1 is posted"</a>
<li><strong>Previous message:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<li><strong>In reply to:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8982.php">Jeff Squyres: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5	(hang	in OMPI)"</a>
<li><strong>Reply:</strong> <a href="8982.php">Jeff Squyres: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5	(hang	in OMPI)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks much, looks like this should work. The patch is one line:
<br>
-------------------------------------------------------------- 
<br>
&nbsp;diff -c ompi_debuggers.c ompi_debuggers.c.old 
<br>
*** ompi_debuggers.c    Thu Feb 10 15:13:07 2011
<br>
--- ompi_debuggers.c.old        Fri Jan 22 09:21:23 2010
<br>
***************
<br>
*** 222,228 ****
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpimsgq_dll_locations = tmp1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpidbg_dll_locations = tmp2;
<br>
&nbsp;&nbsp;
<br>
!     if (ORTE_DISABLE_FULL_SUPPORT || orte_standalone_operation) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* spin until debugger attaches and releases us */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (MPIR_debug_gate == 0) {
<br>
&nbsp;&nbsp;#if defined(__WINDOWS__)
<br>
--- 222,228 ----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpimsgq_dll_locations = tmp1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpidbg_dll_locations = tmp2;
<br>
&nbsp;&nbsp;
<br>
!     if (ORTE_DISABLE_FULL_SUPPORT) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* spin until debugger attaches and releases us */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (MPIR_debug_gate == 0) {
<br>
&nbsp;&nbsp;#if defined(__WINDOWS__)
<br>
----------------------------------------------------------------
<br>
&nbsp;What would be the best way to put it in? 
<br>
<p><pre>
--
Nikolay Piskun
Director of Continuing Engineering
TotalView Technologies, Rogue Wave Software company
mailto:nikolay_at_[hidden]   phone: 508-652-7739
24 Prime Parkway,          Natick, MA 01760
<a href="http://www.totalviewtech.com">http://www.totalviewtech.com</a>
________________________________________
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
Sent: Thursday, February 10, 2011 12:42 PM
To: Open MPI Developers
Subject: Re: [OMPI devel] Debugger problem with srun and openmpi 1.5    (hang   in OMPI)
FWIW: there already is a flag in ORTE that gets set when procs are launched by a non-orterun entity: orte_standalone_operation. So all you would have to do is add an appropriate check for that flag to be true.
On Feb 10, 2011, at 9:18 AM, Jeff Squyres wrote:
&gt; I think what Ralph was trying to say is that Open MPI doesn't (currently) support running parallel debuggers when only srun is used (and mpirun is not).
&gt;
&gt; We'd certainly be open to someone submitting a patch to enable this functionality, though!
&gt;
&gt;
&gt; On Feb 10, 2011, at 8:02 AM, Nikolay Piskun wrote:
&gt;
&gt;&gt; Actually in SLURM 2.2.0 that I am using now,  there is a support for parallel debugger and srun does provide needed info  and fill proc_table and set up all debug variable correctly. The only problem that I see so far is the one that I described. Maybe the solution would be to check if job was started by non orterun and then/or check for MPIR_debug_gate before waiting for signal.
&gt;&gt;
&gt;&gt; Nikolay Piskun | Director of Continuing Engineering | Totalview Technologies |
&gt;&gt; Rogue Wave Software Inc  |  24 Prime Parkway, Natick, MA 01760 | p 508-652-7739|
&gt;&gt; nikolay.piskun_at_[hidden]
&gt;&gt; www.roguewave.com
&gt;&gt;
&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
&gt;&gt; Sent: Thursday, February 10, 2011 10:47 AM
&gt;&gt; To: Open MPI Developers
&gt;&gt; Subject: Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)
&gt;&gt;
&gt;&gt; If you srun a job, then there is no &quot;mpirun&quot; to provide a proc_table. So running a  job directly via srun means you cannot run TV on it.
&gt;&gt;
&gt;&gt;
&gt;&gt; On Feb 10, 2011, at 8:34 AM, Nikolay Piskun wrote:
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;   Hi,
&gt;&gt; I am trying to use Totalview with srun and hit interesting problem. Looks like if OMPI is started by &#147;srun   &#150;mpi=ompi &#148;, mpi job is hang in ompi_wait_for_debugger() subroutine. What happen, I think is ompi was compiled without ORTE_DISABLE_FULL_SUPPORT and as result rank 0 is waiting for message from HNP (by the way what is HNP?)  that was supposed to be send by orterun. The problem is that orterun was never invoked because MPI was initiated by srun, not orterun.  So what is the solution? Should we always compile OMPI with  ORTE_DISABLE_FULL_SUPPORT=true for anything that uses different starters like srun from SLURM?
&gt;&gt; Thanks
&gt;&gt; Nikolay
&gt;&gt;
&gt;&gt; Nikolay Piskun | Director of Continuing Engineering | Totalview Technologies |
&gt;&gt; Rogue Wave Software Inc  |  24 Prime Parkway, Natick, MA 01760 | p 508-652-7739|
&gt;&gt; nikolay.piskun_at_[hidden]
&gt;&gt; www.roguewave.com
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8978.php">Jeff Squyres: "[OMPI devel] 1.5.2rc1 is posted"</a>
<li><strong>Previous message:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<li><strong>In reply to:</strong> <a href="8976.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang	in OMPI)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8982.php">Jeff Squyres: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5	(hang	in OMPI)"</a>
<li><strong>Reply:</strong> <a href="8982.php">Jeff Squyres: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5	(hang	in OMPI)"</a>
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
