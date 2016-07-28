<?
$subject_val = "Re: [OMPI users] open mpi on non standard ssh port";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 04:19:21 2009" -->
<!-- isoreceived="20090318081921" -->
<!-- sent="Wed, 18 Mar 2009 09:19:18 +0100" -->
<!-- isosent="20090318081918" -->
<!-- name="Bernhard Knapp" -->
<!-- email="bernhard.knapp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on non standard ssh port" -->
<!-- id="49C0AE86.7030803_at_meduniwien.ac.at" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.2006.1237281160.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on non standard ssh port<br>
<strong>From:</strong> Bernhard Knapp (<em>bernhard.knapp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 04:19:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8493.php">Reuti: "Re: [OMPI users] openmpi 1.3 and gridengine tight integration problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Reply:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
come on, it must be somehow possible to use openmpi not on port 22!? ;-)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 3
</span><br>
<span class="quotelev1">&gt;Date: Tue, 17 Mar 2009 09:45:29 +0100
</span><br>
<span class="quotelev1">&gt;From: Bernhard Knapp &lt;bernhard.knapp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] open mpi on non standard ssh port
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;49BF6329.8090802_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I want to start a gromacs simulation on a small cluster where non 
</span><br>
<span class="quotelev1">&gt;standard ports are used for ssh. If I just use a &quot;normal&quot; maschinelist 
</span><br>
<span class="quotelev1">&gt;file (with the ips of the nodes), consequently, the following error 
</span><br>
<span class="quotelev1">&gt;comes up:
</span><br>
<span class="quotelev1">&gt;ssh: connect to host 192.168.0.103 port 22: Connection refused
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I guess that I need to somehow tell him to use the other ports. I tried 
</span><br>
<span class="quotelev1">&gt;it in the following way (maschinelist file):
</span><br>
<span class="quotelev1">&gt;192.168.0.101 -p 5101
</span><br>
<span class="quotelev1">&gt;192.168.0.102 -p 5102
</span><br>
<span class="quotelev1">&gt;192.168.0.103 -p 5103
</span><br>
<span class="quotelev1">&gt;192.168.0.104 -p 5104
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But it seems this is not the correct way to specifiy the port:
</span><br>
<span class="quotelev1">&gt;Open RTE detected a parse error in the hostfile:
</span><br>
<span class="quotelev1">&gt;    /home/bknapp/scripts/machinefile.txt
</span><br>
<span class="quotelev1">&gt;It occured on line number 1 on token 5:
</span><br>
<span class="quotelev1">&gt;    -p
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;How can I tell him to use port 5101 on machine 192.168.0.101?
</span><br>
<span class="quotelev1">&gt;May be the question is stupid but I could not find a solution via google 
</span><br>
<span class="quotelev1">&gt;or search function ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;cheers
</span><br>
<span class="quotelev1">&gt;Bernhard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8493.php">Reuti: "Re: [OMPI users] openmpi 1.3 and gridengine tight integration problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Reply:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
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
