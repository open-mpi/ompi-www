<?
$subject_val = "Re: [OMPI users] Option to use only 7 cores out of 8 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 13:11:33 2010" -->
<!-- isoreceived="20100302181133" -->
<!-- sent="Tue, 2 Mar 2010 12:10:21 -0600" -->
<!-- isosent="20100302181021" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Option to use only 7 cores out of 8 on each node" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640D0AF2F440A_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71d2d8cc1003020955v47f488e8ve8430633b668edbd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Option to use only 7 cores out of 8 on each node<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 13:10:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12204.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correct, i was not clear. It spawns more than 7  processes per node. (It spawns 8 of them).
<br>
Rangam 
<br>
<p><p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Tuesday, March 02, 2010 11:55 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Option to use only 7 cores out of 8 on each node
<br>
<p>When you say &quot;it fails&quot;, what do you mean? That it doesn't run at all, or that it still fills each node, or...?
<br>
<p><p>On Tue, Mar 2, 2010 at 9:49 AM, Addepalli, Srirangam V &lt;srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt; wrote:
<br>
Hello All.
<br>
I am trying to run a parallel application that should use one core less than the no of cores that are available on the system. Are there any flags that i can use to specify this.
<br>
<p>i tried using the following syntax with machinefile
<br>
<p>openmpi-1.4-BM/bin/mpirun -np 14 -npernode 7 -machinefile machinefile ven_nw.e &lt;coll.dt5.  This fails. Is there any other way around this. When i get two nodes (with 16 cores) allocated from SGE
<br>
and we want to use only 14 cores out of the 16 allocated.
<br>
<p>Rangam
<br>
<p>My machine file has
<br>
<p>compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12204.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
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
