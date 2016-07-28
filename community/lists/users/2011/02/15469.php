<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 17:13:09 2011" -->
<!-- isoreceived="20110201221309" -->
<!-- sent="Tue, 1 Feb 2011 22:12:40 +0000" -->
<!-- isosent="20110201221240" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="762096C11C5A044A9D92961C2E1A7CE80CF940_at_MBOX1.FLAS.CSI.CUNY.EDU" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 17:12:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15470.php">Doug Reeder: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15470.php">Doug Reeder: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>We have 3 Rocks Clusters, while there is a default MPI with each
<br>
Rocks Release, it is often behind the latest production release as
<br>
you note.
<br>
<p>We typically install whatever OpenMPI version we want in a shared space
<br>
and ignore the default installed with Rocks.  Sometimes there standard
<br>
Linux libraries that can be a bit out of date which may be registered as
<br>
&quot;can't finds&quot; in the configuration and/or buiild of OpenMPI, but there usually an
<br>
easy go around.  As far as 'closely intertwined' goes, I would say that
<br>
is an exaggeration.
<br>
<p>It does mean some extra work for someone ... around here is it me ... ;-) ...
<br>
<p>rbw
<br>
<p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
718-982-3319
<br>
612-382-4620
<br>
<p>Reason does give the heart pause;
<br>
As the heart gives reason fits.
<br>
<p>Yet, to live where reason always rules;
<br>
Is to kill one's heart with wits.
<br>
________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jeffrey A Cummings [Jeffrey.A.Cummings_at_[hidden]]
<br>
Sent: Tuesday, February 01, 2011 5:02 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?
<br>
<p>I use OpenMPI on a variety of platforms:  stand-alone servers running Solaris on sparc boxes and Linux (mostly CentOS) on AMD/Intel boxes, also Linux (again CentOS) on large clusters of AMD/Intel boxes.  These platforms all have some version of the 1.3 OpenMPI stream.  I recently requested an upgrade on all systems to 1.4.3 (for production work) and 1.5.1 (for experimentation).  I'm getting a lot of push back from the SysAdmin folks claiming that OpenMPI is closely intertwined with the specific version of the operating system and/or other system software (i.e., Rocks on the clusters).  I need to know if they are telling me the truth or if they're just making excuses to avoid the work.  To state my question another way:  Apparently each release of Linux and/or Rocks comes with some version of OpenMPI bundled in.  Is it dangerous in some way to upgrade to a newer version of OpenMPI?  Thanks in advance for any insight anyone can provide.
<br>
<p>- Jeff
<br>
<p>________________________________
<br>
<p>Think green before you print this email.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15469/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15470.php">Doug Reeder: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15470.php">Doug Reeder: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
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
