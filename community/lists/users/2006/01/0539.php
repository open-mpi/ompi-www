<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 30 08:46:11 2006" -->
<!-- isoreceived="20060130134611" -->
<!-- sent="Mon, 30 Jan 2006 08:44:28 -0500" -->
<!-- isosent="20060130134428" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring process startup on OS X" -->
<!-- id="D3BD3742-2CD9-40C5-95DB-0BCDCB3782FC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="s3dcdab3.023_at_gwcl-21.scu.edu" -->
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
<strong>Date:</strong> 2006-01-30 08:44:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0540.php">Michael Kluskens: "[O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
<li><strong>Previous message:</strong> <a href="0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
<li><strong>In reply to:</strong> <a href="0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0562.php">Brian Granger: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0562.php">Brian Granger: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 29, 2006, at 6:09 PM, Brian Granger wrote:
<br>
<p><span class="quotelev1">&gt; I have compiled and installed OpenMPI on Mac OS X.  As I  
</span><br>
<span class="quotelev1">&gt; undertstand it, I can have mpirun start jobs using either ssh/xgrid  
</span><br>
<span class="quotelev1">&gt; or any other system (PBS, etc.) that I have installed.  How can I  
</span><br>
<span class="quotelev1">&gt; configure which method is used?  What process does ompi/orte go  
</span><br>
<span class="quotelev1">&gt; through to select which method to use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently I am mainly interested in ssh/xgrid at this point, but  
</span><br>
<span class="quotelev1">&gt; PBS soon.  How do these work?  From poking around it looks like  
</span><br>
<span class="quotelev1">&gt; there are lots of MCA parameters for the ras/pls modules that are  
</span><br>
<span class="quotelev1">&gt; relevant.  But there is very little documentation about what they  
</span><br>
<span class="quotelev1">&gt; all do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone give me pointers about where to look for more  
</span><br>
<span class="quotelev1">&gt; documentation?
</span><br>
<p>Unfortunately (shame on me) there isn't any documentation on the  
<br>
XGrid support at this time.  It's on my to-do list, but so are a lot  
<br>
of other things.  I've included some notes below that should help --  
<br>
if not, feel free to ask all the questions you want.  It will help to  
<br>
know what information people expect.
<br>
<p>Open MPI does a run-time priority ranking to determine which process  
<br>
starter is used.  ssh/rsh has the lowest ranking, and XGrid, PBS, and  
<br>
SLURM all have a rating that is higher than ssh/rsh.  However, the  
<br>
XGrid, PBS, and SLURM components all only allow themselves to be  
<br>
selected if some other condition is met that indicates that they  
<br>
should be used.  For PBS and SLURM, this is the environment variables  
<br>
set by the batch scheduler indicating that a PBS (or SLURM) job is  
<br>
being executed.
<br>
<p>The XGrid starter currently looks for a couple of environment  
<br>
variables to decide if it can be used.  Currently, the XGrid process  
<br>
starter only supports the basic password authentication to the  
<br>
controller.  As such, the two environment variables the XGrid starter  
<br>
looks for are XGRID_CONTROLLER_HOSTNAME and  
<br>
XGRID_CONTROLLER_PASSWORD.  These are the same environment variables  
<br>
that the 'xgrid' command-line submission process uses.
<br>
<p>The XGrid support in Open MPI is currently in a beta stage, and has a  
<br>
couple of limitations that might make it unappealing to you.  It  
<br>
requires that Open MPI be installed on all the nodes, and be in the  
<br>
default path for user 'nobody', which pretty much means installing it  
<br>
in /usr.  This is because it only supports password authentication  
<br>
(and not Kerboeros authentication), so all jobs will run as nobody.   
<br>
If there is interest, it would not be hard to add Kerberos  
<br>
authentication support.  The XGridFoundation framework is only  
<br>
available for 32 bit PPC / x86, so the starter will only build if  
<br>
Open MPI is building in 32 bit mode.  We currently require all Open  
<br>
MPI processes (run-time and application) be the same endianness and  
<br>
pointer size, so all user processes must be 32 bit applications.  We  
<br>
intend on removing this restriction some time in the future, allowing  
<br>
a 32 bit runtime and 64 bit user application.
<br>
<p>The restriction that Open MPI be installed on all nodes is a slightly  
<br>
more difficult problem.  Open MPI usually builds as a shared library  
<br>
with a bunch of dynamically loaded shared objects, complicating the  
<br>
list of what must be migrated.  Even if statically linked, there is  
<br>
still a helper process we have to migrate out with your application  
<br>
(to deal with standard I/O in the expected way, along with some other  
<br>
features that are much easier to implement with a helper daemon).
<br>
<p>To use the XGrid system, make sure that the XGrid controller is  
<br>
properly configured to use password-based authentication.  Then  
<br>
issues the following commands (assuming tcsh)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% setenv XGRID_CONTROLLER_HOSTNAME mycomputer.apple.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% setenv XGRID_CONTROLLER_PASSWORD pword
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun -np X ./myapp
<br>
<p>XGrid does not give users a way to know how many nodes are  
<br>
available.  Open MPI assumes that if a user requested X nodes, there  
<br>
will eventually be X nodes available to run on.  SO if X is greater  
<br>
than the available number of nodes, mpirun will happily submit that  
<br>
request to XGrid and XGrid will happily queue the job until X number  
<br>
of nodes are available.  I wish there was a better way to handle that  
<br>
situation, but there doesn't seem to be.  I've talked a little bit  
<br>
with the XGrid developers about improving this.  Since XGrid is  
<br>
intended to be used in environments where machines come and go at  
<br>
will, it can be difficult to determine how many agents are up and  
<br>
running -- that isn't a static answer.  I think at one point there  
<br>
was talk of adding a flag to the job submission that would bounce the  
<br>
job out of the queue if some period of time (possibly including  
<br>
immediately) passed without the job being queued.  I don't know if  
<br>
anything ever came of that discussion.
<br>
<p>There is really only one MCA parameter that users should ever have to  
<br>
adjust for the XGrid starter.  The MCA parameter  
<br>
&quot;pls_xgrid_job_delete&quot; defaults to 1 and if it is non-zero, jobs will  
<br>
be removed from the list of executed jobs that have completed (the  
<br>
XGrid controller maintains this list).  If jobs aren't deleted by  
<br>
Open MPI at completion, their results will remain in the XGrid  
<br>
contoller's data store until the user manually deletes them.
<br>
<p>As for the rsh/ssh component, there are a couple of MCA parameters  
<br>
that might be of use to most users.
<br>
<p>&nbsp;&nbsp;&nbsp;pls_rsh_num_concurrent: Open MPI tries to fork off this number of  
<br>
rsh/ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instances before waiting for some to complete to move on.  This  
<br>
number
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defaults to 128.  On platforms with low per-user process or file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descriptor counts, this may have to be slightly lower.  On  
<br>
really large
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;machines, it's possible start-up performance would increase by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;increasing this number
<br>
&nbsp;&nbsp;&nbsp;pls_rsh_assume_same_shell: Open MPI will assume the same shell is  
<br>
used on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the remote nodes as on the current node (ie, they are all tcsh,  
<br>
bash,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ksh, etc.) if this is non-zero.  Otherwise, we must log in to  
<br>
each node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;twice, the first time to determine which shell is used on the  
<br>
remote
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nodes.
<br>
&nbsp;&nbsp;&nbsp;plsh_rsh_agent: a colon (:) separated list of startup agents to  
<br>
attempt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to use.  Open MPI will use the first one available on the starting
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node.  If a starter is available but doesn't work, an error will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result.  The default value is 'ssh : rsh', meaning that ssh  
<br>
will be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used unless it isn't installed, in which case rsh will be used.
<br>
<p>Please let me know if you have more questions.
<br>
<p>Brian
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
<li><strong>Next message:</strong> <a href="0540.php">Michael Kluskens: "[O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
<li><strong>Previous message:</strong> <a href="0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
<li><strong>In reply to:</strong> <a href="0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0562.php">Brian Granger: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0562.php">Brian Granger: "Re: [O-MPI users] Configuring process startup on OS X"</a>
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
