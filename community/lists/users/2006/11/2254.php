<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 11:17:08 2006" -->
<!-- isoreceived="20061129161708" -->
<!-- sent="Wed, 29 Nov 2006 09:16:50 -0700" -->
<!-- isosent="20061129161650" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F60CE_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Pernode request" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 11:16:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2255.php">Galen Shipman: "[OMPI users] For Open MPI + BPROC users"</a>
<li><strong>Previous message:</strong> <a href="2253.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe in reply to:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2344.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I agree with what you stated in points 1-4.  That is what we are looking
<br>
for.
<br>
I understand your point now about the non-MPI users too. :-)
<br>
<p>Thanks,
<br>
-cdm
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Wednesday, November 29, 2006 8:01 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Pernode request
<br>
<p>Hi Chris
<br>
<p>Thanks for the patience and the clarification - much appreciated. In
<br>
fact, I have someone that needs to learn more about the code base, so I
<br>
think I will assign this to him. At the least, he will have to learn a
<br>
lot more about the mapper!
<br>
<p>I have no problem with modifying the pernode behavior to deal with the
<br>
case of someone specifying -np as you describe. It would be relatively
<br>
easy to check. As I understand it, you want the behavior to be:
<br>
<p>1. if no -np is specified, launch one proc/node across entire allocation
<br>
<p>2. if -np n is specified AND n is less than the number of allocated
<br>
nodes, then launch one proc/node up to the specified number. Of course,
<br>
this is identical to just doing -np n -bynode, but that's immaterial.
<br>
;-)
<br>
<p>3. if -np n is specified AND n is greater than the number of allocated
<br>
nodes, error message and exit
<br>
<p>4. add a -npernode n option that launches n procs/node, subject to the
<br>
same tests above.
<br>
<p>Can you confirm?
<br>
<p>Finally, I think you misunderstood my comment about the MPI folks. Our
<br>
non-MPI users couldn't care less about commonality of command line
<br>
arguments across MPI implementations. Hence, I leave issues in that area
<br>
to the MPI members of the team - they are the ones that decide how to
<br>
deal with the myriad of different option syntaxes in the MPI community.
<br>
<p>Gives me too much of a headache! :-)
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2255.php">Galen Shipman: "[OMPI users] For Open MPI + BPROC users"</a>
<li><strong>Previous message:</strong> <a href="2253.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe in reply to:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2344.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
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
