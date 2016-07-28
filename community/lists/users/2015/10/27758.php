<?
$subject_val = "[OMPI users] Problem starting jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 05:24:51 2015" -->
<!-- isoreceived="20151001092451" -->
<!-- sent="Thu, 1 Oct 2015 10:24:48 +0100" -->
<!-- isosent="20151001092448" -->
<!-- name="Emyr James" -->
<!-- email="ej4_at_[hidden]" -->
<!-- subject="[OMPI users] Problem starting jobs" -->
<!-- id="560CFBE0.9080509_at_sanger.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] Problem starting jobs<br>
<strong>From:</strong> Emyr James (<em>ej4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-01 05:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27759.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27757.php">Julien Bodart: "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27761.php">Emyr James: "Re: [OMPI users] Problem starting jobs"</a>
<li><strong>Reply:</strong> <a href="27761.php">Emyr James: "Re: [OMPI users] Problem starting jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using openmpi with Platform LSF on our cluster that has 10Gbe 
<br>
connectivity.
<br>
Sometimes things work fine but we get a lot of occurences of mpi jobs 
<br>
not getting off the ground and the following appears in the log...
<br>
<p>&quot;ORTE has lost communication with its daemon located on node:
<br>
<p>&nbsp;&nbsp;&nbsp;hostname:  node123
<br>
<p>This is usually due to either a failure of the TCP network
<br>
connection to the node, or possibly an internal failure of
<br>
the daemon itself. We cannot recover from this failure, and
<br>
therefore will terminate the job.&quot;
<br>
<p>This seems to happen more frequently as the number of workers in the job 
<br>
increases. I'm wondering if there's some timeout involved here which I 
<br>
could increase to make things more reliable.
<br>
<p>I tried adding &quot;--wait-for-server --server-wait-time 30&quot; to the mpirun 
<br>
command line but it doesn't seem to be making any difference.
<br>
<p>Anyone got any ideas on what might be going on ?
<br>
<p>Cheers,
<br>
<p>Emyr
<br>
<p><p><pre>
-- 
 The Wellcome Trust Sanger Institute is operated by Genome Research 
 Limited, a charity registered in England with number 1021457 and a 
 company registered in England with number 2742969, whose registered 
 office is 215 Euston Road, London, NW1 2BE. 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27759.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27757.php">Julien Bodart: "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27761.php">Emyr James: "Re: [OMPI users] Problem starting jobs"</a>
<li><strong>Reply:</strong> <a href="27761.php">Emyr James: "Re: [OMPI users] Problem starting jobs"</a>
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
