<?
$subject_val = "[OMPI users] [Fwd: Re: open mpi on non standard ssh port]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 08:39:39 2009" -->
<!-- isoreceived="20090318123939" -->
<!-- sent="Wed, 18 Mar 2009 13:39:36 +0100" -->
<!-- isosent="20090318123936" -->
<!-- name="Bernhard Knapp" -->
<!-- email="bernhard.knapp_at_[hidden]" -->
<!-- subject="[OMPI users] [Fwd: Re: open mpi on non standard ssh port]" -->
<!-- id="49C0EB88.7070102_at_meduniwien.ac.at" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] [Fwd: Re: open mpi on non standard ssh port]<br>
<strong>From:</strong> Bernhard Knapp (<em>bernhard.knapp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 08:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8499.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<li><strong>Previous message:</strong> <a href="8497.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<li><strong>Reply:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey again,
<br>
<p>I tried to build a work around  via port redirection: iptables -t nat -A 
<br>
PREROUTING -i eth1 -p tcp --dport 22 -j REDIRECT --to-port 5101
<br>
<p><p>If I do that then I can start the job:
<br>
<p>&nbsp;mpirun -np 2 -machinefile /home/bknapp/scripts/machinefile.txt mdrun 
<br>
-np 2 -nice 0 -s 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr -o 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.trr -c 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.pdb -g 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.log -e 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.edr -v
<br>
bknapp_at_192.168.0.104's password:
<br>
NNODES=2, MYRANK=0, HOSTNAME=quoVadis01
<br>
NNODES=2, MYRANK=1, HOSTNAME=quoVadis04
<br>
<p>but it comes up with 
<br>
&quot;[quoVadis01][[24802,1],0][btl_tcp_endpoint.c:631:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed: No route to host (113)&quot;. The CPUs are calculating on 
<br>
both (physically different machines) but unfortunately no results are 
<br>
written ...
<br>
<p>Was the port redirection of 22 not enough or is there another problem?
<br>
<p>thx
<br>
Bernhard
<br>
<p><p><p><p><p>-------- Original Message --------
<br>
Subject: 	Re: open mpi on non standard ssh port
<br>
Date: 	Wed, 18 Mar 2009 09:19:18 +0100
<br>
From: 	Bernhard Knapp &lt;bernhard.knapp_at_[hidden]&gt;
<br>
To: 	users_at_[hidden]
<br>
References: 	&lt;mailman.2006.1237281160.6040.users_at_[hidden]&gt;
<br>
<p><p><p>come on, it must be somehow possible to use openmpi not on port 22!? ;-)
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
<p><p><pre>
-- 
Dipl.-Ing. (FH) Bernhard Knapp
Univ.-Ass.postgrad.
Unit for Medical Statistics and Informatics - Section for Biomedical Computersimulation and Bioinformatics
Medical University of Vienna - General Hospital
Spitalgasse 23 A-1090 WIEN / AUSTRIA
Room: BT88 - 88.03.712
Phone: +43(1) 40400-6673
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8498/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8499.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<li><strong>Previous message:</strong> <a href="8497.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<li><strong>Reply:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
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
