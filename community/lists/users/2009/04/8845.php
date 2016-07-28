<?
$subject_val = "[OMPI users] mpirun self,sm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 00:17:30 2009" -->
<!-- isoreceived="20090409041730" -->
<!-- sent="Thu, 9 Apr 2009 00:15:03 -0400" -->
<!-- isosent="20090409041503" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun self,sm" -->
<!-- id="99AB3654-DD6A-4E96-94AC-B741073821ED_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] mpirun self,sm<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 00:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8846.php">Ralph Castain: "Re: [OMPI users] mpirun self,sm"</a>
<li><strong>Previous message:</strong> <a href="8844.php">Jeff Squyres: "Re: [OMPI users] MPI can not open file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8846.php">Ralph Castain: "Re: [OMPI users] mpirun self,sm"</a>
<li><strong>Reply:</strong> <a href="8846.php">Ralph Castain: "Re: [OMPI users] mpirun self,sm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How is this possible?
<br>
<p>dx:~&gt; mpirun -v -np 2 --mca btl self,sm --host dx,sx hostname
<br>
dx
<br>
sx
<br>
<p>dx:~&gt; netstat -i
<br>
Kernel Interface table
<br>
Iface   MTU Met   RX-OK RX-ERR RX-DRP RX-OVR   TX-OK TX-ERR TX-DRP TX- 
<br>
OVR Flg
<br>
eth0   1500   0  998755      0      0      0 1070323      0       
<br>
0      0 BMRU
<br>
eth1   1500   0   85352      0      0      0  379993      0       
<br>
0      0 BMRU
<br>
ib0   65520   0     204      0      0      0     155      0       
<br>
5      0 BMRU
<br>
lo    16436   0 1648874      0      0      0 1648874      0       
<br>
0      0 LRU
<br>
<p>I want to force an error with the first command above to make sure  
<br>
that my btl parameters are used correctly, but it looks like ompi  
<br>
runs hostname on the remote machine regardless.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8846.php">Ralph Castain: "Re: [OMPI users] mpirun self,sm"</a>
<li><strong>Previous message:</strong> <a href="8844.php">Jeff Squyres: "Re: [OMPI users] MPI can not open file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8846.php">Ralph Castain: "Re: [OMPI users] mpirun self,sm"</a>
<li><strong>Reply:</strong> <a href="8846.php">Ralph Castain: "Re: [OMPI users] mpirun self,sm"</a>
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
