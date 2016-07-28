<?
$subject_val = "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 23:06:17 2009" -->
<!-- isoreceived="20090529030617" -->
<!-- sent="Thu, 28 May 2009 20:06:09 -0700 (PDT)" -->
<!-- isosent="20090529030609" -->
<!-- name="shan axida" -->
<!-- email="axida2009_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????" -->
<!-- id="899042.8431.qm_at_web62002.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8864ED55-66A8-424E-B1B9-249F033816DE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????<br>
<strong>From:</strong> shan axida (<em>axida2009_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 23:06:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9441.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9491.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9491.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you! Mr. Jeff Squyres,
I have conducted a simple MPI_Bcast experiment in out cluster.
The results are shown in the file attached on this e-mail.
The hostfile is :
-----------------
hostname1 slots=4
hostname2 slots=4
hostname3 slots=4
....
....
hostname16 slots=4
-----------------
As we can see in the figure, it is little faster than single link
when we use 2,3,4 links between nodes.
My question is what would be the reason to make almost the same 
performance when we use 2,3,4 links ?

Thank you!

Axida






________________________________
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Wednesday, May 27, 2009 11:28:42 PM
Subject: Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????

Open MPI considers hosts differently than network links.

So you should only list the actual hostname in the hostfile, with slots equal to the number of processors (4 in your case, I think?).

Once the MPI processes are launched, they each look around on the host that they're running and find network paths to each of their peers.  If they are multiple paths between pairs of peers, Open MPI will round-robin stripe messages across each of the links.  We don't really have an easy setting for each peer pair only using 1 link.  Indeed, since connectivity is bidirectional, the traffic patterns become less obvious if you want MPI_COMM_WORLD rank X to only use link Y -- what does that mean to the other 4 MPI processes on the other host (with whom you have assumedly assigned their own individual links as well)?


On May 26, 2009, at 12:24 AM, shan axida wrote:

&gt; Hi everyone,
&gt; I want to ask how to use multiple links (multiple NICs) with OpenMPI.
&gt; For example, how can I assign a link to each process, if there are 4 links
&gt; and 4 processors on each node in our cluster?
&gt; Is this a correct way?
&gt; hostfile:
&gt; ----------------------
&gt; host1-eth0 slots=1
&gt; host1-eth1 slots=1
&gt; host1-eth2 slots=1
&gt; host1-eth3 slots=1
&gt; host2-eth0 slots=1
&gt; host2-eth1 slots=1
&gt; host2-eth2 slots=1
&gt; host2-eth3 slots=1
&gt; ...             ...
&gt; ...          ...
&gt; host16-eth0 slots=1
&gt; host16-eth1 slots=1
&gt; host16-eth2 slots=1
&gt; host16-eth3 slots=1
&gt; ------------------------
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


--Jeff Squyres
Cisco Systems

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>



      
<br>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9462/MPI_Bcast-ypc05xx.pdf">MPI_Bcast-ypc05xx.pdf</a>
</ul>
<!-- attachment="MPI_Bcast-ypc05xx.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9441.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9491.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9491.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
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
