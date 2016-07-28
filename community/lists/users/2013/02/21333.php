<?
$subject_val = "[OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 13:36:44 2013" -->
<!-- isoreceived="20130208183644" -->
<!-- sent="Fri, 8 Feb 2013 19:36:38 +0100 (CET)" -->
<!-- isosent="20130208183638" -->
<!-- name="Pierre LINDENBAUM" -->
<!-- email="pierre.lindenbaum_at_[hidden]" -->
<!-- subject="[OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)" -->
<!-- id="98d580fabc126baa27a7db7973683734.squirrel_at_webmail.univ-nantes.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)<br>
<strong>From:</strong> Pierre LINDENBAUM (<em>pierre.lindenbaum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-08 13:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21334.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<li><strong>Previous message:</strong> <a href="21332.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21334.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<li><strong>Reply:</strong> <a href="21334.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
( cross-posted on SO: <a href="http://stackoverflow.com/questions/14775451">http://stackoverflow.com/questions/14775451</a> )
<br>
<p>Hi,
<br>
I'm very new to OpenMpi and I'm trying tosubmit OMPI to SGE:
<br>
<p><p>I've installed openmpi , not in
<br>
&nbsp;&nbsp;/usr/...
<br>
but in
<br>
&nbsp;&nbsp;&nbsp;/commun/data/packages/openmpi/
<br>
<p>it was compiled with --with-sge.
<br>
<p>I've added a new PE in SGE with qconf as descibed in
<br>
<a href="http://docs.oracle.com/cd/E19080-01/n1.grid.eng6/817-5677/6ml49n2c0/index.html">http://docs.oracle.com/cd/E19080-01/n1.grid.eng6/817-5677/6ml49n2c0/index.html</a>
<br>
<p>&nbsp;&nbsp;# /commun/data/packages/openmpi/bin/ompi_info | grep gridengine
<br>
&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.3)
<br>
<p>&nbsp;&nbsp;# qconf -sq all.q | grep pe_
<br>
&nbsp;&nbsp;pe_list               make orte
<br>
<p>Without SGE, the program runs without any problem, using several processors.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/commun/data/packages/openmpi/bin/orterun -np 20 ./a.out args
<br>
<p>Now I want to submit my program to SGE
<br>
<p>In the Open MPI FAQ, I read:
<br>
<p>&nbsp;&nbsp;# Allocate a SGE interactive job with 4 slots
<br>
&nbsp;&nbsp;# from a parallel environment (PE) named 'orte'
<br>
&nbsp;&nbsp;shell$ qsh -pe orte 4
<br>
<p>but my output is:
<br>
<p>&nbsp;&nbsp;&nbsp;qsh -pe orte 4
<br>
&nbsp;&nbsp;&nbsp;Your job 84550 (&quot;INTERACTIVE&quot;) has been submitted
<br>
&nbsp;&nbsp;&nbsp;waiting for interactive job to be scheduled ...
<br>
&nbsp;&nbsp;&nbsp;Could not start interactive job.
<br>
<p>I've also tried the mpirun command embedded in a script:
<br>
<p>&nbsp;&nbsp;&nbsp;$ cat ompi.sh
<br>
&nbsp;&nbsp;&nbsp;#!/bin/sh
<br>
&nbsp;&nbsp;&nbsp;/commun/data/packages/openmpi/bin/mpirun  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/path/to/a.out args
<br>
<p>but it fails
<br>
<p>&nbsp;&nbsp;$ cat ompi.sh.e84552
<br>
&nbsp;&nbsp;error: executing task of job 84552 failed: execution daemon on host
<br>
&quot;node02&quot; didn't accept task
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;A daemon (pid 18327) died unexpectedly with status 1 while attempting
<br>
&nbsp;&nbsp;to launch so we are aborting.
<br>
<p>&nbsp;&nbsp;There may be more information reported by the environment (see above).
<br>
<p>&nbsp;&nbsp;This may be because the daemon was unable to find all the needed shared
<br>
&nbsp;&nbsp;libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
&nbsp;&nbsp;location of the shared libraries on the remote nodes and this will
<br>
&nbsp;&nbsp;automatically be forwarded to the remote nodes.
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;error: executing task of job 84552 failed: execution daemon on host
<br>
&quot;node01&quot; didn't accept task
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;that caused that situation.
<br>
<p>How can I fix this?
<br>
<p>Many thanks
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21334.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<li><strong>Previous message:</strong> <a href="21332.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21334.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<li><strong>Reply:</strong> <a href="21334.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
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
