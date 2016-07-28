<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 18:47:28 2007" -->
<!-- isoreceived="20070717224728" -->
<!-- sent="Tue, 17 Jul 2007 16:47:13 -0600" -->
<!-- isosent="20070717224713" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging followup" -->
<!-- id="C2C2A311.350F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="63208.99510.qm_at_web57607.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 18:47:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3704.php">Adam C Powell IV: "[OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, the session directory is created in the tmpdir - we don't create
<br>
anything anywhere else, nor do we write any executables anywhere.
<br>
<p>Unfortunately, we don't have more debug statements internal to that
<br>
function. I'll have to create a patch for you that will add some so we can
<br>
better understand why it is failing - will try to send it to you on Wed.
<br>
<p>Just out of curiosity: although I know you have different arch's on your
<br>
nodes, the tests you are running are all executing on the same arch,
<br>
correct???
<br>
<p>Ralph
<br>
<p><p>On 7/17/07 4:06 PM, &quot;Bill Johnstone&quot; &lt;beejstone3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I made sure the TMPDIR environment variable was set to /tmp for
</span><br>
<span class="quotelev1">&gt; non-interactive logins, and got the same result as before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also specifying the &quot;-mca tmpdir_base /tmp&quot; command-line options gave
</span><br>
<span class="quotelev1">&gt; the same result as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made a mistake in my previous e-mail however -- the user home
</span><br>
<span class="quotelev1">&gt; directories are also writable by each node (again, via NFS).  /var and
</span><br>
<span class="quotelev1">&gt; /tmp are the only unique-per-node writable directories.  I'm assuming
</span><br>
<span class="quotelev1">&gt; that by default, the session directory structure is created in the run
</span><br>
<span class="quotelev1">&gt; directory, or the user's home directory, or something similar?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /tmp and the home directories are both mounted nosuid, but are mounted
</span><br>
<span class="quotelev1">&gt; exec.  Does mpirun write/run a suid executable in any of these
</span><br>
<span class="quotelev1">&gt; directories?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI needs to create a temporary directory structure that we call
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;session directory&quot;. This error is telling you that Open MPI was
</span><br>
<span class="quotelev2">&gt;&gt; unable to
</span><br>
<span class="quotelev2">&gt;&gt; create that directory, probably due to a permission issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We decide on the root directory for the session directory using a
</span><br>
<span class="quotelev2">&gt;&gt; progression. You can direct where you want it to go by setting the
</span><br>
<span class="quotelev2">&gt;&gt; TMPDIR
</span><br>
<span class="quotelev2">&gt;&gt; environment variable, or (to set it just for us) using -mca
</span><br>
<span class="quotelev2">&gt;&gt; tmpdir_base foo
</span><br>
<span class="quotelev2">&gt;&gt; on the mpirun command (or you can set OMPI_MCA_tmpidir_base=foo in
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; environment), where &quot;foo&quot; is the root of your tmp directory you want
</span><br>
<span class="quotelev2">&gt;&gt; us to
</span><br>
<span class="quotelev2">&gt;&gt; use (e.g., /tmp).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/17/07 3:09 PM, &quot;Bill Johnstone&quot; &lt;beejstone3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I run with --debug-daemons, I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Begin mpirun output&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node5.x86-64:09920] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_init_stage1.c at line 626
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process
</span><br>
<span class="quotelev2">&gt;&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev2">&gt;&gt; failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   orte_session_dir failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node5.x86-64:09920] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node5.x86-64:09920] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_init.c at line 52
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open RTE was unable to initialize properly.  The error occured
</span><br>
<span class="quotelev2">&gt;&gt; while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting to orte_init().  Returned value -1 instead of
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;End mpirun output&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where would you suggest I look next?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, if it makes any difference, /usr/local is on a read-only
</span><br>
<span class="quotelev2">&gt;&gt; NFSROOT.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Only /tmp and /var are writeable per-node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for your help so far.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry. The --debug was supposed to be --debug-devel. But I suspect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that if you have a normal build then there will be not much
</span><br>
<span class="quotelev2">&gt;&gt; output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, --debug-daemons should give enough output so we can at
</span><br>
<span class="quotelev2">&gt;&gt; least
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have a starting point.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 17, 2007, at 2:46 PM, Bill Johnstone wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You can start by adding --debug-daemons and --debug to your
</span><br>
<span class="quotelev2">&gt;&gt; mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; command line. This will generate a lot of output related to the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; operations done internally by the launcher. If you send this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to the list we might be able to help you a little bit more.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OK, I added those, but got a message about needing to supply a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; suitable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; debugger.  If I supply the &quot;--debugger gdb&quot; argument, I just get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dumped
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; into gdb.  I'm not sure what I need to do next to get the
</span><br>
<span class="quotelev2">&gt;&gt; launcher
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output you mentioned.  My knowledge of gdb is pretty rudimentary.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; need to set mpirun as the executable, and the use the gdb &quot;run&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; command
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with the mpirun arguments?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do I need to rebuild openmpi with --enable-debug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ______
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Luggage? GPS? Comic books?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check out fitting gifts for grads at Yahoo! Search
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://search.yahoo.com/search?fr=oni_on_mail&amp;p=graduation+gifts&amp;cs=bz">http://search.yahoo.com/search?fr=oni_on_mail&amp;p=graduation+gifts&amp;cs=bz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; ______
</span><br>
<span class="quotelev1">&gt; Moody friends. Drama queens. Your life? Nope! - their life, your story. Play
</span><br>
<span class="quotelev1">&gt; Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev1">&gt; <a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>
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
<li><strong>Next message:</strong> <a href="3704.php">Adam C Powell IV: "[OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
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
