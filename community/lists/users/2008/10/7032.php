<?
$subject_val = "[OMPI users] Working with a CellBlade cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 19 04:32:19 2008" -->
<!-- isoreceived="20081019083219" -->
<!-- sent="Sun, 19 Oct 2008 10:32:13 +0200" -->
<!-- isosent="20081019083213" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="grodid_at_[hidden]" -->
<!-- subject="[OMPI users] Working with a CellBlade cluster" -->
<!-- id="Pine.LNX.4.58.0810191007140.23339_at_lxplus252.cern.ch" -->
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
<strong>Subject:</strong> [OMPI users] Working with a CellBlade cluster<br>
<strong>From:</strong> Gilbert Grosdidier (<em>grodid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-19 04:32:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Previous message:</strong> <a href="7031.php">Mostyn Lewis: "[OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7080.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7080.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Working with a CellBlade cluster (QS22), the requirement is to have one
<br>
instance of the executable running on each socket of the blade (there are 2
<br>
sockets). The application is of the 'domain decomposition' type, and each
<br>
instance is required to often send/receive data with both the remote blades and
<br>
the neighbor socket.
<br>
<p>&nbsp;Question is : which specification must be used for the mca btl component
<br>
to force 1) shmem type messages when communicating with this neighbor socket,
<br>
while 2) using openib to communicate with the remote blades ?
<br>
Is '-mca btl sm,openib,self' suitable for this ? 
<br>
<p>&nbsp;Also, which debug flags could be used to crosscheck that the messages are
<br>
_actually_ going thru the right channel for a given channel, please ?
<br>
<p>&nbsp;We are currently using OpenMPI 1.2.5 shipped with RHEL5.2 (ppc64).
<br>
Which version do you think is currently the most optimised for these
<br>
processors and problem type ? Should we go towards OpenMPI 1.2.8 instead ?
<br>
Or even try some OpenMPI 1.3 nightly build ?
<br>
<p>&nbsp;Thanks in advance for your help,                  Gilbert.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Previous message:</strong> <a href="7031.php">Mostyn Lewis: "[OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7080.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7080.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
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
