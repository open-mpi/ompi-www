<?
$subject_val = "[OMPI users] Compiling on different servers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 01:02:18 2008" -->
<!-- isoreceived="20081106060218" -->
<!-- sent="Thu, 6 Nov 2008 01:00:20 -0500" -->
<!-- isosent="20081106060020" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling on different servers" -->
<!-- id="628928FF-561C-4751-9ED4-72EFBAE8C35B_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Compiling on different servers<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 01:00:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7218.php">Raymond Wan: "[OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7216.php">Peter Beerli: "[OMPI users] program stalls in __write_nocancel()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Reply:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to this FAQ, one should be able to compile on a computer  
<br>
and then run the OMPI program on different hardware, as far as the c+ 
<br>
+ compiler and OMPI versions are the same: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
<br>
faq/?category=sysadmin#new-openmpi-version
<br>
<p>I have the following situation:
<br>
<p>Server 1
<br>
Fabric: Ethernet
<br>
Compiler: g++ 4.2
<br>
OpenMPI: 1.2.8
<br>
<p>Server 2
<br>
Fabric: InfiniBand/Ethernet
<br>
Compiler: g++ 4.2
<br>
OpenMPI: 1.2.8
<br>
<p>Can I compile my program on Server 1 and then run it on Server 2 on  
<br>
IB (mpirun --mca btl openib,self...) ?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7218.php">Raymond Wan: "[OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7216.php">Peter Beerli: "[OMPI users] program stalls in __write_nocancel()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Reply:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
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
