<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb  4 12:46:14 2006" -->
<!-- isoreceived="20060204174614" -->
<!-- sent="Sat, 4 Feb 2006 11:46:08 -0600" -->
<!-- isosent="20060204174608" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring process startup on OS X" -->
<!-- id="ACF91234-B6FE-43C5-B765-306A847B19E2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="07BCA746-57BF-4939-BA1D-A607531E7B3E_at_mac.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-04 12:46:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0582.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0580.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2006, at 3:39 PM, Drew McCormack wrote:
<br>
<p><span class="quotelev1">&gt; Hello Brian,
</span><br>
<span class="quotelev1">&gt; I sent the email below several days ago. I thought maybe you had  
</span><br>
<span class="quotelev1">&gt; missed it, so I'm sending it again. Maybe you deliberately ignored  
</span><br>
<span class="quotelev1">&gt; it or didn't have time to answer. That's fine, feel free to ignore  
</span><br>
<span class="quotelev1">&gt; it again ;-)
</span><br>
<p>Sorry about the slow response, but last week was our quarterly Open  
<br>
MPI meeting.  Responses to mailing lists are (unfortunately) a bit  
<br>
slower when we're all spending really long days trying to improve  
<br>
Open MPI :).
<br>
<p><span class="quotelev1">&gt; Thanks for the information. I have been playing with OpenMPI and  
</span><br>
<span class="quotelev1">&gt; Xgrid a little this week, and hadn't had much luck. This email  
</span><br>
<span class="quotelev1">&gt; helps a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The XGrid starter currently looks for a couple of environment
</span><br>
<span class="quotelev2">&gt;&gt; variables to decide if it can be used.  Currently, the XGrid process
</span><br>
<span class="quotelev2">&gt;&gt; starter only supports the basic password authentication to the
</span><br>
<span class="quotelev2">&gt;&gt; controller.  As such, the two environment variables the XGrid starter
</span><br>
<span class="quotelev2">&gt;&gt; looks for are XGRID_CONTROLLER_HOSTNAME and
</span><br>
<span class="quotelev2">&gt;&gt; XGRID_CONTROLLER_PASSWORD.  These are the same environment variables
</span><br>
<span class="quotelev2">&gt;&gt; that the 'xgrid' command-line submission process uses.
</span><br>
<span class="quotelev1">&gt; Do you mean on the client/submission machine, or the agent machines  
</span><br>
<span class="quotelev1">&gt; where the applications are run?
</span><br>
<span class="quotelev1">&gt; I guess you mean the client, right?
</span><br>
<span class="quotelev1">&gt; So, I guess I have to make sure I set these environment variables,  
</span><br>
<span class="quotelev1">&gt; rather than just using the -p and -h xgrid command options.
</span><br>
<p>Correct, these should be set on the client / submission machine.  The  
<br>
agent machines have their own authentication mechanism to connect to  
<br>
controller.
<br>
<p><span class="quotelev1">&gt; The reason I am a little confused is that I am pretty sure with our  
</span><br>
<span class="quotelev1">&gt; other MPI implementations, that mpirun gets called on the  
</span><br>
<span class="quotelev1">&gt; computational node after the queueing system has started the job  
</span><br>
<span class="quotelev1">&gt; running. What you seem to be indicating is that mpirun replaces the  
</span><br>
<span class="quotelev1">&gt; queueing system call in this case, and is issued from the  
</span><br>
<span class="quotelev1">&gt; submission node.
</span><br>
<p>Yes, this is one place that our XGrid support is a little different  
<br>
than other batch queuing systems.  At the time that our XGrid support  
<br>
was written, XGrid did not provide a mechanism for running a script  
<br>
in the traditional sense (like PBS or SGE might do).  We might  
<br>
eventually support a different submission mechanism to better allow  
<br>
integration of Open MPI into user applications, but this is still in  
<br>
the development phase.
<br>
<p>We would love to hear any comments on how people want to use Open MPI  
<br>
and XGrid together.  I can't promise we'll implement all the ideas,  
<br>
but it will help give us direction on where to spend our development  
<br>
time.
<br>
<p><span class="quotelev2">&gt;&gt; The restriction that Open MPI be installed on all nodes is a slightly
</span><br>
<span class="quotelev2">&gt;&gt; more difficult problem.  Open MPI usually builds as a shared library
</span><br>
<span class="quotelev2">&gt;&gt; with a bunch of dynamically loaded shared objects, complicating the
</span><br>
<span class="quotelev2">&gt;&gt; list of what must be migrated.  Even if statically linked, there is
</span><br>
<span class="quotelev2">&gt;&gt; still a helper process we have to migrate out with your application
</span><br>
<span class="quotelev2">&gt;&gt; (to deal with standard I/O in the expected way, along with some other
</span><br>
<span class="quotelev2">&gt;&gt; features that are much easier to implement with a helper daemon).
</span><br>
<span class="quotelev1">&gt; I am happy to install OpenMPI everywhere at this point, but in the  
</span><br>
<span class="quotelev1">&gt; long run, it would be great to be able to run OpenMPI/Xgrid apps  
</span><br>
<span class="quotelev1">&gt; without requiring preinstalled components, even if the daemon needs  
</span><br>
<span class="quotelev1">&gt; to be sent via the network.
</span><br>
<p>Yes - this is probably a year or so out, but it is something I would  
<br>
like to implement.  Of course, it would mean giving up the ability to  
<br>
build Open MPI as a set of shared libraries, so some flexibility  
<br>
would be lost in the process.
<br>
<p><span class="quotelev2">&gt;&gt; To use the XGrid system, make sure that the XGrid controller is
</span><br>
<span class="quotelev2">&gt;&gt; properly configured to use password-based authentication.  Then
</span><br>
<span class="quotelev2">&gt;&gt; issues the following commands (assuming tcsh)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      % setenv XGRID_CONTROLLER_HOSTNAME mycomputer.apple.com
</span><br>
<span class="quotelev2">&gt;&gt;      % setenv XGRID_CONTROLLER_PASSWORD pword
</span><br>
<span class="quotelev2">&gt;&gt;      % mpirun -np X ./myapp
</span><br>
<span class="quotelev1">&gt; I am assuming this is from the client/submission machine. So mpirun  
</span><br>
<span class="quotelev1">&gt; replaces the xgrid command. I guess I never need to use the xgrid  
</span><br>
<span class="quotelev1">&gt; command for OpenMPI/Xgrid jobs (?)
</span><br>
<p>Correct - you use mpirun instead of the xgrid command to submit jobs.
<br>
<p><span class="quotelev1">&gt; If this is the case, my next question is, how do I supply the usual  
</span><br>
<span class="quotelev1">&gt; xgrid options, such as working directory, standard input file, etc?  
</span><br>
<span class="quotelev1">&gt; Or is that simply not possible?
</span><br>
<span class="quotelev1">&gt; Do I simply have to have some other way (eg ssh) to get files to/ 
</span><br>
<span class="quotelev1">&gt; from agent machines, like I would for a batch system like PBS?
</span><br>
<p>It looks like I never implemented those options (shame on me).  I've  
<br>
added that to my to-do list, although I can't give an accurate time- 
<br>
table for implementation at this point.  One thing to note is that  
<br>
rather than using XGrid's standard input/output forwarding services,  
<br>
we use Open MPI's services.  So if you do:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 2 ./myapp &lt; foo.txt
<br>
<p>the result will be that rank 0 in the job will be able to read the  
<br>
contents of foo.txt from standard input.  There is a small bug in  
<br>
this that will be fixed in 1.0.2 (that applies to all scenarios, not  
<br>
just XGrid).  Also, all standard output / standard error is output  
<br>
through mpirun's standard output / standard error, so you can do  
<br>
something like:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 2 ./myapp &lt; foo.txt &gt; bar.txt
<br>
<p>to redirect foo.txt into rank 0's standard input and redirect all  
<br>
standard output from all ranks into the file bar.txt.
<br>
<p><span class="quotelev1">&gt; If I can get it all working, I will write up a few instructions on  
</span><br>
<span class="quotelev1">&gt; my web site, which may take the pressure of you to generate some docs.
</span><br>
<p>Thanks.  I don't think it gets me off the hook with my boss ;), but  
<br>
the more resources, the better for the Mac community.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0582.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0580.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
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
