<?
$subject_val = "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 17:50:08 2007" -->
<!-- isoreceived="20071218225008" -->
<!-- sent="Tue, 18 Dec 2007 17:49:54 -0500" -->
<!-- isosent="20071218224954" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4" -->
<!-- id="47684E92.2010302_at_sympatico.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4" -->
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
<strong>Subject:</strong> Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4<br>
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 17:49:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4723.php">George Bosilca: "[OMPI users] EuroPVM/MPI 2008 First Call for Papers"</a>
<li><strong>Previous message:</strong> <a href="4721.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Allan,
<br>
<p>This suggest that your chipset is not able to handle the full PCI-E  
<br>
speed on more than 3 ports. This usually depends on the way the PCI-E  
<br>
links are wired trough the ports and the capacity of the chipset  
<br>
itself. As an exemple we were never able to reach fullspeed  
<br>
performance with Myrinet 10g on IBM e325 nodes, because of chipset  
<br>
limitations. We had to make the node changed to solve the issue.  
<br>
Running several instances of NPtcp should somewhat show the bandwith  
<br>
limit of the PCI-E bus on your machine.
<br>
<p>Aurelien
<br>
Hi Aurelien or anybody else,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How do you run several instances of NPtcp simultaneouly between two idential nodes a1, a2 through 3 similat gigabit etherenet cards with different subnets and switches.
<br>
a1: eth0 - 192.168.1.1 eth2 - 192.168.5.1 eth3 - 192.168.8.1
<br>
a2: eth0 - 192.168.1.2 eth2 - 192.168.5.2 eth3 - 192.168.8.2
<br>
This is the way i do it currently.
<br>
on a1:&gt;./NPtcp
<br>
ssh a2
<br>
a2&gt; ./NPtcp -h 192.168.1.1 -n 50
<br>
for tcp b/w of eth0 and so on sor eth2 and eth3
<br>
I do not how to do it simultaneosly ie check the total b/w of eth0+eth2+eth3 at the same time in one invocation of ./NPtcp.
<br>
I can do it with mpirun and NPmpi 
<br>
Can some one please tell me how to do it with NPtcp because i do not know.
<br>
Regards,
<br>
Allan Menezes
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4723.php">George Bosilca: "[OMPI users] EuroPVM/MPI 2008 First Call for Papers"</a>
<li><strong>Previous message:</strong> <a href="4721.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
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
