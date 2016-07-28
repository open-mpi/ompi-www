<?
$subject_val = "[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 04:02:41 2012" -->
<!-- isoreceived="20121126090241" -->
<!-- sent="Mon, 26 Nov 2012 10:02:20 +0100" -->
<!-- isosent="20121126090220" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes" -->
<!-- id="50B3301C.5090701_at_markomanolis.com" -->
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
<strong>Subject:</strong> [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes<br>
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-26 04:02:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>Previous message:</strong> <a href="20763.php">Gustavo Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20768.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Reply:</strong> <a href="20768.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Reply:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>Initially I would like an advice of how to identify the maximum number 
<br>
of MPI processes that can be executed on a node with oversubscribing. 
<br>
When I try to execute an application with 4096 MPI processes on a 
<br>
24-cores node with 48GB of memory, I have an error &quot;Unknown error: 1&quot; 
<br>
while the memory is not even at the half. I can execute the same 
<br>
application with 2048 MPI processes in less than one minute. I have 
<br>
checked linux settings about maximum number of processes and it is much 
<br>
bigger than 4096.
<br>
<p>Another more generic question, is about discovering nodes with faulty 
<br>
memory. Is there any way to identify nodes with faulty memory? I found 
<br>
accidentally that a node with exact the same hardware couldn't execute 
<br>
an MPI application when it was using more than 12GB of ram while the 
<br>
second one could use all of the 48GB of memory. If I have 500+ nodes is 
<br>
difficult to check all of them and I am not familiar with any efficient 
<br>
solution. Initially I thought about memtester but it takes a lot of 
<br>
time. I know that this does not apply exactly on this mailing list but I 
<br>
thought that maybe an OpenMPI user knows something about.
<br>
<p><p>Best regards,
<br>
George Markomanolis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>Previous message:</strong> <a href="20763.php">Gustavo Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20768.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Reply:</strong> <a href="20768.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Reply:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
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
