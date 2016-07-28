<?
$subject_val = "[OMPI users] Dual ethernet &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 13:43:01 2007" -->
<!-- isoreceived="20071212184301" -->
<!-- sent="Wed, 12 Dec 2007 13:42:53 -0500" -->
<!-- isosent="20071212184253" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] Dual ethernet &amp;amp; OpenMPI" -->
<!-- id="7FC2164A-343D-4AF3-9C60-41167E3D41A7_at_ieee.org" -->
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
<strong>Subject:</strong> [OMPI users] Dual ethernet &amp; OpenMPI<br>
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 13:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4651.php">Alex Pletzer: "[OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<li><strong>Previous message:</strong> <a href="4649.php">Warner Yuen: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4653.php">George Bosilca: "Re: [OMPI users] Dual ethernet &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4653.php">George Bosilca: "Re: [OMPI users] Dual ethernet &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the past I configured a Linux cluster by bonding two ethernet ports  
<br>
together on each node (with the master having a third port of outside  
<br>
communication); however, recent discussions seem to say that if I have  
<br>
two ethernet cards OpenMPI can handle all the setup itself.
<br>
<p>My question is what address ranges should I use, that is, should both  
<br>
ports be on the same network range, i.e. 10.0.0.x/255.255.255.0, or  
<br>
should they be on separate network ranges, i.e. 10.0.0.x/255.255.255.0  
<br>
and 10.0.1.x/255.255.255.0.
<br>
<p>Would I need a third ethernet card for outside communication or could  
<br>
one port on the master node handle both internal and external  
<br>
communications.
<br>
<p>Would there be any special flags to set this up or would OpenMPI  
<br>
detect the two paths -- obviously each port would have a different IP  
<br>
address if I'm not using bonding so do you just double the host list?
<br>
<p>How would I test if I have doubled my bandwidth?
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4651.php">Alex Pletzer: "[OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<li><strong>Previous message:</strong> <a href="4649.php">Warner Yuen: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4653.php">George Bosilca: "Re: [OMPI users] Dual ethernet &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4653.php">George Bosilca: "Re: [OMPI users] Dual ethernet &amp; OpenMPI"</a>
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
