<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 17:18:55 2011" -->
<!-- isoreceived="20110201221855" -->
<!-- sent="Tue, 1 Feb 2011 14:18:49 -0800" -->
<!-- isosent="20110201221849" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="E61878CD-92F0-46AB-816C-A292E72D5BFD_at_cox.net" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 17:18:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15471.php">Reuti: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15469.php">Richard Walsh: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15471.php">Reuti: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>We have similar circumstances and have been able to install and use versions of openmpi newer than supplied with the OS. It is necessary  to have some means of path management to ensure that applications build against the desired version of openmpi and run with the version of openmpi they were built with. We use the module system for this path management. We create modules for each version of openmpi and each version of the applications. We than include the appropriate openmpi module in the module for the application. Then when a user loads a module for their application they automatically get the correct version of openmpi.
<br>
<p>Doug Reeder
<br>
On Feb 1, 2011, at 2:02 PM, Jeffrey A Cummings wrote:
<br>
<p><span class="quotelev1">&gt; I use OpenMPI on a variety of platforms:  stand-alone servers running Solaris on sparc boxes and Linux (mostly CentOS) on AMD/Intel boxes, also Linux (again CentOS) on large clusters of AMD/Intel boxes.  These platforms all have some version of the 1.3 OpenMPI stream.  I recently requested an upgrade on all systems to 1.4.3 (for production work) and 1.5.1 (for experimentation).  I'm getting a lot of push back from the SysAdmin folks claiming that OpenMPI is closely intertwined with the specific version of the operating system and/or other system software (i.e., Rocks on the clusters).  I need to know if they are telling me the truth or if they're just making excuses to avoid the work.  To state my question another way:  Apparently each release of Linux and/or Rocks comes with some version of OpenMPI bundled in.  Is it dangerous in some way to upgrade to a newer version of OpenMPI?  Thanks in advance for any insight anyone can provide. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Jeff_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15470/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15471.php">Reuti: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15469.php">Richard Walsh: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15471.php">Reuti: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
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
