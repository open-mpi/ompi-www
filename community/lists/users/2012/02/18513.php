<?
$subject_val = "[OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 15:43:52 2012" -->
<!-- isoreceived="20120216204352" -->
<!-- sent="Thu, 16 Feb 2012 12:43:28 -0800" -->
<!-- isosent="20120216204328" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running an mpi applicatio&amp;#226;&amp;#128;&amp;#139;n on nodes with more than one interface" -->
<!-- id="CAOf_+-U=--BLUs3zTLRVY+T8MMCxBfigOQdOjKyL+8Y66BfD3w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface<br>
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 15:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18512.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Everyone,
<br>
This is my 1st post in open-mpi forum.
<br>
I am trying to run a simple program which does Sendrecv between two nodes
<br>
having 2 interface cards on each of two nodes.
<br>
Both the nodes are running RHEL6, with open-mpi 1.4.4 on a 8 core Xeon
<br>
processor.
<br>
&nbsp;What I noticed was that when using two or more interface on both the
<br>
nodes, the mpi &quot;hangs&quot; attempting to connect.
<br>
These details might help,
<br>
Node 1 - Denver has a single port &quot;A&quot; card (*eth21* - 25.192.xx.xx - which
<br>
I use to ssh to that machine), and a double port &quot;B&quot; card (*eth23* -
<br>
10.3.1.1 &amp; *eth24* - 10.3.1.2).
<br>
Node 2 - Chicago also the same single port A card (*eth19* - 25.192.xx.xx -
<br>
again uses for ssh) and a double port B card ( *eth29* - 10.3.1.3 &amp;
<br>
*eth30*- 10.3.1.4).
<br>
&nbsp;My /etc/host looks like
<br>
25.192.xx.xx denver.xxx.com denver
<br>
10.3.1.1 denver.xxx.com denver
<br>
10.3.1.2 denver.xxx.com denver
<br>
25.192.xx.xx chicago.xxx.com chicago
<br>
10.3.1.3 chicago.xxx.com chicago
<br>
10.3.1.4 chicago.xxx.com chicago
<br>
...
<br>
...
<br>
...
<br>
&nbsp;This is how I run,
<br>
mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude
<br>
eth21,eth19,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv
<br>
&nbsp;I get bunch of things from both chicago and denver, which says its has
<br>
found components like tcp, sm, self and stuffs, and then hangs at
<br>
*[denver.xxx.com:21682] btl: tcp: attempting to connect() to address
<br>
10.3.1.3 on port 4
<br>
[denver.xxx.com:21682] btl: tcp: attempting to connect() to address
<br>
10.3.1.4 on port 4
<br>
*
<br>
However, if I run the same program by excluding eth29 or eth30, then it
<br>
works fine. Something like this:
<br>
mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude
<br>
eth21,eth19,*eth29*,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv
<br>
&nbsp;My hostfile looks like this
<br>
[sshuser_at_denver Sendrecv]$ cat host1
<br>
denver slots=2
<br>
chicago slots=2
<br>
&nbsp;I am not sure if I have to provide somethbing else. Please if I have to,
<br>
please feel to ask me..
<br>
thanks,
<br>
<pre>
--
Joba
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18512.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
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
