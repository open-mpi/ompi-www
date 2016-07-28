<?
$subject_val = "Re: [OMPI users] open mpi on non standard ssh port";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 04:51:28 2009" -->
<!-- isoreceived="20090318085128" -->
<!-- sent="Wed, 18 Mar 2009 09:51:14 +0100" -->
<!-- isosent="20090318085114" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on non standard ssh port" -->
<!-- id="CDE0E7DE-D0FF-4F4E-B19C-CE5088714DB4_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C0AE86.7030803_at_meduniwien.ac.at" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 04:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8496.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8494.php">Bernhard Knapp: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>In reply to:</strong> <a href="8494.php">Bernhard Knapp: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Reply:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernhard,
<br>
<p>Am 18.03.2009 um 09:19 schrieb Bernhard Knapp:
<br>
<p><span class="quotelev1">&gt; come on, it must be somehow possible to use openmpi not on port  
</span><br>
<span class="quotelev1">&gt; 22!? ;-)
</span><br>
<p>it's not an issue of Open MPI but ssh. You need in your home a file  
<br>
~/.ssh/config with two lines:
<br>
<p>host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;port 1234
<br>
<p>or whatever port you need.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 3
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 17 Mar 2009 09:45:29 +0100
</span><br>
<span class="quotelev2">&gt;&gt; From: Bernhard Knapp &lt;bernhard.knapp_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] open mpi on non standard ssh port
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;49BF6329.8090802_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to start a gromacs simulation on a small cluster where non  
</span><br>
<span class="quotelev2">&gt;&gt; standard ports are used for ssh. If I just use a &quot;normal&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; maschinelist file (with the ips of the nodes), consequently, the  
</span><br>
<span class="quotelev2">&gt;&gt; following error comes up:
</span><br>
<span class="quotelev2">&gt;&gt; ssh: connect to host 192.168.0.103 port 22: Connection refused
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess that I need to somehow tell him to use the other ports. I  
</span><br>
<span class="quotelev2">&gt;&gt; tried it in the following way (maschinelist file):
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.0.101 -p 5101
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.0.102 -p 5102
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.0.103 -p 5103
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.0.104 -p 5104
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But it seems this is not the correct way to specifiy the port:
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE detected a parse error in the hostfile:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/bknapp/scripts/machinefile.txt
</span><br>
<span class="quotelev2">&gt;&gt; It occured on line number 1 on token 5:
</span><br>
<span class="quotelev2">&gt;&gt;    -p
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can I tell him to use port 5101 on machine 192.168.0.101?
</span><br>
<span class="quotelev2">&gt;&gt; May be the question is stupid but I could not find a solution via  
</span><br>
<span class="quotelev2">&gt;&gt; google or search function ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers
</span><br>
<span class="quotelev2">&gt;&gt; Bernhard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8496.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8494.php">Bernhard Knapp: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>In reply to:</strong> <a href="8494.php">Bernhard Knapp: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Reply:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
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
