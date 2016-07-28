<?
$subject_val = "[OMPI users] Communications Problems when application distributed over different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 05:36:03 2008" -->
<!-- isoreceived="20080116103603" -->
<!-- sent="Wed, 16 Jan 2008 11:35:55 +0100" -->
<!-- isosent="20080116103555" -->
<!-- name="Roland Albrecht" -->
<!-- email="r.albrecht_at_[hidden]" -->
<!-- subject="[OMPI users] Communications Problems when application distributed over different nodes" -->
<!-- id="478DDE0B.60404_at_physik.uni-saarland.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Communications Problems when application distributed over different nodes<br>
<strong>From:</strong> Roland Albrecht (<em>r.albrecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-16 05:35:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4844.php">Brock Palen: "[OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>Previous message:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4850.php">Jeff Squyres: "Re: [OMPI users] Communications Problems when application distributed over different nodes"</a>
<li><strong>Reply:</strong> <a href="4850.php">Jeff Squyres: "Re: [OMPI users] Communications Problems when application distributed over different nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I'm running an FDTD programm (meep) using open-mpi on a mini-cluster 
<br>
consisting of 2 computers. Since the exchange of the mainbord on the 
<br>
node (with an identical one as before) I have a problem. I can't find 
<br>
the change in the configurations which is now causing the problen.
<br>
<p>Here's my problem:
<br>
I can start the meep application by mpi-run on each node individually 
<br>
and the program runs without any problems.
<br>
However when I try to run the program distributed over both computers I 
<br>
get at some point the following error message:
<br>
...[0,1,1][btl_tcp_endpoint.c: 
<br>
572:mca_btl_tcp_endpoint_complete_connect] connect() failed with errno=110
<br>
Which translates by Perl as: Connection timed out at -e line 1.
<br>
<p>However I can't figure out where the problem lies in my network 
<br>
configuration. SSH tunnels from one computer to another works. I also 
<br>
can reach the internet from the node.
<br>
<p>In the attached archive there's the config.log from the top open-mpi 
<br>
tree, there's the output of ompi_info --all and there's the network 
<br>
configuration of both computers.
<br>
<p>I'm really greatfull for any help. Thank you!
<br>
<p>Best regards
<br>
Roland Albrecht
<br>
<p><pre>
-- 
___________________________________________
Roland Albrecht, Dipl. Phys. ETH
-------------------------------------------
Universit&#228;t des Saarlandes
Fachrichtung 7.3 (Technische Physik)
AG Prof. Dr. Christoph Becher
Campus E2.6, Zimmer 2.04
D-66123 Saarbr&#252;cken
Germany
Phone:+49(0)681 302 3418
Fax: +49(0)681 302 4676
skype: roland_albrecht

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4843/mpi.rar">mpi.rar</a>
</ul>
<!-- attachment="mpi.rar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4844.php">Brock Palen: "[OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>Previous message:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4850.php">Jeff Squyres: "Re: [OMPI users] Communications Problems when application distributed over different nodes"</a>
<li><strong>Reply:</strong> <a href="4850.php">Jeff Squyres: "Re: [OMPI users] Communications Problems when application distributed over different nodes"</a>
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
