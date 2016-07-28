<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 14:19:37 2007" -->
<!-- isoreceived="20070718181937" -->
<!-- sent="Wed, 18 Jul 2007 11:19:33 -0700 (PDT)" -->
<!-- isosent="20070718181933" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging followup" -->
<!-- id="227133.42972.qm_at_web57610.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C2C2A311.350F%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 14:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3715.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3703.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3718.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3718.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
--- Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, we don't have more debug statements internal to that
</span><br>
<span class="quotelev1">&gt; function. I'll have to create a patch for you that will add some so
</span><br>
<span class="quotelev1">&gt; we can
</span><br>
<span class="quotelev1">&gt; better understand why it is failing - will try to send it to you on
</span><br>
<span class="quotelev1">&gt; Wed.
</span><br>
<p>Thank you for the patch you sent.
<br>
<p>I solved the problem.  It was a head-slapper of an error.  Turned out
<br>
that I had forgotten -- the permissions on the filesystem override the
<br>
permissions of the mount point.  As I mentioned, these machines have an
<br>
NFS root filesystem.  In that filesystem, tmp has permissions 1777. 
<br>
However, when each node mounts its local temp partition to /tmp, the
<br>
permissions on that filesystem are the permissions the mount point
<br>
takes on.
<br>
<p>In this case, I had forgotten to apply permissions 1777 to /tmp after
<br>
mounting on each machine.  As a result, /tmp really did not have the
<br>
appropriate permissions for mpirun to write to it as necessary.
<br>
<p>Your patch helped me figure this out.  Technically, I should have been
<br>
able to figure it out from the messages you'd already sent to the
<br>
mailing list, but it wasn't until I saw the line in session_dir.c where
<br>
the error was occurring that I realized it had to be some kind of
<br>
permissions error.
<br>
<p>I've attached the new debug output below:
<br>
<p>[node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
<br>
util/session_dir.c at line 108
<br>
[node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
<br>
util/session_dir.c at line 391
<br>
[node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init_stage1.c at line 626
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process
<br>
is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_session_dir failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_system_init.c at line 42
<br>
[node5.x86-64:11511] [0,0,1] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 52
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
<br>
<p>Starting at line 108 of session_dir.c, is:
<br>
<p>if (ORTE_SUCCESS != (ret = opal_os_dirpath_create(directory, my_mode)))
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
}
<br>
<p>Three further points:
<br>
<p>-Is there some reason ORTE can't bail out gracefully upon this error,
<br>
instead of hanging like it was doing for me?
<br>
<p>-I think leaving in the extra debug logging code you sent me in the
<br>
patch for future Open MPI versions would be a good idea to help
<br>
troubleshoot problems like this.
<br>
<p>-It would be nice to see &quot;--debug-daemons&quot; added to the Troubleshooting
<br>
section of the FAQ on the web site.
<br>
<p>Thank you very very much for your help Ralph and everyone else that replied.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Take the Internet to Go: Yahoo!Go puts the Internet in your pocket: mail, news, photos &amp; more. 
<br>
<a href="http://mobile.yahoo.com/go?refer=1GNXIC">http://mobile.yahoo.com/go?refer=1GNXIC</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3715.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3703.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3718.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3718.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
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
