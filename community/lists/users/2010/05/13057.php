<?
$subject_val = "[OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 16 13:32:38 2010" -->
<!-- isoreceived="20100516173238" -->
<!-- sent="Sun, 16 May 2010 18:32:18 +0100 (BST)" -->
<!-- isosent="20100516173218" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)" -->
<!-- id="alpine.LRH.2.00.1005161829490.20564_at_dubris.phyast.dur.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)<br>
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-16 13:32:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13058.php">Scott Atchley: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Previous message:</strong> <a href="13056.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13058.php">Scott Atchley: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Reply:</strong> <a href="13058.php">Scott Atchley: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Reply:</strong> <a href="13059.php">Barrett, Brian W: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Maybe reply:</strong> <a href="13060.php">Jaime Perea: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One of the big cosmology codes is Gadget-3 (Springel et al).
<br>
The code uses MPI for interprocess communications. At the ICC in Durham we use 
<br>
OpenMPI and have been using it for ~3 years.
<br>
At the ICC Gadget-3 is one of the major research codes and we have been running 
<br>
it since it was written and we have observed something which is very worrying:
<br>
<p>When running over gigabit using -mca btl tcp,self,sm  the code runs alright, 
<br>
which is good as the largest part of our cluster is over gigabit, and as 
<br>
Gadget-3 scales rather well, the penalty for running over gigabit is not 
<br>
prohibitive.
<br>
We also have a myrinet cluster and  on  there larger runs freeze. However as 
<br>
the gigabit cluster was available we have not really investigated this until 
<br>
just now.
<br>
<p>We currently have access to an infiniband cluster and we found the following: 
<br>
in a specfic set of blocked sendrecv section it seems to communicate in pairs 
<br>
until in the end there is only one pair left  processes where it deadlocks. 
<br>
For that pair the processes have setup 
<br>
communications, they know about each other's IDs, they know what datatype to 
<br>
communicate but never communicate that data. The precise timing in the running 
<br>
is not pinable, i.e. in consecutive runs it does not freeze at the same point 
<br>
in the run. This is using openmpi and it propagated over different versions of 
<br>
openmpi (judging from our myrinet experience).
<br>
<p>I should mention that the communication on either the myrinet cluster or the 
<br>
infiniband cluster do work properly as runs of other codes (castep, b_eff) 
<br>
show.
<br>
<p>So my question(s) is (are): has anybody had similar experiences and/or would 
<br>
anybody have an idea why this could happen and/or what we could do about it?
<br>
<p>Lydia
<br>
<p><p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13058.php">Scott Atchley: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Previous message:</strong> <a href="13056.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13058.php">Scott Atchley: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Reply:</strong> <a href="13058.php">Scott Atchley: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Reply:</strong> <a href="13059.php">Barrett, Brian W: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Maybe reply:</strong> <a href="13060.php">Jaime Perea: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
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
