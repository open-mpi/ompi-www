<?
$subject_val = "[OMPI users] openmpi+sge";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 09:37:27 2008" -->
<!-- isoreceived="20081002133727" -->
<!-- sent="Thu, 2 Oct 2008 15:37:16 +0200" -->
<!-- isosent="20081002133716" -->
<!-- name="Jaime Perea" -->
<!-- email="jaime.perea_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi+sge" -->
<!-- id="200810021537.16283.jaime.perea_at_igmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi+sge<br>
<strong>From:</strong> Jaime Perea (<em>jaime.perea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-02 09:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6826.php">jody: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Reply:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Maybe reply:</strong> <a href="6839.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am having some problems with a combination of openmpi+sge6.2
<br>
<p>Currently I'm working with the 1.3a1r19666 openmpi release and the
<br>
myrinet gm libraries (2.1.19)  but the problem was the same with the
<br>
prior 1.3 version. In short, I'm able to send jobs to a que via qrsh, 
<br>
more or less this way,
<br>
<p>qrsh -cwd -V -q para -pe orte 6 mpirun -np 6 ctiming
<br>
<p>ctiming is a small test program and in this way it works, but if I try to 
<br>
send the same task by using qsub on a script like this one 
<br>
<p>#!/bin/sh
<br>
#$ -pe orte 6
<br>
#$ -q para
<br>
#$ -cwd
<br>
#
<br>
mpirun -np $NSLOTS  /model/jaime/ctiming
<br>
<p><p>It fails with a message like this,
<br>
..............
<br>
<p>error reading job context from &quot;qlogin_starter&quot;
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 11207) died unexpectedly with status 1 while attempting
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
<p>.............
<br>
<p>I know that LD_LIBRARY_PATH is not the problem,  since I checked that all
<br>
the environment is present.... any idea?
<br>
<p>For previous releases of the sge and openmpi I was able to do them work
<br>
together with a few wrappers, but now the integration looks much better!
<br>
This happen only when sending openmpi jobs. 
<br>
<p>Thanks and all the best
<br>
&nbsp;
<br>
<pre>
---
           Jaime D. Perea Duarte. &lt;jaime at iaa dot es&gt;
             Linux registered user #10472
           Dep. Astrofisica Extragalactica.
           Instituto de Astrofisica de Andalucia (CSIC)
           Apdo. 3004, 18080 Granada, Spain. 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6826.php">jody: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Reply:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Maybe reply:</strong> <a href="6839.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
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
