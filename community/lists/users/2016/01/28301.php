<?
$subject_val = "[OMPI users] How to allocate more memory to java OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 10:03:13 2016" -->
<!-- isoreceived="20160119150313" -->
<!-- sent="Tue, 19 Jan 2016 15:03:12 +0000" -->
<!-- isosent="20160119150312" -->
<!-- name="Ibrahim Ikhlawi" -->
<!-- email="ibrahim_22s_at_[hidden]" -->
<!-- subject="[OMPI users] How to allocate more memory to java OpenMPI" -->
<!-- id="DUB125-W33CD628A5585CDA32C1B0D97C10_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] How to allocate more memory to java OpenMPI<br>
<strong>From:</strong> Ibrahim Ikhlawi (<em>ibrahim_22s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-19 10:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28300.php">Siegmar Gross: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo,
<br>
<p>I'm working with  java OpenMPI on a server with 64GB memory. But when I run the java class I can only run it on until 15 processes (with this command: mpirun -np 15 java Multiplikation). Although there is 64GB memory, only about 3 GB will be used(with top command can I see that, the first two lines are below). When I run more than 15 processes I get this error:
<br>
<p>Error occurred during initialization of VM
<br>
java.lang.OutOfMemoryError: unable to create new native thread
<br>
<p><p>But I want to run it on more than 15 processes and use more than 3 GB. In Addition, after searching in google I have tried to run it with this command:
<br>
<p>mpirun -np 20 java -Xmx2096M -Xms1048M Multiplikation
<br>
<p>but I still get the same error.
<br>
<p>My question: How can I allocate java more memory, so that I run my program with more than 15 processes and more than 3GB memory?
<br>
<p>thanks in advance 
<br>
Ibrahim
<br>
<p>PS:
<br>
It may help, these are the first two lines from the top command:
<br>
<p>PID       PRI      VIRT    RES    SHR   S  CPU%  MEM%
<br>
23255   20   0 20.7G  103M 11916 S  2.0       0.2  0:52.14 java 
<br>
23559   20   0 20.7G 33772 11916 S  1.0       0.1  0:50.82 java 
<br>
<p><p><p><p><p><p><p><p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28300.php">Siegmar Gross: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
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
