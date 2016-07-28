<?
$subject_val = "[OMPI users] open mpi on non standard ssh port";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 04:45:35 2009" -->
<!-- isoreceived="20090317084535" -->
<!-- sent="Tue, 17 Mar 2009 09:45:29 +0100" -->
<!-- isosent="20090317084529" -->
<!-- name="Bernhard Knapp" -->
<!-- email="bernhard.knapp_at_[hidden]" -->
<!-- subject="[OMPI users] open mpi on non standard ssh port" -->
<!-- id="49BF6329.8090802_at_meduniwien.ac.at" -->
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
<strong>Subject:</strong> [OMPI users] open mpi on non standard ssh port<br>
<strong>From:</strong> Bernhard Knapp (<em>bernhard.knapp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 04:45:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8478.php">-andria-: "[OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Previous message:</strong> <a href="8476.php">Raymond Wan: "Re: [OMPI users] Can't start program across network -- solved!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8479.php">Gilbert Grosdidier: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Reply:</strong> <a href="8479.php">Gilbert Grosdidier: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Reply:</strong> <a href="8481.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Maybe reply:</strong> <a href="8494.php">Bernhard Knapp: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I want to start a gromacs simulation on a small cluster where non 
<br>
standard ports are used for ssh. If I just use a &quot;normal&quot; maschinelist 
<br>
file (with the ips of the nodes), consequently, the following error 
<br>
comes up:
<br>
ssh: connect to host 192.168.0.103 port 22: Connection refused
<br>
<p>I guess that I need to somehow tell him to use the other ports. I tried 
<br>
it in the following way (maschinelist file):
<br>
192.168.0.101 -p 5101
<br>
192.168.0.102 -p 5102
<br>
192.168.0.103 -p 5103
<br>
192.168.0.104 -p 5104
<br>
<p>But it seems this is not the correct way to specifiy the port:
<br>
Open RTE detected a parse error in the hostfile:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/home/bknapp/scripts/machinefile.txt
<br>
It occured on line number 1 on token 5:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-p
<br>
<p>How can I tell him to use port 5101 on machine 192.168.0.101?
<br>
May be the question is stupid but I could not find a solution via google 
<br>
or search function ...
<br>
<p>cheers
<br>
Bernhard
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8478.php">-andria-: "[OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Previous message:</strong> <a href="8476.php">Raymond Wan: "Re: [OMPI users] Can't start program across network -- solved!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8479.php">Gilbert Grosdidier: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Reply:</strong> <a href="8479.php">Gilbert Grosdidier: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Reply:</strong> <a href="8481.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Maybe reply:</strong> <a href="8494.php">Bernhard Knapp: "Re: [OMPI users] open mpi on non standard ssh port"</a>
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
