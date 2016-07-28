<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 14:52:58 2006" -->
<!-- isoreceived="20060202195258" -->
<!-- sent="Thu, 02 Feb 2006 11:39:35 -0800" -->
<!-- isosent="20060202193935" -->
<!-- name="Brian Granger" -->
<!-- email="bgranger_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring process startup on OS X" -->
<!-- id="DCE72CF2-C5EB-4B65-A3F5-8FF9BBBC5AF5_at_scu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D3BD3742-2CD9-40C5-95DB-0BCDCB3782FC_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Granger (<em>bgranger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 14:39:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0563.php">George Bosilca: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0561.php">Brian Granger: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0539.php">Brian Barrett: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0543.php">Drew McCormack: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Excellent.  This definitely gives me enough information to get  
<br>
going.  I will give feeback as I try it out.
<br>
<p>Brian
<br>
<p>On Jan 30, 2006, at 5:44 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 29, 2006, at 6:09 PM, Brian Granger wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have compiled and installed OpenMPI on Mac OS X.  As I
</span><br>
<span class="quotelev2">&gt;&gt; undertstand it, I can have mpirun start jobs using either ssh/xgrid
</span><br>
<span class="quotelev2">&gt;&gt; or any other system (PBS, etc.) that I have installed.  How can I
</span><br>
<span class="quotelev2">&gt;&gt; configure which method is used?  What process does ompi/orte go
</span><br>
<span class="quotelev2">&gt;&gt; through to select which method to use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently I am mainly interested in ssh/xgrid at this point, but
</span><br>
<span class="quotelev2">&gt;&gt; PBS soon.  How do these work?  From poking around it looks like
</span><br>
<span class="quotelev2">&gt;&gt; there are lots of MCA parameters for the ras/pls modules that are
</span><br>
<span class="quotelev2">&gt;&gt; relevant.  But there is very little documentation about what they
</span><br>
<span class="quotelev2">&gt;&gt; all do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone give me pointers about where to look for more
</span><br>
<span class="quotelev2">&gt;&gt; documentation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately (shame on me) there isn't any documentation on the
</span><br>
<span class="quotelev1">&gt; XGrid support at this time.  It's on my to-do list, but so are a lot
</span><br>
<span class="quotelev1">&gt; of other things.  I've included some notes below that should help --
</span><br>
<span class="quotelev1">&gt; if not, feel free to ask all the questions you want.  It will help to
</span><br>
<span class="quotelev1">&gt; know what information people expect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI does a run-time priority ranking to determine which process
</span><br>
<span class="quotelev1">&gt; starter is used.  ssh/rsh has the lowest ranking, and XGrid, PBS, and
</span><br>
<span class="quotelev1">&gt; SLURM all have a rating that is higher than ssh/rsh.  However, the
</span><br>
<span class="quotelev1">&gt; XGrid, PBS, and SLURM components all only allow themselves to be
</span><br>
<span class="quotelev1">&gt; selected if some other condition is met that indicates that they
</span><br>
<span class="quotelev1">&gt; should be used.  For PBS and SLURM, this is the environment variables
</span><br>
<span class="quotelev1">&gt; set by the batch scheduler indicating that a PBS (or SLURM) job is
</span><br>
<span class="quotelev1">&gt; being executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The XGrid starter currently looks for a couple of environment
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The XGrid support in Open MPI is currently in a beta stage, and has a
</span><br>
<span class="quotelev1">&gt; couple of limitations that might make it unappealing to you.  It
</span><br>
<span class="quotelev1">&gt; requires that Open MPI be installed on all the nodes, and be in the
</span><br>
<span class="quotelev1">&gt; default path for user 'nobody', which pretty much means installing it
</span><br>
<span class="quotelev1">&gt; in /usr.  This is because it only supports password authentication
</span><br>
<span class="quotelev1">&gt; (and not Kerboeros authentication), so all jobs will run as nobody.
</span><br>
<span class="quotelev1">&gt; If there is interest, it would not be hard to add Kerberos
</span><br>
<span class="quotelev1">&gt; authentication support.  The XGridFoundation framework is only
</span><br>
<span class="quotelev1">&gt; available for 32 bit PPC / x86, so the starter will only build if
</span><br>
<span class="quotelev1">&gt; Open MPI is building in 32 bit mode.  We currently require all Open
</span><br>
<span class="quotelev1">&gt; MPI processes (run-time and application) be the same endianness and
</span><br>
<span class="quotelev1">&gt; pointer size, so all user processes must be 32 bit applications.  We
</span><br>
<span class="quotelev1">&gt; intend on removing this restriction some time in the future, allowing
</span><br>
<span class="quotelev1">&gt; a 32 bit runtime and 64 bit user application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The restriction that Open MPI be installed on all nodes is a slightly
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; XGrid does not give users a way to know how many nodes are
</span><br>
<span class="quotelev1">&gt; available.  Open MPI assumes that if a user requested X nodes, there
</span><br>
<span class="quotelev1">&gt; will eventually be X nodes available to run on.  SO if X is greater
</span><br>
<span class="quotelev1">&gt; than the available number of nodes, mpirun will happily submit that
</span><br>
<span class="quotelev1">&gt; request to XGrid and XGrid will happily queue the job until X number
</span><br>
<span class="quotelev1">&gt; of nodes are available.  I wish there was a better way to handle that
</span><br>
<span class="quotelev1">&gt; situation, but there doesn't seem to be.  I've talked a little bit
</span><br>
<span class="quotelev1">&gt; with the XGrid developers about improving this.  Since XGrid is
</span><br>
<span class="quotelev1">&gt; intended to be used in environments where machines come and go at
</span><br>
<span class="quotelev1">&gt; will, it can be difficult to determine how many agents are up and
</span><br>
<span class="quotelev1">&gt; running -- that isn't a static answer.  I think at one point there
</span><br>
<span class="quotelev1">&gt; was talk of adding a flag to the job submission that would bounce the
</span><br>
<span class="quotelev1">&gt; job out of the queue if some period of time (possibly including
</span><br>
<span class="quotelev1">&gt; immediately) passed without the job being queued.  I don't know if
</span><br>
<span class="quotelev1">&gt; anything ever came of that discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is really only one MCA parameter that users should ever have to
</span><br>
<span class="quotelev1">&gt; adjust for the XGrid starter.  The MCA parameter
</span><br>
<span class="quotelev1">&gt; &quot;pls_xgrid_job_delete&quot; defaults to 1 and if it is non-zero, jobs will
</span><br>
<span class="quotelev1">&gt; be removed from the list of executed jobs that have completed (the
</span><br>
<span class="quotelev1">&gt; XGrid controller maintains this list).  If jobs aren't deleted by
</span><br>
<span class="quotelev1">&gt; Open MPI at completion, their results will remain in the XGrid
</span><br>
<span class="quotelev1">&gt; contoller's data store until the user manually deletes them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the rsh/ssh component, there are a couple of MCA parameters
</span><br>
<span class="quotelev1">&gt; that might be of use to most users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    pls_rsh_num_concurrent: Open MPI tries to fork off this number of
</span><br>
<span class="quotelev1">&gt; rsh/ssh
</span><br>
<span class="quotelev1">&gt;       instances before waiting for some to complete to move on.  This
</span><br>
<span class="quotelev1">&gt; number
</span><br>
<span class="quotelev1">&gt;       defaults to 128.  On platforms with low per-user process or file
</span><br>
<span class="quotelev1">&gt;       descriptor counts, this may have to be slightly lower.  On
</span><br>
<span class="quotelev1">&gt; really large
</span><br>
<span class="quotelev1">&gt;       machines, it's possible start-up performance would increase by
</span><br>
<span class="quotelev1">&gt;       increasing this number
</span><br>
<span class="quotelev1">&gt;    pls_rsh_assume_same_shell: Open MPI will assume the same shell is
</span><br>
<span class="quotelev1">&gt; used on
</span><br>
<span class="quotelev1">&gt;       the remote nodes as on the current node (ie, they are all tcsh,
</span><br>
<span class="quotelev1">&gt; bash,
</span><br>
<span class="quotelev1">&gt;       ksh, etc.) if this is non-zero.  Otherwise, we must log in to
</span><br>
<span class="quotelev1">&gt; each node
</span><br>
<span class="quotelev1">&gt;       twice, the first time to determine which shell is used on the
</span><br>
<span class="quotelev1">&gt; remote
</span><br>
<span class="quotelev1">&gt;       nodes.
</span><br>
<span class="quotelev1">&gt;    plsh_rsh_agent: a colon (:) separated list of startup agents to
</span><br>
<span class="quotelev1">&gt; attempt
</span><br>
<span class="quotelev1">&gt;       to use.  Open MPI will use the first one available on the  
</span><br>
<span class="quotelev1">&gt; starting
</span><br>
<span class="quotelev1">&gt;       node.  If a starter is available but doesn't work, an error will
</span><br>
<span class="quotelev1">&gt;       result.  The default value is 'ssh : rsh', meaning that ssh
</span><br>
<span class="quotelev1">&gt; will be
</span><br>
<span class="quotelev1">&gt;       used unless it isn't installed, in which case rsh will be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if you have more questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0563.php">George Bosilca: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0561.php">Brian Granger: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0539.php">Brian Barrett: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0543.php">Drew McCormack: "Re: [O-MPI users] Configuring process startup on OS X"</a>
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
