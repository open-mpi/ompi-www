<?
$subject_val = "Re: [OMPI users] Trouble with fault tolerance checkpointing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 10:26:53 2008" -->
<!-- isoreceived="20080129152653" -->
<!-- sent="Tue, 29 Jan 2008 10:26:46 -0500" -->
<!-- isosent="20080129152646" -->
<!-- name="Wong, Wayne" -->
<!-- email="Wayne.Wong_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with fault tolerance checkpointing" -->
<!-- id="755A7FC671B5C84B9467E77829ACFCCD32FE30_at_ava-es5.solers.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="23297891-06B2-4325-88BA-18D5CF048DEB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with fault tolerance checkpointing<br>
<strong>From:</strong> Wong, Wayne (<em>Wayne.Wong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 10:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4904.php">Wong, Wayne: "[OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>Previous message:</strong> <a href="4902.php">Stephen Wornom: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>In reply to:</strong> <a href="4899.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have the checkpoint/restart working now.  Turns out that the BLCR
<br>
kernel mods were installed incorrectly.
<br>
<p>Thanks for the help.
<br>
<p>-Wayne
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Josh Hursey
<br>
Sent: Monday, January 28, 2008 6:57 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] (no subject)
<br>
<p>I'm unable to reproduce this problem. :( I tried both the svn head
<br>
(r17288) and the tarball that you were using (openmpi-1.3a1r17175) on a
<br>
similar system without problem.
<br>
<p>The error you are seeing may be caused by old connectivity information
<br>
in the session directory. You may want to make sure that / tmp does not
<br>
contain any &quot;openmpi-session*&quot; directories before starting mpirun.
<br>
<p>Other than that you may want to try a clean build of Open MPI just to
<br>
make sure that you are not seeing anything odd resulting from old Open
<br>
MPI install files.
<br>
<p>let me know if that helps.
<br>
<p>-- Josh
<br>
<p>On Jan 24, 2008, at 12:38 PM, Wong, Wayne wrote:
<br>
<p><span class="quotelev1">&gt; I'm having some difficulty geting the Open MPI checkpoint/restart 
</span><br>
<span class="quotelev1">&gt; fault tolerance working.  I have compiled Open MPI with the &quot;--with- 
</span><br>
<span class="quotelev1">&gt; ft=cr&quot; flag, but when I attempt to run my test program (ring), the 
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint command fails.  I have verified that the test program 
</span><br>
<span class="quotelev1">&gt; works fine without the fault tolerance enabled.  Here are the details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      [me_at_dev1 ~]$ mpirun -np 4 -am ft-enable-cr ring
</span><br>
<span class="quotelev1">&gt;      [me_at_dev1 ~]$ ps -efa | grep mpirun
</span><br>
<span class="quotelev1">&gt;      me     3052  2820  1 08:25 pts/2    00:00:00 mpirun -np 4 -am  
</span><br>
<span class="quotelev1">&gt; ft-enable-cr ring
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      [me_at_dev1 ~]$ ompi-checkpoint 3052
</span><br>
<span class="quotelev1">&gt;      [dev1.acme.local:03060] [NO-NAME] ORTE_ERROR_LOG: Unknown
</span><br>
<span class="quotelev1">&gt; error: 5854512 in file sds_singleton_module.c at line 50
</span><br>
<span class="quotelev1">&gt;      [dev1.acme.local:03060] [NO-NAME] ORTE_ERROR_LOG: Unknown
</span><br>
<span class="quotelev1">&gt; error: 5854512 in file runtime/orte_init.c at line 311
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;      It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt;      likely to abort.  There are many reasons that a parallel process 
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt;      fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;      environment problems.  This failure appears to be an internal 
</span><br>
<span class="quotelev1">&gt; failure;
</span><br>
<span class="quotelev1">&gt;      here's some additional information (which may only be relevant to
</span><br>
<p><span class="quotelev1">&gt; an
</span><br>
<span class="quotelev1">&gt;      Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        orte_sds_base_set_name failed
</span><br>
<span class="quotelev1">&gt;        --&gt; Returned value Unknown error: 5854512 (5854512) instead of 
</span><br>
<span class="quotelev1">&gt; ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.  Thanks.
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.txt.gz&gt;&lt;config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4904.php">Wong, Wayne: "[OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>Previous message:</strong> <a href="4902.php">Stephen Wornom: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>In reply to:</strong> <a href="4899.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
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
