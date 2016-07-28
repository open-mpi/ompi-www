<?
$subject_val = "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 12:00:10 2012" -->
<!-- isoreceived="20120217170010" -->
<!-- sent="Fri, 17 Feb 2012 08:59:46 -0800" -->
<!-- isosent="20120217165946" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running an mpi applicatio&amp;#226;&amp;#128;&amp;#139;n on nodes with more than one interface" -->
<!-- id="CAOf_+-UvHndjbv=nhYViDwY+qqezJoLCj4hOt-hRWHZ_yh7tdw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1EBAFD1EEDC14D1B8877907F004382AE_at_starfish" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 11:59:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18522.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18522.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. I did.
<br>
Because it was a same NIC with two ports each capable of delivering 5gb/s,
<br>
I never thought that they should be in different subnet.
<br>
But once I changed the subnet for one of the ports on both the nodes, it
<br>
seemed to work..
<br>
<p><p>Also, I am looking for a good way to start understanding the implementation
<br>
level details for OpenMPI. Can you point me to some good source?
<br>
(PS: To start with, I have already read the FAQ section)
<br>
<p><p>thanks a lot for the help
<br>
<pre>
--
Joba
On Fri, Feb 17, 2012 at 8:30 AM, Richard Bardwell &lt;richard_at_[hidden]&gt;wrote:
&gt; Yes, they were on the same subnet. I guess that is the problem.
&gt;
&gt; ----- Original Message ----- From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
&gt; Sent: Friday, February 17, 2012 4:20 PM
&gt; Subject: Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes
&gt; with more than one interface
&gt;
&gt;
&gt;
&gt;  Did you have both of the ethernet ports on the same subnet, or were they
&gt;&gt; on different subnets?
&gt;&gt;
&gt;&gt;
&gt;&gt; On Feb 17, 2012, at 5:36 AM, Richard Bardwell wrote:
&gt;&gt;
&gt;&gt;  I had exactly the same problem.
&gt;&gt;&gt; Trying to run mpi between 2 separate machines, with each machine having
&gt;&gt;&gt; 2 ethernet ports, causes really weird behaviour on the most basic code.
&gt;&gt;&gt; I had to disable one of the ethernet ports on each of the machines
&gt;&gt;&gt; and it worked just fine after that. No idea why though !
&gt;&gt;&gt;
&gt;&gt;&gt; ----- Original Message -----
&gt;&gt;&gt; From: Jingcha Joba
&gt;&gt;&gt; To: users_at_[hidden]
&gt;&gt;&gt; Sent: Thursday, February 16, 2012 8:43 PM
&gt;&gt;&gt; Subject: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with
&gt;&gt;&gt; more than one interface
&gt;&gt;&gt;
&gt;&gt;&gt; Hello Everyone,
&gt;&gt;&gt; This is my 1st post in open-mpi forum.
&gt;&gt;&gt; I am trying to run a simple program which does Sendrecv between two
&gt;&gt;&gt; nodes having 2 interface cards on each of two nodes.
&gt;&gt;&gt; Both the nodes are running RHEL6, with open-mpi 1.4.4 on a 8 core Xeon
&gt;&gt;&gt; processor.
&gt;&gt;&gt; What I noticed was that when using two or more interface on both the
&gt;&gt;&gt; nodes, the mpi &quot;hangs&quot; attempting to connect.
&gt;&gt;&gt; These details might help,
&gt;&gt;&gt; Node 1 - Denver has a single port &quot;A&quot; card (eth21 - 25.192.xx.xx - which
&gt;&gt;&gt; I use to ssh to that machine), and a double port &quot;B&quot; card (eth23 - 10.3.1.1
&gt;&gt;&gt; &amp; eth24 - 10.3.1.2).
&gt;&gt;&gt; Node 2 - Chicago also the same single port A card (eth19 - 25.192.xx.xx
&gt;&gt;&gt; - again uses for ssh) and a double port B card ( eth29 - 10.3.1.3 &amp;eth30 -
&gt;&gt;&gt; 10.3.1.4).
&gt;&gt;&gt; My /etc/host looks like
&gt;&gt;&gt; 25.192.xx.xx denver.xxx.com denver
&gt;&gt;&gt; 10.3.1.1 denver.xxx.com denver
&gt;&gt;&gt; 10.3.1.2 denver.xxx.com denver
&gt;&gt;&gt; 25.192.xx.xx chicago.xxx.com chicago
&gt;&gt;&gt; 10.3.1.3 chicago.xxx.com chicago
&gt;&gt;&gt; 10.3.1.4 chicago.xxx.com chicago
&gt;&gt;&gt; ...
&gt;&gt;&gt; ...
&gt;&gt;&gt; ...
&gt;&gt;&gt; This is how I run,
&gt;&gt;&gt; mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude
&gt;&gt;&gt; eth21,eth19,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv
&gt;&gt;&gt; I get bunch of things from both chicago and denver, which says its has
&gt;&gt;&gt; found components like tcp, sm, self and stuffs, and then hangs at
&gt;&gt;&gt; [denver.xxx.com:21682] btl: tcp: attempting to connect() to address
&gt;&gt;&gt; 10.3.1.3 on port 4
&gt;&gt;&gt; [denver.xxx.com:21682] btl: tcp: attempting to connect() to address
&gt;&gt;&gt; 10.3.1.4 on port 4
&gt;&gt;&gt; However, if I run the same program by excluding eth29 or eth30, then it
&gt;&gt;&gt; works fine. Something like this:
&gt;&gt;&gt; mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude
&gt;&gt;&gt; eth21,eth19,eth29,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv
&gt;&gt;&gt; My hostfile looks like this
&gt;&gt;&gt; [sshuser_at_denver Sendrecv]$ cat host1
&gt;&gt;&gt; denver slots=2
&gt;&gt;&gt; chicago slots=2
&gt;&gt;&gt; I am not sure if I have to provide somethbing else. Please if I have to,
&gt;&gt;&gt; please feel to ask me..
&gt;&gt;&gt; thanks,
&gt;&gt;&gt; --
&gt;&gt;&gt; Joba
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ______________________________**_________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
&gt;&gt;&gt; ______________________________**_________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/**about/doing_business/legal/**cri/<http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/**about/doing_business/legal/**cri/<http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; ______________________________**_________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
&gt;&gt;
&gt;
&gt;
&gt; ______________________________**_________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18522.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18522.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
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
