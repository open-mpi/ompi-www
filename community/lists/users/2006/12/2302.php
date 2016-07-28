<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  5 16:36:48 2006" -->
<!-- isoreceived="20061205213648" -->
<!-- sent="Tue, 5 Dec 2006 16:35:28 -0500" -->
<!-- isosent="20061205213528" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] running with the dr pml." -->
<!-- id="143CCBCC-AF71-441C-B12D-BC718D7F90FD_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-05 16:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2301.php">Ryan Thompson: "[OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was asked by mirycom to run a test using the data reliability pml.   
<br>
(dr)  I ran it like so:
<br>
<p>$ mpirun  --mca pml dr -np 4 ./xhpl
<br>
<p>Is this the right format for running the dr pml?
<br>
<p>Also it has been running for along time, but produced no output,
<br>
The counters on the gm card are incrementing, (nothing else is  
<br>
running on the node)
<br>
And i see the two processes (duel cpu nodes 2 nodes, total 4 procs)  
<br>
consuming cpu time.
<br>
<p>Is there any gotchas on using the dr pml?
<br>
also if the dr pml is finding errors, and is resending data, can i  
<br>
have it tell me when that happens?  Like a verbose mode?
<br>
<p>I also tried the following (just praying)  That it might work,
<br>
<p>$ mpirun  --mca pml dr --mca btl ^gm -np 4 ./xhpl
<br>
<p>I still get no output to the screen.
<br>
<p>This is on G5 xserve, with 1.2b1 OMPI.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2301.php">Ryan Thompson: "[OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
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
