<?
$subject_val = "[OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 13:44:56 2012" -->
<!-- isoreceived="20121010174456" -->
<!-- sent="Wed, 10 Oct 2012 21:44:52 +0400" -->
<!-- isosent="20121010174452" -->
<!-- name="USA Linux UAE" -->
<!-- email="usasoftwareengineer_at_[hidden]" -->
<!-- subject="[OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0" -->
<!-- id="CAOXJ2J8kV8-uUvUdm77fV1nocCVhyHTmxxAjqTFMuKm9QviG+Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0<br>
<strong>From:</strong> USA Linux UAE (<em>usasoftwareengineer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 13:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20462.php">Jonas Juselius: "Re: [OMPI users] Intel 13.0.0 -pthreads warning"</a>
<li><strong>Previous message:</strong> <a href="20460.php">Reuti: "Re: [OMPI users] Intel 13.0.0 -pthreads warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20486.php">Ralph Castain: "Re: [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
<li><strong>Reply:</strong> <a href="20486.php">Ralph Castain: "Re: [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I am using openmpi (1.4.3) with slurm (2.4.2) on Centos 6.0
<br>
<p>I can execute my jobs  with mpirun  to my nodelist in partition using  &quot;-H&quot;
<br>
option with mpirun.
<br>
<p>But when i use slurm and use
<br>
<p>salloc -n 3 sh
<br>
<p>and then submit mpi jobs using mpirun &lt;mpibinary&gt;
<br>
<p>I get the following error:
<br>
<p>salloc: Granted job allocation 289
<br>
sh-4.1$ mpirun mpihello
<br>
[v2:29784] [[57331,0],0] ORTE_ERROR_LOG: Not found in file
<br>
plm_slurm_module.c at line 350
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
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
<p><p>Any debugging procedure  with openmpi and slurm?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20461/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20462.php">Jonas Juselius: "Re: [OMPI users] Intel 13.0.0 -pthreads warning"</a>
<li><strong>Previous message:</strong> <a href="20460.php">Reuti: "Re: [OMPI users] Intel 13.0.0 -pthreads warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20486.php">Ralph Castain: "Re: [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
<li><strong>Reply:</strong> <a href="20486.php">Ralph Castain: "Re: [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
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
