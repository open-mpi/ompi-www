<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 14:46:42 2007" -->
<!-- isoreceived="20070718184642" -->
<!-- sent="Wed, 18 Jul 2007 12:46:32 -0600" -->
<!-- isosent="20070718184632" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging followup" -->
<!-- id="C2C3BC28.A0C7%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="227133.42972.qm_at_web57610.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 14:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3699.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hooray! Glad we could help track this down - sorry it was so hard to do so.
<br>
<p>To answer your questions:
<br>
<p>1. Yes - ORTE should bail out gracefully. It definitely should not hang. I
<br>
will log the problem and investigate. I believe I know where the problem
<br>
lies, and it may already be fixed on our trunk, but the fix may not get into
<br>
the 1.2 family (have to see what it would entail).
<br>
<p>2. I will definitely commit that debug code and ensure it is in future
<br>
releases.
<br>
<p>3. I'll see if we can add something about --debug-daemons to the FAQ -
<br>
thanks for pointing out that oversight.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 7/18/07 12:19 PM, &quot;Bill Johnstone&quot; &lt;beejstone3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, we don't have more debug statements internal to that
</span><br>
<span class="quotelev2">&gt;&gt; function. I'll have to create a patch for you that will add some so
</span><br>
<span class="quotelev2">&gt;&gt; we can
</span><br>
<span class="quotelev2">&gt;&gt; better understand why it is failing - will try to send it to you on
</span><br>
<span class="quotelev2">&gt;&gt; Wed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the patch you sent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I solved the problem.  It was a head-slapper of an error.  Turned out
</span><br>
<span class="quotelev1">&gt; that I had forgotten -- the permissions on the filesystem override the
</span><br>
<span class="quotelev1">&gt; permissions of the mount point.  As I mentioned, these machines have an
</span><br>
<span class="quotelev1">&gt; NFS root filesystem.  In that filesystem, tmp has permissions 1777.
</span><br>
<span class="quotelev1">&gt; However, when each node mounts its local temp partition to /tmp, the
</span><br>
<span class="quotelev1">&gt; permissions on that filesystem are the permissions the mount point
</span><br>
<span class="quotelev1">&gt; takes on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, I had forgotten to apply permissions 1777 to /tmp after
</span><br>
<span class="quotelev1">&gt; mounting on each machine.  As a result, /tmp really did not have the
</span><br>
<span class="quotelev1">&gt; appropriate permissions for mpirun to write to it as necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your patch helped me figure this out.  Technically, I should have been
</span><br>
<span class="quotelev1">&gt; able to figure it out from the messages you'd already sent to the
</span><br>
<span class="quotelev1">&gt; mailing list, but it wasn't until I saw the line in session_dir.c where
</span><br>
<span class="quotelev1">&gt; the error was occurring that I realized it had to be some kind of
</span><br>
<span class="quotelev1">&gt; permissions error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've attached the new debug output below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; util/session_dir.c at line 108
</span><br>
<span class="quotelev1">&gt; [node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; util/session_dir.c at line 391
</span><br>
<span class="quotelev1">&gt; [node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 626
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_session_dir failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; [node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Starting at line 108 of session_dir.c, is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (ORTE_SUCCESS != (ret = opal_os_dirpath_create(directory, my_mode)))
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Three further points:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Is there some reason ORTE can't bail out gracefully upon this error,
</span><br>
<span class="quotelev1">&gt; instead of hanging like it was doing for me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -I think leaving in the extra debug logging code you sent me in the
</span><br>
<span class="quotelev1">&gt; patch for future Open MPI versions would be a good idea to help
</span><br>
<span class="quotelev1">&gt; troubleshoot problems like this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -It would be nice to see &quot;--debug-daemons&quot; added to the Troubleshooting
</span><br>
<span class="quotelev1">&gt; section of the FAQ on the web site.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very very much for your help Ralph and everyone else that replied.
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
<span class="quotelev1">&gt; Take the Internet to Go: Yahoo!Go puts the Internet in your pocket: mail,
</span><br>
<span class="quotelev1">&gt; news, photos &amp; more.
</span><br>
<span class="quotelev1">&gt; <a href="http://mobile.yahoo.com/go?refer=1GNXIC">http://mobile.yahoo.com/go?refer=1GNXIC</a>
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
<li><strong>Next message:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3699.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
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
