<?
$subject_val = "[OMPI users] Embedding MPI program into a webservice ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 23:44:35 2009" -->
<!-- isoreceived="20090717034435" -->
<!-- sent="Fri, 17 Jul 2009 12:44:24 +0900" -->
<!-- isosent="20090717034424" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="[OMPI users] Embedding MPI program into a webservice ?" -->
<!-- id="4A5FF398.7050805_at_biggjapan.com" -->
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
<strong>Subject:</strong> [OMPI users] Embedding MPI program into a webservice ?<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 23:44:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="9995.php">Brad Benton: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9998.php">Lisandro Dalcin: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="9998.php">Lisandro Dalcin: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all,
<br>
<p>I am in the design level of parallizing an SVM algorithm.We need to 
<br>
expose this as a webservice.I have decided to go with Axis2/C 
<br>
implementation.
<br>
<p>Please refer to : <a href="http://i30.tinypic.com/i707qq.png">http://i30.tinypic.com/i707qq.png</a>
<br>
<p>As can be seen in the Figure1 , can I embedd my MPI logic in side my 
<br>
Webservice ? I guess that its not possible because the webservice is 
<br>
packaged as a static library (myService.so) and can not execute the 
<br>
&quot;mpirun&quot;.
<br>
<p>In Figure2, I have illustrated another alternative.In my Webservice, I 
<br>
invoke my parallel program (myParallelProg) using &quot;mpirun&quot; and other 
<br>
parameters.
<br>
<p>Is there any good design to accomplish what I am trying to do?I think 
<br>
the second is not a good design ?
<br>
<p>Thanks in advance,
<br>
umanga
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="9995.php">Brad Benton: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9998.php">Lisandro Dalcin: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="9998.php">Lisandro Dalcin: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
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
