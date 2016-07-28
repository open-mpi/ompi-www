<?
$subject_val = "Re: [OMPI users] Shared-memory problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 11:01:33 2011" -->
<!-- isoreceived="20111103150133" -->
<!-- sent="Thu, 3 Nov 2011 09:01:26 -0600" -->
<!-- isosent="20111103150126" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared-memory problems" -->
<!-- id="77EF2FD6-13BF-447A-925E-5E6F2F9E1B05_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5431947_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared-memory problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 11:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Previous message:</strong> <a href="17671.php">Blosch, Edwin L: "[OMPI users] Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17671.php">Blosch, Edwin L: "[OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2011, at 8:54 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; Can anyone guess what the problem is here?  I was under the impression that OpenMPI (1.4.4) would look for /tmp and would create its shared-memory backing file there, i.e. if you don&#146;t set orte_tmpdir_base to anything.
</span><br>
<p>That is correct
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Well, there IS a /tmp and yet it appears that OpenMPI has chosen to use /dev/shm.  Why?
</span><br>
<p>Looks like a bug to me - it shouldn't be doing that. Will have to take a look - first I've heard of that behavior.
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; And, next question, why doesn&#146;t it work?  Here are the oddities of this cluster:
</span><br>
<span class="quotelev1">&gt; -    the cluster is &#145;diskless&#146;
</span><br>
<span class="quotelev1">&gt; -    /tmp is an NFS mount
</span><br>
<span class="quotelev1">&gt; -    /dev/shm is 12 GB and has 755 permissions
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Filesystem            Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev1">&gt; tmpfs                  12G  164K   12G   1% /dev/shm
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; % ls &#150;l output:
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x  2 root root         40 Oct 28 09:14 shm
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The error message below suggests that OpenMPI (1.4.4) has somehow auto-magically decided to use /dev/shm and is failing to be able to us e it, for some reason.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for whatever help you can offer,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; e8315:02942] opal_os_dirpath_create: Error: Unable to create the sub-directory (/dev/shm/openmpi-sessions-estenfte_at_e8315_0) of (/dev/shm/openmpi-sessions-estenfte_at_e8315_0/8474/0/1), mkdir failed [1]
</span><br>
<span class="quotelev1">&gt; [e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file util/session_dir.c at line 106
</span><br>
<span class="quotelev1">&gt; [e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file util/session_dir.c at line 399
</span><br>
<span class="quotelev1">&gt; [e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 206
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file ess_env_module.c at line 136
</span><br>
<span class="quotelev1">&gt; [e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
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
<span class="quotelev1">&gt;   orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file orted/orted_main.c at line 325
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17672/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Previous message:</strong> <a href="17671.php">Blosch, Edwin L: "[OMPI users] Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17671.php">Blosch, Edwin L: "[OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
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
