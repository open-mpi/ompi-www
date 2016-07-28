<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 22:56:03 2011" -->
<!-- isoreceived="20110203035603" -->
<!-- sent="Wed, 02 Feb 2011 22:55:58 -0500" -->
<!-- isosent="20110203035558" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="4D4A274E.2080006_at_scalableinformatics.com" -->
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
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 22:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15498.php">Mohamed Husain A.K: "[OMPI users] Serial Rapid IO plug in ?"</a>
<li><strong>Previous message:</strong> <a href="15496.php">Jeffrey A Cummings: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/1/2011 5:02 PM, Jeffrey A Cummings wrote:
<br>
<span class="quotelev1">&gt; I use OpenMPI on a variety of platforms: stand-alone servers running
</span><br>
<span class="quotelev1">&gt; Solaris on sparc boxes and Linux (mostly CentOS) on AMD/Intel boxes,
</span><br>
<span class="quotelev1">&gt; also Linux (again CentOS) on large clusters of AMD/Intel boxes. These
</span><br>
<span class="quotelev1">&gt; platforms all have some version of the 1.3 OpenMPI stream. I recently
</span><br>
<span class="quotelev1">&gt; requested an upgrade on all systems to 1.4.3 (for production work) and
</span><br>
<span class="quotelev1">&gt; 1.5.1 (for experimentation). I'm getting a lot of push back from the
</span><br>
<span class="quotelev1">&gt; SysAdmin folks claiming that OpenMPI is closely intertwined with the
</span><br>
<span class="quotelev1">&gt; specific version of the operating system and/or other system software
</span><br>
<span class="quotelev1">&gt; (i.e., Rocks on the clusters). I need to know if they are telling me the
</span><br>
<span class="quotelev1">&gt; truth or if they're just making excuses to avoid the work. To state my
</span><br>
<span class="quotelev1">&gt; question another way: Apparently each release of Linux and/or Rocks
</span><br>
<span class="quotelev1">&gt; comes with some version of OpenMPI bundled in. Is it dangerous in some
</span><br>
<span class="quotelev1">&gt; way to upgrade to a newer version of OpenMPI? Thanks in advance for any
</span><br>
<span class="quotelev1">&gt; insight anyone can provide.
</span><br>
<p>Jeff:
<br>
<p>&nbsp;&nbsp;&nbsp;The issue is that the way Rocks integrates MPI stacks, it is quite 
<br>
hard to upgrade the baseline stacks.
<br>
<p>&nbsp;&nbsp;&nbsp;This said, there is no issue in placing new stacks in 
<br>
/shared/openmpi/version/compiler/  or similar.  We've done this for many 
<br>
of our Rocks customers.
<br>
<p>&nbsp;&nbsp;&nbsp;For Rocks, the admins usually need RPMs, then they have to work on 
<br>
some extend-compute.xml magic to make it work.  You can do this, or as I 
<br>
did when we ran on a shared Rocks cluster that the admin was ... er ... 
<br>
reluctant ... to make needed changes.  You can easily install it to your 
<br>
home directory.  No admin needed for this.  Worked nicely.  Solved our 
<br>
problems.
<br>
<p>Regards,
<br>
<p>Joe
<br>
<p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics Inc.,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
phone: +1 734 786 8423
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15498.php">Mohamed Husain A.K: "[OMPI users] Serial Rapid IO plug in ?"</a>
<li><strong>Previous message:</strong> <a href="15496.php">Jeffrey A Cummings: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
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
