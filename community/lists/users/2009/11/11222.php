<?
$subject_val = "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 15:39:42 2009" -->
<!-- isoreceived="20091117203942" -->
<!-- sent="Tue, 17 Nov 2009 14:39:32 -0600" -->
<!-- isosent="20091117203932" -->
<!-- name="Michael Sternberg" -->
<!-- email="sternberg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)" -->
<!-- id="7DD0AB03-2CD9-4A2A-9742-27352D3B4872_at_anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F9E6BCE6-A626-48E1-B6D8-129DA063D2B6_at_anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)<br>
<strong>From:</strong> Michael Sternberg (<em>sternberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 15:39:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11223.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11221.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11221.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11223.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 17, 2009, at 10:17 , Michael Sternberg wrote:
<br>
<span class="quotelev1">&gt; On Nov 17, 2009, at 9:10 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not exactly. It completely depends on how Torque was setup - OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; isn't forwarding the environment. Torque is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I actually tried compiling OMPI with the tm interface a couple of  
</span><br>
<span class="quotelev1">&gt; versions back for both packages but ran into memory trouble, which  
</span><br>
<span class="quotelev1">&gt; is why I didn't pursue this.  With torque-2.4.x out and OpenMPI  
</span><br>
<span class="quotelev1">&gt; getting close to 1.3.4 I'll try again.
</span><br>
<p>Follow-up:  I recompiled OpenMPI-1.3.2 &quot;--with-tm&quot; (from torque-2.3.6)  
<br>
and, lo and behold, environment variables and modules now are passed  
<br>
across nodes, which thus includes custom modules loaded in the job  
<br>
file.   Darn, that was an old hang-up!
<br>
<p>The variables passed do include (unsurprisingly) $HOSTNAME, but I can  
<br>
live with that:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;login4 $ qsub -l nodes=2:ppn=1 -I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qsub: waiting for job 34717.mds01 to start
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qsub: job 34717.mds01 ready
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n102 $ mpirun hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n102
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n091
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n102 $ mpirun env | grep HOSTNAME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOSTNAME=n102
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOSTNAME=n102
<br>
<p>Ralph, David - thank you for the pointers!
<br>
<p><p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11223.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11221.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11221.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11223.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
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
