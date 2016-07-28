<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 22:38:24 2011" -->
<!-- isoreceived="20110203033824" -->
<!-- sent="Wed, 2 Feb 2011 22:38:20 -0500" -->
<!-- isosent="20110203033820" -->
<!-- name="Jeffrey A Cummings" -->
<!-- email="Jeffrey.A.Cummings_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="OF7D1C75CF.78077F60-ON8525782C.0013CCB3-8525782C.0013FD42_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4D4986C4.2040704_at_ias.edu" -->
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
<strong>From:</strong> Jeffrey A Cummings (<em>Jeffrey.A.Cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 22:38:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15497.php">Joe Landman: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15495.php">Jeffrey A Cummings: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>In reply to:</strong> <a href="15485.php">Prentice Bisbal: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15507.php">Gus Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15507.php">Gus Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for all the good replies on this thread.  I don't know if I'll be 
<br>
able to make a dent in the corporate IT bureaucracy but I'm going to try.
<br>
&nbsp;
<br>
<p><p><p>From:   Prentice Bisbal &lt;prentice_at_[hidden]&gt;
<br>
To:     Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:   02/02/2011 11:35 AM
<br>
Subject:        Re: [OMPI users] How closely tied is a specific release of 
<br>
OpenMPI to the host operating system and other system software?
<br>
Sent by:        users-bounces_at_[hidden]
<br>
<p><p><p>Jeffrey A Cummings wrote:
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15496/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15497.php">Joe Landman: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15495.php">Jeffrey A Cummings: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>In reply to:</strong> <a href="15485.php">Prentice Bisbal: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15507.php">Gus Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15507.php">Gus Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
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
