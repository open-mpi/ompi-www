<?
$subject_val = "Re: [OMPI users] allow job to survive process death";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 10:10:39 2011" -->
<!-- isoreceived="20110127151039" -->
<!-- sent="Thu, 27 Jan 2011 10:10:31 -0500" -->
<!-- isosent="20110127151031" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] allow job to survive process death" -->
<!-- id="7949E28F-2155-431B-801D-99CDC269216F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EE5503FF-3EC8-4AD3-86CA-74FABDBBCE14_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2011-01-27 10:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15441.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Previous message:</strong> <a href="15439.php">Ralph Castain: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>In reply to:</strong> <a href="15438.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15441.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Reply:</strong> <a href="15441.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 27, 2011, at 9:47 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 27.01.2011 um 15:23 schrieb Joshua Hursey:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The current version of Open MPI does not support continued operation of an MPI application after process failure within a job. If a process dies, so will the MPI job. Note that this is true of many MPI implementations out there at the moment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At Oak Ridge National Laboratory, we are working on a version of Open MPI that will be able to run-through process failure, if the application wishes to do so. The semantics and interfaces needed to support this functionality are being actively developed by the MPI Forums Fault Tolerance Working Group, and can be found at the wiki page below:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had a look at this document, but what is really covered - the application has to react on the notification of a failed rank and act appropriate on its own?
</span><br>
<p>Yes. This is to support application based fault tolerance (ABFT). Libraries could be developed on top of these semantics to hide some of the fault handing. The purpose is to enable fault tolerant MPI applications and libraries to be built on top of MPI.
<br>
<p>This document only covers run-through stabilization, not process recovery, at the moment. So the application will have well defined semantics to allow it to continue processing without the failed process. Recovering the failed process is not specified in this document. That is the subject of a supplemental document in preparation - the two proposals are meant to be complementary and build upon one another.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having a true ability to survive a dying process (i.e. rank) which might be computing already for hours would mean to have some kind of &quot;rank RAID&quot; or &quot;rank Parchive&quot;. E.g. start 12 ranks when you need 10 - what ever 2 ranks are failing, your job will be ready in time.
</span><br>
<p>Yes, that is one possible technique. So once a process failure occurs, the application is notified via the existing error handling mechanisms. The application is then responsible for determining how best to recover from that process failure. This could include using MPI_Comm_spawn to create new processes (useful in manager/worker applications), recovering the state from an in-memory checksum, using spare processes in the communicator, rolling back some/all ranks to an application level checkpoint, ignoring the failure and allowing the residual error to increase, aborting the job or a single sub-communicator, ... the list goes on. But the purpose of the proposal is to allow an application or library to start building such techniques based on portable semantics and well defined interfaces.
<br>
<p>Does that help clarify?
<br>
<p><p>If you would like to discuss the developing proposals further or have input on how to make it better, I would suggest moving the discussion to the MPI3-ft mailing list so other groups can participate that do not normally follow the Open MPI lists. The mailing list information is below:
<br>
&nbsp;&nbsp;<a href="http://lists.mpi-forum.org/mailman/listinfo.cgi/mpi3-ft">http://lists.mpi-forum.org/mailman/listinfo.cgi/mpi3-ft</a>
<br>
<p><p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This work is on-going, but once we have a stable prototype we will assess how to bring it back to the mainline Open MPI trunk. For the moment, there is no public release of this branch, but once there is we will be sure to announce it on the appropriate Open MPI mailing list for folks to start playing around with it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 27, 2011, at 9:11 AM, Kirk Stako wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was wondering what support Open MPI has for allowing a job to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; continue running when one or more processes in the job die
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unexpectedly? Is there a special mpirun flag for this? Any other ways?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems obvious that collectives will fail once a process dies, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would it be possible to create a new group (if you knew which ranks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are dead) that excludes the dead processes - then turn this group into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a working communicator?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kirk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="15441.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Previous message:</strong> <a href="15439.php">Ralph Castain: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>In reply to:</strong> <a href="15438.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15441.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Reply:</strong> <a href="15441.php">Reuti: "Re: [OMPI users] allow job to survive process death"</a>
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
