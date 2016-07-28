<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 08:46:11 2011" -->
<!-- isoreceived="20110202134611" -->
<!-- sent="Wed, 2 Feb 2011 08:46:05 -0500" -->
<!-- isosent="20110202134605" -->
<!-- name="Mehdi Bozzo-Rey" -->
<!-- email="mbozzore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?" -->
<!-- id="E6432B09EC3BEC4BB1ACAEBC89E5C6F3F2010E_at_catoexm07.noam.corp.platform.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="02B149D9-0764-48E1-90E1-0A3B31B98748_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?<br>
<strong>From:</strong> Mehdi Bozzo-Rey (<em>mbozzore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 08:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15483.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Previous message:</strong> <a href="15481.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15485.php">Prentice Bisbal: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>I work for Platform Computing, we do have our clustering tool as well
<br>
and I play a lot with others (PCM, ROCKS, xCAT, Unicluster ...). I never
<br>
ran into any problem switching OpenMPI versions. In my case I use
<br>
environment modules and it just works like a charm :-) You can also have
<br>
modules dependencies (like app A was compiled with a very specific
<br>
version of OpenMPI so when you load the environment for app A you are
<br>
basically &quot;forced&quot; to load the corresponding environment module for
<br>
OpenMPI).
<br>
Now it may be a little bit more difficult if you are in an heterogeneous
<br>
environment (from an OS point of view), like nodes running different
<br>
versions of RHEL and SLES. 
<br>
<p>Cheers,
<br>
<p>Mehdi
<br>
<p>Mehdi Bozzo-Rey
<br>
HPC Solutions Architect
<br>
Platform computing
<br>
Phone: +1 905 948 4649
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: February-01-11 7:35 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] How closely tied is a specific release of
<br>
OpenMPIto the host operating system and other system software?
<br>
<p>On Feb 1, 2011, at 5:02 PM, Jeffrey A Cummings wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting a lot of push back from the SysAdmin folks claiming that
</span><br>
OpenMPI is closely intertwined with the specific version of the
<br>
operating system and/or other system software (i.e., Rocks on the
<br>
clusters).  
<br>
<p>I wouldn't say that this is true.  We test across a wide variety of OS's
<br>
and compilers.  I'm sure that there are particular
<br>
platforms/environments that can trip up some kind of problem (it's
<br>
happened before), but in general, Open MPI is pretty portable.
<br>
<p><span class="quotelev1">&gt; To state my question another way:  Apparently each release of Linux
</span><br>
and/or Rocks comes with some version of OpenMPI bundled in.  Is it
<br>
dangerous in some way to upgrade to a newer version of OpenMPI?  
<br>
<p>Not at all.  Others have said it, but I'm one of the developers and I'll
<br>
reinforce their answers: I regularly have about a dozen different
<br>
installations of Open MPI on my cluster at any given time (all in
<br>
different stages of development -- all installed to different prefixes).
<br>
I switch between them quite easily by changing my PATH and
<br>
LD_LIBRARY_PATH (both locally and on remote nodes).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15483.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Previous message:</strong> <a href="15481.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15485.php">Prentice Bisbal: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
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
