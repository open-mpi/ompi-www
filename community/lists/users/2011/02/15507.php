<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 10:36:42 2011" -->
<!-- isoreceived="20110203153642" -->
<!-- sent="Thu, 03 Feb 2011 10:36:33 -0500" -->
<!-- isosent="20110203153633" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="4D4ACB81.5090909_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF7D1C75CF.78077F60-ON8525782C.0013CCB3-8525782C.0013FD42_at_notes.aero.org" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 10:36:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15508.php">Mohamed Husain A.K: "Re: [OMPI users] Serial Rapid IO plug in ?"</a>
<li><strong>Previous message:</strong> <a href="15506.php">Gus Correa: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>In reply to:</strong> <a href="15496.php">Jeffrey A Cummings: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15497.php">Joe Landman: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeffrey A Cummings wrote:
<br>
<span class="quotelev1">&gt; Thanks for all the good replies on this thread.  I don't know if I'll be 
</span><br>
<span class="quotelev1">&gt; able to make a dent in the corporate IT bureaucracy but I'm going to try.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From:        Prentice Bisbal &lt;prentice_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To:        Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:        02/02/2011 11:35 AM
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI users] How closely tied is a specific release 
</span><br>
<span class="quotelev1">&gt; of OpenMPI to the host operating system and other system software?
</span><br>
<span class="quotelev1">&gt; Sent by:        users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeffrey A Cummings wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; I use OpenMPI on a variety of platforms:  stand-alone servers running
</span><br>
<span class="quotelev2">&gt;  &gt; Solaris on sparc boxes and Linux (mostly CentOS) on AMD/Intel boxes,
</span><br>
<span class="quotelev2">&gt;  &gt; also Linux (again CentOS) on large clusters of AMD/Intel boxes.  These
</span><br>
<span class="quotelev2">&gt;  &gt; platforms all have some version of the 1.3 OpenMPI stream.  I recently
</span><br>
<span class="quotelev2">&gt;  &gt; requested an upgrade on all systems to 1.4.3 (for production work) and
</span><br>
<span class="quotelev2">&gt;  &gt; 1.5.1 (for experimentation).  I'm getting a lot of push back from the
</span><br>
<span class="quotelev2">&gt;  &gt; SysAdmin folks claiming that OpenMPI is closely intertwined with the
</span><br>
<span class="quotelev2">&gt;  &gt; specific version of the operating system and/or other system software
</span><br>
<span class="quotelev2">&gt;  &gt; (i.e., Rocks on the clusters).  I need to know if they are telling me
</span><br>
<span class="quotelev2">&gt;  &gt; the truth or if they're just making excuses to avoid the work.  To state
</span><br>
<span class="quotelev2">&gt;  &gt; my question another way:  Apparently each release of Linux and/or Rocks
</span><br>
<span class="quotelev2">&gt;  &gt; comes with some version of OpenMPI bundled in.  Is it dangerous in some
</span><br>
<span class="quotelev2">&gt;  &gt; way to upgrade to a newer version of OpenMPI?  Thanks in advance for any
</span><br>
<span class="quotelev2">&gt;  &gt; insight anyone can provide.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; - Jeff
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI is more or less a user-space program, and isn't that tightly
</span><br>
<span class="quotelev1">&gt; coupled to the OS at all. As long as the OS has the correct network
</span><br>
<span class="quotelev1">&gt; drivers (ethernet, IB, or other), that's all OpenMPI needs to do it's
</span><br>
<span class="quotelev1">&gt; job. In fact, you can install it yourself in your own home directory (if
</span><br>
<span class="quotelev1">&gt; your home directory is shared amongst the cluster nodes you want to
</span><br>
<span class="quotelev1">&gt; use), and run it from there - no special privileges needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have many different versions of OpenMPI installed on my systems,
</span><br>
<span class="quotelev1">&gt; without a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a system administrator responsible for maintaining OpenMPI on several
</span><br>
<span class="quotelev1">&gt; clusters, it sounds like one of two things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Your system administrators really don't know what they're talking
</span><br>
<span class="quotelev1">&gt; about, or,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. They're lying to you to avoid doing work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<p>Jeff
<br>
<p>Worst scenario, you can install OpenMPI yourself, from the source 
<br>
tarball, in a subdirectory of your ${HOME}, for instance.
<br>
You would just need adjust your PATH and LD_LIBRARY_PATH.
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15508.php">Mohamed Husain A.K: "Re: [OMPI users] Serial Rapid IO plug in ?"</a>
<li><strong>Previous message:</strong> <a href="15506.php">Gus Correa: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>In reply to:</strong> <a href="15496.php">Jeffrey A Cummings: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15497.php">Joe Landman: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
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
