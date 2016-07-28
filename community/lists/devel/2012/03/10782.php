<?
$subject_val = "[OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 10:51:18 2012" -->
<!-- isoreceived="20120329145118" -->
<!-- sent="Thu, 29 Mar 2012 20:21:09 +0530" -->
<!-- isosent="20120329145109" -->
<!-- name="Raju" -->
<!-- email="brajuk_at_[hidden]" -->
<!-- subject="[OMPI devel] Openmpi-1.5.3 issue &amp;quot; initialization failure on /dev/ipath (err=23)&amp;quot;" -->
<!-- id="CAHbsQtRNeNLcP8r1hmsRqVkpEJEOiJwO8b9sdAn0VTm9TtHR6g_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;<br>
<strong>From:</strong> Raju (<em>brajuk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 10:51:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10781.php">Jeffrey Squyres: "[OMPI devel] opal/mca/common: you can remove this directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Reply:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Team,
<br>
<p>I am using Qlogic Infiniband and Openmpi-1.5.3. I can able to run the jobs
<br>
by CLI without any issues, but when iam submitting over torque scheduler
<br>
facing the below issue.
<br>
<p>I am facing issue while submitting the jobs through Torque scheduler. Error
<br>
file is attached
<br>
<p>*Overview of the problem:*
<br>
<p>node1.ibab.ac.in.5910Driver initialization failure on /dev/ipath (err=23)
<br>
<p>--------------------------------------------------------------------------
<br>
<p>PSM was unable to open an endpoint. Please make sure that the network link
<br>
is
<br>
<p>active on the node and the hardware is functioning.
<br>
<p><p><p>&nbsp;&nbsp;Error: Failure in initializing endpoint
<br>
<p><p><p>I gone through the link
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/12/17888.php">http://www.open-mpi.org/community/lists/users/2011/12/17888.php</a> for
<br>
solution, same followed but no luck.
<br>
<p>I exported the value in my input submit script file as export
<br>
PSM_SHAREDCONTEXTS_MAX=16, and submitted the job.
<br>
<p>Sample inputfile is
<br>
<p>#!/bin/bash
<br>
<p>#PBS -N matmul
<br>
<p>#PBS -l nodes=1:ppn=1
<br>
<p>node=1
<br>
<p>ppn=1
<br>
<p>nprocs=`expr ${node} \* ${ppn}`
<br>
<p>echo &quot;--- PBS_NODEFILE CONTENT ---&quot;
<br>
<p>cat $PBS_NODEFILE
<br>
<p>export PSM_SHAREDCONTEXTS_MAX=16
<br>
<p><p><p>mpirun -np ${nprocs} --hostfile $PBS_NODEFILE  /home/khan/a.out &lt;
<br>
/home/khan/iter
<br>
<p><p><p>Please let me know I doing correct or not ? and suggest me for best out ?
<br>
<p>Regards,
<br>
<p>Bhagya Raju K
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10782/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10782/errfile.txt">errfile.txt</a>
</ul>
<!-- attachment="errfile.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10781.php">Jeffrey Squyres: "[OMPI devel] opal/mca/common: you can remove this directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Reply:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
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
