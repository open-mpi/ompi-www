<?
$subject_val = "Re: [OMPI users] 2 to 1 oversubscription";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 21:28:16 2009" -->
<!-- isoreceived="20090714012816" -->
<!-- sent="Mon, 13 Jul 2009 18:28:05 -0700" -->
<!-- isosent="20090714012805" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 to 1 oversubscription" -->
<!-- id="25E9AC01-884C-46CC-BDDD-F1C6542EF2CF_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5F6A59F2-6561-4A6B-9699-4EA0540EE47D_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 to 1 oversubscription<br>
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-13 21:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9946.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9944.php">Neil Ludban: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9923.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Robert,
<br>
<p>I got inspired by your question to run a few more tests.  They are  
<br>
crude, and I don't have actual cpu timing information because of a  
<br>
library mismatch.  However:
<br>
<p>Setup:
<br>
Xserve, 2x2.26 GHz Quad-core Intel Xeon
<br>
6.0 Gb memory 1067 MHz DDR3
<br>
Mac OS X 10.5.6
<br>
<p>Nodes are connected with a dedicated gigabit ethernet switch.
<br>
<p>I'm running the MITgcm, a nonhydrostatic global circulation model.   
<br>
The grid size is modest: 10x150x1600, so bear that in mind.  Message  
<br>
passing is on the dimension that is 150x10, and typically is 3 grid  
<br>
cells in either direction.  I'm not sure how many variables are  
<br>
passed, but I would guess on the order of 24.
<br>
<p>I turned off all the I/O I knew of to reduce disk latency.
<br>
<p>1 node:  8 processes:              54 minutes
<br>
1 node: 16 processes:             40 minutes (oversubscribed)
<br>
2 nodes, 16 processes:            29 minutes
<br>
<p>So, oversubscribing was faster (in this case), but it didn't double  
<br>
the speed.  Certainly spreading the load to another node was much  
<br>
faster.
<br>
<p>I haven't had a chance to implement Warner's suggestion of turning  
<br>
hyperthreading off to see what affect that has on the speed.
<br>
<p>Cheers,  Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9946.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9944.php">Neil Ludban: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9923.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
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
