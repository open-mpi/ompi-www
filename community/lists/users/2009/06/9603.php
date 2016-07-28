<?
$subject_val = "Re: [OMPI users] Using rsh instead of ssh during ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 12:42:31 2009" -->
<!-- isoreceived="20090611164231" -->
<!-- sent="Thu, 11 Jun 2009 10:42:18 -0600" -->
<!-- isosent="20090611164218" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using rsh instead of ssh during ompi-restart" -->
<!-- id="96D3E008-A0F7-4608-BCBD-6AE50FCEFE59_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1039142114.20090611223403_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using rsh instead of ssh during ompi-restart<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 12:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9604.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9602.php">Gleb \: "[OMPI users] Using rsh instead of ssh during ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="9602.php">Gleb \: "[OMPI users] Using rsh instead of ssh during ompi-restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that you misspelled the mca param - it should be:
<br>
<p>-mca plm_rsh_agent rsh
<br>
<p><p>On Jun 11, 2009, at 10:34 AM, Gleb Crazy Sage Igumnov wrote:
<br>
<p><span class="quotelev1">&gt; Hello. I've got following problem: I'm trying to restart parallel job
</span><br>
<span class="quotelev1">&gt; over our cluster using following command line:
</span><br>
<span class="quotelev1">&gt; /common/openmpi-1.3.2/ompi-restart -mca plm-rsh-agent rsh -verbose
</span><br>
<span class="quotelev1">&gt; -hostfile hfile  ompi_global_snapshot_25229.ckpt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; despite of using such mca option I got following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [umu2:26112] Checking for the existence of (/home/s0032/ 
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_25229.ckpt)
</span><br>
<span class="quotelev1">&gt; [umu2:26112] Restarting from file (ompi_global_snapshot_25229.ckpt)
</span><br>
<span class="quotelev1">&gt; [umu2:26112]     Exec in self
</span><br>
<span class="quotelev1">&gt; ssh: connect to host umu3 port 22: Connection refused
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 26113) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What can I do to make ompi-restart use rsh instead of ssh?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Gleb &quot;Crazy Sage&quot; Igumnov                          mailto:crazy.sage_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9604.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9602.php">Gleb \: "[OMPI users] Using rsh instead of ssh during ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="9602.php">Gleb \: "[OMPI users] Using rsh instead of ssh during ompi-restart"</a>
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
