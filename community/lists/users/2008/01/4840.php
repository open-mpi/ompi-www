<?
$subject_val = "[OMPI users] odd network behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 19:54:41 2008" -->
<!-- isoreceived="20080116005441" -->
<!-- sent="Tue, 15 Jan 2008 19:54:33 -0500" -->
<!-- isosent="20080116005433" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="[OMPI users] odd network behavior" -->
<!-- id="c84311bb0801151654n3d3eb7f5r9d5e19e8dcef4c5d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] odd network behavior<br>
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 19:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4841.php">Barry Rountree: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4839.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4841.php">Barry Rountree: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Reply:</strong> <a href="4841.php">Barry Rountree: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Reply:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Reply:</strong> <a href="4853.php">Jeff Squyres: "Re: [OMPI users] odd network behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-MPI Community:
<br>
<p>I have a 3 node cluster, each a dual opteron workstation running
<br>
OpenSUSE 10.1 64-bit.  The node names are LT, SGT and PFC.  When I
<br>
start an mpirun job from either SGT or PFC, things work as they are
<br>
supposed to.  However, if I start the same job from LT, the jobs hangs
<br>
at SGT - this was confirmed by mpirun --np 6 --hostfile &lt;correct
<br>
hostfile for the three nodes&gt; hostname, which gives only LT; LT; PFC;
<br>
PFC (and then hangs) when started from LT (this same command started
<br>
from either of the other nodes give two of each of the three hostnames
<br>
and terminates normally).  The nfs share drive is physically located
<br>
on LT.
<br>
<p>I have been using ssh to get to either SGT or PFC from a terminal
<br>
opened originally on LT to run jobs.  I can ssh from any node to any
<br>
other node.
<br>
<p>I have attached a gzipped tar archive of the three ifconfig results
<br>
(for each node) and the results of ompi_info --all command as
<br>
requested in the &quot;Getting Help&quot; section.  I was unable to locate a
<br>
config.log file in the shared ompi directory.
<br>
<p>Any assistance on this matter would be appreciated,
<br>
<p>Mark E. Kosmowski
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4841.php">Barry Rountree: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4839.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4841.php">Barry Rountree: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Reply:</strong> <a href="4841.php">Barry Rountree: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Reply:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Reply:</strong> <a href="4853.php">Jeff Squyres: "Re: [OMPI users] odd network behavior"</a>
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
