<?
$subject_val = "Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 16:55:28 2009" -->
<!-- isoreceived="20090318205528" -->
<!-- sent="Wed, 18 Mar 2009 16:55:22 -0400" -->
<!-- isosent="20090318205522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]" -->
<!-- id="F1E63F8D-F730-44A2-956F-C28B82AE1DD2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C0EB88.7070102_at_meduniwien.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 16:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Previous message:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>In reply to:</strong> <a href="8498.php">Bernhard Knapp: "[OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It means you started the jobs ok (via ssh) but Open MPI wasn't able to  
<br>
open TCP sockets between the two MPI processes.  Open MPI needs to be  
<br>
able to communicate via random TCP ports between its MPI processes.
<br>
<p><p>On Mar 18, 2009, at 8:39 AM, Bernhard Knapp wrote:
<br>
<p><span class="quotelev1">&gt; Hey again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to build a work around  via port redirection: iptables -t  
</span><br>
<span class="quotelev1">&gt; nat -A PREROUTING -i eth1 -p tcp --dport 22 -j REDIRECT --to-port 5101
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I do that then I can start the job:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 -machinefile /home/bknapp/scripts/machinefile.txt  
</span><br>
<span class="quotelev1">&gt; mdrun -np 2 -nice 0 -s 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr - 
</span><br>
<span class="quotelev1">&gt; o 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.trr -c  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.pdb -g  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.log -e  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.edr -v
</span><br>
<span class="quotelev1">&gt; bknapp_at_192.168.0.104's password:
</span><br>
<span class="quotelev1">&gt; NNODES=2, MYRANK=0, HOSTNAME=quoVadis01
</span><br>
<span class="quotelev1">&gt; NNODES=2, MYRANK=1, HOSTNAME=quoVadis04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it comes up with &quot;[quoVadis01][[24802,1],0][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 631:mca_btl_tcp_endpoint_complete_connect] connect() failed: No  
</span><br>
<span class="quotelev1">&gt; route to host (113)&quot;. The CPUs are calculating on both (physically  
</span><br>
<span class="quotelev1">&gt; different machines) but unfortunately no results are written ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was the port redirection of 22 not enough or is there another problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thx
</span><br>
<span class="quotelev1">&gt; Bernhard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------- Original Message --------
</span><br>
<span class="quotelev1">&gt; Subject:
</span><br>
<span class="quotelev1">&gt; Re: open mpi on non standard ssh port
</span><br>
<span class="quotelev1">&gt; Date:
</span><br>
<span class="quotelev1">&gt; Wed, 18 Mar 2009 09:19:18 +0100
</span><br>
<span class="quotelev1">&gt; From:
</span><br>
<span class="quotelev1">&gt; Bernhard Knapp &lt;bernhard.knapp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To:
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; References:
</span><br>
<span class="quotelev1">&gt; &lt;mailman.2006.1237281160.6040.users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; come on, it must be somehow possible to use openmpi not on port  
</span><br>
<span class="quotelev1">&gt; 22!? ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Message: 3
</span><br>
<span class="quotelev2">&gt; &gt;Date: Tue, 17 Mar 2009 09:45:29 +0100
</span><br>
<span class="quotelev2">&gt; &gt;From: Bernhard Knapp &lt;bernhard.knapp_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Subject: [OMPI users] open mpi on non standard ssh port
</span><br>
<span class="quotelev2">&gt; &gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;Message-ID: &lt;49BF6329.8090802_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I want to start a gromacs simulation on a small cluster where non
</span><br>
<span class="quotelev2">&gt; &gt;standard ports are used for ssh. If I just use a &quot;normal&quot;  
</span><br>
<span class="quotelev1">&gt; maschinelist
</span><br>
<span class="quotelev2">&gt; &gt;file (with the ips of the nodes), consequently, the following error
</span><br>
<span class="quotelev2">&gt; &gt;comes up:
</span><br>
<span class="quotelev2">&gt; &gt;ssh: connect to host 192.168.0.103 port 22: Connection refused
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I guess that I need to somehow tell him to use the other ports. I  
</span><br>
<span class="quotelev1">&gt; tried
</span><br>
<span class="quotelev2">&gt; &gt;it in the following way (maschinelist file):
</span><br>
<span class="quotelev2">&gt; &gt;192.168.0.101 -p 5101
</span><br>
<span class="quotelev2">&gt; &gt;192.168.0.102 -p 5102
</span><br>
<span class="quotelev2">&gt; &gt;192.168.0.103 -p 5103
</span><br>
<span class="quotelev2">&gt; &gt;192.168.0.104 -p 5104
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;But it seems this is not the correct way to specifiy the port:
</span><br>
<span class="quotelev2">&gt; &gt;Open RTE detected a parse error in the hostfile:
</span><br>
<span class="quotelev2">&gt; &gt;    /home/bknapp/scripts/machinefile.txt
</span><br>
<span class="quotelev2">&gt; &gt;It occured on line number 1 on token 5:
</span><br>
<span class="quotelev2">&gt; &gt;    -p
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;How can I tell him to use port 5101 on machine 192.168.0.101?
</span><br>
<span class="quotelev2">&gt; &gt;May be the question is stupid but I could not find a solution via  
</span><br>
<span class="quotelev1">&gt; google
</span><br>
<span class="quotelev2">&gt; &gt;or search function ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;cheers
</span><br>
<span class="quotelev2">&gt; &gt;Bernhard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Ing. (FH) Bernhard Knapp
</span><br>
<span class="quotelev1">&gt; Univ.-Ass.postgrad.
</span><br>
<span class="quotelev1">&gt; Unit for Medical Statistics and Informatics - Section for Biomedical  
</span><br>
<span class="quotelev1">&gt; Computersimulation and Bioinformatics
</span><br>
<span class="quotelev1">&gt; Medical University of Vienna - General Hospital
</span><br>
<span class="quotelev1">&gt; Spitalgasse 23 A-1090 WIEN / AUSTRIA
</span><br>
<span class="quotelev1">&gt; Room: BT88 - 88.03.712
</span><br>
<span class="quotelev1">&gt; Phone: +43(1) 40400-6673
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Previous message:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>In reply to:</strong> <a href="8498.php">Bernhard Knapp: "[OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<!-- nextthread="start" -->
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
