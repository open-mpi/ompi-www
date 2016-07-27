<?
$subject_val = "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 19:01:17 2009" -->
<!-- isoreceived="20091029230117" -->
<!-- sent="Fri, 30 Oct 2009 00:01:11 +0100" -->
<!-- isosent="20091029230111" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc" -->
<!-- id="20091029230111.GH4692_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AEA05AF.6040106_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 19:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0305.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Previous message:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>In reply to:</strong> <a href="0297.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0305.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0305.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan Balaji, le Thu 29 Oct 2009 16:14:23 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  *      Copyright 2009, STMicroelectronics, Incorporated.
</span><br>
<span class="quotelev1">&gt;  *      All rights reserved.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* 
</span><br>
<span class="quotelev1">&gt;  Enable the __CPU definitons hidden by __USE_GNU
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<p><span class="quotelev1">&gt; #include_next&lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Access macros for `cpu_set'.  */
</span><br>
<span class="quotelev1">&gt; #define CPU_SET(cpu, cpusetp)   __CPU_SET (cpu, cpusetp)
</span><br>
<p>How ugly. Can just not work with recent Linux glibcs...
<br>
<p><span class="quotelev1">&gt; /* 3.3 and above version */
</span><br>
<span class="quotelev1">&gt; /* Set the CPU affinity for a task */
</span><br>
<span class="quotelev1">&gt; extern int sched_setaffinity (__pid_t __pid, size_t __cpusetsize,
</span><br>
<span class="quotelev1">&gt;                               __const cpu_set_t *__cpuset) __THROW;
</span><br>
<p>And that can not work with old glibcs...
<br>
<p>A bug report should really be sent to pgcc, as this header can only work
<br>
with only work with some internal of glibc versions...
<br>
<p>In the meanwhile, I have commited detection code, could you check the
<br>
svn version from
<br>
<a href="https://svn.open-mpi.org/svn/hwloc/branches/v0.9">https://svn.open-mpi.org/svn/hwloc/branches/v0.9</a>
<br>
?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0305.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Previous message:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>In reply to:</strong> <a href="0297.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0305.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0305.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
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
