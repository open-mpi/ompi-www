<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 18 18:19:59 2006" -->
<!-- isoreceived="20060318231959" -->
<!-- sent="Sat, 18 Mar 2006 18:19:52 -0500" -->
<!-- isosent="20060318231952" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] app contexts broken on trunk?" -->
<!-- id="C4E3FF8B-5F17-41B3-9A4D-461154C89CAF_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-18 18:19:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Previous message:</strong> <a href="0763.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Reply:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think something is wrong with app contexts on the trunk.  The  
<br>
example below seems to run uptime twice rather than running uptime  
<br>
then hostname as I would expect.
<br>
<p>[18:18] brbarret_at_frood:ttyp1 ~% mpirun -np 1 uptime : -np 1 hostname
<br>
18:18  up 12 days,  9:27, 2 users, load averages: 0.02 0.10 0.09
<br>
18:18  up 12 days,  9:27, 2 users, load averages: 0.02 0.10 0.09
<br>
[18:18] brbarret_at_frood:ttyp1 ~%
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Previous message:</strong> <a href="0763.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Reply:</strong> <a href="0765.php">Ralph Castain: "Re: [OMPI devel] app contexts broken on trunk?"</a>
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
