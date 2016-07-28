<?
$subject_val = "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 03:39:08 2012" -->
<!-- isoreceived="20120201083908" -->
<!-- sent="Wed, 1 Feb 2012 09:39:04 +0100" -->
<!-- isosent="20120201083904" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2" -->
<!-- id="CACd6u-pZuWk3Wt_yPN8V9X-pKAgbCE=4hCYzmQLgTBAK9NFkLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJyx1QFEJ5CGempbZJf1-ZkN+hp2FMTAtqd71RDK89FAktpX=A_at_mail.gmail.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 03:39:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18343.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18341.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="../../2012/01/18334.php">Daniel Milroy: "[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18356.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Reply:</strong> <a href="18356.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 31, 2012 at 8:19 PM, Daniel Milroy
<br>
&lt;Daniel.Milroy_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built OpenMPI 1.4.5rc2 with Intel 12.1 compilers in an HPC
</span><br>
<span class="quotelev1">&gt; environment. &#160;We are running RHEL 5, kernel 2.6.18-238 with Intel Xeon
</span><br>
<span class="quotelev1">&gt; X5660 cpus. &#160;You can find my build options below. &#160;In an effort to
</span><br>
<span class="quotelev1">&gt; test the OpenMPI build, I compiled &quot;Hello world&quot; with an mpi_init call
</span><br>
<span class="quotelev1">&gt; in C and Fortran. &#160;Mpirun of both versions on a single node results in
</span><br>
<span class="quotelev1">&gt; a segfault. &#160;I have attached the pertinent portion of gdb's output of
</span><br>
<span class="quotelev1">&gt; the &quot;Hello world&quot; core dump.
</span><br>
<p>Hi Daniel,
<br>
<p>that looks like the problem I had with my intel build of openmpi. I
<br>
could solve it by upgrading the Intel Compiler version to 12.1.2.273:
<br>
% icc -v
<br>
icc version 12.1.2 (gcc version 4.4.5 compatibility)
<br>
% icc -V
<br>
Intel(R) C Intel(R) 64 Compiler XE for applications running on
<br>
Intel(R) 64, Version 12.1 Build 20111128
<br>
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
<br>
<p><p>After a rebuild of the openmpi runtime, the crashes went away. I was
<br>
using openmpi 1.5.3, but you could still have the same problem.
<br>
<p>Regards, G&#246;tz
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18343.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18341.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="../../2012/01/18334.php">Daniel Milroy: "[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18356.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Reply:</strong> <a href="18356.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
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
