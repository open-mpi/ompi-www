<?
$subject_val = "Re: [OMPI users] Communications Problems when application distributed over different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 18:31:46 2008" -->
<!-- isoreceived="20080118233146" -->
<!-- sent="Fri, 18 Jan 2008 18:31:27 -0500" -->
<!-- isosent="20080118233127" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communications Problems when application distributed over different nodes" -->
<!-- id="B5105961-02C1-4AFB-92A0-CED426F6C4BD_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="478DDE0B.60404_at_physik.uni-saarland.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communications Problems when application distributed over different nodes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 18:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4851.php">Berit Hinnemann: "[OMPI users] behi is out of the office."</a>
<li><strong>Previous message:</strong> <a href="4849.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>In reply to:</strong> <a href="4843.php">Roland Albrecht: "[OMPI users] Communications Problems when application distributed over different nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have the Linux firewall running on either of your machines,  
<br>
perchance?  This can either block random socket connections between  
<br>
nodes (which Open MPI's TCP communication will use) or eat the  
<br>
connection requests in a black-hole fashion such that the connections  
<br>
will timeout.
<br>
<p><p><p>On Jan 16, 2008, at 5:35 AM, Roland Albrecht wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running an FDTD programm (meep) using open-mpi on a mini-cluster  
</span><br>
<span class="quotelev1">&gt; consisting of 2 computers. Since the exchange of the mainbord on the  
</span><br>
<span class="quotelev1">&gt; node (with an identical one as before) I have a problem. I can't  
</span><br>
<span class="quotelev1">&gt; find the change in the configurations which is now causing the  
</span><br>
<span class="quotelev1">&gt; problen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's my problem:
</span><br>
<span class="quotelev1">&gt; I can start the meep application by mpi-run on each node  
</span><br>
<span class="quotelev1">&gt; individually and the program runs without any problems.
</span><br>
<span class="quotelev1">&gt; However when I try to run the program distributed over both  
</span><br>
<span class="quotelev1">&gt; computers I get at some point the following error message:
</span><br>
<span class="quotelev1">&gt; ...[0,1,1][btl_tcp_endpoint.c:  
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=110
</span><br>
<span class="quotelev1">&gt; Which translates by Perl as: Connection timed out at -e line 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I can't figure out where the problem lies in my network  
</span><br>
<span class="quotelev1">&gt; configuration. SSH tunnels from one computer to another works. I  
</span><br>
<span class="quotelev1">&gt; also can reach the internet from the node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the attached archive there's the config.log from the top open-mpi  
</span><br>
<span class="quotelev1">&gt; tree, there's the output of ompi_info --all and there's the network  
</span><br>
<span class="quotelev1">&gt; configuration of both computers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm really greatfull for any help. Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Roland Albrecht
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roland Albrecht, Dipl. Phys. ETH
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Universit&#228;t des Saarlandes
</span><br>
<span class="quotelev1">&gt; Fachrichtung 7.3 (Technische Physik)
</span><br>
<span class="quotelev1">&gt; AG Prof. Dr. Christoph Becher
</span><br>
<span class="quotelev1">&gt; Campus E2.6, Zimmer 2.04
</span><br>
<span class="quotelev1">&gt; D-66123 Saarbr&#252;cken
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone:+49(0)681 302 3418
</span><br>
<span class="quotelev1">&gt; Fax: +49(0)681 302 4676
</span><br>
<span class="quotelev1">&gt; skype: roland_albrecht
</span><br>
<span class="quotelev1">&gt; &lt;mpi.rar&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="4851.php">Berit Hinnemann: "[OMPI users] behi is out of the office."</a>
<li><strong>Previous message:</strong> <a href="4849.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>In reply to:</strong> <a href="4843.php">Roland Albrecht: "[OMPI users] Communications Problems when application distributed over different nodes"</a>
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
