<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 18:57:24 2008" -->
<!-- isoreceived="20080128235724" -->
<!-- sent="Mon, 28 Jan 2008 18:56:36 -0500" -->
<!-- isosent="20080128235636" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="23297891-06B2-4325-88BA-18D5CF048DEB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="755A7FC671B5C84B9467E77829ACFCCD32FE28_at_ava-es5.solers.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 18:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4900.php">jody: "[OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4898.php">R C: "[OMPI users] MPI-IO problems"</a>
<li><strong>In reply to:</strong> <a href="4875.php">Wong, Wayne: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4903.php">Wong, Wayne: "Re: [OMPI users] Trouble with fault tolerance checkpointing"</a>
<li><strong>Reply:</strong> <a href="4903.php">Wong, Wayne: "Re: [OMPI users] Trouble with fault tolerance checkpointing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unable to reproduce this problem. :( I tried both the svn head  
<br>
(r17288) and the tarball that you were using (openmpi-1.3a1r17175) on  
<br>
a similar system without problem.
<br>
<p>The error you are seeing may be caused by old connectivity  
<br>
information in the session directory. You may want to make sure that / 
<br>
tmp does not contain any &quot;openmpi-session*&quot; directories before  
<br>
starting mpirun.
<br>
<p>Other than that you may want to try a clean build of Open MPI just to  
<br>
make sure that you are not seeing anything odd resulting from old  
<br>
Open MPI install files.
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
<span class="quotelev1">&gt; ompi-checkpoint command fails.  I have verified that the test  
</span><br>
<span class="quotelev1">&gt; program works fine without the fault tolerance enabled.  Here are  
</span><br>
<span class="quotelev1">&gt; the details:
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
<span class="quotelev1">&gt;      likely to abort.  There are many reasons that a parallel  
</span><br>
<span class="quotelev1">&gt; process can
</span><br>
<span class="quotelev1">&gt;      fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;      environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev1">&gt; failure;
</span><br>
<span class="quotelev1">&gt;      here's some additional information (which may only be relevant  
</span><br>
<span class="quotelev1">&gt; to an
</span><br>
<span class="quotelev1">&gt;      Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        orte_sds_base_set_name failed
</span><br>
<span class="quotelev1">&gt;        --&gt; Returned value Unknown error: 5854512 (5854512) instead  
</span><br>
<span class="quotelev1">&gt; of ORTE_SUCCESS
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4900.php">jody: "[OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4898.php">R C: "[OMPI users] MPI-IO problems"</a>
<li><strong>In reply to:</strong> <a href="4875.php">Wong, Wayne: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4903.php">Wong, Wayne: "Re: [OMPI users] Trouble with fault tolerance checkpointing"</a>
<li><strong>Reply:</strong> <a href="4903.php">Wong, Wayne: "Re: [OMPI users] Trouble with fault tolerance checkpointing"</a>
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
