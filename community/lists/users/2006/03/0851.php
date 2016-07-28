<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 09:00:42 2006" -->
<!-- isoreceived="20060314140042" -->
<!-- sent="Tue, 14 Mar 2006 09:00:30 -0500" -->
<!-- isosent="20060314140030" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?" -->
<!-- id="22439D01-B9A9-4B57-9E53-C7BB4601B1CB_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="957DBDF1-ED10-49D9-BFC9-5C1EB958614B_at_nrl.navy.mil" -->
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
<strong>Date:</strong> 2006-03-14 09:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0852.php">Robert Latham: "[OMPI users] comm_join and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0850.php">Brian Barrett: "Re: [OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>In reply to:</strong> <a href="0797.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0744.php">Greg Lindahl: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see responses to noncritical parts of my discussion but not the  
<br>
following, is it a known issue, a fixed issue, or we don't want to  
<br>
discuss it issue?
<br>
<p>Michael
<br>
<p>On Mar 7, 2006, at 4:39 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; The following errors/warnings also exist when running my spawn test
</span><br>
<span class="quotelev1">&gt; on a clean installation of r9212.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/
</span><br>
<span class="quotelev2">&gt;&gt; soh_base_get_proc_soh.c at line 100
</span><br>
<span class="quotelev2">&gt;&gt; [-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/
</span><br>
<span class="quotelev2">&gt;&gt; oob_base_xcast.c at line 108
</span><br>
<span class="quotelev2">&gt;&gt; [-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev2">&gt;&gt; [-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/
</span><br>
<span class="quotelev2">&gt;&gt; soh_base_get_proc_soh.c at line 100
</span><br>
<span class="quotelev2">&gt;&gt; [-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/
</span><br>
<span class="quotelev2">&gt;&gt; oob_base_xcast.c at line 108
</span><br>
<span class="quotelev2">&gt;&gt; [-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OS X 10.4.5 with g95 from current fink install for FC &amp; F77.  Running
</span><br>
<span class="quotelev2">&gt;&gt; on a single machine and launching a single spawned subprocess as a
</span><br>
<span class="quotelev2">&gt;&gt; test case for now.  Also on Debian Sarge on Operton built using &quot;./
</span><br>
<span class="quotelev2">&gt;&gt; configure --with-gnu-ld F77=pgf77 FFLAGS=-fastsse FC=pgf90 FCFLAGS=-
</span><br>
<span class="quotelev2">&gt;&gt; fastsse&quot;  with PG 6.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are these diagnostic messages of errors in OpenMPI 1.1r9212 or
</span><br>
<span class="quotelev2">&gt;&gt; related to errors in my test code?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this information helpful for development purposes?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0852.php">Robert Latham: "[OMPI users] comm_join and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0850.php">Brian Barrett: "Re: [OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>In reply to:</strong> <a href="0797.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0744.php">Greg Lindahl: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
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
