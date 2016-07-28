<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 16:12:26 2006" -->
<!-- isoreceived="20061121211226" -->
<!-- sent="Tue, 21 Nov 2006 16:12:25 -0500" -->
<!-- isosent="20061121211225" -->
<!-- name="Greg Wolffe" -->
<!-- email="wolffe_at_[hidden]" -->
<!-- subject="[OMPI users] Hostfile parse error" -->
<!-- id="45636BB9.6090804_at_gvsu.edu" -->
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
<strong>From:</strong> Greg Wolffe (<em>wolffe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 16:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2203.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2201.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Experienced lam/mpi user trying openmpi for the first time.  For 
<br>
some reason, my hostfile is not being recognized.  It's such a simple 
<br>
problem (see below) that I couldn't find anything in the FAQ or archives.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Thanks in advance for any help.
<br>
<p>gw
<br>
<p><p>// simple program compiles just fine
<br>
[eos02:~/openmpi]$ mpicc -Wall hello.c -o hello
<br>
<p>// program runs just fine using command line to specify hosts
<br>
[eos02:~/openmpi]$ mpirun -np 3 --hosts eos01,eos02,eos03 hello
<br>
Nodes: 3
<br>
Hello from Master (process 0)!
<br>
Hello from process 1!
<br>
Hello from process 2!
<br>
<p>// same hosts listed in hostfile
<br>
[eos02:~/openmpi]$ cat my-hostfile
<br>
# Hostfile for OpenMPI environment
<br>
eos01
<br>
eos02
<br>
eos03
<br>
<p>// hostfile cannot be read?
<br>
[eos02:~/openmpi]$ mpirun -np 3 --hostfile my-hostfile hello
<br>
--------------------------------------------------------------------------
<br>
Open RTE detected a parse error in the hostfile:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my-hostfile
<br>
It occured on line number 2 on token 1.
<br>
--------------------------------------------------------------------------
<br>
[eos02.cis.gvsu.edu:02480] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
rmgr_urm.c at line 407
<br>
[eos02.cis.gvsu.edu:02480] mpirun: spawn failed with errno=-1
<br>
[eos02:~/openmpi]$
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2203.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2201.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
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
