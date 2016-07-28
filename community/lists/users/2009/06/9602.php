<?
$subject_val = "[OMPI users] Using rsh instead of ssh during ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 12:34:11 2009" -->
<!-- isoreceived="20090611163411" -->
<!-- sent="Thu, 11 Jun 2009 22:34:03 +0600" -->
<!-- isosent="20090611163403" -->
<!-- name="Gleb \" -->
<!-- email="crazy.sage_at_[hidden]" -->
<!-- subject="[OMPI users] Using rsh instead of ssh during ompi-restart" -->
<!-- id="1039142114.20090611223403_at_gmail.com" -->
<!-- charset="windows-1251" -->
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
<strong>Subject:</strong> [OMPI users] Using rsh instead of ssh during ompi-restart<br>
<strong>From:</strong> Gleb \ (<em>crazy.sage_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 12:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9603.php">Ralph Castain: "Re: [OMPI users] Using rsh instead of ssh during ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9601.php">Brian Barrett: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9603.php">Ralph Castain: "Re: [OMPI users] Using rsh instead of ssh during ompi-restart"</a>
<li><strong>Reply:</strong> <a href="9603.php">Ralph Castain: "Re: [OMPI users] Using rsh instead of ssh during ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello. I've got following problem: I'm trying to restart parallel job
<br>
over our cluster using following command line:
<br>
/common/openmpi-1.3.2/ompi-restart -mca plm-rsh-agent rsh -verbose
<br>
-hostfile hfile  ompi_global_snapshot_25229.ckpt
<br>
<p>despite of using such mca option I got following error message:
<br>
<p>--------------------------------------------------------------------------
<br>
[umu2:26112] Checking for the existence of (/home/s0032/ompi_global_snapshot_25229.ckpt)
<br>
[umu2:26112] Restarting from file (ompi_global_snapshot_25229.ckpt)
<br>
[umu2:26112]     Exec in self
<br>
ssh: connect to host umu3 port 22: Connection refused
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 26113) died unexpectedly with status 1 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
--------------------------------------------------------------------------
<br>
<p>What can I do to make ompi-restart use rsh instead of ssh?
<br>
<p><p><pre>
-- 
With best regards,
 Gleb &quot;Crazy Sage&quot; Igumnov                          mailto:crazy.sage_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9603.php">Ralph Castain: "Re: [OMPI users] Using rsh instead of ssh during ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9601.php">Brian Barrett: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9603.php">Ralph Castain: "Re: [OMPI users] Using rsh instead of ssh during ompi-restart"</a>
<li><strong>Reply:</strong> <a href="9603.php">Ralph Castain: "Re: [OMPI users] Using rsh instead of ssh during ompi-restart"</a>
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
