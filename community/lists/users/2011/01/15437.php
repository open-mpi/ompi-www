<?
$subject_val = "Re: [OMPI users] allow job to survive process death";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 09:24:00 2011" -->
<!-- isoreceived="20110127142400" -->
<!-- sent="Thu, 27 Jan 2011 09:23:52 -0500" -->
<!-- isosent="20110127142352" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] allow job to survive process death" -->
<!-- id="0DB11D13-BBEF-411C-B224-D6D0C43BEF7E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikqCHDa0J-LHgaXV68w_4tvsCbK0L0kstqHQz+p_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] allow job to survive process death<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 09:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15438.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Previous message:</strong> <a href="15436.php">Kirk Stako: "[OMPI users] allow job to survive process death"</a>
<li><strong>In reply to:</strong> <a href="15436.php">Kirk Stako: "[OMPI users] allow job to survive process death"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15438.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Reply:</strong> <a href="15438.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The current version of Open MPI does not support continued operation of an MPI application after process failure within a job. If a process dies, so will the MPI job. Note that this is true of many MPI implementations out there at the moment.
<br>
<p>At Oak Ridge National Laboratory, we are working on a version of Open MPI that will be able to run-through process failure, if the application wishes to do so. The semantics and interfaces needed to support this functionality are being actively developed by the MPI Forums Fault Tolerance Working Group, and can be found at the wiki page below:
<br>
&nbsp;&nbsp;<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization</a>
<br>
<p>This work is on-going, but once we have a stable prototype we will assess how to bring it back to the mainline Open MPI trunk. For the moment, there is no public release of this branch, but once there is we will be sure to announce it on the appropriate Open MPI mailing list for folks to start playing around with it.
<br>
<p>-- Josh
<br>
<p>On Jan 27, 2011, at 9:11 AM, Kirk Stako wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was wondering what support Open MPI has for allowing a job to
</span><br>
<span class="quotelev1">&gt; continue running when one or more processes in the job die
</span><br>
<span class="quotelev1">&gt; unexpectedly? Is there a special mpirun flag for this? Any other ways?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems obvious that collectives will fail once a process dies, but
</span><br>
<span class="quotelev1">&gt; would it be possible to create a new group (if you knew which ranks
</span><br>
<span class="quotelev1">&gt; are dead) that excludes the dead processes - then turn this group into
</span><br>
<span class="quotelev1">&gt; a working communicator?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Kirk
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15438.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Previous message:</strong> <a href="15436.php">Kirk Stako: "[OMPI users] allow job to survive process death"</a>
<li><strong>In reply to:</strong> <a href="15436.php">Kirk Stako: "[OMPI users] allow job to survive process death"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15438.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Reply:</strong> <a href="15438.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
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
