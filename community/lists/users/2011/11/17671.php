<?
$subject_val = "[OMPI users] Shared-memory problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 10:54:46 2011" -->
<!-- isoreceived="20111103145446" -->
<!-- sent="Thu, 03 Nov 2011 08:54:33 -0600" -->
<!-- isosent="20111103145433" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Shared-memory problems" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5431947_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Shared-memory problems<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 10:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17672.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Previous message:</strong> <a href="17670.php">bhimesh akula: "[OMPI users] Graph 500 execution time was increased by up to 11-fold over MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17672.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17672.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can anyone guess what the problem is here?  I was under the impression that OpenMPI (1.4.4) would look for /tmp and would create its shared-memory backing file there, i.e. if you don't set orte_tmpdir_base to anything.
<br>
<p>Well, there IS a /tmp and yet it appears that OpenMPI has chosen to use /dev/shm.  Why?
<br>
<p>And, next question, why doesn't it work?  Here are the oddities of this cluster:
<br>
<p>-    the cluster is 'diskless'
<br>
<p>-    /tmp is an NFS mount
<br>
<p>-    /dev/shm is 12 GB and has 755 permissions
<br>
<p>Filesystem            Size  Used Avail Use% Mounted on
<br>
tmpfs                  12G  164K   12G   1% /dev/shm
<br>
<p>% ls -l output:
<br>
drwxr-xr-x  2 root root         40 Oct 28 09:14 shm
<br>
<p><p>The error message below suggests that OpenMPI (1.4.4) has somehow auto-magically decided to use /dev/shm and is failing to be able to use it, for some reason.
<br>
<p>Thanks for whatever help you can offer,
<br>
<p>Ed
<br>
<p><p>e8315:02942] opal_os_dirpath_create: Error: Unable to create the sub-directory (/dev/shm/openmpi-sessions-estenfte_at_e8315_0) of (/dev/shm/openmpi-sessions-estenfte_at_e8315_0/8474/0/1), mkdir failed [1]
<br>
[e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file util/session_dir.c at line 106
<br>
[e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file util/session_dir.c at line 399
<br>
[e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 206
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
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
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file ess_env_module.c at line 136
<br>
[e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
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
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[e8315:02942] [[8474,0],1] ORTE_ERROR_LOG: Error in file orted/orted_main.c at line 325
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17672.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Previous message:</strong> <a href="17670.php">bhimesh akula: "[OMPI users] Graph 500 execution time was increased by up to 11-fold over MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17672.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17672.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
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
