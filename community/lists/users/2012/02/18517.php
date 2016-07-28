<?
$subject_val = "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 11:20:37 2012" -->
<!-- isoreceived="20120217162037" -->
<!-- sent="Fri, 17 Feb 2012 11:20:33 -0500" -->
<!-- isosent="20120217162033" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running an mpi applicatio&amp;#226;&amp;#128;&amp;#139;n on nodes with more than one interface" -->
<!-- id="92E969BE-A91D-40E8-B32D-9148F8736985_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 11:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18516.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you have both of the ethernet ports on the same subnet, or were they on different subnets?
<br>
<p><p>On Feb 17, 2012, at 5:36 AM, Richard Bardwell wrote:
<br>
<p><span class="quotelev1">&gt; I had exactly the same problem.
</span><br>
<span class="quotelev1">&gt; Trying to run mpi between 2 separate machines, with each machine having
</span><br>
<span class="quotelev1">&gt; 2 ethernet ports, causes really weird behaviour on the most basic code.
</span><br>
<span class="quotelev1">&gt; I had to disable one of the ethernet ports on each of the machines
</span><br>
<span class="quotelev1">&gt; and it worked just fine after that. No idea why though !
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: Jingcha Joba
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, February 16, 2012 8:43 PM
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Everyone,
</span><br>
<span class="quotelev1">&gt; This is my 1st post in open-mpi forum.
</span><br>
<span class="quotelev1">&gt; I am trying to run a simple program which does Sendrecv between two nodes having 2 interface cards on each of two nodes.
</span><br>
<span class="quotelev1">&gt; Both the nodes are running RHEL6, with open-mpi 1.4.4 on a 8 core Xeon processor.
</span><br>
<span class="quotelev1">&gt; What I noticed was that when using two or more interface on both the nodes, the mpi &quot;hangs&quot; attempting to connect.
</span><br>
<span class="quotelev1">&gt; These details might help,
</span><br>
<span class="quotelev1">&gt; Node 1 - Denver has a single port &quot;A&quot; card (eth21 - 25.192.xx.xx - which I use to ssh to that machine), and a double port &quot;B&quot; card (eth23 - 10.3.1.1 &amp; eth24 - 10.3.1.2).
</span><br>
<span class="quotelev1">&gt; Node 2 - Chicago also the same single port A card (eth19 - 25.192.xx.xx - again uses for ssh) and a double port B card ( eth29 - 10.3.1.3 &amp;eth30 - 10.3.1.4).
</span><br>
<span class="quotelev1">&gt; My /etc/host looks like
</span><br>
<span class="quotelev1">&gt; 25.192.xx.xx denver.xxx.com denver
</span><br>
<span class="quotelev1">&gt; 10.3.1.1 denver.xxx.com denver
</span><br>
<span class="quotelev1">&gt; 10.3.1.2 denver.xxx.com denver
</span><br>
<span class="quotelev1">&gt; 25.192.xx.xx chicago.xxx.com chicago
</span><br>
<span class="quotelev1">&gt; 10.3.1.3 chicago.xxx.com chicago
</span><br>
<span class="quotelev1">&gt; 10.3.1.4 chicago.xxx.com chicago
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; This is how I run,
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude eth21,eth19,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv
</span><br>
<span class="quotelev1">&gt; I get bunch of things from both chicago and denver, which says its has found components like tcp, sm, self and stuffs, and then hangs at
</span><br>
<span class="quotelev1">&gt; [denver.xxx.com:21682] btl: tcp: attempting to connect() to address 10.3.1.3 on port 4
</span><br>
<span class="quotelev1">&gt; [denver.xxx.com:21682] btl: tcp: attempting to connect() to address 10.3.1.4 on port 4
</span><br>
<span class="quotelev1">&gt; However, if I run the same program by excluding eth29 or eth30, then it works fine. Something like this:
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile host1 --mca btl tcp,sm,self --mca btl_tcp_if_exclude eth21,eth19,eth29,lo,virbr0 --mca btl_base_verbose 30 -np 4 ./Sendrecv
</span><br>
<span class="quotelev1">&gt; My hostfile looks like this
</span><br>
<span class="quotelev1">&gt; [sshuser_at_denver Sendrecv]$ cat host1
</span><br>
<span class="quotelev1">&gt; denver slots=2
</span><br>
<span class="quotelev1">&gt; chicago slots=2
</span><br>
<span class="quotelev1">&gt; I am not sure if I have to provide somethbing else. Please if I have to, please feel to ask me..
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joba
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18516.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18514.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Reply:</strong> <a href="18518.php">Richard Bardwell: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
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
