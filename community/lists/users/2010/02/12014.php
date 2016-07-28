<?
$subject_val = "[OMPI users] hostfiles";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 18:35:36 2010" -->
<!-- isoreceived="20100204233536" -->
<!-- sent="Thu, 04 Feb 2010 15:37:16 -0800" -->
<!-- isosent="20100204233716" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI users] hostfiles" -->
<!-- id="4B6B5A2C.5020302_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI users] hostfiles<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 18:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12015.php">Ralph Castain: "Re: [OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12013.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12015.php">Ralph Castain: "Re: [OMPI users] hostfiles"</a>
<li><strong>Reply:</strong> <a href="12015.php">Ralph Castain: "Re: [OMPI users] hostfiles"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd check the man page, but since I just rewrote it I don't think that's 
<br>
going to help!
<br>
<p>I have two nodes, A and B, and I run &quot;mpirun -hostfile myhostfile 
<br>
-tag-output hostname&quot; with five different hostfiles.  Here is what I get:
<br>
<p>B slots=2
<br>
B slots=2
<br>
A slots=2
<br>
A slots=2
<br>
B B B B A A A A
<br>
<p>B slots=2
<br>
A slots=2
<br>
B slots=2
<br>
A slots=2
<br>
B B B B A A A A
<br>
<p>A slots=2
<br>
B slots=2
<br>
A slots=2
<br>
B slots=2
<br>
A A A A B B B B
<br>
<p>B slots=2
<br>
A slots=2
<br>
A slots=2
<br>
B slots=2
<br>
A A A A B B B B
<br>
<p>A slots=1
<br>
B slots=1
<br>
A slots=1
<br>
B slots=1
<br>
A slots=1
<br>
B slots=1
<br>
A slots=1
<br>
B slots=1
<br>
A A A A B B B B
<br>
<p>This is with openmpi-1.7a1r22109.  After each hostfile, I list the nodes 
<br>
I get in MPI rank order.  So, it appears the hostfile cannot be used to 
<br>
control in what order processes are mapped to nodes.  It can only be 
<br>
used to specify the total number of slots per node.  Slots are filled up 
<br>
one node at a time.  I assume we don't want to make any claims about the 
<br>
node order?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12015.php">Ralph Castain: "Re: [OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12013.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12015.php">Ralph Castain: "Re: [OMPI users] hostfiles"</a>
<li><strong>Reply:</strong> <a href="12015.php">Ralph Castain: "Re: [OMPI users] hostfiles"</a>
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
