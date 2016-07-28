<?
$subject_val = "Re: [OMPI devel] Threading";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 11:15:40 2010" -->
<!-- isoreceived="20101012151540" -->
<!-- sent="Tue, 12 Oct 2010 09:15:38 -0600" -->
<!-- isosent="20101012151538" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threading" -->
<!-- id="002501cb6a20$54025d90$fc0718b0$_at_lloyd@wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="030DECBA-143A-45BB-B269-40B9756C3D81_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-10-12 11:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8600.php">Kenneth Lloyd: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Reply:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>There is really no need to do anything different to accommodate us &quot;oddball&quot;
<br>
cases.  Continue to &quot;do what you do&quot;.
<br>
<p>Ken
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Tuesday, October 12, 2010 9:01 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Threading
<br>
<p>Hmmm...I don't understand what you just said, but it definitely sounds
<br>
-ugly-! :-)
<br>
<p>I'll take your word for it - we may have to provide a lower performance
<br>
version for such oddball purposes, and offer a higher capability version for
<br>
everyone else. I'll see if I can keep a single version, though, assuming the
<br>
code doesn't get too convoluted so as to become unmaintainable.
<br>
<p>Otherwise, I'll branch it and &quot;freeze&quot; a non-threaded version for the
<br>
unusual case.
<br>
<p>Thanks!
<br>
<p>On Oct 12, 2010, at 8:51 AM, Kenneth Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; In certain hybrid, heterogeneous HPC configurations, mpirun often cannot
</span><br>
or
<br>
<span class="quotelev1">&gt; should not be threaded through the OS under which OpenMPI runs. The
</span><br>
primary
<br>
<span class="quotelev1">&gt; OS and MPI can configure management nodes and topologies (even other MPI
</span><br>
<span class="quotelev1">&gt; layers) that subsequently spawn various OSes and other lightweight
</span><br>
kernels.
<br>
<span class="quotelev1">&gt; These share memory spaces and indirectly access the program stacks in
</span><br>
<span class="quotelev1">&gt; various devices.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In short, yes, there are environments where this would cause a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; Kenneth A. Lloyd
</span><br>
<span class="quotelev1">&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Barrett, Brian W
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, October 12, 2010 8:24 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Threading
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 11, 2010, at 11:41 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know of a reason why mpirun can -not- be threaded, assuming
</span><br>
<span class="quotelev1">&gt; that all threads block and do not continuously chew cpu? Is there an
</span><br>
<span class="quotelev1">&gt; environment where this would cause a problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't have any machines at Sandia where I could see this being a
</span><br>
problem.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8600.php">Kenneth Lloyd: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Reply:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
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
