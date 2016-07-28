<?
$subject_val = "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 09:48:26 2010" -->
<!-- isoreceived="20100517134826" -->
<!-- sent="Mon, 17 May 2010 07:48:08 -0600" -->
<!-- isosent="20100517134808" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)" -->
<!-- id="2D094A28F6B31745BE7B844EA0FF6096306E8DCC0A_at_ES04SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1005161829490.20564_at_dubris.phyast.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 09:48:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13060.php">Jaime Perea: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Previous message:</strong> <a href="13058.php">Scott Atchley: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>In reply to:</strong> <a href="13057.php">Lydia Heck: "[OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13060.php">Jaime Perea: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if it's the same problem or not (and we haven't tested on Myrinet), but we have one code which frequently hangs on smallish (64 node) runs.  I unfortunately haven't been able to deep dive into the problem, but the hang is in a bcast call, where peers are doing sendrecv calls.  All but one pair of processes progress fine, that one pair (which seems to differ each run) never completes the sendrecv.  It appears that one half completes the send/recv part of the operation, but the other direction never does complete.  It's a big enough message that the rendezvous protocol is in use, and the sender thinks its sent the request, and the receiver thinks it hasn't received the request.
<br>
<p>Unfortunately, I haven't been able to look into the problem in any detail beyond that.  Other projects seem to be consuming all my time lately...
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
________________________________________
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Lydia Heck [lydia.heck_at_[hidden]]
Sent: Sunday, May 16, 2010 11:32 AM
To: users_at_[hidden]
Subject: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)
One of the big cosmology codes is Gadget-3 (Springel et al).
The code uses MPI for interprocess communications. At the ICC in Durham we use
OpenMPI and have been using it for ~3 years.
At the ICC Gadget-3 is one of the major research codes and we have been running
it since it was written and we have observed something which is very worrying:
When running over gigabit using -mca btl tcp,self,sm  the code runs alright,
which is good as the largest part of our cluster is over gigabit, and as
Gadget-3 scales rather well, the penalty for running over gigabit is not
prohibitive.
We also have a myrinet cluster and  on  there larger runs freeze. However as
the gigabit cluster was available we have not really investigated this until
just now.
We currently have access to an infiniband cluster and we found the following:
in a specfic set of blocked sendrecv section it seems to communicate in pairs
until in the end there is only one pair left  processes where it deadlocks.
For that pair the processes have setup
communications, they know about each other's IDs, they know what datatype to
communicate but never communicate that data. The precise timing in the running
is not pinable, i.e. in consecutive runs it does not freeze at the same point
in the run. This is using openmpi and it propagated over different versions of
openmpi (judging from our myrinet experience).
I should mention that the communication on either the myrinet cluster or the
infiniband cluster do work properly as runs of other codes (castep, b_eff)
show.
So my question(s) is (are): has anybody had similar experiences and/or would
anybody have an idea why this could happen and/or what we could do about it?
Lydia
------------------------------------------
Dr E L  Heck
University of Durham
Institute for Computational Cosmology
Ogden Centre
Department of Physics
South Road
DURHAM, DH1 3LE
United Kingdom
e-mail: lydia.heck_at_[hidden]
Tel.: + 44 191 - 334 3628
Fax.: + 44 191 - 334 3645
___________________________________________
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13060.php">Jaime Perea: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Previous message:</strong> <a href="13058.php">Scott Atchley: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>In reply to:</strong> <a href="13057.php">Lydia Heck: "[OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13060.php">Jaime Perea: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
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
