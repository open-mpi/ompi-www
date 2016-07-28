<?
$subject_val = "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 05:36:52 2012" -->
<!-- isoreceived="20120217103652" -->
<!-- sent="Fri, 17 Feb 2012 10:36:49 -0000" -->
<!-- isosent="20120217103649" -->
<!-- name="Richard Bardwell" -->
<!-- email="richard_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running an mpi applicatio&amp;#226;&amp;#128;&amp;#139;n on nodes with more than one interface" -->
<!-- id="19B710A0A6DD4DF99AC2283C5384E7BD_at_starfish" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAOf_+-U=--BLUs3zTLRVY+T8MMCxBfigOQdOjKyL+8Y66BfD3w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface<br>
<strong>From:</strong> Richard Bardwell (<em>richard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 05:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18515.php">Rolf vandeVaart: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18513.php">Jingcha Joba: "[OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18513.php">Jingcha Joba: "[OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18515.php">Rolf vandeVaart: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18515.php">Rolf vandeVaart: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18517.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had exactly the same problem.
<br>
Trying to run mpi between 2 separate machines, with each machine having
<br>
2 ethernet ports, causes really weird behaviour on the most basic code.
<br>
I had to disable one of the ethernet ports on each of the machines
<br>
and it worked just fine after that. No idea why though !
<br>

<br>
&nbsp;&nbsp;----- Original Message ----- 
<br>
&nbsp;&nbsp;From: Jingcha Joba 
<br>
&nbsp;&nbsp;To: users_at_[hidden] 
<br>
&nbsp;&nbsp;Sent: Thursday, February 16, 2012 8:43 PM
<br>
&nbsp;&nbsp;Subject: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface
<br>

<br>

<br>
&nbsp;&nbsp;Hello Everyone,
<br>
&nbsp;&nbsp;This is my 1st post in open-mpi forum. 
<br>
&nbsp;&nbsp;I am trying to run a simple program which does Sendrecv between two nodes having 2 interface cards on each of two nodes. 
<br>
&nbsp;&nbsp;Both the nodes are running RHEL6, with open-mpi 1.4.4 on a 8 core Xeon processor.
<br>
&nbsp;&nbsp;What I noticed was that when using two or more interface on both the nodes, the mpi &quot;hangs&quot; attempting to connect. 
<br>
&nbsp;&nbsp;These details might help,
<br>
&nbsp;&nbsp;Node 1 - Denver has a single port &quot;A&quot; card (eth21 - 25.192.xx.xx - which I use to ssh to that machine), and a double port &quot;B&quot; card (eth23 - 10.3.1.1 &amp; eth24 - 10.3.1.2). 
<br>
&nbsp;&nbsp;Node 2 - Chicago also the same single port A card (eth19 - 25.192.xx.xx - again uses for ssh) and a double port B card ( eth29 - 10.3.1.3 &amp; eth30 - 10.3.1.4).
<br>
&nbsp;&nbsp;My /etc/host looks like
<br>
&nbsp;&nbsp;25.192.xx.xx denver.xxx.com denver
<br>
&nbsp;&nbsp;10.3.1.1 denver.xxx.com denver
<br>
&nbsp;&nbsp;10.3.1.2 denver.xxx.com denver
<br>
&nbsp;&nbsp;25.192.xx.xx chicago.xxx.com chicago
<br>
&nbsp;&nbsp;10.3.1.3 chicago.xxx.com chicago
<br>
&nbsp;&nbsp;10.3.1.4 chicago.xxx.com chicago
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;This is how I run, 
<br>
&nbsp;&nbsp;mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude eth21,eth19,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv 
<br>
&nbsp;&nbsp;I get bunch of things from both chicago and denver, which says its has found components like tcp, sm, self and stuffs, and then hangs at 
<br>
&nbsp;&nbsp;[denver.xxx.com:21682] btl: tcp: attempting to connect() to address 10.3.1.3 on port 4
<br>
&nbsp;&nbsp;[denver.xxx.com:21682] btl: tcp: attempting to connect() to address 10.3.1.4 on port 4
<br>

<br>
&nbsp;&nbsp;However, if I run the same program by excluding eth29 or eth30, then it works fine. Something like this:
<br>
&nbsp;&nbsp;mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude eth21,eth19,eth29,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv 
<br>
&nbsp;&nbsp;My hostfile looks like this
<br>
&nbsp;&nbsp;[sshuser_at_denver Sendrecv]$ cat host1
<br>
&nbsp;&nbsp;denver slots=2
<br>
&nbsp;&nbsp;chicago slots=2
<br>

<br>
&nbsp;&nbsp;I am not sure if I have to provide somethbing else. Please if I have to, please feel to ask me..
<br>
&nbsp;&nbsp;thanks,
<br>
&nbsp;&nbsp;--
<br>
&nbsp;&nbsp;Joba
<br>

<br>

<br>
------------------------------------------------------------------------------
<br>

<br>

<br>
&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18514/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18515.php">Rolf vandeVaart: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18513.php">Jingcha Joba: "[OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18513.php">Jingcha Joba: "[OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18515.php">Rolf vandeVaart: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18515.php">Rolf vandeVaart: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18517.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
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
