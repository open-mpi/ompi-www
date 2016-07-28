<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 30 16:39:07 2006" -->
<!-- isoreceived="20060130213907" -->
<!-- sent="Mon, 30 Jan 2006 22:39:03 +0100" -->
<!-- isosent="20060130213903" -->
<!-- name="Drew McCormack" -->
<!-- email="drewmccormack_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring process startup on OS X" -->
<!-- id="74B1F355-AB32-4D48-9FC4-07E9D7EF11C6_at_mac.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[O-MPI users] Configuring process startup on OS X" -->
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
<strong>From:</strong> Drew McCormack (<em>drewmccormack_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-30 16:39:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0544.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Brian Barrett: "Re: [O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
<li><strong>Maybe in reply to:</strong> <a href="0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0581.php">Brian Barrett: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Brian,
<br>
Thanks for the information. I have been playing with OpenMPI and  
<br>
Xgrid a little this week, and hadn't had much luck. This email helps  
<br>
a lot.
<br>
<p><span class="quotelev1">&gt; The XGrid starter currently looks for a couple of environment
</span><br>
<span class="quotelev1">&gt; variables to decide if it can be used.  Currently, the XGrid process
</span><br>
<span class="quotelev1">&gt; starter only supports the basic password authentication to the
</span><br>
<span class="quotelev1">&gt; controller.  As such, the two environment variables the XGrid starter
</span><br>
<span class="quotelev1">&gt; looks for are XGRID_CONTROLLER_HOSTNAME and
</span><br>
<span class="quotelev1">&gt; XGRID_CONTROLLER_PASSWORD.  These are the same environment variables
</span><br>
<span class="quotelev1">&gt; that the 'xgrid' command-line submission process uses.
</span><br>
Do you mean on the client/submission machine, or the agent machines  
<br>
where the applications are run?
<br>
I guess you mean the client, right?
<br>
So, I guess I have to make sure I set these environment variables,  
<br>
rather than just using the -p and -h xgrid command options.
<br>
<p>The reason I am a little confused is that I am pretty sure with our  
<br>
other MPI implementations, that mpirun gets called on the  
<br>
computational node after the queueing system has started the job  
<br>
running. What you seem to be indicating is that mpirun replaces the  
<br>
queueing system call in this case, and is issued from the submission  
<br>
node.
<br>
<p><span class="quotelev1">&gt; The restriction that Open MPI be installed on all nodes is a slightly
</span><br>
<span class="quotelev1">&gt; more difficult problem.  Open MPI usually builds as a shared library
</span><br>
<span class="quotelev1">&gt; with a bunch of dynamically loaded shared objects, complicating the
</span><br>
<span class="quotelev1">&gt; list of what must be migrated.  Even if statically linked, there is
</span><br>
<span class="quotelev1">&gt; still a helper process we have to migrate out with your application
</span><br>
<span class="quotelev1">&gt; (to deal with standard I/O in the expected way, along with some other
</span><br>
<span class="quotelev1">&gt; features that are much easier to implement with a helper daemon).
</span><br>
I am happy to install OpenMPI everywhere at this point, but in the  
<br>
long run, it would be great to be able to run OpenMPI/Xgrid apps  
<br>
without requiring preinstalled components, even if the daemon needs  
<br>
to be sent via the network.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To use the XGrid system, make sure that the XGrid controller is
</span><br>
<span class="quotelev1">&gt; properly configured to use password-based authentication.  Then
</span><br>
<span class="quotelev1">&gt; issues the following commands (assuming tcsh)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      % setenv XGRID_CONTROLLER_HOSTNAME mycomputer.apple.com
</span><br>
<span class="quotelev1">&gt;      % setenv XGRID_CONTROLLER_PASSWORD pword
</span><br>
<span class="quotelev1">&gt;      % mpirun -np X ./myapp
</span><br>
I am assuming this is from the client/submission machine. So mpirun  
<br>
replaces the xgrid command. I guess I never need to use the xgrid  
<br>
command for OpenMPI/Xgrid jobs (?)
<br>
<p>If this is the case, my next question is, how do I supply the usual  
<br>
xgrid options, such as working directory, standard input file, etc?  
<br>
Or is that simply not possible?
<br>
Do I simply have to have some other way (eg ssh) to get files to/from  
<br>
agent machines, like I would for a batch system like PBS?
<br>
<p>If I can get it all working, I will write up a few instructions on my  
<br>
web site, which may take the pressure of you to generate some docs.
<br>
<p>Thanks for the info, and the Xgrid port!
<br>
<p>Regards,
<br>
Drew
<br>
<p>---------------------------------------------------------
<br>
Drew McCormack
<br>
<p>www.maniacalextent.com
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0544.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Brian Barrett: "Re: [O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
<li><strong>Maybe in reply to:</strong> <a href="0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0581.php">Brian Barrett: "Re: [O-MPI users] Configuring process startup on OS X"</a>
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
