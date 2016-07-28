<?
$subject_val = "Re: [OMPI devel] Threading";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 10:51:32 2010" -->
<!-- isoreceived="20101012145132" -->
<!-- sent="Tue, 12 Oct 2010 08:51:29 -0600" -->
<!-- isosent="20101012145129" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threading" -->
<!-- id="003001cb6a1c$f4ce9940$de6bcbc0$_at_lloyd@wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FC981B4C-4427-484B-A766-F10D1A7B432B_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Threading<br>
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 10:51:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8596.php">Samuel K. Gutierrez: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8595.php">Barrett, Brian W: "Re: [OMPI devel] Threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Reply:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In certain hybrid, heterogeneous HPC configurations, mpirun often cannot or
<br>
should not be threaded through the OS under which OpenMPI runs. The primary
<br>
OS and MPI can configure management nodes and topologies (even other MPI
<br>
layers) that subsequently spawn various OSes and other lightweight kernels.
<br>
These share memory spaces and indirectly access the program stacks in
<br>
various devices.  
<br>
<p>In short, yes, there are environments where this would cause a problem.
<br>
<p>==================
<br>
Kenneth A. Lloyd
<br>
Watt Systems Technologies Inc.
<br>
<p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Barrett, Brian W
<br>
Sent: Tuesday, October 12, 2010 8:24 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Threading
<br>
<p>On Oct 11, 2010, at 11:41 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Does anyone know of a reason why mpirun can -not- be threaded, assuming
</span><br>
that all threads block and do not continuously chew cpu? Is there an
<br>
environment where this would cause a problem?
<br>
<p>We don't have any machines at Sandia where I could see this being a problem.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8596.php">Samuel K. Gutierrez: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8595.php">Barrett, Brian W: "Re: [OMPI devel] Threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Reply:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
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
