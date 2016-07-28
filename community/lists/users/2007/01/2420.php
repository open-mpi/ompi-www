<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 15:52:36 2007" -->
<!-- isoreceived="20070102205236" -->
<!-- sent="Tue, 2 Jan 2007 12:52:17 -0800" -->
<!-- isosent="20070102205217" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="05a301c72eaf$e3cdac50$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="559847D38F12F742B0EE27727596F42901A2F996_at_NDJSEVS14.ndc.nasa.gov" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 15:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2421.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2419.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="2415.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "[OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2423.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2423.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ompi failing on mx onlyHi, Gary-
<br>
This looks like a config problem, and not a code problem yet.  Could you send the output of mx_info from node-1 and from node-2?  Also, forgive me counter-asking a possibly dumb OMPI question, but is &quot;-x LD_LIBRARY_PATH&quot; really what you want, as opposed to &quot;-x LD_LIBRARY_PATH=${LD_LIBRARY_PATH}&quot; ?  (I would not be surprised if not specifying a value defaults to this behavior, but have to ask).
<br>
<p>Also, have you tried MX MTL as opposed to BTL?  --mca pml cm --mca mtl mx,self  (it looks like you did)
<br>
<p>&quot;[node-2:10464] mx_connect fail for node-2:0 with key aaaaffff &quot; makes it look like your fabric may not be fully mapped or that you may have a down link.
<br>
<p>thanks,
<br>
-reese
<br>
Myricom, Inc.
<br>
<p><p>&nbsp;&nbsp;I was initially using 1.1.2 and moved to 1.2b2 because of a hang on MPI_Bcast() which 1.2b2 reports to fix, and seemed to have done so. My compute nodes are 2 dual core xeons on myrinet with mx. The problem is trying to get ompi running on mx only. My machine file is as follows .
<br>
<p>&nbsp;&nbsp;node-1 slots=4 max-slots=4 
<br>
&nbsp;&nbsp;node-2 slots=4 max-slots=4 
<br>
&nbsp;&nbsp;node-3 slots=4 max-slots=4 
<br>
<p>&nbsp;&nbsp;'mpirun' with the minimum number of processes in order to get the error ... 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH --hostfile ./h1-3 -np 2 --mca btl mx,self ./cpi 
<br>
<p>&nbsp;&nbsp;I don't believe there'a anything wrong w/ the hardware as I can ping on mx between this failed node and the master fine. So I tried a different set of 3 nodes and I got the same error, it always fails on the 2nd node of any group of nodes I choose.
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2420/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2421.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2419.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="2415.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "[OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2423.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2423.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
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
