<?
$subject_val = "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 14:16:11 2013" -->
<!-- isoreceived="20130208191611" -->
<!-- sent="Fri, 8 Feb 2013 20:15:57 +0100" -->
<!-- isosent="20130208191557" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)" -->
<!-- id="A1D3C2E4-7DC2-48F4-AA92-C91A88CA8C8B_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="98d580fabc126baa27a7db7973683734.squirrel_at_webmail.univ-nantes.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-08 14:15:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21335.php">Kranthi Kumar: "[OMPI users] Hi, I am working on topic &quot;Topology aware mapping of processes in intra node environment&quot;. I need to find the binding of each rank on the local machine. How do I do this? I am using OPENMPI version 1.4.1 Thank You"</a>
<li><strong>Previous message:</strong> <a href="21333.php">Pierre LINDENBAUM: "[OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<li><strong>In reply to:</strong> <a href="21333.php">Pierre LINDENBAUM: "[OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 08.02.2013 um 19:36 schrieb Pierre LINDENBAUM:
<br>
<p><span class="quotelev1">&gt; ( cross-posted on SO: <a href="http://stackoverflow.com/questions/14775451">http://stackoverflow.com/questions/14775451</a> )
</span><br>
<span class="quotelev1">&gt; I'm very new to OpenMpi and I'm trying tosubmit OMPI to SGE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've installed openmpi , not in
</span><br>
<span class="quotelev1">&gt;  /usr/...
</span><br>
<span class="quotelev1">&gt; but in
</span><br>
<span class="quotelev1">&gt;   /commun/data/packages/openmpi/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it was compiled with --with-sge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've added a new PE in SGE with qconf as descibed in
</span><br>
<span class="quotelev1">&gt; <a href="http://docs.oracle.com/cd/E19080-01/n1.grid.eng6/817-5677/6ml49n2c0/index.html">http://docs.oracle.com/cd/E19080-01/n1.grid.eng6/817-5677/6ml49n2c0/index.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  # /commun/data/packages/openmpi/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  # qconf -sq all.q | grep pe_
</span><br>
<span class="quotelev1">&gt;  pe_list               make orte
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without SGE, the program runs without any problem, using several processors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       /commun/data/packages/openmpi/bin/orterun -np 20 ./a.out args
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I want to submit my program to SGE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the Open MPI FAQ, I read:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  # Allocate a SGE interactive job with 4 slots
</span><br>
<span class="quotelev1">&gt;  # from a parallel environment (PE) named 'orte'
</span><br>
<span class="quotelev1">&gt;  shell$ qsh -pe orte 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but my output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   qsh -pe orte 4
</span><br>
<span class="quotelev1">&gt;   Your job 84550 (&quot;INTERACTIVE&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt;   waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt;   Could not start interactive job.
</span><br>
<p>An INTERACTIVE job is more like an immediate job, i.e. &quot;-now y&quot;. Do you have any interactive queue configured and the cluster is empty right now?
<br>
<p><p><span class="quotelev1">&gt; I've also tried the mpirun command embedded in a script:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ cat ompi.sh
</span><br>
<span class="quotelev1">&gt;   #!/bin/sh
</span><br>
<span class="quotelev1">&gt;   /commun/data/packages/openmpi/bin/mpirun  \
</span><br>
<span class="quotelev1">&gt;         /path/to/a.out args
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but it fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  $ cat ompi.sh.e84552
</span><br>
<span class="quotelev1">&gt;  error: executing task of job 84552 failed: execution daemon on host
</span><br>
<span class="quotelev1">&gt; &quot;node02&quot; didn't accept task
</span><br>
<p>This is a good sign, as it tries to use `qrsh -inherit ...` already. Can you confirm the following settings:
<br>
<p>$ qconf -sp orte
<br>
...
<br>
control_slaves     TRUE
<br>
<p>$ qconf -sq all.q
<br>
...
<br>
shell_start_mode      unix_behavior
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  A daemon (pid 18327) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt;  to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt;  libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt;  location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;  automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  error: executing task of job 84552 failed: execution daemon on host
</span><br>
<span class="quotelev1">&gt; &quot;node01&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;  that caused that situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I fix this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks
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
<li><strong>Next message:</strong> <a href="21335.php">Kranthi Kumar: "[OMPI users] Hi, I am working on topic &quot;Topology aware mapping of processes in intra node environment&quot;. I need to find the binding of each rank on the local machine. How do I do this? I am using OPENMPI version 1.4.1 Thank You"</a>
<li><strong>Previous message:</strong> <a href="21333.php">Pierre LINDENBAUM: "[OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<li><strong>In reply to:</strong> <a href="21333.php">Pierre LINDENBAUM: "[OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
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
