<?
$subject_val = "[OMPI users] OpenMPI and Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 02:21:24 2011" -->
<!-- isoreceived="20110321062124" -->
<!-- sent="Sun, 20 Mar 2011 23:21:17 -0700" -->
<!-- isosent="20110321062117" -->
<!-- name="Randall Svancara" -->
<!-- email="rsvancara_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI and Torque" -->
<!-- id="AANLkTikiO9YxHZ=g-RfAWEUpnxBuEGFLXbwoouspiKOv_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI and Torque<br>
<strong>From:</strong> Randall Svancara (<em>rsvancara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 02:21:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15921.php">Dave Love: "[OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Previous message:</strong> <a href="15919.php">Gustavo Correa: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a question about using OpenMPI and Torque on stateless nodes.
<br>
I have compiled openmpi 1.4.3 with --with-tm=/usr/local
<br>
--without-slurm using intel compiler version 11.1.075.
<br>
<p>When I run a simple &quot;hello world&quot; mpi program, I am receiving the
<br>
following error.
<br>
<p>[node164:11193] plm:tm: failed to poll for a spawned daemon, return
<br>
status = 17002
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
&nbsp;launch so we are aborting.
<br>
<p>&nbsp;There may be more information reported by the environment (see above).
<br>
<p>&nbsp;This may be because the daemon was unable to find all the needed shared
<br>
&nbsp;libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
&nbsp;location of the shared libraries on the remote nodes and this will
<br>
&nbsp;automatically be forwarded to the remote nodes.
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;mpiexec noticed that the job aborted, but has no info as to the process
<br>
&nbsp;that caused that situation.
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;mpiexec was unable to cleanly terminate the daemons on the nodes shown
<br>
&nbsp;below. Additional manual cleanup may be required - please refer to
<br>
&nbsp;the &quot;orte-clean&quot; tool for assistance.
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node163 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node159 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node158 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node157 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node156 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node155 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node154 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node152 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node151 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node150 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node149 - daemon did not report back when launched
<br>
<p><p>But if I include:
<br>
<p>-mca plm rsh
<br>
<p>The job runs just fine.
<br>
<p>I am not sure what the problem is with torque or openmpi that prevents
<br>
the process from launching on remote nodes.  I have posted to the
<br>
torque list and someone suggested that it may be temporary directory
<br>
space that can be causing issues.  I have 100MB allocated to /tmp
<br>
<p>Any ideas as to why I am having this problem would be appreciated.
<br>
<p><p><pre>
-- 
Randall Svancara
<a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15921.php">Dave Love: "[OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Previous message:</strong> <a href="15919.php">Gustavo Correa: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
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
