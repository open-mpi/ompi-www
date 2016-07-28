<?
$subject_val = "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 09:34:36 2012" -->
<!-- isoreceived="20120217143436" -->
<!-- sent="Fri, 17 Feb 2012 06:34:29 -0800" -->
<!-- isosent="20120217143429" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running an mpi applicatio&amp;#226;&amp;#128;&amp;#139;n on nodes with more than one interface" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8230A45C_at_HQMAIL02.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="19B710A0A6DD4DF99AC2283C5384E7BD_at_starfish" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 09:34:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18516.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18516.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18516.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI cannot handle having two interfaces on a node on the same subnet.  I believe it has to do with our matching code when we try to match up a connection.
<br>
The result is a hang as you observe.  I also believe it is not good practice to have two interfaces on the same subnet.
<br>
If you put them on different subnets, things will work fine and communication will stripe over the two of them.
<br>

<br>
Rolf
<br>

<br>

<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Richard Bardwell
<br>
Sent: Friday, February 17, 2012 5:37 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface
<br>

<br>
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
----- Original Message -----
<br>
From: Jingcha Joba&lt;mailto:pukkimonkey_at_[hidden]&gt;
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Sent: Thursday, February 16, 2012 8:43 PM
<br>
Subject: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface
<br>

<br>
Hello Everyone,
<br>
This is my 1st post in open-mpi forum.
<br>
I am trying to run a simple program which does Sendrecv between two nodes having 2 interface cards on each of two nodes.
<br>
Both the nodes are running RHEL6, with open-mpi 1.4.4 on a 8 core Xeon processor.
<br>
What I noticed was that when using two or more interface on both the nodes, the mpi &quot;hangs&quot; attempting to connect.
<br>
These details might help,
<br>
Node 1 - Denver has a single port &quot;A&quot; card (eth21 - 25.192.xx.xx - which I use to ssh to that machine), and a double port &quot;B&quot; card (eth23 - 10.3.1.1 &amp; eth24 - 10.3.1.2).
<br>
Node 2 - Chicago also the same single port A card (eth19 - 25.192.xx.xx - again uses for ssh) and a double port B card ( eth29 - 10.3.1.3 &amp; eth30 - 10.3.1.4).
<br>
My /etc/host looks like
<br>
25.192.xx.xx denver.xxx.com&lt;<a href="http://denver.xxx.com/">http://denver.xxx.com/</a>&gt; denver
<br>
10.3.1.1 denver.xxx.com&lt;<a href="http://denver.xxx.com/">http://denver.xxx.com/</a>&gt; denver
<br>
10.3.1.2 denver.xxx.com&lt;<a href="http://denver.xxx.com/">http://denver.xxx.com/</a>&gt; denver
<br>
25.192.xx.xx chicago.xxx.com&lt;<a href="http://chicago.xxx.com/">http://chicago.xxx.com/</a>&gt; chicago
<br>
10.3.1.3 chicago.xxx.com&lt;<a href="http://chicago.xxx.com/">http://chicago.xxx.com/</a>&gt; chicago
<br>
10.3.1.4 chicago.xxx.com&lt;<a href="http://chicago.xxx.com/">http://chicago.xxx.com/</a>&gt; chicago
<br>
...
<br>
...
<br>
...
<br>
This is how I run,
<br>
mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude eth21,eth19,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv
<br>
I get bunch of things from both chicago and denver, which says its has found components like tcp, sm, self and stuffs, and then hangs at
<br>
[denver.xxx.com:21682&lt;<a href="http://denver.xxx.com:21682/">http://denver.xxx.com:21682/</a>&gt;] btl: tcp: attempting to connect() to address 10.3.1.3 on port 4
<br>
[denver.xxx.com:21682&lt;<a href="http://denver.xxx.com:21682/">http://denver.xxx.com:21682/</a>&gt;] btl: tcp: attempting to connect() to address 10.3.1.4 on port 4
<br>
However, if I run the same program by excluding eth29 or eth30, then it works fine. Something like this:
<br>
mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude eth21,eth19,eth29,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv
<br>
My hostfile looks like this
<br>
[sshuser_at_denver Sendrecv]$ cat host1
<br>
denver slots=2
<br>
chicago slots=2
<br>
I am not sure if I have to provide somethbing else. Please if I have to, please feel to ask me..
<br>
thanks,
<br>
--
<br>
Joba
<br>
________________________________
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18515/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18516.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18516.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18516.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
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
