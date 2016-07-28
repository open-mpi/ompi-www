<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 11:31:05 2011" -->
<!-- isoreceived="20110202163105" -->
<!-- sent="Wed, 02 Feb 2011 11:31:00 -0500" -->
<!-- isosent="20110202163100" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="4D4986C4.2040704_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF108CC97F.B196FEFB-ON8525782A.0077CB83-8525782A.00790D1C_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 11:31:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15486.php">David Mathog: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15484.php">Eugene Loh: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15496.php">Jeffrey A Cummings: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15496.php">Jeffrey A Cummings: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeffrey A Cummings wrote:
<br>
<span class="quotelev1">&gt; I use OpenMPI on a variety of platforms:  stand-alone servers running
</span><br>
<span class="quotelev1">&gt; Solaris on sparc boxes and Linux (mostly CentOS) on AMD/Intel boxes,
</span><br>
<span class="quotelev1">&gt; also Linux (again CentOS) on large clusters of AMD/Intel boxes.  These
</span><br>
<span class="quotelev1">&gt; platforms all have some version of the 1.3 OpenMPI stream.  I recently
</span><br>
<span class="quotelev1">&gt; requested an upgrade on all systems to 1.4.3 (for production work) and
</span><br>
<span class="quotelev1">&gt; 1.5.1 (for experimentation).  I'm getting a lot of push back from the
</span><br>
<span class="quotelev1">&gt; SysAdmin folks claiming that OpenMPI is closely intertwined with the
</span><br>
<span class="quotelev1">&gt; specific version of the operating system and/or other system software
</span><br>
<span class="quotelev1">&gt; (i.e., Rocks on the clusters).  I need to know if they are telling me
</span><br>
<span class="quotelev1">&gt; the truth or if they're just making excuses to avoid the work.  To state
</span><br>
<span class="quotelev1">&gt; my question another way:  Apparently each release of Linux and/or Rocks
</span><br>
<span class="quotelev1">&gt; comes with some version of OpenMPI bundled in.  Is it dangerous in some
</span><br>
<span class="quotelev1">&gt; way to upgrade to a newer version of OpenMPI?  Thanks in advance for any
</span><br>
<span class="quotelev1">&gt; insight anyone can provide.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Jeff,
<br>
<p>OpenMPI is more or less a user-space program, and isn't that tightly
<br>
coupled to the OS at all. As long as the OS has the correct network
<br>
drivers (ethernet, IB, or other), that's all OpenMPI needs to do it's
<br>
job. In fact, you can install it yourself in your own home directory (if
<br>
&nbsp;your home directory is shared amongst the cluster nodes you want to
<br>
use), and run it from there - no special privileges needed.
<br>
<p>I have many different versions of OpenMPI installed on my systems,
<br>
without a problem.
<br>
<p>As a system administrator responsible for maintaining OpenMPI on several
<br>
clusters, it sounds like one of two things:
<br>
<p>1. Your system administrators really don't know what they're talking
<br>
about, or,
<br>
<p>2. They're lying to you to avoid doing work.
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15486.php">David Mathog: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15484.php">Eugene Loh: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15496.php">Jeffrey A Cummings: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15496.php">Jeffrey A Cummings: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
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
